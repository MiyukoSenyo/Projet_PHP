-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 fév. 2021 à 08:07
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jdr`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_carac` int(11) NOT NULL,
  `acrobatie` tinyint(1) NOT NULL DEFAULT '0',
  `arcanes` tinyint(1) NOT NULL DEFAULT '0',
  `athletisme` tinyint(1) NOT NULL DEFAULT '0',
  `discretion` tinyint(1) NOT NULL DEFAULT '0',
  `dressage` tinyint(1) NOT NULL DEFAULT '0',
  `escamotage` tinyint(1) NOT NULL DEFAULT '0',
  `histoire` tinyint(1) NOT NULL DEFAULT '0',
  `intimidation` tinyint(1) NOT NULL DEFAULT '0',
  `investigation` tinyint(1) NOT NULL DEFAULT '0',
  `medecine` tinyint(1) NOT NULL DEFAULT '0',
  `nature` tinyint(1) NOT NULL DEFAULT '0',
  `perception` tinyint(1) NOT NULL DEFAULT '0',
  `perspicasité` tinyint(1) NOT NULL DEFAULT '0',
  `persuasion` tinyint(1) NOT NULL DEFAULT '0',
  `religion` tinyint(1) NOT NULL DEFAULT '0',
  `representation` tinyint(1) NOT NULL DEFAULT '0',
  `survie` tinyint(1) NOT NULL DEFAULT '0',
  `tromperie` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`id`, `id_carac`, `acrobatie`, `arcanes`, `athletisme`, `discretion`, `dressage`, `escamotage`, `histoire`, `intimidation`, `investigation`, `medecine`, `nature`, `perception`, `perspicasité`, `persuasion`, `religion`, `representation`, `survie`, `tromperie`) VALUES
(1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0),
(4, 4, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0),
(6, 6, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0),
(5, 5, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `descrption`
--

DROP TABLE IF EXISTS `descrption`;
CREATE TABLE IF NOT EXISTS `descrption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `descrption`
--

INSERT INTO `descrption` (`id`, `id_user`, `description`) VALUES
(1, 0, 'Ceci raconte l\'histoire d\'une elfe qui connu la trahison et décida de faire un pacte avec une entité démoniaque afin de ce venger. La vengeance fut de courte durée et désormais, elle doit le servir jusqu\'à son dernier souffle'),
(2, 0, 'Ceci raconte l\'histoire d\'une elfe habitant dans une contrée sauvage. Alors que celle ci était projetée à un brillant avenir, la civilisation la captura afin d\'en soutirer des informations et la força ensuite à travailler pour eux.'),
(3, 0, 'Ceci raconte l\'histoire d\'un humain vivant au sein d\'une famille riche. Après de longue année à étudier la magie dans un autre royaume, il se fit attaquer par un groupe de bandit sur le chemin du retour. Heureusement pour lui, un groupe de mercenaire lui vint en aide et décida de les rejoindre');

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

DROP TABLE IF EXISTS `personnage`;
CREATE TABLE IF NOT EXISTS `personnage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_description` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `level` int(10) NOT NULL,
  `race` varchar(30) NOT NULL,
  `hp` int(3) NOT NULL,
  `strength` int(2) NOT NULL,
  `dexterity` int(2) NOT NULL,
  `constitution` int(2) NOT NULL,
  `intelligence` int(2) NOT NULL,
  `wisdom` varchar(2) NOT NULL,
  `charisma` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnage`
--

INSERT INTO `personnage` (`id`, `id_user`, `id_description`, `name`, `class`, `level`, `race`, `hp`, `strength`, `dexterity`, `constitution`, `intelligence`, `wisdom`, `charisma`) VALUES
(5, 1, 1, 'Aeline', 'Sorciere', 4, 'Demi-elfe', 35, 10, 16, 14, 14, '10', '19'),
(6, 1, 2, 'Shae\'larae', 'Druide', 4, 'Elfe', 37, 10, 18, 14, 12, '16', '13'),
(3, 2, 3, 'Elys Azariel', 'Guerrier', 2, 'Humain', 23, 18, 13, 16, 16, '11', '13'),
(4, 3, 4, 'Naya Arneth', 'Voleur', 4, 'Humain', 36, 14, 18, 14, 14, '14', '14'),
(1, 0, 0, 'Yngra', 'Guerrier', 4, 'Demi-orc', 34, 18, 12, 16, 8, '12', '13'),
(2, 0, 0, 'Elya', 'Moine', 3, 'Elfe', 29, 11, 18, 14, 12, '16', '13');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL COMMENT '(pseudo)',
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `user_name`, `first_name`, `last_name`, `email`, `password`) VALUES
(2, 'Ianfax', 'Clément', 'Marchand', 'Jelaconnaispas@gmail.com', 'Azerty123'),
(1, 'Miyuko', 'Vincent', 'Wastiau', 'vincent.wastiau@estiam.com', 'Azerty123'),
(3, 'TheLegende27', 'Kevin', 'Grenier', 'kevingrenier@gmail.com', 'Azerty123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
