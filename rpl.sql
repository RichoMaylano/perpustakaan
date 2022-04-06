-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2022 pada 07.00
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_fakultas`
--

CREATE TABLE `tabel_fakultas` (
  `id_fakultas` int(11) NOT NULL,
  `nama_fakultas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_fakultas`
--

INSERT INTO `tabel_fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Fakultas KIP'),
(2, 'Fakultas MIPA'),
(3, 'Fakultas Hukum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_prodi`
--

CREATE TABLE `tabel_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(250) NOT NULL,
  `id_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_prodi`
--

INSERT INTO `tabel_prodi` (`id_prodi`, `nama_prodi`, `id_fakultas`) VALUES
(1, 'Prodi PTIK', 1),
(2, 'Prodi Informatika', 2),
(3, 'Prodi Hukum Pidana', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(3) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `role` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama_siswa`, `password`, `username`, `id_prodi`, `role`) VALUES
(3, 'Tegas   ', 'tegas123', 'tegas123', 0, 1),
(9, 'Bagus  ', 'bagus01', 'bagus', 0, 1),
(11, ' Endar ', 'endar1234', 'endar', 0, 0),
(14, 'Anto', 'anto123', 'anto', 0, 0),
(15, ' Bagus', '12345', 'bagus', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_fakultas`
--
ALTER TABLE `tabel_fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD UNIQUE KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_fakultas`
--
ALTER TABLE `tabel_fakultas`
  MODIFY `id_fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_prodi`
--
ALTER TABLE `tabel_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
