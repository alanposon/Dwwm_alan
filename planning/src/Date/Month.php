<?php

class Month {
    
    /***** ATTRIBUTS *****/
private $months = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'];

private $month ; 
private $years ; 

/***** ACCESSEURS ******/
public function getMonths()
{
return $this->months;
}
public function setMonths($months)
{
$this->months = $months;
return $this;
}

public function getMonth()
{
return $this->month;
}
public function setMonth($month)
{
$this->month = $month;
return $this;
}

public function getYears()
{
return $this->years;
} 
public function setYears($years)
{
$this->years = $years;
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

     public function toString(){


        return "Tout les mois : " . $this->getMonths($this->getMonth() -1 ) .' un mois : ' . $this->getMonth() . ' l année : ' . $this->getYears() .'.';

     }


 



}



