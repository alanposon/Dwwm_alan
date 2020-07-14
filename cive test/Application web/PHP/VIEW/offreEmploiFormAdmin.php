<?php

//on recupere l'action à mener (ajout/modif/suppression)
$act = $_GET["act"];
if ($act != "ajout") {
    // on recupere l'id de la personne à modifier ou à supprimer via le $_GET
    $id = $_GET["id"];
    $p = OffreEmploiManager::findById($id);
}
?>
<div class="formulaire center">
    <form action="index.php?action=offreEmploiActionAdmin&act=<?php echo $act; ?>" method="POST">
        <fieldset>
            <legend></i>Vos coordonnées</legend>
            <label for="numeroOffreEmploi"> Numero d'offre</label>
            <!--on renseigne la value dans l'input si on est en modif ou suppr -->
            <input type="number" name="numeroOffreEmploi" id="numeroOffreEmploi" maxlength="30" required <?php if ($act != "ajout") {
                                                                                                                echo 'value ="' . $p->getNumeroOffreEmploi() . '"';
                                                                                                            }
                                                                                                            ?>>
            <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
            <?php if ($act != "ajout") {
                echo '<input type="text" name="idOffreEmploi" id="idOffreEmploi" hidden value ="' . $p->getIdOffreEmploi() . '" >';
            }
            ?>

            <label for="entrepriseOffreEmploi">Entreprise</label>
            <input type="text" name="entrepriseOffreEmploi" id="entrepriseOffreEmploi" required <?php if ($act != "ajout") {
                                                                                                    echo 'value ="' . $p->getEntrepriseOffreEmploi() . '"';
                                                                                                }
                                                                                                ?>>

            <label for="dateOffreEmploi">Date d'emission de l'offre</label>
            <input type="date" name="dateOffreEmploi" id="dateOffreEmploi" required <?php if ($act != "ajout") {
                                                                                        echo 'value ="' . $p->getDateOffreEmploi() . '"';
                                                                                    }
                                                                                    ?>>

            <label for="descriptionOffreEmploi">description </label>
            <input type="message" name="descriptionOffreEmploi" id="descriptionOffreEmploi" required <?php if ($act != "ajout") {
                                                                                                            echo 'value ="' . $p->getDescriptionOffreEmploi() . '"';
                                                                                                        } ?>>

        </fieldset>
        <div class="btn">
            <!-- on change l'intitulé du bouton en fonction de l'action -->
            <button type="submit" name="modifier"> <?php if ($act == "ajout") {
                                                        echo 'Ajouter';
                                                    } elseif ($act == "modif") {
                                                        echo 'Modifier';
                                                    } else {
                                                        echo "Supprimer";
                                                    }
                                                    ?></button>
            <a href="index.php?action=accueil"> <button type="reset" name="annuler" class="annule"> Annuler</button></a>
        </div>
       
    </form>
</div>