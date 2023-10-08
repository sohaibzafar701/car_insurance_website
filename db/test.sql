-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 06:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `regno` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `checkbox` tinyint(1) NOT NULL,
  `regkeeper` varchar(255) NOT NULL,
  `carusepurpose` varchar(255) NOT NULL,
  `carparkovernight` varchar(255) NOT NULL,
  `carmilesperyear` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `cnfirmemail` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `bodyworkormodified` enum('Yes','No') NOT NULL DEFAULT 'Yes',
  `price1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`regno`, `date`, `checkbox`, `regkeeper`, `carusepurpose`, `carparkovernight`, `carmilesperyear`, `fname`, `lname`, `dob`, `emailaddress`, `cnfirmemail`, `id`, `bodyworkormodified`, `price1`) VALUES
('54654', '0000-00-00', 0, 'Please Select Yes or No', 'Please Select one Option', 'Please Select one Option', 'Please Select one Option', '', '', '0000-00-00', '', '', 112, 'Yes', 0),
('5465', '0000-00-00', 0, 'Please Select Yes or No', 'Please Select one Option', 'Please Select one Option', 'Please Select one Option', '', '', '0000-00-00', '', '', 113, 'Yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `name`, `email`, `password`) VALUES
(1, 'bb', 'bb@bb.com', '5553cfaf751a4b14960b7581a20bc142'),
(2, 'cc', 'cc@cc.com', '5553cfaf751a4b14960b7581a20bc142'),
(3, 'nn', 'nn@nn.com', '5553cfaf751a4b14960b7581a20bc142');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `preferred_date` date DEFAULT NULL,
  `preferred_time` time DEFAULT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `name`, `email`, `phone`, `preferred_date`, `preferred_time`, `comments`) VALUES
(1, 'hjh', 'hh@hh.com', '5252', '0000-00-00', '00:00:00', 'jhkjhkhk'),
(2, 'hjh', 'hh@hh.com', '5252', '2023-04-11', '08:59:00', 'jhkjhkhk'),
(3, 'jj', 'jj@jj.com', '54654', '2023-04-12', '21:08:00', 'fgdfg'),
(4, 'jj', 'jj@jj.com', '54654', '2023-04-12', '21:08:00', 'fgdfg'),
(5, 'jj', 'jj@jj.com', '54654', '2023-04-12', '21:08:00', 'fgdfg'),
(6, 'jj', 'jj@jj.com', '54654', '2023-04-12', '21:08:00', 'fgdfg'),
(7, 'gg', 'gg@gg.com', '54654', '2023-04-18', '21:16:00', 'erger'),
(8, 'yryu', 'hh@hh.com', '546546546', '2023-04-18', '09:18:00', 'rtyr'),
(9, 'gg', 'gg@gg.com', '5465465', '2023-04-11', '21:20:00', 'dsfs'),
(10, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(11, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(12, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(13, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(14, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(15, 'jj', 'jj@jj.com', '54654645', '2023-04-25', '21:22:00', 'hgjghj'),
(16, 'jj', 'jj@jj.com', '6546546', '2023-04-04', '14:26:00', 'jhk'),
(17, 'hgjg', 'hh@hh.com', '546546', '2023-04-12', '21:35:00', 'hgjgjg'),
(18, 'hh', 'hh@hh.co', '54654', '2023-04-24', '12:35:00', 'hgjgh');

-- --------------------------------------------------------

--
-- Table structure for table `pricecal`
--

CREATE TABLE `pricecal` (
  `id` int(11) NOT NULL,
  `carmilesperyear` int(11) DEFAULT NULL,
  `childunder16` tinyint(1) DEFAULT NULL,
  `noclaimbonusyears` int(11) DEFAULT NULL,
  `DVLA` varchar(255) DEFAULT NULL,
  `coverneed` varchar(255) DEFAULT NULL,
  `finalprice` int(255) NOT NULL,
  `finalprice2` int(255) NOT NULL,
  `finalprice3` int(255) NOT NULL,
  `boughtprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricecal`
--

INSERT INTO `pricecal` (`id`, `carmilesperyear`, `childunder16`, `noclaimbonusyears`, `DVLA`, `coverneed`, `finalprice`, `finalprice2`, `finalprice3`, `boughtprice`) VALUES
(29, 0, 0, 0, 'Please Select Yes or No', 'Please Select', 650, 715, 910, 715),
(30, 0, 0, 0, 'Please Select Yes or No', 'Please Select', 650, 715, 910, 715);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `covername` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `price`, `covername`) VALUES
(29, 'finvl', 'bb@bb.com', '5553cfaf751a4b14960b7581a20bc142', 715, 'Please Select'),
(32, 'bb', 'll@ll.co', 'cd0e401e3a8680fde5a56df48acefe2b', 715, 'Please Select');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `review` varchar(500) NOT NULL,
  `rating` int(1) NOT NULL,
  `buyername` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_reviews`
