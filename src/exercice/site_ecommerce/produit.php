<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php" class="home_btn" >Home</a>
    </nav>
<?php

require_once('func.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

if ($products === null && json_last_error() !== JSON_ERROR_NONE) {
    die('Erreur lors du décodage JSON');
}


$product = FindProductById($products, $id);

$imgsrc = 'images/' . $product->image;

echo "<section> \n";
echo "<p> \n" ;
echo '<h1>' . $product->name . '</h1>';
echo '<img src="' . $imgsrc . '" alt="' . $product->name . '"><br>';
echo '<h3>' . $product->price . '</h3>';
echo '<a class="btn" href="ajout.php?id=' . $product->id. '">Ajouter au panier</a>';
echo '<a class="btn" href="index.php">Retour</a>';
echo '<a class="btn" href="panier.php">Voir le panier</a>';

?>
</body>
</html>
