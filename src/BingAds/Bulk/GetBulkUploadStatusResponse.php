<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk upload request.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn249979(v=msads.90).aspx GetBulkUploadStatus Response Object
 *
 * @used-by BingAdsBulkService::GetBulkUploadStatus
 */
final class GetBulkUploadStatusResponse
{
    /**
     * The status of the upload.
     *
     * @var string
     */
    public $RequestStatus;
    /**
     * The URL of the file that contains the requested results, for example upload error information.
     *
     * @var string
     */
    public $ResultFileUrl;
}
