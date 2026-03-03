-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 05:02 PM
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
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `role` enum('student','principal') DEFAULT NULL,
  `login_date` date DEFAULT NULL,
  `login_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `username`, `role`, `login_date`, `login_time`) VALUES
(19, 'student1', 'student', '2026-02-06', '16:03:43'),
(20, 'student1', 'student', '2026-02-19', '17:23:07'),
(21, 'principal', 'principal', '2026-02-20', '16:27:08'),
(22, 'principal', 'principal', '2026-02-20', '16:31:30'),
(23, 'principal', 'principal', '2026-02-20', '16:33:49'),
(24, 'principal', 'principal', '2026-02-21', '22:41:36'),
(25, 'principal', 'principal', '2026-02-21', '23:21:48'),
(26, 'principal', 'principal', '2026-02-21', '23:30:44'),
(27, 'principal', 'principal', '2026-02-21', '23:46:06'),
(28, 'principal', 'principal', '2026-02-22', '13:01:06'),
(29, 'principal', 'principal', '2026-02-22', '13:16:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
