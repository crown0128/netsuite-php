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
 * generated:  2020-12-11 06:57:10 PM PST
 */

namespace NetSuite\Classes;

class CampaignCategory extends Record {
    /**
     * @var string
     */
    public $name;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $leadSource;
    /**
     * @var string
     */
    public $description;
    /**
     * @var boolean
     */
    public $isexternal;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "name" => "string",
        "parent" => "RecordRef",
        "leadSource" => "RecordRef",
        "description" => "string",
        "isexternal" => "boolean",
        "isInactive" => "boolean",
        "internalId" => "string",
        "externalId" => "string",
    );
}
