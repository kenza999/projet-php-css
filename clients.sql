-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 fév. 2024 à 15:14
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio_kenza`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero_telephone` varchar(255) DEFAULT NULL,
  `carte_identite` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` enum('Masculin','Féminin') NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `numero_siret` int NOT NULL,
  `secteur_dactivité` varchar(255) DEFAULT NULL,
  `nom_de_lentreprise` varchar(255) DEFAULT NULL,
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password_reset_expires` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `username`, `email`, `numero_telephone`, `carte_identite`, `date_de_naissance`, `genre`, `photo_profil`, `description`, `nationalite`, `numero_siret`, `secteur_dactivité`, `nom_de_lentreprise`, `date_inscription`, `password_hash`, `password_reset_token`, `password_reset_expires`, `created_at`) VALUES
(1, 'tele', 'tele@gmail.com', NULL, '', '0000-00-00', 'Masculin', '', '', '', 0, NULL, NULL, '2024-02-16 13:51:41', '0000', '', NULL, '2024-01-31 13:57:20'),
(2, 'tets', 'lola@gmail.com', NULL, '', '0000-00-00', 'Masculin', '', '', '', 0, NULL, NULL, '2024-02-16 13:51:41', '$2y$10$1tBwHyMV7pDPkaVMt4MZWe/zJyNF9HnF8Gyf2jtscZdoi.K1FDYAW', '', NULL, '2024-01-31 14:27:43'),
(3, 'brandon', 'to@gmail.com', NULL, '', '0000-00-00', 'Masculin', '', '', '', 0, NULL, NULL, '2024-02-16 13:51:41', '$2y$10$ZP5HSy8QaR1l16IXCaL/VuqwahOPK6388xMFcMK2wy58LBDvK6wHu', '', NULL, '2024-02-01 09:35:39'),
(4, 'kenza', 'kenzasedratie@gmail.com', NULL, '', '0000-00-00', 'Masculin', '', '', '', 0, NULL, NULL, '2024-02-16 13:51:41', '$2y$10$TTzN2mB7LdTCIbtV4AZ51.I3YxT648onkYQyDgXwLSNVo1CD5oly.', '', NULL, '2024-02-02 09:36:07'),
(5, 'azerty', 'azerty@gmail.com', NULL, '', '0000-00-00', 'Masculin', '', '', '', 0, NULL, NULL, '2024-02-16 13:51:41', '$2y$10$F5f0N6KfF7u6ZadL3HstveeXMtE9abHbRFl0Pw1jcw3F0j3JxuU32', '', NULL, '2024-02-02 09:37:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
