<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Tests\Validator\Constraints;

use Manhattan\MailchimpBundle\Validator\Constraints\MailchimpSubscribe;
use Manhattan\MailchimpBundle\Validator\Constraints\MailchimpSubscribeValidator;

class MailchimpSubscribeValidatorTest extends \PHPUnit_Framework_TestCase
{
    protected $context;
    protected $validator;

    protected function setUp()
    {
        $this->context = $this->getMock('Symfony\Component\Validator\ExecutionContext', array(), array(), '', false);
        $this->validator = new MailchimpSubscribeValidator();
        $this->validator->initialize($this->context);
    }

    protected function tearDown()
    {
        $this->context = null;
        $this->validator = null;
    }

}
