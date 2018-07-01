-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2018 at 08:38 AM
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
  `photo` varchar(250) NOT NULL,
  `sssID` varchar(255) NOT NULL,
  `philhealthID` varchar(255) NOT NULL,
  `tinID` varchar(255) NOT NULL,
  `sickLeaveBalance` int(10) NOT NULL,
  `vacationLeaveBalance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `employeeID`, `firstName`, `lastName`, `middleInitial`, `birthdate`, `gender`, `contactNumber`, `address`, `dateHired`, `dateStarted`, `position`, `department`, `reportingTo`, `photo`, `sssID`, `philhealthID`, `tinID`, `sickLeaveBalance`, `vacationLeaveBalance`) VALUES
(1, '0000', 'qweqwe', 'qwe', 'qwe', '1222-12-12', 'Male', 123123123, '1312313123', '1231-03-12', '1231-03-12', 'Test', 'Test', 'Test', '', '4456', '7789', '1000', 0, 0),
(2, '1123', 'qweqwe', 'qwe', 'qwe', '1222-12-12', 'Male', 123123123, '1312313123', '1231-03-12', '1231-03-12', 'Test', 'Test', 'Test', '', '4456', '7789', '1000', 0, 0),
(3, '1123', 'zzzzzzzzzz', 'zzzzzzz', 'zz', '1111-11-11', 'Male', 1111111, 'qweqweqe', '1111-11-11', '1111-11-11', 'Test', 'Test', 'Test', '', '4456', '7789', '1000', 0, 0),
(4, '1123', 'testing', 'testing', 'test', '5555-05-05', 'Male', 555555, '555', '5555-05-05', '5555-05-05', 'Test', 'Test', 'Test', '', '4456', '7789', '1000', 0, 0),
(5, '1123', 'k', 'kkk', 'kk', '8888-08-08', 'Male', 8888, '88', '0888-07-08', '8888-08-08', 'Test', 'Test', 'Test', '', '4456', '7789', '1000', 0, 0),
(6, '', 'John', 'Doe', 'A.', '0000-00-00', 'Male', 123, 'asdasd', '0000-00-00', '0000-00-00', 'Test', 'Test', 'Test', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_id`
--

CREATE TABLE `tbl_id` (
  `employeeID` varchar(255) NOT NULL,
  `sssID` varchar(255) NOT NULL,
  `philHealthID` varchar(255) NOT NULL,
  `tinID` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaverequest`
--

CREATE TABLE `tbl_leaverequest` (
  `leaveID` int(255) NOT NULL,
  `employeeID` varchar(255) NOT NULL,
  `leaveType` varchar(255) NOT NULL,
  `applicationDate` date NOT NULL,
  `duration` int(100) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `applicationStatus` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leaves`
--

CREATE TABLE `tbl_leaves` (
  `id` int(11) NOT NULL,
  `leaveType` varchar(255) NOT NULL,
  `leaveCount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leaves`
--

INSERT INTO `tbl_leaves` (`id`, `leaveType`, `leaveCount`) VALUES
(1, 'Sick Leave', 5),
(2, 'Vacation Leave', 10),
(3, 'Offset', 0),
(4, 'Absent Without Pay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leavetransaction`
--

CREATE TABLE `tbl_leavetransaction` (
  `id` int(255) NOT NULL,
  `employeeID` varchar(255) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `dateOfLeave` date NOT NULL,
  `dateSubmitted` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_leavetransaction`
--

INSERT INTO `tbl_leavetransaction` (`id`, `employeeID`, `duration`, `dateOfLeave`, `dateSubmitted`, `status`, `comment`) VALUES
(1, '0000', '10', '2018-06-05', '2018-06-06', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `positionID` int(11) NOT NULL,
  `employeeID` varchar(255) NOT NULL,
  `department` varchar(50) NOT NULL,
  `reportingTo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`positionID`, `employeeID`, `department`, `reportingTo`) VALUES
(1, '', 'IT', 'Janz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_id`
--
ALTER TABLE `tbl_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leaverequest`
--
ALTER TABLE `tbl_leaverequest`
  ADD PRIMARY KEY (`leaveID`);

--
-- Indexes for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`positionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_id`
--
ALTER TABLE `tbl_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leaverequest`
--
ALTER TABLE `tbl_leaverequest`
  MODIFY `leaveID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leaves`
--
ALTER TABLE `tbl_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `positionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
