-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 01:39 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abdo`
--

-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `logex`
--

CREATE TABLE `logex` (
  `id` int(10) NOT NULL,
  `username` varchar(35) NOT NULL,
  `passw` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `confirm_pasword` varchar(35) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logex`
--

INSERT INTO `logex` (`id`, `username`, `passw`, `email`, `confirm_pasword`, `Phone`) VALUES
(18, 'abdelati', 'abdelati', 'chraiha1abdelati@gmail.com', 'abdelati', '0655609287');

-- --------------------------------------------------------

--
-- Table structure for table `portefolio`
--

CREATE TABLE `portefolio` (
  `id` int(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `lienGithub` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portefolio`
--

INSERT INTO `portefolio` (`id`, `description`, `photo`, `lienGithub`) VALUES
(2, 'APP E-POCKETS (Click to Github)', 'Logo.png', 'https://github.com/1992abdo/E-POCKETS'),
(3, 'Web site (Click to Github)', 'sitweb-youcode.PNG', 'https://github.com/1992abdo/Website-Youcode'),
(4, 'Javascript (Click to Github)', 'passer-un-message.PNG', 'https://github.com/1992abdo/passer-un-messager-javascript'),
(5, 'HTML CSS (Click to Github)', 'screenshot.png', 'https://github.com/1992abdo/Page-with-CSS3-HTML5'),
(6, 'HTML CSS (Click to Github)', 'cv.PNG', 'https://github.com/1992abdo/CV-with-HTML-and-CSS'),
(7, 'Web site e-commerce (Click to Github)', 'e-comm.png', 'https://github.com/1992abdo/E-commerce-dashbord-add-delete-update');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecomm`
--
ALTER TABLE `ecomm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logex`
--
ALTER TABLE `logex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portefolio`
--
ALTER TABLE `portefolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecomm`
--
ALTER TABLE `ecomm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logex`
--
ALTER TABLE `logex`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portefolio`
--
ALTER TABLE `portefolio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
