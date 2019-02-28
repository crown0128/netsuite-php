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

class ItemFulfillmentPackageUsps {
    public $packageWeightUsps;
    public $packageDescrUsps;
    public $packageTrackingNumberUsps;
    public $packagingUsps;
    public $useInsuredValueUsps;
    public $insuredValueUsps;
    public $reference1Usps;
    public $reference2Usps;
    public $packageLengthUsps;
    public $packageWidthUsps;
    public $packageHeightUsps;
    public $deliveryConfUsps;
    static $paramtypesmap = array(
        "packageWeightUsps" => "float",
        "packageDescrUsps" => "string",
        "packageTrackingNumberUsps" => "string",
        "packagingUsps" => "ItemFulfillmentPackageUspsPackagingUsps",
        "useInsuredValueUsps" => "boolean",
        "insuredValueUsps" => "float",
        "reference1Usps" => "string",
        "reference2Usps" => "string",
        "packageLengthUsps" => "integer",
        "packageWidthUsps" => "integer",
        "packageHeightUsps" => "integer",
        "deliveryConfUsps" => "ItemFulfillmentPackageUspsDeliveryConfUsps",
    );
}
