<?php
// This file was auto-generated from sdk-root/src/data/glacier/2012-06-01/examples-1.json
return [ 'version' => '1.0', 'examples' => [ 'AbortMultipartUpload' => [ [ 'input' => [ 'accountId' => '-', 'uploadId' => '19gaRezEXAMPLES6Ry5YYdqthHOC_kGRCT03L9yetr220UmPtBYKk-OssZtLqyFu7sY1_lR7vgFuJV6NtcV5zpsJ', 'vaultName' => 'my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example deletes an in-progress multipart upload to a vault named my-vault:', 'id' => 'f3d907f6-e71c-420c-8f71-502346a2c48a', 'title' => 'To abort a multipart upload identified by the upload ID', ], ], 'AbortVaultLock' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example aborts the vault locking process if the vault lock is not in the Locked state for the vault named examplevault.', 'id' => 'to-abort-a-vault-lock-1481839357947', 'title' => 'To abort a vault lock', ], ], 'AddTagsToVault' => [ [ 'input' => [ 'Tags' => [ 'examplekey1' => 'examplevalue1', 'examplekey2' => 'examplevalue2', ], 'accountId' => '-', 'vaultName' => 'my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example adds two tags to a my-vault.', 'id' => 'add-tags-to-vault-post-tags-add-1481663457694', 'title' => 'To add tags to a vault', ], ], 'CompleteMultipartUpload' => [ [ 'input' => [ 'accountId' => '-', 'archiveSize' => '3145728', 'checksum' => '9628195fcdbcbbe76cdde456d4646fa7de5f219fb39823836d81f0cc0e18aa67', 'uploadId' => '19gaRezEXAMPLES6Ry5YYdqthHOC_kGRCT03L9yetr220UmPtBYKk-OssZtLqyFu7sY1_lR7vgFuJV6NtcV5zpsJ', 'vaultName' => 'my-vault', ], 'output' => [ 'archiveId' => 'NkbByEejwEggmBz2fTHgJrg0XBoDfjP4q6iu87-TjhqG6eGoOY9Z8i1_AUyUsuhPAdTqLHy8pTl5nfCFJmDl2yEZONi5L26Omw12vcs01MNGntHEQL8MBfGlqrEXAMPLEArchiveId', 'checksum' => '9628195fcdbcbbe76cdde456d4646fa7de5f219fb39823836d81f0cc0e18aa67', 'location' => '/111122223333/vaults/my-vault/archives/NkbByEejwEggmBz2fTHgJrg0XBoDfjP4q6iu87-TjhqG6eGoOY9Z8i1_AUyUsuhPAdTqLHy8pTl5nfCFJmDl2yEZONi5L26Omw12vcs01MNGntHEQL8MBfGlqrEXAMPLEArchiveId', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example completes a multipart upload for a 3 MiB archive.', 'id' => '272aa0b8-e44c-4a64-add2-ad905a37984d', 'title' => 'To complete a multipart upload', ], ], 'CompleteVaultLock' => [ [ 'input' => [ 'accountId' => '-', 'lockId' => 'AE863rKkWZU53SLW5be4DUcW', 'vaultName' => 'example-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example completes the vault locking process by transitioning the vault lock from the InProgress state to the Locked state.', 'id' => 'to-complete-a-vault-lock-1481839721312', 'title' => 'To complete a vault lock', ], ], 'CreateVault' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'my-vault', ], 'output' => [ 'location' => '/111122223333/vaults/my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The following example creates a new vault named my-vault.', 'id' => '1dc0313d-ace1-4e6c-9d13-1ec7813b14b7', 'title' => 'To create a new vault', ], ], 'DeleteArchive' => [ [ 'input' => [ 'accountId' => '-', 'archiveId' => 'NkbByEejwEggmBz2fTHgJrg0XBoDfjP4q6iu87-TjhqG6eGoOY9Z8i1_AUyUsuhPAdTqLHy8pTl5nfCFJmDl2yEZONi5L26Omw12vcs01MNGntHEQL8MBfGlqrEXAMPLEArchiveId', 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example deletes the archive specified by the archive ID.', 'id' => 'delete-archive-1481667809463', 'title' => 'To delete an archive', ], ], 'DeleteVault' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example deletes a vault named my-vault:', 'id' => '7f7f000b-4bdb-40d2-91e6-7c902f60f60f', 'title' => 'To delete a vault', ], ], 'DeleteVaultAccessPolicy' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example deletes the access policy associated with the vault named examplevault.', 'id' => 'to-delete-the-vault-access-policy-1481840424677', 'title' => 'To delete the vault access policy', ], ], 'DeleteVaultNotifications' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example deletes the notification configuration set for the vault named examplevault.', 'id' => 'to-delete-the-notification-configuration-set-for-a-vault-1481840646090', 'title' => 'To delete the notification configuration set for a vault', ], ], 'DescribeJob' => [ [ 'input' => [ 'accountId' => '-', 'jobId' => 'zbxcm3Z_3z5UkoroF7SuZKrxgGoDc3RloGduS7Eg-RO47Yc6FxsdGBgf_Q2DK5Ejh18CnTS5XW4_XqlNHS61dsO4Cn', 'vaultName' => 'my-vault', ], 'output' => [ 'Action' => 'InventoryRetrieval', 'Completed' => false, 'CreationDate' => '2015-07-17T20:23:41.616Z', 'InventoryRetrievalParameters' => [ 'Format' => 'JSON', ], 'JobId' => 'zbxcm3Z_3z5UkoroF7SuZKrxgGoDc3RloGduS7Eg-RO47Yc6FxsdGBgf_Q2DK5Ejh18CnTS5XW4_XqlNHS61dsO4CnMW', 'StatusCode' => 'InProgress', 'VaultARN' => 'arn:aws:glacier:us-west-2:0123456789012:vaults/my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example returns information about the previously initiated job specified by the job ID.', 'id' => 'to-get-information-about-a-job-you-previously-initiated-1481840928592', 'title' => 'To get information about a previously initiated job', ], ], 'DescribeVault' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'my-vault', ], 'output' => [ 'CreationDate' => '2016-09-23T19:27:18.665Z', 'NumberOfArchives' => 0, 'SizeInBytes' => 0, 'VaultARN' => 'arn:aws:glacier:us-west-2:111122223333:vaults/my-vault', 'VaultName' => 'my-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example retrieves data about a vault named my-vault.', 'id' => '3c1c6e9d-f5a2-427a-aa6a-f439eacfc05f', 'title' => 'To retrieve information about a vault', ], ], 'GetDataRetrievalPolicy' => [ [ 'input' => [ 'accountId' => '-', ], 'output' => [ 'Policy' => [ 'Rules' => [ [ 'BytesPerHour' => 10737418240, 'Strategy' => 'BytesPerHour', ], ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example returns the current data retrieval policy for the account.', 'id' => 'to-get-the-current-data-retrieval-policy-for-the-account-1481851580439', 'title' => 'To get the current data retrieval policy for an account', ], ], 'GetJobOutput' => [ [ 'input' => [ 'accountId' => '-', 'jobId' => 'zbxcm3Z_3z5UkoroF7SuZKrxgGoDc3RloGduS7Eg-RO47Yc6FxsdGBgf_Q2DK5Ejh18CnTS5XW4_XqlNHS61dsO4CnMW', 'range' => '', 'vaultName' => 'my-vaul', ], 'output' => [ 'acceptRanges' => 'bytes', 'body' => 'inventory-data', 'contentType' => 'application/json', 'status' => 200, ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example downloads the output of a previously initiated inventory retrieval job that is identified by the job ID.', 'id' => 'to-get-the-output-of-a-previously-initiated-job-1481848550859', 'title' => 'To get the output of a previously initiated job', ], ], 'GetVaultAccessPolicy' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'example-vault', ], 'output' => [ 'policy' => [ 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"Define-owner-access-rights","Effect":"Allow","Principal":{"AWS":"arn:aws:iam::999999999999:root"},"Action":"glacier:DeleteArchive","Resource":"arn:aws:glacier:us-west-2:999999999999:vaults/examplevault"}]}', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example retrieves the access-policy set on the vault named example-vault.', 'id' => 'to--get-the-access-policy-set-on-the-vault-1481936004590', 'title' => 'To get the access-policy set on the vault', ], ], 'GetVaultLock' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'output' => [ 'CreationDate' => 'exampledate', 'ExpirationDate' => 'exampledate', 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"Define-vault-lock","Effect":"Deny","Principal":{"AWS":"arn:aws:iam::999999999999:root"},"Action":"glacier:DeleteArchive","Resource":"arn:aws:glacier:us-west-2:999999999999:vaults/examplevault","Condition":{"NumericLessThanEquals":{"glacier:ArchiveAgeinDays":"365"}}}]}', 'State' => 'InProgress', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example retrieves the attributes from the lock-policy subresource set on the vault named examplevault.', 'id' => 'to-retrieve-vault-lock-policy-related-attributes-that-are-set-on-a-vault-1481851363097', 'title' => 'To retrieve vault lock-policy related attributes that are set on a vault', ], ], 'GetVaultNotifications' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'my-vault', ], 'output' => [ 'vaultNotificationConfig' => [ 'Events' => [ 'InventoryRetrievalCompleted', 'ArchiveRetrievalCompleted', ], 'SNSTopic' => 'arn:aws:sns:us-west-2:0123456789012:my-vault', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example retrieves the notification-configuration for the vault named my-vault.', 'id' => 'to-get-the-notification-configuration-for-the-specified-vault-1481918746677', 'title' => 'To get the notification-configuration for the specified vault', ], ], 'InitiateJob' => [ [ 'input' => [ 'accountId' => '-', 'jobParameters' => [ 'Description' => 'My inventory job', 'Format' => 'CSV', 'SNSTopic' => 'arn:aws:sns:us-west-2:111111111111:Glacier-InventoryRetrieval-topic-Example', 'Type' => 'inventory-retrieval', ], 'vaultName' => 'examplevault', ], 'output' => [ 'jobId' => ' HkF9p6o7yjhFx-K3CGl6fuSm6VzW9T7esGQfco8nUXVYwS0jlb5gq1JZ55yHgt5vP54ZShjoQzQVVh7vEXAMPLEjobID', 'location' => '/111122223333/vaults/examplevault/jobs/HkF9p6o7yjhFx-K3CGl6fuSm6VzW9T7esGQfco8nUXVYwS0jlb5gq1JZ55yHgt5vP54ZShjoQzQVVh7vEXAMPLEjobID', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example initiates an inventory-retrieval job for the vault named examplevault.', 'id' => 'to-initiate-an-inventory-retrieval-job-1482186883826', 'title' => 'To initiate an inventory-retrieval job', ], ], 'InitiateMultipartUpload' => [ [ 'input' => [ 'accountId' => '-', 'partSize' => '1048576', 'vaultName' => 'my-vault', ], 'output' => [ 'location' => '/111122223333/vaults/my-vault/multipart-uploads/19gaRezEXAMPLES6Ry5YYdqthHOC_kGRCT03L9yetr220UmPtBYKk-OssZtLqyFu7sY1_lR7vgFuJV6NtcV5zpsJ', 'uploadId' => '19gaRezEXAMPLES6Ry5YYdqthHOC_kGRCT03L9yetr220UmPtBYKk-OssZtLqyFu7sY1_lR7vgFuJV6NtcV5zpsJ', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example initiates a multipart upload to a vault named my-vault with a part size of 1 MiB (1024 x 1024 bytes) per file.', 'id' => '72f2db19-3d93-4c74-b2ed-38703baacf49', 'title' => 'To initiate a multipart upload', ], ], 'InitiateVaultLock' => [ [ 'input' => [ 'accountId' => '-', 'policy' => [ 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"Define-vault-lock","Effect":"Deny","Principal":{"AWS":"arn:aws:iam::999999999999:root"},"Action":"glacier:DeleteArchive","Resource":"arn:aws:glacier:us-west-2:999999999999:vaults/examplevault","Condition":{"NumericLessThanEquals":{"glacier:ArchiveAgeinDays":"365"}}}]}', ], 'vaultName' => 'my-vault', ], 'output' => [ 'lockId' => 'AE863rKkWZU53SLW5be4DUcW', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example initiates the vault locking process for the vault named my-vault.', 'id' => 'to-initiate-the-vault-locking-process-1481919693394', 'title' => 'To initiate the vault locking process', ], ], 'ListJobs' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'my-vault', ], 'output' => [ 'JobList' => [ [ 'Action' => 'ArchiveRetrieval', 'ArchiveId' => 'kKB7ymWJVpPSwhGP6ycSOAekp9ZYe_--zM_mw6k76ZFGEIWQX-ybtRDvc2VkPSDtfKmQrj0IRQLSGsNuDp-AJVlu2ccmDSyDUmZwKbwbpAdGATGDiB3hHO0bjbGehXTcApVud_wyDw', 'ArchiveSHA256TreeHash' => '9628195fcdbcbbe76cdde932d4646fa7de5f219fb39823836d81f0cc0e18aa67', 'ArchiveSizeInBytes' => 3145728, 'Completed' => false, 'CreationDate' => '2015-07-17T21:16:13.840Z', 'JobDescription' => 'Retrieve archive on 2015-07-17', 'JobId' => 'l7IL5-EkXyEY9Ws95fClzIbk2O5uLYaFdAYOi-azsX_Z8V6NH4yERHzars8wTKYQMX6nBDI9cMNHzyZJO59-8N9aHWav', 'RetrievalByteRange' => '0-3145727', 'SHA256TreeHash' => '9628195fcdbcbbe76cdde932d4646fa7de5f219fb39823836d81f0cc0e18aa67', 'SNSTopic' => 'arn:aws:sns:us-west-2:0123456789012:my-vault', 'StatusCode' => 'InProgress', 'VaultARN' => 'arn:aws:glacier:us-west-2:0123456789012:vaults/my-vault', ], [ 'Action' => 'InventoryRetrieval', 'Completed' => false, 'CreationDate' => '2015-07-17T20:23:41.616Z', 'InventoryRetrievalParameters' => [ 'Format' => 'JSON', ], 'JobId' => 'zbxcm3Z_3z5UkoroF7SuZKrxgGoDc3RloGduS7Eg-RO47Yc6FxsdGBgf_Q2DK5Ejh18CnTS5XW4_XqlNHS61dsO4CnMW', 'StatusCode' => 'InProgress', 'VaultARN' => 'arn:aws:glacier:us-west-2:0123456789012:vaults/my-vault', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists jobs for the vault named my-vault.', 'id' => 'to-list-jobs-for-a-vault-1481920530537', 'title' => 'To list jobs for a vault', ], ], 'ListMultipartUploads' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'output' => [ 'Marker' => 'null', 'UploadsList' => [ [ 'ArchiveDescription' => 'archive 1', 'CreationDate' => '2012-03-19T23:20:59.130Z', 'MultipartUploadId' => 'xsQdFIRsfJr20CW2AbZBKpRZAFTZSJIMtL2hYf8mvp8dM0m4RUzlaqoEye6g3h3ecqB_zqwB7zLDMeSWhwo65re4C4Ev', 'PartSizeInBytes' => 4194304, 'VaultARN' => 'arn:aws:glacier:us-west-2:012345678901:vaults/examplevault', ], [ 'ArchiveDescription' => 'archive 2', 'CreationDate' => '2012-04-01T15:00:00.000Z', 'MultipartUploadId' => 'nPyGOnyFcx67qqX7E-0tSGiRi88hHMOwOxR-_jNyM6RjVMFfV29lFqZ3rNsSaWBugg6OP92pRtufeHdQH7ClIpSF6uJc', 'PartSizeInBytes' => 4194304, 'VaultARN' => 'arn:aws:glacier:us-west-2:012345678901:vaults/examplevault', ], [ 'ArchiveDescription' => 'archive 3', 'CreationDate' => '2012-03-20T17:03:43.221Z', 'MultipartUploadId' => 'qt-RBst_7yO8gVIonIBsAxr2t-db0pE4s8MNeGjKjGdNpuU-cdSAcqG62guwV9r5jh5mLyFPzFEitTpNE7iQfHiu1XoV', 'PartSizeInBytes' => 4194304, 'VaultARN' => 'arn:aws:glacier:us-west-2:012345678901:vaults/examplevault', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists all the in-progress multipart uploads for the vault named examplevault.', 'id' => 'to-list-all-the-in-progress-multipart-uploads-for-a-vault-1481935250590', 'title' => 'To list all the in-progress multipart uploads for a vault', ], ], 'ListParts' => [ [ 'input' => [ 'accountId' => '-', 'uploadId' => 'OW2fM5iVylEpFEMM9_HpKowRapC3vn5sSL39_396UW9zLFUWVrnRHaPjUJddQ5OxSHVXjYtrN47NBZ-khxOjyEXAMPLE', 'vaultName' => 'examplevault', ], 'output' => [ 'ArchiveDescription' => 'archive description', 'CreationDate' => '2012-03-20T17:03:43.221Z', 'Marker' => 'null', 'MultipartUploadId' => 'OW2fM5iVylEpFEMM9_HpKowRapC3vn5sSL39_396UW9zLFUWVrnRHaPjUJddQ5OxSHVXjYtrN47NBZ-khxOjyEXAMPLE', 'PartSizeInBytes' => 4194304, 'Parts' => [ [ 'RangeInBytes' => '0-4194303', 'SHA256TreeHash' => '01d34dabf7be316472c93b1ef80721f5d4', ], [ 'RangeInBytes' => '4194304-8388607', 'SHA256TreeHash' => '0195875365afda349fc21c84c099987164', ], ], 'VaultARN' => 'arn:aws:glacier:us-west-2:012345678901:vaults/demo1-vault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists all the parts of a multipart upload.', 'id' => 'to-list-the-parts-of-an-archive-that-have-been-uploaded-in-a-multipart-upload-1481921767590', 'title' => 'To list the parts of an archive that have been uploaded in a multipart upload', ], ], 'ListProvisionedCapacity' => [ [ 'input' => [ 'accountId' => '-', ], 'output' => [ 'ProvisionedCapacityList' => [ [ 'CapacityId' => 'zSaq7NzHFQDANTfQkDen4V7z', 'ExpirationDate' => '2016-12-12T00:00:00.000Z', 'StartDate' => '2016-11-11T20:11:51.095Z', ], [ 'CapacityId' => 'yXaq7NzHFQNADTfQkDen4V7z', 'ExpirationDate' => '2017-01-15T00:00:00.000Z', 'StartDate' => '2016-12-13T20:11:51.095Z', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists the provisioned capacity units for an account.', 'id' => 'to-list-the-provisioned-capacity-units-for-an-account-1481923656130', 'title' => 'To list the provisioned capacity units for an account', ], ], 'ListTagsForVault' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', ], 'output' => [ 'Tags' => [ 'date' => 'july2015', 'id' => '1234', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists all the tags attached to the vault examplevault.', 'id' => 'list-tags-for-vault-1481755839720', 'title' => 'To list the tags for a vault', ], ], 'ListVaults' => [ [ 'input' => [ 'accountId' => '-', 'limit' => '', 'marker' => '', ], 'output' => [ 'VaultList' => [ [ 'CreationDate' => '2015-04-06T21:23:45.708Z', 'LastInventoryDate' => '2015-04-07T00:26:19.028Z', 'NumberOfArchives' => 1, 'SizeInBytes' => 3178496, 'VaultARN' => 'arn:aws:glacier:us-west-2:0123456789012:vaults/my-vault', 'VaultName' => 'my-vault', ], ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example lists all vaults owned by the specified AWS account.', 'id' => 'list-vaults-1481753006990', 'title' => 'To list all vaults owned by the calling user’s account', ], ], 'PurchaseProvisionedCapacity' => [ [ 'input' => [ 'accountId' => '-', ], 'output' => [ 'capacityId' => 'zSaq7NzHFQDANTfQkDen4V7z', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example purchases provisioned capacity unit for an AWS account.', 'id' => 'to-purchases-a-provisioned-capacity-unit-for-an-aws-account-1481927446662', 'title' => 'To purchases a provisioned capacity unit for an AWS account', ], ], 'RemoveTagsFromVault' => [ [ 'input' => [ 'TagKeys' => [ 'examplekey1', 'examplekey2', ], 'accountId' => '-', 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example removes two tags from the vault named examplevault.', 'id' => 'remove-tags-from-vault-1481754998801', 'title' => 'To remove tags from a vault', ], ], 'SetDataRetrievalPolicy' => [ [ 'input' => [ 'Policy' => [ 'Rules' => [ [ 'BytesPerHour' => 10737418240, 'Strategy' => 'BytesPerHour', ], ], ], 'accountId' => '-', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example sets and then enacts a data retrieval policy.', 'id' => 'to-set-and-then-enact-a-data-retrieval-policy--1481928352408', 'title' => 'To set and then enact a data retrieval policy ', ], ], 'SetVaultAccessPolicy' => [ [ 'input' => [ 'accountId' => '-', 'policy' => [ 'Policy' => '{"Version":"2012-10-17","Statement":[{"Sid":"Define-owner-access-rights","Effect":"Allow","Principal":{"AWS":"arn:aws:iam::999999999999:root"},"Action":"glacier:DeleteArchive","Resource":"arn:aws:glacier:us-west-2:999999999999:vaults/examplevault"}]}', ], 'vaultName' => 'examplevault', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example configures an access policy for the vault named examplevault.', 'id' => 'to--set-the-access-policy-on-a-vault-1482185872517', 'title' => 'To set the access-policy on a vault', ], ], 'SetVaultNotifications' => [ [ 'input' => [ 'accountId' => '-', 'vaultName' => 'examplevault', 'vaultNotificationConfig' => [ 'Events' => [ 'ArchiveRetrievalCompleted', 'InventoryRetrievalCompleted', ], 'SNSTopic' => 'arn:aws:sns:us-west-2:012345678901:mytopic', ], ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example sets the examplevault notification configuration.', 'id' => 'to-configure-a-vault-to-post-a-message-to-an-amazon-simple-notification-service-amazon-sns-topic-when-jobs-complete-1482186397475', 'title' => 'To configure a vault to post a message to an Amazon SNS topic when jobs complete', ], ], 'UploadArchive' => [ [ 'input' => [ 'accountId' => '-', 'archiveDescription' => '', 'body' => 'example-data-to-upload', 'checksum' => '', 'vaultName' => 'my-vault', ], 'output' => [ 'archiveId' => 'kKB7ymWJVpPSwhGP6ycSOAekp9ZYe_--zM_mw6k76ZFGEIWQX-ybtRDvc2VkPSDtfKmQrj0IRQLSGsNuDp-AJVlu2ccmDSyDUmZwKbwbpAdGATGDiB3hHO0bjbGehXTcApVud_wyDw', 'checksum' => '969fb39823836d81f0cc028195fcdbcbbe76cdde932d4646fa7de5f21e18aa67', 'location' => '/0123456789012/vaults/my-vault/archives/kKB7ymWJVpPSwhGP6ycSOAekp9ZYe_--zM_mw6k76ZFGEIWQX-ybtRDvc2VkPSDtfKmQrj0IRQLSGsNuDp-AJVlu2ccmDSyDUmZwKbwbpAdGATGDiB3hHO0bjbGehXTcApVud_wyDw', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example adds an archive to a vault.', 'id' => 'upload-archive-1481668510494', 'title' => 'To upload an archive', ], ], 'UploadMultipartPart' => [ [ 'input' => [ 'accountId' => '-', 'body' => 'part1', 'checksum' => 'c06f7cd4baacb087002a99a5f48bf953', 'range' => 'bytes 0-1048575/*', 'uploadId' => '19gaRezEXAMPLES6Ry5YYdqthHOC_kGRCT03L9yetr220UmPtBYKk-OssZtLqyFu7sY1_lR7vgFuJV6NtcV5zpsJ', 'vaultName' => 'examplevault', ], 'output' => [ 'checksum' => 'c06f7cd4baacb087002a99a5f48bf953', ], 'comments' => [ 'input' => [], 'output' => [], ], 'description' => 'The example uploads the first 1 MiB (1024 x 1024 bytes) part of an archive.', 'id' => 'to-upload-the-first-part-of-an-archive-1481835899519', 'title' => 'To upload the first part of an archive', ], ], ],];
