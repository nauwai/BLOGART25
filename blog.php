<?php
require_once 'header.php';
//var_dump($_SESSION);
if (empty($_SESSION)) {
    header("Location: views/backend/security/login.php");
}

?>
    <!-- blog section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 carte">
                    <div class="card" style="width: 18rem;">
                        <img src="src/images/affiche.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Marathon</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="views/frontend/articles/article1.php?numArt=2&like=0" class="btn bouton ">Lire plus</a>
                        </div>
                    </div>
                    <div class="card" style="width: 19rem;">
                        <img src="src/images/resto.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Auteur</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="views/frontend/articles/article1.php?numArt=2&like=0" class="btn bouton ">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog section end -->

    <!--Form end-->
<?php require_once 'footer.php'; ?>