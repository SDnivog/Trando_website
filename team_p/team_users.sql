-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 12:40 AM
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
-- Table structure for table `team_users`
--

CREATE TABLE `team_users` (
  `id` int(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` varchar(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `designation` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_users`
--

INSERT INTO `team_users` (`id`, `datetime`, `user_id`, `name`, `email`, `mobile`, `designation`, `image`, `status`) VALUES
(1, '2021-04-30 18:31:38', '', 'Govind Suman', 'govindsuman118@gmail.com', 9983904397, 'CEO', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_users`
--
ALTER TABLE `team_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team_users`
--
ALTER TABLE `team_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
