<?php
include '../../../header.php';

if (!empty($_SESSION)) {
    header('Location: ../../../index.php');
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Connexion</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/security/login.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input id="pseudo" name="pseudo" class="form-control" required minlength="6" maxlength="70" type="text" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="form-control" required type="password" autofocus="autofocus"/>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-success">Soumettre</button>
                </div>
            </form>
        </div>
    </div>
</div>