<?php
include '../../../header.php';

if(isset($_GET)){
    $numMemb = $_GET['numMemb'];
    $numArt = $_GET['numArt'];

    $membre = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
    $article = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];
    //var_dump($membre);
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Suppression du (Un)Like </h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libStat"><?php echo $membre; ?></label>
                    <input id="numStat" name="numMotCle" class="form-control" style="display: none" type="text" value="<?php echo $membre; ?>" readonly="readonly" />
                    <input id="libStat" name="libMotCle" class="form-control" type="text" value="<?php echo $article; ?>" readonly="readonly" disabled />
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer delete ?</button>
                </div>
            </form>
        </div>
    </div>
</div>