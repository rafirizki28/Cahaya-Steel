-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 08:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cahaya_steel`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_brg` varchar(255) NOT NULL,
  `deskripsi_brg` varchar(1200) NOT NULL,
  `foto_brg` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_brg`, `deskripsi_brg`, `foto_brg`, `created_at`, `updated_at`) VALUES
(1, 'Jendela Sleding Alumunium', '<div>Pemasangan mudah hanya ditempel saja<br>Warna : HITAM<br>Variasi Ukuran :<br>- 40 x 125 Cm&nbsp;<br>- 45 x 125 Cm&nbsp;<br>- 50 x 125 Cm&nbsp;<br>- 58 x 125 Cm<br>&nbsp;<br>Keuntungan :&nbsp;<br>- PRAKTIS&nbsp;<br>- Tirai penutup jendela/kaca tanpa perlu skrup ataupun membolongkan dinding.&nbsp;<br>- bahan terbuat dari pvc jadi aman meskipun terkena air dan panas matahari&nbsp;<br>- kuat dan tahan lama.<br>- panjang kebawah bisa disesuaikan sesuai kebutuhan (naik turun buka tutup)&nbsp;<br>- mudah dibersihkan</div>', 'Jendela 450x300.jpg', '2023-08-30 22:59:05', '2023-08-30 23:03:13'),
(2, 'Kanopi Alderon RS + Plavon PVC', '<div>Spesialis pemasangan :<br>&nbsp;Kanopi minimalis, Pagar minimalis,<br>Stenlis kaca, Kusen aluminium,<br>Baja ringan,&nbsp; Pintu handerson,<br>Cutting laser, Pintu besi,<br>Polding gate Relling &amp; Balkon rumah<br>Dan Lain-lainnya<br><br>Kenapa sih harus order di kami<br>1 Gratis survei dan konsultasi membawa contoh bahannya yang mau di gunakan<br>2 Selalu di usahakan respon cepat<br>3 Pemasangan di usahakan cepat dan rapih serta kepuasan konsumen<br>4 Di kerjakan dengan tenaga ahli dan berpengalaman<br><br>Kanopi adalah atap tambahan di luar rumah seperti pada bagian teras atau balkon dan carport yang lazim menghias rumah-rumah masa kini.<br>Kanopi berfungsi untuk menahan panas sehingga rumah akan terasa lebih teduh dan juga terlindungi dari kucuran langsung air hujan.<br>Kanopi berfungsi untuk menahan panas sehingga rumah akan terasa lebih teduh dan juga terlindungi dari kucuran langsung air hujan.<br><br>NOTE : HARGA HITUNGAN PERMETER</div>', 'Kanopi 450x300.jpg', '2023-08-30 23:00:54', '2023-08-30 23:01:57'),
(3, 'Meja Makan Warkop Modern', '<div>Meja makan<br>Warkop modern meja restoran/kafe<br>bahan Jati Belanda kokoh dan kuat<br>ukuran<br>P 120<br>L 60<br>T 75<br>ukuran bangku 35x35x45 senderan<br>sangat sepek menemalis<br>warna kaki hitam</div>', 'Meja 450x300.jpg', '2023-08-30 23:09:49', '2023-08-30 23:09:49'),
(4, 'Pagar Kayu WPC', '<div>KA100S10&nbsp;<br>Harga = 150.000 /&nbsp; Batang<br>Ukuran 10 cm x 290 cm<br>Tebal 1 cm<br><br>KA150S12<br>Harga = 210.000 / Batang<br>Ukuran 15 cm x 290 cm<br>Tebal 1,2 cm<br><br>KA145K13<br>Harga = 158.000 / Batang<br>Ukuran 14,5 cm x 290 cm<br>Tebal 1,3 cm</div>', 'Pagar 450x300.jpg', '2023-08-30 23:11:38', '2023-08-30 23:11:38'),
(5, 'FORTRESS Pintu baja premium black', '<div>Spesifikasi&nbsp;<br>FORTRESS FORT<br>ukuran :tipe tinggi 150 CM / 120cm / 90 cm x 210 cm&nbsp; x 5 cm&nbsp;<br>ketebalan :<br>plat panel pintu 0.6 mm<br>plat kusen pintu 0.8 mm<br>peredam : honeycomb higt premium&nbsp;<br><br>-MATERIAL BAJA PREMIUM<br>-ANTI SUSUT &amp; LENGKUNG<br>-ANTI RAYAP<br>-PEMASANGAN MUDAH &amp; CEPAT<br>-KEAMANAN MAKSIMAL<br><br>Bukaan pintu fleksibel ( bisa kanan / kiri )<br>kuat dan praktis<br>(garansi 2 tahun )</div>', 'Pintu 450x300.jpg', '2023-08-30 23:14:04', '2023-08-30 23:14:04'),
(6, 'Tangga putar minimalis dan ralling tangga', '<div>Bahan menggunakan Besi galvanis full..<br><br>dengan ukuran bahan yang digunakan.<br>1. Tiang.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: Pipa 4\"&nbsp;<br>2. Ralling&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: hollow&nbsp; 40 x 20<br>3. Trap anak tangga.: Siku. 40 x 40&nbsp;<br>4. Pijakan.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: plat bordes&nbsp;<br><br>Harga diatas per - unit dengan ketinggian 3 meter.&nbsp;<br>Diameter lingkaran. 120<br><br>Sudah berikut pemasangan dan gratis surpay.</div>', 'Tangga Putar 450x300.jpg', '2023-08-30 23:17:25', '2023-08-30 23:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_07_143336_create_barangs_table', 1),
(7, '2023_08_07_153559_create_pembelianbahanbakus_table', 1),
(8, '2023_08_10_144127_create_pembayarans_table', 1),
(9, '2023_08_10_144238_create_pemesanans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kd_pby` varchar(255) NOT NULL,
  `metode_bayar_pby` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `kd_pby`, `metode_bayar_pby`, `created_at`, `updated_at`) VALUES
(1, 'P003', 'Cicilan', '2023-08-30 23:18:14', '2023-08-30 23:18:14'),
(2, 'P002', 'Transfer', '2023-08-30 23:18:23', '2023-08-30 23:18:23'),
(3, 'P001', 'Cash', '2023-08-30 23:18:30', '2023-08-30 23:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `pembelianbahanbakus`
--

CREATE TABLE `pembelianbahanbakus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pbb` varchar(255) NOT NULL,
  `tanggal_pbb` date NOT NULL,
  `jumlah_pbb` varchar(255) NOT NULL,
  `harga_pbb` varchar(255) NOT NULL,
  `foto_pbb` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barangs_id` bigint(20) NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `phone_number_pms` varchar(255) NOT NULL,
  `alamat_pms` varchar(255) NOT NULL,
  `tgl_pms` varchar(255) NOT NULL,
  `pembayarans_id` bigint(20) NOT NULL,
  `jumlah_pms` varchar(255) NOT NULL,
  `status_pms` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$oM0HiWGn/5GpUgBglEP13ewVXWAU23oyx3N7g7TvhZ05L8KaFuI9C', NULL, '2023-08-30 22:53:36', '2023-08-30 22:53:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelianbahanbakus`
--
ALTER TABLE `pembelianbahanbakus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembelianbahanbakus`
--
ALTER TABLE `pembelianbahanbakus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
