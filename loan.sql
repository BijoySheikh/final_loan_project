-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 08:09 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torun`
--

-- --------------------------------------------------------

--
-- Table structure for table `member_data`
--

CREATE TABLE `member_data` (
  `id` int(10) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `loan_date` varchar(20) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `refer_name` varchar(100) NOT NULL,
  `present_addr` varchar(200) NOT NULL,
  `permanent_addr` int(200) NOT NULL,
  `upload_img` longblob NOT NULL,
  `loan_sirial` int(20) NOT NULL,
  `loan_amount` varchar(20) NOT NULL,
  `profit_amount` int(20) NOT NULL,
  `total_amount` int(20) NOT NULL,
  `premier_amount` int(20) NOT NULL,
  `savings_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_data`
--

INSERT INTO `member_data` (`id`, `m_name`, `f_name`, `loan_date`, `phone_no`, `refer_name`, `present_addr`, `permanent_addr`, `upload_img`, `loan_sirial`, `loan_amount`, `profit_amount`, `total_amount`, `premier_amount`, `savings_amount`) VALUES
(15, 'dsfsdfdfsdf', 'fsdfdsfsdf', '03-09-2019', 'dfsdfsd', 'fsdfdsf', 'sdfdsf', 0, '', 521, '55', 5555, 5610, 55, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member_data`
--
ALTER TABLE `member_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member_data`
--
ALTER TABLE `member_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
