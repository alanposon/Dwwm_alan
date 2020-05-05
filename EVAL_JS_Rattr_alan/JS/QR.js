
//Contient les solutions aux questions
var lesSolutions =[
    "1r"== "Panoramix",
    "2r"== "Lucky Luke",
    "3r"=="Tom",
    "4r"== "Kev Adams",
    "5r"=="Luffy",
    "6r"== "un otaku"
];

// les solutions doivent etre egal a la reponse . 
// inputduchamp.value=lareponse 

// je veux faire un tableau avec des comparatif des reponses 
// des quil y aura une mauvaise reponse sa compte 1 sinon sa compte pas 
// si a la fin du test aucune mauvaise reponse a etait trouver ( donc total 0 ) on pourra soumettre le formulaire 
// et dire bon a la personne 
// var TErreur = { // il est vide a la base des quil y a une erreur il prend +1 
//     "Que1":0, "Que2":0, "Que3":0, "Que4":0, "Que5":0, "Que6":0
/************test  */
// var allInputs = document.getElementsByTagName("input"); 
// for (i=0; i < allInputs.length; i++){
//     allInputs[i].addEventListener("change", verification ); 

// }
// *************je prend mes id pour les stocker dans des variables  */

var Que1 = document.getElementById("1r");
var Que2 = document.getElementById("2r");
var Que3 = document.getElementById("3r");
var Que4 = document.getElementById("4r");
var Que5 = document.getElementById("5r");
var Que6 = document.getElementById("6r");


// je vais capter les inputs contenant les valeurs 
// que = champ ayant la reponse a la question 
Que1.addEventListener("change", Verification);
Que2.addEventListener("change", Verification);
Que3.addEventListener("change", Verification);
Que4.addEventListener("change", Verification);
Que5.addEventListener("change", Verification);
Que6.addEventListener("change", Verification);

var restart = document.getElementById("reset");
restart.addEventListener("click", reload);
// quand je click sur le bouton reset sa m'active la fonction reload
// qui remet mes champs vide 


// on va capter le bouton soumettre 
// Afin d'appliquer la fonction Soumettre, nous devons d'abord récupérer l'id 
// On crée une variable contenant l'id ( comme dans l'étape 1)

var boutonSoumettre = document.getElementById("soumettre");
// on pose l'action quand on clique sur le bouton sa active la fonction soumettre 
boutonSoumettre.addEventListener("click", soumettre);


// creation de la fonction soumettre 
// elle permet de de valider tout les champs entrer 


// fuction comparatif(){ 

// }

 function soumettre(){
   

        
// on verifie que nos reponse sont les memes que les reponses attendu 
        for (var key in TErreur){ // pour la clef dans le tableau d'erreur 
            if (TErreur[key]==0) // si il y a une erreur on met faux 
            return false ; 
        }

        // lance le la soumission 
       soumettre(); 
        document.getElementById("soumettre").disabled=false; // on prend l'id de soumettre et on met le bouton soumettre desactiver 
        return true ; 
    }




function Verification() {
    // Cette variable contient id de l'input message 
   // var monInput = event.target; 
    var txtAff = this.id + "Message"; // grace au this on touche au gestionnaire qui permet de modif 
    // puis on est sur l'id et on modifie sont message 

    if (!this.checkValidity()) { // quand le check validity est different de se qu'on veut sa retourne mauvais format 
        document.getElementById(txtAff).innerHTML = ("Format incorrect");
       // txtAff.innerHTML = "Format incorrect"; 
        TErreur[monInput.id] = 0; 
    }
    else if (txtAff == '') { // si le champ est vide 
        document.getElementById(txtAff).innerHTML = ("champ vide ");
    }
    else {
        document.getElementById(txtAff).innerHTML = ("format correct");
    }
}

function reload() {

    // on remet a vide tout les champs des inputs 
    Que1.value = "";
    Que2.value = "";
    Que3.value = "";
    Que4.value = "";
    Que5.value = "";
    Que6.value = "";

    // on recupere les id des div qui affiche le message bon ou mauvais et on met rien tant quil y a rien ecrit 
    document.getElementById("1rMessage").innerHTML = "";
    document.getElementById("2rMessage").innerHTML = "";
    document.getElementById("3rMessage").innerHTML = "";
    document.getElementById("4rMessage").innerHTML = "";
    document.getElementById("5rMessage").innerHTML = "";
    document.getElementById("6rMessage").innerHTML = "";
}