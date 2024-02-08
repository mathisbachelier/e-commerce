-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 08 fév. 2024 à 17:01
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_cormmerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

CREATE TABLE `address` (
  `Id_address` int(11) NOT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `Id_category` int(11) NOT NULL,
  `Category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id_client` int(11) NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client_address`
--

CREATE TABLE `client_address` (
  `Id_client_address` int(11) NOT NULL,
  `Id_client` int(11) DEFAULT NULL,
  `Id_address` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `discount_coupon`
--

CREATE TABLE `discount_coupon` (
  `Id_discount_coupon` int(11) NOT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Discount_value` float DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `End_date` date DEFAULT NULL,
  `Id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `Id_order` int(11) NOT NULL,
  `Order_number` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Price_excluding_taxes` float DEFAULT NULL,
  `Id_client` int(11) DEFAULT NULL,
  `Id_address` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

CREATE TABLE `order_product` (
  `Id_order_product` int(11) NOT NULL,
  `Id_order` int(11) DEFAULT NULL,
  `Id_product` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `Id_product` int(11) NOT NULL,
  `Product_name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Price_excluding_taxes` float DEFAULT NULL,
  `Id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `Id_promotion` int(11) NOT NULL,
  `Promotion_name` varchar(255) DEFAULT NULL,
  `Promotion_value` float DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `End_date` date DEFAULT NULL,
  `Id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Id_address`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id_category`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_client`);

--
-- Index pour la table `client_address`
--
ALTER TABLE `client_address`
  ADD PRIMARY KEY (`Id_client_address`),
  ADD UNIQUE KEY `Id_client` (`Id_client`,`Id_address`),
  ADD KEY `fk_client_address_address` (`Id_address`);

--
-- Index pour la table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  ADD PRIMARY KEY (`Id_discount_coupon`),
  ADD UNIQUE KEY `Id_client` (`Id_client`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id_order`),
  ADD UNIQUE KEY `Id_client` (`Id_client`),
  ADD UNIQUE KEY `Id_address` (`Id_address`);

--
-- Index pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`Id_order_product`),
  ADD UNIQUE KEY `Id_order` (`Id_order`,`Id_product`),
  ADD KEY `fk_order_product_product` (`Id_product`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id_product`),
  ADD UNIQUE KEY `Id_category` (`Id_category`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`Id_promotion`),
  ADD UNIQUE KEY `Id_product` (`Id_product`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `address`
--
ALTER TABLE `address`
  MODIFY `Id_address` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `Id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client_address`
--
ALTER TABLE `client_address`
  MODIFY `Id_client_address` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  MODIFY `Id_discount_coupon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `Id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `Id_order_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `Id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `Id_promotion` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client_address`
--
ALTER TABLE `client_address`
  ADD CONSTRAINT `fk_client_address_address` FOREIGN KEY (`Id_address`) REFERENCES `address` (`Id_address`),
  ADD CONSTRAINT `fk_client_address_client` FOREIGN KEY (`Id_client`) REFERENCES `client` (`Id_client`);

--
-- Contraintes pour la table `discount_coupon`
--
ALTER TABLE `discount_coupon`
  ADD CONSTRAINT `fk_discount_coupon_client` FOREIGN KEY (`Id_client`) REFERENCES `client` (`Id_client`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_address` FOREIGN KEY (`Id_address`) REFERENCES `address` (`Id_address`),
  ADD CONSTRAINT `fk_order_client` FOREIGN KEY (`Id_client`) REFERENCES `client` (`Id_client`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `fk_order_product_order` FOREIGN KEY (`Id_order`) REFERENCES `order` (`Id_order`),
  ADD CONSTRAINT `fk_order_product_product` FOREIGN KEY (`Id_product`) REFERENCES `product` (`Id_product`);

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `fk_promotion_product` FOREIGN KEY (`Id_product`) REFERENCES `product` (`Id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
