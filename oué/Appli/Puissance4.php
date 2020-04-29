
<link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">



font-family: 'Trade Winds', cursive;






























<?php
/**
 * affiche le tableau passé en paramètre pour représenter l'aire de jeu
 *
 * @param [array] $tab          tableau à afficher
 * @return void
 */
function AffichePlateau($tab)
{
    $hauteur = count($tab);
    $largeur = count($tab[0]);
    //on affiche les lettres du tableau en fonction de la taille
    $enteteColonne = "   "; // espace pour la numérotation verticale
    $separateur = "  "; // espace pour la numérotation verticale
    for ($i = 0; $i < $largeur; $i++)
    {
        //on veut faire correspondre 0 à A, 1 à B, 2 à C
        // on prend le code ascii du numero, on ajoute 17 et on retranscrit en lettre car 0 à 48 en code Ascii et A à 65, 1 à 49, B à 66, ...
        $enteteColonne .= " " . ($i + 1) . "  ";
        $separateur .= "----"; //pour chaque case, il faut 4 tirets, on répète l'action en foinction du nombre de cases
    }
    $enteteColonne .= "\n";
    $separateur .= "\n";
    echo $enteteColonne;
    echo $separateur;

    // pour chaque ligne du tableau
    for ($ligne = 0; $ligne < $hauteur; $ligne++)
    {
        $affichage = ($ligne + 1) . " | ";

        // pour chaque colonne du tableau
        for ($colonne = 0; $colonne < $largeur; $colonne++)
        {
            $affichage .= ($tab[$ligne][$colonne]) . " | ";
        }
        echo $affichage . "\n";
        echo $separateur;
    }
}

function AfficheTab($tab)
{
    foreach ($tab as $elt)
    {
        echo $elt . ",";
    }
    echo "\n";

}
/**
 * Affiche un tableau en séparant les éléments par des |
 *
 * @param [array] $tab      tableau à afficher
 * @return void
 */
function AffichageTabMulti($tab)
{
    $hauteur = count($tab);
    $largeur = count($tab[0]);
    echo "hauteur : " . $hauteur . " , largeur : " . $largeur . "\n";
    foreach ($tab as $sousTab)
    {
        foreach ($sousTab as $elt)
        {
            echo $elt . "\t|\t";
        }
        echo "\n";
    }

}
/**
 * prépare le tableau et choisit le joueur qui demarre
 *
 * @param [int] $hauteur                Hauteur souhaitée
 * @param [int] $largeur                largeur souhaitée
 * @return [array] tableau, joueurEnCours
 */
function InitialiseJeu($hauteur, $largeur)
{
    //prépare le tableau et choisit le joueur qui demarre
    $tableau = array_fill(0, $hauteur, array_fill(0, $largeur, " "));
    $joueur = ChangerJoueur(null);
    return [$tableau, $joueur]; // pour retourner 2 valeurs, je dois passer par un tableau contenant 2 cases
}
/**
 * détermine le joueur qui doit jouer
 *
 * @param [int] $j     joueur en cours ou null en debut de partie
 * @return int          le nouveau joueur
 */
function ChangerJoueur($j)
{
    //détermine le joueur qui doit jouer
    $nbJoueur = 2;
    if ($j === null) // c'est le début du jeu, le joueur est choisi aléatoirement
    {
        $joueur = rand(0, $nbJoueur - 1);
    }
    else
    {
        $joueur = ($j + 1) % $nbJoueur; //on incrémente le numéro de joueur, on revient à 1 quand le nombre de joueur est atteint
    }
    return $joueur;
}
/**
 * Renvoi vrai si la case est libre, faux sinon
 *
 * @param [array] $tab          tableau linéaire representant le plateau de jeu
 * @param [int] $ligne          ligne de la case
 * @param [int] $colonne        colonne de la case
 * @return bool
 */
