<?php
class TempsSansAccident
{
    /******* Attributs *******/
    private $_idTempsSansAccident;
    private $_dateDernierAccident;

    /******* Accesseurs *******/
    public function getIdTempsSansAccident()
    {
        return $this->_idTempsSansAccident;
    }
    public function setIdTempsSansAccident($_idTempsSansAccident)
    {
        $this->_idTempsSansAccident = $_idTempsSansAccident;
        return $this;
    }

    public function getDateDernierAccident()
    {
        return $this->_dateDernierAccident;
    }
    public function setDateDernierAccident($_dateDernierAccident)
    {
        $this->_dateDernierAccident = $_dateDernierAccident;
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
        return "Identifiant du temps sans accident : " . $this->getIdTempsSansAccident() . ", Date du dernier accident : " . $this->getDateDernierAccident() . '. ';
    }
}