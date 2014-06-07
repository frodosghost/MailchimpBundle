# Mailchimp Validation Bundle

Bundle adds the ability to use Mailchimp bundle within validation to submit and return errors to users as validation messages.

## How
1. Add this bundle to the composer file:

        {
            "require": {
                ...
                "manhattan/mailchimp-bundle": "dev-master"
            }
        }

2. Add this bundle to your app kernel:

        // app/AppKernel.php
        public function registerBundles()
        {
            return array(
                // ...
                new Manhattan\MailchimpBundle\ManhattanMailchimpBundle(),
                // ...
            );
        }
