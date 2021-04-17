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
 * generated:  2021-03-03 09:44:33 AM CST
 */

namespace NetSuite\Classes;

class GetDeletedResult {
    /**
     * @var \NetSuite\Classes\Status
     */
    public $status;
    /**
     * @var integer
     */
    public $totalRecords;
    /**
     * @var integer
     */
    public $pageSize;
    /**
     * @var integer
     */
    public $totalPages;
    /**
     * @var integer
     */
    public $pageIndex;
    /**
     * @var \NetSuite\Classes\DeletedRecordList
     */
    public $deletedRecordList;
    static $paramtypesmap = array(
        "status" => "Status",
        "totalRecords" => "integer",
        "pageSize" => "integer",
        "totalPages" => "integer",
        "pageIndex" => "integer",
        "deletedRecordList" => "DeletedRecordList",
    );
}
