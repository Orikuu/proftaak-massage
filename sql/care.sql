-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2018 at 07:41 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `care`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `title` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(29) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`) VALUES
(1, 'CBD', 'CBD olie', 'CBD', 9),
(2, 'ANdjsand', 'asjdn', 'cbd', 90);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `title` varchar(99) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(29) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`title`, `description`, `image`, `id`) VALUES
('Relax Massage', 'De relaxmassage vermindert vermoeidheid, helpt u ontspannen en bouwt uw energie weer op. Meestal gaat het hier om een zachtere massage, maar als client kunt u hierin ook zeker uw voorkeur aangeven. De duur verschilt. Onze masseurs en masseuses helpen u graag met een volledige ontspanning.', 'Relax', 1),
('Sport Massage', 'Sportmassage is niet alleen bedoeld voor sporters. Ook voor niet-sporters kan sportmassage goed zijn. Denk aan rug, nek, schouderklachten die vaak worden veroorzaakt door een verkeerde werkhouding. Ook stress kan een belangrijke oorzaak zijn van allerlei klachten.', 'Sport', 2),
('Bindweefsel Massage', 'Een bindweefsel massage wordt toegepast, het woord zegt het al, op de bindweefsellaag van het lichaam. Deze laag bevindt zich tussen de spieren en de huid. Door de werking op het bindweefsel en de reflexzones op de rug valt deze massage onder de reflexzone massage. Bij een reflexzone massage wordt er vanuit gegaan dat er zich op het lichaam (segmentale) zones bevinden die in verbinding staan met organen, klieren en andere lichaamsdelen. Door het stimuleren van deze zones wordt het corresponderende orgaan gestimuleerd en zullen blokkades verdwijnen.', 'Bindweefsel', 3),
('Hotstone Massage', 'Een hot stone massage is een massage van het lichaam met stenen van ongeveer 45 graden Celcius. Vandaar de naam hot stone. De hitte en de \'druk\' van de stenen dringen diep door in de spieren. De hot stone massage verlicht spanningen en geeft je nadien veel energie.', 'Hotstone', 4),
('Voetreflex Massage', 'De voetreflex massage werkt vooral ontspannend, en heeft een reinigende werking. Via de opgewekte impulsen herstelt de energie stroom in het lichaam, stuwing in de zenuwen en weefsels worden opgelost door de daarin opgehoopte gifstoffen te verwijderen, waardoor het zelfgenezend vermogen wordt bevorderd.', 'Voetreflex', 5),
('Dorn Therapie', 'De Dorn-methode is ontwikkeld door Dieter Dorn en is een zachte manuele behandeling van de wervelkolom en de gewrichten zoals bijvoorbeeld het bekken.', 'Dorn', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `image` (`image`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
