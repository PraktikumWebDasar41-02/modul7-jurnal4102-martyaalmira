-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal7`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `motto_hidup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nama`, `nim`, `tgl_lahir`, `jenis_kelamin`, `prodi`, `fakultas`, `asal`, `motto_hidup`) VALUES
('martya', '123', '2018-10-19', '', 'mi', 'on', 'a', ''),
('maret', '234', '2017-07-16', 'p', 'if', 'on', 'f', 'g'),
('khmb', '123', '2018-10-19', 'Laki-laki', 'if', 'fit', 'a', 'h'),
('maret', '234', '2017-07-16', 'p', 'if', 'on', 'f', 'g'),
('almira', '456', '2003-09-19', 'Perempuan', 'ti', 'fte', 'f', 'tttt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
