-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 déc. 2021 à 13:19
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contact`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` text DEFAULT NULL,
  `prenom` text DEFAULT NULL,
  `numero` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `qualite` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `numero`, `email`, `qualite`) VALUES
(1, 'Random0', 'EssaiBase', '0707070707', 'oh_doux_test@ceci_est_un_test.test', 'Un gros test'),
(2, 'RYDUFFKHJDFODLDFHQLS', 'ydifjgnbsjzkldfjghhjqk', '1234567890', 'tyzusdkcjn@gzshd.yedhc', 'ueyziosmdkflckjfhytduriusoepdxlck'),
(3, '**password**', '**admin**', '0875754596', '**user@user.adminuser**', '**a_G@M3RZ**'),
(4, 'print(\'', 'Hello World!\')', '0000000000', 'u=sum([1,3,8,3,2,9])@u+=1.print(u)', 'print(\'  ^  \n /| \n/|||\')'),
(5, 'azerty', 'qwerty', '1121231234', 'azertyuiop', 'qwertyuiop');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
