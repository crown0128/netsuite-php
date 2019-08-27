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

class VendorSubsidiaryRelationshipSearchBasic extends SearchRecordBasic {
    public $balance;
    public $balanceBase;
    public $baseCurrency;
    public $creditLimit;
    public $entity;
    public $externalId;
    public $externalIdString;
    public $internalId;
    public $internalIdNumber;
    public $inTransitBalance;
    public $inTransitBalanceBase;
    public $isPrimarySub;
    public $primaryCurrency;
    public $subsidiary;
    public $taxItem;
    public $unbilledOrders;
    public $unbilledOrdersBase;
    public $customFieldList;
    static $paramtypesmap = array(
        "balance" => "SearchDoubleField",
        "balanceBase" => "SearchDoubleField",
        "baseCurrency" => "SearchMultiSelectField",
        "creditLimit" => "SearchDoubleField",
        "entity" => "SearchMultiSelectField",
        "externalId" => "SearchMultiSelectField",
        "externalIdString" => "SearchStringField",
        "internalId" => "SearchMultiSelectField",
        "internalIdNumber" => "SearchLongField",
        "inTransitBalance" => "SearchDoubleField",
        "inTransitBalanceBase" => "SearchDoubleField",
        "isPrimarySub" => "SearchBooleanField",
        "primaryCurrency" => "SearchMultiSelectField",
        "subsidiary" => "SearchMultiSelectField",
        "taxItem" => "SearchMultiSelectField",
        "unbilledOrders" => "SearchDoubleField",
        "unbilledOrdersBase" => "SearchDoubleField",
        "customFieldList" => "SearchCustomFieldList",
    );
}
