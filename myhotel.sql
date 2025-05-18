-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2025 at 01:06 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int NOT NULL,
  `invoice_tanggal` date NOT NULL,
  `invoice_customer` int NOT NULL,
  `invoice_nama` varchar(100) NOT NULL,
  `invoice_hp` varchar(100) NOT NULL,
  `invoice_kamar` int NOT NULL,
  `invoice_nama_kamar` varchar(255) NOT NULL,
  `invoice_dari` date NOT NULL,
  `invoice_sampai` date NOT NULL,
  `invoice_status` int NOT NULL,
  `invoice_bukti` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `invoice_harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int NOT NULL,
  `nama_kamar` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `harga` int NOT NULL,
  `desk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `nama_kamar`, `img`, `harga`, `desk`) VALUES
(1, 'DULUXE ROOM', '1.jpg', 240000, 'Pelayanan kamar terbaik untuk menemani waktu liburanmu bersama keluarga, kerabat atau orang-orang tersayang. jangan lewatkan, segera booking sekarang!'),
(2, 'EKONOMIC ROOM', '2.jpg', 180000, 'Nikmati pelayanan kamar yang ekonomis tetapi dengan kualitas yang lebih dari ekonomis. Jangan lewatkan, pesan sekarang bersama keluarga atau kerabat anda!');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_detail`
--

CREATE TABLE `kamar_detail` (
  `id` int NOT NULL,
  `kamar_id` int NOT NULL,
  `nama_kamar` varchar(255) NOT NULL,
  `jns_kamar` varchar(255) NOT NULL,
  `img` varchar(20) NOT NULL,
  `ranjang` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kamar_detail`
--

INSERT INTO `kamar_detail` (`id`, `kamar_id`, `nama_kamar`, `jns_kamar`, `img`, `ranjang`, `ukuran`) VALUES
(1, 1, 'Duluxe Room', 'Superior', '1.jpg', 'Double', '200'),
(2, 2, 'EKONOMIC ROOM', 'Amazing', '2.jpg', 'Double', '200');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(105) NOT NULL,
  `password` varchar(105) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `username`, `tgl_lahir`, `jns_kelamin`) VALUES
(13, 'retsuekatitiss@gmail.com', '12345', 'Anyme', '2024-06-07', 'Laki-laki'),
(17, 'retsuekatitiss@gmail.com', '777', 'retsuekatitiss@gmail.com', '2024-07-05', 'Laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar_detail`
--
ALTER TABLE `kamar_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamar_detail`
--
ALTER TABLE `kamar_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
