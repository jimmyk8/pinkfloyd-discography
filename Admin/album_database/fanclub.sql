-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 04:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinkfloyd_discography`
--

-- --------------------------------------------------------

--
-- Table structure for table `fanclub`
--

CREATE TABLE `fanclub` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `lastname` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `city` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `state` varchar(2) CHARACTER SET utf8mb4 NOT NULL,
  `zip` int(10) UNSIGNED NOT NULL,
  `comments` mediumtext CHARACTER SET utf8mb4 NOT NULL,
  `newsletter` tinyint(1) NOT NULL,
  `join_club` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fanclub`
--
ALTER TABLE `fanclub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fanclub`
--
ALTER TABLE `fanclub`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
