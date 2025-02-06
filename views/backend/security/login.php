<?php
include '../../../header.php';

?>


<div class="sign">

    <div>
        <img src="<?php echo ROOT_URL .'/src/images/sign.webp' ?>" alt="image bordeaux" class="image-sign" width="400px" height="500px">
    </div>
    <form action="<?php echo ROOT_URL . '/api/security/login.php' ?>" method="post">
        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4 ">
            <input name="pseudo" type="text" id="form1Example1" class="form-control" />
            <label class="form-label" for="pseudo">Pseudo</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4 ">
            <input name="password" type="password" id="form1Example2" class="form-control" />
            <label class="form-label" for="password">Mot de passe</label>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4 ">
            <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3"/>
                    <label class="form-check-label" for="form1Example3">Se souvenir de moi </label>
                </div>
            </div>
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-block btn-sign">Soumettre</button>
    </form>

</div>
<!-- Bootstrap form to create a new statut
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Connexion</h1>
        </div>
        <div class="col-md-12">
            <form action="<?php //echo ROOT_URL . '/api/security/login.php' ?>" method="post">
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
</div>-->