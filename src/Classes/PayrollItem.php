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
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class PayrollItem extends Record {
    public $subsidiary;
    public $itemType;
    public $name;
    public $vendor;
    public $expenseAccount;
    public $liabilityAccount;
    public $employeePaid;
    public $accountCategory;
    public $inactive;
    public $customFieldList;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "subsidiary" => "RecordRef",
        "itemType" => "RecordRef",
        "name" => "string",
        "vendor" => "RecordRef",
        "expenseAccount" => "RecordRef",
        "liabilityAccount" => "RecordRef",
        "employeePaid" => "boolean",
        "accountCategory" => "PayrollItemAccountCategory",
        "inactive" => "boolean",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
