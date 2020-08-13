<?php
// envoyer un message a l'entreprise 
if (isset($_POST['mailform'])) {
    /* Si tout les inputs sont remplis */
    if (
        !empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mail']) and
        !empty($_POST['objet']) and !empty($_POST['message'])
    ) {
        // paramettre d'encodage 
        $header = "MIME-Version: 1.0\r\n";
        $header .= 'From:"poson.alan@gmail.com"<poson.alan@gmail.com>' . "\n";
        $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
        $header .= 'Content-Transfer-Encoding: 8bit';

        /* contenu du message a reception */
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
        /* adresse mail destinataire */
        mail("alan.poson@gmail.com", "CONTACT - CIVE", $message, $header);
        /* message de reponse suite a l'envoi */
        $msg = "Votre message a bien été envoyé !";
    } else {
        $msg = " Tout les champs doivent etre complétés !";
    }
}
?>



<div class="bas">


    <form method="POST" action="">
        <div class="formConCom">
            <div>
                <fieldset>
                    <legend>
                        <h2>Nous contacter : </h2>
                    </legend>
                    <div class="formContact">

                        <div class="formAnot">

                            <label for="nom">Nom :</label>
                            <div class="flexInput">
                                <!-- verification du contenu de l'input nom  -->
                                <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) {
                                                                            echo $_POST['nom'];
                                                                            /* le pattern restreint le resultat de la saisi */
                                                                        } ?>" pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" />
                                <img id='imgRouge' src="./IMAGE/imgRouge.png"></img>
                                <img id='imgVerte' src="./IMAGE/imgVerte.png"></img>
                                <!-- le message d'aide  -->
                                <i class="fas fa-question-circle" id="imgNom" title="Inscrivez votre Nom avec une majuscule au début, 2 caractères minimum"></i>
                            </div>
                            <!-- Si l'input est vide mais a etait clické  -->
                            <span id='nom_manquant'></span><br>


                            <!-- si les champs sont deja remplis  -->
                            <label for="prenom">Prenom :</label>
                            <div class="flexInput">
                                <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])) {
                                                                            echo $_POST['prenom'];
                                                                        } ?>" pattern="^[A-ZÀ-Ý]{1}[a-zà-ý '-]*([ |-][A-ZÀ-Ý]{1}[a-zà-ý '-]*)?$" />
                                <img id='imgRouge' src="./IMAGE/imgRouge.png"></img>
                                <img id='imgVerte' src="./IMAGE/imgVerte.png"></img>
                                <i class="fas fa-question-circle" id="imgPrenom" title="Inscrivez votre prénom avec une majuscule au début, 2 caractères minimum"></i>
                            </div>

                            <span id='prenom_manquant'></span><br>

                            <label for="mail">Mail :</label>
                            <div class="flexInput">
                                <input type="email" name="mail" class="contact-form-text" placeholder="Votre email" value="<?php if (isset($_POST['mail'])) {
                                                                                                                                echo $_POST['mail'];
                                                                                                                            } ?>" />
                                <img id='imgRouge' src="./IMAGE/imgRouge.png"></img>
                                <img id='imgVerte' src="./IMAGE/imgVerte.png"></img>
                                <i class="fas fa-question-circle" title="Inscrivez votre courriel dans un format valide : mail@fournisseur.com"></i>

                            </div>
                            <span id='mail_manquant'></span><br>

                            <label for="objet">Objet :</label>
                            <div class="flexInput">
                                <input type="text" name="objet" minlength="4" maxlength="30" value="<?php if (isset($_POST['objet'])) {
                                                                                                        echo $_POST['objet'];
                                                                                                    } ?>" /> <img id='imgRouge' src="./IMAGE/imgRouge.png"></img>
                                <img id='imgVerte' src="./IMAGE/imgVerte.png"></img>
                                <i class="fas fa-question-circle" id="imgObjet" title="Inscrivez l'objet avec 4 caractères minimum et maximum 30 "></i>

                            </div>

                            <span id='objet_manquant'></span><br>

                            <label for="message">Message :</label>

                            <div class="flexInput">

                                <textarea name="message" minlength="4" maxlength="1000" placeholder="Votre message"><?php if (isset($_POST['message'])) {
                                                                                                                        echo $_POST['message'];
                                                                                                                    } ?> </textarea>

                                <img id='imgRouge' src="./IMAGE/imgRouge.png"></img>
                                <img id='imgVerte' src="./IMAGE/imgVerte.png"></img>

                                <i class="fas fa-question-circle" title="Inscrivez votre message 4 caractères minimum et 1000 maximum"></i>

                            </div>

                            <span id='message_manquant'></span><br>

                            <div style="margin-left: 150px;">
                                <input type="submit" value="envoyer" name="mailform" />
                                <input type="reset" value="Annuler" />
                            </div>

                        </div>

                    </div>



                </fieldset>
                <script src="formulaireContact.js"></script>


            </div>
            <div class="contactDuo">
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
                <div>
                    <?php
                    /* inscription de validation ou erreur de l'envoi du message */
                    if (isset($msg)) {
                        echo '<div class="mesMail">' . $msg . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </form>

</div>