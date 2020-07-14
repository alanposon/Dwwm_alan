<?php 
Class Texte {

/******* Attributs *******/
    private $_idTexte;
    private $_codeTexte;
    private $_codeLangue;
    private $_texte;

  
 
 /******* Accesseurs *******/

    public function getIdTexte()
    {
        return $this->_idTexte;
    }
    public function setIdTexte($_idTexte)
    {
        $this->_idTexte = $_idTexte;
        return $this;
    }

    public function getCodeTexte()
    {
        return $this->_codeTexte;
    }
   public function setCodeTexte($_codeTexte)
    {
        $this->_codeTexte = $_codeTexte;
        return $this;
    }
  
    public function getCodeLangue()
    {
        return $this->_codeLangue;
    }
    public function setCodeLangue($_codeLangue)
    {
        $this->_codeLangue = $_codeLangue;
        return $this;
    }

    public function getTexte()
    {
        return $this->_texte;
    }
    public function setTexte($_texte)
    {
        $this->_texte = $_texte;
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
        return 'Identifiant texte : ' . $this->getIdTexte() . ' Code Texte : ' . $this->getCodeTexte() . ' Code Langue : ' . $this->getCodeLangue() . ' Texte : ' . $this->getTexte() .'.';
    }



   

 
}