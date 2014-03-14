<?php
/**
 * =======================================================================
 *  File:        example_balance.php
 *  Author:      MessageBird B.V.
 *
 *  More information? Go to www.messagebird.com/sms-api
 *
 * This class requires that you have PHP 5.1.x or higher installed.
 * ========================================================================
 */

require_once 'lib/class.MessageBird.php';

// Set the Messabeird username and password, and create an instance of the MessageBird class
$sms = new MessageBird('username', 'password');

echo $sms->getBalance();
