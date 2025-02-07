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


$query = "COMMENT 
            JOIN MEMBRE ON MEMBRE.numMemb = COMMENT.numMemb
            JOIN ARTICLE ON ARTICLE.numArt = COMMENT.numArt
            ";
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <?php $articlesrefs = sql_select('ARTICLE', '*');
            foreach ($articlesrefs as $articleref) : ?>
            <form action="<?php echo ROOT_URL . '/api/comments/create.php?numArt='. $articleref['numArt']?>" method="post">
                <?php endforeach; ?>

                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <select id="pseudoMemb" name="pseudoMemb" class="form-control" type="text" autofocus="autofocus" >
                        <?php $membres = sql_select('MEMBRE', '*');
                        foreach ($membres as $membre) : ?>
                            <option><?php echo $membre['pseudoMemb'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <label for="articles">Liste des articles</label>
                    <select id="articles" name="articles" class="form-control" type="text" autofocus="autofocus" >
                        <?php $articles = sql_select('ARTICLE', '*');
                        foreach ($articles as $article) : ?>
                        <option value="<?php echo $article['numArt']?>"><?php echo $article['libTitrArt'] ?></option>
                        <?php endforeach; ?>
                    </select>

                    <label for="libCom">Commentaire</label>
                    <input id="libCom" name="libCom" class="form-control" type="text" autofocus="autofocus" />

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