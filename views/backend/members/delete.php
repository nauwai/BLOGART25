<?php
include '../../../header.php';

if (empty($_SESSION)) {
    header('Location: /');
    exit();
}


if (!isset($_SESSION['statut']) || $_SESSION['statut'] != '1') {
    header('Location: /');
    exit();
}


if(isset($_GET['numMemb'])){
    $pseudoMemb = $_GET['numMemb'];
    $psMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $pseudoMemb")[0]['pseudoMemb'];

    var_dump($psMemb);
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
            <form action="<?php echo ROOT_URL . '/api/members/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMemb">Nom du Membre</label>
                    <input id="numMemb" name="numMemb" class="form-control" style="display: none" type="text" value="<?php echo($pseudoMemb); ?>" readonly="readonly" />
                    <input id="libMemb" name="libMemb" class="form-control" type="text" value="<?php echo($psMemb); ?>" readonly="readonly" disabled />
                </div>
                <br/>
                <div><a>ATTENTION : Si ce membre est supprimé, tous les commentaires et articles associés seront supprimés.</a></div>
                <div class="form-group mt-4">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>