<?php
class PosteEntreprise
{
    /******* Attributs *******/
    private $_idPosteEntreprise;
    private $_libellePosteEntreprise;

    /******* Accesseurs *******/

    public function getIdPosteEntreprise()
    {
        return $this->_idPosteEntreprise;
    }
    public function setIdPosteEntreprise($_idPosteEntreprise)
    {
        $this->_idPosteEntreprise = $_idPosteEntreprise;
        return $this;
    }

    public function getLibellePosteEntreprise()
    {
        return $this->_libellePosteEntreprise;
    }
    public function setLibellePosteEntreprise($_libellePosteEntreprise)
    {
        $this->_libellePosteEntreprise = $_libellePosteEntreprise;
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
        return "Identifiant du Poste : " . $this->getIdPosteEntreprise() . ", Libelle du Poste : " . $this->getLibellePosteEntreprise() . '. ';
    }
}
