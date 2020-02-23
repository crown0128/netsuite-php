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

class Translation {
    public $locale;
    public $language;
    public $displayName;
    public $description;
    public $salesDescription;
    public $storeDisplayName;
    public $storeDescription;
    public $storeDetailedDescription;
    public $featuredDescription;
    public $specialsDescription;
    public $pageTitle;
    public $noPriceMessage;
    public $outOfStockMessage;
    static $paramtypesmap = array(
        "locale" => "Language",
        "language" => "string",
        "displayName" => "string",
        "description" => "string",
        "salesDescription" => "string",
        "storeDisplayName" => "string",
        "storeDescription" => "string",
        "storeDetailedDescription" => "string",
        "featuredDescription" => "string",
        "specialsDescription" => "string",
        "pageTitle" => "string",
        "noPriceMessage" => "string",
        "outOfStockMessage" => "string",
    );
}
