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

class InventoryItemLocations {
    public $location;
    public $quantityOnHand;
    public $onHandValueMli;
    public $averageCostMli;
    public $lastPurchasePriceMli;
    public $reorderPoint;
    public $locationAllowStorePickup;
    public $locationStorePickupBufferStock;
    public $locationQtyAvailForStorePickup;
    public $preferredStockLevel;
    public $leadTime;
    public $defaultReturnCost;
    public $safetyStockLevel;
    public $cost;
    public $inventoryCostTemplate;
    public $buildTime;
    public $lastInvtCountDate;
    public $nextInvtCountDate;
    public $isWip;
    public $invtCountInterval;
    public $invtClassification;
    public $costingLotSize;
    public $quantityOnOrder;
    public $quantityCommitted;
    public $quantityAvailable;
    public $quantityBackOrdered;
    public $locationId;
    public $supplyReplenishmentMethod;
    public $alternateDemandSourceItem;
    public $fixedLotSize;
    public $periodicLotSizeType;
    public $periodicLotSizeDays;
    public $supplyType;
    public $supplyLotSizingMethod;
    public $demandSource;
    public $backwardConsumptionDays;
    public $forwardConsumptionDays;
    public $demandTimeFence;
    public $supplyTimeFence;
    public $rescheduleInDays;
    public $rescheduleOutDays;
    static $paramtypesmap = array(
        "location" => "string",
        "quantityOnHand" => "float",
        "onHandValueMli" => "float",
        "averageCostMli" => "float",
        "lastPurchasePriceMli" => "float",
        "reorderPoint" => "float",
        "locationAllowStorePickup" => "boolean",
        "locationStorePickupBufferStock" => "float",
        "locationQtyAvailForStorePickup" => "float",
        "preferredStockLevel" => "float",
        "leadTime" => "integer",
        "defaultReturnCost" => "float",
        "safetyStockLevel" => "float",
        "cost" => "float",
        "inventoryCostTemplate" => "RecordRef",
        "buildTime" => "float",
        "lastInvtCountDate" => "dateTime",
        "nextInvtCountDate" => "dateTime",
        "isWip" => "boolean",
        "invtCountInterval" => "integer",
        "invtClassification" => "ItemInvtClassification",
        "costingLotSize" => "float",
        "quantityOnOrder" => "float",
        "quantityCommitted" => "float",
        "quantityAvailable" => "float",
        "quantityBackOrdered" => "float",
        "locationId" => "RecordRef",
        "supplyReplenishmentMethod" => "RecordRef",
        "alternateDemandSourceItem" => "RecordRef",
        "fixedLotSize" => "float",
        "periodicLotSizeType" => "PeriodicLotSizeType",
        "periodicLotSizeDays" => "integer",
        "supplyType" => "RecordRef",
        "supplyLotSizingMethod" => "RecordRef",
        "demandSource" => "RecordRef",
        "backwardConsumptionDays" => "integer",
        "forwardConsumptionDays" => "integer",
        "demandTimeFence" => "integer",
        "supplyTimeFence" => "integer",
        "rescheduleInDays" => "integer",
        "rescheduleOutDays" => "integer",
    );
}
