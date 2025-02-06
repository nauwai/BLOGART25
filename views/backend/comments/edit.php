<?php
include '../../../header.php';

$numArt = 0;
$libTitrArt = "";

if(isset($_GET['numCom'])){
    $numCom = $_GET['numCom'];

    $commentaire = sql_select('COMMENT JOIN MEMBRE ON MEMBRE.numMemb = COMMENT.numMemb JOIN ARTICLE ON ARTICLE.numArt = COMMENT.numArt', "*", "numCom = '$numCom'")[0];


    $numArt = $commentaire['numArt'];
    $libTitrArt = $commentaire['libTitrArt'];
    $pseudoMemb = $commentaire['pseudoMemb'];
    $libAccrochArt = $commentaire['libAccrochArt'];
    $dtCreaArt = $commentaire['dtCreaArt'];
    $libCom = $commentaire['libCom'];
    $notifComKOAff = $commentaire['notifComKOAff'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification commentaire</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/comments/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numArt">Numéro article</label>
                    <input id="numArt" name="numArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($numArt); ?>" readonly="readonly">

                    <label for="numCom">Numéro commentaire</label>
                    <input id="numCom" name="numCom" class="form-control" type="text" autofocus="autofocus" value="<?php echo($numCom); ?>" readonly="readonly"/>
                    
                    <label for="pseudoMemb">Pseudo membre</label>
                    <input id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" value="<?php echo($pseudoMemb); ?>" readonly="readonly"/>

                    <label for="libTitrArt">Titre Article</label>
                    <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libTitrArt); ?>" readonly="readonly"/>

                    <label for="libAccrochArt">Accroche paragraphe</label>
                    <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libAccrochArt); ?>" readonly="readonly"/>
                    
                    <label for="dtCreaArt">Date de création</label>
                    <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="text" autofocus="autofocus" value="<?php echo($dtCreaArt); ?>" readonly="readonly"/>

                    <label for="libCom">Commentaire à validé</label>
                    <input id="libCom" name="libCom" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libCom); ?>"/>
                    
                    <label for="libTitrArt">En tant que modérateur, je valide le commentaire du membre : </label> <br>
                    <div class="form-check form-check-inline">
                        <input id="attModOK" name="attModOK" class="form-check-input" type="radio" value="oui">
                        <label class="form-check-label" for="attModOK">OUI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input id="attModOK" name="attModOK" class="form-check-input" type="radio" value="non">
                        <label class="form-check-label" for="attModOK">NON</label> 
                    </div> <br>

                    <label for="notifComKOAff">Si non pourquoi ?</label>
                    <input id="notifComKOAff" name="notifComKOAff" class="form-control" type="text" autofocus="autofocus" value="<?php echo($notifComKOAff); ?>"/>

                    <label for="libTitrArt">En tant que modérateur, je souhaite que le post ne soit pas/plus affiché (suppression
                    logique) :</label> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">OUI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">NON</label> 
                    </div> <br>

                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>