
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1 id="titre_page">Boutique</h1>

<?php

require_once('func.php');


echo "<section> \n";
foreach ($products as $product) {
    
    $imgsrc = 'images/' . $product->image;
    echo "<p> \n" ;
    echo '<h1>' . $product->name . '</h1>';
    echo '<img src="' . $imgsrc . '" alt="' . $product->name . '"><br>';
    echo '<h3>' . $product->price . '</h3>';
    echo '<a class="btn" href="produit.php?id=' . $product->id . '">Voir le produit</a>';
    echo '</p>';
}
echo '</section>';
?>


</body>
</html>
