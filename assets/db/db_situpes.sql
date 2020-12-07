-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2020 pada 09.58
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
(5, 3, '2345', '2020-11-11', 0, 'desul'),
(11, 5, '2345', '2020-11-14', 1, 'Melatih dasar web'),
(12, 6, '2345', '2020-11-14', 1, 'mengajar komputer'),
(13, 7, '2345', '2020-11-14', 1, 'belajar komputer'),
(14, 8, '2123', '2020-11-14', 1, 'Melatih dasar web'),
(15, 9, '2123', '2020-11-14', 1, 'Melatih dasar web'),
(16, 10, '2123', '2020-11-14', 1, 'mengajar komputer'),
(17, 11, '3432', '2020-11-14', 1, 'melatih komputer'),
(18, 12, '3432', '2020-11-14', 1, 'melatih komputer'),
(19, 13, '3432', '2020-11-14', 1, 'melatih komputer'),
(20, 14, '2345', '2020-11-17', 0, ''),
(21, 15, '3432', '2020-11-17', 1, 'mengajar komputer'),
(22, 17, '2345', '2020-11-18', 1, 'Melatih dasar web');

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
(1, '1234', 1, '', 1, 'dessy adelia', '3', '3'),
(2, '', 1, '', 1, 'Ajeng', 'Admin Penyelenggara Pelatihan ', 'Pembina Utama IV/e'),
(4, '2345', 3, '', 2, 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(5, '', 3, '', 1, 'ayuk', 'Admin Pengadaan Barang dan Jasa ', 'Penata Muda III/a'),
(7, '2345', 1, '', 0, 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(8, '', 4, '', 2, 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(9, '2123', 4, '', 1, 'Ifa Septiana', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(10, '3432', 4, '', 2, 'Yohan', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(11, '2345', 5, '', 2, 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(12, '3432', 5, '', 1, 'Yohan', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a'),
(13, '3456', 6, '', 1, 'Ayuk', 'Kepala Disnaker', 'Kepala Disnaker'),
(14, '2345', 6, '', 1, 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a');

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
(2, 4, '2345', '2020-11-28', 5, 3),
(3, 4, '2345', '2020-11-12', 6, 3),
(4, 4, '2345', '2020-11-30', 1, 3),
(5, 8, '2345', '2020-11-17', 1, 4),
(6, 8, '2345', '2020-11-14', 1, 4),
(7, 8, '2345', '2020-11-14', 1, 4),
(8, 9, '2123', '2020-11-14', 1, 4),
(9, 9, '2123', '2020-11-14', 1, 4),
(10, 9, '2123', '2020-11-14', 1, 4),
(11, 10, '3432', '2020-11-14', 1, 4),
(12, 10, '3432', '2020-11-14', 1, 4),
(13, 10, '3432', '2020-11-14', 1, 4),
(14, 11, '2345', '2020-11-17', 1, 5),
(15, 12, '3432', '2020-11-17', 1, 5),
(16, 13, '3456', '2020-11-18', 5, 6),
(17, 14, '2345', '2020-11-18', 6, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_penugasan`
--

CREATE TABLE `surat_penugasan` (
  `no_surat` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tgl_buat` date NOT NULL,
  `isi_surat` text NOT NULL,
  `keterangan` text NOT NULL,
  `status_surat` int(11) NOT NULL,
  `penempatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_penugasan`
--

INSERT INTO `surat_penugasan` (`no_surat`, `judul`, `tgl_buat`, `isi_surat`, `keterangan`, `status_surat`, `penempatan`) VALUES
(1, 'surat tugas pelatihan', '2020-11-09', 'Sehubung dengan pelatihan komputer yang dilaksanakan pada hari Jumat, 24 January 2020 di Dinas Tenaga kerja dan Inkop maka dengan ini menugaskan kepada  :', 'Untuk mengikuti kegiatan Pelatihan komputer sebagai, pembimbing kepada para peserta pelatihan pada Dinas Tenaga Kerja dan Inkop.', 3, ''),
(2, 'surat tugas pelatihan', '2020-11-11', 'sehubung dengan surat edaran dari polres kabupaten kudus yang telah di edarkan kepada dinas tenaga kerja maka dengan ini menugaskan :', 'Sebagai mana tugas yang telah di berikan kami berharap menghimbau untuk menggunkannya sesuai tanggung jawab nya', 1, ''),
(3, 'surat tugas pelatihan', '2020-11-13', 'sehubung dengan surat edaran dari polres kabupaten kudus yang telah di edarkan kepada dinas tenaga kerja maka dengan ini menugaska', 'Sebagai mana tugas yang telah di berikan kami berharap menghimbau untuk menggunkannya sesuai tanggung jawab nya', 3, ''),
(4, 'surat tugas pelatihan', '2020-11-07', '	sehubung dengan surat edaran dari polres kabupaten kudus yang telah di edarkan kepada dinas tenaga kerja maka dengan ini menugaska', 'Sebagai mana tugas yang telah di berikan kami berharap menghimbau untuk menggunkannya sesuai tanggung jawab nya', 3, ''),
(5, 'surat tugas pelatihan komputer di kec dawe', '2020-11-17', 'menugaskan pegawai untuk pelatihan komputer', 'Untuk mengikuti kegiatan Pelatihan komputer sebagai, pembimbing kepada para peserta pelatihan pada Dinas Tenaga Kerja dan Inkop.			\r\n', 3, ''),
(6, 'Lomba Desa Kecamatan ', '2020-11-18', ' Dokumen Pelaksanaan Perubahan Anggaran No. 2.01.2.01.01.18.06 tanggal 28 Januari 2020.', 'Surat  Perintah Kerja Kepala Dinas Tenaga Kerja, Perindustrian, Koperasi, Usaha Kecil dan Menengah Kabupaten Kudus, tanggal 1 Februari 2019.', 2, 'JEKULO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `jabatan`, `pangkat`, `password`, `level`) VALUES
(1, '1234', 'dessy adelia', 'Seketariat Disnaker ', 'Penata Tingkat I III/d', '123', 1),
(2, '2345', 'Ajeng', 'Adm. Bid. Perindustrian ', 'Juru Muda I/a', '123', 2),
(5, '3456', 'Ayuk', 'Kepala Disnaker', 'Kepala Disnaker', '123', 3),
(6, '2123', 'Ifa Septiana', 'Penjaga ', 'Juru Muda I/a', '123', 1),
(7, '3432', 'Yohan', 'Penjaga ', 'Juru Muda I/a', '123', 2);

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
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `surat_penugasan`
--
ALTER TABLE `surat_penugasan`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
