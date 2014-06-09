Mailchimp Bundle
============

This Mailchimp bundle builds upon __MZMailChimpBundle__ to add the functions to submit to MailChimp inside form validation. Now the form validation can display error messages from Mailchimp.


Installation
------------

1. Add this bundle to your project in composer.json:

    Mailchimp Bundle uses composer (http://www.getcomposer.org) to organize dependencies:

    ```json
    {
        "require": {
            ...
            "manhattan/mailchimp-bundle": "dev-master"
        }
    }
    ```

2. Add this bundle to your app/AppKernel.php:

    ``` php
    // application/ApplicationKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new MZ\MailChimpBundle\MZMailChimpBundle(),
                new Manhattan\MailchimpBundle\ManhattanMailchimpBundle(),
            // ...
        );
    }
    ```

Documentation
-------------

1. [Index](https://github.com/frodosghost/PorterStemmerBundle/blob/master/Resources/doc/index.md)

2. [Setup](https://github.com/frodosghost/MailchimpBundle/blob/master/Resources/doc/setup.md)
