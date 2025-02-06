<?php
ob_start();

session_start();
//var_dump($_SESSION);
//var_dump($_GET);
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';


$libCom = $_POST['libCom'];
$numMemb = $_SESSION['id'];
$numArt = $_GET['numArt'];

var_dump($_POST);


$ComAjoute = sql_insert('COMMENT', 'libCom, numMemb, numArt', "'$libCom', '$numMemb', '$numArt'");

header('Location: ../../views/frontend/articles/article1.php?numArt='.$numArt.'&like=0');

ob_end_flush();
