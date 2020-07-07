
<?php

// if(isset($_SESSION["matricule"])){
//     header("location:index.php?action=accueil");
// }
?>



<!-- Affichage du formulaire qui permet la saisie -->
<div class ="boutonIns ">
<h2>Pas encore inscrit ? </h2> 
<a href="index.php?action=inscriptionForm">
    <button type="submit">inscription </button>
</a></div>
<form method="post" action="index.php?action=connectionForm">


    <div class="bas">
        <div class="formIdent">
            <div class="formulaire">
                <legend>Connection</legend>


                <p><label for="matricule">Matricule :</label>
                    <input type="number" id="matricule" value=""  placeholder="Matricule"/>
                </p>

                <p><label for="motDePasse">Mot de passe :</label>
                    <input type="password" id="motdePasse" value="" placeholder="Mot de passe"/>
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


