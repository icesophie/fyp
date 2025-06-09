-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `ownerID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `identitycard` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`ownerID`, `name`, `identitycard`) VALUES
(1, 'Samad', '12345677'),
(2, 'Latifah', '563813021068'),
(3, 'Abu', '551214015433');

-- --------------------------------------------------------

--
-- Table structure for table `palmplantation`
--

CREATE TABLE `palmplantation` (
  `palmID` int(11) NOT NULL,
  `size` int(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ownerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `palmplantation`
--

INSERT INTO `palmplantation` (`palmID`, `size`, `address`, `ownerID`) VALUES
(1, 10, 'Jalan Segamat', 1),
(2, 10, 'Chemplak', 1),
(3, 15, 'Paya Merah', 2),
(4, 11, 'Yong peng', 2),
(5, 12, 'Lot Tepi Jalan, Yong Peng', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `name`, `position`, `password`) VALUES
('S1', 'John Smith', 'Manager', 'password1'),
('S2', 'Abu', 'Labor', 'password2'),
('S3', 'Mike Johnson', 'Assistant', 'password3'),
('S4', 'Emily Davis', 'Clerk', 'password4'),
('S5', 'David Wilson', 'Operator', 'password5'),
('S6', 'Rahman ', 'Labor', '123'),
('s7', 'Anita', 'Clerk', '123'),
('S8', 'Abid', 'Labor', '123');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `voucherID` int(11) NOT NULL,
  `weightofpalm` double NOT NULL,
  `oer` varchar(10) NOT NULL,
  `no` int(11) NOT NULL,
  `palmID` int(11) NOT NULL,
  `staffID` varchar(30) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`voucherID`, `weightofpalm`, `oer`, `no`, `palmID`, `staffID`, `total`) VALUES
(16, 3.4, '36.17', 1, 1, 's4', 122.978),
(20, 3.7, '36.17', 2, 2, 's4', 133.829),
(22, 3.4, '38.47', 3, 3, 's4', 130.798);

-- --------------------------------------------------------

--
-- Table structure for table `weight`
--

CREATE TABLE `weight` (
  `no` int(11) NOT NULL,
  `lorryplatenum` varchar(7) NOT NULL,
  `date` date NOT NULL,
  `month` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `palmID` int(11) NOT NULL,
  `ownerID` int(11) NOT NULL,
  `weightoflorryandpalm` double NOT NULL,
  `weightofpalm` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weight`
--

INSERT INTO `weight` (`no`, `lorryplatenum`, `date`, `month`, `time`, `palmID`, `ownerID`, `weightoflorryandpalm`, `weightofpalm`) VALUES
(1, 'jmu7476', '2023-06-23', '2023-06', '11:59:00', 1, 1, 5, 3.4),
(2, 'abc123', '2023-06-30', '2023-06', '10:54:00', 2, 1, 5, 3.7),
(3, 'qs5814q', '2023-06-30', '2023-06', '11:08:00', 3, 2, 5.7, 3.4),
(4, 'amf123', '2023-07-01', '2023-07', '08:38:00', 4, 2, 3, 1.6),
(5, 'cde123', '2023-07-01', '2023-07', '07:57:00', 5, 3, 5, 2.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`ownerID`);

--
-- Indexes for table `palmplantation`
--
ALTER TABLE `palmplantation`
  ADD PRIMARY KEY (`palmID`),
  ADD KEY `owner` (`ownerID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucherID`),
  ADD KEY `voucher` (`palmID`),
  ADD KEY `staff` (`staffID`),
  ADD KEY `try1` (`no`);

--
-- Indexes for table `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`no`),
  ADD KEY `owner4` (`ownerID`),
  ADD KEY `palm5` (`palmID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `voucherID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `palmplantation`
--
ALTER TABLE `palmplantation`
  ADD CONSTRAINT `owner3` FOREIGN KEY (`ownerID`) REFERENCES `owner` (`ownerID`);

--
-- Constraints for table `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `palm2` FOREIGN KEY (`palmID`) REFERENCES `palmplantation` (`palmID`),
  ADD CONSTRAINT `staff` FOREIGN KEY (`staffID`) REFERENCES `staff` (`staffID`),
  ADD CONSTRAINT `try1` FOREIGN KEY (`no`) REFERENCES `weight` (`no`);

--
-- Constraints for table `weight`
--
ALTER TABLE `weight`
  ADD CONSTRAINT `owner4` FOREIGN KEY (`ownerID`) REFERENCES `owner` (`ownerID`),
  ADD CONSTRAINT `palm5` FOREIGN KEY (`palmID`) REFERENCES `palmplantation` (`palmID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
