<!DOCTYPE html>
<html>
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists(adresseRoot . "Php/Controller/" . $classe . ".class.php")) {
        require adresseRoot . "Php/Controller/" . $classe . ".class.php";
    }

    if (file_exists(adresseRoot . "Php/Model/" . $classe . ".class.php")) {
        require adresseRoot . "Php/Model/" . $classe . ".class.php";
    }

}
spl_autoload_register("chargerClasse");

// initialise une connection
DbConnect::init();
//Si le titre est indiqué, on l'affiche entre les balises <title>
echo (!empty($titre)) ? '<title>' . TexteManager::getTexte($titre) . '</title>' : '<title> Forum </title>';
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet"  href="<?php echo Parametre::getAdresseRoot(); ?>/CSS/style.css" />
</head>
<body>
	<div id="page">
		<div id="entete">
			<div id="titre">
				<div id="logo">
			 	<img src="<?php echo Parametre::getAdresseRoot(); ?>/Images/logo.png" />
				</div>

				<div id="titre_page">
                <?php echo TexteManager::getTexte("titrePage"); ?>
                </div>
                <div id="drapeaux">
                <a href='<?php echo serverRoot."?lang=FR" ?>' > <img class = "drapeau" src="<?php echo Parametre::getAdresseRoot(); ?>/Images/FR.jpg" /></a>
				<a href='<?php echo serverRoot."?lang=EN" ?>' ><img class = "drapeau" src="<?php echo Parametre::getAdresseRoot(); ?>/Images/EN.jpg" /></a>
				  
                </div>
            </div>
        </div>
        <div id="contenu">
