-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 01:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpproject01`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `userVcode` varchar(240) NOT NULL,
  `userVtoken` varchar(240) NOT NULL,
  `userDateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `userVcode`, `userVtoken`, `userDateTime`) VALUES
(49, 'Kate Casakit', 'katecasakit@gmail.com', 'kate26', '$2y$10$YtQ.q/y1ijK9ceIIRzcN1uCO7EKBRpdS2w77nlsIA4wHZ5grdgMVi', '2tqnJar1', '1', '2021-03-24 20:04:01'),
(50, 'Ron Ivin Gregorio', 'gregoriosamplecode26@gmail.com', 'rivg26', '$2y$10$C1gfrRSIA6JZDnKWUPYpDuEJcf1gVAm7nZWt4aPezSoa1fUwuqFrO', 'egpfoKnE', '1', '2021-03-24 20:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `userslogin`
--

CREATE TABLE `userslogin` (
  `usersLogInID` int(10) NOT NULL,
  `usersID` int(11) NOT NULL,
  `usersEmail` varchar(240) NOT NULL,
  `usersLogInDate` datetime NOT NULL,
  `usersLogInCode` varchar(240) NOT NULL,
  `usersLogInExp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userslogin`
--

INSERT INTO `userslogin` (`usersLogInID`, `usersID`, `usersEmail`, `usersLogInDate`, `usersLogInCode`, `usersLogInExp`) VALUES
(42, 49, 'katecasakit@gmail.com', '2021-03-24 20:04:42', '048591', '1'),
(43, 49, 'katecasakit@gmail.com', '2021-03-24 20:05:05', '942015', '1'),
(46, 50, 'gregoriosamplecode26@gmail.com', '2021-03-24 20:17:35', '796380', '1'),
(47, 50, 'gregoriosamplecode26@gmail.com', '2021-03-24 20:18:00', '057491', '1'),
(48, 50, 'gregoriosamplecode26@gmail.com', '2021-03-24 20:19:20', '890517', '1'),
(49, 50, 'gregoriosamplecode26@gmail.com', '2021-03-24 20:20:22', '903827', '1'),
(50, 50, 'gregoriosamplecode26@gmail.com', '2021-03-24 20:21:56', '361745', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- Indexes for table `userslogin`
--
ALTER TABLE `userslogin`
  ADD PRIMARY KEY (`usersLogInID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `userslogin`
--
ALTER TABLE `userslogin`
  MODIFY `usersLogInID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
