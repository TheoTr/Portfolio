<?php
require_once('func.php');
session_start();

// ... (code précédent pour récupérer les données et les fonctions) ...

?>

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
        <?php
        $panier = $_SESSION['panier'];
        $nombreObjetsDansPanier = 0;
        foreach ($panier as $key => $value) {
            $nombreObjetsDansPanier += $value;
        }

        echo '<p class="count_object">' . "Nombre d'objets dans le panier :" . $nombreObjetsDansPanier . 
        '</p>'
        ?>
    </nav>

    <h2>PANIER</h2>
    <div class="table_panier">
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Nom du Produit</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        <?php
        $totalHorsTaxes = 0;
        if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
            foreach ($_SESSION['panier'] as $productId => $quantity) {
                $currentProduct = FindProductById($products, $productId); // Stocke les détails du produit courant
                if ($currentProduct) {
                    $totalProductPrice = $currentProduct->price * $quantity;
                    $totalHorsTaxes += $totalProductPrice;
                    $imgsrc = 'images/' . $currentProduct->image;
                    echo '<tr>';
                    echo '<td><img src="' . $imgsrc . '" alt="' . $currentProduct->name . '" style="width: 100px;"></td>';
                    echo '<td>' . $currentProduct->name . '</td>';
                    echo '<td>' . $quantity . '</td>';
                    echo '<td>' . $currentProduct->price . '</td>';
                    echo '<td>' . $totalProductPrice . '</td>';
                    echo '</tr>';
                }
            }
        } else {
            echo '<tr><td colspan="5">Le panier est vide</td></tr>';
        }
        ?>
    </table>
    </div>

    <?php
    // Calcul du total TTC en supposant une TVA de 20%
    $taxRate = 0.20;
    $totalTTC = $totalHorsTaxes * (1 + $taxRate);

    echo '<p>Total hors taxes : ' . $totalHorsTaxes . '</p>';
    echo '<p>Total TVA   : ' . $totalHorsTaxes * $taxRate . '</p>';
    echo '<p>Total TTC : ' . $totalTTC . '</p>';
    ?>
</body>
</html>
