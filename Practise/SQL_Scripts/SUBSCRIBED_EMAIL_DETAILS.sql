-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2021 at 01:06 AM
-- Server version: 10.3.25-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msabbani_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `SUBSCRIBED_EMAIL_DETAILS`
--

CREATE TABLE `SUBSCRIBED_EMAIL_DETAILS` (
  `SUBSCRIBER_ID` int(10) NOT NULL,
  `EMAIL` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `SUBSCRIBED_EMAIL_DETAILS`
--

INSERT INTO `SUBSCRIBED_EMAIL_DETAILS` (`SUBSCRIBER_ID`, `EMAIL`) VALUES
(1, 'kandem@iu.edu'),
(2, ''),
(3, 'test.user@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SUBSCRIBED_EMAIL_DETAILS`
--
ALTER TABLE `SUBSCRIBED_EMAIL_DETAILS`
  ADD PRIMARY KEY (`SUBSCRIBER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
