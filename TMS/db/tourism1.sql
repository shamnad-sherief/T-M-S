-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 06:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accoma`
--

CREATE TABLE `tbl_accoma` (
  `acco_id` varchar(50) NOT NULL,
  `acco_typ` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `palce` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compli`
--

CREATE TABLE `tbl_compli` (
  `mail` varchar(100) NOT NULL,
  `comp` varchar(500) NOT NULL,
  `sug` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `dis_id` varchar(50) NOT NULL,
  `dis_name` varchar(100) NOT NULL,
  `dis_descri` varchar(1000) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `mail` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `u_id` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `u_type_id` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`u_id`, `uname`, `pass`, `u_type_id`, `status`) VALUES
('A1', 'YWRtaW4=', 'YWRtaW4=', 'A1', 'unfreeze');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offers`
--

CREATE TABLE `tbl_offers` (
  `offer_id` varchar(50) NOT NULL,
  `offer_nam` varchar(100) NOT NULL,
  `offer_dis` varchar(1000) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `pac_id` varchar(50) NOT NULL,
  `pac_nam` varchar(100) NOT NULL,
  `places` varchar(150) NOT NULL,
  `no_days` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `status` varchar(250) NOT NULL,
  `path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pack_book`
--

CREATE TABLE `tbl_pack_book` (
  `pack_id` varchar(50) NOT NULL,
  `usr_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `no_pass` varchar(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `u_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffid`
--

CREATE TABLE `tbl_staffid` (
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userid_genl`
--

CREATE TABLE `tbl_userid_genl` (
  `u_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `utype_id` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE `tbl_vehicle` (
  `veh_id` varchar(50) NOT NULL,
  `veh_ty` varchar(50) NOT NULL,
  `veh_no` varchar(100) NOT NULL,
  `veh_name` varchar(150) NOT NULL,
  `se_cap` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `addi_rate` varchar(150) NOT NULL,
  `status` varchar(500) NOT NULL,
  `path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_veh_book`
--

CREATE TABLE `tbl_veh_book` (
  `veh_book_id` varchar(50) NOT NULL,
  `veh_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `pickpoint` varchar(100) NOT NULL,
  `no_pass` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
