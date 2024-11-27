-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 04:31 PM
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
-- Database: `bsbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `Bus_no` varchar(10) NOT NULL,
  `Travel_name` varchar(30) NOT NULL,
  `Bus_type` varchar(5) NOT NULL,
  `Root_type` varchar(35) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `D_Location` varchar(20) NOT NULL,
  `D_time` time NOT NULL DEFAULT '10:30:00',
  `A_Location` varchar(30) NOT NULL,
  `A_Time` time NOT NULL DEFAULT '10:30:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_no`, `Travel_name`, `Bus_type`, `Root_type`, `Model`, `D_Location`, `D_time`, `A_Location`, `A_Time`) VALUES
('CPEA7890', 'Sri Lanka Adventures', 'NTC', 'Colombo to Kandy', 'Higer KLQ6129Q', 'Ella', '08:30:00', 'Arugam Bay', '11:45:00'),
('CPKA5678', ' Island Explorer', 'NTC', 'Negombo to Trincomalee', 'Mitsubishi Rosa', 'Negambo', '10:30:00', 'Trincomalee', '13:20:00'),
('NPJA3456', 'Ceylon Wanderers', 'CTB', 'Jaffna to Anuradhapura', 'Mitsubishi Rosa', 'Jaffna', '10:15:00', 'Anuradhapura', '13:20:00'),
('WPCA1234', 'Paradise Travels', 'NTC', 'Kandy to Nuwara Eliya', 'Leyland Viking', 'Kandy', '09:30:00', 'Nuwara Eliya', '12:45:00'),
('WPNA9012', 'Serendib Tours', 'CTB', 'Colombo to Gampaha', 'Tata Starbus', 'Colombo', '07:45:00', 'Gampaha', '08:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `cancelation`
--

CREATE TABLE `cancelation` (
  `id` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `refid` bigint(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancelation`
--

INSERT INTO `cancelation` (`id`, `user`, `refid`, `email`, `reason`, `details`) VALUES
(1, 'Tharinda', 1023456123, 'email', 'To cancel My previous reservat', 'HNB\r\nMalabe branch\r\n'),
(3, 'nemi', 124, 'email', 'ffy', 'hkj');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `number`, `email`, `subject`, `message`) VALUES
(1, 'Rusith', 123456, 'rusithtd@gmail.com', 'hello', 'unklmlkkpookopkpokp'),
(3, 'Rusith', 713110321, 'rusithtd@gmail.com', 'hello', 'lbxjnjxcnkscm'),
(4, 'Rusith', 713003214, 'rusithtd@gmail.com', 'hello', 'nblcghnjb');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `Lemail` varchar(30) DEFAULT NULL,
  `Lpassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`Lemail`, `Lpassword`) VALUES
('abc@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `offline`
--

CREATE TABLE `offline` (
  `id` int(50) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `account` int(12) NOT NULL,
  `pno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offline`
--

INSERT INTO `offline` (`id`, `customer`, `bank`, `branch`, `account`, `pno`) VALUES
(3, 'rusith', 'gnm', 'malabe', 2147483647, 711112227),
(8, 'rusith', 'gnm', 'mathara', 2147483647, 711122233);

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Number` bigint(12) NOT NULL,
  `cvv` bigint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id`, `Name`, `Number`, `cvv`) VALUES
(1, 'Rusith', 12234567890, 12),
(2, 'Rusith', 12234567890, 12);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Gender` char(1) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Passport_id` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `ContactNo` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Firstname`, `Lastname`, `Gender`, `NIC`, `Passport_id`, `Username`, `ContactNo`, `Email`, `Password`) VALUES
(7, 'Dulanja', 'Anuradha', 'm', '200105701842', '', '', 765846984, 'abc@gmail.com', '1234'),
(8, 'Rusith', 'silva', 'm', '', '15489676', 'Rusith Silva', 765846985, 'Rusth@gmail.com', '1111'),
(11, '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reference_ID` int(11) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reference_ID`, `User_name`, `Password`, `Name`) VALUES
(1111, 'Kasun', '1234', 'Kasun Fernando'),
(2222, 'Yasmitha', '5678', 'Yasmitha Silva');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `Reference_ID` varchar(50) NOT NULL,
  `User_name` varchar(50) NOT NULL,
  `Travel_name` varchar(50) NOT NULL,
  `Bus_type` varchar(20) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Bus_no` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Departure_location` varchar(30) NOT NULL,
  `Arrival_location` varchar(30) NOT NULL,
  `Departure_time` time NOT NULL,
  `Arrival_time` time NOT NULL,
  `Seat_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`Reference_ID`, `User_name`, `Travel_name`, `Bus_type`, `Model`, `Bus_no`, `Date`, `Departure_location`, `Arrival_location`, `Departure_time`, `Arrival_time`, `Seat_no`) VALUES
('1111', 'Kasun', 'Gihan Travels', 'Luxury', 'Leyland Lynx Euro 4', 'NB-8898', '2023-06-13', 'Colombo', 'Katharagama', '04:30:00', '13:30:00', '23,24,25'),
('2222', 'Yasmitha', 'Nihal Travels', 'Semi-Luxury', 'Leyland Lynx Euro 4', 'NB-1854', '2023-06-13', 'Colombo', 'Galle', '08:30:00', '15:30:00', '10,11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`Bus_no`);

--
-- Indexes for table `cancelation`
--
ALTER TABLE `cancelation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offline`
--
ALTER TABLE `offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reference_ID`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`Reference_ID`,`User_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancelation`
--
ALTER TABLE `cancelation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offline`
--
ALTER TABLE `offline`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
