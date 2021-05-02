-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2021 pada 21.14
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
-- Database: `ppdbdisdik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bentuk_pendidikan`
--

CREATE TABLE `bentuk_pendidikan` (
  `id_bentuk_pendidikan` varchar(3) NOT NULL,
  `nama_bentuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bentuk_pendidikan`
--

INSERT INTO `bentuk_pendidikan` (`id_bentuk_pendidikan`, `nama_bentuk`) VALUES
('1', 'TK'),
('10', 'MTs'),
('11', 'Paket A'),
('12', 'Paket B'),
('13', 'SMA'),
('14', 'SMLB'),
('15', 'SMK'),
('16', 'MA'),
('17', 'MAK'),
('18', 'Paket C'),
('19', 'Akademik'),
('2', 'KB'),
('20', 'Politeknik'),
('21', 'Sekolah Tinggi'),
('22', 'Institut'),
('23', 'Universitas'),
('24', 'Kursus'),
('25', 'Keaksaraan'),
('26', 'TBM'),
('27', 'PKBM'),
('28', 'Life Skill'),
('29', 'SLB'),
('3', 'TPA'),
('30', 'Satap TK SD'),
('31', 'Satap SD SMP'),
('32', 'Satap TK SD SMP'),
('33', 'Satap SD SMP SMA'),
('34', 'RA'),
('35', 'SMP Terbuka'),
('36', 'SMPTK'),
('37', 'SMTK'),
('38', 'SDTK'),
('39', 'SMAg.K'),
('4', 'SPS'),
('40', 'SKB'),
('41', 'Taman Seminari'),
('42', 'TKLB'),
('43', 'SPK KB'),
('44', 'SMAK'),
('5', 'SD'),
('51', 'SPK PG'),
('52', 'SPK TK'),
('53', 'SPK SD'),
('54', 'SPK SMP'),
('55', 'SPK SMA'),
('56', 'Pondok Pesantren'),
('57', 'Pratama W P'),
('58', 'Adi W P'),
('59', 'Madyama W P'),
('6', 'SMP'),
('60', 'Utama W P'),
('7', 'SDLB'),
('8', 'SMPLB'),
('9', 'MI');

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

--
-- Dumping data untuk tabel `daftarulang`
--

INSERT INTO `daftarulang` (`id_daftarulang`, `id`, `tingkat`, `nama_lengkap`, `nama_panggilan`, `nisn`, `tpt_lahir`, `tgl_lahir`, `agama`, `suku`, `jk`, `goldar`, `anak_ke`, `dari_saudara`, `alamat`, `jarak`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `nama_ayah`, `tptlahir_ayah`, `tgllahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `alamat_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `hp_ayah`, `nama_ibu`, `tptlahir_ibu`, `tgllahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `alamat_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `hp_ibu`, `sekolah_asal`, `npsn`, `alamat_sekolah`, `kabupaten_sekolah`, `provinsi_sekolah`, `penyakit`, `olah_raga`, `seni`, `tari`, `lukis`, `drama`, `sastra`, `organisasi`, `prestasi`, `alasan`, `tentang_sekolah`) VALUES
(11, 19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id_pesertadidik` varchar(255) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL,
  `kode_wilayah` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `desa_kelurahan` varchar(200) NOT NULL,
  `rt` int(5) NOT NULL,
  `rw` int(5) NOT NULL,
  `nama_dusun` varchar(200) NOT NULL,
  `nama_ibu_kandung` varchar(200) NOT NULL,
  `pekerjaan_ibu_kandung` varchar(50) NOT NULL,
  `penghasilan_ibu_kandung` varchar(50) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_wali` varchar(200) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `penghasilan_wali` varchar(50) NOT NULL,
  `kebutuhan_khusus` varchar(50) NOT NULL,
  `no_kip` varchar(50) NOT NULL,
  `no_pkh` varchar(50) NOT NULL,
  `lintang` varchar(50) NOT NULL,
  `bujur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_desa`
--

CREATE TABLE `data_desa` (
  `id_desa` int(255) NOT NULL,
  `kode_wilayah` varchar(10) NOT NULL,
  `nama_desa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_desa`
--

INSERT INTO `data_desa` (`id_desa`, `kode_wilayah`, `nama_desa`) VALUES
(3, '061210', 'Lhok Mambang'),
(4, '061210', 'Blang Keude'),
(5, '061210', 'Keude Lapang'),
(6, '061210', 'Lingka Kuta'),
(7, '061210', 'Lapang Barat'),
(8, '061210', 'Alue Mangki'),
(9, '061210', 'Ie Rhob'),
(10, '061210', 'Ceubo'),
(11, '061210', 'Teupin Siron'),
(12, '061210', 'Lapang Timu'),
(13, '061210', 'Cot Jabet'),
(14, '061210', 'Paloh Me'),
(15, '061210', 'Geurugok'),
(16, '061210', 'Cot Puuk'),
(17, '061210', 'Cot Tufah'),
(18, '061210', 'Samuti Makmur'),
(19, '061210', 'Samuti Rayeuk '),
(20, '061210', 'Samuti Aman'),
(21, '061210', 'Samuti Krueng'),
(22, '061210', 'Cot Mane'),
(23, '061210', 'Blang Rheue'),
(24, '061210', 'Monjambee'),
(25, '061210', 'Monkeulayu'),
(26, '061210', 'Tanjong Bungong'),
(27, '061210', 'Cot Tubee'),
(29, '061210', 'Blang Kubu'),
(30, '061210', 'Pulo Gisa'),
(31, '061210', 'Tanjong Mesjid'),
(32, '061210', 'Ujong Bayu'),
(33, '061210', 'Cot Rambat'),
(34, '061210', 'Tanjong Raya'),
(35, '061210', 'Mon Jeureujak'),
(36, '061210', 'Damakawan'),
(39, '061210', 'Paya Baro'),
(40, '061207', 'Linggong'),
(42, '061207', 'Tanoh Anoe'),
(43, '061207', 'Abeuk Jaloh'),
(44, '061207', 'Pulo Reudeup'),
(45, '061207', 'Pulo Seuna'),
(46, '061207', 'Pulon Iboih'),
(47, '061207', 'Pulo Blang'),
(48, '061207', 'Lhok Bugeng'),
(50, '061207', 'Lampoh Rayok'),
(52, '061207', 'Alue Buya'),
(53, '061207', 'Pasi'),
(55, '061207', 'Pulo U'),
(56, '061207', 'Abeuk'),
(57, '061207', 'Jangka Alue Bie'),
(58, '061207', 'Alue Buya Pasi'),
(59, '061207', 'Jangka Alue U'),
(60, '061207', 'Jangka Alue'),
(61, '061207', 'Jangka Mesjid'),
(62, '061207', 'Jangka Keutapang'),
(63, '061207', 'Paya Bieng'),
(66, '061207', 'Pante Peusangan'),
(67, '061207', 'Kambuk'),
(68, '061207', 'Meunasah Krueng'),
(69, '061207', 'Lamkuta'),
(70, '061207', 'Geundot'),
(71, '061207', 'Gampong Meulinteung'),
(72, '061207', 'Lampoh Raye'),
(75, '061207', 'Tanjongan'),
(76, '061207', 'Pante Paku'),
(77, '061207', 'Pante Ranup'),
(78, '061207', 'Pante Sukon'),
(80, '061207', 'Bugak Blang'),
(81, '061207', 'Bugak Krueng'),
(82, '061207', 'Bugak Mesjid'),
(83, '061207', 'Bugak Krueng Mate'),
(84, '061207', 'Bugeng'),
(85, '061207', 'Punjot'),
(86, '061207', 'Pulo'),
(87, '061207', 'Pineung Mns Dua'),
(88, '061207', 'Ulee Ceu'),
(92, '061207', 'Bada Timu'),
(93, '061207', 'Bada Barat'),
(95, '061207', 'Jarommah Baroh'),
(96, '061207', 'Jarommah Mee'),
(97, '061207', 'Cot Ara'),
(98, '061207', 'Pulo Pisang'),
(99, '061207', 'Asam Bideuen'),
(101, '061207', 'Alue Bayeu Utang'),
(102, '061207', 'Alue Kuta'),
(103, '061207', 'Kuala Ceurape'),
(105, '061206', 'Blang Cot Tunong'),
(107, '061206', 'Blang Rheum'),
(108, '061206', 'Blang Seunong'),
(109, '061206', 'Cot Iboeh Timu'),
(111, '061206', 'Cot Keutapang'),
(112, '061206', 'Cot Leusong'),
(113, '061206', 'Cot Tarom Baroh'),
(114, '061206', 'Cot Tarom Tunong'),
(118, '061206', 'Paloh Panyang'),
(119, '061206', 'Seulembah'),
(120, '061206', 'Seuneobok Lhong'),
(121, '061206', 'Cot Trieng'),
(122, '061206', 'Geudong Tampu'),
(125, '061206', 'Krueng Juli Timu'),
(126, '061206', 'Krueng Juli Barat'),
(128, '061206', 'Cot Unoe'),
(129, '061206', 'Teupok Tunong'),
(130, '061206', 'Teupok Baroh'),
(131, '061206', 'Pulo Lawang'),
(132, '061206', 'Paloh Seulimeng'),
(133, '061206', 'Abeuk Usong'),
(134, '061206', 'Cot Bada'),
(135, '061206', 'Cot Gadong'),
(136, '061206', 'Kuala Jeumpa'),
(141, '061206', 'Mon Mane'),
(142, '061206', 'Lipah Rayeuk'),
(143, '061206', 'Lipah Cut'),
(144, '061206', 'Cot Geurundong'),
(145, '061206', 'Batee Timoh'),
(146, '061206', 'Mon Jambee'),
(147, '061206', 'Geulumpang Payong'),
(148, '061206', 'Laksamana'),
(149, '061206', 'Blang Dalam'),
(150, '061206', 'Blang Bladeh'),
(151, '061206', 'Beurawang'),
(156, '061206', 'Blang Cot Baroh'),
(158, '061206', 'Abeuk Tingkeum'),
(161, '061206', 'Blang Gandai'),
(162, '061206', 'Blang Mee'),
(163, '061206', 'Blang Seupeung'),
(164, '061206', 'Cot Iboih'),
(165, '061206', 'Cot Meugo'),
(166, '061206', 'Cot Ulim'),
(167, '061203', 'Desa Cot Geulumpang Baroh'),
(168, '061203', 'Desa Cot Geulumpang Tunong'),
(169, '061203', 'Desa Blang Mee Barat'),
(170, '061203', 'Desa Keudee Jeunieb'),
(171, '061203', 'Desa Matang Nibong'),
(172, '061203', 'Desa Matang Teungoh'),
(173, '061203', 'Desa Matang Bangka'),
(174, '061203', 'Desa Janggot Seungko'),
(175, '061203', 'Desa Ulee Rabo'),
(176, '061203', 'Desa Mns Dayah'),
(177, '061203', 'Desa Lhung Teungoh'),
(178, '061203', 'Desa Blang Mee Timu'),
(179, '061203', 'Desa Teupin Keupula'),
(180, '061203', 'Desa Dayah Baro'),
(181, '061203', 'Desa Blang Lancang'),
(182, '061203', 'Desa Mns Blang'),
(183, '061203', 'Desa Lancang'),
(184, '061203', 'Desa Kota Jeunieb'),
(185, '061203', 'Desa Blang Ralee'),
(186, '061203', 'Desa Lampoh Oe'),
(187, '061203', 'Desa Lhee Simpang'),
(188, '061203', 'Desa Tufah'),
(189, '061203', 'Desa Pulo Rangkileh'),
(190, '061203', 'Desa Sampo Ajad'),
(191, '061203', 'Desa Darul Aman'),
(192, '061203', 'Desa Lhok Kulam'),
(193, '061203', 'Desa Ule Blang'),
(194, '061203', 'Desa Uten Pupaleh'),
(195, '061203', 'Desa Blangneubok'),
(196, '061203', 'Desa Paya Bilie'),
(197, '061203', 'Desa Tanjong bungong'),
(198, '061203', 'Desa Garab '),
(199, '061203', 'Desa Meunasah Tambo'),
(200, '061203', 'Desa Meunasah Keupula'),
(201, '061203', 'Desa Meunasah Tunong Lueng'),
(202, '061203', 'Desa Meunasah Lueng'),
(203, '061203', 'Desa Meunasah Alue'),
(204, '061203', 'Desa Ulee Gajah'),
(205, '061203', 'Desa Blang Poroh'),
(206, '061203', 'Desa Alue Lamsaba'),
(207, '061203', 'Desa Jeumpa Sikureng'),
(208, '061203', 'Desa Lheu Barat'),
(209, '061205', 'Juli Mee Teungoh'),
(210, '061205', 'Juli Meunasah Teungoh'),
(211, '061205', 'Juli Teungku Dilampoh'),
(212, '061205', 'Juli Seupeng/Lampoh'),
(213, '061205', 'Blang Keutumba'),
(214, '061205', 'Geulumpang Meujim-Jim'),
(215, '061205', 'Seneubok Gunci'),
(216, '061205', 'Juli Keude Dua'),
(217, '061205', 'Juli Tambo Tanjong'),
(218, '061205', 'Juli Meunasah Jok'),
(219, '061205', 'Paseh'),
(220, '061205', 'Abeuk Budi'),
(221, '061205', 'Alue Unou/Unoe'),
(222, '061205', 'Batee Raya'),
(223, '061205', 'Juli Meunsah Tambo'),
(224, '061205', 'Juli Seutuy'),
(225, '061205', 'Mane Meujingki'),
(226, '061205', 'Seneubok Peuraden'),
(227, '061205', 'Juli Cot Mesjid'),
(228, '061205', 'Pante Baro'),
(229, '061205', 'Juli Uruk Anoe'),
(230, '061205', 'Blang Tingkeum'),
(231, '061205', 'Juli Payaru'),
(233, '061205', 'Juli Cot Meurak'),
(234, '061205', 'Juli Paseh'),
(236, '061205', 'Bunyot'),
(237, '061205', 'Paya Cut'),
(238, '061205', 'Balee Panah'),
(239, '061205', 'Kubang Hitam'),
(240, '061205', 'Seuneubok Dalam'),
(241, '061205', 'Teupin Mane'),
(242, '061205', 'Buket Mulia'),
(243, '061205', 'Krueng Simpo'),
(244, '061205', 'Ranto Panyang'),
(245, '061205', 'Alue Rambong'),
(247, '061205', 'Simpang Jaya'),
(248, '061205', 'Simpang Mulia'),
(249, '061205', 'Alue Limeng'),
(250, '061205', 'Salah Sirong Jaya'),
(251, '061205', 'Bivak'),
(252, '061205', 'Blang Rheu'),
(253, '061205', 'Suka Tani'),
(254, '061205', 'Pante Peusangan'),
(255, '061213', 'Pulo Kiton'),
(257, '061213', 'Geudong Gedong'),
(258, '061213', 'Geudong Alue'),
(259, '061213', 'Bandar Bireuen'),
(260, '061213', 'Pulo Ara Geudong Teungoh'),
(261, '061213', 'Bireuen Meunasah Dayah'),
(262, '061213', 'Bireuen Meunasah Capa'),
(264, '061213', 'Geulanggang Gampong'),
(265, '061213', 'Geulanggang Teungoh'),
(268, '061213', 'Cot Glumpang Tunong'),
(270, '061213', 'Geulanggang Kulam'),
(274, '061213', 'Geulanggang Baro'),
(275, '061213', 'Blang Reuling'),
(277, '061213', 'Bireuen Meunasah Blang'),
(280, '061213', 'Bireuen Meunasah Reulet'),
(281, '061213', 'Bireuen Meunasah Tgk Digadong'),
(282, '061213', 'Lhok Awe Teungoh'),
(285, '061213', 'Gampong Baro'),
(286, '061213', 'Cot Jrat'),
(287, '061213', 'Cot Putek'),
(288, '061213', 'Buket Teukuh'),
(292, '061213', 'Cot Gapu'),
(293, '061213', 'Uteuen Reutoh'),
(294, '061214', 'Cot Kuta'),
(296, '061214', 'Kuta Baro'),
(298, '061214', 'Ujong Blang'),
(299, '061214', 'Kuala Raja'),
(302, '061214', 'Cot Batee'),
(303, '061214', 'Cot Tarom Baroh'),
(304, '061214', 'Bale Kuyun'),
(306, '061214', 'Cot Glumpang'),
(308, '061214', 'Cot Laga Sawa'),
(309, '061214', 'Cot Trieng'),
(310, '061214', 'Cot U Sibak'),
(311, '061214', 'Cot Unoe'),
(312, '061214', 'Glumpang Baroh'),
(313, '061214', 'Kareung'),
(314, '061214', 'Krueng Juli Barat'),
(315, '061214', 'Krueng Juli Timu'),
(318, '061214', 'Lancok Lancok'),
(319, '061214', 'Lancok Pante Ara'),
(320, '061214', 'Lhok Awe Awe'),
(322, '061214', 'Ujong Blang Mesjid'),
(323, '061214', 'Weu Jangka'),
(324, '061214', 'Pulo Naleung'),
(325, '061217', 'Pulo Nga'),
(326, '061217', 'Tingkeum Manyang'),
(327, '061217', 'Ulee Pusong'),
(328, '061217', 'Blang Mee'),
(329, '061217', 'Blang Panjoe'),
(330, '061217', 'Kulu'),
(331, '061217', 'Kulu Kuta'),
(332, '061217', 'Cot Baroh '),
(333, '061217', 'Cot Tunong'),
(334, '061217', 'Paya Rangkuluh'),
(335, '061217', 'Gle Putoh'),
(336, '061217', 'Balee Me'),
(337, '061217', 'Babah Suak'),
(338, '061217', 'Cot Mee'),
(339, '061217', 'Paloh Peuradi'),
(340, '061217', 'Paloh Dama'),
(341, '061217', 'Babah Jurong'),
(342, '061217', 'Imbudee'),
(343, '061217', 'Meuse'),
(344, '061217', 'Dayah Panjoe'),
(345, '061217', 'Pulo Reudeup'),
(346, '061217', 'Keude Tanjong'),
(347, '061217', 'Geulanggang Meunje'),
(348, '061217', 'Geulanggan Panah'),
(349, '061217', 'Pulo Blang'),
(350, '061217', 'Meunasah Rayeuk'),
(351, '061217', 'Tanjong Paya'),
(352, '061217', 'Lhok Nga'),
(353, '061217', 'Pulo U Baroe'),
(354, '061217', 'Pulo U'),
(355, '061217', 'Tanjong Nie'),
(356, '061217', 'Asan Biduen'),
(359, '061217', 'Tingkeum Baroe'),
(360, '061217', 'Tanjong Mesjid'),
(361, '061217', 'Jarommah Me'),
(362, '061217', 'Jarommah Baro'),
(363, '061217', 'Pante Pisang'),
(364, '061217', 'Blang Cut'),
(365, '061217', 'Pante Cut'),
(366, '061217', 'Bayu'),
(367, '061217', 'Rusep Dayah'),
(368, '061217', 'Rusep Ara'),
(370, '061217', 'Paloh Kaye Kunyet'),
(371, '061217', 'Crueng Kumbang'),
(372, '061217', 'Tanjong Siron'),
(373, '061217', 'Paloh Raya'),
(374, '061217', 'Parang Sikureueng'),
(375, '061217', 'Paloh Jeuriket'),
(376, '061217', 'Dayah Mesjid'),
(377, '061217', 'Ujong Blang'),
(378, '061217', 'Keurumbok'),
(379, '061217', 'Cot Ara'),
(380, '061217', 'Rancong'),
(381, '061217', 'Jambo Kajeung'),
(382, '061209', 'Ulee Gle'),
(383, '061209', 'Pulo Teungoh'),
(384, '061209', 'Pandak'),
(385, '061209', 'Mon Ara'),
(386, '061209', 'Seuneubok Baro'),
(387, '061209', 'Blang Mane'),
(388, '061209', 'Lapehan Mesjid'),
(389, '061209', 'Panteu Breuh'),
(390, '061209', 'Blang Kuthang'),
(391, '061209', 'Cot Kruet'),
(392, '061209', 'Buket Seulamat'),
(393, '061209', 'Leubu Cot'),
(394, '061209', 'Leubu Me'),
(395, '061209', 'Paya Dua'),
(396, '061209', 'Leubu Mesjid'),
(397, '061209', 'Kuta Barat'),
(398, '061209', 'Trieng Gadeng'),
(399, '061209', 'Ara Lipeh'),
(400, '061209', 'Suka Rame'),
(401, '061209', 'Tanjong Mulia'),
(402, '061209', 'Panton Mesjid'),
(403, '061209', 'Blang Peureulak'),
(404, '061209', 'Meureubo'),
(405, '061209', 'Matang Kumbang'),
(406, '061209', 'Alue Dua'),
(407, '061209', 'Batee Dabai'),
(408, '061209', 'Blang Dalam'),
(409, '061202', 'Desa Alue Igeuh'),
(410, '061202', 'Desa Uteun Kruet'),
(411, '061202', 'Desa Lhok Dagang'),
(412, '061202', 'Desa Lancok Ulim'),
(413, '061202', 'Desa Mns. Reudeub'),
(414, '061202', 'Desa Nase Barat'),
(415, '061202', 'Desa Pandrah kandeh'),
(416, '061202', 'Desa Panton'),
(417, '061202', 'Desa Pandrah Janeung'),
(418, '061202', 'Desa Nase mee'),
(419, '061202', 'Desa Bantayan'),
(420, '061202', 'Desa Cot Leubeng'),
(421, '061202', 'Desa Meunasah Teungoh'),
(422, '061202', 'Desa Seuneubok Baro'),
(423, '061202', 'Desa Panton Bili'),
(424, '061202', 'Desa Blang Samagadeng'),
(425, '061202', 'Desa Kuta Rusep'),
(426, '061202', 'Desa Gampong Blang'),
(427, '061202', 'Desa Garot'),
(428, '061204', 'Desa Pulo'),
(429, '061204', 'Desa Mns. Baroh'),
(430, '061204', 'Desa Mns. Tambo'),
(431, '061204', 'Desa Mns. Rabo'),
(432, '061204', 'Desa Mns. Krueng'),
(433, '061204', 'Desa Mns. Hagu'),
(434, '061204', 'Desa Mns. Lawang'),
(435, '061204', 'Desa Cot Keutapang'),
(436, '061204', 'Desa Mns. Calok'),
(437, '061204', 'Desa Mns. Matang Reuleut'),
(438, '061204', 'Desa Mns. Matang Pasi'),
(439, '061204', 'Desa Mns. Kukue'),
(440, '061204', 'Desa Mns. Blang'),
(441, '061204', 'Desa Mns. Mesjid'),
(442, '061204', 'Desa Mns. Teungoh'),
(443, '061204', 'Desa Mns. Tunong'),
(444, '061204', 'Desa Mns. Cut'),
(445, '061204', 'Desa Blang Matang'),
(446, '061204', 'Desa Blang Bati'),
(447, '061204', 'Desa Keude Alue Reng'),
(448, '061204', 'Desa Kareung'),
(449, '061204', 'Desa Pulo Lawang'),
(450, '061204', 'Desa Buket Paya'),
(451, '061204', 'Desa Dayah Mon Ara'),
(452, '061204', 'Desa Cot Laut'),
(453, '061204', 'Desa Blang Langgang'),
(454, '061204', 'Desa Paya Timu'),
(455, '061204', 'Desa Paya Induk'),
(456, '061204', 'Desa Seunebok Paya'),
(457, '061204', 'Desa Cot Kruet'),
(458, '061204', 'Desa Alue Gandai'),
(459, '061204', 'Desa Tgk. Dibathon'),
(460, '061204', 'Desa Gampong Baro'),
(461, '061204', 'Desa Blang Geulumpang'),
(462, '061204', 'Desa Neubok naleung'),
(463, '061204', 'Desa Blang Kubu'),
(464, '061204', 'Desa Garot'),
(465, '061204', 'Desa Ara Bungong'),
(466, '061204', 'Desa Sawang'),
(467, '061204', 'Desa Blang Beruru'),
(468, '061204', 'Desa Jabiet'),
(469, '061204', 'Desa Gampong Mulia'),
(470, '061204', 'Desa Mns Alue'),
(471, '061204', 'Desa Mns Bungo'),
(472, '061204', 'Desa Paya Beunot'),
(473, '061204', 'Desa Blang Rangkuluh'),
(474, '061204', 'Desa Tanjong Seulamat'),
(475, '061204', 'Desa Alue Keutapang'),
(476, '061204', 'Desa Jaba'),
(477, '061204', 'Desa Pinto Rimba'),
(478, '061204', 'Pulo Lawang'),
(479, '061204', 'Seneubok Paya'),
(480, '061204', 'Paya Barat'),
(481, '061204', 'Paya Timu'),
(482, '061204', 'Gampong Baro'),
(483, '061212', 'Desa Jambo Dalam'),
(484, '061212', 'Desa Cot Geulumpang'),
(485, '061212', 'Desa Padang Kasab'),
(486, '061212', 'Desa Puuk'),
(487, '061212', 'Desa Kuta Trieng'),
(488, '061212', 'Desa Seuneubok Seumawe'),
(489, '061212', 'Desa Seuneubok Teungoh'),
(490, '061212', 'Desa Rambong Payong'),
(491, '061212', 'Desa Keude Plimbang'),
(492, '061212', 'Desa Seuneubok Plimbang'),
(493, '061212', 'Desa Seuneubok Nalan'),
(494, '061212', 'Desa Krueng Baroe'),
(495, '061212', 'Desa Seuneubok Aceh'),
(496, '061212', 'Desa Seuneubok Punti'),
(497, '061212', 'Desa Teupin Panah'),
(498, '061212', 'Desa Balee Daka'),
(499, '061212', 'Desa Matang kulee'),
(500, '061212', 'Desa Uteun Rungkom'),
(501, '061212', 'Desa Lancok Bungo'),
(502, '061212', 'Desa Uteun Sikumbong'),
(503, '061212', 'Desa Garap'),
(504, '061212', 'Desa Paloh Pupu'),
(505, '061208', 'Desa Sagoe'),
(510, '061208', 'Paya Lipah'),
(512, '061208', 'Matang Sago'),
(513, '061208', 'Matang'),
(514, '061208', 'Mesjid'),
(516, '061208', 'Meunasah Dayah'),
(517, '061208', 'Keude Matangglumpang Dua'),
(518, '061208', 'Meunasah Timu'),
(519, '061208', 'Neuheun'),
(523, '061208', 'Pante Piyeu'),
(524, '061208', 'Blang Cut Peusangan'),
(527, '061208', 'Blang Asan'),
(530, '061208', 'Gampong Raya Dagang'),
(531, '061208', 'Blang Panjoe'),
(532, '061208', 'Gampong Raya Tambo'),
(533, '061208', 'Kapa'),
(534, '061208', 'Pante Lhong'),
(535, '061208', 'Keude Tanjong'),
(536, '061208', 'Tanjong Paya'),
(537, '061208', 'Tanjong Nie'),
(538, '061208', 'Tanjong Gajah'),
(541, '061208', 'Pante Pisang'),
(542, '061208', 'Pante Gajah'),
(543, '061208', 'Paya Cut'),
(545, '061208', 'Panton Geulima'),
(548, '061208', 'Matang Mesjid'),
(551, '061208', 'Seuneubok Aceh'),
(552, '061208', 'Lueng Kuli'),
(553, '061208', 'Simpang Kameng'),
(554, '061208', 'Cot Iju'),
(555, '061208', 'Cot Buket'),
(556, '061208', 'Nicah'),
(557, '061208', 'Cot Keuranji'),
(558, '061208', 'Gampong Baro'),
(559, '061208', 'Blang Rambong'),
(560, '061208', 'Paya Aboe'),
(561, '061208', 'Seuneubok Rawa'),
(562, '061208', 'Paloh'),
(563, '061208', 'Alue Peunoe'),
(564, '061208', 'Tanoh Mirah'),
(565, '061208', 'Blang Geulanggang'),
(567, '061208', 'Cot Nga'),
(569, '061208', 'Paya Meuneng'),
(574, '061208', 'Cot Panjoe'),
(579, '061208', 'Cot Rabo Baroh'),
(581, '061208', 'Abeuk Jaloh'),
(582, '061208', 'Pulo Reudeup'),
(583, '061208', 'Pulo Seuna'),
(584, '061208', 'Pulo Iboeh'),
(585, '061208', 'Pulo Blang'),
(586, '061208', 'Lhok Bugeng'),
(589, '061208', 'Sagoe'),
(590, '061208', 'Cot Bada Barat'),
(591, '061208', 'Cot Bada Baroh'),
(592, '061208', 'Cot Bada Tunong'),
(593, '061208', 'Cot Keumude'),
(594, '061208', 'Cot Girek'),
(596, '061208', 'Krung Baro Mesjid'),
(597, '061208', 'Krung Baro Babah Krung'),
(599, '061208', 'Menasah Paya'),
(600, '061208', 'Blang Cut'),
(601, '061208', 'Pante Cut'),
(602, '061208', 'Glumpang Tujoh '),
(604, '061208', 'Bayu'),
(605, '061208', 'Mns Nibong'),
(606, '061208', 'Mns Meucap'),
(607, '061208', 'Pante Ara'),
(608, '061208', 'Gampong Putoh'),
(611, '061208', 'Pulo U'),
(612, '061208', 'Matang Cot Paseh'),
(614, '061208', 'Rusep Ara'),
(615, '061208', 'Rusep Dayah'),
(616, '061208', 'Blang Dalam'),
(617, '061208', 'Alue Udeung'),
(619, '061208', 'Uteun Bunta'),
(621, '061208', 'Paya Reuhat'),
(622, '061208', 'Mata Mamplam'),
(623, '061208', 'Cot Puuk'),
(624, '061208', 'Cot Rabo Tunong'),
(626, '061208', 'Karieng'),
(627, '061208', 'Bale Kiro'),
(628, '061208', 'Pulo Naleung'),
(629, '061208', 'Alue Glumpang'),
(630, '061208', 'Krueng Deu'),
(631, '061215', 'Darul Aman'),
(632, '061215', 'Suwak'),
(633, '061215', 'Tanjong Beuridi'),
(634, '061215', 'Blang Mane'),
(635, '061215', 'Darussalam'),
(636, '061215', 'Pulo Harapan'),
(638, '061216', 'Pante Baro Gle Siblah'),
(639, '061216', 'Pante Baro Kumbang'),
(640, '061216', 'Pante Baro Buket Panyang'),
(641, '061216', 'Kubu Raya'),
(642, '061216', 'Lueng Daneuen'),
(643, '061216', 'Rambong Payong'),
(644, '061216', 'Kubu'),
(645, '061216', 'Alue Kupula'),
(646, '061216', 'Dayah Baro'),
(647, '061216', 'Alue Krueb'),
(648, '061216', 'Teupin Raya'),
(649, '061216', 'Cot Aneuk Mate'),
(651, '061216', 'Alue Iet'),
(653, '061216', 'Buket Sudan'),
(654, '061216', 'Paloh Mampree'),
(655, '061216', 'Cot Saleut'),
(656, '061216', 'Awe Geutah Paya'),
(657, '061216', 'Blang Cirih'),
(658, '061216', 'Tanjong Mulia'),
(659, '061216', 'Suka Rame'),
(660, '061216', 'Pante Karya'),
(661, '061216', 'Paloh Harapan'),
(662, '061216', 'Alue Glumpang'),
(664, '061201', 'Keude Aceh'),
(665, '061201', 'Kandang'),
(666, '061201', 'Gampong Putoh'),
(667, '061201', 'Mideun Jok'),
(668, '061201', 'Namploh Manyang'),
(669, '061201', 'Namploh Baro'),
(670, '061201', 'Namploh Blang Garang'),
(671, '061201', 'Namploh Krueng'),
(672, '061201', 'Namploh Papeun '),
(673, '061201', 'Meunasah Lueng'),
(674, '061201', 'Lhok Seumira'),
(675, '061201', 'Ulee Jeumatan'),
(676, '061201', 'Meuliek'),
(677, '061201', 'Pante Rheng'),
(678, '061201', 'Gampong Baro'),
(679, '061201', 'Pineung Siribee '),
(680, '061201', 'Sangso'),
(681, '061201', 'Angkieng Barat '),
(682, '061201', 'Matang Teungoh'),
(683, '061201', 'Meunasah Lancok'),
(684, '061201', 'Meunasah Lincah'),
(685, '061201', 'Meunasah Puuk'),
(686, '061201', 'Tanjong Baro'),
(687, '061201', 'Tanjongan Idem '),
(688, '061201', 'Ulee Ue'),
(689, '061201', 'Meurah'),
(690, '061201', 'Batee Iliek'),
(691, '061201', 'Pulo Baroh'),
(692, '061201', 'Mesjid Baro'),
(693, '061201', 'Lancok'),
(694, '061201', 'Paloh'),
(695, '061201', 'Cot Siren'),
(696, '061201', 'Alue Barat'),
(697, '061201', 'Cot Mane'),
(698, '061201', 'Darussalam'),
(699, '061201', 'Glumpang Payong'),
(700, '061201', 'Matang'),
(701, '061201', 'Matang Jareung '),
(702, '061201', 'Matang Wakeuh'),
(703, '061201', 'Ulee Alue'),
(704, '061201', 'Cot Meurak Baroh'),
(705, '061201', 'Cot Meurak Blang'),
(706, '061201', 'Glumpang Meulum'),
(707, '061201', 'Glumpang Bungkok'),
(708, '061201', 'Lueng Keubeu'),
(709, '061201', 'Mideun Geudong'),
(710, '061211', 'Arongan'),
(711, '061211', 'Balee'),
(712, '061211', 'Meunasah Barat (Curucok Barat)'),
(713, '061211', 'Rheum Barat'),
(714, '061211', 'Rheum Baroh'),
(715, '061211', 'Gle Meudong '),
(716, '061211', 'Ceurucok '),
(717, '061211', 'Blang Kuta Coh'),
(718, '061211', 'Blang Kuta Dua Meunasah'),
(719, '061211', 'Blang Teumulek'),
(720, '061211', 'Cot Trieng'),
(721, '061211', 'Blang Mane Barat'),
(722, '061211', 'Blang Mane Dua Meunasah'),
(723, '061211', 'Jurong Binjee'),
(724, '061211', 'Krueng Meuseugob'),
(725, '061211', 'Lancang'),
(726, '061211', 'Lhok Tanoh'),
(727, '061211', 'Meunasah Dayah'),
(728, '061211', 'Meunasah Mesjid'),
(729, '061211', 'Meunasah Mamplam'),
(730, '061211', 'Pulo Dapong'),
(731, '061211', 'Pulo Drien'),
(732, '061211', 'Rheum Timu'),
(733, '061211', 'Peuneulet Tunong'),
(734, '061211', 'Cureh Baroh'),
(735, '061211', 'Cureh Tunong'),
(736, '061211', 'Meunasah Asan'),
(737, '061211', 'Keude Tambue'),
(738, '061211', 'Blang Tambue'),
(739, '061211', 'Tambue Barat'),
(740, '061211', 'Paku '),
(741, '061211', 'Blang Panyang '),
(742, '061211', 'Lhok Mane'),
(743, '061211', 'Calok'),
(744, '061211', 'Alue Leuhop'),
(745, '061211', 'Ulee Kareung'),
(746, '061211', 'Peuneulet Baroh'),
(747, '061211', 'Ie Rhob Babah Lueng'),
(748, '061211', 'Ie Rhob Barat'),
(749, '061211', 'Ie Rhob Geulumpang'),
(750, '061211', 'Ie Rhob Timu'),
(751, '061211', 'Desa Alue Leuhob'),
(752, '061218', 'Kiran Krueng'),
(753, '061218', 'Kiran Dayah'),
(754, '061218', 'Kiran Baroh'),
(755, '061218', 'Kuta Baroh'),
(756, '061218', 'Meuko Meugit'),
(757, '061218', 'Desa Alue Leuhob');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sd`
--

CREATE TABLE `data_sd` (
  `id_sekolah` varchar(255) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kode_wilayah` varchar(20) NOT NULL,
  `bentuk_pendidikan` varchar(3) NOT NULL,
  `status_sekolah` varchar(3) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `lintang` varchar(15) NOT NULL,
  `bujur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sd`
--

INSERT INTO `data_sd` (`id_sekolah`, `npsn`, `nama_sekolah`, `kode_wilayah`, `bentuk_pendidikan`, `status_sekolah`, `alamat_jalan`, `desa_kelurahan`, `rt`, `rw`, `lintang`, `bujur`) VALUES
('0009AE90-2EF5-E011-B245-7D31763633FE', '10106861', 'SD NEGERI 2 JANGKA', '061207  ', '5', '1', 'Jalan Bugak ', 'Bugak Krueng', '0', '0', '5.2473', '96.8088'),
('000FAA90-2EF5-E011-BF36-538ADF785DE8', '10106936', 'SD NEGERI 5 PEUSANGAN', '061208  ', '5', '1', 'Jalan Banda Aceh - Medan', 'Cot Ieju', '0', '0', '5.2082', '96.7584'),
('0018AB90-2EF5-E011-BA37-53CE9C3882F6', '10106884', 'SD NEGERI 25 PEUSANGAN', '061208  ', '5', '1', 'Jln.Jangka II', 'Matang Cot Paseh', '0', '0', '5.1547', '96.6978'),
('001EAD90-2EF5-E011-BA62-8D3BAC812543', '10106912', 'SD NEGERI 4 JULI', '061205  ', '5', '1', 'Jln Alue Unoe', 'Juli Seupeng', '0', '0', '5.1811', '96.7057'),
('0023A2AE-93B7-42FD-BF47-040BE457F5F2', '60703334', 'MIN 24 BIREUEN', '061201  ', '9', '1', 'DESA KEUDE ACEH SAMALANGA', '-', '', '', '5.208819', '96.367333'),
('002BAF90-2EF5-E011-AEBC-E3B50380464F', '10106801', 'SD NEGERI 10 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln. Blang Mane', 'BLANG MANE BARAT', '0', '0', '5.1927', '96.3904'),
('0038AD90-2EF5-E011-957D-3BE9EC95F0EC', '10106946', 'SD NEGERI 6 JULI', '061205  ', '5', '1', 'Jln Gayo Km 13', 'BUKET MULIA', '0', '0', '5.0944', '96.7021'),
('004BA790-2EF5-E011-9E2D-6BF32E617E54', '10106800', 'SD NEGERI 10 SAMALANGA', '061201  ', '5', '1', 'Jln Mesjid Raya', 'Kandang', '0', '0', '5.2076', '96.3629'),
('005FAD90-2EF5-E011-97A1-51957182A87E', '10106993', 'SD NEGERI 9 JULI', '061205  ', '5', '1', 'Jln. Utama Simpang Jaya', 'Simpang Jaya', '0', '0', '5.1201', '96.6624'),
('0065AE90-2EF5-E011-8B0E-B7EF7301AE7A', '10106990', 'SD NEGERI 9 JANGKA', '061207  ', '5', '1', 'Jalan Jangka II', 'PULO SEUNA', '0', '0', '5.2547', '96.8127'),
('006CAC90-2EF5-E011-91D7-6FB7E4E5023B', '10106975', 'SD NEGERI 8 GANDAPURA', '061210  ', '5', '1', 'Gandapura', 'TANJONG MESJID', '0', '0', '5.2266', '96.8478'),
('0074A890-2EF5-E011-AC4F-0509626A0EA4', '10106869', 'SD NEGERI 2 PEUDADA', '061204  ', '5', '1', 'Jl. Banda Aceh - Medan Km. 205', 'Blang Bati', '0', '0', '5.1908', '96.6319'),
('0086AD90-2EF5-E011-AD58-331A3F054F8C', '10106817', 'SD NEGERI 12 JULI', '061205  ', '5', '1', 'Bivak', 'Krueng Simpo', '0', '0', '5.1095', '96.6482'),
('0090B090-2EF5-E011-8BEF-13D12E95F5E7', '10106836', 'SD NEGERI 15 BIREUEN', '061213  ', '5', '1', 'Pulo Ara ', 'Pulo Ara Geudong Teungoh', '0', '0', '5.1963', '96.7067'),
('0093AD90-2EF5-E011-9360-9D52AED88ED3', '10106826', 'SD NEGERI 13 JULI', '061205  ', '5', '1', 'Jl Dusun Carak', 'Paya Cut', '0', '0', '5.2004', '96.7108'),
('0099AC90-2EF5-E011-AF7E-E3FEB5121F8D', '10106803', 'SD NEGERI 11 GANDAPURA', '061210  ', '5', '1', 'Damakawan', 'Damakawan', '0', '0', '5.2028', '96.9101'),
('00A6A990-2EF5-E011-BC86-5F25F792B9D9', '10106977', 'SD NEGERI 8 JEUMPA', '061206  ', '5', '1', 'Jln PDG Batee Timoh', 'Batee Timoh', '0', '0', '5.2077', '96.6087'),
('00B5AC90-2EF5-E011-8950-0B94D0607688', '10106709', 'SD NEGERI 2 PANDRAH', '061202  ', '5', '1', 'Jalan Rel Kereta Api', 'Pandrah Kandeh', '0', '0', '5.1905', '96.4687'),
('00BCAA90-2EF5-E011-A95C-535D7D7D95CB', '10106855', 'SD NEGERI 18 PEUSANGAN', '061208  ', '5', '1', 'Jln.Seuneubok Rawa', 'SEUNEUBOK RAWA', '0', '0', '5.1061', '96.6623'),
('00C4AE90-2EF5-E011-AF83-AB9C3BF90C8C', '10106906', 'SD NEGERI 3 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln Kereta Api Keude Tambue', 'Keude Tambue', '0', '0', '5.1597', '96.3661'),
('00CAAA90-2EF5-E011-AD19-D7B10ACCC65D', '10106858', 'SD NEGERI 19 PEUSANGAN', '061208  ', '5', '1', 'Pulo Naleueng', 'Pulo Naleung', '0', '0', '5.1575', '96.7068'),
('00D9B290-2EF5-E011-B6B1-6786CDAF3D91', '10106980', 'SD NEGERI 8 KUTA BLANG', '061217  ', '5', '1', 'Jln. Water Intake ', 'Blang Me', '0', '0', '5.2039', '96.8287'),
('00DDAB90-2EF5-E011-8395-2D383AF411FB', '10106809', 'SD NEGERI 11 MAKMUR', '061209  ', '5', '1', 'JLN TANJUNG MULIA', 'Matang kumbang', '0', '0', '5.1367', '96.8252'),
('00E8B290-2EF5-E011-B9E9-8328CBABECA6', '10106994', 'SD NEGERI 9 KUTA BLANG', '061217  ', '5', '1', ' Jalan Cot Tunong-Paloh Raya Desa Tanjong Siron', 'Tanjong Siron', '0', '0', '5.1761', '96.8507'),
('00F7B290-2EF5-E011-BCFA-F5308AEC095D', '10106796', 'SD NEGERI 10 KUTABLANG', '061217  ', '5', '1', 'Jln. Ulee Tutue Abeuk Rhuep', 'COT ME', '0', '0', '5.2361', '96.8432'),
('00FCAD90-2EF5-E011-A0CC-BFC5FBE7A952', '10106764', 'SD NEGERI 1 JANGKA', '061207  ', '5', '1', 'Jangka', 'Jangka Mesjid', '0', '0', '5.2564', '96.7854'),
('00FDAF90-2EF5-E011-A192-AF0AE4276A87', '10106907', 'SD NEGERI 4 BIREUEN', '061213  ', '5', '1', 'Jalan Laksamana Malahayati', 'Kota Bireun', '0', '0', '5.2053', '96.8734'),
('00FEAA90-2EF5-E011-B256-B14D21531650', '10106882', 'SD NEGERI 23 PEUSANGAN', '061208  ', '5', '1', 'Jalan Cot Keumude', 'Cot Keumudee', '0', '0', '5.142', '96.6852'),
('072AA5DF-52DA-4DC0-B907-58F77377C3B2', '60703335', 'MIN 29 BIREUEN', '061201  ', '9', '1', 'JLN. SIMPANG MATANG KECAMATAN SAMALANGA KABPATEN BIREUEN TELP. (0644) 531769 KO', '-', '', '', '5.188615', '96.364504'),
('074432EC-1A7B-4184-9296-053E747080BE', '60703314', 'MIN 15 BIREUEN', '061204  ', '9', '1', 'JALAN REL KERETA API', '-', '', '', '5.193891', '96.59026'),
('0E666598-ADA0-4162-B534-560CE3ECF3EB', '60703333', 'MIN 23 BIREUEN', '061201  ', '9', '1', 'DESA LHOKSEUMIRA', '-', '', '', '5.193396', '96.353941'),
('0EA04F3B-E52F-4938-8798-E8304D8A0C19', '60703318', 'MIN 51 BIREUEN', '061208  ', '9', '1', 'JLN. MEDAN- BANDA ACEH  DESA. COT BADA BARAT  KEC. PEUSANGAN  KAB. BIREUEN', '-', '', '', '5.209941', '96.739564'),
('1000B290-2EF5-E011-BDB7-D1AE6336CCA0', '10106903', 'SD NEGERI 3 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Desa Ulee Jalan', 'Ulee Jalan', '0', '0', '5.0273', '96.674'),
('1005A890-2EF5-E011-9847-71C764E5E2C2', '10106806', 'SD NEGERI 11 JEUNIEB', '061203  ', '5', '1', 'Jln Irigasi Krueng Nalan', 'Sampoi Ajad', '0', '0', '5.1504', '96.4857'),
('1007B190-2EF5-E011-9451-29414445487C', '10106865', 'SD NEGERI 2 KUALA', '061214  ', '5', '1', 'Jl Kuala Raja', 'UJONG BLANG', '0', '0', '4.9935', '96.6043'),
('1010AD90-2EF5-E011-A37A-199C1FC16C5C', '10106895', 'SD NEGERI 3 JULI', '061205  ', '5', '1', 'JALAN BIREUEN-TAKENGON KM 8', 'Pante Baro', '0', '0', '5.1332', '96.7183'),
('101DAA90-2EF5-E011-9F70-3B88DB82441A', '10106953', 'SD NEGERI 6 PEUSANGAN', '061208  ', '5', '1', 'Jalan Cot Ie Jue - Jangka', 'MATAMAMPLAM', '0', '0', '5.2212', '96.765'),
('1025B190-2EF5-E011-AE25-2B7E28A29143', '10106913', 'SD NEGERI 4 KUALA', '061214  ', '5', '1', 'jalan Geulanggang-lancok', 'Cot Kuta', '0', '0', '4.9797', '96.6193'),
('1026B090-2EF5-E011-BB6C-FD088F2C53A2', '10106958', 'SD NEGERI 7 BIREUEN', '061213  ', '5', '1', 'Geulanggang Kulam Jeumpa', 'Geulanggang Kulam', '0', '0', '5.2125', '96.716'),
('1045AA90-2EF5-E011-9D35-CB623B7BA2FF', '10106997', 'SD NEGERI 9 PEUSANGAN', '061208  ', '5', '1', 'Jl Jangka 1', 'MATANG GLP DUA MNS TIMU', '0', '0', '5.1981', '96.7888'),
('104DAC90-2EF5-E011-ABD2-A775C52C94B8', '10106942', 'SD NEGERI 6 GANDAPURA', '061210  ', '5', '1', 'Desa Keude Lapang', 'KEUDE LAPANG', '0', '0', '5.2278', '96.8752'),
('1055A990-2EF5-E011-BF2D-1FB19E9DF08B', '10106862', 'SD NEGERI 2 JEUMPA', '061206  ', '5', '1', 'Jalan Banda Aceh - Medan', 'Blang Bladeh', '0', '0', '5.2073', '96.6587'),
('1074B290-2EF5-E011-A8F4-C7747C9FCE28', '10106769', 'SD NEGERI 1 KUTA BLANG', '061217  ', '5', '1', 'Jl.pjka', 'BABAH JURONG', '0', '0', '5.2128', '96.8167'),
('10B22660-9BFA-E111-A530-65F85491DB9D', '69787411', 'SD NEGERI 18 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Desa Ie Rhob Babah Lueng', ' Ie Rhob Babah Lueng', '1', '0', '5.1526', '96.3825'),
('10CFAC90-2EF5-E011-8FFE-33C33542C83F', '10106916', 'SD NEGERI 4 PANDRAH', '061202  ', '5', '1', 'Jln. Irigasi Pandrah', 'Panton Bili', '0', '0', '5.151063', '96.458886'),
('10D0AB90-2EF5-E011-8D42-299FB324C3F1', '10106797', 'SD NEGERI 10 MAKMUR', '061209  ', '5', '1', 'Ulee Gle', 'Ulee Gle', '0', '0', '5.1641', '96.8705'),
('10F6AC90-2EF5-E011-8ADD-5B317B02D72B', '10106767', 'SD NEGERI 1 JULI', '061205  ', '5', '1', 'Jalan Gayo KM 3,6', 'Juli Keudee Dua', '0', '0', '5.1727', '96.7047'),
('114D569C-6D98-4ABE-8E5E-E8763299CE53', '60703294', 'MIS ABEUK JALOH', '061207  ', '9', '2', 'DESA PULO BLANG', '-', '', '', '5.223999', '96.776357'),
('13BD7891-1646-4981-86B2-7DEB548C1EEB', '60703309', 'MIN 3 BIREUEN', '061217  ', '9', '1', 'DESA TINGKEUM MANYANG', '-', '', '', '5.213026', '96.835816'),
('178E22E1-B80F-429B-A938-13F6A345D8D6', '60703330', 'MIN 39 BIREUEN', '061216  ', '9', '1', 'DESA AWE GEUTAH', '-', '', '', '5.195002', '96.808972'),
('17B43FA9-6FA7-4410-ACAF-AB9A563E9982', '60703325', 'MIN 36 BIREUEN', '061215  ', '9', '1', 'DESA UTEUEN GATHOM', '-', '', '', '5.152613', '96.777569'),
('197E9786-7E9A-486B-A017-713243FAF8C4', '60703289', 'MIN 54 BIREUEN', '061207  ', '9', '1', 'JLN. COT IJU JANGKA DESA TANOH ANOE', '-', '', '', '5.247301', '96.769423'),
('1CF6BB1C-7704-4801-84D6-9356F7F669C3', '60703341', 'MIN 41 BIREUEN', '061211  ', '9', '1', 'JLN.BLANG KUTA RHEUM BARAT', '-', '', '', '5.200346', '96.386667'),
('1D327AA4-7AA5-45DE-BBF1-F2AC7C6C4E34', '60703285', 'MIN 7 Bireuen', '061210  ', '9', '1', 'JL. GLEE KUPRAI DESA COT TEUBEE KEC. GANDAPURA', 'Cot Teubee', '', '', '5.214482', '96.901557'),
('1EBC4A16-1DBB-40F1-8942-F7F1BC8C2598', '60703322', 'MIN 1 BIREUEN', '061208  ', '9', '1', 'Jalan Almuslim Desa Neuheun', 'Neuheuen', '', '', '5.1932', '96.7877'),
('2000F1E0-9AFA-E111-822D-BB51E1E5CA49', '10106854', 'SD NEGERI 18 PEUDADA', '061204  ', '5', '1', 'Blang Matang', 'Blang matang', '0', '0', '5.1929', '96.6041'),
('2003AD90-2EF5-E011-B0CF-051D3039F413', '10106864', 'SD NEGERI 2 JULI', '061205  ', '5', '1', 'Jl. Gayo. Km. 18', 'Krueng Simpo', '0', '0', '5.1468', '96.7364'),
('201CAF90-2EF5-E011-B6C0-DD83FC861120', '10107002', 'SD NEGERI 9 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln. Meunasah', 'BLANG TEUMULEK', '0', '0', '5.1785', '96.3713'),
('202EA990-2EF5-E011-A92B-E707BE73F498', '10106844', 'SD NEGERI 16 PEUDADA', '061204  ', '5', '1', 'Jl. Pintoe Batee', 'Cot Kruet', '0', '0', '5.1461', '96.5707'),
('2030A790-2EF5-E011-96F9-9358C766F3DB', '10106986', 'SD NEGERI 8 SAMALANGA', '061201  ', '5', '1', 'Jl Tgk Chik Di Angkieng', 'TANJONG BARO', '0', '0', '5.2174', '96.3538'),
('203AB290-2EF5-E011-87A4-DD4A7433BC91', '10106970', 'SD NEGERI 7 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Darul Aman', 'DARUL AMAN', '0', '0', '5.1268', '96.7609'),
('203BA990-2EF5-E011-B555-9960C42E69A1', '10106849', 'SD NEGERI 17 PEUDADA', '061204  ', '5', '1', 'JL. Iku Alue - Pinto Rimba', 'Jaba', '0', '0', '5.1849', '96.5954'),
('2048A990-2EF5-E011-B14B-B5FD7B97AB11', '10106765', 'SD NEGERI 1 JEUMPA', '061206  ', '5', '1', 'Lipah Rayeuk', 'Lipah Rayeuk', '0', '0', '5.1974', '96.629'),
('2052AA90-2EF5-E011-9135-112A9AA05CC7', '10106799', 'SD NEGERI 10 PEUSANGAN', '061208  ', '5', '1', 'Jalan Cot Ijue - Tanoh Mirah', 'TANOH MIRAH', '0', '0', '5.1902', '96.7516'),
('2057B290-2EF5-E011-9473-01897B0DCEAD', '10106998', 'SD NEGERI 9 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Pulo Panyang', 'Pulo Panyang', '0', '0', '5.0271', '96.6598'),
('206EB190-2EF5-E011-833D-BD1AC0480EFB', '10106776', 'SD NEGERI 1 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'JLN Tgk Awegeutah km 6 ', 'Lueng Daneun', '0', '0', '5.1944', '96.6577'),
('2083AF90-2EF5-E011-BB66-31BDF57B8AD6', '10106846', 'SD NEGERI 16 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Blang Kuta Dua Meunasah', 'Blang Kuta Dua Meunasah', '0', '0', '5.2053', '96.4075'),
('2090A890-2EF5-E011-BF5B-119805419265', '10106917', 'SD NEGERI 4 PEUDADA', '061204  ', '5', '1', 'Jln Banda Aceh Medan', 'Sawang', '0', '0', '5.2001', '96.5598'),
('209CA790-2EF5-E011-A704-6DF50FCC5C15', '10106894', 'SD NEGERI 3 JEUNIEB', '061203  ', '5', '1', 'Jl. Irigasi Krueng Nalan', 'Desa Lhok Kulam', '0', '0', '5.1614', '96.4767'),
('209DB090-2EF5-E011-AB0E-CDAE4CB90AD4', '10106842', 'SD NEGERI 16 BIREUEN', '061213  ', '5', '1', 'Desa Geulanggang Teungoh', 'GEULANGGANG TEUNGOH', '0', '0', '5.2203', '96.7177'),
('20A0AD90-2EF5-E011-B63F-A1C46B0B59E8', '10106832', 'SD NEGERI 14 JULI', '061205  ', '5', '1', 'Jalan Utama Simpang Jaya', 'Teupin Manee', '0', '0', '5.1911', '96.7176'),
('20D7AA90-2EF5-E011-BAFC-93EA2B624C85', '10106877', 'SD NEGERI 20 PEUSANGAN', '061208  ', '5', '1', 'Desa Cot Rabo Baroh', 'Cot Rabo Baroh', '0', '0', '5.1688', '96.7027'),
('20EBA890-2EF5-E011-94C8-59E8195DC020', '10106810', 'SD NEGERI 11 PEUDADA', '061204  ', '5', '1', 'Jln.Proyek, Dusun Blang Pante', 'Ara Bungong', '0', '0', '5.188', '96.5793'),
('20F7AB90-2EF5-E011-BA89-FBF1DF836600', '10107810', 'SD NEGERI 13 MAKMUR', '061209  ', '5', '1', 'Jalan Tanjong Mulia,Desa Aralipeh,Kecamatan Makmur', 'Ara Lipeh', '0', '0', '5.1487', '96.7559'),
('20F8A890-2EF5-E011-9447-D54D848BEB19', '10106819', 'SD NEGERI 12 PEUDADA', '061204  ', '5', '1', 'Jalan Irigasi', 'MEUNASAH KRUENG', '0', '0', '5.1836', '96.5861'),
('213BE3CC-7736-4352-9BC2-1C3BE3C7D988', '60703292', 'MIN 47 BIREUEN', '061207  ', '9', '1', 'JLN. KRUENG PANJOE-PUNJOT KEC. JANGKA KAB.BIREUEN', '-', '', '', '5.256548', '96.822037'),
('21F5401F-F00D-4B06-B42D-4E6109527916', '60703304', 'MIN 49 BIREUEN', '061204  ', '9', '1', 'JLN: TGK.DI BEURAWANG  DESA COT TRIENG', '-', '', '', '5.217692', '96.694086'),
('2283AB90-0543-4B36-895C-29846CC7F0A6', '60703308', 'MIN 43 BIREUEN', '061217  ', '9', '1', 'DESA COT ARA', '-', '', '', '5.247266', '96.837079'),
('268A1011-F1FE-4AEB-B6E4-B942EB844970', '60703332', 'MIN 22 BIREUEN', '061201  ', '9', '1', 'JL. TANJONGAN DESA PUUK', 'Meunasah Puuk', '', '', '5.21', '96.343'),
('27670991-880A-43A5-B81B-1EB8E68A98DF', '69991926', 'SD IT KHAIRUL UMMAH', '061210  ', '5', '2', 'Jl. Banda Aceh Medan', 'Lapang Timur', '', '', '5.2056771', '96.9132925'),
('27AB3D4D-F494-40D3-BCFF-9B1B3F31E25A', '60703328', 'MIN 10 BIREUEN', '061216  ', '9', '1', 'JLN. TGK. CHIEK AWE GEUTAH KM.06', '-', '', '', '5.162', '96.8139'),
('28F081BB-2EC1-4FDF-8740-5E4FC243ED3E', '60703306', 'MIN 9 BIREUEN', '061217  ', '9', '1', 'JLN. PULO SIRON NO. 3 DAYAH MESJID KEC. KUTA BLANG', '-', '', '', '5.230409', '96.830512'),
('300AB090-2EF5-E011-A534-E98DA2CC6CB7', '10106924', 'SD NEGERI 5 BIREUEN', '061213  ', '5', '1', 'Jalan Tgk Malem Diwa', 'Kota Bireun', '0', '0', '5.2022', '96.8836'),
('300BAB90-2EF5-E011-B236-E3C17390F641', '10106883', 'SD NEGERI 24 PEUSANGAN', '061208  ', '5', '1', 'Desa Meunasah Meucap', 'Meunasah Meucap', '0', '0', '5.1981', '96.7849'),
('3021A990-2EF5-E011-BC1C-DB8AB349A648', '10106839', 'SD NEGERI 15 PEUDADA', '061204  ', '5', '1', 'Jln. Pinto Rimba', 'Pinto Rimba', '0', '0', '5.1318', '96.573'),
('309FB290-2EF5-E011-BE3A-C181399A529D', '10106914', 'SD NEGERI 4 KUTA BLANG', '061217  ', '5', '1', 'JALAN PDG ', 'Geulanggang Meunje', '0', '0', '5.2231', '96.8274'),
('30D3A690-2EF5-E011-B19E-4FEE23CF4932', '10106778', 'SD NEGERI 1 SAMALANGA', '061201  ', '5', '1', 'Jalan Harapan No. 1', 'KEUDE ACEH', '0', '0', '5.2057', '96.426'),
('3FADD8BA-5875-4861-990A-D3A164A5FA33', '60703310', 'MIN 40 BIREUEN', '061209  ', '9', '1', 'JLN. SIMPANG  LEUBU ULEE GLE KM.7', '-', '', '', '5.1619307', '96.8692097'),
('4004AC90-2EF5-E011-B1E5-C3D017D28636', '10106763', 'SD NEGERI 1 GANDAPURA', '061210  ', '5', '1', 'Jln. Kereta Api No.4', 'Keude Lapang', '0', '0', '5.2365', '96.8666'),
('4013AC90-2EF5-E011-AC8B-9DE5B893D601', '10106860', 'SD NEGERI 2 GANDAPURA', '061210  ', '5', '1', 'Samuti Makmur', 'Samuti Makmur', '0', '0', '5.2374', '96.8617'),
('4014A990-2EF5-E011-8C3E-6977C1C9896E', '10106833', 'SD NEGERI 14 PEUDADA', '061204  ', '5', '1', 'Alue Siujek', 'Meunasah Tambo', '0', '0', '5.1642', '96.5787'),
('4030AC90-2EF5-E011-B83D-F5A4DAA9AE75', '10106908', 'SD NEGERI 4 GANDAPURA', '061210  ', '5', '1', 'Jalan PDG', 'Samuti Krueng', '0', '0', '5.2344', '96.8749'),
('4042B190-2EF5-E011-87DD-EDF663622151', '10106947', 'SD NEGERI 6 KUALA', '061214  ', '5', '1', 'Krueng Juli Timu', 'Krueng Juli Timur', '0', '0', '5.2246', '96.6994'),
('4060A890-2EF5-E011-8E81-7F015C1FC50B', '10106772', 'SD NEGERI 1 PEUDADA', '061204  ', '5', '1', 'Jl. Medan - B.Aceh. Desa Mns. Baroh', 'Meunasah Baroh', '0', '0', '5.1967', '96.5887'),
('4065A790-2EF5-E011-B351-39CFA2C75441', '10106821', 'SD NEGERI 12 SAMALANGA', '061201  ', '5', '1', 'Jln Pocut Di Tanjong', 'Namploh Krueng', '0', '0', '5.1555', '96.4147'),
('4072AE90-2EF5-E011-905E-C7F09291B4E4', '10106792', 'SD NEGERI 10 JANGKA', '061207  ', '5', '1', 'Bugak Krueng Mate', 'Bugak Krueng Mate', '0', '0', '5.2442', '96.8176'),
('407FAE90-2EF5-E011-BE54-114590D6276D', '10106804', 'SD NEGERI 11 JANGKA', '061207  ', '5', '1', 'Jl Bugak Desa Jangka Alue U', 'Jangka Alue U', '0', '0', '5.2493', '96.7931'),
('4082B290-2EF5-E011-A5AB-3569EEEF5C97', '10106866', 'SD NEGERI 2 KUTA BLANG', '061217  ', '5', '1', 'Lhok Nga', 'Lhok Nga', '0', '0', '5.2089', '96.8221'),
('408CAE90-2EF5-E011-AECC-2BBCDD19BD9B', '10106815', 'SD NEGERI 12 JANGKA', '061207  ', '5', '1', 'Desa Kambuek', 'KAMBUEK', '0', '0', '5.2374', '96.7998'),
('4099B190-2EF5-E011-B0FA-3B2BC85AF8AE', '10106921', 'SD NEGERI 4 PEUSANGAN SIBLAH KRUENG', '\'061216  ', '5', '1', 'Pante Karya', 'PANTE KARYA', '0', '0', '5.0893', '96.8005'),
('40A6AE90-2EF5-E011-BFBD-AF5956D0080C', '10106779', 'SD NEGERI 1 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jl Blang Kuta', 'Meunasah Mamplam', '0', '0', '5.1818', '96.3639'),
('40A9A790-2EF5-E011-A0DE-03C373770BBC', '10106911', 'SD NEGERI 4 JEUNIEB', '061203  ', '5', '1', 'Jl. Lueng Kapitan', 'Lhueng Tengoh', '0', '0', '5.1786', '96.5036'),
('40ADAF90-2EF5-E011-B097-A9FDEFF7C8D1', '10106901', 'SD NEGERI 3 PEULIMBANG', '061212  ', '5', '1', 'Padang Kasab', 'Padang Kasab', '0', '0', '5.1941', '96.5424'),
('40BAAF90-2EF5-E011-B68A-736022768C04', '10106918', 'SD NEGERI 4 PEULIMBANG', '061212  ', '5', '1', 'Jalan Paloh Pupu', 'PALOH PUPU', '0', '0', '5.1623', '96.5413'),
('40D5AF90-2EF5-E011-B063-E92B1F7FAB57', '10106762', 'SD NEGERI 1 BIREUEN', '061213  ', '5', '1', 'Jalan Laksamana Malahayati', 'Kota Bireun', '0', '0', '5.2112', '96.8831'),
('40EEA690-2EF5-E011-9779-ADA83149EEE0', '10106905', 'SD NEGERI 3 SAMALANGA', '061201  ', '5', '1', 'Jalan Matang', 'NAMPLOH BARO', '0', '0', '5.1958', '96.4304'),
('40F1B190-2EF5-E011-80AC-3B6ACFA3D11A', '10106455', 'SD NEGERI 2 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Uteuen Gathom', 'Uteun Ghatom', '0', '0', '5.1508', '96.7772'),
('4A4AE23F-6317-4105-AE3E-F628024C3EE0', '60703290', 'MIN 2 BIREUEN ', '061207  ', '9', '1', 'JL. JANGKA KM. 4,5 DESA LAMKUTA KEC. JANGKA KAB. BIREUEN', '-', '', '', '5.202734', '96.789508'),
('4ACFFD18-8509-4906-9C63-3B1F8AB774A3', '60703291', 'MIN 55 BIREUEN', '061207  ', '9', '1', 'JLN. BUGAK JANGKA DESA BUGAK KRUENG', 'Bugak Krueng', '', '', '5.2472', '96.8096'),
('5023AE90-2EF5-E011-AC4E-410AC2CF1100', '10106909', 'SD NEGERI 4 JANGKA', '061207  ', '5', '1', 'Ruseb Dayah', 'RUSEB DAYAH', '0', '0', '5.2279', '96.8086'),
('505B3AA6-9AFA-E111-AB93-13202A885F29', '10106952', 'SD NEGERI 6 PEULIMBANG', '061212  ', '5', '1', 'JALAN TGK DI LHOK', 'RAMBONG PAYONG', '0', '0', '5.1853', '96.529'),
('505FAA90-2EF5-E011-89AC-21C18AE41BCE', '10106811', 'SD NEGERI 11 PEUSANGAN', '061208  ', '5', '1', 'Pante Pisang', 'PANTE PISANG', '0', '0', '5.1247', '96.7017'),
('507EA990-2EF5-E011-A80C-11D3638A0BE7', '10106927', 'SD NEGERI 5 JEUMPA', '061206  ', '5', '1', 'Abeuk Usong', 'ABEUK USONG', '0', '0', '5.1763', '96.6219'),
('50C5B190-2EF5-E011-B9E3-630C554D06EC', '10106971', 'SD NEGERI 7 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Jln. Tgk. Chiek Krueng Meuh', 'Buket Sudan', '0', '0', '5.1119', '96.7934'),
('50CDA990-2EF5-E011-AA55-859DED25DE19', '10106805', 'SD NEGERI 11 JEUMPA', '061206  ', '5', '1', 'Abeuk Tingkeum', 'ABEUK TINGKEUM', '0', '0', '5.1649', '96.6261'),
('50DEA890-2EF5-E011-9C59-3B248A81B56C', '10106798', 'SD NEGERI 10 PEUDADA', '061204  ', '5', '1', 'Jln.PDG Desa Matang Reuleut', 'Desa Matang Reuleut', '0', '0', '5.2023', '96.6021'),
('50E7A990-2EF5-E011-AF0F-FBDA24B30C80', '10106871', 'SD NEGERI 2 PEUSANGAN', '061208  ', '5', '1', 'Jln Kereta Api Cot Bada Barat', 'Cot Bada Barat', '0', '0', '5.2105', '96.7403'),
('50EAAB90-2EF5-E011-9417-C96F0E737548', '10106818', 'SD NEGERI 12 MAKMUR', '061209  ', '5', '1', 'Jl. Bintah Sa', 'Sukarame', '0', '0', '5.1192', '96.8393'),
('50F0AE90-2EF5-E011-AD24-35344FBF41F6', '10106957', 'SD NEGERI 6 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jalan Rheum', 'Rheum Timur', '0', '0', '5.2001', '96.3955'),
('5191747F-E3C6-481F-A939-42535E415589', '69947671', 'SD NEGERI 20 PEUDADA', '061204  ', '5', '1', 'Jl. Pinto Batee', 'Cot Kruet', '', '', '5.184725', '96.876473'),
('51DF011B-5EAD-4A6A-BC6A-7FBA4E9658E0', '60703336', 'MIN 30 BIREUEN', '061201  ', '9', '1', 'JLN.BANDA ACEH MEDAN DESA BATEE ILIEK', '-', '', '', '5.252512', '96.855666'),
('56784BBF-41E2-4B75-AB3F-2169E10F8D37', '60703296', 'MIN 44 BIREUEN', '061205  ', '9', '1', 'DESA BLANG RHEUM', '-', '', '', '5.19477', '96.693898'),
('5682B425-5837-454E-879F-494C79586EDC', '60703317', 'MIN 34 BIREUEN', '061204  ', '9', '1', 'JLN .REL KERETA API NO. 7', '-', '', '', '5.188997', '96.635018'),
('569180F7-2397-49B4-8E27-C65B0887E82A', '60703300', 'MIN 27 BIREUEN', '061203  ', '9', '1', 'JL. GEDUNG SERBA GUNA NO. 4', 'KEUDEU JEUNIEB', '', '', '5.1905', '96.4962'),
('5E32BC55-EEED-4DF5-9322-E2F48529AD48', '69859651', 'SDIT MUHAMMADIYAH', '061213  ', '5', '2', 'Jln Putroe Bungsu ', 'Geulanggang Teungoh', '0', '0', '5.13632', '96.47697'),
('6005B390-2EF5-E011-931F-7BCC83231651', '10106808', 'SD NEGERI 11 KUTA BLANG', '061217  ', '5', '1', 'JLN PDG DESA KERUMBOK', 'KEURUMBOK', '0', '0', '5.2376', '96.8335'),
('6007A990-2EF5-E011-AC14-4FD66564E73C', '10106827', 'SD NEGERI 13 PEUDADA', '061204  ', '5', '1', 'Jln.Tumbok ', 'Meunasah Blang', '0', '0', '5.203', '96.6119'),
('6025AB90-2EF5-E011-9CC1-9B0894C8B66A', '10106885', 'SD NEGERI 26 PEUSANGAN', '061208  ', '5', '1', 'Jln Desa Kapa Dusun Meunasah', 'KAPA', '0', '0', '5.1735', '96.7052'),
('602AAA90-2EF5-E011-A34C-9F899649B702', '10106969', 'SD NEGERI 7 PEUSANGAN', '061208  ', '5', '1', 'Jalan Jangka', 'Pante Piyeu', '0', '0', '5.2083', '96.7951'),
('6033B190-2EF5-E011-8607-8DA82D638B57', '10106930', 'SD NEGERI 5 KUALA', '061214  ', '5', '1', 'Jln. Kuala Raja', 'Ujong Blang Mesjid', '0', '0', '5.2405', '96.7119'),
('605AAB90-2EF5-E011-8CC6-339B9035E5D5', '10106770', 'SD NEGERI 1 MAKMUR', '061209  ', '5', '1', 'Kuta Barat', 'KUTA BARAT', '0', '0', '5.2024', '96.7516'),
('6065AF90-2EF5-E011-BB83-DDDAA6AC9513', '10106835', 'SD NEGERI 14 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln Tgk Dibunda', 'Rheum Barouh', '0', '0', '5.2071', '96.3976'),
('6067AB90-2EF5-E011-8BDD-114E70A9A0E9', '10106867', 'SD NEGERI 2 MAKMUR', '061209  ', '5', '1', 'Jalan sp Leubu  Ulee Gle Desa Batee Dabai ', 'Batee Dabai', '0', '0', '5.2292', '96.7514'),
('6074AF90-2EF5-E011-847A-BD64A0A0C7FE', '10106841', 'SD NEGERI 15 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Alue Leuhob', 'ALUE LEUHOB', '0', '0', '5.1877', '96.3533'),
('6081A790-2EF5-E011-A471-E968DC53C9C6', '10106766', 'SD NEGERI 1 JEUNIEB', '061203  ', '5', '1', 'Jln. Mesjid Lama Jeunieb', 'Janggot Seungko', '0', '0', '5.1884', '96.4918'),
('6094AA90-2EF5-E011-A772-2182A0A54FA2', '10106840', 'SD NEGERI 15 PEUSANGAN', '061208  ', '5', '1', 'Uteun Bunta', 'DESA UTEUEN BUNTA', '0', '0', '5.2018', '96.7567'),
('60A1AA90-2EF5-E011-9564-AFEC444A99CD', '10106845', 'SD NEGERI 16 PEUSANGAN', '061208  ', '5', '1', 'Jln. Tgk. Di Hagu Desa Meunasah Dayah', 'Matang Glp Dua Meunasah Dayah', '0', '0', '5.2034', '96.7867'),
('60AAB090-2EF5-E011-86F9-9BCD21F4C94A', '10106847', 'SD NEGERI 18 BIREUEN', '061213  ', '5', '1', 'Jl. Pendidikan Bireuen Meunasah Blang', 'Bireun Meunasah Blang', '0', '0', '5.202', '96.6912'),
('60B7B090-2EF5-E011-9C86-D9FDA3DD5369', '10106856', 'SD NEGERI 19 BIREUEN', '061213  ', '5', '1', 'Cot Peutek', 'Cot Peutek', '0', '0', '5.2168', '96.8721'),
('60BAAD90-2EF5-E011-B6C0-D75677C9CCF2', '10106843', 'SD NEGERI 16 JULI', '061205  ', '5', '1', 'Juli Km 10', 'Bunyot', '0', '0', '5.1863', '96.7308'),
('60BCB290-2EF5-E011-A045-FD0804EBE585', '10106948', 'SD NEGERI 6 KUTA BLANG', '061217  ', '5', '1', 'Lorong Pelajar', 'Tingkeum Manyang', '0', '0', '5.2138', '96.8369'),
('60C4A890-2EF5-E011-9774-135BAFDA8D35', '10106982', 'SD NEGERI 8 PEUDADA', '061204  ', '5', '1', 'Desa Paya Peudada', 'Gampong Paya', '0', '0', '5.2', '96.6281'),
('60C4B090-2EF5-E011-AE95-07E124D3F09C', '10106876', 'SD NEGERI 20 BIREUEN', '061213  ', '5', '1', 'Jln. Pendidikan no.17 Geudong Alue', 'Geudong Alue', '0', '0', '5.2108', '96.8894'),
('60C7AD90-2EF5-E011-B857-A522B919F258', '10106848', 'SD NEGERI 17 JULI', '061205  ', '5', '1', 'Juli Paya Ru', 'JULI PAYA RU', '0', '0', '5.1859', '96.7149'),
('60DEB090-2EF5-E011-B830-1B9B56918EA0', '10106880', 'SD NEGERI 22 BIREUEN', '061213  ', '5', '1', 'Lhok Awe Teungoh', 'LHOK AWE TEUNGOH', '0', '0', '5.2112', '96.7003'),
('611EA901-4796-46FC-8F45-5A93A2D57401', '60703313', 'MIN 46 BIREUEN', '061202  ', '9', '1', 'JLN KUBU RAYA', '-', '', '', '5.1725', '96.4616'),
('62B53801-3960-4EC7-BADC-7AD9340AA032', '60703329', 'MIN 38 BIREUN', '061216  ', '9', '1', 'DESA ALUE KRUEB', '-', '', '', '5.161856', '96.811667'),
('633E3D3A-34FD-4E76-9F02-11B1BF5CC8A1', '60703315', 'MIN 16 BIREUEN', '061204  ', '9', '1', 'JLN.BANDA ACEH - MEDAN', '-', '', '', '5.198608', '96.575841'),
('6F21AB0D-C616-4754-9F9C-09CFF18E1393', '60703316', 'MIN 17 BIREUEN', '061204  ', '9', '1', 'JLN.BANDA ACEH - MEDAN', '-', '', '', '5.195374', '96.612011'),
('7030AE90-2EF5-E011-B742-C5AD308D7F0D', '10106926', 'SD NEGERI 5 JANGKA', '061207  ', '5', '1', 'Jln. Bugak Ulee Ceue', 'Ulee Ceue', '0', '0', '5.2556', '96.8339'),
('7033B090-2EF5-E011-8ED3-8D85EC0558BA', '10106974', 'SD NEGERI 8 BIREUEN', '061213  ', '5', '1', 'Jalan Pendidikan', 'BIREUEN MEUNASAH DAYAH', '0', '0', '5.1968', '96.8765'),
('704DB090-2EF5-E011-98BD-250548C02CC8', '10106790', 'SD NEGERI 10 BIREUEN', '061213  ', '5', '1', 'Geulanggang Gampong', 'Geulanggang Gampong', '0', '0', '5.189679', '96.724559'),
('7099AE90-2EF5-E011-B189-19CC6EA5FEFB', '10106824', 'SD NEGERI 13 JANGKA', '061207  ', '5', '1', 'Jangka Alue Bie', 'Jangka Alue Bie', '0', '0', '5.2468', '96.7793'),
('70B5AB90-2EF5-E011-BC12-03C0E224CE63', '10106981', 'SD NEGERI 8 MAKMUR', '061209  ', '5', '1', 'Jln. Bintahsa ', 'Panton Mesjid', '0', '0', '5.1665', '96.7512'),
('70D1A890-2EF5-E011-962C-7D8CA75068BD', '10106996', 'SD NEGERI 9 PEUDADA', '061204  ', '5', '1', 'Jl. Pinto Rimba', 'Blang Rangkuluh', '0', '0', '5.1712', '96.6095'),
('70DAA990-2EF5-E011-BA84-79E409DA4698', '10106774', 'SD NEGERI 1 PEUSANGAN', '061208  ', '5', '1', 'Desa Gampong Raya Dagang', 'Gampong Raya Dagang', '0', '0', '5.1113', '96.7069'),
('7313347F-1E32-48E3-8CEB-5449B6F24FEE', '60703288', 'MIN 25 BIREUEN', '061207  ', '9', '1', 'JALAN LAPANGAN BOLA NO. 2 DESA JANGKA ALUE', '-', '', '', '5.255193', '96.786954'),
('7716F766-0139-49CD-A5DC-4A8CEEF10F0E', '60703302', 'MIN 12 BIREUEN', '061213  ', '9', '1', 'JLN. TGK. DI PULO KITON', '-', '', '', '5.207629', '96.70257'),
('7A9B7FDD-1926-4142-9B2A-158CFB22130C', '60703307', 'MIN 19 BIREUEN', '061217  ', '9', '1', 'JLN. DESA BABAH JURONG', '-', '', '', '5.210964', '96.814461'),
('7CB0ABA2-D681-4764-B0C7-11539A6ED346', '60703295', 'MIN 21 BIREUEN', '061205  ', '9', '1', 'JLN. MEDAN-BANDA ACEH DESA TEUPOK TUNONG KEC. JEUMPA KAB. BIREUEN', '-', '', '', '5.203467', '96.647793'),
('7E81E629-259E-446D-9CEC-17EFC48341A0', '60703320', 'MIN 26 BIREUEN', '061208  ', '9', '1', 'JLN. PESANTREN DARUL ULUM KM.2 TANOH MIRAH KEC.PEUSANGAN KAB.BIREUEN', '-', '', '', '5.188838', '96.752002'),
('800EB290-2EF5-E011-9B6E-6797085290E4', '10106920', 'SD NEGERI 4 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Darussalam', 'DARUSSALAM', '0', '0', '4.991', '96.6807'),
('80198F5B-9AFA-E111-AA1F-77C5CA656E55', '10106956', 'SD NEGERI 6 SAMALANGA', '061201  ', '5', '1', 'Mesjid Raya', 'Geulumpang Bungkok', '0', '0', '5.1946', '96.3466'),
('801FA890-2EF5-E011-9DC1-DFEFCA8CADBF', '10106825', 'SD NEGERI 13 JEUNIEB', '061203  ', '5', '1', 'Jeunieb', 'PAYA BILI', '0', '0', '5.1292', '96.5032'),
('8037AA90-2EF5-E011-BD96-3F1845859BC1', '10106983', 'SD NEGERI 8 PEUSANGAN', '061208  ', '5', '1', 'Jalan Banda Aceh - Medan', 'MATANG SAGOE', '0', '0', '5.1979', '96.7802'),
('8039AF90-2EF5-E011-9664-93D8CE8D2963', '10106813', 'SD NEGERI 11 SIMPANG MAMPLAM', '061211  ', '5', '1', 'JALAN UJONG RAJA', 'Peunelet Baroh', '0', '0', '5.175', '96.3476'),
('805DAC90-2EF5-E011-BD26-29FC48BC72E1', '10106959', 'SD NEGERI 7 GANDAPURA', '061210  ', '5', '1', 'Lingka Kuta', 'Lingka Kuta', '0', '0', '5.2261', '96.8541'),
('807CB190-2EF5-E011-92B5-B9439763130D', '10106873', 'SD NEGERI 2 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Pante Baro Kumbang', 'Pante Baro Kumbang ', '0', '0', '5.1999', '96.6816'),
('808AAC90-2EF5-E011-923D-F3E1672D5FB9', '10106791', 'SD NEGERI 10 GANDAPURA', '061210  ', '5', '1', 'Jalan Desa Teupin Siron Kecamatan Gandapura Kabupaten Bireuen Provinsi Aceh', 'Teupin Siron', '0', '0', '5.2341', '96.905'),
('80A0AF90-2EF5-E011-AE51-3D32092D82EA', '10106773', 'SD NEGERI 1 PEULIMBANG', '061212  ', '5', '1', 'Jalan Banda Aceh-Medan km 193.5', 'Seuneubok Plimbang', '0', '0', '5.1874', '96.5272'),
('80A8AB90-2EF5-E011-82F8-7F8A4FA37980', '10106966', 'SD NEGERI 7 MAKMUR', '061209  ', '5', '1', 'Leubu Cot', 'Leubu Cot', '0', '0', '5.2378', '96.7771'),
('80ADAD90-2EF5-E011-B045-E3BAA5DC9DAA', '10106838', 'SD NEGERI 15 JULI', '061205  ', '5', '1', 'Jalan Bireuen Takengon KM 10', 'Bunyot', '0', '0', '5.1807', '96.7269'),
('80B5AE90-2EF5-E011-B680-D711A790EAE9', '10106875', 'SD NEGERI 2 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln. Banda Aceh Medan', 'Pulo Drien', '0', '0', '5.1882', '96.4022'),
('80B6A790-2EF5-E011-ABA8-ED870D9DBCAC', '10106928', 'SD NEGERI 5 JEUNIEB', '061203  ', '5', '1', 'Spbu Jeunieb', 'Blang Mee Timu', '0', '0', '5.1858', '96.5025'),
('80C3A790-2EF5-E011-812F-2F4C6005E263', '10106945', 'SD NEGERI 6 JEUNIEB', '061203  ', '5', '1', 'Jalan paya langet', 'ulee gajah', '0', '0', '5.1562', '96.5011'),
('80CC287F-9AFA-E111-BFDA-A72BAE598E44', '10106870', 'SD NEGERI 2 PEULIMBANG', '061212  ', '5', '1', 'Jalan Mesjid Teupin Panah', 'Seuneubok Punti', '0', '0', '5.1691', '96.5293'),
('80D1B090-2EF5-E011-A5B7-05C69BAC8E15', '10106878', 'SD NEGERI 21 BIREUEN', '061213  ', '5', '1', 'Jalan Laksamana Malahayati', 'Kota Bireun', '0', '0', '5.2176', '96.7159'),
('80DD3BC4-111D-4CBA-A5FE-88B1179CD8B1', '60703319', 'MIN 52 BIREUEN', '061208  ', '9', '1', 'JL. COT IJU- TANOH ANOE', '-', '', '', '5.214236', '96.690971'),
('8ABB10C9-297B-4998-BC61-53CC2C2EF8C5', '60703323', 'MIN 53 BIREUEN', '061208  ', '9', '1', 'JALAN JANGKA KM 02', 'Kapa', '', '', '5.214683', '96.794793'),
('901FAFB2-2E2D-4D4B-B713-13733EE70B0C', '60703301', 'MIN 4 BIREUEN', '061205  ', '9', '1', 'JL. T.CHIEK DITIRO KM 3,6 JULI KEUDE DUA', '-', '', '', '5.1734', '96.7051'),
('9021AC90-2EF5-E011-B538-0DB5A3C6DF48', '10106891', 'SD NEGERI 3 GANDAPURA', '061210  ', '5', '1', 'Mon Keulayu', 'Mon Keulayu', '0', '0', '5.2501', '96.8576'),
('902BB290-2EF5-E011-A5AB-770388B03E02', '10106954', 'SD NEGERI 6 PEUSANGAN SELATAN', '061215  ', '5', '1', 'JALAN SIMPANG TANJONG', 'BLANG MANE', '0', '0', '5.09', '96.7608'),
('9032AB90-2EF5-E011-A36B-4705571B80A6', '10106886', 'SD NEGERI 27 PEUSANGAN', '061208  ', '5', '1', 'Jalan Simpang Tanjong', 'SEUNEUBOK ACEH', '0', '0', '5.1805', '96.7887'),
('903DAE90-2EF5-E011-B023-7BC378013556', '10106943', 'SD NEGERI 6 JANGKA', '061207  ', '5', '1', 'Desa Alue Buya', 'Alue Buya', '0', '0', '5.244', '96.762'),
('909DA890-2EF5-E011-B875-490CB378250C', '10106934', 'SD NEGERI 5 PEUDADA', '061204  ', '5', '1', 'Desa Paya Beunot Peudada', 'Paya Bunot', '0', '0', '5.1879', '96.6086'),
('90C2AB90-2EF5-E011-9EDC-9B4165DDC83E', '10106995', 'SD NEGERI 9 MAKMUR', '061209  ', '5', '1', 'Jln. Ulee Gle - Batee Dabai', 'Pandak', '0', '0', '5.1499', '96.87'),
('90E2AF90-2EF5-E011-BFBF-872FA4F9CC10', '10106859', 'SD NEGERI 2 BIREUEN', '061213  ', '5', '1', 'BUKET TEUKUH', 'Buket Teukueh', '0', '0', '5.2315', '96.8886'),
('9789AEF5-4A02-4FB3-84FC-A93838F989B8', '60703339', 'MIN 45 BIREUEN', '061211  ', '9', '1', 'JLN. MESJID DESA BALE', '-', '', '', '5.196668', '96.385307'),
('A015B190-2EF5-E011-8DA1-33AE0BCBF736', '10106896', 'SD NEGERI 3 KUALA', '061214  ', '5', '1', 'Jln Hajjah Ummi Salamah', 'Lhok Awe Awe', '0', '0', '4.9761', '96.5944'),
('A050B190-2EF5-E011-8A44-2D326BA6D7B6', '10106964', 'SD NEGERI 7 KUALA', '061214  ', '5', '1', 'Desa Cot Laga Sawa', 'COT LAGA SAWA', '0', '0', '5.2213', '96.7266'),
('A063A990-2EF5-E011-BB17-616E1676DC1A', '10106893', 'SD NEGERI 3 JEUMPA', '061206  ', '5', '1', 'Jln.Raja Jeumpa', 'Blang Seupeng', '0', '0', '5.1871', '96.656'),
('A07AAC90-2EF5-E011-84F5-D922C8FA0C8E', '10106989', 'SD NEGERI 9 GANDAPURA', '061210  ', '5', '1', 'Samuti Rayeuk', 'Samuti Rayeuk', '0', '0', '5.236', '96.8547'),
('A081AB90-2EF5-E011-9788-A3F18784104B', '10106915', 'SD NEGERI 4 MAKMUR', '061209  ', '5', '1', 'Desa Blang Dalam', 'Blang Dalam', '0', '0', '5.1958', '96.7548'),
('A08EAB90-2EF5-E011-948C-FD31F8072CAD', '10106932', 'SD NEGERI 5 MAKMUR', '061209  ', '5', '1', 'Cot Kruet', 'Cot Kruet', '0', '0', '5.2162', '96.7786'),
('A090B290-2EF5-E011-9758-47845D08F54A', '10106897', 'SD NEGERI 3 KUTA BLANG', '061217  ', '5', '1', 'Jln. Paloh Dama', 'Paloh Dama', '0', '0', '5.1759', '96.851'),
('A091AF90-2EF5-E011-8303-DFB784A80099', '10106851', 'SD NEGERI 17 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jalan Ujong Raja', 'Meunasah Asan', '0', '0', '5.2143', '96.4348'),
('A0B6B190-2EF5-E011-B373-CD0D3521CA56', '10106955', 'SD NEGERI 6 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Pante Baro Gle Siblah', 'Pante Baro Gle Sibla', '0', '0', '5.1777', '96.8167'),
('A0B81520-9BFA-E111-A2CB-07C2727DE43F', '10106760', 'SD SUKMA BANGSA', '061206  ', '5', '2', 'Cot Keutapang', 'Cot Keutapang', '0', '0', '5.1809', '96.6102'),
('A0D0A790-2EF5-E011-8137-C9F590256C58', '10106962', 'SD NEGERI 7 JEUNIEB', '061203  ', '5', '1', 'Desa Tanjong Bungong', 'Tanjong Bungong', '0', '0', '5.1835', '96.5117'),
('A0D4AD90-2EF5-E011-A638-714EDF20F9BB', '10106853', 'SD NEGERI 18 JULI', '061205  ', '5', '1', 'Jl Gayo Km 7', 'Blang Keutumba', '0', '0', '5.1488', '96.7177'),
('A0F0AA90-2EF5-E011-92EE-EF71A3B2DBFC', '10106881', 'SD NEGERI 22 PEUSANGAN', '061208  ', '5', '1', 'Jalan Banda Aceh - Medan', 'Gampong Baroh', '0', '0', '5.1232', '96.7112'),
('A0F4A990-2EF5-E011-B0BC-63A870F88C9B', '10106902', 'SD NEGERI 3 PERCONTOHAN PEUSANGAN', '061208  ', '5', '1', 'Jalan Banda Aceh - Medan', 'PANTE GAJAH', '0', '0', '5.1967', '96.797'),
('A0F8B090-2EF5-E011-8599-03E93740B504', '10106768', 'SD NEGERI 1 KUALA', '061214  ', '5', '1', 'Desa Lancok Lancok', 'LANCOK LANCOK', '0', '0', '5.2309', '96.7298'),
('A3C6CC09-1476-46E0-901D-512C184E5030', '69879018', 'SDIT ASSALAM ISLAMIC SCHOOL', '061203  ', '5', '2', 'Jl. Banda Aceh Medan Km. 192 ', 'Blang Mee Barat', '0', '0', '5.144875', '96.511563'),
('A68F8E9D-73E0-4858-8489-EAE47CF68343', '60703298', 'MIN 5 BIREUEN', '061203  ', '9', '1', 'JL SYUHADA 44', '-', '', '', '5.159894', '96.480235'),
('A6EE7733-1775-4CEA-8C66-A86D67DE2F99', '60703327', 'MIS TANJONG BEURIDI', '061215  ', '9', '2', 'JLN. SIMPANG TANJONG KM. 13', 'Tanjong Beuridi', '', '', '5.104965', '96.766654'),
('A7E44EA3-D643-40C5-9675-AE56D948784D', '60703324', 'MIN 42 BIREUEN', '061208  ', '9', '1', 'Jln. Pendidikan No.03 ', 'Gampong Raya Tambo', '', '', '5.195121', '96.808967'),
('AA8AF153-39E0-4B75-B130-BC0E19CD5AA1', '60703284', 'MIN 6 BIREUEN', '061210  ', '9', '1', 'SAMUTI MAKMUR', '-', '', '', '5.2378', '96.8614'),
('ADFE2E1F-FE72-4C0E-AD6C-D38686F4E5B3', '60703338', 'MIN 32 BIREUEN', '061211  ', '9', '1', 'JL. SP. MAMPLAM - BL. KUTA DESA MEUNASAH MESJID', '-', '', '', '5.19596', '96.408283'),
('AECF4B81-8E4A-4BAB-8BA4-3FA835D02164', '69953947', 'SD IT AL-FATIH', '061208  ', '5', '2', 'Jl. Pante Pisang - Pante Piyeu Km. 3', 'Pante Gajah', '1', '1', '5.196594', '96.795341'),
('B00DAF90-2EF5-E011-AB95-1F47F7F52FD9', '10106987', 'SD NEGERI 8 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Arongan', 'Arongan', '0', '0', '5.1978', '96.3777'),
('B03EAC90-2EF5-E011-8932-ED5AA2BA4BE5', '10106925', 'SD NEGERI 5 GANDAPURA', '061210  ', '5', '1', 'Blang Guron', 'Blang Guron', '0', '0', '5.2319', '96.8709'),
('B06CAA90-2EF5-E011-B6BF-EB6C4AD486D0', '10106820', 'SD NEGERI 12 PEUSANGAN', '061208  ', '5', '1', 'Gampong Putoh', 'GAMPONG PUTOH', '0', '0', '5.1629', '96.7008'),
('B08EA790-2EF5-E011-98AF-4DAEF9A37B0E', '10106863', 'SD NEGERI 2 JEUNIEB', '061203  ', '5', '1', 'Jalan Blang Poroh', 'Meunasah Lueng', '0', '0', '5.1555', '96.4842'),
('B0A7AC90-2EF5-E011-B081-0112B95F0CD1', '10106771', 'SD NEGERI 1 PANDRAH', '061202  ', '5', '1', 'Jln.Irigasi Krueng Pandrah', 'Gampong Blang', '1', '1', '5.1886', '96.476'),
('B0A7B190-2EF5-E011-80DD-450F2F2D3B60', '10106938', 'SD NEGERI 5 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Desa Teupin Raya', 'Teupin Raya', '0', '0', '5.167', '96.8001'),
('B0AAA890-2EF5-E011-BEEC-D9F4AAB04EDA', '10106951', 'SD NEGERI 6 PEUDADA', '061204  ', '5', '1', 'Jln Pinto Batee', 'DAYAH MON ARA', '0', '0', '5.165', '96.3797'),
('B0D2AE90-2EF5-E011-AACB-E7372BE22439', '10106923', 'SD NEGERI 4 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jalan Krueng Meuseugob', 'Krueng Meuseugob', '0', '0', '5.1619', '96.4136'),
('B0E1AD90-2EF5-E011-9E62-4BC72C9F004F', '10106857', 'SD NEGERI 19 JULI', '061205  ', '5', '1', 'Jl. Bireuen - Takengon Km. 33', 'Suka Tani', '0', '0', '5.137', '96.7374'),
('B0E1AE90-2EF5-E011-8BB8-3D4F46B00516', '10106940', 'SD NEGERI 5 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln Banda Aceh - Medan', 'IE RHOB GEULUMPANG', '0', '0', '5.1879', '96.3898'),
('B0E2B190-2EF5-E011-A76D-2D0C1D760ED6', '10106775', 'SD NEGERI 1 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Jalan Tanjong Beuridi', 'TANJONG BEURIDI', '0', '0', '5.0016', '96.6737'),
('B0E8AC90-2EF5-E011-B762-FB5A45CA5C4D', '10106950', 'SD NEGERI 6 PANDRAH', '061202  ', '5', '1', 'Nase Mee', 'Nase Mee', '0', '0', '5.1934', '96.4722'),
('B0F7A790-2EF5-E011-AF11-5572C883073B', '10106794', 'SD NEGERI 10 JEUNIEB', '061203  ', '5', '1', 'meunasah Dayah', 'Meunasah Dayah', '0', '0', '5.1663', '96.4858'),
('B31B6112-6D9E-4034-BAEE-6E765BA90075', '60703297', 'MIS COT KEUTAPANG', '061205  ', '9', '2', 'DESA ALUE LIMENG', '-', '', '', '5.110351', '96.650239'),
('B4E8F602-1C37-401D-82EB-D47834635C22', '69995765', 'SD ISLAM KUTTAB', '061213  ', '5', '2', 'Jl. Tgk. M. Amin', 'Bireun Meunsah Tgk Digadong', '', '', '5.1963555', '96.7196073'),
('BBCFBC99-B1FC-48BA-B823-003812E17A87', '60703303', 'MIN 50 BIREUEN', '061213  ', '9', '1', 'JLN. T. CHIEK DITIRO KM. 1,2 JULI COT MEURAK', '-', '', '', '5.192367', '96.702728'),
('BEA745B6-58D6-410D-9577-6321718B599C', '60703305', 'MIN 11 BIREUEN', '061204  ', '9', '1', 'JLN. BIREUEN LANCOK', '-', '', '', '5.222584', '96.709385'),
('C003B602-9BFA-E111-8265-4B9B3F78606A', '10110905', 'SD NEGERI 12 JEUMPA', '061206  ', '5', '1', 'Cot Meugo', 'Cot Meugoe', '0', '0', '5.1766', '96.6155'),
('C008A790-2EF5-E011-A95C-0D046294B846', '10106939', 'SD NEGERI 5 SAMALANGA', '061201  ', '5', '1', 'Jln Paloh', 'PALOH', '0', '0', '5.2271', '96.4511'),
('C015A790-2EF5-E011-A8F7-8960EC028881', '10107001', 'SD NEGERI 9 SAMALANGA', '061201  ', '5', '1', 'Jalan Banda aceh Medan', 'Mesjid Baro', '0', '0', '5.2015', '96.3999'),
('C02CA890-2EF5-E011-BB7D-5D7778780B4F', '10106831', 'SD NEGERI 14 JEUNIEB', '061203  ', '5', '1', 'Jalan Teratai', 'MEUNASAH BLANG', '0', '0', '5.1915', '96.4993'),
('C054295A-C8ED-E211-BD8F-E10BFDFB2C81', '69766969', 'SD NEGERI 19 PEUDADA', '061204  ', '5', '1', 'Jl. PT. Marjaya Dusun Blang Paya', 'Blang Beururu', '0', '0', '5.1624', '96.5828'),
('C074AB90-2EF5-E011-AB43-EBAFDF07617F', '10106898', 'SD NEGERI 3 MAKMUR', '061209  ', '5', '1', 'Lapehan', 'Lapehan Mesjid', '0', '0', '5.2332', '96.8792'),
('C078AD90-2EF5-E011-BB87-41D01581DFFF', '10106807', 'SD NEGERI 11 JULI', '061205  ', '5', '1', 'Desa Batee Raya', 'Batee Raya', '0', '0', '5.1751', '96.7312'),
('C08268ED-DA86-45C5-BCCD-9CF98ED2318D', '60703326', 'MIN 37 BIREUEN', '061215  ', '9', '1', 'DESA LUENG KULI', '-', '', '', '5.173578', '96.792244'),
('C082B090-2EF5-E011-8534-A9125AF0B8C1', '10106830', 'SD NEGERI 14 BIREUEN', '061213  ', '5', '1', 'Jln Sd Inpres Bireuen Mns Tgk  DiGadong', 'Bireun Meunsah Tgk Digadong', '0', '0', '5.1948', '96.8748'),
('C09BAB90-2EF5-E011-9B44-F5D7D943398B', '10106949', 'SD NEGERI 6 MAKMUR', '061209  ', '5', '1', 'Meureubo', 'Meureubo', '0', '0', '5.1811', '96.7505'),
('C0CAB290-2EF5-E011-B137-910D459FFC17', '10106965', 'SD NEGERI 7 KUTA BLANG', '061217  ', '5', '1', 'Cot Baroh', 'COT BAROH', '0', '0', '5.2216', '96.8435'),
('C0D3B190-2EF5-E011-89F1-4DDD92F430BE', '10106985', 'SD NEGERI 8 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Desa Paloh Mampree', 'Paloh Mampree', '0', '0', '5.1206', '96.8104'),
('C0FEAE90-2EF5-E011-8160-4956A0A9C841', '10106973', 'SD NEGERI 7 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Blang Panyang', 'Blang Panyang', '0', '0', '5.1929', '96.3915'),
('CE8211F4-5CF2-4DEB-B89F-77011B9BF7B0', '60703321', 'MIN 35 BIREUEN', '061208  ', '9', '1', 'DESA MATANG MESJID', '-', '', '', '5.200704', '96.78045'),
('D001AA90-2EF5-E011-8019-0F2B7354D052', '10106919', 'SD NEGERI 4 PEUSANGAN', '061208  ', '5', '1', 'Jln Mon Eungkot', 'KEUDE MATANG GLP DUA', '0', '0', '5.1137', '96.6933'),
('D01CB290-2EF5-E011-B858-99A04BBB9D96', '10106937', 'SD NEGERI 5 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Desa Ceubrek', 'CEUBREK', '0', '0', '5.0489', '96.6972'),
('D074B090-2EF5-E011-95E8-EDD19DFCE59F', '10106823', 'SD NEGERI 13 BIREUEN', '061213  ', '5', '1', 'Jl. Tgk.Nyak Abbas (Tubah)', 'Bireun Mns Reuleut', '0', '0', '5.209', '96.6956'),
('D079AA90-2EF5-E011-A7C3-4581AB6E91E8', '10106828', 'SD NEGERI 13 PEUSANGAN', '061208  ', '5', '1', 'Tanjong Mesjid', 'Tanjong Mesjid', '0', '0', '5.1545', '96.7025'),
('D081A890-2EF5-E011-8DAB-65CC7492A0F5', '10106900', 'SD NEGERI 3 PEUDADA', '061204  ', '5', '1', 'Jln. PJKA Desa Mns. Alue Kec. Peudada Kab. Bireuen', 'Meunasah Alue', '0', '0', '5.1783', '96.5787'),
('D0B2A990-2EF5-E011-8FBC-2F29E993839C', '10106991', 'SD NEGERI 9 JEUMPA', '061206  ', '5', '1', 'Desa Cot Iboh', 'Blang Rheum', '0', '0', '5.1811', '96.6289'),
('D0DBAC90-2EF5-E011-9EF3-134DAE7BAC61', '10106933', 'SD NEGERI 5 PANDRAH', '061202  ', '5', '1', 'Jalan.Peternakan Desa Cot Leubeng', 'Cot Leubeng', '0', '0', '5.1667', '96.4517'),
('D0E3AA90-2EF5-E011-9286-0591FEC078FA', '10106879', 'SD NEGERI 21 PEUSANGAN', '061208  ', '5', '1', 'Desa Asan Biduen', 'Asan Bideun', '0', '0', '5.1714', '96.7006'),
('D14203E5-43CC-4ED2-8AA1-74AD08C05994', '60703312', 'MIN 28 BIREUEN', '061202  ', '9', '1', 'JL. IRIGASI PANRAH KECAMATAN PANDRAH KABUPATEN BIREUEN', '-', '', '', '5.178692', '96.476236'),
('D24D30C8-8030-4F27-BD90-92AAFC0759C1', '60703293', 'MIN 48 BIREUEN', '061207  ', '9', '1', 'Jln. MESJID JAMIK BAITURRAHIM No. 3', 'Alue Kuta', '', '', '5.263268', '96.84033'),
('D2733845-030D-4EC4-971F-4C5C49A1326F', '60703331', 'MIN 14 BIREUEN', '061212  ', '9', '1', 'JL. BANDA ACEH MEDAN KM. 196,5', '-', '', '', '5.187116', '96.531822'),
('E022A790-2EF5-E011-91CF-D3FFBE0F787B', '10106972', 'SD NEGERI 7 SAMALANGA', '061201  ', '5', '1', 'Jalan Cot Mane', 'Cot Mane', '0', '0', '5.2186', '96.4368'),
('E02AAD90-2EF5-E011-AAA4-C9AAE5D34697', '10106929', 'SD NEGERI 5 JULI', '061205  ', '5', '1', 'Jln.Gayo Km 6', 'Juli Mee Teungoh', '0', '0', '5.1569', '96.7119'),
('E039A890-2EF5-E011-9696-EB4565349585', '10106837', 'SD NEGERI 15 JEUNIEB', '061203  ', '5', '1', 'JALAN IRIGASI BLANG POROH', 'Blang Poroh', '0', '0', '5.1434', '96.4867'),
('E03FAB90-2EF5-E011-B860-91F87348F49C', '10106887', 'SD NEGERI 28 PEUSANGAN', '061208', '5', '1', 'Jalan Medan Banda Aceh', 'Keude Matang Glp Dua', '0', '0', '5.1971', '96.7907'),
('E044AD90-2EF5-E011-914F-434D98C21DB1', '10106963', 'SD NEGERI 7 JULI', '061205  ', '5', '1', 'Jln Iskandar Muda', 'Juli Cot Mesjid', '0', '0', '5.1869', '96.7056'),
('E047AF90-2EF5-E011-B9E9-5349FD300BEB', '10106822', 'SD NEGERI 12 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jl. Banda Aceh-Medan ', 'Blang Tambue', '0', '0', '5.1939', '96.42'),
('E048B290-2EF5-E011-9A66-1B5C9CE14B8B', '10106984', 'SD NEGERI 8 PEUSANGAN SELATAN', '061215  ', '5', '1', 'Jln.Simpang Mesjid Uteuen Gathom- Mee Rayeuk', 'Me Rayeuk', '0', '0', '5.0479', '96.6787'),
('E04AAE90-2EF5-E011-92E9-495819AC7742', '10106960', 'SD NEGERI 7 JANGKA', '061207  ', '5', '1', 'Pante Ranub', 'Pante Ranub', '0', '0', '5.2568', '96.8041'),
('E056AF90-2EF5-E011-9328-3D8BDC77E5CD', '10106829', 'SD NEGERI 13 SIMPANG MAMPLAM', '061211  ', '5', '1', 'Jln. Buket Ceurana', 'Ie Rhob Babah Lueng', '0', '0', '5.177', '96.3917'),
('E057AE90-2EF5-E011-B035-5746F8F61868', '10106976', 'SD NEGERI 8 JANGKA', '061207  ', '5', '1', 'Pante Paku', 'PANTE PAKU', '0', '0', '5.2614', '96.8093'),
('E05AB090-2EF5-E011-AC22-9B10EFE63927', '10106802', 'SD NEGERI 11 BIREUEN', '061213  ', '5', '1', 'Jalan Mesjid', 'Geudong-geudong', '0', '0', '5.2051', '96.7083'),
('E067B090-2EF5-E011-B0EF-010D688BB2EC', '10106814', 'SD NEGERI 12 BIREUEN', '061213  ', '5', '1', 'Jalan Stadion Cot Gapu Bireuen', 'Cot Gapu', '0', '0', '5.1956', '96.8855'),
('E06BAD90-2EF5-E011-B980-8DDDE85B16CA', '10106795', 'SD NEGERI 10 JULI', '061205  ', '5', '1', 'Desa Abeuk Budi', 'Abeuk Budi', '0', '0', '5.1494', '96.7248'),
('E070A990-2EF5-E011-A159-CFBCC6A076EF', '10106910', 'SD NEGERI 4 JEUMPA', '061206  ', '5', '1', 'Desa Geulumpang Payong', 'Geulumpang Payong', '0', '0', '5.1888', '96.62'),
('E08AB190-2EF5-E011-9CCA-D11ECC01A3F3', '10106904', 'SD NEGERI 3 PEUSANGAN SIBLAH KRUENG', '061216  ', '5', '1', 'Jln. Tgk. Chiek Krueng Meuh', 'Alue Iet', '0', '0', '5.2097', '96.6916'),
('E08BA990-2EF5-E011-AAC8-E7FDC7261E7B', '10106944', 'SD NEGERI 6 JEUMPA', '061206  ', '5', '1', 'Jln. Tgk. Abdurrahman', 'Cot Tarom Tunong', '0', '0', '5.1902', '96.6307'),
('E098A990-2EF5-E011-96C9-AFFD3F4632BE', '10106961', 'SD Negeri 7 Jeumpa', '061206  ', '5', '1', 'Jln.Banda Aceh Medan Desa Teupok Tunong', 'Teupok Tunong', '0', '0', '5.1944', '96.6139'),
('E0ADB290-2EF5-E011-ABA1-B9200DD56773', '10106931', 'SD NEGERI 5 KUTABLANG', '061217  ', '5', '1', 'Jalan Paya Rang Kuluh', 'Gle Putoh', '0', '0', '5.2112', '96.8484'),
('E0AEAA90-2EF5-E011-B871-19D37D3AD759', '10106850', 'SD NEGERI 17 PEUSANGAN', '061208  ', '5', '1', 'Cot Buket', 'Cot Buket', '0', '0', '5.208', '96.7494'),
('E0C1AC90-2EF5-E011-8FAA-D79D95872D12', '10106899', 'SD NEGERI 3 PANDRAH', '061202  ', '5', '1', 'Jalan Medan-Banda Aceh, KM.185,5', 'Alue Igeueh', '1', '1', '5.187', '96.4628'),
('E0DDA790-2EF5-E011-BAB8-71F0FA57AF89', '10106978', 'SD NEGERI 8 JEUNIEB', '061203  ', '5', '1', ' Jln Blang poroh Meunasah Tambo kecamatan jeunieb', 'Meunasah Tambo', '0', '0', '5.1716', '96.4916'),
('E0E0A690-2EF5-E011-B627-8B447D8D5EA0', '10106874', 'SD NEGERI 2 SAMALANGA', '061201  ', '5', '1', 'Jalan B. Aceh - Medan ', 'BATEE ILIEK', '0', '0', '5.1685', '96.341'),
('E0E15444-9BFA-E111-A55C-B321A64A0B85', '69760665', 'SD ISLAM TERPADU AZKIYA', '061213  ', '5', '2', 'Kota Juang', 'Geulanggang Gampong', '0', '0', '5.1954', '96.7149'),
('E0EAA790-2EF5-E011-BF38-07CA4EEB55E1', '10106992', 'SD NEGERI 9 JEUNIEB', '061203  ', '5', '1', 'jln.Langgar', 'Blang Mee Barat', '0', '0', '5.1912', '96.4892'),
('E4202F25-62E6-487D-858C-89BF10D2ECAF', '60703299', 'MIN 13 BIREUEN', '061203  ', '9', '1', 'JLN. IRIGASI SP.NALAN', '-', '', '', '5.173172', '96.514709'),
('E5B63F7E-5CCE-4A5A-89AD-2D9A2D2750FC', '60703337', 'MIN 31 BIREUEN', '061201  ', '9', '1', 'JLN. MESJID RAYA DESA COT MEURAK BAROH KEC. SAMALANGA KAB. BIREUEN', '-', '', '', '5.196054', '96.362622'),
('F015AE90-2EF5-E011-B495-3DFF70C3D8F8', '10106892', 'SD NEGERI 3 JANGKA', '061207  ', '5', '1', 'Dusun Baroh Gampong Pulo Reudeup', 'Pulo Reudeup', '0', '0', '5.2362', '96.7737'),
('F051AD90-2EF5-E011-B416-6D9F684771F7', '10106979', 'SD NEGERI 8 JULI', '061205  ', '5', '1', 'JL Blang Barat', 'Juli seutuy', '0', '0', '5.1851', '96.7024'),
('F057A790-2EF5-E011-98DD-9F38EA76DCA1', '10106812', 'SD NEGERI 11 SAMALANGA', '061201', '5', '1', 'Jalan B. Aceh - Medan', 'Matang', '0', '0', '5.2094', '96.4345'),
('F086AA90-2EF5-E011-B14A-EB3A562E8EEC', '10106834', 'SD NEGERI 14 PEUSANGAN', '061208  ', '5', '1', 'Desa Alue Udeung', 'Alue Udeung', '0', '0', '5.1205', '96.6626'),
('F0BFA990-2EF5-E011-8FF3-BFF62ED2C95E', '10106793', 'SD NEGERI 10 JEUMPA', '061206  ', '5', '1', 'Lipat Cut', 'Lipah Cut', '0', '0', '5.2027', '96.6324'),
('F0C7AF90-2EF5-E011-A0BF-277AFA551856', '10106935', 'SD NEGERI 5 PEULIMBANG', '061212  ', '5', '1', 'Jln Matang Kulee', 'Desa Matang Kulee', '0', '0', '5.154', '96.5358'),
('F0EFAF90-2EF5-E011-8DDF-A3C5A0276443', '10106889', 'SD NEGERI 3 BIREUEN', '061213  ', '5', '1', 'Jln. Laksamana Malahayati', 'Kota Bireun', '0', '0', '5.2092', '96.8914'),
('F4B7C704-6BC2-408A-A0CB-85062B46A00D', '60703340', 'MIN 33 BIREUEN', '061211  ', '9', '1', 'JALAN UJONG RAJA', '-', '', '', '5.211648', '96.434294'),
('F615992B-155E-4E99-BDB5-553DE14971DA', '60703311', 'MIN 18 BIREUEN', '061209  ', '9', '1', 'JLN. SIMPANG LEUBU', 'Ulee Gle', '', '', '5.212676', '96.87242'),
('F6B028EF-627F-4B6A-8C8D-41CE21F4CFDB', '60703286', 'MIN 8 BIREUEN', '061210  ', '9', '1', 'JLN. BANDA ACEH - MEDAN KM 242', '-', '', '', '5.231431', '96.888892'),
('F7F6C484-F5B5-48D6-8D99-85AA414CB1AF', '60703287', 'MIN 20 BIREUEN', '061210  ', '9', '1', 'JL. MEDAN - BANDA ACEH  GAMPONG COT TUNONG', '-', '', '', '5.219762', '96.857697');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_smp`
--

CREATE TABLE `data_smp` (
  `id_sekolah` varchar(255) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `kode_wilayah` varchar(20) NOT NULL,
  `bentuk_pendidikan` varchar(3) NOT NULL,
  `status_sekolah` varchar(3) NOT NULL,
  `alamat_jalan` varchar(200) NOT NULL,
  `desa_kelurahan` varchar(100) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `lintang` varchar(15) NOT NULL,
  `bujur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_smp`
--

INSERT INTO `data_smp` (`id_sekolah`, `npsn`, `nama_sekolah`, `kode_wilayah`, `bentuk_pendidikan`, `status_sekolah`, `alamat_jalan`, `desa_kelurahan`, `rt`, `rw`, `lintang`, `bujur`) VALUES
('002AEB79-9DFA-E111-8DB8-991D4E8A065C', '10112845', 'SMP NEGERI 4 MAKMUR', '061209  ', '6', '1', 'SP. Leubu - Batee Dabai KM 14', 'Alue Dua', '0', '0', '5.1192', '96.8644'),
('00312B91-2EF5-E011-83E4-71F3E873D7B3', '10107065', 'SMP NEGERI 4 PEUSANGAN', '061208  ', '6', '1', 'Jl. Cot Ie Ju - Jangka', 'Cot Rabo Baroh', '0', '0', '5.1655', '96.7056'),
('00322C91-2EF5-E011-A8A3-D505BAC3DA36', '10107042', 'SMP NEGERI 1 SIMPANG MAMPLAM', '061211  ', '6', '1', 'Jl. Banda Aceh - Medan Simpang Mamplam', 'Meunasah Mesjid', '0', '0', '5.187', '96.3667'),
('004B2A91-2EF5-E011-8BB5-D79C7EE8BB82', '10107041', 'SMP NEGERI 1 SAMALANGA', '061201  ', '6', '1', 'Jln Harapan No 3 Samalanga', 'KEUDE ACEH', '0', '0', '5.21', '96.4121'),
('00A02C91-2EF5-E011-888B-5178A13C908C', '10107064', 'SMP NEGERI 4 BIREUEN', '061213  ', '6', '1', 'Bireuen', 'Lhok Awe Teungoh', '0', '0', '5.2157', '96.6975'),
('00E12A91-2EF5-E011-BBA1-27FECDC76521', '10107036', 'SMP NEGERI 1 PEUDADA', '061204  ', '6', '1', 'Jalan Banda Aceh - Medan Km. 205', 'Meunasah Pulo', '0', '0', '5.1967', '96.5919'),
('00F02B91-2EF5-E011-A4F4-775F531A93C9', '10106605', 'SMP NEGERI 5 JULI', '061205  ', '6', '1', 'Simpang Jaya', 'Simpang Jaya', '0', '0', '5.1851', '96.7215'),
('10592B91-2EF5-E011-A89F-05834603871B', '10107034', 'SMP NEGERI 1 MAKMUR', '061209  ', '6', '1', 'Jl. Simpang Leubu-Ulee Gle KM 7,5 Kode Pos 24357 ', 'Ulee Gle', '0', '0', '5.1639', '96.8704'),
('10652A91-2EF5-E011-ACD5-01F455CD6DF7', '10107066', 'SMP NEGERI 4 SAMALANGA', '061201  ', '6', '1', 'Jln. Banda Aceh - Medan Km 174 Batee Iliek', 'Batee Iliek', '0', '0', '5.171', '96.3466'),
('20773D91-2EF5-E011-AC7E-816F697D88B7', '10107069', 'SMP RAUDHATUL MUTAALLIMIN', '061213  ', '6', '2', 'Jln Alfalah No 13 Bireuen', 'Bireun Meunasah Dayah', '0', '0', '5.2041', '96.702'),
('208C2A91-2EF5-E011-9ACD-3B13BB0592C1', '10107063', 'SMP NEGERI 3 SAMALANGA', '061201  ', '6', '1', 'Jln. Raya Tanjongan', 'Tanjongan Idem', '0', '0', '5.2149', '96.3456'),
('20AC2B91-2EF5-E011-855E-D50EB9510021', '10103730', 'SMP NEGERI 3 GANDAPURA', '061210  ', '6', '1', 'Jl. Glee Kuprai', 'TANJONG BUNGONG', '0', '0', '5.2106', '96.8981'),
('20FD2B91-2EF5-E011-BCEF-151B25AA1B6F', '10107028', 'SMP NEGERI 1 JANGKA', '061207  ', '6', '1', 'Jalan Mesjid Jangka', 'Jangka Mesjid', '0', '0', '5.2353', '96.8045'),
('2CE5BD62-66DA-4656-BE43-8B0E4DB30A7F', '69886455', 'SMP ISLAM SWASTA SIRAJUL MUDI AL-AZIZIYAH', '061209  ', '6', '2', 'Jl. Simpang Leubu Ulee Gle', 'Trienggadeng', '0', '0', '5.1903', '96.8752'),
('30512D91-2EF5-E011-A01E-5DFFC3AD5079', '10107060', 'SMP NEGERI 3 KUTA BLANG', '061217  ', '6', '1', 'Jalan Sp. Cot Tunong', 'Crung Kumbang', '0', '0', '5.1849', '96.8517'),
('305BA5AD-9CFA-E111-A4F4-5BE8BF1E55C5', '10111931', 'SMP NEGERI 2 JEUMPA', '061206  ', '6', '1', 'Jln. Pendidikan Simpang IV Lipah Rayeuk kemukiman Geulumpang payong', 'Lipah Rayeuk', '0', '0', '5.2006', '96.6225'),
('353E500C-0003-4ED8-A7D0-0EED3C8B6C1F', '69961759', 'SMP IT MUHAMMADIYAH GANDAPURA', '061210  ', '6', '2', 'Jl. Bukit Rata No.1 Komplek Panti Asuhan Muhammadiyah Gandapura', 'Geurugok', '', '', '5.229024', '96.884347'),
('40092B91-2EF5-E011-AFBE-539D93B9179B', '10107038', 'SMP NEGERI 1 PEUSANGAN', '061208  ', '6', '1', 'Jalan Mesjid Jamik Matangglumpangdua', 'Matang Glp Dua Meunasah Timu', '0', '0', '5.1974', '96.7899'),
('401A0B81-9EFA-E111-A78F-554D5BCD416E', '69760664', 'SMP NEGERI 3 JEUMPA', '061206  ', '6', '1', 'Jalan Kuta Jeumpa Pintoe Cermen', 'Blang Seupeng', '0', '0', '5.1888', '96.6553'),
('404747D0-9BFA-E111-8F0B-4942048AF037', '10111898', 'SMP NEGERI 2 PANDRAH', '061202  ', '6', '1', 'Gampong Bantayan', 'Bantayan', '0', '0', '5.1675', '96.4651'),
('40683D91-2EF5-E011-A28A-37DBF38DD06A', '10107201', 'SMP SWASTA HARAPAN UMMAT', '061211  ', '6', '2', 'Jln.pendidikan No.7 ', 'Arongan', '0', '0', '5.1997', '96.3786'),
('407F2A91-2EF5-E011-83E6-B5B5D66C8C12', '10108223', 'SMP NEGERI 6 SAMALANGA', '061201  ', '6', '1', 'Jalan Mesjid Raya - Desa Gampong Meulum Kecamatan Samalanga Kabupaten Bireuen', 'Gampong Meulum', '0', '0', '5.1874', '96.3409'),
('40B55501-9DFA-E111-8B59-B56145FA2B11', '10112847', 'SMP NEGERI 6 PEUSANGAN', '061208  ', '6', '1', 'Jl. Mesjid Tuha', 'Krueng Baro Mesjid', '0', '0', '5.1588', '96.6932'),
('4381D7C4-C4F2-44C4-9CFF-C1E509519F15', '69872392', 'SMP Islam Terpadu Attaqwa ', '061208  ', '6', '2', 'Jalan Mesjid Attaqwa', 'Pante Gajah', '0', '0', '5.193684', '96.795456'),
('450BD4D8-C0B8-48D4-BEA8-1E8E8CF4C7D4', '69995766', 'SMP IT DARUSSAADAH COT PUUK', '061210  ', '6', '2', 'Jl. Banda Aceh Medan Km.241-242', 'Cot Puuk', '', '', '5.2256', '96.8783'),
('4DD9579B-48CE-4DE1-886E-FE97B403CE87', '70004309', 'SMPS IT RAUDHATUL ULUM', '061211  ', '6', '2', 'Jl. Abu Hamid  Gampong Ceurucok Kecamatan Simpang Mamplam', 'Ceureucok', '', '', '4.9859985', '96.3819316'),
('50402C91-2EF5-E011-B34A-014E212CAD6C', '10107056', 'SMP NEGERI 2 SIMPANG MAMPLAM', '061211  ', '6', '1', 'Jalan Ujong Raja', 'Keude Tambue', '0', '0', '5.2009', '96.4267'),
('50A62A91-2EF5-E011-A596-89BB4E6180FB', '10103679', 'SMP NEGERI 5 SAMALANGA', '061201  ', '6', '1', 'Jln. Alue', 'Geulumpang Payong', '0', '0', '5.213', '96.4346'),
('50D72C91-2EF5-E011-ADFF-012500FAB6E1', '10107040', 'SMP NEGERI 1 PEUSANGAN SIBLAH KRUENG', '061216  ', '6', '1', 'Pante Baro Kumbang', 'Pante Baro Kumbang', '0', '0', '5.1739', '96.8007'),
('53EAB475-B74E-4539-BC7A-8B2A05B61713', '69972091', 'SMPS AL-FALAH SYUHADA', '061211  ', '6', '2', 'Jalan Ujong Raja', 'Cure Baroh', '1', '2', '5.221962', '96.447375'),
('5A568DBC-57EF-4061-9262-422CFC0FADB0', '69943719', 'SMP TAHFIZHUL QURAN PUTRI', '061213  ', '6', '2', 'Jl. Gajah No. 59 Gampong Pulo Ara ', 'Pulo Ara Geudong Teungoh', '1', '2', '5.20196', '96.716403'),
('5FC8109A-9FF8-4B60-89CF-13BB6F297827', '69845481', 'SMP NEGERI 5 BIREUEN', '061213  ', '6', '1', 'Jl. Cot Peutek ', 'Cot Peutek', '0', '0', '5.170172', '96.730319'),
('60122D91-2EF5-E011-B67F-19A9EF7D01CB', '10107053', 'SMP NEGERI 2 PEUSANGAN SELATAN', '061215  ', '6', '1', 'Jl. Lhok Tanjong', 'Tanjong Beuridi', '0', '0', '5.1137', '96.7672'),
('601D8845-9EFA-E111-9728-09BA6AE0FEB8', '69753818', 'SMP NEGERI 3 PEUSANGAN SIBLAH KRUENG', '061216  ', '6', '1', 'Jl. Tgk. Chik Krueng Meueh Pante Karya', 'Pante Karya', '0', '0', '5.1991', '96.7185'),
('60732B91-2EF5-E011-A05F-4F9B47748C06', '10107061', 'SMP NEGERI 3 MAKMUR', '061209  ', '6', '1', 'Panton Mesjid', 'Panton Mesjid', '0', '0', '5.1343', '96.8478'),
('608F2B91-2EF5-E011-8BB5-B9455992121E', '10106625', 'SMP NEGERI 2 GANDAPURA', '061210  ', '6', '1', 'Jln. Samuti-Desa Samuti Makmur', 'Samuti Makmur', '0', '0', '5.2381', '96.8639'),
('60AD2C91-2EF5-E011-A0DA-A1AF480A8D71', '10107043', 'SMP NEGERI 2 BIREUEN', '061213  ', '6', '1', 'Geulanggang Baro', 'GEULANGGANG BARO', '0', '0', '5.2059', '96.7211'),
('60BA2C91-2EF5-E011-AA27-01EB18D3AC86', '10107032', 'SMP NEGERI 1 KUALA', '061214  ', '6', '1', 'Ulee Gajah', 'Lancok Lancok', '0', '0', '4.9934', '96.6265'),
('60C82B91-2EF5-E011-9219-650103EAA43A', '10107031', 'SMP NEGERI 1 JULI', '061205  ', '6', '1', 'Juli Km 5', 'JULI MEUNASAH TEUNGOH', '0', '0', '5.1608', '96.7102'),
('60F42C91-2EF5-E011-8C52-67DE4603DD0E', '10107039', 'SMP NEGERI 1 PEUSANGAN SELATAN', '061215  ', '6', '1', 'Jl. Simpang Tanjong', 'Uteun Ghatom', '0', '0', '5.1452', '96.776'),
('70774329-9CFA-E111-A078-593C60038A55', '10112846', 'SMP NEGERI 4 PEUDADA', '061204  ', '6', '1', 'Jln. Iku Alue - Pinto Rimba', 'Meunasah Bungo', '0', '0', '5.1827', '96.6116'),
('77A63C1E-1493-4041-9A6F-BF2BDE569CA5', '69972747', 'SMPS TAUTHIAH ARONGAN', '061211  ', '6', '2', 'Jl Pendidikan No.8', 'Arongan', '', '', '5.196781', '96.386151'),
('7C517D9E-09E7-4983-97C2-65A0F6AA4B7A', '69956647', ' SMP IT DAYAH MODERN ULUMUL ISLAM AL AZIZIYAH', '061206  ', '6', '2', 'Jln. Banda Aceh Medan Km. 210 SP. Beng Siri', 'Blang Seunong', '', '', '5.186023', '96.670373'),
('800A2C91-2EF5-E011-A7DE-F5130C3CFD1C', '10107045', 'SMP NEGERI 2 JANGKA', '061207  ', '6', '1', 'Jln. Lapangan Bola Bugak', 'Bugak Krueng Mate', '0', '0', '5.2448', '96.8134'),
('80271691-2EF5-E011-9FCF-F9F43E852D47', '10107050', 'SMP NEGERI 2 PEUDADA', '061204  ', '6', '1', 'Peudada', 'Blang Bati', '0', '0', '5.1901', '96.6317'),
('80312D91-2EF5-E011-944D-338612A34A99', '10107033', 'SMP NEGERI 1 KUTA BLANG', '061217  ', '6', '1', 'Kuta Blang. Jln Banda Aceh Medan', 'Tingkeum Manyang', '0', '0', '5.2132', '96.8368'),
('80422D91-2EF5-E011-A151-1B8E228E2224', '10107048', 'SMP NEGERI 2 KUTABLANG', '061217  ', '6', '1', 'Jalan Lapangan Kuta Meuse-Krueng Panjoe Kec. Kutablang', 'Babah Jurong', '0', '0', '5.2119', '96.8159'),
('80B32A91-2EF5-E011-9A55-6DAAAD06CF8B', '10107030', 'SMP NEGERI 1 JEUNIEB', '061203  ', '6', '1', 'Jalan Banda Aceh Medan', 'BLANG MEE TIMU', '0', '0', '5.1884', '96.496'),
('8DCD7518-94B5-40A8-819C-10705F3D1CCD', '70003395', 'SMP IT AL-MUBARAK', '061201  ', '6', '2', 'Jl Tgk. Di Angkieng', 'Matang Teungoh', '', '', '5.1293606', '96.3931769'),
('90162B91-2EF5-E011-9382-8368BD7DE9FD', '10107052', 'SMP NEGERI 2 PEUSANGAN', '061208  ', '6', '1', 'Jalan Gampong Raya', 'Gampong Raya Dagang', '0', '0', '5.195', '96.8061'),
('9090BB29-9DFA-E111-81AA-7FCE23CBBD86', '10113360', 'SMP NEGERI 7 PEUSANGAN', '061208  ', '6', '1', 'Jl. Medan-B.Aceh Cot Bada Barat', 'Cot Bada Barat', '0', '0', '5.2115', '96.7393'),
('90B8CD9B-9EFA-E111-A489-652F5781AD99', '69768188', 'SMP NEGERI 4 KUTA BLANG', '061217  ', '6', '1', 'Jl. Uletutu-Alukuta', 'Keurumbok', '0', '0', '5.2407', '96.8321'),
('90C69512-9EFA-E111-A685-1386D79225C2', '10113626', 'SMP MA HAD MIFTAHUL ULUM', '061208  ', '6', '2', 'Jln Tgk Chik Muda Tia', 'Tanoh Mirah', '0', '0', '5.1956', '96.7532'),
('92417B6F-3BB1-424D-A071-A2FBF7423524', '70003599', 'SMP IT Baitul Ihsan Al-Hanafiah', '061201  ', '6', '2', 'Jl. Mesjid Raya Km. 1.1', 'Gampong Putoh', '', '', '5.1750603', '96.3386274'),
('98520DD0-3810-4635-A4AE-8F4067961682', '69978719', 'SMP ISLAM UMMULQURA INDONESIA', '061208  ', '6', '2', 'Jl. Banda Aceh Medan Simpang Ummulqura', 'Paya Meuneng', '1', '1', '5.199598', '96.76573'),
('9A6CF6FB-0E74-49A9-83B2-08BA55AEB44A', '69947648', 'SMP NEGERI 4 SIMPANG MAMPLAM', '061211  ', '6', '1', 'Gampong Ie Rhob Timu', 'Ie Rhob Timur', '', '', '5.157109', '96.412601'),
('A0498A66-9EFA-E111-80C3-434F12966C1E', '69862392', 'SMP ASSALAM ISLAMIC SCHOOL', '061203  ', '6', '2', 'Jln. Banda Aceh Medan Km. 192', 'Blang Mee Barat', '0', '0', '5.2062', '96.3707'),
('A04B2B91-2EF5-E011-A65E-7D5E791D6667', '10107059', 'SMP NEGERI 3 JULI', '061205  ', '6', '1', 'Jl. Bireuen - Takengon Km. 10 Beunyot', 'Bunyot', '0', '0', '5.1975', '96.7173'),
('A05E2C91-2EF5-E011-B0D9-990CAD97D120', '10107037', 'SMP NEGERI 1 PEULIMBANG', '061212  ', '6', '1', 'Jl. Banda Aceh -  Medan Km. 196', 'Seuneubok Plimbang', '0', '0', '5.1877', '96.5246'),
('A0802B91-2EF5-E011-B3C3-67DE99D82294', '10107027', 'SMP NEGERI 1 GANDAPURA', '061210  ', '6', '1', 'Jln. Banda Aceh - Medan Desa Blang Keude Kec. Gandapura', 'Blang Keude', '0', '0', '5.2374', '96.8495'),
('A0CD2A91-2EF5-E011-A9F9-5FA121EB17AF', '10107058', 'SMP NEGERI 3 JEUNIEB', '061203  ', '6', '1', 'Jeunieb', 'Meunasah Tambo', '0', '0', '5.1716', '96.4922'),
('A0D52B91-2EF5-E011-9240-BD3005CB0B87', '10107047', 'SMP NEGERI 2 JULI', '061205  ', '6', '1', 'Jl. Iskandar Muda', 'Juli Cot Uruk Anoe', '0', '0', '5.1912', '96.7105'),
('A7B0BF48-646C-4AE4-BFD6-1616A2CC9935', '69991916', 'SMP IT MUHAMMADIYAH', '061213  ', '6', '2', 'Jl. Putroe Bungsu', 'Geulanggang Teungoh', '', '', '5.1988', '96.7186'),
('B04BAEFA-9DFA-E111-B1C3-3D5BD481EE46', '10106603', 'SMP ISLAM ZULKIFLIYAH', '061211  ', '6', '2', 'Jl. Banda Aceh-Medan Makam Syuhada Lapan', 'Blang Tambue', '0', '0', '5.1943', '96.429'),
('B0588E9E-9DFA-E111-9F55-A5D4D7C1490C', '10107070', 'SMP MUSLIMAT SAMALANGA', '061201  ', '6', '2', 'Jln. Mesjid Raya', 'Gampong Putoh', '0', '0', '5.1829', '96.4267'),
('B08C6CEA-9CFA-E111-950C-7DB79288D4CB', '10110893', 'SMP NEGERI 5 PEUSANGAN', '061208  ', '6', '1', 'Jln. Cot Iju', 'Blang Dalam', '0', '0', '5.1367', '96.6983'),
('B0FB2A91-2EF5-E011-BAED-4F2071F65C70', '10107029', 'SMP NEGERI 1 JEUMPA', '061206  ', '6', '1', 'Jl. B.aceh - Medan Km. 211 - 212', 'Teupok Tunong', '0', '0', '5.1656', '96.6093'),
('B45D3849-3C36-455A-9F43-B661A55C7D05', '69916699', 'SMP SWASTA THAUTHIATUL ASYRAF', '061211  ', '6', '2', 'Jl. Ujong Raja Kemukiman Tambue', 'Cure Tunong', '0', '0', '5.157068', '96.412619'),
('C04E2C91-2EF5-E011-8D62-A711C55E72E2', '10107587', 'SMP NEGERI 3 SIMPANG MAMPLAM', '061211  ', '6', '1', 'Jl.ujong Raja', 'Blang Panyang', '0', '0', '5.2208', '96.4738'),
('C0696BC2-9DFA-E111-AA59-67A01CF535D8', '10107071', 'SMP SUKMA BANGSA', '061206  ', '6', '2', 'Jalan Medan Banda Aceh Desa Cot Keutapang', 'Cot Keutapang', '0', '0', '5.1971', '96.6847'),
('C0782C91-2EF5-E011-9655-A5E59AD8C88A', '10107026', 'SMP NEGERI 1 BIREUEN', '061213  ', '6', '1', 'Jln. Laksamana Malahayati', 'Gampong Baro', '0', '0', '5.2063', '96.7026'),
('C0C02A91-2EF5-E011-A9B6-DD322C0834FF', '10107046', 'SMP NEGERI 2 JEUNIEB', '061203  ', '6', '1', 'Jl. Irigasi Kr. Nalan Km. 2', 'Tufah', '0', '0', '5.1857', '96.4901'),
('C0CEE897-9BFA-E111-BCC2-1B62AD0FAAEB', '10107055', 'SMP NEGERI 2 SAMALANGA', '061201  ', '6', '1', 'Jln. Mesjid No.1 Samalanga', 'Pante Rheeng', '0', '0', '5.2107', '96.3672'),
('C409D350-0F26-4E4E-946C-5BDAA1D11298', '69995767', 'SMP MAHYAUL ULUM', '061211  ', '6', '2', 'Jl. Krueng Meseugob ', 'Meunasah Mamplam', '', '', '5.1867', '96.4078'),
('D06B2C91-2EF5-E011-8698-5DC3860A6F3D', '10107051', 'SMP NEGERI 2 PEULIMBANG', '061212  ', '6', '1', 'Jln .Mesjid Plimbang Km.2', 'Uteun Sikumbong', '0', '0', '5.1713', '96.5291'),
('D90C347C-D6F2-40C5-A5D8-5317784BA067', '69972094', 'SMP TAHFIDZ AL-QURAN TELAGA ILMU', '061213  ', '6', '2', 'Jalan Petua Banta No.9', 'Bireun Meunasah Blang', '', '1', '5.201502', '96.693783'),
('D9917090-7256-4994-B2B8-5C8F9FE035E1', '69961760', 'SMPS DARUL ILMI', '061208  ', '6', '2', 'Jl. Abu Tanoh Mirah', 'Blang Rambong', '', '', '5.201211', '96.757626'),
('DF571A20-FAE8-48C6-A232-D817D5C8BB5C', '69962203', 'SMP IT AZKIYA', '061213  ', '6', '2', 'Jl. BTN Kupula Indah', 'Geulanggang Gampong', '4', '1', '5.1955', '96.7149'),
('E0232B91-2EF5-E011-87B8-F578D8F4F55B', '10107062', 'SMP NEGERI 3 PEUSANGAN', '061208  ', '6', '1', 'Jl Tanoh Mirah', 'Cot Ieju', '0', '0', '5.2073', '96.7576'),
('E047692C-7213-E211-90F2-6D6880BF1A6E', '10106011', 'SMP SWASTA ISLAM JAMIAH AL-AZIZIYAH', '061201  ', '6', '2', 'Jln : Tgk Syiek Kuta Glee', 'Batee Iliek', '0', '0', '5.0719', '96.3783'),
('E04C3D91-2EF5-E011-8A15-DFBE7F61CE20', '10107072', 'SMP Swasta Ummul Ayman', '061201  ', '6', '2', 'Jln. Mesjid Raya', 'Gampong Putoh', '0', '0', '5.2021', '96.3551'),
('E0852C91-2EF5-E011-9D37-1DF0653464C2', '10107057', 'SMP NEGERI 3 BIREUEN', '061213  ', '6', '1', 'Jalan Medan - Banda Aceh', 'Bireun Mns Reuleut', '0', '0', '5.2035', '96.6903'),
('E0BA2B91-2EF5-E011-B73C-E551BA5205F1', '10107035', 'SMP NEGERI 1 PANDRAH', '061202  ', '6', '1', 'Jl. Banda Aceh - Medan Km. 188,5', 'Alue Igeueh', '0', '0', '5.1869', '96.4608'),
('E0BEC433-1C04-43BD-A002-4A7958B14120', '69991922', 'SMP SWASTA  ASD FOUNDATION', '061205  ', '6', '2', 'Jl. Bireuen Takengon Km. 10', 'Bunyot', '1', '2', '5.003325', '96.641581'),
('E0C362C8-9CFA-E111-B300-912D287FB433', '69760663', 'SMP NEGERI 6 JULI', '061205  ', '6', '1', 'Jl. Bireuen - Takengon  Km.33 Kec. Juli', 'Suka Tani', '0', '0', '4.992', '96.6945'),
('E0E52C91-2EF5-E011-9352-19CFAE871A1F', '10107054', 'SMP NEGERI 2 PEUSANGAN SIBLAH KRUENG', '061216  ', '6', '1', 'Jalan Tgk Panita Km 13', 'Alue Iet', '0', '0', '5.1227', '96.7972'),
('F02916E0-9DFA-E111-B886-ABCB3A08C99A', '10107202', 'SMPS ISLAM DARUL ULUM', '061208  ', '6', '2', 'Tanoh Mirah Peusangan', 'Tanoh Mirah', '0', '0', '5.1923', '96.7507'),
('F0377AF8-9BFA-E111-9A93-5F567E95B74D', '10110795', 'SMP NEGERI 3 PEUDADA', '061204  ', '6', '1', 'Jalan Banda Aceh - Medan Km 202', 'Blang kubu', '0', '0', '5.2007', '96.5752'),
('F0652B91-2EF5-E011-8409-6DF69AC462DB', '10107049', 'SMP NEGERI 2 MAKMUR', '061209  ', '6', '1', 'Jln.Kec.Makmur Km.1,5', 'Leubu Cot', '0', '0', '5.211', '96.8739'),
('F0E22B91-2EF5-E011-8857-093579A8C335', '10107812', 'SMP NEGERI 4 JULI', '061205  ', '6', '1', 'Jln Bireuen - Takengon Km. 19 ', 'Krueng Simpo', '0', '0', '5.0681', '96.7129'),
('F3F27D28-796F-4842-A06F-AB6E38A2BF02', '69990846', 'SMPS NASYRUL ULUM AL-AZIZIYAH', '061201  ', '6', '2', 'Lr. Harapan Makmur', 'Namploh Papeuen', '', '', '5.1278137', '96.3860345'),
('FB3480AE-395B-4488-8620-B4F54E3B5313', '69943624', 'SMP ISLAM SWASTA IHDAL ULUM AL AZIZIYAH', '061201  ', '6', '2', 'Jl. Arongan Km. 1 Kode Pos 24264', 'Meuliek', '0', '0', '5.1991', '96.3829'),
('FDB748A2-F986-418D-BD10-59979E5D8A2F', '69932141', 'SMP SWASTA AL-HIDAYAH', '061212  ', '6', '2', 'Jln. mesjid Plimbang Km.02', 'Uteun Sikumbong', '0', '0', '5.1732', '96.5238');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wilayah`
--

CREATE TABLE `data_wilayah` (
  `kode_wilayah` varchar(10) NOT NULL,
  `nama_wilayah` varchar(100) NOT NULL,
  `id_level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_wilayah`
--

INSERT INTO `data_wilayah` (`kode_wilayah`, `nama_wilayah`, `id_level`) VALUES
('061201', 'Kec. Samalanga', '3'),
('061202', 'Kec. Pandrah', '3'),
('061203', 'Kec. Jeunib', '3'),
('061204', 'Kec. Peudada', '3'),
('061205', 'Kec. Juli', '3'),
('061206', 'Kec. Jeumpa', '3'),
('061207', 'Kec. Jangka', '3'),
('061208', 'Kec. Peusangan', '3'),
('061209', 'Kec. Makmur', '3'),
('061210', 'Kec. Ganda Pura', '3'),
('061211', 'Kec. Simpang Mamplam', '3'),
('061212', 'Kec. Peulimbang', '3'),
('061213', 'Kec. Kota Juang', '3'),
('061214', 'Kec. Kuala', '3'),
('061215', 'Kec. Peusangan Selatan', '3'),
('061216', 'Kec. Peusangan Siblah Krueng', '3'),
('061217', 'Kec. Kuta Blang', '3'),
('061218', 'Kec. Bandar Dua Pijay', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pendaftaran`
--

CREATE TABLE `jenis_pendaftaran` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `pembagian_kuota` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pendaftaran`
--

INSERT INTO `jenis_pendaftaran` (`id_jenis`, `nama`, `pembagian_kuota`, `keterangan`) VALUES
(1, 'Zonasi', 50, 'Zonasi Desa'),
(2, 'Afirmasi', 15, 'Afirmasi/Siswa Kurang Mampu'),
(3, 'Pindahan Orang Tua', 5, 'Pindah Dinas Orang Tua'),
(4, 'Jalur Prestasi', 30, 'Jalur Prestasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuota_siswa`
--

CREATE TABLE `kuota_siswa` (
  `id_kuota` int(11) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `sisa_zonasi` int(11) NOT NULL,
  `sisa_afirmasi` int(11) NOT NULL,
  `sisa_pindahan` int(11) NOT NULL,
  `sisa_prestasi` int(11) NOT NULL,
  `total_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuota_siswa`
--

INSERT INTO `kuota_siswa` (`id_kuota`, `id_sekolah`, `total`, `sisa_zonasi`, `sisa_afirmasi`, `sisa_pindahan`, `sisa_prestasi`, `total_in`) VALUES
(2, 'C0782C91-2EF5-E011-9655-A5E59AD8C88A', 200, 110, 30, 5, 55, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `id_pesertadidik` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) NOT NULL,
  `approve_formulir` varchar(30) NOT NULL,
  `approve_lulus` varchar(30) NOT NULL,
  `approve_daftarulang` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `id_pesertadidik`, `username`, `password`, `role`, `approve_formulir`, `approve_lulus`, `approve_daftarulang`, `status`) VALUES
(53, '081362059403', '1111093101960001', '096001234', '2', 'Diterima', 'Lulus', 'Diterima', '0'),
(54, '001409E6-483B-11E5-86EB-57DE874865AC', '1111075009090001', '0096000836', '2', 'Diterima', 'Lulus', 'Antrian', '0'),
(55, '007', 'disdikbud@bireuenkab.go.id', 'disdik2021', '0', 'ADMIN BIREUEN', 'ADMIN BIREUEN', 'ADMIN BIREUEN', '0'),
(58, 'C0782C91-2EF5-E011-9655-A5E59AD8C88A', '10107026', '10107026', '1', 'SMP NEGERI 1 BIREUEN', 'SMP NEGERI 1 BIREUEN', 'SMP NEGERI 1 BIREUEN', '0'),
(59, '0020C8B4-5B4D-11E5-8450-6B80ED4B76BC', '1103154802090001', '0094409976', '2', 'Antrian', 'Antrian', 'Antrian', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_tujuan`
--

CREATE TABLE `sekolah_tujuan` (
  `id_zonasi` int(255) NOT NULL,
  `id_pesertadidik` varchar(255) NOT NULL,
  `jenis_pendaftaran` int(11) NOT NULL,
  `kode_wilayah` varchar(255) NOT NULL,
  `id_desa` varchar(255) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah_tujuan`
--

INSERT INTO `sekolah_tujuan` (`id_zonasi`, `id_pesertadidik`, `jenis_pendaftaran`, `kode_wilayah`, `id_desa`, `id_sekolah`) VALUES
(7, '081362059403', 2, '061213', '255', '00A02C91-2EF5-E011-888B-5178A13C908C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_berkas`
--

CREATE TABLE `upload_berkas` (
  `id_upload` int(11) NOT NULL,
  `id_pesertadidik` varchar(255) NOT NULL,
  `up_zonasi1` varchar(255) DEFAULT NULL,
  `up_zonasi2` varchar(255) DEFAULT NULL,
  `up_afirmasi1` varchar(255) DEFAULT NULL,
  `up_afirmasi2` varchar(255) DEFAULT NULL,
  `up_pindahan1` varchar(255) DEFAULT NULL,
  `up_pindahan2` varchar(255) DEFAULT NULL,
  `up_prestasi1` varchar(255) DEFAULT NULL,
  `up_prestasi2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `upload_berkas`
--

INSERT INTO `upload_berkas` (`id_upload`, `id_pesertadidik`, `up_zonasi1`, `up_zonasi2`, `up_afirmasi1`, `up_afirmasi2`, `up_pindahan1`, `up_pindahan2`, `up_prestasi1`, `up_prestasi2`) VALUES
(1, '001409E6-483B-11E5-86EB-57DE874865AC', '222.PDF', '123.PDF', '', '', '', '', '', ''),
(3, '081362059403', 'zonasi1.pdf', 'zonasi2.pdf', 'afirmasi1.pdf', 'afirmasi2.pdf', 'pindahan1.pdf', 'pindahan2.pdf', 'prestasi1.pdf', 'prestasi2.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zonasi`
--

CREATE TABLE `zonasi` (
  `id_zonasi` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `zonasi`
--

INSERT INTO `zonasi` (`id_zonasi`, `id_desa`, `id_sekolah`) VALUES
(2, 255, 'C0782C91-2EF5-E011-9655-A5E59AD8C88A'),
(3, 256, 'C0782C91-2EF5-E011-9655-A5E59AD8C88A'),
(4, 255, '00A02C91-2EF5-E011-888B-5178A13C908C');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bentuk_pendidikan`
--
ALTER TABLE `bentuk_pendidikan`
  ADD PRIMARY KEY (`id_bentuk_pendidikan`);

--
-- Indeks untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  ADD PRIMARY KEY (`id_daftarulang`);

--
-- Indeks untuk tabel `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id_pesertadidik`);

--
-- Indeks untuk tabel `data_desa`
--
ALTER TABLE `data_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `data_sd`
--
ALTER TABLE `data_sd`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `data_smp`
--
ALTER TABLE `data_smp`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `data_wilayah`
--
ALTER TABLE `data_wilayah`
  ADD PRIMARY KEY (`kode_wilayah`);

--
-- Indeks untuk tabel `jenis_pendaftaran`
--
ALTER TABLE `jenis_pendaftaran`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kuota_siswa`
--
ALTER TABLE `kuota_siswa`
  ADD PRIMARY KEY (`id_kuota`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah_tujuan`
--
ALTER TABLE `sekolah_tujuan`
  ADD PRIMARY KEY (`id_zonasi`);

--
-- Indeks untuk tabel `upload_berkas`
--
ALTER TABLE `upload_berkas`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indeks untuk tabel `zonasi`
--
ALTER TABLE `zonasi`
  ADD PRIMARY KEY (`id_zonasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftarulang`
--
ALTER TABLE `daftarulang`
  MODIFY `id_daftarulang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_desa`
--
ALTER TABLE `data_desa`
  MODIFY `id_desa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;

--
-- AUTO_INCREMENT untuk tabel `jenis_pendaftaran`
--
ALTER TABLE `jenis_pendaftaran`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kuota_siswa`
--
ALTER TABLE `kuota_siswa`
  MODIFY `id_kuota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT untuk tabel `sekolah_tujuan`
--
ALTER TABLE `sekolah_tujuan`
  MODIFY `id_zonasi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `upload_berkas`
--
ALTER TABLE `upload_berkas`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `zonasi`
--
ALTER TABLE `zonasi`
  MODIFY `id_zonasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
