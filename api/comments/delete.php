<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numCom = ctrlSaisies($_GET['numCom']);

sql_delete('COMMENT', "numCom = $numCom");
//sql_delete('ARTICLE', "numMemb = $numMemb");
//sql_delete('COMMENT', "numMemb = $numMemb");
//sql_delete('LIKEART', "numMemb = $numMemb");


header('Location: ../../views/backend/comments/list.php');