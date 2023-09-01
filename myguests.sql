-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 07:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `BirthDate` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MobileNum` varchar(10) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`FirstName`, `LastName`, `UserName`, `BirthDate`, `Email`, `MobileNum`, `Password`) VALUES
('amila', 'kasun', 'aa', '2023-08-04', 'atnmmadhuwantha@std.geo.sab.ac.lk', '0778855462', '$2y$10$KwPOj7LGM1auCrS1ly/fmulJbqTqZFbHqboL8dIZORd7qCqAk/Eey'),
('a', 'a', 'abb', '2023-08-09', 'a@gmail.com', '0770087896', '$2y$10$pE41T8.KyJ/ssNpM/sKFROvNVnPd1RNJ9cPj4GoDY17beym1JbNAe'),
('Amila', 'kasun', 'att12', '2023-08-03', 'amila@gmail.com', '0775566221', '$2y$10$wQrkoLkY3TQAx1eGwkgHyukg.C1JYqg/pWBQ2OfBBVb4VQi8Fvtpm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `MobileNum` (`MobileNum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
