<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $p = ClientManager::findById($id);
}
?>
    <div class="form">
        <form method="post" action="index.php?action=Confirmation">
        <div class="center-form">
            <label for="nom">Nom : </label>
            <div class="espace-3"></div>
            <label for="prenom">Prenom : </label>
            <div class="espace-3"></div>
            <label for="adresse">Adresse: </label>
            <div class="espace-3"></div>
            <label for="CodePostal">CodePostal:</label>
            <div class="espace-3"></div>
            <label for="CodePostal">Email :</label>
            <div class="espace-3"></div>
            <label for="CodePostal">Ville :</label>
        </div>
        <div class="center-form-2">
            <input name="nom" type="text" id="nom" placeholder="Nom du client" required autofocus
            <?php 
            if ($mode != "ajout") {
                echo 'value ="' . $p->getNom() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="prenom" type="text" id="prenom"  placeholder="prénom du client" required
            <?php 
            if ($mode != "ajout") {
                echo 'value ="' . $p->getPrenom() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="adresse" type="text" id="adresse" placeholder="adresse du client" required
            <?php 
            if ($mode != "ajout") {
                echo 'value ="' . $p->getAdresse() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="CodePostal" type="text" id="CodePostal"  placeholder="CodePostal du client" required
            <?php 
            if ($mode != "ajout") {
                echo 'value ="' . $p->getCodePostal() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="email" type="text" id="email"  placeholder="email du client" required
            <?php 
            if ($mode != "ajout") {
                echo 'value ="' . $p->getEmail() . '"';
            }?>/>
            <div class="espace-2"></div>
            <select name="ville" type="text" id="ville"><option></option></select>
        </div>
    </div>
        <div class="center-form-connexion">
            <input type="submit" value="Ajouter" <?php if ($mode == "ajout"){    echo 'Ajouter';}elseif ($mode == "modif"){    echo 'Modifier';}else{    echo "Supprimer";}?>/>
            <div class="espace"></div>
            <a href="index.php?action=ClientListe">Annuler</a>
        </div>
        </form>