<?php
class Client
{
/*******************************Attributs*******************************/
private $_idClient;
private $_nom;
private $_prenom;
private $_adresse;
private $_codePostal;
private $_email;
private $_idVille;
private $_ville;

/******************************Accesseurs*******************************/
public function getIdClient()
{
 return $this->_idClient;
}
public function setIdClient($_idClient)
{
 return $this->_idClient = $_idClient;
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
public function getAdresse()
{
 return $this->_adresse;
}
public function setAdresse($_adresse)
{
 return $this->_adresse = $_adresse;
}
public function getCodePostal()
{
 return $this->_codePostal;
}
public function setCodePostal($_codePostal)
{
 return $this->_codePostal = $_codePostal;
}
public function getEmail()
{
 return $this->_email;
}
public function setEmail($_email)
{
 return $this->_email = $_email;
}
public function getIdVille()
{
 return $this->_idVille;
}
public function setIdVille($_idVille)
{
 $this->_idVille = $_idVille;
 $v=VilleManager::findById($_idVille);
 $this->setVille($v);
}
public function getVille()
{
return $this->_ville;
}
public function setVille($_ville)
{
$this->_ville = $_ville;

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
 return $this->getIdClient() . $this->getNom() . $this->getPrenom() . $this->getAdresse() . $this->getCodePostal() . $this->getEmail() . $this->getIdVille() ;
}

}