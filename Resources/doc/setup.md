

``` xml
<class name="Acme\DemoBundle\Entity\Subscribe">
    <constraint name="Manhattan\MailchimpBundle\Validator\Constraints\MailchimpSubscribe">
        <option name="message">The Mailchimp subscription did not succeed. Please try again.</option>
        <option name="field">email</option>
        <option name="groups">
            <value>Subscription</value>
        </option>
    </constraint>
    <property name="email">
        <constraint name="NotBlank">
            <option name="message">Please enter your email</option>
        </constraint>
        <constraint name="Email">
            <option name="message">The email "{{ value }}" is not a valid email.</option>
        </constraint>
    </property>
    <group-sequence>
        <value>Subscribe</value>
        <value>Subscription</value>
    </group-sequence>
</class>
```
