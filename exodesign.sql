-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 03:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exodesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aemail` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aemail`, `apass`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE IF NOT EXISTS `design` (
`did` int(11) NOT NULL,
  `d_title` varchar(500) NOT NULL,
  `d_desc` varchar(1000) NOT NULL,
  `d_cat` varchar(50) NOT NULL,
  `d_cost` decimal(10,2) NOT NULL,
  `d_date` varchar(50) NOT NULL,
  `des_email` varchar(100) NOT NULL,
  `d_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`did`, `d_title`, `d_desc`, `d_cat`, `d_cost`, `d_date`, `des_email`, `d_photo`) VALUES
(1, 'Saree', 'Its a new Arrival', 'Female', '2499.00', '12/05/2018', 'jimmy@gmail.com', 'design/1526121001ss18rr219mo-grey-_2_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `designer_reg`
--

CREATE TABLE IF NOT EXISTS `designer_reg` (
  `sname` varchar(100) NOT NULL,
  `sgender` varchar(100) NOT NULL,
  `sage` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_address` varchar(500) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `spass` varchar(100) NOT NULL,
`sno` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designer_reg`
--

INSERT INTO `designer_reg` (`sname`, `sgender`, `sage`, `state`, `city`, `address`, `contact`, `b_name`, `b_address`, `semail`, `spass`, `sno`, `status`) VALUES
('jimmy', 'male', '25-40', 'Rajasthan', 'Jaipur', 'Lal Bagh', '6767676767', 'Expert Boutique', 'Lal Bagh, Jaipur', 'jimmy@gmail.com', '123456', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `model_reg`
--

CREATE TABLE IF NOT EXISTS `model_reg` (
  `sname` varchar(100) NOT NULL,
  `sgender` varchar(100) NOT NULL,
  `sage` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sphoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_reg`
--

INSERT INTO `model_reg` (`sname`, `sgender`, `sage`, `state`, `city`, `address`, `contact`, `semail`, `sphoto`) VALUES
('ajay', 'male', '18-24', 'Rajasthan', 'udaipur', 'udaipur', '8787878787', 'ajay@gmail.com', 'upload/1526094626Img264028_wet.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
 ADD PRIMARY KEY (`did`);

--
-- Indexes for table `designer_reg`
--
ALTER TABLE `designer_reg`
 ADD PRIMARY KEY (`sno`), ADD UNIQUE KEY `semail` (`semail`);

--
-- Indexes for table `model_reg`
--
ALTER TABLE `model_reg`
 ADD PRIMARY KEY (`semail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
MODIFY `did` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `designer_reg`
--
ALTER TABLE `designer_reg`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
