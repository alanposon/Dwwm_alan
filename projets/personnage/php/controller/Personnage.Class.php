<?php
class Personnage
{
/*******************************Attributs*******************************/
private $_idPerso;
private $_pseudo;
private $_mot_de_passe;
private $_role;

/******************************Accesseurs*******************************/
public function getIdPerso()
{
 return $this->_idPerso;
}
public function setIdPerso($_idPerso)
{
 return $this->_idPerso = $_idPerso;
}
public function getPseudo()
{
 return $this->_pseudo;
}
public function setPseudo($_pseudo)
{
 return $this->_pseudo = $_pseudo;
}
public function getMot_de_passe()
{
 return $this->_mot_de_passe;
}
public function setMot_de_passe($_mot_de_passe)
{
 return $this->_mot_de_passe = $_mot_de_passe;
}
/**
 * Get the value of _role
 */ 
public function getRole()
{
return $this->_role;
}

/**
 * Set the value of _role
 *
 * @return  self
 */ 
public function setRole($_role)
{
$this->_role = $_role;

return $this;
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
 return $this->getIdPerso . $this->getPseudo . $this->getMot_de_passe ;
}



}