
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
    <a href="index.php" class="home_btn" >Menu</a>
    <h1 id="titre_page">Boutique</h1>
    <a href="panier.php" class="panier">Panier</a>

</nav>

<?php

require_once('func.php');


echo "<section> \n";
foreach ($products as $product) {
    
    $imgsrc = 'images/' . $product->image;
    echo '<div class="fiche-produit">';
    echo '<h1>' . $product->name . '</h1>';
    echo '<img src="' . $imgsrc . '" alt="' . $product->name . '"><br>';
    echo '<h3>' . $product->price . '</h3>';
    echo '<a class="btn" href="produit.php?id=' . $product->id . '">Voir le produit</a>';
    echo '</div>';
}
echo '</section>';
?>


</body>
</html>
