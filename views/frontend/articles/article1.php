<?php
include '../../../header.php';
?>

<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row article1">
            <div class="title">
                <div>
                    <h2>Marathon</h2>
                    <p>Chapeau Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus pariatur commodi dolorem, ea voluptas a ipsa. Quas illum odio eum commodi, consequatur maiores alias quia distinctio est adipisci voluptatem beatae!</p>
                </div>

                <div class="col-md-4 image-article">
                    <img src="../../../src/images/affiche.webp" class="image" alt="...">
                </div>
            </div>

            <div class="col-md-6 col-md-12">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis excepturi dolore odio eius ipsum. Iusto, excepturi! Nihil, reiciendis pariatur voluptatibus eos tempora sunt consequatur possimus quisquam cupiditate ut molestias laborum?</p>
            </div>

            <div class="small d-flex justify-content-start">
                <a href="#" class="d-flex align-items-center me-3">
                    <img src="../../../src/images/like.png" alt="">
                    <p>J'aime</p>
                </a>
                <a href="#" class="d-flex align-items-center me-3">
                    <img src="../../../src/images/comment.png" alt="">
                    <p>Commenter</p>
                </a>
            </div>

            <div class="card-footer py-3 border-0 col-lg-6" style="background-color: #f8f9fa;">
                <div class="d-flex w-100">
                    <img class="rounded-circle shadow-1-strong me-3"
                         src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                         height="40" />

                    <div data-mdb-input-init class="form-outline w-100">
                        <textarea class="form-control" id="textAreaExample" rows="4"
                                  style="background: #fff;"></textarea>
                        <label class="form-label" for="textAreaExample">Message</label>
                    </div>
                </div>

                <div class="float-end mt-2 pt-1">
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm">Envoyer</button>
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../../../footer.php';
;?>
