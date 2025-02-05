<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
session_start();

$password = $_POST["password"];
$pseudo = $_POST["pseudo"];

$connexion = sql_select('MEMBRE', "*", "pseudoMemb = '$pseudo'");

var_dump($connexion);

if ($connexion) {
    $_SESSION['id'] = $connexion[0]['numMemb'];
    header('Location: ../../index.php');
    $_SESSION['pseudo'] = $connexion[0]['pseudoMemb'];
    $_SESSION['statut'] = $connexion[0]['numStat'];
    $_SESSION['flash']['danger'] = 'Vous êtes connecté';
    //var_dump($_SESSION);

}

