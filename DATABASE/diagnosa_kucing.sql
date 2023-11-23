-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2023 at 01:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosa_kucing`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int NOT NULL,
  `kode_gejala` varchar(20) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`) VALUES
(3, 'G01', 'Tidak mau makan'),
(4, 'G02', 'Batuk'),
(5, 'G03', 'Bulu rontok'),
(6, 'G04', 'Dehidrasi'),
(7, 'G05', 'Kurus'),
(8, 'G06', 'Diare disertai darah'),
(9, 'G07', 'Gatal-gatal'),
(10, 'G08', 'Anemia (gusi putih)'),
(11, 'G09', 'Keluar air liur'),
(12, 'G10', 'Diare disertai cacing'),
(13, 'G11', 'Demam'),
(14, 'G12', 'Dipegang telinga kesakitan'),
(15, 'G13', 'Flu'),
(16, 'G14', 'Bersin-bersin'),
(17, 'G15', 'Jaringan kulit rontok'),
(18, 'G16', 'Bengkak mata'),
(19, 'G17', 'Keluar air mata (epifora)'),
(20, 'G18', 'Kemerahan pada kulit'),
(21, 'G19', 'Kerusakan selaput lendir mata'),
(22, 'G20', 'Berbau busuk pada telinga'),
(23, 'G21', 'Leleran hidung keruh (kental seperti nanah)'),
(24, 'G22', 'Lemah'),
(25, 'G23', 'Lesu'),
(26, 'G24', 'Luka keropeng'),
(27, 'G25', 'Luka pada mulut'),
(28, 'G26', 'Luka pada telinga'),
(29, 'G27', 'Menggelengkan kepala'),
(30, 'G28', 'Muntah'),
(31, 'G29', 'Muntah diserta cacing'),
(32, 'G30', 'Nafas lewat mulut'),
(33, 'G31', 'Saluran nafas tertutup lendir (ingusan)'),
(34, 'G32', 'Sesak nafas'),
(35, 'G33', 'Telinga selalu kotor'),
(36, 'G34', 'Bau mulut busuk'),
(37, 'G35', 'Tidak tenang');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('Admin','Dokter','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'Admin'),
(11, 'Irul Marpoyah', 'user', 'user', 'User'),
(12, 'dr. Asal Kuliah, SpAK', 'dokter', 'dokter', 'Dokter'),
(14, 'Joni', 'user2', 'user2', 'User'),
(15, 'Jono', 'user3', 'user3', 'User'),
(16, 'Keke', 'user3', 'user3', 'User'),
(17, 'Gunawan', 'user4', 'user4', 'User'),
(18, 'Tri', 'user5', 'user5', 'User'),
(19, 'Sari', 'user6', 'user6', 'User'),
(20, 'rasya dika pratama', 'dikaproject', '123456789', 'Admin'),
(21, 'faiz alawi', 'faiz', '123456789', 'User'),
(22, 'batara wijaya', 'batara', '123456789', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int NOT NULL,
  `kode_penyakit` varchar(20) NOT NULL,
  `nama_penyakit` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `solusi`) VALUES
(1, 'P01', 'Cacingan ( Helminthiasis )', 'Helminthiasis atau cacingan adalah penyakit yang disebabkan oleh infestasi cacing (helminth).. Pada hewan, penyakit ini dapat menyerang semua jenis hewan di kelas vertebrata, antara lain : ikan; amfibi; reptil; mamalia seperti anjing, kucing, domba, sapi, babi, kuda, dan lain sebagainya.', 'Cara mengobati cacingan pada orang dewasa adalah dengan mengonsumsi obat cacing selama 1-3 hari. Obat cacing sebaiknya dikonsumsi oleh seluruh penghuni rumah untuk mencegah penularan infeksi yang berkelanjutan. Dokter akan meresepkan obat cacing sesuai dengan jenis cacing yang menginfeksi.'),
(2, 'P02', 'Kudis ( Skabies )', 'Scabies atau kudis merupakan penyakit kulit kucing yang disebabkan adanya parasit berupa kutu atau tungau, yang kemudian bersarang di bulu kucing. Tak hanya itu, kutu tersebut juga bertelur di bawah bulu kucing, hal inilah yang kemudian menyebabkan efek gatal pada kucing.', 'Cara mengobati scabies pada kucing berikutnya adalah dengan memberikan obat tetes kutu. Pada umumnya, pengobatan scabies pada kucing melibatkan penggunaan obat anti-parasit seperti obat tetes kutu yang mengandung bahan aktif seperti selamectin atau fipronil.'),
(3, 'P03', 'Pijal, kutu, caplak ( Ektoparasit )', 'Ada beberapa ektoparasit yang dapat mengganggu kesehatan kucing salah satunya adalah kutu, tungu, caplak dan pinjal. Dimana ektoparasit ini dapat berperan sebagai vektor suatu organisme maupun sebagai penyebab langsung suatu penyakit.', 'cara mencegah dari penyakit ini\r\n1. Tidak mempertemukan kucing peliharaan dengan kucing liar\r\n2. Sering membersihkan dan mendisinfeksi lingkungan sekitar\r\n3.  Rutin memandikan atau grooming kucing\r\n4.  Pemberian obat tetes kutu'),
(4, 'P04', 'Koksidiosis', 'Koksidiosis atau disebut juga Penyakit berak darah merupakan penyakit pencernaan yang disebabkan oleh protozoa parasit Genus Eimeria. Eimeria yang menyerang unggas terdiri atas sembilan jenis, enam diantaranya sangat patogen menyerang ayam.', 'Pengobatan koksidiosis dapat dilakukan dengan pemberian obat-obatan yang bersifat koksidiostat atau koksidiosidal. Pemberian koksidiostat tidak mengeliminasi seluruh parasit dari dalam tubuh tetapi hanya menekan jumlah parasit yang ada di dalam tubuh.'),
(5, 'P05', 'Feline viral rhinotracheitis', 'Apa itu feline rhinotracheitis dan apa penyebabnya? Feline viral rhinotracheitis disebabkan oleh feline herpesvirus dan memiliki gejala berikut: Konjungtivitis - peradangan atau pembengkakan jaringan mata, yang sering disebut sebagai \"mata merah muda\" Ulkus kornea - luka terbuka pada mata.', 'Dokter hewan biasanya akan melakukan berbagai tindakan untuk menyembuhkan penyakit ini secara menyeluruh. Pertama, perbaikan nutrisi agar tidak dehidrasi termasuk dengan infus jika diperlukan. Kedua, pemberian antibiotik untuk mencegah infeksi sekunder dari bakteri. Ketiga, pemberian obat untuk pernafasan dan mata.\r\n\r\nKesembuhan kucing sangat bergantung pada kekebalan tubuh, nutrisi yang baik, dan cairan tubuh yang terjaga, biasanya akan membaik dalam waktu tujuh hingga sepuluh hari.\r\n\r\nSatu-satunya pencegahan terhadap Feline Rhinotracheitis adalah dengan vaksin tricat atau tetracat.'),
(6, 'P06', 'Pernafasan ( Feline Caliviral disease )', 'Feline calicivirus (FCV) merupakan penyakit virus yang patogen dan sangat menular dengan penularan yang sangat luas pada populasi kucing. Virus ini merupakan virus single strain- RNA yang menyerang kucing domestik dan kucing eksotis diseluruh dunia.', 'Feline calicivirus pada kucing  ada dalam berbagai jenis strain, yang berarti kucing dapat terinfeksi berkali-kali sepanjang hidupnya, dengan cara yang mirip seperti manusia yang sesekali menderita pilek biasa.\r\n\r\nSering muncul pemahaman yang salah bahwa kucing tidak akan pernah sembuh dari FCV setelah terinfeksi pertama kali. Bahkan, dalam kasus infeksi pertama pada hewan yang sensitif, kucing dapat bergejala atau tidak.  Setelah fase ini, tubuh kucing terus berjuang melawan virus  selama beberapa minggu hingga beberapa bulan, tetapi dalam kebanyakan kasus akhirnya sembuh. Hal ini terutama berlaku jika hewan hidup sendiri dan tidak terkontaminasi ulang.\r\n\r\nUntuk kucing yang hidup bersama, masalahnya adalah virus tersebut bersirkulasi, dan kucing terus-menerus terinfeksi  ulang (baik melalui kontak dengan kucing lain atau melalui lingkungan yang terkontaminasi, karena virus ini mampu bertahan di lingkungan eksternal).'),
(7, 'P07', 'Kucing jahat ( Felice Panleukopenia )', 'Feline panleukopenia, adalah penyakit viral yang menyerang bangsa Felidae seperti kucing yang disebabkan oleh feline parvovirus (FPV). Penyakit ini menyerang kucing dewasa maupun anakan kucing (kitten).', 'Sayangnya, belum ada obat untuk mengatasi panleukopenia pada kucing. Namun, dokter akan memberikan obat untuk mengatasi gejala yang ditimbulkan. Jika kucing Anda terinfeksi panleukopenia, biasanya dokter akan menyarankan penanganan rawat inap dengan memberikan infus untuk mengatasi dehidrasi.'),
(9, 'P08', 'Kutu telinga ( Earmite )', 'Ear mite dalam telinga sangat mengganggu, terasa gatal dan mengiritasi telinga. Lebih lanjut dapat terjadi infeksi. Infeksi telinga yang tidak segera ditangani dapat berlanjut menjadi berbagai penyakit serius, bahkan hilangnya kemampuan pendengaran. Ear mite dapat dibasmi dengan obat suntik dan obat tetes telinga.', 'Infeksi telinga yang tidak segera ditangani dapat berlanjut menjadi berbagai penyakit serius, bahkan hilangnya kemampuan pendengaran. Ear mite dapat dibasmi dengan obat suntik dan obat tetes telinga. Untuk menghentikan siklus hidup tungau, pengobatan dengan obat suntik harus diulang setelah 2 (dua) minggu.');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int NOT NULL,
  `id_pengguna` int NOT NULL,
  `id_penyakit` int DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id_riwayat`, `id_pengguna`, `id_penyakit`, `tanggal`) VALUES
(7, 11, 2, '2020-09-25'),
(10, 11, NULL, '2020-09-25'),
(11, 11, 1, '2020-09-25'),
(12, 11, NULL, '2020-09-25'),
(13, 11, 1, '2020-09-25'),
(14, 11, 2, '2020-09-25'),
(15, 11, NULL, '2020-09-25'),
(16, 11, NULL, '2020-09-25'),
(17, 11, NULL, '2020-09-25'),
(18, 11, NULL, '2020-09-25'),
(19, 11, NULL, '2020-09-25'),
(20, 11, 1, '2020-09-25'),
(21, 11, 3, '2020-09-25'),
(26, 11, 3, '2020-09-25'),
(27, 11, 3, '2020-09-25'),
(28, 11, 1, '2020-09-25'),
(29, 11, 1, '2020-09-25'),
(30, 11, 1, '2020-09-25'),
(31, 11, NULL, '2020-09-25'),
(32, 11, 1, '2020-09-25'),
(33, 11, 1, '2020-09-25'),
(36, 11, NULL, '2020-09-25'),
(37, 11, NULL, '2020-09-25'),
(38, 11, 1, '2020-09-25'),
(39, 11, 1, '2020-09-25'),
(40, 11, NULL, '2020-09-25'),
(45, 11, NULL, '2023-11-09'),
(46, 11, NULL, '2023-11-09'),
(47, 11, 7, '2023-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id_rule` int NOT NULL,
  `id_penyakit` int NOT NULL,
  `id_gejala` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id_rule`, `id_penyakit`, `id_gejala`) VALUES
(60, 1, 3),
(61, 1, 4),
(62, 1, 7),
(63, 1, 8),
(64, 1, 12),
(65, 1, 31),
(66, 2, 3),
(67, 2, 5),
(68, 2, 9),
(69, 2, 17),
(70, 2, 26),
(71, 2, 28),
(72, 3, 5),
(73, 3, 6),
(74, 3, 7),
(75, 3, 9),
(76, 3, 20),
(77, 3, 37),
(78, 4, 6),
(79, 4, 7),
(80, 4, 8),
(81, 4, 10),
(82, 4, 24),
(83, 5, 10),
(84, 5, 11),
(85, 5, 15),
(86, 5, 16),
(87, 5, 18),
(88, 5, 19),
(89, 5, 21),
(90, 5, 23),
(91, 5, 32),
(92, 5, 34),
(93, 6, 3),
(94, 6, 10),
(95, 6, 11),
(96, 6, 25),
(97, 6, 27),
(98, 6, 33),
(99, 7, 3),
(100, 7, 8),
(101, 7, 10),
(102, 7, 13),
(103, 7, 25),
(104, 9, 14),
(105, 9, 22),
(106, 9, 29),
(107, 9, 30),
(108, 9, 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id_rule`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id_rule` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE,
  ADD CONSTRAINT `riwayat_ibfk_2` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE;

--
-- Constraints for table `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id_penyakit`) ON DELETE CASCADE,
  ADD CONSTRAINT `rule_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
