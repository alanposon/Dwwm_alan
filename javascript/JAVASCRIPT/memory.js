var Cartes = ["0", "1", "2", "3", "4", "5", "6", "7"];
function affichageImage() {
    var image = document.getElementsByClassName("carte");
    for (let i = 0; i < Cartes.length; i++) {
        image.innerHTML = '<img src="../image/fond.jpg"/>'
    }
}
affichageImage();