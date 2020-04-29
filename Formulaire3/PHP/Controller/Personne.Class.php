<?php

class Personne{
	private $_idPersonne;
	private $_nom;
	private $_prenom;
	private $_adresse;
	private $_ville;
	private $_codePostal;
	private $_sexe;
	

	public function getIdPersonne()
	{
		return $this->_idPersonne;
	}

	public function setIdPersonne($_idPersonne)
	{
		$this->_idPersonne = $_idPersonne;
	}	
	public function getNom() {
		return $this->_nom;
	}
	public function setNom($_nom) {
		$this->_nom = $_nom;
	}

	public function getPrenom() {
		return $this->_prenom;
	}
	public function setPrenom($_prenom) {
		$this->_prenom = $_prenom;
	}

	public function getAdresse()
	{
		return $this->_adresse;
	}

	public function setAdresse($_adresse)
	{
		$this->_adresse = $_adresse;

	}

	public function getVille()
	{
		return $this->_ville;
	}

	public function setVille($_ville)
	{
		$this->_ville = $_ville;

	}

	public function getCodePostal()
	{
		return $this->_codePostal;
	}

	public function setCodePostal($_codePostal)
	{
		$this->_codePostal = $_codePostal;

	}

	public function getSexe()
	{
		return $this->_sexe;
	}

	public function setSexe($_sexe)
	{
		$this->_sexe = $_sexe;

	}


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