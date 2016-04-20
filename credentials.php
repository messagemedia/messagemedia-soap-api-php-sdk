<?php 

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


?>
