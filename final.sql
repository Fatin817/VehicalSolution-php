-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 06:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `nid` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `nid`, `address`, `number`, `email`, `password`, `image`) VALUES
(6, 'admin', 'Fatin israq tabib', '111', 'house:10, block:c, Road:3 , banasree, rampura', '0178234521', 'fatin@gmail.com', '$2y$10$4QfrN8HFmErQwzLRw3X42epRbfl4mDEj0yGAa5B.X/0TVQLgK/2ny', 'Capture 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `nid` int(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `image` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `nid`, `address`, `number`, `email`, `password`, `image`, `status`) VALUES
(481, 'fatin israq tabib', 111, 'banasree,rampura,dhaka', '0987654324', 'fatin@gmail.com', '$2y$10$PPJhWDsH57MTIx90UH9/C.VNwwRH8Z0TfYPgG/H5Kqp/Q80gCmb2W', 'Capture 2.jpg', NULL),
(482, 'Fatin Israq', 222, 'house:10, block:c, Road:3 , banasree, rampura', '098765432', 'israq@gmail.com', '$2y$10$LZyWRIhuwQtQyqW55bZyceh6MS/KYBdJLXWgLoEZSRVLwMbf1XRZu', 'Capture 2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(20) NOT NULL,
  `shopname` text NOT NULL,
  `shopaddress` varchar(100) NOT NULL,
  `tradelicence` varchar(100) NOT NULL,
  `workshoptype` varchar(15) NOT NULL,
  `workshopnumber` varchar(20) NOT NULL,
  `workshopservice` varchar(30) NOT NULL,
  `ownername` text NOT NULL,
  `ownerNID` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `shopname`, `shopaddress`, `tradelicence`, `workshoptype`, `workshopnumber`, `workshopservice`, `ownername`, `ownerNID`, `password`, `status`) VALUES
(11, 'navana', 'gulshan', 'A34-765-B77', 'Car', '019654327', 'Garage', 'Mostofa', 111, '$2y$10$tP9RcQeFcXulHmq3aJwkxenAtPEqy3gUxb3RZGAwsp39YUo3.EycW', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `shopname` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `shopname`, `message`) VALUES
(5, 'fatin israq tabib', '2022280@iub.edu.bd', 'navana', 'Good one'),
(6, 'Fatin israq tabib', 'fatin@gmail.com', 'navana', 'Onek pera vai');

-- --------------------------------------------------------

--
-- Table structure for table `shopimage`
--

CREATE TABLE `shopimage` (
  `id` int(11) NOT NULL,
  `ownerNID` int(20) NOT NULL,
  `image` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopimage`
--

INSERT INTO `shopimage` (`id`, `ownerNID`, `image`) VALUES
(15, 111, 'nathana-reboucas-enaNfAjiDGg-unsplash.jpg'),
(16, 111, 'Capture 2.jpg'),
(17, 111, 'Capture 2.jpg'),
(18, 111, 'Capture 2.jpg'),
(19, 111, 'Capture 2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopimage`
--
ALTER TABLE `shopimage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shopimage`
--
ALTER TABLE `shopimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
