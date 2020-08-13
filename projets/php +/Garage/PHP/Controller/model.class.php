<?php
class model
{

    /*****************Attributs***************** */
    private $_id_model;
    private $_model;
    private $_couleur;
    private $_marque;
    

    /*****************Accesseurs***************** */

    public function getId_model()
    {
        return $this->_id_model;
    }

    public function setId_model($_id_model)
    {
        $this->_id_model = $_id_model;
    }

    public function getModel()
    {
        return $this->_model;
    }

    public function setModel($_model)
    {
        $this->_model = $_model;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function setCouleur($_couleur)
    {
        $this->_couleur = $_couleur;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($_marque)
    {
        $this->_marque = $_marque;
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
        return "model id : ".$this->getId_model(). "  model : ".$this->getModel()."  marque : ".$this->getMarque()."  couleur : ".$this->getCouleur()."\n" ;
    }

  
}