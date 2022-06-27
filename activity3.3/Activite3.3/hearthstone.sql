-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 juin 2022 à 18:41
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
(1, 'sort', 1, 4, 0, '../cartes/1.jpg'),
(2, 'sort', 2, 3, 0, '../cartes/2.jpg'),
(3, 'sort', 7, 1, 0, '../cartes/3.jpg'),
(4, 'sort', 3, 5, 0, '../cartes/4.jpg'),
(5, 'sort', 5, 2, 0, '../cartes/5.jpg'),
(6, 'sort', 1, 4, 0, '../cartes/6.jpg'),
(7, 'sort', 2, 3, 0, '../cartes/7.jpg'),
(8, 'sort', 7, 2, 0, '../cartes/8.jpg'),
(9, 'sort', 3, 6, 0, '../cartes/9.jpg'),
(10, 'sort', 5, 5, 0, '../cartes/10.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `deck`
--

CREATE TABLE `deck` (
  `id` int(100) NOT NULL,
  `id_joueur` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `deck`
--

INSERT INTO `deck` (`id`, `id_joueur`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `deck_cartes`
--

CREATE TABLE `deck_cartes` (
  `id` int(255) NOT NULL,
  `id_deck` int(100) NOT NULL,
  `id_carte` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `deck_cartes`
--

INSERT INTO `deck_cartes` (`id`, `id_deck`, `id_carte`) VALUES
(949, 1, 2),
(950, 1, 2),
(951, 1, 2),
(952, 1, 2),
(953, 1, 2),
(954, 1, 2),
(955, 1, 2),
(956, 1, 2),
(957, 1, 2),
(958, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(100) NOT NULL,
  `Ptsvie` int(100) NOT NULL DEFAULT 30,
  `CoutMana` int(100) NOT NULL DEFAULT 10,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `joueur`
--

INSERT INTO `joueur` (`id`, `Ptsvie`, `CoutMana`, `user_id`) VALUES
(1, 30, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `mail` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `mail`, `login`, `password`) VALUES
(1, 'samar@gmail.com', 'samar', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cartessort`
--
ALTER TABLE `cartessort`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `deck`
--
ALTER TABLE `deck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_joueur` (`id_joueur`);

--
-- Index pour la table `deck_cartes`
--
ALTER TABLE `deck_cartes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_deck` (`id_deck`),
  ADD KEY `id_carte` (`id_carte`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT pour la table `deck`
--
ALTER TABLE `deck`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `deck_cartes`
--
ALTER TABLE `deck_cartes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=959;

--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `deck`
--
ALTER TABLE `deck`
  ADD CONSTRAINT `deck_ibfk_1` FOREIGN KEY (`id_joueur`) REFERENCES `joueur` (`id`);

--
-- Contraintes pour la table `deck_cartes`
--
ALTER TABLE `deck_cartes`
  ADD CONSTRAINT `deck_cartes_ibfk_1` FOREIGN KEY (`id_deck`) REFERENCES `deck` (`id`),
  ADD CONSTRAINT `deck_cartes_ibfk_2` FOREIGN KEY (`id_carte`) REFERENCES `cartessort` (`id`);

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
