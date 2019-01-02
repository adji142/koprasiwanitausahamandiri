-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Agu 2015 pada 09.20
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koperasi_new`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil_tabungan`
--

CREATE TABLE IF NOT EXISTS `ambil_tabungan` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_ambil` date NOT NULL,
  `jml_ambil` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ambil_tabungan`
--

INSERT INTO `ambil_tabungan` (`username`, `nama`, `tgl_ambil`, `jml_ambil`) VALUES
('member01', 'Ahmed ahmed', '2015-01-01', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE IF NOT EXISTS `bayar` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml_bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar`
--

INSERT INTO `bayar` (`username`, `nama`, `tgl_bayar`, `jml_bayar`) VALUES
('member01', 'Ahmed ahmed', '2015-01-01', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `nama`, `password`, `hak_akses`) VALUES
('admin01', 'Antonia', '123', 'Admin'),
('member01', 'Ahmed ahmed', '123', 'Member'),
('member02', 'Febriany', '123', 'Member'),
('member03', 'Vina', '123', 'Member'),
('member04', 'Doni andreas', '123', 'Member'),
('member05', 'Lukman S', '123', 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `pekerjaan` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` char(20) NOT NULL,
  `tabungan` varchar(16) NOT NULL,
  `pinjaman` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `password`, `nama`, `nik`, `tgl_lahir`, `jenis_kelamin`, `pekerjaan`, `alamat`, `email`, `no_hp`, `tabungan`, `pinjaman`) VALUES
('member01', '123', 'Ahmed ahmed', 120123090001, '1945-01-01', 'L', 'Karyawan', 'Bekasi', 'ahmed@email.com', '085711012231', '650000', '250000'),
('member02', '123', 'Febriany', 201507080002, '1963-01-01', 'P', 'PNS', 'Bogor', 'febriany@email.com', '083899012344', '', ''),
('member03', '123', 'Vina', 201508080002, '1963-01-01', 'P', 'Pengusaha', 'Jakarta', 'vina@email.com', '089833334501', '', ''),
('member04', '123', 'Doni andreas', 201510080005, '1954-01-01', 'L', 'Karyawan', 'Medan', 'andreas@email.com', '081302011123', '', ''),
('member05', '123', 'Lukman S', 201510080002, '1960-01-01', 'L', 'PNS', 'Denpasar', 'lukman@email.com', '085213423100', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE IF NOT EXISTS `pinjaman` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jml_transaksi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`username`, `nama`, `tgl_transaksi`, `jml_transaksi`) VALUES
('member01', 'Ahmed ahmed', '2015-01-01', 225000),
('member01', 'Ahmed ahmed', '2015-01-01', 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabungan`
--

CREATE TABLE IF NOT EXISTS `tabungan` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tgl_tabungan` date NOT NULL,
  `jml_tabungan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabungan`
--

INSERT INTO `tabungan` (`username`, `nama`, `tgl_tabungan`, `jml_tabungan`) VALUES
('member01', 'Ahmed ahmed', '2015-01-01', 500000),
('member01', 'Ahmed ahmed', '2015-01-01', 250000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
 ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `nik` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
