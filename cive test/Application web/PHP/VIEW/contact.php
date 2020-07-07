<?php
// envoyer un message a l'entreprise 
if (isset($_POST['mailform'])) {

    if (!empty($_POST['nom']) And !empty($_POST['prenom']) And !empty($_POST['mail']) And !empty($_POST['objet']) And !empty($_POST['message']))
     {
       // paramettre d'encodage 
    $header = "MIME-Version: 1.0\r\n";
    $header .= 'From:"poson.alan@gmail.com"<poson.alan@gmail.com>' . "\n";
    $header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
    $header .= 'Content-Transfer-Encoding: 8bit';


    $message = '
<html>
	<body>
		<div align="center">
		
            <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br>
            <u>Prenom de l\'expéditeur :</u>'.$_POST['prenom'].'<br>
            <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br>
            <u>Objet:</u>'.$_POST['objet'].'<br>
            <br>
            '.nl2br($_POST['message']).'
		</div>
	</body>
</html>
';

    mail("alan.poson@gmail.com", "CONTACT - CIVE", $message, $header);
$msg="Votre message a bien été envoyé !";
}

    else { 
        $msg = " Tout les champs doivent etre complétés !";
    }}
 
?>
<div class="bas">
    <div class="formIdent">
        <form method="POST" action="">

            <div class="formulaire">
                <h2>Nous contactez : </h2>


                <p><label for="nom">Nom :</label> 
                    <input type="text" name="nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>"/>
             </p>
<!-- si les champs sont deja remplis  -->
                <p><label for="prenom">Prenom :</label>
                    <input type="text" name="prenom" value="<?php if(isset($_POST['prenom'])) { echo $_POST['prenom']; } ?>"/></p>

                <p><label for="mail">Mail :</label>
                    <input type="mail" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>"/></p>

                <p><label for="objet">Objet :</label>
                    <input type="text" name="objet" value="<?php if(isset($_POST['objet'])) { echo $_POST['objet']; } ?>"/></p>

                <p><label for="message">Message :</label>
                    <textarea name="message" ><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?> </textarea></p>

                <p>
                    <div style="margin-left: 150px;">
                        <input type="submit" value="envoyer" name="mailform" />
                        <input type="reset" value="Annuler" />
                    </div>
                </p>
            </div>
        </form>
<?php 
if(isset($msg)){
    echo '<div class="mesMail">'.$msg.'</div>';
}
?>
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