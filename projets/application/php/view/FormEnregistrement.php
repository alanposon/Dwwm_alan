﻿<?php


if (empty($_POST['pseudo'])) // Si la variable est vide, on est sur la page de formulaire
{
	include 'Php/View/HtmlEnregistrement.php'; // On affiche le formulaire
    
    
} //Fin de la partie formulaire

else //On est dans le cas traitement
{
    $pseudo_erreur1 = null;
    $pseudo_erreur2 = null;
    $mdp_erreur = null;
    //On récupère les variables
    $i = 0; // compte le nombre d'erreurs à afficher
    $temps = time();
    $pseudo=$_POST['pseudo'];
    $pass = md5($_POST['mdp']); // on hache le mdp avec md5
    $confirm = md5($_POST['confirm']);
    $role = 1;
    //Vérification du pseudo
    $utilisateur  = UserManager::get($pseudo);
    if ($utilisateur->getIdUser()!=null)
    {
        $pseudo_erreur1 = "Votre pseudo est déjà utilisé ";
        $i++;
    }
    
    if (strlen($pseudo) < 3 || strlen($pseudo) > 15)
    {
        $pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
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
    	$nouvelUtilisateur = new User(['pseudo'=>$_POST['pseudo'],'mdp'=>md5($_POST['mdp']),'role'=>$role]);
        UserManager::add($nouvelUtilisateur); // On crée l'utilisateur dans la base
        $nouvelUtilisateur = UserManager::get($_POST['pseudo']); //pour récupérer l'ID
        echo'<h1>Inscription terminée</h1>';
        echo'<p>Bienvenue '.stripslashes(htmlspecialchars($_POST['pseudo'])).' vous êtes maintenant inscrit</p>';
        
        //Et on définit les variables de sessions
        $_SESSION['pseudo'] = $nouvelUtilisateur->getPseudo();
        $_SESSION['id'] = $nouvelUtilisateur->getIdUser() ;
        $_SESSION['level'] = $nouvelUtilisateur->getRole();
        header("refresh:2,url=index.php?action=ClientListe");
    }
    else // on affiche les erreurs
    {
        echo'<h1>Inscription interrompue</h1>';
        echo'<p>Une ou plusieurs erreurs se sont produites pendant l\'incription</p>';
        echo'<p>'.$i.' erreur(s)</p>';
        echo'<p>'.$pseudo_erreur1.'</p>';
        echo'<p>'.$pseudo_erreur2.'</p>';
        echo'<p>'.$mdp_erreur.'</p>';
        header("refresh:3,url=index.php?action=nouveauUser");
    }
}
?>





