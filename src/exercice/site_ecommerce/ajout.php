<?php
require_once('func.php');
session_start();

// Vérification de la présence du paramètre 'id' dans l'URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Initialisation du panier s'il n'existe pas dans la session
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    // Vérification si le produit existe déjà dans le panier
    if (isset($_SESSION['panier'][$productId])) {
        // Si le produit existe, augmenter la quantité
        $_SESSION['panier'][$productId]++;
    } else {
        // Si le produit n'existe pas, l'ajouter au panier avec une quantité de 1
        $_SESSION['panier'][$productId] = 1;
    }
}

// Redirection vers la page du panier
header('Location: panier.php');
exit;
?>
