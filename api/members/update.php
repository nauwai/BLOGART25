<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$prenom = ctrlSaisies($_POST['prenom']);
$numMemb = ctrlSaisies($_GET['numMemb']);
$nom = ctrlSaisies($_POST['nom']);
$email = ctrlSaisies($_POST['email']);
$emailConfirm = ctrlSaisies($_POST['emailConfirm']);

if ($email != $emailConfirm) {
    echo 'email incorrecte';
    exit();
}

$numStat = 0;
$optin = $_POST['radio'];

var_dump($optin);

if ($optin == 'oui') {
    $optin = 1;
} elseif ($optin == 'non') {
    $optin = 0;
} elseif (!$optin) {
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

//sql_delete('STATUT', "numStat = $numStat");
sql_update('MEMBRE', 'prenomMemb ="' .$prenom.'"', "numMemb = $numMemb");
sql_update('MEMBRE', 'nomMemb ="' .$nom.'"', "numMemb = $numMemb");
sql_update('MEMBRE', 'eMailMemb ="' .$email.'"', "numMemb = $numMemb");
sql_update('MEMBRE', 'numStat ="' .$numStat.'"', "numMemb = $numMemb");
sql_update('MEMBRE', 'accordMemb ="' .$optin.'"', "numMemb = $numMemb");



header('Location: ../../views/backend/members/list.php');

ob_end_flush();
