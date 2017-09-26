-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 12:32 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_radio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilige` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ID`, `username`, `password`, `privilige`) VALUES
(1, 'admin', 'admin3c99997fbb9bc3eb28d9669260f285f6admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `album_name`
--

CREATE TABLE `album_name` (
  `ID` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `discription` varchar(256) NOT NULL,
  `album_id` varchar(50) NOT NULL,
  `album_cover` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `artist_details`
--

CREATE TABLE `artist_details` (
  `ID` int(11) NOT NULL,
  `artist_name` varchar(50) NOT NULL,
  `artist_id` varchar(40) NOT NULL,
  `artist_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(10) NOT NULL,
  `tran_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `conditins` varchar(20) NOT NULL,
  `val_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `card_type` varchar(20) CHARACTER SET latin1 NOT NULL,
  `store_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `card_no` varchar(20) CHARACTER SET latin1 NOT NULL,
  `bank_tran_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `status` varchar(50) NOT NULL,
  `tran_date` date NOT NULL,
  `currency` varchar(10) CHARACTER SET latin1 NOT NULL,
  `card_issuer` varchar(10) CHARACTER SET latin1 NOT NULL,
  `card_brand` varchar(10) CHARACTER SET latin1 NOT NULL,
  `card_issuer_country` varchar(10) CHARACTER SET latin1 NOT NULL,
  `card_issuer_country_code` varchar(10) CHARACTER SET latin1 NOT NULL,
  `store_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `verify_sign` varchar(20) CHARACTER SET latin1 NOT NULL,
  `verify_key` varchar(20) CHARACTER SET latin1 NOT NULL,
  `currency_type` varchar(20) CHARACTER SET latin1 NOT NULL,
  `curreny_amount` varchar(20) CHARACTER SET latin1 NOT NULL,
  `currency_rate` varchar(20) CHARACTER SET latin1 NOT NULL,
  `base_fair` varchar(20) CHARACTER SET latin1 NOT NULL,
  `risk_level` varchar(20) CHARACTER SET latin1 NOT NULL,
  `risk_title` varchar(20) CHARACTER SET latin1 NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `login_msc`
--

CREATE TABLE `login_msc` (
  `ID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` int(50) NOT NULL,
  `privilige` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_rj`
--

CREATE TABLE `login_rj` (
  `ID` int(11) NOT NULL,
  `rj_username` varchar(50) NOT NULL,
  `rj_password` varchar(50) NOT NULL,
  `privilige` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `song_tbl`
--

CREATE TABLE `song_tbl` (
  `ID` int(11) NOT NULL,
  `song_id` varchar(50) NOT NULL,
  `song_name` varchar(50) NOT NULL,
  `publish_year` varchar(5) NOT NULL,
  `album_id` varchar(40) NOT NULL,
  `genare_song` varchar(50) NOT NULL,
  `artist_id` varchar(50) NOT NULL,
  `url_to_main` varchar(50) NOT NULL,
  `demo_url` varchar(50) NOT NULL,
  `price` varchar(6) NOT NULL,
  `availability` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `email`) VALUES
(1, 'abc', 'a8c6cc0f8dec9e890da4fcc92962c4', 'admin@admin.com'),
(2, 'a', 'ae265277528ad23cca17d9986a9748', ''),
(3, 'a', '33c6a571588de37cd62e09df489d2d', ''),
(4, 'a', '0cc175b9c0f1b6a831c399e2697726', ''),
(5, 'a', 'a', ''),
(6, '', '4', ''),
(7, 'd', '', ''),
(8, 'abc', '123', 'safsa@afas.coasf');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_songdetails`
-- (See below for the actual view)
--
CREATE TABLE `v_songdetails` (
`ID` int(11)
,`song_id` varchar(50)
,`song_name` varchar(50)
,`publish_year` varchar(5)
,`album_id` varchar(40)
,`genare_song` varchar(50)
,`artist_id` varchar(50)
,`url_to_main` varchar(50)
,`demo_url` varchar(50)
,`price` varchar(6)
,`availability` int(11)
,`comment` varchar(100)
,`artist_name` varchar(50)
,`artist_image` varchar(150)
,`album_name` varchar(100)
,`album_cover` varchar(150)
,`discription` varchar(256)
);

-- --------------------------------------------------------

--
-- Structure for view `v_songdetails`
--
DROP TABLE IF EXISTS `v_songdetails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_songdetails`  AS  select `song_tbl`.`ID` AS `ID`,`song_tbl`.`song_id` AS `song_id`,`song_tbl`.`song_name` AS `song_name`,`song_tbl`.`publish_year` AS `publish_year`,`song_tbl`.`album_id` AS `album_id`,`song_tbl`.`genare_song` AS `genare_song`,`song_tbl`.`artist_id` AS `artist_id`,`song_tbl`.`url_to_main` AS `url_to_main`,`song_tbl`.`demo_url` AS `demo_url`,`song_tbl`.`price` AS `price`,`song_tbl`.`availability` AS `availability`,`song_tbl`.`comment` AS `comment`,`artist_details`.`artist_name` AS `artist_name`,`artist_details`.`artist_image` AS `artist_image`,`album_name`.`album_name` AS `album_name`,`album_name`.`album_cover` AS `album_cover`,`album_name`.`discription` AS `discription` from ((`song_tbl` left join `artist_details` on((`artist_details`.`artist_id` = `song_tbl`.`artist_id`))) left join `album_name` on((`album_name`.`album_id` = `song_tbl`.`album_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `album_name`
--
ALTER TABLE `album_name`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `album_name` (`album_name`);

--
-- Indexes for table `artist_details`
--
ALTER TABLE `artist_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `artist_name` (`artist_name`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tran_id` (`tran_id`);

--
-- Indexes for table `login_rj`
--
ALTER TABLE `login_rj`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `song_tbl`
--
ALTER TABLE `song_tbl`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `song_id` (`song_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album_name`
--
ALTER TABLE `album_name`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artist_details`
--
ALTER TABLE `artist_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_rj`
--
ALTER TABLE `login_rj`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `song_tbl`
--
ALTER TABLE `song_tbl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
