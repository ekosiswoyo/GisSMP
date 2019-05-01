-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 06:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_lahan`
--

CREATE TABLE `lokasi_lahan` (
  `id` int(11) NOT NULL,
  `nama_lokasi` varchar(255) NOT NULL,
  `kecamatan` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `warna` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `polygon` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_lahan`
--

INSERT INTO `lokasi_lahan` (`id`, `nama_lokasi`, `kecamatan`, `alamat`, `warna`, `keterangan`, `polygon`, `latitude`, `longitude`) VALUES
(7, 'Sendana', 1, 'Sendana', '#f20a0a', 'zasdadasdasd', '-3.038599,120.109322 -3.038599,120.109322 -3.056378,120.212849 -3.086393,120.140044', '-3.001080', '120.182660'),
(9, 'Mungkajang', 2, 'Mungkajang', '#f2610a', 'sadasdasd', '-2.979323,120.183504 -3.019438,120.181101 -3.050810,120.217842 -3.029551,120.223849', '-3.001080', '120.182660'),
(10, 'Bara ', 3, 'Bara ', '#f2f00a', 'czxczxczxczxc', '-2.928969,120.149948 -2.977999,120.183081 -2.954511,120.213297 -2.927596,120.181363', '-3.001080', '120.182660'),
(11, 'Tellu Wanua', 4, 'Tellu Wanua', '#0aa2b5', 'assasdasdasd', '-2.910842,120.115398 -2.895406,120.217545 -2.953703,120.230773 -2.955418,120.212398', '-3.001080', '120.182660'),
(12, 'Wara Barats', 5, 'Wara Barat', '#f30808', 'adasd', '-2.995323,120.189602 -2.906512,120.148722 -2.953837,120.047778 -2.953837,120.047778', '-3.020790', '120.168860'),
(13, 'Wara Timur', 6, 'Wara Timur', '#f308d6', 'fdsfs', '-2.987502,120.202563 -3.015959,120.222049 -3.018874,120.212864 -2.988959,120.196469', '-3.020790', '120.168860'),
(14, 'Wara Selatan ', 7, 'Wara Selatan ', '#291bf5', 'adasd', '-3.014557,120.198795 -3.011728,120.204803 -3.016527,120.221970 -3.042413,120.229009 -3.057412,120.213472 -3.045241,120.201455 -3.030328,120.196735 -3.014557,120.199138', '-3.020790', '120.168860'),
(16, 'Wara Utara', 8, 'Wara Utara', '#1ba9f5', 'adasd', '', '-2.968320', '120.180100'),
(17, 'Wara ', 9, 'Wara ', '#1bf5bb', 'fdsfs', '', '-3.020790', '120.168860');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_dinas` varchar(100) NOT NULL,
  `sejarah` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(15) NOT NULL,
  `web` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_dinas`, `sejarah`, `visi`, `misi`, `alamat`, `telp`, `web`, `email`) VALUES