function ColonneJouable($tab, $colonne)
{
    if ($tab[0][$colonne] === " ") // Tant que la ligne 0 est vide elle est jouable .
    {
        return true;
    }
    return false;
}
/**
 * Traduit les coordonnées affichées du tableau en coordonnées linéaires
 *
 * @param [string] $valeurAffichee      valeur saisie par l'utilisateur ex: A2
 * @return int                          numero de la case dans le tableau linéaire
 */
function TrouverHauteur($tab, $colonnejouee)
{
    $hauteur = count($tab);
    for ($i = $hauteur -1; $i >= 0; $i--)
    {
        if ($tab[$i][$colonnejouee] == " ")
        {
            return [$i,$colonnejouee];
        }
    }
}

/**
 * Demande au joueur en cours la case qu'il souhaite jouer
 * Vérifie que les coordonnées sont bonnes
 * Vérifie que cette case est disponible
 * @param [array] $tab              tableau représentant le jeu
 * @return int                      case du tableau choisie
 */
function DemanderColonne($tab)
{
  
    $largeur = count($tab[0]);
    
        do {
            do
            {
                $reponse = readline("Quelle colonne souhaitez vous ?");
            } while (strlen($reponse) != 1);
            $reponse--;
        } while (!($reponse < $largeur && $reponse >= 0) || !ColonneJouable($tab, $reponse)) ;
        return TrouverHauteur($tab, $reponse);
    }
           
/**
 * Met à jour le plateau de jeu avec le symbole pour la case demandée
 *
 * @param [array] $tab          tableau representant le plateau de jeu
 * @param [int] $ligne          ligne de la case à mettre à jour
 * @param [int] $colonne        colonne de la case à mettre à jour
 * @param [char] $symbole       symbole du joueur
 * @return array                le tableau mis à jour
 */
function PlacerPion($tab, $ligne, $colonne, $symbole)
{
    $tab[$ligne][$colonne] = $symbole;
    return $tab;
}
/**
 * renvoi le symbole attribué au joueur
 *
 * @param [int] $joueur          joueur en cours
 * @return string                symbole du joueur
 */
function SymboleJoueur($joueur)
{
    switch ($joueur)
    {
        case 0:
            return "X";
            break;
        case 1:
            return "O";
            break;
        case 2:
            return "S";
            break;
    }
}
/**
 * Simule le jeu d'un joueur
 * Demande la case à jouer
 * Place le pion du joueur
 *
 * @param [int] $joueur             numero du joueur
 * @param [array] $tab              tableau représentant le plateau
 * @return array                    tableau mis à jour
 */
function JoueurEnCoursJoue($joueur, $tab)
{
    $case = DemanderColonne($tab);
    $tab = PlacerPion($tab, $case[0], $case[1], SymboleJoueur($joueur));
    return [$tab, $case[0], $case[1]];
}
/**
 * Renvoi vrai si le tableau est plein
 *
 * @param [array] $tab      tableau
 * @return bool
 */
function TableauPlein($tab)
{
    foreach ($tab as $elt)
    {
        if (in_array(" ", $elt))
        {
            return false;
        }
    }
    return true;
}
/**
 * Détermine si le joueur en cours à gagné à partir de son symbole et de la dernière case jouée
 *
 * @param [array] $tab      plateau de jeu
 * @param [int] $joueur     numero de joueur qui vient de jouer
 * @param [type] $ligne     ligne de la dernière case jouée
 * @param [type] $colonne   colonne de la dernière case jouée
 * @return bool             vrai si le joueur a gagné
 */
