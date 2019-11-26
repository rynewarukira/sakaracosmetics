-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 11:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pretty`
--

-- --------------------------------------------------------

--
-- Table structure for table `ryne`
--

CREATE TABLE `ryne` (
  `na` varchar(30) NOT NULL,
  `ema` varchar(30) NOT NULL,
  `mess` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ryne`
--

INSERT INTO `ryne` (`na`, `ema`, `mess`) VALUES
('sdfghjkl', 'gfgfdg@dfg', ''),
('sdfghjkl;', 'dfghjk', ''),
('sdfghjkl;', 'dfghjk', ''),
('34567', 'fgh@sdfgh', 'dfghjkl'),
('34567', 'dfghjkl;', 'wertyuio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
