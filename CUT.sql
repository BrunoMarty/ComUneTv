-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 04 Juillet 2017 à 13:26
-- Version du serveur :  5.7.18-0ubuntu0.16.04.1
-- Version de PHP :  7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CUT`
--
CREATE DATABASE IF NOT EXISTS `CUT` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `CUT`;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`id`, `id_user`, `content`) VALUES
(26, '0', 'azaaaza'),
(27, '0', ''),
(28, '0', ''),
(29, '0', 'azazaz'),
(30, '0', 'azazaz'),
(31, '0', 'azerty'),
(32, '0', ''),
(33, '0', 'azazaa'),
(34, '0', 'azazaa'),
(35, '0', 'azazaza'),
(36, '0', 'zezeezez'),
(37, '0', 'zezeezez'),
(38, '0', 'azazazazaz'),
(39, '0', 'azazaz'),
(40, '0', 'azaazzaz'),
(41, '0', 'test'),
(42, '0', 'bonjour');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_CO` int(11) NOT NULL,
  `user_CO` int(11) DEFAULT NULL,
  `video_CO` int(11) NOT NULL,
  `commentaire_CO` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id_GE` int(10) UNSIGNED NOT NULL,
  `nom_GE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id_NO` int(11) NOT NULL,
  `film_NO` int(11) NOT NULL,
  `note_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `programme`
--

CREATE TABLE `programme` (
  `id_PR` int(11) NOT NULL,
  `user__PR` int(11) NOT NULL,
  `video_PR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_RO` int(10) UNSIGNED NOT NULL,
  `nom_RO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id_RO`, `nom_RO`) VALUES
(4, 'utilisateur'),
(5, 'videaste'),
(6, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `semaine`
--

CREATE TABLE `semaine` (
  `id_SE` int(11) NOT NULL,
  `lundi_SE` int(11) NOT NULL,
  `mardi_SE` int(11) NOT NULL,
  `mercredi_SE` int(11) NOT NULL,
  `jeudi_SE` int(11) NOT NULL,
  `vendredi_SE` int(11) NOT NULL,
  `samedi_SE` int(11) NOT NULL,
  `dimanche_SE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_US` int(10) UNSIGNED NOT NULL,
  `nom_US` varchar(50) NOT NULL,
  `prenom_US` varchar(50) NOT NULL,
  `pseudo_US` varchar(50) NOT NULL,
  `mail_US` varchar(70) NOT NULL,
  `photo_US` varchar(400) DEFAULT NULL,
  `description_US` text,
  `role_US` int(10) UNSIGNED NOT NULL,
  `theme_US` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_US`, `nom_US`, `prenom_US`, `pseudo_US`, `mail_US`, `photo_US`, `description_US`, `role_US`, `theme_US`, `password`) VALUES
(1, 'test', 'test', 'test', 'test@test.com', NULL, NULL, 4, NULL, ''),
(4, 'azerty', 'azerty', 'azerty', 'c6e76c46ac287bd77a67ddb038af4f36', NULL, NULL, 4, NULL, 'azerty'),
(5, 'tttttttttt', 'tttttttttt', 'tttttttttt', 'tttttttttt@tttttttttt.com', NULL, NULL, 4, NULL, '509ed9f6fed35159804f2e5178224bad');

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id_VI` int(10) UNSIGNED NOT NULL,
  `upload_VI` date NOT NULL,
  `link_VI` varchar(400) NOT NULL,
  `name_VI` varchar(70) NOT NULL,
  `realisateur_VI` varchar(50) NOT NULL,
  `duree_VI` int(11) NOT NULL,
  `création_Vi` date NOT NULL,
  `description_VI` text NOT NULL,
  `genre_VI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `video`
--

INSERT INTO `video` (`id_VI`, `upload_VI`, `link_VI`, `name_VI`, `realisateur_VI`, `duree_VI`, `création_Vi`, `description_VI`, `genre_VI`) VALUES
(1, '2017-06-06', 'http://www.google.fr', 'Film 1', 'Realisateur 1', 163, '2015-10-04', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque tellus enim. Quisque pharetra bibendum massa, eget lacinia nunc semper eget. Nulla quis ipsum eu sem commodo tristique. Sed at malesuada nunc. Praesent consectetur, diam sit amet volutpat mollis, lectus risus elementum eros, vel vulputate odio neque a metus. Donec pretium purus vel ultricies iaculis. Suspendisse potenti. Aliquam dictum tortor ac ultricies tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam condimentum venenatis arcu, ut cursus nisl pharetra ut. In feugiat tellus nunc, vitae aliquet sem dignissim vehicula. Morbi ut risus ipsum. Nam maximus purus eget erat posuere tempus.', NULL),
(2, '2017-06-01', 'www.test.fr', 'Film 2', 'Realisateur 1', 58, '2014-12-14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque tellus enim. Quisque pharetra bibendum massa, eget lacinia nunc semper eget. Nulla quis ipsum eu sem commodo tristique. Sed at malesuada nunc. Praesent consectetur, diam sit amet volutpat mollis, lectus risus elementum eros, vel vulputate odio neque a metus. Donec pretium purus vel ultricies iaculis. Suspendisse potenti. Aliquam dictum tortor ac ultricies tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam condimentum venenatis arcu, ut cursus nisl pharetra ut. In feugiat tellus nunc, vitae aliquet sem dignissim vehicula. Morbi ut risus ipsum. Nam maximus purus eget erat posuere tempus.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vue`
--

CREATE TABLE `vue` (
  `id_VU` int(10) UNSIGNED NOT NULL,
  `user_VU` int(11) NOT NULL,
  `video_VU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_CO`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_GE`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id_NO`);

--
-- Index pour la table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`id_PR`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_RO`);

--
-- Index pour la table `semaine`
--
ALTER TABLE `semaine`
  ADD PRIMARY KEY (`id_SE`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_US`),
  ADD KEY `role_US` (`role_US`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_VI`);

--
-- Index pour la table `vue`
--
ALTER TABLE `vue`
  ADD PRIMARY KEY (`id_VU`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_CO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_GE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id_NO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `programme`
--
ALTER TABLE `programme`
  MODIFY `id_PR` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_RO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `semaine`
--
ALTER TABLE `semaine`
  MODIFY `id_SE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_US` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id_VI` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vue`
--
ALTER TABLE `vue`
  MODIFY `id_VU` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_role` FOREIGN KEY (`role_US`) REFERENCES `role` (`id_RO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
