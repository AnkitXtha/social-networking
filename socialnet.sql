-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 04:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` bigint(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `follows` text NOT NULL,
  `following` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `type`, `contentid`, `follows`, `following`) VALUES
(1, 'user', 45398300, '', '[{\"userid\":\"769478630343238\",\"date\":\"2022-03-01 10:42:37\"}]'),
(2, 'user', 769478630343238, '[{\"userid\":\"45398300\",\"date\":\"2022-03-01 10:42:36\"}]', '[{\"userid\":\"45398300\",\"date\":\"2022-02-27 14:25:04\"}]'),
(3, 'user', 2697026671743459370, '', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `contentid` bigint(20) NOT NULL,
  `likes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `type`, `contentid`, `likes`) VALUES
(5, 'post', 45, '[{\"userid\":\"2697026671743459370\",\"date\":\"2022-03-01 08:11:42\"},{\"userid\":\"45398300\",\"date\":\"2022-03-01 09:08:35\"}]'),
(6, 'post', 308060, '[{\"userid\":\"2697026671743459370\",\"date\":\"2022-03-01 08:02:31\"}]'),
(7, 'post', 29842422, '[{\"userid\":\"45398300\",\"date\":\"2022-03-01 09:08:41\"}]'),
(8, 'post', 47864845631319687, '[]');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(10) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `notify` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `sender`, `receiver`, `message`, `date`, `status`, `notify`) VALUES
(1, '769478630343238', '45398300', 'hello', '2022-02-27 07:36:19', 0, 0),
(2, '45398300', '769478630343238', 'hi', '2022-02-27 08:38:32', 0, 0),
(3, '45398300', '769478630343238', 'hi', '2022-02-27 08:41:11', 0, 0),
(4, '45398300', '769478630343238', 'kxa', '2022-02-27 08:41:11', 0, 0),
(5, '769478630343238', '45398300', 'thikxa yaar', '2022-02-27 08:38:58', 0, 1),
(6, '45398300', '769478630343238', 'hi', '2022-02-27 08:46:11', 0, 0),
(7, '45398300', '769478630343238', 'hello', '2022-02-27 08:46:11', 0, 0),
(8, '45398300', '769478630343238', 'k', '2022-02-27 08:46:11', 0, 0),
(9, '45398300', '769478630343238', 'im ankit', '2022-02-27 08:46:11', 0, 0),
(10, '45398300', '769478630343238', 'oe', '2022-02-27 10:30:21', 0, 0),
(11, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(12, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(13, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(14, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(15, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(16, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(17, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(18, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(19, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(20, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(21, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(22, '45398300', '769478630343238', 'o', '2022-02-27 10:30:21', 0, 0),
(23, '45398300', '769478630343238', 'hi', '2022-02-27 10:30:21', 0, 0),
(24, '45398300', '769478630343238', 'hi', '2022-02-27 10:30:21', 0, 0),
(25, '45398300', '769478630343238', 'oi', '2022-02-27 10:30:21', 0, 0),
(26, '45398300', '769478630343238', 'hi', '2022-02-27 10:30:21', 0, 0),
(27, '45398300', '769478630343238', 'oi', '2022-02-27 10:30:21', 0, 0),
(28, '769478630343238', '45398300', 'k', '2022-02-27 10:30:25', 0, 1),
(29, '769478630343238', '45398300', 'k', '2022-02-27 10:30:32', 0, 1),
(30, '769478630343238', '45398300', 'i', '2022-02-27 10:30:39', 0, 1),
(31, '45398300', '769478630343238', 'oo', '2022-02-27 10:30:50', 0, 1),
(32, '45398300', '769478630343238', 'askdahskdjhakjdhaskdjhaskjdhasdkjahdkjahdkjashdaksjhdaksjdhaskjdhaskjdhaskjdhaskjdhaskhdaskjdhaksjdhas', '2022-02-27 10:31:03', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(19) NOT NULL,
  `postid` bigint(19) NOT NULL,
  `userid` bigint(19) NOT NULL,
  `post` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `comments` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_image` tinyint(1) NOT NULL,
  `is_profile_image` tinyint(1) NOT NULL,
  `is_cover_image` tinyint(1) NOT NULL,
  `parent` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `postid`, `userid`, `post`, `image`, `comments`, `likes`, `date`, `has_image`, `is_profile_image`, `is_cover_image`, `parent`) VALUES
(41, 47864845631319687, 769478630343238, 'dvd', '', 0, 0, '2022-03-01 09:42:23', 0, 0, 0, 0),
(42, 29842422, 769478630343238, 'scrool scroll', '', 3, 1, '2022-03-02 07:37:03', 0, 0, 0, 0),
(43, 45, 769478630343238, 'hehehhehe', '', 1, 2, '2022-03-02 05:45:17', 0, 0, 0, 0),
(44, 308060, 2697026671743459370, 'hello', '', 0, 1, '2022-03-01 07:02:31', 0, 0, 0, 0),
(45, 949665054863, 45398300, 'hey', '', 0, 0, '2022-03-01 13:15:54', 0, 0, 0, 0),
(46, 97681, 45398300, 'yes\r\n', '', 1, 0, '2022-03-02 05:42:46', 0, 0, 0, 0),
(47, 9201, 2697026671743459370, 'nice', '', 0, 0, '2022-03-02 05:42:46', 0, 0, 0, 97681),
(48, 115138757467096494, 2697026671743459370, 'nice', '', 0, 0, '2022-03-02 05:43:10', 0, 0, 0, 29842422),
(49, 999962, 2697026671743459370, 'hello', '', 0, 0, '2022-03-02 05:45:17', 0, 0, 0, 45),
(50, 15539, 2697026671743459370, '123', 'uploads/2697026671743459370/xSNTRBzgioLdORA.jpg', 0, 0, '2022-03-02 07:20:54', 1, 0, 0, 0),
(51, 68825709190969497, 2697026671743459370, 'hi', 'uploads/2697026671743459370/59H4aW6oKlIEh4f.jpg', 0, 0, '2022-03-02 07:22:44', 1, 0, 0, 0),
(52, 153800363118, 2697026671743459370, 'hi', 'uploads/2697026671743459370/rkYHoJLFAPrmrtU.jpg', 0, 0, '2022-03-02 07:25:29', 1, 0, 0, 0),
(53, 3135724453022, 2697026671743459370, '', 'uploads/2697026671743459370/kjZx6U7aFTvgml4.jpg', 0, 0, '2022-03-02 07:28:05', 1, 0, 0, 0),
(54, 2013434402, 2697026671743459370, '', 'uploads/2697026671743459370/d6E9RLnyaS0Kd5W.jpg', 2, 0, '2022-03-02 07:34:25', 1, 1, 0, 0),
(56, 72948, 2697026671743459370, ':P :P :0', '', 0, 0, '2022-03-02 07:34:25', 0, 0, 0, 2013434402),
(57, 787719834576507802, 2697026671743459370, 'niceeee', '', 0, 0, '2022-03-02 07:36:02', 0, 0, 0, 29842422),
(58, 9384177410311854, 2697026671743459370, 'हए रे ज्यपुनी तत', '', 0, 0, '2022-03-02 07:37:03', 0, 0, 0, 29842422);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(19) NOT NULL,
  `userid` bigint(19) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `url_address` varchar(100) NOT NULL,
  `profile_image` varchar(1000) NOT NULL,
  `cover_image` varchar(1000) NOT NULL,
  `follows` int(11) NOT NULL,
  `log_in` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `date`, `url_address`, `profile_image`, `cover_image`, `follows`, `log_in`) VALUES
(1, 45398300, 'Ankit', 'Shrestha', 'xta.ankit7@gmail.com', 'ankit123', '2021-09-06', 'Male', '2022-03-02 08:51:19', 'ankit.shrestha', 'uploads/45398300/mwmahxP4VJekSNI.jpg', '', 1, '2022-03-01 09:39:05'),
(2, 2697026671743459370, 'एलि', 'मक', 'eliza.maka@gmail.com', 'eliza123', '2021-09-05', 'Female', '2022-03-02 15:10:15', 'eliza.maka', 'uploads/2697026671743459370/d6E9RLnyaS0Kd5W.jpg', '', 0, '2022-03-02 16:10:20'),
(3, 769478630343238, 'Bini', 'Prajapati', 'bini2@gmail.com', '12345', '4444-04-04', 'Female', '2022-03-01 09:42:37', 'bini.prajapati', '', '', 1, '2022-02-27 20:05:42'),
(4, 3368, '???लिज', '???क', 'eliza.maka@gmail.com', 'eliza', '2000-02-22', 'Female', '2022-03-02 08:00:37', 'एलिज.मक', '', '', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `contentid` (`contentid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contentid` (`contentid`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postid` (`postid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `comments` (`comments`),
  ADD KEY `likes` (`likes`),
  ADD KEY `date` (`date`),
  ADD KEY `has_image` (`has_image`),
  ADD KEY `is_profile_image` (`is_profile_image`),
  ADD KEY `is_cover_image` (`is_cover_image`),
  ADD KEY `comments_2` (`comments`),
  ADD KEY `likes_2` (`likes`),
  ADD KEY `date_2` (`date`),
  ADD KEY `parent` (`parent`);
ALTER TABLE `posts` ADD FULLTEXT KEY `post` (`post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `email` (`email`),
  ADD KEY `gender` (`gender`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `date` (`date`),
  ADD KEY `follows` (`follows`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
