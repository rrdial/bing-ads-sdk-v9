<?php

namespace BingAds\Reporting;

/**
 * Defines the attributes and performance statistics columns that you can include in the AgeGenderDemographicReportRequest.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671786(v=msads.90).aspx AgeGenderDemographicReportColumn Value Set
 *
 * @used-by AgeGenderDemographicReportRequest
 */
final class AgeGenderDemographicReportColumn
{
    /** The account name. */
    const AccountName = 'AccountName';
    /** The Bing Ads assigned number of an account. */
    const AccountNumber = 'AccountNumber';
    /** The Bing Ads assigned identifier of an account. */
    const AccountId = 'AccountId';
    /** The time period of each report row. */
    const TimePeriod = 'TimePeriod';
    /** The campaign name. */
    const CampaignName = 'CampaignName';
    /** The Bing Ads assigned identifier of a campaign. */
    const CampaignId = 'CampaignId';
    /** The ad group name. */
    const AdGroupName = 'AdGroupName';
    /** The Bing Ads assigned identifier of an ad group. */
    const AdGroupId = 'AdGroupId';
    /** The ad distribution attribute of an ad group. */
    const AdDistribution = 'AdDistribution';
    /** The age group of the audience who might have viewed the ad, if known. */
    const AgeGroup = 'AgeGroup';
    /** The gender of the audience who might have viewed the ad, if known. */
    const Gender = 'Gender';
    /** The estimated number of impressions, or the number of times an ad could be served to a particular age group or gender, divided by the total number of estimated impressions across the ad group (including estimated impressions for unknown age &amp; gender demographics). */
    const EstimatedImpressionPercent = 'EstimatedImpressionPercent';
    /** The estimated number of times that an ad could be clicked by a particular age group or gender, divided by the total number of estimated clicks across the ad group (including estimated clicks for unknown age &amp; gender demographics). */
    const EstimatedClickPercent = 'EstimatedClickPercent';
    /** The estimated click-through rate (Ctr) as a percentage. */
    const EstimatedCtr = 'EstimatedCtr';
    /** The ad group language. */
    const Language = 'Language';
    /** The estimated number of times an ad could be served to a particular age group or gender. */
    const EstimatedImpressions = 'EstimatedImpressions';
    /** The estimated number of times that an ad could be clicked by a particular age group or gender. */
    const EstimatedClicks = 'EstimatedClicks';
    /** The estimated number of conversions, which are the clicks that results in a sale or another measure of success, to a particular age group or gender. */
    const EstimatedConversions = 'EstimatedConversions';
    /** The estimated number of the conversions that results in a sale or another measure of success to a particular age group or gender, divided by the estimated number of clicks by a particular age group or gender. */
    const EstimatedConversionRate = 'EstimatedConversionRate';
}
