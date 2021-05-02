-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2021 at 06:11 PM
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
-- Database: `ypenamak_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `LOGIN`
--

CREATE TABLE `LOGIN` (
  `LOGIN_ID` int(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `CONFIRM_PASSWORD` varchar(50) NOT NULL,
  `ISAUTHOR` int(11) NOT NULL,
  `ISADMIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `LOGIN`
--

INSERT INTO `LOGIN` (`LOGIN_ID`, `USERNAME`, `PASSWORD`, `CONFIRM_PASSWORD`, `ISAUTHOR`, `ISADMIN`) VALUES
(1, 'nag', 'leg', 'leg', 0, 1),
(4, 'naga', 'eye', 'eye', 1, 0),
(5, 'sid', 'sid', 'sid', 1, 0),
(6, 'fat', 'fit', 'fit', 1, 0),
(7, 'jag', 'jag', 'jag', 0, 0),
(8, 'jag', 'jag', 'jag', 0, 0),
(9, 'jim', 'jim', 'jim', 0, 0),
(10, 'lol', 'lol', 'lol', 0, 0),
(11, 'saede', 'aa', 'aa', 0, 0),
(13, '$username', '$password', '$confirm', 0, 0),
(17, 'kid', 'kid', 'kid', 0, 0),
(19, 'lisa', 'lisa', 'lisa', 0, 0),
(20, 'sunday', 'sunday', 'sunday', 0, 0),
(21, 'ajklio', 'ajklio', 'ajklio', 0, 0),
(22, 'cvbnmkj', 'cvbn', 'cvbn', 0, 0),
(23, 'tyuiop', 'tyuiop', 'tyuiop', 1, 0),
(24, 'test_user', 'user', 'user', 1, 0),
(25, 'newuser', 'newuser', 'newuser', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LOGIN`
--
ALTER TABLE `LOGIN`
  ADD PRIMARY KEY (`LOGIN_ID`,`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LOGIN`
--
ALTER TABLE `LOGIN`
  MODIFY `LOGIN_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
