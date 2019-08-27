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
 * generated:  2019-06-12 10:27:00 AM PDT
 */

namespace NetSuite\Classes;

class TaxDetailSearchBasic extends SearchRecordBasic {
    public $account;
    public $lineNumber;
    public $taxAmount;
    public $taxBasis;
    public $taxCode;
    public $taxRate;
    public $taxType;
    public $tranId;
    static $paramtypesmap = array(
        "account" => "SearchMultiSelectField",
        "lineNumber" => "SearchLongField",
        "taxAmount" => "SearchDoubleField",
        "taxBasis" => "SearchDoubleField",
        "taxCode" => "SearchMultiSelectField",
        "taxRate" => "SearchDoubleField",
        "taxType" => "SearchMultiSelectField",
        "tranId" => "SearchMultiSelectField",
    );
}
