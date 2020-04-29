<?php
$mode = $_GET["m"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $client = ClientManager::findById($id);
}
echo '<div class="formulaire">
        <form action="index.php?action=ClientAction&m=' . $mode . '" method = "POST">
            <div> 
                <label for="nom">Nom : </label>
                <input type="text" id="nom" name="nom" placeholder="Nom du client"  required autofocus  ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getNom() . '"';
                    }
echo '          >
            </div>';
if ($mode != "ajout")
{
    echo '  <input type="text" id="idClient" name="idClient" hidden value = "' . $client->getIdClient() . '">';
}
echo '      <div>  
                <label for="prenom">Prenom : </label>
                <input type="text" id="prenom" name="prenom" placeholder="Prenom du client" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getPrenom() . '"';
                    }
echo '          >
            </div>
            <div> 
                <label for="adresseClient">Adresse : </label>
                <input type="text" id="adresse" name="adresse" placeholder="Adresse du Client" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getAdresse() . '"';
                    }
echo '          >
            </div>
            <div> 
                <label for="codePostal">codePostal : </label>
                <input type="text" id="codePostal" name="codePostal" placeholder="code postal du client" required ';
                    if ($mode != "ajout")
                    {
                        echo 'value ="' . $client->getCodePostal() . '"';
                    }
echo '          >
            </div> 
            <div> 
            <label for="email">email : </label>
            <input type="text" id="email" name="email" placeholder="Adresse email du Client" required ';
                if ($mode != "ajout")
                {
                    echo 'value ="' . $client->getEmail() . '"';
                }
echo '          >
        </div>
        <div> 
        <label for="idVille">idVille : </label>
        <input type="text" id="idVille" name="idVille" hidden value = "' . $client->getIdVille() . '">';
            if ($mode != "ajout")
            {
                echo 'value ="' . $client->getIdVille() . '"';
            }
echo '          >
    </div>';
echo '      <div class="centrer">
                <button class="bouton" id="submit" type="submit ">';
                    switch ($mode)
                    {
                        case "ajout":echo 'Ajouter';
                            break;
                        case "modif":echo 'Modifier';
                            break;
                        case "suppr":echo 'Supprimer';
                            break;
                    }
echo '          </button>
            </div>
        </form>
    </div>';
