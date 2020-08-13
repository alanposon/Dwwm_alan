<?php
class ImgSlider
{
    /******* Attributs *******/
    private $_idImgSlider; // img = image 
    private $_libelleImgSlider;

    /******* Accesseurs *******/

    public function getIdImgSlider()
    {
        return $this->_idImgSlider;
    }
    public function setIdImgSlider($_idImgSlider)
    {
        $this->_idImgSlider = $_idImgSlider;
        return $this;
    }

    public function getLibelleImgSlider()
    {
        return $this->_libelleImgSlider;
    }
    public function setLibelleImgSlider($_libelleImgSlider)
    {
        $this->_libelleImgSlider = $_libelleImgSlider;
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
        return "Identifiant de l'image : " . $this->getIdImgSlider() .' Libelle de l image : ' . $this->getLibelleImgSlider().'.';
    }


}