function Gagne($tab, $joueur, $ligne, $colonne)
{
    $nbPionPourGagne = 4;
    $symbole = SymboleJoueur($joueur);
    //chercher si la dernière position jouée fait partie de la solution gagnante
    if (
        // horizontal
        CompteAlignes($tab, $ligne, $colonne, 0, 1) + CompteAlignes($tab, $ligne, $colonne, 0, -1) + 1 >= $nbPionPourGagne ||
        // vertical
        CompteAlignes($tab, $ligne, $colonne, 1, 0) + CompteAlignes($tab, $ligne, $colonne, -1, 0) + 1 >= $nbPionPourGagne ||
        // premiere diag
        CompteAlignes($tab, $ligne, $colonne, 1, 1) + CompteAlignes($tab, $ligne, $colonne, -1, -1) + 1 >= $nbPionPourGagne ||
        // 2eme diag
        CompteAlignes($tab, $ligne, $colonne, -1, 1) + CompteAlignes($tab, $ligne, $colonne, 1, -1) + 1 >= $nbPionPourGagne
    )
    {
        return true;
    }

    return false;
}
/**
 * Détermine si la ligne et la colonne passée en paramètre est dans le tableau
 *
 * @param [array] $tab      plateau de jeu
 * @param [int] $lig        ligne visée
 * @param [int] $col        colonne visée
 * @return bool
 */
function EstDansTableau($tab, $lig, $col)
{
    $hauteur = count($tab);
    $largeur = count($tab[0]);
    return ($lig >= 0 && $lig < $hauteur && $col >= 0 && $col < $largeur);
}
/**
 * Compte le nombre de symboles alignés
 *
 * @param [array] $tab      plateau de jeu
 * @param [int] $lig        ligne jouée
 * @param [int] $col        colonne jouée
 * @param [int] $directionLigne     incrément sur la ligne (pour donner la direction à suivre)
 * @param [int] $directionCol    incrément sur la colonne (pour donner la direction à suivre)
 * @return void
 */
function CompteAlignes($tab, $lig, $col, $directionLigne, $directionCol)
{
    $arret = false; // permet d'arreter la recherche soit parce que le symbole suivant n'est pas le meme, soit parceque l'on a atteint la limite du tableau
    $ligCible = $lig; //définit les coordonnées de la case cible
    $colCible = $col;
    $compteur = 0; //compte le nombre de symbole alignés
    $symbole = $tab[$lig][$col]; // symbole recherché
    do
    {
        $ligCible += $directionLigne; //on definir les coordonnées de la case cible
        $colCible += $directionCol;
        if (EstDansTableau($tab, $ligCible, $colCible)) //on vérifie que la cible appartient au tableau
        {
            if ($tab[$ligCible][$colCible] == $symbole) //si c'est le meme symbole, on continue dans cette direction, sinon, on s'arrete
            {
                $compteur++;
            }
            else
            {
                $arret = true;
            }
        }
        else //on a atteint une limite du tableau, on s'arrete
        {
            $arret = true;
        }

    } while (!$arret); // tant qu'une des condition d'arret n'est pas atteinte, on continue dans cette direction
    return $compteur; //on retourne le compteur
}

/**
 * Permet de gérer le jeu
 *
 * @return void
 */
function DemarreJeu()
{
    $hauteurPlateau = 6;
    $largeurPlateau = 7;
    $reponse = InitialiseJeu($hauteurPlateau, $largeurPlateau);
    $plateau = $reponse[0]; // on récupère les paramètres de la fonction
    $joueurEnCours = $reponse[1];

    AffichePlateau($plateau);
    do
    {
        $joueurEnCours = ChangerJoueur($joueurEnCours);
        echo "Le joueur " . ($joueurEnCours + 1) . " joue \n";
        $tabReponse = JoueurEnCoursJoue($joueurEnCours, $plateau);
        $plateau = $tabReponse[0];
        AffichePlateau($plateau);

        $tabplein = TableauPlein($plateau);
        $gagne = Gagne($plateau, $joueurEnCours, $tabReponse[1], $tabReponse[2]);
    } while (!$tabplein && !$gagne);
    if ($gagne)
    {
        echo "Le joueur " . ($joueurEnCours + 1) . " gagne\n";
    }
    else
    {
        echo "égalité\n";
    }
}
/*********************TESTS***************** */
//$tableau = array_fill(0,9,"X");
// $tableau=[[1, 2, " "], [4, 5, 6], [7, 8, 9], [10, 11, 12]];;
//   AffichePlateau($tableau);
// $l=ListeLettreAutorisee(6);
// AfficheTab($l);
// echo ChangerJoueur(null)."\n";
// echo ChangerJoueur(0)."\n";
// echo ChangerJoueur(1)."\n";

