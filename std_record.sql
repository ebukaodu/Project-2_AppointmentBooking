-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 08:13 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appoint_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_record`
--

CREATE TABLE `std_record` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `datetime` datetime NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_record`
--

INSERT INTO `std_record` (`id`, `firstname`, `lastname`, `collegename`, `email`, `phone`, `datetime`, `comments`) VALUES
(1, 'chukwuebuka', 'odu', 'weber state university', 'ebukaodu@yahoo.com', 2147483647, '2018-10-07 05:01:00', ' Special notes, concerns, or requirements '),
(2, 'Chuck', 'chikere', 'weber state university', 'johnobi1994@yahoo.com', 2147483647, '2018-10-16 17:04:00', ' Special notes, concerns, or requirements '),
(3, 'youare', 'okayhere', 'idaho university', 'johnobi@yahoo.com', 2147483647, '2018-10-07 06:04:00', 'Hello there'),
(4, 'Maribel', 'Frank', 'futo', 'chikamaxwell@yahoo.com', 2147483647, '2018-10-31 18:05:00', 'What can I do for you?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_record`
--
ALTER TABLE `std_record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_record`
--
ALTER TABLE `std_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
