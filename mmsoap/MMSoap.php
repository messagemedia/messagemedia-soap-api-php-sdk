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
        $this->serviceBlock = new ServiceBlock($options);
        $this->serviceUnblock = new ServiceUnblock($options);
        $this->serviceConfirm = new ServiceConfirm($options);

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
     *                     if no origin number is set(null), the messagemedia rotary 
     *                     will be used so that message replies are correctly routed 
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
     *                     if no origin number is set(null), the messagemedia rotary 
     *                     will be used so that message replies are correctly routed 
     * @param $deliveryReport   When set to true, this will request a receipt as to whether
     *                          the message was delivered or not to the gateway.
     * @param $sequenceNumber   This is the messageId associated to a batch message.
     * @return StructSendMessagesResponseType
     */
    public function sendMessages($recipients, $message, $scheduled=null, $origin=null, $deliveryReport=false, $sequenceNumber=0, $messageIds=array()) {
        $recipientsStruct = array();

        for ($i=0; $i<sizeof($recipients); $i++) {
            if (!empty($messageIds)) {
                $recipientsStruct[] = new StructRecipientType($recipients[$i], $messageIds[$i]);
            } else {
                $recipientsStruct[] = new StructRecipientType($recipients[$i]);
            }
        }

        $msgList = array(new StructMessageType(
            $origin,
            new StructRecipientsType($recipientsStruct),
            $message,
            $scheduled,
            $deliveryReport,
            $sequenceNumber
        ));

        $messages    = new StructMessageListType($msgList);
        $requestBody = new StructSendMessagesBodyType($messages);
        $sendRequest = new StructSendMessagesRequestType($this->authentication, $requestBody);

        return $this->serviceSend->sendMessages($sendRequest);
    }

    /**
    * Get the blocked numbers for the customer/account
    * 
     * @return Array    Array of blocked numbers 
    */
    public function getBlockedNumbers() {
        $requestBody = new StructGetBlockedNumbersBodyType(5);
        $getRequest  = new StructGetBlockedNumbersRequestType($this->authentication, $requestBody);
        return $this->serviceGet->getBlockedNumbers($getRequest);
    }

    /**
     * Block numbers for the customer/account
     *
     * @param $numbersToBlock an array of strings containing the numbers to block
     * @return StructBlockNumbersResponseType
     */
    public function blockNumbers(array $numbersToBlock)
    {
        $requestBody = new StructBlockNumbersBodyType($this->stringNumberArrayToRecipientsType($numbersToBlock));
        $request = new StructBlockNumbersRequestType($this->authentication, $requestBody);
        return $this->serviceBlock->blockNumbers($request);
    }

    /**
     * Unblock numbers for the customer/account
     *
     * @param $numbersToUnblock an array of strings containing the numbers to unblock
     * @return StructUnblockNumbersResponseType
     */
    public function unblockNumbers(array $numbersToUnblock)
    {
        $requestBody = new StructUnblockNumbersBodyType($this->stringNumberArrayToRecipientsType($numbersToUnblock));
        $request = new StructUnblockNumbersRequestType($this->authentication, $requestBody);
        return $this->serviceUnblock->unblockNumbers($request);
    }

    private function stringNumberArrayToRecipientsType(array $stringNumberArray)
    {
        $result = array();
        foreach ($stringNumberArray as $each) {
            $result[] = new StructRecipientType($each);
        }
        return new StructRecipientsType($result);
    }

    /**
     * Check for replies.
     * @param $maximumReplies the amount of replies to receive, defaults to 100 (optional)
     * @return StructCheckRepliesResponseType
     */
    public function getReplies($maximumReplies = 100)
    {
    	$body = new StructCheckRepliesBodyType($maximumReplies);
        $request = new StructCheckRepliesRequestType($this->authentication, $body);
        return $this->serviceCheck->checkReplies($request);
    }
    
    /**
     * Check for delivery reports.
     * @param $maximumReports the amount of reports to receive, defaults to 100 (optional)
     * @return StructCheckReportsResponseType
     */
    public function getReports($maximumReports = 100)
    {
    	$body = new StructCheckReportsBodyType($maximumReports);
    	$request = new StructCheckReportsRequestType($this->authentication, $body);
    	return $this->serviceCheck->checkReports($request);
    }
}
