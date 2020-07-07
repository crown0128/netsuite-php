<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-07-07 11:24:43 AM CDT
 */

namespace NetSuite\Classes;

class OpportunitySearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\OpportunitySearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $actualJoin;
    /**
     * @var \NetSuite\Classes\PhoneCallSearchBasic
     */
    public $callJoin;
    /**
     * @var \NetSuite\Classes\CustomerSearchBasic
     */
    public $customerJoin;
    /**
     * @var \NetSuite\Classes\ContactSearchBasic
     */
    public $decisionMakerJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $estimateJoin;
    /**
     * @var \NetSuite\Classes\CalendarEventSearchBasic
     */
    public $eventJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\ItemSearchBasic
     */
    public $itemJoin;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $leadSourceJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $orderJoin;
    /**
     * @var \NetSuite\Classes\OriginatingLeadSearchBasic
     */
    public $originatingLeadJoin;
    /**
     * @var \NetSuite\Classes\PartnerSearchBasic
     */
    public $partnerJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $salesRepJoin;
    /**
     * @var \NetSuite\Classes\TaskSearchBasic
     */
    public $taskJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "OpportunitySearchBasic",
        "actualJoin" => "TransactionSearchBasic",
        "callJoin" => "PhoneCallSearchBasic",
        "customerJoin" => "CustomerSearchBasic",
        "decisionMakerJoin" => "ContactSearchBasic",
        "estimateJoin" => "TransactionSearchBasic",
        "eventJoin" => "CalendarEventSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "itemJoin" => "ItemSearchBasic",
        "leadSourceJoin" => "CampaignSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "orderJoin" => "TransactionSearchBasic",
        "originatingLeadJoin" => "OriginatingLeadSearchBasic",
        "partnerJoin" => "PartnerSearchBasic",
        "salesRepJoin" => "EmployeeSearchBasic",
        "taskJoin" => "TaskSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
