-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 12:00 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microlink`
--

-- --------------------------------------------------------

--
-- Table structure for table `co_per_cat`
--

CREATE TABLE `co_per_cat` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `department` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `cr_hours` int(11) NOT NULL,
  `lec_hours` int(11) NOT NULL,
  `lab_hours` int(11) NOT NULL,
  `prerequisite` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `co_per_cat`
--

INSERT INTO `co_per_cat` (`id`, `category`, `department`, `course`, `cr_hours`, `lec_hours`, `lab_hours`, `prerequisite`, `user_id`) VALUES
(7, '1', 6, 2, 1, 1, 1, 'None', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `co_per_cat`
--
ALTER TABLE `co_per_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `co_per_cat`
--
ALTER TABLE `co_per_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
