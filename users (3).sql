-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 fév. 2024 à 11:59
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `carte_didentite` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` enum('Masculin','Féminin') DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `description_dutilisateur` text NOT NULL,
  `nationalite` varchar(255) NOT NULL,
  `verificationUser` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `username`, `nom`, `email`, `password_hash`, `created_at`, `carte_didentite`, `date_de_naissance`, `genre`, `photo`, `description_dutilisateur`, `nationalite`, `verificationUser`) VALUES
(1, 'kenza', '0', 'kenzasedratie@gmail.com', '$2y$10$6nTmuwYtJGR4QtVX3rLXZ.Y4oIvdjoQsxQgCXWSMNnqxT.tRZIdFe', '2024-01-18 10:21:18', '5d017da465f57d1b006aa8325ed7cf61', '2024-01-22', NULL, '', '', '', 0),
(2, 'kenza', '0', 'kenzasedratie@gmail.com', '$2y$10$9k1GaZimTmUUhUASkKYOKeXTSROHWdLA3SG5C/3Z5PPCyI7ZyuEZ6', '2024-01-18 10:22:26', '', '0000-00-00', NULL, '', '', '', 0),
(3, 'aze', '0', 'aze@aze.aze', '$2y$10$vsRsusbD7FWRQqUSX9R2sOgPTqpRy22RFBKwsHEwzqEGBpTd0BXim', '2024-01-19 09:49:49', '', '0000-00-00', NULL, '', '', '', 0),
(4, 'aze', '0', 'aze@aze.aze', '$2y$10$PDhq9R9I6/o8f1iuaEFCq.NU/T8M.fK8vKJ15/jeabIqafYCC0m1W', '2024-01-19 09:49:53', '', '0000-00-00', NULL, '', '', '', 0),
(5, 'youcef', '0', 'youcef@gmail.com', '$2y$10$rGugOm8CkbmIt4Mp1YXEjuaEysNBpG7LX5cQwZqYOs9E17qMdJ8N2', '2024-01-19 14:40:25', '', '0000-00-00', NULL, '', '', '', 0),
(6, 'youcef', '0', 'youcef@gmail.com', '$2y$10$jCF7UQyf9CU/.GnOZkKDy.STqG3jyU6G1RNhke4mtJuA7GDLK32La', '2024-01-19 14:46:30', '', '0000-00-00', NULL, '', '', '', 0),
(7, 'youceff', '0', 'youcef@gmail.comf', '$2y$10$BhJ36De24pWjzeSxDGVTQuiATGKjNkSlLiZB/XkIZ.eBesmlVTlNS', '2024-01-19 14:46:47', '', '0000-00-00', NULL, '', '', '', 0),
(8, 'youceff', '0', 'youcef@gmail.com', '$2y$10$7.DyegpBVeFdE.nPqe/ZR.INgoQm3usNSN2y90lwTC/64/4Myg0PO', '2024-01-19 14:50:12', '', '0000-00-00', NULL, '', '', '', 0),
(9, 'youceff', '0', 'youcef@gmail.com', '$2y$10$FDM8Rakxn6AbS.7oLYArDuM8b0U5CCBscZFjfE6fBsy9j8Khq9tQa', '2024-01-19 14:50:25', '', '0000-00-00', NULL, '', '', '', 0),
(10, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$C5sOf.86enL6/0a4pbB1ruQVNjD13iDhHlhpx6QIzLTyuvo5r3MKG', '2024-01-19 14:57:16', '', '0000-00-00', NULL, '', '', '', 0),
(11, 'youceff', '0', 'youcef@gmail.com', '$2y$10$XoeBUQM3sac8VYN0ttNIpezJ.A6n6JieIt8LMfeB5ggg6ZZPfoqYK', '2024-01-19 15:03:55', '', '0000-00-00', NULL, '', '', '', 0),
(12, 'youceff', '0', 'youcedtdf@gmail.com', '$2y$10$UWxBj.PxO70WBenOn.MtjeUe/JKnNpDeEEXi8a0M3/ZUOEVp/ZrHe', '2024-01-19 15:04:10', '', '0000-00-00', NULL, '', '', '', 0),
(13, 'youceff', '0', 'youcedtdf@gmail.com', '$2y$10$CeFDI/yHvBjWgoDABo8rzuY1gIDhC7vt9iGUVA2I9FGLb3vF8dP82', '2024-01-19 15:04:19', '', '0000-00-00', NULL, '', '', '', 0),
(14, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$osp8QQiC1MW1kMqgwrEkeerJtCuZpZKNzI0o14AMtr/aQPFd/eq5G', '2024-01-19 15:04:49', '', '0000-00-00', NULL, '', '', '', 0),
(15, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$BquxZJCOJliSqQd0OQ8WvO8s73F7qhKqU7Nnv87qt.1lHeOGu4L6O', '2024-01-19 15:04:59', '', '0000-00-00', NULL, '', '', '', 0),
(16, 'test', '0', 'test@gmail.fr', '$2y$10$/bc/Kj9WnDLa5lVLW6waY.i.yhAvnt4btSRHiLPTxa6oJgwHDYrBq', '2024-01-22 09:59:18', '', '0000-00-00', NULL, '', '', '', 0),
(17, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$A/XUyqsOpvJyYDZg/CQeoeBuNeEMtIsM6tqCIE/EeTp5NZ54kJQY.', '2024-01-22 10:06:08', '', '0000-00-00', NULL, '', '', '', 0),
(18, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$cvZaIKIGScE8lZSVXhb6GuRxtCbIwABy7KwGygw7nK/POkLh/FOnC', '2024-01-22 10:07:18', '', '0000-00-00', NULL, '', '', '', 0),
(19, 'kenza', '0', 'youcedtdf@gmail.com', '$2y$10$bWsCpo9W75Ken53gV0kLceBX4wdThbE8Whsx4XhESy6JS8phvkT26', '2024-01-22 10:18:27', '', '0000-00-00', NULL, '', '', '', 0),
(20, 'kenzasedratie@gmail.', '0', 'kenzasedratie@gmail.com', '$2y$10$k0OgXcPi3N3HcW5ysu0w4.MrYcjU0uOVxgKZvCkO2J.yboeh/MqRO', '2024-01-22 13:03:13', '', '0000-00-00', NULL, '', '', '', 0),
(21, 'kenzasedratie@gmail.com', '0', 'frfrfrf@gtggtg.com', '$2y$10$xgba9LU.nnriS2iUiPjTtOfUPi5cyYMTaJYvTdcTHRhyU5Ofpyx22', '2024-01-24 08:25:29', '', '0000-00-00', NULL, '', '', '', 0),
(22, 'sitetestzef', '0', 'kenzasedr@gmail.com', '$2y$10$kGsgz2d4ogfNFZKuSo6IeOpMvd26aMnwEBDqeC0ifczWSR7mwoM1C', '2024-01-30 13:23:44', '', '0000-00-00', NULL, '', '', '', 0),
(23, 'sitetest', '0', 'site@gmail.com', '$2y$10$huP53vnKpgO5ZawdQ4th/.dx/97ooXEKvsWFn5yuagjRe3MI9CT9a', '2024-02-08 14:10:20', '', '0000-00-00', NULL, '', '', '', 0),
(24, 'sitetest', '0', 'site@gmail.com', '$2y$10$0yxbAV8xOcYWZcI2MprjduqEyET6QFPdo4T60tMPhJlr.JxczpxZC', '2024-02-08 14:13:27', '', '0000-00-00', NULL, '', '', '', 0),
(25, 'sal', '0', 'salimou@gmail.com', '$2y$10$KisAK5z/nUyL4DsISwbyfOzzXoKScykeYQKP4n7crjs4gZYtoB0Oy', '2024-02-08 14:14:46', '', '0000-00-00', NULL, '', '', '', 0),
(26, 'kenza', 'sedrati', 'kenzasedrati380@gmail.com', '$2y$10$9Fvl01depNA.dTLOKVMjT.Tr7fexmWp/Ola3rL5j4npcwWh44rM3G', '2024-02-16 09:35:28', 'acceuilFR.jpg', '1999-02-08', 'Féminin', 'acceuilFR.jpg', 'jkjb', 'francaise', 0),
(27, 'dsgdfghft', 'hfghfc', 'dgidfjghio@gmail.com', '$2y$10$9MC.apkWSU14GDYTKp50POuOKFsir09gdbDOywIPH/l7Pa9a034ai', '2024-02-16 09:39:00', 'Cv Web Developer Resume.jpg', '2024-01-31', 'Masculin', 'Cv Web Developer Resume.jpg', '$*pm^*$', 'russe', 0),
(28, 'fghgfh', 'hjgjg', 'fdfhfj@gmauil.com', '$2y$10$NNTg9XspLitrXfqE0e2U5uOq5hb8FmpqjxHhL59Av5MLMPBELeZuK', '2024-02-16 09:39:57', 'pexels-rachel-claire-5531004.jpg', '2024-02-03', 'Féminin', 'pexels-rachel-claire-5531004.jpg', 'kjhkhkh', 'indienne', 0),
(29, 'yhrtfr', 'ghjutgfj', 'gyjgyj@gmail.com', '$2y$10$eLtqrbQF5d8CrapjQNIpO.odomJsoUIm03iRRzmm4OEv.Tm72anDK', '2024-02-16 09:45:42', 'change stage.jpg', '2024-02-14', 'Masculin', 'change stage.jpg', 'gkj', 'mexicaine', 0),
(30, 'etery', 'ryrty', 'tyryh@gmail.com', '$2y$10$MefM/GO.EZoaxYbqp9fBheuMLnNplRuOo8PYruBEFcZhUa0lA6tYq', '2024-02-16 09:51:14', 'logooo.avif', '2024-02-03', 'Féminin', 'logooo.avif', 'jkljl', 'indienne', 0),
(31, 'lhjl', 'jklhl', 'jlhjl@gmail.com', '$2y$10$zm13OxKTTo2u9vdyuEh6R.ROMJbAz05EPEY6SMdniCfDatfjXwQ6S', '2024-02-16 09:52:34', 'acceuilFR.jpg', '2024-02-09', 'Féminin', 'acceuilFR.jpg', '*ml*', 'indienne', 0),
(32, 'hdrfhdff', 'gfhfghf', 'hghgjgj@gmail.com', '$2y$10$olzqbgr39miAoXZtksTBZubJWyUESsPgGRnbHFg2NaNBqoIjcVJB.', '2024-02-16 09:55:22', 'ferrer.jpg', '2024-02-13', 'Masculin', 'ferrer.jpg', 'gjgfjg', 'bresilienne', 0),
(33, 'jghj', 'jg', 'jgvs@gmail.com', '$2y$10$MjQBF5R.Gg7tF1blKVkUOeYijLce9nuOxBQhzdcvoHZSLG3.bHMpi', '2024-02-16 10:00:05', 'acceuilFR.jpg', '2024-02-07', 'Masculin', 'acceuilFR.jpg', 'hgfhfc', 'russe', 0),
(34, 'gszqcgh', 'sqc', 'site@gmail.com', '$2y$10$i6IcklO5IHs61APNnL4l..UM4DNDq5uSACqwBaaShYVlR11hn4SsS', '2024-02-16 10:14:35', 'logooo.avif', '2024-02-15', 'Masculin', 'logooo.avif', 'a', 'danoise', 0),
(35, 'sitetest', 'sedrati', 'kenzasedrati380@gmail.com', '$2y$10$x7SAdjZnevfMx2sYyBj7kuaPM929LYoGK7ApegdZ5WqCVPGgXgB6q', '2024-02-16 10:23:21', 'logooo.avif', '2024-02-03', 'Masculin', 'logooo.avif', 'q', 'norvegienne', 0),
(36, 'test', 'kenza sedrati', 'kenzasedratie@gmail.com', '$2y$10$RF6Df.hQZXH1gsvUU9u5KOXibXMckXu2ut3YmRYIHrijrZhHykoau', '2024-02-16 10:29:31', 'logoEssaye.jpg', '2024-02-02', 'Masculin', 'logoEssaye.jpg', 'd', 'danoise', 0),
(37, 'test2', 'test2', 'test2@gmail.com', '$2y$10$SwTp80QiL4wo0ZplUrc31efIEmCkVoZzbHBXAuDrpO5K1jNiXMGdO', '2024-02-16 10:35:29', 'ferrer.jpg', '2024-02-22', 'Féminin', 'ferrer.jpg', 'uygjytij', 'espagnole', 0),
(38, 'tuftgutgu', 'yuitgtyiyhi', 'tyiyuiyuhioyi@fhytfuj.com', '$2y$10$hTR0tdfGA1qTL1RmsOcETOZfzYuywIoObuRnL2q9ZZoPACiF8elNm', '2024-02-16 10:39:00', 'logoEssaye.jpg', '2024-02-06', 'Féminin', 'logoEssaye.jpg', 'ghkgh,', 'mexicaine', 0),
(39, 'tugyjgybijgb', 'gyikyhki', 'yhikugkihyi@hikjiyuho.com', '$2y$10$aktmGilmu6nB43jYxbZsLuTYj5.HnNQ/ce0G74ysaSq2kvRgTL86G', '2024-02-16 10:39:56', 'logoEssaye.jpg', '2024-02-07', 'Masculin', 'logoEssaye.jpg', 'hfgvjgj', 'bresilienne', 0),
(40, 'fghjfgj', 'gjgfj', 'jghjkghk@jutyij.fr', '$2y$10$Xb14vz8ZAi/rt4CoaX9knuofaWTLkNKsfUaqBbyzXKedPmyUce3eS', '2024-02-16 10:48:19', 'pexels-rachel-claire-5531004.jpg', '2024-02-22', 'Masculin', 'pexels-rachel-claire-5531004.jpg', 'ghfh', 'indienne', 0),
(41, 'gjghj', 'ghjkg', 'ghkghksalimou@gmail.com', '$2y$10$votvdM99gwWMuQW17sv1ruC5zZWJ3v16sOwpgZcdae9r3hlUxoD7S', '2024-02-16 10:48:47', 'project-1.jpg', '2024-02-16', 'Masculin', 'project-1.jpg', 'hjfvnjv', 'indienne', 0),
(42, 'hfgj', 'gj', 'dgsdhgsalimou@gmail.com', '$2y$10$EtnlhW.xFW.68cuACupIj.KfZTfsU5SBurlZD3611hFrXproe5pDq', '2024-02-16 10:52:14', 'IMG_0135.jpeg', '2024-02-23', 'Masculin', 'IMG_0135.jpeg', 'fgjghjk', 'chinoise', 0),
(43, 'salimou', 'kenza sedra', 'kenzasedratie@gmail.com', '$2y$10$VExZgQqlM/uuM8yUmBTYruCGbQM..ehvUl8T8hfX5drQc85LNz.U2', '2024-02-16 10:56:49', 'pexels-rachel-claire-5531004.jpg', '2024-02-01', 'Masculin', 'pexels-rachel-claire-5531004.jpg', 'gh', 'norvegienne', 0),
(44, 'salimou', 'sedrati', 'kenzasedrati380@gmail.com', '$2y$10$oe8waFjpSjq8LKCPJUmng.hkTB8qGcWjDY4ltYr12Mm7QDzDaQBx.', '2024-02-16 11:00:55', 'pexels-rachel-claire-5531004.jpg', '2024-02-01', 'Masculin', 'pexels-rachel-claire-5531004.jpg', 'yd', 'suedoise', 0),
(45, 'uoujàjçàum', 'ouiouio', 'iuioujiosalimou@gmail.com', '$2y$10$UwtPWmIiRbWOnVKYR.Fl/OnPC4YILMDKbRP7GyJVjUCfKHzd7wW7S', '2024-02-16 11:02:54', 'logooo.avif', '2024-02-06', 'Masculin', 'logooo.avif', 'ihui', 'norvegienne', 0),
(46, 'salimou', 'kenza sedrati', 'kenzasedratie@gmail.com', '$2y$10$ccHzcCc4FRlo1KTe2NAq6.QR3LsNsDk.c..30AT9L7KJhC124wubq', '2024-02-16 11:06:21', 'pexels-rachel-claire-5531004.jpg', '2024-02-01', 'Masculin', 'pexels-rachel-claire-5531004.jpg', 'ju', 'danoise', 0),
(47, 'salimo', 'kenza sedrati', 'kenzasedratie@gmail.com', '$2y$10$G4rhikYmOz1SHm0k8zDmx.J.z5u40QDAGLcgrCT33aOny8UUfOMg2', '2024-02-16 11:13:56', 'logooo.avif', '2252-05-04', 'Féminin', 'logooo.avif', '^p', 'russe', 0),
(48, 'salim', 'dgvdfg', 'gjyhjgvbhhsalimou@gmail.com', '$2y$10$r6Q/NsP9VjSpscwYfPPpSeI5m7qd5KYA.COYtB0O/9oAYdDIl7.lS', '2024-02-16 11:15:08', 'acceuilFR.jpg', '2024-02-20', 'Masculin', 'acceuilFR.jpg', ',hn,jhk,', 'mexicaine', 0),
(49, 'salimou@gmail.com', 'givyig', 'ghigyisalimou@gmail.com', '$2y$10$JH1s7SVsnprESjdM5DN0GuaNiSe0W5Ra4Hh8GPYkAMc99px8NHMc.', '2024-02-16 11:24:34', 'change stage.jpg', '2024-02-10', 'Masculin', 'change stage.jpg', 'fhfch', 'australienne', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