//  $reponse=InitialiseJeu(3,4);
//  AffichageTabMulti($reponse[0]);
//  echo "\n".$reponse[1];
//  echo "test1".CaseJouable($tableau,0,2)."\n";
//  echo "test2".CaseJouable($tableau,2,2)."\n";
// echo "test3".CaseJouable($tableau,5)."\n";

// $t1=TraduireCase("A1");
// echo $t1[0].$t1[1];
// $t1=TraduireCase("B1");
// echo $t1[0].$t1[1];
// $t1=TraduireCase("C2");
// echo $t1[0].$t1[1];
// $t1=TraduireCase("1A");
// echo $t1[0].$t1[1];
// $t1=TraduireCase("1B");
// echo $t1[0].$t1[1];
// $t1=TraduireCase("2C");
// echo $t1[0].$t1[1];
// $reponse = DemanderCase($tableau);
//  echo $reponse[0].$reponse[1];// test 222, d4,a4,d1,a2,1c
// $tab2 = PlacerPion($tableau,0,"X");
// AffichageTabMulti($tab2);
// echo SymboleJoueur(0);
// echo SymboleJoueur(1);
// echo SymboleJoueur(2);
// $tab3= JoueurEnCoursJoue(0,$tableau,3); //test avec C1
// AffichageTabMulti($tab3);
// echo "test1".TableauPlein($tableau);
// $tableau2=["A",1,"O",3,4,"A",6,7,8];
// echo "test2".TableauPlein($tableau2);
// $tab1 = ["O", "X", "X", "X", "O", "O", "O", "X", "O"];
// AffichePlateau($tab1, 3);
// echo "tab1 :" . Gagne($tab1, 3, 0) . "\n";
// $tab2 = ["X", "X", "X", "X", "O", "O", "O", "X", "O"];
// AffichePlateau($tab2, 3);
// echo "tab2 :" . Gagne($tab2, 3, 0) . "\n";
// $tab3 = ["O", "O", "X", "X", "X", "X", "O", "X", "O"];
// AffichePlateau($tab3, 3);
// echo "tab3 :" . Gagne($tab3, 3, 0) . "\n";
// $tab4 = ["O", "X", "X", "X", "O", "O", "X", "X", "X"];
// AffichePlateau($tab4, 3);
// echo "tab4 :" . Gagne($tab4, 3, 0) . "\n";
// $tab5 = ["X", "O", "X", "X", "O", "O", "X", "X", "O"];
// AffichePlateau($tab5, 3);
// echo "tab5 :" . Gagne($tab5, 3, 0) . "\n";
// $tab6 = ["O", "X", "X", "X", "X", "O", "O", "X", "O"];
// AffichePlateau($tab6, 3);
// echo "tab6 :" . Gagne($tab6, 3, 0) . "\n";
// $tab7 = ["O", "O", "X", "X", "O", "X", "O", "X", "X"];
// AffichePlateau($tab7, 3);
// echo "tab7 :" . Gagne($tab7, 3, 0) . "\n";
// $tab8 = ["X", "O", "X", "X", "X", "O", "O", "X", "X"];
// AffichePlateau($tab8, 3);
// echo "tab8 :" . Gagne($tab8, 3, 0) . "\n";
// $tab9 = ["O", "X", "X", "X", "X", "O", "X", "O", "X"];
// AffichePlateau($tab9, 3);
// echo "tab9 :" . Gagne($tab9, 3, 0) . "\n";

/*************************************************** */
// $tableau = [[1, 2, "X"], [4, 5, "S"], [" ", 8, 9], [10, 11, 12]];
// echo TableauPlein($tableau);

DemarreJeu();
