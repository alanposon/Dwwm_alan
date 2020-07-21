var nom = document.getElementById('nom'); // je vais chercher mon id nom 
var prenom = document.getElementById('prenom'); 
var numero = document.getElementById('numero'); 

nom.addEventListener("input", testNom); // quand j'ecrit dans l'input nom sa declanche ma fonction test
prenom.addEventListener("input", testPrenom);
numero.addEventListener("input", testNumero);

chercheNom = new regExp("^[A-Za-z]{2,}$"); // je test si cest bien des lettres et mini 2 
cherchePrenom = new regExp("^[A-ZÀ-Ý]{1}[a-zà-ý '-]*$");
chercheNumero = new regExp("^(0|\+33)[\d]([-./ ]?[\d]{2}){4}$");

function testNom() { // tester mon nom
    if (!chercheNom.test(nom.value)) // si le test est pas bon , message d'erreur en alerte
        alert("erreur sur la verification du nom ");

}

function testPrenom() { // tester mon Prenom
    if (!cherchePrenom.test(prenom.value)) // si le test est pas bon message erreur en alerte
        alert("erreur sur la verification du prenom ");

}


function testNumero() { // tester Numero
    if (!chercheNumero.test(numero.value)) // si le test est pas bon message erreur en alerte
        alert("erreur sur la verification du numero de telephone ");

}