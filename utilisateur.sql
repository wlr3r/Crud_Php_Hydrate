-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 fév. 2024 à 15:35
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
-- Base de données : `sak_crud_hydrate`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `mot_de_passe` varchar(70) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `username`, `mot_de_passe`, `email`) VALUES
(1, 'admin', '', 'aze@gmail.com'),
(29, 'samsam', '', 'samsam@gmail.com'),
(28, 'samsam', '', 'samsam@gmail.com'),
(27, 'samsam', '', 'samsam@gmail.com'),
(26, 'samsam', '', 'samsam@gmail.com'),
(25, 'samsam', '', 'samsam@gmail.com'),
(30, 'samsam', '', 'samsam@gmail.com'),
(31, 'samsam', '', 'samsam@gmail.com'),
(32, 'samsam', '', 'samsam@gmail.com'),
(33, 'samsam', '$2y$10$ejmjMzCI6Us09Q7Zv1zEsOMZDF5fSH0PDAT28ibsUQpaOvON7OUgK', 'samsam@gmail.com'),
(34, 'samsamlebg', '$2y$10$lXisjPAigo/SLfX/Rb2JhOpHw2c8avbBIdMNSGlFSY1u8.M7hEvgi', 'samsamlebg@gmail.com'),
(35, 'samsamlebg', '$2y$10$7ckBozNR.OLjZMu2WTZqkOuU0njsmlZ/eEAVdaeVcuGEXBuxuqmY6', 'samsamlebg@gmail.com'),
(36, 'jazeazeazeaze', '$2y$10$bI.fID1iRWnb2k76zmNJM.infDdeBVGaQGJLdngwU19lFfMltWBb6', 'samsamlebg@gmail.com'),
(37, 'admin', '$2y$10$boxkwNMC7eZo31alyfmZ0eblWAtaq7ApaIrw8vzpIiWvW1ww2mSMG', 'samsamlebg@gmail.com'),
(38, 'alexis', 'alexis', 'alexis@gmail.com'),
(39, 'alexis', '$2y$10$hMuY4Y3jhf4eyF5sdGE1GumjD76NxdhuMCTpRXR43SW5r.hGlUaCe', 'alexis@gmail.com'),
(40, 'azerty', '$2y$10$.IocjQsvMbr.b7BKGnTiyeEPixZhIzNiZSAv8rtOqpNtcOv60iiDq', 'azerty@gmail.com'),
(41, 'ok', '$2y$10$M/3ujb7iP3IaGijETxO3du96WdSf1Wdr9qKMTTSLFoQ2sYuUJIPma', 'ok@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
