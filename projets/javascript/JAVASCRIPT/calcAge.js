function afficherAge(rep) {



    var dateNaissance = prompt(" saisi ton année de naissance ");
    var calcAge = (new Date()).getFullYear() - dateNaissance;
    if (result >= 18 && result < (new Date()).getFullYear()) {
        {
            alert("Vous avez " + calcAge + "ans .Vous etes mageur.");
        }
else if((result < 18) && (result > 0)) {
            alert('Tu es mineur');
        }
        else {
            alert('Information incorrect');
        }
    }
    afficherAge(rep);