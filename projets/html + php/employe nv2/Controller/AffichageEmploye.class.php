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
   
    public static function Affichage()
    {
        $string = '  <section class="page1">
    <h2>Liste du personnel</h2>
    <!--       NOM------------------------------------->
    <div class="nomListe-container">
        <div class="nomListe">
            <h3>Agence</h3>
        </div>
        <div class="nomListe">
            <h3>Service</h3>
        </div>
        <div class="nomListe">
            <h3>Nom</h3>
        </div>
        <div class="nomListe">
            <h3>Prenom</h3>
        </div>
    </div>
    <!--       LISTE------------------------------------->
    <div class="contenuListe-container">';

        $listeEmploye = self::CreerEmploye();
        foreach ($listeEmploye as $elt)
        {
            // echo var_dump($elt);
            $string .= '<a href="EmployeDetail.php">';
            $string .= '<div class="contenuListe">
            <p>' . $elt->getAgence()->getNom() . '</p>
        </div>
        <div class="contenuListe">
            <p>' . $elt->getService() . '</p>
        </div>
        <div class="contenuListe">
            <p>' . $elt->getNom() . '</p>
        </div>
        <div class="contenuListe">
            <p>' . $elt->getPrenom() . '</p>
        </div>';
            $string .= '</a>';
        }
        $string .= '</div></section>';

        return $string;
    }


    public static function AffichageDetail($nb) // affichage du detail on aura besoin d'un nombre
    {

        $string = ""; // on cree un string vide 
        $tableau = self::CreerEmploye(); // on cree une variable tableau qui prend le contenu de la fonction cree employe 
        $employe = $tableau[$nb]; // on cree un employe qui prendra en valeur un tableau qui contient des nombres 

        $string .= '<h2>' . $employe->getNom() . ' ' . $employe->getPrenom() . '</h2>'; // on prend la variable string est on y ajoute les noms et prenoms 
        // on ajoute toute les information sur l'employe 
        $string .= '<!--        Information-----------------------------> 
            <div class="detail">
                <div class="titreDetail">
                    <h3>Information</h3>
                </div>

                <div class="detailEmploye">
                    <ul>
                        <li>Embauché le ' . $employe->getDateEmbauche()->format("d-m-Y") . ' </li>
                        <li>Poste:' . $employe->getPoste() . '</li>
                        <li>Salaire: ' . $employe->getSalaireBrutAnnuel() . '</li>
                    </ul>
                </div>
            </div>
            <!--        Agence----------------------------->';
            $agence=$employe->getAgence();  // on cree la variable agence , on y insert l'agence 
            $string .='    
            <div class="detail">
                <div class="titreDetail">
                    <h3>Agence</h3>
                </div>

                <div class="detailEmploye">
                    <ul>
                        <li>' . $agence->getNom() . '</li>
                        <li>' . $agence->getAdresse() . '</li>
                        <li>' . $agence->getCodePostal() . ' ' . $agence->getVille() . '</li>
                        <li>' . $agence->getModeRestauration() . '</li>
                    </ul>
                </div>
            </div>
            <!--        Poste----------------------------->
            <div class="detail">
                <div class="titreDetail">
                    <h3>Poste</h3>
                </div>

                <div class="detailEmploye">
                    <ul>
                        <li>' . $employe->getService() . '</li>
                        <li>' . $employe->getPoste() . '</li>
                    </ul>
                </div>
            </div>
            <!--        Enfant----------------------------->
           ';
        $enfants = $employe->getEnfants();  // on cree la variable enfant qui prend l'enfant 
        // Si l'employe n'a pas d'enfant, il ne doit pas l'afficher
        if ($enfants != null) // si enfant different de null ( c'est a dire il a un enfant )
        { // faire  , ajouter les detailles a l'employé 
            $string .= '
            <div class="detail">
                <div class="titreDetail">
                    <h3>Enfant</h3>
                </div>';

            $string .= '<div class="detailEmploye">
                        <ul>';

            foreach ($enfants as $unEnfant) // chercher dans les enfants  un enfant 
            {
                $string .= '<li>' . $unEnfant->getNom() . "  " . $unEnfant->getPrenom() . ',  <span>' . $unEnfant->getDateNaissance()->format("d-m-Y") . '</span></li>';
            }// prendre les informations sur les enfants 
            $string .= '</ul>
                    </div>';
            $string .= '</div>';
        }

        return $string; // on retourne la conclusion 
    }
    
}

