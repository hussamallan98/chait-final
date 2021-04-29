-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 09:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept`
--

CREATE TABLE `accept` (
  `case_id` int(3) NOT NULL,
  `case_name` text NOT NULL,
  `case_desc` text NOT NULL,
  `case_age` int(3) NOT NULL,
  `case_image` text NOT NULL,
  `case_cat` int(3) NOT NULL,
  `charity_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accept`
--

INSERT INTO `accept` (`case_id`, `case_name`, `case_desc`, `case_age`, `case_image`, `case_cat`, `charity_id`) VALUES
(6, 'dsasdas', 'Ddsasddassadsdaescription', 32, 'logo.png', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_name`, `admin_password`) VALUES
(2, 'admin@admin.com', 'hussam', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `case_id` int(3) NOT NULL,
  `case_name` text NOT NULL,
  `case_age` int(3) NOT NULL,
  `case_desc` text NOT NULL,
  `case_image` text NOT NULL,
  `case_cat` int(4) NOT NULL,
  `charity_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_id`, `case_name`, `case_age`, `case_desc`, `case_image`, `case_cat`, `charity_id`) VALUES
(3, 'alis', 25, 'bla blsssa bla lba bla bla lblalbl', 'Ahmad Mustafa.png', 3, 2),
(5, 'ali', 25, 'ali alone with 5 girls and 2 childrren and he need help', 'logo.png', 3, 3),
(6, 'dasdadsa', 55, 'ssssDescription', 'health.jpg', 1, 3),
(9, 'abbd', 96, 'Description', '', 4, 2),
(12, 'allan', 25, 'allan', 'health.jpg', 1, 0),
(13, 'olfat', 25, 'sssssssDescription', 'screencapture-localhost-caps-admin-login-php-2021-02-07-17_44_33.png', 3, 2),
(18, 'ss', 25, 'ss', 'logo.png', 1, 0),
(19, 'laith', 22, 'laith mohamme a;;dsakpldsad', 'Ahmad Mustafa.png', 1, 2),
(21, 'ali', 55, 'Dssssssescription', 'Ahmad Mustafa.png', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_desc` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `cat_image`) VALUES
(1, 'learning', 'helpsss', 'learning.jpg'),
(3, 'help', 'bla bla bla bla', 'help.jpg'),
(4, 'health', 'health monitoring system', 'health.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

CREATE TABLE `charity` (
  `charity_id` int(3) NOT NULL,
  `charity_name` text NOT NULL,
  `charity_email` text NOT NULL,
  `charity_password` text NOT NULL,
  `charity_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`charity_id`, `charity_name`, `charity_email`, `charity_password`, `charity_phone`) VALUES
(2, 'Al-Amal', 'hussamallan98@gmail.com', 'hussamallan', '0795676666'),
(3, 'Al-Hekmah', 'ali99@gmail.com', 'aliallan', '0791517006'),
(4, 'sama', 's@gmail.com', 's1234567', '0788129260'),
(8, 'hajar', 'aliallan@fmail.com', 'aliallan1234', '07884112925');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `user_id`, `contact_desc`) VALUES
(3, 3, ' Your Message Heresadasdasdasds'),
(6, 3, ' Your Message Herefdsdfdssd'),
(7, 3, ' Your Message Heresdadasdasddasdsffdhgkj'),
(8, 3, ' Your Message Heresdadsdyyyyyy'),
(9, 2, 'hussamallan');

-- --------------------------------------------------------

--
-- Table structure for table `supporter`
--

CREATE TABLE `supporter` (
  `supporter_id` int(3) NOT NULL,
  `supporter_name` text NOT NULL,
  `supporter_email` text NOT NULL,
  `supporter_password` text NOT NULL,
  `supporter_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supporter`
--

INSERT INTO `supporter` (`supporter_id`, `supporter_name`, `supporter_email`, `supporter_password`, `supporter_phone`) VALUES
(2, 'ali', 'ali@gmail.com', 'aliallan123', '0791517006'),
(4, 'hussm', 'hussamallan@gmail.com', 'hussamallan', '0795676636');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept`
--
ALTER TABLE `accept`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `charity`
--
ALTER TABLE `charity`
  ADD PRIMARY KEY (`charity_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `supporter`
--
ALTER TABLE `supporter`
  ADD PRIMARY KEY (`supporter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept`
--
ALTER TABLE `accept`
  MODIFY `case_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `case_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `charity`
--
ALTER TABLE `charity`
  MODIFY `charity_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `supporter`
--
ALTER TABLE `supporter`
  MODIFY `supporter_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
