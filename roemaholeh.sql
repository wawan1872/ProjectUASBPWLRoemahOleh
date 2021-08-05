-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2021 pada 17.48
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roemaholeh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_makanan`
--

CREATE TABLE `d_makanan` (
  `id_makanan` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `harga` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `d_makanan`
--

INSERT INTO `d_makanan` (`id_makanan`, `nama`, `stock`, `harga`) VALUES
('2001', 'Kue Kemojo', 200, 25000),
('2002', 'Pie Nenas', 100, 12000),
('2003', 'Kue Wijen', 100, 15000),
('2004', 'Lopek Bugis', 50, 12000),
('4541', 'kue kacang pukul', 100, 27000),
('4564', 'Roti Jala', 30, 17500),
('4565', 'Kue Denderam', 100, 16000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `m_dipilih` varchar(100) NOT NULL,
  `har_satuan` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama`, `m_dipilih`, `har_satuan`, `jumlah`, `total`) VALUES
(1, 'Budi harto', 'Kue Kemojo', 25000, 3, 75000),
(4, 'putri', 'kue kacang pukul', 27000, 5, 135000),
(5, 'ujang', 'kue komojo', 25000, 3, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_pembeli` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_pembeli`, `username`, `alamat`, `password`) VALUES
(1, 'dandy', 'jl. rumbai', 'dandy'),
(2, 'fizhil', 'jl.tegal sari', 'fc005594208609772c515f73bfc22f46'),
(3, 'ridho', 'jl.sekolah', '926a161c6419512d711089538c80ac70'),
(7, 'piki', '', 'c8ae906ff516b6287895602ed8de9991'),
(9, 'ilham', '', 'b63d204bf086017e34d8bd27ab969f28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_makanan`
--
ALTER TABLE `d_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
