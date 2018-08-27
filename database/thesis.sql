-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 09:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `position` text NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `name`, `username`, `password`, `position`, `photo`) VALUES
(17, 'admin', 'admin', 'admin', 'MasterAdmin', 'upload/Linux Ubuntu Wallpaper.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stdevice`
--

CREATE TABLE `stdevice` (
  `id` int(11) NOT NULL,
  `kode` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `gedung` text NOT NULL,
  `lantai` int(11) NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` text NOT NULL,
  `merk` text NOT NULL,
  `vol` int(50) NOT NULL,
  `kondisi` text NOT NULL,
  `spec` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdevice`
--

INSERT INTO `stdevice` (`id`, `kode`, `tanggal`, `gedung`, `lantai`, `ruangan`, `nama_barang`, `jenis_barang`, `merk`, `vol`, `kondisi`, `spec`, `keterangan`) VALUES
(8, 9008, '2018-08-30', 'room 1', 2, 'mawar', 'Batu', 'NonElektronik', 'Asus', 1, 'Good', 'good', 'keras'),
(9, 12, '2018-08-30', 'room 1', 4, 'mawar', 'Airasia', 'Elektronik', 'lama', 9, 'Broken', 'good', '.....'),
(10, 9008, '2018-08-25', 'room 1', 2, 'mawari', 'OASIS', 'Elektronik', 'Asus', 10, 'Repair', 'good', 'GG ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
