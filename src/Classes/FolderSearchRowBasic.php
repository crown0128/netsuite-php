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

class FolderSearchRowBasic extends SearchRowBasic {
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $class;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $department;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $description;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $externalId;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $folderSize;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $group;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $internalId;
    /**
     * @var \NetSuite\Classes\SearchColumnBooleanField[]
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\SearchColumnDateField[]
     */
    public $lastModifiedDate;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $location;
    /**
     * @var \NetSuite\Classes\SearchColumnStringField[]
     */
    public $name;
    /**
     * @var \NetSuite\Classes\SearchColumnLongField[]
     */
    public $numFiles;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $owner;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\SearchColumnSelectField[]
     */
    public $subsidiary;
    static $paramtypesmap = array(
        "class" => "SearchColumnSelectField[]",
        "department" => "SearchColumnSelectField[]",
        "description" => "SearchColumnStringField[]",
        "externalId" => "SearchColumnSelectField[]",
        "folderSize" => "SearchColumnLongField[]",
        "group" => "SearchColumnSelectField[]",
        "internalId" => "SearchColumnSelectField[]",
        "isInactive" => "SearchColumnBooleanField[]",
        "lastModifiedDate" => "SearchColumnDateField[]",
        "location" => "SearchColumnSelectField[]",
        "name" => "SearchColumnStringField[]",
        "numFiles" => "SearchColumnLongField[]",
        "owner" => "SearchColumnSelectField[]",
        "parent" => "SearchColumnSelectField[]",
        "subsidiary" => "SearchColumnSelectField[]",
    );
}
