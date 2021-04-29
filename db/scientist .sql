-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 07:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scientist`
--

-- --------------------------------------------------------

--
-- Table structure for table `researcharea`
--

CREATE TABLE `researcharea` (
  `researchName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcharea`
--

INSERT INTO `researcharea` (`researchName`) VALUES
('Agriculture'),
('Allopathy'),
('Ancient Tamil Science'),
('Anthropology'),
('Archeology of Tamilnadu'),
('Biology'),
('Chemistry'),
('Engineering and Technology'),
('Environmental Science'),
('Fisheries Science'),
('Home Science'),
('Indian Medical Science'),
('Mathematical Science'),
('Others'),
('Physics'),
('Veterinary Science');

-- --------------------------------------------------------

--
-- Table structure for table `scientist_information`
--

CREATE TABLE `scientist_information` (
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Age` int(11) NOT NULL,
  `Date_of_birth` varchar(255) NOT NULL,
  `Educational_qualification` varchar(500) CHARACTER SET utf8 NOT NULL,
  `Occupation` varchar(500) CHARACTER SET utf8 NOT NULL,
  `occ_description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `occ_ind` varchar(255) CHARACTER SET utf8 NOT NULL,
  `occ_soc` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Mobile_number` varchar(50) NOT NULL,
  `Phone_number` varchar(50) DEFAULT NULL,
  `Fax_number` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Work_option1` varchar(255) DEFAULT NULL,
  `Work_option2` varchar(50) DEFAULT NULL,
  `Work_option3` varchar(70) DEFAULT NULL,
  `Work_option4` varchar(50) DEFAULT NULL,
  `Contribution_area` varchar(100) NOT NULL,
  `other_contribution` varchar(255) DEFAULT NULL,
  `confirm` tinyint(1) NOT NULL DEFAULT 0,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `researcharea`
--
ALTER TABLE `researcharea`
  ADD PRIMARY KEY (`researchName`);

--
-- Indexes for table `scientist_information`
--
ALTER TABLE `scientist_information`
  ADD PRIMARY KEY (`Email`),
  ADD KEY `ReseachReferences` (`Contribution_area`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scientist_information`
--
ALTER TABLE `scientist_information`
  ADD CONSTRAINT `ReseachReferences` FOREIGN KEY (`Contribution_area`) REFERENCES `researcharea` (`researchName`);
COMMIT;
ALTER TABLE `scientist_information`
MODIFY COLUMN `Address` varchar(500) CHARACTER SET utf8 NOT NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
