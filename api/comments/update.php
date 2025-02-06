<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';
var_dump($_POST);

$attModOK = $_POST['attModOK'];
$numCom = $_POST['numCom'];
$ok = 1;
$notifComKOAff = $_POST['notifComKOAff'];
$suppLogique = $_POST['suppLogique'];

sql_update('COMMENT', 'notifComKOAff ="' .$notifComKOAff.'"', "numCom = $numCom");

if (empty($attModOK) || empty($suppLogique)) {
    header('Location: /views/backend/comments/list.php');
}

if ($attModOK == 'oui') {
    sql_update('COMMENT', 'attModOK ="' .$ok.'"', "numCom = $numCom");
} elseif ($attModOK == 'non') {
    sql_update('COMMENT', 'attModOK ="' .$ok.'"', "numCom = $numCom");
}

if ($suppLogique == 'non') {
    sql_update('COMMENT', 'delLogiq ="' .$ok.'"', "numCom = $numCom");
}

header('Location: /views/backend/comments/list.php');

ob_end_flush();
