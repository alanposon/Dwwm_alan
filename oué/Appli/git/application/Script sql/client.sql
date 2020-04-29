-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 04 mars 2020 à 09:09
-- Version du serveur :  5.7.26
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
