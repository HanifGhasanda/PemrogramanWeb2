-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jun 2024 pada 09.55
-- Versi server: 8.0.30
-- Versi PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `stok` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok`) VALUES
(1, 'Teh Kotak', '8.000', 15),
(2, 'Coki Coki', '1.500', 10),
(3, 'Mizone', '7.000', 8),
(4, 'Ultra Milk', '12.000', 5),
(5, 'Chitato', '5.000', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_transaksi` int NOT NULL,
  `id_barang` int NOT NULL,
  `jumlah` int NOT NULL,
  `kasir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_transaksi`, `id_barang`, `jumlah`, `kasir`) VALUES
(1, 2, 3, 'Yuniko'),
(2, 5, 2, 'Satria'),
(3, 3, 4, 'Yuniko'),
(4, 1, 1, 'Satria'),
(5, 4, 5, 'Ivantara');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_barang` (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id_barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `tabel_barang` (`id_barang`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;