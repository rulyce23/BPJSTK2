-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2020 pada 08.52
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpjs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id` varchar(50) NOT NULL,
  `id_cs` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `no_kpj` varchar(25) NOT NULL,
  `klaim` varchar(8) NOT NULL,
  `s_ktp` varchar(155) NOT NULL,
  `s_vaklaring` varchar(155) NOT NULL,
  `s_kk` varchar(155) NOT NULL,
  `s_kbpjs` varchar(155) NOT NULL,
  `s_tabung` varchar(155) NOT NULL,
  `status2` varchar(35) DEFAULT 'Belum Dicek & Diverifikasi',
  `alasan` varchar(155) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id`, `id_cs`, `nama`, `no_kpj`, `klaim`, `s_ktp`, `s_vaklaring`, `s_kk`, `s_kbpjs`, `s_tabung`, `status2`, `alasan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('6a77c764-91c3-4e99-93d2-412180e4ad64', NULL, 'Ruly Rizki Perdana', '4884184194014814714717411', 'JHK', '1598242557.jpeg', '1598242563.jpeg', '1598242568.jpeg', '1598242573.jpeg', '1598242578.jpeg', 'Telah Dicek & Diverifikasi', '', '2020-08-24 06:34:45', '2020-08-23 23:34:45', NULL),
('72511323-a14b-47b3-953a-bca94eeaf29c', NULL, 'Pingi', '9428242872828822112131414', 'JHK', '1598251361.jpeg', '1598251373.jpeg', '1598251405.jpeg', '1598251433.jpeg', '1598251438.jpeg', 'Telah Dicek & Ditolak', 'Salah Satu File Scan / Upload Berkas Foto Anda Rusak,Atau Tidak Terbaca Ataupun File Yang Anda Scan / Upload salah Dalam Urutan Scan / Upload Berkas Foto', '2020-08-24 06:52:18', '2020-08-23 23:52:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cs` (`id_cs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
