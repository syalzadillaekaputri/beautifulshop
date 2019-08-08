-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 12:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautifulshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_02_163616_create_produk', 1),
(2, '2019_08_02_165752_create_kontak', 2),
(3, '2019_08_03_041058_create_users_table', 3),
(4, '2019_08_05_172305_tambah_kolom_image', 4),
(5, '2019_08_05_182716_create_carts_table', 5),
(6, '2019_08_05_191505_create_transaksis_table', 6),
(7, '2019_08_05_191512_create_transaksi_details_table', 7),
(8, '2019_08_05_200537_tambah_image_transaksi', 8);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` int(100) NOT NULL,
  `jumlah_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga_produk`, `jumlah_produk`, `keterangan_produk`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Clay Mask', 447800, '30', 'Untuk  wajah yang berminyak dan berjerawatt', NULL, '2019-08-07 04:57:42', 'enH7VtUB3133Y6RkQT4xbVWaMNLOdEe8UUbV2OnG.jpeg'),
(2, 'Peel off Mask', 420000, '50', 'Untuk mengangkat komedo', NULL, '2019-08-07 04:55:55', '2V3HeZy9j2PTO6ZMmwyIColEatL76KBYiFsUffmF.jpeg'),
(3, 'Gel Mask', 225000, '45', 'Untuk wajah kering dan bisa dijadikan sleeping mask', NULL, '2019-08-07 04:55:11', '1HM8wsMQXO139w2GVBFqY38yxYqXZ95ZHrgdgDDX.png'),
(4, 'Sheet Mask', 425000, '200', 'Untuk semua jenis kulit', NULL, '2019-08-07 04:54:39', 'oqyy2J1h2WkZV8IKDLxW5S29irp7pVeue0pXS3vr.jpeg'),
(5, 'Powder Foundation', 150000, '45', 'Untuk semua jenis kulit', NULL, '2019-08-07 04:22:27', 'bkehe7bpIZeXIIIDr3vgQuSlJPmbeh1GE955EfOG.png'),
(6, 'Lipstik', 525000, '45', 'Lipstik matte', NULL, '2019-08-07 04:53:19', 'JS8Kpxt1VHGGDVDZwEUdI0mHzvaaPTUJsp48iPAJ.jpeg'),
(7, 'Lip Stain', 225000, '10', 'Lip tint', NULL, '2019-08-07 04:52:47', 'VSbX39eICnkXJc25yrALn4P3CMF1HqHLlZSuf6D0.jpeg'),
(8, 'Lip Balm', 125000, '30', 'Pelembab bibir', NULL, '2019-08-07 04:52:21', 'WzkhmGlCwQgJ7rbvsBdXrBI6NEyoMs0bpkQJBskN.jpeg'),
(9, 'Lip Primer', 225000, '25', 'Untuk memastikan produk bibir long lasting', NULL, '2019-08-07 04:51:54', 'CEuitt9IOCnu2x7SbOJkqyVOABN6lxtdy2kOze4e.jpeg'),
(10, 'Lip Liner', 230000, '50', 'Untuk menggarisi bibir', NULL, '2019-08-07 04:51:26', 'NSpq3GfCWdjI5MMMKS2zKFpYyBQvCPg3vSzqOVn0.jpeg'),
(11, 'Lip Gloss', 430000, '30', 'Lip glitter', NULL, '2019-08-07 04:50:55', 'YSFBqXcRiHw4IPZ1gvDRX40SKpmNURdjEm2EVR2I.png'),
(12, 'Lip Mask', 330000, '35', 'Lip sleeping mask', NULL, '2019-08-07 04:50:03', 'jUSDRBZhy5CGGsaQAV49E10v0gJK6vF9mODDD4FR.jpeg'),
(13, 'Lip Scrub', 235000, '150', 'Untuk melembutkan bibir', NULL, '2019-08-07 04:49:29', 't1Hf2Tg0eNJiTkXJ9JAZMIaCwuJBTR8xv4YIgqzB.jpeg'),
(14, 'Lip Serum', 240000, '20', 'Untuk asupan vitamin bibir', NULL, '2019-08-07 04:49:01', 'HHXSLO6hyaFDqVu8rTPWRD5nJggYPUbg6ET2K7L3.jpeg'),
(15, 'Lip Plumper', 242500, '35', 'Untuk bibir tampak lebih sexy', NULL, '2019-08-07 04:48:29', '505x0IsMNVHXP1wRI6Ma0dnHLUWKU5cF0eUq8YSq.jpeg'),
(16, 'Cream Blush', 335000, '50', 'Untuk kulit kering', NULL, '2019-08-07 04:48:03', '2Ke3YqhbOy6jXsK0Je2eqv5rJO5tw1lOFeRDfvil.jpeg'),
(17, 'Gel Blush', 147000, '45', 'Untuk kulit berminyak', NULL, '2019-08-07 04:47:21', 'sOGwLyFhMXeHu13oC0hraD57NJrVRzaZ3ysZrAhc.jpeg'),
(18, 'Shimmer Blush', 148000, '55', 'Untuk memberikan efek bercahaya/glitter', NULL, '2019-08-07 04:46:33', 'Ef0kedppzDcWZjwZzF1m7AAmtSvx5iGswNsvQwLb.jpeg'),
(19, 'Powder Blush', 152000, '60', 'Untuk semua jenis kulit', NULL, '2019-08-07 04:46:03', '5wSzLF4t6vCKZOiGHfrI2uquv3S56nkmPTEbb3uZ.jpeg'),
(20, 'Tint Blush', 141000, '45', 'Untuk kulit berminyak', NULL, '2019-08-07 04:45:31', 'jSmKPpoxlu2xghndIUpsISVVR4e8Z6Gs1I1W7uXq.jpeg'),
(21, 'Loose Powder', 427500, '35', 'Untuk kulit berminyak', NULL, '2019-08-07 04:44:50', 'Vtxap2optS5jeetJDzsyso8bbpS0YxYInVOhRmA5.jpeg'),
(22, 'Compact Powder', 424000, '65', 'Untuk kulit kering', NULL, '2019-08-07 04:44:06', 'aN4M7ca0TpdyX3Kv7ZWyoNYdBqQBOZhsK9KiAQg7.png'),
(23, 'Two-Way Cake Powder', 355000, '50', 'Untuk kulit berminyak', NULL, '2019-08-07 04:43:21', '2WZYsUd2Y0SjgrrzwD1nm5JPxwrk9lnvBXIP5a4c.jpeg'),
(24, 'Liquid Powder', 275000, '45', 'Untuk menutupi lingkaran hitam dibawah mata, flek, dan jerawat', NULL, '2019-08-07 04:42:40', 'zoMY49m4PLCop6XECjdU2UMxq4q2270E5qFr3FhZ.jpeg'),
(25, 'Translucent Powder', 180000, '45', 'Untuk setting makeup', NULL, '2019-08-07 04:42:06', 'QzG16Eq18ABcQQOWThb6H4oSDF1JouLQMtDcAvdQ.jpeg'),
(26, 'Shimmer Powder', 150000, '30', 'Untuk memberikan efek bercahaya/glitter', NULL, '2019-08-07 04:41:31', 'tuikWsBLJUbAgw6ih4cWEL1AYCqwEQDPJrjneW2O.jpeg'),
(27, 'Meteorite Powder', 175000, '10', 'Untuk wajah lebih berseri', NULL, '2019-08-07 04:40:42', '8Ae5w9CJQCRfF1JvH0Xc2a122JmsOvZbJt7HcRKk.jpeg'),
(28, 'Mineral Powder', 54000, '20', 'Untuk kulit sensitif', NULL, '2019-08-07 04:39:47', 'byh3T37IzquJDwvXj8viNLctBy1ylmLfwMbJw2lJ.jpeg'),
(29, 'Fiber Mascara', 215000, '35', 'Untuk bulu mata pendek', NULL, '2019-08-07 04:38:49', 'XdLajIt16419gniwsX9jGjgvDjNCjc86RBxzBOC2.jpeg'),
(30, 'Tubing Mascara', 155000, '55', 'Untuk bulu mata pendek, tipis, dan berjarak jarang', NULL, '2019-08-07 04:38:12', 'E9ACtyxqKj47NZQm9kdVrh3L64JMi72lhXJatYxz.jpeg'),
(31, 'Curling Mascara', 125000, '20', 'Untuk bulu mata lurus', NULL, '2019-08-07 04:37:42', 'f0oTR0ylITsFquYsKhwGhHXtCCvjApfipsfGXqke.jpeg'),
(32, 'Waterproof Mascara', 115000, '45', 'Long lasting', NULL, '2019-08-07 04:37:12', 'sHlEyJdUfuPWnrxOAMzBmSusLWA9OS0Q30ws1Y6Z.jpeg'),
(33, 'Natural Mascara', 172300, '50', 'Untuk semua jenis bulu mata', NULL, '2019-08-07 04:36:23', '1EfLoyeLqPppDzK8ja34J72YZg1v7oMlzQPQPQIl.jpeg'),
(34, 'Volumizing Mascara', 166000, '10', 'Untuk bulu mata lebih tebal', NULL, '2019-08-07 04:35:44', 'MfmUBZpbJwlZUktwCqSsigHnf0MrDdzegPvuJl04.jpeg'),
(35, 'Clump-Free Mascara', 184000, '35', 'Untuk menghindari terjadinya clumping pada bulu mata', NULL, '2019-08-07 04:34:57', 'KTTZQqEviXPGCpXLmanmKb4Fl3KZmuKyqAC0bJ38.jpeg'),
(36, 'Bottom-Lash Mascara', 172500, '45', 'Untuk bulu mata tertentu', NULL, '2019-08-07 04:34:16', 'eQnZG0cW67urW3uKkxnlkY29MfZ6nakwbjd67WqK.jpeg'),
(37, 'Mascara Primer', 142000, '50', 'Untuk dasar sebelum mascara', NULL, '2019-08-07 04:33:39', 'WKRyrYDWBldC4GpMt0NefFZcNkKiFQ1zUE464LLY.jpeg'),
(38, 'Pencil Eyeliner', 340000, '35', 'Untuk pemula', NULL, '2019-08-07 04:33:08', '56K0N37xlULJLuDTzBNWVgH3cQGgzJudd6KVIC2h.jpeg'),
(39, 'Liquid Eyeliner', 870000, '50', 'Long lasting', NULL, '2019-08-07 04:32:32', 'lS7CqTmH9gT0jBPxcFo0Z21ztt90SiMCOg7GnoEx.jpeg'),
(40, 'Liquid Pencil Eyeliner', 460000, '10', 'Untuk pemula', NULL, '2019-08-07 04:31:50', '3e86wqpzOiCnhLti5znsbQuqq3z6v5rc9hgjOQ8d.jpeg'),
(41, 'Gel Eyeliner', 240000, '35', 'Pengakplikasiannya dengan kuas', NULL, '2019-08-07 04:31:09', 'R5XhTGQgjfJGQSQCksvXrqRCzzd3X4Ld0Wr1j3Nb.jpeg'),
(42, 'Cake Eyeliner', 160000, '20', 'Untuk para MUA', NULL, '2019-08-07 04:30:30', '83dlB4DoMDu38tZzWFAPKfVxuxEWtwhiM8hYT2p4.jpeg'),
(43, 'Liquid Foundation', 134000, '55', 'Untuk semua jenis kulit', NULL, '2019-08-07 04:29:56', 'gb4wLONsTkKwt3QKv3kLTedx4i6XA5Y5vKarOZs4.jpeg'),
(44, 'Spray Foundation', 125000, '45', 'Untuk kulit berjerawat', NULL, '2019-08-07 04:29:14', 'UAjjHzAVtsnDg6fLzXNuFzyFUCpQSoiH2ixtTD80.jpeg'),
(45, 'Sheer Foundation', 850000, '60', 'Untuk hasil natural', NULL, '2019-08-07 04:28:36', '78OgTEy41Mngs35rUUlZd24SKm2zCROppKjnNOMD.jpeg'),
(46, 'Stick Foundation', 190000, '60', 'Untuk kulit normal', NULL, '2019-08-07 04:27:06', '3NqA2NJfN16A63YZoe0Geir7shCHik1mnyuQCOOF.jpeg'),
(47, 'Oil-Based Foundation', 250000, '10', 'Untuk kulit berminyak', NULL, '2019-08-07 04:27:46', 'DBA9B0E5ZxUDMw3oRymxqamzrk1f0LzFCExUKcZa.jpeg'),
(48, 'Cream Foundation', 350000, '25', 'Untuk acara formal', NULL, '2019-08-07 04:27:39', 'ZrGxM3CSXu8mOZsnjQs2jDHIZOcBQO50MRXOroSk.png'),
(49, 'Mousse Foundation', 550000, '45', 'Untuk kulit kering', NULL, '2019-08-07 04:27:33', 'DIBhl0nyLlsXQgybw10HAE6V7NGJB583hY7pG9u3.jpeg'),
(50, 'Matte Foundation', 340000, '35', 'Untuk kulit berminyak', NULL, '2019-08-07 04:27:27', 'olFKSVDGwu4sFmq7D5kli7HSDiC9SF4Cq7Cn3Q1p.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bukti_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$AjdQJjRAywwXYDbQVI3DV.6kpchowS8eWwHiyEycwBURoIeMiqeui', 'Admin', 'wKEHUgKfD9SnxxQ0apKyfw0zrUcE2DD3Zzxbdt0hfnHHCc40FQ8INtRz2vYF', '2019-08-03 05:31:51', '2019-08-03 05:31:51', 1),
(2, 'Customer', 'Customer', 'customer@gmail.com', '$2y$10$5OpF8lbN5e2o24e5DbUvwO4o3fvgCiG6C9TxzwnUBU8f8ZkKoe3CO', 'Customer', 'O0xv0Y9RmNIQ7pCJPVg5mofAKhMHyHOoXpNttF00g4A7I40JFu4hW3e9Hm1e', '2019-08-03 05:32:49', '2019-08-03 05:32:49', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
