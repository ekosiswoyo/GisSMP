-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2017 at 09:18 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(3) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `anggota` int(5) NOT NULL,
  `telp` char(19) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `level` enum('admin','admin super') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kode` char(5) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `alamat`, `ketua`, `anggota`, `telp`, `tempat`, `level`, `username`, `password`, `kode`) VALUES
(2, 'WATUIRENG', 'JL.RAYA LAMBUR, KANDANGSERANG', 'H.DANU', 20, '+62 085-842-214-280', 'WATUIRENG', 'admin', 'admin1', 'admin', 'OW001'),
(3, 'WANA CITA LESTARI', 'DS.KAYUPURING, PETUNGKRIYONO', 'TARYONO', 18, '085878344314', 'WELORIVER', 'admin', 'admin2', 'admin', 'OW002'),
(4, 'LUMBUNG LESTARI', 'DS.TLOGOPAKIS, PETUNGKRIYONO', 'ABDULAH', 51, '085726864560', 'CURUGBAJING', 'admin', 'admin3', 'admin', 'OW003'),
(5, 'ARGO TIRTA', 'DS.CURUGMUNCAR, PETUNGKRIYONO', 'CAHYADI', 22, '085225126169', 'CURUG MUNCAR', 'admin', 'admin4', 'admin', 'OW004'),
(6, 'DURIAN EMAS', 'DS.LOLONG, KARANGANYAR', 'SAIFUL MULUK', 23, '0852242783080', 'KEBUN DURIAN LOLONG, RAFTING', 'admin', 'admin5', 'admin', 'OW005'),
(7, 'MAJU MAKMUR', 'DS.JOLOTIGO, TALUN', 'SUYANTA', 18, '08122575012', 'CURUG BIDADARI', '', '', '', '0'),
(8, 'JOGOKALI', 'DS.LINGGOASRI, KAJEN', 'TIRTONADI', 14, '085842034377', 'KALIPAINGAN', '', '', '', '0'),
(9, 'WISATA BATIK KEMPLONG', 'DS.KEMPLONG, WIRADESA', 'M.FUAD', 36, '081226905080', 'KAMPUNG BATIK', '', 'admin6', 'admin', 'OW006'),
(10, 'SODONG LESTARI', 'DS.SAWANGAN, PANINGGARAN', 'NASOKHA', 28, '085201496841', 'CURUG SODONG', '', '', '', '0'),
(11, 'SIWATANG', 'DS.LAMBANGGELUN, PANINGGARAN', 'M.MAHDI HARIS', 20, '085842015664/08', 'CURUG SIWATANG', '', '', '', '0'),
(12, 'CURUG LAWE', 'DS.KASIMPAR, PETUNGKRIYONO', 'CASMANTO', 40, '082325844733', 'CURUG LAWE', 'admin', 'admin7', 'admin', 'OW007'),
(13, 'CURUG JLARANG', 'DS.SIDOMULYO, LEBAKBARANG', 'SULISTIYONO', 19, '085226126575', 'CURUG JLARANG', '', '', '', '0'),
(24, 'Admin', 'Dinas Kepemudaan dan Olahraga dan Pariwisata', '', 0, '', '', 'admin super', 'super', 'super', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE IF NOT EXISTS `tb_artikel` (
  `id_artikel` int(3) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `waktu` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `status_baca` int(1) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `kode` char(5) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul`, `isi_artikel`, `waktu`, `image`, `status`, `status_baca`, `nama_admin`, `kode`) VALUES
