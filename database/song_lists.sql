-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2014 at 05:01 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vip`
--

-- --------------------------------------------------------

--
-- Table structure for table `song_lists`
--

CREATE TABLE IF NOT EXISTS `song_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `songType` int(1) NOT NULL DEFAULT '1' COMMENT '1-music, 2-video',
  `songName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bpm` int(4) DEFAULT NULL,
  `songDescription` text COLLATE utf8_unicode_ci,
  `filePath` text COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileName` text COLLATE utf8_unicode_ci,
  `thumbnail` text COLLATE utf8_unicode_ci,
  `subGenre` int(11) DEFAULT NULL,
  `artistName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `userId` int(11) DEFAULT NULL,
  `total_play` int(11) NOT NULL DEFAULT '0',
  `total_download` int(11) NOT NULL DEFAULT '0',
  `top_of_the_week` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `isDeleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=388 ;

--
-- Dumping data for table `song_lists`
--

INSERT INTO `song_lists` (`id`, `songType`, `songName`, `slug`, `version`, `fileSize`, `bpm`, `songDescription`, `filePath`, `genre`, `fileName`, `thumbnail`, `subGenre`, `artistName`, `status`, `userId`, `total_play`, `total_download`, `top_of_the_week`, `createdAt`, `updatedAt`, `isDeleted`) VALUES
(1, 1, 'Sawan Aaya Hai', 'sawan-1', '6', '', NULL, NULL, '../assets/songs/hip-hop/original/Sawan Aaya Hai.mp3', '1', 'Sawan Aaya Hai.mp3', NULL, 5, 'Arijit Singh', 1, NULL, 12, 0, 0, NULL, NULL, 0),
(2, 1, 'Kehana Hai', 'kehna-2', '6', '', NULL, NULL, '', '1', 'Kehana Hai.mp3', NULL, 5, 'Kishore Kumar', 1, NULL, 6, 0, 0, NULL, NULL, 0),
(3, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(4, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(5, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(6, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(7, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(8, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(9, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(10, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(11, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(12, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(13, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(14, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(15, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(16, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(17, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(18, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(19, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(20, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(21, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(22, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(23, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(24, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(25, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(26, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(27, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(28, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(29, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(30, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(31, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(32, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(33, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(34, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(35, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(36, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(37, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(38, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(39, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(40, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(41, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(42, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(43, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(44, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(45, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(46, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(47, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(48, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(49, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(50, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(51, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(52, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(53, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(54, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(55, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(56, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(57, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(58, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(59, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(60, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(61, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(62, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(63, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(64, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(65, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(66, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(67, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(68, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(69, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(70, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(71, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(72, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(73, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(74, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(75, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(76, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(77, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(78, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(79, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(80, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(81, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(82, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(83, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(84, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(85, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(86, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(87, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(88, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(89, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(90, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(91, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(92, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(93, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(94, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(95, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(96, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(97, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(98, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(99, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(100, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(101, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(102, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(103, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(104, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(105, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(106, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(107, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(108, 1, 'test', 'test', '6', '', NULL, NULL, '', '1', NULL, NULL, 6, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(109, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(110, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(111, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(112, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(113, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(114, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(115, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(116, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(117, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(118, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(119, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(120, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(121, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(122, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(123, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(124, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(125, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(126, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(127, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(128, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(129, 1, 'test', 'test', '6', '', NULL, NULL, '', '2', NULL, NULL, 8, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(259, 2, 'Water', 'water-259', '6', '', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. \r\n\r\nPhasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.', '', '9', 'water.mp4', 'water.png', 13, NULL, 1, NULL, 8, 0, 0, NULL, NULL, 0),
(260, 2, 'Quick', 'quick-260', '6', '', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. \r\n\r\nPhasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.', '', '9', 'quick.mp4', 'quick.png', 13, NULL, 1, NULL, 3, 0, 0, NULL, NULL, 0),
(261, 2, 'Machine', 'machine-261', '6', '', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. \r\n\r\nPhasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.', '', '9', 'machine.mp4', 'machine.png', 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(262, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(263, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(264, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(265, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(266, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(267, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(268, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(269, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(270, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(271, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(272, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(273, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(274, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(275, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(276, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(277, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(278, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(279, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(280, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(281, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(282, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(283, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(284, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(285, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(286, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(287, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(288, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(289, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(290, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(291, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(292, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(293, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(294, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(295, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(296, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(297, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(298, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(299, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(300, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(301, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(302, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(303, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(304, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(305, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(306, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(307, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(308, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(309, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(310, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(311, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(312, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(313, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(314, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(315, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(316, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(317, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(318, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(319, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(320, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(321, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(322, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(323, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(324, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(325, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(326, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(327, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(328, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(329, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(330, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(331, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(332, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(333, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(334, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(335, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(336, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(337, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(338, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(339, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(340, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(341, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(342, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(343, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(344, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(345, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(346, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(347, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(348, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(349, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(350, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(351, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(352, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(353, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(354, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(355, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(356, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(357, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(358, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(359, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(360, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(361, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(362, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(363, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(364, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(365, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(366, 2, 'test', 'test', '6', '', NULL, NULL, '', '9', NULL, NULL, 14, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(367, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(368, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(369, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(370, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(371, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(372, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(373, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(374, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(375, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(376, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(377, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(378, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(379, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(380, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(381, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(382, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(383, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(384, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(385, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(386, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0),
(387, 2, 'test', 'test', '6', '', NULL, NULL, '', '10', NULL, NULL, 16, NULL, 1, NULL, 0, 0, 0, NULL, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
