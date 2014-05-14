<?php
/**
 * File for the enums in the SOAP interface
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

class EnumDeliveryStatusType extends WsdlClass {
    /**
     * Constant for value 'delivered'
     *
     * @return string 'delivered'
     */
    const VALUE_DELIVERED = 'delivered';
    /**
     * Constant for value 'pending'
     *
     * @return string 'pending'
     */
    const VALUE_PENDING = 'pending';
    /**
     * Constant for value 'failed'
     *
     * @return string 'failed'
     */
    const VALUE_FAILED = 'failed';

    /**
     * Return true if value is allowed
     *
     * @uses EnumDeliveryStatusType::VALUE_DELIVERED
     * @uses EnumDeliveryStatusType::VALUE_PENDING
     * @uses EnumDeliveryStatusType::VALUE_FAILED
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumDeliveryStatusType::VALUE_DELIVERED, EnumDeliveryStatusType::VALUE_PENDING, EnumDeliveryStatusType::VALUE_FAILED));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}

class EnumFaultErrorCodeType extends WsdlClass {
    /**
     * Constant for value 'authenticationFailed'
     *
     * @return string 'authenticationFailed'
     */
    const VALUE_AUTHENTICATIONFAILED = 'authenticationFailed';
    /**
     * Constant for value 'invalidDataFormat'
     *
     * @return string 'invalidDataFormat'
     */
    const VALUE_INVALIDDATAFORMAT = 'invalidDataFormat';
    /**
     * Constant for value 'perDayMessageLimit'
     *
     * @return string 'perDayMessageLimit'
     */
    const VALUE_PERDAYMESSAGELIMIT = 'perDayMessageLimit';
    /**
     * Constant for value 'requestSizeLimit'
     *
     * @return string 'requestSizeLimit'
     */
    const VALUE_REQUESTSIZELIMIT = 'requestSizeLimit';

    /**
     * Return true if value is allowed
     *
     * @uses EnumFaultErrorCodeType::VALUE_AUTHENTICATIONFAILED
     * @uses EnumFaultErrorCodeType::VALUE_INVALIDDATAFORMAT
     * @uses EnumFaultErrorCodeType::VALUE_PERDAYMESSAGELIMIT
     * @uses EnumFaultErrorCodeType::VALUE_REQUESTSIZELIMIT
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumFaultErrorCodeType::VALUE_AUTHENTICATIONFAILED, EnumFaultErrorCodeType::VALUE_INVALIDDATAFORMAT, EnumFaultErrorCodeType::VALUE_PERDAYMESSAGELIMIT, EnumFaultErrorCodeType::VALUE_REQUESTSIZELIMIT));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}

class EnumMessageErrorCodeType extends WsdlClass {
    /**
     * Constant for value 'invalidRecipient'
     *
     * @return string 'invalidRecipient'
     */
    const VALUE_INVALIDRECIPIENT = 'invalidRecipient';
    /**
     * Constant for value 'recipientBlocked'
     *
     * @return string 'recipientBlocked'
     */
    const VALUE_RECIPIENTBLOCKED = 'recipientBlocked';
    /**
     * Constant for value 'emptyMessageContent'
     *
     * @return string 'emptyMessageContent'
     */
    const VALUE_EMPTYMESSAGECONTENT = 'emptyMessageContent';
    /**
     * Constant for value 'messageLengthLimit'
     *
     * @return string 'messageLengthLimit'
     */
    const VALUE_MESSAGELENGTHLIMIT = 'messageLengthLimit';
    /**
     * Constant for value 'other'
     *
     * @return string 'other'
     */
    const VALUE_OTHER = 'other';

    /**
     * Return true if value is allowed
     *
     * @uses EnumMessageErrorCodeType::VALUE_INVALIDRECIPIENT
     * @uses EnumMessageErrorCodeType::VALUE_RECIPIENTBLOCKED
     * @uses EnumMessageErrorCodeType::VALUE_EMPTYMESSAGECONTENT
     * @uses EnumMessageErrorCodeType::VALUE_MESSAGELENGTHLIMIT
     * @uses EnumMessageErrorCodeType::VALUE_OTHER
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumMessageErrorCodeType::VALUE_INVALIDRECIPIENT, EnumMessageErrorCodeType::VALUE_RECIPIENTBLOCKED, EnumMessageErrorCodeType::VALUE_EMPTYMESSAGECONTENT, EnumMessageErrorCodeType::VALUE_MESSAGELENGTHLIMIT, EnumMessageErrorCodeType::VALUE_OTHER));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}

class EnumMessageFormatType extends WsdlClass {
    /**
     * Constant for value 'SMS'
     *
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
    /**
     * Constant for value 'voice'
     *
     * @return string 'voice'
     */
    const VALUE_VOICE = 'voice';

    /**
     * Return true if value is allowed
     *
     * @uses EnumMessageFormatType::VALUE_SMS
     * @uses EnumMessageFormatType::VALUE_VOICE
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumMessageFormatType::VALUE_SMS, EnumMessageFormatType::VALUE_VOICE));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}

class EnumMessageSendModeType extends WsdlClass {
    /**
     * Constant for value 'dropAll'
     *
     * @return string 'dropAll'
     */
    const VALUE_DROPALL = 'dropAll';
    /**
     * Constant for value 'dropAllWithErrors'
     *
     * @return string 'dropAllWithErrors'
     */
    const VALUE_DROPALLWITHERRORS = 'dropAllWithErrors';
    /**
     * Constant for value 'dropAllWithSuccess'
     *
     * @return string 'dropAllWithSuccess'
     */
    const VALUE_DROPALLWITHSUCCESS = 'dropAllWithSuccess';
    /**
     * Constant for value 'normal'
     *
     * @return string 'normal'
     */
    const VALUE_NORMAL = 'normal';

    /**
     * Return true if value is allowed
     *
     * @uses EnumMessageSendModeType::VALUE_DROPALL
     * @uses EnumMessageSendModeType::VALUE_DROPALLWITHERRORS
     * @uses EnumMessageSendModeType::VALUE_DROPALLWITHSUCCESS
     * @uses EnumMessageSendModeType::VALUE_NORMAL
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumMessageSendModeType::VALUE_DROPALL, EnumMessageSendModeType::VALUE_DROPALLWITHERRORS, EnumMessageSendModeType::VALUE_DROPALLWITHSUCCESS, EnumMessageSendModeType::VALUE_NORMAL));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}

class EnumMessageSendVersionType extends WsdlClass {
    /**
     * Constant for value 1
     *
     * @return integer 1
     */
    const VALUE_1 = 1;
    /**
     * Constant for value 2
     *
     * @return integer 2
     */
    const VALUE_2 = 2;

    /**
     * Return true if value is allowed
     *
     * @uses EnumMessageSendVersionType::VALUE_1
     * @uses EnumMessageSendVersionType::VALUE_2
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value) {
        return in_array($_value, array(EnumMessageSendVersionType::VALUE_1, EnumMessageSendVersionType::VALUE_2));
    }

    /**
     * Method returning the class name
     *
     * @return string __CLASS__
     */
    public function __toString() {
        return __CLASS__;
    }
}
