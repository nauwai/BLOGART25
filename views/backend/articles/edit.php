<?php
include '../../../header.php';

if(isset($_GET['numArt'])){
    $numArt = $_GET['numArt'];


//var_dump($numArt);

$test = sql_select('ARTICLE', "*", "numArt = '$numArt'")[0];
//var_dump($test);
//var_dump($numArt);

$numThem = $test['numThem'];
//var_dump($test['numThem']);

$query = "ARTICLE 
INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem 
INNER JOIN MOTCLEARTICLE ON ARTICLE.numArt = MOTCLEARTICLE.numArt
INNER JOIN MOTCLE ON MOTCLEARTICLE.numMotCle = MOTCLE.numMotCle";

//$article = sql_select($query, "*")[0];

$thematique = sql_select('THEMATIQUE', '*', "numThem = '$numThem'")[0];

//var_dump($thematique);

    //var_dump($article);


    $numArt = $test['numArt'];
    $libTitrArt = $test['libTitrArt'];
    $dtCreaArt = $test['dtCreaArt'];
    $dtMajArt = $test['dtMajArt'];
    $libChapoArt = $test['libChapoArt'];
    $libAccrochArt = $test['libAccrochArt'];
    $parag1Art = $test['parag1Art'];
    $libSsTitr1Art = $test['libSsTitr1Art'];
    $parag2Art = $test['parag2Art'];
    $libSsTitr2Art = $test['libSsTitr2Art'];
    $parag3Art = $test['parag3Art'];
    $urlPhotArt = $test['urlPhotArt'];
    $libConclArt = $test['libConclArt'];
    $libThem = $thematique['libThem'];
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modification des titres</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numArt">Numero</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="numArt" name="numArt" class="form-control" disabled type="text" value="<?php echo($numArt); ?>" />

                    <label for="libTitrArt">Titre</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libTitrArt" name="libTitrArt" class="form-control" type="text" value="<?php echo($libTitrArt); ?>" />

                    <label for="dtCreaArt">Date Création</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="dtCreaArt" name="dtCreaArt" class="form-control" type="text" disabled value="<?php echo($dtCreaArt); ?>" />

                    <label for="dtMajArt">Date de Modification</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="dtMajArt" name="dtMajArt" class="form-control" type="text" disabled value="<?php echo($dtMajArt); ?>" />
                        
                    <label for="libChapoArt">Chapeau</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libChapoArt" name="libChapoArt" class="form-control" type="text" value="<?php echo($libChapoArt); ?>" />

                    <label for="libAccrochArt">Accroche</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libAccrochArt" name="libAccrochArt" class="form-control" type="text" value="<?php echo($libAccrochArt); ?>" />

                    <label for="parag1Art">Paragraphe 1</label>
                        <div>
                        <textarea name="parag1Art" id="parag1Art" rows="4" cols="150"><?php echo($parag1Art); ?></textarea>
                        </div>

                    <label for="libSsTitr1Art">Sous-Titre 1</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libSsTitr1Art" name="libSsTitr1Art" class="form-control" type="text" value="<?php echo($libSsTitr1Art); ?>" />

                    <label for="parag2Art">Paragraphe 2</label>
                        <div>
                        <textarea name="parag2Art" id="parag2Art" rows="4" cols="150"><?php echo($parag2Art); ?></textarea>
                        </div>

                    <label for="libSsTitr2Art">Sous-Titre 2</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libSsTitr2Art" name="libSsTitr2Art" class="form-control" type="text" value="<?php echo($libSsTitr2Art); ?>" />

                    <label for="parag3Art">Paragraphe 3</label>
                        <div>
                        <textarea name="parag3Art" id="parag3Art" rows="4" cols="150"><?php echo($parag3Art); ?></textarea>
                        </div>

                    <label for="libConclArt">Conclusion</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libConclArt" name="libConclArt" class="form-control" type="text" value="<?php echo($libConclArt); ?>" />


                    <label for="urlPhotArt">Image actuelle</label>
                        <div>
                            <!-- Input pour télécharger une nouvelle image -->
                            <input id="urlPhotArt" name="urlPhotArt" class="form-control" type="file" accept="image/*">
                            
                            <!-- Affichage de l'image actuelle -->
                            <img src="/src/uploads/<?php echo $urlPhotArt; ?>" alt="Image actuelle" style="max-width: 300px; height: auto; margin-top: 10px; border-radius: 8px;">
                        </div>

                    <label for="libThem">Thématiques</label>
                        <input id="numArt" name="numArt" class="form-control" style="display: none" type="text" value="<?php echo($numArt); ?>" readonly="readonly" />
                        <input id="libThem" name="libThem" class="form-control" type="text" value="<?php echo($libThem); ?>" />  
                </div>
                <br />
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-danger">Confirmer update ?</button>
                </div>
            </form>
        </div>
    </div>
</div>