--

INSERT INTO `user_reviews` (`review`, `rating`, `buyername`, `id`) VALUES
('check it chuchuu', 5, '', 9);

-- --------------------------------------------------------

--
-- Table structure for table `yourcover`
--

CREATE TABLE `yourcover` (
  `coverstart` date DEFAULT NULL,
  `coverneed` varchar(255) DEFAULT NULL,
  `usuallypaycarinsurance` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `price4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `yourcover`
--

INSERT INTO `yourcover` (`coverstart`, `coverneed`, `usuallypaycarinsurance`, `id`, `price4`) VALUES
('0000-00-00', 'Please Select', 'Please Select', 109, 0),
('0000-00-00', 'Please Select', 'Please Select', 110, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yourdriving`
--

CREATE TABLE `yourdriving` (
  `licenesetypehold` varchar(255) DEFAULT NULL,
  `DVLA` varchar(255) DEFAULT NULL,
  `noclaimbonusyears` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `price3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `yourdriving`
--

INSERT INTO `yourdriving` (`licenesetypehold`, `DVLA`, `noclaimbonusyears`, `id`, `price3`) VALUES
('Please Select', 'Please Select Yes or No', 'Please Select', 83, 0),
('Please Select', 'Please Select Yes or No', 'Please Select', 84, 0);

-- --------------------------------------------------------

--
-- Table structure for table `yourinfo`
--

CREATE TABLE `yourinfo` (
  `title` varchar(255) DEFAULT NULL,
  `martialstat` varchar(10) DEFAULT NULL,
  `liveinuk` varchar(255) DEFAULT NULL,
  `telephoneno` varchar(30) DEFAULT NULL,
  `childunder16` varchar(255) DEFAULT NULL,
  `postcode` varchar(100) DEFAULT NULL,
  `houseno` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `carkeptonaddresswholenight` varchar(255) DEFAULT NULL,
  `occupationstatus` varchar(250) DEFAULT NULL,
  `occupationrequireyoutouseyourvehicleforworkpurposes` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `price2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `yourinfo`
--

INSERT INTO `yourinfo` (`title`, `martialstat`, `liveinuk`, `telephoneno`, `childunder16`, `postcode`, `houseno`, `address`, `carkeptonaddresswholenight`, `occupationstatus`, `occupationrequireyoutouseyourvehicleforworkpurposes`, `id`, `price2`) VALUES
('Please Select', 'Please Sel', '', '', 'Please Select', '', '', '', 'Please Select Yes or No', 'Please Select', 'Please Select', 99, 0),
('Please Select', 'Please Sel', '', '', 'Please Select', '', '', '', 'Please Select Yes or No', 'Please Select', 'Please Select', 100, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricecal`
--
ALTER TABLE `pricecal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yourcover`
--
ALTER TABLE `yourcover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yourdriving`
--
ALTER TABLE `yourdriving`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yourinfo`
--
ALTER TABLE `yourinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pricecal`
--
ALTER TABLE `pricecal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `yourcover`
--
ALTER TABLE `yourcover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `yourdriving`
--
ALTER TABLE `yourdriving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `yourinfo`
--
ALTER TABLE `yourinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
