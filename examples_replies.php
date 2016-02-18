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

// Set up account details
$username = 'YourUserName001';
$password = 'y0urpassw0rd';

// http://www.acma.gov.au/Citizen/Consumer-info/All-about-numbers/Special-numbers/fictitious-numbers-for-radio-film-and-television-i-acma
$recipient = "+61491570156";

// Capture the wsdl host
//$host = parse_url(WsdlClass::VALUE_WSDL_URL, PHP_URL_HOST);

// Set up stream context Server Name Indication (SNI) for use with proxy and HTTPS
//$opts = array('ssl' => array('SNI_server_name' => $host,'SNI_enabled' => TRUE));
//$context = stream_context_create($opts);

// Set up SOAP Options
$options = array( // Put options here to override defaults
    // Example Proxy Options

    //WsdlClass::WSDL_PROXY_HOST => '127.0.0.1',
    //WsdlClass::WSDL_PROXY_PORT => '8888'
    //WsdlClass::WSDL_PROXY_LOGIN => 'proxyUsername',
    //WsdlClass::WSDL_PROXY_PASSWORD => 'proxyPassword',
    //WsdlClass::WSDL_STREAM_CONTEXT => $context //If you require SNI
);

// Create new MMSoap class
$soap = new MMSoap($username, $password, $options);

echo "** Send message to $recipient\n";
// send the message

$response = $soap->sendMessage ( $recipient, "messagemedia-php: please reply" );
if ($response instanceof SoapFault) {
	exit ( 'Error: ' . $response->getMessage () );
}
$result = $response->getResult ();
echo $result->sent . ' sent / ' . $result->scheduled . ' scheduled / ' . $result->failed . " failed\n\n";

// message has been sent, give the user time to reply
echo "Please reply to the message you just received and hit ENTER.\n";
$handle = fopen ( "php://stdin", "r" );
$line = fgets ( $handle );

echo "** Check for replies\n";
$response = $soap->getReplies ();
if ($response instanceof SoapFault) {
	exit ( 'Error: ' . $response->getMessage () );
}
$result = $response->getResult ();
echo "Received $result->returned replies, $result->remaining are remaining.\n";
if ($result->returned > 0) {
	$reply_array;
	if (is_array($result->replies->reply)) {
		$reply_array = $result->replies->reply;
	} else {
		$reply_array = array($result->replies->reply);
	}
	foreach ( $reply_array as $reply ) {
		echo 'Reply #' . $reply->receiptId . ' from ' . $reply->origin->_ . ': ' . $reply->content->_ . "\n";
	}
}
