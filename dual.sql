-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2020 at 05:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dual`
--

-- --------------------------------------------------------

--
-- Table structure for table `crypto`
--

CREATE TABLE `crypto` (
  `Student_Name` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `Examiner_1` int(100) NOT NULL,
  `Examiner_2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crypto`
--

INSERT INTO `crypto` (`Student_Name`, `Id`, `Examiner_1`, `Examiner_2`) VALUES
('Munim', '201116', 65, 87),
('Arfan', '201119', 86, 87);

-- --------------------------------------------------------

--
-- Table structure for table `spm`
--

CREATE TABLE `spm` (
  `Student_Name` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `Examiner_1` int(100) NOT NULL,
  `Examiner_2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spm`
--

INSERT INTO `spm` (`Student_Name`, `Id`, `Examiner_1`, `Examiner_2`) VALUES
('Fuad', '201118', 65, 80);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(255) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Teacher_Name` text NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Teacher_Name`, `Email`) VALUES
('ahmed', '66c7a506f43f6221871b0e3c06ac4d56f5b918745ba0a099cb49aa0ce526534fea9518305751d004c2aaa4c7ae1251a1844b1ddbbb4d20e0d5f55622137e745c', 'Ahmedul Kabir', 'a_kabir@gmail.com'),
('saeed', '99a0c02b28d4df6250f38facbf72319d6dba2cc54e04929a4438cebbc4fa2f6beb372a50d8383bb6b5c71234e2dd78047e72cd47f576575d161f06d6ce0980bc', 'Saeed Siddik', 'saeedsiddik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `webtech`
--

CREATE TABLE `webtech` (
  `Student_Name` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `Examiner_1` int(100) NOT NULL,
  `Examiner_2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `webtech`
--

INSERT INTO `webtech` (`Student_Name`, `Id`, `Examiner_1`, `Examiner_2`) VALUES
('Munim', '201116', 70, 70),
('Fuad', '201118', 75, 75),
('Arfan', '201119', 93, 98);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crypto`
--
ALTER TABLE `crypto`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `spm`
--
ALTER TABLE `spm`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`(2));

--
-- Indexes for table `webtech`
--
ALTER TABLE `webtech`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
