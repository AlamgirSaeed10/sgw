-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 09:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_world`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `game_subcategories`
--

CREATE TABLE `game_subcategories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_subcategories`
--

INSERT INTO `game_subcategories` (`id`, `category_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Arcade'),
(4, 'Board'),
(5, 'Card'),
(6, 'Casino'),
(7, 'Casual'),
(8, 'Educational'),
(9, 'Music'),
(10, 'Puzzle'),
(11, 'Racing'),
(12, 'Role Playing'),
(13, 'Simulation'),
(14, 'Sports'),
(15, 'Strategy'),
(16, 'Trivia'),
(17, 'Word');

-- --------------------------------------------------------

--
-- Table structure for table `latest_games`
--

CREATE TABLE `latest_games` (
  `id` int(11) NOT NULL,
  `game_title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `categories` varchar(250) NOT NULL,
  `Platform` varchar(50) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_games`
--

INSERT INTO `latest_games` (`id`, `game_title`, `description`, `image`, `categories`, `Platform`, `release_date`) VALUES
(17, 'Game 05', '', 'lgimage/Latest-Game-Wallpapers-for-Desktop.jpg', 'Casino', '', '0000-00-00'),
(18, 'Game 01', '', 'lgimage/Latest-Game-Wallpapers-for-Desktop.jpg', 'Casino', '', '0000-00-00'),
(19, 'Game 02', '', 'lgimage/assassins-creed-valhalla-game-new-ei.jpg', 'Adventure', '', '0000-00-00'),
(20, 'Game 03', '', 'lgimage/AdvancedHeavenlyAmericanriverotter-size_restricted.gif', 'Board', '', '0000-00-00'),
(21, 'Game 05', '', 'lgimage/590bb5b1018ad31b6abbdd8952ae36ad.jpg', 'Puzzle', '', '0000-00-00'),
(22, 'Game 05', '', 'lgimage/590bb5b1018ad31b6abbdd8952ae36ad.jpg', 'Puzzle', '', '0000-00-00'),
(23, 'Game 05', '', 'lgimage/590bb5b1018ad31b6abbdd8952ae36ad.jpg', 'Puzzle', '', '0000-00-00'),
(24, 'Game 05', '', 'lgimage/590bb5b1018ad31b6abbdd8952ae36ad.jpg', 'Puzzle', '', '0000-00-00'),
(25, 'Games title', '', 'lgimage/AdvancedHeavenlyAmericanriverotter-size_restricted.gif', 'Card', '', '0000-00-00'),
(26, 'Game 12', '', 'lgimage/gamer_room.jpg', 'Casino', 'playstation', '0000-00-00'),
(27, 'g1', '', 'lgimage/gamer-mascot-logo-sticker-design-260nw-1431586820.jpg', 'Word', 'play', '2019-02-11'),
(28, 'game 22', 'Game world', 'lgimage/assassins-creed-valhalla-game-new-ei.jpg', 'Arcade', 'playstation', '2012-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'worldgame');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_subcategories`
--
ALTER TABLE `game_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_games`
--
ALTER TABLE `latest_games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game_subcategories`
--
ALTER TABLE `game_subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `latest_games`
--
ALTER TABLE `latest_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
