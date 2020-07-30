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
 * generated:  2020-07-07 11:24:43 AM CDT
 */

namespace NetSuite\Classes;

class TaxGroupSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $city;
    /**
     * @var \NetSuite\Classes\SearchColumnEnumSelectField[]
     */
    public $country;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $county;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $includeChildren;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isDefault;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $itemId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $piggyBack;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $rate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $state;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $stateDisplayName;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiaryNoHierarchy;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxItem1;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxItem2;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $taxType;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitPrice1;
    /**
     * @var \NetSuite\Classes\SearchColumnDoubleField[]
     */
    public $unitPrice2;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $zip;
    static $paramtypesmap = array(
        "city" => "SearchColumnStringField[]",
        "country" => "SearchColumnEnumSelectField[]",
        "county" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "includeChildren" => "SearchColumnBooleanField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isDefault" => "SearchColumnBooleanField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "itemId" => "SearchColumnStringField[]",
        "piggyBack" => "SearchColumnBooleanField[]",
        "rate" => "SearchColumnDoubleField[]",
        "state" => "SearchColumnSelectField[]",
        "stateDisplayName" => "SearchColumnStringField[]",
        "subsidiary" => "SearchColumnSelectField[]",
        "subsidiaryNoHierarchy" => "SearchColumnSelectField[]",
        "taxItem1" => "SearchColumnSelectField[]",
        "taxItem2" => "SearchColumnSelectField[]",
        "taxType" => "SearchColumnSelectField[]",
        "unitPrice1" => "SearchColumnDoubleField[]",
        "unitPrice2" => "SearchColumnDoubleField[]",
        "zip" => "SearchColumnStringField[]",
    );
}
