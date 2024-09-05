<?php


class Product {
    protected $name;
    protected $price;
    protected $image;
    protected $category;

    public function __construct($name, $price, $image, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }

    public function setPrice($price) {
        if(!is_numeric($price)) {
            throw new Exception('Il prezzo non é valido');
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCategory() {
        return $this->category;
    }

}