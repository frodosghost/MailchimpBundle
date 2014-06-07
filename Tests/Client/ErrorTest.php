<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Tests\Client;

use Manhattan\MailchimpBundle\Client\Error;

class ErrorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing ->__construct()
     */
    public function testConstructor()
    {
        $mailchimp = new Error('foo', 'bar');

        $this->assertEquals('foo', $mailchimp->getCode(), '->getCode() does not return value included when class is constructed');
        $this->assertEquals('bar', $mailchimp->getMessage(), '->getMessage() does not return value included when class is constructed');
    }
}
