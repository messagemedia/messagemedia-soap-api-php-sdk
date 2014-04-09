<?php
/*
 * TODO comment me
 */

class ServiceBlock extends WsdlClass {
    /**
     * Method to call the operation originally named blockNumbers
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructBlockNumbersRequestType $_structBlockNumbersRequestType
     * @return StructBlockNumbersResponseType
     */
    public function blockNumbers(StructBlockNumbersRequestType $_structBlockNumbersRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->blockNumbers($_structBlockNumbersRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructBlockNumbersResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceCheck extends WsdlClass {
    /**
     * Method to call the operation originally named checkUser
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructCheckUserRequestType $_structCheckUserRequestType
     * @return StructCheckUserResponseType
     */
    public function checkUser(StructCheckUserRequestType $_structCheckUserRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->checkUser($_structCheckUserRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named checkReplies
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructCheckRepliesRequestType $_structCheckRepliesRequestType
     * @return StructCheckRepliesResponseType
     */
    public function checkReplies(StructCheckRepliesRequestType $_structCheckRepliesRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->checkReplies($_structCheckRepliesRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named checkReports
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructCheckReportsRequestType $_structCheckReportsRequestType
     * @return StructCheckReportsResponseType
     */
    public function checkReports(StructCheckReportsRequestType $_structCheckReportsRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->checkReports($_structCheckReportsRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructCheckRepliesResponseType|StructCheckReportsResponseType|StructCheckUserResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceConfirm extends WsdlClass {
    /**
     * Method to call the operation originally named confirmReplies
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructConfirmRepliesRequestType $_structConfirmRepliesRequestType
     * @return StructConfirmRepliesResponseType
     */
    public function confirmReplies(StructConfirmRepliesRequestType $_structConfirmRepliesRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->confirmReplies($_structConfirmRepliesRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Method to call the operation originally named confirmReports
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructConfirmReportsRequestType $_structConfirmReportsRequestType
     * @return StructConfirmReportsResponseType
     */
    public function confirmReports(StructConfirmReportsRequestType $_structConfirmReportsRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->confirmReports($_structConfirmReportsRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructConfirmRepliesResponseType|StructConfirmReportsResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceDelete extends WsdlClass {
    /**
     * Method to call the operation originally named deleteScheduledMessages
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructDeleteScheduledMessagesRequestType $_structDeleteScheduledMessagesRequestType
     * @return StructDeleteScheduledMessagesResponseType
     */
    public function deleteScheduledMessages(StructDeleteScheduledMessagesRequestType $_structDeleteScheduledMessagesRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->deleteScheduledMessages($_structDeleteScheduledMessagesRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructDeleteScheduledMessagesResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceGet extends WsdlClass {
    /**
     * Method to call the operation originally named getBlockedNumbers
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructGetBlockedNumbersRequestType $_structGetBlockedNumbersRequestType
     * @return StructGetBlockedNumbersResponseType
     */
    public function getBlockedNumbers(StructGetBlockedNumbersRequestType $_structGetBlockedNumbersRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->getBlockedNumbers($_structGetBlockedNumbersRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructGetBlockedNumbersResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceSend extends WsdlClass {
    /**
     * Method to call the operation originally named sendMessages
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructSendMessagesRequestType $_structSendMessagesRequestType
     * @return StructSendMessagesResponseType
     */
    public function sendMessages(StructSendMessagesRequestType $_structSendMessagesRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->sendMessages($_structSendMessagesRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructSendMessagesResponseType
     */
    public function getResult() {
        return parent::getResult();
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

class ServiceUnblock extends WsdlClass {
    /**
     * Method to call the operation originally named unblockNumbers
     *
     * @uses WsdlClass::getSoapClient()
     * @uses WsdlClass::setResult()
     * @uses WsdlClass::saveLastError()
     * @param StructUnblockNumbersRequestType $_structUnblockNumbersRequestType
     * @return StructUnblockNumbersResponseType
     */
    public function unblockNumbers(StructUnblockNumbersRequestType $_structUnblockNumbersRequestType) {
        try {
            return $this->setResult(self::getSoapClient()->unblockNumbers($_structUnblockNumbersRequestType));
        } catch (SoapFault $soapFault) {
            return !$this->saveLastError(__METHOD__, $soapFault);
        }
    }

    /**
     * Returns the result
     *
     * @see WsdlClass::getResult()
     * @return StructUnblockNumbersResponseType
     */
    public function getResult() {
        return parent::getResult();
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
