-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 11:03 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(0, 'purab', 'a488'),
(1, 'mohit', 'a499'),
(2, 'mohitD', 'a500'),
(3, 'priya', 'a501');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration1`
--

CREATE TABLE `donor_registration1` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` int(25) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_registration1`
--

INSERT INTO `donor_registration1` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`) VALUES
(4, 'Mohit tater', 'sanjay', '54-kh sadar bazar sanwar udaipur(distt.)', 'Udaipur', 20, 'AB+', 'mohittater816@gmail.com', '8279202499'),
(5, 'teerth', 'sanjay', '54-kh sadar bazar sanwar udaipur(distt.)', 'Udaipur', 20, 'AB-', 'teerthtater@gmail.com', '9460191304'),
(6, 'a', '', '', '', 0, 'o+', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration1`
--
ALTER TABLE `donor_registration1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_registration1`
--
ALTER TABLE `donor_registration1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
