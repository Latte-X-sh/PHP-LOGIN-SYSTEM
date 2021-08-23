-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 11:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Phone_number` int(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date-created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `First_name`, `Last_name`, `email`, `password`, `Gender`, `Country`, `City`, `Phone_number`, `date_of_birth`, `date-created`) VALUES
(1, 'Latte_X', 'Moses', 'Odalo', 'mosesodalokoyo@gmail.com\r\n', '123456789', 'Male', 'Kenya', 'Meru', 796919703, '1998-11-03', '2021-07-27 22:02:16'),
(2, 'test', '', '', 'mitchwangui@gmail.com', '123456', '', '', '', 0, '0000-00-00', '2021-07-27 22:48:51'),
(4, 'test', '', '', '', '', '', '', '', 0, '0000-00-00', '2021-07-28 00:15:58'),
(5, 'test', '', '', 'test@gmail.com', 'test1234', '', '', '', 0, '0000-00-00', '2021-07-28 00:53:14'),
(6, 'test', '', '', 'vickimani@gmail.com', '123456weka', '', '', '', 0, '0000-00-00', '2021-08-01 15:13:13'),
(9, 'test', '', '', 'jacksparrow@gmail.com', 'lolo1234', '', '', '', 0, '0000-00-00', '2021-08-01 16:15:12'),
(10, 'test', '', '', 'latteindigox@gmail.com', 'helloworld1234', '', '', '', 0, '0000-00-00', '2021-08-01 16:33:51'),
(11, 'test', '', '', 'stevenixwambuz@gmail.com', 'DJ43153101', '', '', '', 0, '0000-00-00', '2021-08-01 16:46:42'),
(14, 'test', '', '', 'justus@email.com', 'niko1234', '', '', '', 0, '0000-00-00', '2021-08-01 18:28:37'),
(17, 'test', '', '', 'munenekariuki3@icloud.com', 'demo', '', '', '', 0, '0000-00-00', '2021-08-01 19:37:48'),
(18, '', '', 'weka', 'testemail@gmail.com', '123456', '', '', '', 0, '0000-00-00', '2021-08-15 17:25:45'),
(19, 'Admin', '', '', 'admin@gmail.com', '123456789', '', '', '', 0, '0000-00-00', '2021-08-16 21:45:41'),
(20, '', 'sdds', '', 'latteindigox2021@gmail.com', '123456', '', '', '', 0, '0000-00-00', '2021-08-20 23:41:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
