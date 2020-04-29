<?php
class User
{
/*******************************Attributs*******************************/
private $_idUser;
private $_pseudo;
private $_mdp;
private $_role;

/******************************Accesseurs*******************************/
public function getIdUser()
{
 return $this->_idUser;
}
public function setIdUser($_idUser)
{
 return $this->_idUser = $_idUser;
}
public function getPseudo()
{
 return $this->_pseudo;
}
public function setPseudo($_pseudo)
{
 return $this->_pseudo = $_pseudo;
}
public function getMdp()
{
 return $this->_mdp;
}
public function setMdp($_mdp)
{
 return $this->_mdp = $_mdp;
}
public function getRole()
{
return $this->_role;
}
public function setRole($_role)
{
$this->_role = $_role;

return $this->_role = $_role;
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
 return $this->getIdUser() . $this->getPseudo() . $this->getMdp() . $this->getRole();
}

}