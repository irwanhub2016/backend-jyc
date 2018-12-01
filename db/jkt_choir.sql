-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 02:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jkt_choir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
('sadmin-1', 'admin', 'jktchoir2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `no` int(11) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `deskripsi_kegiatan` text,
  `foto_kegiatan` varchar(30) DEFAULT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `tanggal_kegiatan` varchar(20) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `no` int(11) NOT NULL,
  `judul_informasi` int(11) NOT NULL,
  `deskripsi_informasi` int(11) NOT NULL,
  `tanggal_informasi` int(11) NOT NULL,
  `nama_pengirim` int(11) NOT NULL,
  `email_pengirim` int(11) DEFAULT NULL,
  `no_hp_pengirim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengurus`
--

CREATE TABLE `tbl_pengurus` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` int(11) DEFAULT NULL,
  `foto` int(11) DEFAULT NULL,
  `divisi` int(11) DEFAULT NULL,
  `jabatan` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengurus`
--
ALTER TABLE `tbl_pengurus`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
