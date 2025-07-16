-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 07:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri_organisasi`
--

CREATE TABLE `galeri_organisasi` (
  `id` int(11) NOT NULL,
  `kategori` enum('dokumentasi','struktur') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri_organisasi`
--

INSERT INTO `galeri_organisasi` (`id`, `kategori`, `gambar`, `created_at`) VALUES
(2, 'dokumentasi', 'uploads/1752682073_WhatsApp Image 2025-07-16 at 17.02.56_bcc9e4c7.jpg', '2025-07-16 16:07:53'),
(3, 'struktur', 'uploads/1752683219_ChatGPT Image Jul 16, 2025, 07_30_20 PM.png', '2025-07-16 16:07:53'),
(4, 'dokumentasi', 'uploads/1752682189_WhatsApp Image 2025-07-16 at 16.54.52_946aef3e.jpg', '2025-07-16 16:09:49'),
(6, 'dokumentasi', 'uploads/1752683314_WhatsApp Image 2025-07-16 at 17.00.31_a7ec199c.jpg', '2025-07-16 16:28:34');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$24qas3t52/WqKijWZDVfYO7oj.Z.0SY7MVxLowpgqkXR64kwtJ0N2');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` int(11) NOT NULL,
  `profil` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id`, `profil`, `visi`, `misi`) VALUES
(1, 'Organisasi merupakan sekumpulan orang-orang yang disusun dalam kelompok-kelompok yang bekerjasama untuk mencapai tujuan bersama. Unit Kegiatan Mahasiswa Persaudaraan Setia Hati Terate Komisariat Universitas Lambung Mangkurat adalah organisasi kemahasiswaan yang memiliki fungsi sebagai organisasi yang mengutamakan rasa persaudaraan dan bergelut dibidang pencak silat sebagai wadah untuk menjadi atlet dan pesilat yang berprestasi. Dengan dibentuknya kepengurusan baru Unit Kegiatan Mahasiswa Persaudaraan Setia Hati Terate Komisariat Universitas Lambung Mangkurat, diperlukan suatu kegiatan yang menunjukkan kepengurusan baru telah dikukuhkan dengan dasar yang jelas sehingga dalam meneruskan estafet kepengurusan organisasi dapat berjalan dengan jelas dan maksimal.', 'Mewujudkan Unit Kegiatan Mahasiswa Persaudaraan Setia Hati Terate Komisariat Universitas Lambung Mangkurat sebagai wadah persaudaraan yang kuat dan berintegritas, serta mencetak atlet dan pesilat berprestasi yang menjunjung tinggi nilai-nilai SH Terate.', 'Meningkatkan persaudaraan antar anggota, mengembangkan kualitas dalam bidang pencak silat, mencetak atlet dan pesilat berprestasi, menanamkan nilai-nilai luhur SH Terate seperti kejujuran dan tanggung jawab, serta menjadi agen pelestari seni dan budaya pencak silat di lingkungan kampus dan masyarakat.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri_organisasi`
--
ALTER TABLE `galeri_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri_organisasi`
--
ALTER TABLE `galeri_organisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
