-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2021 at 09:22 PM
-- Server version: 10.3.30-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mewsnbark`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `hear_from_us` varchar(255) DEFAULT NULL,
  `receive_marketing_noti` enum('0','1') DEFAULT NULL COMMENT '0->dont send,1->yes send email',
  `pet_caring_experience` int(11) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `pet_caring_exp_desc` varchar(255) DEFAULT NULL,
  `daily_schedule` longtext DEFAULT NULL,
  `safty_trust` longtext DEFAULT NULL,
  `have_pet` enum('0','1') NOT NULL DEFAULT '0',
  `background_check_dob` datetime DEFAULT NULL,
  `background_check_phone` varchar(255) DEFAULT NULL,
  `type_of_home` varchar(255) DEFAULT NULL,
  `type_of_yard` varchar(255) DEFAULT NULL,
  `is_smoking_inside_home` enum('0','1') DEFAULT NULL,
  `is_children_0_5` enum('0','1') DEFAULT NULL,
  `is_children_6_12` enum('0','1') DEFAULT NULL,
  `is_dogs_allowed_in_furniture` enum('0','1') DEFAULT NULL,
  `is_dogs_allowed_in_bed` enum('0','1') DEFAULT NULL,
  `is_cats_in_home` enum('0','1') DEFAULT NULL,
  `is_caged_in_home` enum('0','1') DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
