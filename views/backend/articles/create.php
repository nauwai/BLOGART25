<?php
include '../../../header.php';
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" >

                    <label for="dtCreaArt">Date de Création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libChapoArt">Chapeau</label>
                    <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libAccrochArt">Accroche paragraphe 1</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" name="parag1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libAccrochArt">Accroche paragraphe 1</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag2Artt">Paragraphe 2</label>
                    <input id="parag2Art" name="parag2Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" name="parag3Art" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" name="libConclArt" class="form-control" type="text" autofocus="autofocus" />

                    <label for="libThem">Image</label>
                    <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="file" accept="image/*">
                    
                    <label for="libThem">Thematique</label>
                    <input id="libThem " name="libThem " class="form-control" type="text" autofocus="autofocus" />

                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>