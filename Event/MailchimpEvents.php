<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Event;

/**
 * Mailchimp Events
 */
final class MailchimpEvents
{
    /**
     * Fired before subscribe data is sent to Mailchimp
     */
    const PRE_SUBSCRIBE = 'mailchimp.pre_subscribe';

    /**
     * Fired after subscription form is validated
     */
    const MAILCHIMP_VALIDATION = 'mailchimp.validation';

}
