<?php
/**
 * PHP MMSoap Example code
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

// get credentials
require('credentials.php');
/*
// if you don't want to use the credetials import, just use the below variables 
// Set up account details
$username = 'YourUserName001';
$password = 'y0urpassw0rd';

// http://www.acma.gov.au/Citizen/Consumer-info/All-about-numbers/Special-numbers/fictitious-numbers-for-radio-film-and-television-i-acma
$recipient = "+61491570156";
*/

// Set up sendMessage parameters
// http://www.acma.gov.au/Citizen/Consumer-info/All-about-numbers/Special-numbers/fictitious-numbers-for-radio-film-and-television-i-acma
$recipients = array($recipient);
// MessageId array matches each recipient. i.e. 61491570156 will match 24.
$messageIds = array('24');
$origin     =       "+61491570157";

// for scheduled messages lets schedule a message 1 minte in the future
$oneMinuteInTheFuture = mktime(date("H"), date("i")+1, date("s"), date("m")  , date("d"), date("Y"));

// Create new MMSoap class
$soap = new MMSoap($username, $password, $options);

// Send a simple message
$recipient = $recipients[0];
echo "\n** Send Messages\n";
echo "Sending message to $recipient\n";
$response = $soap->sendMessage($recipient, "messagemedia-php: simple message");
if ($response instanceof SoapFault) {
	exit ( 'Error: ' . $response->getMessage () );
}
$result   = $response->getResult();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n";

// Example sending a more complex request
// - scheduled
// - source number
// - delivery report
// - sequence number
// - message ids
echo "\nScheduling to send message on ".date('l jS \of F Y h:iA',$oneMinuteInTheFuture)." to " . implode(', ', $recipients) . "\n";
$scheduled = date('Y-m-j\TG:i:s',$oneMinuteInTheFuture);
$sequenceNumber = 10;
$response = $soap->sendMessages($recipients, "messagemedia-php: scheduled message", $scheduled, $origin, TRUE, $messageIds);
if ($response instanceof SoapFault) {
	exit ( 'Error: ' . $response->getMessage () );
}
$result   = $response->getResult();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n";
