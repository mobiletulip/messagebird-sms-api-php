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
	 *  This class requires that you have PHP 5.1.x or higher installed.
	 * ========================================================================
	*/

	require_once 'lib/class.MessageBird.php';

// Set the MessageBird username and password. Will be used later in the script
	$username = 'username';
	$password = 'password';

// Prevent default username/password example settings to call the API
	if ( $username == 'username' || $password == 'password' )
	{
		echo '<br />You need to enter the correct username and password in example_form.php before you can use this example!';
		exit;
	}

// Only send message when this script is accessed using an HTTP POST
	if ( ! empty( $_POST ) )
	{
		// Check if destination is posted
		if ( ! empty( $_POST['destination'] ) )
		{
			$destination = $_POST['destination'];
		}
		else
		{
			$destination = NULL;
		}

		// Check if message is posted
		if ( ! empty( $_POST['message'] ) )
		{
			$message = $_POST['message'];
		}
		else
		{
			$message = NULL;
		}

		// Check if sender is posted
		if ( ! empty( $_POST['sender'] ) )
		{
			$sender = $_POST['sender'];
		}
		else
		{
			$sender = NULL;
		}

		// Check if reference is posted
		if ( ! empty( $_POST['reference'] ) )
		{
			$reference = $_POST['reference'];
		}
		else
		{
			$reference = NULL;
		}

		// If we have the required parameters, we can send a message.
		if ( $destination !== NULL && $message !== NULL && $sender !== NULL )
		{
			$sms = new MessageBird( $username, $password );

			// Add the destination mobile number.
			// This method can be called several times to add have more then one recipient for the same message
			$sms->addDestination ( $destination );

			if ( $sender !== NULL )
			{
				// Set the sender, could be an number (16 numbers) or letters (11 characters)
				$sms->setSender ( $sender );
			}

			if ( $reference !== NULL )
			{
				// Set an reference
				$sms->setReference ( $reference );
			}

			// Send the message to the destination(s)
			$sms->sendSms ( $message );

			// Output the response to the browser
			echo '<br />Response Info:';
			echo '<br />Response Code: ' . $sms->getResponseCode ();
			echo '<br />Response Message: ' . $sms->getResponseMessage ();
			echo '<br />Credit Balance: ' . $sms->getCreditBalance ();
			echo '<br />';

		// There is no destination or message posted, we realy need those two to work.
		}
		else
		{
			echo '<br />No destination, sender or message given!';
			echo '<br />You must enter an destination, sender and message!';
		}

// It seems there is no POST, and this example script only works with an HTTP POST.
	}
	else
	{
		echo '<br />This script needs to be called via an HTTP POST!';
		echo '<br />Use <a href="example_form.html">example_form.php</a> to test this example script.';
	}
