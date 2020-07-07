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

class EmployeeSearch extends SearchRecord {
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $basic;
    /**
     * @var \NetSuite\Classes\CampaignSearchBasic
     */
    public $campaignResponseJoin;
    /**
     * @var \NetSuite\Classes\ChargeSearchBasic
     */
    public $chargeJoin;
    /**
     * @var \NetSuite\Classes\DepartmentSearchBasic
     */
    public $departmentJoin;
    /**
     * @var \NetSuite\Classes\FileSearchBasic
     */
    public $fileJoin;
    /**
     * @var \NetSuite\Classes\HcmJobSearchBasic
     */
    public $hcmJobJoin;
    /**
     * @var \NetSuite\Classes\LocationSearchBasic
     */
    public $locationJoin;
    /**
     * @var \NetSuite\Classes\JobSearchBasic
     */
    public $managedJobJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesFromJoin;
    /**
     * @var \NetSuite\Classes\MessageSearchBasic
     */
    public $messagesToJoin;
    /**
     * @var \NetSuite\Classes\ResourceAllocationSearchBasic
     */
    public $resourceAllocationJoin;
    /**
     * @var \NetSuite\Classes\SubsidiarySearchBasic
     */
    public $subsidiaryJoin;
    /**
     * @var \NetSuite\Classes\TimeBillSearchBasic
     */
    public $timeJoin;
    /**
     * @var \NetSuite\Classes\TransactionSearchBasic
     */
    public $transactionJoin;
    /**
     * @var \NetSuite\Classes\EmployeeSearchBasic
     */
    public $userJoin;
    /**
     * @var \NetSuite\Classes\NoteSearchBasic
     */
    public $userNotesJoin;
    /**
     * @var \NetSuite\Classes\CustomSearchJoin[]
     */
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "EmployeeSearchBasic",
        "campaignResponseJoin" => "CampaignSearchBasic",
        "chargeJoin" => "ChargeSearchBasic",
        "departmentJoin" => "DepartmentSearchBasic",
        "fileJoin" => "FileSearchBasic",
        "hcmJobJoin" => "HcmJobSearchBasic",
        "locationJoin" => "LocationSearchBasic",
        "managedJobJoin" => "JobSearchBasic",
        "messagesJoin" => "MessageSearchBasic",
        "messagesFromJoin" => "MessageSearchBasic",
        "messagesToJoin" => "MessageSearchBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchBasic",
        "subsidiaryJoin" => "SubsidiarySearchBasic",
        "timeJoin" => "TimeBillSearchBasic",
        "transactionJoin" => "TransactionSearchBasic",
        "userJoin" => "EmployeeSearchBasic",
        "userNotesJoin" => "NoteSearchBasic",
        "customSearchJoin" => "CustomSearchJoin[]",
    );
}
