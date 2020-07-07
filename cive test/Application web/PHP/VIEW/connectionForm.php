
<?php
// session_start ();


if (!isset($_POST['matricule'])) // On est dans la page de formulaire
{
	require 'PHP/VIEW/htmlConnection.php'; // On affiche le formulaire
} else { // Le formulaire a été validé
	$message = '';
	if (empty($_POST['matricule']) || empty($_POST['motDePasse'])) // Oublie d'un champ
	{
		$message = '<p>une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connectionForm">ici</a> pour revenir</p>';
	} else // On check le mot de passe
	{
		if ($_POST['level'] == 1) {
			$utilisateur = UserManager::getByMatricule($_POST['matricule']); // On recherche dans la base l'utilisateur et on rempli l'objet user

			if ($utilisateur->getMotDePasse() == md5(trim($_POST['motDePasse']))) // Acces OK !
			{
				$_SESSION['matricule'] = $utilisateur->getMatricule();
				$_SESSION['level'] = $utilisateur->getPosteEntreprise();
				$_SESSION['idUSer'] = $utilisateur->getIdUser();
				$message = '<p>Bienvenue ' . $utilisateur->getMatricule() . ', vous êtes maintenant connecté!</p>';
				header("refresh:0,url=index.php?action=acceuil");
			} else // Acces pas OK !
			{
				$message = '<p>Une erreur s\'est produite 	    pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p>';
				header("refresh:3,url=index.php?action=connectionForm");
			}
		} elseif ($_POST['level'] == 2) {

			$utilisateur = UserManager::getByMatricule($_POST['matricule']); // On recherche dans la base l'utilisateur et on rempli l'objet user

			if ($utilisateur->getMotDePasse() == md5(trim($_POST['motDePasse']))) // Acces OK !
			{
				$_SESSION['matricule'] = $utilisateur->getMatricule();
				$_SESSION['level'] = $utilisateur->getPosteEntreprise();
				$_SESSION['idUSer'] = $utilisateur->getIdUser();
				$message = '<p>Bienvenue ' . $utilisateur->getMatricule() . ', vous êtes maintenant connecté!</p>';

				$lvl = (isset($_SESSION['libellePosteEntreprise'])) ? (int) $_SESSION['libellePosteEntreprise'] : "employe";
				if ($lvl == "employe") {
					header("refresh:0,url=index.php?action=acceuil");
				} else {
					header("refresh:0,url=index.php?action=acceuil");
				}
			} else // Acces pas OK !
			{
				$message = '<p>Une erreur s\'est produite 	    pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p>';
				header("refresh:3,url=index.php?action=connectionForm");
			}
		} elseif ($_POST['level'] == 3) {

			$utilisateur = UserManager::getByMatricule($_POST['matricule']); // On recherche dans la base l'utilisateur et on rempli l'objet user

			if ($utilisateur->getMotDePasse() == md5(trim($_POST['motDePasse']))) // Acces OK !
			{
				$_SESSION['matricule'] = $utilisateur->getMatricule();
				$_SESSION['level'] = $utilisateur->getPosteEntreprise();
				$_SESSION['idUSer'] = $utilisateur->getIdUser();
				$message = '<p>Bienvenue ' . $utilisateur->getMatricule() . ', vous êtes maintenant connecté!</p>';

				$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 3; 
				if ($lvl == 3) {
					header("refresh:0,url=index.php?action=acceuil");
				} else {
					header("refresh:0,url=index.php?action=acceuil");
				}
			} else // Acces pas OK !
			{
				$message = '<p>Une erreur s\'est produite 	    pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p>';
				header("refresh:3,url=index.php?action=connectionForm");
			}
		}
	}

	echo $message;
}

?>