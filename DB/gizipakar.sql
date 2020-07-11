-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 06:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gizipakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpasien`
--

CREATE TABLE `tbpasien` (
  `idpasien` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `namaorangtua` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpasien`
--

INSERT INTO `tbpasien` (`idpasien`, `nama`, `kelamin`, `umur`, `alamat`, `noip`, `tanggal`, `pekerjaan`, `namaorangtua`) VALUES
(47, 'ridwan', 'Laki-laki', '3', 'Jogja', '::1', '2020-04-20', '', 'Jamila'),
(46, 'Ridwan', 'Laki-laki', '3', 'Jogja', '::1', '2020-04-14', '', 'Jamila'),
(45, 'Ridwan', 'Laki-laki', '3', 'Jogja', '::1', '2020-04-13', '', 'Jamila'),
(44, 'ridwan', 'Laki-laki', '3', 'Jogja', '::1', '2020-04-13', '', 'Jamila');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idadmin` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(20, 'G20', 'Tubuh mengandung lebih banyak cairan, karena berkurangnya lemak dan otot?'),
(19, 'G19', 'Kulit kering dengan menunjukan garis – garis kulit yang mendalam dan lebar, terjadi persisikan dan hiperpigmentasi?'),
(18, 'G18', 'Kepala anak seolah-olah terlalu besar jika dibandingkan dengan badannya?'),
(17, 'G17', 'Wajah anak tampak keriput dan cekung sebagaimana layaknya wajah seorang yang telah berusia lanjut?'),
(16, 'G16', 'Gusi bengkak dan berdarah?'),
(14, 'G14', 'Perut cekung dan iga gambang?'),
(15, 'G15', 'Mudah menangis/cengeng dan rewel?'),
(13, 'G13', 'Kulit menjadi keriput?'),
(12, 'G12', 'Kelainan kimia darah yang selalu ditemukan ialah kadar albumin serum yang rendah, disamping kadar globulin yang normal atau sedikit meninggi?'),
(11, 'G11', 'Diare kronik atau konstipasi (susah buang air)?'),
(10, 'G10', 'Terjadi pembesaran hati/limpa (Hepatosplenomegali), hati yang teraba umumya kenyal, permukaannya licin dan tajam?'),
(9, 'G9', 'Otot tubuh terlihat lemah dan tidak berkembang dengan baik walaupun masih tampak adanya lapisan lemak di bawah kulit?'),
(8, 'G8', 'Perubahan aspek kejiwaan, yaitu anak kelihatan memelas, cengeng, lemah dan tidak ada selera makan ?'),
(7, 'G7', 'Kelainan kulit berupa bercak merah muda yang meluas dan berubah warna menjadi coklat kehitaman dan terkelupas?'),
(5, 'G5', 'Wajah membulat dan sembab?'),
(6, 'G6', 'Pandangan mata sayu?'),
(4, 'G4', 'Rambut mudah dicabut tanpa rasa sakit, rontok?'),
(2, 'G2', 'Tampak sangat kurus dan atau edema pada kedua punggung kaki sampai seluruh tubuh?'),
(3, 'G3', 'Rambut tipis kemerahan seperti warna rambut jagung?'),
(1, 'G1', 'Pertumbuhan berat dan panjang badan anak menurun drastis atau anak tidak dapat mencapai berat dan panjang yang semestinya sesuai dengan umurnya?'),
(21, 'G21', 'Dermatitis dan meningkatnya kerentanan terhadap infeksi?'),
(22, 'G22', 'Kalium dalam tubuh menurun drastis sehingga menyebabkan gangguan metabolic seperti gangguan pada ginjal dan pancreas?'),
(23, 'G23', 'Mineral lain dalam tubuh pun mengalami gangguan, seperti meningkatnya kadar natrium dan fosfor inorganik serta menurunnya kadar magnesium?');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `idhasil` int(5) NOT NULL,
  `idpasien` int(5) NOT NULL,
  `kdpenyakit` varchar(4) NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`idhasil`, `idpasien`, `kdpenyakit`, `persentase`, `tanggal`) VALUES
(137, 46, 'P1', 65, '2020-04-14 00:10:38'),
(138, 47, 'P1', 65, '2020-04-20 18:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(3, 'P3', 'Marasmik-Kwashiorkor', 'Marasmik-Kwashiorkor merupakan kondisi yang menggabungkan antara maramus dan kwashiorkor, tentu penyebabnya pun demikian. Secara garis besarnya,marasmik-kwashiorkor dikarenakan anak  kekurangan asupan zat gizi tertentu. Dalam hal ini meliputi kalori dan protein.', 'Secara umum, sebenarnya pengobatan yang bisa dilakukan untuk balita gizi buruk dengan marasmik-kwashiorkor merupakan gabungan dari dua kondisi sebelumnya. Di antaranya meliputi pemberian susu formula khusus serta pengaturan asupan makanan harian.'),
(1, 'P1', 'Kwashiorkor', 'Kwashiorkor paling umum terjadi pada anak-anak di bawah usia 4 tahun. Penyebab gizi buruk tipe kwashiorkor adalah karena tubuh balita kekurangan asupan protein yang didapat dari sumber makanan harian.', 'Penting untuk diperhatikan bagi para orangtua. Balita yang mengalami gizi buruk, terlebih kwashiorkor, harus didekatkan secara perlahan dengan beragam makanan guna memulihkan kondisinya. Pasalnya, tubuh anak butuh penyesuaian kembali karena telah lama kehilangan nutrisi tertentu. Alih-alih mempercepat proses pengobatan, terlalu banyak dan terlalu sering memberikan makanan justru dapat mengagetkan sistem pencernaannya. Jika diperlukan, dokter juga dapat merekomendasikan pemberian suplemen vitamin dan mineral harian, tergantung kondisi dan kebutuhan anak.'),
(2, 'P2', 'Marasmus', 'Beberapa hal berikut ini bisa menjadi penyebab marasmus:\r\n•	Tidak terpenuhinya kebutuhan nutrisi harian\r\n•	Makan dalam porsi yang terlalu sedikit sehingga asupan nutrisi kurang optimal\r\n•	Memiliki satu atau lebih kondisi kesehatan yang menyulitkan proses penyerapan nutrisi di dalam tubuh\r\n', 'Setelah anak dipastikan mengalami marasmus, perawatan harus dilakukan sesegera mungkin. Salah satu langkah utama yang bisa dilakukan dokter serta ahli gizi yakni dengan memberikan susu formula F75 yang dicampurkan bersama air matang. Bukan sembarang susu, karena di dalam susu tersebut terbuat dari campuran gula, minyak sayur, dan kasein (protein susu). Setelah kondisinya cukup membaik, dokter akan membuat rencana makan khusus untuk anak. Aturan makan yang harus dijalani oleh anak dengan marasmus sebaiknya kaya akan berbagai nutrisi, termasuk di dalamnya karbohidrat dan kalori. Bahkan, kebutuhan kalori anak yang mengalami marasmus cenderung lebih tinggi ketimbang anak-anak lain seusianya.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_problem` int(11) DEFAULT NULL,
  `id_evidence` int(11) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rules`
--

INSERT INTO `tb_rules` (`id_problem`, `id_evidence`, `cf`) VALUES
(1, 12, 0.5),
(1, 11, 0.6),
(1, 10, 0.7),
(1, 9, 0.6),
(1, 8, 0.5),
(1, 7, 0.6),
(1, 5, 0.5),
(1, 6, 0.5),
(1, 4, 0.3),
(1, 2, 0.8),
(1, 3, 0.3),
(1, 1, 0.5),
(2, 17, 0.4),
(2, 16, 0.3),
(2, 15, 0.3),
(2, 14, 0.8),
(2, 13, 0.6),
(2, 12, 0.5),
(2, 11, 0.6),
(2, 10, 0.7),
(2, 2, 0.8),
(2, 1, 0.5),
(3, 20, 0.3),
(3, 12, 0.5),
(3, 11, 0.6),
(3, 10, 0.7),
(3, 2, 0),
(3, 1, 0),
(2, 18, 0.7),
(2, 19, 0.3),
(3, 21, 0.3),
(3, 22, 0.3),
(3, 23, 0.3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpasien`
--
ALTER TABLE `tbpasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`idhasil`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpasien`
--
ALTER TABLE `tbpasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `idhasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
