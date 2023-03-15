-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 10:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil_tabungan`
--

CREATE TABLE `ambil_tabungan` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `jml_ambil` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambil_tabungan`
--

INSERT INTO `ambil_tabungan` (`username`, `nama`, `tgl_ambil`, `jml_ambil`) VALUES
('wdnwjknd', 'Shakila', '1970-01-01', 10000),
('wdnwjknd', 'Shakila', '1970-01-01', 235),
('member01', 'Shakila Aulia', '1970-01-01', 500000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia Nurrul', '1970-01-01', 30000),
('member01', 'Shakila Aulia', '1970-01-01', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`username`, `nama`, `tgl_bayar`, `jml_bayar`) VALUES
('wdnwjknd', 'Shakila', '1970-01-01', 1000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '1970-01-01', 80000),
('member01', 'Shakila Aulia', '1970-01-01', 100000),
('member01', 'Shakila Aulia', '1970-01-01', 50000),
('member01', 'Shakila Aulia', '1970-01-01', 5000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '1970-01-01', 5000),
('member01', 'Shakila Aulia', '1970-01-01', 5000),
('member01', 'Shakila Aulia Nurrul', '1970-01-01', 5000),
('member01', 'Shakila Aulia Nurrul', '1970-01-01', 5000),
('member01', 'Shakila Aulia', '1970-01-01', 5000),
('member01', 'Shakila Aulia', '1970-01-01', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `nama`, `password`, `hak_akses`) VALUES
('admin', 'admin', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` int(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `tabungan` varchar(20) NOT NULL,
  `pinjaman` varchar(20) NOT NULL,
  `profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`username`, `password`, `nama`, `nik`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `email`, `no_hp`, `tabungan`, `pinjaman`, `profil`) VALUES
('member01', 'shakila', 'Shakila Aulia', 12345, '2005-11-24', 'Perempuan', 'Pelajar', 'Jln Baros Pasar No 55', 'shakila_aulia242@gmail.com', '089386448', '20000', '0', 'avatar (2).png'),
('member02', 'yulicantik', 'Yuli Khoirul', 12345, '2005-07-06', 'Perempuan', 'Pelajar', 'Cibeber', 'yuli@gmail.com', '0812345', '', '', 'avatar (2).png'),
('member03', 'lutfiya', 'Lutfiya Maisa', 12345, '2006-05-09', 'Perempuan', 'Pelajar', 'Batu Jajar', 'lutfiya@gmail.com', '0812345', '', '', 'avatar (3).png'),
('member04', 'vaa', 'Via Aulia', 12345, '2006-01-17', 'Perempuan', 'Pelajar', 'Padalarang City', 'via@gmail.com', '0812345', '', '', 'avatar (5).png'),
('member05', 'asep', 'Asep', 12345, '2000-01-01', 'Laki-Laki', 'Pegawai Swasta', 'Baros Depan', 'asep@gmail.com', '0812345', '', '', 'avatar (8).png'),
('member06', 'dgbt', 'Kipli', 12345, '2022-11-16', 'Perempuan', 'Pelajar', 'Cisepan', 'Kipli@gmail.com', '0812345', '', '', 'avatar (9).png'),
('member07', 'VGF', 'Maisaroh', 12345, '2020-03-19', 'Perempuan', 'Petani', 'Subang', 'maisaroh@gmail.com', '0812345', '', '', 'avatar (8).png'),
('member08', 'rgreh', 'Ujang', 12345, '2016-07-28', 'Perempuan', 'Youtuber', 'Cisarua', 'Ujang@gmail.com', '0812345', '', '', 'avatar (5).png'),
('member09', 'cdvfjrh', 'Salwa Aprllia', 12345, '2009-04-06', 'Perempuan', 'Pelajar', 'Baros Pasar', 'salwa@gmail.com', '0812345', '', '', 'avatar (6).png'),
('member10', 'cdsrg', 'Azriel', 12345, '2010-01-16', 'Laki-Laki', 'Pelajar', 'Mekarsari', 'azriel@gmail.com', '0812345', '', '', 'avatar (6).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjaman`
--

CREATE TABLE `tbl_pinjaman` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_transaksi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pinjaman`
--

INSERT INTO `tbl_pinjaman` (`username`, `nama`, `tgl_transaksi`, `jml_transaksi`) VALUES
('wdnwjknd', 'Shakila', '1970-01-01', 20000),
('member01', 'Shakila Aulia', '2022-11-03', 100000),
('member01', 'Shakila Aulia', '1970-01-01', 100000),
('member01', 'Shakila Aulia', '1970-01-01', 50000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '1970-01-01', 5000),
('member01', 'Shakila Aulia', '1970-01-01', 10000),
('member01', 'Shakila Aulia Nurrul', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '1970-01-01', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tabungan`
--

CREATE TABLE `tbl_tabungan` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_tabungan` date NOT NULL,
  `jml_tabungan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tabungan`
--

INSERT INTO `tbl_tabungan` (`username`, `nama`, `tgl_tabungan`, `jml_tabungan`) VALUES
('wdnwjknd', 'Shakila', '1970-01-01', 235),
('wdnwjknd', 'Shakila', '1970-01-01', 10000),
('wdnwjknd', 'Shakila', '1970-01-01', 100000),
('member01', 'Shakila Aulia', '1970-01-01', 20000),
('member01', 'Shakila Aulia', '1970-01-01', 48000),
('member01', 'Shakila Aulia', '1970-01-01', 432000),
('member01', 'Shakila Aulia', '2022-11-01', 50000),
('member01', 'Shakila Aulia Nurrul', '1970-01-01', 10000),
('member01', 'Shakila Aulia', '2022-11-02', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
