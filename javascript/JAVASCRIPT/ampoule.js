// ampoule 

// on definit  nos variables 

var ampoule = document.getElementById("ampoule");
var light = 0;

// on affiche notre ampoule et on ajoute un evenement quand on "click"
ampoule.innerHTML = "<img src='../image/buc.jpg' alt=''>"; //  innerHTML va chercher l'image de la fille 
ampoule.addEventListener("click", lightOn); // quuand on clique sa va chercher la fonction light on 

function lightOn() {

    if (light == 0) {
        ampoule.innerHtml = "<img src='../image/sin.jpg' alt=''>";
        light = 1;

    }
    else {
        ampoule.innerHTML = "<img src='../image/buc.jpg' alt=''>";
        light = 0;
    }
}
