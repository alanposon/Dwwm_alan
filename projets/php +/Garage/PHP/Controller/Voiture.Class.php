<?php
class Voiture
{

    /*****************Attributs***************** */
    private $_idVoiture;
    private $_Immatriculation;
    private $_kilometrage;
    private $_idModele;
    

    /*****************Accesseurs***************** */
    public function getIdVoiture()
    {
        return $this->_idVoiture;
    }

    public function setIdVoiture($_idVoiture)
    {
        $this->_idVoiture = $_idVoiture;
    }

    public function getImmatriculation()
    {
        return $this->_Immatriculation;
    }

    public function setImmatriculation($_Immatriculation)
    {
        $this->_Immatriculation = $_Immatriculation;
    }

    public function getKilometrage()
    {
        return $this->_kilometrage;
    }

    public function setKilometrage($_kilometrage)
    {
        $this->_kilometrage = $_kilometrage;
    }

    public function getIdModele()
    {
        return $this->_idModele;
    }

    public function setIdModele($_idModele)
    {
        $this->_idModele = $_idModele;
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
        return "Voiture id : ".$this->getIdVoiture(). "  Immat : ".$this->getImmatriculation()."  km : ".$this->getKilometrage()."  idModele : ".$this->getIdModele()."\n" ;
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] $obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

    
}