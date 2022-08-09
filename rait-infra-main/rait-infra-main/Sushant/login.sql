-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 08:28 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `allot`
--

CREATE TABLE `allot` (
  `allot` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `lid` int(11) DEFAULT NULL,
  `finallot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allot`
--

INSERT INTO `allot` (`allot`, `pid`, `lid`, `finallot`) VALUES
(1, NULL, 2, 0),
(2, NULL, 3, 0),
(3, NULL, NULL, 0),
(4, NULL, 4, 0),
(5, NULL, NULL, 0),
(6, NULL, NULL, 0),
(7, NULL, NULL, 0),
(8, NULL, 1, 0),
(9, NULL, NULL, 0),
(10, NULL, NULL, 0),
(11, 3, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `deprt`
--

CREATE TABLE `deprt` (
  `dept` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deprt`
--

INSERT INTO `deprt` (`dept`, `name`) VALUES
(1, 'IT'),
(2, 'CS'),
(3, 'EXTC'),
(4, 'Engg Sci');

-- --------------------------------------------------------

--
-- Table structure for table `infra`
--

CREATE TABLE `infra` (
  `id` int(11) NOT NULL,
  `po_no` varchar(30) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `d_config` varchar(40) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `dept` int(11) NOT NULL,
  `allot` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `srno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infra`
--

INSERT INTO `infra` (`id`, `po_no`, `d_name`, `d_config`, `tags_id`, `cost`, `dept`, `allot`, `status`, `srno`) VALUES
(15, ' ef ', 'dfwe                        ', 'sdfgwe ', 3, 34, 3, 1, 3, 'fqe '),
(16, ' hzetyuea ', 'rehay35                       ', 'zfdhy ', 2, 6550, 4, 1, 5, 'zthj '),
(17, '  hzetyuea  ', 'rehay35                       ', 'zfdhy  ', 2, 65, 4, 1, 3, 'rt  '),
(18, 'hzetyuea', 'rehay35', 'zfdhy', 2, 65, 3, 1, 3, 'zherh'),
(19, 'ey3r', 'wte42t', 'r3q5ytq3', 2, 3243, 1, 1, 2, '1222222'),
(20, 'ey3r', 'wte42t', 'r3q5ytq3', 2, 3243, 2, 1, 3, 'dfE'),
(21, 'wgtwgt', 'ewtr2q3t', 't23t52', 2, 351, 3, 1, 2, 'themain1234'),
(22, 'wgtwgt', 'ewtr2q3t', 't23t52', 2, 351, 3, 2, 2, 'themain2'),
(23, 'wgtwgt', 'ewtr2q3t', 't23t52', 2, 351, 3, 2, 2, 'themain3'),
(24, 'qFEC', 'fgawrgt', 'eargtaew', 2, 2123, 2, 1, 3, 'e1'),
(25, 'qFEC', 'fgawrgt', 'eargtaew', 2, 2123, 2, 1, 3, 'e2'),
(26, 'qFEC', 'fgawrgt', 'eargtaew', 2, 2123, 2, 1, 3, 'e3'),
(27, 'ahgwreyg', 'wrgtwrgware', 'rgw4gt3', 2, 342341, 1, 2, 3, 't1'),
(28, 'ahgwreyg', 'wrgtwrgware', 'rgw4gt3', 2, 342341, 1, 2, 3, 't1'),
(29, 'ahgwreyg', 'wrgtwrgware', 'rgw4gt3', 2, 342341, 2, 2, 3, 't2'),
(30, 'ahgwreyg', 'wrgtwrgware', 'rgw4gt3', 2, 342341, 2, 2, 3, 't3'),
(31, 'sfdvcxv ', 'zdgdfzg', 'ksnakl', 3, 5248, 3, 1, 5, '101'),
(32, 'sfdvcxv ', 'zdgdfzg', 'ksnakl', 3, 5248, 3, 1, 5, '101'),
(33, 'sfdvcxv ', 'zdgdfzg', 'ksnakl', 3, 5248, 3, 1, 5, '101'),
(34, 'sfdvcxv ', 'zdgdfzg', 'ksnakl', 3, 5248, 3, 1, 5, '101'),
(35, 'sfdvcxv ', 'zdgdfzg', 'ksnakl', 2, 5248, 3, 2, 5, '102'),
(36, 'kjchkjch', 'hjvhjC', 'nvndn', 1, 25413, 2, 2, 3, '1010'),
(37, 'kjchkjch', 'hjvhjC', 'nvndn', 2, 25413, 2, 8, 1, '1020'),
(38, 'ef ', 'dfwe                        ', 'sdfgwe ', 3, 34, 2, 2, 3, 'efgwerg 123'),
(39, ' ef ', 'dfwe                        ', 'sdfgwe ', 3, 34, 3, 1, 3, 'fqe '),
(43, 'sfdvcxv ', 'fbjsabkjb', 'sdfgwe ', 3, 58745, 3, 2, 3, 'qwerty32'),
(44, 'ef ', 'fbjsabkjb', 'smxmls', 2, 874569, 4, 8, 2, 'zxcvb1'),
(45, 'ef ', 'fbjsabkjb', 'smxmls', 2, 874569, 4, 8, 5, 'zxcvb2'),
(46, 'ef ', 'fbjsabkjb', 'smxmls', 2, 874569, 4, 8, 1, 'zxcvb3'),
(47, 'ef ', 'fbjsabkjb', 'kncaksml', 3, 52416, 4, 2, 2, 'asdfg1'),
(48, 'ef ', 'fbjsabkjb', 'kncaksml', 3, 52416, 4, 2, 2, 'asdfg2'),
(49, 'ef ', 'fbjsabkjb', 'kncaksml', 3, 52416, 4, 2, 5, 'asdfg3'),
(50, 'kjshkjsahf', 'dfwe                        ', 'ksnakl', 3, 58746, 2, 8, 6, 'poi1'),
(51, 'sfdvcxv ', 'kcldkl', 'smxmls', 1, 215551, 3, 1, 5, 'poiu1'),
(52, 'asadd', 'ajnjhjhc', 'chbcsh', 1, 54126, 3, 2, 3, 'lkjh1'),
(53, 'adjsafk', 'xvmzlfm', 'fcxn', 1, 54125, 3, 8, 1, 'hvhjgyg1'),
(54, 'adjsafk', 'xvmzlfm', 'fcxn', 1, 54125, 3, 8, 1, 'hvhjgyg2'),
(55, 'adjsafk', 'xvmzlfm', 'fcxn', 1, 54125, 3, 8, 5, 'hvhjgyg3'),
(56, 'kjshkjsahf', 'zdgdfzg', 'fcxn', 2, 54128, 3, 8, 5, '0321'),
(57, 'kjshkjsahf', 'zdgdfzg', 'fcxn', 2, 54128, 3, 1, 2, '0322'),
(58, 'kjshkjsahf', 'zdgdfzg', 'fcxn', 2, 54128, 3, 2, 6, '0323'),
(59, 'vjdfhdv', 'xvmzlfm', 'ksnakl', 3, 25410, 4, 2, 5, '09871'),
(60, 'vjdfhdv', 'xvmzlfm', 'ksnakl', 3, 25410, 4, 8, 5, '09872'),
(61, 'vjdfhdv', 'xvmzlfm', 'ksnakl', 3, 25410, 4, 2, 2, '09873'),
(62, 'vjdfhdv', 'xvmzlfm', 'ksnakl', 3, 25410, 4, 2, 6, '09874'),
(63, 'vjdfhdv', 'xvmzlfm', 'ksnakl', 3, 25410, 4, 2, 1, '09875'),
(64, 'adjsafk', 'xvmzlfm', 'dvdvd', 2, 5412, 2, 1, 5, '023'),
(65, 'adjsafk', 'xvmzlfm', 'dvdvd', 2, 5412, 2, 4, 1, '021'),
(66, 'sfdvcxv ', 'zdgdfzg', 'sdfgwe ', 1, 52014795, 3, 11, 3, 'cv45281'),
(67, 'sfdvcxv ', 'zdgdfzg', 'sdfgwe ', 1, 52014795, 3, 11, 3, 'cv45282'),
(68, 'sfdvcxv ', 'zdgdfzg', 'sdfgwe ', 1, 52014795, 3, 11, 3, 'cv45283'),
(69, 'sfdvcxv ', 'zdgdfzg', 'sdfgwe ', 1, 52014795, 3, 11, 3, 'cv45284');

-- --------------------------------------------------------

--
-- Table structure for table `istatus`
--

CREATE TABLE `istatus` (
  `status` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `istatus`
--

INSERT INTO `istatus` (`status`, `name`) VALUES
(1, 'scrapped'),
(2, 'in-use'),
(3, 'donated'),
(5, 'reserved'),
(6, 'lost');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lid` int(11) NOT NULL,
  `lab` varchar(20) NOT NULL,
  `floor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `lab`, `floor`) VALUES
(1, '501B', '5'),
(2, '513A', '5'),
(3, '415A', '4'),
(4, '416A', '4');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `pid` int(11) NOT NULL,
  `srn_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`pid`, `srn_no`) VALUES
(1, '1234rt12'),
(4, 'user12hu'),
(3, 'user12rt'),
(2, 'wer2234r');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` char(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `srn_no` varchar(10) NOT NULL,
  `design` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`, `srn_no`, `design`) VALUES
('shubham', 'shubham30@gmail.com', 'shubham123', '1234rt12', ''),
('admin', 'admin@gmail.com', '12345', '19CE12345', ''),
('us12', 'us12@gmail.com', 'us123', 'us1234', ''),
('user2', 'user22gm.com', 'user12', 'user12hu', ''),
('user1', 'user1@gm.com', 'user123', 'user12rt', ''),
('user3', 'user3@gm.com', 'user123', 'usr24nd', ''),
('dikshant', 'dikshant@gmail.com', 'dikshant12', 'wer2234r', '');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tags_id` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tags_id`, `tname`) VALUES
(1, 'hardware'),
(2, 'software'),
(3, 'network device');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allot`
--
ALTER TABLE `allot`
  ADD PRIMARY KEY (`allot`),
  ADD KEY `lid` (`lid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `deprt`
