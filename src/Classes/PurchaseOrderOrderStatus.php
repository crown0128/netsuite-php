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
 * generated:  2019-02-27 03:26:43 PM PST
 */

namespace NetSuite\Classes;

class PurchaseOrderOrderStatus {
    static $paramtypesmap = array(
    );
    const _closed = "_closed";
    const _fullyBilled = "_fullyBilled";
    const _partiallyReceived = "_partiallyReceived";
    const _pendingBillingPartiallyReceived = "_pendingBillingPartiallyReceived";
    const _pendingBilling = "_pendingBilling";
    const _pendingReceipt = "_pendingReceipt";
    const _pendingSupervisorApproval = "_pendingSupervisorApproval";
    const _rejectedBySupervisor = "_rejectedBySupervisor";
}
