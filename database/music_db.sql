-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 12:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(30) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `cover_photo` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `genre`, `description`, `cover_photo`, `date_created`) VALUES
(4, 'kannda', 'kannda songs', '1610856960_screen-6.jpg', '2021-01-17 09:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `cover_image` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `user_id`, `title`, `description`, `cover_image`, `date_created`) VALUES
(4, 1, 'my play', 'created by admin', '1610862720_da56decc6247fbe0d0349ba616c545b8.jpg', '2021-01-17 11:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_items`
--

CREATE TABLE `playlist_items` (
  `id` int(30) NOT NULL,
  `playlist_id` int(30) NOT NULL,
  `music_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist_items`
--

INSERT INTO `playlist_items` (`id`, `playlist_id`, `music_id`, `date_created`) VALUES
(5, 4, 7, '2021-01-17 11:23:18'),
(6, 4, 6, '2021-01-17 11:23:18'),
(7, 4, 5, '2021-01-17 11:23:18'),
(9, 4, 10, '2021-01-17 16:15:50'),
(10, 4, 8, '2021-01-17 16:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `genre_id` int(30) NOT NULL,
  `title` text NOT NULL,
  `artist` text NOT NULL,
  `description` text NOT NULL,
  `upath` text NOT NULL,
  `cover_image` text NOT NULL,
  `date_created` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `user_id`, `genre_id`, `title`, `artist`, `description`, `upath`, `cover_image`, `date_created`) VALUES
(4, 1, 4, 'KGF', 'ravi bassuru', 'garbadhi nanirisi', '1610862120_[iSongs.info] 02 - Garbadhi.mp3', '1610857080_KGF.jpg', 2147483647),
(5, 1, 4, 'kgf', 'ravi bassuru', 'kooti kanasugala', '1610861940_[iSongs.info] 06 - Kooti Kanasugala.mp3', '1610862120_KGF.jpg', 2147483647),
(6, 1, 4, 'KGF', 'ravi bassuru', 'salaam rocky Bhai', '1610862060_[iSongs.info] 01 - Salaam Rocky Bhai.mp3', '1610862060_KGF.jpg', 2147483647),
(7, 1, 4, 'KGF', 'ravi bassuru', '&lt;p&gt;sidila bharava&lt;/p&gt;', '1610862180_[iSongs.info] 03 - Sidila Bharava.mp3', '1610862180_KGF.jpg', 2147483647),
(8, 1, 4, 'KGF', 'ravi bassuru', '&lt;p&gt;Dheera Dheera&lt;/p&gt;', '1610862360_[iSongs.info] 05 - Dheera Dheera.mp3', '1610862240_KGF.jpg', 2147483647),
(9, 1, 4, 'KGF', 'ravi bassuru', '&lt;p&gt;jokae&lt;/p&gt;', '1610862300_[iSongs.info] 04 - Jokae.mp3', '1610862300_KGF.jpg', 2147483647),
(10, 1, 4, 'kirik party', 'new', '&lt;p&gt;asdfasdf&lt;/p&gt;', '1610880240_Katheyondu-Helide-(Farewell)-B.-Ajaneesh-Loknath.mp3', '1610880240_kirikparty..jpg', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` int(1) NOT NULL DEFAULT 2,
  `profile_pic` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `contact`, `address`, `email`, `password`, `type`, `profile_pic`, `date_created`) VALUES
(1, 'Lohit', 'kumar', 'Male', '+123546879', '', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 1, '', '2020-11-18 16:50:06'),
(2, 'yashas', 'gn', 'Male', '+9874561233', 'guluru', 'yashas@gmail', 'c27615408f1af45bb4aee7eab26b8e27', 2, '1605833640_avatar.jpg', '2020-11-20 08:54:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlist_items`
--
ALTER TABLE `playlist_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `playlist_items`
--
ALTER TABLE `playlist_items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
