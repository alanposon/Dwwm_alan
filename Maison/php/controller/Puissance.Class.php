<?php
class Puissance
{
/*******************************Attributs*******************************/
private $_id;
private $_nom;
private $_prenom;
private $_puissance;

/******************************Accesseurs*******************************/
public function getId()
{
 return $this->_id;
}
public function setId($_id)
{
 return $this->_id = $_id;
}
public function getNom()
{
 return $this->_nom;
}
public function setNom($_nom)
{
 return $this->_nom = $_nom;
}
public function getPrenom()
{
 return $this->_prenom;
}
public function setPrenom($_prenom)
{
 return $this->_prenom = $_prenom;
}
public function getPuissance()
{
 return $this->_puissance;
}
public function setPuissance($_puissance)
{
 return $this->_puissance = $_puissance;
}

/*******************************Construct*******************************/
public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }

/****************************Autres méthodes****************************/
public function toString() 
{ 
 return $this->getId . $this->getNom . $this->getPrenom . $this->getPuissance ;
}

}