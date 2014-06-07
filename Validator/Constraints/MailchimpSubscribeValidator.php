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
use Symfony\Component\Validator\ConstraintValidator;

use Manhattan\MailchimpBundle\Event\MailchimpEvent;
use Manhattan\MailchimpBundle\Event\MailchimpEvents;
use Symfony\Component\EventDispatcher\EventDispatcher;

class MailchimpSubscribeValidator extends ConstraintValidator
{

    /**
     * @var Symfony\Component\EventDispatcher\EventDispatcher
     */
    private $eventDispatcher;


    public function __construct(EventDispatcher $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function validate($protocol, Constraint $constraint)
    {
        // Fire card validation
        if ($this->getEventDispatcher()->hasListeners(MailchimpEvents::SUBSCRIBE_VALIDATION)) {
            // Setup Event
            $event = new MailchimpEvent($protocol);

            $this->getEventDispatcher()->dispatch(MailchimpEvents::SUBSCRIBE_VALIDATION, $event);

            if ($event->hasError()) {
                $this->context->addViolationAt(
                    $constraint->field,
                    $constraint->message,
                    array(),
                    null
                );
            }
        }
    }

    /**
     * @return Symfony\Component\EventDispatcher\EventDispatcher
     */
    public function getEventDispatcher()
    {
        return $this->eventDispatcher;
    }

}
