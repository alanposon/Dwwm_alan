<?php
class Nintendo
{
/*******************************Attributs*******************************/
private $_idJeux;
private $_nomJeux;
private $_styleJeux;

/******************************Accesseurs*******************************/
public function getIdJeux()
{
 return $this->_idJeux;
}
public function setIdJeux($_idJeux)
{
 return $this->_idJeux = $_idJeux;
}
public function getNomJeux()
{
 return $this->_nomJeux;
}
public function setNomJeux($_nomJeux)
{
 return $this->_nomJeux = $_nomJeux;
}
public function getStyleJeux()
{
 return $this->_styleJeux;
}
public function setStyleJeux($_styleJeux)
{
 return $this->_styleJeux = $_styleJeux;
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
 return $this->getIdJeux . $this->getNomJeux . $this->getStyleJeux ;
}

}