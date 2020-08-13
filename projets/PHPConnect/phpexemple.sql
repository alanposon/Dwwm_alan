-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 02 mars 2020 à 14:18
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpexemple`
--
CREATE DATABASE IF NOT EXISTS `phpexemple` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `phpexemple`;

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(30) CHARACTER SET latin1 NOT NULL,
  `prenomClient` varchar(30) CHARACTER SET latin1 NOT NULL,
  `adresseClient` varchar(255) CHARACTER SET latin1 NOT NULL,
  `villeClient` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `villeClient`) VALUES
(3, 'truc', 'toto', 'ici', 'ville_la'),
(4, 'machin', 'titi', 'rue de titi', 'villi');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `codemat` char(3) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL,
  `coef` float DEFAULT NULL,
  PRIMARY KEY (`codemat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`codemat`, `libelle`, `coef`) VALUES
('STA', 'STatistiques', 0.4),
('INF', 'Informatique', 0.4),
('ECO', 'Economie', 0.2);

-- --------------------------------------------------------

--
-- Structure de la table `personnes`
--

DROP TABLE IF EXISTS `personnes`;
CREATE TABLE IF NOT EXISTS `personnes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(50) CHARACTER SET latin1 NOT NULL,
  `codePostal` int(11) NOT NULL,
  `adresse` varchar(250) CHARACTER SET latin1 NOT NULL,
  `ville` varchar(50) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `prenom`, `codePostal`, `adresse`, `ville`) VALUES
(1, 'toto', 'to', 59, 'totoAdresse', 'totoVille'),
(2, 'TATA', 'ta', 62, 'TATAAdresse', 'TATAVille');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creeLe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modifieLe` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `comm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id`, `creeLe`, `modifieLe`, `comm`) VALUES
(1, '2018-09-25 07:40:54', '2018-09-25 07:41:38', 3),
(2, '2018-09-25 07:42:25', '2018-09-25 07:42:53', 1);

-- --------------------------------------------------------

--
-- Structure de la table `test2`
--

DROP TABLE IF EXISTS `test2`;
CREATE TABLE IF NOT EXISTS `test2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` int(11) NOT NULL,
  `CreeLe` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifieLe` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test2`
--

INSERT INTO `test2` (`id`, `test`, `CreeLe`, `ModifieLe`) VALUES
(1, 12, '2018-09-25 07:45:08', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `Password`, `role`) VALUES
(1, 'test', '098f6bcd4621d373cade4e832627b4f6', 1),
(2, 'moi', '8f8ad28dd6debff410e630ae13436709', 1),
(3, 'test2', 'ad0234829205b9033196ba818f7a872b', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
