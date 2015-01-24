<?php namespace Fungku\NetSuite\Classes;

class Opportunity extends Record {
	public $customForm;
	public $currency;
	public $estimatedBudget;
	public $entity;
	public $job;
	public $title;
	public $tranId;
	public $source;
	public $salesRep;
	public $contribPct;
	public $partner;
	public $salesGroup;
	public $syncSalesTeams;
	public $leadSource;
	public $entityStatus;
	public $probability;
	public $tranDate;
	public $expectedCloseDate;
	public $daysOpen;
	public $forecastType;
	public $currencyName;
	public $exchangeRate;
	public $projectedTotal;
	public $rangeLow;
	public $rangeHigh;
	public $projAltSalesAmt;
	public $altSalesRangeLow;
	public $altSalesRangeHigh;
	public $weightedTotal;
	public $actionItem;
	public $winLossReason;
	public $memo;
	public $taxTotal;
	public $isBudgetApproved;
	public $tax2Total;
	public $salesReadiness;
	public $totalCostEstimate;
	public $buyingTimeFrame;
	public $estGrossProfit;
	public $buyingReason;
	public $estGrossProfitPercent;
	public $billingAddress;
	public $billAddressList;
	public $shippingAddress;
	public $shipIsResidential;
	public $shipAddressList;
	public $class;
	public $closeDate;
	public $createdDate;
	public $lastModifiedDate;
	public $department;
	public $location;
	public $subsidiary;
	public $status;
	public $vatRegNum;
	public $syncPartnerTeams;
	public $salesTeamList;
	public $partnersList;
	public $itemList;
	public $competitorsList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"currency" => "RecordRef",
		"estimatedBudget" => "float",
		"entity" => "RecordRef",
		"job" => "RecordRef",
		"title" => "string",
		"tranId" => "string",
		"source" => "string",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"salesGroup" => "RecordRef",
		"syncSalesTeams" => "boolean",
		"leadSource" => "RecordRef",
		"entityStatus" => "RecordRef",
		"probability" => "float",
		"tranDate" => "dateTime",
		"expectedCloseDate" => "dateTime",
		"daysOpen" => "integer",
		"forecastType" => "RecordRef",
		"currencyName" => "string",
		"exchangeRate" => "float",
		"projectedTotal" => "float",
		"rangeLow" => "float",
		"rangeHigh" => "float",
		"projAltSalesAmt" => "float",
		"altSalesRangeLow" => "float",
		"altSalesRangeHigh" => "float",
		"weightedTotal" => "float",
		"actionItem" => "string",
		"winLossReason" => "RecordRef",
		"memo" => "string",
		"taxTotal" => "float",
		"isBudgetApproved" => "boolean",
		"tax2Total" => "float",
		"salesReadiness" => "RecordRef",
		"totalCostEstimate" => "float",
		"buyingTimeFrame" => "RecordRef",
		"estGrossProfit" => "float",
		"buyingReason" => "RecordRef",
		"estGrossProfitPercent" => "float",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"class" => "RecordRef",
		"closeDate" => "dateTime",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"department" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"status" => "string",
		"vatRegNum" => "string",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "OpportunitySalesTeamList",
		"partnersList" => "OpportunityPartnersList",
		"itemList" => "OpportunityItemList",
		"competitorsList" => "OpportunityCompetitorsList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

