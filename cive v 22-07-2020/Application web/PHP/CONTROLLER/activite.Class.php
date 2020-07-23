<?php
class Activite
{
    /******* Attributs *******/
    private $_idActivite;
    private $_libelleActivite;
  

    /******* Accesseurs *******/

    public function getIdActivite()
    {
        return $this->_idActivite;
    }
    public function setIdActivite($_idActivite)
    {
        $this->_idActivite = $_idActivite;
        return $this;
    }

    public function getLibelleActivite()
    {
        return $this->_libelleActivite;
    }
    public function setLibelleActivite($_libelleActivite)
    {
        $this->_libelleActivite = $_libelleActivite;
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
        return "Identifiant de l activités : " . $this->getIdActivite() ."Libelle de l'activite : " . $this->getLibelleActivite() .'.';
    }

    


   

 
    

   
    
}
