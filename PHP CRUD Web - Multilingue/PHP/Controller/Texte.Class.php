<?php 
Class Texte{

    private $_idTexte;
    private $_codeTexte;
    private $_codeLangue;
    private $_texte;

    /**
     * Get the value of _texte
     */ 
    public function getTexte()
    {
        return $this->_texte;
    }

    /**
     * Set the value of _texte
     *
     * @return  self
     */ 
    public function setTexte($_texte)
    {
        $this->_texte = $_texte;

        return $this;
    }
    // Constructeur
	public function __construct(array $options = [])
	{ 
		if (!empty($options))
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			
			if (is_callable([$this, $method]))
			{
				$this->$method($value);
			}
		}
	}

}