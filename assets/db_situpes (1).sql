-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 12.15
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.2.17

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
  `penempatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id`, `nip`, `no_surat`, `alamat`, `status_pegawai`, `nama`, `jabatan`, `penempatan`) VALUES
(7, '197112171997021002', 6, '', 1, 'IZATUL SHOFIYATI', 'Team PWU', 'Kecamatan Kota'),
(8, '195810211987031001', 6, '', 1, 'TIARA APRILIANA SARI', 'Team PWU', 'Kecamatan Bae');

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
(5, 7, '197112171997021002', '2020-11-30', 0, 6);

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
  `penempatan` varchar(100) NOT NULL,
  `status_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_penugasan`
--

INSERT INTO `surat_penugasan` (`no_surat`, `judul`, `tgl_buat`, `isi_surat`, `keterangan`, `penempatan`, `status_surat`) VALUES
(6, 'Surat Perintah Tugas PWU Kecamatan Bae', '2020-11-30', 'Dokumen Pelaksanaan Perubahan Anggran No. 2.01.2.01.18.06 tanggal 28 Januari 2019', 'Surat Perintah Kerja Kepala Dinas Tenaga Kerja, Perindustrian, Koperasi, Usaha Kecil dan Menengah Kabupaten Kudus, tanggal 1 Februari 2019', 'Bae', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `penempatan` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `jabatan`, `penempatan`, `level`) VALUES
(1, '199001172019031004', 'Sri Riswati,SKM', '123', 'Sekretariat BLK', 'UPT BLK', 1),
(5, '1960000919986071001', 'Bambang Tri Waluyo, SH', '123', 'Kepala Dinas', 'Disnaker', 3),
(8, '196212101992031001', 'ARIFIN', '123', 'kordinator PWU', 'Kecamatan Kota', 2),
(9, '196404031985031008', 'SUPINAH', '123', 'Kordinator Kecamatan', 'Kecamatan Kota', 2),
(10, '197112171997021002', 'IZATUL SHOFIYATI', '123', 'Team PWU', 'Kecamatan Kota', 2),
(11, '195810211987031001', 'TIARA APRILIANA SARI', '123', 'Team PWU', 'Kecamatan Bae', 2),
(12, '196207021986011002', 'IMRO\'AH', '123', 'Admin PWU', 'Kecamatan Bae', 2),
(13, '196510291990031001', 'HADI SARJIANTO', '123', 'Kordinator Kecamatan', 'Kecamatan Dawe', 2),
(14, '195901171986111001', 'TOTOK SUBIYANTO', '123', 'Team PWU', 'Kecamatan Dawe', 2),
(15, '195901171986111001', 'ARIF EKO PRASETIYO', '123', 'Kordinator Kecamatan', 'Kecamatan Gebog', 2),
(16, '196610181986021001', 'BURHANUDDIN WAKHID', '123', 'Kordinator Kecamatan', 'Kecamatan Gebog', 2),
(17, '198501302010122004', 'DIETA WIDYA KRISNASARI', '123', 'Kordinator Kecamatan', 'Kecamatan Jati', 2),
(18, '196602271992031003', 'SU\'BAH YULI WARDATI', '123', 'Team PWU', 'Kecamatan Jati', 2),
(19, '196004171988032001', 'TOMI RIZQI', '123', 'Team PWU', 'Kecamatan Jekulo', 2),
(20, '195910251987111001', 'BAGUS ADI PUTRA', '123', 'Team PWU', 'Kecamatan Jekulo', 2),
(21, '196507061990121001', 'ABDURRAHMAN YONG IRIANTO', '123', 'Team PWU', 'Kecamatan Kaliwungu', 2),
(22, '196206221983021001', 'YULIAR PUSPA MEGA', '123', 'Team PWU', 'Kecamatan Kaliwungu', 2),
(23, '196007061987031001', 'SRI LESTARI', '123', 'kordinator kecamatan', 'Kecamatan Kaliwungu', 2),
(24, '195910151981121001', 'DHIAMAS BAGUS', '123', 'Team PWU', 'Kecamatan Kaliwungu', 2),
(25, '197611031999122001', 'IKHSAN WAHYUDI', '123', 'Kordinator Kecamatan', 'Kecamatan Undaan', 2),
(26, '196501031991022001', 'SUKARJONO', '123', 'Team PWU', 'Kecamatan Undaan', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_surat` (`no_surat`);

--
-- Indeks untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id` (`id`),
  ADD KEY `no_surat` (`no_surat`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_penugasan`
--
ALTER TABLE `surat_penugasan`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_penugasan` (`id_jadwal`);

--
-- Ketidakleluasaan untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `data_pegawai_ibfk_1` FOREIGN KEY (`no_surat`) REFERENCES `surat_penugasan` (`no_surat`);

--
-- Ketidakleluasaan untuk tabel `jadwal_penugasan`
--
ALTER TABLE `jadwal_penugasan`
  ADD CONSTRAINT `jadwal_penugasan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data_pegawai` (`id`),
  ADD CONSTRAINT `jadwal_penugasan_ibfk_2` FOREIGN KEY (`no_surat`) REFERENCES `surat_penugasan` (`no_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
