-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 09:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mischool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_user` varchar(200) NOT NULL,
  `ad_pswd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cou_id` int(11) NOT NULL,
  `cou_names` varchar(200) NOT NULL,
  `cou_code` varchar(200) NOT NULL,
  `cou_credits` int(11) NOT NULL,
  `cou_term` varchar(200) NOT NULL,
  `cou_pass` varchar(200) NOT NULL,
  `lev_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

CREATE TABLE `discipline` (
  `dis_id` int(11) NOT NULL,
  `dis_term` varchar(200) NOT NULL,
  `stu_id` varchar(200) NOT NULL,
  `dis_year` year(4) NOT NULL,
  `dis_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `lev_id` int(11) NOT NULL,
  `lev_names` varchar(200) NOT NULL,
  `les_abb` varchar(200) NOT NULL,
  `lev_title` varchar(200) NOT NULL,
  `lev_rtqf` varchar(200) NOT NULL,
  `lev_status` varchar(200) NOT NULL,
  `tea_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `ma_id` int(11) NOT NULL,
  `ma_amount` varchar(200) NOT NULL,
  `ma_year` year(4) NOT NULL,
  `ma_status` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `stu_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reassessment`
--

CREATE TABLE `reassessment` (
  `re_id` int(11) NOT NULL,
  `re_amount` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL,
  `stu_id` varchar(200) NOT NULL,
  `re_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `sch_id` varchar(200) NOT NULL,
  `sch_names` varchar(200) NOT NULL,
  `sch_address` varchar(200) NOT NULL,
  `sch_tel` varchar(200) NOT NULL,
  `sch_email` varchar(200) NOT NULL,
  `sch_website` varchar(200) NOT NULL,
  `sch_logo` varchar(200) NOT NULL,
  `sch_moto` varchar(200) NOT NULL,
  `sch_principal` varchar(200) NOT NULL,
  `sch_po` varchar(200) NOT NULL,
  `sch_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_id` varchar(200) NOT NULL,
  `stu_names` varchar(200) NOT NULL,
  `stu_gender` varchar(200) NOT NULL,
  `stu_dob` date NOT NULL,
  `stu_mother` varchar(200) DEFAULT NULL,
  `stu_mo_phone` varchar(200) DEFAULT NULL,
  `stu_father` varchar(200) DEFAULT NULL,
  `stu_fa_phone` varchar(200) DEFAULT NULL,
  `stu_guardian` varchar(200) DEFAULT NULL,
  `stu_gu_phone` varchar(200) DEFAULT NULL,
  `stu_photo` varchar(200) NOT NULL,
  `stu_status` varchar(200) NOT NULL,
  `lev_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(200) NOT NULL,
  `user_names` varchar(200) NOT NULL,
  `user_phone` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_idno` varchar(200) NOT NULL,
  `user_role` varchar(200) NOT NULL,
  `user_username` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cou_id`),
  ADD KEY `lev_id` (`lev_id`);

--
-- Indexes for table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`lev_id`),
  ADD KEY `tea_id` (`tea_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`ma_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `reassessment`
--
ALTER TABLE `reassessment`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`sch_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `lev_id` (`lev_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discipline`
--
ALTER TABLE `discipline`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `lev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `ma_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reassessment`
--
ALTER TABLE `reassessment`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`lev_id`) REFERENCES `levels` (`lev_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discipline`
--
ALTER TABLE `discipline`
  ADD CONSTRAINT `discipline_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_ibfk_1` FOREIGN KEY (`tea_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`cou_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reassessment`
--
ALTER TABLE `reassessment`
  ADD CONSTRAINT `reassessment_ibfk_1` FOREIGN KEY (`stu_id`) REFERENCES `students` (`stu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reassessment_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`cou_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`lev_id`) REFERENCES `levels` (`lev_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
