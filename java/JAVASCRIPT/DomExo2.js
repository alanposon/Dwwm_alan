var ampoule = document.getElementById("ampoule");
var light = 0;

ampoule.innerHTML ; 
ampoule.addEventListener("click", lightOn);

function lightOn() {
    if (light == 0) {
        ampoule.innerHTML="<>"; /// mettre une image
        light=1;
    }
    else {
        ampoule.innerHTML="<>"; /// mettre une image
        light = 0 ;
    }
}