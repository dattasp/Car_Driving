-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 12:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `courses_type` text NOT NULL,
  `car_type` text NOT NULL,
  `message` text NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `name`, `mobile`, `email`, `courses_type`, `car_type`, `message`, `adate`) VALUES
(1, 'Rahul Misal', '9158439277', 'rahulmisal9632@gmail.com', 'car', 'driving', 'msg', '2022-05-22'),
(2, 'Rahul Misal', '9158439277', 'rahulmisal9632@gmail.com', 'car', 'driving', 'msg', '2022-05-22'),
(3, 'Rahul Misal', '9158439277', 'rahulmisal9632@gmail.com', 'car', 'driving', 'msg', '2022-05-22'),
(4, '', '', '', '', '', '', '2022-05-22'),
(5, '', '', '', '', '', '', '2022-05-22'),
(6, '', '', '', '', '', '', '2022-05-22'),
(7, '', '', '', '', '', '', '2022-05-22'),
(8, '', '', '', '', '', '', '2022-05-22'),
(9, '', '', '', '', '', '', '2022-05-22'),
(10, '', '', '', '', '', '', '2022-05-22'),
(11, '', '', '', '', '', '', '2022-05-22'),
(12, '', '', '', '', '', '', '2022-05-22'),
(13, '', '', '', '', '', '', '2022-05-22'),
(14, '', '', '', '', '', '', '2022-05-22'),
(15, '', '', '', '', '', '', '2022-05-22'),
(16, 'ram', '7894521876421', 'r@gmail.com', 'driving', 'new', 'none', '2022-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `contact_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `subject`, `message`, `contact_date`) VALUES
(5, 'Ram Ram', '04652186451', 'ram@gmail.com', 'check', 'lorem lorem lorem', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` int(11) NOT NULL,
  `courses_type` text NOT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `courses_type`, `name`, `mobile`, `email`, `cdate`) VALUES
(1, 'Highway', 'Rahul Misal', '1987452145', 'r@gmail.com', '2022-05-22'),
(2, 'International', 'abc', '7986321864', 'abc@gmail.com', '2022-05-22'),
(3, 'Highway', 'Rahul Misal', '9158439277', 'rahulmisal9632@gmail.com', '2022-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
