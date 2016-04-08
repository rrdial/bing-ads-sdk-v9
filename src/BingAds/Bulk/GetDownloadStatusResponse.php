<?php

namespace BingAds\Bulk;

/**
 * Gets the status of a bulk download request.
 *
 * @link http://msdn.microsoft.com/en-us/library/jj885754(v=msads.90).aspx GetDownloadStatus Response Object
 *
 * @used-by BingAdsBulkService::GetDownloadStatus
 */
final class GetDownloadStatusResponse
{
    /**
     * The URL that contains the download data.
     *
     * @var string
     */
    public $DownloadUrl;
    /**
     * The status of the download.
     *
     * @var string
     */
    public $RequestStatus;
}
