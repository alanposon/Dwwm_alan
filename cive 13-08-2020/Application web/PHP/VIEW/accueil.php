<?php
// inserer le prenom 
// $prenomUtilisateur = (isset($_SESSION['nom'])) ? $_SESSION['prenom'] : 1;
// echo  $prenomUtilisateur ;
//  $date = (isset($_SESSION['dateDernierAccident'])) ? $_SESSION['dateDernierAccident'] : TempsSansAccident::getDateDernierAccident();
//  echo  'voici la date :'.$date;
// 
?>
<html>

<div class="bandeau">

    <div id="homme">
        <h2><?php echo TexteManager::getTexte("50 jours sans accident !"); ?><h2>
                <img src="IMAGE/homme.gif" alt="hommeMarche">
    </div>
    <script src="JAVASCRIPT/homme.js"></script>
    
</div>

<div id="slider">

    <div id="slides">

        <figure id="slide1">
            <img src="IMAGE/soudure.jpg" alt="Une première image">
            <figcaption><?php echo TexteManager::getTexte("Soudure"); ?></figcaption>
        </figure>
        <figure id="slide2">
            <img src="IMAGE/chaudronnerie.jpg" alt="Une deuxième image">
            <figcaption><?php echo TexteManager::getTexte("Chaudronnerie"); ?></figcaption>
        </figure>
        <figure id="slide3">
            <img src="IMAGE/tuyauteur.jpg" alt="Une troisième image">
            <figcaption><?php echo TexteManager::getTexte("Tuyauterie"); ?></figcaption>
        </figure>
    </div>

</div>


<div class="bas1 ">
    <div class="basDroite">

        <img class="veritasI" src="IMAGE/veritas.png" alt="" />
        <img class="maseI" src="IMAGE/mase.png" alt="logoMase" />
        <img class="cefriI" src="IMAGE/cefri.png" alt="" />
        <img class="edfI" src="IMAGE/edf.png" alt="" />

    </div>
</div>



<div class="DescCIVE basPoly">

    <div class="CiveLogoText">

        <div class="introBG">
            <img src="IMAGE/logoCive.png" alt="logo CIVE">
        </div>

        <div class="basGaucheD">
            <?php echo TexteManager::getTexte("veritable"); ?>
        </div>

    </div>

    <div class="photoCive">
        <img src="IMAGE/entreprise.png" alt="entreprise CIVE">
    </div>

</div>


<div class="basAccueil basPoly">
    <table>
        <tbody>
            <tr>
                <td>
                    <div class="fondOrange">
                        <h2>CIVE</h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2> <?php echo TexteManager::getTexte("histoire"); ?> </h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2> <?php echo TexteManager::getTexte("effectif"); ?> </h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("chiffre"); ?> </h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2005</h3>
                </td>
                <td>
                    <p>- Création de l'entreprise</p>
                    <p>- Activités dans l'industrie </p>
                    <p>- Activités en atelier</p>
                </td>
                <td>
                    <h3>5</h3>
                </td>
                <td>
                    <h3>100%</h3>
                    <h3>0%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2008</h3>
                </td>
                <td>
                    <p>- 1éres activités dans le nucléaire avec risques géneriques</p>
                </td>
                <td>
                    <h3>22</h3>
                </td>
                <td>
                    <h3>60%</h3>
                    <h3>40%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2011</h3>
                </td>
                <td>
                    <p>- Obtention de la certification CEFRI</p>
                    <p>- 1 éres acrivités dans le nucléaire en zone contrôlée </p>
                </td>
                <td>
                    <h3>31</h3>
                </td>
                <td>
                    <h3>30%</h3>
                    <h3>70%</h3>
                </td>

            </tr>
            <tr>
                <td>
                    <h3>2013</h3>
                </td>
                <td>
                    <p>- Obtention de la certification ISO 9001</p>
                    <p>- Réorganisation fonctionnelle dans l'entreprise </p>
                </td>
                <td>
                    <h3>43</h3>
                </td>
                <td>
                    <h3>10%</h3>
                    <h3>90%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2014</h3>
                </td>
                <td>
                    <p>- Obtention de la certification MASE</p>
                    <p>- Engagement dans une démarche Sécurité Santé Environnement </p>
                </td>
                <td>
                    <h3>42</h3>
                </td>
                <td>
                    <h3>20%</h3>
                    <h3>80%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2016</h3>
                </td>
                <td>
                    <p>- Intégration à des groupements préstataires EDF (GIPNO)</p>
                </td>
                <td>
                    <h3>40</h3>
                </td>
                <td>
                    <h3>20%</h3>
                    <h3>80%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2017</h3>
                </td>
                <td>
                    <p>- Investissement dans un nouveau bâtiment</p>
                    <p>- Nouvel atelier de 800m²</p>
                </td>
                <td>
                    <h3>39</h3>
                </td>
                <td>
                    <h3>30%</h3>
                    <h3>70%</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>2018</h3>
                </td>
                <td>
                    <p>- Obtention de la qualification UTO EDF</p>
                    <p>- Possibilité de répondre en cas 1 aux appels d'offres EDF</p>
                </td>
                <td>
                    <h3>40</h3>
                </td>
                <td>
                    <h3>40%</h3>
                    <h3>60%</h3>
                </td>
            </tr>
            <td>

            </td>
            <td>
            </td>
            <td></td>
            <td>
                <p><i>Notre chiffre d'affaire en Euro est en constante évolution .</i> </p>
            </td>
            </tr>
        </tbody>
    </table>
