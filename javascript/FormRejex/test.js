var validation = document.getElementById('nom');
var validationPrenom = document.getElementById('prenom');
var validationMail = document.getElementById('mail');
var validationNum = document.getElementById('numero');

var nom = document.getElementById('nom'); // je vais chercher mon id nom 
var prenom = document.getElementById('prenom'); 
var numero = document.getElementById('numero'); 
var mail = document.getElementById('mail');

var nom_m = document.getElementById('nom_manquant'); // je vais chercher mon id nom 
var prenom_m = document.getElementById('prenom_manquant'); 
var numero_m = document.getElementById('numero_manquant'); 
var mail_m = document.getElementById('mail_manquant');

validation.addEventListener('click', f_valid);
validation.addEventListener('click', f_validMail);
validation.addEventListener('click', f_validNum);
validation.addEventListener('click', f_validPrenom);

validationNom.addEventListener("input", testNom); // quand j'ecrit dans l'input nom sa declanche ma fonction test
validationPrenom.addEventListener("input", testPrenom);
validationNumero.addEventListener("input", testNumero);
validationMail.addEventListener("input", testMail);


var chercheNom = new regExp("^[A-Za-z]{2,}$"); // je test si cest bien des lettres et mini 2 
var cherchePrenom = new regExp("^[A-ZÀ-Ý]{1}[a-zà-ý '-]*$");
var chercheNumero = new regExp("^(0|\+33)[\d]([-./ ]?[\d]{2}){4}$");
var chercheMail = new regExp("^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$");

function validation(e){ // tester mon nom
    if(nom.validity.valueMissing){
        e.preventDefault();
        nom_m.textContent = 'nom manquant';
        nom_m.style.color = 'red';
        nom.style.borderColor = "red";
        document.getElementById('Rouge.png').style.display="block";
        document.getElementById('Vert.png').style.display="none";
    }
    else if (chercheNom.test(nom.value) == false){
        event.preventDefault();
        nom_m.textContent = 'Saisi incorrect';
        nom_m.style.color = 'orange';
        nom.style.borderColor = "orange";
        document.getElementById('Rouge.png').style.display="none";
        document.getElementById('Vert.png').style.display="none";
    }
    else{
        nom_m.textContent = '';
        nom.style.borderColor = "rgb(0,255,0)";
        document.getElementById('Rouge.png').style.display="none";
        document.getElementById('Vert.png').style.display="block";
    } // si le test est pas bon , message d'erreur en alerte


}

function testPrenom() { // tester mon Prenom
    if (!cherchePrenom.test(prenom.value)) // si le test est pas bon message erreur en alerte
    "<div class="boutonVert"><img src="Vert.png"/></div>";

}


function testNumero() { // tester Numero
    if (!chercheNumero.test(numero.value)) // si le test est pas bon message erreur en alerte
        alert("erreur sur la verification du numero de telephone ");

}


