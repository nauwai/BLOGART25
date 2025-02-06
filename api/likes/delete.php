<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

var_dump($_POST);

$numMemb = ctrlSaisies($_POST['numMemb']);
$numArt = ctrlSaisies($_POST['numArt']);

sql_delete('LIKEART', "numArt = $numArt AND numMemb = $numMemb");

header('Location: ../../views/backend/likes/list.php');

ob_end_flush();
