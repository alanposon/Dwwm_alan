-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 mars 2020 à 13:14
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `application`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `codePostal` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idVille` int(11) NOT NULL,
  PRIMARY KEY (`idClient`),
  KEY `FK_client_ville` (`idVille`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `codePostal`, `email`, `idVille`) VALUES
(1, 'polnaref', 'michelle', '456 route de belle ile ', '56231', 'michelle@live.fr', 1),
(2, 'joel', 'billy', '569 rue ronald regan ', '58954', 'billy.joel@live.fr', 9),
(3, 'sarkozy', 'gabriel', '489 route de strasbourg', '89659', 'gabriel.php@live.fr', 6),
(4, 'dunkerque', 'alan', '859 avenue vianney', '96396', 'alan.dunkerque@hotmail.fr', 2),
(5, 'dunkerque', 'yousra', '896 avenu celine dion ', '59685', 'yousra.dunkerque@yahoo.fr', 3),
(6, 'dunkerque', 'loic', '459 avenu francis lalane', '78945', 'loic.dunkerque@gmail.fr', 10),
(7, 'dunkerque', 'baptiste', '489 avenu claude françois', '56956', 'baptiste.dunkerque@wanadou.fr', 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1 COMMENT '1 users; 2 modo; 3 admin',
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `pseudo`, `mdp`, `role`) VALUES
(1, 'michelle', '1111', 1),
(2, 'billy', '1111', 1),
(3, 'gabriel', '1111', 1),
(4, 'alan', '1111', 3),
(5, 'yousra', '1111', 2),
(6, 'loic', '1111', 3),
(7, 'baptiste', '1111', 2);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `idVille` int(11) NOT NULL AUTO_INCREMENT,
  `libelleVille` varchar(100) NOT NULL,
  PRIMARY KEY (`idVille`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`idVille`, `libelleVille`) VALUES
(1, 'Paris\r\n'),
(2, 'Dunkerque'),
(3, 'Tourcoing'),
(4, 'St-omer'),
(5, 'Moscou'),
(6, 'Lille'),
(7, 'Tokyo'),
(8, 'Coudekerque'),
(9, 'Washington'),
(10, 'Londre'),
(11, 'Pekin'),
(12, 'Guarbecque'),
(13, 'Warhem'),
(14, 'StFolquin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_client_ville` FOREIGN KEY (`idVille`) REFERENCES `ville` (`idVille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
