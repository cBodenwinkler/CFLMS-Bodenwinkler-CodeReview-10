-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 02:18 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10-bodenwinkler-biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10-bodenwinkler-biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10-bodenwinkler-biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `pub_name` varchar(255) NOT NULL,
  `pub_address` varchar(255) NOT NULL,
  `pub_date` date NOT NULL,
  `pub_size` varchar(255) NOT NULL,
  `med_title` varchar(255) NOT NULL,
  `med_image` varchar(255) NOT NULL,
  `med_type` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `med_status` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `author_first_name`, `author_last_name`, `pub_name`, `pub_address`, `pub_date`, `pub_size`, `med_title`, `med_image`, `med_type`, `isbn`, `short_desc`, `med_status`, `active`) VALUES
(3, 'Hans', 'Jürgen', 'PubMe', 'Hinteralm 4', '1919-12-20', 'BIG', 'Almen in der Tundra', 'https://comps.canstockphoto.at/bl%C3%BChen-wildflowers-alpin-tundra-stock-fotografie_csp28772407.jpg', 'fdsafdsa', '1038287718', 'fdsafdsa', 'Available', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
