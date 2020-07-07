<div class="hautOffre">
    <div class="recherche"> <label for="rechercheSite">Recherche rapide :</label>
        <input type="search" id="rechercheSite" name="rechercheSite" aria-label="Search through site content">

        <button>Recherche</button></div>
    <div class="ajouter"> <a href="index.php?action=ajoutModifOffreEmploi">
            <button type="submit">Ajouter une nouvelle offre</button>
        </a>
    </div>

    <div class="titreA">
        <h2>Offre d'emploi : </h2>
    </div>
</div>

<div class="basOffre">

    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/logoCive.png" alt="logo">
            <div class="numOff">
                <h4>123456</h4>
            </div>
            <div class="entOff">
                <h3>CIVE</h3>
            </div>
            <div class="dateOff">
                <h4>22-07-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Soudeur H/F </h4>
            </div>
            <p>Mission de soudure d'une durée de 4 mois en atelier </p>
            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>';

    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/logoCive.png" alt="logo">
            <div class="numOff">
                <h4>101010</h4>
            </div>
            <div class="entOff">
                <h2>CIVE</h2>
            </div>
            <div class="dateOff">
                <h4>17-08-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Tuyauteur H/F </h4>

            </div>
            <p> Mission de tuyauterie d'une durée de 23 mois en deplacement </p>
            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>
    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/HCTS.PNG" alt="logo">
            <div class="numOff">
                <h4>660055</h4>
            </div>
            <div class="entOff">
                <h2>HCTS</h2>
            </div>
            <div class="dateOff">
                <h4>15-10-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Chaudronnier H/F </h4>
            </div>
            <p>mission de Chaudronnerie d'une durée de 2 mois en deplacement </p>
            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>
    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/HCTS.PNG" alt="logo">
            <div class="numOff">
                <h4>123321</h4>
            </div>
            <div class="entOff">
                <h2>HCTS</h2>
            </div>
            <div class="dateOff">
                <h4>15-03-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Soudeur H/F </h4>
            </div>
            <p>mission de soudage nucléaire d'une durée de 2 mois </p>
            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>
    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/logoCive.png" alt="logo">
            <div class="numOff">
                <h4>753951</h4>
            </div>
            <div class="entOff">
                <h2>CIVE</h2>
            </div>
            <div class="dateOff">
                <h4>15-10-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Tuyauteur H/F </h4>
            </div>
            <p>mission de Tuyauteur AgroAlimentaire d'une durée de 2 mois en deplacement </p>
            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>
    <div class="offre">
        <div class="inter">
            <img class="LC" src="IMAGE/HCTS.PNG" alt="logo">
            <div class="numOff">
                <h4>852456</h4>
            </div>
            <div class="entOff">
                <h2>HCTS</h2>
            </div>
            <div class="dateOff">
                <h4>15-12-2020</h4>
            </div>
            <div class="descOff">
                <h4>Mission Chaudronnier H/F </h4>
            </div>
            <p>mission de Chaudronnerie nucleaire d'une durée de 2 mois en deplacement </p>

            <a href="index.php?action=ajoutModifOffreEmploi">
                <button type="submit">Modifier</button>
            </a>
            <input type="submit" value="supprimer" />
        </div>
    </div>









    <?php
    $affichage = '<div class="liste"><h2>Offre d emploi</h2>
        <div class="entete">
        <div class="titre_entete">IdOffreEmploi</div>
        <div class="titre_entete"numeroOffreEmploi</div>
        <div class="titre_entete">entrepriseOffreEmploi</div>
            <div class="titre_entete">dateOffreEmploi</div>
            <div class="titre_entete long">descriptionOffreEmploi</div>
        </div>';
    $listeOffreEmploi = OffreEmploiManager::getList();
    foreach ($listeOffreEmploi as $offre) {
        $affichage .= '<div class="contenuListe">
    <a href="index.php?action=offreEmploiForm&id=' . $offre->getIdOffreEmploi() . '&act=modif">   <div class="contenu"> MODIF </div></a>
    <a href="index.php?action=offreEmploiForm&id=' . $offre->getIdOffreEmploi() . '&act=suppr">   <div class="contenu"> SUPPR </div></a>
    <div class="contenu">' . $offre->getNumeroOffreEmploi() . '</div>
    <div class="contenu">' . $offre->getEntrepriseOffreEmploi() . '</div>
                <div class="contenu">' . $offre->getDateOffreEmploi() . '</div>
                <div class="contenu long">' . $offre->getDescriptionOffreEmploi() . '</div>
   
            </div>';
    }

    $affichage .= '<a class="btncentre" href="index.php?action=offreEmploiForm&act=ajout">Ajoutez une personne</a></div>  ';

    echo $affichage;
