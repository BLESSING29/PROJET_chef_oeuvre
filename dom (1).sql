-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 23 sep. 2022 à 20:03
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `wise`
--

-- --------------------------------------------------------

--
-- Structure de la table `dom`
--

CREATE TABLE `dom` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `langue` varchar(50) NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dom`
--

INSERT INTO `dom` (`id`, `pseudo`, `email`, `password`, `ip`, `langue`, `date_inscription`, `token`) VALUES
(4, 'ATCHRIMI Blessing ', 'essenam2605@gmail.com', '$2y$12$BU.htbtHTBg7FF8yKdcz4uOYQhHuNr0GT4P3HsCHCfERrVdi3O/.G', '::1', 'français', '2022-09-13 10:52:44', '990af5c0d2db946d7135fe13b2470c928737b85558b4e909fb616f801fa5b9f372351af9ee87d09bd1509ed5c91a2d7d67aa097ad19d8043f0981c630eac5dda'),
(5, 'patrice ATCHRIMI', 'patrice@gmail.com', '$2y$12$ejllwsHPGTjlFdXxz0aD8e5guszito6Kqk5nVwWEqMoVxuqpvcG3e', '::1', 'anglais', '2022-09-20 15:13:18', '27472cbd792060840b9aea1df90b27951260edae1187b2968b87b071fdf58e22960ff91877e90fc90aa4d962b5a8456c1a1f92a43e397506bfa0e9433af3a016dbfeaa29341ef12d95f9b424c8dfadf19991d18d214b3b9e91b1827122df3fdff13c16f499dc57d8957489522c28831d1be9184b92d43e1f396b8eff7eb19890d9bf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dom`
--
ALTER TABLE `dom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dom`
--
ALTER TABLE `dom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
