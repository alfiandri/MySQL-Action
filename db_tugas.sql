-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2020 at 04:44 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `node_user`
--

CREATE TABLE `node_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `node_user`
--

INSERT INTO `node_user` (`id`, `name`, `salary`, `age`) VALUES
(1, 'ALFIANDRI PUTRA P.', 9000000, 22),
(2, 'Budi', 234567444, 20),
(3, 'Cinta', 3456, 32),
(5, 'Bejo', 345654, 33);

--
-- Triggers `node_user`
--
DELIMITER $$
CREATE TRIGGER `MysqlTrigger` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `alfi` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `fef4` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tes` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tesf` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_18` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_2` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_35` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_38` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_40` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_62` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_71` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `test_trigger_89` BEFORE UPDATE ON `node_user` FOR EACH ROW SET NEW.name=UPPER(NEW.name)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id` int(11) NOT NULL,
  `nama_sepeda` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id`, `nama_sepeda`, `jumlah`) VALUES
(1, 'Sepeda 1', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node_user`
--
ALTER TABLE `node_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `node_user`
--
ALTER TABLE `node_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
