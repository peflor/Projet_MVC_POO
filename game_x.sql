-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 18 mai 2022 à 15:19
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
-- Base de données : `game_x`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `nb_players` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_id` (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `title`, `nb_players`, `users_id`) VALUES
(1, 'Starcraft 2', 8, 7),
(2, 'Among Us', 10, 6),
(3, 'Valorant', 10, 2),
(5, 'Battlefield 6', 128, 5),
(6, 'Crash Bandicoot', 2, 3),
(7, 'Mario 64', 4, 4),
(8, 'Fart Cry', 1, 1),
(10, 'Xcom Enemy Within', 1, NULL),
(11, 'Tomb Raider', 1, NULL),
(12, 'Splinter Cell', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`) VALUES
(1, 'Maurin', 'Michel'),
(2, 'Musk', 'Elon'),
(3, 'Gates', 'Bill'),
(4, 'Washington', 'Georges'),
(5, 'Lincoln', 'Abraham'),
(6, 'McLane', 'John'),
(7, 'Fauley', 'Axel'),
(8, 'Hanks', 'tom'),
(10, 'Hamilton', 'Lewis');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
