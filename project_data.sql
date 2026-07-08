-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 06:31 PM
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
-- Database: `project_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `Sr. No.` int(3) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`Sr. No.`, `email`, `password`, `date`) VALUES
(1, 'hruthika@gmail.com', '12345678', '2024-07-12 20:09:29'),
(2, 'hruthikachavan295@gmail.com', 'abcdefgh', '2024-07-12 20:16:45'),
(3, 'tanushree@gmail.com', 'tanu5623', '2024-07-12 20:17:24'),
(4, 'hruthikachavan295@gmail.com', 'hnc@1234', '2024-07-20 16:16:19'),
(5, 'hruthikachavan295@gmail.com', 'hruthika', '2024-07-21 16:41:57'),
(6, 'onkar@gmail.com', 'onkarcha', '2024-07-22 09:17:43'),
(7, 'hruthikachavan295@gmail.com', 'hrutu@12', '2024-08-08 08:57:02'),
(8, 'hruthikachavan295@gmail.com', 'hruthika', '2024-08-08 13:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `Sr. No.` int(3) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`Sr. No.`, `email`, `password`, `first_name`, `last_name`, `date`) VALUES
(1, 'hnc@gmail.com', '1234567', 'hruthika', 'chavan', '2024-07-12 17:21:55'),
(2, 'hello', '1234', 'onkar', 'chavan', '2024-07-12 17:27:58'),
(10, 'hruthikachavan295@gmail.com', '4567', 'hruthika', 'chavan', '2024-07-12 17:37:12'),
(11, 'onkar@gmail.com', 'abcdef', 'onkar', 'chavan', '2024-07-12 17:38:17'),
(19, 'tanushree@gmail.com', 'tan678', 'Tanushree', 'chavan', '2024-07-12 18:12:01'),
(20, 'onkar@gmail.com', 'om890', 'onkar', 'chavan', '2024-07-12 18:13:23'),
(22, 'shraddha@gmail.com', 'shrad04', 'shraddha', 'katkar', '2024-07-12 18:16:40'),
(23, 'shraddha@gmail.com', 'shrad04', 'shraddha', 'katkar', '2024-07-12 18:22:17'),
(24, 'onkar@gmail.com', 'om890', 'onkar', 'chavan', '2024-07-12 18:22:28'),
(25, 'tanushree@gmail.com', 'tnu67', 'Tanushree', 'chavan', '2024-07-12 18:23:37'),
(26, 'Sonali@gmail.com', 'sonu87', 'Sonali', 'Kodmur', '2024-07-12 18:24:28'),
(27, 'anushkaa@gmail.com', 'anu50', 'Anushkaa', 'Pawar', '2024-07-12 18:25:44'),
(31, 'hruthikachavan295@gmail.com', 'sdfghjk', 'hruthika', 'chavan', '2024-07-12 19:52:44'),
(32, 'onkar@gmail.com', 'rtyuio', 'onkar', 'chavan', '2024-07-12 19:54:09'),
(33, 'tanushree@gmail.com', 'cvbnm', 'Tanushree', 'chavan', '2024-07-12 19:54:52'),
(34, 'priyanka@gmail.com', 'kmgdrtg', 'priyanka', 'chavan', '2024-07-12 19:55:52'),
(35, 'anushkaa@gmail.com', 'wefghjhf', 'Anushkaa', 'Pawar', '2024-07-13 09:40:26'),
(36, 'hruthikachavan295@gmail.com', 'asdfg', 'hruthika', 'chavan', '2024-07-20 12:00:20'),
(37, 'tanushree@gmail.com', 'dsarfat', 'Tanushree', 'chavan', '2024-07-20 12:34:00'),
(38, 'hruthikachavan295@gmail.com', 'uiojkm', 'hruthika', 'chavan', '2024-07-20 12:37:11'),
(39, 'hruthikachavan295@gmail.com', 'hjuk', 'hruthika', 'chavan', '2024-07-20 12:47:54'),
(43, 'hruthikachavan295@gmail.com', 'hruthi', 'hruthika', 'chavan', '2024-07-20 15:48:48'),
(44, 'hruthikachavan295@gmail.com', 'ftytft6', 'hruthika', 'chavan', '2024-07-20 19:03:25'),
(45, 'tanushree@gmail.com', 'tanussj', 'Tanushree', 'chavan', '2024-07-20 19:07:01'),
(46, 'onkar@gmail.com', 'mnuji', 'onkar', 'chavan', '2024-07-20 19:09:34'),
(47, 'tanushree@gmail.com', 'tany', 'Tanushree', 'chavan', '2024-07-20 19:23:11'),
(48, 'priyanka@gmail.com', 'piya', 'priyanka', 'chavan', '2024-07-20 19:31:25'),
(49, 'tanushree@gmail.com', 'tanu', 'Tanushree', 'chavan', '2024-07-20 19:38:37'),
(50, 'hruthikachavan295@gmail.com', 'hruthika', 'hruthika', 'chavan', '2024-07-20 19:43:12'),
(51, 'hruthikachavan295@gmail.com', 'efr', 'hruthika', 'chavan', '2024-07-21 16:39:13'),
(52, 'tanushree@gmail.com', 'tanu', 'Tanushree', 'chavan', '2024-07-21 16:50:03'),
(53, 'onkar@gmail.com', 'onkar', 'onkar', 'chavan', '2024-07-21 16:53:11'),
(54, 'onkar@gmail.com', 'onkar', 'onkar', 'chavan', '2024-07-21 16:56:35'),
(55, 'hruthikachavan295@gmail.com', 'htuyit', 'hruthika', 'chavan', '2024-07-21 16:56:51'),
(56, 'hruthikachavan295@gmail.com', 'hruthika', 'hruthika', 'chavan', '2024-07-21 16:58:04'),
(57, 'tanushree@gmail.com', 'tanu', 'Tanushree', 'chavan', '2024-07-21 16:59:35'),
(58, 'tanushree@gmail.com', 'tanu', 'Tanushree', 'chavan', '2024-07-21 17:01:12'),
(59, 'hruthikachavan295@gmail.com', 'hruthika', 'hruthika', 'chavan', '2024-07-21 17:06:42'),
(60, 'tanushree@gmail.com', 'tanushre', 'Tanushree', 'chavan', '2024-07-21 18:07:27'),
(61, 'hruthikachavan295@gmail.com', 'hru', 'hruthika', 'chavan', '2024-07-21 18:09:45'),
(62, 'hruthikachavan295@gmail.com', 'hyuoijk', 'hruthika', 'chavan', '2024-08-07 11:45:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`Sr. No.`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`Sr. No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_in`
--
ALTER TABLE `log_in`
  MODIFY `Sr. No.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `Sr. No.` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
