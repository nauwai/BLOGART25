<?php
ob_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
require_once '../../functions/ctrlSaisies.php';



$libTitrArt = ctrlSaisies($_POST['libTitrArt']);
$libChapoArt =ctrlSaisies($_POST['libChapoArt']);
$libAccrochArt =ctrlSaisies($_POST['libAccrochArt']);
$parag1Art =ctrlSaisies($_POST['parag1Art']);
$libSsTitr1Art =ctrlSaisies($_POST['libSsTitr1Art']);
$parag2Art =ctrlSaisies($_POST['parag2Art']);
$libSsTitr2Art =ctrlSaisies($_POST['libSsTitr2Art']);
$parag3Art =ctrlSaisies($_POST['parag3Art']);
$libConclArt =ctrlSaisies($_POST['libConclArt']);
$urlPhotArt = ctrlSaisies($_FILES['urlPhotArt']['name']);
var_dump($urlPhotArt);

$numThem = 5; // À changer plus tard

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
    } else {
        echo "Erreur lors de l'upload.";
    }
} else {
    echo "Aucun fichier n'a été envoyé.";
}


sql_insert('ARTICLE', 'libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem', "'$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$urlPhotArt', '$numThem'");


header('Location: ../../views/backend/articles/list.php');

ob_end_flush();
