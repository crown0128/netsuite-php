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

class WorkOrderIssue extends Record {
    public $createdDate;
    public $lastModifiedDate;
    public $customForm;
    public $tranId;
    public $item;
    public $createdFrom;
    public $tranDate;
    public $postingPeriod;
    public $memo;
    public $subsidiary;
    public $department;
    public $class;
    public $location;
    public $revision;
    public $manufacturingRouting;
    public $startOperation;
    public $endOperation;
    public $componentList;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "createdDate" => "dateTime",
        "lastModifiedDate" => "dateTime",
        "customForm" => "RecordRef",
        "tranId" => "string",
        "item" => "RecordRef",
        "createdFrom" => "RecordRef",
        "tranDate" => "dateTime",
        "postingPeriod" => "RecordRef",
        "memo" => "string",
        "subsidiary" => "RecordRef",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "revision" => "RecordRef",
        "manufacturingRouting" => "RecordRef",
        "startOperation" => "RecordRef",
        "endOperation" => "RecordRef",
        "componentList" => "WorkOrderIssueComponentList",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
