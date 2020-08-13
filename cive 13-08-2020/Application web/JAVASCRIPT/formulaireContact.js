var nom = document.getElementById("nom");
nom.addEventListener("input", verif);

var prenom = document.getElementById("prenom");
prenom.addEventListener("input", verif);

var mail = document.getElementById("mail");
mail.addEventListener("input", verif);

var objet = document.getElementById("objet");
objet.addEventListener("input", verif);

var message = document.getElementById("message");
message.addEventListener("input", verif);

function verif(event) {
    
    var myInput = event.target;
    var imgVerte = (myInput.parentNode).getElementsByClassName("imgVerte")[0];
    var imgRouge = (myInput.parentNode).getElementsByClassName("imgRouge")[0];
    var description = (myInput.parentNode).getElementsByClassName("description")[0];

    if (myInput.value=="") {

        imgVerte.style.visibility = "hidden";
        imgRouge.style.visibility = "hidden";
        description.innerHTML = "champ manquant";

    } else if (!myInput.checkValidity()) {

        imgVerte.style.visibility = "hidden";
        imgRouge.style.visibility = "visible";
        description.innerHTML = "format incorrect";

    } else {
        
        imgVerte.style.visibility = "visible";
        imgRouge.style.visibility = "hidden";
        description.innerHTML = "88";
    }
}