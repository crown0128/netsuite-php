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

class CustomerStatusSearchAdvanced extends SearchRecord {
    /**
     * @var \NetSuite\Classes\CustomerStatusSearch
     */
    public $criteria;
    /**
     * @var \NetSuite\Classes\CustomerStatusSearchRow
     */
    public $columns;
    /**
     * @var string
     */
    public $savedSearchId;
    /**
     * @var string
     */
    public $savedSearchScriptId;
    static $paramtypesmap = array(
        "criteria" => "CustomerStatusSearch",
        "columns" => "CustomerStatusSearchRow",
        "savedSearchId" => "string",
        "savedSearchScriptId" => "string",
    );
}
