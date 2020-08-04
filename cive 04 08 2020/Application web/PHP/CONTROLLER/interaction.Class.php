<?php
class Interaction 
{
    /******* Attributs *******/
    private $_idInteraction;
    private $_idOffreEmploi;
    private $_idUser;
    private $_CV ;
    private $_reponse;

    /******* Accesseurs *******/
    public function getIdInteraction()
    {
        return $this->_idInteraction;
    }
    public function setIdInteraction($_idInteraction)
    {
        $this->_idInteraction = $_idInteraction;
        return $this;
    }
 
    public function getIdOffreEmploi()
    {
        return $this->_idOffreEmploi;
    }
    public function setIdOffreEmploi($_idOffreEmploi)
    {
        $this->_idOffreEmploi = $_idOffreEmploi;
        return $this;
    }

    public function getIdUser()
    {
        return $this->_idUser;
    }
    public function setIdUser($_idUser)
    {
        $this->_idUser = $_idUser;
        return $this;
    }

    public function getCV()
    {
        return $this->_CV;
    }
    public function setCV($_CV)
    {
        $this->_CV = $_CV;
        return $this;
    }

    public function getReponse()
    {
        return $this->_reponse;
    }
    public function setReponse($_reponse)
    {
        $this->_reponse = $_reponse;
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
       return "Identifiant de l'interaction : " . $this->getIdInteraction() .' identifiant de l offre emploi : ' . $this->getIdOffreEmploi() . ' Identifiant de l utilisateur : ' . $this->getIdUser() .' Le curiculum vitae : ' . $this->getCV() .'Reponse a l offre : ' . $this->getReponse() .'.';
   }

   




}