<?php
class AffichageEmploye
{

    private static function creerEmploye() // je cree une fonction qui reprendra tout les informations des differents employes 
    {
        $dateEmbauche1 = new DateTime("11-03-2001");
        $dateEmbauche2 = new DateTime("03-06-1997"); // leurs dates d'embauches
        $dateEmbauche3 = new DateTime("27-04-1999");
        $dateEmbauche4 = new DateTime("09-09-1978");
        $dateEmbauche5 = new DateTime("17-11-2011");
    
        $agence[] = new Agence(["nom" => "Agence 1", "adresse" => "27 rue de Paris", "codePostal" => "59240", "ville" => "Dunkerque", "modeRestauration" => "Tickets Resto"]);
        $agence[] = new Agence(["nom" => "Agence 2", "adresse" => "13 rue de Dunkerque", "codePostal" => "75000", "ville" => "Paris", "modeRestauration" => "Restaurant"]); // les info sur les agences 
        $agence[] = new Agence(["nom" => "Agence 3", "adresse" => "4 rue des crevettes", "codePostal" => "59000", "ville" => "Lille", "modeRestauration" => "Restaurant"]);
    
        $dateNaissance1 = new DateTime("13-05-2001");
        $dateNaissance2 = new DateTime("07-04-2005");
        $dateNaissance3 = new DateTime("19-01-2008"); // leur date de naissance 
        $dateNaissance4 = new DateTime("23-09-2015");
        $dateNaissance5 = new DateTime("29-08-2011");
        $dateNaissance6 = new DateTime("01-02-1998");
    
        $enfant[0][] = new Enfant(["nom" => "Ducoin", "prenom" => "Philippe", "dateNaissance" => $dateNaissance1]);
        $enfant[0][] = new Enfant(["nom" => "Ducoin", "prenom" => "Ludivine", "dateNaissance" => $dateNaissance2]);
        $enfant[1][] = new Enfant(["nom" => "Marc", "prenom" => "Tony", "dateNaissance" => $dateNaissance3]); // les info sur leurs enfants 
        $enfant[1][] = new Enfant(["nom" => "Marc", "prenom" => "Marc", "dateNaissance" => $dateNaissance4]);
        $enfant[2][] = new Enfant(["nom" => "Duchemin", "prenom" => "Louis", "dateNaissance" => $dateNaissance5]);
        $enfant[3][] = new Enfant(["nom" => "Dupont", "prenom" => "Louis", "dateNaissance" => $dateNaissance6]);
    
        $emp[] = new Employe(["nom" => "Ducoin", "prenom" => "Ludovic", "dateEmbauche" => $dateEmbauche1, "poste" => "Cadre", "salaireBrutAnnuel" => "23000", "service" => "Comptabilité", "agence" => $agence[0], "enfants" => $enfant[0]]);
        $emp[] = new Employe(["nom" => "Marc", "prenom" => "Isabelle", "dateEmbauche" => $dateEmbauche2, "poste" => "Employé", "salaireBrutAnnuel" => "21000", "service" => "Comptabilité", "agence" => $agence[2], "enfants" => $enfant[1]]);
        $emp[] = new Employe(["nom" => "Toto", "prenom" => "Michael", "dateEmbauche" => $dateEmbauche3, "poste" => "Cadre", "salaireBrutAnnuel" => "22000", "service" => "Commercial", "agence" => $agence[0]]);
        $emp[] = new Employe(["nom" => "Duchemin", "prenom" => "Lucas", "dateEmbauche" => $dateEmbauche4, "poste" => "Employé", "salaireBrutAnnuel" => "20000", "service" => "Comptabilité", "agence" => $agence[1], "enfants" => $enfant[2]]);
        $emp[] = new Employe(["nom" => "Dupont", "prenom" => "Elliot", "dateEmbauche" => $dateEmbauche5, "poste" => "Cadre", "salaireBrutAnnuel" => "22000", "service" => "Commercial", "agence" => $agence[1], "enfants" => $enfant[3]]);
        $emp[] = new Employe(["nom" => "Dupont", "prenom" => "Martine", "dateEmbauche" => $dateEmbauche5, "poste" => "Cadre", "salaireBrutAnnuel" => "222000", "service" => "Commercial", "agence" => $agence[1], "enfants" => $enfant[3]]);
    // les information sur les employes
        usort($emp, array("Employe", "compareToNomPrenom")); // on trie par ordre alphabetique les employes ( $emp )
        return $emp; // et on return la valeur d'employe 
    }
    public static function AffichageListeEmploye() // on cree une fonction d'afficher la liste des employes
    {
        $listeEmploye = self::creerEmploye(); // on cree une variable liste employe qui prendra tout le contenue de creer employe  
        // on place notre html dans une variable affichage donc des qu'on va l'appeler on verra agence service ... 
        $affichage= '<section>   
                <h3>Liste des employés</h3>        
                <div class="bloc1">
                    <div class="ligne">Agence</div>
                    <div class="ligne">Service</div>
                    <div class="ligne">Nom</div>
                    <div class="ligne">Prénom</div>
                </div>';
        //pour chaque employe
        foreach ($listeEmploye as $employe)  // on cherche dans la liste des employes
        { // on groupe l'affichage 1 avec l'affichage 2
            $affichage .=  '     <div class="bloc"> 
                <div class="ligne">' . $employe->getAgence()->getNom() . '</div>
                <div class="ligne">' . $employe->getService() . '</div>
                <div class="ligne">' . $employe->getNom() . '</div>
                <div class="ligne">' . $employe->getPrenom() . '</div>
            </div>';

        }
        return $affichage; // et on retourne un affichage definitif , l'affichage sera la seul chose qui restera de la fonction affichage de la liste des employes 
    }
    public static function AffichageDetailEmploye($nb)
    {
        //creer les employes

        //selectionner l'employe n° : $nb

        //reprendre le bloc HTML pour l'affichage d'un employe

        //remplacer les données en dur par les données dynalique en php
        
        return $affichage;
    }
}
