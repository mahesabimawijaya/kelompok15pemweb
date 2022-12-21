SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `buku` (
  `id_buku` varchar(15) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`) VALUES
('B002', 'Baca Buku Ini Saat Engkau Ingin Berubah', 'Rahma Kusharjanti', 'Psikologi Corner'),
('B003', 'Berjuta Rasanya', 'Tere Liye', 'Mahaka Publishing'),
('B004', 'Belajar Sistem Basis Data', 'Pasha Bhimasty', 'Mediakita'),
('B005', 'Cara Memasak', 'Kusharjanti', 'Mediakita');


CREATE TABLE `member` (
  `id_member` varchar(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `member` (`id_member`, `nama`, `alamat`, `no_telp`) VALUES
('M001', 'Pasha', 'Pencil, Rejosari, Jatisrono, Wonogiri, Jawa Tengah', '082221172827'),
('M002', 'Fadila', 'Tanduran, Jatisari, Jatisrono, Wonogiri', '082221172826'),
('M003', 'Imam Adhibrata', 'Jatisrono, Wonogiri, Jawa Tengah, Indonesia, Asia Tenggara', '081289253905'),
('M005', 'Damar Fatika', 'Boyolali', '0812345678'),
('M006', 'Caca', 'Solo, Jawa Tengah', '0812345678');


CREATE TABLE `tb_admin` (
  `user` varchar(45) NOT NULL,
  `pw` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tb_admin` (`user`, `pw`) VALUES
('jumhadi', '123');



CREATE TABLE `transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `id_member` varchar(4) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `transaksi` (`id_transaksi`, `id_buku`, `id_member`, `tgl_pinjam`, `tgl_kembali`) VALUES
(14, 'B002', 'M001', '2020-06-21', '2020-06-21'),
(16, 'B003', 'M002', '2020-06-20', '2020-06-22');


ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);


ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);


ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_FKIndex1` (`id_member`),
  ADD KEY `transaksi_FKIndex2` (`id_buku`);


ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;


ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
