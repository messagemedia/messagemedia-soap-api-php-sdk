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

// Example sending a more complex request
// - scheduled
// - source number
// - delivery report
// - sequence number
// - message ids
// - message send mode
echo "\nTesting sending messages to " . implode(', ', $recipients) . "\n";
$sequenceNumber = 10;
$response1 = $soap->sendMessages($recipients, "messagemedia-php: drop random", null, $origin, TRUE, $sequenceNumber, $messageIds, 'dropAll');
$sequenceNumber++;
$response2 = $soap->sendMessages($recipients, "messagemedia-php: dropAllWithErrors", null, $origin, TRUE, $sequenceNumber, $messageIds, 'dropAllWithErrors');
$sequenceNumber++;
$response3 = $soap->sendMessages($recipients, "messagemedia-php: dropAllWithSuccess", null, $origin, TRUE, $sequenceNumber, $messageIds, 'dropAllWithSuccess');
if ($response1 instanceof SoapFault) {
	exit ( 'Error: ' . $response1->getMessage () );
}
$result   = $response1->getResult();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n";
if ($response2 instanceof SoapFault) {
	exit ( 'Error: ' . $response2->getMessage () );
}
$result   = $response2->getResult();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n";
if ($response3 instanceof SoapFault) {
	exit ( 'Error: ' . $response3->getMessage () );
}
$result   = $response3->getResult();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n";
