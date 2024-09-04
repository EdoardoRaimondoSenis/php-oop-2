<?php

require_once 'Product.php';

class FoodProduct extends Product {
    private $expirationDate;

    public function __construct($name, $price, $image, $category, $expirationDate) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate() {
        return $this->expirationDate;
    }

    public function getType() {
        return "Cibo";
    }
}