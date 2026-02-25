<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="src/css/maine.css">
</head>
<body>

    <form action="login.php" method="POST">

        <h2>Connexion</h2>

        <label>E-mail :</label>
        <input type="text" name="email" required placeholder="Entrez votre mail">
        <br><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required placeholder="Entrez votre mot de passe">
        <br><br>

        <input type="submit" value="Se connecter">

        <p>Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
    
    </form>

</body>
</html>