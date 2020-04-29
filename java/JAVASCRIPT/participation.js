

    var repas = prompt("Quelle est le prix du repas ?");
    var salaire = prompt("Quelle est t'on salaire ?");
    var mar = prompt("Et tu marié ? o/n");
    var part = 0;
    var nbEnfant;
    var total;

    if (mar == "o") {
        part = 25;
    }
    else
    {
            part = 20;
     }
    nbEnfant = prompt("Combien d'enfant as tu ?");
        if (nbEnfant > 0) {
            part = part + (nbEnfant * 10);
        }
    if (salaire < 1200) {
        part = part + 10;
    }
    if (part > 50) {
        part = 50;
    }
    total = repas * (part / 100);
  alert("Votre participation est de : " + total + " euro");
