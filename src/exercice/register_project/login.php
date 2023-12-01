<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../img/favicon.png" type="image/x-icon">
    <title>Connexion</title>
</head>
<body>
    
    <form method="post" action="login_process.php">
        <h2>Connexion</h2>
         <div class="logframe">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br><br>
        <input type="submit" value="Se connecter">
        <h3>vous n'êtes pas encore inscrits ?</h2>
        <a class="register" href="register.php">S'inscrire</a>
        </div>
    </form>

</body>
</html>
