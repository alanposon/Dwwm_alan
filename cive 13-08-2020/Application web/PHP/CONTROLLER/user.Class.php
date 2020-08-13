<?php
class User
{
    /******* Attributs *******/
    private $_idUser;
    private $_nom;
    private $_prenom;
    private $_mail;
    private $_matricule;
    private $_motDePasse;
    private $_posteEntreprise;

    /******* Accesseurs *******/


    public function getIdUser()
    {
        return $this->_idUser;
    }
    public function setIdUser($_idUser)
    {
        $this->_idUser = $_idUser;
        return $this;
    }

    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;
        return $this;
    }

    public function getMail()
    {
        return $this->_mail;
    }
    public function setMail($_mail)
    {
        $this->_mail = $_mail;
        return $this;
    }

    public function getMatricule()
    {
        return $this->_matricule;
    }
    public function setMatricule($_matricule)
    {
        $this->_matricule = $_matricule;
        return $this;
    }

    public function getMotDePasse()
    {
        return $this->_motDePasse;
    }
    public function setMotDePasse($_motDePasse)
    {
        $this->_motDePasse = $_motDePasse;
        return $this;
    }

    public function getPosteEntreprise()
    {
        return $this->_posteEntreprise;
    }
    public function setPosteEntreprise($_posteEntreprise)
    {
        $this->_posteEntreprise = $_posteEntreprise;
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
        return 'Identifiant utilisateur : ' . $this->getIdUser() . ' Nom : ' . $this->getNom() . ' Prénom : ' . $this->getPrenom() . ' Mail : ' . $this->getMail() . 'Matricule : ' . $this->getMatricule() . 'Mot de passe : ' . $this->getMotDePasse()  . 'Poste entreprise : ' . $this->getPosteEntreprise() . '.';
    }
}
