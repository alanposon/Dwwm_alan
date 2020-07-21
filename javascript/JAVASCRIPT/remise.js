

var prix = parseFloat(prompt("quelle est votre prix"));
var qt = parseInt(prompt("quelle quantité")); 
var total = prix*qt; 
var port = total*0.02 ; 
if (port<6){
    port = 6;
}
var resultat; 

if (total>=500){
    resultat = total - (total *(10/100)); 
}
else if ((total>200)&&(total<499)){
    resultat = total - (total*(10/100))+port; 
}
else if ((total>100)&&(total<200)){
    resultat = total - (total*(5/100))+port; 
}
else {
    resultat = total + port ; 
}
 console.log(" prix a payé : "+resultat+" € pour "+qt+" produits a : "+prix+" €"); 
 alert(" prix a payé : "+resultat); 
