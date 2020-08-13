<?php

class Employe
{
    /* ATTRIBUTS */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_poste;
    private $_salaireBrutAnnuel;
    private $_service;
    private $_agence;
    private $_enfants = [];
    public static $compteur = 0;

    /* GETTER SETTER*/
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche(DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getPoste()
    {
        return $this->_poste;
    }

    public function setPoste($poste)
    {
        $this->_poste = $poste;
    }

    public function getSalaireBrutAnnuel()
    {
        return $this->_salaireBrutAnnuel;
    }

    public function setSalaireBrutAnnuel($salaireBrutAnnuel)
    {
        $this->_salaireBrutAnnuel = $salaireBrutAnnuel;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
    }
    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(Agence $agence)
    {
        $this->_agence = $agence;
    }
    public function getEnfants()
    {
        return $this->_enfants;
    }
    public function setEnfants(array $enfants)
    {
        $this->_enfants = $enfants;

        return $this;
    }

    /* CONSTRUCTEUR AVEC HYDRATE*/
    public function __construct(array $options = [])
    {
        self::$compteur++;
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key); // permet de mettre dans $method le nom du setter associé à la donnée exemple setNom
            if (is_callable([$this, $method])) // si la method existe
            {
                $this->$method($value); // on appelle le setter associé à la valeur, et on lui passe la valeur
            }
        }
    }

    /* Autres méthodes */
    public function anciennete()
    { //fonction qui calcule depuis combien d'années l'employé est dans l'entreprise
        $nbAnnees = date_diff(new DateTime(), $this->getDateEmbauche()); // nombre d'annee = la difference entre la date d'aujourdhui et la date d'emboche 
        return $nbAnnees->format("%y"); // on retourne le nombre d'annee en format que l'année 
    }

    public function prime() 
    {
        $primeSalaireAnnuel = $this->getSalaireBrutAnnuel() * 0.05; // variable prime salaire annuel on prend le salaire annuel et on le multiplie par 0.05 ( la prime )
        $primeAnciennete = ($this->anciennete() * $this->getSalaireBrutAnnuel()) * 0.02; // variable prime anciennete multiplier par le salaire brute annuel le tout multiplier par la prime 
        return $primeSalaireAnnuel + $primeAnciennete; // on retourne la somme de la prime annuel et de la prime d'anciennete 
    }
    public function Virement() // on veut une fonction pour les virements 
    {
        $dateDePrimeAnneeCourante =(new DateTime())->format("Y")."11-30"; // on cree une variable qui recevera la date de la prime  a la date d'aujourdhui avec un format bien specifique
        if (new DateTime('now') >= $dateDePrimeAnneeCourante) { // si la date d'aujourdhui est au dessus ou egal a la date de la prime 
            return "Votre prime d'un montant de " . $this->prime() . "a été envoyé à votre banque "; // retourner que sa prime sera du montant du resultat de la fonction prime 
        } else { // sinon lui dire d'attendre 
            return "Votre prime n'a toujours pas été viré, merci d'attendre le 30 novembre de l'année ";
        }
    }
    public static function compareToNomPrenom($obj1, $obj2) // faire une fonction static ( qui sera accessible que par la classe ) la fonction est universel c'est pour sa on utilise des objets 
    { //Sert à comparer plusieurs objets (plus grand : 1, plus petit : -1 ou égal : 0)
        if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;
        } else if ($obj1->getPrenom() < $obj2->getPrenom()) {
            return -1;
        } else if ($obj1->getPrenom() > $obj2->getPrenom()) {
            return 1;
        } else {
            return 0;
        }
    }
	public static function compareToServiceNomPrenom($obj1, $obj2)
    { //Sert à comparer plusieurs objets (plus grand : 1, plus petit : -1 ou égal : 0)
        if ($obj1->getService() < $obj2->getService()) {
            return -1;
        } else if ($obj1->getService() > $obj2->getService()) {
            return 1;
        } else if ($obj1->getNom() < $obj2->getNom()) {
            return -1;
        } else if ($obj1->getNom() > $obj2->getNom()) {
            return 1;
        } else if ($obj1->getPrenom() < $obj2->getPrenom()) {
            return -1;
        } else if ($obj1->getPrenom() > $obj2->getPrenom()) {
            return 1;
        } else {
            return 0;
        }
    }
    public function description() // on cree une fonction de description ( un tostring quoi )
    {
        echo $this->getNom() . " " . $this->getPrenom() . ", embauché le "
        . $this->getDateEmbauche()->format("d/m/y") . ", au poste de " . $this->getPoste()
        . ", avec un salaire de " . $this->getSalaireBrutAnnuel() . "€, dans le service "
        . $this->getService() . ". \nMontant de la prime : " . $this->prime()
        . "€, ancienneté : " . $this->anciennete() . " ans.\n";
        if ($this->getAgence() != null) {
        echo "Agence : " . $this->getAgence()->toString(). "\n";
        }
        if ($this->getEnfants() != null) {
            echo "il a ";
            foreach ($this->getEnfants() as $elt) { // on recherche dans les enfants et on ecrit les nom prenom et une phrase a la fin de la liste des enfants 
                echo $elt->getNom() . "  " . $elt->getPrenom() . ",  ";
            }
            echo "comme enfant\n";
        }
        $this->noelEnfants(); // ???? 
        echo "\n\n";
    }
    public function masseSalariale() // on cree une fonction pour faire la masse salarial 
    {
        return (($this->getSalaireBrutAnnuel()) + ($this->prime())); // on retourne la somme du salaire + la prime 
    }

