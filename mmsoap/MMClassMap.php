<?php
/**
 * File for the class which returns the class map definition
 *
 * @package
 * @date    2014-04-02
 * @author  Jordan Trudgett
 * @version 2
 */
/**
 * Class which returns the class map definition by the static method MMClassMap::classMap()
 *
 * @package
 * @date    2014-04-02
 * @author  Jordan Trudgett
 * @version 2
 */
class MMClassMap {
    /**
     * This method returns the array containing the mapping between WSDL structs and generated classes
     * This array is sent to the SoapClient when calling the WS
     *
     * @return array
     */
    final public static function classMap() {
        return array(
            'AccountDetailsType'                  => 'StructAccountDetailsType',
            'AuthenticationType'                  => 'StructAuthenticationType',
            'BlockNumbersBodyType'                => 'StructBlockNumbersBodyType',
            'BlockNumbersRequestType'             => 'StructBlockNumbersRequestType',
            'BlockNumbersResponseType'            => 'StructBlockNumbersResponseType',
            'BlockNumbersResultType'              => 'StructBlockNumbersResultType',
            'CheckRepliesBodyType'                => 'StructCheckRepliesBodyType',
            'CheckRepliesRequestType'             => 'StructCheckRepliesRequestType',
            'CheckRepliesResponseType'            => 'StructCheckRepliesResponseType',
            'CheckRepliesResultType'              => 'StructCheckRepliesResultType',
            'CheckRepliesType'                    => 'StructCheckRepliesType',
            'CheckReportListType'                 => 'StructCheckReportListType',
            'CheckReportsBodyType'                => 'StructCheckReportsBodyType',
            'CheckReportsRequestType'             => 'StructCheckReportsRequestType',
            'CheckReportsResponseType'            => 'StructCheckReportsResponseType',
            'CheckReportsResultType'              => 'StructCheckReportsResultType',
            'CheckUserRequestType'                => 'StructCheckUserRequestType',
            'CheckUserResponseType'               => 'StructCheckUserResponseType',
            'CheckUserResultType'                 => 'StructCheckUserResultType',
            'ConfirmItemType'                     => 'StructConfirmItemType',
            'ConfirmRepliesBodyType'              => 'StructConfirmRepliesBodyType',
            'ConfirmRepliesRequestType'           => 'StructConfirmRepliesRequestType',
            'ConfirmRepliesResponseType'          => 'StructConfirmRepliesResponseType',
            'ConfirmRepliesResultType'            => 'StructConfirmRepliesResultType',
            'ConfirmReplyListType'                => 'StructConfirmReplyListType',
            'ConfirmReportListType'               => 'StructConfirmReportListType',
            'ConfirmReportsBodyType'              => 'StructConfirmReportsBodyType',
            'ConfirmReportsRequestType'           => 'StructConfirmReportsRequestType',
            'ConfirmReportsResponseType'          => 'StructConfirmReportsResponseType',
            'ConfirmReportsResultType'            => 'StructConfirmReportsResultType',
            'DeleteScheduledMessagesBodyType'     => 'StructDeleteScheduledMessagesBodyType',
            'DeleteScheduledMessagesRequestType'  => 'StructDeleteScheduledMessagesRequestType',
            'DeleteScheduledMessagesResponseType' => 'StructDeleteScheduledMessagesResponseType',
            'DeleteScheduledMessagesResultType'   => 'StructDeleteScheduledMessagesResultType',
            'DeliveryStatusType'                  => 'EnumDeliveryStatusType',
            'FaultErrorCodeType'                  => 'EnumFaultErrorCodeType',
            'FaultResponseType'                   => 'StructFaultResponseType',
            'FaultResultType'                     => 'StructFaultResultType',
            'GetBlockedNumbersBodyType'           => 'StructGetBlockedNumbersBodyType',
            'GetBlockedNumbersRequestType'        => 'StructGetBlockedNumbersRequestType',
            'GetBlockedNumbersResponseType'       => 'StructGetBlockedNumbersResponseType',
            'GetBlockedNumbersResultType'         => 'StructGetBlockedNumbersResultType',
            'MessageErrorCodeType'                => 'EnumMessageErrorCodeType',
            'MessageErrorListType'                => 'StructMessageErrorListType',
            'MessageErrorType'                    => 'StructMessageErrorType',
            'MessageFormatType'                   => 'EnumMessageFormatType',
            'MessageIdListType'                   => 'StructMessageIdListType',
            'MessageIdType'                       => 'StructMessageIdType',
            'MessageListType'                     => 'StructMessageListType',
            'MessageSendModeType'                 => 'EnumMessageSendModeType',
            'MessageSendVersionType'              => 'EnumMessageSendVersionType',
            'MessageTagListType'                  => 'StructMessageTagListType',
            'MessageTagType'                      => 'StructMessageTagType',
            'MessageType'                         => 'StructMessageType',
            'RecipientType'                       => 'StructRecipientType',
            'RecipientsType'                      => 'StructRecipientsType',
            'ReplyListType'                       => 'StructReplyListType',
            'ReplyType'                           => 'StructReplyType',
            'ReportListType'                      => 'StructReportListType',
            'ReportType'                          => 'StructReportType',
            'SendMessagesBodyType'                => 'StructSendMessagesBodyType',
            'SendMessagesRequestType'             => 'StructSendMessagesRequestType',
            'SendMessagesResponseType'            => 'StructSendMessagesResponseType',
            'SendMessagesResultType'              => 'StructSendMessagesResultType',
            'UnblockNumbersBodyType'              => 'StructUnblockNumbersBodyType',
            'UnblockNumbersRequestType'           => 'StructUnblockNumbersRequestType',
            'UnblockNumbersResponseType'          => 'StructUnblockNumbersResponseType',
            'UnblockNumbersResultType'            => 'StructUnblockNumbersResultType',
        );
    }
}
