-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Jan 2017 pada 20.16
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `level`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Mahrus Khomaini'),
('admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin', 'Habib Sahal Khomaini'),
('admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin', 'Fayruz Rayga Khomaini'),
('admin4', 'admin4', 'admin', 'Sugeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`, `nama_ayah`, `nama_ibu`) VALUES
('12121262', 'Dewi Lestari', 'Perempuan', 'Bandung', '1997-07-17', 'Jakarta', 'Dendi', 'Heni'),
('12212322', 'Heni Wati', 'Perempuan', 'Malang', '1996-09-09', 'Jakarta', 'Edo', 'Yuni'),
('12323245', 'Indri Rahayu', 'Perempuan', 'Malang', '1994-02-02', 'Malang', 'Sugeng', 'Heni'),
('12382212', 'Sugeng Putro', 'Laki - Laki', 'Malang', '1995-08-18', 'Malang', 'Darmaji', 'Yuli'),
('13291722', 'Dedi Hermawan Putra', 'Laki - Laki', 'Malang', '1997-08-06', 'Blitar', 'Hedi', 'Heni'),
('14201021', 'Arista Septiana Dewi', 'Perempuan', 'Situbondo', '1996-06-12', 'Malang', 'Dani', 'Heni'),
('14201064', 'Rian Priskanova', 'Laki - Laki', 'Malang', '1996-05-08', 'Malang', 'Sugianto', 'Rina'),
('14201073', 'Rian Tani Hermantio', 'Laki - Laki', 'Malang', '1995-05-10', 'Surabaya', 'Doni', 'Indris'),
('14201075', 'Mahrus Khomaini', 'Laki - Laki', 'Sungai Durian', '1995-07-12', 'Malang', 'Muhammad Makky', 'Rusminah'),
('14201076', 'Muhammad Indris', 'Laki - Laki', 'Blitar', '1998-07-05', 'Malang', 'Sugeng', 'Dewi Sakinah'),
('14201077', 'Muhammad Yusuf', 'Laki - Laki', 'Malang', '1994-06-14', 'Malang', 'Sigit', 'Donita'),
('23239822', 'Muhammad Musfafa', 'Laki - Laki', 'Banjarmasin', '1998-12-02', 'Banjarmasin', 'Ahmat Tani', 'Tina'),
('32323822', 'Lingga Dewi Ramadhani', 'Perempuan', 'Malang', '1995-07-05', 'Malang', 'Ramadhan', 'Dewi'),
('45493876', 'Devi Rahayu', 'Perempuan', 'Surabaya', '1997-02-21', 'Bandung', 'Antoni', 'Sakinah'),
('54355467', 'Ramadhan Ade', 'Laki - Laki', 'Jambi', '1994-06-07', 'Bandung', 'SigitnPurnomo', 'Dewi Satina'),
('72129377', 'Achmad Dani Saputra', 'Laki - Laki', 'Bandung', '1998-12-19', 'Malang', 'Eko Aji', 'Tanti'),
('75675667', 'Eko Ramadhan', 'Laki - Laki', 'Jakarta', '1997-12-08', 'Surabaya', 'Darji Santo', 'Santi Putirani'),
('76589144', 'Muhammad Nasution Putra', 'Laki - Laki', 'Banjarmasin', '1997-03-09', 'Blitar', 'Sodik', 'Dewilah'),
('76886790', 'Arka Jaya Romadhon', 'Laki - Laki', 'Bandung', '1997-07-22', 'Bandung', 'Sutisna', 'Eni'),
('78659488', 'Taufiqi Maulana', 'Laki - Laki', 'Blitar', '1996-07-08', 'Surabaya', 'Achmat', 'Heni'),
('83019298', 'Dani Prasetyo Ramadhan', 'Laki - Laki', 'Malang', '1998-06-11', 'Malang', 'Darmaji', 'Hardiana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
