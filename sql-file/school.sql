-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 27, 2017 at 09:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `uname`, `email`, `pass`) VALUES
('ad1', 'barack', 'obama@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `admin_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `period` varchar(100) NOT NULL,
  `budget_goal` int(11) NOT NULL,
  `av_expense` int(11) NOT NULL,
  `expected_students` int(11) NOT NULL,
  `student_pay` int(11) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`id`, `period`, `budget_goal`, `av_expense`, `expected_students`, `student_pay`, `time_stamp`) VALUES
(1, 'Apr - May', 100000, 10000, 50, 2200, '2017-01-27 07:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `overall_sys_admin`
--

CREATE TABLE `overall_sys_admin` (
  `system_id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_det`
--

CREATE TABLE `student_det` (
  `student_id` int(11) NOT NULL,
  `id_number` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ed_level` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_det`
--

INSERT INTO `student_det` (`student_id`, `id_number`, `fname`, `lname`, `uname`, `phone`, `ed_level`, `dob`, `gender`, `password`, `login`) VALUES
(8, 2, 'mimi', 'dont knoow', 'derick', '0988767', 'cert', '2003-12-02', 'Male', '4321', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_payment`
--

CREATE TABLE `student_fee_payment` (
  `student_id` int(50) NOT NULL,
  `course_taking` varchar(50) NOT NULL,
  `fee_expected` int(50) NOT NULL,
  `fee_paid` int(50) NOT NULL,
  `balance` int(50) NOT NULL,
  `registration_fee` int(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trainers_log`
--

CREATE TABLE `trainers_log` (
  `trainers_id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers_log`
--

INSERT INTO `trainers_log` (`trainers_id`, `uname`, `email`, `pass`) VALUES
(1, 'htt', 'htt@gmail.com', 'd7bb3ab3115058ecbc7b0ce22221fd1f'),
(2, 'brian', 'brian@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'trump', 'donaldtrump@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `trainers_reg`
--

CREATE TABLE `trainers_reg` (
  `trainers_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `id_number` int(50) NOT NULL,
  `d.o.b` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `education_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainers_reg`
--

INSERT INTO `trainers_reg` (`trainers_id`, `fname`, `lname`, `id_number`, `d.o.b`, `gender`, `status`, `location`, `education_level`) VALUES
(2, 'Derick', 'Mwangi', 2345656, '3-2-2003', 'Male', 'Maried', 'Karen', 'Diploma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overall_sys_admin`
--
ALTER TABLE `overall_sys_admin`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `student_det`
--
ALTER TABLE `student_det`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_fee_payment`
--
ALTER TABLE `student_fee_payment`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `trainers_log`
--
ALTER TABLE `trainers_log`
  ADD PRIMARY KEY (`trainers_id`);

--
-- Indexes for table `trainers_reg`
--
ALTER TABLE `trainers_reg`
  ADD PRIMARY KEY (`trainers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `admin_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_det`
--
ALTER TABLE `student_det`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `trainers_reg`
--
ALTER TABLE `trainers_reg`
  MODIFY `trainers_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
