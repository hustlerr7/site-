<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="src/css/maine.css">
</head>
<body>

<form action="traitement_inscription.php" method="POST">

    <h2>Créer un compte</h2>

    <label>Email :</label>
    <input type="text" name="email" required placeholder="Entrez votre mail">
    <br><br>

    <label>Mot de passe :</label>
    <input type="password" name="password" required placeholder="Entrez votre mot de passe">
    <br><br>

    <input type="submit" value="S'inscrire">

</form>

</body>
</html>