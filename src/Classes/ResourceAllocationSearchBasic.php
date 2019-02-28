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

class ResourceAllocationSearchBasic extends SearchRecordBasic {
    public $allocationType;
    public $allocationUnit;
    public $approvalStatus;
    public $customer;
    public $endDate;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $nextApprover;
    public $notes;
    public $numberHours;
    public $percentOfTime;
    public $project;
    public $requestedBy;
    public $resource;
    public $startDate;
    public $customFieldList;
    static $paramtypesmap = array(
        "allocationType" => "SearchMultiSelectField",
        "allocationUnit" => "SearchEnumMultiSelectField",
        "approvalStatus" => "SearchEnumMultiSelectField",
        "customer" => "SearchMultiSelectField",
        "endDate" => "SearchDateField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "nextApprover" => "SearchMultiSelectField",
        "notes" => "SearchStringField",
        "numberHours" => "SearchDoubleField",
        "percentOfTime" => "SearchDoubleField",
        "project" => "SearchMultiSelectField",
        "requestedBy" => "SearchMultiSelectField",
        "resource" => "SearchMultiSelectField",
        "startDate" => "SearchDateField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
