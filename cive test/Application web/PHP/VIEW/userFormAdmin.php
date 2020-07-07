<?php

//on recupere l'action à mener (ajout/modif/suppression)
$act = $_GET["act"];
if ($act != "ajout") {
    // on recupere l'id de la personne à modifier ou à supprimer via le $_GET
    $id = $_GET["id"];
    $p = UserManager::findById($id);
}
?>
<div class="formulaire center">
    <form action="index.php?action=userAction&act=<?php echo $act; ?>" method="POST">
        <fieldset>
            <legend>Vos coordonnées</legend>
            <label for="nom"> Nom</label>
            <!--on renseigne la value dans l'input si on est en modif ou suppr -->
            <input type="text" name="nom" id="nom" required <?php if ($act != "ajout") {
                                                                echo 'value ="' . $p->getNom() . '"';
                                                            }
                                                            ?>>
            <!--  on met l'id dans un champ caché pour qu'il soit renseigné dans le $_POST au moment de la validation du formulaire  -->
            <?php if ($act != "ajout") {
                echo '<input type="number" name="idUser" id="idUser" hidden value ="' . $p->getIdUser() . '" >';
            }
            ?>

            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom" required <?php if ($act != "ajout") {
                                                                        echo 'value ="' . $p->getPrenom() . '"';
                                                                    }
                                                                    ?>>

            <label for="mail">Mail</label>
            <input type="email" name="mail" id="mail" required <?php if ($act != "ajout") {
                                                                    echo 'value ="' . $p->getMail() . '"';
                                                                }
                                                                ?>>

            <label for="matricule">Matricule </label>
            <input type="number" name="matricule" id="matricule" required <?php if ($act != "ajout") {
                                                                                echo 'value ="' . $p->getMatricule() . '"';
                                                                            } ?>>

            <label for="motDePasse"> mot de passe </label>
            <input type="password" name="motDePasse" id="motDePasse" required <?php if ($act != "ajout") {
                                                                                    echo 'value ="' . $p->getMotDePasse() . '"';
                                                                                } ?>>

            <label for="confirm"> confirmation </label>
            <input type="password" name="confirm" id="confirm" required <?php if ($act != "ajout") {
                                                                            echo 'value ="' . $p->getMotDePasse() . '"';
                                                                        } ?>>

            <label for="posteEntreprise"> Status </label>
            <input type="number" name="posteEntreprise" id="PosteEntreprise" placeholder="1=visiteur 2=employe " required <?php if ($act != "ajout") {
                                                                                                                                echo 'value ="' . $p->getPosteEntreprise() . '"';
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
        </fieldset>
    </form>
</div>