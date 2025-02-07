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


$COMMENT = sql_select($query, "*");




?>

<!-- Bootstrap default layout to display all comment in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires en attente</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Titres</th>
                        <th>Pseudo</th>
                        <th>Date</th>
                        <th>Contenu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($COMMENT as $COMMENTS){ 
                        if($COMMENTS['attModOK']=='0'){
                            ?>
                            <tr>
                                <td>
                                    <?php
                                    echo($COMMENTS['libTitrArt']) . "<br>";?></td>
                                <td><?php echo($COMMENTS['pseudoMemb']); ?></td>
                                <td><?php echo($COMMENTS['dtCreaCom']);?></td>
                                <td><?php echo($COMMENTS['libCom']); ?></td>
                                <td>
                                    <a href="edit.php?numCom=<?php echo($COMMENTS['numCom']); ?>" class="btn btn-primary">Traiter</a>
                                </td>
                            </tr>
                        <?php } 
                    }?>
                </tbody>
            </table>

            <!--List commentaire contrôlés-->
            <h2>Commentaires contrôlés</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudos</th>
                        <th>Dernière modif</th>
                        <th>Publication</th>
                        <th>Contenu</th>
                        <th>Raison Refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($COMMENT as $COMMENTS){ 
                        if($COMMENTS['dtModCom']!=NULL && $COMMENTS['delLogiq']=='0'){
                            ?>
                            <tr>
                                <td><?php echo($COMMENTS['pseudoMemb']); ?></td>
                                <td><?php echo($COMMENTS['dtModCom']);?></td>
                                <td><?php echo('OUI');?></td>
                                <td><?php echo($COMMENTS['libCom']); ?></td>
                                <td><?php echo($COMMENTS['notifComKOAff']); ?></td>
                                <td>
                                    <a href="edit.php?numCom=<?php echo($COMMENTS['numCom']); ?>" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                        <?php } 
                    }?>
                </tbody>
            </table>

            <!--List suppression logique-->
            <h2>Suppression Logique</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudos</th>
                        <th>Date suppr logique</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison Refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($COMMENT as $COMMENTS){ 
                    if($COMMENTS['delLogiq']=='1'){
                        ?>
                        <tr>
                            
                            <td><?php echo($COMMENTS['pseudoMemb']); ?></td>
                            <td>
                                <?php
                                echo($COMMENTS['dtDelLogCom']) . "<br>";?></td>
                            <td><?php echo($COMMENTS['libCom']); ?></td>
                            <td><?php echo('REFUS');?></td>
                            <td><?php echo($COMMENTS['notifComKOAff']); ?></td>
                            <td>
                                <a href="edit.php?numCom=<?php echo($COMMENTS['numCom']); ?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    <?php } 
                    }
                    ?>
                </tbody>
            </table>

            <!--Suppression physique des commentaires-->
            <h2>Suppression Physique</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Pseudos</th>
                        <th>Date suppr logique</th>
                        <th>Contenu</th>
                        <th>Publication</th>
                        <th>Raison Refus</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($COMMENT as $COMMENTS){ 
                    if(!empty($COMMENTS['notifComKOAff'])){
                        ?>
                        <tr>
                            
                            <td><?php echo($COMMENTS['pseudoMemb']); ?></td>
                            <td>
                                <?php
                                echo($COMMENTS['dtDelLogCom']) . "<br>";?></td>
                            <td><?php echo($COMMENTS['libCom']); ?></td>
                            <td><?php echo('REFUS');?></td>
                            <td><?php echo($COMMENTS['notifComKOAff']); ?></td>
                            <td>
                                <a href="/api/comments/delete.php?numCom=<?php echo($COMMENTS['numCom']); ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } 
                    }
                    ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>
</div>
<?php
include '../../../footer.php'; // contains the footer