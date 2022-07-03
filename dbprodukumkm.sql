-- phpMyAdmin SQL Dump
-- version 5.2.0-1.fc35
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 03, 2022 at 07:57 AM
-- Server version: 8.0.29
-- PHP Version: 8.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbprodukumkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(19, 'Tas'),
(20, 'Sepatu'),
(21, 'Blangkon'),
(22, 'Busana Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `produk_id` int NOT NULL,
  `suplier_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `jumlah`, `harga`, `produk_id`, `suplier_id`) VALUES
(25, '2022-07-03', 3, 900000, 29, 11);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `users_id` int NOT NULL,
  `produk_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `jumlah`, `users_id`, `produk_id`) VALUES
(43, '2022-07-03', 3, 2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `kode` varchar(4) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `jenis_id` int NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `stok`, `harga_beli`, `harga_jual`, `foto`, `jenis_id`, `deskripsi`) VALUES
(27, 'P001', 'Sepatu Batik Parang Rusak Asli Yogyakarta', 15, 275000, 350000, 'P001.png', 20, 'Sepatu casual wanita dengan motif parang rusak asli dari Yogyakarta'),
(28, 'P002', 'Sepatu Batik Parang Rusak Putih', 12, 285000, 350000, 'P002.png', 20, 'Sepatu sneakers batik motif parang rusak dominan warna putih asli Yogyakarta'),
(29, 'P003', 'Blouse Batik Motif Bunga', 13, 300000, 465000, 'P003.png', 22, 'Blouse batik motif bunga hijau, bahan katun premium dengan toleransi ~2cm'),
(30, 'P004', 'Blouse Casual Batik Modern Kombinasi', 5, 450000, 525000, 'P004.png', 22, 'Blouse casual dengan motif batik kombinasi gaya kekinian, cocok untuk acara'),
(31, 'P005', 'Blouse Batik Motif Bunga Abstrak Biru', 5, 375000, 555000, 'P005.png', 22, 'Blouse dengan motif batik bunga abstrak warna biru, cocok untuk acara pernikahan mantan'),
(32, 'P006', 'Blouse Batik Modern Motif Bunga Putih', 3, 480000, 570000, 'P006.png', 22, 'Blouse batik tema modern dengan motif bunga kombinasi warna putih, cocok untuk acara besar'),
(33, 'P007', 'Sepatu Batik Casual Wanita Motif Burung', 22, 230000, 300000, 'P007.png', 20, 'Sepatu batik casual khusus wanita motif burung warna biru'),
(34, 'P008', 'Blouse Sogan Burung Kombinasi Strip', 8, 420000, 595000, 'P008.png', 22, 'Blouse batik sogan burung terbang dengan kombinasi corak strip'),
(35, 'P009', 'Tas Batik Modern Sekar Jagat', 9, 280000, 320000, 'P009.png', 19, 'Tas batik modern motif sekar jagat asli Yogyakarta warna putih'),
(36, 'P010', 'Tas Batik Bunga Modern Soft', 13, 300000, 385000, 'P010.png', 19, 'Tas dengan motif bunga bertema modern dan elegan soft color'),
(37, 'P011', 'Blangkon Mondolan Yogyakarta', 21, 95000, 185000, 'P011.png', 21, 'Blangkon batik dengan mondolan khas Yogyakarta'),
(39, 'P012', 'Blouse Motif Batik Tambal Yogyakarta', 11, 410000, 530000, 'P012.png', 22, 'Blouse wanita dengan motif batik tambal asli Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `kontak` varchar(30) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `nama`, `kota`, `kontak`, `alamat`, `telpon`) VALUES
(8, 'Galeri Batik Tasik', 'Tasikmalaya', 'Deden', 'Jl. Cigeureung No 80, Nagarasari, Cipedes, Tasikmalaya', '02652353153'),
(9, 'Srikandi Muda BUMN', 'Klaten', 'Sulis Sri Tatik', 'Bero, Trucuk, Klaten', 'srikandimd@gmail.com'),
(10, 'Kharisma Handicraft', 'Yogyakarta', 'Tekad, R. Joko, Sutiyem ', 'Desa Salamrejo, Kec. Sentolo, Kab. Kulon Progo, Yogyakarta', '0214258305'),
(11, 'CV Rul Butik', 'Depok', 'Fakhirul Akmal', 'Jl. Asrama Divisi 1 Kostrad KM.39, Cilodong, Depok', 'fakhirula@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '$2y$10$B5YM8DQ.5hoJSyxYfmHoO.pW6xgR9kw5RHSPq6HJXcamMdHVYlsEq', 'admin@gmail.com', '2022-06-11 23:46:37', '2022-07-03 07:40:24', 1, 'administrator'),
(2, 'aminah', '$2y$10$nlRX3kENBVwbiBdvzqn4a.kM6eEvyKGnMtow/wVDcBFNPCIg49ZKS', 'aminah@gmail.com', '2022-06-11 23:47:09', '2022-07-03 07:38:10', 1, 'public'),
(3, 'akmal', '$2y$10$1PBuoXGcSVL8KIyMoVeogeEIdWizXr3astKVAEUNyRBn4Ob7jYU4q', 'fakhirula27@gmail.com', '2022-06-11 23:46:37', '2022-06-27 16:19:12', 1, 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembelian_produk1_idx` (`produk_id`),
  ADD KEY `fk_pembelian_suplier1_idx` (`suplier_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `fk_pembelian_suplier1` FOREIGN KEY (`suplier_id`) REFERENCES `suplier` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
