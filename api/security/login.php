<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
session_start();

// Récupère les données envoyées par le formulaire
$password = $_POST["password"];
$pseudo = $_POST["pseudo"];

// Récupère l'utilisateur depuis la base de données
$connexion = sql_select('MEMBRE', "*", "pseudoMemb = '$pseudo'");


if ($connexion && $connexion[0]) {
    $membre = $connexion[0];


    $hashedPassword = $membre[4];

    if (password_verify($password, $hashedPassword)) {
        $_SESSION['id'] = $connexion[0]['numMemb'];
        header('Location: ../../index.php');
        $_SESSION['pseudo'] = $connexion[0]['pseudoMemb'];
        $_SESSION['statut'] = $connexion[0]['numStat'];
        $_SESSION['flash']['danger'] = 'Vous êtes connecté';
    } else {
        header('Location: ../../views/backend/security/login.php');

    }
} else {
    echo "L'utilisateur n'existe pas.";
}
var_dump($_SESSION);
