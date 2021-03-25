-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2021 at 12:51 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khidaeng_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_tqr`
--

CREATE TABLE `c_tqr` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_qr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sid` int(11) NOT NULL,
  `c_time` datetime NOT NULL,
  `member_id` int(10) NOT NULL,
  `c_dev` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `c_tqr`
--

INSERT INTO `c_tqr` (`c_id`, `c_name`, `c_qr`, `sid`, `c_time`, `member_id`, `c_dev`) VALUES
(1, 'กนก', 'เอกสารA', 2, '2021-03-18 05:00:00', 0, ''),
(2, 'กนก', 'เอกสารB', 2, '2021-03-17 00:00:00', 0, ''),
(3, 'กนก', 'เอกสารC', 1, '2021-03-09 02:30:25', 0, ''),
(4, 'กนก', 'เอกสารD', 1, '2021-03-12 03:00:00', 0, ''),
(7, 'กนก มีเทียน', 'เอกสารเกี่ยวกับงบประมาณ2561', 1, '0000-00-00 00:00:00', 0, ''),
(8, 'กนก มีเทียน', 'เอกสารเกี่ยวกับงบประมาณ2561', 1, '0000-00-00 00:00:00', 0, ''),
(9, 'กนก มีเทียน', 'เอกสารเกี่ยวกับงบประมาณ2561', 1, '0000-00-00 00:00:00', 0, ''),
(10, 'กนก มีเทียน', 'เอกสารเกี่ยวกับงบประมาณ2563', 1, '0000-00-00 00:00:00', 0, ''),
(11, 'กนก มีเทียน', 'ฉบับกนก', 1, '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail`
--

CREATE TABLE `doc_detail` (
  `doc_id` int(10) NOT NULL,
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_detail`
--

INSERT INTO `doc_detail` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(101, 'การสร้างสรรค์ของพนักงาน', 'บริหาร', 'ชวน ชำนาญพรม', '2020-11-04 11:30:00', '104'),
(102, 'วิเคราะห์การอ่านหนังสือ', 'การเงิน', 'ธรัช นฤภรไพศาล', '2020-11-04 04:51:34', '101'),
(103, 'วิธีหาสินเชื่อ', 'การเงิน', 'นายกิตติศักดิ์', '2020-11-04 04:51:34', '101'),
(104, 'Start Learning!!', 'การเงิน', 'โรแกน เรกินะ', '2020-11-04 04:52:17', '101'),
(105, 'Evolution ระบบเศรษฐกิจ', 'การตลาด', 'ชาคริต หอนอก', '2020-11-04 04:52:17', '102'),
(106, 'ลักษณะบัญชีแยกประเภท', 'บัญชี', 'มาริโอ เมาแล้ว', '2020-11-04 04:56:07', '103'),
(107, 'บริหารคนยุคใหม่', 'บริหาร', 'นเดช แดงเดือด', '2020-11-04 04:56:07', '104'),
(108, 'ปัจจัยด้านความเกงกำไรด้านการตลาด', 'การตลาด', 'ชนัญญู นะวะโคกศรี', '2020-11-04 04:57:06', '102'),
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2020-11-04 04:57:06', '103');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail101`
--

CREATE TABLE `doc_detail101` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail101`
--

INSERT INTO `doc_detail101` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(102, 'วิเคราะห์การอ่านหนังสือ', 'การเงิน', 'ธรัช นฤภรไพศาล', '2020-11-04 04:51:34', '101'),
(103, 'วิธีหาสินเชื่อ', 'การเงิน', 'นายกิตติศักดิ์', '2020-11-04 04:51:34', '101'),
(104, 'Start Learning!!', 'การเงิน', 'โรแกน เรกินะ', '2020-11-04 04:52:17', '101'),
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2020-11-04 04:57:06', '103');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail102`
--

CREATE TABLE `doc_detail102` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail102`
--

INSERT INTO `doc_detail102` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(105, 'Evolution ระบบเศรษฐกิจ', 'การตลาด', 'ชาคริต หอนอก', '2020-11-04 04:52:17', '102'),
(108, 'ปัจจัยด้านความเกงกำไรด้านการตลาด', 'การตลาด', 'ชนัญญู นะวะโคกศรี', '2020-11-04 04:57:06', '102');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail103`
--

CREATE TABLE `doc_detail103` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail103`
--

INSERT INTO `doc_detail103` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(106, 'ลักษณะบัญชแยกประเภท', 'บัญชี', 'มาริโอ เมาแล้ว', '2020-11-04 04:56:07', '103');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail104`
--

CREATE TABLE `doc_detail104` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail104`
--

INSERT INTO `doc_detail104` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(101, 'การสร้างสรรค์ของพนักงาน', 'บริหาร', 'ชวน ชำนาญพรม', '2020-11-04 11:30:00', '104'),
(107, 'บริหารคนยุคใหม่', 'บริหาร', 'นเดช แดงเดือด', '2020-11-04 04:56:07', '104');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail105`
--

CREATE TABLE `doc_detail105` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail105`
--

INSERT INTO `doc_detail105` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(102, 'วิเคราะห์การอ่านหนังสือ', 'การเงิน', 'ธรัช นฤภรไพศาล', '2020-11-04 04:51:34', '101'),
(103, 'วิธีหาสินเชื่อ', 'การเงิน', 'นายกิตติศักดิ์', '2020-11-04 04:51:34', '101'),
(104, 'Start Learning!!', 'การเงิน', 'โรแกน เรกินะ', '2020-11-04 04:52:17', '101'),
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2020-11-04 04:57:06', '103');

-- --------------------------------------------------------

--
-- Table structure for table `doc_detail106`
--

CREATE TABLE `doc_detail106` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL,
  `doc_namee` varchar(5) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_detail106`
--

INSERT INTO `doc_detail106` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`, `doc_namee`) VALUES
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2020-11-04 04:57:06', '103');

-- --------------------------------------------------------

--
-- Table structure for table `doc_scan`
--

CREATE TABLE `doc_scan` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doc_scan`
--

INSERT INTO `doc_scan` (`doc_id`, `doc_name`, `dpm_name`, `doc_c_name`, `doc_date_time`) VALUES
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2021-02-02 23:00:00'),
(109, 'งบประมาณปี2020', 'การเงิน', 'ธรัช นฤภรไพศาล', '2021-02-02 23:02:00'),
(109, 'งบประมาณปี2020', 'การเงิน', 'กนก มีเทียน', '2021-02-02 23:21:00'),
(109, 'งบประมาณปี2020', 'การเงิน', 'ธรัช นฤภรไพศาล', '2021-02-03 00:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `doc_scan2`
--

CREATE TABLE `doc_scan2` (
  `doc_id` int(10) NOT NULL DEFAULT '0',
  `doc_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `dpm_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_c_name` varchar(255) CHARACTER SET tis620 COLLATE tis620_thai_ci NOT NULL,
  `doc_date_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `member_id` int(10) NOT NULL COMMENT 'ไอดีสมาชิก',
  `member_username` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อผู้ใช้',
  `member_password` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'รหัสผ่าน',
  `member_name` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อ - นามสกุล',
  `member_level` enum('member','admin') CHARACTER SET utf8 NOT NULL DEFAULT 'member' COMMENT 'ระดับผู้ใช้',
  `member_Dev` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`member_id`, `member_username`, `member_password`, `member_name`, `member_level`, `member_Dev`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'กนก มีเทียน', 'admin', 'การตลาด'),
(2, 'user', '81dc9bdb52d04dc20036dbd8313ed055', 'กนก มีเทียน', 'member', 'การเงิน'),
(4, 'user123', 'e10adc3949ba59abbe56e057f20f883e', 'ธรัช นฤภรไพศาล', 'member', 'การเงิน'),
(5, 'admin1', '81dc9bdb52d04dc20036dbd8313ed055', 'ธรัชนฤภร ไพศาล', 'admin', 'คอมพิวเตอร์ธุรกิจ'),
(6, 'kwang', '1234', 'kwang', 'member', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_tqr`
--
ALTER TABLE `c_tqr`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doc_detail`
--
ALTER TABLE `doc_detail`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_tqr`
--
ALTER TABLE `c_tqr`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doc_detail`
--
ALTER TABLE `doc_detail`
  MODIFY `doc_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีสมาชิก', AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
