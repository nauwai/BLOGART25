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
                        $query = "LIKEART INNER JOIN MEMBRE ON MEMBRE.numMemb = LIKEART.numMemb";
                        $membres = sql_select($query, '*');
                        //var_dump($membre);
                        if ($like['likeA'] == 0) {
                            $like['likeA'] = 'Dislike';
                        } else {
                            $like['likeA'] = 'Like';
                        }
                        ?>
                        <tr>
                            <?php foreach ($membres as $membre) : ?>
                            <td><?php echo($membre['nomMemb']); ?></td>
                        <?php endforeach;?>
                            <td><?php echo($like['numArt']); ?></td>
                            <td><?php echo($like['likeA']); ?></td>
                            <td>
                                <a href="edit.php?numStat=<?php echo($like['numArt']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo($like['numArt']); ?>" class="btn btn-danger">Delete</a>
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