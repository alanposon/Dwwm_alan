
// les prenoms 
var tableau = ["jason", "vessilya", "baptiste","alan"];
document.write(tableau);
// demande des prenoms 
var prenom = prompt("Entrez le prenom à supprimer:");

// trouve la position dans le tableau 
var position = tableau.indexOf(prenom);

//la position differente a la position precedente
if (position != -1) {

    //Retire le prenom / valeur dans le tableau 
    tableau.splice(position, 1);
}

//Afficher le tableau
console.log(tableau);