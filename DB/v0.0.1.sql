-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 30, 2021 at 08:20 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mewsnbark`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_for_sitter`
--

CREATE TABLE `quiz_for_sitter` (
  `id` bigint(11) NOT NULL,
  `question` longtext NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registration_otp`
--

CREATE TABLE `registration_otp` (
  `ID` int(11) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `created_at`) VALUES
(1, 'Boarding', '2021-10-02 20:51:44'),
(2, 'House sitting', '2021-10-02 20:51:44'),
(3, 'Drop in visits', '2021-10-02 20:52:19'),
(4, 'Doggy day care', '2021-10-02 20:52:19'),
(5, 'Dog walking', '2021-10-02 20:52:59');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contents` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_emergency_contact`
--

CREATE TABLE `user_emergency_contact` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `emergency_contact_no` int(11) NOT NULL,
  `emergency_cantact_name` varchar(255) NOT NULL,
  `extra_emegency_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_gallery`
--

CREATE TABLE `user_gallery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `primary_ph_no` int(11) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `cover_image` varchar(255) NOT NULL,
  `status` enum('0','1','5') NOT NULL COMMENT '''0''->pending, ''1''->active, ''5''->block',
  `is_sitter` enum('0','1','3','5') NOT NULL DEFAULT '0' COMMENT '''0''->normal user. ''1''->sitter,''3''->submitted,''5''->rejected',
  `social_security_no` bigint(255) NOT NULL,
  `created_by` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `daily_schedule` longtext,
  `safty_trust` longtext,
  `have_pet` enum('0','1') NOT NULL DEFAULT '0',
  `background_check_dob` datetime DEFAULT NULL,
  `background_check_phone` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_phone`
--

CREATE TABLE `user_phone` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_phone`
--

INSERT INTO `user_phone` (`id`, `user_id`, `phone_no`, `country_code`, `created_at`) VALUES
(1, 1, '89618194736', '91', '2021-10-30 21:13:07'),
(2, 1, '56985658656', '91', '2021-10-30 21:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_service_relation`
--

CREATE TABLE `user_service_relation` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `is_home_fulltime_home_in_week` enum('0','1') NOT NULL,
  `days_of_week_available` varchar(255) NOT NULL,
  `potty_break` varchar(255) NOT NULL,
  `no_of_pets_hosted` varchar(255) NOT NULL,
  `size_of_pet_hosted` varchar(255) NOT NULL,
  `can_keep_cat` enum('0','1') NOT NULL,
  `type_of_home` varchar(255) NOT NULL,
  `type_of_yard` varchar(255) NOT NULL,
  `is_smoking_inside_home` enum('0','1') NOT NULL,
  `is_children_0_5` enum('0','1') NOT NULL,
  `is_children_6_12` enum('0','1') NOT NULL,
  `is_dogs_allowed_in_furniture` enum('0','1') NOT NULL,
  `is_dogs_allowed_in_bed` enum('0','1') NOT NULL,
  `is_cats_in_home` enum('0','1') NOT NULL,
  `is_caged_in_home` enum('0','1') NOT NULL,
  `can_host_pet_from_different_family` enum('0','1') NOT NULL,
  `can_host_pappies_under_one` enum('0','1') NOT NULL,
  `can_host_not_crate_traine_dogs` enum('0','1') NOT NULL,
  `can_host_unneutered_male_dogs` enum('0','1') NOT NULL,
  `can_host_unpaied_female_dogs` enum('0','1') NOT NULL,
  `can_host_female_in_heat` enum('0','1') NOT NULL,
  `cancellation_policy` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_service_relation`
--

INSERT INTO `user_service_relation` (`id`, `user_id`, `service_id`, `price`, `is_home_fulltime_home_in_week`, `days_of_week_available`, `potty_break`, `no_of_pets_hosted`, `size_of_pet_hosted`, `can_keep_cat`, `type_of_home`, `type_of_yard`, `is_smoking_inside_home`, `is_children_0_5`, `is_children_6_12`, `is_dogs_allowed_in_furniture`, `is_dogs_allowed_in_bed`, `is_cats_in_home`, `is_caged_in_home`, `can_host_pet_from_different_family`, `can_host_pappies_under_one`, `can_host_not_crate_traine_dogs`, `can_host_unneutered_male_dogs`, `can_host_unpaied_female_dogs`, `can_host_female_in_heat`, `cancellation_policy`, `created_at`) VALUES
(1, 1, 2, 90, '1', '2|@|3|@|4|@|5', '0-2', '3', '0|@|2', '', '0', '1', '', '1', '1', '', '', '', '', '', '', '1', '', '', '1', '0', '2021-10-27 22:37:44'),
(2, 1, 3, 0, '0', '', '', '', '', '0', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-10-27 22:37:44'),
(3, 1, 4, 0, '0', '', '', '', '', '0', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-10-27 22:37:44'),
(4, 1, 1, 0, '0', '', '', '', '', '0', '', '', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-10-28 00:02:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_for_sitter`
--
ALTER TABLE `quiz_for_sitter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_otp`
--
ALTER TABLE `registration_otp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_emergency_contact`
--
ALTER TABLE `user_emergency_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_gallery`
--
ALTER TABLE `user_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_phone`
--
ALTER TABLE `user_phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_service_relation`
--
ALTER TABLE `user_service_relation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_for_sitter`
--
ALTER TABLE `quiz_for_sitter`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_otp`
--
ALTER TABLE `registration_otp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_emergency_contact`
--
ALTER TABLE `user_emergency_contact`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_gallery`
--
ALTER TABLE `user_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_phone`
--
ALTER TABLE `user_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_service_relation`
--
ALTER TABLE `user_service_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
