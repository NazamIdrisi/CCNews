-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 08:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `znews`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(255) NOT NULL,
  `cat_title` blob NOT NULL,
  `img_box` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_title`, `img_box`) VALUES
(22, 0xe0a4b0e0a4bee0a4b7e0a58de0a49fe0a58de0a4b0e0a580e0a4af, 0x312e6a7067),
(23, 0xe0a4a6e0a581e0a4a8e0a4bfe0a4afe0a4be, 0x352e6a7067),
(24, 0xe0a4b0e0a4bee0a49ce0a58de0a4af, 0x372e6a7067),
(25, 0xe0a49fe0a587e0a49520e0a4a8e0a58de0a4afe0a582e0a49ce0a4bc, 0x342e6a7067),
(26, 0xe0a485e0a4aee0a587e0a4b0e0a4bfe0a495e0a4be, 0x332e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address`) VALUES
(1, '8840459002', 'a@gmail.com', 'lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `post_id` int(255) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `title_box` varchar(255) NOT NULL,
  `msg_box` varchar(255) NOT NULL,
  `tag_box` varchar(255) NOT NULL,
  `img_box` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`post_id`, `cat_title`, `title_box`, `msg_box`, `tag_box`, `img_box`, `date`, `time`) VALUES
(14, 'à¤°à¤¾à¤·à¥à¤Ÿà¥à¤°à¥€à¤¯', 'aabadba', '<p>skfnafkanfb</p>\r\n<p>assfknadb</p>', 'afbaa', '1.jpg', '2018-06-02 11:42:43', '11:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `title_box` varchar(255) NOT NULL,
  `msg_box` varchar(255) NOT NULL,
  `cat_box` varchar(255) NOT NULL,
  `tag_box` varchar(255) NOT NULL,
  `img_box` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `cat_id`, `title_box`, `msg_box`, `cat_box`, `tag_box`, `img_box`, `date`, `time`) VALUES
(15, 0, 'politcs', 'dsgfhnsf', '', 'p', '1.jpg', '2018-05-27 12:07:37', '12:07:37'),
(16, 0, 'red', 'dddd', '', 'r', '2.jpg', '2018-05-27 12:08:05', '12:08:05'),
(17, 0, 'entrtmntafdlb', 'dabkandba', '', 'E', '3.jpg', '2018-05-27 12:09:22', '12:09:22'),
(18, 0, 'cricket', 'ccccccccccccccccccccccccccccccccccccccccccccc', '', 'cricket', '4.jpg', '2018-05-27 12:11:06', '12:11:06'),
(19, 0, 'videos', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', '7', 'videos', '3.jpg', '2018-05-27 12:12:52', '12:12:52'),
(20, 0, 'auto and mobiles', 'dowkjjbksdn sdkffbadkb dkfbnad', '5', 'auto mobiles', '4.jpg', '2018-05-27 21:45:52', '21:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `name`, `email`) VALUES
(1, 'asif', 'a@gmail.com'),
(2, 'asif', 'a@gmail.com'),
(3, 'asif', 'a@gmail.com'),
(4, 'asif', 'idrisinazam@gmail.com'),
(5, 'asif', 'a@gmail.com'),
(6, 'asif', 'a@gmail.com'),
(7, 'check', 'footer@gmail.com'),
(8, 'againcheck', 'footer@gmail.com'),
(9, 'second check ', 'footer@gmail.com'),
(10, 'second check ', 'footer@gmail.com'),
(11, 'second check ', 'footer@gmail.com'),
(12, 'second check ', 'footer@gmail.com'),
(13, 'second check ', 'footer@gmail.com'),
(14, 'second check ', 'footer@gmail.com'),
(15, 'second check ', 'footer@gmail.com'),
(16, 'second check ', 'footer@gmail.com'),
(17, 'second check ', 'footer@gmail.com'),
(18, 'second check ', 'footer@gmail.com'),
(19, 'second check ', 'footer@gmail.com'),
(20, 'second check ', 'footer@gmail.com'),
(21, 'second check ', 'footer@gmail.com'),
(22, 'second check ', 'footer@gmail.com'),
(23, 'second check ', 'footer@gmail.com'),
(24, 'second check ', 'footer@gmail.com'),
(25, 'details ', 'd@gmail.com'),
(26, 'details ', 'd@gmail.com'),
(27, 'details ', 'd@gmail.com'),
(28, 'details ', 'd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `post_id` int(255) NOT NULL,
  `cat_title` blob NOT NULL,
  `title_box` blob NOT NULL,
  `msg_box` blob NOT NULL,
  `tag_box` blob NOT NULL,
  `img_box` blob NOT NULL,
  `date` blob NOT NULL,
  `time` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`post_id`, `cat_title`, `title_box`, `msg_box`, `tag_box`, `img_box`, `date`, `time`) VALUES
(1, 0x677265656e, 0x636865636b207469707320746f64617920, 0x3c703e6161646a626e61206b61646e616a62616e20646e62626e20646e666b616c6e206b61646e6b6c61206b616e666120616b76616e20616b666e20616b626e6420616b646e61666b206b6e6461616b3c2f703e, 0x7469707320, 0x332e6a7067, 0x323031382d30362d30322030393a32383a3138, 0x30393a32383a3138),
(2, 0x506f6c6974696373, 0x7365636f6e642074697073, 0x666169626a61662061646b62616b64662061646b666e612061646b666e, 0x6b626a736a6164626b61646e, 0x6261726269652d62616c6c6572696e612d7072696e636573732d7468656d652d62697274686461792d63616b65732d63757063616b65732d6d756d6261692d31372e6a7067, 0x323031382d30362d30322030393a35393a3538, 0x30393a35393a3538);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `post_id` int(255) NOT NULL,
  `cat_title` blob NOT NULL,
  `title_box` blob NOT NULL,
  `msg_box` blob NOT NULL,
  `tag_box` blob NOT NULL,
  `video_box` blob NOT NULL,
  `date` blob NOT NULL,
  `time` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tips`
--
ALTER TABLE `tips`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
