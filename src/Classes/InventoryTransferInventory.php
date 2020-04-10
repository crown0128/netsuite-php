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
 * generated:  2020-04-10 09:56:55 PM UTC
 */

namespace NetSuite\Classes;

class InventoryTransferInventory {
    /**
     * @var integer
     */
    public $line;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $description;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var float
     */
    public $quantityOnHand;
    /**
     * @var float
     */
    public $adjustQtyBy;
    /**
     * @var string
     */
    public $serialNumbers;
    /**
     * @var string
     */
    public $fromBinNumbers;
    /**
     * @var string
     */
    public $toBinNumbers;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "item" => "RecordRef",
        "description" => "string",
        "units" => "RecordRef",
        "quantityOnHand" => "float",
        "adjustQtyBy" => "float",
        "serialNumbers" => "string",
        "fromBinNumbers" => "string",
        "toBinNumbers" => "string",
        "inventoryDetail" => "InventoryDetail",
        "customFieldList" => "CustomFieldList",
    );
}
