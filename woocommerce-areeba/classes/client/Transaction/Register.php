<?php

namespace AreebaWoocommerceGateway\Client\Transaction;

use AreebaWoocommerceGateway\Client\Transaction\Base\AbstractTransaction;
use AreebaWoocommerceGateway\Client\Transaction\Base\AddToCustomerProfileInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\AddToCustomerProfileTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\OffsiteInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\OffsiteTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\ScheduleInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\ScheduleTrait;

/**
 * Register: Register the customer's payment data for recurring charges.
 *
 * The registered customer payment data will be available for recurring transaction without user interaction.
 *
 * @package AreebaWoocommerceGateway\Client\Transaction
 */
class Register extends AbstractTransaction implements OffsiteInterface, ScheduleInterface, AddToCustomerProfileInterface {
    use OffsiteTrait;
    use ScheduleTrait;
    use AddToCustomerProfileTrait;
}
