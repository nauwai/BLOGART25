<?php
session_start();
require_once 'config.php';
var_dump($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Gastro'bordeaux</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL . '/src/css/bootstrap.css' ?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL . '/src/css/style.css' ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?php echo ROOT_URL . '/src/css/responsive.css' ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo ROOT_URL . 'src/images/favicon.png' ?>" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?php echo ROOT_URL . 'src/css/jquery.mCustomScrollbar.min.css' ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?php echo ROOT_URL . 'src/css/owl.carousel.min.css' ?>">
    <link rel="stylesoeet" href="<?php echo ROOT_URL . 'src/css/owl.theme.default.min.css' ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
</head>
<body>
<!-- header section start -->
<div class="header_section">
    <div class="container-fluid header_main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="<?php echo ROOT_URL . '/index.php' ?>"><img
                        src="<?php echo ROOT_URL . '/src/images/logo.png' ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" <?php if (empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> href="<?php echo ROOT_URL . '/index.php' ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> href="<?php echo ROOT_URL . '/blog.php' ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (!empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> href="<?php echo ROOT_URL . '/views/backend/security/login.php' ?>">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (!empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> href="<?php echo ROOT_URL . '/views/backend/security/login.php' ?>">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacter">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i style="font-size: 26px"
                                                        class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item">
                        <a <?php if (empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> class="nav-link" href="#"><i style="font-size: 20px; margin-right: 10px"
                                                          class="fa-regular fa-user"></i><?php if (!empty($_SESSION)) {
                                echo $_SESSION['pseudo'];
                            } ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" <?php if (empty($_SESSION)) {
                            echo 'style="display: none"';
                        } ?> href="<?php echo ROOT_URL . '/api/security/disconnect.php' ?>">Deconnexion</a>
                    </li>
                    <?php if (!empty($_SESSION)) {
                        if ($_SESSION['statut'] == '1') {
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="' . ROOT_URL . '/views/backend/dashboard.php"><i style="font-size: 20px; margin-right: 10px" class="fa-solid fa-screwdriver-wrench"></i></a>
                                  </li>';
                        }
                    } ?>

                </ul>
            </div>
        </nav>
    </div>