(1, 'Dinas Pendidikan Kota Palopo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Etiam quis libero justo. Nunc felis libero, bibendum ac sem tristique, pharetra euismod magna. Donec vel porttitor nisl. Ut sollicitudin blandit aliquam. Donec sem nibh, luctus vel placerat sed, commodo vel odio. Aenean malesuada ac nibh ac lacinia. Vestibulum venenatis nisi quis mi vestibulum, sed scelerisque quam ultricies. Proin dignissim sapien vel nunc suscipit eleifend. Donec sem est, aliquam nec placerat vitae, vulputate vitae lorem. Ut finibus maximus euismod. Vestibulum leo ligula, porta convallis massa sit amet, facilisis fringilla magna. Fusce imperdiet nisi risus, quis ornare tortor vehicula eget. Nullam luctus risus dictum lorem finibus, a placerat sapien lobortis. Praesent tempor fermentum egestas. Aliquam imperdiet, purus id dapibus consectetur, lectus neque pharetra sem, vitae semper mi turpis ac sem. Cras vitae ligula vitae erat luctus maximus.', 'Etiam quis libero justo. Nunc felis libero, bibendum ac sem tristique, pharetra euismod magna. Donec vel porttitor nisl. Ut sollicitudin blandit aliquam. Donec sem nibh, luctus vel placerat sed, commodo vel odio. Aenean malesuada ac nibh ac lacinia. Vestibulum venenatis nisi quis mi vestibulum, sed scelerisque quam ultricies. Proin dignissim sapien vel nunc suscipit eleifend. Donec sem est, aliquam nec placerat vitae, vulputate vitae lorem. Ut finibus maximus euismod. Vestibulum leo ligula, porta convallis massa sit amet, facilisis fringilla magna. Fusce imperdiet nisi risus, quis ornare tortor vehicula eget. Nullam luctus risus dictum lorem finibus, a placerat sapien lobortis. Praesent tempor fermentum egestas. Aliquam imperdiet, purus id dapibus consectetur, lectus neque pharetra sem, vitae semper mi turpis ac sem. Cras vitae ligula vitae erat luctus maximus.', 'Etiam quis libero justo. Nunc felis libero, bibendum ac sem tristique, pharetra euismod magna. Donec vel porttitor nisl. Ut sollicitudin blandit aliquam. Donec sem nibh, luctus vel placerat sed, commodo vel odio. Aenean malesuada ac nibh ac lacinia. Vestibulum venenatis nisi quis mi vestibulum, sed scelerisque quam ultricies. Proin dignissim sapien vel nunc suscipit eleifend. Donec sem est, aliquam nec placerat vitae, vulputate vitae lorem. Ut finibus maximus euismod. Vestibulum leo ligula, porta convallis massa sit amet, facilisis fringilla magna. Fusce imperdiet nisi risus, quis ornare tortor vehicula eget. Nullam luctus risus dictum lorem finibus, a placerat sapien lobortis. Praesent tempor fermentum egestas. Aliquam imperdiet, purus id dapibus consectetur, lectus neque pharetra sem, vitae semper mi turpis ac sem. Cras vitae ligula vitae erat luctus maximus.', 857878797, 'palopo.com', 'admin@palopo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kecamatan`
--

CREATE TABLE `tb_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `koor1` varchar(100) NOT NULL,
  `koor2` varchar(100) NOT NULL,
  `koor3` varchar(100) NOT NULL,
  `koor4` varchar(100) NOT NULL,
  `koor5` varchar(100) NOT NULL,
  `koor6` varchar(100) NOT NULL,
  `koor7` varchar(100) NOT NULL,
  `koor8` varchar(100) NOT NULL,
  `koor9` varchar(100) NOT NULL,
  `koor10` varchar(100) NOT NULL,
  `bla` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_kecamatan`, `koor1`, `koor2`, `koor3`, `koor4`, `koor5`, `koor6`, `koor7`, `koor8`, `koor9`, `koor10`, `bla`) VALUES
