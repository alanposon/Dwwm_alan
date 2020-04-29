<?php
$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $ville = VilleManager::findById($id);
}
?>
<div class="form">
    <form method="post" action="index.php?action=Confirmation">
        <div class="center-form">
            <label for="ville">Ville: </label><br>
        </div>
        <div class="center-form-2">
            <?php
            if ($mode == "ajout") {
                echo '<input name="ville" type="text" id="ville" placeholder="entrez ville" required autofocus/><br>';
            }
            foreach ($listeVille as $ville) {
                echo '<option value="' . $ville->getIdville() . '"';
                if ($mode != "ajout") {
                    if ($ville->getVille() == $client->getVille()) {
                        echo 'select ="' . $elt->getlibelleville() . '"';
                    }
                }
                echo '>' . $ville->getlibelleville() . '</option>';
            }
            echo '</select>';
            ?>
        </div>
</div>
<div class="center-form-connexion">
    <input type="submit" value="Ajouter" <?php if ($mode == "ajout") {
                                                echo 'Ajouter';
                                            } elseif ($mode == "modif") {
                                                echo 'Modifier';
                                            } else {
                                                echo "Supprimer";
                                            } ?> />
    <div class="espace"></div>
    <a href="index.php?action=VilleListe">Annuler</a>
    <div class="espace"></div>
</div>
</form>