-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2019 at 03:58 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduprimestudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('eduprimes', 'eduprimes');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(10) NOT NULL,
  `course` text NOT NULL,
  `batch` int(2) NOT NULL,
  `starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course`, `batch`, `starting_date`) VALUES
('', 'Machine Learning', 2, '2019-03-09'),
('', 'ALgorithms', 2, '2019-03-09'),
('', 'Machine Learning', 2, '2019-03-09'),
('', 'ALgorithms', 2, '2019-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mobno` varchar(200) DEFAULT NULL,
  `course` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `business_line` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `comment` varchar(1000) DEFAULT NULL,
  `fee` double DEFAULT '0',
  `fee_depoisted` float DEFAULT '0',
  `discount` int(2) DEFAULT '0',
  `demo_taken` text,
  `batch` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`name`, `email`, `mobno`, `course`, `date`, `status`, `business_line`, `id`, `comment`, `fee`, `fee_depoisted`, `discount`, `demo_taken`, `batch`) VALUES
('', '', '0', '', '2018-04-28', 1, 'Student', 2, '', 40000, 0, 0, 'No', NULL),
('suryatest', 'suryashekhawat136@gmail.com', '9899949962', 'Class 6 Maths', '2018-04-28', 0, 'Student', 3, 'show', 200, 0, 0, 'No', NULL),
('Alright Yadav', 'yadavaakrit77@gmail.com', '0', 'Class 9 Maths', '2018-10-06', NULL, 'Student', 9, NULL, 0, 0, 0, 'Yes', NULL),
('surya', 'qqzz4546@gmail.com', '989991365', 'Machine Learning May-18 batch', '2018-05-06', NULL, 'Professional', 4, '', 12, 4, 0, 'No', NULL),
('surya', 'qqzz4546@gmail.com', '989991365', 'Machine Learning May-18 batch', '2018-05-06', NULL, 'Professional', 5, '', 7, 1, 0, 'Yes', NULL),
('surya', 'qqzz4546@gmail.com', '989991365', 'Interview prep Summer Jun-18 batch', '2018-05-06', NULL, 'Professional', 6, '', 8, 0, 0, 'No', NULL),
('aaa', 'arachauhan@gmail.com', '9818663083', 'Class 11 Physics ', '2018-05-15', NULL, 'Student', 7, NULL, 0, 0, 0, '0', NULL),
('Ayush Bhanawat', 'naresh.bhanawat@gmail.com', '8860912824', 'Class 6 Maths', '2018-06-13', NULL, 'Student', 8, NULL, 0, 0, 0, '0', NULL),
('aaaaa', 'arachauhan@gmail.com', '9818663083', 'Class 11 Physics ', '2019-02-03', NULL, 'Student', 10, '', 2, 0, 0, '0', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
