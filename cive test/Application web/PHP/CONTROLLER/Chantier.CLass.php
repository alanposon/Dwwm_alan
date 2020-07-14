<?php
class Chantier
{
    /******* Attributs *******/
    private $_idChantier;
    private $_matriculeChantier;
    private $_adresseChantier;
    private $_activiteChantier;
    private $_dateChantier ;
    private $_idVille;

    /******* Accesseurs *******/

    public function getIdChantier()
    {
        return $this->_idChantier;
    }
    public function setIdChantier($_idChantier)
    {
        $this->_idChantier = $_idChantier;
        return $this;
    }

    public function getMatriculeChantier()
    {
        return $this->_matriculeChantier;
    }
    public function setMatriculeChantier($_matriculeChantier)
    {
        $this->_matriculeChantier = $_matriculeChantier;
        return $this;
    }

    public function getAdresseChantier()
    {
        return $this->_adresseChantier;
    }
    public function setAdresseChantier($_adresseChantier)
    {
        $this->_adresseChantier = $_adresseChantier;
        return $this;
    }

    public function getActiviteChantier()
    {
        return $this->_activiteChantier;
    }
    public function setActiviteChantier($_activiteChantier)
    {
        $this->_activiteChantier = $_activiteChantier;
        return $this;
    }

    public function getDateChantier()
    {
        return $this->_dateChantier;
    }
    public function setDateChantier($_dateChantier)
    {
        $this->_dateChantier = $_dateChantier;
        return $this;
    }

    public function getIdVille()
    {
        return $this->_idVille;
    }
    public function setIdVille($_idVille)
    {
        $this->_idVille = $_idVille;
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
        return "Identifiant du chantier : " . $this->getIdChantier() ."matricule du chantier : " . $this->getMatriculeChantier() .' adresse du chantier : ' . $this->getAdresseChantier() . 'activite chantier : ' . $this->getActiviteChantier() .'date du chantier : ' . $this->getDateChantier() .'identifiant de la ville : ' . $this->getIdVille() .'.';
    }

    


   
}
