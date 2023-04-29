-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2023 at 04:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `graphic_card_type`
--

CREATE TABLE `graphic_card_type` (
  `graphic_card_type_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graphic_card_type`
--

INSERT INTO `graphic_card_type` (`graphic_card_type_id`, `value`) VALUES
(1, 'integrisana'),
(2, 'neintegrisana');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `laptop_id` int(10) UNSIGNED NOT NULL,
  `ram_capacity` int(11) NOT NULL,
  `storage_capacity` int(11) NOT NULL,
  `batery_life` int(11) NOT NULL,
  `display` float NOT NULL,
  `resolution` varchar(20) NOT NULL,
  `graphic_card_type_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`laptop_id`, `ram_capacity`, `storage_capacity`, `batery_life`, `display`, `resolution`, `graphic_card_type_id`, `name`) VALUES
(7, 16, 512, 5, 17.1, '1920x800', 2, 'Macbook Pro 2022'),
(8, 16, 512, 2, 15.6, '1920x1080', 2, 'HP G3 123'),
(10, 32, 512, 7, 15.6, '1920x1080', 2, 'HP G3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `graphic_card_type`
--
ALTER TABLE `graphic_card_type`
  ADD PRIMARY KEY (`graphic_card_type_id`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`laptop_id`),
  ADD KEY `fk_graphic_card_type_id` (`graphic_card_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `graphic_card_type`
--
ALTER TABLE `graphic_card_type`
  MODIFY `graphic_card_type_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `laptop_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laptop`
--
ALTER TABLE `laptop`
  ADD CONSTRAINT `fk_graphic_card_type_id` FOREIGN KEY (`graphic_card_type_id`) REFERENCES `graphic_card_type` (`graphic_card_type_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
