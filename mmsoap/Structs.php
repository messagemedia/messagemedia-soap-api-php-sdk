<?php

class StructAccountDetailsType extends WsdlClass {
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - fixed : daily
     * - use : required
     *
     * @var string
     */
    public $type;
    /**
     * The creditLimit
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $creditLimit;
    /**
     * The creditRemaining
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $creditRemaining;

    /**
     * Constructor method for AccountDetailsType
     *
     * @see parent::__construct()
     * @param string      $_type
     * @param unsignedInt $_creditLimit
     * @param unsignedInt $_creditRemaining
     * @return StructAccountDetailsType
     */
    public function __construct($_type, $_creditLimit, $_creditRemaining) {
        parent::__construct(array('type' => $_type, 'creditLimit' => $_creditLimit, 'creditRemaining' => $_creditRemaining), false);
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @param string $_type the type
     * @return string
     */
    public function setType($_type) {
        return ($this->type = $_type);
    }

    /**
     * Get creditLimit value
     *
     * @return unsignedInt
     */
    public function getCreditLimit() {
        return $this->creditLimit;
    }

    /**
     * Set creditLimit value
     *
     * @param unsignedInt $_creditLimit the creditLimit
     * @return unsignedInt
     */
    public function setCreditLimit($_creditLimit) {
        return ($this->creditLimit = $_creditLimit);
    }

    /**
     * Get creditRemaining value
     *
     * @return unsignedInt
     */
    public function getCreditRemaining() {
        return $this->creditRemaining;
    }

    /**
     * Set creditRemaining value
     *
     * @param unsignedInt $_creditRemaining the creditRemaining
     * @return unsignedInt
     */
    public function setCreditRemaining($_creditRemaining) {
        return ($this->creditRemaining = $_creditRemaining);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructAccountDetailsType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructAuthenticationType extends WsdlClass {
    /**
     * The userId
     *
     * @var string
     */
    public $userId;
    /**
     * The password
     *
     * @var string
     */
    public $password;

    /**
     * Constructor method for AuthenticationType
     *
     * @see parent::__construct()
     * @param string $_userId
     * @param string $_password
     * @return StructAuthenticationType
     */
    public function __construct($_userId = null, $_password = null) {
        parent::__construct(array('userId' => $_userId, 'password' => $_password), false);
    }

    /**
     * Get userId value
     *
     * @return string|null
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * Set userId value
     *
     * @param string $_userId the userId
     * @return string
     */
    public function setUserId($_userId) {
        return ($this->userId = $_userId);
    }

    /**
     * Get password value
     *
     * @return string|null
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set password value
     *
     * @param string $_password the password
     * @return string
     */
    public function setPassword($_password) {
        return ($this->password = $_password);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructAuthenticationType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructBlockNumbersBodyType extends WsdlClass {
    /**
     * The recipients
     *
     * @var anyType
     */
    public $recipients;

    /**
     * Constructor method for BlockNumbersBodyType
     *
     * @see parent::__construct()
     * @param anyType $_recipients
     * @return StructBlockNumbersBodyType
     */
    public function __construct($_recipients = null) {
        parent::__construct(array('recipients' => $_recipients), false);
    }

    /**
     * Get recipients value
     *
     * @return anyType|null
     */
    public function getRecipients() {
        return $this->recipients;
    }

    /**
     * Set recipients value
     *
     * @param anyType $_recipients the recipients
     * @return anyType
     */
    public function setRecipients($_recipients) {
        return ($this->recipients = $_recipients);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructBlockNumbersBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructBlockNumbersRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for BlockNumbersRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructBlockNumbersRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructBlockNumbersRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructBlockNumbersResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for BlockNumbersResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructBlockNumbersResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructBlockNumbersResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructBlockNumbersResultType extends WsdlClass {
    /**
     * The blocked
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $blocked;
    /**
     * The failed
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $failed;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $errors;

    /**
     * Constructor method for BlockNumbersResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_blocked
     * @param unsignedInt $_failed
     * @param anyType     $_errors
     * @return StructBlockNumbersResultType
     */
    public function __construct($_blocked, $_failed, $_errors = null) {
        parent::__construct(array('blocked' => $_blocked, 'failed' => $_failed, 'errors' => $_errors), false);
    }

    /**
     * Get blocked value
     *
     * @return unsignedInt
     */
    public function getBlocked() {
        return $this->blocked;
    }

    /**
     * Set blocked value
     *
     * @param unsignedInt $_blocked the blocked
     * @return unsignedInt
     */
    public function setBlocked($_blocked) {
        return ($this->blocked = $_blocked);
    }

    /**
     * Get failed value
     *
     * @return unsignedInt
     */
    public function getFailed() {
        return $this->failed;
    }

    /**
     * Set failed value
     *
     * @param unsignedInt $_failed the failed
     * @return unsignedInt
     */
    public function setFailed($_failed) {
        return ($this->failed = $_failed);
    }

    /**
     * Get errors value
     *
     * @return anyType|null
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * Set errors value
     *
     * @param anyType $_errors the errors
     * @return anyType
     */
    public function setErrors($_errors) {
        return ($this->errors = $_errors);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructBlockNumbersResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckRepliesBodyType extends WsdlClass {
    /**
     * The maximumReplies
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var unsignedInt
     */
    public $maximumReplies;

    /**
     * Constructor method for CheckRepliesBodyType
     *
     * @see parent::__construct()
     * @param unsignedInt $_maximumReplies
     * @return StructCheckRepliesBodyType
     */
    public function __construct($_maximumReplies = null) {
        parent::__construct(array('maximumReplies' => $_maximumReplies), false);
    }

    /**
     * Get maximumReplies value
     *
     * @return unsignedInt|null
     */
    public function getMaximumReplies() {
        return $this->maximumReplies;
    }

    /**
     * Set maximumReplies value
     *
     * @param unsignedInt $_maximumReplies the maximumReplies
     * @return unsignedInt
     */
    public function setMaximumReplies($_maximumReplies) {
        return ($this->maximumReplies = $_maximumReplies);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckRepliesBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckRepliesRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for CheckRepliesRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructCheckRepliesRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckRepliesRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckRepliesResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for CheckRepliesResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructCheckRepliesResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckRepliesResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckRepliesResultType extends WsdlClass {
    /**
     * The returned
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $returned;
    /**
     * The remaining
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $remaining;
    /**
     * The replies
     *
     * @var anyType
     */
    public $replies;

    /**
     * Constructor method for CheckRepliesResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_returned
     * @param unsignedInt $_remaining
     * @param anyType     $_replies
     * @return StructCheckRepliesResultType
     */
    public function __construct($_returned, $_remaining, $_replies = null) {
        parent::__construct(array('returned' => $_returned, 'remaining' => $_remaining, 'replies' => $_replies), false);
    }

    /**
     * Get returned value
     *
     * @return unsignedInt
     */
    public function getReturned() {
        return $this->returned;
    }

    /**
     * Set returned value
     *
     * @param unsignedInt $_returned the returned
     * @return unsignedInt
     */
    public function setReturned($_returned) {
        return ($this->returned = $_returned);
    }

    /**
     * Get remaining value
     *
     * @return unsignedInt
     */
    public function getRemaining() {
        return $this->remaining;
    }

    /**
     * Set remaining value
     *
     * @param unsignedInt $_remaining the remaining
     * @return unsignedInt
     */
    public function setRemaining($_remaining) {
        return ($this->remaining = $_remaining);
    }

    /**
     * Get replies value
     *
     * @return anyType|null
     */
    public function getReplies() {
        return $this->replies;
    }

    /**
     * Set replies value
     *
     * @param anyType $_replies the replies
     * @return anyType
     */
    public function setReplies($_replies) {
        return ($this->replies = $_replies);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckRepliesResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckRepliesType extends WsdlClass {
    /**
     * The maximumReplies
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var unsignedInt
     */
    public $maximumReplies;

    /**
     * Constructor method for CheckRepliesType
     *
     * @see parent::__construct()
     * @param unsignedInt $_maximumReplies
     * @return StructCheckRepliesType
     */
    public function __construct($_maximumReplies = null) {
        parent::__construct(array('maximumReplies' => $_maximumReplies), false);
    }

    /**
     * Get maximumReplies value
     *
     * @return unsignedInt|null
     */
    public function getMaximumReplies() {
        return $this->maximumReplies;
    }

    /**
     * Set maximumReplies value
     *
     * @param unsignedInt $_maximumReplies the maximumReplies
     * @return unsignedInt
     */
    public function setMaximumReplies($_maximumReplies) {
        return ($this->maximumReplies = $_maximumReplies);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckRepliesType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckReportListType extends WsdlClass {
    /**
     * The maximumReports
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var unsignedInt
     */
    public $maximumReports;

    /**
     * Constructor method for CheckReportListType
     *
     * @see parent::__construct()
     * @param unsignedInt $_maximumReports
     * @return StructCheckReportListType
     */
    public function __construct($_maximumReports = null) {
        parent::__construct(array('maximumReports' => $_maximumReports), false);
    }

    /**
     * Get maximumReports value
     *
     * @return unsignedInt|null
     */
    public function getMaximumReports() {
        return $this->maximumReports;
    }

    /**
     * Set maximumReports value
     *
     * @param unsignedInt $_maximumReports the maximumReports
     * @return unsignedInt
     */
    public function setMaximumReports($_maximumReports) {
        return ($this->maximumReports = $_maximumReports);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckReportListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckReportsBodyType extends WsdlClass {
    /**
     * The maximumReports
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var unsignedInt
     */
    public $maximumReports;

    /**
     * Constructor method for CheckReportsBodyType
     *
     * @see parent::__construct()
     * @param unsignedInt $_maximumReports
     * @return StructCheckReportsBodyType
     */
    public function __construct($_maximumReports = null) {
        parent::__construct(array('maximumReports' => $_maximumReports), false);
    }

    /**
     * Get maximumReports value
     *
     * @return unsignedInt|null
     */
    public function getMaximumReports() {
        return $this->maximumReports;
    }

    /**
     * Set maximumReports value
     *
     * @param unsignedInt $_maximumReports the maximumReports
     * @return unsignedInt
     */
    public function setMaximumReports($_maximumReports) {
        return ($this->maximumReports = $_maximumReports);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckReportsBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckReportsRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for CheckReportsRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructCheckReportsRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckReportsRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckReportsResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for CheckReportsResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructCheckReportsResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckReportsResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckReportsResultType extends WsdlClass {
    /**
     * The returned
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $returned;
    /**
     * The remaining
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $remaining;
    /**
     * The reports
     *
     * @var anyType
     */
    public $reports;

    /**
     * Constructor method for CheckReportsResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_returned
     * @param unsignedInt $_remaining
     * @param anyType     $_reports
     * @return StructCheckReportsResultType
     */
    public function __construct($_returned, $_remaining, $_reports = null) {
        parent::__construct(array('returned' => $_returned, 'remaining' => $_remaining, 'reports' => $_reports), false);
    }

    /**
     * Get returned value
     *
     * @return unsignedInt
     */
    public function getReturned() {
        return $this->returned;
    }

    /**
     * Set returned value
     *
     * @param unsignedInt $_returned the returned
     * @return unsignedInt
     */
    public function setReturned($_returned) {
        return ($this->returned = $_returned);
    }

    /**
     * Get remaining value
     *
     * @return unsignedInt
     */
    public function getRemaining() {
        return $this->remaining;
    }

    /**
     * Set remaining value
     *
     * @param unsignedInt $_remaining the remaining
     * @return unsignedInt
     */
    public function setRemaining($_remaining) {
        return ($this->remaining = $_remaining);
    }

    /**
     * Get reports value
     *
     * @return anyType|null
     */
    public function getReports() {
        return $this->reports;
    }

    /**
     * Set reports value
     *
     * @param anyType $_reports the reports
     * @return anyType
     */
    public function setReports($_reports) {
        return ($this->reports = $_reports);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckReportsResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckUserRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;

    /**
     * Constructor method for CheckUserRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @return StructCheckUserRequestType
     */
    public function __construct($_authentication = null) {
        parent::__construct(array('authentication' => $_authentication), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckUserRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckUserResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var StructCheckUserResultType
     */
    public $result;

    /**
     * Constructor method for CheckUserResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructCheckUserResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckUserResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructCheckUserResultType extends WsdlClass {
    /**
     * The accountDetails
     *
     * @var StructAccountDetailsType
     */
    public $accountDetails;

    /**
     * Constructor method for CheckUserResultType
     *
     * @see parent::__construct()
     * @param StructAccountDetailsType $_accountDetails
     * @return StructCheckUserResultType
     */
    public function __construct($_accountDetails = null) {
        parent::__construct(array('accountDetails' => $_accountDetails), false);
    }

    /**
     * Get accountDetails value
     *
     * @return StructAccountDetailsType|null
     */
    public function getAccountDetails() {
        return $this->accountDetails;
    }

    /**
     * Set accountDetails value
     *
     * @param StructAccountDetailsType $_accountDetails the accountDetails
     * @return StructAccountDetailsType
     */
    public function setAccountDetails($_accountDetails) {
        return ($this->accountDetails = $_accountDetails);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructCheckUserResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmItemType extends WsdlClass {
    /**
     * The receiptId
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $receiptId;

    /**
     * Constructor method for ConfirmItemType
     *
     * @see parent::__construct()
     * @param unsignedInt $_receiptId
     * @return StructConfirmItemType
     */
    public function __construct($_receiptId) {
        parent::__construct(array('receiptId' => $_receiptId), false);
    }

    /**
     * Get receiptId value
     *
     * @return unsignedInt
     */
    public function getReceiptId() {
        return $this->receiptId;
    }

    /**
     * Set receiptId value
     *
     * @param unsignedInt $_receiptId the receiptId
     * @return unsignedInt
     */
    public function setReceiptId($_receiptId) {
        return ($this->receiptId = $_receiptId);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmItemType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmRepliesBodyType extends WsdlClass {
    /**
     * The replies
     *
     * @var anyType
     */
    public $replies;

    /**
     * Constructor method for ConfirmRepliesBodyType
     *
     * @see parent::__construct()
     * @param anyType $_replies
     * @return StructConfirmRepliesBodyType
     */
    public function __construct($_replies = null) {
        parent::__construct(array('replies' => $_replies), false);
    }

    /**
     * Get replies value
     *
     * @return anyType|null
     */
    public function getReplies() {
        return $this->replies;
    }

    /**
     * Set replies value
     *
     * @param anyType $_replies the replies
     * @return anyType
     */
    public function setReplies($_replies) {
        return ($this->replies = $_replies);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmRepliesBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmRepliesRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for ConfirmRepliesRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructConfirmRepliesRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmRepliesRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmRepliesResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for ConfirmRepliesResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructConfirmRepliesResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmRepliesResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmRepliesResultType extends WsdlClass {
    /**
     * The confirmed
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $confirmed;

    /**
     * Constructor method for ConfirmRepliesResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_confirmed
     * @return StructConfirmRepliesResultType
     */
    public function __construct($_confirmed) {
        parent::__construct(array('confirmed' => $_confirmed), false);
    }

    /**
     * Get confirmed value
     *
     * @return unsignedInt
     */
    public function getConfirmed() {
        return $this->confirmed;
    }

    /**
     * Set confirmed value
     *
     * @param unsignedInt $_confirmed the confirmed
     * @return unsignedInt
     */
    public function setConfirmed($_confirmed) {
        return ($this->confirmed = $_confirmed);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmRepliesResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReplyListType extends WsdlClass {
    /**
     * The reply
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $reply;

    /**
     * Constructor method for ConfirmReplyListType
     *
     * @see parent::__construct()
     * @param anyType $_reply
     * @return StructConfirmReplyListType
     */
    public function __construct($_reply = null) {
        parent::__construct(array('reply' => $_reply), false);
    }

    /**
     * Get reply value
     *
     * @return anyType|null
     */
    public function getReply() {
        return $this->reply;
    }

    /**
     * Set reply value
     *
     * @param anyType $_reply the reply
     * @return anyType
     */
    public function setReply($_reply) {
        return ($this->reply = $_reply);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReplyListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReportListType extends WsdlClass {
    /**
     * The report
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $report;

    /**
     * Constructor method for ConfirmReportListType
     *
     * @see parent::__construct()
     * @param anyType $_report
     * @return StructConfirmReportListType
     */
    public function __construct($_report = null) {
        parent::__construct(array('report' => $_report), false);
    }

    /**
     * Get report value
     *
     * @return anyType|null
     */
    public function getReport() {
        return $this->report;
    }

    /**
     * Set report value
     *
     * @param anyType $_report the report
     * @return anyType
     */
    public function setReport($_report) {
        return ($this->report = $_report);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReportListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReportsBodyType extends WsdlClass {
    /**
     * The reports
     *
     * @var anyType
     */
    public $reports;

    /**
     * Constructor method for ConfirmReportsBodyType
     *
     * @see parent::__construct()
     * @param anyType $_reports
     * @return StructConfirmReportsBodyType
     */
    public function __construct($_reports = null) {
        parent::__construct(array('reports' => $_reports), false);
    }

    /**
     * Get reports value
     *
     * @return anyType|null
     */
    public function getReports() {
        return $this->reports;
    }

    /**
     * Set reports value
     *
     * @param anyType $_reports the reports
     * @return anyType
     */
    public function setReports($_reports) {
        return ($this->reports = $_reports);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReportsBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReportsRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for ConfirmReportsRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructConfirmReportsRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReportsRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReportsResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for ConfirmReportsResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructConfirmReportsResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReportsResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructConfirmReportsResultType extends WsdlClass {
    /**
     * The confirmed
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $confirmed;

    /**
     * Constructor method for ConfirmReportsResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_confirmed
     * @return StructConfirmReportsResultType
     */
    public function __construct($_confirmed) {
        parent::__construct(array('confirmed' => $_confirmed), false);
    }

    /**
     * Get confirmed value
     *
     * @return unsignedInt
     */
    public function getConfirmed() {
        return $this->confirmed;
    }

    /**
     * Set confirmed value
     *
     * @param unsignedInt $_confirmed the confirmed
     * @return unsignedInt
     */
    public function setConfirmed($_confirmed) {
        return ($this->confirmed = $_confirmed);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructConfirmReportsResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructDeleteScheduledMessagesBodyType extends WsdlClass {
    /**
     * The messages
     *
     * @var anyType
     */
    public $messages;

    /**
     * Constructor method for DeleteScheduledMessagesBodyType
     *
     * @see parent::__construct()
     * @param anyType $_messages
     * @return StructDeleteScheduledMessagesBodyType
     */
    public function __construct($_messages = null) {
        parent::__construct(array('messages' => $_messages), false);
    }

    /**
     * Get messages value
     *
     * @return anyType|null
     */
    public function getMessages() {
        return $this->messages;
    }

    /**
     * Set messages value
     *
     * @param anyType $_messages the messages
     * @return anyType
     */
    public function setMessages($_messages) {
        return ($this->messages = $_messages);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructDeleteScheduledMessagesBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructDeleteScheduledMessagesRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for DeleteScheduledMessagesRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructDeleteScheduledMessagesRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructDeleteScheduledMessagesRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructDeleteScheduledMessagesResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for DeleteScheduledMessagesResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructDeleteScheduledMessagesResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructDeleteScheduledMessagesResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructDeleteScheduledMessagesResultType extends WsdlClass {
    /**
     * The unscheduled
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $unscheduled;

    /**
     * Constructor method for DeleteScheduledMessagesResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_unscheduled
     * @return StructDeleteScheduledMessagesResultType
     */
    public function __construct($_unscheduled) {
        parent::__construct(array('unscheduled' => $_unscheduled), false);
    }

    /**
     * Get unscheduled value
     *
     * @return unsignedInt
     */
    public function getUnscheduled() {
        return $this->unscheduled;
    }

    /**
     * Set unscheduled value
     *
     * @param unsignedInt $_unscheduled the unscheduled
     * @return unsignedInt
     */
    public function setUnscheduled($_unscheduled) {
        return ($this->unscheduled = $_unscheduled);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructDeleteScheduledMessagesResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructFaultResponseType extends WsdlClass {
    /**
     * The error
     *
     * @var anyType
     */
    public $error;

    /**
     * Constructor method for FaultResponseType
     *
     * @see parent::__construct()
     * @param anyType $_error
     * @return StructFaultResponseType
     */
    public function __construct($_error = null) {
        parent::__construct(array('error' => $_error), false);
    }

    /**
     * Get error value
     *
     * @return anyType|null
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Set error value
     *
     * @param anyType $_error the error
     * @return anyType
     */
    public function setError($_error) {
        return ($this->error = $_error);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructFaultResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructFaultResultType extends WsdlClass {
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var EnumFaultErrorCodeType
     */
    public $code;

    /**
     * Constructor method for FaultResultType
     *
     * @see parent::__construct()
     * @param EnumFaultErrorCodeType $_code
     * @return StructFaultResultType
     */
    public function __construct($_code) {
        parent::__construct(array('code' => $_code), false);
    }

    /**
     * Get code value
     *
     * @return EnumFaultErrorCodeType
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set code value
     *
     * @uses EnumFaultErrorCodeType::valueIsValid()
     * @param EnumFaultErrorCodeType $_code the code
     * @return EnumFaultErrorCodeType
     */
    public function setCode($_code) {
        if (!EnumFaultErrorCodeType::valueIsValid($_code)) {
            return false;
        }
        return ($this->code = $_code);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructFaultResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructGetBlockedNumbersBodyType extends WsdlClass {
    /**
     * The maximumRecipients
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var unsignedInt
     */
    public $maximumRecipients;

    /**
     * Constructor method for GetBlockedNumbersBodyType
     *
     * @see parent::__construct()
     * @param unsignedInt $_maximumRecipients
     * @return StructGetBlockedNumbersBodyType
     */
    public function __construct($_maximumRecipients = null) {
        parent::__construct(array('maximumRecipients' => $_maximumRecipients), false);
    }

    /**
     * Get maximumRecipients value
     *
     * @return unsignedInt|null
     */
    public function getMaximumRecipients() {
        return $this->maximumRecipients;
    }

    /**
     * Set maximumRecipients value
     *
     * @param unsignedInt $_maximumRecipients the maximumRecipients
     * @return unsignedInt
     */
    public function setMaximumRecipients($_maximumRecipients) {
        return ($this->maximumRecipients = $_maximumRecipients);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructGetBlockedNumbersBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructGetBlockedNumbersRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for GetBlockedNumbersRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructGetBlockedNumbersRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructGetBlockedNumbersRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructGetBlockedNumbersResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var StructGetBlockedNumbersResultType
     */
    public $result;

    /**
     * Constructor method for GetBlockedNumbersResponseType
     *
     * @see parent::__construct()
     * @param StructGetBlockedNumbersResultType $_result
     * @return StructGetBlockedNumbersResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return StructGetBlockedNumbersResultType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param StructGetBlockedNumbersResultType $_result the result
     * @return StructGetBlockedNumbersResultType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructGetBlockedNumbersResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructGetBlockedNumbersResultType extends WsdlClass {
    /**
     * The found
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $found;
    /**
     * The returned
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $returned;
    /**
     * The recipients
     *
     * @var StructRecipientsType
     */
    public $recipients;

    /**
     * Constructor method for GetBlockedNumbersResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_found
     * @param unsignedInt $_returned
     * @param anyType     $_recipients
     * @return StructGetBlockedNumbersResultType
     */
    public function __construct($_found, $_returned, $_recipients = null) {
        parent::__construct(array('found' => $_found, 'returned' => $_returned, 'recipients' => $_recipients), false);
    }

    /**
     * Get found value
     *
     * @return unsignedInt
     */
    public function getFound() {
        return $this->found;
    }

    /**
     * Set found value
     *
     * @param unsignedInt $_found the found
     * @return unsignedInt
     */
    public function setFound($_found) {
        return ($this->found = $_found);
    }

    /**
     * Get returned value
     *
     * @return unsignedInt
     */
    public function getReturned() {
        return $this->returned;
    }

    /**
     * Set returned value
     *
     * @param unsignedInt $_returned the returned
     * @return unsignedInt
     */
    public function setReturned($_returned) {
        return ($this->returned = $_returned);
    }

    /**
     * Get recipients value
     *
     * @return anyType|null
     */
    public function getRecipients() {
        return $this->recipients;
    }

    /**
     * Set recipients value
     *
     * @param anyType $_recipients the recipients
     * @return anyType
     */
    public function setRecipients($_recipients) {
        return ($this->recipients = $_recipients);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructGetBlockedNumbersResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageErrorListType extends WsdlClass {
    /**
     * The error
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $error;

    /**
     * Constructor method for MessageErrorListType
     *
     * @see parent::__construct()
     * @param anyType $_error
     * @return StructMessageErrorListType
     */
    public function __construct($_error = null) {
        parent::__construct(array('error' => $_error), false);
    }

    /**
     * Get error value
     *
     * @return anyType|null
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Set error value
     *
     * @param anyType $_error the error
     * @return anyType
     */
    public function setError($_error) {
        return ($this->error = $_error);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageErrorListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageErrorType extends WsdlClass {
    /**
     * The code
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var EnumMessageErrorCodeType
     */
    public $code;
    /**
     * The sequenceNumber
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $sequenceNumber;
    /**
     * The recipients
     *
     * @var anyType
     */
    public $recipients;
    /**
     * The content
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var string
     */
    public $content;

    /**
     * Constructor method for MessageErrorType
     *
     * @see parent::__construct()
     * @param EnumMessageErrorCodeType $_code
     * @param unsignedInt              $_sequenceNumber
     * @param anyType                  $_recipients
     * @param string                   $_content
     * @return StructMessageErrorType
     */
    public function __construct($_code, $_sequenceNumber, $_recipients = null, $_content = null) {
        parent::__construct(array('code' => $_code, 'sequenceNumber' => $_sequenceNumber, 'recipients' => $_recipients, 'content' => $_content), false);
    }

    /**
     * Get code value
     *
     * @return EnumMessageErrorCodeType
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set code value
     *
     * @uses EnumMessageErrorCodeType::valueIsValid()
     * @param EnumMessageErrorCodeType $_code the code
     * @return EnumMessageErrorCodeType
     */
    public function setCode($_code) {
        if (!EnumMessageErrorCodeType::valueIsValid($_code)) {
            return false;
        }
        return ($this->code = $_code);
    }

    /**
     * Get sequenceNumber value
     *
     * @return unsignedInt
     */
    public function getSequenceNumber() {
        return $this->sequenceNumber;
    }

    /**
     * Set sequenceNumber value
     *
     * @param unsignedInt $_sequenceNumber the sequenceNumber
     * @return unsignedInt
     */
    public function setSequenceNumber($_sequenceNumber) {
        return ($this->sequenceNumber = $_sequenceNumber);
    }

    /**
     * Get recipients value
     *
     * @return anyType|null
     */
    public function getRecipients() {
        return $this->recipients;
    }

    /**
     * Set recipients value
     *
     * @param anyType $_recipients the recipients
     * @return anyType
     */
    public function setRecipients($_recipients) {
        return ($this->recipients = $_recipients);
    }

    /**
     * Get content value
     *
     * @return string|null
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set content value
     *
     * @param string $_content the content
     * @return string
     */
    public function setContent($_content) {
        return ($this->content = $_content);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageErrorType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageIdListType extends WsdlClass {
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $message;

    /**
     * Constructor method for MessageIdListType
     *
     * @see parent::__construct()
     * @param anyType $_message
     * @return StructMessageIdListType
     */
    public function __construct($_message = null) {
        parent::__construct(array('message' => $_message), false);
    }

    /**
     * Get message value
     *
     * @return anyType|null
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set message value
     *
     * @param anyType $_message the message
     * @return anyType
     */
    public function setMessage($_message) {
        return ($this->message = $_message);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageIdListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageIdType extends WsdlClass {
    /**
     * The messageId
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $messageId;

    /**
     * Constructor method for MessageIdType
     *
     * @see parent::__construct()
     * @param unsignedInt $_messageId
     * @return StructMessageIdType
     */
    public function __construct($_messageId) {
        parent::__construct(array('messageId' => $_messageId), false);
    }

    /**
     * Get messageId value
     *
     * @return unsignedInt
     */
    public function getMessageId() {
        return $this->messageId;
    }

    /**
     * Set messageId value
     *
     * @param unsignedInt $_messageId the messageId
     * @return unsignedInt
     */
    public function setMessageId($_messageId) {
        return ($this->messageId = $_messageId);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageIdType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageListType extends WsdlClass {
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $message;
    /**
     * The sendMode
     * Meta informations extracted from the WSDL
     * - default : normal
     * - use : optional
     *
     * @var EnumMessageSendModeType
     */
    public $sendMode;

    /**
     * Constructor method for MessageListType
     *
     * @see parent::__construct()
     * @param anyType                 $_message
     * @param EnumMessageSendModeType $_sendMode
     * @return StructMessageListType
     */
    public function __construct($_message = null, $_sendMode = 'normal') {
        parent::__construct(array('message' => $_message, 'sendMode' => $_sendMode), false);
    }

    /**
     * Get message value
     *
     * @return anyType|null
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * Set message value
     *
     * @param anyType $_message the message
     * @return anyType
     */
    public function setMessage($_message) {
        return ($this->message = $_message);
    }

    /**
     * Get sendMode value
     *
     * @return EnumMessageSendModeType|null
     */
    public function getSendMode() {
        return $this->sendMode;
    }

    /**
     * Set sendMode value
     *
     * @uses EnumMessageSendModeType::valueIsValid()
     * @param EnumMessageSendModeType $_sendMode the sendMode
     * @return EnumMessageSendModeType
     */
    public function setSendMode($_sendMode) {
        if (!EnumMessageSendModeType::valueIsValid($_sendMode)) {
            return false;
        }
        return ($this->sendMode = $_sendMode);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageTagListType extends WsdlClass {
    /**
     * The tag
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var anyType
     */
    public $tag;

    /**
     * Constructor method for MessageTagListType
     *
     * @see parent::__construct()
     * @param anyType $_tag
     * @return StructMessageTagListType
     */
    public function __construct($_tag = null) {
        parent::__construct(array('tag' => $_tag), false);
    }

    /**
     * Get tag value
     *
     * @return anyType|null
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * Set tag value
     *
     * @param anyType $_tag the tag
     * @return anyType
     */
    public function setTag($_tag) {
        return ($this->tag = $_tag);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageTagListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageTagType extends WsdlClass {
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var string
     */
    public $name;
    /**
     * The _
     *
     * @var string
     */
    public $_;

    /**
     * Constructor method for MessageTagType
     *
     * @see parent::__construct()
     * @param string $_name
     * @param string $__
     * @return StructMessageTagType
     */
    public function __construct($_name, $__ = null) {
        parent::__construct(array('name' => $_name, '_' => $__), false);
    }

    /**
     * Get name value
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set name value
     *
     * @param string $_name the name
     * @return string
     */
    public function setName($_name) {
        return ($this->name = $_name);
    }

    /**
     * Get _ value
     *
     * @return string|null
     */
    public function get_() {
        return $this->_;
    }

    /**
     * Set _ value
     *
     * @param string $__ the _
     * @return string
     */
    public function set_($__) {
        return ($this->_ = $__);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageTagType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructMessageType extends WsdlClass {
    /**
     * The origin
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var string
     */
    public $origin;
    /**
     * The recipients
     *
     * @var anyType
     */
    public $recipients;
    /**
     * The content
     *
     * @var string
     */
    public $content;
    /**
     * The scheduled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var dateTime
     */
    public $scheduled;
    /**
     * The deliveryReport
     * Meta informations extracted from the WSDL
     * - default : false
     * - minOccurs : 0
     *
     * @var boolean
     */
    public $deliveryReport;
    /**
     * The validityPeriod
     * Meta informations extracted from the WSDL
     * - default : 169
     * - minOccurs : 0
     *
     * @var unsignedByte
     */
    public $validityPeriod;
    /**
     * The tags
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $tags;
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - default : SMS
     * - use : optional
     *
     * @var EnumMessageFormatType
     */
    public $format;
    /**
     * The sequenceNumber
     * Meta informations extracted from the WSDL
     * - default : 0
     * - use : optional
     *
     * @var unsignedInt
     */
    public $sequenceNumber;

    /**
     * Constructor method for MessageType
     *
     * @see parent::__construct()
     * @param string                $_origin
     * @param anyType               $_recipients
     * @param string                $_content
     * @param dateTime              $_scheduled
     * @param boolean               $_deliveryReport
     * @param unsignedByte          $_validityPeriod
     * @param anyType               $_tags
     * @param EnumMessageFormatType $_format
     * @param unsignedInt           $_sequenceNumber
     * @return StructMessageType
     */
    public function __construct($_origin = null, $_recipients = null, $_content = null, $_scheduled = null, $_deliveryReport = false, $_validityPeriod = 169, $_tags = null, $_format = 'SMS', $_sequenceNumber = 0) {
        parent::__construct(array('origin' => $_origin, 'recipients' => $_recipients, 'content' => $_content, 'scheduled' => $_scheduled, 'deliveryReport' => $_deliveryReport, 'validityPeriod' => $_validityPeriod, 'tags' => $_tags, 'format' => $_format, 'sequenceNumber' => $_sequenceNumber), false);
    }

    /**
     * Get origin value
     *
     * @return string|null
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * Set origin value
     *
     * @param string $_origin the origin
     * @return string
     */
    public function setOrigin($_origin) {
        return ($this->origin = $_origin);
    }

    /**
     * Get recipients value
     *
     * @return anyType|null
     */
    public function getRecipients() {
        return $this->recipients;
    }

    /**
     * Set recipients value
     *
     * @param anyType $_recipients the recipients
     * @return anyType
     */
    public function setRecipients($_recipients) {
        return ($this->recipients = $_recipients);
    }

    /**
     * Get content value
     *
     * @return string|null
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set content value
     *
     * @param string $_content the content
     * @return string
     */
    public function setContent($_content) {
        return ($this->content = $_content);
    }

    /**
     * Get scheduled value
     *
     * @return dateTime|null
     */
    public function getScheduled() {
        return $this->scheduled;
    }

    /**
     * Set scheduled value
     *
     * @param dateTime $_scheduled the scheduled
     * @return dateTime
     */
    public function setScheduled($_scheduled) {
        return ($this->scheduled = $_scheduled);
    }

    /**
     * Get deliveryReport value
     *
     * @return boolean|null
     */
    public function getDeliveryReport() {
        return $this->deliveryReport;
    }

    /**
     * Set deliveryReport value
     *
     * @param boolean $_deliveryReport the deliveryReport
     * @return boolean
     */
    public function setDeliveryReport($_deliveryReport) {
        return ($this->deliveryReport = $_deliveryReport);
    }

    /**
     * Get validityPeriod value
     *
     * @return unsignedByte|null
     */
    public function getValidityPeriod() {
        return $this->validityPeriod;
    }

    /**
     * Set validityPeriod value
     *
     * @param unsignedByte $_validityPeriod the validityPeriod
     * @return unsignedByte
     */
    public function setValidityPeriod($_validityPeriod) {
        return ($this->validityPeriod = $_validityPeriod);
    }

    /**
     * Get tags value
     *
     * @return anyType|null
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Set tags value
     *
     * @param anyType $_tags the tags
     * @return anyType
     */
    public function setTags($_tags) {
        return ($this->tags = $_tags);
    }

    /**
     * Get format value
     *
     * @return EnumMessageFormatType|null
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Set format value
     *
     * @uses EnumMessageFormatType::valueIsValid()
     * @param EnumMessageFormatType $_format the format
     * @return EnumMessageFormatType
     */
    public function setFormat($_format) {
        if (!EnumMessageFormatType::valueIsValid($_format)) {
            return false;
        }
        return ($this->format = $_format);
    }

    /**
     * Get sequenceNumber value
     *
     * @return unsignedInt|null
     */
    public function getSequenceNumber() {
        return $this->sequenceNumber;
    }

    /**
     * Set sequenceNumber value
     *
     * @param unsignedInt $_sequenceNumber the sequenceNumber
     * @return unsignedInt
     */
    public function setSequenceNumber($_sequenceNumber) {
        return ($this->sequenceNumber = $_sequenceNumber);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructMessageType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructRecipientsType extends WsdlClass {
    /**
     * The recipient
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     *
     * @var StructRecipientType
     */
    public $recipient;

    /**
     * Constructor method for RecipientsType
     *
     * @see parent::__construct()
     * @param anyType $_recipient
     * @return StructRecipientsType
     */
    public function __construct($_recipient = null) {
        parent::__construct(array('recipient' => $_recipient), false);
    }

    /**
     * Get recipient value
     *
     * @return anyType|null
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * Set recipient value
     *
     * @param anyType $_recipient the recipient
     * @return anyType
     */
    public function setRecipient($_recipient) {
        return ($this->recipient = $_recipient);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructRecipientsType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructRecipientType extends WsdlClass {
    /**
     * The _
     *
     * @var string
     */
    public $_;
    /**
     * The uid
     * Meta informations extracted from the WSDL
     * - default : 0
     * - use : optional
     *
     * @var unsignedInt
     */
    public $uid;

    /**
     * Constructor method for RecipientType
     *
     * @see parent::__construct()
     * @param string      $__
     * @param unsignedInt $_uid
     * @return StructRecipientType
     */
    public function __construct($__ = null, $_uid = 0) {
        parent::__construct(array('_' => $__, 'uid' => $_uid), false);
    }

    /**
     * Get _ value
     *
     * @return string|null
     */
    public function get_() {
        return $this->_;
    }

    /**
     * Set _ value
     *
     * @param string $__ the _
     * @return string
     */
    public function set_($__) {
        return ($this->_ = $__);
    }

    /**
     * Get uid value
     *
     * @return unsignedInt|null
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Set uid value
     *
     * @param unsignedInt $_uid the uid
     * @return unsignedInt
     */
    public function setUid($_uid) {
        return ($this->uid = $_uid);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructRecipientType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructReplyListType extends WsdlClass {
    /**
     * The reply
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $reply;

    /**
     * Constructor method for ReplyListType
     *
     * @see parent::__construct()
     * @param anyType $_reply
     * @return StructReplyListType
     */
    public function __construct($_reply = null) {
        parent::__construct(array('reply' => $_reply), false);
    }

    /**
     * Get reply value
     *
     * @return anyType|null
     */
    public function getReply() {
        return $this->reply;
    }

    /**
     * Set reply value
     *
     * @param anyType $_reply the reply
     * @return anyType
     */
    public function setReply($_reply) {
        return ($this->reply = $_reply);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructReplyListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructReplyType extends WsdlClass {
    /**
     * The format
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var EnumMessageFormatType
     */
    public $format;
    /**
     * The uid
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $uid;
    /**
     * The receiptId
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $receiptId;
    /**
     * The origin
     *
     * @var string
     */
    public $origin;
    /**
     * The received
     *
     * @var dateTime
     */
    public $received;
    /**
     * The content
     *
     * @var string
     */
    public $content;

    /**
     * Constructor method for ReplyType
     *
     * @see parent::__construct()
     * @param EnumMessageFormatType $_format
     * @param unsignedInt           $_uid
     * @param unsignedInt           $_receiptId
     * @param string                $_origin
     * @param dateTime              $_received
     * @param string                $_content
     * @return StructReplyType
     */
    public function __construct($_format, $_uid, $_receiptId, $_origin = null, $_received = null, $_content = null) {
        parent::__construct(array('format' => $_format, 'uid' => $_uid, 'receiptId' => $_receiptId, 'origin' => $_origin, 'received' => $_received, 'content' => $_content), false);
    }

    /**
     * Get format value
     *
     * @return EnumMessageFormatType
     */
    public function getFormat() {
        return $this->format;
    }

    /**
     * Set format value
     *
     * @uses EnumMessageFormatType::valueIsValid()
     * @param EnumMessageFormatType $_format the format
     * @return EnumMessageFormatType
     */
    public function setFormat($_format) {
        if (!EnumMessageFormatType::valueIsValid($_format)) {
            return false;
        }
        return ($this->format = $_format);
    }

    /**
     * Get uid value
     *
     * @return unsignedInt
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Set uid value
     *
     * @param unsignedInt $_uid the uid
     * @return unsignedInt
     */
    public function setUid($_uid) {
        return ($this->uid = $_uid);
    }

    /**
     * Get receiptId value
     *
     * @return unsignedInt
     */
    public function getReceiptId() {
        return $this->receiptId;
    }

    /**
     * Set receiptId value
     *
     * @param unsignedInt $_receiptId the receiptId
     * @return unsignedInt
     */
    public function setReceiptId($_receiptId) {
        return ($this->receiptId = $_receiptId);
    }

    /**
     * Get origin value
     *
     * @return string|null
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * Set origin value
     *
     * @param string $_origin the origin
     * @return string
     */
    public function setOrigin($_origin) {
        return ($this->origin = $_origin);
    }

    /**
     * Get received value
     *
     * @return dateTime|null
     */
    public function getReceived() {
        return $this->received;
    }

    /**
     * Set received value
     *
     * @param dateTime $_received the received
     * @return dateTime
     */
    public function setReceived($_received) {
        return ($this->received = $_received);
    }

    /**
     * Get content value
     *
     * @return string|null
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set content value
     *
     * @param string $_content the content
     * @return string
     */
    public function setContent($_content) {
        return ($this->content = $_content);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructReplyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructReportListType extends WsdlClass {
    /**
     * The report
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $report;

    /**
     * Constructor method for ReportListType
     *
     * @see parent::__construct()
     * @param anyType $_report
     * @return StructReportListType
     */
    public function __construct($_report = null) {
        parent::__construct(array('report' => $_report), false);
    }

    /**
     * Get report value
     *
     * @return anyType|null
     */
    public function getReport() {
        return $this->report;
    }

    /**
     * Set report value
     *
     * @param anyType $_report the report
     * @return anyType
     */
    public function setReport($_report) {
        return ($this->report = $_report);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructReportListType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructReportType extends WsdlClass {
    /**
     * The uid
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $uid;
    /**
     * The receiptId
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $receiptId;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var EnumDeliveryStatusType
     */
    public $status;
    /**
     * The recipient
     *
     * @var string
     */
    public $recipient;
    /**
     * The timestamp
     *
     * @var dateTime
     */
    public $timestamp;

    /**
     * Constructor method for ReportType
     *
     * @see parent::__construct()
     * @param unsignedInt            $_uid
     * @param unsignedInt            $_receiptId
     * @param EnumDeliveryStatusType $_status
     * @param string                 $_recipient
     * @param dateTime               $_timestamp
     * @return StructReportType
     */
    public function __construct($_uid, $_receiptId, $_status, $_recipient = null, $_timestamp = null) {
        parent::__construct(array('uid' => $_uid, 'receiptId' => $_receiptId, 'status' => $_status, 'recipient' => $_recipient, 'timestamp' => $_timestamp), false);
    }

    /**
     * Get uid value
     *
     * @return unsignedInt
     */
    public function getUid() {
        return $this->uid;
    }

    /**
     * Set uid value
     *
     * @param unsignedInt $_uid the uid
     * @return unsignedInt
     */
    public function setUid($_uid) {
        return ($this->uid = $_uid);
    }

    /**
     * Get receiptId value
     *
     * @return unsignedInt
     */
    public function getReceiptId() {
        return $this->receiptId;
    }

    /**
     * Set receiptId value
     *
     * @param unsignedInt $_receiptId the receiptId
     * @return unsignedInt
     */
    public function setReceiptId($_receiptId) {
        return ($this->receiptId = $_receiptId);
    }

    /**
     * Get status value
     *
     * @return EnumDeliveryStatusType
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set status value
     *
     * @uses EnumDeliveryStatusType::valueIsValid()
     * @param EnumDeliveryStatusType $_status the status
     * @return EnumDeliveryStatusType
     */
    public function setStatus($_status) {
        if (!EnumDeliveryStatusType::valueIsValid($_status)) {
            return false;
        }
        return ($this->status = $_status);
    }

    /**
     * Get recipient value
     *
     * @return string|null
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * Set recipient value
     *
     * @param string $_recipient the recipient
     * @return string
     */
    public function setRecipient($_recipient) {
        return ($this->recipient = $_recipient);
    }

    /**
     * Get timestamp value
     *
     * @return dateTime|null
     */
    public function getTimestamp() {
        return $this->timestamp;
    }

    /**
     * Set timestamp value
     *
     * @param dateTime $_timestamp the timestamp
     * @return dateTime
     */
    public function setTimestamp($_timestamp) {
        return ($this->timestamp = $_timestamp);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructReportType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructSendMessagesBodyType extends WsdlClass {
    /**
     * The messages
     *
     * @var anyType
     */
    public $messages;

    /**
     * Constructor method for SendMessagesBodyType
     *
     * @see parent::__construct()
     * @param anyType $_messages
     * @return StructSendMessagesBodyType
     */
    public function __construct($_messages = null) {
        parent::__construct(array('messages' => $_messages), false);
    }

    /**
     * Get messages value
     *
     * @return anyType|null
     */
    public function getMessages() {
        return $this->messages;
    }

    /**
     * Set messages value
     *
     * @param anyType $_messages the messages
     * @return anyType
     */
    public function setMessages($_messages) {
        return ($this->messages = $_messages);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructSendMessagesBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructSendMessagesRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for SendMessagesRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructSendMessagesRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructSendMessagesRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructSendMessagesResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var StructSendMessagesResultType
     */
    public $result;

    /**
     * Constructor method for SendMessagesResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructSendMessagesResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return StructSendMessagesResultType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructSendMessagesResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructSendMessagesResultType extends WsdlClass {
    /**
     * The sent
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $sent;
    /**
     * The scheduled
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $scheduled;
    /**
     * The failed
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $failed;
    /**
     * The accountDetails
     *
     * @var anyType
     */
    public $accountDetails;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $errors;

    /**
     * Constructor method for SendMessagesResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_sent
     * @param unsignedInt $_scheduled
     * @param unsignedInt $_failed
     * @param anyType     $_accountDetails
     * @param anyType     $_errors
     * @return StructSendMessagesResultType
     */
    public function __construct($_sent, $_scheduled, $_failed, $_accountDetails = null, $_errors = null) {
        parent::__construct(array('sent' => $_sent, 'scheduled' => $_scheduled, 'failed' => $_failed, 'accountDetails' => $_accountDetails, 'errors' => $_errors), false);
    }

    /**
     * Get sent value
     *
     * @return unsignedInt
     */
    public function getSent() {
        return $this->sent;
    }

    /**
     * Set sent value
     *
     * @param unsignedInt $_sent the sent
     * @return unsignedInt
     */
    public function setSent($_sent) {
        return ($this->sent = $_sent);
    }

    /**
     * Get scheduled value
     *
     * @return unsignedInt
     */
    public function getScheduled() {
        return $this->scheduled;
    }

    /**
     * Set scheduled value
     *
     * @param unsignedInt $_scheduled the scheduled
     * @return unsignedInt
     */
    public function setScheduled($_scheduled) {
        return ($this->scheduled = $_scheduled);
    }

    /**
     * Get failed value
     *
     * @return unsignedInt
     */
    public function getFailed() {
        return $this->failed;
    }

    /**
     * Set failed value
     *
     * @param unsignedInt $_failed the failed
     * @return unsignedInt
     */
    public function setFailed($_failed) {
        return ($this->failed = $_failed);
    }

    /**
     * Get accountDetails value
     *
     * @return anyType|null
     */
    public function getAccountDetails() {
        return $this->accountDetails;
    }

    /**
     * Set accountDetails value
     *
     * @param anyType $_accountDetails the accountDetails
     * @return anyType
     */
    public function setAccountDetails($_accountDetails) {
        return ($this->accountDetails = $_accountDetails);
    }

    /**
     * Get errors value
     *
     * @return anyType|null
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * Set errors value
     *
     * @param anyType $_errors the errors
     * @return anyType
     */
    public function setErrors($_errors) {
        return ($this->errors = $_errors);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructSendMessagesResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructUnblockNumbersBodyType extends WsdlClass {
    /**
     * The recipients
     *
     * @var anyType
     */
    public $recipients;

    /**
     * Constructor method for UnblockNumbersBodyType
     *
     * @see parent::__construct()
     * @param anyType $_recipients
     * @return StructUnblockNumbersBodyType
     */
    public function __construct($_recipients = null) {
        parent::__construct(array('recipients' => $_recipients), false);
    }

    /**
     * Get recipients value
     *
     * @return anyType|null
     */
    public function getRecipients() {
        return $this->recipients;
    }

    /**
     * Set recipients value
     *
     * @param anyType $_recipients the recipients
     * @return anyType
     */
    public function setRecipients($_recipients) {
        return ($this->recipients = $_recipients);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructUnblockNumbersBodyType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructUnblockNumbersRequestType extends WsdlClass {
    /**
     * The authentication
     *
     * @var anyType
     */
    public $authentication;
    /**
     * The requestBody
     *
     * @var anyType
     */
    public $requestBody;

    /**
     * Constructor method for UnblockNumbersRequestType
     *
     * @see parent::__construct()
     * @param anyType $_authentication
     * @param anyType $_requestBody
     * @return StructUnblockNumbersRequestType
     */
    public function __construct($_authentication = null, $_requestBody = null) {
        parent::__construct(array('authentication' => $_authentication, 'requestBody' => $_requestBody), false);
    }

    /**
     * Get authentication value
     *
     * @return anyType|null
     */
    public function getAuthentication() {
        return $this->authentication;
    }

    /**
     * Set authentication value
     *
     * @param anyType $_authentication the authentication
     * @return anyType
     */
    public function setAuthentication($_authentication) {
        return ($this->authentication = $_authentication);
    }

    /**
     * Get requestBody value
     *
     * @return anyType|null
     */
    public function getRequestBody() {
        return $this->requestBody;
    }

    /**
     * Set requestBody value
     *
     * @param anyType $_requestBody the requestBody
     * @return anyType
     */
    public function setRequestBody($_requestBody) {
        return ($this->requestBody = $_requestBody);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructUnblockNumbersRequestType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructUnblockNumbersResponseType extends WsdlClass {
    /**
     * The result
     *
     * @var anyType
     */
    public $result;

    /**
     * Constructor method for UnblockNumbersResponseType
     *
     * @see parent::__construct()
     * @param anyType $_result
     * @return StructUnblockNumbersResponseType
     */
    public function __construct($_result = null) {
        parent::__construct(array('result' => $_result), false);
    }

    /**
     * Get result value
     *
     * @return anyType|null
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * Set result value
     *
     * @param anyType $_result the result
     * @return anyType
     */
    public function setResult($_result) {
        return ($this->result = $_result);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructUnblockNumbersResponseType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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

class StructUnblockNumbersResultType extends WsdlClass {
    /**
     * The unblocked
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $unblocked;
    /**
     * The failed
     * Meta informations extracted from the WSDL
     * - use : required
     *
     * @var unsignedInt
     */
    public $failed;
    /**
     * The errors
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     *
     * @var anyType
     */
    public $errors;

    /**
     * Constructor method for UnblockNumbersResultType
     *
     * @see parent::__construct()
     * @param unsignedInt $_unblocked
     * @param unsignedInt $_failed
     * @param anyType     $_errors
     * @return StructUnblockNumbersResultType
     */
    public function __construct($_unblocked, $_failed, $_errors = null) {
        parent::__construct(array('unblocked' => $_unblocked, 'failed' => $_failed, 'errors' => $_errors), false);
    }

    /**
     * Get unblocked value
     *
     * @return unsignedInt
     */
    public function getUnblocked() {
        return $this->unblocked;
    }

    /**
     * Set unblocked value
     *
     * @param unsignedInt $_unblocked the unblocked
     * @return unsignedInt
     */
    public function setUnblocked($_unblocked) {
        return ($this->unblocked = $_unblocked);
    }

    /**
     * Get failed value
     *
     * @return unsignedInt
     */
    public function getFailed() {
        return $this->failed;
    }

    /**
     * Set failed value
     *
     * @param unsignedInt $_failed the failed
     * @return unsignedInt
     */
    public function setFailed($_failed) {
        return ($this->failed = $_failed);
    }

    /**
     * Get errors value
     *
     * @return anyType|null
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * Set errors value
     *
     * @param anyType $_errors the errors
     * @return anyType
     */
    public function setErrors($_errors) {
        return ($this->errors = $_errors);
    }

    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     *
     * @see  WsdlClass::__set_state()
     * @uses WsdlClass::__set_state()
     * @param array $_array the exported values
     * @return StructUnblockNumbersResultType
     */
    public static function __set_state(array $_array, $_className = __CLASS__) {
        return parent::__set_state($_array, $_className);
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
