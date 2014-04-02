<?php
/*
 * TODO comment me
 */

require('mmsoap/Autoload.php');

class MMSoap {
    public function __construct($userId, $password) {
        // SOAP Services
        $this->serviceSend = new ServiceSend();
        // @todo Add others

        // Authentication object
        $this->authentication = new StructAuthenticationType($userId, $password);
    }

    public function sendMessage($to, $message) {
        $msgList = array(new StructMessageType(
            null,
            new StructRecipientsType(
                array(new StructRecipientType($to))
            ),
            $message
        ));

        $messages    = new StructMessageListType($msgList);
        $requestBody = new StructSendMessagesBodyType($messages);
        $sendRequest = new StructSendMessagesRequestType($this->authentication, $requestBody);

        return $this->serviceSend->sendMessages($sendRequest);
    }
}