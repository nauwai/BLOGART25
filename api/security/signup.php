<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
session_start();

$results = sql_select('MEMBRE', '*');


var_dump($_POST['pseudo']);
$pseudoMemb = ctrlSaisies($_POST['pseudo']);
$prenomMemb = ctrlSaisies($_POST['prenom']);
$nomMemb = ctrlSaisies($_POST['nom']);
$passMemb = ctrlSaisies($_POST['password']);
$eMailMemb = ctrlSaisies($_POST['email']);
$eMailConf = ctrlSaisies($_POST['emailConfirm']);
$passwordConfirm = ctrlSaisies($_POST['passwordConfirm']);
$numStat = 0;
$optin = 0;

if (isset($_POST['oui'])) {
    $optin = 1;
} elseif (isset($_POST['non'])) {
    $optin = 0;
}


if (isset($_POST['statut'])) {
    if ($_POST['statut'] == 'membre') {
        $numStat = 3;
    } elseif ($_POST['statut'] == 'modo') {
        $numStat = 2;
    } elseif ($_POST['statut'] == 'admin') {
        $numStat = 1;
    }
}

foreach ($results as $result) {

    if ($result['pseudoMemb'] == $pseudoMemb) {
        echo 'pseudo déja pris !';
        exit();
    } elseif ($eMailMemb != $eMailConf) {
        echo 'e-mail incorrect !';
        exit();
    }elseif ($passMemb != $passwordConfirm) {
        echo 'mot de passe incorrect !';
        exit();
    }
}

$passMemb = password_hash($passMemb, PASSWORD_DEFAULT);

$inscription = sql_insert('MEMBRE', 'pseudoMemb, prenomMemb, nomMemb, passMemb, eMailMemb, numStat, accordMemb', "'$pseudoMemb', '$prenomMemb', '$nomMemb', '$passMemb', '$eMailMemb', '$numStat', '$optin'");

$connexion = sql_select('MEMBRE', "*", "pseudoMemb = '$pseudoMemb'");

//var_dump($connexion);
if ($connexion) {
    $_SESSION['id'] = $connexion[0]['numMemb'];
    header('Location: ../../index.php');
    $_SESSION['pseudo'] = $connexion[0]['pseudoMemb'];
    $_SESSION['statut'] = $connexion[0]['numStat'];
    $_SESSION['flash']['danger'] = 'Vous êtes connecté';


}

ob_end_flush();




