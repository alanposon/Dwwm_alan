<?php
class Ville
{
    /******* Attributs *******/
    private $_idVille;
    private $_libelleVille;
    private $_codePostal;

    /******* Accesseurs *******/
 
    public function getIdVille()
    {
        return $this->_idVille;
    }
    public function setIdVille($_idVille)
    {
        $this->_idVille = $_idVille;
        return $this;
    }

    public function getLibelleVille()
    {
        return $this->_libelleVille;
    }
    public function setLibelleVille($_libelleVille)
    {
        $this->_libelleVille = $_libelleVille;
        return $this;
    }


    public function getCodePostal()
    {
        return $this->_codePostal;
    }
    public function setCodePostal($_codePostal)
    {
        $this->_codePostal = $_codePostal;
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
        return "Identifiant de la ville : " . $this->getIdVille() . ", libelle de la ville : " . $this->getLibelleVille() . ", code postal : " . $this->getCodePostal() . '. ';
    }

}