</div>


<div class="basClientFourn basPoly">

    <table>
        <tbody>
            <tr>
                <td>
                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("Nos clients "); ?> </h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("Leurs Logo"); ?> </h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ACTEMIUM</td>
                <td><img src="IMAGE/actemium.png" width="80" height="40" alt="ACTEMIUM"></td>
            </tr>
            <tr>
                <td>BOCCARD</td>
                <td><img src="IMAGE/BOCCARD.png" width="80" height="40" alt="BOCCARD"></td>
            </tr>
            <tr>
                <td>EDF</td>
                <td><img src="IMAGE/EDFF.png" width="80" height="40" alt="EDF"></td>
            </tr>
            <tr>
                <td>ENDEL DGA/ENGIE</td>
                <td><img src="IMAGE/ENDELDGA.png" width="120" height="60" alt="ENDEL DGA"></td>
            </tr>

            <tr>
                <td>EIFFAGE</td>
                <td><img src="IMAGE/EIFFAGE.png" width="80" height="40" alt="EIFFAGE"></td>
            </tr>

            <tr>
                <td>FIVES NORDON EMERSON</td>
                <td><img src="IMAGE/FIVESNORDONEMERSON.png" width="80" height="40" alt="FIVES NORDON EMERSON"></td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <td>

                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("Nos clients "); ?> </h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("Leurs Logo"); ?> </h2>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ORTEC</td>
                <td><img src="IMAGE/ORTEC.png" width="80" height="40" alt="ORTEC"></td>
            </tr>
            <tr>
                <td>RAMERY </td>
                <td><img src="IMAGE/RAMERY.png" width="80" height="40" alt="RAMERY"></td>
            </tr>
            <tr>
                <td>NGE FONDATION</td>
                <td><img src="IMAGE/NGE FONDATION.png" width="80" height="40" alt="NGE FONDATION"></td>
            </tr>

            <tr>
                <td>ORYS</td>
                <td><img src="IMAGE/ORYS.png" width="80" height="40" alt="ORYS"></td>
            </tr>
            <tr>
                <td>PONTICELLI</td>
                <td><img src="IMAGE/PONTICELLI.png" width="80" height="40" alt="PONTICELLI"></td>
            </tr>

            <tr>
                <td> SNCF</td>
                <td><img src="IMAGE/SNCF.png" width="80" height="50" alt="SNCF"></td>
            </tr>
        </tbody>
    </table>


</div>


<div class="bas6 basPoly" <table>
    <tbody>
        <tr>
            <td>
                <div class="fondOrange">
                    <h2><?php echo TexteManager::getTexte("Nos fournisseurs "); ?></h2>
                </div>
            </td>

        </tr>
        <tr>
            <td>Des fournisseurs uniques à moins de 20 minutes pour 90% de nos activités avec lesquelles
                un partenariat s'est créé depuis 2005, ce qui permet de garantir un service réactif et de
                qualité. </td>
        </tr>


    </tbody>
    </table>

</div>

<div class="bas7 basPoly">

    <table>
        <tbody>
            <tr>
                <td>
                    <div class="fondOrange">
                        <h2> <?php echo TexteManager::getTexte("equipe"); ?></h2>
                    </div>
                </td>
                <td>
                    <div class="fondOrange">
                        <h2><?php echo TexteManager::getTexte("Savoir"); ?></h2>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <h3>Les compétences sur le terrain :
                    </h3>
                    <p>> Tuyauteur</p>
                    <p>> Soudeur</p>
                    <p>> Monteur</p>
                    <p>> Encadrement technique</p>
                    <p>> Encadrement QSRE</p>
                    <h3>Le maintien des compétences se fait régulierement :</h3>
                    <p>> Par des exercices en atelier</p>
                    <p>> Les ateliers de dextérité</p>
                    <p>> Par le passage en formations</p>
                </td>
                <td>
                    <h3>Nous réalisons differentes ativités :</h3>
                    <p>> Tuyauterie-soudage</p>
                    <p>> Métallerie-serrurerie</p>
                    <p>> Chaudronnerie qualifiée</p>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="fondOrange">
                        <h2> <?php echo TexteManager::getTexte("800 M² d'atelier de production"); ?></h2>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <h3>Nous possédons un atelier de production <br> avec plusieurs machines permettant <br>la préfabrication de
                        tuyauterie,<br> de structures métaliques... </h3>
                    <p>> Des machines de découpe performantes : découpeur plasma, scie automatique...</p>
                    <p>> Des machines pour plier la matiére : presse plieuse, cintreuse...</p>
                    <p>> Des machines pour percer :poiçonneuse,perceuse à colonne... </p>
                </td>

            </tr>
            <tr>
                <td>

                    <h2><?php echo TexteManager::getTexte("Les secteurs"); ?></h2>
</div>



<tr>
    <td>
        <h3>Tertiaires | Industriels | Nucléaires</h3>
    </td>

</tr>
<tr>
    <td>
        <div class="fondOrange">
            <h3> <?php echo TexteManager::getTexte(" Une mobilité géographique étendue dans différents secteurs"); ?></h3>
        </div>
    </td>
</tr>

<tr>
    <td>
        <p>La Cive travaille sur le territoire NATIONAL,<br> INTERNATIONAL, dans tous types
            d'industries,<br>
            dans le nucléaire et dans son atelier de 800 m². </p>
    </td>
    <td> <img src="IMAGE/carte.png" alt="carte des centrales"></div>
    </td>

</tr>
</tbody>
</table>


</html>