var validation = document.getElementById('bouton_envoi');
var validationMatricule = document.getElementById('matricule');
var validationMotDePasse = document.getElementById('motDePasse');


var matricule = document.getElementById('matricule');
var motDePasse = document.getElementById('motDePasse');


var matricule_m = document.getElementById('matricule_manquant');
var motDePasse_m = document.getElementById('motDePasse_manquant');


validation.addEventListener('click', f_valid);
validation.addEventListener('click', f_validMotDePasse);


validationMatricule.addEventListener('input', f_valid,);
validationMotDePasse.addEventListener('input', f_validMotDePasse,);


var matricule_v = /^(0|\+33[-. ]?)[1-9]{1}([-. ]?[\d]{2}){4}$/;;
var MotDePasse_v = /^(0|\+33[-. ]?)[1-9]{1}([-. ]?[\d]{2}){4}$/;;



function f_valid(e) {
    if(matricule.validity.valueMissing){
        e.preventDefault();
        matricule_m.textContent = 'matricule manquant';
        matricule_m.style.color = 'red';
        matricule.style.borderColor = "red";
        document.getElementById('image_Crouge').style.display="block";
        document.getElementById('image_Vvert').style.display="none";
    }
    else if (matricule_v.test(matricule.value) == false){
        event.preventDefault();
        matricule_m.textContent = 'Format incorrect';
        matricule_m.style.color = 'orange';
        matricule.style.borderColor = "orange";
        document.getElementById('image_Crouge').style.display="none";
        document.getElementById('image_Vvert').style.display="none";
    }
    else{
        matricule_m.textContent = '';
        matricule.style.borderColor = "rgb(0,255,0)";
        document.getElementById('image_Crouge').style.display="none";
        document.getElementById('image_Vvert').style.display="block";
    }
}

function f_validMotDePasse(e) {
    if(motDePasse.validity.valueMissing){
        e.preventDefault();
        motDePasse_m.textContent = 'motDePasse manquant';
        motDePasse_m.style.color = 'red';
        motDePasse.style.borderColor = "red";
        document.getElementById('image_CrougemotDePasse').style.display="block";
        document.getElementById('image_VvertmotDePasse').style.display="none";
    }
    else if (motDePasse_v.test(motDePasse.value) == false){
        event.preventDefault();
        motDePasse_m.textContent = 'Format incorrect';
        motDePasse_m.style.color = 'orange';
        motDePasse.style.borderColor = "orange";
        document.getElementById('image_CrougeMotDePasse').style.display="none";
        document.getElementById('image_VvertMotDePasse').style.display="none";
    }
    else{
        motDePasse_m.textContent = '';
        motDePasse.style.borderColor = "rgb(0,255,0)";
        document.getElementById('image_CrougeMotDePasse').style.display="none";
        document.getElementById('image_VvertMotDePasse').style.display="block";
    }
}

