<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
    require_once '../../functions/ctrlSaisies.php';

    $numArt = ctrlSaisies($_POST['numArt']);
    $libTitrArt = ctrlSaisies($_POST['libTitrArt']);
    $libChapoArt = ctrlSaisies($_POST['libChapoArt']);
    $libAccrochArt = ctrlSaisies($_POST['libAccrochArt']);
    $parag1Art = ctrlSaisies($_POST['parag1Art']);
    $libSsTitr1Art = ctrlSaisies($_POST['libSsTitr1Art']);
    $parag2Art = ctrlSaisies($_POST['parag2Art']);
    $libSsTitr2Art = ctrlSaisies($_POST['libSsTitr2Art']);
    $parag3Art = ctrlSaisies($_POST['parag3Art']);
    $libConclArt = ctrlSaisies($_POST['libConclArt']);
    $urlPhotArt = ctrlSaisies($_POST['urlPhotArt']);
    $libThem = ctrlSaisies($_POST['libThem']);


    sql_update('ARTICLE','libTitrArt= "$libTitrArt", libChapoArt= "$libChapoArt", libAccrochArt= "$libAccrochArt", parag1Art= "$parag1Art", libSsTitr1Art= "$libSsTitr1Art", parag2Art= "$parag2Art", libSsTitr2Art= "$libSsTitr2Art", parag3Art= "$parag3Art", libConclArt= "$libConclArt", urlPhotArt= "$urlPhotArt"', "numArt = $numArt");


sql_update('ARTICLE', 'libTitrArt ="' .$libTitrArt.'"', "numArt = $numArt");
sql_update('ARTICLE', 'libChapoArt ="' .$libChapoArt.'"', "numArt = $numArt");
sql_update('ARTICLE', 'libAccrochArt ="' .$libAccrochArt.'"', "numArt = $numArt");
sql_update('ARTICLE', 'parag1Art ="' .$parag1Art.'"', "numArt = $numArt");
sql_update('ARTICLE', 'libSsTitr1Art ="' .$libSsTitr1Art.'"', "numArt = $numArt");
sql_update('ARTICLE', 'libSsTitr2Art ="' .$libSsTitr2Art.'"', "numArt = $numArt");
sql_update('ARTICLE', 'parag3Art ="' .$parag3Art.'"', "numArt = $numArt");
sql_update('ARTICLE', 'libConclArt ="' .$libConclArt.'"', "numArt = $numArt");
sql_update('ARTICLE', 'parag2Art ="' .$parag2Art.'"', "numArt = $numArt");
sql_update('ARTICLE', 'urlPhotArt ="' .$urlPhotArt.'"', "numArt = $numArt");
///sql_update('ARTICLE', 'libThem ="' .$libThem.'"', "numArt = $numArt");


header('Location: ../../views/backend/articles/list.php');