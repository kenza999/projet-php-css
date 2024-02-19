-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 15 fév. 2024 à 14:32
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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `user_type` enum('visiteur','commanditaire','freelance','admin_simple','admin_principal') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `carte_dentite` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` enum('Masculin','Féminin') DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `description_dutilisateur` text NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `nom`, `email`, `password_hash`, `user_type`, `created_at`, `carte_dentite`, `date_de_naissance`, `genre`, `photo`, `description_dutilisateur`, `nationalite`) VALUES
(1, 'kenza', '0', 'kenzasedratie@gmail.com', '$2y$10$6nTmuwYtJGR4QtVX3rLXZ.Y4oIvdjoQsxQgCXWSMNnqxT.tRZIdFe', 'visiteur', '2024-01-18 10:21:18', '5d017da465f57d1b006aa8325ed7cf61', '2024-01-22', NULL, '', '', ''),
(2, 'kenza', '0', 'kenzasedratie@gmail.com', '$2y$10$9k1GaZimTmUUhUASkKYOKeXTSROHWdLA3SG5C/3Z5PPCyI7ZyuEZ6', 'visiteur', '2024-01-18 10:22:26', '', '0000-00-00', NULL, '', '', ''),
(3, 'aze', '0', 'aze@aze.aze', '$2y$10$vsRsusbD7FWRQqUSX9R2sOgPTqpRy22RFBKwsHEwzqEGBpTd0BXim', 'visiteur', '2024-01-19 09:49:49', '', '0000-00-00', NULL, '', '', ''),
(4, 'aze', '0', 'aze@aze.aze', '$2y$10$PDhq9R9I6/o8f1iuaEFCq.NU/T8M.fK8vKJ15/jeabIqafYCC0m1W', 'visiteur', '2024-01-19 09:49:53', '', '0000-00-00', NULL, '', '', ''),
(5, 'youcef', '0', 'youcef@gmail.com', '$2y$10$rGugOm8CkbmIt4Mp1YXEjuaEysNBpG7LX5cQwZqYOs9E17qMdJ8N2', 'visiteur', '2024-01-19 14:40:25', '', '0000-00-00', NULL, '', '', ''),
(6, 'youcef', '0', 'youcef@gmail.com', '$2y$10$jCF7UQyf9CU/.GnOZkKDy.STqG3jyU6G1RNhke4mtJuA7GDLK32La', 'visiteur', '2024-01-19 14:46:30', '', '0000-00-00', NULL, '', '', ''),
(7, 'youceff', '0', 'youcef@gmail.comf', '$2y$10$BhJ36De24pWjzeSxDGVTQuiATGKjNkSlLiZB/XkIZ.eBesmlVTlNS', 'visiteur', '2024-01-19 14:46:47', '', '0000-00-00', NULL, '', '', ''),
(8, 'youceff', '0', 'youcef@gmail.com', '$2y$10$7.DyegpBVeFdE.nPqe/ZR.INgoQm3usNSN2y90lwTC/64/4Myg0PO', 'visiteur', '2024-01-19 14:50:12', '', '0000-00-00', NULL, '', '', ''),
(9, 'youceff', '0', 'youcef@gmail.com', '$2y$10$FDM8Rakxn6AbS.7oLYArDuM8b0U5CCBscZFjfE6fBsy9j8Khq9tQa', 'visiteur', '2024-01-19 14:50:25', '', '0000-00-00', NULL, '', '', ''),
(10, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$C5sOf.86enL6/0a4pbB1ruQVNjD13iDhHlhpx6QIzLTyuvo5r3MKG', 'visiteur', '2024-01-19 14:57:16', '', '0000-00-00', NULL, '', '', ''),
(11, 'youceff', '0', 'youcef@gmail.com', '$2y$10$XoeBUQM3sac8VYN0ttNIpezJ.A6n6JieIt8LMfeB5ggg6ZZPfoqYK', 'visiteur', '2024-01-19 15:03:55', '', '0000-00-00', NULL, '', '', ''),
(12, 'youceff', '0', 'youcedtdf@gmail.com', '$2y$10$UWxBj.PxO70WBenOn.MtjeUe/JKnNpDeEEXi8a0M3/ZUOEVp/ZrHe', 'visiteur', '2024-01-19 15:04:10', '', '0000-00-00', NULL, '', '', ''),
(13, 'youceff', '0', 'youcedtdf@gmail.com', '$2y$10$CeFDI/yHvBjWgoDABo8rzuY1gIDhC7vt9iGUVA2I9FGLb3vF8dP82', 'visiteur', '2024-01-19 15:04:19', '', '0000-00-00', NULL, '', '', ''),
(14, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$osp8QQiC1MW1kMqgwrEkeerJtCuZpZKNzI0o14AMtr/aQPFd/eq5G', 'visiteur', '2024-01-19 15:04:49', '', '0000-00-00', NULL, '', '', ''),
(15, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$BquxZJCOJliSqQd0OQ8WvO8s73F7qhKqU7Nnv87qt.1lHeOGu4L6O', 'visiteur', '2024-01-19 15:04:59', '', '0000-00-00', NULL, '', '', ''),
(16, 'test', '0', 'test@gmail.fr', '$2y$10$/bc/Kj9WnDLa5lVLW6waY.i.yhAvnt4btSRHiLPTxa6oJgwHDYrBq', 'visiteur', '2024-01-22 09:59:18', '', '0000-00-00', NULL, '', '', ''),
(17, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$A/XUyqsOpvJyYDZg/CQeoeBuNeEMtIsM6tqCIE/EeTp5NZ54kJQY.', 'visiteur', '2024-01-22 10:06:08', '', '0000-00-00', NULL, '', '', ''),
(18, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$cvZaIKIGScE8lZSVXhb6GuRxtCbIwABy7KwGygw7nK/POkLh/FOnC', 'visiteur', '2024-01-22 10:07:18', '', '0000-00-00', NULL, '', '', ''),
(19, 'kenza', '0', 'youcedtdf@gmail.com', '$2y$10$bWsCpo9W75Ken53gV0kLceBX4wdThbE8Whsx4XhESy6JS8phvkT26', 'visiteur', '2024-01-22 10:18:27', '', '0000-00-00', NULL, '', '', ''),
(20, 'kenzasedratie@gmail.', '0', 'kenzasedratie@gmail.com', '$2y$10$k0OgXcPi3N3HcW5ysu0w4.MrYcjU0uOVxgKZvCkO2J.yboeh/MqRO', 'visiteur', '2024-01-22 13:03:13', '', '0000-00-00', NULL, '', '', ''),
(21, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$xgba9LU.nnriS2iUiPjTtOfUPi5cyYMTaJYvTdcTHRhyU5Ofpyx22', 'visiteur', '2024-01-24 08:25:29', '', '0000-00-00', NULL, '', '', ''),
(22, 'sitetestzef', '0', 'kenzasedr@gmail.com', '$2y$10$kGsgz2d4ogfNFZKuSo6IeOpMvd26aMnwEBDqeC0ifczWSR7mwoM1C', 'visiteur', '2024-01-30 13:23:44', '', '0000-00-00', NULL, '', '', ''),
(23, 'sitetest', '0', 'site@gmail.com', '$2y$10$huP53vnKpgO5ZawdQ4th/.dx/97ooXEKvsWFn5yuagjRe3MI9CT9a', 'visiteur', '2024-02-08 14:10:20', '', '0000-00-00', NULL, '', '', ''),
(24, 'sitetest', '0', 'site@gmail.com', '$2y$10$0yxbAV8xOcYWZcI2MprjduqEyET6QFPdo4T60tMPhJlr.JxczpxZC', 'visiteur', '2024-02-08 14:13:27', '', '0000-00-00', NULL, '', '', ''),
(25, 'sal', '0', 'salimou@gmail.com', '$2y$10$KisAK5z/nUyL4DsISwbyfOzzXoKScykeYQKP4n7crjs4gZYtoB0Oy', 'visiteur', '2024-02-08 14:14:46', '', '0000-00-00', NULL, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
