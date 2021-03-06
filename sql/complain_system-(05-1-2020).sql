-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2020 at 01:47 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complain_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `c_enroll` varchar(20) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_message` varchar(255) NOT NULL,
  `c_file` varchar(255) NOT NULL,
  `c_date` datetime NOT NULL,
  PRIMARY KEY (`c_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`c_id`, `s_id`, `c_enroll`, `c_title`, `c_message`, `c_file`, `c_date`) VALUES
(1, 1, '2019095900012232', 'Result', 'when mca 2019-20 result hard copy will arrive??', '', '2020-09-21 00:00:00'),
(2, 2, '2019095900012231', 'Idcard forgoten', 'my identity card is forgeton what will id o??', '', '2020-09-21 00:00:00'),
(7, 14, '2019095900012232', 'hello', 'jhiii', '1.pdf', '2020-09-17 17:56:59'),
(60, 14, '222222', 'my bus pass is almos', '4t4t54t54t5yt', '', '2020-09-18 13:46:52'),
(74, 14, '2019095900012232', 'my bus pass is almos', 'dwvdvdb', 'AI Programming in Java.pdf', '2020-09-25 12:50:29'),
(75, 14, '2016095900000541', 'Mark-Sheet Correction', 'My father name is wrong on mark sheet please correct this name in mark sheet.', 'admin/uploads/1CS2010404_Advance Java Programming.pdf', '2020-10-05 19:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `n_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `file_destination` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `title`, `file_destination`, `file`, `date`) VALUES
(1, 'Notice Regarding fees', 'uploads/Sankalchand Patel University.pdf', 'Sankalchand Patel University.pdf', '2020-10-02'),
(3, 'Online Summer Exam 2020', 'uploads/02-Student_Guideline.pdf', '02-Student_Guideline.pdf', '2020-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

DROP TABLE IF EXISTS `response`;
CREATE TABLE IF NOT EXISTS `response` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `r_message` varchar(255) NOT NULL,
  `r_date` date NOT NULL,
  `r_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`r_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`r_id`, `c_id`, `r_message`, `r_date`, `r_file`) VALUES
(8, 1, 'Okay... Your Problem is solved', '2020-09-30', 'Class Diagram.jpeg'),
(9, 7, 'akdnaskndkas', '2020-09-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_fname` varchar(20) NOT NULL,
  `s_lname` varchar(20) NOT NULL,
  `s_bdate` date NOT NULL,
  `s_password` varchar(15) NOT NULL,
  `s_email` varchar(20) NOT NULL,
  `s_mobile` varchar(15) NOT NULL,
  `s_department` varchar(20) NOT NULL,
  `s_gender` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`),
  UNIQUE KEY `s_email` (`s_email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`s_id`, `s_fname`, `s_lname`, `s_bdate`, `s_password`, `s_email`, `s_mobile`, `s_department`, `s_gender`) VALUES
(1, 'nike', 'giri', '1998-02-20', '123', '123', '123', 'sem-5', 'male'),
(2, 'hardik', 'goswami', '0000-00-00', 'herry@1910', 'herry1910@gmail.com', '8238409858', 'sem-6', 'male'),
(10, 'Nikunjgiri', 'Goswami', '1998-02-20', 'Nik@2002', 'n9ikiswamy@gmail.com', '6353454046', 'MCA', 'female'),
(12, 'nikunj', 'patel', '2020-09-30', 'ull', 'nik.goswami2021998@g', '6353454046', 'MCA', 'female'),
(14, 'mahima', 'panchal', '1999-02-16', 'Mahi', 'mahima@gmail.com', '7383417452', 'MCA', 'female'),
(15, 'nikunj', 'goswami', '1998-02-20', 'Nik@2002', 'nikswamy@gmail.com', '6353454046', 'MCA', 'female'),
(16, 'yashkumar', 'Raval', '1990-02-23', 'Yash@2002', 'yash123@gmail.com', '9327742733', 'MCA', 'female'),
(17, 'HARDIK', 'GOSWAMI', '1995-10-19', 'Ashu$3010', 'hardikgiri29@gmail.c', '8320949548', 'BCA', 'female');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `signup` (`s_id`);

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `complain` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
