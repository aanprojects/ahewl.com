-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2020 at 04:32 PM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.17-1+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahew`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(10) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_logo` varchar(250) NOT NULL,
  `c_description` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `c_name`, `c_logo`, `c_description`, `created_at`, `updated_at`) VALUES
(7, 'fffff', '47157_1579541788.png', 'fffff', '2020-01-20 05:36:28', '2020-01-20 05:36:28'),
(8, 'ssss', 'Bangladesh_1580230083.png', 'sssss', '2020-01-28 04:48:03', '2020-01-28 04:48:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipmentlist`
--

CREATE TABLE `tbl_equipmentlist` (
  `id` int(10) NOT NULL,
  `equip_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipmentlist`
--

INSERT INTO `tbl_equipmentlist` (`id`, `equip_name`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Welding Machine (AC DC)', 40, '2020-02-01 00:00:00', '2020-02-01 00:00:00'),
(2, 'Road Cutter', 4, '2020-02-01 00:00:00', '2020-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manpowerlist`
--

CREATE TABLE `tbl_manpowerlist` (
  `id` int(10) NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_manpowerlist`
--

INSERT INTO `tbl_manpowerlist` (`id`, `designation`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'B.Sc Engineer (Civil)', 4, '2020-02-01 00:00:00', '2020-02-01 00:00:00'),
(2, 'B.Sc Engineer (Mechanical)', 3, '2020-02-01 00:00:00', '2020-02-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner`
--

CREATE TABLE `tbl_owner` (
  `id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cellno` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `job_description1` varchar(500) NOT NULL,
  `job_description2` varchar(500) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`id`, `name`, `address`, `cellno`, `email`, `job_description1`, `job_description2`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Al-Amin Hashemi Engineering Works Ltd.', 'Munsi Mansion A-1,3712/B, Oxygen R/A', '01927384284', 'alaminworks@gmail.com', 'Engineering and construction leader', NULL, 1, '2020-02-01 04:07:44', '2020-02-01 04:07:44'),
(29, 'dsgsg', 'dsfsfaf', 'xcxbxvbxvbf', 'fsdg@dfgfsdg.fghd', 'gsgsdgs and xxxxxxxxxxxxxx', NULL, 0, '2020-01-31 10:08:12', '2020-01-31 13:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `id` int(10) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_contract_ref` varchar(200) NOT NULL,
  `p_dateofcontract` date NOT NULL,
  `p_nameofwork` varchar(200) NOT NULL,
  `p_contract_value` float NOT NULL,
  `fk_cid` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `p_name`, `p_contract_ref`, `p_dateofcontract`, `p_nameofwork`, `p_contract_value`, `fk_cid`, `created_at`, `updated_at`) VALUES
(1, 'Marubeni 1', '33444-ddss-xs', '2020-01-22', 'Construction', 6549800, 7, '2020-01-22 04:45:29', '2020-01-22 04:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects_image`
--

CREATE TABLE `tbl_projects_image` (
  `id` int(10) NOT NULL,
  `img_title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_projects_image`
--

INSERT INTO `tbl_projects_image` (`id`, `img_title`, `img_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'this has been changed this has been changed  this has been changed  this has been changed', 'man2_1580573768.png', 0, '2020-02-01 04:16:08', '2020-02-01 04:16:08'),
(3, 'xyx xyxz this has been changed', 'img_avatar3_1580478615.png', 1, '2020-01-31 01:50:15', '2020-01-31 01:50:15'),
(4, 'aaaaaaaaaaaa ffffffffffffffffffffff', 'man1_1580573783.png', 0, '2020-02-01 04:16:23', '2020-02-01 04:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_works`
--

CREATE TABLE `tbl_project_works` (
  `id` int(10) NOT NULL,
  `work_category` varchar(200) NOT NULL,
  `work_title` varchar(200) NOT NULL,
  `work_description` varchar(1500) DEFAULT NULL,
  `work_img` varchar(200) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project_works`
--

INSERT INTO `tbl_project_works` (`id`, `work_category`, `work_title`, `work_description`, `work_img`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Engineerig', 'Isolux Corsan', 'jfsdljdldjflsdfhl jdshfjdadsfhjasdfhj\r\nafjladfjjafh\r\nfjfhlajdfhljafhl xxxxxxx', 'sc_1580402508.png', 1, '2020-01-31 01:07:11', '2020-01-31 01:07:11'),
(3, 'Construction and enginerring', 'Marubeni', 'dfsdfsdfsdddddddxxxxxxxxxxxxxxxx', 'img_avatar3_1580463550.png', 0, '2020-01-31 09:39:10', '2020-01-31 09:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(10) NOT NULL,
  `member_name` varchar(200) NOT NULL,
  `member_title` varchar(100) NOT NULL,
  `member_img` varchar(150) NOT NULL,
  `messages` varchar(1500) NOT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id`, `member_name`, `member_title`, `member_img`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(6, 'sfdf', 'dsfdsf', 'uka_1580367025.png', 'dsfsdf', 1, '2020-01-30 06:50:25', '2020-01-30 11:36:18'),
(7, 'sdsdasd', 'adasda', 'img_avatar3_1580367139.png', 'sdadasdasd', 0, '2020-01-30 06:52:19', '2020-01-30 11:06:21'),
(8, 'jdhfsjkdfhs', 'sjfbsdjbfsjdbfsjdfsj', 'sc_1580369905.png', 'nsdfbsdjkbfsds dcsd', 1, '2020-01-30 07:38:25', '2020-01-30 10:45:03'),
(9, 'kkjjj', 'ijiijkj', 'img_avatar3_1580381169.png', 'hhghg', 0, '2020-01-30 10:46:09', '2020-01-30 10:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_equipmentlist`
--
ALTER TABLE `tbl_equipmentlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manpowerlist`
--
ALTER TABLE `tbl_manpowerlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cid` (`fk_cid`);

--
-- Indexes for table `tbl_projects_image`
--
ALTER TABLE `tbl_projects_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_works`
--
ALTER TABLE `tbl_project_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_equipmentlist`
--
ALTER TABLE `tbl_equipmentlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_manpowerlist`
--
ALTER TABLE `tbl_manpowerlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_projects_image`
--
ALTER TABLE `tbl_projects_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_project_works`
--
ALTER TABLE `tbl_project_works`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
