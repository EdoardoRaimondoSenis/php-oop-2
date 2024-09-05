<?php

require_once 'User.php';
require_once 'Product.php';
require_once 'FoodProduct.php';
require_once 'ToyProduct.php';
require_once 'BedProduct.php';


function createCategories() {
    $categoryDogs = new Category("Cani", "images/doggo.jpg");
    $categoryCats = new Category("Gatti", "images/catto.jpg");
    return [$categoryDogs, $categoryCats];
}


function createProducts($categories) {
    $product1 = new FoodProduct("Cibo per Cani", 10.99, "images/ciboCani.jpg", $categories[0]->getName(), "2024-12-31");
    $product2 = new ToyProduct("Gioco per Gatti", 5.99, "images/giocoGatti.jpg", $categories[1]->getName(), "Plastica");
    $product3 = new BedProduct("Cuccia per Cani", 49.99, "images/cucciaCani.jpg", $categories[0]->getName(), "Grande");
    return [$product1, $product2, $product3];

    try {
        $product1->setPrice(10.99);
    } catch (Exception $e) {
        echo 'Errore:' . $e->getMessage();
    }

    try {
        $product2->setPrice(5.99);
    } catch (Exception $e) {
        echo 'Errore:' . $e->getMessage();
    }

    try {
        $product3->setPrice(49.99);
    } catch (Exception $e) {
        echo 'Errore:' . $e->getMessage();
    }

}


function createShop() {
    $shop = new Shop();
    $categories = createCategories();
    $products = createProducts($categories);
    
    foreach ($categories as $category) {
        $shop->addCategory($category);
    }

    foreach ($products as $product) {
        $shop->addProduct($product);
    }

    return $shop;
}