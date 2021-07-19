-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 08.33
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` int(11) NOT NULL,
  `tanggal_antrian` varchar(50) DEFAULT NULL,
  `status_antrian` varchar(50) NOT NULL,
  `antrian_waktu_panggil` varchar(50) DEFAULT current_timestamp(),
  `antrian_waktu_selesai` varchar(50) DEFAULT NULL,
  `id_antrian_pelayanan` int(11) NOT NULL,
  `id_antrian_loket` int(11) NOT NULL,
  `antrian_last` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tanggal_antrian`, `status_antrian`, `antrian_waktu_panggil`, `antrian_waktu_selesai`, `id_antrian_pelayanan`, `id_antrian_loket`, `antrian_last`) VALUES
(1, '21-07-18 01:21:28', 'berlansung', NULL, NULL, 5, 1, NULL),
(2, '21-07-18 01:23:23', 'berlansung', NULL, NULL, 4, 1, NULL),
(3, '21-07-18 01:23:33', 'berlansung', NULL, NULL, 6, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loket`
--

CREATE TABLE `loket` (
  `id_loket` int(11) UNSIGNED NOT NULL,
  `nama_loket` varchar(100) NOT NULL,
  `id_loket_pelayanan` int(11) NOT NULL,
  `keterangan_loket` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-07-11-044811', 'App\\Database\\Migrations\\Pelayanan', 'default', 'App', 1625979235, 1),
(2, '2021-07-11-054601', 'App\\Database\\Migrations\\Loket', 'default', 'App', 1625982577, 2),
(3, '2021-07-11-070851', 'App\\Database\\Migrations\\Loket', 'default', 'App', 1625987345, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) UNSIGNED NOT NULL,
  `nama_pelayanan` varchar(100) NOT NULL,
  `kode_pelayanan` varchar(100) NOT NULL,
  `keterangan_pelayanan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_pelayanan`, `kode_pelayanan`, `keterangan_pelayanan`) VALUES
(4, 'Customer Service', 'CS', 'Layanan ini di gunakan untuk pelayanan kepada konsumenn'),
(5, 'Pengaduan', 'PG', 'Layanan ini di gunakan untuk melakukan pengaduan'),
(6, 'Permohonan Baru', 'PB', 'Layanan ini di gunakan untuk permohonan baru'),
(7, 'Perpanjangan', 'PJ', 'Layanan ini di gunakan u');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
