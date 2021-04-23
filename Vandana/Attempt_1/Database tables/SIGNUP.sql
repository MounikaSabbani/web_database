-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2021 at 01:34 PM
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
-- Table structure for table `SIGNUP`
--

CREATE TABLE `SIGNUP` (
  `USERNAME` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `FULLNAME` varchar(100) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `SUBSCRIPTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Signup table';

--
-- Dumping data for table `SIGNUP`
--

INSERT INTO `SIGNUP` (`USERNAME`, `FIRSTNAME`, `LASTNAME`, `FULLNAME`, `PHONE`, `EMAIL`, `ADDRESS`, `SUBSCRIPTION`) VALUES
('Jim', 'Jim', 'Peters', 'Jim Peters', '1231231234', 'jim@gmail.com', 'Chicago', 0),
('John', 'John', 'Peters', 'John Peters', '1231231234', 'john@gmail.com', 'Chicago', 1),
('kandem', 'rrrr', 'A', 'rrrr A', '1234567891', 'kk@gmail.com', '101 NE st carmel IN', 1),
('steve111', 'Steve', 'Perkins', 'Steve Perkins', '1231231234', 'steve@gmail.com', 'Indiana', 1),
('vandana', 'sfs', 'dsfsa', 'dsfs', '3435', 'vbfdf', 'dfgd', 0),
('yamini', 'yamini sri vandana', 'penamakuru', 'yamini sri vandana', '4638671663', 'ypenamak@iu.edu', '7415 montgomery road', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `SIGNUP`
--
ALTER TABLE `SIGNUP`
  ADD PRIMARY KEY (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