//Retourne true si l'employé bénéficie des chèques vacances (Ancienneté > 1 an)
    public function chequeVacances() 
    {
        return (($this->anciennete() >= 1) ? true : false); // on retourne vrai si l'anciennete est superieur ou egal a 1 ans , sinon on met faux 
    }
//Attribue des chèques enfants si l'âge des enfants est entre 0 et 18 ans
    public function noelEnfants() // fonction pour determiner le noel des enfants 
    {
        $pasDeCheque=true; // quand pas de cheque la valeur de la variable pas de cheque est egal a vrai 
        if ($this->_enfants != null) { // si l'enfant est different de nul 
            $noelEnfant = array(20 => 0, 30 => 0, 50 => 0); // la variable noel enfat sera un tableau avec 0 billet de 20 , 0 billet de 30 , 0 billet de 50 ; 
            foreach ($this->_enfants as $unEnfant) { // on recherche dans le tableau enfants un enfant 
                switch ($unEnfant->age()) {  // si l'age d'un enfant 
                    case (($unEnfant->age()) < 11): // est inferieur a 11 
                        $noelEnfant[20]++; // donner un billet de 20
                        $pasDeCheque=false; // pas de cheque devient faux
                        break; // si faux on s'arrete 

                    case (($unEnfant->age()) < 16): // sinon si age est inferieur a 16 
                        $noelEnfant[30]++; // donner 1 billet de 30 
                        $pasDeCheque=false; // si faut on s'arrete 
                        break;

                    case (($unEnfant->age()) < 19): // sinon si age est inferieur a 19 
                        $noelEnfant[50]++; // donner un billet de 50 
                        $pasDeCheque=false; // si faux faire fin 
                        break;

                    default:break; // si age superieur a 19 faire fin 
                }
            }

            if (!$pasDeCheque) echo "Il recoit pour ses enfants : \n"; // si pas de cheque n'est pas vrai ecrire une phrase 
            foreach ($noelEnfant as $key => $value) { // on cherche dans noel enfant se quil y a dedans ainsi que leur colonne 
                if ($value != 0) { // si la variable value est differente de 0 
                    echo $value . " chèques de " . $key . "Euros\n"; // ecrire la valeur cheque de la somme en euros 
                }

            }
        }
    }
}
