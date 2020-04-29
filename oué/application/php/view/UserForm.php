<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $client = UserManager::findById($id);
}
?>
    <h1>Ajout User</h1>
    <div class="form">
        <form method="post">
        <div class="center-form">
            <label for="pseudo">Pseudo : </label>
            <div class="espace-3"></div>
            <label for="mdp">Password: </label>
            <div class="espace-3"></div>
            <label for="confirm">Confirm :</label>
        </div>
        <div class="center-form-2">
            <input name="pseudo" type="text" id="pseudo" placeholder="Pseudo client" required autofocus
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getPseudo() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="mdp" type="password" id="mdp"  placeholder="Mot de passe client" required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getMdp() . '"';
            }?>/>
            <div class="espace-2"></div>
            <input name="confirm" type="password" id="confirm" placeholder="confirmation Mot de passe " required
            <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getMdp() . '"';
            }?>/>
        </div>
    </div>   
        <div class="center-form-connexion">
            <input type="submit" value="Ajouter" <?php if ($act == "ajout"){    echo 'Ajouter';}elseif ($act == "modif"){    echo 'Modifier';}else{    echo "Supprimer";}?>/>
            <div class="espace"></div>
            <a href="annuler">Annuler</a>
            <div class="espace"></div>
        </div>
        </form>  