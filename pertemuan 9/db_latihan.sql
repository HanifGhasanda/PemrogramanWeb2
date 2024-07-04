-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jun 2024 pada 09.32
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
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_dosen`
--

CREATE TABLE `tabel_dosen` (
  `kode_dosen` int NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_dosen`
--

INSERT INTO `tabel_dosen` (`kode_dosen`, `nama_dosen`, `jenis_kelamin`, `alamat`, `telepon`) VALUES
(1002, 'Joko Susilo, M.Kom', 'L', 'Jln Amd Babakan Pocis', 12345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id` int NOT NULL,
  `kode_matakuliah` int NOT NULL,
  `kode_dosen` int NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`id`, `kode_matakuliah`, `kode_dosen`, `hari`, `jam`) VALUES
(1, 2003, 1002, 'Senin', '07.40 - 09.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_krs`
--

CREATE TABLE `tabel_krs` (
  `id` int NOT NULL,
  `nim` int NOT NULL,
  `id_jadwal` int NOT NULL,
  `kode_semester` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_krs`
--

INSERT INTO `tabel_krs` (`id`, `nim`, `id_jadwal`, `kode_semester`) VALUES
(1, 2001, 1, 20211);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `nim` int NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `jurusan` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`nim`, `nama_mahasiswa`, `jenis_kelamin`, `alamat`, `jurusan`) VALUES
(2001, 'Yuniko', 'L', 'jl. H Mugini No. 12 Jakarta Selatan', 'IT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_matakuliah`
--

CREATE TABLE `tabel_matakuliah` (
  `kode_matakuliah` int NOT NULL,
  `nama_matakuliah` varchar(20) NOT NULL,
  `sks` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_matakuliah`
--

INSERT INTO `tabel_matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`) VALUES
(2003, 'Pemrograman Web 2', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_semester`
--

CREATE TABLE `tabel_semester` (
  `kode_semester` int NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_semester`
--

INSERT INTO `tabel_semester` (`kode_semester`, `semester`, `status`) VALUES
(20211, 'Genap 2023/2024', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'adminlatihan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_dosen`
--
ALTER TABLE `tabel_dosen`
  ADD PRIMARY KEY (`kode_dosen`);

--
-- Indeks untuk tabel `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matakuliah` (`kode_matakuliah`),
  ADD KEY `fk_dosen` (`kode_dosen`);

--
-- Indeks untuk tabel `tabel_krs`
--
ALTER TABLE `tabel_krs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jadwal` (`id_jadwal`),
  ADD KEY `fk_mahasiswa` (`nim`),
  ADD KEY `fk_semester` (`kode_semester`);

--
-- Indeks untuk tabel `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tabel_matakuliah`
--
ALTER TABLE `tabel_matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indeks untuk tabel `tabel_semester`
--
ALTER TABLE `tabel_semester`
  ADD PRIMARY KEY (`kode_semester`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_krs`
--
ALTER TABLE `tabel_krs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD CONSTRAINT `fk_dosen` FOREIGN KEY (`kode_dosen`) REFERENCES `tabel_dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_matakuliah` FOREIGN KEY (`kode_matakuliah`) REFERENCES `tabel_matakuliah` (`kode_matakuliah`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ketidakleluasaan untuk tabel `tabel_krs`
--
ALTER TABLE `tabel_krs`
  ADD CONSTRAINT `fk_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `tabel_jadwal` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_mahasiswa` FOREIGN KEY (`nim`) REFERENCES `tabel_mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_semester` FOREIGN KEY (`kode_semester`) REFERENCES `tabel_semester` (`kode_semester`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;