<?php

require_once 'Product.php';

class ToyProduct extends Product {
    private $material;

    public function __construct($name, $price, $image, $category, $material) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->material = $material;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getType() {
        return "Gioco";
    }
}