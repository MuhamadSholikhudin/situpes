-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2020 pada 05.07
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
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status_absensi` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_jadwal`, `nip`, `tanggal`, `status_absensi`, `keterangan`) VALUES
(3, 1, '2345', '2020-11-01', 1, 'belajar komputer'),
(4, 2, '2345', '2020-11-11', 1, 'mengajar komputer'),
(5, 3, '2345', '2020-11-11', 1, 'melatih komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id` int(11) NOT NULL,
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

INSERT INTO `data_pegawai` (`id`, `nip`, `no_surat`, `alamat`, `status_pegawai`, `nama`, `jabatan`, `pangkat`) VALUES
(1, '1234', 1, '', 1, 'KHOSIM ma', '3', '3'),
(2, '2345', 1, '', 1, 'ayuk', '1', '3'),
(4, '2345', 3, '', 2, 'ajeng', '3', '3'),
(5, '3456', 3, '', 1, 'ayuk', '3', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_penugasan`
--

CREATE TABLE `jadwal_penugasan` (
  `id_jadwal` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jadwal` date NOT NULL,
  `status_jadwal` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_penugasan`
--

INSERT INTO `jadwal_penugasan` (`id_jadwal`, `id`, `nip`, `jadwal`, `status_jadwal`, `no_surat`) VALUES
(1, 1, '2345', '2020-08-26', 1, 1),
(2, 4, '2345', '2020-11-28', 0, 3),
(3, 4, '2345', '2020-11-11', 1, 3),
(4, 4, '2345', '2020-11-30', 0, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_penugasan`
--

CREATE TABLE `surat_penugasan` (
  `no_surat` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_buat` date NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_penugasan`
--

INSERT INTO `surat_penugasan` (`no_surat`, `judul`, `tgl_buat`, `alamat`, `keterangan`, `status_surat`) VALUES
(1, '', '0000-00-00', 'Sehubung dengan pelatihan komputer yang dilaksanakan pada hari Jumat, 24 January 2020 di Dinas Tenaga kerja dan Inkop maka dengan ini menugaskan kepada  :', 'Untuk mengikuti kegiatan Pelatihan komputer sebagai, pembimbing kepada para peserta pelatihan pada Dinas Tenaga Kerja dan Inkop.', 0),
(2, '', '0000-00-00', 'sehubung dengan surat edaran dari polres kabupaten kudus yang telah di edarkan kepada dinas tenaga kerja maka dengan ini menugaskan :', 'Sebagai mana tugas yang telah di berikan kami berharap menghimbau untuk menggunkannya sesuai tanggung jawab nya', 1),
(3, '', '0000-00-00', 'dessy jelek', 'adelia', 2);

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
(5, '3456', 'Ayuk', '123', 3),
(6, '2123', 'Ifa Septiana', '123', 2),
(7, '3432', 'Yohan', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  ADD PRIMARY KEY (`id_jadwal`);

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
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_penugasan`
--
ALTER TABLE `surat_penugasan`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
