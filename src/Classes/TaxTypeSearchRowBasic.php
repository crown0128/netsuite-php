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

class TaxTypeSearchRowBasic extends SearchRowBasic {
    public $country;
    public $description;
    public $doesNotAddToTotal;
    public $externalId;
    public $internalId;
    public $isInactive;
    public $name;
    public $nexus;
    public $payablesAccount;
    public $postToItemCost;
    public $receivablesAccount;
    public $reverseCharge;
    public $taxInNetAmount;
    static $paramtypesmap = array(
        "country" => "SearchColumnEnumSelectField[]",
        "description" => "SearchColumnStringField[]",
        "doesNotAddToTotal" => "SearchColumnBooleanField[]",
        "externalId" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "name" => "SearchColumnStringField[]",
        "nexus" => "SearchColumnSelectField[]",
        "payablesAccount" => "SearchColumnSelectField[]",
        "postToItemCost" => "SearchColumnBooleanField[]",
        "receivablesAccount" => "SearchColumnSelectField[]",
        "reverseCharge" => "SearchColumnBooleanField[]",
        "taxInNetAmount" => "SearchColumnBooleanField[]",
    );
}
