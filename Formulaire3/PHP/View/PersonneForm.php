<?php
$mode = $_GET["mode"];
if ($mode != "ajout")
{
    $id = $_GET["id"];
    $p = PersonneManager::getById($id);
}
echo '
    <div class="formulaire">
        <form action="index.php?action=PersonneAction&mode=' . $mode . '" method = "POST">

          <label for="nom">Nom : </label>
          <input type="text" id="nom" name="nom" placeholder="Tape ton nom"  required autofocus  ';
if ($mode != "ajout")
{
    echo 'value ="' . $p->getNom() . '"';
}

echo ' ><br/>';
if ($mode != "ajout")
{
    echo '<input type="text" id="idPersonne" name="idPersonne" hidden value = "' . $p->getIdPersonne() . '">';
}

echo '     <label for="prenom">Prenom : </label>
          <input type="text" id="prenom" name="prenom" placeholder="Tape ton prenom" required ';
if ($mode != "ajout")
{
    echo 'value ="' . $p->getPrenom() . '"';
}

echo '
          ><br/>

          <label for="adresse">Adresse : </label>
          <input type="text" id="adresse" name="adresse" placeholder="10 Allée Colin" required ';
if ($mode != "ajout")
{
    echo 'value ="' . $p->getAdresse() . '"';
}

echo '><br/>

          <label for="codePostal">Code postal : </label>
          <input type="text" id="codePostal" name="codePostal" placeholder="75000" required ';
if ($mode != "ajout")
{
    echo 'value ="' . $p->getCodePostal() . '"';
}

echo '><br/>

          <label for="ville">Ville : </label>
          <input type="text" id="ville" name="ville" placeholder="Paris" required ';
if ($mode != "ajout")
{
    echo 'value ="' . $p->getVille() . '"';
}

echo '><br/>

          <label for="sexe">Sexe : </label>
          <select id="sexe" name="sexe" required>
            <option value="vide"></option>
            ';
echo '<option value="masculin"';
if ($mode != "ajout")
{
    if ("masculin" == $p->getSexe())
    {
        echo 'selected';
    }
}
echo '>Masculin</option>';
echo '<option value="feminin"';
if ($mode != "ajout")
{
    if ("feminin" == $p->getSexe())
    {
        echo 'selected';
    }
}
echo '>Féminin</option>';
echo '<option value="non-binaire"';
if ($mode != "ajout")
{
    if ("non-binaire" == $p->getSexe())
    {
        echo 'selected';
    }
}
echo '>non-binaire</option>';
echo '          </select><br/>

          <button id="submit" type="submit ">';
switch ($mode)
{
    case "ajout":echo 'Ajouter';
        break;
    case "modif":echo 'Modifier';
        break;
    case "suppr":echo 'Supprimer';
        break;
}
echo '</button>

        </form>
    </div>
</body>';
