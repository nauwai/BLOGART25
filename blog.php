<?php
//var_dump($_SESSION);
require_once 'header.php';

$allarticles = sql_select('ARTICLE', '*');

?>
    <!-- blog section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">

                <?php foreach ($allarticles as $allarticle) : ?>
                    <div class="col-lg-4 mt-4 col-md-6 col-sm-12 carte">
                        <div class="card" style="width: 19rem;">
                            <img src="src/uploads/<?php echo $allarticle['urlPhotArt']; ?>" class="card-img-top"
                                 alt="Photo introuvable">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $allarticle['libTitrArt']; ?></h5>
                                <p class="card-text">
                                    <?php echo mb_strimwidth($allarticle['libChapoArt'], 0, 100, ' [...]'); ?>
                                </p>                                <a
                                        href="views/frontend/articles/article1.php?numArt=<?php echo $allarticle['numArt'];?>&like=0" class="btn bouton ">Lire</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!-- blog section end -->

    <!--Form end-->
<?php require_once 'footer.php'; ?>