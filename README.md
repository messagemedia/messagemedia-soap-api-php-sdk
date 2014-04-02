messagemedia-php
================

Sample PHP code demonstrating how to interact with the MessageMedia SOAP API.

**example.php:**

    <?php
    
    require('mmsoap/MMSoap.php');
    
    // Set up account details
    $username  = 'YourUserName001';
    $password  = 'y0urpassw0rd';
    
    // Set up sendMessage parameters
    $recipient = '61423456789';
    $message   = 'Test from MMSoap.php!';
    
    // Create new MMSoap class
    $soap = new MMSoap($username, $password);
    
    // Send a message
    $soap->sendMessage($recipient, $message);