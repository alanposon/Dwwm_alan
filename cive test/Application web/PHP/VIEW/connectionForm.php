
<?php



if (!isset($_POST['matricule'])) // On est dans la page de formulaire
{
	require 'PHP/VIEW/htmlConnection.php'; // On affiche le formulaire
} else { // Le formulaire a été validé
	$message = '';
	if (empty($_POST['matricule']) || empty($_POST['motDePasse'])) // Oublie d'un champ
	{
		$message = '<p> une erreur s\'est produite pendant votre identification.
	                   Vous devez remplir tous les champs</p>
	                   <p>Cliquez <a href="index.php?action=connectionForm">ici</a> pour revenir</p>';
	} else // On check le mot de passe
	{

		$utilisateur = UserManager::getByMatricule($_POST['matricule']); // On recherche dans la base l'utilisateur et on rempli l'objet user

		if ($utilisateur->getMotDePasse() == md5(trim($_POST['motDePasse']))) // Acces OK !
		{
			$_SESSION['matricule'] = $utilisateur->getMatricule();
			$_SESSION['level'] = $utilisateur->getPosteEntreprise();
			$_SESSION['idUSer'] = $utilisateur->getIdUser();
			$_SESSION['prenom'] = $utilisateur->getPrenom();
			$_SESSION['nom'] = $utilisateur->getNom();
			$message = '<div class="bienvenue"><p>Bienvenue '  . $utilisateur->getPrenom() . ' ' . $utilisateur->getNom() . ', vous êtes maintenant connecté!</p></div>';
			if ($_SESSION['level']== 3) {
				header("refresh:3,url=index.php?action=offreEmploiListeAdmin");
			} else {
				header("refresh:3,url=index.php?action=offreEmploiListeAdmin");
			}
		} else // Acces pas OK !
		{
			$message = '<p>Une erreur s\'est produite 	    pendant votre identification.<br /> Le mot de passe ou le pseudo
			entré n\'est pas correcte.</p>';
		}
	}
	echo $message;
}
?>