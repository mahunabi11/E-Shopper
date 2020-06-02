-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creative`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(20) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `titel`, `price`, `photo`) VALUES
(19, 'Nice New Jacket', '$200.00', '500bfc8a73b83f42e4e3acd0239edd22.jpg'),
(21, 'Black and White Stripes Dress', '$300.00', 'f37fc7a8c25b6e79bf48b299689812e4.jpg'),
(22, 'Exclusive winter men wearing', '$360.00', 'ba49976511df9fb62a494b5a73945544.jpg'),
(23, 'Fashionable Black Stripes Dress', '$440.00', 'a00bfad31463e325ae3df85a6569cd8b.jpg'),
(25, 'New Suit For Men', '$700.00', 'fa2a9dc6092ea92391f018c978f37cdd.jpg'),
(31, 'Exclusive Winter Wearing', '$900.00', 'e4adef3f9a83da1608482601fcdd9ade.jpg'),
(32, 'Flamboyant Blue Top', '$780.00', '192d544c86eeb37f556444d378b192c8.jpg'),
(35, 'Flamboyant Pink Top', '$670.00', 'cf548acea169a48dd50dcfd8bca6ae4f.jpg'),
(36, 'Flamboyant Red Top', '$1100.00', '8a73172174d6984240ec5d78c6ca239d.jpg'),
(37, 'Summer Exclusive', '$420.00', '954a01c72d23b4a84a694109e6fb2f65.jpg'),
(38, 'Young Women Wearing Dress', '$750.00', '973f8e01cb8b2867c76b3cf1a44d60a6.jpg'),
(39, 'Fashionable Nice Dress', '$690.00', '395dfbdf907a323ffe29f3d81b65667d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
