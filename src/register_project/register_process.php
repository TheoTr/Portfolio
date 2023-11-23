<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Connexion à la base de données
    $HOSTNAME = "localhost";
    $DATABASE = "register_db";
    $USERNAME = "root";
    $PASSWORD = "";

    try {
        $db = new PDO("mysql:host=$HOSTNAME;dbname=$DATABASE", $USERNAME, $PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Vérifier si l'username existe déjà
        $checkStmt = $db->prepare("SELECT COUNT(*) FROM users WHERE username = :username");
        $checkStmt->bindParam(':username', $username);
        $checkStmt->execute();
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            // L'username est déjà pris, vous pouvez gérer l'erreur ou afficher un message d'erreur
            echo "Cet username est déjà pris. Veuillez en choisir un autre.";
        } else {
            // L'username est disponible, vous pouvez l'insérer dans la base de données
            $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            // Rediriger vers la page de connexion
            header("Location: login.php");
        }
    } catch (PDOException $e) {
        // Gérez les erreurs de connexion à la base de données ici
        echo "Erreur de base de données : " . $e->getMessage();
    }
}
?>
