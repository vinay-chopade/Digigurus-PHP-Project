-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 07:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digigurus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_data`
--

CREATE TABLE `comment_data` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_data`
--

INSERT INTO `comment_data` (`fname`, `lname`, `email`, `comments`) VALUES
('Prajwal', 'Kadam', 'prajwal.kadam21@pcco', 'ss'),
('Kshitij', 'Kadam', 'kk1234@gmail.com', 'kk'),
('abc', 'abc', 'abc@gmail.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `reg_data`
--

CREATE TABLE `reg_data` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  `country` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg_data`
--

INSERT INTO `reg_data` (`fname`, `lname`, `uname`, `email`, `gender`, `city`, `country`, `password`) VALUES
('admin', 'admin', 'admin', 'admin@gmail.com', 'Male', 'Pune', 'India', 'ss'),
('Ankita', 'Sawant', 'Ankita123', 'ankita@gmail.com', 'Female', 'Pune', 'India', 'Ankita@1234'),
('Prajwal', 'Kadam', 'prajwal123', 'prajwal@gmail.com', 'Male', 'Pune', 'India', 'Prajwal@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_data`
--
ALTER TABLE `reg_data`
  ADD PRIMARY KEY (`uname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
