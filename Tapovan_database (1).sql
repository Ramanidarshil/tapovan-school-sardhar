-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 05:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapovan-school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admision`
--

CREATE TABLE `admision` (
  `name` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(400) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admision`
--

INSERT INTO `admision` (`name`, `email`, `message`, `date`) VALUES
('darshil', 'mathsguru266@gmail.com', 'jcjvwvcjv', '0000-00-00 00:00:00'),
('darshil', 'mathsguru266@gmail.com', 'std 10 \r\nadmision ke liye', '2026-02-14 08:55:59'),
('hchch', 'jjbj@gamil', 'jbjb', '2026-02-14 09:00:24'),
('darshil', 'darshilramani6@gmail.com', 'jsvcsjvz', '2026-02-21 23:08:51'),
('dnvjdnvk', 'mathsguru266@gmail.com', 'bejgeibd', '2026-02-22 13:16:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
