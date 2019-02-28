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
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class TimeBillSearchBasic extends SearchRecordBasic {
    public $approvalStatus;
    public $approved;
    public $billable;
    public $class;
    public $customer;
    public $date;
    public $dateCreated;
    public $department;
    public $duration;
    public $employee;
    public $exempt;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $item;
    public $lastModified;
    public $location;
    public $memo;
    public $paidByPayroll;
    public $paidExternally;
    public $payItem;
    public $productive;
    public $rejectionNote;
    public $status;
    public $subsidiary;
    public $temporaryLocalJurisdiction;
    public $temporaryStateJurisdiction;
    public $timeSheet;
    public $type;
    public $utilized;
    public $customFieldList;
    static $paramtypesmap = array(
        "approvalStatus" => "SearchMultiSelectField",
        "approved" => "SearchBooleanField",
        "billable" => "SearchBooleanField",
        "class" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "date" => "SearchDateField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "duration" => "SearchDoubleField",
        "employee" => "SearchMultiSelectField",
        "exempt" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "item" => "SearchMultiSelectField",
        "lastModified" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "paidByPayroll" => "SearchBooleanField",
        "paidExternally" => "SearchBooleanField",
        "payItem" => "SearchMultiSelectField",
        "productive" => "SearchBooleanField",
        "rejectionNote" => "SearchStringField",
        "status" => "SearchBooleanField",
        "subsidiary" => "SearchMultiSelectField",
        "temporaryLocalJurisdiction" => "SearchMultiSelectField",
        "temporaryStateJurisdiction" => "SearchMultiSelectField",
        "timeSheet" => "SearchMultiSelectField",
        "type" => "SearchEnumMultiSelectField",
        "utilized" => "SearchBooleanField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
