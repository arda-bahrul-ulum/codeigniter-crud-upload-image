-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 05:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` text NOT NULL,
  `religion` tinyint(4) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `img_upload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `username`, `password`, `fullname`, `gender`, `address`, `religion`, `is_active`, `img_upload`) VALUES
(9, 'asd', 'ad', 'asd', 'L', 'd', 1, 1, 'd0890df8d66ca1b72b0c6be3cafcc36c.jpg'),
(10, 'asd', 'asd', 'asd', 'L', 'asdasd', 2, 1, '7cda5aad0731cca0fdaca03e5e68073a.jpg'),
(11, 'asd', 'asd', 'asd', 'L', 'asd', 1, 1, 'aca2f3651501acd7f819c8691cec556c.jpg'),
(12, 'asd', 'ad', 'arda bahrul ulum', 'L', 'sdad', 1, 1, 'ae8efd817fbc231000d03693134854ad.jpg'),
(14, 'arda', 'big bos', 'arda bahrul ulu', 'L', 'sdasd', 1, 1, '7e80c1a11f31c94f40e75192fde89bc7.jpg'),
(16, 'asd', 'asd', 'asd', 'L', 'asd', 1, 1, '3abe72edac7d182edfd9ee1049634b8c.jpg'),
(17, 'asd', 'asd', 'asd', 'L', 'sd', 1, 1, '898a805331f9505cb7db76a4f67c28b9.jpg'),
(18, 'sd', 'asd', 'asd', 'L', 'asd', 2, 1, '749e45f8504e4e0390ce40acd85b16c2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
