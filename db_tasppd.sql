-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2021 pada 16.59
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tasppd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_hotel`
--

CREATE TABLE `biaya_hotel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif_a` int(11) NOT NULL,
  `tarif_b` int(11) NOT NULL,
  `tarif_c` int(11) NOT NULL,
  `tarif_d` int(11) NOT NULL,
  `tarif_e` int(11) NOT NULL,
  `tarif_f` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biaya_hotel`
--

INSERT INTO `biaya_hotel` (`id`, `provinsi`, `kategori`, `tarif_a`, `tarif_b`, `tarif_c`, `tarif_d`, `tarif_e`, `tarif_f`) VALUES
(1, 'ACEH', 'kategori1', 4420000, 3526000, 1294000, 556000, 556000, 556000),
(2, 'ACEH', 'kategori2', 3500000, 2000000, 700000, 300000, 300000, 300000),
(3, 'ACEH', 'kategori3', 2500000, 1000000, 500000, 0, 0, 0),
(4, 'SUMATERA UTARA', 'kategori1', 4960000, 1518000, 1100000, 530000, 530000, 530000),
(5, 'SUMATERA UTARA', 'kategori2', 3500000, 1000000, 600000, 300000, 300000, 300000),
(6, 'SUMATERA UTARA', 'kategori3', 2500000, 800000, 400000, 0, 0, 0),
(7, 'RIAU', 'kategori1', 3820000, 3119000, 1650000, 852000, 852000, 852000),
(8, 'RIAU', 'kategori2', 3500000, 2000000, 700000, 500000, 500000, 500000),
(9, 'RIAU', 'kategori3', 2500000, 1000000, 500000, 300000, 300000, 300000),
(10, 'KEPULAUAN RIAU', 'kategori1', 4275000, 1854000, 1037000, 792000, 792000, 792000),
(11, 'KEPULAUAN RIAU', 'kategori2', 3500000, 1000000, 500000, 500000, 500000, 500000),
(12, 'KEPULAUAN RIAU', 'kategori3', 2500000, 800000, 300000, 300000, 300000, 300000),
(13, 'JAMBI', 'kategori1', 4000000, 3337000, 1212000, 580000, 580000, 580000),
(14, 'JAMBI', 'kategori2', 3500000, 2000000, 600000, 300000, 300000, 0),
(15, 'JAMBI', 'kategori3', 2500000, 1000000, 400000, 0, 0, 0),
(16, 'SUMATERA BARAT', 'kategori1', 5236000, 3332000, 1353000, 650000, 650000, 650000),
(17, 'SUMATERA BARAT', 'kategori2', 3500000, 2000000, 700000, 300000, 300000, 300000),
(18, 'SUMATERA BARAT', 'kategori3', 2500000, 1000000, 500000, 0, 0, 0),
(19, 'SUMATERA SELATAN', 'kategori1', 5850000, 3083000, 1570000, 861000, 861000, 861000),
(20, 'SUMATERA SELATAN', 'kategori2', 3500000, 2000000, 500000, 300000, 300000, 0),
(21, 'SUMATERA SELATAN', 'kategori3', 2500000, 1000000, 300000, 0, 0, 0),
(22, 'LAMPUNG', 'kategori1', 4491000, 2067000, 1140000, 580000, 580000, 580000),
(23, 'LAMPUNG', 'kategori2', 3500000, 1000000, 700000, 300000, 300000, 300000),
(24, 'LAMPUNG', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(25, 'BENGKULU', 'kategori1', 2071000, 1628000, 1546000, 630000, 630000, 630000),
(26, 'BENGKULU', 'kategori2', 1000000, 800000, 600000, 300000, 300000, 0),
(27, 'BENGKULU', 'kategori3', 900000, 500000, 400000, 0, 0, 0),
(28, 'BANGKA BELITUNG', 'kategori1', 3827000, 2838000, 1957000, 622000, 622000, 622000),
(29, 'BANGKA BELITUNG', 'kategori2', 3000000, 1000000, 700000, 300000, 300000, 0),
(30, 'BANGKA BELITUNG', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(31, 'BANTEN', 'kategori1', 5725000, 2373000, 1000000, 718000, 718000, 718000),
(32, 'BANTEN', 'kategori2', 3500000, 1000000, 700000, 500000, 500000, 300000),
(33, 'BANTEN', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(34, 'JAWA BARAT', 'kategori1', 5381000, 2755000, 1006000, 570000, 570000, 570000),
(35, 'JAWA BARAT', 'kategori2', 3500000, 1000000, 700000, 300000, 300000, 300000),
(36, 'JAWA BARAT', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(37, 'D.K.I JAKARTA', 'kategori1', 5850000, 1490000, 992000, 730000, 730000, 730000),
(38, 'D.K.I JAKARTA', 'kategori2', 4500000, 1200000, 900000, 600000, 600000, 600000),
(39, 'D.K.I JAKARTA', 'kategori3', 3000000, 900000, 750000, 500000, 500000, 500000),
(40, 'JAWA TENGAH', 'kategori1', 4242000, 1480000, 954000, 600000, 600000, 600000),
(41, 'JAWA TENGAH', 'kategori2', 3500000, 1000000, 700000, 300000, 300000, 300000),
(42, 'JAWA TENGAH', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(43, 'D.I YOGYAKARTA', 'kategori1', 5017000, 2695000, 1384000, 845000, 845000, 845000),
(44, 'D.I YOGYAKARTA', 'kategori2', 3500000, 1000000, 700000, 400000, 400000, 300000),
(45, 'D.I YOGYAKARTA', 'kategori3', 2500000, 800000, 500000, 300000, 300000, 0),
(46, 'JAWA TIMUR', 'kategori1', 4400000, 1605000, 1076000, 664000, 664000, 664000),
(47, 'JAWA TIMUR', 'kategori2', 3500000, 1000000, 700000, 400000, 400000, 400000),
(48, 'JAWA TIMUR', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(49, 'BALI', 'kategori1', 4890000, 1946000, 990000, 910000, 910000, 910000),
(50, 'BALI', 'kategori2', 3500000, 1000000, 800000, 700000, 700000, 700000),
(51, 'BALI', 'kategori3', 2500000, 800000, 600000, 500000, 500000, 500000),
(52, 'NUSA TENGGARA BARAT', 'kategori1', 3500000, 2648000, 1418000, 580000, 580000, 580000),
(53, 'NUSA TENGGARA BARAT', 'kategori2', 3000000, 1000000, 700000, 300000, 300000, 300000),
(54, 'NUSA TENGGARA BARAT', 'kategori3', 2500000, 800000, 500000, 0, 0, 0),
(55, 'NUSA TENGGARA TIMUR', 'kategori1', 3000000, 1493000, 1355000, 550000, 550000, 550000),
(56, 'NUSA TENGGARA TIMUR', 'kategori2', 2500000, 800000, 700000, 300000, 300000, 0),
(57, 'NUSA TENGGARA TIMUR', 'kategori3', 2000000, 600000, 500000, 0, 0, 0),
(58, 'KALIMANTAN BARAT', 'kategori1', 2654000, 1538000, 1125000, 538000, 538000, 538000),
(59, 'KALIMANTAN BARAT', 'kategori2', 1500000, 1000000, 800000, 300000, 300000, 300000),
(60, 'KALIMANTAN BARAT', 'kategori3', 1000000, 800000, 600000, 0, 0, 0),
(61, 'KALIMANTAN TENGAH', 'kategori1', 4901000, 3391000, 1160000, 659000, 659000, 659000),
(62, 'KALIMANTAN TENGAH', 'kategori2', 2500000, 1000000, 600000, 300000, 300000, 300000),
(63, 'KALIMANTAN TENGAH', 'kategori3', 2000000, 800000, 400000, 0, 0, 0),
(64, 'KALIMANTAN SELATAN', 'kategori1', 4797000, 3316000, 1500000, 540000, 540000, 540000),
(65, 'KALIMANTAN SELATAN', 'kategori2', 3500000, 2000000, 800000, 300000, 300000, 300000),
(66, 'KALIMANTAN SELATAN', 'kategori3', 2500000, 1000000, 500000, 0, 0, 0),
(67, 'KALIMANTAN TIMUR', 'kategori1', 4000000, 2188000, 1507000, 804000, 804000, 804000),
(68, 'KALIMANTAN TIMUR', 'kategori2', 3500000, 1000000, 800000, 300000, 300000, 300000),
(69, 'KALIMANTAN TIMUR', 'kategori3', 2500000, 800000, 600000, 0, 0, 0),
(70, 'KALIMANTAN UTARA', 'kategori1', 4000000, 2188000, 1507000, 804000, 804000, 804000),
(71, 'KALIMANTAN UTARA', 'kategori2', 3500000, 1000000, 800000, 300000, 300000, 300000),
(72, 'KALIMANTAN UTARA', 'kategori3', 2500000, 800000, 600000, 0, 0, 0),
(73, 'SULAWESI UTARA', 'kategori1', 4919000, 2290000, 924000, 782000, 782000, 782000),
(74, 'SULAWESI UTARA', 'kategori2', 2500000, 1000000, 600000, 300000, 300000, 300000),
(75, 'SULAWESI UTARA', 'kategori3', 2000000, 800000, 400000, 0, 0, 0),
(76, 'GORONTALO', 'kategori1', 4168000, 2549000, 1431000, 764000, 764000, 764000),
(77, 'GORONTALO', 'kategori2', 3000000, 1000000, 800000, 500000, 500000, 0),
(78, 'GORONTALO', 'kategori3', 2000000, 800000, 600000, 0, 0, 0),
(79, 'SULAWESI BARAT', 'kategori1', 4076000, 2581000, 1075000, 704000, 704000, 704000),
(80, 'SULAWESI BARAT', 'kategori2', 3000000, 700000, 600000, 450000, 450000, 400000),
(81, 'SULAWESI BARAT', 'kategori3', 2000000, 500000, 300000, 200000, 200000, 0),
(82, 'SULAWESI SELATAN', 'kategori1', 4820000, 1550000, 1020000, 732000, 732000, 732000),
(83, 'SULAWESI SELATAN', 'kategori2', 3500000, 1000000, 800000, 600000, 600000, 600000),
(84, 'SULAWESI SELATAN', 'kategori3', 2000000, 800000, 700000, 500000, 500000, 500000),
(85, 'SULAWESI TENGAH', 'kategori1', 2309000, 2027000, 1567000, 951000, 951000, 951000),
(86, 'SULAWESI TENGAH', 'kategori2', 1500000, 1000000, 800000, 600000, 600000, 600000),
(87, 'SULAWESI TENGAH', 'kategori3', 1000000, 800000, 600000, 0, 0, 0),
(88, 'SULAWESI TENGGARA', 'kategori1', 2475000, 2059000, 1297000, 786000, 786000, 786000),
(89, 'SULAWESI TENGGARA', 'kategori2', 1500000, 1000000, 700000, 500000, 500000, 500000),
(90, 'SULAWESI TENGGARA', 'kategori3', 1000000, 800000, 400000, 0, 0, 0),
(91, 'MALUKU', 'kategori1', 3457000, 3240000, 1048000, 667000, 667000, 667000),
(92, 'MALUKU', 'kategori2', 2500000, 800000, 600000, 400000, 400000, 400000),
(93, 'MALUKU', 'kategori3', 2000000, 600000, 400000, 0, 0, 0),
(94, 'MALUKU UTARA', 'kategori1', 3440000, 3175000, 1073000, 600000, 600000, 600000),
(95, 'MALUKU UTARA', 'kategori2', 2500000, 1000000, 500000, 300000, 300000, 300000),
(96, 'MALUKU UTARA', 'kategori3', 2000000, 800000, 300000, 0, 0, 0),
(97, 'PAPUA', 'kategori1', 3859000, 3318000, 2521000, 829000, 829000, 829000),
(98, 'PAPUA', 'kategori2', 2500000, 1000000, 600000, 300000, 300000, 300000),
(99, 'PAPUA', 'kategori3', 2000000, 800000, 400000, 0, 0, 0),
(100, 'PAPUA BARAT', 'kategori1', 3872000, 3212000, 2056000, 718000, 718000, 718000),
(101, 'PAPUA BARAT', 'kategori2', 2500000, 1000000, 600000, 300000, 300000, 300000),
(102, 'PAPUA BARAT', 'kategori3', 2000000, 800000, 400000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biaya_representasi`
--

CREATE TABLE `biaya_representasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luar_daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dalam_daerah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biaya_representasi`
--

INSERT INTO `biaya_representasi` (`id`, `jabatan`, `luar_daerah`, `dalam_daerah`) VALUES
(1, 'Gubernur / Wakil Gubernur dan Pimpinan DPRD', '250000', '125000'),
(2, 'Eselon I', '200000', '100000'),
(3, 'Pejabat Eselon II, Anggota DPRD', '150000', '75000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dasar_peraturan`
--

CREATE TABLE `dasar_peraturan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dasar_peraturan`
--

INSERT INTO `dasar_peraturan` (`id`, `kategori`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Peraturan Daerah', 'Deskripsi Peraturan Daerah', '2021-11-25 20:42:04', '2021-11-25 20:42:04'),
(2, 'Peraturan Gubernur', 'Deskripsi Peraturan Gubernur', '2021-11-25 20:42:05', '2021-11-25 20:42:05'),
(3, 'Pergub Standar Harga Satuan', 'Deskripsi Pergub Standar Harga Satuan', '2021-11-25 20:42:05', '2021-11-25 20:42:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_surat`
--

CREATE TABLE `detail_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surat_tugas_id` bigint(20) NOT NULL,
  `no_sppd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_surat`
--

INSERT INTO `detail_surat` (`id`, `surat_tugas_id`, `no_sppd`, `nip`, `created_at`, `updated_at`) VALUES
(1, 1, '32324343 /SPPD/KEU-XI/2021', '121324242424', '2021-11-26 21:58:50', '2021-11-26 21:58:50'),
(2, 4, '01.1 /SPPD/KEU-XI/2021', '121324242424', '2021-11-30 09:11:32', '2021-11-30 09:11:32'),
(3, 4, '01.2 /SPPD/KEU-XI/2021', '12345678', '2021-11-30 09:11:57', '2021-11-30 09:11:57'),
(6, 6, '01 /SPPD/KEU-XII/2021', '12345678', '2021-12-03 08:33:48', '2021-12-03 08:33:48'),
(7, 6, '01.1 /SPPD/SETDA-III/2021', '12345678', '2021-12-03 08:33:48', '2021-12-03 08:33:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_dinas`
--

CREATE TABLE `kepala_dinas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_biaya` enum('A','B','C','D','E','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kepala_dinas`
--

INSERT INTO `kepala_dinas` (`id`, `nama_lengkap`, `nip`, `jabatan`, `golongan`, `pangkat`, `unit`, `tingkat_biaya`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Nama Kepala Dinas', 'Nip Kepala Dinas', 'Jabatan Kepala Dinas', 'IA', 'Pangkat Kepala Dinas', 'Unit Kepala Dinas', 'B', '1638291606.png', NULL, '2021-11-30 10:00:06'),
(2, 'BG IRFAN', '121324242424', 'sasa', 'IVD', 'Pembina Utama Madya', 'dds', 'C', '1637985880.jpg', '2021-11-26 21:04:40', '2021-11-26 21:04:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_03_023258_create_kepala_dinas_table', 1),
(5, '2021_06_03_023258_create_pegawai_table', 1),
(6, '2021_06_03_043513_create_dasar_peraturan_table', 1),
(7, '2021_06_03_044544_create_tanda_tangan_dokumen_table', 1),
(8, '2021_06_07_044456_create_surat_tugas_kepala_table', 1),
(9, '2021_06_07_044456_create_surat_tugas_table', 1),
(10, '2021_06_12_054305_create_detail_surat_table', 1),
(11, '2021_06_16_044405_create_program_kerja_table', 1),
(12, '2021_06_21_074412_create_transportasi_to_bandara_table', 1),
(13, '2021_06_21_074701_create_transportasi_to_terminal_table', 1),
(14, '2021_06_25_082049_create_biaya_hotel_table', 1),
(15, '2021_06_28_072745_create_uang_harian_luar_table', 1),
(16, '2021_06_28_072941_create_uang_harian_dalam_table', 1),
(17, '2021_06_29_041015_create_biaya_representasi_table', 1),
(18, '2021_07_01_081805_create_program_kerja_kepala_table', 1),
(19, '2021_07_01_093546_create_spj_staff_table', 1),
(20, '2021_07_01_093628_create_spj_kepala_table', 1),
(21, '2021_11_26_091807_create_tipe_user_table', 2),
(22, '2021_11_27_031549_add_id_tipe_to_users_table', 3),
(23, '2021_11_27_035123_add_id_user_to_spj_kepala_table', 4),
(24, '2021_11_27_044431_add_id_user_to_spj_staff_table', 5),
(25, '2021_11_27_084609_add_id_user_to_surat_tugas_kepala_table', 6),
(26, '2021_11_28_042404_add_id_user_to_surat_tugas_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_biaya` enum('A','B','C','D','E','F') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama_lengkap`, `nip`, `jabatan`, `golongan`, `pangkat`, `unit`, `tingkat_biaya`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'yusuf', '12345678', 'Staf', 'IIIA', 'Penata Muda', '8', 'D', '1638545743.jpg', '2021-11-30 09:06:53', '2021-12-03 08:35:43'),
(4, 'Aco Basri Zie', '12345678', 'Staf', 'IIIA', 'Penata Muda', '7', 'F', '1638887673.png', '2021-12-07 07:34:33', '2021-12-07 07:34:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kerja`
--

CREATE TABLE `program_kerja` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_perjalanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_kerja`
--

INSERT INTO `program_kerja` (`id`, `kode_kegiatan`, `nama_kegiatan`, `jenis_perjalanan`, `nilai`, `kode_rekening`, `created_at`, `updated_at`) VALUES
(1, '4343545465', 'cxcdgfgf', 'Dinas Dalam Daerah', '99995731036', '5465465767', '2021-11-26 21:52:17', '2021-11-26 21:52:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_kerja_kepala`
--

CREATE TABLE `program_kerja_kepala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_perjalanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `program_kerja_kepala`
--

INSERT INTO `program_kerja_kepala` (`id`, `kode_kegiatan`, `nama_kegiatan`, `jenis_perjalanan`, `nilai`, `kode_rekening`, `created_at`, `updated_at`) VALUES
(1, '1234567543', 'dadada', 'Dinas Luar Daerah', '100005666168', '1313214324343', '2021-11-26 21:17:18', '2021-11-26 21:37:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spj_kepala`
--

CREATE TABLE `spj_kepala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sppd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `selama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggal_to_bandara_terminal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_terminal_to_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_bandara_terminal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_terminal_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belanja_bbm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_checkup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_riil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uang_harian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_transportasi_darat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_tiket_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_bahan_bakar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_penginapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_representase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_perjalanan_dinas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa_nilai_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nama_pesawat_ka_bus_kapal_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_kode_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nama_pesawat_ka_bus_kapal_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_kode_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_checkout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spj_kepala`
--

INSERT INTO `spj_kepala` (`id`, `tanggal`, `no_sppd`, `nama_lengkap`, `nip`, `jabatan`, `pangkat`, `golongan`, `unit`, `tingkat_biaya`, `tanggal_berangkat`, `tanggal_kembali`, `selama`, `tinggal_to_bandara_terminal`, `bandara_terminal_to_tujuan`, `tujuan_bandara_terminal`, `bandara_terminal_tinggal`, `biaya_hotel`, `belanja_bbm`, `transport_pp`, `medical_checkup`, `total_riil`, `uang_harian`, `biaya_transportasi_darat`, `biaya_tiket_pesawat`, `biaya_bahan_bakar`, `biaya_penginapan`, `biaya_representase`, `daftar_pernyataan`, `total_perjalanan_dinas`, `kode_kegiatan`, `nilai_kegiatan`, `sisa_nilai_kegiatan`, `kode_rekening`, `keperluan`, `daerah_tujuan`, `instansi_tujuan`, `keberangkatan_nama_pesawat_ka_bus_kapal_lainnya`, `keberangkatan_kode_booking`, `keberangkatan_nomor_tiket`, `keberangkatan_nomor_seat`, `keberangkatan_nomor_flight`, `kedatangan_nama_pesawat_ka_bus_kapal_lainnya`, `kedatangan_kode_booking`, `kedatangan_nomor_tiket`, `kedatangan_nomor_seat`, `kedatangan_nomor_flight`, `nama_hotel`, `nomor_kamar`, `tgl_checkin`, `tgl_checkout`, `email`, `telp_hotel`, `alamat_hotel`, `dokumen_pendukung`, `jumlah_total`, `created_at`, `updated_at`, `id_user`) VALUES
(4, '2021-12-06', '03/ST/SETDA-III/2021', 'BG IRFAN', '121324242424', 'sasa', 'Pembina Utama Madya', 'IVD', 'dds', 'C', '2021-12-06', '2021-12-09', '3', '123000', '123000', '123000', '123000', '333600', '100000', '100000', '100000', '1125600', '370000', '100000', '100000', '100000', '300000', '75000', '100000', '1145000', '1234567543', '100007936768', '100005666168', '1313214324343', 'jkhdfjhkjdahfjhadjhfjkahdkjfjkadhfccxcdaljflkjladk', 'Makassar', 'Kantor Bappeda', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Pondok Indah', '009', '2021-12-09', '2021-12-10', '-', '-', '-', '1638798645Data-SPJ-Staff (3).xls', '2270600', '2021-12-06 06:50:45', '2021-12-06 06:50:45', 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spj_staff`
--

CREATE TABLE `spj_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sppd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `selama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggal_to_bandara_terminal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_terminal_to_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_bandara_terminal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bandara_terminal_tinggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belanja_bbm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_pp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medical_checkup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_riil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uang_harian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_transportasi_darat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_tiket_pesawat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_bahan_bakar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_penginapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya_representase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daftar_pernyataan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_perjalanan_dinas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sisa_nilai_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keperluan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daerah_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instansi_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nama_pesawat_ka_bus_kapal_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_kode_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keberangkatan_nomor_flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nama_pesawat_ka_bus_kapal_lainnya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_kode_booking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kedatangan_nomor_flight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_checkin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_checkout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen_pendukung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `spj_staff`
--

INSERT INTO `spj_staff` (`id`, `tanggal`, `no_sppd`, `nama_lengkap`, `nip`, `jabatan`, `pangkat`, `golongan`, `unit`, `tingkat_biaya`, `tanggal_berangkat`, `tanggal_kembali`, `selama`, `tinggal_to_bandara_terminal`, `bandara_terminal_to_tujuan`, `tujuan_bandara_terminal`, `bandara_terminal_tinggal`, `biaya_hotel`, `belanja_bbm`, `transport_pp`, `medical_checkup`, `total_riil`, `uang_harian`, `biaya_transportasi_darat`, `biaya_tiket_pesawat`, `biaya_bahan_bakar`, `biaya_penginapan`, `biaya_representase`, `daftar_pernyataan`, `total_perjalanan_dinas`, `kode_kegiatan`, `nilai_kegiatan`, `sisa_nilai_kegiatan`, `kode_rekening`, `keperluan`, `daerah_tujuan`, `instansi_tujuan`, `keberangkatan_nama_pesawat_ka_bus_kapal_lainnya`, `keberangkatan_kode_booking`, `keberangkatan_nomor_tiket`, `keberangkatan_nomor_seat`, `keberangkatan_nomor_flight`, `kedatangan_nama_pesawat_ka_bus_kapal_lainnya`, `kedatangan_kode_booking`, `kedatangan_nomor_tiket`, `kedatangan_nomor_seat`, `kedatangan_nomor_flight`, `nama_hotel`, `nomor_kamar`, `tgl_checkin`, `tgl_checkout`, `email`, `telp_hotel`, `alamat_hotel`, `dokumen_pendukung`, `jumlah_total`, `created_at`, `updated_at`, `id_user`) VALUES
(4, '2021-11-30', '01.2 /SPPD/KEU-XI/2021', 'yusuf', '12345678', 'Staf', 'Penata Muda', 'IIIA', '8', 'F', '2021-12-04', '2021-12-07', '3', '123000', '123000', '232000', '94000', '420000', '100000', '100000', '100000', '1292000', '480000', '100000', '100000', '100000', '1400000', '75000', '100000', '2355000', '4343545465', '99999378036', '99995731036', '5465465767', 'dfsdfsdf', 'Majene', 'Kantor Bappeda', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'Devina Hotel', '009', '2021-12-14', '2021-12-17', '-', '-', '-', '163829064128692-6-funeral-transparent-image.png', '3647000', '2021-11-30 09:44:01', '2021-11-30 09:44:01', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `selama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_angkutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasar_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_anggaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_berlaku` date NOT NULL,
  `tanda_tangan_dokumen_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_tugas`
--

INSERT INTO `surat_tugas` (`id`, `no_surat_tugas`, `tanggal`, `tanggal_berangkat`, `tanggal_kembali`, `selama`, `alat_angkutan`, `tempat_berangkat`, `tempat_tujuan`, `dasar_surat`, `uraian`, `sumber_anggaran`, `mulai_berlaku`, `tanda_tangan_dokumen_id`, `created_at`, `updated_at`, `id_user`) VALUES
(4, '01/ST/KEU-III/2021', '2021-12-01', '2021-12-04', '2021-12-07', '3', 'Kendaraan Dinas', 'Mamuju', 'Majene', '-', 'dfsdfsdf', 'Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Anggaran Provinsi Sulawesi Barat', '2021-12-01', 2, '2021-11-30 09:10:46', '2021-11-30 09:11:12', 11),
(6, '01/ST/KEU-XII/2021', '2021-12-03', '2021-12-03', '2021-12-06', '3', 'Kendaraan Umum', 'Mamuju', 'Makassar', '-', '-', 'Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Anggaran Provinsi Sulawesi Barat', '2021-12-03', 1, '2021-12-03 08:33:12', '2021-12-03 08:33:12', 13),
(8, '01/ST/KEU-XII/2021', '2021-12-07', '2021-12-07', '2021-12-10', '3', 'Kendaraan Umum', 'Mamuju', 'Pasangkayu', 'undangan', 'koordinasi terkait undangan', 'Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Anggaran Provinsi Sulawesi Barat', '2021-12-07', 2, '2021-12-07 07:37:48', '2021-12-07 07:37:48', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas_kepala`
--

CREATE TABLE `surat_tugas_kepala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat_tugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sppd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `selama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_angkutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_berangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasar_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_anggaran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mulai_berlaku` date NOT NULL,
  `tanda_tangan_dokumen_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_tugas_kepala`
--

INSERT INTO `surat_tugas_kepala` (`id`, `no_surat_tugas`, `no_sppd`, `nip`, `tanggal`, `tanggal_berangkat`, `tanggal_kembali`, `selama`, `alat_angkutan`, `tempat_berangkat`, `tempat_tujuan`, `dasar_surat`, `uraian`, `sumber_anggaran`, `mulai_berlaku`, `tanda_tangan_dokumen_id`, `created_at`, `updated_at`, `id_user`) VALUES
(5, '03/ST/SETDA-III/2021', '03/ST/SETDA-III/2021', '121324242424', '2021-12-06', '2021-12-06', '2021-12-09', '3', 'Kendaraan Dinas', 'Mamuju', 'Makassar', 'Koordinasi UPT terkait', 'jkhdfjhkjdahfjhadjhfjkahdkjfjkadhfccxcdaljflkjladk', 'Segala biaya yang timbul akibat dikeluarkannya Surat Perintah Tugas ini dibebankan pada Anggaran Provinsi Sulawesi Barat', '2021-12-06', 1, '2021-12-06 06:42:06', '2021-12-06 06:42:19', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanda_tangan_dokumen`
--

CREATE TABLE `tanda_tangan_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tanda_tangan_dokumen`
--

INSERT INTO `tanda_tangan_dokumen` (`id`, `nama_lengkap`, `nip`, `jabatan`, `golongan`, `pangkat`, `status_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Aziz', '434353545', 'vdvdv', 'IVB', 'Pembina Tingkat 1', 'Asisten III', '2021-11-26 21:07:35', '2021-11-26 21:07:35'),
(2, 'Kadir Muh', '2312435346571212', 'Kepala UPTD', 'IIA', 'Pengatur Muda', 'Kepala UPTD', '2021-11-30 09:08:24', '2021-11-30 09:08:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_user`
--

CREATE TABLE `tipe_user` (
  `id_tipe` bigint(20) UNSIGNED NOT NULL,
  `user_tipe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_user`
--

INSERT INTO `tipe_user` (`id_tipe`, `user_tipe`) VALUES
(1, 'User UPT Umum'),
(2, 'User UPT Perencanaan'),
(3, 'User UPT Akuntansi'),
(4, 'User UPT Aset'),
(5, 'User UPT Aset'),
(6, 'User UPT Perbendaharaan'),
(7, 'User UPT IT'),
(8, 'User UPT Program');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi_to_bandara`
--

CREATE TABLE `transportasi_to_bandara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasi_to_bandara`
--

INSERT INTO `transportasi_to_bandara` (`id`, `provinsi`, `satuan`, `besaran`) VALUES
(1, 'ACEH', 'Org/Kali', 123000),
(2, 'SUMATERA UTARA', 'Org/Kali', 232000),
(3, 'RIAU', 'Org/Kali', 94000),
(4, 'KEPULAUAN RIAU', 'Org/Kali', 137000),
(5, 'JAMBI', 'Org/Kali', 147000),
(6, 'SUMATERA BARAT', 'Org/Kali', 190000),
(7, 'SUMATERA SELATAN', 'Org/Kali', 128000),
(8, 'LAMPUNG', 'Org/Kali', 167000),
(9, 'BENGKULU', 'Org/Kali', 109000),
(10, 'BANGKA BELITUNG', 'Org/Kali', 90000),
(11, 'BANTEN', 'Org/Kali', 446000),
(12, 'JAWA BARAT', 'Org/Kali', 166000),
(13, 'D.K.I JAKARTA', 'Org/Kali', 256000),
(14, 'JAWA TENGAH', 'Org/Kali', 75000),
(15, 'D.I YOGYAKARTA', 'Org/Kali', 118000),
(16, 'JAWA TIMUR', 'Org/Kali', 194000),
(17, 'BALI', 'Org/Kali', 159000),
(18, 'NUSA TENGGARA BARAT', 'Org/Kali', 231000),
(19, 'NUSA TENGGARA TIMUR', 'Org/Kali', 108000),
(20, 'KALIMANTAN BARAT', 'Org/Kali', 135000),
(21, 'KALIMANTAN TENGAH', 'Org/Kali', 111000),
(22, 'KALIMANTAN SELATAN', 'Org/Kali', 150000),
(23, 'KALIMANTAN TIMUR', 'Org/Kali', 450000),
(24, 'KALIMANTAN UTARA', 'Org/Kali', 102000),
(25, 'SULAWESI UTARA', 'Org/Kali', 138000),
(26, 'GORONTALO', 'Org/Kali', 240000),
(27, 'SULAWESI BARAT', 'Org/Kali', 165000),
(28, 'SULAWESI SELATAN', 'Org/Kali', 145000),
(29, 'SULAWESI TENGAH', 'Org/Kali', 165000),
(30, 'SULAWESI TENGGARA', 'Org/Kali', 171000),
(31, 'MALUKU', 'Org/Kali', 240000),
(32, 'MALUKU UTARA', 'Org/Kali', 215000),
(33, 'PAPUA', 'Org/Kali', 431000),
(34, 'PAPUA BARAT', 'Org/Kali', 182000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasi_to_terminal`
--

CREATE TABLE `transportasi_to_terminal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasi_to_terminal`
--

INSERT INTO `transportasi_to_terminal` (`id`, `provinsi`, `satuan`, `besaran`) VALUES
(1, 'SULAWESI BARAT', 'Org/Kali', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_harian_dalam`
--

CREATE TABLE `uang_harian_dalam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `uang_harian_dalam`
--

INSERT INTO `uang_harian_dalam` (`id`, `provinsi`, `harga`) VALUES
(1, 'Seluruh Kabupaten dan/atau Dalam Kota', '410000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uang_harian_luar`
--

CREATE TABLE `uang_harian_luar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `uang_harian_luar`
--

INSERT INTO `uang_harian_luar` (`id`, `provinsi`, `harga`) VALUES
(1, 'ACEH', '360000'),
(2, 'SUMATERA UTARA', '370000'),
(3, 'RIAU', '370000'),
(4, 'KEPULAUAN RIAU', '370000'),
(5, 'JAMBI', '370000'),
(6, 'SUMATERA BARAT', '380000'),
(7, 'SUMATERA SELATAN', '380000'),
(8, 'LAMPUNG', '380000'),
(9, 'BENGKULU', '380000'),
(10, 'BANGKA BELITUNG', '410000'),
(11, 'BANTEN', '370000'),
(12, 'JAWA BARAT', '430000'),
(13, 'D.K.I JAKARTA', '530000'),
(14, 'JAWA TENGAH', '370000'),
(15, 'D.I YOGYAKARTA', '420000'),
(16, 'JAWA TIMUR', '410000'),
(17, 'BALI', '480000'),
(18, 'NUSA TENGGARA BARAT', '440000'),
(19, 'NUSA TENGGARA TIMUR', '430000'),
(20, 'KALIMANTAN BARAT', '380000'),
(21, 'KALIMANTAN TENGAH', '360000'),
(22, 'KALIMANTAN SELATAN', '380000'),
(23, 'KALIMANTAN TIMUR', '430000'),
(24, 'KALIMANTAN UTARA', '430000'),
(25, 'SULAWESI UTARA', '370000'),
(26, 'GORONTALO', '370000'),
(27, 'SULAWESI SELATAN', '430000'),
(28, 'SULAWESI TENGAH', '370000'),
(29, 'SULAWESI TENGGARA', '380000'),
(30, 'MALUKU', '380000'),
(31, 'MALUKU UTARA', '430000'),
(32, 'PAPUA', '580000'),
(33, 'PAPUA BARAT', '480000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin.jpg',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `email_verified_at`, `password`, `alamat`, `nomor_hp`, `gambar`, `status`, `remember_token`, `created_at`, `updated_at`, `id_tipe`) VALUES
(1, 'Admin', 'admin', NULL, '$2y$10$zpkv2JjEZuHt8PeLT5KgfeD9./6hQjk2.u3Q17SthzaySl54xDOZO', 'Indonesia', '08123456', 'admin.jpg', 'admin', NULL, NULL, NULL, 0),
(11, 'UPTB ASET', 'ASET', NULL, '$2y$10$lkFwjLogcoAiJOvRkWbKM.vfPKWQig2nZY/Bj04MFZJf4IYvynOWy', 'ASET', '-', 'admin.jpg', 'surat_tugas', NULL, '2021-11-30 09:02:17', '2021-11-30 09:02:17', 4),
(12, 'UPTB ASET SPJ', 'ASET SPJ', NULL, '$2y$10$zlJq55U2pz5dsjyzNUMdMuNgWGAAdpwGYMksQgF0pjHn2U3cA.ST.', 'ASET SPJ', '-', 'admin.jpg', 'kwitansi', NULL, '2021-11-30 09:03:05', '2021-11-30 09:03:05', 4),
(13, 'UPTB AKUNTANSI', 'UPTB AKUNTANSI', NULL, '$2y$10$mOm8KQ5bq2mEnpB4Gnd6g.ttCbJm81LglZ6ZeoToGdIisn4L01TZm', 'MAMUJU', '-', 'admin.jpg', 'surat_tugas', NULL, '2021-12-03 08:30:43', '2021-12-03 08:30:43', 3),
(14, 'UPTB AKUNTANSI', 'UPTB AKUNTANSI SPJ', NULL, '$2y$10$s/eqPxqagCg5UPFNKl5YNe6JfubzivYYsM2VNc/ObNQQGhfqanRk.', 'MAMUJU', '-', 'admin.jpg', 'kwitansi', NULL, '2021-12-03 08:31:20', '2021-12-03 08:31:20', 3),
(15, 'UPT IT', 'UPT IT', NULL, '$2y$10$dbsER/pTyQmoNDU56JvpxOFizKTlkKKedaYj3CYqhw8AUnerLocRq', 'MAMUJU', '01', 'admin.jpg', 'surat_tugas', NULL, '2021-12-06 06:34:57', '2021-12-06 06:35:15', 7),
(16, 'UPT IT', 'UPT IT SPJ', NULL, '$2y$10$yIR1G3cblb3sWaPeg.ySse6qUw4uokvCuk.3rtrGkOLC7HPteidUG', 'MAMUJU', '02', 'admin.jpg', 'kwitansi', NULL, '2021-12-06 06:35:51', '2021-12-06 06:35:51', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biaya_hotel`
--
ALTER TABLE `biaya_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `biaya_representasi`
--
ALTER TABLE `biaya_representasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dasar_peraturan`
--
ALTER TABLE `dasar_peraturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kepala_dinas`
--
ALTER TABLE `kepala_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_kerja`
--
ALTER TABLE `program_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `program_kerja_kepala`
--
ALTER TABLE `program_kerja_kepala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spj_kepala`
--
ALTER TABLE `spj_kepala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `spj_staff`
--
ALTER TABLE `spj_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_tugas_kepala`
--
ALTER TABLE `surat_tugas_kepala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanda_tangan_dokumen`
--
ALTER TABLE `tanda_tangan_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_user`
--
ALTER TABLE `tipe_user`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indeks untuk tabel `transportasi_to_bandara`
--
ALTER TABLE `transportasi_to_bandara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transportasi_to_terminal`
--
ALTER TABLE `transportasi_to_terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uang_harian_dalam`
--
ALTER TABLE `uang_harian_dalam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uang_harian_luar`
--
ALTER TABLE `uang_harian_luar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biaya_hotel`
--
ALTER TABLE `biaya_hotel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `biaya_representasi`
--
ALTER TABLE `biaya_representasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dasar_peraturan`
--
ALTER TABLE `dasar_peraturan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_surat`
--
ALTER TABLE `detail_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kepala_dinas`
--
ALTER TABLE `kepala_dinas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `program_kerja`
--
ALTER TABLE `program_kerja`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `program_kerja_kepala`
--
ALTER TABLE `program_kerja_kepala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `spj_kepala`
--
ALTER TABLE `spj_kepala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `spj_staff`
--
ALTER TABLE `spj_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `surat_tugas_kepala`
--
ALTER TABLE `surat_tugas_kepala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tanda_tangan_dokumen`
--
ALTER TABLE `tanda_tangan_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tipe_user`
--
ALTER TABLE `tipe_user`
  MODIFY `id_tipe` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transportasi_to_bandara`
--
ALTER TABLE `transportasi_to_bandara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `transportasi_to_terminal`
--
ALTER TABLE `transportasi_to_terminal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `uang_harian_dalam`
--
ALTER TABLE `uang_harian_dalam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `uang_harian_luar`
--
ALTER TABLE `uang_harian_luar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
