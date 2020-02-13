-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 11 fév. 2020 à 09:09
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpsql`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_Projet` int(10) UNSIGNED NOT NULL,
  `projet_Nom` varchar(255) NOT NULL,
  `projet_Description` varchar(255) NOT NULL,
  `projet_Image` varchar(255) NOT NULL,
  `id_Projet_categorie` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `projet_categorie`
--

CREATE TABLE `projet_categorie` (
  `id_Projet_categorie` int(10) UNSIGNED NOT NULL,
  `projet_categorie_Titre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `projet_categorie`
--

INSERT INTO `projet_categorie` (`id_Projet_categorie`, `projet_categorie_Titre`) VALUES
(1, 'Site Web'),
(2, 'Application Mobile');

-- --------------------------------------------------------

--
-- Structure de la table `recommandation`
--

CREATE TABLE `recommandation` (
  `id_recommandation` int(10) UNSIGNED NOT NULL,
  `recommandation_Name` varchar(32) NOT NULL,
  `recommandation_Date` date NOT NULL,
  `recommandation_Desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(10) UNSIGNED NOT NULL,
  `users_Name` varchar(255) NOT NULL,
  `users_Firstname` varchar(255) NOT NULL,
  `users_Email` varchar(255) NOT NULL,
  `users_Pass` varchar(255) NOT NULL,
  `users_Admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `users_Name`, `users_Firstname`, `users_Email`, `users_Pass`, `users_Admin`) VALUES
(1, 'Le Petitcorps', 'Mathieu', 'mlpca35@gmail.com', '9cf95dacd226dcf43da376cdb6cbba7035218921', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_Projet`),
  ADD KEY `FK_projet_id_Projet_categorie` (`id_Projet_categorie`);

--
-- Index pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  ADD PRIMARY KEY (`id_Projet_categorie`);

--
-- Index pour la table `recommandation`
--
ALTER TABLE `recommandation`
  ADD PRIMARY KEY (`id_recommandation`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_Projet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `projet_categorie`
--
ALTER TABLE `projet_categorie`
  MODIFY `id_Projet_categorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `recommandation`
--
ALTER TABLE `recommandation`
  MODIFY `id_recommandation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_projet_id_Projet_categorie` FOREIGN KEY (`id_Projet_categorie`) REFERENCES `projet_categorie` (`id_Projet_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
