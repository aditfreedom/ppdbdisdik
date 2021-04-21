-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2021 pada 02.31
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftarulang`
--

CREATE TABLE `daftarulang` (
  `id_daftarulang` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tingkat` varchar(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_panggilan` varchar(125) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `tpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `suku` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `goldar` varchar(3) NOT NULL,
  `anak_ke` varchar(3) NOT NULL,
  `dari_saudara` varchar(3) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `jarak` varchar(4) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tptlahir_ayah` varchar(50) NOT NULL,
  `tgllahir_ayah` varchar(20) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `alamat_ayah` varchar(500) NOT NULL,
  `desa_ayah` varchar(50) NOT NULL,
  `kecamatan_ayah` varchar(50) NOT NULL,
  `kabupaten_ayah` varchar(50) NOT NULL,
  `provinsi_ayah` varchar(50) NOT NULL,
  `hp_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tptlahir_ibu` varchar(50) NOT NULL,
  `tgllahir_ibu` varchar(20) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `desa_ibu` varchar(50) NOT NULL,
  `kecamatan_ibu` varchar(50) NOT NULL,
  `kabupaten_ibu` varchar(50) NOT NULL,
  `provinsi_ibu` varchar(50) NOT NULL,
  `hp_ibu` varchar(50) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL,
  `kabupaten_sekolah` varchar(50) NOT NULL,
  `provinsi_sekolah` varchar(50) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `olah_raga` varchar(10) NOT NULL,
  `seni` varchar(10) NOT NULL,
  `tari` varchar(10) NOT NULL,
  `lukis` varchar(10) NOT NULL,
  `drama` varchar(10) NOT NULL,
  `sastra` varchar(10) NOT NULL,
  `organisasi` varchar(10) NOT NULL,
  `prestasi` varchar(500) NOT NULL,
  `alasan` varchar(500) NOT NULL,
  `tentang_sekolah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota`
--

CREATE TABLE `kuota` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `kuota` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuota`
--

INSERT INTO `kuota` (`id`, `jenis`, `kuota`, `keterangan`) VALUES
(3, 'Peserta Didik Baru SD', 56, 'Peserta Didik Baru Kelas I SD'),
(5, 'Peserta Didik Baru SMP', 58, 'Peserta Didik Baru Kelas VII SMP'),
(6, 'Peserta Didik Baru SMA', 60, 'Peserta Didik Baru Kelas X SMA'),
(7, 'Pindahan SD', 12, 'Hanya Kelas II SD'),
(8, 'Pindahan SMP', 7, 'Hanya Kelas IX'),
(9, 'Pindahan SMA', 15, 'Kelas XI dan XII');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tptlahir` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `namaayah` varchar(255) NOT NULL,
  `namaibu` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `no_wa` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `approve_formulir` varchar(30) NOT NULL,
  `approve_lulus` varchar(30) NOT NULL,
  `approve_daftarulang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_lengkap`, `tptlahir`, `tgllahir`, `nisn`, `alamat`, `sekolah_asal`, `namaayah`, `namaibu`, `no_hp`, `no_wa`, `foto`, `akte`, `bukti_tf`, `jenis`, `username`, `password`, `role`, `approve_formulir`, `approve_lulus`, `approve_daftarulang`) VALUES
(1, 'admin', '', '', 'admin', 'admin', 'admin', '', '', 'admin', '', 'admin', '', 'admin', 'admin', 'admin', 'sukma2021', '0', 'admin', 'admin', 'admin'),
(11, 'superadmin', '', '', 'superadmin', 'superadmin', 'superadmin', '', '', 'superadmin', '', 'superadmin', '', 'superadmin', 'superadmin', 'superadmin', 'adminsukma2021', '0', 'superadmin', 'superadmin', 'superadmin'),
(18, 'adminoperator', '', '', '0', 'adminoperator', 'adminoperator', '', '', '0', '', 'adminoperator', '', 'adminoperator', '', 'adminoperator', 'adminoperator2021', '0', 'adminoperator', 'adminoperator', 'adminoperator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`id_daftarulang`);

--
-- Indeks untuk tabel `kuota`
--
ALTER TABLE `kuota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  MODIFY `id_daftarulang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kuota`
--
ALTER TABLE `kuota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
