<?php
// Informations de connexion à la base
$host = "db";              // Nom du service MySQL dans docker-compose
$dbname = "db";      // Nom de la base
$user = "user";            // Utilisateur MySQL
$password = "password";    // Mot de passe MySQL

// Création de la connexion à la base
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifie si la connexion échoue
if ($conn->connect_error) {
    // Arrête le script et affiche l'erreur
    die("Erreur de connexion : " . $conn->connect_error);
}

// Si tout fonctionne, la connexion est active
?>