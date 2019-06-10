-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 04:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entry_id` int(10) NOT NULL,
  `mood` int(3) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `anxiety_level` int(11) NOT NULL,
  `text` text NOT NULL,
  `location_tag` varchar(50) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location_tag`
--

CREATE TABLE `location_tag` (
  `location_tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pw` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `pw`) VALUES
(1, 'Katrina', 'Voll-Taylor', 'kvolltaylor@gmail.com', '2d7b83d970407115113765fe1fcb158f53d2c4e85e91d4bfea95c63c955dcf1488db7af0cc7ccc868123677aedb31829d965dda39652bcc1cf6a76699af094cc'),
(2, 'Jane', 'Grey', 'headless@henryviii.com', '2bbe0c48b91a7d1b8a6753a8b9cbe1db16b84379f3f91fe115621284df7a48f1cd71e9beb90ea614c7bd924250aa9e446a866725e685a65df5d139a5cd180dc9'),
(3, 'Jon', 'Bon Jovi', 'jon@bonjovi.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(5, 'Elaine', 'May', 'funnylady@comedy.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(6, 'Bob', 'Fosse', 'tap@tappitytap.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(7, 'Bob', 'Hughes', 'bob@belcher.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(8, 'Ronnie James', 'Dio', 'ridethetiger@dio.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(9, 'Ava', 'Gabor', 'green@acres.com', '1384afde343e4e6ea38d3a3ebe77e1b52c6814e86ab3fd86875399b5fb4fc6fc2c2f6b7ce5b4100188a81d46f4ccd44198b8a96434deb72a3a9873c3e206502f'),
(10, 'Ray', 'Harryhausen', 'argonauts@stopmotion.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(11, 'Snow', 'White', 'applelover@dwarfs.com', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
