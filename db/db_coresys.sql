-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 02:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coresys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(20) NOT NULL,
  `employeeID` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `middleInitial` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactNumber` int(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dateHired` date NOT NULL,
  `dateStarted` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `reportingTo` varchar(50) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `employeeID`, `firstName`, `lastName`, `middleInitial`, `birthdate`, `gender`, `contactNumber`, `address`, `dateHired`, `dateStarted`, `position`, `department`, `reportingTo`, `photo`) VALUES
(1, '', 'qweqwe', 'qwe', 'qwe', '1222-12-12', 'Male', 123123123, '1312313123', '1231-03-12', '1231-03-12', 'Test', 'Test', 'Test', ''),
(2, '', 'qweqwe', 'qwe', 'qwe', '1222-12-12', 'Male', 123123123, '1312313123', '1231-03-12', '1231-03-12', 'Test', 'Test', 'Test', ''),
(3, '', 'zzzzzzzzzz', 'zzzzzzz', 'zz', '1111-11-11', 'Male', 1111111, 'qweqweqe', '1111-11-11', '1111-11-11', 'Test', 'Test', 'Test', ''),
(4, '', 'testing', 'testing', 'test', '5555-05-05', 'Male', 555555, '555', '5555-05-05', '5555-05-05', 'Test', 'Test', 'Test', ''),
(5, '', 'k', 'kkk', 'kk', '8888-08-08', 'Male', 8888, '88', '0888-07-08', '8888-08-08', 'Test', 'Test', 'Test', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
