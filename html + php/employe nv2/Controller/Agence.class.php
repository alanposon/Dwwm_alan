<?php

class Agence // la classe agence 
{
    /*------------------------------------- ATTRIBUTS ------------------------------------*/
    private $_nom; 
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_modeRestauration;

    /*--------------------------------- GETTER SETTER -----------------------------------*/
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function getModeRestauration()
    {
        return $this->_modeRestauration;
    }

    public function setModeRestauration($modeRestauration)
    {
        $this->_modeRestauration = $modeRestauration;
    }

    /*--------------------------- CONSTRUCTEUR AVEC HYDRATE -----------------------------*/

    public function __construct(array $options = [])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }
    public function hydrate($data)
    {
        foreach ($data as $key => $value) { //foreach recoit un tableau et sépare les clés des valeurs
            $method = 'set' . ucfirst($key); 
            // permet de mettre dans $method le nom du setter associé à la donnée exemple setNom

            if (is_callable([$this, $method])) // si la method existe
            {
                $this->$method($value); 
                // on appelle le setter associé à la valeur, et on lui passe la valeur
            }
        }
    }

    /*---------------------------------- AUTRES METHODES----------------------------------*/

    public function toString()
    {//permet de retourner un objet en string.
        return "Nom agence: " . $this->getNom() . ", adresse: " . $this->getAdresse() . ", CP: " . $this->getCodePostal() . ", ville: " . $this->getVille(). ", mode de restauration: ". $this->getModeRestauration();
    }

}

?>