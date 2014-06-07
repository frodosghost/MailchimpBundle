<?php

/*
 * This file is part of the Manhattan Mailchimp Bundle package.
 *
 * (c) Frodosghost <http://frodosghost.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Manhattan\MailchimpBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class MailchimpSubscribe extends Constraint
{
    public $message = "Your subscription could not be processed.";
    public $field;

    public function getDefaultOption()
    {
        return 'field';
    }

    public function getRequiredOptions()
    {
        return array('field');
    }

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    public function validatedBy()
    {
        return 'mailchimp.subscribe';
    }
}
