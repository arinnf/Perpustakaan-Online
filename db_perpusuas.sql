-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 09:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpusuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(12) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi_buku` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `judul_buku`, `penerbit`, `penulis`, `id_kategori`, `deskripsi_buku`) VALUES
('K001', 'Detective Conan', 'Elexmedia', 'Aoyama Gosho', 2, 'Edogawa Conan adalah Detective SMU terkenal bernama Shinichi Kudou yang mengecil akibat sebuah obat yang diberikan padanya oleh sebuah oragnisasi misterius. Saat ini, ia tengah mencari orang-orang yang terlibat dalam kasus pengecilan tubuhnya dengan menyamar menjadi anak SD.'),
('K002', 'Yona', 'Elexmedia', 'Yabuki Nako', 2, 'Putri Mahkota kerajaan Kouka yang harus menerima nasib pahit ketika sang Ayah dibunuh oleh sepupunya sendiri. Ia berjuang mencari kekuatan hidup bersama pengwalnya yang bernama Hak sambil mencari empat naga.'),
('N121', 'Hujan', 'Indopublisher', 'Angeline', 4, 'Hujan benar-benar candu bagi ku, sama seperti kehadirannya. Raff, aku pernah bilang bukan? Aku suka hujan. Jangan jadikan aku membenci hujan hanya karena dirimu.'),
('N123', 'Pulang', 'Indopublisher', 'Tere Liye', 1, 'Novel ini menceritakan kisah seorang anak laki-laki bernama Bujang yang tinggal di dasar rimba Sumatra bersama Samad dan Midah, kedua orang tuanya. Hidupnya sederhana, sama seperti anak kecil pada umumnya. Hingga kedatangan rombongan Tauke Besar untuk berburu menjadi awal perubahan hidupnya.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `nama_kategori`) VALUES
(1, 'Novel'),
(2, 'Komik'),
(3, 'Sains'),
(4, 'Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_transaksi` varchar(12) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `no_member` varchar(5) NOT NULL,
  `isbn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`no_transaksi`, `tgl_peminjaman`, `tgl_kembali`, `no_member`, `isbn`) VALUES
('PB-2021-0001', '2021-06-08', '2021-06-15', 'MP001', 'N123');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `no_transaksi` varchar(12) NOT NULL,
  `no_user` varchar(5) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(12) NOT NULL,
  `isbn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`no_transaksi`, `no_user`, `tgl_peminjaman`, `tgl_kembali`, `denda`, `isbn`) VALUES
('PB-2021-0001', 'P0001', '2021-06-05', '0000-00-00', 0, 'id_buku'),
('PB-2021-0001', 'P0001', '2021-06-05', '0000-00-00', 0, 'id_buku'),
('PB-2021-0001', 'P0001', '2021-06-05', '0000-00-00', 0, 'id_buku'),
('PB-2021-0203', 'P0002', '2021-06-06', '0000-00-00', 0, 'id_buku'),
('PB-2021-0001', 'MP001', '2021-06-07', '2021-06-07', 0, 'K001'),
('PB-2021-0001', 'MP001', '2021-06-07', '2021-06-08', 0, 'K001'),
('PB-2021-0203', 'MP001', '2021-06-08', '2021-06-08', 0, 'N123'),
('PB-2021-0001', 'MP001', '2021-06-08', '2021-06-08', 0, 'N123'),
('PB-2021-0001', 'MP001', '2021-06-08', '2021-06-08', 0, 'N123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no_user` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk_user` char(1) NOT NULL,
  `alamat_user` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','User','Kepala Perpus') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_user`, `nama`, `jk_user`, `alamat_user`, `tgl_lahir`, `username`, `password`, `level`) VALUES
('AP001', 'Beatrice', 'P', 'Jakarta', '2000-06-08', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
('KP001', 'Arsa Bazli', 'L', 'Bandung', '1989-04-23', 'kepus', 'f67797a6fd462523ddf9f0178a65d842d00a0858', 'Kepala Perpus'),
('ML001', 'Abi Yazid Bustomi', 'L', 'Bogor', '2021-06-17', 'abi', '715a5d4d840064196cfa2f6763ef29067adb4d87', 'User'),
('ML002', 'Adi Duwo Jiwo S', 'L', 'Lamongan', '2021-06-16', 'adi', 'b3e8ff7ac1c7e75661e16152a5dce1ff36a3e140', 'User'),
('MP001', 'Salsa Khaerunisa', 'P', 'Indramayu', '2021-06-12', 'salsa', '2880c73550e9890bf37b0c04283565a83d723607', 'User'),
('MP002', 'Afifa Atira', 'P', 'Tangerang', '2021-06-14', 'afifa', 'a4554e415c836b1618dccfdd3a07902afc89b319', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `fk_id` (`id_kategori`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `fk_nomember` (`no_member`),
  ADD KEY `fk_isbn` (`isbn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_isbn` FOREIGN KEY (`isbn`) REFERENCES `buku` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_nomember` FOREIGN KEY (`no_member`) REFERENCES `user` (`no_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
