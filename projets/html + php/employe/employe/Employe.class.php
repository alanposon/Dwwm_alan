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
        $nbAnnees = date_diff(new DateTime(), $this->getDateEmbauche());
        return $nbAnnees->format("%y");
    }

    public function prime()
    {
        $primeSalaireAnnuel = $this->getSalaireBrutAnnuel() * 0.05;
        $primeAnciennete = ($this->anciennete() * $this->getSalaireBrutAnnuel()) * 0.02;
        return $primeSalaireAnnuel + $primeAnciennete;
    }
    public function Virement()
    {
        $dateDePrimeAnneeCourante =(new DateTime())->format("Y")."11-30";
        if (new DateTime('now') >= $dateDePrimeAnneeCourante) {
            return "Votre prime d'un montant de " . $this->prime() . "a été envoyé à votre banque ";
        } else {
            return "Votre prime n'a toujours pas été viré, merci d'attendre le 30 novembre de l'année ";
        }
    }
    public static function compareToNomPrenom($obj1, $obj2)
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
    public function description()
    {
        echo $this->getNom() . " " . $this->getPrenom() . ", embauché le "
        . $this->getDateEmbauche()->format("d/m/y") . ", au poste de " . $this->getPoste()
        . ", avec un salaire de " . $this->getSalaireBrutAnnuel() . "€, dans le service "
        . $this->getService() . ". <br>Montant de la prime : " . $this->prime()
        . "€, ancienneté : " . $this->anciennete() . " ans.<br>";
        if ($this->getAgence() != null) {
        echo "Agence : " . $this->getAgence()->toString()."<br>";
        }
        if ($this->getEnfants() != null) {
            echo "il a ";
            foreach ($this->getEnfants() as $elt) {
                echo $elt->getNom() . "  " . $elt->getPrenom() . ",  ";
            }
            echo "comme enfant<br>";
        }
        $this->noelEnfants();
        echo "<br><br>";
    }
    public function masseSalariale()
    {
        return (($this->getSalaireBrutAnnuel()) + ($this->prime()));
    }

//Retourne true si l'employé bénéficie des chèques vacances (Ancienneté > 1 an)
    public function chequeVacances()
    {
        return (($this->anciennete() >= 1) ? true : false);
    }
//Attribue des chèques enfants si l'âge des enfants est entre 0 et 18 ans
    public function noelEnfants()
    {
        $pasDeCheque=true;
        if ($this->_enfants != null) {
            $noelEnfant = array(20 => 0, 30 => 0, 50 => 0);
            foreach ($this->_enfants as $unEnfant) {
                switch ($unEnfant->age()) {
                    case (($unEnfant->age()) < 11):
                        $noelEnfant[20]++;
                        $pasDeCheque=false;
                        break;

                    case (($unEnfant->age()) < 16):
                        $noelEnfant[30]++;
                        $pasDeCheque=false;
                        break;

                    case (($unEnfant->age()) < 19):
                        $noelEnfant[50]++;
                        $pasDeCheque=false;
                        break;

                    default:break;
                }
            }

            if (!$pasDeCheque) echo "Il recoit pour ses enfants : <br>";
            foreach ($noelEnfant as $key => $value) {
                if ($value != 0) {
                    echo $value . " chèques de " . $key . "Euros<br>";
                }

            }
        }
    }
}
