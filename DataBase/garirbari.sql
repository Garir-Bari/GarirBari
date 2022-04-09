-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 10:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garirbari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `Gid` int(11) DEFAULT NULL,
  `Cid` int(11) DEFAULT NULL,
  `start_time` varchar(100) DEFAULT NULL,
  `end_time` varchar(10) DEFAULT NULL,
  `b_date` date DEFAULT NULL,
  `p_date` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `DOid` int(11) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `license` varchar(30) DEFAULT NULL,
  `chassis` varchar(30) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver_owner`
--

CREATE TABLE `driver_owner` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `nid` int(16) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `license` varchar(30) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_garage`
--

CREATE TABLE `parking_garage` (
  `id` int(11) NOT NULL,
  `POid` int(11) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_nid` int(16) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `p_address` varchar(300) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `no_of_spot` int(10) DEFAULT NULL,
  `rent_hour` double(10,2) DEFAULT NULL,
  `PS_time` varchar(30) DEFAULT NULL,
  `PE_time` varchar(30) DEFAULT NULL,
  `cctv` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_info`
--

CREATE TABLE `parking_info` (
  `id` int(11) NOT NULL,
  `Cid` int(11) DEFAULT NULL,
  `Gid` int(11) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `issues` varchar(200) DEFAULT NULL,
  `rent` double(10,2) DEFAULT NULL,
  `dri_complain` varchar(100) DEFAULT NULL,
  `gar_complain` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parking_owner`
--

CREATE TABLE `parking_owner` (
  `id` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `nid` int(16) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `image` varchar(40) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `review_rating`
--

CREATE TABLE `review_rating` (
  `id` int(11) NOT NULL,
  `DOid` int(11) DEFAULT NULL,
  `Gid` int(11) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Gid` (`Gid`),
  ADD KEY `Cid` (`Cid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DOid` (`DOid`);

--
-- Indexes for table `driver_owner`
--
ALTER TABLE `driver_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `parking_garage`
--
ALTER TABLE `parking_garage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `POid` (`POid`);

--
-- Indexes for table `parking_info`
--
ALTER TABLE `parking_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Gid` (`Gid`),
  ADD KEY `Cid` (`Cid`);

--
-- Indexes for table `parking_owner`
--
ALTER TABLE `parking_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Gid` (`Gid`),
  ADD KEY `DOid` (`DOid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver_owner`
--
ALTER TABLE `driver_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_garage`
--
ALTER TABLE `parking_garage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_info`
--
ALTER TABLE `parking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parking_owner`
--
ALTER TABLE `parking_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_rating`
--
ALTER TABLE `review_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`Gid`) REFERENCES `parking_garage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`Cid`) REFERENCES `car` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`DOid`) REFERENCES `driver_owner` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parking_garage`
--
ALTER TABLE `parking_garage`
  ADD CONSTRAINT `parking_garage_ibfk_1` FOREIGN KEY (`POid`) REFERENCES `parking_owner` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `parking_info`
--
ALTER TABLE `parking_info`
  ADD CONSTRAINT `parking_info_ibfk_1` FOREIGN KEY (`Gid`) REFERENCES `parking_garage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `parking_info_ibfk_2` FOREIGN KEY (`Cid`) REFERENCES `car` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review_rating`
--
ALTER TABLE `review_rating`
  ADD CONSTRAINT `review_rating_ibfk_1` FOREIGN KEY (`Gid`) REFERENCES `parking_garage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_rating_ibfk_2` FOREIGN KEY (`DOid`) REFERENCES `driver_owner` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
