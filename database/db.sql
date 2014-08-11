-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2014 at 05:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `vip`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_user`
--

CREATE TABLE IF NOT EXISTS `backend_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `activkey` char(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84367070 ;

--
-- Dumping data for table `backend_user`
--

INSERT INTO `backend_user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `role`, `activkey`, `status`, `deleted`, `created_by`, `modified_user_id`, `date_entered`, `date_modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'User1', 'neeraj24a@gmail.com', 1, 'd75565c3-0b28-4222-e480-536f95aa80f9', 1, 0, 1, 1, '2013-09-19 00:00:00', '2014-05-11 11:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `songs` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `songType` tinyint(1) DEFAULT NULL,
  `dj` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `is_delete` tinyint(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1482416 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL COMMENT '1-song, 2-video',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `created_by` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `modified_user_id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=169 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'dj'),
(3, 'uploader');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31983 ;

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('song','video') NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `type`, `name`) VALUES
(4, 'video', 'Clean'),
(5, 'video', 'Dirty'),
(6, 'song', 'Clean'),
(7, 'song', 'Dirty');

