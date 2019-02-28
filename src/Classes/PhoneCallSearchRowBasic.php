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

class PhoneCallSearchRowBasic extends SearchRowBasic {
    public $accessLevel;
    public $assigned;
    public $company;
    public $completedDate;
    public $contact;
    public $createdDate;
    public $endDate;
    public $externalId;
    public $internalId;
    public $lastModifiedDate;
    public $markdone;
    public $message;
    public $owner;
    public $phone;
    public $priority;
    public $startDate;
    public $startTime;
    public $status;
    public $title;
    public $transaction;
    public $customFieldList;
    static $paramtypesmap = array(
        "accessLevel" => "SearchColumnStringField[]",
        "assigned" => "SearchColumnSelectField[]",
        "company" => "SearchColumnSelectField[]",
        "completedDate" => "SearchColumnDateField[]",
        "contact" => "SearchColumnSelectField[]",
        "createdDate" => "SearchColumnDateField[]",
        "endDate" => "SearchColumnDateField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "markdone" => "SearchColumnStringField[]",
        "message" => "SearchColumnStringField[]",
        "owner" => "SearchColumnSelectField[]",
        "phone" => "SearchColumnStringField[]",
        "priority" => "SearchColumnEnumSelectField[]",
        "startDate" => "SearchColumnDateField[]",
        "startTime" => "SearchColumnDateField[]",
        "status" => "SearchColumnEnumSelectField[]",
        "title" => "SearchColumnStringField[]",
        "transaction" => "SearchColumnSelectField[]",
        "customFieldList" => "SearchColumnCustomFieldList",
    );
}
