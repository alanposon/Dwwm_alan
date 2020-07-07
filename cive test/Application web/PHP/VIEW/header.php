<?php
//Attribution des variables de session
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$matricule = (isset($_SESSION['matricule'])) ? $_SESSION['matricule'] : '';
?>

<body>
    <header>
        <div>

           

            <div id="container">
                <div class="haut">
                    <div class="hautH">
                        <div class="logo1">
                            <div><img class="FR" src="IMAGE/fr.jpg" alt="Français"></div>
                            <div><img class="ENG" src="IMAGE/eng.jpg" alt="anglais"></div>
                        </div>
                        <div class="logo2">
                            <div><img class="logoT" src="IMAGE/logoCive.png" alt="logoCive"></div>
                        </div>
                        <div class="logo3">
                            <a href="https://fr.linkedin.com/in/christophe-hinderyckx-aa3444103"><img class="linkedin" src="IMAGE/linkedin.png" alt="LinkedIn">
                        </div>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="index.php?action=acceuil"> Accueil </a></li>
                            <li class="deroulant"><a href="index.php?action=notreMetier"> Notre Métier </a>
                                <ul class="sous">
                                    <li><a href="index.php?action=nosActivitesCIVE"> Nos activités </a></li>
                                    <li><a href="index.php?action=notreParcMachineCIVE"> Notre parc machine </a></li>
                                    <li><a href="index.php?action=nosRealisationsCIVE"> Nos réalisations </a></li>
                                </ul>
                            </li>

                            <li class="deroulant"><a href="index.php?action=HCTS"> HCTS </a>
                                <ul class="sous">
                                    <li><a href="index.php?action=nosActivitesHCTS"> Nos activités </a></li>
                                    <li><a href="index.php?action=notreParcMachineHCTS"> Notre parc machine </a></li>
                                    <li><a href="index.php?action=nosRealisationsHCTS"> Nos réalisations </a></li>
                                </ul>
                            </li>

                            <li><a href="index.php?action=legislation"> Législation </a></li>
                            <li><a href="index.php?action=contact"> Contact </a></li>
                            <li><a href="index.php?action=offreEmploiListe"> Recherche Emploi </a></li>
                            <li><a href="index.php?action=connectionForm"> Connection </a></li>
                    </nav>

                    <h2><?php
                        // si je souhaite afficher ou je me trouve 
                        //echo '<div class="titrePage">'.$titre.'</div>' 
                        ?></h2>
                         <div class="colonne centrer">
                <?php if ($matricule != "") {
                    echo '<div class="centrer">' . $matricule . '</div>
                <div class="centrer"> <a href="index.php?action=deconnectionForm">Déconnecter</a> </div>';
                }
                ?> </div>
