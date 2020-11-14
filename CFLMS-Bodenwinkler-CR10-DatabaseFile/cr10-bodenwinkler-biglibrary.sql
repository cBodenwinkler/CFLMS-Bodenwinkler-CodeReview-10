-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 10:58 AM
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
(10, 'Joseph', 'Heller', 'Anaconda Verlag', 'FranzHosen Weg 4', '1961-01-01', 'Small', 'Catch-22', 'https://upload.wikimedia.org/wikipedia/en/9/99/Catch22.jpg', 'Book', '3-436-01355-2', 'Catch-22 ist ein 1961 erschienener Roman des amerikanischen Schriftstellers Joseph Heller. Hellers Satire über die Absurdität des Krieges war anfangs wenig erfolgreich, wurde aber dank der Mundpropaganda begeisterter Leser schließlich zu einem Welterfolg.', 'available', 0),
(11, 'Miguel', 'de Cervantes', 'Anaconda Verlag', 'Schmidtgasse 2', '2010-09-27', 'Medium', ' Don Quixote and Sancho Panza', 'https://images.gutefrage.net/media/fragen/bilder/ist-es-zufall-dass-don-quijote-ein-mann-ist-und-keine-frau/0_big.jpg?v=1552036502000', 'Book', '978-3866475489', 'Mit grandiosem Einfallsreichtum erzählt Cervantes von den Abenteuern des verarmten Adligen, der in einer Traumwelt vergangener Ritterzeiten lebt, und seines treuen Waffenträgers Sancho Pansa. Ähnlich wie Goethes Faust für die Deutschen ist Don Quijote für', 'available', 0),
(13, 'F Scott', 'Fitzgerald', 'Eastwest(Warner)', 'Kings Street 3233', '2013-04-04', 'Big', 'The Great Gatsby', 'https://images-na.ssl-images-amazon.com/images/I/81af+MCATTL.jpg', 'Book', '978-0241965672', 'There was music from my neighbours house through the summer nights. In his blue gardens men and girls came and went like moths among the whisperings and the champagne and the stars', 'available', 0),
(14, 'Donnie', 'Hart', 'Eastwest(Warner)', 'LaRoad 44132', '1994-01-01', 'Big', 'Far Beyond Driven', 'https://townsquare.media/site/366/files/2017/03/Pantera-Far-Beyond-Driven.jpg?w=980&q=75', 'CD', '2015516', 'Far Beyond Driven is the seventh album of the  US-Metal-Band Pantera.', 'available', 0),
(15, 'Donnie', 'Hart', 'Eastwest(Warner)', 'Somewhere Street 15923', '1991-01-01', 'Big', 'Cowboys from Hell', 'https://media1.jpc.de/image/w600/front/0/0075679137227.jpg', 'CD', '2015481', 'Cowboys from Hell is the fifth studio album by American heavy metal band Pantera', 'reserved', 0),
(16, 'Luc', 'Besson', 'Squad Take2', 'LaStreet 10203', '1994-05-01', 'Big', 'León - The Professional', 'https://images-na.ssl-images-amazon.com/images/I/41ADLDbCSuL._AC_UL600_SR390,600_.jpg', 'DVD', 'B000QXDCSI', 'Mathilda a 12-year-old girl is reluctantly taken in by Léon a professional assassin after her family is murdered. An unusual relationship forms as she becomes his protégée and learns the assassins trade ', 'available', 0),
(17, 'Martin', 'Campbell', 'Elektra (Warner)', 'Great Street 20329', '2009-05-08', 'Big', 'James Bond - Casino Royal', 'https://upload.wikimedia.org/wikipedia/en/1/15/Casino_Royale_2_-_UK_cinema_poster.jpg', 'DVD', 'B000MGTVL6', 'After earning 00 status and a licence to kill, Secret Agent James Bond sets out on his first mission as 007. Bond must defeat a private banker funding terrorists in a high-stakes game of poker at Casino Royale, Montenegro. ', 'available', 0),
(18, 'Robert', 'Shaer', 'Squad Take2', 'Somewhere Blvd 20102', '2011-06-24', 'Medium', 'Kerbal Space Program', 'https://www.games.ch/img/kerbal-space-program.617.347.iml.1.jpg', 'Game', '123456767', 'Conquering Space was never that easy.', 'reserved', 0),
(19, 'J.R.R.', 'Tolkien', 'Warner Bros', 'Hauptstraße 23', '2018-08-19', 'Large', 'The Lord of the Rings', 'https://images-na.ssl-images-amazon.com/images/I/51vz-E8FOJL._SX324_BO1,204,203,200_.jpg', 'Book', '9783608939842', 'Der Schauplatz des Herrn der Ringe ist Mittelerde, eine alternative Welt, und erzählt wird von der gefahrvollen Quest einiger Gefährten, die in einem dramatischen Kampf gegen das Böse endet.', 'available', 0),
(20, 'Peter', 'Jackson', 'Warner Bros', 'SomeBlvd 20291', '2001-02-11', 'Big', 'Lord of the Rings - Extended Trilogy', 'https://images-na.ssl-images-amazon.com/images/I/51sBx1BaMFL.jpg', 'DVD', 'B084DHWR5D', 'A meek Hobbit from the Shire and eight companions set out on a journey to destroy the powerful One Ring and save Middle-earth from the Dark Lord Sauron. ', 'reserved', 0),
(25, 'Ridley', 'Scott', 'Elektra (Warner)', 'CaliDrive 201798', '2017-05-18', 'Big', 'Alien - Covenant', 'https://de.web.img2.acsta.net/r_640_360/newsv7/20/07/24/14/32/0149585.jpg', 'DVD', 'B071S2Y679', 'The crew of a colony ship, bound for a remote planet, discover an uncharted paradise with a threat beyond their imagination, and must attempt a harrowing escape.', 'reserved', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
