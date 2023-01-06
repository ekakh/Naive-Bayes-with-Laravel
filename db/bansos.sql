-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Agu 2022 pada 08.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akuns`
--

CREATE TABLE `akuns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon`
--

CREATE TABLE `calon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dinding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_air` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_listrik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_mck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `calon`
--

INSERT INTO `calon` (`id`, `no_kk`, `nik`, `nama_kk`, `jk`, `dusun`, `rt`, `rw`, `tanggungan`, `pekerjaan`, `penghasilan`, `jenis_lantai`, `jenis_dinding`, `sumber_air`, `sumber_listrik`, `sk_mck`, `sk_rumah`, `created_at`, `updated_at`) VALUES
(47, '324487878511', '324487878803', 'Fajar', 'Laki-Laki', 'Mekarmulya', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(48, '324487878512', '324487878804', 'Maman', 'Laki-Laki', 'Mekarmulya', '2', '1', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(49, '324487878513', '324487878805', 'Sutarja', 'Laki-Laki', 'Mekarmulya', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(50, '324487878514', '324487878806', 'Eman', 'Laki-Laki', 'Mekarmulya', '2', '1', 3, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(51, '324487878515', '324487878807', 'Usep', 'Laki-Laki', 'Mekarmulya', '2', '1', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(52, '324487878516', '324487878808', 'Sutanto', 'Laki-Laki', 'Mekarmulya', '1', '2', 3, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(53, '324487878522', '324487878814', 'Aldi', 'Laki-Laki', 'Mekarmulya', '2', '2', 3, 'Wiraswasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(54, '324487878523', '324487878815', 'Diki', 'Laki-Laki', 'Mekarmulya', '2', '2', 5, 'Buruh Harian Lepas', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(55, '324487878524', '324487878816', 'Asep', 'Laki-Laki', 'Mekarmulya', '3', '2', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(56, '324487878525', '324487878817', 'Tarjo', 'Laki-Laki', 'Mekarmulya', '3', '2', 4, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(57, '324487878526', '324487878818', 'Sugih', 'Laki-Laki', 'Mekarmulya', '3', '2', 3, 'Buruh Harian Lepas', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(58, '324487878527', '324487878819', 'Eriyanto', 'Laki-Laki', 'Mekarmulya', '3', '2', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(59, '324487878543', '324487878835', 'Ujang', 'Laki-Laki', 'Mawarsari', '1', '2', 2, 'Transportasi/Sopir', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(60, '324487878544', '324487878836', 'Pepen', 'Laki-Laki', 'Mawarsari', '1', '2', 2, 'Buruh Tani', '1.100.000 - 2.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(61, '324487878545', '324487878837', 'Cahyadi', 'Laki-Laki', 'Mawarsari', '2', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(62, '324487878546', '324487878838', 'Deden', 'Laki-Laki', 'Mawarsari', '2', '2', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(63, '324487878547', '324487878839', 'Eko', 'Laki-Laki', 'Mawarsari', '2', '2', 3, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(64, '324487878548', '324487878840', 'Dani', 'Laki-Laki', 'Mekarsari', '1', '1', 3, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(65, '324487878549', '324487878841', 'Karim', 'Laki-Laki', 'Mekarsari', '1', '1', 3, 'Transportasi/Sopir', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(66, '324487878550', '324487878842', 'Purwanto', 'Laki-Laki', 'Mekarsari', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(67, '324487878551', '324487878843', 'Dadang', 'Laki-Laki', 'Mekarsari', '2', '1', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09'),
(68, '324487878552', '324487878844', 'Juhari', 'Laki-Laki', 'Mekarsari', '2', '1', 3, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', '2022-08-05 01:16:09', '2022-08-05 01:16:09');

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
-- Struktur dari tabel `jenis_kriteria`
--

CREATE TABLE `jenis_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_kriteria`
--

INSERT INTO `jenis_kriteria` (`id`, `kode_jk`, `nama_jk`, `created_at`, `updated_at`) VALUES
(1, 'k01', 'Tanggungan', '2022-08-04 18:45:32', '2022-08-04 18:45:32'),
(2, 'k02', 'Pekerjaan', '2022-08-04 18:45:32', '2022-08-04 18:45:32'),
(3, 'k03', 'Penghasilan', '2022-08-04 18:46:28', '2022-08-04 18:46:28'),
(4, 'k04', 'Jenis Lantai', '2022-08-04 18:46:28', '2022-08-04 18:46:28'),
(5, 'k05', 'Jenis Dinding', '2022-08-04 18:46:28', '2022-08-04 18:46:28'),
(6, 'k06', 'Sumber Listrik', '2022-08-04 18:47:57', '2022-08-04 18:47:57'),
(7, 'k07', 'Sumber Air', '2022-08-04 18:47:57', '2022-08-04 18:47:57'),
(8, 'k08', 'SK MCK', '2022-08-04 18:47:57', '2022-08-04 18:47:57'),
(9, 'K09', 'SK Rumah', '2022-08-04 18:47:57', '2022-08-04 18:47:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `jenis_kriteria`, `kode_kriteria`, `nama_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Tanggungan', 'KA1', '0', '2022-08-04 18:51:15', '2022-08-04 18:51:15'),
(2, 'Tanggungan', 'KA2', '1', '2022-08-04 18:51:28', '2022-08-04 18:51:28'),
(3, 'Tanggungan', 'KA3', '2', '2022-08-04 18:52:23', '2022-08-04 18:52:23'),
(4, 'Tanggungan', 'KA4', '3', '2022-08-04 18:52:40', '2022-08-04 18:52:40'),
(5, 'Tanggungan', 'KA5', '4', '2022-08-04 18:52:55', '2022-08-04 18:52:55'),
(6, 'Tanggungan', 'KA6', '5', '2022-08-04 18:54:12', '2022-08-04 18:54:12'),
(7, 'Pekerjaan', 'KB1', 'Buruh Tani', '2022-08-04 18:58:43', '2022-08-04 18:58:43'),
(8, 'Pekerjaan', 'KB2', 'Buruh Harian Lepas', '2022-08-04 18:58:56', '2022-08-04 18:58:56'),
(9, 'Pekerjaan', 'KB3', 'Wiraswasta', '2022-08-04 18:59:16', '2022-08-04 18:59:16'),
(10, 'Pekerjaan', 'KB4', 'Karyawan Honorer', '2022-08-04 18:59:32', '2022-08-04 18:59:32'),
(11, 'Pekerjaan', 'KB5', 'Karyawan Swasta', '2022-08-04 18:59:57', '2022-08-04 18:59:57'),
(12, 'Pekerjaan', 'KB6', 'Transportasi/Sopir', '2022-08-04 19:00:21', '2022-08-04 19:00:21'),
(13, 'Pekerjaan', 'KB7', 'Pegawai Negeri Sipil', '2022-08-04 19:00:46', '2022-08-04 19:00:46'),
(14, 'Pekerjaan', 'KB8', 'Tenaga Kesehatan', '2022-08-04 19:01:11', '2022-08-04 19:01:11'),
(15, 'Penghasilan', 'KC1', '0 - 1.000.000', '2022-08-04 19:01:32', '2022-08-04 19:01:32'),
(16, 'Penghasilan', 'KC2', '1.100.000 - 2.000.000', '2022-08-04 19:01:47', '2022-08-04 19:01:47'),
(17, 'Penghasilan', 'KC3', '2.100.000 - 3.000.000', '2022-08-04 19:02:06', '2022-08-04 19:02:06'),
(18, 'Penghasilan', 'KC4', '3.100.000 - 4.000.000', '2022-08-04 19:02:22', '2022-08-04 19:02:22'),
(19, 'Penghasilan', 'KC5', '4.100.000 - 5.000.000', '2022-08-04 19:02:46', '2022-08-04 19:02:46'),
(20, 'Penghasilan', 'KC6', '5.100.000 - 6.000.000', '2022-08-04 19:03:07', '2022-08-04 19:03:07'),
(21, 'Penghasilan', 'KC7', '> 6.100.000', '2022-08-04 19:03:26', '2022-08-04 19:03:26'),
(22, 'Jenis Lantai', 'KD1', 'Keramik', '2022-08-04 19:03:51', '2022-08-04 19:03:51'),
(23, 'Jenis Lantai', 'KD2', 'Non-Keramik', '2022-08-04 19:04:08', '2022-08-04 19:04:08'),
(24, 'Jenis Dinding', 'KE1', 'Bata', '2022-08-04 19:04:24', '2022-08-04 19:04:24'),
(25, 'Jenis Dinding', 'KE2', 'Bambu', '2022-08-04 19:04:35', '2022-08-05 01:09:30'),
(26, 'Sumber Listrik', 'KF1', 'PLN', '2022-08-04 19:04:57', '2022-08-04 19:04:57'),
(27, 'Sumber Air', 'KG1', 'Sumur', '2022-08-04 19:05:15', '2022-08-04 19:05:15'),
(28, 'Sumber Air', 'KG2', 'PDAM', '2022-08-04 19:05:31', '2022-08-04 19:05:31'),
(29, 'SK MCK', 'KH1', 'Milik Sendiri', '2022-08-04 19:05:50', '2022-08-04 19:05:50'),
(30, 'SK MCK', 'KH2', 'Umum', '2022-08-04 19:06:06', '2022-08-04 19:06:06'),
(31, 'SK Rumah', 'KI1', 'Milik Sendiri', '2022-08-04 19:06:18', '2022-08-04 19:06:18'),
(34, 'Tanggungan', 'KR1', '6', '2022-08-05 03:36:30', '2022-08-05 03:36:30');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_28_082044_create_calon_table', 1),
(6, '2022_07_01_074415_create_penerima_table', 1),
(7, '2022_07_11_093947_create_jenis_kriteria_table', 1),
(8, '2022_07_11_095054_create_kriteria_table', 1),
(9, '2022_07_12_140144_create_roles_table', 1),
(10, '2022_07_12_140759_add_roles_id_to_users_table', 1),
(11, '2022_07_12_150115_create_akuns_table', 1);

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
-- Struktur dari tabel `penerima`
--

