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
    </script>
    <header>
        <div>

            <div id="container">
                <div class="haut">
                    <div class="hautH">

                        <div class="logo1">
                            <a href="index.php?lang=FR"> <img class="FR" src="IMAGE/fr.jpg" alt="Français"></a>
                            <a href="index.php?lang=EN"><img class="ENG" src="IMAGE/eng.jpg" alt="anglais"></a>
                        </div>
                        <div class="logo2">
                            <!-- pour le switch de logo  -->
                            <?php if ("index.php?action=" == "HCTS") {
                                echo ' <div><img class="logoT" src="./IMAGE/HCTS.png" alt="logoCive"></div>
                        </div>';
                            } else {
                                echo ' <div><img class="logoT" src="./IMAGE/logoCive.png" alt="logoHCTS"></div>
                        </div> ';
                            } ?>

                            <div class="logo3">
                                <a href="https://fr.linkedin.com/in/christophe-hinderyckx-aa3444103" target="_blank"><img class="linkedin" src="IMAGE/linkedin.png" alt="LinkedIn"></a>
                            </div>
                            <?php if ($matricule != "") {
                                echo '<div class="fondOrange">' . $nom . ' ' . $prenom . ' ' . $matricule . '</div>';
                            }
                            ?>
                        </div>

    </header>