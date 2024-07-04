-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2024 at 01:25 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblberita`
--

CREATE TABLE `tblberita` (
  `id_berita` int NOT NULL,
  `idkategori` int NOT NULL,
  `judul_berita` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `isi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tgldipublish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblberita`
--

INSERT INTO `tblberita` (`id_berita`, `idkategori`, `judul_berita`, `isi_berita`, `penulis`, `tgldipublish`) VALUES
(4, 3, 'Dampak Sosial', 'Isi Dampak Teknologi', 'Yuniko', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idkategori` int NOT NULL,
  `nama_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tblkategori`
--

INSERT INTO `tblkategori` (`idkategori`, `nama_kategori`) VALUES
(1, 'Budaya'),
(2, 'budaya'),
(3, 'teknologi'),
(4, 'budaya'),
(5, 'sosial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `idKategori` (`idkategori`);

--
-- Indexes for table `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblberita`
--
ALTER TABLE `tblberita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblkategori`
--
ALTER TABLE `tblkategori`
  MODIFY `idkategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblberita`
--
ALTER TABLE `tblberita`
  ADD CONSTRAINT `tblberita_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `tblkategori` (`idkategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;