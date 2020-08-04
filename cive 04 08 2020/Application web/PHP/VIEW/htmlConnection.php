<?php

// if(isset($_SESSION["matricule"])){
//     header("location:index.php?action=accueil");
// }
?>

<!-- Affichage du formulaire qui permet la saisie -->
<div class="bas">
    <div class="boutonIns ">
        <h2>Pas encore inscrit ? </h2>
        <a href="index.php?action=inscriptionForm">
            <button type="submit">Inscription </button>
        </a>
    </div>

    <form method="post" action="index.php?action=connectionForm">

        <h2>Connexion</h2>
        <div class="formConne ">

            <div class="formCo">

                <label for="matricule">
                    <h3> Matricule :</h3>
                </label>
                <input type="number" id="matricule" name="matricule" value="" placeholder="Matricule" />

                <label for="motDePasse">
                    <h3>Mot de passe :</h3>
                </label>
                <input type="password" id="motDePasse" name="motDePasse" value="" placeholder="Mot de passe" />
                <input type="submit" value="Mot de passe oublié" />

                <div style="margin-left: 150px;">
                    <input type="submit" value="valider" />
                    <input type="reset" value="annuler" />
                </div>

            </div>

            <div class="idenCIVE2">
                <img src="IMAGE/logoCive.png">
                <h4>Nos coordonnées :</h4>
                <br>
                <div class="coord">
                    <br><strong>CIVE</strong>
                    <br> 2 rue de l'industrie
                    <br> 59820 Gravelines
                    <br> France
                    <br> Tél. 03 28 66 06 49
                    <br> Mail. cive@orange.fr
                </div>

            </div>

        </div>

    </form>
</div>