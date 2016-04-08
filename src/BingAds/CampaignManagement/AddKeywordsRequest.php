<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more keywords to an ad group.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.90).aspx AddKeywords Request Object
 *
 * @uses Keyword
 * @used-by BingAdsCampaignManagementService::AddKeywords
 */
final class AddKeywordsRequest
{
    /**
     * The identifier of the ad group to add the keywords to.
     *
     * @var int
     */
    public $AdGroupId;
    /**
     * The list of keywords to add to the specified ad group.
     *
     * @var Keyword[]
     */
    public $Keywords;
}
