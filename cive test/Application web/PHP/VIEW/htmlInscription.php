
<form method="post" action="">


    <div class="bas">
        <h1>Inscription :</h1>
        <div class="formIdent">
            <div class="formulaire">


                <p><label for="nom">Nom </label>
                    <input type="text" id="nom" value="<?php if(isset($nom)){ echo $nom; } ?> " /></p>

                <p><label for="prenom">Prenom </label>
                    <input type="text" id="prenom" value="<?php if(isset($prenom)){ echo $prenom; } ?> " /></p>

                <p><label for="mail">Mail </label>
                    <input type="email" id="mail" value="<?php if(isset($mail)){ echo $mail; } ?> "  placeholder="exemple@mail.com"/></p>

                <p><label for="matricule">Matricule </label>
                    <input type="number" id="matricule" value="<?php if(isset($matricule)){ echo $matricule; } ?> " /></p>

                <input type="submit" value="Matricule disponible" />


                <p><label for="motDePasse">Mot de passe</label>
                    <input type="password" id="motDePasse" value="<?php if(isset($motDePasse)){ echo $motDePasse; } ?> " /></p>

                <p><label for="confirm">Confirmation du mot de passe</label>
                    <input type="password" id="confirm" value="" /></p>

                <p><label for="posteEntreprise">Poste en entreprise :</label>
                    <input type="number" id="posteEntreprise" value="" /></p>





                <input type="submit" name="inscriptionForm" value="Valider" />
                <input type="reset" value="Annuler" />


</form>
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