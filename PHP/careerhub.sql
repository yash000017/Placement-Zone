-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 10:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careerhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `collage`
--

CREATE TABLE `collage` (
  `CollageId` int(20) NOT NULL,
  `CollageCode` varchar(200) DEFAULT NULL,
  `CollageName` varchar(200) DEFAULT NULL,
  `UserID` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collage`
--

INSERT INTO `collage` (`CollageId`, `CollageCode`, `CollageName`, `UserID`, `Password`) VALUES
(5, '112', 'GLS', 'GLS@gmail.com', '1612');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyId` int(20) NOT NULL,
  `Company_Name` varchar(250) DEFAULT NULL,
  `JobDetails` varchar(250) DEFAULT NULL,
  `IndustryArea` varchar(250) DEFAULT NULL,
  `MonthlySalary` varchar(250) DEFAULT NULL,
  `TrainingPeriod` varchar(20) DEFAULT NULL,
  `Location` varchar(250) DEFAULT NULL,
  `Emp_status` varchar(100) DEFAULT NULL,
  `UserID` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyId`, `Company_Name`, `JobDetails`, `IndustryArea`, `MonthlySalary`, `TrainingPeriod`, `Location`, `Emp_status`, `UserID`, `password`) VALUES
(3, 'IBM', NULL, 'Techonology', NULL, NULL, 'Mumbai', NULL, 'IBM@gmail.com', '1612');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `JobId` int(20) NOT NULL,
  `JobDetails` varchar(250) DEFAULT NULL,
  `IndustryArea` varchar(250) DEFAULT NULL,
  `Gender` varchar(250) DEFAULT NULL,
  `MonthlySalary` varchar(250) DEFAULT NULL,
  `TrainingPeriod` varchar(20) DEFAULT NULL,
  `Location` varchar(250) DEFAULT NULL,
  `Emp_status` varchar(250) DEFAULT NULL,
  `Emp_Type` varchar(250) DEFAULT NULL,
  `Experience` varchar(250) DEFAULT NULL,
  `NumberOfVacancies` varchar(200) DEFAULT NULL,
  `CompanyName` varchar(250) NOT NULL,
  `CompanyId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`JobId`, `JobDetails`, `IndustryArea`, `Gender`, `MonthlySalary`, `TrainingPeriod`, `Location`, `Emp_status`, `Emp_Type`, `Experience`, `NumberOfVacancies`, `CompanyName`, `CompanyId`) VALUES
(11, 'hbhb', 'vghv', 'Male', ' bhbjb', 'hvg', 'vhg', 'cv', 'chgc', 'hgv', 'gvh', 'IBM', '3');

-- --------------------------------------------------------

--
-- Table structure for table `jobstatus`
--

CREATE TABLE `jobstatus` (
  `StatusId` int(11) NOT NULL,
  `StudentId` varchar(11) DEFAULT NULL,
  `JobId` varchar(11) DEFAULT NULL,
  `JobStatus` varchar(11) DEFAULT NULL,
  `CompanyId` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentId` int(20) NOT NULL,
  `Fname` varchar(250) DEFAULT NULL,
  `Mname` varchar(250) DEFAULT NULL,
  `Lname` varchar(250) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Enrollment_number` varchar(200) DEFAULT NULL,
  `EmailId` varchar(200) DEFAULT NULL,
  `PhoneNumber` varchar(200) DEFAULT NULL,
  `Skills` varchar(200) DEFAULT NULL,
  `Achievements` varchar(200) DEFAULT NULL,
  `IntrestedFields` varchar(200) DEFAULT NULL,
  `CPI` varchar(200) DEFAULT NULL,
  `CGPI` varchar(200) DEFAULT NULL,
  `Total_Backlogs` varchar(20) DEFAULT NULL,
  `Current_Backlogs` varchar(20) DEFAULT NULL,
  `CollageCode` varchar(200) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `JobId` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentId`, `Fname`, `Mname`, `Lname`, `Gender`, `Enrollment_number`, `EmailId`, `PhoneNumber`, `Skills`, `Achievements`, `IntrestedFields`, `CPI`, `CGPI`, `Total_Backlogs`, `Current_Backlogs`, `CollageCode`, `Password`, `JobId`) VALUES
(8, 'Rahul', 'Bharat', 'Patel', 'Male', '2021000128', 'Rahul@gmail.com', '8765432345', 'python,c++,PHP,JS', 'Hackton Python ISO', 'BackEnd', '8.0', '9.0', '0', '0', '112', '1612', '10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`CollageId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CompanyId`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `jobstatus`
--
ALTER TABLE `jobstatus`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collage`
--
ALTER TABLE `collage`
  MODIFY `CollageId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CompanyId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `JobId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobstatus`
--
ALTER TABLE `jobstatus`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
