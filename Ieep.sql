-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2018 at 10:38 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ieep`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_information`
--

CREATE TABLE `faculty_information` (
  `professor_id` int(10) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `honorfics` varchar(5) NOT NULL,
  `email` varchar(13) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_information`
--

INSERT INTO `faculty_information` (`professor_id`, `fname`, `lname`, `mname`, `honorfics`, `email`, `phone`, `password`) VALUES
(21, 'chirag', 'Chatwani', 'Yogesh ', 'Mrs.', 'cyc4597@gmail', '9879194810', 'EQVGjt*aMW^n-'),
(22, 'grfgtb', 'fg', 'dfgr', 'Mrs.', 'cyc4404@gmail', '324', '%c2oZq-dH^&G7');

-- --------------------------------------------------------

--
-- Table structure for table `prof_information`
--

CREATE TABLE `prof_information` (
  `professor_id` int(10) NOT NULL,
  `prof_login_id` varchar(22) DEFAULT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `mname` varchar(15) NOT NULL,
  `honorfics` varchar(5) NOT NULL,
  `email` varchar(130) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof_information`
--

INSERT INTO `prof_information` (`professor_id`, `prof_login_id`, `fname`, `lname`, `mname`, `honorfics`, `email`, `phone`, `password`) VALUES
(24, 'BCA_Prof:5a7497a0ae210', 'chirag ', 'chatwani', 'yogesh', 'Mr', 'cyc4404@gmail.com', '9558104404', '$2y$14$qwUR5HcgweCKImBJgEj15.2Qb5WAjyGdW5TLYPKjd5xAPEjQeYoJ.');

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `qid` int(10) NOT NULL,
  `question` text NOT NULL,
  `opA` varchar(30) NOT NULL,
  `opB` varchar(30) NOT NULL,
  `opC` varchar(30) NOT NULL,
  `opD` varchar(30) NOT NULL,
  `correct_option` tinyint(1) NOT NULL,
  `sub_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` bigint(80) NOT NULL,
  `studentName` varchar(80) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `rollNumber` int(80) NOT NULL,
  `sem` tinyint(80) NOT NULL,
  `divison` varchar(80) NOT NULL,
  `emailId` varchar(80) NOT NULL,
  `phoneNumber` bigint(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_information`
--

CREATE TABLE `subject_information` (
  `subject_code` smallint(3) NOT NULL,
  `subject_name` varchar(40) NOT NULL,
  `total_units` tinyint(2) NOT NULL,
  `hod_faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_info`
--

CREATE TABLE `test_info` (
  `test_id` smallint(5) NOT NULL,
  `subject_id` smallint(3) NOT NULL,
  `unit_number` tinyint(2) NOT NULL,
  `marks_per_question` tinyint(2) NOT NULL,
  `timer_need` tinyint(1) NOT NULL,
  `timer_time` time NOT NULL,
  `total_no_of_questions` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_question_relationship`
--

CREATE TABLE `test_question_relationship` (
  `relation_id` smallint(5) NOT NULL,
  `qid` int(10) NOT NULL,
  `test_id` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_information`
--
ALTER TABLE `faculty_information`
  ADD PRIMARY KEY (`professor_id`),
  ADD UNIQUE KEY `phone` (`email`),
  ADD UNIQUE KEY `email` (`phone`),
  ADD KEY `phone_2` (`email`),
  ADD KEY `email_2` (`phone`);

--
-- Indexes for table `prof_information`
--
ALTER TABLE `prof_information`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailId` (`emailId`),
  ADD UNIQUE KEY `phoneNumber` (`phoneNumber`);

--
-- Indexes for table `subject_information`
--
ALTER TABLE `subject_information`
  ADD PRIMARY KEY (`subject_code`),
  ADD UNIQUE KEY `subject_name` (`subject_name`),
  ADD UNIQUE KEY `hod_faculty_id` (`hod_faculty_id`);

--
-- Indexes for table `test_info`
--
ALTER TABLE `test_info`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `sub_code` (`subject_id`);

--
-- Indexes for table `test_question_relationship`
--
ALTER TABLE `test_question_relationship`
  ADD KEY `qid` (`qid`),
  ADD KEY `test_id` (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_information`
--
ALTER TABLE `faculty_information`
  MODIFY `professor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `prof_information`
--
ALTER TABLE `prof_information`
  MODIFY `professor_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `id` bigint(80) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test_info`
--
ALTER TABLE `test_info`
  MODIFY `test_id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject_information`
--
ALTER TABLE `subject_information`
  ADD CONSTRAINT `hod_faculty_id ` FOREIGN KEY (`hod_faculty_id`) REFERENCES `faculty_information` (`professor_id`);

--
-- Constraints for table `test_info`
--
ALTER TABLE `test_info`
  ADD CONSTRAINT `sub_code` FOREIGN KEY (`subject_id`) REFERENCES `subject_information` (`subject_code`);

--
-- Constraints for table `test_question_relationship`
--
ALTER TABLE `test_question_relationship`
  ADD CONSTRAINT `qid` FOREIGN KEY (`qid`) REFERENCES `question_bank` (`qid`),
  ADD CONSTRAINT `test_id` FOREIGN KEY (`test_id`) REFERENCES `test_info` (`test_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
