<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Tests\Event;

use Manhattan\MailchimpBundle\Event\MailchimpEvent;

class MailchimpEventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing ->__construct()
     */
    public function testConstructorNoData()
    {
        $mailchimp = new MailchimpEvent();
        $this->assertNull($mailchimp->getData(), '->getData() does not return NULL when no data was configured');
    }

    /**
     * Testing ->__construct()
     */
    public function testConstructorWithData()
    {
        $data = array('foo' => 'bar');

        $mailchimp = new MailchimpEvent($data);
        $this->assertEquals($data, $mailchimp->getData(), '->getData() does not return the data that was set');
    }

    /**
     * Testing ->__construct()
     */
    public function testConstructorWithUpdatedData()
    {
        $data = array('foo' => 'bar');
        $newData = array('bar' => 'foo');

        $mailchimp = new MailchimpEvent($data);
        $this->assertEquals($data, $mailchimp->getData(), '->getData() does not return the data that was set');

        // Replace data as set
        $mailchimp->setData($newData);

        $this->assertEquals($newData, $mailchimp->getData(), '->getData() does not return the data that was set');
        $this->assertNotEquals($data, $mailchimp->getData(), '->getData() returns the first data set on the constructor');
    }
}
