-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 juil. 2020 à 13:38
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
CREATE DATABASE IF NOT EXISTS `cive` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cive`;

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
  `matriculeChantier` int(200) NOT NULL,
  `adresseChantier` varchar(50) NOT NULL,
  `activiteChantier` varchar(50) NOT NULL,
  `dateChantier` date NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idChantier`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chantier`
--

INSERT INTO `chantier` (`idChantier`, `matriculeChantier`, `adresseChantier`, `activiteChantier`, `dateChantier`, `idVille`) VALUES
(1, 101, '249 rue du bohernold', 'soudure', '2020-06-05', 23),
(2, 202, '181 rue victor hugo', 'nucleaire', '2020-06-18', 23),
(5, 303, '19 rue franklin', 'peche', '2020-06-06', 23),
(6, 404, '13 avenue claude françois', 'chaudronnerie', '2020-10-22', 23);

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

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
(21, 9696, 'chez sandra', '2020-07-24', 'eleveuse de canard '),
(22, 909, 'easy cash ', '2020-07-25', 'on va tester ');

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
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(200) NOT NULL,
  `codeLangue` varchar(20) NOT NULL,
  `texte` varchar(300) NOT NULL,
  PRIMARY KEY (`idTexte`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES
(1, 'accueil', 'FR', 'Acceuil'),
(2, 'accueil', 'EN', 'Home'),
(3, 'Notre Metier', 'FR', 'Notre Metier'),
(4, 'Notre Metier', 'EN', 'Our job'),
(5, 'Nos Activités ', 'FR', 'Nos Activités'),
(6, 'Nos Activités ', 'EN', 'Our Activities'),
(7, 'Notre Parc Machines ', 'FR', 'Notre Parc Machines'),
(8, 'Notre Parc Machines', 'EN', 'Our Machines'),
(9, 'Nos Réalisations', 'FR', 'Nos réalisations'),
(10, 'Nos Réalisations', 'EN', 'Our achievements'),
(11, 'Législation', 'FR', 'Législation'),
(12, 'Législation', 'EN', 'Legislation'),
(13, 'Administration', 'FR', 'Administration'),
(14, 'Administration', 'EN', 'Administration'),
(15, 'Maj du dernier accident', 'FR', 'Maj du dernier accident'),
(16, 'Maj du dernier accident', 'EN', 'Update of last accident '),
(17, 'Gestion des chantiers ', 'FR', 'Gestion des chantiers '),
(18, 'Gestion des chantiers ', 'EN', 'Construction management '),
(19, 'Offre Emploi', 'FR', 'Offre Emploi'),
(20, 'Offre Emploi', 'EN', 'Job description emploi '),
(21, 'Contact', 'FR', 'Contact'),
(22, 'Contact ', 'EN', 'Contact '),
(23, 'Connexion', 'FR', 'Connexion'),
(24, 'Connexion', 'EN', 'Connection'),
(25, '50 jours sans accident ! ', 'FR', '50 jours sans accident ! '),
(26, '50 jours sans accident ! ', 'EN', '50 days without accident ! '),
(27, 'Soudure', 'FR', 'Soudure'),
(28, 'Soudure', 'EN', 'Weld'),
(29, 'Chaudronnerie', 'FR', 'Chaudronnerie'),
(30, 'Chaudronnerie', 'EN', 'Boilermaking'),
(31, 'Tuyauterie', 'FR', 'Tuyauterie'),
(32, 'Tuyauterie', 'EN', 'Piping'),
(33, 'veritable', 'FR', 'Véritable spécialiste en tuyauterie, chaudronnerie & soudage, CIVE propose de la maintenance industrielle et nucléaire , agro-alimentaire et gaz'),
(34, 'veritable', 'EN', 'A true specialist in piping, boilermaking & welding, CIVE offers industrial and nuclear maintenance, food & gas.'),
(35, 'histoire', '', 'Un peu d\'histoire ... '),
(36, 'histoire', 'EN', 'A bit of history');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `nom`, `prenom`, `mail`, `matricule`, `motDePasse`, `posteEntreprise`) VALUES
(1, 'Degaulle', 'charles', 'charles@gmail.com', '0101', '098f6bcd4621d373cade4e832627b4f6', 1),
(2, 'Cesar', 'jules', 'jules@gmail.com', '0202', '098f6bcd4621d373cade4e832627b4f6', 2),
(3, 'Poson', 'Alan', 'alan.poson@gmail.com', '0303', '098f6bcd4621d373cade4e832627b4f6', 3),
(6, ' Seize', ' louis', 'louis@gmail.com', '0404', '098f6bcd4621d373cade4e832627b4f6', 1),
(7, 'Devinci', 'leonard', 'leonard@gmail.com', '0505', '098f6bcd4621d373cade4e832627b4f6', 2),
(8, 'Bonaparte', 'Napoleon', 'waterllo@gmail.com', '0606', '098f6bcd4621d373cade4e832627b4f6', 3);

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
