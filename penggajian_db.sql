-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 03.39
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji_pegawai`
--

CREATE TABLE `tb_gaji_pegawai` (
  `id_gaji_pegawai` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `date` date NOT NULL,
  `bulan` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `gaji_pokok` double NOT NULL,
  `total_potongan_pu` double NOT NULL,
  `gaji_bersih` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_gaji_pegawai`
--

INSERT INTO `tb_gaji_pegawai` (`id_gaji_pegawai`, `id_pegawai`, `date`, `bulan`, `tahun`, `gaji_pokok`, `total_potongan_pu`, `gaji_bersih`, `id_user`) VALUES
(62, 57, '2021-11-26', 1, 2021, 6924400, 2785000, 4139400, 13),
(63, 58, '2021-11-26', 1, 2021, 6167000, 3080000, 3087000, 13),
(64, 59, '2021-11-26', 1, 2021, 5980000, 0, 5980000, 13),
(65, 60, '2021-11-26', 1, 2021, 6121000, 0, 6121000, 13),
(66, 61, '2021-11-26', 1, 2021, 6120000, 0, 6120000, 13),
(67, 62, '2021-11-26', 1, 2021, 6165000, 0, 6165000, 13),
(68, 63, '2021-11-26', 1, 2021, 6000000, 0, 6000000, 13),
(69, 64, '2021-11-26', 1, 2021, 6162000, 0, 6162000, 13),
(70, 65, '2021-11-26', 1, 2021, 6400000, 0, 6400000, 13),
(71, 66, '2021-11-26', 1, 2021, 6500000, 0, 6500000, 13),
(72, 57, '2021-11-28', 2, 2021, 6924400, 2550000, 4374400, 13),
(73, 58, '2021-11-28', 2, 2021, 6167000, 940000, 5227000, 13),
(74, 59, '2021-11-28', 2, 2021, 5980000, 0, 5980000, 13),
(75, 60, '2021-11-28', 2, 2021, 6121000, 0, 6121000, 13),
(76, 61, '2021-11-28', 2, 2021, 6120000, 0, 6120000, 13),
(77, 62, '2021-11-28', 2, 2021, 6165000, 0, 6165000, 13),
(78, 63, '2021-11-28', 2, 2021, 6000000, 0, 6000000, 13),
(79, 64, '2021-11-28', 2, 2021, 6162000, 0, 6162000, 13),
(80, 65, '2021-11-28', 2, 2021, 6400000, 0, 6400000, 13),
(81, 66, '2021-11-28', 2, 2021, 6500000, 0, 6500000, 13),
(82, 57, '2021-11-28', 3, 2021, 6924400, 3280000, 3644400, 13),
(83, 58, '2021-11-28', 3, 2021, 6167000, 500000, 5667000, 13),
(84, 59, '2021-11-28', 3, 2021, 5980000, 0, 5980000, 13),
(85, 60, '2021-11-28', 3, 2021, 6121000, 0, 6121000, 13),
(86, 61, '2021-11-28', 3, 2021, 6120000, 0, 6120000, 13),
(87, 62, '2021-11-28', 3, 2021, 6165000, 0, 6165000, 13),
(88, 63, '2021-11-28', 3, 2021, 6000000, 0, 6000000, 13),
(89, 64, '2021-11-28', 3, 2021, 6162000, 0, 6162000, 13),
(90, 65, '2021-11-28', 3, 2021, 6400000, 0, 6400000, 13),
(91, 66, '2021-11-28', 3, 2021, 6500000, 0, 6500000, 13),
(92, 57, '2021-12-04', 4, 2021, 6924400, 550000, 6374400, 13),
(93, 58, '2021-12-04', 4, 2021, 6167000, 3500000, 2667000, 13),
(94, 59, '2021-12-04', 4, 2021, 5980000, 0, 5980000, 13),
(95, 60, '2021-12-04', 4, 2021, 6121000, 0, 6121000, 13),
(96, 61, '2021-12-04', 4, 2021, 6120000, 0, 6120000, 13),
(97, 62, '2021-12-04', 4, 2021, 6165000, 0, 6165000, 13),
(98, 63, '2021-12-04', 4, 2021, 6000000, 0, 6000000, 13),
(99, 64, '2021-12-04', 4, 2021, 6162000, 0, 6162000, 13),
(100, 65, '2021-12-04', 4, 2021, 6400000, 0, 6400000, 13),
(101, 66, '2021-12-04', 4, 2021, 6500000, 0, 6500000, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nm_golongan` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_golongan`
--

INSERT INTO `tb_golongan` (`id_golongan`, `nm_golongan`, `id_user`) VALUES
(1, '-', 1),
(10, 'I A', 1),
(11, 'I B', 1),
(12, 'I C', 1),
(13, 'I D', 1),
(15, 'II A', 1),
(16, 'II B', 1),
(17, 'II C', 1),
(18, 'II D', 1),
(19, 'III A', 1),
(20, 'III B', 1),
(21, 'III C', 1),
(22, 'III D', 1),
(23, 'IV A', 1),
(24, 'IV B', 1),
(25, 'IV C', 1),
(26, 'IV D', 1),
(27, 'IV E', 1),
(28, 'I', 1),
(29, 'II', 1),
(30, 'III', 1),
(31, 'IV', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nm_jabatan` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nm_jabatan`, `id_user`) VALUES
(1, '-', 1),
(9, 'Kadin PU dan PR', 1),
(10, 'Sekretaris Dinas PU dan PR', 1),
(11, 'Kabid Pertanahan', 1),
(12, 'Kabid Bina Marga', 1),
(13, 'Kabid Penataan Ruang', 1),
(14, 'Kabid SDA', 1),
(15, 'Kabid Cipta Karya dan Jasa Kon', 1),
(16, 'Kasi Preservasi', 1),
(17, 'Kasi Perencanaan ', 1),
(18, 'Kasi Penyl Sengketa Tanah dan ', 1),
(19, 'Kasubag Perenc dan Umum', 1),
(20, 'Kasi Op dan Pemeliharaan', 13),
(21, 'Kasi Pembangunan', 13),
(22, 'Kasi Penguasaan dan PT', 13),
(23, 'Kasi Perencanaan dan Evaluasi', 13),
(24, 'Kasi Redistribusi Tanah', 13),
(25, 'Kasi PLP dan Air Minum', 13),
(26, 'Kasi Pelaks Penataan Ruang', 13),
(27, 'Kasi Pelaksanaan', 13),
(28, 'Kasi Pgwsn & Pengdln Pemanfata', 13),
(30, 'Kasi Pengaturan dan Pembinaan', 13),
(31, 'Kasi Penataan Bangunan dan PKP', 13),
(32, 'Kasi Jasa Konstuksi', 13),
(33, 'Kasubbag Keu dan Kepeg', 13),
(34, 'Fungsional Umum', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nm_pegawai` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `thn_masuk` varchar(4) NOT NULL,
  `masa_kerja` int(11) NOT NULL,
  `nominal_gaji` double NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `status` enum('Sudah Menikah','Belum Menikah') NOT NULL,
  `jumlah_jiwa` int(11) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `no_rekening` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `id_golongan`, `id_jabatan`, `nip`, `nm_pegawai`, `jenis_kelamin`, `thn_masuk`, `masa_kerja`, `nominal_gaji`, `no_hp`, `status`, `jumlah_jiwa`, `jumlah_anak`, `no_rekening`) VALUES
(57, 24, 9, '197207021998031005', 'Ir. CHANDRA DEWANA, S.T', 'Laki-Laki', '1998', 22, 6924400, '085896935201', 'Sudah Menikah', 4, 2, '566456789098765'),
(58, 24, 10, '197101041998031008', 'EDI SURYA, S.Sos', 'Laki-Laki', '1998', 22, 6167000, '085896789012', 'Sudah Menikah', 4, 2, '566909879098321'),
(59, 23, 11, '196505101990031008', 'RUSMAN EFENDI, ST', 'Laki-Laki', '1990', 26, 5980000, '085895674323', 'Sudah Menikah', 6, 4, '566235412342145'),
(60, 24, 12, '196305261991031001', 'BUDI RAHAYU, ST', 'Laki-Laki', '1991', 30, 6121000, '082178569827', 'Sudah Menikah', 5, 3, '567892837465473'),
(61, 25, 13, '196506031986031001', 'DARWIN SAMOSIR, S.T', 'Laki-Laki', '1986', 29, 6120000, '085356782349', 'Sudah Menikah', 6, 4, '566809678912321'),
(62, 23, 33, '196310151985122002', 'SURATMI, S.E', 'Perempuan', '1985', 21, 6165000, '081689023423', 'Sudah Menikah', 3, 1, '566890987895143'),
(63, 23, 14, '197008152007012035', 'EVI KURNIASIH, S.E', 'Perempuan', '2007', 20, 6000000, '085345890128', 'Sudah Menikah', 3, 1, '566565432123456'),
(64, 24, 17, '197012031994032004', 'ERNAWATI, S.E', 'Perempuan', '1994', 29, 6162000, '085678927250', 'Sudah Menikah', 5, 3, '566243212321409'),
(65, 23, 17, '199701022019022004', 'ANNISA NURRAHMA, ST', 'Perempuan', '2019', 13, 6400000, '085789876454', 'Sudah Menikah', 3, 1, '566709087890987'),
(66, 26, 20, '197607122009011003', 'MUJIB, ST', 'Laki-Laki', '2009', 14, 6500000, '082145678976', 'Sudah Menikah', 3, 1, '566456789765476');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_potongan_pu`
--

CREATE TABLE `tb_potongan_pu` (
  `id_potongan_pu` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `date` date NOT NULL,
  `korpri` double DEFAULT NULL,
  `koprasi` double DEFAULT NULL,
  `ap_koprasi` double DEFAULT NULL,
  `bank_sumsel` double DEFAULT NULL,
  `bank_sumsel_syariah` double DEFAULT NULL,
  `bank_bri_cab` double DEFAULT NULL,
  `bank_bri_kota` double DEFAULT NULL,
  `dw` double DEFAULT NULL,
  `kop_karya_mulya` double DEFAULT NULL,
  `bpr` double DEFAULT NULL,
  `bazda` double DEFAULT NULL,
  `k_iuran_bpjs` double DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_potongan_pu`
--

INSERT INTO `tb_potongan_pu` (`id_potongan_pu`, `id_pegawai`, `date`, `korpri`, `koprasi`, `ap_koprasi`, `bank_sumsel`, `bank_sumsel_syariah`, `bank_bri_cab`, `bank_bri_kota`, `dw`, `kop_karya_mulya`, `bpr`, `bazda`, `k_iuran_bpjs`, `id_user`) VALUES
(9, 57, '2021-01-03', 5000, 0, 0, 0, 0, 0, 2500000, 0, 0, 0, 0, 280000, 13),
(10, 58, '2021-01-03', 0, 0, 0, 2800000, 0, 0, 0, 0, 0, 0, 0, 280000, 13),
(11, 57, '2021-02-03', 0, 0, 0, 0, 550000, 0, 0, 0, 0, 2000000, 0, 0, 13),
(12, 58, '2021-02-03', 0, 0, 0, 0, 890000, 0, 0, 0, 0, 50000, 0, 0, 13),
(13, 57, '2021-03-03', 0, 0, 0, 0, 3000000, 0, 0, 0, 0, 0, 0, 280000, 13),
(14, 58, '2021-03-03', 0, 500000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(15, 57, '2021-04-03', 0, 0, 550000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(16, 58, '2021-04-03', 0, 0, 0, 0, 0, 3500000, 0, 0, 0, 0, 0, 0, 13),
(17, 57, '2021-05-03', 5000, 0, 0, 0, 0, 50000, 0, 0, 0, 0, 0, 0, 13),
(18, 58, '2021-05-03', 0, 0, 0, 0, 0, 0, 790000, 0, 0, 0, 0, 0, 13),
(19, 57, '2021-06-03', 0, 0, 0, 0, 0, 0, 0, 450000, 0, 200000, 0, 0, 13),
(20, 58, '2021-06-03', 0, 5000, 0, 0, 0, 800000, 0, 0, 0, 0, 0, 0, 13),
(21, 57, '2021-07-03', 0, 5000, 0, 0, 40000, 0, 0, 0, 0, 0, 0, 0, 13),
(22, 58, '2021-07-03', 0, 0, 0, 350000, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(24, 57, '2021-08-03', 0, 0, 0, 0, 0, 3000000, 0, 0, 0, 0, 0, 0, 13),
(25, 58, '2021-08-03', 5000, 0, 0, 0, 0, 0, 3500000, 0, 0, 0, 0, 0, 13),
(26, 57, '2021-09-03', 0, 0, 0, 0, 0, 0, 500000, 0, 0, 0, 0, 280000, 13),
(27, 58, '2021-09-03', 0, 5000, 0, 0, 0, 500000, 0, 0, 0, 0, 0, 0, 13),
(28, 57, '2021-08-04', 5000, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(29, 58, '2021-10-03', 0, 0, 0, 0, 500000, 200000, 0, 0, 0, 0, 0, 0, 13),
(30, 57, '2021-10-03', 0, 0, 0, 0, 2000000, 0, 0, 0, 0, 0, 0, 0, 13),
(31, 57, '2021-11-03', 0, 0, 0, 590000, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(32, 58, '2021-11-03', 0, 0, 0, 3500000, 0, 0, 0, 0, 0, 0, 0, 0, 13),
(33, 57, '2021-12-03', 0, 50000, 0, 0, 0, 500000, 0, 0, 0, 0, 0, 0, 13),
(34, 58, '2021-12-03', 5000, 0, 0, 0, 0, 600000, 0, 0, 0, 0, 0, 0, 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `jenis_user` varchar(200) NOT NULL,
  `dashboard` enum('T','Y') NOT NULL DEFAULT 'T',
  `data_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_data_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `edit_data_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `data_golongan` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_data_golongan` enum('T','Y') NOT NULL DEFAULT 'T',
  `edit_data_golongan` enum('T','Y') NOT NULL DEFAULT 'T',
  `data_jabatan` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_data_jabatan` enum('T','Y') NOT NULL DEFAULT 'T',
  `edit_data_jabatan` enum('T','Y') NOT NULL DEFAULT 'T',
  `potongan` enum('T','Y') NOT NULL DEFAULT 'T',
  `potongan_pu` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_potongan_pu` enum('T','Y') NOT NULL DEFAULT 'T',
  `edit_potongan_pu` enum('T','Y') NOT NULL DEFAULT 'T',
  `proses_gaji_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_proses_gaji_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `export_proses_gaji_pegawai` enum('T','Y') NOT NULL DEFAULT 'T',
  `user` enum('T','Y') NOT NULL DEFAULT 'T',
  `add_user` enum('T','Y') NOT NULL DEFAULT 'T',
  `edit_user` enum('T','Y') NOT NULL DEFAULT 'T',
  `reset_pass` enum('T','Y') NOT NULL DEFAULT 'T'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `jenis_user`, `dashboard`, `data_pegawai`, `add_data_pegawai`, `edit_data_pegawai`, `data_golongan`, `add_data_golongan`, `edit_data_golongan`, `data_jabatan`, `add_data_jabatan`, `edit_data_jabatan`, `potongan`, `potongan_pu`, `add_potongan_pu`, `edit_potongan_pu`, `proses_gaji_pegawai`, `add_proses_gaji_pegawai`, `export_proses_gaji_pegawai`, `user`, `add_user`, `edit_user`, `reset_pass`) VALUES
(1, 'super_admin', 'Y', 'Y', 'T', 'T', 'Y', 'T', 'T', 'Y', 'T', 'T', 'Y', 'Y', 'T', 'T', 'Y', 'T', 'Y', 'T', 'T', 'T', 'Y'),
(2, 'admin', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(3, 'user', 'T', 'Y', 'T', 'T', 'T', 'T', 'T', 'T', 'T', 'T', 'Y', 'Y', 'T', 'T', 'Y', 'T', 'T', 'T', 'Y', 'T', 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` enum('admin','superadmin','user') NOT NULL,
  `aktif` enum('T','Y') NOT NULL DEFAULT 'T',
  `id_pegawai` int(11) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `name`, `username`, `password`, `level`, `aktif`, `id_pegawai`, `id_role`) VALUES
(1, 'septa', 'septa', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'superadmin', 'Y', 32, 1),
(13, 'Admin', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 'Y', 32, 2),
(14, 'Ir. CHANDRA DEWANA, S.T', 'chandra', '32250170a0dca92d53ec9624f336ca24', 'user', 'Y', 57, 3),
(15, 'EDI SURYA, S.Sos', 'Edi', '56330cb9fed8d8ed9b2ce17e412bf2e2', 'user', 'Y', 58, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_gaji_pegawai`
--
ALTER TABLE `tb_gaji_pegawai`
  ADD PRIMARY KEY (`id_gaji_pegawai`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`id_golongan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `tb_potongan_pu`
--
ALTER TABLE `tb_potongan_pu`
  ADD PRIMARY KEY (`id_potongan_pu`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gaji_pegawai`
--
ALTER TABLE `tb_gaji_pegawai`
  MODIFY `id_gaji_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tb_potongan_pu`
--
ALTER TABLE `tb_potongan_pu`
  MODIFY `id_potongan_pu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_gaji_pegawai`
--
ALTER TABLE `tb_gaji_pegawai`
  ADD CONSTRAINT `tb_gaji_pegawai_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_gaji_pegawai_ibfk_8` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD CONSTRAINT `tb_golongan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_potongan_pu`
--
ALTER TABLE `tb_potongan_pu`
  ADD CONSTRAINT `tb_potongan_pu_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tb_potongan_pu_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
