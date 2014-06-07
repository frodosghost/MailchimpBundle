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
    protected $dispatcher;

    protected function setUp()
    {
        $this->context = $this->getMock('Symfony\Component\Validator\ExecutionContext', array(), array(), '', false);
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcher');

        $this->validator = new MailchimpSubscribeValidator($this->dispatcher);
        $this->validator->initialize($this->context);
    }

    protected function tearDown()
    {
        $this->context = null;
        $this->validator = null;
    }

    public function testNullIsValid()
    {
        $subscribe = new MailchimpSubscribe(array(
            'field' => 'foo',
        ));

        $this->context->expects($this->never())
            ->method('addViolation');

        $this->validator->validate(null, $subscribe);
    }

    public function testEmptyStringIsValid()
    {
        $subscribe = new MailchimpSubscribe(array(
            'field' => 'foo',
        ));

        $this->context->expects($this->never())
            ->method('addViolation');

        $this->validator->validate('', $subscribe);
    }

}
