
-- Base de données :  `multilingue`
--
CREATE DATABASE IF NOT EXISTS `multilingue` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `multilingue`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `codeDescription` varchar(50) DEFAULT NULL,
  `prixArticle` int(11) DEFAULT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `codeDescription`, `prixArticle`) VALUES
(1, 'd1', 6),
(2, 'd2', 4),
(3, 'd3', 3),
(4, 'd4', 14),
(5, 'd5', 4),
(6, 'd6', 20);

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(20) NOT NULL,
  `codeLangue` varchar(2) NOT NULL,
  `Texte` varchar(200) NOT NULL,
  PRIMARY KEY (`idTexte`),
  KEY `Code Texte` (`codeTexte`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `texte`
--

INSERT INTO `texte` (`idTexte`, `codeTexte`, `codeLangue`, `Texte`) VALUES
(1, 'accueil', 'FR', 'Accueil'),
(2, 'titrePage', 'FR', 'Gestion des articles'),
(3, 'selectArticle', 'FR', 'Sélectionner un ou plusieurs articles'),
(4, 'NouvelArticle', 'FR', 'Nouvel Article'),
(5, 'Description', 'FR', 'Description'),
(6, 'Prix', 'FR', 'Prix'),
(7, 'd1', 'FR', 'ciseaux'),
(8, 'd2', 'FR', 'règle 30 cm'),
(9, 'd3', 'FR', 'règle 20 cm'),
(10, 'd4', 'FR', 'stylo plume'),
(11, 'd5', 'FR', 'feutre tableau blanc'),
(12, 'd6', 'FR', 'feuilles'),
(13, 'Afficher', 'FR', 'Afficher'),
(14, 'Modifier', 'FR', 'Modifier'),
(15, 'Supprimer', 'FR', 'Supprimer'),
(16, 'accueil', 'EN', 'Home'),
(17, 'titrePage', 'EN', 'Article Management'),
(18, 'selectArticle', 'EN', 'Select one or more items'),
(19, 'NouvelArticle', 'EN', 'New Article'),
(20, 'Description', 'EN', 'Description'),
(21, 'Prix', 'EN', 'Price'),
(22, 'd1', 'EN', 'scissors'),
(23, 'd2', 'EN', 'rule 30 cm'),
(24, 'd3', 'EN', 'rule 20 cm'),
(25, 'd4', 'EN', 'feather pen'),
(26, 'd5', 'EN', 'felt white board'),
(27, 'd6', 'EN', 'leaves'),
(28, 'Afficher', 'EN', 'Display'),
(29, 'Modifier', 'EN', 'Update'),
(30, 'Supprimer', 'EN', 'Remove');
COMMIT;

