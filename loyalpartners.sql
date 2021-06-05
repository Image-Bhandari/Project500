-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 12:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyalpartners`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_by` varchar(255) NOT NULL,
  `message_to` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `message_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_by`, `message_to`, `message`, `message_id`) VALUES
('ram', 'staff', 'k cha', 2),
('ram', 'staff', 'adfasfasdfads', 3),
('staff', 'ram', 'k cha babu? k sodhichau?', 4),
('staff', 'ram', 'hello', 5),
('staff', 'ram', 'k xa', 6),
('ram', 'staff', 'hi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `prop_id` int(255) NOT NULL,
  `prop_name` varchar(255) NOT NULL,
  `prop_type` varchar(255) NOT NULL,
  `prop_StreetName` varchar(255) NOT NULL,
  `prop_suburb` varchar(255) NOT NULL,
  `prop_state` varchar(255) NOT NULL,
  `prop_postCode` int(4) NOT NULL,
  `prop_det` varchar(255) NOT NULL,
  `prop_occupancy` int(11) NOT NULL DEFAULT 1,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`prop_id`, `prop_name`, `prop_type`, `prop_StreetName`, `prop_suburb`, `prop_state`, `prop_postCode`, `prop_det`, `prop_occupancy`, `price`) VALUES
(1, 'Luxury 3 Bed FULL Ocean View Sky Suite Apartment!', 'Apartment', '1 street name', 'Westmead', 'NSW', 2145, '3 living , 1 cooking, 1 bathroom, Free Parking', 4, '550-50 = 500'),
(2, 'Arru-Bari Ghar', 'Hotel', 'Arru-bari', 'Blacktown', 'NSW', 2148, '4 floor but no room sorry', 2, '400');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `email`, `role`) VALUES
(1, 'ram', 'ram', 'ram', 'ram', 'ram@ram.com', 'user'),
(2, 'staff', 'staff', 'staff', 'staff', 'staff@staff.com', 'staff'),
(3, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`prop_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `prop_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
