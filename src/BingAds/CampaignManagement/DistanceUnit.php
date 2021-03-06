<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible distance units of a geographical location.
 *
 * @link http://msdn.microsoft.com/en-us/library/dn743740(v=msads.90).aspx DistanceUnit Value Set
 *
 * @used-by RadiusTargetBid2
 */
final class DistanceUnit
{
    /** The distance of the specified geographical location is specified in kilometers. */
    const Kilometers = 'Kilometers';
    /** The distance of the specified geographical location is specified in miles. */
    const Miles = 'Miles';
}
