-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 26, 2024 at 05:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsit2alab5`
--

-- --------------------------------------------------------

--
-- Table structure for table `lender`
--

CREATE TABLE `lender` (
  `lenderID` int(11) NOT NULL,
  `lenderName` varchar(200) NOT NULL,
  `lenderAddress` varchar(200) NOT NULL,
  `lenderContactNo` int(11) NOT NULL,
  `lenderFBAdd` varchar(200) NOT NULL,
  `comakerName` varchar(200) NOT NULL,
  `comakerAdd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lender`
--

INSERT INTO `lender` (`lenderID`, `lenderName`, `lenderAddress`, `lenderContactNo`, `lenderFBAdd`, `comakerName`, `comakerAdd`) VALUES
(1, 'James', 'Gabihan', 9343535, 'James.com', 'David', 'Gabihan'),
(2, 'Emman', 'Basuit', 9534534, 'Emman.com', 'Amboy', 'Pinaod');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lender`
--
ALTER TABLE `lender`
  ADD PRIMARY KEY (`lenderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lender`
--
ALTER TABLE `lender`
  MODIFY `lenderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
