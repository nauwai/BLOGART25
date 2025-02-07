<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numMemb = ctrlSaisies($_POST['numMemb']);

sql_delete('MEMBRE', "numMemb = $numMemb");
//sql_delete('ARTICLE', "numMemb = $numMemb");
//sql_delete('COMMENT', "numMemb = $numMemb");
//sql_delete('LIKEART', "numMemb = $numMemb");


header('Location: ../../views/backend/members/list.php');
ob_end_flush();
