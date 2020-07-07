<?php

class Article{
	private $_idArticle;
	private $_codeDescription;
	private $_description;
	private $_prixArticle;
	

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

	/**
	 * Get the value of _idArticle
	 */ 
	public function getIdArticle()
	{
		return $this->_idArticle;
	}

	/**
	 * Set the value of _idArticle
	 *
	 * @return  self
	 */ 
	public function setIdArticle($_idArticle)
	{
		$this->_idArticle = $_idArticle;

		return $this;
	}

	/**
	 * Get the value of _codeDescription
	 */ 
	public function getCodeDescription()
	{
		return $this->_codeDescription;
	}

	/**
	 * Set the value of _codeDescription
	 *
	 * @return  self
	 */ 
	public function setCodeDescription($_codeDescription)
	{
		$this->_codeDescription = $_codeDescription;
		$this->_description = TexteManager::getTexte($_codeDescription);
		return $this;
	}

	/**
	 * Get the value of _description
	 */ 
	public function getDescription()
	{
		return $this->_description;
	}

	/**
	 * Get the value of _prixArticle
	 */ 
	public function getPrixArticle()
	{
		return $this->_prixArticle;
	}

	/**
	 * Set the value of _prixArticle
	 *
	 * @return  self
	 */ 
	public function setPrixArticle($_prixArticle)
	{
		$this->_prixArticle = $_prixArticle;

		return $this;
	}
}