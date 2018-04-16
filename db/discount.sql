-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 10:39 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discount`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientinfo`
--

CREATE TABLE `clientinfo` (
  `clinetinfoid` int(11) NOT NULL,
  `clientname` varchar(45) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `discountByReferorder` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientinfo`
--

INSERT INTO `clientinfo` (`clinetinfoid`, `clientname`, `email`, `discountByReferorder`) VALUES
(1, 'sakib', 'md.sakibrahman@gmail.com', NULL),
(2, 'rumi', 'mujtaba.rumi1@gmail.com', NULL),
(3, 'farzad', 'farzadrahman59@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `discountlist`
--

CREATE TABLE `discountlist` (
  `discountlistid` int(11) NOT NULL,
  `fksendinfoid` int(11) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discountlist`
--

INSERT INTO `discountlist` (`discountlistid`, `fksendinfoid`, `datetime`) VALUES
(3, 43, '2018-04-09 10:13:59'),
(4, 43, '2018-04-09 10:18:05'),
(5, 43, '2018-04-09 10:20:02'),
(6, 43, '2018-04-09 10:21:30'),
(7, 43, '2018-04-09 10:24:04'),
(8, 43, '2018-04-09 10:25:47'),
(9, 44, '2018-04-10 05:57:49');

-- --------------------------------------------------------

--
-- Table structure for table `referemail`
--

CREATE TABLE `referemail` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fkdiscountlistid` int(11) NOT NULL,
  `discountCode` varchar(255) DEFAULT NULL,
  `discountCodeExpiryDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referemail`
--

INSERT INTO `referemail` (`id`, `email`, `fkdiscountlistid`, `discountCode`, `discountCodeExpiryDate`) VALUES
(1, 'skaib@ghmi.com', 8, NULL, NULL),
(2, 'rumi@gmail.com', 8, NULL, NULL),
(3, 'farzad@gmail.om', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referordered`
--

CREATE TABLE `referordered` (
  `referorderedId` int(11) NOT NULL,
  `referemailId` int(11) DEFAULT NULL,
  `referorderedDate` datetime DEFAULT NULL,
  `clientId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sendinfo`
--

CREATE TABLE `sendinfo` (
  `sendinfoid` int(11) NOT NULL,
  `offeramount` varchar(25) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `sentto` int(11) NOT NULL,
  `discountCode` varchar(255) DEFAULT NULL,
  `discountCodeExpiryDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendinfo`
--

INSERT INTO `sendinfo` (`sendinfoid`, `offeramount`, `datetime`, `template_id`, `sentto`, `discountCode`, `discountCodeExpiryDate`) VALUES
(1, NULL, '2018-04-07 09:41:57', NULL, 3, NULL, NULL),
(2, NULL, '2018-04-07 09:43:28', NULL, 3, NULL, NULL),
(3, '20', '2018-04-07 10:23:55', NULL, 3, NULL, NULL),
(4, NULL, '2018-04-07 10:25:26', NULL, 3, NULL, NULL),
(5, NULL, '2018-04-07 10:25:31', NULL, 2, NULL, NULL),
(6, NULL, '2018-04-07 10:25:32', NULL, 1, NULL, NULL),
(7, NULL, '2018-04-07 10:30:15', NULL, 1, NULL, NULL),
(8, NULL, '2018-04-07 11:20:18', NULL, 3, NULL, NULL),
(9, NULL, '2018-04-07 11:20:20', NULL, 2, NULL, NULL),
(10, NULL, '2018-04-07 11:20:21', NULL, 1, NULL, NULL),
(11, '20', '2018-04-07 11:26:27', NULL, 3, NULL, NULL),
(12, '20', '2018-04-07 11:26:29', NULL, 2, NULL, NULL),
(13, '20', '2018-04-07 11:26:30', NULL, 1, NULL, NULL),
(14, NULL, '2018-04-07 11:29:20', NULL, 3, NULL, NULL),
(15, NULL, '2018-04-07 11:29:22', NULL, 2, NULL, NULL),
(16, NULL, '2018-04-07 11:29:23', NULL, 1, NULL, NULL),
(17, NULL, '2018-04-07 11:31:29', NULL, 3, NULL, NULL),
(18, NULL, '2018-04-07 11:31:30', NULL, 2, NULL, NULL),
(19, NULL, '2018-04-07 11:31:31', NULL, 1, NULL, NULL),
(20, NULL, '2018-04-07 11:32:39', NULL, 3, NULL, NULL),
(21, NULL, '2018-04-07 11:32:40', NULL, 2, NULL, NULL),
(22, NULL, '2018-04-07 11:32:41', NULL, 1, NULL, NULL),
(23, NULL, '2018-04-09 06:05:28', NULL, 1, NULL, NULL),
(24, NULL, '2018-04-09 06:06:34', NULL, 1, NULL, NULL),
(25, '20', '2018-04-09 06:08:31', NULL, 1, NULL, NULL),
(26, '20', '2018-04-09 06:12:08', NULL, 1, NULL, NULL),
(27, '20', '2018-04-09 06:15:26', NULL, 1, NULL, NULL),
(28, '20', '2018-04-09 06:26:53', NULL, 1, NULL, NULL),
(29, '20', '2018-04-09 06:35:46', NULL, 1, NULL, NULL),
(30, '20', '2018-04-09 06:36:16', NULL, 1, NULL, NULL),
(31, '20', '2018-04-09 06:44:59', NULL, 1, NULL, NULL),
(32, '20', '2018-04-09 06:51:13', NULL, 1, NULL, NULL),
(33, '20', '2018-04-09 06:56:40', NULL, 1, NULL, NULL),
(34, '20', '2018-04-09 07:03:17', NULL, 1, NULL, NULL),
(35, '20', '2018-04-09 07:04:36', NULL, 1, NULL, NULL),
(36, '20', '2018-04-09 07:35:19', NULL, 3, NULL, NULL),
(37, '20', '2018-04-09 07:35:20', NULL, 1, NULL, NULL),
(38, '20', '2018-04-09 09:32:33', NULL, 1, NULL, NULL),
(39, '20', '2018-04-09 09:34:38', NULL, 1, NULL, NULL),
(40, '20', '2018-04-09 09:44:08', NULL, 1, NULL, NULL),
(41, '20', '2018-04-09 09:51:36', NULL, 1, NULL, NULL),
(42, '20', '2018-04-09 10:02:04', NULL, 1, NULL, NULL),
(43, '20', '2018-04-09 10:10:29', NULL, 1, NULL, NULL),
(44, '20', '2018-04-10 05:57:18', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `templateid` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'sakib', 'sakib@gmail.com', '$2y$10$6uyV1sPMpuqEQR4iFbdFp.HsIxfquF67nk3zdJlYma8U1Mw6ZZ9E6', NULL, NULL, 'rJT0jMY4yDx702gQM2Ky7h2haEoYl3Y2h2cqMKsc6PWdL6FWAr75VZHlbPII');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientinfo`
--
ALTER TABLE `clientinfo`
  ADD PRIMARY KEY (`clinetinfoid`);

--
-- Indexes for table `discountlist`
--
ALTER TABLE `discountlist`
  ADD PRIMARY KEY (`discountlistid`),
  ADD KEY `fk_discountlist_sendinfo1_idx` (`fksendinfoid`);

--
-- Indexes for table `referemail`
--
ALTER TABLE `referemail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_referemail_discountlist1_idx` (`fkdiscountlistid`);

--
-- Indexes for table `referordered`
--
ALTER TABLE `referordered`
  ADD PRIMARY KEY (`referorderedId`),
  ADD KEY `fkreferemailid_referorder` (`referemailId`),
  ADD KEY `fkClientId_` (`clientId`);

--
-- Indexes for table `sendinfo`
--
ALTER TABLE `sendinfo`
  ADD PRIMARY KEY (`sendinfoid`),
  ADD KEY `fk_sendinfo_template1_idx` (`template_id`),
  ADD KEY `fk_sendinfo_clientinfo1_idx` (`sentto`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`templateid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientinfo`
--
ALTER TABLE `clientinfo`
  MODIFY `clinetinfoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `discountlist`
--
ALTER TABLE `discountlist`
  MODIFY `discountlistid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `referemail`
--
ALTER TABLE `referemail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `referordered`
--
ALTER TABLE `referordered`
  MODIFY `referorderedId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sendinfo`
--
ALTER TABLE `sendinfo`
  MODIFY `sendinfoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `templateid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `discountlist`
--
ALTER TABLE `discountlist`
  ADD CONSTRAINT `fk_discountlist_sendinfo1` FOREIGN KEY (`fksendinfoid`) REFERENCES `sendinfo` (`sendinfoid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referemail`
--
ALTER TABLE `referemail`
  ADD CONSTRAINT `fk_referemail_discountlist1` FOREIGN KEY (`fkdiscountlistid`) REFERENCES `discountlist` (`discountlistid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referordered`
--
ALTER TABLE `referordered`
  ADD CONSTRAINT `referordered_ClientInfo` FOREIGN KEY (`clientId`) REFERENCES `clientinfo` (`clinetinfoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `referordered_ibfk_1` FOREIGN KEY (`referemailId`) REFERENCES `referemail` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sendinfo`
--
ALTER TABLE `sendinfo`
  ADD CONSTRAINT `fk_sendinfo_clientinfo1` FOREIGN KEY (`sentto`) REFERENCES `clientinfo` (`clinetinfoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sendinfo_template1` FOREIGN KEY (`template_id`) REFERENCES `template` (`templateid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
