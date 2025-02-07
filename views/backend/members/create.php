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

?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Création d'un Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/members/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input id="pseudo" name="pseudo" class="form-control" required minlength="6" maxlength="70" type="text" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="pseudo">(Entre 6 et 70 car.)</label>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input id="prenom" name="prenom" required class="form-control" type="text" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input id="nom" name="nom" class="form-control" required  type="text" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="form-control" required type="password" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="password">(Entre 8 et 15 car., au - une majuscule, une
                        minuscule, un chiffre, car. spéciaux acceptés)</label>
                </div>
                <div class="form-group">
                    <label for="passwordConfirm">Confirmer Password</label>
                    <input id="passwordConfirm" name="passwordConfirm" class="form-control" required maxlength="15" minlength="8" type="password" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="passwordConfirm">(Entre 8 et 15 car., au - une majuscule, une
                        minuscule, un chiffre, car. spéciaux acceptés)</label>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" class="form-control" required type="email" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="emailConfirm">Confirmer Email</label>
                    <input id="emailConfirm" name="emailConfirm" class="form-control" required type="email" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="libThem">J'accepte que mes données soient conservées</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                        <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="non">
                        <label class="form-check-label" for="non">Non</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pet-select">Choisir un statut</label>
                </div>
                <div class="form-group">
                    <select required name="statut" id="pet-select">
                        <option  value="membre">Membre</option>
                        <option value="admin">Administrateur</option>
                        <option value="modo">Modérateur</option>
                    </select>
                </div>

                <br/>
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer create ?</button>
                </div>
            </form>
        </div>
    </div>
</div>