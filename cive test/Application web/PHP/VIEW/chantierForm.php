<?php

//on recupere l'action à mener (ajout/modif/suppression)
if ( isset($_GET["act"])) $act=$_GET["act"];
if ($act != "ajout")
{
    // on recupere l'id de la personne à modifier ou à supprimer via le $_GET
    $id = isset($_GET["id"]);
    $p = ChantierManager::findById($id);
}
?>



<div class="bas">
    <div class="formIdent">
        <div class="formulaire">
            <form action="index.php?action=chantierAction&act=<?php echo $act; ?>" method="POST">
                <fieldset>
                    <legend></i>Ajout / Modification de chantier </legend>
                    <label for="matriculeChantier">Matricule du chantier</label>
                    <!--on renseigne la value dans l'input si on est en modif ou suppr -->
                    <input type="number" name="matriculeChantier" id="matriculeChantier" maxlength="30" required <?php if ($act != "ajout")
{
    echo 'value ="' . $p->getMatriculeChantier() . '"';
}
?>>
                    <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
                    <?php if ($act != "ajout")
{
    echo '<input type="hidden" name="idChantier" id="idChantier" hidden value ="' . $p->getIdChantier() . '" >';
}
?>
                    <label for="adresseChantier">Adresse du chantier</label>
                    <input type="text" name="adresseChantier" id="adresseChantier" required <?php if ($act != "ajout")
{
    echo 'value ="' . $p->getAdresseChantier() . '"';
}
?>>
    <label for="ActiviteChantier">Activite du chantier</label>
<?php
if ($act != "ajout") {
    echo optionComboBox($p->getIdActivite(),"Activite");
}
else{
    echo optionComboBox("","Activite");
}

    ?>  


<label for="dateChantier">Date chantier</label>
                    <input type="date" name="dateChantier" id="dateChantier" required <?php if ($act != "ajout")
{
    echo 'value ="' . $p->getDateChantier() . '"';
}
?>>
    <label for="VilleChantier">Ville :</label>
<?php
if ($act != "ajout") {
    echo optionComboBox($p->getIdVille(),"Ville");
}
else{
    echo optionComboBox("","Ville");
}

    ?>                                                                                        



                </fieldset>
                <div class="btn">
                    <!-- on change l'intitulé du bouton en fonction de l'action -->
                    <button type="submit" name="modifier"> <?php if ($act == "ajout")
{
    echo 'Ajouter';
}
elseif ($act == "modif")
{
    echo 'Modifier';
}
else
{
    echo "Supprimer";
}
?></button>
                    <a href="index.php?action=accueil"> <button type="reset" name="annuler" class="annule"> Annuler</button></a>
                </div>

            </form>
        </div>