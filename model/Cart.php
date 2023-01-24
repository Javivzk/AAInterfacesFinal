<?php
class cart {
    private $items;
    private $total;

    public function __construct() {
        $this->items = array();
        $this->total = 0;
    }

    public function addItem(Product $product) {
        $this->items[] = $product;
        $this->total += $product->getPrice();
    }

    public function removeItem(Product $product) {
        $index = array_search($product, $this->items);
        if ($index !== false) {
            unset($this->items[$index]);
            $this->total -= $product->getPrice();
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function getTotal() {
        return $this->total;
    }
}

