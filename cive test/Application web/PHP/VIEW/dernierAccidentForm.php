<?php

//on recupere l'action à mener (ajout/modif/suppression)
// if(isset($_POST['act'])) // verifie la variable act 
// {}
$act = $_GET["act"];


if ($act != "ajout") {
    // on recupere l'id de la personne à modifier ou à supprimer via le $_GET
    $id = $_GET["id"];
    $p = TempsSansAccidentManager::findById($id);
}
?>





<div class="bas">
    <div class="formIdent">
        <div class="formulaire">
            <h2>Modification de la date du dernier accident </h2>
            <form action="index.php?action=dernierAccidentAction&act=<?php echo $act; ?>" method="POST">

                <p><label for="dateDernierAccident">Nouvelle date du denier accident :</label>
                    <input type="date" id="dateDernierAccident" required <?php if ($act != "modif") {
                                                                                echo 'value ="' . $p->getDateDernierAccident() . '"';
                                                                            }
                                                                            ?>>
                    <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
                    <?php if ($act != "modif") {
                        echo '<input type="text" name="idTempsSansAccident" id="idTempsSansAccident" hidden value ="' . $p->getIdTempsSansAccident() . '" >';
                    }
                    ?>
                    <div class="btn">
                        <!-- on change l'intitulé du bouton en fonction de l'action -->
                        <button type="submit" name="modifier">Modifier <?php if ($act == "modif") {
                                                                    echo 'Modifier';
                                                                } 
                                                               
                                                                ?></button>
                        <a href="index.php?action=dernierAccidentListe"> <button type="reset" name="annuler" class="annule"> Annuler</button></a>
                    </div>



            </form>
        </div>
        <div class="idenCIVE">
            <img src="IMAGE/logoCive.png">
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