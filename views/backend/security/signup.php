<?php
include '../../../header.php';

if (!empty($_SESSION)) {
    header('Location: ../../../index.php');
}
?>



<div class="sign">

    <div>
        <img src="<?php echo ROOT_URL .'/src/images/sign.webp' ?>" alt="image bordeaux" class="image-sign" width="400px" height="500px">
    </div>
    <form action="<?php echo ROOT_URL . '/api/security/signup.php' ?>" method="post">
        <!-- Pseudo input -->
        <div data-mdb-input-init class="form-outline mb-4 ">
            <input id="pseudo" name="pseudo" class="form-control" required minlength="6" maxlength="70" type="text" autofocus="autofocus"/>
            <label class="form-label" for="pseudo">Pseudo</label>
            <label style="font-size: 12px" for="pseudo">(Entre 6 et 70 car.)</label>
        </div>

        <!-- First name -->
        <div data-mdb-input-init class="form-outline mb-4 ">
        <input id="prenom" name="prenom" required class="form-control" type="text" autofocus="autofocus"/>
        <label class="form-label" for="prenom">Prenom</label>
        </div>

        <!-- Name -->
        <div data-mdb-input-init class="form-outline mb-4 ">
        <input id="nom" name="nom" class="form-control" required  type="text" autofocus="autofocus"/>
        <label class="form-label" for="nom">Nom</label>
        </div>

        <!-- E-Mail -->
        <div data-mdb-input-init class="form-outline mb-4 ">
        <input id="email" name="email" class="form-control" required type="email" autofocus="autofocus"/>
        <label class="form-label" for="email">E-Mail</label>
        </div>

        <!-- Confirm E-Mail -->
        <div data-mdb-input-init class="form-outline mb-4 ">
        <input id="emailConfirm" name="emailConfirm" class="form-control" required type="email" autofocus="autofocus"/>
        <label class="form-label" for="emailConfirm">Confirmer E-Mail</label>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4 ">
            <input id="password" name="password" class="form-control" required type="password" autofocus="autofocus"/>
            <label for="password">Password</label>
            <br>
            <label style="font-size: 12px" for="password">(Entre 8 et 15 car., au - une majuscule, une
            minuscule, un chiffre, car. spéciaux acceptés)</label>
            <br>
            <input type="checkbox" onclick="togglePassword('password')">Afficher mot de passe
        </div>

        <!-- Password confirm -->
        <div data-mdb-input-init class="form-outline mb-4 ">
        <input id="passwordConfirm" name="passwordConfirm" class="form-control" required maxlength="15" minlength="8" type="password" autofocus="autofocus"/>
        <label for="passwordConfirm">Confirmer Password</label>
        <br>
        <label style="font-size: 12px" for="password">(Entre 8 et 15 car., au - une majuscule, une
            minuscule, un chiffre, car. spéciaux acceptés)</label>
        <br>
        <input type="checkbox" onclick="togglePassword('passwordConfirm')">Afficher mot de passe
        </div>

        <!-- Hide/Show password -->
        <script>
        function togglePassword(id) {
            var x = document.getElementById(id);
            if (x.type === "password") {
                x.type = "text";
            } else {
            x.type = "password";
        }
        }
        </script>

        <div class="form-group">
                    <label for="libThem">J'accepte que mes données soient conservées</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="consent" id="inlineRadio1" value="oui">
                        <label class="form-check-label" for="oui">Oui</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="consent" id="inlineRadio2" value="non">
                        <label class="form-check-label" for="non">Non</label>
                    </div>
        </div>


    <div class="form-group">
        <label for="pet-select">Choisir un statut</label>
    </div>

    <div class="form-group">
        <select required name="statut" id="pet-select">
            <option  value="membre">Membre</option>
            <option disabled value="admin">Administrateur</option>
            <option disabled value="modo">Modérateur</option>
        </select>
    </div>


        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-block btn-sign">Soumettre</button>
        <button 
            type="button" 
            class="btn btn-block btn-sign" 
            onclick="window.location.href='login.php'">
            Déjà un compte ?
        </button>
    </form>

</div>
