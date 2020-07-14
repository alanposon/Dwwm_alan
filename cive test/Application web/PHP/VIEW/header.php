<?php
//Attribution des variables de session
$lvl = (isset($_SESSION['level'])) ? (int) $_SESSION['level'] : 2;
$id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$matricule = (isset($_SESSION['matricule'])) ? $_SESSION['matricule'] : '';
$nom = (isset($_SESSION['nom'])) ? $_SESSION['nom'] : '';
$prenom = (isset($_SESSION['prenom'])) ? $_SESSION['prenom'] : '';
$posteEntreprise = (isset($_SESSION['posteEntreprise'])) ? $_SESSION['posteEntreprise'] : '';



?>

<body>
    <header>
        <div>



            <div id="container">
                <div class="haut">
                    <div class="hautH">

                    
                <div id="titre_page">
                <?php echo TexteManager::getTexte("acceuil"); ?>
                </div>
                <div id="eeee">
                
                </div>


                        <div class="logo1">
                        <a href="index.php?action=lang=FR" >  <img class="FR" src="IMAGE/fr.jpg" alt="Français"></a>
				<a href="index.php?action=lang=FR" ><img class="ENG" src="IMAGE/eng.jpg" alt="anglais"></a>
				 
                            <!-- <div><img class="FR" src="IMAGE/fr.jpg" alt="Français"></div> -->
                            <!-- <div><img class="ENG" src="IMAGE/eng.jpg" alt="anglais"></div> -->
                        </div>
                        <div class="logo2">
                            <div><img class="logoT" src="IMAGE/logoCive.png" alt="logoCive"></div>
                        </div>
                        <div class="logo3">
                            <a href="https://fr.linkedin.com/in/christophe-hinderyckx-aa3444103"><img class="linkedin" src="IMAGE/linkedin.png" alt="LinkedIn">
                        </div>
                        <?php if ($matricule != "") {
                            echo '<div class="fondOrange">' . $nom . ' ' . $prenom . ' ' . $matricule . '</div>';
                        }
                  
                        ?>
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
                            <li><?php if ($lvl== 3) {

                               echo ' <li class="deroulant"><div class="navA"><h3>Administration</h3></div>
                               <ul class="sous">
                               <li><a href="index.php?action=dernierAccidentListe"> MAJ du Dernier accident </a></li>
                               <li><a href="index.php?action=chantierListe"> Gestion des chantiers</a></li>
                               <li><a href="index.php?action=nosRealisationsHCTS"> Nos réalisations </a></li>
                           </ul>
                               </li>';
                            }else{
                                echo '<li><a href="index.php?action=contact"> Contact </a></li>';
                            } ?>
                            

                            <li><?php if ($matricule != "") {

                                    echo '   <a class ="btn btn-success"  href="index.php?action=offreEmploiListeAdmin" > Offre Emploi </a>';
                                } else {

                                    echo ' <a class ="btn btn-success" href="index.php?action=connectionForm" > Offre Emploi </a>';
                                } 
                                ?></li>
 <li><?php if ($matricule != "" && $lvl>1 ) {

echo ' <a class ="btn btn-success"  href="index.php?action=planning" > Planning </a>';
} else {

} ?></li>


                            <li><?php if ($matricule != "") {

                                    echo ' <a class ="btn btn-success"  href="index.php?action=deconnectionForm" > Deconnexion </a>';
                                } else {

                                    echo '   <a class ="btn btn-success"  href="index.php?action=connectionForm" > Connexion </a>';
                                } ?></li>


                    </nav>

                    <h2><?php
                        // si je souhaite afficher ou je me trouve 
                        //echo '<div class="titrePage">'.$titre.'</div>' 
                        ?></h2>