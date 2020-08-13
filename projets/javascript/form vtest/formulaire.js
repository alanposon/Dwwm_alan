var validation = document.getElementById('bouton_envoi');
var validationPrenom = document.getElementById('prenom');
var validationMail = document.getElementById('mail');
var validationTel= document.getElementById('tel');

var prenom = document.getElementById('prenom');
var mail = document.getElementById('mail');
var tel = document.getElementById('tel');

var mail_m = document.getElementById('mail_manquant');
var prenom_m = document.getElementById('prenom_manquant');
var tel_m = document.getElementById('tel_manquant');

validation.addEventListener('click', f_valid);
validation.addEventListener('click', f_validMail);
validation.addEventListener('click', f_validTel);

validationPrenom.addEventListener('input', f_valid,);
validationMail.addEventListener('input', f_validMail,);
validationTel.addEventListener('input', f_validTel,);

var prenom_v = /^[A-ZÀ-Ý]{1}[a-zà-ý' -]*([ |-|'][A-ZÀ-Ý]{1}[a-zà-ý' -]*)?/;
var mail_v = /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/;
var tel_v = /^(0|\+33[-. ]?)[1-9]{1}([-. ]?[\d]{2}){4}$/;


function f_valid(e) {
    if(prenom.validity.valueMissing){
        e.preventDefault();
        prenom_m.textContent = 'Prénom manquant';
        prenom_m.style.color = 'red';
        prenom.style.borderColor = "red";
        document.getElementById('image_Crouge').style.display="block";
        document.getElementById('image_Vvert').style.display="none";
    }
    else if (prenom_v.test(prenom.value) == false){
        event.preventDefault();
        prenom_m.textContent = 'Format incorrect';
        prenom_m.style.color = 'orange';
        prenom.style.borderColor = "orange";
        document.getElementById('image_Crouge').style.display="none";
        document.getElementById('image_Vvert').style.display="none";
    }
    else{
        prenom_m.textContent = '';
        prenom.style.borderColor = "rgb(0,255,0)";
        document.getElementById('image_Crouge').style.display="none";
        document.getElementById('image_Vvert').style.display="block";
    }
}

function f_validMail(e) {
    if(mail.validity.valueMissing){
        e.preventDefault();
        mail_m.textContent = 'mail manquant';
        mail_m.style.color = 'red';
        mail.style.borderColor = "red";
        document.getElementById('image_CrougeMail').style.display="block";
        document.getElementById('image_VvertMail').style.display="none";
    }
    else if (mail_v.test(mail.value) == false){
        event.preventDefault();
        mail_m.textContent = 'Format incorrect';
        mail_m.style.color = 'orange';
        mail.style.borderColor = "orange";
        document.getElementById('image_CrougeMail').style.display="none";
        document.getElementById('image_VvertMail').style.display="none";
    }
    else{
        mail_m.textContent = '';
        mail.style.borderColor = "rgb(0,255,0)";
        document.getElementById('image_CrougeMail').style.display="none";
        document.getElementById('image_VvertMail').style.display="block";
    }
}

function f_validTel(e) {
    if(tel.validity.valueMissing){
        e.preventDefault();
        tel_m.textContent = 'tel manquant';
        tel_m.style.color = 'red';
        tel.style.borderColor = "red";
        document.getElementById('image_CrougeTel').style.display="block";
        document.getElementById('image_VvertTel').style.display="none";
    }
    else if (tel_v.test(tel.value) == false){
        event.preventDefault();
        tel_m.textContent = 'Format incorrect';
        tel_m.style.color = 'orange';
        tel.style.borderColor = "orange";
        document.getElementById('image_CrougeTel').style.display="none";
        document.getElementById('image_VvertTel').style.display="none";
    }
    else{
        tel_m.textContent = '';
        tel.style.borderColor = "rgb(0,255,0)";
        document.getElementById('image_CrougeTel').style.display="none";
        document.getElementById('image_VvertTel').style.display="block";
    }
}