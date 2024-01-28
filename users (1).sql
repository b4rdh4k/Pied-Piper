-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 04:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(2, 'bujar', 'dema', 'bujar123@gmail.com', '$2y$10$kIls688Cy/63uiRizeM93uCz9ZjSdVBXz8AXok3t1tYS7sBm4N7wC', 'user'),
(3, 'bujar', 'bujar', 'bujar@gmail.com', '$2y$10$NZb3r467y7wkgMZl3AN/Uu0Qb6FHrfB6gzfWq1TYUD48Gbg711n6W', 'user'),
(4, 'bujar', 'dema', 'dea@gmail.com', '$2y$10$Xk3Y5x1pJtfXPAcUJ3aXduAE4gG4xj66Qg99aFYCh65Guc1Br2OJu', 'user'),
(5, 'bujar', 'dem', 'deadema@gmail.com', '$2y$10$0.GYpm2LLjcA1QPlZx/h0ujpXCSdAI.ox2e9jH6lHnrKUGVjUkREu', 'user'),
(6, 'bujar', 'dema', 'oltadema@gmail.com', '$2y$10$r/e9yT5y.hpwf6atGMEoOOT61lE3ctt4nxtLmvtshxUmcb6Xz1rz2', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE users ADD COLUMN role VARCHAR(20) NOT NULL DEFAULT 'user';
