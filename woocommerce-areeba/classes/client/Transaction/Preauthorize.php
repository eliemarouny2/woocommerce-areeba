<?php

namespace AreebaWoocommerceGateway\Client\Transaction;

use AreebaWoocommerceGateway\Client\Transaction\Base\AbstractTransactionWithReference;
use AreebaWoocommerceGateway\Client\Transaction\Base\AddToCustomerProfileInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\AddToCustomerProfileTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\AmountableInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\AmountableTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\ItemsInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\ItemsTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\OffsiteInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\OffsiteTrait;
use AreebaWoocommerceGateway\Client\Transaction\Base\ScheduleInterface;
use AreebaWoocommerceGateway\Client\Transaction\Base\ScheduleTrait;

/**
 * Preauthorize: Reserve a certain amount, which can be captured (=charging) or voided (=revert) later on.
 *
 * @package AreebaWoocommerceGateway\Client\Transaction
 */
class Preauthorize extends AbstractTransactionWithReference implements AmountableInterface, OffsiteInterface, ItemsInterface, ScheduleInterface, AddToCustomerProfileInterface {
    use OffsiteTrait;
    use AmountableTrait;
    use ItemsTrait;
    use ScheduleTrait;
    use AddToCustomerProfileTrait;
    
    const TRANSACTION_INDICATOR_SINGLE = 'SINGLE';
    const TRANSACTION_INDICATOR_INITIAL = 'INITIAL';
    const TRANSACTION_INDICATOR_RECURRING = 'RECURRING';
    const TRANSACTION_INDICATOR_CARDONFILE = 'CARDONFILE';
    const TRANSACTION_INDICATOR_CARDONFILE_MERCHANT = 'CARDONFILE_MERCHANT';

    /**
     * @var bool
     */
    protected $withRegister = false;

    /**
     * @var string
     */
    protected $transactionIndicator;

    /**
     * @return boolean
     */
    public function isWithRegister() {
        return $this->withRegister;
    }

    /**
     * set true if you want to register a user vault together with the preauthorize
     *
     * @param boolean $withRegister
     *
     * @return $this
     */
    public function setWithRegister($withRegister) {
        $this->withRegister = $withRegister;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionIndicator() {
        return $this->transactionIndicator;
    }

    /**
     * @param string $transactionIndicator
     */
    public function setTransactionIndicator($transactionIndicator) {
        $this->transactionIndicator = $transactionIndicator;
        return $this;
    }
}
