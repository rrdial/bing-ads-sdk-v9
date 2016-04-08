<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.90).aspx GetDownloadStatus Request Object
 *
 * @used-by BingAdsBulkService::GetDownloadStatus
 */
final class GetDownloadStatusRequest
{
    public $DownloadRequestId;
}
