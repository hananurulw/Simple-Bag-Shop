-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 06:58 AM
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
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `Nama_Depan` varchar(50) NOT NULL,
  `Nama_Belakang` varchar(50) NOT NULL,
  `Nama_Pengguna` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Produk` varchar(100) DEFAULT NULL,
  `Negara` varchar(50) NOT NULL,
  `Provinsi` varchar(50) NOT NULL,
  `Kode_Pos` int(50) NOT NULL,
  `Alamat_Sama` varchar(100) NOT NULL,
  `Simpan_Informasi` varchar(50) NOT NULL,
  `Pembayaran` varchar(50) NOT NULL,
  `Nama_di_Kartu` varchar(50) NOT NULL,
  `Nomor_Kartu_Kredit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`Nama_Depan`, `Nama_Belakang`, `Nama_Pengguna`, `Email`, `Alamat`, `Produk`, `Negara`, `Provinsi`, `Kode_Pos`, `Alamat_Sama`, `Simpan_Informasi`, `Pembayaran`, `Nama_di_Kartu`, `Nomor_Kartu_Kredit`) VALUES
('Hana', 'Nurul Wahidah', 'numeronena', 'nurulwahid.001@gmail.com', 'JL. SUKAJADI GG. ASLI II ATAS', 'Produk Lainnya', 'South Korea', 'Jawa Barat', 34234, 'Tidak', 'Iya', 'Kartu Kredit', 'fsdgvf', '324265'),
('Siti Syarah Fatia', 'Apriani', 'fatia', 'fatiaapriani@gmail.com', 'Jl. Linggawastu', 'Produk Lainnya', 'Indonesia', 'Jawa Barat', 35435, 'Tidak', 'Iya', 'Kartu Kredit', 'Fatia', '53465789'),
('Hana', 'Nurul Wahidah', 'numeronena', 'nurulwahid.001@gmail.com', 'Jl. Citarum No. 23', 'Produk Lainnya', 'South Africa', 'Western Australia', 40162, 'Tidak', 'Tidak', 'PayPal', 'Hana', '3454657'),
('Siti Syarah Fatia', 'Apriani', 'fatia', 'fatiaapriani@gmail.com', 'Jl. Ranggangading', 'Produk Lainnya', 'United States', 'Western Australia', 34234, 'Tidak', 'Iya', 'Kartu Debit', 'Fatia', '3546456');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
