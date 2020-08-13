<?php
class Personne
{

    /*****************Attributs***************** */
    private $_idPersonne;
    private $_nom;
    private $_prenom;
    private $_date_de_naissance;
    private $_adresse;
    private $_ville;
    private $_code_postal;
    private $_e_mail;

    

    /*****************Accesseurs***************** */
    public function getIdPersonne()
    {
        return $this->_idPersonne;
    }

    public function setIdPersonne($_idPersonne)
    {
        $this->_idPersonne = $_idPersonne;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($_nom)
    {
        $this->_nom = $_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;
    }

    public function getDate_de_naissance()
    {
        return $this->_date_de_naissance;
    }

    public function setDate_de_naissance($_date_de_naissance)
    {
        $this->_date_de_naissance = $_date_de_naissance;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse($_adresse)
    {
        $this->_adresse = $_adresse;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($_ville)
    {
        $this->_ville = $_ville;
    }

    public function getCode_postal()
    {
        return $this->_code_postal;
    }

    public function setCode_postal($_code_postal)
    {
        $this->_code_postal = $_code_postal;
    }

    public function getE_mail()
    {
        return $this->_e_mail;
    }

    public function setE_mail($_e_mail)
    {
        $this->_e_mail = $_e_mail;
    }

    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "model id : ".$this->getIdPersonne(). "  model : ".$this->getNom()."  marque : ".$this->getPrenom()."  couleur : ".$this->getDate_de_naissance()."  couleur : ".$this->getAdresse()."  couleur : ".$this->getVille()."  couleur : ".$this->getCode_postal()."  couleur : ".$this->getDate_de_naissance()."  couleur : ".$this->getE_mail()."\n" ;
    }


  

   
}