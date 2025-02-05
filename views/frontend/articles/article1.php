<?php
include '../../../header.php';

$numArt = $_GET['numArt'];
$likePositif = 1;

$allLike = sql_select('LIKEART', '*', "numArt = $numArt AND likeA = $likePositif");

$allComments = sql_select('COMMENT', '*', "numArt = $numArt");

$nblike = count($allLike);

?>

<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row article1">
            <div class="title">
                <div>
                    <h2>Marathon</h2>
                    <p>Chapeau Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus pariatur commodi
                        dolorem, ea voluptas a ipsa. Quas illum odio eum commodi, consequatur maiores alias quia
                        distinctio est adipisci voluptatem beatae!</p>
                </div>

                <div class="col-md-4 image-article">
                    <img src="../../../src/images/affiche.webp" class="image" alt="...">
                </div>
            </div>

            <div class="col-md-6 col-md-12">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi dolore odio eius ipsum.
                    Iusto, excepturi! Nihil, reiciendis pariatur voluptatibus eos tempora sunt consequatur possimus
                    quisquam cupiditate ut molestias laborum?</p>
            </div>

            <div class="small d-flex justify-content-start">
                <a href="<?php echo ROOT_URL . '/api/likes/create.php?numArt=2' ?>"
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
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="card-footer py-3 border-0 col-lg-6" style="background-color: #f8f9fa;">
                    <div class="d-flex w-100">
                        <img class="rounded-circle shadow-1-strong me-3"
                             src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                             height="40"/>

                        <div data-mdb-input-init class="form-outline w-100">
                        <textarea name="libCom" class="form-control" id="textAreaExample" rows="4"
                                  style="background: #fff;"></textarea>
                        </div>
                    </div>
                    <div class="float-end mt-2 pt-1">
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm">
                            Envoyer
                        </button>
                    </div>
                </div>
            </form>

            <?php foreach ($allComments as $allComment) : ?>
            <div class="card-footer py-3 mt-4 border-0 col-lg-6" style="background-color: #f8f9fa;">
                <div class="d-flex w-100">
                    <img class="rounded-circle shadow-1-strong me-3"
                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                         height="40"/>
                    <div style="margin-left: 10px; margin-top: 5px" data-mdb-input-init class="form-outline w-100">
                        <label class="form-label" for="textAreaExample"><?php echo $allComment['libCom']?></label>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>
    </div>
</div>
<?php include '../../../footer.php';; ?>
