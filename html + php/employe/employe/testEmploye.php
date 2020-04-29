<?php

function chargerClasse($classe){
    require $classe . ".class.php";
}
spl_autoload_register("chargerClasse");
require "head.php";
$dateEmbauche1 = new DateTime("11-03-2001");
$dateEmbauche2 = new DateTime("03-06-1997");
$dateEmbauche3 = new DateTime("27-04-1999");
$dateEmbauche4 = new DateTime("09-09-1978");
$dateEmbauche5 = new DateTime("17-11-2011");


$agence[] = new Agence(["nom"=>"Agence 1", "adresse"=>"27 rue de Paris", "codePostal"=>"59240", "ville"=>"Dunkerque", "modeRestauration"=>"Tickets Resto"]);
$agence[] = new Agence(["nom"=>"Agence 2", "adresse"=>"13 rue de Dunkerque", "codePostal"=>"75000", "ville"=>"Paris", "modeRestauration"=>"Restaurant"]);
$agence[] = new Agence(["nom"=>"Agence 3", "adresse"=>"4 rue des crevettes", "codePostal"=>"59000", "ville"=>"Lille", "modeRestauration"=>"Restaurant"]);

$dateNaissance1 = new DateTime("13-05-2001");
$dateNaissance2 = new DateTime("07-04-2005");
$dateNaissance3 = new DateTime("19-01-2008");
$dateNaissance4 = new DateTime("23-09-2015");
$dateNaissance5 = new DateTime("29-08-2011");
$dateNaissance6 = new DateTime("01-02-1998");

$enfant[0][] = new Enfant(["nom"=>"Ducoin", "prenom"=>"Philippe","dateNaissance"=>$dateNaissance1]);
$enfant[0][] = new Enfant(["nom"=>"Ducoin", "prenom"=>"Ludivine","dateNaissance"=>$dateNaissance2]);
$enfant[1][] = new Enfant(["nom"=>"Marc", "prenom"=>"Tony","dateNaissance"=>$dateNaissance3]);
$enfant[1][] = new Enfant(["nom"=>"Marc", "prenom"=>"Marc","dateNaissance"=>$dateNaissance4]);
$enfant[2][] = new Enfant(["nom"=>"Duchemin", "prenom"=>"Louis", "dateNaissance"=>$dateNaissance5]);
$enfant[3][] = new Enfant(["nom"=>"Dupont", "prenom"=>"Louis","dateNaissance"=>$dateNaissance6]);

$emp[] = new Employe(["nom"=>"Ducoin", "prenom"=>"Ludovic", "dateEmbauche"=>$dateEmbauche1, "poste"=>"Cadre", "salaireBrutAnnuel"=>"23000", "service"=>"Comptabilité", "agence"=>$agence[0],"enfants"=>$enfant[0]]);
$emp[] = new Employe(["nom"=>"Marc", "prenom"=>"Isabelle", "dateEmbauche"=>$dateEmbauche2, "poste"=>"Employé", "salaireBrutAnnuel"=>"21000", "service"=>"Comptabilité", "agence"=>$agence[2],"enfants"=>$enfant[1]]);
$emp[] = new Employe(["nom"=>"Toto", "prenom"=>"Michael", "dateEmbauche"=>$dateEmbauche3, "poste"=>"Cadre", "salaireBrutAnnuel"=>"22000", "service"=>"Commercial", "agence"=>$agence[0]]);
$emp[] = new Employe(["nom"=>"Duchemin", "prenom"=>"Lucas", "dateEmbauche"=>$dateEmbauche4, "poste"=>"Employé", "salaireBrutAnnuel"=>"20000", "service"=>"Comptabilité", "agence"=>$agence[1],"enfants"=>$enfant[2]]);
$emp[] = new Employe(["nom"=>"Dupont", "prenom"=>"Elliot", "dateEmbauche"=>$dateEmbauche5, "poste"=>"Cadre", "salaireBrutAnnuel"=>"22000", "service"=>"Commercial", "agence"=>$agence[1],"enfants"=>$enfant[3]]);




foreach ($emp as $elt)
{
    ?>
 <div class="espace"></div>
    <div class="contenu-php">
    <div class="employe">
        <div class="espace"></div>
        <div class="nom">
          <?php echo $elt->getNom() . '  ' . $elt->getPrenom(); ?>
        </div>
        <div class="espace"></div>
</div>
</div>

<div class="espace"></div>
<div class="contenu-2">
        <div class="agence">
         <?php echo $elt->getAgence()->toString(); ?>
        </div>
        <div class="espace"></div>
        <div class="poste">
         <?php echo $elt->getPoste(); ?>
    </div>
    <div class="espace"></div>
    <div class="salaire">
         <?php echo $elt->getSalaireBrutAnnuel(); ?>
    </div>
    <div class="espace"></div>
    <div class="service">
         <?php echo $elt->getService(); ?>
    </div>
    <div class="espace"></div>
    <div class="date">
         <?php echo $elt->getDateEmbauche()->format("d/m/y"); ?>
    </div>
    <div class="espace"></div>
    <div class="anciennete">
    <?php echo $elt->anciennete(); ?>
    </div>
</div>
    <?php
}
?> 
<div class="popup" onclick="getAgence()">Click ici!
  <span class="popuptext" id="myPopup">pour plus de details</span>
</div>