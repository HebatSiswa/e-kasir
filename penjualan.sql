-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2025 pada 10.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargaPCS` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_transaksi`, `id_produk`, `nama_produk`, `jumlah`, `hargaPCS`, `total`, `tanggal`) VALUES
(79, 83, 46, 'Wagy cake chocholate', 18, 20000, 40000, '2025-04-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `terakhir_direstok` date NOT NULL,
  `barang_terjual` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `terakhir_direstok`, `barang_terjual`, `deskripsi`, `foto`) VALUES
(4, 'Strawberry omelete cake', 20000, 0, '0000-00-00', 9, 'Cake omelet dengan toppinng strowberry yang melimpah', 'strawberry-omelet.jpg'),
(6, 'Cheesecake banana', 130000, 0, '0000-00-00', 3, 'Cheesecake dengan banana caramel yang juga diberi lotus', 'banana.jpg'),
(12, 'Egg muffin', 20000, 0, '0000-00-00', 10, 'Muffin yang terbuat dari telur', 'egg-muffin.jpg'),
(16, 'Fresh Berry Waffle', 30000, 0, '0000-00-00', 8, 'Waffle original dengan topping fresh berry', 'waffle-fresh-berrie.jpg'),
(18, 'Wafle Chocholate', 10000, 0, '0000-00-00', 8, 'waffle dengan rasa chocholate yang enak dan topping yang melimpah', 'waffle-chocholate.jpg'),
(20, 'Croisant sandwich', 30000, 0, '0000-00-00', 1, 'Sandwich dengan croisant yang lembut', 'csandwich.jpg'),
(23, 'Brioche Cake', 30000, 20, '0000-00-00', 0, 'Kue brioche yang lembutn dengan topping yang menggugah selera', 'Brioche Cake-brioche.jpg'),
(24, 'Croisant', 20000, 12, '0000-00-00', 0, 'Croisant prancis terkenal', 'Croisant-croisant.jpg'),
(25, 'Cloud cake', 25000, 0, '0000-00-00', 0, 'Kue bantal yang lembut dengan topping almond', 'Cloud cake-kue-bantal.jpg'),
(26, 'Milky bread', 15000, 2, '0000-00-00', 0, 'Kue dengan i si full susu yang selalu dibuat fresh', 'Milky bread-milky.jpg'),
(27, 'Mocha ', 10000, 30, '0000-00-00', 0, 'Kue dengan rasa mocha yang enak', 'Mocha -mocha.jpg'),
(28, 'Palmvita', 10000, 15, '0000-00-00', 0, 'Kue dengan tekstur yang lembut dan isian kacang almond', 'Palmvita-palmvita.jpg'),
(29, 'Pie susu', 5000, 20, '0000-00-00', 0, 'Pie susu yang sangat cocok dinikmati dengan teh', 'Pie susu-pie.jpg'),
(30, 'Sorndough', 50000, 9, '0000-00-00', 0, 'Kue sorndough yang sangat cocok untuk diet dengan stock yang sangat terbatas, dibuat fresh setiap hari', 'Sorndough-sorndough.jpg'),
(31, 'Apple cake with vanilla', 20000, 10, '0000-00-00', 0, 'Cake dengan bentuk apple dengan eskrim vanilla yang lembut', 'Apple cake with vanilla-apple-vanilla.jpg'),
(32, 'Bomboloni Tiramisu', 30000, 10, '0000-00-00', 0, 'Bomboloni yang lembut dengan varian rasa tiramisu', 'Bomboloni Tiramisu-bomboloni.jpg'),
(33, 'Ceri cake', 10000, 20, '0000-00-00', 0, 'Cake dengan bentuk ceri yang berisi coklat yang melimpah', 'Ceri cake-ceri-cake.jpg'),
(34, 'Cupcake chocholate', 10000, 20, '0000-00-00', 0, 'Cupcake yang lembut dengan varian rasa coklat dan toppping full coklat', 'Cupcake chocholate-chocholate-cupcakes.jpg'),
(35, 'Lava Chocholate', 10000, 20, '0000-00-00', 0, 'Cake yang berisi lelehan chocholate yang melimpah.', 'Lava Chocholate-chocholate-lava.jpg'),
(36, 'Chocholate Macaron', 50000, 20, '0000-00-00', 0, 'Macaron yang lembut dengan varian rasa chocholate', 'Chocholate Macaron-chocholate-macaron.jpg'),
(37, 'Cheesecake vanila Caramel', 30000, 19, '0000-00-00', 0, 'Cheesecake dengan caramel salted dan topping eskrim vanilla yang lembut', 'Cheesecake vanila Caramel-vanila-caramel.jpg'),
(38, 'Ice Cream caramel', 20000, 20, '0000-00-00', 0, 'Ice cream yang lembut denganvarian rasa salted caramel yang gurih dan manis', 'Ice Cream caramel-salted-caramel-ice.jpg'),
(39, 'Raspberry Macaron', 50000, 18, '0000-00-00', 0, 'Macaron dengan varian rasa raspberry ', 'Raspberry Macaron-raspberry-macaron.jpg'),
(40, 'Lemon tart', 10000, 10, '0000-00-00', 0, 'Tart dengan varian rasa lemon yang  menyegarkan', 'Lemon tart-lemon-tart.jpg'),
(42, 'Caramel macaraon', 50000, 20, '0000-00-00', 0, 'Macaron dengan varian rasa salted caramel', 'Caramel macaraon-macaron-caramel.jpg'),
(44, 'Tiramisu  Roll', 20000, 19, '0000-00-00', 0, 'Roll cake dengan varian rasa tiramisu', 'Tiramisu  Roll-roll-tiramisu.jpg'),
(45, 'Chocholate tart', 10000, 20, '0000-00-00', 0, 'Tart yang lembut dengan varian rasa chocholate\r\n', 'Chocholate tart-chocholate-tart.jpg'),
(46, 'Wagy cake chocholate', 20000, 18, '0000-00-00', 0, 'Cake yang berlapis chocholate dengan topping stroberi yang segar', 'Wagy cake chocholate-wagy-chocholate.jpg'),
(47, 'Macaron matcha', 20000, 20, '0000-00-00', 0, 'Macaron dengan rasa matcha', 'Macaron matcha-macaron-matcha.jpg'),
(48, 'Melaleuca Moca cake', 15000, 20, '0000-00-00', 0, 'Cake melalueca dengan varian moca yang enak', 'Melaleuca Moca cake-mocha-melaleuca.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `hargaPCS` int(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(100) NOT NULL,
  `total_kes` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bayar` int(100) NOT NULL,
  `kembalian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_produk`, `nama_produk`, `hargaPCS`, `jumlah`, `total`, `total_kes`, `tanggal`, `bayar`, `kembalian`) VALUES
(83, 46, 'Wagy cake chocholate', 20000, 2, 40000, 80000, '2025-04-21', 100000, 20000),
(84, 44, 'Tiramisu  Roll', 20000, 1, 20000, 20000, '2025-04-21', 20000, 0),
(85, 39, 'Raspberry Macaron', 50000, 2, 100000, 100000, '2025-04-21', 100000, 0),
(86, 37, 'Cheesecake vanila Caramel', 30000, 1, 30000, 0, '2025-04-21', 0, 0),
(87, 30, 'Sorndough', 50000, 1, 50000, 0, '2025-04-21', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','Kasir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `level`) VALUES
(3, 'admin', 'admintoko', 'Admin'),
(4, 'kasir', '12kasir', 'Kasir'),
(67, 'sata', '1satu', 'Admin'),
(99, 'admin1', '11admin', 'Kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
