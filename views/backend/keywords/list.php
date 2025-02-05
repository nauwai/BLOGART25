<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all statuts
$MOTCLE= sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all statuts in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mots Clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom des Mots clés</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($MOTCLE as $MOTCLES){ ?>
                        <tr>
                            <td><?php echo($MOTCLES['numMotCle']); ?></td>
                            <td><?php echo($MOTCLES['libMotCle']); ?></td>
                            <td>
                                <a href="edit.php?numMotCle=<?php echo($MOTCLES['numMotCle']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numMotCle=<?php echo($MOTCLES['numMotCle']); ?>" class="btn btn-danger">Delete</a>
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