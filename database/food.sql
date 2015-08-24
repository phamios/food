-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2015 at 03:17 PM
-- Server version: 10.0.20-MariaDB-0+deb8u1
-- PHP Version: 5.6.9-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cookmethod`
--

CREATE TABLE IF NOT EXISTS `tbl_cookmethod` (
`id` int(11) NOT NULL,
  `cookmethod` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coursetype`
--

CREATE TABLE IF NOT EXISTS `tbl_coursetype` (
`id` int(11) unsigned NOT NULL,
  `coursetypename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cuisinetype`
--

CREATE TABLE IF NOT EXISTS `tbl_cuisinetype` (
`id` int(11) NOT NULL,
  `cuisinetypename` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dishtype`
--

CREATE TABLE IF NOT EXISTS `tbl_dishtype` (
`id` int(11) NOT NULL,
  `dishtypename` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE IF NOT EXISTS `tbl_food` (
`id` int(11) unsigned NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `cookingtime` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `preparationtime` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `difficulty` varchar(100) DEFAULT NULL,
  `servings` varchar(100) DEFAULT NULL,
  `ingredients` text,
  `direction` text,
  `cuisinetypeid` int(11) DEFAULT NULL,
  `coursetype` int(11) DEFAULT NULL,
  `disktype` int(11) DEFAULT NULL,
  `cookingmethod` text,
  `foodtype` text,
  `createdate` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foodtype`
--

CREATE TABLE IF NOT EXISTS `tbl_foodtype` (
`id` int(11) NOT NULL,
  `foodtypename` varchar(255) DEFAULT NULL,
  `foodtypeimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cookmethod`
--
ALTER TABLE `tbl_cookmethod`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coursetype`
--
ALTER TABLE `tbl_coursetype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cuisinetype`
--
ALTER TABLE `tbl_cuisinetype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dishtype`
--
ALTER TABLE `tbl_dishtype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_foodtype`
--
ALTER TABLE `tbl_foodtype`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cookmethod`
--
ALTER TABLE `tbl_cookmethod`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_coursetype`
--
ALTER TABLE `tbl_coursetype`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_cuisinetype`
--
ALTER TABLE `tbl_cuisinetype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dishtype`
--
ALTER TABLE `tbl_dishtype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_foodtype`
--
ALTER TABLE `tbl_foodtype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
