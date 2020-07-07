<?php


if (empty($_POST['matricule'])) // Si la variable est vide, on est sur la page de formulaire
{
	include 'PHP/VIEW/htmlInscription.php';// On affiche le formulaire
    
    
} //Fin de la partie formulaire

else //On est dans le cas traitement
{
    $matricule_erreur1 = null;
    $matricule_erreur2 = null;
    $motDePasse_erreur = null;
    //On récupère les variables
    $i = 0; // compte le nombre d'erreurs à afficher
    $temps = time();
    $matricule=$_POST['matricule'];
    $pass = md5($_POST['motDepasse']); // on hache le password avec md5
    $confirm = md5($_POST['confirm']);
    $role = 1;
    //Vérification du matricule
    $utilisateur  = UserManager::getByMatricule($matricule);
    if ($utilisateur->getIdUser()!=null)
    {
        $matricule_erreur1 = "Votre matricule est déjà utilisé par un membre";
        $i++;
    }
    
    if (strlen($matricule) < 3 || strlen($matricule) > 15)
    {
        $matricule_erreur2 = "Votre matricule est soit trop grand, soit trop petit";
        $i++;
    }
    
    //Vérification du mdp
    if ($pass != $confirm || empty($confirm) || empty($pass))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation sont différents, ou sont vides";
        $i++;
    }
    
 
    if ($i==0) // S'il n'y a pas d'erreur
    {
    	$nouvelUtilisateur = new User(['matricule'=>$_POST['matricule'],'password'=>md5($_POST['password']),'role'=>$role]);
        UserManager::add($nouvelUtilisateur); // On crée l'utilisateur dans la base
        $nouvelUtilisateur = UserManager::getByMatricule($_POST['matricule']); //pour récupérer l'ID
        echo'<h1>Inscription terminée</h1>';
        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['matricule'])).' vous êtes maintenant inscrit</p>';
        
        //Et on définit les variables de sessions
        $_SESSION['matricule'] = $nouvelUtilisateur->getmatricule();
        $_SESSION['id'] = $nouvelUtilisateur->getIdUser() ;
        $_SESSION['level'] = $nouvelUtilisateur->getPosteEntreprise();
        header("refresh:3,url=index.php?action=userListeAdmin");
    }
    else // on affiche les erreurs
    {
        echo'<h1>Inscription interrompue</h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$matricule_erreur1.'</p>';
        echo'<p>'.$matricule_erreur2.'</p>';
        echo'<p>'.$motDePasse_erreur.'</p>';
        header("refresh:3,url=index.php?action=inscriptionForm");
    }
}
?>
