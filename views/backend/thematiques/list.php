<?php
include '../../../header.php'; // contains the header and call to config.php

//Load all thematique
$thematique = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all thematique in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>thematique</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom des thematique</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($thematique as $thematiques){ ?>
                        <tr>
                            <td><?php echo($thematiques['numThem']); ?></td>
                            <td><?php echo($thematiques['libThem']); ?></td>
                            <td>
                                <a href="edit.php?numThem=<?php echo($thematiques['numThem']); ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numThem=<?php echo($thematiques['numThem']); ?>" class="btn btn-danger">Delete</a>
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