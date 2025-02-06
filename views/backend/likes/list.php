<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$likes = sql_select("LIKEART", "*");


?>
    <!-- Bootstrap default layout to display all statuts in foreach -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Like</h1>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Membre</th>
                        <th>Titre Article</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($likes as $like){
                        $numMembLike = $like['numMemb'];
                        $numArtLike = $like['numArt'];
                        //var_dump($numMembLike);
                        $membres = sql_select('MEMBRE', '*', "numMemb = '$numMembLike'");
                        $articles = sql_select('ARTICLE', '*', "numArt = '$numArtLike'");
                        //var_dump($membres);

                        if ($like['likeA'] == 0) {
                            $like['likeA'] = '&#128078 Dislike';
                        } else {
                            $like['likeA'] = '&#128077 Like';
                        }
                        ?>
                        <tr>
                            <?php foreach ( $membres as $membre) : ?>
                            <td><?php echo $membre['pseudoMemb']; ?></td>
                        <?php endforeach;?>
                        <?php foreach ( $articles as $article) : ?>
                            <td><?php echo mb_strimwidth($article['libChapoArt'], 0, 100, ' [...]'); ?></td>
                        <?php endforeach;?>
                            <td><?php echo $like['likeA']; ?></td>
                            <td>
                                <a href="edit.php?numMemb=<?php echo($like['numMemb']); ?>&numArt=<?php echo($like['numArt'])?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMemb=<?php echo($like['numMemb']);?>&numArt=<?php echo($like['numArt'])?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <a href="create.php" class="btn btn-success">Create</a>
            </div>
        </div>
    </div>
<?php
include '../../../footer.php'; // contains the footer