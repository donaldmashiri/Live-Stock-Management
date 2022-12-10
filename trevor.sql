-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 05:15 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trevor`
--

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `feed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nutrient` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `formula` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`feed_id`, `user_id`, `nutrient`, `quantity`, `formula`, `date`) VALUES
(1, 1, 'test', 2, 'tesf', '2022-11-20'),
(2, 2, 'bla blaz', 4, 'mix with wat wat', '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `livestocks`
--

CREATE TABLE `livestocks` (
  `livestock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `age` varchar(255) NOT NULL,
  `conditions` text NOT NULL,
  `date_added` date NOT NULL,
  `height` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in stock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livestocks`
--

INSERT INTO `livestocks` (`livestock_id`, `user_id`, `names`, `gender`, `type`, `description`, `age`, `conditions`, `date_added`, `height`, `color`, `status`) VALUES
(1, 1, 'omega', 'female', 'cows', 'brown', '5', 'good condition', '2022-11-20', 'less than 1 meter', 'brown', 'in stock'),
(2, 1, 'Dzina', 'male', 'pigs', 'none', '2', 'teeth', '2022-11-20', 'between 1 and 1.5 meters', 'green', 'in stock'),
(3, 2, 'Don', 'female', 'horses', 'white color at legs', '3', 'none', '2022-11-20', 'between 1 and 1.5 meters', 'brown', 'in stock');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_type`, `email`, `address`, `password`, `date_created`) VALUES
(1, 'DonaldTonderai', 'Mashiri', 'live stock manager', 'donaldtondemashiri@gmail.com', 'Mkoba18\r\n6692', 'donnie', '2022-11-20'),
(2, 'Michael ', 'Scofield', 'farmer', 'mike@gmail.com', 'Mkoba18\r\n6692', 'mike', '2022-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `vertinary`
--

CREATE TABLE `vertinary` (
  `vet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `livestock_id` int(11) NOT NULL,
  `disease` text NOT NULL,
  `solution` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vertinary`
--

INSERT INTO `vertinary` (`vet_id`, `user_id`, `livestock_id`, `disease`, `solution`, `date`) VALUES
(1, 1, 1, 'legs', 'injectio', '2022-11-20'),
(2, 1, 1, 'gumbo', 'hteffv', '2022-11-20'),
(3, 2, 3, 'ticks', 'pray mushonga wacho', '2022-11-20'),
(4, 2, 3, 'teeth pains', 'Injection rinonzi wat wat', '2022-11-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `livestocks`
--
ALTER TABLE `livestocks`
  ADD PRIMARY KEY (`livestock_id`),
  ADD UNIQUE KEY `livestock_id` (`livestock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vertinary`
--
ALTER TABLE `vertinary`
  ADD PRIMARY KEY (`vet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `livestocks`
--
ALTER TABLE `livestocks`
  MODIFY `livestock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vertinary`
--
ALTER TABLE `vertinary`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
