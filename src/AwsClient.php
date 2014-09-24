<?php
namespace Aws;

use Aws\Common\Api\Service;
use Aws\Common\Compat;
use Aws\Common\Credentials\CredentialsInterface;
use Aws\Common\Paginator\ResourceIterator;
use Aws\Common\Paginator\ResultPaginator;
use Aws\Common\Signature\SignatureInterface;
use Aws\Common\Waiter\ResourceWaiter;
use Aws\Common\Waiter\Waiter;
use GuzzleHttp\Command\AbstractClient;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Command\CommandTransaction;
use GuzzleHttp\Model\FutureModel;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Ring\FutureInterface;
use GuzzleHttp\Ring\Core;

/**
 * Default AWS client implementation
 */
class AwsClient extends AbstractClient implements AwsClientInterface
{
    /** @var CredentialsInterface AWS credentials */
    private $credentials;

    /** @var SignatureInterface Signature implementation of the service */
    private $signature;

    /** @var array Default command options */
    private $defaults;

    /** @var string */
    private $region;

    /** @var string */
    private $endpoint;

    /** @var Service */
    private $api;

    /** @var string */
    private $commandException;

    /** @var callable */
    private $errorParser;

    /** @var callable */
    private $serializer;

    /**
     * The AwsClient constructor requires the following constructor options:
     *
     * - api: The Api object used to interact with a web service
     * - credentials: CredentialsInterface object used when signing.
     * - client: {@see GuzzleHttp\Client} used to send requests.
     * - signature: string representing the signature version to use (e.g., v4)
     * - region: (optional) Region used to interact with the service
     * - error_parser: A callable that parses response exceptions
     * - exception_class: (optional) A specific exception class to throw that
     *   extends from {@see Aws\AwsException}.
     * - serializer: callable used to serialize a request for a provided
     *   CommandTransaction argument. The callable must return a
     *   RequestInterface object.
     *
     * @param array $config Configuration options
     *
     * @throws \InvalidArgumentException if any required options are missing
     */
    public function __construct(array $config)
    {
        static $required = ['api', 'credentials', 'client', 'signature',
                            'error_parser', 'endpoint', 'serializer'];

        foreach ($required as $r) {
            if (!isset($config[$r])) {
                throw new \InvalidArgumentException("$r is a required option");
            }
        }

        $this->serializer = $config['serializer'];
        $this->api = $config['api'];
        $this->endpoint = $config['endpoint'];
        $this->credentials = $config['credentials'];
        $this->signature = $config['signature'];
        $this->errorParser = $config['error_parser'];
        $this->region = isset($config['region']) ? $config['region'] : null;
        $this->defaults = isset($config['defaults']) ? $config['defaults'] : [];
        $this->commandException = isset($config['exception_class'])
            ? $config['exception_class']
            : 'Aws\AwsException';

        parent::__construct($config['client']);
    }

    /**
     * Creates a new client based on the provided configuration options.
     *
     * @param array $config Configuration options
     *
     * @return static
     */
    public static function factory(array $config = [])
    {
        // Convert SDKv2 configuration options to SDKv3 configuration options.
        (new Compat)->convertConfig($config);

        // Determine the service being called
        $class = get_called_class();
        $service = substr($class, strrpos($class, '\\') + 1, -6);

        // Create the client using the Sdk class
        return (new Sdk)->getClient($service, $config);
    }

    public function getCredentials()
    {
        return $this->credentials;
    }

    public function getSignature()
    {
        return $this->signature;
    }

