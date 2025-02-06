<?php
ob_start();

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
    $urlPhotArt = ctrlSaisies($_FILES['urlPhotArt']['name']);
    $libThem = ctrlSaisies($_POST['thematiques']);

$motcle = isset($_POST['motcleold']) ? $_POST['motcleold'] : [];



var_dump($_POST);
    //var_dump($_FILES['urlPhotArt']);

if (isset($_FILES['urlPhotArt']) && $_FILES['urlPhotArt']['error'] == 0) {
    $uploadDir = __DIR__ . "/../../src/uploads/";
    $fileTmp = $_FILES['urlPhotArt'];
    $fileName = basename($_FILES['urlPhotArt']['name']);
    $filePath = $uploadDir . $fileName;

    $fileType = mime_content_type($_FILES['urlPhotArt']['tmp_name']);
    if (strpos($fileType, 'image') === false) {
        die("Ce fichier n'est pas une image.");
    }

    if (move_uploaded_file($_FILES['urlPhotArt']['tmp_name'], $filePath)) {
        echo "Image enregistrée avec succès : <a href='$filePath'>$fileName</a>";
        header('Location: ../../views/backend/articles/list.php');
    } else {
        echo "Erreur lors de l'upload.";
    }
} else {
    echo "Aucun fichier n'a été envoyé.";
}



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
sql_update('ARTICLE', 'numThem ="' .$libThem.'"', "numArt = $numArt");
///sql_update('ARTICLE', 'libThem ="' .$libThem.'"', "numArt = $numArt");

sql_delete('MOTCLEARTICLE', "numArt = $numArt");


foreach ($motcle as $motcl) {

    sql_insert('MOTCLEARTICLE', 'numArt, numMotCle', "'$numArt', '$motcl'");


}

header('Location: ../../views/backend/articles/list.php');

ob_end_flush();
