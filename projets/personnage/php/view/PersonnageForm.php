<?php

//on recupere l'action à mener (ajout/modif/suppression)
$act = $_GET["act"];
if ($act != "ajout")
{
// on recupere l'id de la personne à modifier ou à supprimer via le $_GET
    $id = $_GET["id"];
    $p = PersonnageManager::findById($id);
}
?>
<div class="formulaire center">
    <form action="index.php?action=PersonnageAction&act=<?php echo $act; ?>" method="POST">
        <fieldset>
            <legend><i class="connexion"></i>connexion</legend>
            <label for="pseudo">Votre Pseudo</label>
            <!--on renseigne la value dans l'input si on est en modif ou suppr -->
            <input type="text" name="pseudo" id="pseudo" maxlength="30" required <?php if ($act != "ajout")
{
    echo 'value ="' . $p->getPseudo() . '"';
}
?> >
            <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
            <?php if ($act != "ajout")
{
    echo '<input type="text" name="idPerso" id="idPerso" hidden value ="' . $p->getIdPerso() . '" >';
}
?>

            <label for="mot_de_passe">Mot de passe*</label>
            <input type="password" name="mot_de_passe" id="mot_de_passe"required <?php if ($act != "ajout")
{
    echo 'value ="' . $p->getMot_de_passe() . '"';
}
?> >


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
            <a href="index.php?action=accueil">    <button type="reset" name="annuler" class="annule"> Annuler</button></a>
            </div>
        </fieldset>
    </form>
</div>