-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 09:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
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

--
-- Dumping data for table `tbl_compli`
--

INSERT INTO `tbl_compli` (`mail`, `comp`, `sug`, `date`, `time`) VALUES
('sasi@gmail.com', 'very bad', 'need much more improvement', '18/6/2020', '21:9:47');

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

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`dis_id`, `dis_name`, `dis_descri`, `pic`, `status`) VALUES
('DIS1', 'Munnar', 'Top Station is tourist destination in the Kannan Devan hills of Munnar. It is a part between the border of Idukki-Theni Districts in the state of Kerala and Tamil Nadu .Top Station is notable as the historic transshippment location for Kannan Devan tea delivered up here from Munnar and Madupatty by railway and then down by ropeway to Kottagudi. This area is popular for the rare Neelakurinji flowers. The Kurinjimala Sanctuary is nearby. Top Station is the western entrance to the planned Palani Hills National Park.', '58877-munnar-women-plucking-tea-leaves.jpg', 'nostatus'),
('DIS2', 'Thekkady', 'Thekkady is a pleasant heaven on earth for those who love nature in its wild manifestations. Thekkady is placed at an altitude of 700m above the sea level. Located in the Idukki district of Kerala, Thekkady is a perfect retreat for anyone who loves adventure, fun, wildlife and nature.', '56224-4233465548.jpg', 'nostatus'),
('DIS3', 'Silent Valley', 'Silent Valley National Park, is a national park in Kerala, India. It is located in the Nilgiri hills, has a core area of 89.52 kmÂ², which is surrounded by a buffer zone of 148 kmÂ². This national park has some rare species of flora and fauna. This area was explored in 1847 by the botanist Robert Wight', '61940-silent_valley_national_park_palakkad20131031115538_157_1.jpg', 'nostatus');

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

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`mail`, `feedback`, `date`, `time`) VALUES
('sasi@gmail.com', 'not bad', '18/6/2020', '21:9:2');

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
('A1', 'YWRtaW4=', 'YWRtaW4=', 'A1', 'unfreeze'),
('U1', 'aml0bw==', 'MQ==', 'A2', 'unfreeze'),
('ST1', 'QXJ1bg==', 'QXJ1bg==', 'A3', 'unfreeze'),
('U2', 'UmVqaXRo', 'UmVqaXRo', 'A2', 'unfreeze'),
('ST2', 'dGVzdDE=', 'dGVzdDE=', 'A3', 'unfreeze'),
('U3', 'dXNlcjE=', 'dXNlcjE=', 'A2', 'unfreeze'),
('ST3', 'c2FsaW5p', 'c2FsaW5p', 'A3', 'unfreeze'),
('U4', 'c3VyZWtoYQ==', 'c3VyZWtoYQ==', 'A2', 'unfreeze'),
('U5', 'c2Fz', 'MTIzNDU=', 'A2', 'unfreeze'),
('ST4', 'c3M=', 'YXM=', 'A3', 'unfreeze'),
('U6', 'c2hhbW5hZA==', 'MQ==', 'A2', 'unfreeze');

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

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`pac_id`, `pac_nam`, `places`, `no_days`, `person`, `status`, `path`) VALUES
('PA1', 'Munnar', 'Tea Factory,Treking,Top Stations', '2', '1400', 'deleted', '58071-munnar.jpeg'),
('PA2', 'Munnar', 'Munnar', '4', '2500', 'deleted', '16176-munnar.jpeg'),
('PA3', 'Package1', 'Munnar', '4', '1500', 'nostatus', '70691-munnar-women-plucking-tea-leaves.jpg');

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

--
-- Dumping data for table `tbl_pack_book`
--

INSERT INTO `tbl_pack_book` (`pack_id`, `usr_id`, `date`, `no_pass`, `book_id`, `status`) VALUES
('PA1', 'U2', '11/3/2020', '4', 'BOOKED1', 'nostatus'),
('PA1', 'U3', '10/3/2020', '4', 'BOOKED2', 'nostatus'),
('PA3', 'U6', '2020-06-10', '5', 'BOOKED3', 'nostatus'),
('PA3', 'U6', '2020-06-30', '2', 'BOOKED4', 'nostatus');

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

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`u_id`, `name`, `address`, `gender`, `dob`, `mail`, `ph`) VALUES
('U1', 'Jito J Thomas Vaidyan', 'Elanjickal\r\nNagiyarkulangara', 'male', '27/4/1995', 'jitovaidyan1995@gmail.com', '09544571966'),
('U2', 'Rejith', 'Ravi Nivas', 'male', '02/1/1997', 'rejith@gmail.com', '9876445566'),
('U3', 'user1', 'user1', 'male', '25/12/1997', 'user1@gmail.com', '887766687'),
('U4', 'surekha', 'rdgfdghdr', 'female', '04/1/2006', 'surekha@gmail.com', '9875432341'),
('U5', 'sasi', 'sasi laym', 'male', '02/6/2020', 'sasi@gmail.com', '987848669'),
('U6', 'Shamnad', 'sjkshhgyug', 'male', '1999-10-04', 'sshamnad03@gmail.com', '9567932761');

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

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `name`, `address`, `gender`, `mail`, `dob`, `phone`, `status`) VALUES
('ST1', 'gkugkgk', 'Nilayam1', 'male', 'arun@gmail.com', '18/06/2020', '9876578935', 'nostatus'),
('ST2', 'Test1', 'test1address', 'male', 'test1@gmail.com', '08/3/1999', '9876545678', 'nostatus'),
('ST3', 'salini', 'ytftr', 'female', 'salini@gmail.com', '03/3/2020', '9867452311', 'nostatus'),
('ST4', 'Ashok', 'Patiala House\r\nPunjab', 'male', 'ashokmityra@gmail.com', '2020-06-05', '9567932755', 'nostatus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffid`
--

CREATE TABLE `tbl_staffid` (
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staffid`
--

INSERT INTO `tbl_staffid` (`staff_id`) VALUES
('ST1'),
('ST2'),
('ST3'),
('ST4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userid_genl`
--

CREATE TABLE `tbl_userid_genl` (
  `u_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userid_genl`
--

INSERT INTO `tbl_userid_genl` (`u_id`) VALUES
('U1'),
('U2'),
('U3'),
('U4'),
('U5'),
('U6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `utype_id` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`utype_id`, `utype`) VALUES
('A1', 'Admin'),
('A2', 'Customer'),
('A3', 'Staff');

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
