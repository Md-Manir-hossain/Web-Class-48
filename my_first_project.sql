-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2025 at 01:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_first_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_of_students`
--

CREATE TABLE `list_of_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Role` varchar(191) NOT NULL,
  `Class` varchar(191) NOT NULL,
  `Phone` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_of_students`
--

INSERT INTO `list_of_students` (`id`, `Name`, `Role`, `Class`, `Phone`, `Email`, `Address`) VALUES
(1, 'Md. Manir Hossain ', '1', 'Ten (10)', '01745-152136', 'mdmanirhossainlo2022@gmail.com', 'Nabinagar West para, Fatehpur Road, Nabinagar, Brahmanbaria.'),
(3, 'Parvez Miah', '3', 'Eight (8)', '01852-152635', 'mdparvez@gamil.com', 'Rangpur Sadar, Rangpur.'),
(4, 'Md. Saiful Islam', '4', '10 (Ten)', '01982-254963', 'mdsaifulislam@gmail.com', 'Burichang Sadar, Cumilla.'),
(5, 'Md. Momen Miah', '6', '6 (Six)', '01562-562365', 'mdmomenmiah@gmail.com', 'Narasinghpur, Nabinagar, Brahmanbaria.');

-- --------------------------------------------------------

--
-- Table structure for table `list_of_teachers`
--

CREATE TABLE `list_of_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(191) NOT NULL,
  `Designation` varchar(191) NOT NULL,
  `Phone` varchar(191) NOT NULL,
  `Email` varchar(191) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `list_of_teachers`
--

INSERT INTO `list_of_teachers` (`id`, `Name`, `Designation`, `Phone`, `Email`, `Address`) VALUES
(1, 'Md. Iqbal Hossain (Economics)', 'Blank', '01562-235698', 'iqbalhossain@gmail.com', 'Naraynpur, Nabinagar, Brahmanbaria.'),
(2, 'Md. Mustofa Chaudhary (Political Science)', 'Blank', '01856-256325', 'mustofamiah@gmail.com', 'Rangpur City Bazar, Rangpur, Bangladesh.'),
(3, 'Mst. Razia Banu (Chemistry)', 'Blank', '01852-263256', 'raziabanu@gmail.com', 'Mohammadpur, Dhaka, Bangladesh.'),
(4, 'Mst. Anwara Begum (English)', 'Blank', '01452-263589', 'anwarabegum@gmail.com', 'Anwara, Chattagram, Dhaka, Bangladesh.'),
(5, 'Mustafizur Rahman', 'Assistant Teacher', '01952-123654', 'mustafizurrahman@gamil.com', 'Dhanmondi, Dhaka, Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_of_students`
--
ALTER TABLE `list_of_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_of_teachers`
--
ALTER TABLE `list_of_teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_of_students`
--
ALTER TABLE `list_of_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `list_of_teachers`
--
ALTER TABLE `list_of_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
