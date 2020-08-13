<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $Ville = VilleManager::findById($id);
}
?>
<h1>Ajout Ville</h1>
<div class="form">
<form method="post">
<div class="center-form">
    <label for="ville">Ville: </label><br>
</div>
<div class="center-form-2">
    <input name="ville" type="text" id="ville" placeholder="entrez ville " required autofocus
    <?php 
            if ($act != "ajout") {
                echo 'value ="' . $p->getVille() . '"';
            }?>/><br>
</div>
</div>   
<div class="center-form-connexion">
    <input type="submit" value="Ajouter" <?php if ($act == "ajout"){    echo 'Ajouter';}elseif ($act == "modif"){    echo 'Modifier';}else{    echo "Supprimer";}?>/>
    <div class="espace"></div>
    <a href="index.php?action=accueil">Annuler</a>
    <div class="espace"></div>
</div>
</form>  