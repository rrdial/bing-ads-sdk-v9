<?php

namespace BingAds\CampaignManagement;

/**
 * System_CAPS_MD_note.
 *
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.90).aspx MobileAd Data Object
 */
final class MobileAd extends Ad
{
    public $BusinessName;
    public $DestinationUrl;
    public $DisplayUrl;
    public $PhoneNumber;
    public $Text;
    public $Title;
}
