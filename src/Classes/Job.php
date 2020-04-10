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

class Job extends Record {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customForm;
    /**
     * @var string
     */
    public $entityId;
    /**
     * @var string
     */
    public $altName;
    /**
     * @var string
     */
    public $companyName;
    /**
     * @var string
     */
    public $phoneticName;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $entityStatus;
    /**
     * @var string
     */
    public $defaultAddress;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $parent;
    /**
     * @var boolean
     */
    public $isInactive;
    /**
     * @var \NetSuite\Classes\JobPercentCompleteOverrideList
     */
    public $percentCompleteOverrideList;
    /**
     * @var string
     */
    public $lastModifiedDate;
    /**
     * @var boolean
     */
    public $billPay;
    /**
     * @var string
     */
    public $dateCreated;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $category;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $workplace;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $language;
    /**
     * @var string
     */
    public $comments;
    /**
     * @var string
     */
    public $accountNumber;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $currency;
    /**
     * @var float
     */
    public $fxRate;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $altPhone;
    /**
     * @var string
     */
    public $calculatedEndDate;
    /**
     * @var string
     */
    public $calculatedEndDateBaseline;
    /**
     * @var string
     */
    public $startDateBaseline;
    /**
     * @var string
     */
    public $projectedEndDate;
    /**
     * @var string
     */
    public $projectedEndDateBaseline;
    /**
     * @var string
     */
    public $lastBaselineDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $jobType;
    /**
     * @var float
     */
    public $percentComplete;
    /**
     * @var float
     */
    public $estimatedCost;
    /**
     * @var float
     */
    public $estimatedRevenue;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $estimatedTime;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $estimatedTimeOverride;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var string
     */
    public $email;
    /**
     * @var \NetSuite\Classes\EmailPreference
     */
    public $emailPreference;
    /**
     * @var float
     */
    public $openingBalance;
    /**
     * @var string
     */
    public $openingBalanceDate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $openingBalanceAccount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $subsidiary;
    /**
     * @var \NetSuite\Classes\JobBillingType
     */
    public $jobBillingType;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $billingSchedule;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $jobItem;
    /**
     * @var float
     */
    public $percentTimeComplete;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $actualTime;
    /**
     * @var boolean
     */
    public $allowTime;
    /**
     * @var \NetSuite\Classes\Duration
     */
    public $timeRemaining;
    /**
     * @var boolean
     */
    public $limitTimeToAssignees;
    /**
     * @var float
     */
    public $estimatedLaborCost;
    /**
     * @var float
     */
    public $estimatedLaborCostBaseline;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $estimateRevRecTemplate;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $revRecForecastRule;
    /**
     * @var boolean
     */
    public $usePercentCompleteOverride;
    /**
     * @var float
     */
    public $estimatedLaborRevenue;
    /**
     * @var float
     */
    public $estimatedGrossProfit;
    /**
     * @var float
     */
    public $estimatedGrossProfitPercent;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $projectExpenseType;
    /**
     * @var boolean
     */
    public $applyProjectExpenseTypeToAll;
    /**
     * @var boolean
     */
    public $allowAllResourcesForTasks;
    /**
     * @var float
     */
    public $jobPrice;
    /**
     * @var boolean
     */
    public $isUtilizedTime;
    /**
     * @var boolean
     */
    public $isProductiveTime;
    /**
     * @var boolean
     */
    public $isExemptTime;
    /**
     * @var boolean
     */
    public $materializeTime;
    /**
     * @var boolean
     */
    public $allowExpenses;
    /**
     * @var boolean
     */
    public $allocatePayrollExpenses;
    /**
     * @var boolean
     */
    public $includeCrmTasksInTotals;
    /**
     * @var \NetSuite\Classes\GlobalSubscriptionStatus
     */
    public $globalSubscriptionStatus;
    /**
     * @var \NetSuite\Classes\JobResourcesList
     */
    public $jobResourcesList;
    /**
     * @var \NetSuite\Classes\JobPlStatementList
     */
    public $plStatementList;
    /**
     * @var \NetSuite\Classes\JobAddressbookList
     */
    public $addressbookList;
    /**
     * @var \NetSuite\Classes\JobMilestonesList
     */
    public $milestonesList;
    /**
     * @var \NetSuite\Classes\JobCreditCardsList
     */
    public $creditCardsList;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $timeApproval;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    /**
     * @var string
     */
    public $internalId;
    /**
     * @var string
     */
    public $externalId;
    static $paramtypesmap = array(
        "customForm" => "RecordRef",
        "entityId" => "string",
        "altName" => "string",
        "companyName" => "string",
        "phoneticName" => "string",
        "entityStatus" => "RecordRef",
        "defaultAddress" => "string",
        "parent" => "RecordRef",
        "isInactive" => "boolean",
        "percentCompleteOverrideList" => "JobPercentCompleteOverrideList",
        "lastModifiedDate" => "dateTime",
        "billPay" => "boolean",
        "dateCreated" => "dateTime",
        "category" => "RecordRef",
        "workplace" => "RecordRef",
        "language" => "RecordRef",
        "comments" => "string",
        "accountNumber" => "string",
        "currency" => "RecordRef",
        "fxRate" => "float",
        "startDate" => "dateTime",
        "endDate" => "dateTime",
        "phone" => "string",
        "altPhone" => "string",
        "calculatedEndDate" => "dateTime",
        "calculatedEndDateBaseline" => "dateTime",
        "startDateBaseline" => "dateTime",
        "projectedEndDate" => "dateTime",
        "projectedEndDateBaseline" => "dateTime",
        "lastBaselineDate" => "dateTime",
        "jobType" => "RecordRef",
        "percentComplete" => "float",
        "estimatedCost" => "float",
        "estimatedRevenue" => "float",
        "estimatedTime" => "Duration",
        "estimatedTimeOverride" => "Duration",
        "fax" => "string",
        "email" => "string",
        "emailPreference" => "EmailPreference",
        "openingBalance" => "float",
        "openingBalanceDate" => "dateTime",
        "openingBalanceAccount" => "RecordRef",
        "subsidiary" => "RecordRef",
        "jobBillingType" => "JobBillingType",
        "billingSchedule" => "RecordRef",
        "jobItem" => "RecordRef",
        "percentTimeComplete" => "float",
        "actualTime" => "Duration",
        "allowTime" => "boolean",
        "timeRemaining" => "Duration",
        "limitTimeToAssignees" => "boolean",
        "estimatedLaborCost" => "float",
        "estimatedLaborCostBaseline" => "float",
        "estimateRevRecTemplate" => "RecordRef",
        "revRecForecastRule" => "RecordRef",
        "usePercentCompleteOverride" => "boolean",
        "estimatedLaborRevenue" => "float",
        "estimatedGrossProfit" => "float",
        "estimatedGrossProfitPercent" => "float",
        "projectExpenseType" => "RecordRef",
        "applyProjectExpenseTypeToAll" => "boolean",
        "allowAllResourcesForTasks" => "boolean",
        "jobPrice" => "float",
        "isUtilizedTime" => "boolean",
        "isProductiveTime" => "boolean",
        "isExemptTime" => "boolean",
        "materializeTime" => "boolean",
        "allowExpenses" => "boolean",
        "allocatePayrollExpenses" => "boolean",
        "includeCrmTasksInTotals" => "boolean",
        "globalSubscriptionStatus" => "GlobalSubscriptionStatus",
        "jobResourcesList" => "JobResourcesList",
        "plStatementList" => "JobPlStatementList",
        "addressbookList" => "JobAddressbookList",
        "milestonesList" => "JobMilestonesList",
        "creditCardsList" => "JobCreditCardsList",
        "timeApproval" => "RecordRef",
        "customFieldList" => "CustomFieldList",
        "internalId" => "string",
        "externalId" => "string",
    );
}
