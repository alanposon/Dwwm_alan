<nav>
    <ul>
        <li><a href="index.php?action=accueil"> <?php echo TexteManager::getTexte("accueil"); ?> </a></li>
        <li class="deroulant"><a href="index.php?action=notreMetier"> <?php echo TexteManager::getTexte("Notre metier"); ?></a>
            <ul class="sous">
                <li><a href="index.php?action=nosActivitesCIVE"><?php echo TexteManager::getTexte("Nos Activités"); ?></a></li>
                <li><a href="index.php?action=notreParcMachineCIVE"><?php echo TexteManager::getTexte("Notre Parc Machines"); ?> </a></li>
                <li><a href="index.php?action=nosRealisationsCIVE"> <?php echo TexteManager::getTexte("Nos Réalisations"); ?> </a></li>
            </ul>
        </li>

        <li class="deroulant"><a href="index.php?action=HCTS"> HCTS </a>
            <ul class="sous">
                <li><a href="index.php?action=nosActivitesHCTS"><?php echo TexteManager::getTexte("Nos Activités"); ?></a></li>
                <li><a href="index.php?action=notreParcMachineHCTS"> <?php echo TexteManager::getTexte("Notre Parc Machines"); ?> </a></li>
                <li><a href="index.php?action=nosRealisationsHCTS"><?php echo TexteManager::getTexte("Nos Réalisations"); ?> </a></li>
            </ul>
        </li>

        <li><a href="index.php?action=legislation"><?php echo TexteManager::getTexte("Législation"); ?></a></li>
        <li><?php if ($lvl == 3) {

                echo '<li class="deroulant"><div class="navA"><h3>Administration</h3></div>
                               <ul class="sous">
                               <li><a href="index.php?action=dernierAccidentListe">';

                echo TexteManager::getTexte("Maj du dernier accident");

                echo '</a></li>
                               <li><a href="index.php?action=chantierListe">';
                echo TexteManager::getTexte("Gestion des chantiers");
                echo  '</a></li>
                             
                           </ul>
                               </li>';
            } else {
                echo '<li><a href="index.php?action=contact">';
                echo TexteManager::getTexte("Contact");
                echo '</a></li>';
            } ?>


        <li><?php if ($matricule != "") {

                echo '   <a class ="btn btn-success"  href="index.php?action=offreEmploiListeAdmin" >';
                echo TexteManager::getTexte("Offre Emploi");
                echo ' </a>';
            } else {

                echo ' <a class ="btn btn-success" href="index.php?action=connectionForm" >';
                echo TexteManager::getTexte("Offre Emploi");
                echo '</a>';
            }
            ?></li>
        <li><?php if ($matricule != "" && $lvl > 1) {

                echo '<li class="deroulant"><a href="index.php?action=planning"> Planning </a>
                                        <ul class="sous">
                                         <li>
                                          <a href="index.php?action=meteo"> Meteo
                                          </a>
                                         </li> 
                                        </ul>';
            } else {
            } ?></li>


        <li><?php if ($matricule != "") { /* Si le matricule est non vide */
                /* redirection vers le formulaire de deconnexion */
                echo '<a class="deconnexion"  href="index.php?action=deconnectionForm" >';
                /* Chercher la traduction */
                echo TexteManager::getTexte("Deconnexion");
                echo '</a>';
            } else {
                /* redirection vers le formulaire de connexion */
                echo '<a class="connexion"  href="index.php?action=connectionForm" >';
                /* Chercher la traduction */
                echo TexteManager::getTexte("Connexion");
                echo '</a>';
            } ?>
        </li>


</nav>