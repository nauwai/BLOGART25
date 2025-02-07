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



if(isset($_GET['numMemb'])){
    $numMem = $_GET['numMemb'];
    $libMem = sql_select("MEMBRE", "*", "numMemb = $numMem")[0];
}
?>

<!-- Bootstrap form to create a new statut -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit d'un Membre</h1>
        </div>
        <div class="col-md-12">
            <!-- Form to create a new statut -->
            <form action="<?php echo ROOT_URL . '/api/members/update.php?numMemb='.$numMem; ?>" method="post">
                <div class="form-group">
                    <label for="pseudo">Pseudo (non modifiable)</label>
                    <input id="pseudo" name="pseudo" class="form-control" disabled type="text" placeholder="<?php echo($libMem['pseudoMemb']);?>" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="pseudo">(Entre 6 et 70 car.)</label>
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input id="prenom" name="prenom" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libMem['prenomMemb']); ?>"/>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input id="nom" name="nom" class="form-control" type="text" autofocus="autofocus" value="<?php echo($libMem['nomMemb']); ?>"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name="password" class="form-control" value="000000000" disabled type="password" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="password">(Entre 8 et 15 car., au - une majuscule, une
                        minuscule, un chiffre, car. spéciaux acceptés)</label>
                </div>
                <div class="form-group">
                    <label for="password">Confirmer Password</label>
                    <input id="password" name="password" class="form-control" value="000000000" disabled type="password" autofocus="autofocus"/>
                    <label style="font-size: 12px" for="password">(Entre 8 et 15 car., au - une majuscule, une
                        minuscule, un chiffre, car. spéciaux acceptés)</label>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name="email" class="form-control" type="email" value="<?php echo($libMem['eMailMemb']); ?>" autofocus="autofocus"/>
                </div>
                <div class="form-group">
                    <label for="emailConfirm">Confirmer Email</label>
                    <input id="emailConfirm" name="emailConfirm" class="form-control" value="<?php echo($libMem['eMailMemb']); ?>" type="email" autofocus="autofocus"/>
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
                    <select name="statut" id="pet-select">
                        <option value="membre">Membre</option>
                        <option value="admin">Administrateur</option>
                        <option value="modo">Modérateur</option>
                    </select>
                </div>

                <br/>
                <div class="form-group mt-2">
                    <a href="list.php" class="btn btn-primary">List</a>
                    <button type="submit" class="btn btn-success">Confirmer edit ?</button>
                </div>
            </form>
        </div>
    </div>
</div>