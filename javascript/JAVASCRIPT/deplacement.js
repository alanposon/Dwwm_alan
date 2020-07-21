

var mouse_down = false;

var square = document.getElementById("square");
square.addEventListener("mousedown",on_mouse_down_square);

function on_mouse_down_square(event) {
 mouse_down=true; /// repère le bouton enfoncé, 
}

function on_mouse_up(event){
 mouse_down=false; /// repère le bouton relaché
}

// document.onmousemove = on_mouse_move;  Affiche la function renommer 
document.addEventListener("mousemove",on_mouse_move);  

// document.onmouseup = on_mouse_up;
document.addEventListener("mouseup",on_mouse_up);


function on_mouse_move(event) {
  if (mouse_down === true) {
    document.querySelector('#square').style.left = event.clientX+'px';
    document.querySelector('#square').style.top = event.clientY+'px';

  }
}