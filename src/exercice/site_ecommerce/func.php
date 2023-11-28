<?php
session_start();
$jsonFilePath = 'products.json';

$jsonData = file_get_contents($jsonFilePath);

$products = json_decode($jsonData);

if ($products === null && json_last_error() !== JSON_ERROR_NONE) {
    die('Erreur lors du décodage JSON');
}

function FindProductById($products, $id) {
    foreach ($products as $product) {
        if ($product->id == $id) {
            return $product;
        }
    }
    return null;
}

$panier = $_SESSION['panier'];
$nombreObjetsDansPanier = 0;
    foreach ($panier as $key => $value) {
        $nombreObjetsDansPanier += $value;
    }

?>