-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2016 at 10:50 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vodkaTVcampaigns`
--

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

CREATE TABLE `channel` (
  `id` int(11) NOT NULL,
  `text` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`id`, `text`, `img`, `created_at`, `updated_at`) VALUES
(1, 'ข่าว', 'assets/img/vodka/ball-1.png', '2016-02-05 07:29:18', '2016-02-05 00:22:35'),
(2, 'ซีรี่ย์ฝรั่ง', 'assets/img/vodka/ball-2.png', '2016-02-05 07:29:22', '2016-02-05 00:23:25'),
(3, 'ละครจบแล้ว', 'assets/img/vodka/ball-3.png', '2016-02-05 07:29:25', '2016-02-05 00:23:48'),
(4, 'การศึกษา', 'assets/img/vodka/ball-4.png', '2016-02-05 07:32:12', '2016-02-05 00:32:01'),
(5, 'SocialClip', 'assets/img/vodka/ball-5.png', '2016-02-05 00:32:39', '2016-02-05 00:32:39'),
(6, 'อื่นๆ', 'assets/img/vodka/ball-6.png', '2016-02-05 00:33:04', '2016-02-05 00:33:04'),
(7, 'ตัวอย่างหนัง', 'assets/img/vodka/ball-7.png', '2016-02-07 21:32:07', '2016-02-07 21:32:07'),
(8, 'ละครออนแอร์', 'assets/img/vodka/ball-8.png', '2016-02-07 21:32:57', '2016-02-07 21:32:57'),
(9, 'ซีรี่ย์ญี่ปุ่น', 'assets/img/vodka/ball-9.png', '2016-02-07 21:33:44', '2016-02-07 21:33:44'),
(10, 'ช่อง3', 'assets/img/vodka/ball-10.png', '2016-02-08 04:49:16', '2016-02-07 21:36:39'),
(11, 'วาไรตี้เกมส์โชว์', 'assets/img/vodka/ball-11.png', '2016-02-07 21:37:45', '2016-02-07 21:37:45'),
(12, 'ละครออนแอร์', 'assets/img/vodka/ball-12.png', '2016-02-07 21:40:29', '2016-02-07 21:40:29'),
(13, 'เพลง', 'assets/img/vodka/ball-13.png', '2016-02-07 21:40:29', '2016-02-07 21:40:29'),
(14, 'ท่องเที่ยวสารคดี', 'assets/img/vodka/ball-14.png', '2016-02-07 21:40:29', '2016-02-07 21:40:29'),
(15, 'รายการล่าสุด', 'assets/img/vodka/ball-15.png', '2016-02-07 21:42:31', '2016-02-07 21:42:31'),
(16, 'รถ', 'assets/img/vodka/ball-16.png', '2016-02-07 21:42:31', '2016-02-07 21:42:31'),
(17, 'ซีรี่ย์เกาหลี', 'assets/img/vodka/ball-17.png', '2016-02-07 21:42:31', '2016-02-07 21:42:31'),
(18, 'ธุรกิจการเงิน', 'assets/img/vodka/ball-18.png', '2016-02-07 21:44:06', '2016-02-07 21:44:06'),
(19, 'ซิทคอม', 'assets/img/vodka/ball-19.png', '2016-02-07 21:44:06', '2016-02-07 21:44:06'),
(20, 'ช่อง5', 'assets/img/vodka/ball-20.png', '2016-02-08 04:49:21', '2016-02-07 21:44:06'),
(21, 'ซีรี่ย์จีนไต้หวัน', 'assets/img/vodka/ball-21.png', '2016-02-07 21:46:51', '2016-02-07 21:46:51'),
(22, 'สุขภาพความงาม', 'assets/img/vodka/ball-22.png', '2016-02-07 21:46:51', '2016-02-07 21:46:51'),
(23, 'การ์ตูน', 'assets/img/vodka/ball-23.png', '2016-02-07 21:46:51', '2016-02-07 21:46:51'),
(24, 'ช่องNow', 'assets/img/vodka/ball-24.png', '2016-02-07 21:48:10', '2016-02-07 21:48:10'),
(25, 'ช่องVoiceTV', 'assets/img/vodka/ball-25.png', '2016-02-07 21:48:10', '2016-02-07 21:48:10'),
(26, 'ช่องWorkpoint', 'assets/img/vodka/ball-26.png', '2016-02-07 21:48:10', '2016-02-07 21:48:10'),
(27, 'อาหาร', 'assets/img/vodka/ball-27.png', '2016-02-07 21:52:26', '2016-02-07 21:52:26'),
(28, 'เกมส์เทคโนโลยี', 'assets/img/vodka/ball-28.png', '2016-02-07 21:52:26', '2016-02-07 21:52:26'),
(29, 'กีฬา', 'assets/img/vodka/ball-29.png', '2016-02-07 21:52:26', '2016-02-07 21:52:26'),
(30, 'ช่อง7', 'assets/img/vodka/ball-30.png', '2016-02-07 21:53:30', '2016-02-07 21:53:30'),
(31, 'ช่องG-MM', 'assets/img/vodka/ball-31.png', '2016-02-07 21:53:30', '2016-02-07 21:53:30'),
(32, 'ช่อง2', 'assets/img/vodka/ball-32.png', '2016-02-07 21:53:30', '2016-02-07 21:53:30'),
(33, 'ช่อง9MCOT', 'assets/img/vodka/ball-33.png', '2016-02-07 21:54:54', '2016-02-07 21:54:54'),
(34, 'ช่องAmarin', 'assets/img/vodka/ball-34.png', '2016-02-07 21:54:54', '2016-02-07 21:54:54'),
(35, 'ช่องTrue4U', 'assets/img/vodka/ball-35.png', '2016-02-07 21:54:54', '2016-02-07 21:54:54'),
(36, 'ช่องไทยรัฐ', 'assets/img/vodka/ball-36.png', '2016-02-07 21:55:46', '2016-02-07 21:55:46'),
(37, 'ช่องBrightTV', 'assets/img/vodka/ball-37.png', '2016-02-07 21:55:46', '2016-02-07 21:55:46'),
(38, 'ช่องPPTV', 'assets/img/vodka/ball-38.png', '2016-02-07 21:55:46', '2016-02-07 21:55:46'),
(39, 'ช่องONE', 'assets/img/vodka/ball-39.png', '2016-02-07 21:58:32', '2016-02-07 21:58:32'),
(40, 'ช่องThaiPBS', 'assets/img/vodka/ball-40.png', '2016-02-07 21:58:32', '2016-02-07 21:58:32'),
(41, 'ช่อง8', 'assets/img/vodka/ball-41.png', '2016-02-07 21:58:32', '2016-02-07 21:58:32'),
(42, 'ช่องNation', 'assets/img/vodka/ball-42.png', '2016-02-07 22:09:11', '2016-02-07 22:09:11'),
(43, 'ช่องMONO29', 'assets/img/vodka/ball-43.png', '2016-02-07 22:09:11', '2016-02-07 22:09:11'),
(44, 'ช่องMoneyChannel', 'assets/img/vodka/ball-44.png', '2016-02-07 22:09:11', '2016-02-07 22:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name_lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `line` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `channel` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channel`
--
ALTER TABLE `channel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
