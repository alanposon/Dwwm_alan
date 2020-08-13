<?php

if (!isset($_POST['identifiant']))
{
    require 'Php/View/HtmlConnection.php'; 
}

else
{
    $message = '';
    if (empty($_POST['identifiant']) || empty($_POST['motDePasse']))
    {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connect">ici</a> pour revenir</p>';
    }
else 
    {
        $utilisateur = UserManager::get($_POST['identifiant']); 

        if ($utilisateur->getMotDePasse() == md5($_POST['motDePasse'])) // Acces OK !
        {
            $_SESSION['motDePasse'] = $utilisateur->getIdentifiant();
            $_SESSION['level'] = $utilisateur->getRole();
            $_SESSION['id'] = $utilisateur->getIdUser();
            $message = '<h3>Bienvenue ' . $utilisateur->getIdentifiant() . ', vous êtes maintenant connecté!</h3>';
            if ($lvl >= 2){
            header("refresh:2,url=index.php?action=ChoixListe");
            }
            else{
            header("refresh:2,url=index.php?action=UserListe");
            }
            ?>
		<?php }
    else 
        {
            $message = '<h3>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou l\'identifiant
            entré n\'est pas correcte.</h3>';
            header("refresh:3,url=index.php?action=connect");
        }
    }
    echo $message;
}

?>