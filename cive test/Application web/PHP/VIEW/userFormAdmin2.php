<?php

$mode = $_GET["m"];
if ($mode != "ajout") {
    $id = $_GET["id"];
    $Utilisateur = UserManager::findById($id);
}


echo '<div class="formulaire">
        <form action="index.php?action=userActionAdmin&m=' . $mode . '" method = "POST">
            <div> 
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" placeholder="Nom"  required autofocus  ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getNom() . '"';
}
echo '          >
            </div>';
if ($mode != "ajout") {
    echo '  <input type="text" id="idUser" name="idUser" hidden value = "' . $utilisateur->getIdUser() . '">';
}
echo '      <div>  
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom" placeholder="Prenom" required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getPrenom() . '"';
}
echo '          >
            </div>
            <div> 
                <label for="mail">Mail : </label>
                <input type="email" id="mail" name="mail" placeholder="Mail" required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getMail() . '"';
}
echo '          >
            </div>
            <div> 
                <label for="matricule">Matricule : </label>
                <input type="number" id="matricule" name="matricule" placeholder="matricule" required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getMatricule() . '"';
}
echo '          >
            </div> 
            <div> 
            <label for="motDePasse">mot de passe  : </label>
            <input type="password" id="motDePasse" name="motDePasse"  required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getMotDePasse() . '"';
}
echo '          >
        </div>
        <div> 
        <label for="confirm">confirmation : </label>
        <input type="password" id="confirm" name="confirm"  required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getMotDePasse() . '"';
}
echo '          >
    </div>
    <div> 
    <label for="posteEntreprise">Poste en entreprise : </label>
    <input type="text" id="posteEntreprise" name="posteEntreprise" placeholder="1=visiteur 2=employe" required ';
if ($mode != "ajout") {
    echo 'value ="' . $utilisateur->getPosteEntreprise() . '"';
}
echo '          >
</div>';
echo '      <div class="centrer">
                <button class="bouton" id="submit" type="submit ">';
switch ($mode) {
    case "ajout":
        echo 'Ajouter';
        break;
    case "modif":
        echo 'Modifier';
        break;
    case "suppr":
        echo 'Supprimer';
        break;
}
echo '          </button>
            </div>
        </form>
    </div>';
