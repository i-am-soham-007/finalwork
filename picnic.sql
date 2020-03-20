-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2020 at 06:41 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picnic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `mobile`, `profile`, `status`, `date`) VALUES
(1, 'soham', 'rsoham00@gmail.com', 'admin123', 1234567890, 'user.png', 1, '2020-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `cdesc`, `image`, `status`) VALUES
(1, 'One Day ', 'One Day Picnic..', '679140.png', 1),
(2, 'Two Day', 'This is two day', 'Preloader.gif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `edesc` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `event_time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `organized` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `event_created_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `ename`, `edesc`, `start`, `end`, `event_time`, `location`, `days`, `organized`, `image`, `status`, `event_created_date`) VALUES
(1, 'Holi Event', 'Shanku Holi Celebration.', '10-03-2020', '11-03-2020', '12:00', 'Gujarat', '1', '', 'background.jpg', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_desc` varchar(255) NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `package_place` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `main_category`, `tour_id`, `package_name`, `package_desc`, `package_price`, `package_place`, `status`) VALUES
(1, 'domestic', 4, 'East Package', 'This is East Package. Very Chippest Package.', '5999.00', 'Kerala,Karnataka', 0);

-- --------------------------------------------------------

--
-- Table structure for table `picnic`
--

CREATE TABLE `picnic` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `picnic_name` varchar(255) NOT NULL,
  `picnic_desc` varchar(255) NOT NULL,
  `pickup_time` varchar(255) NOT NULL,
  `pickup_stand` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `picnic_date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picnic`
--

INSERT INTO `picnic` (`id`, `cid`, `picnic_name`, `picnic_desc`, `pickup_time`, `pickup_stand`, `place`, `picnic_date`, `image`, `status`) VALUES
(1, 1, 'Statue of Unity', 'this is one day picnic..\r\nReady For Statue of Unity                                      ', '07:01', '', 'Statue of Unity', '2020-03-20', 'IMG_20180110_150848~2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdesc` varchar(255) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id`, `pname`, `pdesc`, `purl`, `image`, `status`) VALUES
(1, 'Demo podcast', 'this is podcast demo                          ', 'www.podcast.in', '210926.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour_category`
--

CREATE TABLE `tour_category` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_category`
--

INSERT INTO `tour_category` (`id`, `tour_id`, `main_category`, `tour_name`, `status`) VALUES
(1, 0, 'domestic', 'North', 0),
(2, 0, 'domestic', 'South', 0),
(3, 0, 'domestic', 'West', 0),
(4, 0, 'domestic', 'East', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picnic`
--
ALTER TABLE `picnic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_category`
--
ALTER TABLE `tour_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `picnic`
--
ALTER TABLE `picnic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tour_category`
--
ALTER TABLE `tour_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
