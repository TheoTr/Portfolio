<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<style>

body {
    font-family: sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    background-image: url('background6.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    display: flex;
}
input {
    width: 100%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

form {
    width: 300px;
    height: 350px;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 10px;
    padding: 20px;
    margin-top: 200px;
}

h2 {
    text-align: center;
    font-size: 30px;
}
.logframe {
    margin-top : 30px;
}
.login{
    display:flex;
    text-decoration: none;
    justify-content: center;
    font-size: 20px;
    background-color: rgba(255, 255, 255, 0.7);
    color: black;
}
h3 {
    text-align: center;
}




    </style>
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