--
ALTER TABLE `deprt`
  ADD PRIMARY KEY (`dept`);

--
-- Indexes for table `infra`
--
ALTER TABLE `infra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tags_id` (`tags_id`),
  ADD KEY `dept` (`dept`),
  ADD KEY `status` (`status`),
  ADD KEY `allot` (`allot`);

--
-- Indexes for table `istatus`
--
ALTER TABLE `istatus`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `srn_no` (`srn_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`srn_no`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tags_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allot`
--
ALTER TABLE `allot`
  MODIFY `allot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deprt`
--
ALTER TABLE `deprt`
  MODIFY `dept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infra`
--
ALTER TABLE `infra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `istatus`
--
ALTER TABLE `istatus`
  MODIFY `status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tags_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `allot`
--
ALTER TABLE `allot`
  ADD CONSTRAINT `allot_ibfk_1` FOREIGN KEY (`lid`) REFERENCES `location` (`lid`),
  ADD CONSTRAINT `allot_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `person` (`pid`);

--
-- Constraints for table `infra`
--
ALTER TABLE `infra`
  ADD CONSTRAINT `infra_ibfk_1` FOREIGN KEY (`tags_id`) REFERENCES `tags` (`tags_id`),
  ADD CONSTRAINT `infra_ibfk_2` FOREIGN KEY (`dept`) REFERENCES `deprt` (`dept`),
  ADD CONSTRAINT `infra_ibfk_3` FOREIGN KEY (`status`) REFERENCES `istatus` (`status`),
  ADD CONSTRAINT `infra_ibfk_4` FOREIGN KEY (`allot`) REFERENCES `allot` (`allot`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`srn_no`) REFERENCES `register` (`srn_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
