<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $client = ClientManager::findById($id);
}
?>
<h1>Ajout Client</h1>
    <div class="form">
        <form method="post">
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
            if ($act != "ajout") {
                echo 'value ="' . $p->getNom() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="prenom" type="text" id="prenom"  placeholder="prénom du client" required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getPrenom() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="adresse" type="text" id="adresse" placeholder="adresse du client" required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getAdresse() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="CodePostal" type="text" id="CodePostal"  placeholder="CodePostal du client" required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getCodePostal() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="email" type="text" id="email"  placeholder="email du client" required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getEmail() . '"';
            }?>/>
            <div class="espace-2"></div>
            <select name="ville" type="text" id="ville" ></select>
        </div>
    </div>
        <div class="center-form-connexion">
            <input type="submit" value="Ajouter" <?php if ($act == "ajout"){    echo 'Ajouter';}elseif ($act == "modif"){    echo 'Modifier';}else{    echo "Supprimer";}?>/>
            <div class="espace"></div>
            <a href="index.php?action=accueil">Annuler</a>
        </div>
        </form>