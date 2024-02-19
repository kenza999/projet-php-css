-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 14 fév. 2024 à 14:30
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
-- Structure de la table `admin_logs`
--

DROP TABLE IF EXISTS `admin_logs`;
CREATE TABLE IF NOT EXISTS `admin_logs` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `admin_id` int DEFAULT NULL,
  `action` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`),
  KEY `admin_id` (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `admin_table`
--

INSERT INTO `admin_table` (`id`, `email`, `password_hash`, `created_at`, `updated_at`, `username`) VALUES
(1, 'kenza@gmail.com', '$2y$10$Mi6N/tkYnvt5gLAWgf8ckuSC5WCy6H/1SrVCImUuvI7WrpV65Shti', '2024-02-01 13:45:28', '2024-02-01 13:45:28', '0');

-- --------------------------------------------------------

--
-- Structure de la table `clientfreelancerelations`
--

DROP TABLE IF EXISTS `clientfreelancerelations`;
CREATE TABLE IF NOT EXISTS `clientfreelancerelations` (
  `RelationID` int NOT NULL AUTO_INCREMENT,
  `FreelanceID` int DEFAULT NULL,
  `ProjectID` int DEFAULT NULL,
  `missionAccepter` enum('oui','non') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`RelationID`),
  KEY `FreelanceID` (`FreelanceID`),
  KEY `ProjectID` (`ProjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clientfreelancerelations`
--

INSERT INTO `clientfreelancerelations` (`RelationID`, `FreelanceID`, `ProjectID`, `missionAccepter`) VALUES
(1, NULL, 2, 'oui'),
(2, NULL, 2, 'oui'),
(3, 10, 2, 'oui'),
(4, 10, 3, 'non'),
(5, 10, 2, 'non'),
(6, 10, 2, 'oui'),
(7, 10, 3, 'oui'),
(8, 10, 2, 'oui'),
(9, 10, 3, 'oui'),
(10, 10, 3, 'oui'),
(11, 10, 3, 'oui'),
(12, 10, 2, 'oui'),
(13, 10, 2, 'oui'),
(14, 10, 3, 'oui'),
(15, 10, 2, 'non'),
(16, 10, 2, 'non'),
(17, 10, 2, 'non'),
(18, 10, 20, 'non'),
(19, 10, 21, 'oui'),
(20, 10, 24, 'oui'),
(21, 10, 22, 'oui'),
(22, 10, 23, 'oui'),
(23, 25, 2, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `password_reset_expires` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `username`, `email`, `password_hash`, `password_reset_token`, `password_reset_expires`, `created_at`) VALUES
(1, 'tele', 'tele@gmail.com', '0000', NULL, NULL, '2024-01-31 13:57:20'),
(2, 'tets', 'lola@gmail.com', '$2y$10$1tBwHyMV7pDPkaVMt4MZWe/zJyNF9HnF8Gyf2jtscZdoi.K1FDYAW', NULL, NULL, '2024-01-31 14:27:43'),
(3, 'brandon', 'to@gmail.com', '$2y$10$ZP5HSy8QaR1l16IXCaL/VuqwahOPK6388xMFcMK2wy58LBDvK6wHu', NULL, NULL, '2024-02-01 09:35:39'),
(4, 'kenza', 'kenzasedratie@gmail.com', '$2y$10$TTzN2mB7LdTCIbtV4AZ51.I3YxT648onkYQyDgXwLSNVo1CD5oly.', NULL, NULL, '2024-02-02 09:36:07'),
(5, 'azerty', 'azerty@gmail.com', '$2y$10$F5f0N6KfF7u6ZadL3HstveeXMtE9abHbRFl0Pw1jcw3F0j3JxuU32', NULL, NULL, '2024-02-02 09:37:02');

-- --------------------------------------------------------

--
-- Structure de la table `client_profiles`
--

DROP TABLE IF EXISTS `client_profiles`;
CREATE TABLE IF NOT EXISTS `client_profiles` (
  `client_id` int NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_details` text,
  `contact_info` text,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `author_id` int DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  KEY `project_id` (`project_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `freelance_profiles`
--

DROP TABLE IF EXISTS `freelance_profiles`;
CREATE TABLE IF NOT EXISTS `freelance_profiles` (
  `freelance_id` int NOT NULL,
  `bio` text,
  `skills` text,
  `portfolio_url` varchar(255) DEFAULT NULL,
  `hourly_rate` decimal(10,2) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`freelance_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE IF NOT EXISTS `invoices` (
  `invoice_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `issued_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` timestamp NULL DEFAULT NULL,
  `status` enum('unpaid','paid','overdue') DEFAULT NULL,
  PRIMARY KEY (`invoice_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int NOT NULL AUTO_INCREMENT,
  `sender_id` int DEFAULT NULL,
  `receiver_id` int DEFAULT NULL,
  `content` text,
  `sent_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('sent','delivered','read') DEFAULT NULL,
  PRIMARY KEY (`message_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `mission_history`
--

DROP TABLE IF EXISTS `mission_history`;
CREATE TABLE IF NOT EXISTS `mission_history` (
  `history_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `project_id` int DEFAULT NULL,
  `role` enum('freelance','client') DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` enum('completed','cancelled','in_progress') DEFAULT NULL,
  PRIMARY KEY (`history_id`),
  KEY `user_id` (`user_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int NOT NULL AUTO_INCREMENT,
  ` ClientID` int DEFAULT NULL,
  `message` text,
  `seen` tinyint(1) DEFAULT '0',
  `DateCreated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (` ClientID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int NOT NULL AUTO_INCREMENT,
  `owner_id` int DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `status` enum('ouvert','en_cours','completé','annulé') DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `proposals`
--

DROP TABLE IF EXISTS `proposals`;
CREATE TABLE IF NOT EXISTS `proposals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `missionName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` text NOT NULL,
  `budget` decimal(10,2) DEFAULT NULL,
  `missionDuration` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `missionStart` date NOT NULL,
  `remoteWork` text NOT NULL,
  `location` varchar(150) NOT NULL,
  `skillsRequired` text NOT NULL,
  `id_client` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `proposals`
--

INSERT INTO `proposals` (`id`, `missionName`, `description`, `budget`, `missionDuration`, `created_at`, `updated_at`, `missionStart`, `remoteWork`, `location`, `skillsRequired`, `id_client`) VALUES
(2, 'developpeur back-end', 'ù:mù:', '2000.00', 2, '2024-02-02 15:28:25', '2024-02-02 15:28:25', '2024-02-16', 'non', 'la defense', 'php', 0),
(3, 'developpeur back-end', 'dc', '2000.00', 2, '2024-02-02 15:28:46', '2024-02-02 15:28:46', '2024-02-16', 'non', 'la defense', 'php', 0),
(20, 'Concepteur UX/UI', 'Conception et amélioration de l\'interface utilisateur pour nos applications web et mobiles.', '3500.00', 3, '2024-02-06 08:27:22', '2024-02-06 08:27:22', '2024-03-01', 'oui', 'Paris', 'design, photoshop, sketch', 0),
(21, 'Développeur Full Stack', 'Participation au développement de nouvelles fonctionnalités et maintenance des systèmes existants.', '4000.00', 4, '2024-02-06 08:27:22', '2024-02-06 08:27:22', '2024-03-15', 'oui', 'Nantes', 'javascript, react, node.js', 0),
(22, 'Analyste de données', 'Analyse des données de vente pour aider à orienter les décisions stratégiques de l\'entreprise.', '3000.00', 2, '2024-02-06 08:27:22', '2024-02-06 08:27:22', '2024-04-01', 'non', 'Lyon', 'python, sql, tableau', 0),
(23, 'Spécialiste SEO', 'Optimisation du référencement naturel pour améliorer la visibilité de notre site web.', '2500.00', 1, '2024-02-06 08:27:22', '2024-02-06 08:27:22', '2024-04-15', 'oui', 'Remote', 'seo, google analytics', 0),
(24, 'testid', 'dfdfg', '636.00', 0, '2024-02-07 15:35:40', '2024-02-07 15:35:40', '2024-02-10', 'non', 'la defense', 'ghtfgyhtrf', 5),
(25, 'salimou detre aigri', 'deconnexion', '150.00', 1, '2024-02-08 14:28:56', '2024-02-08 14:28:56', '2024-02-16', 'oui', 'villier', 'ghh', 5),
(26, 'salimou detre aigri', 'deconnexion', '150.00', 1, '2024-02-08 14:29:05', '2024-02-08 14:29:05', '2024-02-16', 'oui', 'villier', 'ghh', 5);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `freelance_id` int DEFAULT NULL,
  `client_id` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`),
  KEY `freelance_id` (`freelance_id`),
  KEY `client_id` (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `session_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `expires_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`session_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `subscription_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `subscription_type` enum('basic','premium','gold') DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` enum('active','expired','cancelled') DEFAULT NULL,
  PRIMARY KEY (`subscription_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `project_id` int DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `transaction_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','completed','failed') DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `project_id` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `user_type` enum('visiteur','commanditaire','freelance','admin_simple','admin_principal') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `reset_id` varchar(32) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password_hash`, `user_type`, `created_at`, `reset_id`, `reset_expires`) VALUES
(1, 'kenza', 'kenzasedratie@gmail.com', '$2y$10$6nTmuwYtJGR4QtVX3rLXZ.Y4oIvdjoQsxQgCXWSMNnqxT.tRZIdFe', 'visiteur', '2024-01-18 10:21:18', '5d017da465f57d1b006aa8325ed7cf61', '2024-01-22 15:46:45'),
(2, 'kenza', 'kenzasedratie@gmail.com', '$2y$10$9k1GaZimTmUUhUASkKYOKeXTSROHWdLA3SG5C/3Z5PPCyI7ZyuEZ6', 'visiteur', '2024-01-18 10:22:26', NULL, NULL),
(3, 'aze', 'aze@aze.aze', '$2y$10$vsRsusbD7FWRQqUSX9R2sOgPTqpRy22RFBKwsHEwzqEGBpTd0BXim', 'visiteur', '2024-01-19 09:49:49', NULL, NULL),
(4, 'aze', 'aze@aze.aze', '$2y$10$PDhq9R9I6/o8f1iuaEFCq.NU/T8M.fK8vKJ15/jeabIqafYCC0m1W', 'visiteur', '2024-01-19 09:49:53', NULL, NULL),
(5, 'youcef', 'youcef@gmail.com', '$2y$10$rGugOm8CkbmIt4Mp1YXEjuaEysNBpG7LX5cQwZqYOs9E17qMdJ8N2', 'visiteur', '2024-01-19 14:40:25', NULL, NULL),
(6, 'youcef', 'youcef@gmail.com', '$2y$10$jCF7UQyf9CU/.GnOZkKDy.STqG3jyU6G1RNhke4mtJuA7GDLK32La', 'visiteur', '2024-01-19 14:46:30', NULL, NULL),
(7, 'youceff', 'youcef@gmail.comf', '$2y$10$BhJ36De24pWjzeSxDGVTQuiATGKjNkSlLiZB/XkIZ.eBesmlVTlNS', 'visiteur', '2024-01-19 14:46:47', NULL, NULL),
(8, 'youceff', 'youcef@gmail.com', '$2y$10$7.DyegpBVeFdE.nPqe/ZR.INgoQm3usNSN2y90lwTC/64/4Myg0PO', 'visiteur', '2024-01-19 14:50:12', NULL, NULL),
(9, 'youceff', 'youcef@gmail.com', '$2y$10$FDM8Rakxn6AbS.7oLYArDuM8b0U5CCBscZFjfE6fBsy9j8Khq9tQa', 'visiteur', '2024-01-19 14:50:25', NULL, NULL),
(10, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$C5sOf.86enL6/0a4pbB1ruQVNjD13iDhHlhpx6QIzLTyuvo5r3MKG', 'visiteur', '2024-01-19 14:57:16', NULL, NULL),
(11, 'youceff', 'youcef@gmail.com', '$2y$10$XoeBUQM3sac8VYN0ttNIpezJ.A6n6JieIt8LMfeB5ggg6ZZPfoqYK', 'visiteur', '2024-01-19 15:03:55', NULL, NULL),
(12, 'youceff', 'youcedtdf@gmail.com', '$2y$10$UWxBj.PxO70WBenOn.MtjeUe/JKnNpDeEEXi8a0M3/ZUOEVp/ZrHe', 'visiteur', '2024-01-19 15:04:10', NULL, NULL),
(13, 'youceff', 'youcedtdf@gmail.com', '$2y$10$CeFDI/yHvBjWgoDABo8rzuY1gIDhC7vt9iGUVA2I9FGLb3vF8dP82', 'visiteur', '2024-01-19 15:04:19', NULL, NULL),
(14, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$osp8QQiC1MW1kMqgwrEkeerJtCuZpZKNzI0o14AMtr/aQPFd/eq5G', 'visiteur', '2024-01-19 15:04:49', NULL, NULL),
(15, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$BquxZJCOJliSqQd0OQ8WvO8s73F7qhKqU7Nnv87qt.1lHeOGu4L6O', 'visiteur', '2024-01-19 15:04:59', NULL, NULL),
(16, 'test', 'test@gmail.fr', '$2y$10$/bc/Kj9WnDLa5lVLW6waY.i.yhAvnt4btSRHiLPTxa6oJgwHDYrBq', 'visiteur', '2024-01-22 09:59:18', NULL, NULL),
(17, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$A/XUyqsOpvJyYDZg/CQeoeBuNeEMtIsM6tqCIE/EeTp5NZ54kJQY.', 'visiteur', '2024-01-22 10:06:08', NULL, NULL),
(18, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$cvZaIKIGScE8lZSVXhb6GuRxtCbIwABy7KwGygw7nK/POkLh/FOnC', 'visiteur', '2024-01-22 10:07:18', NULL, NULL),
(19, 'kenza', 'youcedtdf@gmail.com', '$2y$10$bWsCpo9W75Ken53gV0kLceBX4wdThbE8Whsx4XhESy6JS8phvkT26', 'visiteur', '2024-01-22 10:18:27', NULL, NULL),
(20, 'kenzasedratie@gmail.', 'kenzasedratie@gmail.com', '$2y$10$k0OgXcPi3N3HcW5ysu0w4.MrYcjU0uOVxgKZvCkO2J.yboeh/MqRO', 'visiteur', '2024-01-22 13:03:13', NULL, NULL),
(21, 'kenzasedratie@gmail.com', 'frfrfrf@gtggtg.com', '$2y$10$xgba9LU.nnriS2iUiPjTtOfUPi5cyYMTaJYvTdcTHRhyU5Ofpyx22', 'visiteur', '2024-01-24 08:25:29', NULL, NULL),
(22, 'sitetestzef', 'kenzasedr@gmail.com', '$2y$10$kGsgz2d4ogfNFZKuSo6IeOpMvd26aMnwEBDqeC0ifczWSR7mwoM1C', 'visiteur', '2024-01-30 13:23:44', NULL, NULL),
(23, 'sitetest', 'site@gmail.com', '$2y$10$huP53vnKpgO5ZawdQ4th/.dx/97ooXEKvsWFn5yuagjRe3MI9CT9a', 'visiteur', '2024-02-08 14:10:20', NULL, NULL),
(24, 'sitetest', 'site@gmail.com', '$2y$10$0yxbAV8xOcYWZcI2MprjduqEyET6QFPdo4T60tMPhJlr.JxczpxZC', 'visiteur', '2024-02-08 14:13:27', NULL, NULL),
(25, 'sal', 'salimou@gmail.com', '$2y$10$KisAK5z/nUyL4DsISwbyfOzzXoKScykeYQKP4n7crjs4gZYtoB0Oy', 'visiteur', '2024-02-08 14:14:46', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
