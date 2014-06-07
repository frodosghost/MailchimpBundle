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

use Symfony\Component\EventDispatcher\Event;

class MailchimpEvent extends Event
{
    /**
     * @var Mixed
     */
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Set data to be passed with the event
     *
     * @param Mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Get Data
     * @return Mixed
     */
    public function getData()
    {
        return $this->data;
    }

}
