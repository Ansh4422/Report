-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220501.46b7525c53
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 12:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `FatherName` text NOT NULL,
  `Gender` enum('Male','Female','Transgender') NOT NULL,
  `Age` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Disease` text NOT NULL,
  `Description` text NOT NULL,
  `Doctor` text NOT NULL,
  `Time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `Name`, `FatherName`, `Gender`, `Age`, `Address`, `Disease`, `Description`, `Doctor`, `Time`) VALUES
(1, 'Ansh Mourya', 'Mr. Anjum Singh', 'Male', 21, 'Nawada Shekhan Old City Bareilly', 'Typhoid', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo excepturi voluptas, hic, blanditiis quos minus nobis similique accusantium est, odit fugit. Laborum officiis deleniti modi atque accusantium aliquam maiores.', '', '2023-05-29'),
(2, 'Harsh Babu Singh', 'Mr. Sanjeev Singh', 'Female', 21, 'Wazirgnaj Budaun', 'Unknown', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis nemo excepturi voluptas, hic, blanditiis quos minus nobis similique accusantium est, odit fugit. Laborum officiis deleniti modi atque accusantium aliquam maiores.', '', '2023-05-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



