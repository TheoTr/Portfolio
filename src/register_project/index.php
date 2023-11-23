<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
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
h1 {
    margin: auto;
    font-size: 50px;
    color: white;
}
</style>
<body>
    <?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    
    ?>
    <h1>Vous êtes bien connecté</h1>
</body>
</html>