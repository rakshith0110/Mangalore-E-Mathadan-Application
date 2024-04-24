-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 11:05 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evoting`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`CCC
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`aid` int(11) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `time_stamp`) VALUES
(1, 'admin', '_admin', '2015-05-04 14:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (

  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `voted_for` varchar(32) ,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

--
-- Dumping data for table `tbl_users`
--

-- Inserting values into tbl_users with default passwords
INSERT INTO `tbl_users` (`full_name`, `email`, `voter_id`, `voted_for`, `password`) VALUES
('Abhishek Kumar Ravi', 'don.coolbuddy.xxx@gmail.com', 546754, 'BJP', 'password1'),
('Chadan', 'chabdan@gmail.com', 65786, 'BJP', 'password2'),
('Aman', 'aman@live.in', 896740, 'BJP', 'password3'),
('Vicky', 'lastworker@gmail.com', 45432, 'BJP', 'password4'),
('Abhishek Singh', 'abhi6751@gmail.com', 87430, 'BJP', 'password5'),
('Avneet', 'avneet@gmail.com', 74629, 'INC', 'password6'),
('Santanu', 'santa@gmail.com', 89378, 'TMC', 'password7'),
('Arvind Kejriwal', 'arvind@gmail.com', 94940, 'AAP', 'password8'),
('Manish Sisodia', 'manish@live.in', 6483, 'AAP', 'password9'),
('Rahul Raju', 'rahulraj@hmail.com', 9749403, 'INC', 'password10'),
('Subham Kumar', 'subham@gmail.com', 95678, 'AAP', 'password11'),
('Chadan', 'chabdan@gmail.com', 5, 'BJP', 'password12'),
('Abhishek Singh', 'abhi6751@gmail.com', 12345, 'TMC', 'password13'),
('Abhishek Kumar', 'ak@gmail.com', 1234, 'TMC', 'password14');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_users`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
