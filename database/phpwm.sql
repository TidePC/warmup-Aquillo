-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 09:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `local`
--

-- --------------------------------------------------------

--
-- Table structure for table `phpwm`
--

CREATE TABLE `phpwm` (
  `id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `posting_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phpwm`
--

INSERT INTO `phpwm` (`id`, `message`, `posting_time`) VALUES
(1, 'test', '2022-03-22 16:37:43'),
(2, 'hi', '2022-03-22 16:37:56'),
(3, 'hello', '2022-03-22 16:37:58'),
(4, 'something something', '2022-03-22 16:38:18'),
(5, 'cheese', '2022-03-22 16:41:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phpwm`
--
ALTER TABLE `phpwm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phpwm`
--
ALTER TABLE `phpwm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
