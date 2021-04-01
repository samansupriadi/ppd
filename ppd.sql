-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 03:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppd`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_ppd`
--

CREATE TABLE `history_ppd` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemohon` int(11) NOT NULL,
  `id_type_ppd` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `no_rek` int(30) NOT NULL,
  `keterangan_penerima` text NOT NULL,
  `kas_sf_infak` int(11) NOT NULL,
  `kas_sf_amil` int(11) NOT NULL,
  `ket_kas_infak` text NOT NULL,
  `ket_kas_amil` text NOT NULL,
  `total` int(11) NOT NULL,
  `lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_ppd`
--

INSERT INTO `history_ppd` (`id`, `tanggal`, `id_pemohon`, `id_type_ppd`, `id_metode`, `penerima`, `no_rek`, `keterangan_penerima`, `kas_sf_infak`, `kas_sf_amil`, `ket_kas_infak`, `ket_kas_amil`, `total`, `lampiran`) VALUES
(8, '2021-04-13', 1, 1, 1, 'Saman Supriadi', 2147483647, 'Beli kertas HVS', 10000, 10000, 'Kas SF Infak', '', 20000, 'Saman Supriadi - it development.pdf'),
(9, '2021-05-06', 1, 1, 1, 'Saman Supriadi', 2147483647, 'Beli kertas HVS', 10000, 10000, 'Kas SF Infak', '', 20000, 'Saman Supriadi - it development.pdf'),
(10, '2021-04-07', 1, 1, 1, 'Saman Supriadi', 2147483647, 'Buat perbaikan lampu', 10000, 1000000, 'Kas SF Infak', '', 1010000, 'Saman Supriadi - it development.pdf'),
(11, '2021-04-09', 1, 2, 1, 'Saman Supriadi', 0, 'Beli kertas HVS', 10000, 1000000, 'Kas SF Infak', '', 1010000, 'Saman Supriadi - it development.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `metode`
--

CREATE TABLE `metode` (
  `id_metode` int(11) NOT NULL,
  `metode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode`
--

INSERT INTO `metode` (`id_metode`, `metode`) VALUES
(1, 'CASH'),
(2, 'TRANSFER');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `id_pemohon` int(11) NOT NULL,
  `pemohon` varchar(30) NOT NULL,
  `divisi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`id_pemohon`, `pemohon`, `divisi`) VALUES
(1, 'Saman Supriadi', 'IT'),
(2, 'Sasuke', 'Finance'),
(3, 'Naruto', 'Sales'),
(4, 'Sakura', 'HRD'),
(5, 'Kiba', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `type_ppd`
--

CREATE TABLE `type_ppd` (
  `id_type_ppd` int(11) NOT NULL,
  `type_ppd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_ppd`
--

INSERT INTO `type_ppd` (`id_type_ppd`, `type_ppd`) VALUES
(1, 'ATK'),
(2, 'Perbaikan Asset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_ppd`
--
ALTER TABLE `history_ppd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon` (`id_pemohon`),
  ADD KEY `metode` (`id_metode`),
  ADD KEY `type_ppd` (`id_type_ppd`);

--
-- Indexes for table `metode`
--
ALTER TABLE `metode`
  ADD PRIMARY KEY (`id_metode`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `type_ppd`
--
ALTER TABLE `type_ppd`
  ADD PRIMARY KEY (`id_type_ppd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_ppd`
--
ALTER TABLE `history_ppd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `metode`
--
ALTER TABLE `metode`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemohon`
--
ALTER TABLE `pemohon`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_ppd`
--
ALTER TABLE `type_ppd`
  MODIFY `id_type_ppd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_ppd`
--
ALTER TABLE `history_ppd`
  ADD CONSTRAINT `metode` FOREIGN KEY (`id_metode`) REFERENCES `metode` (`id_metode`),
  ADD CONSTRAINT `pemohon` FOREIGN KEY (`id_pemohon`) REFERENCES `pemohon` (`id_pemohon`),
  ADD CONSTRAINT `type_ppd` FOREIGN KEY (`id_type_ppd`) REFERENCES `type_ppd` (`id_type_ppd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
