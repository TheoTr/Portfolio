<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];



    // Connexion à la base de données
    $HOSTNAME = "localhost";
    $DATABASE = "register_db";
    $USERNAME = "theo_admin";
    $PASSWORD = "J18M12A2001";
    
    $db = new PDO("mysql:host=$HOSTNAME;dbname=$DATABASE", $USERNAME, $PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recherche de l'utilisateur dans la base de données
    $stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = :username");
    $stmt->execute(array(':username' => $username));
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // L'authentification a réussi, rediriger vers la page d'accueil
        $_SESSION['username'] = $user['username'];
        echo '<script>alert("Connexion réussie ! Bienvenue."); window.location.href = "home.php";</script>';
    } else {
        // L'authentification a échoué, afficher un message d'erreur
        echo '<script>alert("Échec de la connexion. Veuillez réessayer."); window.location.href = "login.php";</script>';
    }
}
?>
