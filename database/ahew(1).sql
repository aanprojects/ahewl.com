-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2020 at 05:56 PM
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
(6, 'ddd', '220px-Department_of_Prison_Logo_1579539920.png', 'dddd', '2020-01-20 05:05:20', '2020-01-20 05:05:20'),
(7, 'fffff', '47157_1579541788.png', 'fffff', '2020-01-20 05:36:28', '2020-01-20 05:36:28');

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_owner`
--

INSERT INTO `tbl_owner` (`id`, `name`, `address`, `cellno`, `email`, `job_description1`, `job_description2`, `created_at`, `updated_at`) VALUES
(1, 'Al Amin Hashemi Engineering Works', 'Munshi Mansion,A1, 3712/B,Oxygen R/A', '+8801831315556', 'alaminworks@gmail.com', 'We\'re leading industry of Engineering and Construction', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'My Company', '123 Street Road', '1234567890', 'xxx@gmail.com', 'wsdsd', NULL, '2020-01-19 05:03:10', '2020-01-19 05:03:10'),
(25, 'My Company', '123 Street Road', '1234567890', 'xxx@gmail.com', 'wsdsd', NULL, '2020-01-19 05:03:13', '2020-01-19 05:03:13'),
(26, 'My Company', '123 Street Road', '1234567890', 'xxx@gmail.com', 'wsdsd', NULL, '2020-01-19 05:03:15', '2020-01-19 05:03:15'),
(27, 'My Company', '123 Street Road', '1234567890', 'xxx@gmail.com', 'wsdsd', NULL, '2020-01-19 05:03:17', '2020-01-19 05:03:17'),
(28, 'My Company', '123 Street Road', '1234567890', 'xxx@gmail.com', 'wsdsd', NULL, '2020-01-19 05:03:20', '2020-01-19 05:03:20');

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
  `fk_cid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_works`
--

CREATE TABLE `tbl_project_works` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `work_description` varchar(200) NOT NULL,
  `work_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(10) NOT NULL,
  `member_name` varchar(200) NOT NULL,
  `member_title` varchar(100) NOT NULL,
  `member_img` varchar(150) NOT NULL,
  `messages` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_owner`
--
ALTER TABLE `tbl_owner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
