<?php

namespace BingAds\CustomerManagement;

/**
 * Initiates the client link process to manage the account of another customer.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn632187(v=msads.90).aspx AddClientLinks Request Object
 *
 * @uses ClientLink
 * @used-by BingAdsCustomerManagementService::AddClientLinks
 */
final class AddClientLinksRequest
{
    /**
     * The list of client links to add.
     *
     * @var ClientLink[]
     */
    public $ClientLinks;
}
