<?php
// Démarre la session
session_start();

// Vérifie si l'utilisateur est connecté
if (!isset($_SESSION["user_id"])) {

    // Si non connecté → retour à la page de connexion
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>

    <!-- Affiche l'email stocké en session -->
    <h1>Bienvenue <?php echo htmlspecialchars($_SESSION["email"]); ?> 🎉</h1>

    <p>Vous êtes connecté.</p>

    <!-- Lien de déconnexion -->
    <a href="logout.php">Se déconnecter</a>

</body>
</html>