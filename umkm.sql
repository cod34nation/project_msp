-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mar 2016 pada 10.35
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agustus`
--

CREATE TABLE IF NOT EXISTS `agustus` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `april`
--

CREATE TABLE IF NOT EXISTS `april` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_satu_tahun`
--

CREATE TABLE IF NOT EXISTS `data_satu_tahun` (
  `pendapatan` bigint(20) NOT NULL,
  `beban` bigint(20) NOT NULL,
  `laba_kotor` bigint(20) NOT NULL,
  `pajak` bigint(20) NOT NULL,
  `laba_setelah_pajak` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL,
  `laba_sebelum_zakat` bigint(20) NOT NULL,
  `zakat` bigint(20) NOT NULL,
  `laba_bersih` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `desember`
--

CREATE TABLE IF NOT EXISTS `desember` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `februari`
--

CREATE TABLE IF NOT EXISTS `februari` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `januari`
--

CREATE TABLE IF NOT EXISTS `januari` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `juli`
--

CREATE TABLE IF NOT EXISTS `juli` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `juni`
--

CREATE TABLE IF NOT EXISTS `juni` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama_umkm` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jenis_usaha` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `maret`
--

CREATE TABLE IF NOT EXISTS `maret` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mei`
--

CREATE TABLE IF NOT EXISTS `mei` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `november`
--

CREATE TABLE IF NOT EXISTS `november` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oktober`
--

CREATE TABLE IF NOT EXISTS `oktober` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `september`
--

CREATE TABLE IF NOT EXISTS `september` (
  `id_user` varchar(10) NOT NULL,
  `omset` bigint(20) NOT NULL,
  `biaya` bigint(20) NOT NULL,
  `utang` bigint(20) NOT NULL,
  `modal` bigint(20) NOT NULL,
  `laba` bigint(20) NOT NULL,
  `bangunan_tanah` bigint(20) NOT NULL,
  `prive` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