CREATE TABLE `penerima` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dusun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dinding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_air` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_listrik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_mck` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sk_rumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penerima`
--

INSERT INTO `penerima` (`id`, `no_kk`, `nik`, `nama_kk`, `jk`, `dusun`, `rt`, `rw`, `tanggungan`, `pekerjaan`, `penghasilan`, `jenis_lantai`, `jenis_dinding`, `sumber_air`, `sumber_listrik`, `sk_mck`, `sk_rumah`, `status`, `created_at`, `updated_at`) VALUES
(1, '324487878508', '324487878800', 'Heri', 'Laki-Laki', 'Mekarmulya', '1', '1', 1, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(2, '324487878509', '324487878801', 'Manto', 'Laki-Laki', 'Mekarmulya', '1', '1', 2, 'Karyawan Honorer', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(3, '324487878510', '324487878802', 'Hendra', 'Laki-Laki', 'Mekarmulya', '1', '1', 3, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(4, '324487878517', '324487878809', 'Bambang', 'Laki-Laki', 'Mekarmulya', '1', '2', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(5, '324487878518', '324487878810', 'Saeful', 'Laki-Laki', 'Mekarmulya', '1', '2', 4, 'Wiraswasta', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(6, '324487878519', '324487878811', 'Aris', 'Laki-Laki', 'Mekarmulya', '2', '2', 3, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(7, '324487878520', '324487878812', 'Jono', 'Laki-Laki', 'Mekarmulya', '2', '2', 3, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(8, '324487878521', '324487878813', 'Adit', 'Laki-Laki', 'Mekarmulya', '2', '2', 3, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(9, '324487878528', '324487878820', 'Karsa', 'Laki-Laki', 'Mekarmulya', '3', '2', 2, 'Buruh Tani', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(10, '324487878529', '324487878821', 'Adi', 'Laki-Laki', 'Mekarmulya', '3', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(11, '324487878530', '324487878822', 'Johan', 'Laki-Laki', 'Mekarmulya', '3', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(12, '324487878531', '324487878823', 'Yoga', 'Laki-Laki', 'Mawarsari', '1', '1', 1, 'Transportasi/Sopir', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(13, '324487878532', '324487878824', 'Engkus', 'Laki-Laki', 'Mawarsari', '1', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(14, '324487878533', '324487878825', 'Endang', 'Laki-Laki', 'Mawarsari', '1', '1', 3, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(15, '324487878534', '324487878826', 'Nana', 'Laki-Laki', 'Mawarsari', '1', '1', 2, 'Wiraswasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(16, '324487878535', '324487878827', 'Ade', 'Laki-Laki', 'Mawarsari', '2', '1', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(17, '324487878536', '324487878828', 'Tata', 'Laki-Laki', 'Mawarsari', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(18, '324487878537', '324487878829', 'Dana', 'Laki-Laki', 'Mawarsari', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(19, '324487878538', '324487878830', 'Aceng', 'Laki-Laki', 'Mawarsari', '3', '1', 2, 'Buruh Tani', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(20, '324487878539', '324487878831', 'Koswara', 'Laki-Laki', 'Mawarsari', '3', '1', 3, 'Wiraswasta', '3.100.000 - 4.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(21, '324487878540', '324487878832', 'Dika', 'Laki-Laki', 'Mawarsari', '3', '1', 3, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(22, '324487878541', '324487878833', 'Jaja', 'Laki-Laki', 'Mawarsari', '3', '1', 3, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bata', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(23, '324487878542', '324487878834', 'Sukarja', 'Laki-Laki', 'Mawarsari', '3', '1', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(24, '324487878553', '324487878845', 'Dedi', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Wiraswasta', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(25, '324487878554', '324487878846', 'Heri', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(26, '324487878555', '324487878847', 'Rahmat', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Buruh Tani', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(27, '324487878556', '324487878848', 'Toto', 'Laki-Laki', 'Mekarsari', '3', '1', 4, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(28, '324487878557', '324487878849', 'Akmal', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Buruh Tani', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(29, '324487878558', '324487878850', 'Hartono', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(30, '324487878559', '324487878851', 'Bayu', 'Laki-Laki', 'Mekarsari', '3', '1', 3, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(31, '324487878560', '324487878852', 'Tono', 'Laki-Laki', 'Mekarsari', '3', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(32, '324487878561', '324487878853', 'Andi', 'Laki-Laki', 'Mekarsari', '1', '2', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(33, '324487878562', '324487878854', 'Encep', 'Laki-Laki', 'Mekarsari', '1', '2', 5, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(34, '324487878563', '324487878855', 'Jajang', 'Laki-Laki', 'Mekarsari', '1', '2', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(35, '324487878564', '324487878856', 'Hadi', 'Laki-Laki', 'Mekarsari', '1', '2', 3, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(36, '324487878565', '324487878857', 'Darman', 'Laki-Laki', 'Mekarsari', '2', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(37, '324487878566', '324487878858', 'Jamal', 'Laki-Laki', 'Mekarsari', '2', '2', 1, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(38, '324487878567', '324487878859', 'Enda', 'Laki-Laki', 'Mekarsari', '2', '2', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(39, '324487878568', '324487878860', 'Zidan', 'Laki-Laki', 'Mekarsari', '2', '2', 3, 'Pegawai Negeri Sipil', '5.100.000 - 6.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(40, '324487878569', '324487878861', 'Wawan', 'Laki-Laki', 'Mekarsari', '2', '2', 3, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(41, '324487878570', '324487878862', 'Fitri', 'Laki-Laki', 'Mekarsari', '2', '2', 2, 'Tenaga Kesehatan', '3.100.000 - 4.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(42, '324487878571', '324487878863', 'Dudi', 'Laki-Laki', 'Mekarsari', '2', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(43, '324487878572', '324487878864', 'Burhan', 'Laki-Laki', 'Mekarsari', '2', '2', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(44, '324487878573', '324487878865', 'Tedi', 'Laki-Laki', 'Huludayeuh', '1', '1', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(45, '324487878574', '324487878866', 'Mukhtar', 'Laki-Laki', 'Huludayeuh', '1', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(46, '324487878575', '324487878867', 'Kosasih', 'Laki-Laki', 'Huludayeuh', '1', '1', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(47, '324487878576', '324487878868', 'Jeje', 'Laki-Laki', 'Huludayeuh', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(48, '324487878577', '324487878869', 'Imron', 'Laki-Laki', 'Huludayeuh', '2', '1', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(49, '324487878578', '324487878870', 'Wahyudi', 'Laki-Laki', 'Huludayeuh', '2', '1', 3, 'Wiraswasta', '> 6.100.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(50, '324487878579', '324487878871', 'Deri', 'Laki-Laki', 'Huludayeuh', '2', '1', 3, 'Pegawai Negeri Sipil', '5.100.000 - 6.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(51, '324487878580', '324487878872', 'Imam', 'Laki-Laki', 'Huludayeuh', '3', '1', 2, 'Wiraswasta', '3.100.000 - 4.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(52, '324487878581', '324487878873', 'Tatang', 'Laki-Laki', 'Huludayeuh', '3', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(53, '324487878582', '324487878874', 'Hasan', 'Laki-Laki', 'Huludayeuh', '1', '2', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(54, '324487878583', '324487878875', 'Budi', 'Laki-Laki', 'Huludayeuh', '1', '2', 3, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(55, '324487878584', '324487878876', 'Ayi', 'Laki-Laki', 'Huludayeuh', '1', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(56, '324487878585', '324487878877', 'Ende', 'Laki-Laki', 'Huludayeuh', '2', '2', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(57, '324487878586', '324487878878', 'Heru', 'Laki-Laki', 'Huludayeuh', '2', '2', 2, 'Wiraswasta', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(58, '324487878587', '324487878879', 'Sofiyan', 'Laki-Laki', 'Huludayeuh', '2', '2', 4, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(59, '324487878588', '324487878880', 'Nono', 'Laki-Laki', 'Huludayeuh', '2', '2', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(60, '324487878589', '324487878881', 'Rudi', 'Laki-Laki', 'Huludayeuh', '2', '2', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(61, '324487878590', '324487878882', 'Kosim', 'Laki-Laki', 'Babakan Indah', '1', '1', 1, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(62, '324487878591', '324487878883', 'Eno', 'Laki-Laki', 'Babakan Indah', '1', '1', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(63, '324487878592', '324487878884', 'Farhan', 'Laki-Laki', 'Babakan Indah', '1', '1', 4, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(64, '324487878593', '324487878885', 'Mamat', 'Laki-Laki', 'Babakan Indah', '2', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(65, '324487878594', '324487878886', 'Mumu', 'Laki-Laki', 'Babakan Indah', '2', '1', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Non-Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(66, '324487878595', '324487878887', 'Ahmad', 'Laki-Laki', 'Babakan Indah', '2', '1', 4, 'Karyawan Honorer', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(67, '324487878596', '324487878888', 'Tati', 'Laki-Laki', 'Babakan Indah', '2', '1', 2, 'Wiraswasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(68, '324487878597', '324487878889', 'Faisal', 'Laki-Laki', 'Babakan Indah', '2', '1', 4, 'Pegawai Negeri Sipil', '5.100.000 - 6.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(69, '324487878598', '324487878890', 'Gilang', 'Laki-Laki', 'Babakan Indah', '2', '1', 2, 'Karyawan Swasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(70, '324487878599', '324487878891', 'Iim', 'Laki-Laki', 'Babakan Indah', '2', '1', 2, 'Karyawan Honorer', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(71, '324487878600', '324487878892', 'Raspin', 'Laki-Laki', 'Babakan Indah', '1', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(72, '324487878601', '324487878893', 'Jainudin', 'Laki-Laki', 'Babakan Indah', '1', '2', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(73, '324487878602', '324487878894', 'Suhenda', 'Laki-Laki', 'Babakan Indah', '1', '2', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(74, '324487878603', '324487878895', 'Ende', 'Laki-Laki', 'Babakan Indah', '2', '2', 3, 'Buruh Tani', '0 - 1.000.000', 'Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(75, '324487878604', '324487878896', 'Aji', 'Laki-Laki', 'Babakan Indah', '2', '2', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(76, '324487878605', '324487878897', 'Agung', 'Laki-Laki', 'Cangkore', '1', '1', 2, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(77, '324487878606', '324487878898', 'Rustam', 'Laki-Laki', 'Cangkore', '1', '1', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(78, '324487878607', '324487878899', 'Udin', 'Laki-Laki', 'Cangkore', '1', '1', 2, 'Wiraswasta', '3.100.000 - 4.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(79, '324487878608', '324487878900', 'Purwanto', 'Laki-Laki', 'Cangkore', '1', '1', 2, 'Buruh Harian Lepas', '1.100.000 - 2.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(80, '324487878609', '324487878901', 'Mamat', 'Laki-Laki', 'Cangkore', '2', '1', 2, 'Karyawan Honorer', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(81, '324487878610', '324487878902', 'Hendra', 'Laki-Laki', 'Cangkore', '2', '1', 4, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(82, '324487878611', '324487878903', 'Mulyono', 'Laki-Laki', 'Cangkore', '2', '1', 3, 'Wiraswasta', '3.100.000 - 4.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(83, '324487878612', '324487878904', 'Yohan', 'Laki-Laki', 'Cangkore', '2', '1', 2, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(84, '324487878613', '324487878905', 'Ali', 'Laki-Laki', 'Cangkore', '2', '1', 1, 'Buruh Tani', '1.100.000 - 2.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(85, '324487878614', '324487878906', 'Handoyo', 'Laki-Laki', 'Cangkore', '2', '1', 3, 'Buruh Tani', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Umum', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(86, '324487878615', '324487878907', 'Mahadi', 'Laki-Laki', 'Cangkore', '3', '1', 4, 'Buruh Harian Lepas', '0 - 1.000.000', 'Non-Keramik', 'Bambu', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(87, '324487878616', '324487878908', 'Sukarya', 'Laki-Laki', 'Cangkore', '3', '1', 3, 'Wiraswasta', '2.100.000 - 3.000.000', 'Keramik', 'Bata', 'PDAM', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Tidak Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49'),
(88, '324487878617', '324487878909', 'Arman', 'Laki-Laki', 'Cangkore', '3', '1', 2, 'Transportasi/Sopir', '0 - 1.000.000', 'Keramik', 'Bata', 'Sumur', 'PLN', 'Milik Sendiri', 'Milik Sendiri', 'Layak', '2022-08-04 19:09:49', '2021-08-04 19:09:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nm_roles`, `created_at`, `updated_at`) VALUES
(1, 'Perangkat Desa', '2022-08-04 18:37:25', '2022-08-04 18:37:25'),
(2, 'Kepala Dusun', '2022-08-04 18:41:02', '2022-08-04 18:41:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `roles_id`, `nama`, `jabatan`, `telepon`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 1, 'Eka', 'Kaur Tata Usaha dan Umum', '0828983923', 'eka@gmail.com', NULL, '$2y$10$2OJHyEev73clp6qwRYha6e4LNv2OAv5rdWmnwaiYwRs.iXwJTx74u', NULL, '2022-08-04 18:37:54', '2022-08-04 19:50:50'),
(4, 2, 'Diki', 'Kepala Dusun Mekarmulya', '0812323432', 'diki@gmail.com', NULL, '$2y$10$aaEJl/a26LkxD4PtjI8AreL/8dNFX5W0pIVnPHyTQug9KozPGe076', NULL, '2022-08-04 18:44:25', '2022-08-04 18:44:25');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akuns`
--
ALTER TABLE `akuns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_kriteria`
--
ALTER TABLE `jenis_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
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
-- Indeks untuk tabel `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akuns`
--
ALTER TABLE `akuns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `calon`
--
ALTER TABLE `calon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_kriteria`
--
ALTER TABLE `jenis_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
