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
    echo "** Send message to $recipient\n";
    // send the message

    $response = $soap->sendMessages(array($recipient), "messagemedia-php: msg with report", null, null, TRUE );
    if ($response instanceof SoapFault) {
        exit ('Error: ' . $response->getMessage());
    }
    $result = $response->getResult();
    echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n\n";

    // sleep a little bit to give the message time to be delivered
    sleep(5);
}

echo "** Check for reports\n";
$response = $soap->getReports();
if ($response instanceof SoapFault) {
    exit('Error: ' . $response->getMessage());
}
$result = $response->getResult();
echo "Received $result->returned reports, $result->remaining are remaining.\n";
if ($result->returned > 0) {
    $report_array;
    if (is_array($result->reports->report)) {
        $report_array = $result->reports->report;
    } else {
        $report_array = array($result->reports->report);
    }
    foreach ($report_array as $report) {
        echo 'Report #' . $report->receiptId;
        echo ' with status: ' . $report->status ;
        echo ' from recipient: ' . $report->recipient->_;
        echo ' received at: ' . $report->timestamp->_ . "\n";
        $confirmReports[] = $report->receiptId;
    }

    echo "** Do you want to confirm those reports, y followed by ENTER to send, or ENTER to skip.\n";
    //$handle = fopen("php://stdin", "r");
    //$line = fgets($handle);
    if (getStdin("y")) {
    //if ($line == "y\n") {
        $result = $soap->confirmReports($confirmReports);
        echo "confirmed:".$result->result->confirmed."\n";
    }
}

