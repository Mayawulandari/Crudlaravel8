-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2025 at 05:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualanlv8`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barangs`
--

CREATE TABLE `data_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` enum('laptop','printer','desktop','tablet') NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_barangs`
--

INSERT INTO `data_barangs` (`id`, `nama`, `kategori`, `deskripsi`, `stock`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Asus N56VZ-DS71 notebook', 'laptop', 'laptop dengan ram 4 intel Core i7-3610QM (2.3GHz) processor along with NVIDIA GeForce GT 650M 2G GDDR3', 14, 'Asus N56VZ-DS71 notebook.jpg', '2025-01-25 13:46:45', '2025-01-25 17:09:29'),
(3, 'Epson L3110', 'printer', 'Epson L3110 merupakan salah satu jenis printer multifungsi yang dapat Anda gunakan untuk mencetak, copy, dan scan dokumen sekaligus.', 16, '22925-productpicture-lores-en-l3110_hero.png', '2025-01-25 14:39:50', '2025-01-25 14:39:50'),
(4, 'Samsung', 'tablet', 'The black 12.0\" TabPro S Tablet from Samsung delivers powerful performance in a sleek 2-in-1 design. This tablet is powered by a dual-core 2.2 GHz Intel Core M Skylake processor and has 4GB of RAM.', 25, 'samsung_sm_t800ntsaxar_16gb_galaxy_tab_s_1054121.jpg', '2025-01-25 14:42:38', '2025-01-25 14:42:38'),
(13, 'Lenovo', 'laptop', 'Lenovo IdeaPad 130-15AST 81H5, 15.6″ HD, AMD A9-9425, Premium Home and Business Laptop', 14, 'Lenovo-15.622-HD-Premium-Home-and-Biz-Notebook.jpg', '2025-01-25 15:58:31', '2025-01-25 15:58:31'),
(14, 'Dell', 'desktop', 'PC Dell OptiPlex 3080 SFF /Core i5-10500/4GB/1TB/19.5″/Win 10 Home/Black', 20, 'Merk-Komputer-Terbaik-dan-Harganya.jpg', '2025-01-25 16:03:16', '2025-01-25 16:03:16'),
(16, 'Canon', 'printer', 'PIXMA MG2570S PG-745S (Tinta Pigmen/Hitam), CL-746S (Tinta Dye/Warna) [Opsi lainnya: PG-745, CL-746 / PG-745XL, CL-746XL]', 34, 'canon.png', '2025-01-25 16:08:04', '2025-01-25 16:08:04'),
(17, 'Epson', 'printer', 'Epson EcoTank L4260 A4 Wi-Fi Duplex All-in-One Ink Tank Printer', 10, 'L4260-(1).jpg', '2025-01-25 16:08:57', '2025-01-25 21:19:05'),
(18, 'Asus', 'desktop', 'ASUS ROG Strix GT35 Full Tower Gaming Desktop Computer', 4, 'asus_g35cz_xb982_rog_strix_gaming_pc_1584042.jpg', '2025-01-25 16:10:29', '2025-01-25 16:10:29'),
(19, 'Samsung', 'tablet', 'Realistic (copy) 3d model of Samsung GALAXY Tab S6.', 25, 'samsung-galaxy-tab-a7-gold.jpg', '2025-01-25 16:12:59', '2025-01-25 16:12:59'),
(20, 'Huawei', 'tablet', '10.1-inch FHD+ screen Wi-Fi or LTE/Wi-Fi Support Facial Recognition Memory: 4 GB RAM Internal storage: 64GB / 128GB ROM (expandable up to 512GB)', 17, 'Huawei-Enjoy-Tablet-2-CECT-Blue-3a.jpg', '2025-01-25 16:15:10', '2025-01-25 16:15:10'),
(24, 'Lenovo', 'laptop', 'Lenovo V14 G3 IAP Ram 8gb Procesore I core 3', 10, 'fb1415f9e5fa24cf2d2e2f6b078c5c95.png', '2025-01-25 21:28:40', '2025-01-25 21:28:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barangs`
--
ALTER TABLE `data_barangs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barangs`
--
ALTER TABLE `data_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
