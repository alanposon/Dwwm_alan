<?php


$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$numeroOffreEmploi = (isset($_SESSION['numeroOffreEmploi'])) ? $_SESSION['numeroOffreEmploi'] : '';
// envoyer un message a l'entreprise 


if (isset($_POST['mailform'])) {

    if (!empty($_POST['numeroOffreEmploi']) and !empty($_POST['entrepriseOffreEmploi']) and !empty($_POST['dateOffreEmploi']) and !empty($_POST['descriptionOffreEmploi'])) {
        // paramettre d'encodage 
        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"poson.alan@gmail.com"<poson.alan@gmail.com>' . "\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';


        $message = '
<html>
	<body>
		<div align="center">
		
            <u>Nom de l\'expéditeur :</u>' . $_POST['nom'] . '<br>
            <u>Prenom de l\'expéditeur :</u>' . $_POST['prenom'] . '<br>
            <u>Mail de l\'expéditeur :</u>' . $_POST['mail'] . '<br>
            <u>Objet:</u>' . $_POST['objet'] . '<br>
            <br>
            ' . nl2br($_POST['message']) . '
		</div>
	</body>
</html>
';

        mail("alan.poson@gmail.com", "CONTACT - CIVE", $message, $header);
        $msg = "Votre message a bien été envoyé !";
    } else {
        $msg = " Tout les champs doivent etre complétés !";
    }
}

?>
<div class="bas">
    <div class="formIdent">
        <form method="POST" action="">

            <div class="formulaire">
                <h2>Offre emploi : </h2>

                <legend><i class="fas fa-address-card"></i>Vos coordonnées</legend>
                <p><label for="numeroOffreEmploi">numero Offre Emploi :</label>
                    <div><?php echo 'il doit y avoir le numero de l\'offre ' . $numeroOffreEmploi; ?></div>


                    <p><label for="entrepriseOffreEmploi">entreprise Offre Emploi :</label>
                        <input type="text" name="entrepriseOffreEmploi" value="<?php if (isset($_POST['entrepriseOffreEmploi'])) {
                                                                                    echo $_POST['entrepriseOffreEmploi'];
                                                                                } ?>" /></p>


                    <p><label for="dateOffreEmploi"> Date offre emploi :</label>
                        <input type="text" name="dateOffreEmploi" value="<?php if (isset($_POST['dateOffreEmploi'])) {
                                                                                echo $_POST['dateOffreEmploi'];
                                                                            } ?>" /></p>

                    <p><label for="descriptionOffreEmploi"> Description offre emploi:</label>
                        <div><textarea name="descriptionOffreEmploi"><?php if (isset($_POST['descriptionoffreEmploi'])) {
                                                                            echo $_POST['descriptionoffreEmploi'];
                                                                        } ?></textarea>
                    </p>


                    <p>
                        <div style="margin-left: 150px;">
                            <input type="submit" value="envoyer" name="mailform" />
                            <input type="reset" value="Annuler" />
                        </div>
                    </p>
            </div>
        </form>
    </div>
    <div class="bas">
        <div class="formIdent">
            <form method="POST" action="">

                <div class="formulaire">
                    <h2>Offre emploi : </h2>

                    <p><label for="nom"> nom*:</label>
                        <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) {
                                                                    echo $_POST['nom'];
                                                                } ?>" /></p>

                    <p><label for="mail"> mail* :</label>
                        <input type="email" name="mail" value="<?php if (isset($_POST['mail'])) {
                                                                    echo $_POST['mail'];
                                                                } ?>" /></p>

                    <p><label for="message"> Votre message*:</label>
                        <div><textarea name="message"><?php if (isset($_POST['message'])) {
                                                            echo $_POST['message'];
                                                        } ?></textarea>
                    </p>


                </div>
            </form>

            <?php
            if (isset($msg)) {
                echo '<div class="mesMail">' . $msg . '</div>';
            }
            ?>
        </div>
    </div>
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