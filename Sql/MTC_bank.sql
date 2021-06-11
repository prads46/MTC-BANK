-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 07:50 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0




SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `MTC_Bank`
--

-- --------------------------------------------------------

--- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `sno` int(3) NOT NULL AUTO_INCREMENT,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
--

-- Dumping data for table `transaction`
--
-- dumping 5 data for table `transaction`
INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'MTCJerry', 'MTCPheonix', 800, '2021-06-05 08:00:52'),
(2, 'MTCMorbius', 'MTCGenos', 2321, '2021-06-10 12:37:28'),

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'MTCJerry', 'mtcjerry@gmail.com', 500502),
(2, 'MTCMorbius', 'mtcmorbius@gmail.com', 170901),
(3, 'MTCApex', 'mtcapex03@gmail.com', 190304),
(4, 'MTCBlaze', 'imblaze17@gmail.com', 170302),
(5, 'MTCPheonix', 'risingpheonix@gmail.com', 140900),
(6, 'MTCNinja', 'rninjas@gmail.com', 140201),
(7, 'MTCDrago', 'dragona@gmail.com', 120403),
(8, 'MTCKing',' crybaby9@gmail.com', 90901),
(9, 'MTCflame', 'harshaltawde@gmail.com', 100702),
(10, 'MTCGenos', 'shaikhsakib@gmail.com', 201007);
COMMIT;