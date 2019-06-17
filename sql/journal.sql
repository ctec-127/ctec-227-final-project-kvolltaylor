-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2019 at 08:57 PM
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
  `apyn` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entry_id`, `mood`, `text`, `date`, `user_id`, `apyn`) VALUES
(1, 89, 'you give love a bad name', '2019-06-14', 3, 'y'),
(2, 65, 'ioaej rpowea if[aaw[\r\n e[0', '2019-06-14', 3, 'y'),
(3, 9, 'this is some dummy test ', '2019-06-14', 3, 'y'),
(4, 71, 'i\'m a barbie girl in a barbie world', '2019-06-14', 3, 'y'),
(5, 63, 'where did you come from where did you go\r\nwhere did you come from cotton eye joe', '2019-06-14', 3, 'y'),
(6, 34, 'whenever we go out\r\nthe people always shout', '2019-06-14', 12, 'y'),
(7, 52, '', '2019-06-14', 12, 'n'),
(8, 47, '', '2019-06-14', 12, 'n'),
(9, 47, '', '2019-06-14', 12, 'n'),
(10, 63, 'Testing session variable storage for users', '2019-06-15', 1, 'n'),
(11, 63, 'Testing session variable storage for users', '2019-06-15', 1, 'n'),
(12, 0, 'blah', '2019-06-15', 3, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `entry_tag`
--

CREATE TABLE `entry_tag` (
  `id` int(11) NOT NULL,
  `entry_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry_tag`
--

INSERT INTO `entry_tag` (`id`, `entry_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 2, 4),
(5, 3, 5),
(6, 3, 6),
(7, 4, 7),
(8, 4, 8),
(9, 4, 9),
(10, 5, 10),
(11, 5, 11),
(12, 0, 0),
(13, 6, 13),
(14, 10, 14),
(15, 11, 14);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `anxiety_level` int(11) NOT NULL,
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `event_time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `anxiety_level`, `notes`, `date`, `event_time`, `user_id`) VALUES
(1, 0, 'this is a dummy note', '0000-00-00', '14:00:00', 3),
(2, 0, 'it\'s fantastic', '2019-06-14', '15:01:00', 3),
(3, 0, 'blah blah blah', '2019-06-14', '01:59:00', 3),
(4, 2, 'asdfghjkl', '2019-06-14', '00:00:00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `event_location_tag`
--

CREATE TABLE `event_location_tag` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_location_tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_location_tag`
--

INSERT INTO `event_location_tag` (`id`, `event_id`, `event_location_tag_id`) VALUES
(1, 3, 8),
(2, 3, 9),
(3, 4, 10);

-- --------------------------------------------------------

--
-- Table structure for table `location_tag`
--

CREATE TABLE `location_tag` (
  `location_tag_id` int(11) NOT NULL,
  `location_tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_tag`
--

INSERT INTO `location_tag` (`location_tag_id`, `location_tag`) VALUES
(1, 'stage'),
(2, 'these streets'),
(3, 'car'),
(4, 'dog park'),
(5, 'new zealand'),
(6, 'zanzibar'),
(7, 'dream house'),
(8, 'down south'),
(9, 'barn'),
(10, 'out');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`) VALUES
(1, 'wanted dead or alive'),
(2, 'steel horse'),
(3, 'dogs'),
(4, 'car ride'),
(5, 'kite flying'),
(6, 'bungee jumping'),
(7, 'dream car'),
(8, 'skipper'),
(9, 'ken'),
(10, 'test'),
(11, 'testing'),
(12, 'there goes john jacob jinglehe'),
(13, 'dadadadadada'),
(14, 'drove to gresham'),
(15, 'drove to gresham');

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
(11, 'Snow', 'White', 'applelover@dwarfs.com', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86'),
(10, 'Ray', 'Harryhausen', 'argonauts@stopmotion.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(7, 'Bob', 'Hughes', 'bob@belcher.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(5, 'Elaine', 'May', 'funnylady@comedy.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(9, 'Ava', 'Gabor', 'green@acres.com', '1384afde343e4e6ea38d3a3ebe77e1b52c6814e86ab3fd86875399b5fb4fc6fc2c2f6b7ce5b4100188a81d46f4ccd44198b8a96434deb72a3a9873c3e206502f'),
(2, 'Jane', 'Grey', 'headless@henryviii.com', '2bbe0c48b91a7d1b8a6753a8b9cbe1db16b84379f3f91fe115621284df7a48f1cd71e9beb90ea614c7bd924250aa9e446a866725e685a65df5d139a5cd180dc9'),
(12, 'John Jacob', 'Jingleheimer-Schmidt', 'hisname@mynametoo', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(3, 'Jon', 'Bon Jovi', 'jon@bonjovi.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(1, 'Katrina', 'Voll-Taylor', 'kvolltaylor@gmail.com', '2d7b83d970407115113765fe1fcb158f53d2c4e85e91d4bfea95c63c955dcf1488db7af0cc7ccc868123677aedb31829d965dda39652bcc1cf6a76699af094cc'),
(8, 'Ronnie James', 'Dio', 'ridethetiger@dio.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494'),
(6, 'Bob', 'Fosse', 'tap@tappitytap.com', 'db10018ec1399cc259fbe08d5b20cae3caecb8388da9f2ee05a77dc370e9cb3fbc7fbac5aa68bfa6c5acc5892055d5180956b52d9527af522bfa47c5c762a494');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `entry_tag`
--
ALTER TABLE `entry_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_location_tag`
--
ALTER TABLE `event_location_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_tag`
--
ALTER TABLE `location_tag`
  ADD PRIMARY KEY (`location_tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`) USING BTREE,
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `entry_tag`
--
ALTER TABLE `entry_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_location_tag`
--
ALTER TABLE `event_location_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location_tag`
--
ALTER TABLE `location_tag`
  MODIFY `location_tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
