<?php

// Inclusion du fichier de connexion à la base
include("config.php");

// Récupération des données envoyées par le formulaire
$email = $_POST['email'];

// Hashage sécurisé du mot de passe
// PASSWORD_DEFAULT utilise actuellement bcrypt
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Vérifie si l'email existe déjà dans la base
$check = $conn->prepare("SELECT id FROM users WHERE email = ?");
$check->bind_param("s", $email); // "s" = string
$check->execute();
$check->store_result();

// Si un utilisateur existe déjà avec cet email
if ($check->num_rows > 0) {

    echo "Cet email existe déjà.";

} else {

    // Préparation de la requête d'insertion sécurisée
    $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    // Exécution de la requête
    if ($stmt->execute()) {

        echo "Compte créé avec succès ! <a href='index.php'>Se connecter</a>";

    } else {

        echo "Erreur lors de la création du compte.";
    }
}

// Fermeture de la connexion
$conn->close();

?>