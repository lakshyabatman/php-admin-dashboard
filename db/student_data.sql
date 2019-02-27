-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2019 at 10:46 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itbadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `order_id` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `college_name` text NOT NULL,
  `student_name` text NOT NULL,
  `course_fee` int(6) NOT NULL,
  `discount` int(2) NOT NULL,
  `fee_depoisted` int(6) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`order_id`, `order_date`, `course_name`, `email`, `phone_number`, `college_name`, `student_name`, `course_fee`, `discount`, `fee_depoisted`, `remarks`) VALUES
('12345433', '2019-02-03', 'lakshya', 'test@gmail.com', '3244234', 'jiit', 'lakshya', 100, 1, 10, 'bad'),
('12345433333', '2019-02-03', 'lakshya', 'test@gmail.com', '3244234', 'jiit', 'lakshya', 100, 0, 100, 'bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`order_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
