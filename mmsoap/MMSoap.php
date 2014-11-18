<?php
/**
 * MMSoap class for interactive with MessageMedia's SOAP API
 *
 * Copyright 2014 MessageMedia
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

require('Autoload.php');

class MMSoap {
    public function __construct($userId, $password, $options) {
        // SOAP Services
        $this->serviceCheck = new ServiceCheck($options);
        $this->serviceGet   = new ServiceGet($options);
        $this->serviceSend  = new ServiceSend($options);

        // Authentication object
        $this->authentication = new StructAuthenticationType($userId, $password);
    }

    /**
     * Check user information
     *
     * @return StructCheckUserResponseType
     */
    public function getUserInfo() {
        return $this->serviceCheck->checkUser(new StructCheckUserRequestType($this->authentication));
    }

    /**
     * Send a single message to one recipient
     *
     * @param $to          The recipient number
     * @param $message     The message
     * @param $scheduled   When the message should be scheduled for, null = now
     * @param $origin      Origin phone number that the message will come from
     *
     * @return StructSendMessagesResponseType
     */
    public function sendMessage($to, $message, $scheduled=null, $origin=null) {
        if (is_array($to)) {
            return $this->sendMessages($to, $message, $scheduled, $origin);
        }
        return $this->sendMessages(array($to), $message, $scheduled, $origin);
    }

    /**
     * Send a single message to multiple recipients
     *
     * @param $recipients  An array of the recipient phone numbers
     * @param $message     The message
     * @param $scheduled   When the message should be scheduled for, null = now
     * @param $origin      Origin phone number that the message will come from
     *
     * @return StructSendMessagesResponseType
     */
    public function sendMessages($recipients, $message, $scheduled=null, $origin=null) {
        $recipientsStruct = array();

        foreach ($recipients as $recipient) {
            $recipientsStruct[] = new StructRecipientType($recipient);
        }

        $msgList = array(new StructMessageType(
            $origin,
            new StructRecipientsType($recipientsStruct),
            $message,
            $scheduled
        ));

        $messages    = new StructMessageListType($msgList);
        $requestBody = new StructSendMessagesBodyType($messages);
        $sendRequest = new StructSendMessagesRequestType($this->authentication, $requestBody);

        return $this->serviceSend->sendMessages($sendRequest);
    }

    /**
    * Fet the blocked numbers for the customer/account
    * 
     * @return Array    Array of blocked numbers 
    */
    public function getBlockedNumbers() {
        $requestBody = new StructGetBlockedNumbersBodyType(5);
        $getRequest  = new StructGetBlockedNumbersRequestType($this->authentication, $requestBody);
        return $this->serviceGet->getBlockedNumbers($getRequest);
    }
}
