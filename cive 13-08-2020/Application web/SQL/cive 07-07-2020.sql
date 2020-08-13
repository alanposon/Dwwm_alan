-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 juil. 2020 à 13:44
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cive`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

DROP TABLE IF EXISTS `administration`;
CREATE TABLE IF NOT EXISTS `administration` (
  `idAdministration` int(11) NOT NULL AUTO_INCREMENT,
  `idPlanning` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idAdministration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `attribution`
--

DROP TABLE IF EXISTS `attribution`;
CREATE TABLE IF NOT EXISTS `attribution` (
  `idAttribution` int(11) NOT NULL AUTO_INCREMENT,
  `idChantier` int(11) NOT NULL,
  `idPlanning` int(11) NOT NULL,
  PRIMARY KEY (`idAttribution`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chantier`
--

DROP TABLE IF EXISTS `chantier`;
CREATE TABLE IF NOT EXISTS `chantier` (
  `idChantier` int(11) NOT NULL AUTO_INCREMENT,
  `adresseChantier` varchar(50) NOT NULL,
  `activiteChantier` varchar(50) NOT NULL,
  `dateChantier` date NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idChantier`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chantier`
--

INSERT INTO `chantier` (`idChantier`, `adresseChantier`, `activiteChantier`, `dateChantier`, `idVille`) VALUES
(1, '249 rue du bohernold', 'soudure', '2020-06-05', 23),
(2, '181 rue victor hugo', 'nucleaire', '2020-06-18', 23),
(5, '19 rue franklin', 'peche', '2020-06-06', 23),
(6, '19 rue franklin', 'peche', '2020-06-06', 23);

-- --------------------------------------------------------

--
-- Structure de la table `imgslider`
--

DROP TABLE IF EXISTS `imgslider`;
CREATE TABLE IF NOT EXISTS `imgslider` (
  `idImgSlider` int(11) NOT NULL AUTO_INCREMENT,
  `libelleImgSlider` varchar(50) NOT NULL,
  PRIMARY KEY (`idImgSlider`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `imgslider`
--

INSERT INTO `imgslider` (`idImgSlider`, `libelleImgSlider`) VALUES
(1, 'atelier');

-- --------------------------------------------------------

--
-- Structure de la table `interaction`
--

DROP TABLE IF EXISTS `interaction`;
CREATE TABLE IF NOT EXISTS `interaction` (
  `idInteraction` int(11) NOT NULL AUTO_INCREMENT,
  `idOffreEmploi` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `CV` varchar(50) NOT NULL,
  `reponse` varchar(200) NOT NULL,
  PRIMARY KEY (`idInteraction`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interaction`
--

INSERT INTO `interaction` (`idInteraction`, `idOffreEmploi`, `idUser`, `CV`, `reponse`) VALUES
(1, 1, 1, 'voici mon nouveau cv ', 'je vous fait parvenir mon cv pour le poste de soudeur');

-- --------------------------------------------------------

--
-- Structure de la table `offreemploi`
--

DROP TABLE IF EXISTS `offreemploi`;
CREATE TABLE IF NOT EXISTS `offreemploi` (
  `idOffreEmploi` int(11) NOT NULL AUTO_INCREMENT,
  `numeroOffreEmploi` int(11) NOT NULL,
  `entrepriseOffreEmploi` varchar(50) NOT NULL,
  `dateOffreEmploi` date NOT NULL,
  `descriptionOffreEmploi` varchar(50) NOT NULL,
  PRIMARY KEY (`idOffreEmploi`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `offreemploi`
--

INSERT INTO `offreemploi` (`idOffreEmploi`, `numeroOffreEmploi`, `entrepriseOffreEmploi`, `dateOffreEmploi`, `descriptionOffreEmploi`) VALUES
(1, 121204, 'Chez sandra', '2020-06-28', 'poste de rayonnage pour un contrat de 4 mois '),
(3, 123456, 'CIVE', '2020-07-22', 'mission de soudure de 4 mois en atelier '),
(4, 789456, 'CORA', '2020-06-09', 'alan test'),
(5, 789456, 'CORA', '2020-06-09', 'alan test'),
(6, 789456, 'CORA', '2020-06-09', 'alan test'),
(7, 789456, 'CORA', '2020-06-09', 'alan test'),
(8, 789785, 'auchan', '2020-06-03', 'alan test'),
(11, 852852, 'auchan', '2020-06-05', 'alan test'),
(12, 852852, 'auchan', '2020-06-05', 'alan test'),
(13, 885858, 'auchan', '2020-06-11', 'alan test'),
(18, 3030, 'Chez alan', '2020-07-21', 'on va test '),
(19, 7070, 'micromania', '2020-08-02', 'poste de rayonnage pour un contrat de 4 mois '),
(20, 1512, 'bricabrac', '2020-07-11', 'poste de rayonnage pour un contrat de 4 mois '),
(21, 9696, 'chez sandra', '2020-07-24', 'eleveuse de canard ');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `idPlanning` int(11) NOT NULL AUTO_INCREMENT,
  `libellePlanning` varchar(50) NOT NULL,
  `DateChantier` date NOT NULL,
  `activiteChantier` varchar(50) NOT NULL,
  `adresseChantier` varchar(50) NOT NULL,
  PRIMARY KEY (`idPlanning`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`idPlanning`, `libellePlanning`, `DateChantier`, `activiteChantier`, `adresseChantier`) VALUES
(1, 'semaine 20 ', '2020-06-01', 'soudure', '181 rue victor hugo');

-- --------------------------------------------------------

--
-- Structure de la table `posteentreprise`
--

DROP TABLE IF EXISTS `posteentreprise`;
CREATE TABLE IF NOT EXISTS `posteentreprise` (
  `idPosteEntreprise` int(11) NOT NULL AUTO_INCREMENT,
  `libellePosteEntreprise` varchar(50) NOT NULL,
  PRIMARY KEY (`idPosteEntreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `posteentreprise`
--

INSERT INTO `posteentreprise` (`idPosteEntreprise`, `libellePosteEntreprise`) VALUES
(1, 'employe'),
(2, 'visiteur'),
(3, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `tempssansaccident`
--

DROP TABLE IF EXISTS `tempssansaccident`;
CREATE TABLE IF NOT EXISTS `tempssansaccident` (
  `idTempsSansAccident` int(11) NOT NULL AUTO_INCREMENT,
  `dateDernierAccident` date NOT NULL,
  PRIMARY KEY (`idTempsSansAccident`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tempssansaccident`
--

INSERT INTO `tempssansaccident` (`idTempsSansAccident`, `dateDernierAccident`) VALUES
(1, '2020-08-26');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `posteEntreprise` int(50) NOT NULL COMMENT '1=visiteur, 2=employe, 3=admin  ',
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `mail`, `matricule`, `motDePasse`, `posteEntreprise`) VALUES
(1, 'Top', 'didier', 'didier@gmail.com', '5678', 'test', 2),
(2, 'vannobel', 'didier', 'didier@gmail.com', '0101', 'test', 2),
(3, 'Poson', 'Alan', 'alan.poson@gmail.com', '1234', 'test', 3);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `libelleVille` varchar(50) NOT NULL,
  `codePostal` int(11) NOT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `libelleVille`, `codePostal`) VALUES
(1, 'Dunkerque', 59140),
(2, 'Coudekerque', 59210),
(3, 'Warhem', 59380);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
