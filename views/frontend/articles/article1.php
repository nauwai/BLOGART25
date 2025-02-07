<?php
require_once '../../../header.php';

$numArt = $_GET['numArt'];

$likePositif = 1;
$ok = 0;

$articles = sql_select('ARTICLE', '*', "numArt = $numArt");
//var_dump($articles);

$allLike = sql_select('LIKEART', '*', "numArt = $numArt AND likeA = $likePositif");

$allComments = sql_select('COMMENT', '*', "numArt = $numArt AND delLogiq = $ok");

//var_dump($_SESSION);


$nblike = count($allLike);

foreach ($articles as $article) :
    ?>

    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">

            <div class="col-sm-12 row article1">

                <div class="col-sm-12 image-article">
                    <h2 class="title"><?php echo $article['libTitrArt']; ?></h2>
                    <p class="col-sm-12"><?php echo $article['libChapoArt']; ?></p>
                    <img class="col-sm-12" style="border-radius: 20px" src="../../../src/uploads/<?php echo $article['urlPhotArt']; ?>" class="image" alt="...">
                </div>

                <div class="title">

                    <div>

                        <p><?php echo $article['libAccrochArt']; ?></p>
                        <p><?php echo $article['parag1Art']; ?></p>
                        <p><?php echo $article['libSsTitr1Art']; ?></p>
                        <p><?php echo $article['parag2Art']; ?></p>
                        <p><?php echo $article['libSsTitr2Art']; ?></p>
                        <p><?php echo $article['parag3Art']; ?></p>
                        <p><?php echo $article['libConclArt']; ?></p>

                    </div>

                </div>
                <div class="small d-flex justify-content-start">
                    <a <?php if (empty($_SESSION)) {echo 'style="pointer-events: none;"';} ?> href="<?php echo ROOT_URL . '/api/likes/create.php?numArt='.$numArt?>"
                       class="d-flex align-items-center me-3">
                        <?php if (!empty($_GET)) {
                            if ($_GET['like'] == 0) {
                                echo '<i style="font-size: 20px; color: red" class="fa-regular fa-heart"></i>';
                            } elseif ($_GET['like'] == 1) {
                                echo '<i style="font-size: 20px; color: red" class="fa-solid fa-heart"></i>';
                            }
                        } ?>
                        <p><?php echo $nblike; ?> J'aime</p>
                    </a>
                </div>
                <form action="<?php
                if (!empty($_SESSION)) {
                    echo ROOT_URL . '/api/comments/create.php?numArt='.$numArt;
                } else
                    echo ROOT_URL . '/views/backend/security/login.php';
                ?>" method="post">
                    <div class="card-footer py-3 border-0 col-lg-6" style="background-color: #f8f9fa;">
                        <div class="d-flex w-100">
                            <i style="font-size: 20px; margin-right: 10px"
                               class="fa-regular fa-user"></i>
                            <div data-mdb-input-init class="form-outline w-100">
                        <textarea <?php if (empty($_SESSION)) { echo 'disabled="disabled" placeholder="connectez vous pour commenter"';}?> name="libCom" class="form-control" id="textAreaExample" rows="4"
                                  style="background: #fff;"></textarea>
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-sm">
                                Envoyer
                            </button>
                        </div>
                    </div>
                </form>

                <?php foreach ($allComments as $allComment) : ?>
                    <div class="card-footer py-3 mt-4 border-0 col-lg-6" style="background-color: #f8f9fa;">
                        <div class="d-flex w-100">
                            <i style="font-size: 20px; margin-right: 10px"
                               class="fa-regular fa-user"></i>
                            <div style="margin-left: 10px" data-mdb-input-init class="form-outline w-100">
                                <label class="form-label"
                                       for="textAreaExample"><?php echo $allComment['libCom'] ?></label>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
        </div>
    </div>
<?php
endforeach;
include '../../../footer.php';; ?>
