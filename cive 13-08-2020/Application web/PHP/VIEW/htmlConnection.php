<?php

// if(isset($_SESSION["matricule"])){
//     header("location:index.php?action=accueil");
// }
?>

<!-- Affichage du formulaire qui permet la saisie -->
<div class="bas">

    <fieldset>
        <legend>
            <h4>Pas encore inscrit ? </h4>
        </legend>
        <div class="boutonIns">
            <a href="index.php?action=inscriptionForm">
                <button type="submit">Inscription </button>
            </a>
        </div>
    </fieldset>

    <form method="post" action="index.php?action=connectionForm">


        <div class="formConne ">

            <div class="formCo">
                <fieldset>
                    <legend>
                        <h4>Connexion</h4>
                    </legend>
                    <label for="matricule">
                        <h4> Matricule :</h4>
                    </label>
                    <input type="number" id="matricule" name="matricule" value="" placeholder="Matricule" required='required'/>
                    <img id='image_Crouge' src="./IMAGE/X.png"></img><br>
                    <img id='image_Vvert' src="./IMAGE/V.png"></img><br>
                    <span id='matricule_manquant'></span><br>



                    <label for="motDePasse">
                        <h4>Mot de passe :</h4>
                    </label>
                    <input type="password" id="motDePasse" name="motDePasse" value="" placeholder="Mot de passe" required='required'/>
                    <img id='image_CrougeMotDePasse' src="./IMAGE/X.png"></img><br>
                    <img id='image_VvertMotDePasse' src="./IMAGE/V.png"></img><br>
                    <span id='motDePasse_manquant'></span><br>


                    <input type="submit" value="Mot de passe oublié" />

                    <div class="boutonBou">
                        <input type="submit" value="valider" />
                        <input type="reset" value="annuler" />
                    </div>
                </fieldset>

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
    <script src="../JAVASCRIPT/connexion.js"></script>
</div>