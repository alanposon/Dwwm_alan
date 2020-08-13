<?php

class Enfant
{
    /*------------------------------------ ATTRIBUTS ----------------------------------*/
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

    /*--------------------------------- GETTER SETTER ---------------------------------*/
/**
 * Get the value of _nom
 */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */
    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->_dateNaissance = $dateNaissance;
    }

    /*--------------------------- CONSTRUCTEUR AVEC HYDRATE -----------------------------*/

    public function __construct(array $options = []) 
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            // permet de mettre dans $method le nom du setter associé à la donnée exemple setNom

            if (is_callable([$this, $method])) // si la method existe
            {
                $this->$method($value);
                // on appelle le setter associé à la valeur, et on lui passe la valeur
            }
        }
    }

    /*---------------------------------- AUTRES METHODES-------------------------------*/

    public function age()  // fonction pour voir l'age des enfants 
    { 
        $age = date_diff(new Datetime("now"), $this->getDateNaissance()); // on met dans la valeur age la difference entre la date de naissance et la date actuel 
        return $age->format("%y"); // on retourne la date dif en format année 
    }

}
