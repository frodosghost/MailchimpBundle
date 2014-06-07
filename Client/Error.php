<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Client;

/**
 * Class to return errors from MailChimp
 */
class Error
{

    private $code;

    private $message;

    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getMessage()
    {
        return $this->message;
    }

}
