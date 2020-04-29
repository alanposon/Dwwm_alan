

var test = document.getElementsByClassName("cadreV");
for (let i = 0; i < test.length; i++)
    test[i].style.color = "blue";

var p = document.getElementsByTagName("vert");
for (let i = 0; i < p.length; i++)
    p[i].style.backgroundColor = "vert";

var div1 = document.getElementById("cadreV");
div1.addEventListener("click", changeCouleur);
div1.addEventListener("mouseover", changeCouleur);

function changeCouleur() {
   div1.style.color = "red";
}

var color = document.getElementById("cadreB");
color.addEventListener("click", changeCouleur2);
color.addEventListener("mouseover", changeCouleur2);
color.addEventListener("click", changeCouleur3);


function changeCouleur2() {
    color.style.color = "blue";
}

function changeCouleur3() {
    color.style.color = "green";
 }