-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2011 at 08:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezbids`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `id_number` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `bids_left` int(11) NOT NULL DEFAULT '0',
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` char(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `date_of_birth`, `id_number`, `email`, `created_at`, `updated_at`, `bids_left`, `status`, `salt`) VALUES
(1, 'admin', 'qzYCM/mvr6Gmw', 'admin', 'admin', '2011-09-23', '012345678', 'admin@ezbids.com', '2011-09-30 18:41:20', NULL, 0, NULL, 'qzW02eEtzRgXfTv8CPuudikjepAoHG50eD2LozXMunum5xFDn4OSTp1mD92oKjqX'),
(2, 'user1', 'fdzvyDx.cBSuU', 'user1', 'user1', '2011-09-06', '012394864', 'user1@ezbids.com', '2011-09-30 19:10:44', NULL, 0, NULL, 'fdm5IR42Z6Yuk9YKEGVDD4DpKBnbry11fJ4282NPAxP1q9u21KWjjE8okaizIdkt');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
