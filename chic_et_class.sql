-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 mars 2022 à 12:56
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chic_et_class`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Email` text NOT NULL,
  `mot_de_passe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `Nom`, `Prenom`, `Contact`, `Email`, `mot_de_passe`) VALUES
(8, 'Goa', 'Constant', 748224472, 'tinogoadarni@gmail.com', '9a9873b85725cccecc9cb761b49e9d5c'),
(5, 'Goa', 'Emmanuella', 767233851, 'manugoamarie@gmail.com', '12890e7954a4eb844094c1ffa6562dce'),
(9, 'Goa', 'Constant', 748224472, 'tinogoadarni@gmail.com', '9a9873b85725cccecc9cb761b49e9d5c'),
(10, 'Goa', 'Constant', 748224472, 'tinogoadarni@gmail.com', '9a9873b85725cccecc9cb761b49e9d5c'),
(11, 'MONSIA', 'MARIE LOURDES', 757457555, 'monsiamarielourdes@gmail.com', '335b02e58a4f90d314264afd06279cb8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
