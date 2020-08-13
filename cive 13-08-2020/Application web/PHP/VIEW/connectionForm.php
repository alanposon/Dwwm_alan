
<?php

if (!isset($_POST['matricule'])) // On est dans la page de formulaire
{
	require 'PHP/VIEW/htmlConnection.php'; // On affiche le formulaire
} else { // Le formulaire a été validé
	$message = ''; /* pour l'instant le message est vide */ 
	if (empty($_POST['matricule']) || empty($_POST['motDePasse'])) // Oublie d'un champ
	{
		$message = '<div class="erreur"><p>Une erreur s\'est produite pendant votre identification.
	             <br>Vous devez remplir tous les champs.
	                   <br>Cliquez <a href="index.php?action=connectionForm">ici</a> pour revenir. </p></div>';
	} else // On check le mot de passe
	{

		$utilisateur = UserManager::getByMatricule($_POST['matricule']); // On recherche dans la base l'utilisateur et on rempli l'objet user

		if ($utilisateur->getMotDePasse() == md5(trim($_POST['motDePasse']))) // Acces OK !
		{ /* on recupere les informations */ 
			$_SESSION['matricule'] = $utilisateur->getMatricule();
			$_SESSION['level'] = $utilisateur->getPosteEntreprise();
			$_SESSION['idUSer'] = $utilisateur->getIdUser();
			$_SESSION['prenom'] = $utilisateur->getPrenom();
			$_SESSION['nom'] = $utilisateur->getNom();
			$message = '<div class="bienvenue"><p>Bienvenue '  . $utilisateur->getPrenom() . ' ' . $utilisateur->getNom() . ', vous êtes maintenant connecté!</p></div>';
			if ($_SESSION['level']== 3) {
				header("refresh:3,url=index.php?action=accueil");
			} else {
				header("refresh:3,url=index.php?action=accueil");
			}
		} else // Acces pas OK !
		{
			$message = '<div class="erreur"><p>Une erreur s\'est produite pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p></div>';
		}
	}
	echo $message;
}
?>