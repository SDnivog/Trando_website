-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trando_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_todo_list`
--

CREATE TABLE `team_todo_list` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user` varchar(80) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_todo_list`
--

INSERT INTO `team_todo_list` (`id`, `datetime`, `user`, `task`) VALUES
(1, '0000-00-00 00:00:00', '345678G', 'Testing task done by today'),
(2, '0000-00-00 00:00:00', 'G456789', 'Test'),
(3, '2021-04-30 22:05:22', 'G456789', 'I am testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_todo_list`
--
ALTER TABLE `team_todo_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team_todo_list`
--
ALTER TABLE `team_todo_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
