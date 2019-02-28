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

class BillingAccountSearchBasic extends SearchRecordBasic {
    public $billingSchedule;
    public $cashSaleForm;
    public $class;
    public $currency;
    public $customer;
    public $customerDefault;
    public $dateCreated;
    public $department;
    public $externalId;
    public $externalIdString;
    public $frequency;
    public $idNumber;
    public $inactive;
    public $internalId;
    public $internalIdNumber;
    public $invoiceForm;
    public $lastBillCycleDate;
    public $lastBillDate;
    public $location;
    public $memo;
    public $name;
    public $nextBillCycleDate;
    public $startDate;
    public $subsidiary;
    public $customFieldList;
    static $paramtypesmap = array(
        "billingSchedule" => "SearchMultiSelectField",
        "cashSaleForm" => "SearchMultiSelectField",
        "class" => "SearchMultiSelectField",
        "currency" => "SearchMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "customerDefault" => "SearchBooleanField",
        "dateCreated" => "SearchDateField",
        "department" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "frequency" => "SearchEnumMultiSelectField",
        "idNumber" => "SearchStringField",
        "inactive" => "SearchBooleanField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "invoiceForm" => "SearchMultiSelectField",
        "lastBillCycleDate" => "SearchDateField",
        "lastBillDate" => "SearchDateField",
        "location" => "SearchMultiSelectField",
        "memo" => "SearchStringField",
        "name" => "SearchStringField",
        "nextBillCycleDate" => "SearchDateField",
        "startDate" => "SearchDateField",
        "subsidiary" => "SearchMultiSelectField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
