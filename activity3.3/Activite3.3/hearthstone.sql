-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 juin 2022 à 19:08
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hearthstone`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartessort`
--

CREATE TABLE `cartessort` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'sort',
  `mana` int(11) NOT NULL,
  `degat` int(11) NOT NULL,
  `vie` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cartessort`
--

INSERT INTO `cartessort` (`id`, `type`, `mana`, `degat`, `vie`, `image`) VALUES
(11, 'sort', 1, 4, 0, '../cartes/1.jpg'),
(12, 'sort', 2, 3, 0, '../cartes/2.jpg'),
(13, 'sort', 7, 1, 0, '../cartes/3.jpg'),
(14, 'sort', 3, 5, 0, '../cartes/4.jpg'),
(15, 'sort', 5, 2, 0, '../cartes/5.jpg'),
(16, 'sort', 1, 4, 0, '../cartes/6.jpg'),
(17, 'sort', 2, 3, 0, '../cartes/7.jpg'),
(18, 'sort', 7, 2, 0, '../cartes/8.jpg'),
(19, 'sort', 3, 6, 0, '../cartes/9.jpg'),
(20, 'sort', 5, 5, 0, '../cartes/10.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cartessort`
--
ALTER TABLE `cartessort`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cartessort`
--
ALTER TABLE `cartessort`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