    public function getEndpoint()
    {
        return $this->endpoint;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getApi()
    {
        return $this->api;
    }

    /**
     * Executes an AWS command.
     *
     * @param CommandInterface $command Command to execute
     *
     * @return mixed Returns the result of the command
     * @throws AwsException when an error occurs during transfer
     */
    public function execute(CommandInterface $command)
    {
        try {
            return parent::execute($command);
        } catch (AwsException $e) {
            throw $e;
        } catch (\Exception $e) {
            // Wrap other uncaught exceptions for consistency
            $exceptionClass = $this->commandException;
            throw new $exceptionClass(
                sprintf('Uncaught exception while executing %s::%s - %s',
                    get_class($this),
                    $command->getName(),
                    $e->getMessage()),
                new CommandTransaction($this, $command),
                $e
            );
        }
    }

    public function getCommand($name, array $args = [])
    {
        $command = null;
        if (isset($this->api['operations'][$name])) {
            $command = $this->api['operations'][$name];
        } else {
            $name = ucfirst($name);
            if (isset($this->api['operations'][$name])) {
                $command = $this->api['operations'][$name];
            }
        }

        if (!$command) {
            throw new \InvalidArgumentException("Operation not found: $name");
        }

        if (isset($args['@future'])) {
            $future = $args['@future'];
            unset($args['@future']);
        } else {
            $future = false;
        }

        return new AwsCommand(
            $name,
            $args + $this->defaults,
            $this->api,
            ['emitter' => clone $this->getEmitter(), 'future' => $future]
        );
    }

    public function getIterator($name, array $args = [], array $config = [])
    {
        $config += $this->api->getPaginatorConfig($name);

        if ($config['result_key']) {
            return new ResourceIterator(
                new ResultPaginator($this, $name, $args, $config),
                $config
            );
        }

        throw new \UnexpectedValueException("There are no resources to iterate "
            . "for the {$name} operation of {$this->api['serviceFullName']}.");
    }

    public function getPaginator($name, array $args = [], array $config = [])
    {
        $config += $this->api->getPaginatorConfig($name);
        if ($config['output_token'] && $config['input_token']) {
            return new ResultPaginator($this, $name, $args, $config);
        }

        throw new \UnexpectedValueException("Results for the {$name} operation "
            . "of {$this->api['serviceFullName']} cannot be paginated.");
    }

    public function getWaiter($name, array $args = [], array $config = [])
    {
        $config += $this->api->getWaiterConfig($name);

        return new ResourceWaiter($this, $name, $args, $config);
    }

    public function waitUntil($name, array $args = [], array $config = [])
    {
        $waiter = is_callable($name)
            ? new Waiter($name, $config + $args)
            : $this->getWaiter($name, $args, $config);

        $waiter->wait();
    }

    /**
     * Creates AWS specific exceptions.
     *
     * {@inheritdoc}
     *
     * @return AwsException
     */
    public function createCommandException(CommandTransaction $transaction)
    {
        // Throw AWS exceptions as-is
        if ($transaction->exception instanceof AwsException) {
            return $transaction->exception;
        }

        $exceptionClass = $this->commandException;
        $response = $transaction->exception instanceof RequestException
            ? $transaction->exception->getResponse()
            : null;

        if (!$response) {
            $transaction->context->set('aws_error', []);
            $serviceError = $transaction->exception->getMessage();
        } else {
            $parser = $this->errorParser;
            $transaction->context['aws_error'] = $parser($response);
            $serviceError =  $transaction->context->getPath('aws_error/code')
                . ' (' . $transaction->context->getPath('aws_error/type') . ' error): '
                . $transaction->context->getPath('aws_error/message');
        }

        return new $exceptionClass(
            sprintf('Error executing %s::%s() on "%s"; %s',
                get_class($this),
                lcfirst($transaction->command->getName()),
                $transaction->exception->getRequest()->getUrl(),
                $serviceError),
            $transaction,
            $transaction->exception
        );
    }

    protected function createFutureResult(CommandTransaction $transaction)
    {
        if (!($transaction->response instanceof FutureInterface)) {
            throw new \RuntimeException('Must be a FutureInterface. Found '
                . Core::describeType($transaction->response));
        }

        return new FutureModel(
            // Deref function derefs the response which populates the result.
            function () use ($transaction) {
                $transaction->response = $transaction->response->deref();
                return $transaction->result;
            },
            // Cancel function just proxies to the response's cancel function.
            function () use ($transaction) {
                return $transaction->response->cancel();
            }
        );
    }

    protected function serializeRequest(CommandTransaction $trans)
    {
        $fn = $this->serializer;
        return $fn($trans);
    }
}