-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 12 jan. 2021 à 03:22
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
-- Base de données : `webdoctor`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `IdFiche_Pat` int(255) NOT NULL AUTO_INCREMENT,
  `Nom_Pat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom_Pat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Age_Pat` int(3) NOT NULL,
  `NumTel_Pat` int(8) NOT NULL,
  `Maladies_Chroniques` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cause_Visite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Date_rendez_vous` date NOT NULL,
  `time_appointment` time NOT NULL,
  `date_controle` date NOT NULL,
  `user_id` int(255) NOT NULL,
  PRIMARY KEY (`IdFiche_Pat`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `appointment`
--

INSERT INTO `appointment` (`IdFiche_Pat`, `Nom_Pat`, `Prenom_Pat`, `Age_Pat`, `NumTel_Pat`, `Maladies_Chroniques`, `Cause_Visite`, `Date_rendez_vous`, `time_appointment`, `date_controle`, `user_id`) VALUES
(1, 'بن يعلى', 'عادل', 37, 96559270, 'asmatique', 'visite normal', '2021-01-12', '14:00:00', '2022-02-02', 1),
(10, 'ben yaala', 'chaker', 25, 29856753, '', 'normal', '2021-11-19', '11:01:00', '2021-03-02', 1),
(9, 'dallegi', 'ghassen', 20, 58132349, 'asmatique', 'plombage', '2021-01-12', '15:30:00', '2021-03-05', 1);

-- --------------------------------------------------------

--
-- Structure de la table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_date_naiss` date DEFAULT NULL,
  `user_tel` int(11) DEFAULT NULL,
  `user_email` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_special` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`),
  KEY `user_name_2` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctor`
--

INSERT INTO `doctor` (`user_id`, `user_name`, `user_last_name`, `user_date_naiss`, `user_tel`, `user_email`, `user_pass`, `user_special`, `img`) VALUES
(1, 'ayoub', 'ben yaala', '1998-10-13', 26409606, 'ayoubbenyaala@gmail.com', '$2y$10$X5XtOkG7g2satheEWYO.1OSbrMGuUljpXyUx079sTU0QwYGhGmg.G', 'généraliste medecin', 'avatar-mini2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_note` int(255) NOT NULL AUTO_INCREMENT,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`id_note`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(11) NOT NULL,
  `maladie_chronique` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cause_visite` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `datenaissance`, `adresse`, `tel`, `maladie_chronique`, `cause_visite`, `user_id`) VALUES
(1, 'mansour', 'bouchniba', '1997-12-01', '67 rue de damas cité fatouma bourguiba 1145 m\'hamdia', 96559270, 'asmatique', 'plombage', 1),
(2, 'ben yaala', 'loujaine', '2012-10-01', '67 rue de damas cité fatouma bourguiba 1145 m\'hamdia', 96559270, '', 'plombage', 1),
(16, 'ahmed', 'el amri', '1998-09-02', 'tunis', 24546879, 'asmatique', 'visite', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
