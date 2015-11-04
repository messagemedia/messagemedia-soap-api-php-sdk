# MessageMedia PHP SDK
This library provides a simple interface for sending and receiving messages using the [MessageMedia SOAP API](http://www.messagemedia.com.au/wp-content/uploads/2013/05/MessageMedia_Messaging_Web_Service.pdf?eacfbb).

If you have any issue using this sample code, or would like to report a defect, you could [create a new Issue](https://github.com/messagemedia/messagemedia-php/issues/new) in Github or [Contact us](http://www.messagemedia.com.au/contact-us).

## Installation
Windows users: set soap.wsdl_cache_dir in `php.ini` to something like "C:\temp\mmsoap" to speed up requests

## Usage
**example.php:**

    <?php
    
    require('mmsoap/MMSoap.php');
    
    // Set up account details
    $username  = 'YourUserName001';
    $password  = 'y0urpassw0rd';
    
    // Set up sendMessage parameters
    $recipients = array('+61491570156');
	$messageIds = array('24');
    $origin     =       "+61491570157";

    $message   = 'Hello from messagemedia-php!';

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

    // Send a message
    $soap->sendMessage($recipients, $message, null, $origin);

## Contributing
We welcome contributions from our users. Contributing is easy:

  1.  Fork this repo
  2.  Create your feature branch (`git checkout -b my-new-feature`)
  3.  Commit your changes (`git commit -am 'Add some feature'`)
  4.  Push to the branch (`git push origin my-new-feature`)
  5.  Create a Pull Request
