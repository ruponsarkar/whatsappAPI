-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 06:52 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whatsappapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alldatas`
--

CREATE TABLE `alldatas` (
  `id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alldatas`
--

INSERT INTO `alldatas` (`id`, `msg`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Testing From Rupon', '919707132913', '2022-05-31 17:58:05', '2022-05-31 17:58:05'),
(2, 'Hey Sofi This is from inbuild Whatsapp API', '919613272832', '2022-06-01 04:49:41', '2022-06-01 04:49:41'),
(3, 'Hey Brojen da This is from inbuild Whatsapp API', '918011528035', '2022-06-01 04:50:24', '2022-06-01 04:50:24'),
(4, 'Hey Brojen Da', '919127335540', '2022-06-01 04:51:16', '2022-06-01 04:51:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alldatas`
--
ALTER TABLE `alldatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alldatas`
--
ALTER TABLE `alldatas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
