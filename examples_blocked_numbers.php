<?php
/**
 * PHP MMSoap Example code around blocking numbers
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

// http://www.acma.gov.au/Citizen/Consumer-info/All-about-numbers/Special-numbers/fictitious-numbers-for-radio-film-and-television-i-acma
$numberToBlock = array($recipient,'61491570157');

// Create new MMSoap class
$soap = new MMSoap($username, $password, $options);

function getBlockedNumbers($soap) {
    // Get blocked numbers
    echo "** Get Blocked Numbers\n";
    $response = $soap->getBlockedNumbers();

    if ($response instanceof SoapFault) {
        exit('Error: ' . $response->getMessage());
    }
    $result = $response->getResult();
	if (array_key_exists ( 'recipients', $result )) {
		$recipients = $result->recipients->recipient;
		if (isset ( $recipients )) {
			$blocked_numbers_array;
			if (is_array ( $recipients )) {
				$blocked_numbers_array = $recipients;
			} else {
				$blocked_numbers_array = array (
						$recipients 
				);
			}
			foreach ( $blocked_numbers_array as $recipient ) {
				echo 'The number ' . $recipient->_ . " is blocked\n";
			}
		} else {
			echo "No numbers in your blocked list\n";
		}
    }
    echo "\n";
}

function blockNumbers($soap, $numberToBlock) {
    echo "** Block " . implode($numberToBlock,", ") . "\n";

    $response = $soap->blockNumbers($numberToBlock);
    if ($response instanceof SoapFault) {
        exit('Error: ' . $response->getMessage());
    }
    $result = $response->getResult();
    echo "Blocked: " . $result->blocked . " Failed: " . $result->failed . "\n\n";
}

function unblockNumbers($soap, $numberToBlock) {
    echo "** Unblock " . implode($numberToBlock, ", ") . "\n";
    $response = $soap->unblockNumbers($numberToBlock);
    if ($response instanceof SoapFault) {
        exit('Error: ' . $response->getMessage());
    }
    $result = $response->getResult();
    echo "Unblocked: " . $result->unblocked . " Failed: " . $result->failed . "\n\n";
}    

getBlockedNumbers($soap);
blockNumbers($soap, $numberToBlock);
getBlockedNumbers($soap);
unblockNumbers($soap, $numberToBlock);
getBlockedNumbers($soap);
