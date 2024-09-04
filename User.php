<?php

class Category {
    private $name;
    private $icon;

    public function __construct($name, $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }
}

class Shop {
    private $products = [];
    private $categories = [];

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function addCategory(Category $category) {
        $this->categories[] = $category;
    }

    public function getProducts() {
        return $this->products;
    }

    public function getCategories() {
        return $this->categories;
    }
}