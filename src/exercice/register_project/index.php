<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>Document</title>
</head>
<?php
session_start();

// Vérification de la session pour s'assurer que l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); // Arrêter l'exécution du code si l'utilisateur n'est pas connecté
}

// Affichage du nom d'utilisateur sur la page d'accueil
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <h1>Bienvenue <?php echo $username; ?> sur la page d'accueil !</h1>
    
    <!-- Votre contenu de page d'accueil -->
    
    <a href="logout.php">Se déconnecter</a> <!-- Lien pour se déconnecter, mène vers un script de déconnexion -->
</body>
</html>
