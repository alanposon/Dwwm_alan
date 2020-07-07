
// inscriptionform 


<?php


session_start(); 


include 'PHP/VIEW/htmlInscription.php'; // On affiche le formulaire


if (isset($_POST["inscriptionForm"])) 
{
           // securiser mes variables 
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $matricule = htmlspecialchars($_POST['matricule']);
    $motDePasse = md5($_POST['motDePasse']);
    $confirm = md5($_POST['confirm']);
    $postEntreprise =  htmlspecialchars($_POST['posteEntreprise']);

    // si different de vide 
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['mail']) and !empty($_POST['matricule']) and !empty($_POST['motDePasse']) and !empty($_POST['confirm']) and !empty($_POST['posteEntreprise'])) {
        // test nom doit avoir moin de 50 carracteres
        $nomlength = strlen('nom');
        $prenomlength = strlen('prenom');
        if ($nomlength <= 50 || $prenomlength <= 50) {  // verif de l'email 
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {


                if ($motDePasse == $confirm) {
                } else {
                    $erreur = "Vos mots de passes ne correspondent pas ";
                }
            } else {
                $erreur = " Votre adresse mail n'est pas valide ";
            }
        } else {
            $erreur = " Votre nom ou prénom ne doit pas depasser 50 carractéres !";
        }
    } else // sinon on met se message 
    {
        $erreur = "tout les champs doivent étre complétés !";
    }
}

if (isset($erreur)) {
    echo $erreur;
}
