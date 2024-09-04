<?php

require_once 'methods.php';

    $shop = createShop();
    $products = $shop->getProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <title>Tutto ció che serve al tuo animaletto preferito</title>
</head>
<body>
    <?php foreach($products as $product): ?>
        <div class="productCard">
            <h2><?php echo $product->getName(); ?></h2>
            <img src='<?php echo $product->getImage(); ?>' alt=''>
            <p>Prezzo: €<?php echo $product->getPrice(); ?></p>
            <p>Categoria: <?php echo $product->getCategory(); ?></p>
            <p>Tipo: <?php echo $product->getType(); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>