-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Jun 2021 pada 12.09
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos-app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `image`, `no_phone`) VALUES
(3, 'ringgaadmin@gmail.com', '$2y$10$FQexaZqhkKJ2S3gXAaD19O7P2YrBSWzeiTbqGYcPjEHH09P9GPoRy', 'Ringga Septia Pribadi', 'user.jpg', 'data belum lengkap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `image`) VALUES
(2, 'baju', 1, '5000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309065_6ed7be2751e14a8fbd50.jpg'),
(3, 'baju wanita', 1, '100000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309088_d528cff6504b02cbc64c.jpg'),
(4, 'game 1', 2, '1000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309150_a0694cc18af5a840e6b3.jpg'),
(5, 'game 2', 2, '10000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309179_1feefaf8fe41b2611928.jpg'),
(6, 'game 3', 2, '500000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309203_7c9ad2f260e470ce1760.jpg'),
(7, 'laptop', 3, '5000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309231_24fc4fc8bd87e031e967.jpg'),
(8, 'laptop 2', 1, '60000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309270_eba0f50131b72940a572.jpg'),
(9, 'pc1', 3, '1231231231', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309325_36b35e721577b84a00dd.jpg'),
(10, 'laptop 2', 3, '1000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309356_5ba37e329514056e411b.jpg'),
(11, 'pc 5', 3, '10000000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1623309399_ef28cf00802559aaf893.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'fashion'),
(2, 'game'),
(3, 'electonik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

DROP TABLE IF EXISTS `keranjang`;
CREATE TABLE IF NOT EXISTS `keranjang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_barang`, `id_users`) VALUES
(1, 9, 4),
(2, 6, 4),
(3, 2, 4),
(4, 5, 4),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_menu` varchar(128) NOT NULL,
  `icons` varchar(128) NOT NULL,
  `stts` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name_menu`, `icons`, `stts`) VALUES
(1, 'Admin', 'user-cog', 'ADMIN'),
(7, 'Toko', 'store', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE IF NOT EXISTS `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  `stts` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_users`, `nama`, `id_barang`, `alamat`, `no_phone`, `stts`, `jumlah`) VALUES
(1, 4, 'Ringga Septia Pribadi', 6, 'mungo tanjuang anau', '08228462', 'Dikirim', 3),
(2, 4, 'Ringga Septia Pribadi', 9, 'jakarta utara', '34234234', 'Dikirim', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_menu`
--

DROP TABLE IF EXISTS `sub_menu`;
CREATE TABLE IF NOT EXISTS `sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `name_sub_menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `id_menu`, `name_sub_menu`, `url`) VALUES
(1, 1, 'menu', 'home/menu'),
(3, 6, 'Pembelian', 'posuser/pembelian'),
(4, 7, 'Barang', 'home/barang'),
(5, 7, 'Pesanan', 'home/pesanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `no_phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `image`, `no_phone`) VALUES
(4, 'ringgauser@gmail.com', '$2y$10$QFVYQFMq073zEUrcYvhsyOdwILdtmTE8UDy3ob8MaeKjGhJFoQDci', 'Ringga Septia Pribadi', 'user.jpg', 'data belum lengkap');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
