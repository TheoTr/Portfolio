<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body>
     
    <form method="post" action="register_process.php">
        <h2>Inscription</h2>
       <div class="logframe">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br><br>
        <input type="submit" value="S'inscrire">
        <h3>vous êtes déjà inscrits ?</h2>
        <a class="login" href="login.php">Se connecter</a>
        </div>
    </form>
</body>
</html>
