-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2022 at 05:03 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16237137_login`
--

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
(23, 'ram', 'sajan', 'hi', '2021-03-23 15:13:53', 0, 0),
(24, 'sajan', 'ram', 'hello', '2021-03-23 15:16:29', 0, 0),
(25, 'ram', 'sajan', 'nice chalyo abab ', '2021-03-23 15:13:53', 0, 0),
(26, 'Ram', 'sajan', 'hi', '2021-03-23 15:13:53', 0, 0),
(27, 'sajan', 'ram', 'hello', '2021-03-23 15:16:29', 0, 0),
(28, 'sajan', 'ram', 'hello', '2021-03-23 15:16:29', 0, 0),
(29, 'Ram', 'sajan', 'la', '2021-03-23 15:13:53', 0, 0),
(30, 'Ram', 'sajan', 'what is this', '2021-03-23 15:13:53', 0, 0),
(31, 'shardul10', 'sajan', 'oe', '2021-03-23 15:13:53', 0, 0),
(32, 'sajan', 'shardul10', 'huh', '2021-03-18 04:17:18', 1, NULL),
(33, 'sajan', 'shardul10', 'tori', '2021-03-18 04:19:00', 1, NULL),
(34, 'sajan', 'Riches', 'Hi', '2021-03-18 12:08:44', 0, NULL),
(35, 'Riches', 'sajan', 'Oie', '2021-03-23 15:13:53', 0, 0),
(36, 'sajan', 'Riches', 'Huh', '2021-03-18 12:08:56', 0, NULL),
(37, 'Riches', 'sajan', 'K gardai ho', '2021-03-23 15:13:53', 0, 0),
(38, 'sajan', 'Riches', 'Mr beast ko video herdai basya alxi lagera', '2021-03-18 12:09:22', 0, NULL),
(39, 'Riches', 'sajan', 'Ea', '2021-03-23 15:13:53', 0, 0),
(40, 'Riches', 'sajan', 'Aba kei check garnu parxa?', '2021-03-23 15:13:53', 0, 0),
(41, 'sajan', 'Riches', 'Pardaina msg auda sound aune banako tyo chai haleko xaina ajhai', '2021-03-18 12:10:13', 0, NULL),
(42, 'Riches', 'sajan', 'Ea', '2021-03-23 15:13:53', 0, 0),
(43, 'sajan', 'Riches', 'Ah', '2021-03-18 12:10:33', 0, NULL),
(44, 'Riches', 'sajan', 'Ma gako la', '2021-03-23 15:13:53', 0, 0),
(45, 'sajan', 'Riches', 'La', '2021-03-18 12:10:40', 0, NULL),
(46, 'sajan', 'Ram', 'hi', '2021-03-23 15:16:29', 0, 0),
(47, 'Ram', 'sajan', 'hlw', '2021-03-23 15:13:53', 0, 0),
(48, 'Ram', 'sajan', 'hlw', '2021-03-23 15:13:53', 0, 0),
(49, 'Ram', 'sajan', 'hlw', '2021-03-23 15:13:53', 0, 0),
(50, 'Ram', 'sajan', 'hlw', '2021-03-23 15:13:53', 0, 0),
(51, 'sajan', 'Ram', 'tori', '2021-03-23 15:16:29', 0, 0),
(52, 'Ram', 'sajan', 'Hi', '2021-03-23 15:13:53', 0, 0),
(53, 'Ram', 'sajan', 'Hello', '2021-03-23 15:13:53', 0, 0),
(54, 'sajan', 'Ram', 'hi', '2021-03-23 15:16:29', 0, 0),
(55, 'Ram', 'sajan', 'hlw', '2021-03-23 15:13:53', 0, 0),
(56, 'Ram', 'sajan', 'hi', '2021-03-23 15:13:53', 0, 0),
(57, 'sajan', 'Ram', 'hlw', '2021-03-23 15:16:29', 0, 0),
(58, 'sajan', 'Ram', 'hi', '2021-03-23 15:16:29', 0, 0),
(59, 'Ram', 'sajan', 'hi', '2021-03-23 15:13:53', 0, 0),
(60, 'Ram', 'sajan', 'hhi', '2021-03-23 15:16:25', 0, 0),
(61, 'Ram', 'sajan', 'tori', '2021-03-23 15:16:25', 0, 0),
(62, 'Ram', 'sajan', 'hi', '2021-03-23 15:16:25', 0, 0),
(63, 'sajan', 'Ram', 'oe', '2021-03-24 10:09:38', 0, 0),
(64, 'sajan', 'Ram', 'hi', '2021-03-24 10:09:38', 0, 0),
(65, 'Ram', 'sajan', 'hlw', '2021-03-24 10:17:52', 0, 0),
(66, 'uttam', 'sajan', 'hello uttam is here', '2021-03-24 10:20:13', 0, 0),
(67, 'sajan', 'uttam', 'ah yes', '2021-03-24 10:24:35', 0, 0),
(68, 'sajan', 'uttam', 'ah yes', '2021-03-24 10:24:35', 0, 0),
(69, 'sajan', 'uttam', 'aaba aayo??', '2021-03-24 10:24:35', 0, 0),
(70, 'uttam', 'sajan', 'la thik cha', '2021-03-24 10:21:59', 0, 0),
(71, 'sajan', 'uttam', 'okay', '2021-03-24 10:24:35', 0, 0),
(72, 'sajan', 'uttam', 'hihi', '2021-03-24 10:24:35', 0, 0),
(73, 'sajan', 'uttam', 'aayo??', '2021-03-24 10:24:35', 0, 0),
(74, 'uttam', 'sajan', 'umm aayo', '2021-03-24 10:27:15', 0, 0),
(75, 'sajan', 'uttam', 'nice ', '2021-03-24 10:24:35', 0, 0),
(76, 'sajan', 'uttam', 'aba tya mathi uttam sent msg vanne aune banauna parla title ma ', '2021-03-24 10:24:37', 0, 0),
(77, 'uttam', 'sajan', 'tara buffer slow hoki page nai refresh vayera time lageko ho??', '2021-03-24 10:27:15', 0, 0),
(78, 'sajan', 'uttam', 'free hosting ho ni ta ani dher fetch garako garai garna milena k 15000 queries per hour matra re', '2021-03-24 10:25:43', 0, 0),
(79, 'sajan', 'uttam', 'so 3 sec time delay xa ', '2021-03-24 10:25:58', 0, 1),
(80, 'uttam', 'sajan', 'ehh lala thik cha', '2021-03-24 10:27:42', 0, 0),
(81, 'sajan', 'uttam', 'ok', '2021-03-24 10:27:43', 0, 1),
(82, 'Ash', 'sajan', 'Nepali Mark Zuckerberg aich ', '2021-03-24 10:47:30', 0, 0),
(83, 'sajan', 'Ash', 'Haha mula', '2021-03-24 10:47:50', 0, 0),
(84, 'Ash', 'sajan', 'kasto ghinlagdo messenger yar', '2021-03-24 10:48:09', 0, 0),
(85, 'sajan', 'Ash', 'Kina', '2021-03-24 10:50:17', 0, 0),
(86, 'Ash', 'sajan', 'messenger ghinlagdo bhanya yo haina', '2021-03-24 10:49:56', 0, 0),
(87, 'sajan', 'Ash', 'Haha', '2021-03-24 10:51:13', 0, 0),
(88, 'sajan', 'Ash', 'Sakyo mero project ta', '2021-03-24 10:51:13', 0, 0),
(89, 'Ash', 'sajan', 'la babal full marks haldincha suree', '2021-03-24 10:52:30', 0, 0),
(90, 'sajan', 'Ash', 'Nice nice aba mp ko padhna po man lagena k garne hola voli', '2021-03-24 10:56:51', 0, 0),
(91, 'Ash', 'sajan', 'hallaune afni microprocessor', '2021-03-24 10:56:32', 0, 0),
(92, 'Ash', 'sajan', 'afno ', '2021-03-24 10:56:32', 0, 0),
(93, 'sajan', 'Ash', 'Tori', '2021-03-24 10:56:51', 0, 0),
(94, 'sajan', 'Shreya', 'hi', '2021-03-25 10:16:45', 0, 0),
(95, 'Shreya', 'sajan', 'Namaste', '2021-03-25 10:17:18', 0, 0),
(96, 'sajan', 'Shreya', 'dkjhdsk', '2021-04-15 01:01:56', 0, 0),
(97, 'sajan', 'Lambu23', 'oe', '2021-03-29 02:41:00', 0, 0),
(98, 'Lambu23', 'sajan', 'oe l;ucky lucky oe', '2021-03-29 02:40:44', 0, 0),
(99, 'sajan', 'Lambu23', 'hi', '2021-03-29 02:41:32', 0, 0),
(100, 'Lambu23', 'shardul10', 'oe gullu', '2021-03-29 02:41:23', 1, 1),
(101, 'Lambu23', 'sajan', 'bye bye', '2021-03-29 03:41:47', 0, 0),
(102, 'sajan', 'Ram', 'o ramu ki jay', '2021-03-29 02:44:38', 1, 1),
(103, 'sajan', 'deepesh', 'hlw', '2021-03-29 03:47:54', 0, 0),
(104, 'deepesh', 'sajan', 'k', '2021-03-29 03:41:48', 0, 0),
(105, 'deepesh', 'sajan', 'k xa', '2021-03-29 03:42:56', 0, 0),
(106, 'sajan', 'deepesh', 'ko', '2021-03-29 03:47:54', 0, 0),
(107, 'Salina', 'deepesh', 'hello', '2021-03-29 03:48:18', 0, 0),
(108, 'deepesh', 'Salina', 'hi  tori', '2021-03-29 03:48:22', 0, 1),
(109, 'Salina', 'deepesh', 'hoye', '2021-03-29 03:53:14', 0, 1),
(110, 'Salina', 'uttam', 'oe', '2021-03-29 03:55:42', 1, 1),
(111, 'deepesh', 'Salina', 'oe', '2021-03-29 04:16:14', 1, 1),
(112, 'ssssss', 'sajan', 'hi', '2022-02-25 04:59:35', 1, 1),
(113, 'vvvv', 'ssssss', 'oe mug', '2022-02-25 05:01:16', 0, 0),
(114, 'ssssss', 'vvvv', 'huh', '2022-02-25 05:01:42', 0, 0),
(115, 'vvvv', 'ssssss', 'nice', '2022-02-25 05:02:04', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `country` text NOT NULL,
  `gender` text NOT NULL,
  `log_in` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `country`, `gender`, `log_in`) VALUES
(1, 'sajan', '*#G633.MOWp3.', 'Nepal', 'Male', '2021-04-12 02:18:30'),
(4, 'Ram', '*#G633.MOWp3.', 'Nepal', 'Male', '2021-03-24 10:10:22'),
(5, 'shardul10', '*#zhRrkMHuta2', 'Nepal', 'Male', '1'),
(6, 'Riches', '*#GuFdVEwsd/A', 'Afganistan', 'Male', '1'),
(7, 'testing', '*#WRFwuldfqFU', 'Afganistan', 'Male', '2021-03-20 10:16:40'),
(8, 'hgjkhgf', '*#GT.t/6mYppY', 'Afganistan', 'Male', NULL),
(9, 'uttam', '*#fCyLpzww/Kk', 'Nepal', 'Male', '2021-03-24 10:29:02'),
(10, 'Ash', '*#75vCHAPsWUU', 'Australia', 'Male', '2021-03-24 12:02:51'),
(11, 'Shreya', '*#Y58Zh2afhnQ', 'Nepal', 'Female', '2021-04-15 01:02:12'),
(12, 'Lambu23', '*#11J7J551peo', 'Barbados', 'Male', '2021-03-29 02:48:22'),
(13, 'deepesh', '*#5udEiGY2YEc', 'Belarus', 'Male', '2021-03-29 04:16:33'),
(14, 'Salina', '*#Y58Zh2afhnQ', 'Nepal', 'Female', '2021-03-29 03:59:36'),
(15, 'Ooo', '*#G633.MOWp3.', 'Afganistan', 'Male', '2021-05-13 23:35:05'),
(16, 'ssssss', '*#Bg7y4dqohHQ', 'Afganistan', 'Male', '2022-02-25 05:02:17'),
(17, 'vvvv', '*#GoqGs4E/jXE', 'Afganistan', 'Male', '2022-02-25 05:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
