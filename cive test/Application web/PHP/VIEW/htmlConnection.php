
<?php

// if(isset($_SESSION["matricule"])){
//     header("location:index.php?action=accueil");
// }
?>



<!-- Affichage du formulaire qui permet la saisie -->
<div class ="boutonIns ">
<h2>Pas encore inscrit ? </h2> 
<a href="index.php?action=inscriptionForm">
    <button type="submit">Inscription </button>
</a></div>
<form method="post" action="index.php?action=connectionForm">


    <div class="bas">
        <div class="formIdent">
            <div class="formulaire">
                <legend><h1>Connexion</h1></legend>


                <p><label for="matricule"><h3>Matricule :</h3></label>
                    <input type="number" id="matricule" name="matricule" value=""  placeholder="Matricule"/>
                </p>

                <p><label for="motDePasse"><h3>Mot de passe :</h3></label>
                    <input type="password" id="motDePasse" name="motDePasse" value="" placeholder="Mot de passe"/>
                    <input type="submit" value="Mot de passe oublié" />
                </p>
                <p>

                    <div style="margin-left: 150px;">
                        <input type="submit" value="valider" />
                        <input type="reset" value="annuler" />


                    </div>
                </p>
            </div>
            <div class="idenCIVE">
                <img src="IMAGE/logoCive.png">
                <p> <u>Nos coordonnées :</u>
                    <br>
                    <div class="coord">
                        <br><strong>CIVE</strong>
                        <br> 2 rue de l'industrie
                        <br> 59820 Gravelines
                        <br> France
                        <br> Tél. 03 28 66 06 49
                        <br> Mail. cive@orange.fr
                    </div>
                </p>
            </div>
        </div>
    </div>

</form>


