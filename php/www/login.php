<?php
// Démarre la session (obligatoire pour utiliser $_SESSION)
session_start();

// On inclut le fichier de connexion à la base de données
require_once "config.php";

// Vérifie que le formulaire a bien été envoyé en POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // On récupère les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Préparation de la requête SQL sécurisée (évite les injections SQL)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // On récupère le résultat
    $result = $stmt->get_result();

    // Si un utilisateur est trouvé
    if ($result->num_rows === 1) {

        $user = $result->fetch_assoc();

        // Vérification du mot de passe (comparaison simple)
        if (password_verify($password, $user["password"]))  {

            // On stocke les infos dans la session
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["email"] = $user["email"];

            // Redirection vers accueil
            header("Location: accueil.php");
            exit();

} else {
    echo "Mot de passe incorrect.";
}

    } else {
        echo "Utilisateur introuvable.";
    }

    // On ferme la requête
    $stmt->close();
}
?>