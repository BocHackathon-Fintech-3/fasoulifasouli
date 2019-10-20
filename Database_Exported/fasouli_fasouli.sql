-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 09:02 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasouli_fasouli`
--

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(300) COLLATE utf8_bin NOT NULL,
  `amount_asking` double NOT NULL,
  `amount_raised` double NOT NULL,
  `category` varchar(100) COLLATE utf8_bin NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`title`, `image`, `description`, `amount_asking`, `amount_raised`, `category`, `is_active`) VALUES
('Fund the new cancer research project of the University of Cyprus', 'cancer.png', 'o	The University of Cyprus needs your help to buy the necessary equipment for their new cancer research laboratories. ', 25000, 0, 'health', 0),
('Global Climate Change Initiative', 'climate.png', 'o	Climate change is now suddenly becoming a myth. Help us change that through our campaign.', 10000, 7950, 'environment', 1),
('Hospital Beds for Nicosia General Hospital', 'hospital.png', 'The ER section of the hospital is in serious need for new beds. The government won\'t cover the basic needs, so we are asking for your help ', 1000, 1000, 'health', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `environment` int(11) NOT NULL,
  `homeless` double NOT NULL,
  `health` double NOT NULL,
  `education` double NOT NULL,
  `disasters` double NOT NULL,
  `animals` double NOT NULL,
  `homeless_matched` double NOT NULL,
  `environment_matched` double NOT NULL,
  `education_matched` double NOT NULL,
  `animals_matched` double NOT NULL,
  `disasters_matched` double NOT NULL,
  `health_matched` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`name`, `environment`, `homeless`, `health`, `education`, `disasters`, `animals`, `homeless_matched`, `environment_matched`, `education_matched`, `animals_matched`, `disasters_matched`, `health_matched`) VALUES
('Amazon', 425000, 0, 142000, 234234, 128293, 50000, 0, 200000, 110000, 50000, 128000, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `code` int(11) NOT NULL,
  `cause_amount` float NOT NULL,
  `fasouli_amount` float NOT NULL,
  `environment` tinyint(1) NOT NULL,
  `education` tinyint(1) NOT NULL,
  `animals` tinyint(1) NOT NULL,
  `disasters` tinyint(1) NOT NULL,
  `health` tinyint(1) NOT NULL,
  `homeless` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `code`, `cause_amount`, `fasouli_amount`, `environment`, `education`, `animals`, `disasters`, `health`, `homeless`) VALUES
('Giorgos', 123456789, 1, 0.2, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_contributions`
--

CREATE TABLE `user_contributions` (
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `description` varchar(200) COLLATE utf8_bin NOT NULL,
  `image` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_contributions`
--

INSERT INTO `user_contributions` (`title`, `description`, `image`) VALUES
('Hospital Beds for Nicosia General Hospital', 'The ER section of the hospital is in serious need for new beds. The government won\'t cover the basic needs, so we are asking for your help', 'hospital.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user_contributions`
--
ALTER TABLE `user_contributions`
  ADD PRIMARY KEY (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
