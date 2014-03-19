# MessageBird SMS API Client for PHP
[![Latest Stable Version](https://poser.pugx.org/mobiletulip/messagebird-sms-api-bundle/v/stable.png)](https://packagist.org/packages/mobiletulip/messagebird-sms-api-bundle)
[![Total Downloads](https://poser.pugx.org/mobiletulip/messagebird-sms-api-bundle/downloads.png)](https://packagist.org/packages/mobiletulip/messagebird-sms-api-bundle)

The MessageBird SMS API Client Library enables you send SMS messages using the Messagebird.com API.

## Requirements
- PHP 5.1 or higher
- JSON extension (bundled and compiled by default since PHP 5.2.0)
- fsockopen should be enabled

## Installation
The recommended way to install the library is through [Composer](https://getcomposer.org/doc/00-intro.md). Just create a
``composer.json`` file and run the ``php composer.phar install`` command to
install it:


    {
        "require": {
            "mobiletulip/messagebird-sms-api-bundle": "~1.4"
        }
    }

Alternatively, you can download a [zip archive](https://github.com/mobiletulip/messagebird-sms-api-php/archive/1.4.1.zip) and extract it.

## Basic Example
A more extended example, which shows more features of the API is available in example.php and example_form.php

	$sms = new MessageBird('username', 'password');
	$sms->setSender('YourSender');
	$sms->addDestination('31600000000');
	$sms->sendSms('This is a test message');

## Developer documentation
For technical documentation see:

* English: https://www.messagebird.com/download/technical_documentation_en.pdf
* Dutch: https://www.messagebird.com/download/technical_documentation_nl.pdf
* http://www.messagebird.com/sms-api

## License
The MessageBird SMS API Client for PHP is licensed under [BSD (Berkeley Software Distribution) License](http://www.opensource.org/licenses/bsd-license.php). Copyright (c) 2014, MessageBird