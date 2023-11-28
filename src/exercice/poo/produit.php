<?php
require_once 'func.php';


class Produit {
    private $id;
    private $image;
    private $name;
    private $price;
    private $vat;
    private $description;

    public function __construct($id, $image, $name, $price, $vat, $description) {
        $this->id = $id;
        $this->image = $image;
        $this->name = $name;
        $this->price = $price;
        $this->vat = $vat;
        $this->description = $description;
    }
    public function computeVAT() {
        return $this->price * $this->vat / 100;
    }
    public function computeTTC() {
        return $this->price + $this->computeVAT();
    }
    public function afficher() {
        echo '<div class="fiche-produit">';
        echo "<p>ID: " . $this->id . "</p>";
        echo "<p>".$this->name . "</p>";
        echo "<img src='images/" . $this->image . "' width='100' height='100'>";
       
        echo "<p>Prix: " . $this->price . "</p>";
        echo "<p>VAT: " . $this->computeVAT() . "</p>";
        echo "<p>TTC: " . $this->computeTTC() . "</p>";
        echo "<p>Description: " . $this->description . "</p>";
        echo '</div>';
    }
}

?>

