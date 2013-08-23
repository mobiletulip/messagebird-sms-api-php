<?php
	/**
	 * =======================================================================
	 *  File:       example_form.php
	 *  Created:     2010-07-06
	 *  Author:      MessageBird B.V.
	 *  Version:     v1.2 - 04-03-2013
	 *
	 *  More information? Go to www.messagebird.com/sms-api
	 *
	 * This class requires that you have PHP 5.1.x or higher installed.
	 * ========================================================================
	*/

	require_once 'lib/class.MessageBird.php';

	// Set the Messabeird username and password, and create an instance of the MessageBird class
	$sms = new MessageBird( 'username', 'password' );

	// Set the sender, could be an number (16 numbers) or letters (11 characters)
	$sms->setSender ( 'YourSender' );

	// Add the destination mobile number.
	// This method can be called several times to add have more then one recipient for the same message
	$sms->addDestination ( '31600000000' );

	// Set an reference, optional
	$sms->setReference ( '123456789' );

	// Replace non GSM-7 characters by appropriate valid GSM-7 characters
	// $sms->setReplacechars(false);

	// If you want a dlr notification of the message send to another url then that you have set on the web site, you can use this parameter. Don't forget to set a reference!
	// $sms->setDlrUrl('http://www.example.com/dlr_url.php');

	// Send the message to the destination(s)
	$sms->sendSms ( 'This is a test message' );

	echo "\nResponse:";
	echo "\n" . $sms->getResponseCode ();
	echo "\n" . $sms->getResponseMessage ();
	echo "\n" . $sms->getCreditBalance ();
	echo "\n";
