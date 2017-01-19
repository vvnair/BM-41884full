-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2017 at 10:27 AM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `signup`(IN `fname` VARCHAR(10), IN `lname` VARCHAR(10), IN `pic` VARCHAR(180), IN `dobyear` DATE, IN `email` VARCHAR(150), IN `password` VARCHAR(25))
begin

declare hash varchar(200);
declare fk_lid int;
set hash=concat(rand()*100000,fname);
insert into tbl_login_details(vchr_username,vchr_password,vchr_hash)values(email,password,hash);
set fk_lid=LAST_INSERT_ID();
insert into tbl_user_details(vchr_fname, vchr_lname,vchr_image,fk_int_lid,date_year)values(fname,lname,pic,fk_lid,dobyear);

end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_details`
--

CREATE TABLE IF NOT EXISTS `tbl_login_details` (
  `pk_int_lid` int(11) NOT NULL AUTO_INCREMENT,
  `vchr_username` varchar(30) NOT NULL,
  `vchr_password` varchar(30) NOT NULL,
  `vchr_hash` varchar(200) NOT NULL,
  `int_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_int_lid`),
  UNIQUE KEY `vchr_username` (`vchr_username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_login_details`
--

INSERT INTO `tbl_login_details` (`pk_int_lid`, `vchr_username`, `vchr_password`, `vchr_hash`, `int_status`) VALUES
(1, 'user@gmail.com', 'Password@123', '95209.87532586779vivek', 0),
(2, 'sub@gmail.com', 'Subash@123', '32996.83884996626subash', 0),
(15, 'vivekvijaynair@yahoo.co.in', 'Password@123', '14491.785703684935Vijay', 1),
(10, 'appusvivek2@gmail.com', 'Password@123', '90291.58446033632Mohanlal', 1),
(14, 'appusvivek1@gmail.com', 'Paassword@123', '53050.43072723824will', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE IF NOT EXISTS `tbl_user_details` (
  `pk_int_id` int(11) NOT NULL AUTO_INCREMENT,
  `vchr_image` varchar(100) DEFAULT NULL,
  `vchr_fname` varchar(30) DEFAULT NULL,
  `vchr_lname` varchar(30) DEFAULT NULL,
  `fk_int_lid` int(11) DEFAULT NULL,
  `date_year` date NOT NULL,
  PRIMARY KEY (`pk_int_id`),
  KEY `fk_int_lid` (`fk_int_lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`pk_int_id`, `vchr_image`, `vchr_fname`, `vchr_lname`, `fk_int_lid`, `date_year`) VALUES
(1, 'images.jpg', 'vivek', 'nair', 1, '2002-05-29'),
(2, '7234372316c248f57cbfaf29b477497a.jpg', 'subash', 's', 2, '2002-06-16'),
(14, 'will.jpg', 'will', 'smith', 14, '2002-10-09'),
(10, 'Mohanlal-Cooling-Glass-Spadikam-Style-Mass.jpg', 'Mohanlal', 'R', 10, '2002-07-24'),
(15, 'IMG2.jpg', 'Vijay', 'Kumar', 15, '2002-08-09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
