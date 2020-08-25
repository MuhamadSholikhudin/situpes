-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2020 pada 03.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_situpes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(100) NOT NULL,
  `no_surat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `status_pegawai` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `no_surat`, `alamat`, `status_pegawai`, `nama`, `jabatan`, `pangkat`) VALUES
('1234', 1, '', 0, 'KHOSIM ma', '3', '3'),
('3456', 1, '', 0, 'ayuk', '1', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_penugasan`
--

CREATE TABLE `surat_penugasan` (
  `no_surat` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_penugasan`
--

INSERT INTO `surat_penugasan` (`no_surat`, `alamat`, `keterangan`, `status_surat`) VALUES
(1, 'Sehubung dengan pelatihan komputer yang dilaksanakan pada hari Jumat, 24 January 2020 di Dinas Tenaga kerja dan Inkop maka dengan ini menugaskan kepada  :', 'Untuk mengikuti kegiatan Pelatihan komputer sebagai, pembimbing kepada para peserta pelatihan pada Dinas Tenaga Kerja dan Inkop.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, '1234', 'dessy adelia', '123', 1),
(2, '2345', 'Ajeng', '123', 2),
(5, '3456', 'Ayuk', '123', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `surat_penugasan`
--
ALTER TABLE `surat_penugasan`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat_penugasan`
--
ALTER TABLE `surat_penugasan`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
