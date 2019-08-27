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

class Folder extends Record {
    public $name;
    public $department;
    public $description;
    public $isInactive;
    public $isPrivate;
    public $bundleable;
    public $hideInBundle;
    public $isOnline;
    public $group;
    public $parent;
    public $folderType;
    public $class;
    public $location;
    public $subsidiary;
    public $internalId;
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "department" => "RecordRef",
        "description" => "string",
        "isInactive" => "boolean",
        "isPrivate" => "boolean",
        "bundleable" => "boolean",
        "hideInBundle" => "boolean",
        "isOnline" => "boolean",
        "group" => "RecordRef",
        "parent" => "RecordRef",
        "folderType" => "FolderFolderType",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "subsidiary" => "RecordRef",
        "internalId" => "string",
        "externalId" => "string",
    );
}
