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

class Usage extends Record {
    public $customForm;
    public $memo;
    public $item;
    public $subscriptionPlan;
    public $customer;
    public $usageSubscription;
    public $usageSubscriptionLine;
    public $usageQuantity;
    public $usageDate;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "memo" => "string",
        "item" => "RecordRef",
        "subscriptionPlan" => "RecordRef",
        "customer" => "RecordRef",
        "usageSubscription" => "RecordRef",
        "usageSubscriptionLine" => "RecordRef",
        "usageQuantity" => "float",
        "usageDate" => "dateTime",
        "internalId" => "string",
        "externalId" => "string",
    );
}
