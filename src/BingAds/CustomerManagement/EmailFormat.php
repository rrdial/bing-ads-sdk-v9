<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible formats of the body of an email message.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671705(v=msads.90).aspx EmailFormat Value Set
 *
 * @used-by ContactInfo
 */
final class EmailFormat
{
    /** The format of the body of the email message is HTML. */
    const Html = 'Html';
    /** The format of the body of the email message is plain text. */
    const Text = 'Text';
}
