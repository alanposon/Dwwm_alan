<?php
class OffreEmploi
{
    /******* Attributs *******/
    private $_idOffreEmploi;
    private $_numeroOffreEmploi;
    private $_entrepriseOffreEmploi;
    private $_dateOffreEmploi;
    private $_descriptionOffreEmploi;

    /******* Accesseurs *******/

    public function getIdOffreEmploi()
    {
        return $this->_idOffreEmploi;
    }
    public function setIdOffreEmploi($_idOffreEmploi)
    {
        $this->_idOffreEmploi = $_idOffreEmploi;
        return $this;
    }

    public function getNumeroOffreEmploi()
    {
        return $this->_numeroOffreEmploi;
    }
    public function setNumeroOffreEmploi($_numeroOffreEmploi)
    {
        $this->_numeroOffreEmploi = $_numeroOffreEmploi;
        return $this;
    }

    public function getEntrepriseOffreEmploi()
    {
        return $this->_entrepriseOffreEmploi;
    }
    public function setEntrepriseOffreEmploi($_entrepriseOffreEmploi)
    {
        $this->_entrepriseOffreEmploi = $_entrepriseOffreEmploi;
        return $this;
    }

    public function getDateOffreEmploi()
    {
        return $this->_dateOffreEmploi;
    }
    public function setDateOffreEmploi($_dateOffreEmploi)
    {
        $this->_dateOffreEmploi = $_dateOffreEmploi;
        return $this;
    }

    public function getDescriptionOffreEmploi()
    {
        return $this->_descriptionOffreEmploi;
    }
    public function setDescriptionOffreEmploi($_descriptionOffreEmploi)
    {
        $this->_descriptionOffreEmploi = $_descriptionOffreEmploi;
        return $this;
    }

    /******* Construct *******/
    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    /******* Autres methodes *******/
    public function toString()
    {
        return "Identifiant de l'offre d'emploi : " . $this->getIdOffreEmploi() 
        . ' Numero offre emploi : ' . $this->getNumeroOffreEmploi() 
        . ' nom de l entreprise : ' . $this->getEntrepriseOffreEmploi() 
        . 'date de l offre d emploi  : ' . $this->getDateOffreEmploi() 
        . 'description de l offre : ' . $this->getDescriptionOffreEmploi() 
        . '.';
    }
}
