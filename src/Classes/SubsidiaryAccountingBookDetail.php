<?php

class SubsidiaryAccountingBookDetail {
	public $accountingBook;
	public $currency;
	public $bookStatus;
	static $paramtypesmap = array(
		"accountingBook" => "RecordRef",
		"currency" => "RecordRef",
		"bookStatus" => "AccountingBookStatus",
	);
}

