-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mar 15 Mars 2016 à 17:48
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cd2016`
--

-- --------------------------------------------------------

--
-- Structure de la table `cd16_blocs_ven`
--

CREATE TABLE `cd16_blocs_ven` (
  `name` varchar(25) NOT NULL,
  `max` int(11) NOT NULL DEFAULT '0',
  `max_org` int(11) NOT NULL DEFAULT '0',
  `places` int(11) NOT NULL,
  `places_org` int(11) NOT NULL DEFAULT '0',
  `zone` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `price_half` int(11) NOT NULL,
  `price_abn` int(11) NOT NULL,
  `price_abn_half` int(11) NOT NULL,
  `color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cd16_blocs_ven`
--

INSERT INTO `cd16_blocs_ven` (`name`, `max`, `max_org`, `places`, `places_org`, `zone`, `price`, `price_half`, `price_abn`, `price_abn_half`, `color`) VALUES
('bloc_a', 249, 0, -145, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_a_sup', 103, 0, 52, 0, 'Zone bleue sup', 42, 22, 92, 47, 'primary'),
('bloc_b', 121, 0, 0, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_b_sup', 141, 0, 50, 0, 'Zone bleue sup', 42, 22, 92, 47, 'primary'),
('bloc_c', 127, 0, 0, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_c_sup', 179, 0, 8, 0, 'Zone bleue sup', 42, 22, 92, 47, 'primary'),
('bloc_d', 254, 0, 7, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_d_sup', 121, 0, 116, 0, 'Zone bleue sup', 42, 22, 92, 47, 'primary'),
('bloc_e', 78, 0, 0, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_e0', 102, 0, 0, 0, 'Zone Bleue', 42, 22, 92, 47, 'primary'),
('bloc_e_sup', 120, 0, 0, 0, 'Zone bleue sup', 42, 22, 92, 47, 'primary'),
('bloc_f', 78, 0, 0, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_f0', 78, 0, 0, 0, 'Zone bleue', 42, 22, 92, 47, 'primary'),
('bloc_g', 117, 0, 81, 0, 'Zone rouge', 42, 22, 92, 47, 'danger'),
('bloc_g_sup', 160, 0, 0, 0, 'Zone rouge sup', 42, 22, 92, 47, 'danger'),
('bloc_h', 130, 0, 26, 0, 'Zone rouge', 42, 22, 92, 47, 'danger'),
('bloc_h_sup', 122, 0, 0, 0, 'Zone rouge sup', 42, 22, 92, 47, 'danger'),
('bloc_i', 48, 0, 0, 0, 'Zone rouge', 42, 22, 92, 47, 'danger'),
('bloc_i_sup', 178, 0, 0, 0, 'Zone rouge sup', 42, 22, 92, 47, 'danger'),
('bloc_j', 130, 0, 31, 0, 'Zone rouge', 42, 22, 92, 47, 'danger'),
('bloc_j_sup', 114, 0, 0, 0, 'Zone rouge sup', 42, 22, 92, 47, 'danger'),
('bloc_k', 116, 0, 109, 0, 'Zone rouge', 42, 22, 92, 47, 'danger'),
('bloc_k_sup', 123, 0, 0, 0, 'Zone rouge sup', 42, 22, 92, 47, 'danger'),
('bloc_l', 115, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_l_sup', 122, 0, 10, 0, 'Zone jaune sup', 42, 22, 92, 47, 'warning'),
('bloc_m', 122, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_m_sup', 119, 0, 0, 0, 'Zone jaune sup', 42, 22, 92, 47, 'warning'),
('bloc_n', 109, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_n_sup', 179, 0, 46, 0, 'Zone jaune sup', 42, 22, 92, 47, 'warning'),
('bloc_o', 122, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_o_sup', 142, 0, 0, 0, 'Zone jaune sup', 42, 22, 92, 47, 'warning'),
('bloc_p', 116, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_p_sup', 57, 0, 100, 0, 'Zone jaune sup', 42, 22, 92, 47, 'warning'),
('bloc_q', 146, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_r', 146, 0, 0, 0, 'Zone jaune', 42, 22, 92, 47, 'warning'),
('bloc_s', 76, 0, 0, 0, 'Zone noire', 42, 22, 92, 47, 'default'),
('bloc_t', 93, 0, -15, 0, 'Zone noire', 42, 22, 92, 47, 'default'),
('bloc_u', 202, 0, 0, 0, 'Zone noire', 42, 22, 92, 47, 'default'),
('bloc_v', 92, 0, -6, 0, 'Zone noire', 42, 22, 92, 47, 'default'),
('bloc_x', 76, 0, 0, 0, 'Zone noire', 42, 22, 92, 47, 'default');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cd16_blocs_ven`
--
ALTER TABLE `cd16_blocs_ven`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
