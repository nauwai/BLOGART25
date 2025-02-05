<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';

$numArt = ctrlSaisies($_POST['numArt']);

sql_delete('ARTICLE', "numArt = $numArt");
//sql_delete('ARTICLE', "numMemb = $numMemb");
//sql_delete('COMMENT', "numMemb = $numMemb");
//sql_delete('LIKEART', "numMemb = $numMemb");


header('Location: ../../views/backend/articles/list.php');