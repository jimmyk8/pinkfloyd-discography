-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 09:19 PM
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
-- Table structure for table `discography`
--

CREATE TABLE `discography` (
  `album_id` int(11) NOT NULL,
  `album_title` varchar(255) NOT NULL,
  `album_year` year(4) NOT NULL,
  `album_image` varchar(255) NOT NULL,
  `album_url` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discography`
--

INSERT INTO `discography` (`album_id`, `album_title`, `album_year`, `album_image`, `album_url`) VALUES
(1, 'Dark Side of the moon', 1973, 'Dark Side of the moon', 'https://open.spotify.com/embed/user/uypc70zmr8m8ymrdovekc04r2/playlist/7vMCB0cIiWNE6rNE4jJbKi'),
(3, 'The Wall', 1979, 'The Wall', 'https://open.spotify.com/embed/album/5Dbax7G8SWrP9xyzkOvy2F'),
(4, 'The Division Bell', 1994, 'The Division Bell', 'https://open.spotify.com/embed/album/5F0IQXuHfTV7SBvZVnXERl'),
(5, 'Relics', 1971, 'Relics', 'https://open.spotify.com/embed/album/361QTNnQcBcNJ38gn8ZWQw'),
(6, 'Wish You Were Here', 1975, 'Wish You Were Here', 'https://open.spotify.com/embed/album/0bCAjiUamIFqKJsekOYuRw'),
(7, 'Animals', 1977, 'Animals', 'https://open.spotify.com/embed/album/3b4E89rxzZQ9zkhgKpj8N4'),
(8, 'Atom Heart Mother', 1970, 'Atom Heart Mother', 'https://open.spotify.com/embed/album/2cUpAOlQjV5uSjkWj5bEQY'),
(9, 'The Endless River', 2014, 'The Endless River', 'https://open.spotify.com/embed/user/uypc70zmr8m8ymrdovekc04r2/playlist/5X92Y4gqRMOBJBemnTp3fN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discography`
--
ALTER TABLE `discography`
  ADD PRIMARY KEY (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discography`
--
ALTER TABLE `discography`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
