-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2020 pada 05.00
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `name`, `slug`, `description`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
('1', 'CV Jaya Abadi Truck Delivery N Shipment Rent', 'nama-toko', 'CV Jaya Abadi', 'textarea', NULL, NULL, '2020-08-03 07:11:47'),
('2', 'Jl. Gedebage No. 83 Bandung', 'alamat', 'alamat perusahaan rental', 'textarea', NULL, NULL, NULL),
('3', '081475199123', 'nomer-telepon', 'telepon n contact person untuk rental kendaraan truck dalam angkut barang-barang penting', 'text', NULL, NULL, NULL),
('4', 'jayaabadirent@gmail.com', 'email', 'email toko perusahaan', 'text', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_img`
--

CREATE TABLE `t_img` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `s_ktp` varchar(155) DEFAULT NULL,
  `s_kartubpjs` varchar(155) DEFAULT NULL,
  `s_vaklaring` varchar(155) DEFAULT NULL,
  `s_kk` varchar(155) DEFAULT NULL,
  `s_tabungan` varchar(155) DEFAULT NULL,
  `status` varchar(35) DEFAULT NULL,
  `status2` varchar(35) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pelanggan`
--

CREATE TABLE `t_pelanggan` (
  `id` varchar(50) NOT NULL,
  `id_cs` varchar(36) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_kpj` varchar(20) DEFAULT NULL,
  `klaim` varchar(8) DEFAULT NULL,
  `s_ktp` varchar(255) DEFAULT NULL,
  `s_vaklaring` varchar(255) DEFAULT NULL,
  `s_kk` varchar(255) DEFAULT NULL,
  `s_kbpjs` varchar(255) DEFAULT NULL,
  `s_tabung` varchar(255) DEFAULT NULL,
  `status2` varchar(35) DEFAULT 'Belum Dicek & Diverifikasi',
  `alasan` varchar(155) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_pelanggan`
--

INSERT INTO `t_pelanggan` (`id`, `id_cs`, `nama`, `no_kpj`, `klaim`, `s_ktp`, `s_vaklaring`, `s_kk`, `s_kbpjs`, `s_tabung`, `status2`, `alasan`, `created_at`, `updated_at`, `deleted_at`) VALUES
('4a7b9748-2c31-4dba-8c53-be457ddc550a', NULL, 'Radimas', '03948382828292211224', 'JKM', '1598449679.jpeg', '1598449691.jpeg', '1598449708.jpeg', '1598449721.jpeg', '1598449733.jpeg', 'Belum Dicek & Diverifikasi', NULL, '2020-08-26 06:48:55', '2020-08-26 06:48:55', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
('9657df72-8eef-4e37-87ce-8f316c640781', 'Adibarri Rulyanto', 'abi16', 'adibarrirulyanto@gmail.com', NULL, '$2y$10$DAuzrT/slbp/CCH8dp2XmOa08EOs5xEtfdSxi8AJ81bIainz5yiLG', NULL, NULL, '2020-08-03 07:22:42', '2020-08-03 07:22:42'),
('82ca5375-e42f-40e3-ba95-60780cebaaa4', 'CS BPJS', 'cs_bpjs', 'halobpjs@gmail.com', NULL, '$2y$10$b1HAuY3heBM9132HuJFb.uXahlwdvlX6TGKX4.S5MeVRhvIKyE9pC', NULL, NULL, '2020-08-26 19:36:19', '2020-08-26 19:36:19'),
('1', 'ruly', 'ruly', 'rulyce23@gmail.com', '2020-08-02 17:00:00', '$2y$10$CQFmasC1v2c5xKkhA7OSLOvxQSTdtR3iBiLJ5q89/W6AxvxEFQNHi', 'VA4yz9p690TjkE6BSxj3PDmqaVd0nsEIacFu9M9H8RJxyR70YPtEgOVUr7Nr', NULL, '2020-08-02 17:00:00', '2020-08-23 01:58:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_img`
--
ALTER TABLE `t_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `t_pelanggan`
--
ALTER TABLE `t_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cs` (`id_cs`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_img`
--
ALTER TABLE `t_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
