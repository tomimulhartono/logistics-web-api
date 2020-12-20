-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 06:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengiriman`
--

CREATE TABLE `jadwal_pengiriman` (
  `id_jadwal` varchar(15) NOT NULL,
  `id_pengiriman` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pengiriman`
--

INSERT INTO `jadwal_pengiriman` (`id_jadwal`, `id_pengiriman`, `tanggal`, `nama_pengirim`, `alamat`, `nama_penerima`) VALUES
('SCH001', 'SND001', '2020-11-11', 'Samsung', 'Jl. Ngurah Rai No. 64', 'Priyanka'),
('SCH002', 'SND002', '2020-11-28', 'Apple', 'Jl. Lautze dalam No.222', 'Jesika'),
('SCH003', 'SND003', '2020-11-28', '3SecondStore', 'Jl. Menteng dalam No.219', 'Fakhri'),
('SCH004', 'SND004', '2020-11-29', 'Levi\'s Store', 'Jl. Tebet raya No.192', 'Budi'),
('SCH005', 'SND005', '2020-11-29', 'Asus Store', 'Jl. H. Umar No.33', 'Adhi');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman_barang`
--

CREATE TABLE `pengiriman_barang` (
  `id_pengiriman` varchar(15) NOT NULL,
  `jenis_pengiriman` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `berat_barang` int(10) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman_barang`
--

INSERT INTO `pengiriman_barang` (`id_pengiriman`, `jenis_pengiriman`, `nama_barang`, `berat_barang`, `jenis_barang`, `tujuan`) VALUES
('SND001', 'REG', 'Galaxy S20', 2, 'Smartphone', 'Bali'),
('SND002', 'FAST', 'Iphone SE2020', 2, 'Smartphone', 'Jakarta'),
('SND003', 'REG', '3Second', 1, 'Pakaian', 'Jakarta'),
('SND004', 'REG', 'Levi\'s', 1, 'Pakaian', 'Jakarta'),
('SND005', 'FAST', 'Asus Vivobook', 7, 'Laptop', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `no_awb` varchar(50) NOT NULL,
  `service` varchar(10) NOT NULL,
  `date_of_shipment` date NOT NULL,
  `origin` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `shipper` varchar(50) NOT NULL,
  `consignee` varchar(100) NOT NULL,
  `time_track` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`no_awb`, `service`, `date_of_shipment`, `origin`, `destination`, `shipper`, `consignee`, `time_track`, `position`, `status`) VALUES
('RES001', 'REG', '2020-11-11', 'Jakarta', 'Bali', 'Samsung', 'Priyanka', '2020-11-17', 'Bali', 'Delivered'),
('RES002', 'FAST', '2020-11-28', 'Bandung', 'Jakarta', 'Apple', 'Jesika', '2020-12-01', 'Bekasi', 'On Transit'),
('RES003', 'REG', '2020-11-28', 'Bandung', 'Jakarta', '3Second', 'Fakhri', '2020-12-03', 'Purwakarta', 'Received On Destination'),
('RES004', 'REG', '2020-11-29', 'Bandung', 'Jakarta', 'Levi\'s', 'Budi', '2020-12-04', 'Bandung', 'Manifested'),
('RES005', 'FAST', '2020-11-29', 'Bandung', 'Bandung', 'Asus', 'Adhi', '2020-11-29', 'Bandung', 'Delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_pengiriman`
--
ALTER TABLE `jadwal_pengiriman`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_pengiriman` (`id_pengiriman`);

--
-- Indexes for table `pengiriman_barang`
--
ALTER TABLE `pengiriman_barang`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`no_awb`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_pengiriman`
--
ALTER TABLE `jadwal_pengiriman`
  ADD CONSTRAINT `jadwal_pengiriman_ibfk_1` FOREIGN KEY (`id_pengiriman`) REFERENCES `pengiriman_barang` (`id_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
