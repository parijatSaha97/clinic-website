-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 04:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinical_db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_lists`
--

CREATE TABLE `doctor_lists` (
  `id` int(10) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `experience` int(10) NOT NULL,
  `department` varchar(200) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_lists`
--

INSERT INTO `doctor_lists` (`id`, `doctor_name`, `experience`, `department`, `description`, `image`, `department_id`) VALUES
(1, 'DR.SAYAN BOSE', 10, 'CHILD SPECIALIST', 'MD(PAED.) M.R.C.P.C.H.I ,,II(U.K)', '', '10'),
(2, 'DR. SUJOY MAITRA', 15, 'PEDIATRIC SURGEON', 'MS,DNB, MCH, MRCS (ENG) FMAS (Pediatric Surgeon) Assistant Prof. Medical College', '', '12'),
(3, 'PROF. (DR.) AMAL KUMAR KHAN', 20, 'CARDIOLOGIST(INTERVENTIONAL)', 'MD (MED), DM (CARDIO), Ex- SSKM Hospital', '', '21'),
(4, 'DR. PRADIP SAHA', 13, 'CARDIOLOGIST(INTERVENTIONAL)', 'MD (MED), DM (CARDIO), R.G Kar Hospital', '', '21'),
(5, 'DR. ANINDAYA SARKAR', 17, 'CARDIOLOGIST(INTERVENTIONAL)', 'MD,DM (CARDIO),MRCP (II) (Uk),SSKM Hosp.', '', '21'),
(6, 'PROF. (DR.) H. S. PATHAK', 18, 'PHYSICIAN & CARDIOLOGIST', 'MD(MED), JNM Hospital (Kalyani)', '', '2'),
(7, 'PROF. (DR.) JYOTIRMOY PAL', 24, 'PHYSICIAN & CARDIOLOGIST', 'MD,FICP,FACP, FRCP,R G Kar Medical College', '', '2'),
(8, 'DR. R. N. MAITY', 23, 'PHYSICIAN & CARDIOLOGIST', 'MD (MED), EX-Gandhi Hospital', '', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_lists`
--
ALTER TABLE `doctor_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_lists`
--
ALTER TABLE `doctor_lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
