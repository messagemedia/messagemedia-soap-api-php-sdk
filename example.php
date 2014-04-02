<?php
// Uncomment the following lines for debugging information
//ini_set('display_errors', true);
//error_reporting(-1);

require('mmsoap/MMSoap.php');

// Set up account details
$username  = 'YourUserName001';
$password  = 'y0urpassw0rd';

// Set up sendMessage parameters
$recipient = '61423456789';
$message   = 'Test from MMSoap.php!';

// Create new MMSoap class
$soap = new MMSoap($username, $password);

// Send a message
$soap->sendMessage($recipient, $message);