(1, 'as\r\n', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilaissn`
--

CREATE TABLE `tb_nilaissn` (
  `id_nilai_ssn` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_standar` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_periode` int(11) NOT NULL,
  `skor_ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilaissn`
--

INSERT INTO `tb_nilaissn` (`id_nilai_ssn`, `id_kecamatan`, `id_standar`, `id_sekolah`, `id_periode`, `skor_ssn`) VALUES
(4, 9, 1, 3, 1, 20),
(5, 9, 1, 3, 1, 90),
(7, 7, 1, 3, 1, 50),
(8, 10, 1, 3, 1, 85),
(9, 10, 2, 2, 1, 75);

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(11) NOT NULL,
  `tahun_awal` int(11) NOT NULL,
  `tahun_akhir` int(11) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `tahun_awal`, `tahun_akhir`, `aktif`) VALUES
(1, 20189, 20191, 1),
(3, 2020, 2021, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `id_kecamatan` int(11) DEFAULT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `kepalasekolah` varchar(100) NOT NULL,
  `statussekolah` varchar(100) NOT NULL,
  `standarsekolah` varchar(100) NOT NULL,
  `lat` double NOT NULL,
  `lang` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `status`, `kelurahan`, `id_kecamatan`, `kota`, `provinsi`, `kodepos`, `telepon`, `fax`, `email`, `website`, `kepalasekolah`, `statussekolah`, `standarsekolah`, `lat`, `lang`) VALUES
(2, 'SLTP Palopo', '2', '3', 4, '5', '6', 7, '8', '9', '10', '11', '12', '131', '14', -7.03096085587313, 109.57858332898468),
(3, 'SMK 1 SRAGIda1321', 'jh', 'j', 1, 'h', 'h', 0, 'h', 'sa', 'j@v.om', 'j', 's', 'k', 'j', -3.00108003616333, 120.18266296386719),
(4, 'da', 'da', 'da', 0, 'dsa', 'sda', 111, '1231', 'dsada', 'admin1@email.com', 'dasd', 'adas', 'das', 'sda', -7.03096085587313, 109.57858332898468);

-- --------------------------------------------------------

--
-- Table structure for table `tb_standar`
--

CREATE TABLE `tb_standar` (
  `id_standar` int(11) NOT NULL,
  `nama_standar` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_standar`
--

INSERT INTO `tb_standar` (`id_standar`, `nama_standar`, `link`) VALUES
(1, 'Standar Isi', 'dsad'),
(2, 'Standar Proses', ''),
(3, 'Standar Kompetensi Lulusan', ''),
(4, 'Standar Pendidik dan Tenaga Kependidikan', ''),
(5, 'Standar Sarana dan Prasarana', ''),
(6, 'Standar Pengelolaan\r\n', ''),
(7, 'Standar Pembiayaan', ''),
(8, 'Standar Penilaian', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `level` varchar(100) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  `id_session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`, `id_session`) VALUES
('KD001', 'c3VwZXI=', 'Kepala Dinas', 'kepdin@gmail.com', '080888888', 'Kepala Dinas', 'N', ''),
('SSN01', 'YWRtaW4=', 'Eko Siswoyofdsf', 'eko@admin.com', '0877777', 'Tim SSN', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi_lahan`
--
ALTER TABLE `lokasi_lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tb_nilaissn`
--
ALTER TABLE `tb_nilaissn`
  ADD PRIMARY KEY (`id_nilai_ssn`),
  ADD KEY `id_periode` (`id_periode`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_standar` (`id_standar`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `tb_standar`
--
ALTER TABLE `tb_standar`
  ADD PRIMARY KEY (`id_standar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi_lahan`
--
ALTER TABLE `lokasi_lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kecamatan`
--
ALTER TABLE `tb_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_nilaissn`
--
ALTER TABLE `tb_nilaissn`
  MODIFY `id_nilai_ssn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_standar`
--
ALTER TABLE `tb_standar`
  MODIFY `id_standar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_nilaissn`
--
ALTER TABLE `tb_nilaissn`
  ADD CONSTRAINT `tb_nilaissn_ibfk_1` FOREIGN KEY (`id_periode`) REFERENCES `tb_periode` (`id_periode`),
  ADD CONSTRAINT `tb_nilaissn_ibfk_2` FOREIGN KEY (`id_sekolah`) REFERENCES `tb_sekolah` (`id_sekolah`),
  ADD CONSTRAINT `tb_nilaissn_ibfk_3` FOREIGN KEY (`id_standar`) REFERENCES `tb_standar` (`id_standar`),
  ADD CONSTRAINT `tb_nilaissn_ibfk_4` FOREIGN KEY (`id_kecamatan`) REFERENCES `lokasi_lahan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
