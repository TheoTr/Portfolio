<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];



    // Connexion à la base de données
    $HOSTNAME = "localhost";
    $DATABASE = "register_db";
    $USERNAME = "root";
    $PASSWORD = "";
    
    $db = new PDO("mysql:host=$HOSTNAME;dbname=$DATABASE", $USERNAME, $PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recherche de l'utilisateur dans la base de données
    $stmt = $db->prepare("SELECT id, username, password FROM users WHERE username = :username");
    $stmt->execute(array(':username' => $username));
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // L'authentification a réussi, rediriger vers la page d'accueil
        header("Location: index.php");
    } else {
        // L'authentification a échoué, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
