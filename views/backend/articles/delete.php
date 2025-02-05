<?php
include '../../../header.php';

if(isset($_GET['numArt'])){
    $numArt = $_GET['numArt'];
    $psArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];

    var_dump($psArt);
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression de Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMemb">Titre de l'article</label>
                    <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                    <input id="psArt" name="psArt" class="form-control" type="text" value="<?php echo($psArt); ?>" readonly="readonly" disabled />
                </div>
                <br/>
                <div class="form-group mt-4">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>