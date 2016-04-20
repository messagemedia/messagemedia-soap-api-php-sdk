<?php
/**
 * PHP MMSoap Example code around account details
 *
 * Copyright 2016 MessageMedia
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// Uncomment the following line for debugging information
//ini_set('display_errors', true);

require('mmsoap/MMSoap.php');

// user credentials
require('credentials.php');
/*
// if you don't want to use the credetials import, just use the below variables 
// Set up account details
$username = 'YourUserName001';
$password = 'y0urpassw0rd';

// http://www.acma.gov.au/Citizen/Consumer-info/All-about-numbers/Special-numbers/fictitious-numbers-for-radio-film-and-television-i-acma
$recipient = "+61491570156";
*/

// Create new MMSoap class
$soap = new MMSoap($username, $password, $options);

// Check user info
echo "\n** User Info\n";
$response = $soap->getUserInfo();
if ($response instanceof SoapFault) {
    exit('Error: ' . $response->getMessage());
}
$result = $response->getResult();

$accountDetails = $result->accountDetails;
echo 'Account type: ' . $accountDetails->type . "\n";
echo $result->accountDetails->creditRemaining . " credits remaining\n";
