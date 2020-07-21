var test = document.getElementsByClassName("toto");
for (let i = 0; i < test.length; i++)
    test[i].style.color = "red";

var p = document.getElementsByTagName("p");
for (let i = 0; i < p.length; i++)
    p[i].style.backgroundColor = "blue";

var div1 = document.getElementById("test");
div1.addEventListener("click", changeCouleur);
div1.addEventListener("mouseover", changeCouleur);

function changeCouleur() {
   div1.style.color = "white";
}

var div2 = document.getElementById("test2");
div2.addEventListener("click", changeCouleur2);
div2.addEventListener("mouseover", changeCouleur2);
div2.addEventListener("click", changeCouleur3);


function changeCouleur2() {
   div2.style.color = "white";
}

function changeCouleur3() {
    div2.style.color = "green";
 }