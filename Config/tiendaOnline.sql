-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 17, 2020 at 10:58 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiendaOnline`
--

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORIES`
--

CREATE TABLE `CATEGORIES` (
  `id_category` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `image` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `CONTACTS`
--

CREATE TABLE `CONTACTS` (
  `id_contact` int(11) NOT NULL,
  `name` int(45) NOT NULL,
  `email` int(45) NOT NULL,
  `telephone` int(45) NOT NULL,
  `affair` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `message` text COLLATE utf8_spanish_ci NOT NULL,
  `date_hours` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `OPINIONS`
--

CREATE TABLE `OPINIONS` (
  `id_opinion` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `num_stars` int(5) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PAYMENTS`
--

CREATE TABLE `PAYMENTS` (
  `id_payment` int(11) NOT NULL,
  `method` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `id_statu` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL,
  `date_hours` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTS`
--

CREATE TABLE `PRODUCTS` (
  `id_product` int(11) NOT NULL,
  `name` int(45) NOT NULL,
  `description` int(255) NOT NULL,
  `size` int(45) NOT NULL,
  `color` int(45) NOT NULL,
  `brand` int(45) NOT NULL,
  `inventory` int(45) NOT NULL,
  `offer` int(45) NOT NULL,
  `discount` int(45) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTS_DETAIL`
--

CREATE TABLE `PRODUCTS_DETAIL` (
  `id_prod` int(11) NOT NULL,
  `quantity` int(45) NOT NULL,
  `price` int(45) NOT NULL,
  `total` int(45) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SALES`
--

CREATE TABLE `SALES` (
  `id_sale` int(11) NOT NULL,
  `total` int(45) NOT NULL,
  `date_hour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `SHIPPING`
--

CREATE TABLE `SHIPPING` (
  `id_shipping` int(11) NOT NULL,
  `name_user` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `postal_code` int(45) NOT NULL,
  `state` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `colonie` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `street` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `num_ext` int(45) NOT NULL,
  `num_int` int(45) NOT NULL,
  `reference` text COLLATE utf8_spanish_ci NOT NULL,
  `telephone` int(45) NOT NULL,
  `id_statu` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL,
  `date_hours` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `STATUS`
--

CREATE TABLE `STATUS` (
  `id_statu` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telephone` int(45) NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `img_user` text COLLATE utf8_spanish_ci NOT NULL,
  `profile` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `CONTACTS`
--
ALTER TABLE `CONTACTS`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `OPINIONS`
--
ALTER TABLE `OPINIONS`
  ADD PRIMARY KEY (`id_opinion`),
  ADD KEY `id_usuario` (`id_user`);

--
-- Indexes for table `PAYMENTS`
--
ALTER TABLE `PAYMENTS`
  ADD PRIMARY KEY (`id_payment`),
  ADD KEY `id_salee` (`id_sale`),
  ADD KEY `id_statuu` (`id_statu`);

--
-- Indexes for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `PRODUCTS_DETAIL`
--
ALTER TABLE `PRODUCTS_DETAIL`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_saleee` (`id_sale`);

--
-- Indexes for table `SALES`
--
ALTER TABLE `SALES`
  ADD PRIMARY KEY (`id_sale`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `SHIPPING`
--
ALTER TABLE `SHIPPING`
  ADD PRIMARY KEY (`id_shipping`),
  ADD KEY `id_statu` (`id_statu`),
  ADD KEY `id_sale` (`id_sale`);

--
-- Indexes for table `STATUS`
--
ALTER TABLE `STATUS`
  ADD PRIMARY KEY (`id_statu`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CATEGORIES`
--
ALTER TABLE `CATEGORIES`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CONTACTS`
--
ALTER TABLE `CONTACTS`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `OPINIONS`
--
ALTER TABLE `OPINIONS`
  MODIFY `id_opinion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PAYMENTS`
--
ALTER TABLE `PAYMENTS`
  MODIFY `id_payment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `PRODUCTS_DETAIL`
--
ALTER TABLE `PRODUCTS_DETAIL`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `SALES`
--
ALTER TABLE `SALES`
  MODIFY `id_sale` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `SHIPPING`
--
ALTER TABLE `SHIPPING`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `STATUS`
--
ALTER TABLE `STATUS`
  MODIFY `id_statu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OPINIONS`
--
ALTER TABLE `OPINIONS`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`id_user`);

--
-- Constraints for table `PAYMENTS`
--
ALTER TABLE `PAYMENTS`
  ADD CONSTRAINT `id_salee` FOREIGN KEY (`id_sale`) REFERENCES `SALES` (`id_sale`),
  ADD CONSTRAINT `id_statuu` FOREIGN KEY (`id_statu`) REFERENCES `STATUS` (`id_statu`);

--
-- Constraints for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD CONSTRAINT `id_category` FOREIGN KEY (`id_category`) REFERENCES `CATEGORIES` (`id_category`);

--
-- Constraints for table `PRODUCTS_DETAIL`
--
ALTER TABLE `PRODUCTS_DETAIL`
  ADD CONSTRAINT `id_product` FOREIGN KEY (`id_product`) REFERENCES `PRODUCTS` (`id_product`),
  ADD CONSTRAINT `id_saleee` FOREIGN KEY (`id_sale`) REFERENCES `SALES` (`id_sale`);

--
-- Constraints for table `SALES`
--
ALTER TABLE `SALES`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `USERS` (`id_user`);

--
-- Constraints for table `SHIPPING`
--
ALTER TABLE `SHIPPING`
  ADD CONSTRAINT `id_sale` FOREIGN KEY (`id_sale`) REFERENCES `SALES` (`id_sale`),
  ADD CONSTRAINT `id_statu` FOREIGN KEY (`id_statu`) REFERENCES `STATUS` (`id_statu`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
