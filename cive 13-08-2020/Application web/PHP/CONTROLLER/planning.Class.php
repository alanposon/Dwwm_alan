<?php
class Planning
{
    /******* Attributs *******/
    private $_idPlanning;
    private $_libellePlanning;
    private $_dateChantier;
    private $_activiteChantier;
    private $_adresseChantier;

    /******* Accesseurs *******/
    public function getIdPlanning()
    {
        return $this->_idPlanning;
    }
    public function setIdPlanning($_idPlanning)
    {
        $this->_idPlanning = $_idPlanning;
        return $this;
    }

    public function getLibellePlanning()
    {
        return $this->_libellePlanning;
    }
    public function setLibellePlanning($_libellePlanning)
    {
        $this->_libellePlanning = $_libellePlanning;
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

    public function getActiviteChantier()
    {
        return $this->_activiteChantier;
    }
    public function setActiviteChantier($_activiteChantier)
    {
        $this->_activiteChantier = $_activiteChantier;
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
        return "Identifiant du planning : " . $this->getIdPlanning() .' libelle du planning  : ' . $this->getLibellePlanning() . ' date du chantier : ' . $this->getActiviteChantier() .'adresse du chantier  : ' . $this->getAdresseChantier().'.';
    }

}