<?php

namespace AreebaWoocommerceGateway\Client\Transaction;

use AreebaWoocommerceGateway\Client\Transaction\Base\AbstractTransactionWithReference;
use AreebaWoocommerceGateway\Client\Transaction\Base\AmountableInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\AmountableTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\ItemsInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\ItemsTrait;

/**
 * Capture: Charge a previously preauthorized transaction.
 *
 * @package AreebaWoocommerceGateway\Client\Transaction
 */
class Capture extends AbstractTransactionWithReference implements AmountableInterface, ItemsInterface {
    use AmountableTrait;
    use ItemsTrait;
}
