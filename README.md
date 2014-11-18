messagemedia-php
================

Sample PHP code demonstrating how to interact with the MessageMedia SOAP API.
Windows users: set soap.wsdl_cache_dir in `php.ini` to something like "C:\temp\mmsoap" to speed up requests

**example.php:**

    <?php
    
    require('mmsoap/MMSoap.php');
    
    // Set up account details
    $username  = 'YourUserName001';
    $password  = 'y0urpassw0rd';
    
    // Set up sendMessage parameters
    $recipients = array('+61491570156');
    $origin     =       "+61491570157";

    $message   = 'Hello from messagemedia-php!';
    
    // Create new MMSoap class
    $soap = new MMSoap($username, $password);
    
    // Send a message
    $soap->sendMessage($recipient, $message, null, $origin);
