-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 08:31 PM
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
(29, 'finvl', 'bb@bb.com', '5553cfaf751a4b14960b7581a20bc142', 220, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

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
-- AUTO_INCREMENT for table `pricecal`
--
ALTER TABLE `pricecal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `yourcover`
--
ALTER TABLE `yourcover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `yourdriving`
--
ALTER TABLE `yourdriving`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `yourinfo`
--
ALTER TABLE `yourinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
