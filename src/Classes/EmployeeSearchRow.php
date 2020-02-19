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

class EmployeeSearchRow extends SearchRow {
    public $basic;
    public $campaignResponseJoin;
    public $chargeJoin;
    public $departmentJoin;
    public $fileJoin;
    public $hcmJobJoin;
    public $locationJoin;
    public $managedJobJoin;
    public $messagesJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $resourceAllocationJoin;
    public $subsidiaryJoin;
    public $timeJoin;
    public $transactionJoin;
    public $userJoin;
    public $userNotesJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "EmployeeSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "chargeJoin" => "ChargeSearchRowBasic",
        "departmentJoin" => "DepartmentSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "hcmJobJoin" => "HcmJobSearchRowBasic",
        "locationJoin" => "LocationSearchRowBasic",
        "managedJobJoin" => "JobSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "resourceAllocationJoin" => "ResourceAllocationSearchRowBasic",
        "subsidiaryJoin" => "SubsidiarySearchRowBasic",
        "timeJoin" => "TimeBillSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
