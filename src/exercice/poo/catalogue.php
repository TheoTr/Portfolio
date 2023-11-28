<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
require_once 'func.php';
require_once 'produit.php';

class Catalogue{
    public $produits = array();
    public function __construct($products) {
        echo '<nav>';
        foreach ($products as $product) {
            $produit = new Produit($product->id, $product->image, $product->name, $product->price, $product->vat, $product->description);
            $this->produits[] = $produit;
        }
        
    }
}

$catalogue = new Catalogue($products);
foreach($catalogue->produits as $produit) {
    $produit->afficher();
}



echo '</nav>';
?>
</body>
</html>