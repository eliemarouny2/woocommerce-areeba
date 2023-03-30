<?php

namespace AreebaWoocommerceGateway\Client\Transaction\Base;
use AreebaWoocommerceGateway\Client\Data\Item;

/**
 * Interface ItemsInterface
 *
 * @package AreebaWoocommerceGateway\Client\Transaction\Base
 */
interface ItemsInterface {

    /**
     * @param Item[] $items
     * @return void
     */
    public function setItems($items);

    /**
     * @return Item[]
     */
    public function getItems();

    /**
     * @param Item $item
     * @return void
     */
    public function addItem($item);

}
