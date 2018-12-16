-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 06:31 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inmar`
--

-- --------------------------------------------------------

--
-- Table structure for table `101fruits`
--

CREATE TABLE `101fruits` (
  `fruitName` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantitySelected` int(11) DEFAULT '0',
  `priceOfSelected` double DEFAULT '0',
  `dateou` varchar(10) DEFAULT NULL,
  `dateouq` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `101fruits`
--

INSERT INTO `101fruits` (`fruitName`, `quantity`, `price`, `quantitySelected`, `priceOfSelected`, `dateou`, `dateouq`) VALUES
('mango', 0, 17, 2, 34, '18/12/15', '18/12/15'),
('orange', 4, 18, 0, 0, '18/12/15', '18/12/15'),
('apple', 2, 19, 1, 19, '18/12/15', '18/12/15'),
('banana', 2, 12, 0, 0, '18/12/15', '18/12/15'),
('pineapple', 2, 21, 0, 0, '18/12/15', '18/12/15'),
('pomogranate', 5, 13, 1, 13, '18/12/15', '18/12/15'),
('watermelon', 1, 24, 0, 0, '18/12/15', '18/12/15'),
('guava', 2, 16, 0, 0, '18/12/15', '18/12/15');

-- --------------------------------------------------------

--
-- Table structure for table `8008fruits`
--

CREATE TABLE `8008fruits` (
  `fruitName` varchar(20) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantitySelected` int(11) DEFAULT '0',
  `priceOfSelected` double DEFAULT '0',
  `dateou` varchar(10) DEFAULT NULL,
  `dateouq` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8008fruits`
--

INSERT INTO `8008fruits` (`fruitName`, `quantity`, `price`, `quantitySelected`, `priceOfSelected`, `dateou`, `dateouq`) VALUES
('mango', 2, 12, 0, 0, '18/12/16', '18/12/16'),
('orange', 3, 13, 0, 0, '18/12/16', '18/12/16'),
('apple', 3, 14, 0, 0, '18/12/16', '18/12/16'),
('banana', 3, 24, 1, 24, '18/12/16', '18/12/16'),
('pineapple', 5, 15, 0, 0, '18/12/16', '18/12/16'),
('pomogranate', 6, 16, 0, 0, '18/12/16', '18/12/16'),
('watermelon', 7, 17, 0, 0, '18/12/16', '18/12/16'),
('guava', 8, 18, 0, 0, '18/12/16', '18/12/16');

-- --------------------------------------------------------

--
-- Table structure for table `retailer`
--

CREATE TABLE `retailer` (
  `email` varchar(22) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `address` text NOT NULL,
  `pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailer`
--

INSERT INTO `retailer` (`email`, `fname`, `lname`, `address`, `pno`) VALUES
('a', 'a', 'a', 'a', 1),
('e', 'q', 'w', 'r', 2),
('abcd', 'qwer', 'tyui', 'opasd', 10),
('a', 'aa', 'aa', 'aa', 11),
('abc', 'ab', 'ab', 'abc', 12),
('abc', 'jik', 'ghj', 'qsr', 101),
('abc@gmail.com', 'abc', 'def', 'abcdefujj', 123),
('abc@gmail.in', 'abc', 'cdf', 'abcdef', 1234),
('rohitreddy197@gmail.co', 'rohith', 'reddy', 'SRI SAI TOWERS,FT.NO-402\r\nSAI NAGAR COLONY RDNO-4,NAGOLE', 8008);

-- --------------------------------------------------------

--
-- Table structure for table `retshop`
--

CREATE TABLE `retshop` (
  `rid` int(12) NOT NULL,
  `sid` int(12) NOT NULL,
  `amount` int(12) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retshop`
--

INSERT INTO `retshop` (`rid`, `sid`, `amount`, `date`) VALUES
(123, 123, 77, '18/12/10'),
(123, 123, 76, '18/12/10'),
(123, 123, 76, '18/12/10'),
(123, 123, 76, '18/12/10'),
(10, 2, 60, '18/12/11'),
(10, 2, 20, '18/12/11'),
(10, 2, 20, '18/12/11'),
(10, 2, 22, '18/12/11'),
(123, 123, 12, '18/12/15'),
(101, 123, 13, '18/12/15'),
(8008, 1, 24, '18/12/16');

-- --------------------------------------------------------

--
-- Table structure for table `retwal`
--

CREATE TABLE `retwal` (
  `rid` int(12) NOT NULL,
  `wallet` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retwal`
--

INSERT INTO `retwal` (`rid`, `wallet`) VALUES
(1, 12),
(10, 62),
(101, 66),
(123, 1014),
(8008, 24);

-- --------------------------------------------------------

--
-- Table structure for table `shopper`
--

CREATE TABLE `shopper` (
  `uname` varchar(12) NOT NULL,
  `pwd` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopper`
--

INSERT INTO `shopper` (`uname`, `pwd`) VALUES
('1', '1'),
('123', '123'),
('2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `shopwal`
--

CREATE TABLE `shopwal` (
  `sid` int(12) NOT NULL,
  `wallet` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopwal`
--

INSERT INTO `shopwal` (`sid`, `wallet`) VALUES
(1, 2617),
(2, 2978),
(123, 2299);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `pid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`pid`) VALUES
(101),
(8008);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `101fruits`
--
ALTER TABLE `101fruits`
  ADD UNIQUE KEY `fruitName` (`fruitName`),
  ADD UNIQUE KEY `price` (`price`);

--
-- Indexes for table `8008fruits`
--
ALTER TABLE `8008fruits`
  ADD UNIQUE KEY `fruitName` (`fruitName`),
  ADD UNIQUE KEY `price` (`price`);

--
-- Indexes for table `retailer`
--
ALTER TABLE `retailer`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `retwal`
--
ALTER TABLE `retwal`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `shopper`
--
ALTER TABLE `shopper`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `shopwal`
--
ALTER TABLE `shopwal`
  ADD PRIMARY KEY (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
