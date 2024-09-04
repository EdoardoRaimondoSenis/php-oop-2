<?php

require_once 'Product.php';

class BedProduct extends Product {
    private $size;

    public function __construct($name, $price, $image, $category, $size) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function getType() {
        return "Cuccia";
    }
}