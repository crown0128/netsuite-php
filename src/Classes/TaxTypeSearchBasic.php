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

class TaxTypeSearchBasic extends SearchRecordBasic {
    public $country;
    public $description;
    public $doesNotAddToTotal;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $isInactive;
    public $name;
    public $nexus;
    public $payablesAccount;
    public $postToItemCost;
    public $receivablesAccount;
    public $reverseCharge;
    public $taxInNetAmount;
    static $paramtypesmap = array(
        "country" => "SearchEnumMultiSelectField",
        "description" => "SearchStringField",
        "doesNotAddToTotal" => "SearchBooleanField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "isInactive" => "SearchBooleanField",
        "name" => "SearchStringField",
        "nexus" => "SearchMultiSelectField",
        "payablesAccount" => "SearchMultiSelectField",
        "postToItemCost" => "SearchBooleanField",
        "receivablesAccount" => "SearchMultiSelectField",
        "reverseCharge" => "SearchBooleanField",
        "taxInNetAmount" => "SearchBooleanField",
    );
}
