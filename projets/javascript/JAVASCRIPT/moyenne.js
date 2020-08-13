var chiffre = parseInt(prompt("Entrez le chiffre  \n"));
var num = 0;
var total = 0;
var max = parseInt(chiffre);
var min = parseInt(chiffre);
if (chiffre != 0) {

    while (chiffre != 0) {

        var chiffre = parseInt(prompt("Entrez le chiffre  \n"));

        if (chiffre < min && chiffre != 0) {
            min = chiffre;
            console.log(min);
        }
        else if (chiffre > max && chiffre != 0) {
            max = chiffre;
            console.log(max);
        }


        total = total + chiffre;

        num++;
    }
    alert("min: " + min + "max: " + max);
    if (num != 0) {
        moyenne = total / num;
    }
    alert("voici le total : " + total);
    alert("voici la moyenne " + moyenne);
}
else {
    alert("aucun chiffre n'a etait inscrit");
}













