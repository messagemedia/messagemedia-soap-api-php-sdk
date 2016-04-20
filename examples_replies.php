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

require('getStdin.php');

// Create new MMSoap class
$soap = new MMSoap($username, $password, $options);

echo "** Do you want to send a message to $recipient, y followed by ENTER to send, or ENTER to skip.\n";
if (getStdin("y")) {
    // send the message

    $response = $soap->sendMessage($recipient, "messagemedia-php: please reply & press Enter on example when done.");
    if ($response instanceof SoapFault) {
        exit ( 'Error: ' . $response->getMessage());
    }
    $result = $response->getResult ();
    echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n\n";

    // message has been sent, give the user time to reply
    echo "Please reply to the message you just received and hit ENTER.\n";
    getStdin("");
}

echo "** Check for replies\n";
$response = $soap->getReplies();
if ($response instanceof SoapFault) {
    exit('Error: ' . $response->getMessage());
}
$result = $response->getResult();
echo "Received $result->returned replies, $result->remaining are remaining.\n";
$confirmReplies = array();
if ($result->returned > 0) {
    $reply_array;
    if (is_array($result->replies->reply)) {
        $reply_array = $result->replies->reply;
    } else {
        $reply_array = array($result->replies->reply);
    }

    foreach ($reply_array as $reply) {
        if (isset( $reply->content->_)) {
            $content = $reply->content->_;
        } else {
            $content = $reply->content;
        }
        echo 'Reply #' . $reply->receiptId;
        echo ' from ' . $reply->origin->_;
        echo ' received at ' . $reply->received->_;
        echo ': ' . $content . "\n";
        $confirmReplies[] = $reply->receiptId;
    }

    echo "** Do you want to confirm those replies, y followed by ENTER to send, or ENTER to skip.\n";
    if (getStdin("y")) {
        $result = $soap->confirmReplies($confirmReplies);
        echo "confirmed:".$result->result->confirmed."\n";
    }
}
