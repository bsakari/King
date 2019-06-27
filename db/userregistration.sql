-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 03:30 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `adm_number` varchar(255) NOT NULL,
  `maths` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `kiswahili` varchar(255) NOT NULL,
  `sst` varchar(255) NOT NULL,
  `cre` varchar(255) NOT NULL,
  `science` varchar(255) NOT NULL,
  `totota_marks` varchar(255) NOT NULL,
  `mean_marks` varchar(255) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`fname`, `sname`, `lname`, `adm_number`, `maths`, `english`, `kiswahili`, `sst`, `cre`, `science`, `totota_marks`, `mean_marks`, `grade`) VALUES
('King', 'Wanyama', 'Sakari', 'kdspc/1/2019', '100', '100', '100', '100', '100', '100', '600', '100', 'A'),
('Flovy', 'Atieno', 'Owiti', 'kdspc/2/2019', '6', '56', '68', '20', '33', '40', '223', '37.166666666667', 'C-'),
('Lucy', 'Wangoi', 'Karanja', 'kdspc/3/2019', '57', '58', '8', '6', '58', '88', '275', '45.833333333333', 'C+'),
('Karanja', 'Jeremy', 'Wamaish', 'kdspc/4/2019', '78', '55', '52', '77', '60', '64', '386', '64.333333333333', 'B'),
('Paul', 'Ochieng', 'Omolo', 'kdspc/5/2019', '78', '40', '36', '55', '25', '64', '298', '49.666666666667', 'C+'),
('Roy', 'Sam', 'Were', 'kdspc/6/2019', '28', '34', '60', '77', '61', '44', '304', '50.666666666667', 'C+');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`, `rank`) VALUES
('admin@gmail.com', '123', 'admin'),
('classteacher@gmail.com', '123', 'classteach'),
('director@gmail.com', '123', 'director'),
('hod@gmail.com', '123', 'hod'),
('king@gmail.com', '123', 'hod'),
('principal@gmail.com', '123', 'principal'),
('purafi@gmail.com', '123', 'principal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`adm_number`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