(3, 'Gratis Masuk Curug Lawe', 'Gratis masuk curug lawe selama bulan Maret 2017', '2017-03-10', '', 0, 0, '', ''),
(2, 'Seminar wirausaha pemuda banjir peserta', 'Seminar wirausaha pemuda dilaksanakan pada 7 September 2016 bertempat di aula kantor kementerian agama Kabupaten Pekalongan dibanjiri peserta. Seminar mengambil narasumber Diaz Arjun seorang pengusaha muda dari Solo dan Uswatun Khasanah yang merupakan ex peserta PWP dinporapar tahun 2013 yang berhasil menjadi owner mie level dan beberapa usaha lainnya.\r\n\r\n \r\n\r\nMenurut kasie perlindungan dan pembinaa pemuda Dinas Pemuda olahraga dan pariwisata Kabupaten Pekalongan Drs. Hadi Purwanto, M.Pd target peserta 120 orang Dihadiri lebih dari 150 orang peserta. Animo yang tinggi tersebut membuktikan bahwa minat pemuda untuk berwirausaha cukup tinggi.\r\n\r\nKegiatan tersebut tidak hanya seminar semata, karena seminar tersebut merupakan pembuka dan dilanjutkan dengan audisi untuk menyaring peserta sebanyak 40 orang yang akan mengikuti kontes ide bisnis. Dan selanjutnya mendapatkan pelatihan bisnis selama 3 hari. ', '2016-11-02', '', 0, 0, '', ''),
(4, '', '', '2017-05-20', 'Logo Kabupaten Pekalongan.jpg', 0, 0, '', ''),
(6, 'asdasd', 'asdasd', '2017-03-25', '', 0, 0, '', ''),
(7, 'asdasd', '123123', '2017-03-25', 'Logo Kabupaten Pekalongan.jpg', 0, 0, '', ''),
(8, 'polo', 'poli', '2017-04-28', 'transport.PNG', 0, 0, '', ''),
(9, 'aaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', '2017-04-28', '', 1, 0, '', ''),
(10, 'zzzzzzzzzzzzzzzzzzzzzzhsdhfjsd', ' xxxxxxxxxxxxxxxxxxx" ', '2017-05-19', 'hotel.PNG', 0, 0, 'WATUIRENG', 'OW001'),
(11, 'polo', 'jlashdkljasdljaksdl', '2017-05-11', '', 0, 0, '', ''),
(12, 'as', 'asd', '2017-05-11', '', 0, 0, '', ''),
(13, 'kajen', 'kajen hebat', '2017-05-19', 'Logo Kabupaten Pekalongan.jpg', 1, 0, '', ''),
(14, 'asd', 'asdasd', '2017-05-19', '', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_atm`
--

CREATE TABLE IF NOT EXISTS `tb_atm` (
  `id_atm` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `keterangan` text NOT NULL,
  `kategori` enum('bri','bca','bni','bjateng','bmandiri') DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_atm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `tb_atm`
--

INSERT INTO `tb_atm` (`id_atm`, `nama`, `alamat`, `keterangan`, `kategori`, `image`, `langitude`, `latitude`) VALUES
(26, 'ATM BANK BRI', 'Jl. Kerinci, Podosugih, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111', '', 'bri', NULL, 109.594, -6.89633),
(23, 'ATM BANK BRI', ' Jl. Gatot Subroto, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bri', NULL, 109.657, -6.91453),
(24, 'ATM BRI', 'Jl. Gatot Subroto, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bri', NULL, 109.589, -6.91566),
(25, 'ATM BRI', 'Jl. Dr. Sutomo, Karangmalang, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51121', '', 'bri', NULL, 109.624, -6.90328),
(30, 'BANK BRI ATM', 'Jl. Gajah Mada Bar. No.125, Tirto, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', '', 'bri', NULL, 109.582, -6.88956),
(29, 'BANK BRI ATM', ' Jl. Sriwijaya, Medono, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51119', '', 'bri', NULL, 109.59, -6.89721),
(28, 'Bank BRI', 'Jl. Mandurejo Kajen No. 31, Kajen, Tj. Kulon, Kajen, Pekalongan, Jawa Tengah 51161', '', 'bri', NULL, 109.526, -7.0278),
(27, 'ATM Bank BRI', 'Bank Rakyat Indonesia, No.21, Sel.,, Gg. IV, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51171', '', 'bri', NULL, 109.589, -6.91571),
(21, 'ATM BRI', 'Jl. Urip Sumoharjo, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bri', NULL, 109.661, -6.91157),
(22, 'ATM BRI', 'Jalan Urip Sumoharjo, Podosugih, Pekalongan Barat, Pekalongan, Jawa Tengah 51117', '', 'bri', NULL, 109.665, -6.90207),
(31, 'BANK BRI', 'Jl. Gatot Subroto, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bri', NULL, 109.589, -6.91568),
(32, 'BRI Unit Sragi', 'Sragi, Pekalongan, jawa tengah 51155', '', 'bri', NULL, 109.496, -6.92636),
(33, 'BANK BRI ATM', 'Jl. Hasanudin, Sugihwaras, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51126', '', 'bri', NULL, 109.606, -6.88739),
(34, 'Bank BRI', 'Bank BRI', '', 'bri', NULL, 109.529, -6.89327),
(35, 'Bank BRI Syariah Pekalongan', 'Jalan Haji Agus Salim No.50, Sugihwaras, Pekalongan Timur, Kota Pekalongan, Jawa Tengah 51129', '', 'bri', NULL, 109.608, -6.88586),
(36, 'ATM Bank BCA 117P-Alfamart Kajen', 'Jl. Raya Kutorejo, Kajen, Pekalongan, Jawa Tengah 51161', '', 'bca', NULL, 109.509, -7.03049),
(37, 'BCA', 'Jalan. Diponegoro, Dukuh, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146', '', 'bca', NULL, 109.601, -6.88211),
(38, 'ATM BCA', 'Mall Pekalongan, Jalan. Sultan Agung, Sampangan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51126', '', 'bca', NULL, 109.605, -6.88199),
(39, 'ATM BCA', 'Jl. Dr. Sutomo, Noyontaan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51121', '', 'bri', NULL, 109.612, -6.90141),
(40, 'ATM BCA', 'Jl. Gatot Subroto, Banyurip Alit, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bca', NULL, 109.588, -6.91791),
(41, 'ATM BCA', ' Alfamart, Jalan HOS Cokro Aminoto, Kuripan Lor, Pekalongan Selatan, Kuripan Lor, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51129', '', 'bca', NULL, 109.607, -6.90881),
(42, 'ATM BCA', 'Jalan Gajah Mada, Kramatsari, Pekalongan Barat, Kramatsari, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', '', 'bca', NULL, 109.59, -6.8891),
(43, 'ATM BCA', 'Ambokembang, Kedungwuni, Pekalongan, Central Java 51173', '', 'bca', NULL, 109.58, -6.95467),
(44, 'ATM BCA', ' Alfamart, Jalan Bina Griya Raya, Medono, Pekalongan Barat, Medono, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111', '', 'bca', NULL, 109.591, -6.90232),
(45, 'ATM BCA', 'Jl. Urip Sumoharjo, Medono, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51111', '', 'bca', NULL, 109.594, -6.90343),
(46, 'ATM BCA BOJONG', 'Wiroditan, Bojong, Pekalongan,Jawa tengah', '', 'bca', NULL, 109.538, -6.95528),
(47, 'ATM BCA', 'Jalan. Sultan Agung, Sampangan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51126', '', 'bca', NULL, 109.605, -6.88416),
(48, 'ATM BCA', 'Jl. Kh. Mas Mansyur, Bendan, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51119', '', 'bca', NULL, 109.598, -6.89115),
(49, 'ATM BCA', 'Jalan. KH. Wahid Hasyim, Kauman, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51127', '', 'bca', NULL, 109.605, -6.89092),
(50, 'ATM BCA Wiradesa', 'ATM BCA Wiradesa', '', 'bca', NULL, 109.541, -6.89189),
(51, 'ATM BCA', 'Jl. Dr. Sutomo, Karangmalang, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51122', '', 'bca', NULL, 109.621, -6.90288),
(52, 'ATM BCA', 'Jl. Veteran, Dukuh, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51145', '', 'bca', NULL, 109.598, -6.88098),
(53, 'ATM BCA', 'Kota Pekalongan,, Jl. Urip Sumoharjo No.270, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51132', '', 'bca', NULL, 109.59, -6.9143),
(54, 'ATM BNI SPBU KAJEN', 'Jalan Raya Diponegoro, Gejlig, Kajen, Pekalongan, Jawa Tengah 51161', '', 'bni', NULL, 109.516, -7.02146),
(55, 'ATM BNI SPBU KAJEN', 'Jalan Raya Kutorejo, Pekiringan Ageng, Kajen, Pekalongan, Jawa Tengah 51161', '', 'bni', NULL, 109.511, -7.06347),
(56, 'ATM BNI KOPERASI BATIK WONOPRINGGO', 'JL. Gembong Raya, Kedungwuni, Wonopringgo, Rowokembu, Wonopringgo, Pekalongan, Jawa Tengah 51173', '', 'bni', NULL, 109.564, -6.99478),
(57, 'BNI PEKALONGAN', ' Jalan. Imam Bonjol No. 59, Kraton Kidul, Pekalongan Bar., Kota Pekalongan, Jawa Timur 51145', '', 'bni', NULL, 109.599, -6.88653),
(58, 'ATM BNI', 'Jl. Raya Kedungwuni No.29, Kedungwuni Tim., Kedungwuni, Pekalongan, Jawa Tengah 51173', '', 'bni', NULL, 109.577, -6.96359),
(59, 'ATM BNI RS. ISLAM PEKAJANGAN', 'RSI PEKAJANGAN, Ambokembang, Kedungwuni, Pekalongan, Jawa Tengah 51173', '', 'bni', NULL, 109.581, -6.95542),
(60, 'ATM BNI ALFAMART KARTINI', 'Jalan. Ra. Kartini, Sokorejo, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51128', '', 'bni', NULL, 109.619, -6.90448),
(61, 'ATM BNI', 'Siwalan, Pekalongan, Central Java 52364', '', 'bni', NULL, 109.521, -6.89188),
(62, 'Atm BNI', 'Jl. Mayor Jend. Siswondo Parman No.17, Kauman, Wiradesa, Pekalongan, Jawa Tengah 51127', '', 'bni', NULL, 109.541, -6.89197),
(63, 'BNI ATM', 'Jl. Gatot Subroto, Banyurip Alit, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bni', NULL, 109.589, -6.91713),
(64, 'ATM BNI RSB AISIYAH PEKALONGAN', 'Pekajangan, Kedungwuni, Pekalongan, Central Java 51173', '', 'bni', NULL, 109.583, -6.94677),
(65, 'ATM BNI', 'Jl. Kh. Mas Mansyur, Bendan, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51119', '', 'bni', NULL, 109.597, -6.89206),
(66, 'Bank Jateng Cabang Kajen', 'Tanjungsari, Kajen, Pekalongan, Jawa Tengah 51161', '', 'bjateng', NULL, 109.523, -7.02754),
(67, 'ATM BANK JATENG KECAMATAN KESESI KAB. PEKALONGAN', 'Kesesi, Pekalongan, Jawa Tengah 51162', '', 'bjateng', NULL, 109.439, -7.02569),
(68, 'ATM BANK JATENG KECAMATAN BOJONG', 'Jl. Raya Bojong, Bojong Minggir, Bojong, Pekalongan, Jawa Tengah 51156', '', 'bjateng', NULL, 109.538, -6.95198),
(69, 'ATM Bank Jateng', 'Jalan Alun-Alun Utara, Keputran, Pekalongan Timur, Kota Pekalongan, Jawa Tengah 51128', '', 'bjateng', NULL, 109.607, -6.89001),
(70, 'ATM Bank Jateng', 'Jl. Karangsari No.3, Karangmalang, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51122', '', 'bjateng', NULL, 109.624, -6.90318),
(71, 'ATM Mandiri', '\r\nJl. Urip Sumoharjo, Kradenan, Pekalongan Sel., Kota Pekalongan, Jawa Tengah 51117', '', 'bmandiri', NULL, -6.91191, 109.591);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bengkel`
--

CREATE TABLE IF NOT EXISTS `tb_bengkel` (
  `id_bengkel` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `telp` char(19) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_bengkel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_bengkel`
--

INSERT INTO `tb_bengkel` (`id_bengkel`, `nama`, `alamat`, `keterangan`, `telp`, `image`, `langitude`, `latitude`) VALUES
(2, 'ahassss2', 'kajen2', '  bengkel motor2', '12312399', 'hotel.PNG', 109.582, -7.0281),
(4, 'bengkel motor', 'kajen', '  bengkel motor2', '+62 123-432-123-133', 'spbu.PNG', 109.583, -7.02802);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotel`
--

CREATE TABLE IF NOT EXISTS `tb_hotel` (
  `id_hotel` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `telp` char(19) NOT NULL,
  `image` varchar(100) NOT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_hotel`
--

INSERT INTO `tb_hotel` (`id_hotel`, `nama`, `alamat`, `keterangan`, `telp`, `image`, `langitude`, `latitude`) VALUES
(2, 'Marlin Hotel', 'Jln Raya No.25, Podo, Wiradesa, Pekalongan, Jawa Tengah 51173', '', '', '', 109.443, -7.02761),
(3, 'Hotel Sahid Mandarin Pekalongan', ' Jl. Dr. Sutomo (Dupan Square Complex), Baros, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51114', 'Hotelku\r\n', '(0285) 4416505', '', 109.443, -7.02761),
(4, 'Nirwana Hotel', 'Jl. Dr. Wahidin No.11, Poncol, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51101', '', '(0285) 420101', '', 109.647, -6.89894),
(5, 'Hotel Dafam Pekalongan', 'Jl. Urip Sumoharjo No.53, Medono, Pekalongan, Kota Pekalongan, Jawa Tengah 51111', '', '(0285) 4411555', '', 109.656, -6.91001),
(6, 'Hotel Namira Syariah', 'Jalan Dr. Cipto Mangunkusomo No.70, Pekalongan Timur, Poncol, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51122', '', '(0285) 4460888', '', 109.67, -6.89259),
(7, 'Hotel Pekalongan', 'Jl. Hayam Wuruk No.158, Sampangan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51119', '', ' (0285) 421021', '', 109.671, -6.89103),
(8, 'Istana Hotel', 'Jl. Gajah Mada Bar., Kramatsari, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', '', '(0285) 423581', '', 109.665, -6.90143),
(9, 'Hotel Santika Pekalongan', 'Jalan Gajah Mada Barat No. 7A, Kramatsari, Pekalongan Barat, Kramatsari, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', '', '(0285) 4460600', '', 109.665, -6.90143);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rmibadah`
--

CREATE TABLE IF NOT EXISTS `tb_rmibadah` (
  `id_rmibadah` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `keterangan` text NOT NULL,
  `kategori` enum('masjid','gereja','vihara','pura') DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_rmibadah`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tb_rmibadah`
--

INSERT INTO `tb_rmibadah` (`id_rmibadah`, `nama`, `alamat`, `keterangan`, `kategori`, `image`, `langitude`, `latitude`) VALUES
(27, 'GKJ Immanuel Karanganyar', 'Kajen, Pekalongan, PO. Box. 1, Kajen, Pekalongan, Central Java 51161', '', 'gereja', 'gereja.jpg', 109.529, -7.03204),
(28, 'Gereja Katolik Santo Yohanes', 'Jl. Raya Karanganyar No.17, Kulu, Kec. Karanganyar, Pekalongan, Jawa Tengah 51182', '', 'gereja', 'gereja.jpg', 109.529, -7.03204),
(26, 'Masjid Al Muhajirin', 'Jalan. Bahagia, Kraton Lor, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51145', '', 'masjid', 'masjid.jpg', 109.666, -6.89013),
(25, 'Masjid Asy Syuhada', 'Bendan, West Pekalongan, Pekalongan City, Central Java 51119', '', 'masjid', 'masjid.jpg', 109.666, -6.89013),
(23, 'Masjid Agung Kauman Pekalongan', 'Jalan. KH. Wahid Hasyim, Kauman, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51127', '', 'masjid', 'masjid.jpg', 109.666, -6.89013),
(20, 'Masjid Jami'' Kajen', 'Kajen, Pekalongan, Central Java 51161', '', 'masjid', 'masjid.jpg', 109.574, -7.03052),
(21, 'Masjid Al Khuzaemah', 'Kebon Agung, Kajen, Pekalongan, Central Java 51161', '', 'masjid', 'masjid.jpg', 109.577, -7.0286),
(19, 'Masjid Agung Kajen', '\r\nNyamok, Kajen, Pekalongan, Central Java 51161', '', 'masjid', 'masjid.jpg', 109.575, -7.02798),
(29, 'Gereja Kristen Jawa Immanuel', 'JL Raya Kulu 3, RT 001 RW : 0:1, Karang Gondang, Kajen, Pekalongan, Jawa Tengah 51182', '', 'gereja', 'gereja.jpg', 109.529, -7.03204),
(30, 'Gereja Bethel Pekalongan', 'JL. P Diponegoro No.37, Dukuh, North Pekalongan, Pekalongan City, Central Java 51146', '', 'gereja', 'gereja.jpg', 109.673, -6.87972),
(31, 'Gereja Katolik St.Petrus', 'Jl. Blimbing No. 1, Sampangan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51126', '', 'gereja', 'gereja.jpg', 109.673, -6.87972),
(32, 'Vihara Vajra Bumi Pekalongan', 'Jl. Blimbing No.96, Sampangan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51126', '', 'vihara', 'vihara.jpg', 109.666, -6.87972),
(33, 'Wihara Bodhi  Dharma', 'Jl. Rajawali Tengah No.2, Panjang Wetan, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141', '', 'vihara', 'vihara.jpg', 109.666, -6.87972),
(34, 'Pura Kalingga Satya Dharma', 'Linggasari Kajen, Dukuh, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51145', '', 'pura', 'pura.jpg', 109.667, -6.87168),
(36, 'masjid sibedug', 'sibedug', 'buka 24 jam', 'masjid', 'hotel.PNG', 109.581, -7.02542),
(37, 'masjid akn', 'Kajen', 'buka 24 jam', 'masjid', 'Logo Kabupaten Pekalongan.jpg', 109.579, -7.02721),
(38, 'aSas', 'asaS', 'ASDASD', 'masjid', 'transport.PNG', 109.582, -7.02759);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rmmakan`
--

CREATE TABLE IF NOT EXISTS `tb_rmmakan` (
  `id_rmmakan` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_rmmakan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_rmmakan`
--

INSERT INTO `tb_rmmakan` (`id_rmmakan`, `nama`, `alamat`, `keterangan`, `image`, `langitude`, `latitude`) VALUES
(2, 'Teras Bali', 'Jalan H. Agus Salim No. 72, Pekalongan Timur, Poncol, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51129', '', '', 109.608, -6.88822),
(3, 'Rumah Makan Sop Buntut Bu Leman', 'Jl. Dr. Wahidin No.91 D, Noyontaan, Pekalongan Timur, Noyontaan, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51129', '', '', 109.61, -6.90063),
(4, 'Rumah Makan Selaras', 'Jl. Sriwijaya No.2, Bendan, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51119', '', '', 109.59, -6.89665),
(5, 'Cafe Teras Oemah Tua', 'Jalan Haji Agus Salim No. 37, Pekalongan Timur, Sugihwaras, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51129', '', '', 109.608, -6.88536),
(6, 'Rumah Makan Mbok Berek Ny Sunardi', 'Jl. Raya Tj. No.14, Sidorejo, Tirto, Pekalongan, Jawa Tengah 51151', '', '', 109.573, -6.89063),
(8, 'asdasdasd', 'asdasdasdasd', 'asdsadsadasdasd', '', 109.584, -7.02027);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rmsakit`
--

CREATE TABLE IF NOT EXISTS `tb_rmsakit` (
  `id_rmsakit` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `keterangan` text NOT NULL,
  `telp` char(19) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_rmsakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tb_rmsakit`
--

INSERT INTO `tb_rmsakit` (`id_rmsakit`, `nama`, `alamat`, `keterangan`, `telp`, `image`, `langitude`, `latitude`) VALUES
(4, 'RSU Budi Rahayu Pekalongan', 'Jl. Barito No. 5, Dukuh, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146', '', '285423491', NULL, 109.671, -6.8868),
(5, 'RSUD Kraton', 'Jl. Veteran, Dukuh, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51117', '', '285421621', NULL, 109.597, -6.88159),
(6, 'RUmah Sakit Siti Khodijah', 'Jl. Bandung, No. 39, Sugihwaras, Pekalongan Tim., Kota Pekalongan, Jawa Tengah 51129', '', '285422845', NULL, 109.607, -6.8862),
(7, 'RSUD Bendan', 'Jl. Sriwijaya No.2, Bendan, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51119', '', '285437222', NULL, 109.626, -6.89149),
(8, 'Rumah Sakit Ibu dan Anak Anugerah Pekalongan', 'Jl. P. Kemerdekaan No.3, Kramatsari, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51145', '', '285431491', NULL, 109.594, -6.88799),
(9, 'H.A. Djunaid', 'Jl. Pelita II, Buaran, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51117', '', '285436325', NULL, 109.581, -6.9117),
(10, 'RSUD Kajen Pekalongan', 'JL. Raya Karangsari, Karanganyar, 51182, Karangsari, Kec. Karanganyar, Pekalongan, Jawa Tengah 51182', '', '285385231', NULL, 109.547, -7.03007),
(11, 'RS Karomah Holistic', 'Jl. Gajah Mada Bar. No.124, Tirto, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51118', ' ', '+62 285-420-218-___', 'spbu.PNG', 109.582, -6.88924),
(12, 'Rumah Sakit Islam PKU Muhammadiyah Pekajangan', 'Jl. Raya Ambokembang No. 42-44, Kedungwuni, Ambokembang, Pekalongan, Jawa Tengah 51173', ' ', '285785133', 'Logo Kabupaten Pekalongan.jpg', 109.58, -6.95452);

-- --------------------------------------------------------

--
-- Table structure for table `tb_spbu`
--

CREATE TABLE IF NOT EXISTS `tb_spbu` (
  `id_spbu` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `keterangan` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_spbu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_spbu`
--

INSERT INTO `tb_spbu` (`id_spbu`, `nama`, `alamat`, `keterangan`, `image`, `langitude`, `latitude`) VALUES
(16, 'Pertamina Kertjiayan', 'Jl. Raya Kertijayan, Buaran, Kertijayan, Buaran, Pekalongan, Jawa Tengah 51171', '', 'spbu.png', 109.596, -6.94735),
(15, 'Pertamina Kesesi', 'Jl. Bahurekso, Kesesi, Pekalongan, Jawa Tengah 51162', '', 'spbu.png', 109.488, -6.98586),
(14, 'Pertamina Bojong', 'Jl. Raya Bojong, Bojong Minggir, Bojong, Pekalongan, Jawa Tengah 51156', '', 'spbu.png', 109.567, -6.96456),
(13, 'Pertamina Karanganyar', 'Karangsari, Kec. Karanganyar, Pekalongan, Jawa Tengah 51182', '', 'spbu.png', 109.553, -7.01705),
(12, 'Pertamina Kajen', ' Gejlig, Kajen, Pekalongan, Jawa Tengah 51161', '', 'spbu.png', 109.579, -7.01607),
(18, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', 'admin.PNG', 123123, 123123),
(19, 'asdasd1122', 'asdasdasdasd1122', 'dsf212312312322', 'hotel.PNG', 119.996, 9022);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE IF NOT EXISTS `tb_tamu` (
  `id_tamu` int(3) NOT NULL AUTO_INCREMENT,
  `nama_tamu` varchar(50) NOT NULL,
  `email_tamu` varchar(50) NOT NULL,
  `pesan_tamu` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(1) NOT NULL,
  `status_baca` int(1) NOT NULL,
  PRIMARY KEY (`id_tamu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`id_tamu`, `nama_tamu`, `email_tamu`, `pesan_tamu`, `tanggal`, `status`, `status_baca`) VALUES
(1, 'Eko', 'Eko@email.com', 'ini pekalongan ya?...', '2017-04-04', 0, 1),
(4, 'Nilam22', 'nilam@email.com', 'Yo men.. aku di pekalongan', '2017-04-04', 1, 1),
(5, 'emir', 'emir@g.com', 'cek', '2017-05-21', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transport`
--

CREATE TABLE IF NOT EXISTS `tb_transport` (
  `id_transport` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` text,
  `keterangan` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  PRIMARY KEY (`id_transport`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_transport`
--

INSERT INTO `tb_transport` (`id_transport`, `nama`, `alamat`, `keterangan`, `image`, `langitude`, `latitude`) VALUES
(7, 'Stasiun Pekalongan', 'Jalan Gajah Mada, Bendan, Pekalongan Barat, Bendan, Pekalongan Bar., Kota Pekalongan, Jawa Tengah 51151', '', 'kereta.png', 109.662, -6.88972),
(10, 'baru', 'alamat', 'keterangan ini lho', '', 109.586, -7.02794),
(9, '', '', '', 'rmsakit.PNG', 0, 0),
(11, 'stasiun hantu', 'kajen', 'sepur banter', 'hotel.PNG', 109.584, -7.02461),
(12, 'Angkot', 'Pasar kajen', 'angkot', 'spbu.PNG', 109.578, -7.03258);

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE IF NOT EXISTS `tb_wisata` (
  `id_wisata` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text,
  `kategori` set('alam','buatan','belanja','religi','minat','kuliner') DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `image` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `image4` varchar(100) DEFAULT NULL,
  `image5` varchar(100) DEFAULT NULL,
  `langitude` float NOT NULL,
  `latitude` float NOT NULL,
  `kode` char(5) NOT NULL,
  PRIMARY KEY (`id_wisata`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama`, `alamat`, `kategori`, `keterangan`, `image`, `image2`, `image3`, `image4`, `image5`, `langitude`, `latitude`, `kode`) VALUES
(10, 'Pantai depok', 'Desa Depok Kec.Siwalan', 'alam,buatan', 'Terletak di desa Depok Kecamatan siwalan sekotar 5km dari jalan raya pantura. Memiliki keunikan pantai dengan eretan pohon nyiur dan taman melati yang mehadirkan aroma harum menambah kenyamanan sambil memandang lepas pantai', 'depok.JPG', 'depok1.JPG', NULL, NULL, NULL, 109.602, -6.84141, '1'),
(11, 'Hutan Sokokembang', '', 'alam', 'Hutan Sokokembang adalah salah satu kawasan alam dimana kita masih bisa melihat sejumlah satwa liar hidup dalam habitat aslinya. Dengan luasan sekitar 5000 Ha, kawasan ini memili keragaman flora dan fauna yang sangat banyak. Lebih kurang 250 spesies telah terindifikasi berhabitat di hutan ini termasuk sejumlah satwa langka seperti macan, elang jawa, lutung dan owa jawa. Hutan alam Sokokembang relative masih terjaga keutuhannya. Sistem ekologi yang ada didalamnya cenderung masih berjalan seimbang. Hal inilah yang membuat banyak peneliti baik dari dalam negeri maupun luar negeri tertarik datang ketempat ini', NULL, NULL, NULL, NULL, NULL, 0, 0, '0'),
(9, 'Desa wisata Lolong', '', 'alam,buatan,kuliner', 'Festival durian, itulah hal yang pertama yang akan tersirat jika anda mendengarkan nama Desa Wisata Lolong. Desa wisata penghasil durian ini memiliki Jembatan batu lengkung peniggalan Belanda diatas sungai Lolong dengan debit air yang sangat cocok unutuk berarung jeram. Disekitar jembatan bersejarah ini terdapat Prasasti Syair Lagu "Lolong" dari penyanyi Balada indonesia, Ebiet G.Ade ', NULL, NULL, NULL, NULL, NULL, 109.623, -7.07264, 'OW005'),
(8, 'Curug Muncar', '', 'alam', 'Meupakan komplek air terjun dan terdapat 7 buah air terjun di lokasi ini. Sarana dan prasarana yang dimiliki obyek wisata ini cukup lengkap, berupa area parkir , loket, camping ground, shelter, gazebo dan MCK, juga akses jalan beton di kawasan obyek wisata dilengkapi denganpagar pengaman. Bagi para pengunjung yang ingin menginap di lokasi ini juga terdapat guest house dan homestay', NULL, NULL, NULL, NULL, NULL, 109.545, -7.10668, 'OW004'),
(6, 'Welo river', 'Desa kayupuring Kec.Petungkriyono', 'alam', 'Wisata air Welo river merupakan surga bagi wisatawan yang menyukai tatangan atu gemar olahraga air seperti: river tubing, body rafting, ciblon atau sebutan atraksi terjun bebas dari tebing dengan ketinggian bervariasi di dalam kolam air sungai nan jernih. Terdaoat beberapa spot kolam air sungai yang wajib anda kunjungi seperti Kedung Gede, Kedung Pitu, Kedung Sipingit atau yang lebih dikenal sebagai black canyon Kabupaten Pekalongan', '', NULL, NULL, NULL, NULL, 109.74, -7.11596, 'OW002'),
(7, 'Curug lawe', 'Dusun Cokrowai Desa kasimpar Kec.Petungkriyono', 'alam', 'Monumen Suryo, dari namanya mudah dipastikan bahwa monumen ini berdiri untuk menghormati Gubernur Jawa Timur pertama, Bapak Serjo.\r\n\r\nMonumen ini berdiri di kawasan hutan jati, di kawasan jalan raya Ngawi- Solo. Monumen ini di bangun untuk memperingati tewasnya Gubernur Suyo yang di bunuh olek PKI.\r\n\r\nSelain sebagai monumem peringatan, di kawasan obyek wisata ini juga bisa di kunjungi layaknya obyek wisata rekreasi keluarga, karena suasananya yang nyaman dan hijau serta pohon-pohon mahoni di sekitar hutan sangat cocok untuk mereka yang ingin melewatkan hari libur dengan tenang dan damai.', NULL, NULL, NULL, NULL, NULL, 109.697, -7.13961, 'OW007'),
(3, 'Linggo Asri', 'Desa Linggo Kec.Kajen', 'alam,buatan', 'Berlokasi di daerah pegunungan pada ketinggian 700mdpl,berjarak 12 km sekitar 20 menit berkendara dari pusat kota kajen.\r\nLinggo Asri menawarkan keindahan panorama alam yang sejuk dan asri.\r\nDengan berbagai atraksi wisata dilengkapi fasilitas pendukung lainnya sangat cocok untuk wisata keluarga,wisata pendidikan,menginap di villa,maupun bersantai di akhir pekan.', 'linggo.jpg', NULL, NULL, NULL, NULL, 109.583, -7.10092, '0'),
(4, 'Watu Ireng', 'Desa Lambar Kec.Kandangserang', 'alam', 'Hamparan batu berwarna hitam seluas 2 Ha yang berebtuk menyerupai bukit.Di atas batu tersebut terdapat gazebo tempat bersantai para pengunjung yang ingin memanjakan mata mereka dengan pemandangan hijau Kabupaten Pekalongan', '', '', '', '', '', 109.511, -7.09888, 'OW001'),
(5, 'Curug Bajing', 'Dusun Kambangan Desa Tlogo pakis Kec.Petungkriyono', 'alam', 'Merupakan idola baru wisata alam di kawasan Ekowisata Petungkriyono< akses jalan cukup mudah dan dekat dengan jalan raya. Memilki ketinggian 75m dengan debit air yang besar.Air ini memiliki kolam yang luas dan dengan air yang jernih serta udara yang sejuk. Atraksi wisata yang dapat dilakukan di obyek wisata ini adalah Water sliding yaitu meluncur dari ketinggian perosotan air terjun dengan ban dalam mobil dan perlengkapan pengaman. Terdapat Camping Ground area. Dilengkapi dengan fasilitas kamar bilas, MCk, Gazebo-gazebo, area parkir yang luas, mushola, toko souvenir, warung, bahkan terdapat kedai kopi yang yang menyediakan racikan Kopi Petung khas petung kriyon yang makin memikat wisatawan untuk datang lagi dan lagi', NULL, NULL, NULL, NULL, NULL, 109.706, -7.14483, 'OW003'),
(38, 'International Batik Center Pekalongan', '', 'belanja', 'IBC & Craft memfasilitasi perdagangan batik dan kegiatan pemasaran dalam berbagai skala transaksi, lokal, regional, nasional dan internasional.\r\n\r\nDengan lokasi yang strategis di sepanjang Jalan Pantura yang menjadi jalan bisnis utama di Jawa. IBC & Craft menyediakan fasilitas lainnya, termasuk pusat bisnis, pusat ATM, ruang fungsi, 24-jam sistem keamanan, pemadam kebakaran, panggilan mobil dan sound system, toilet, dan semua lengkap dengan sertifikat bangunan yang tepat dan izin.', NULL, NULL, NULL, NULL, NULL, 109.623, -6.89211, 'OW006');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
