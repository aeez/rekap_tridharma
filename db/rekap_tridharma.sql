-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2023 at 12:38 PM
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
-- Database: `rekap_tridharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int NOT NULL,
  `judul_buku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `jumlah_halaman` int DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `tahun`, `jumlah_halaman`, `penerbit`, `link_file`, `id_dosen`) VALUES
(1, 'Pemodelan Matematika Sistem\r\nKeuangan dan Berbagai Solusi\r\nNumerik', 2019, 63, 'Desanta Muliavisitama', NULL, 6),
(2, 'Calculus II', 2022, 200, 'Medan', 'http', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') DEFAULT NULL,
  `jabatan_fungsional` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nidn` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat_kantor` varchar(255) NOT NULL,
  `lulusan` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `gambar`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `jabatan_fungsional`, `nip`, `nidn`, `email`, `no_hp`, `alamat_kantor`, `lulusan`, `password`, `level`) VALUES
(4, '646e36ee6fbee.jpg', 'INSAN TAUFIK,S.KOM.,M.KOM', 'Aceh Tenggara', '1991-02-09', 'laki-laki', 'Lektor', '1102030902910000', '0109029101', 'insantaufik@unimed.ac.id', '082284304192', 'Jl. Willem Iskandar / Pasar V, Medan, Sumatera Utara – Indonesia', 2, '$2y$10$K28nXAgVPsgTEkQdJ52M0OnCIDaFsYeM47YNwlO7xRUDnx0DxtyGO', 'dosen'),
(5, 'A', 'Adidtya Perdana, S.T., M.Kom', 'Medan', '1989-12-24', 'laki-laki', 'Lektor', '198912242022031009', '0124128902', 'adidtya@unimed.ac.id', '082166207668', 'Jl. Willem Iskandar / Pasar V, Medan, Sumatera Utara – Indonesia', 1, '$2y$10$Bf2bFc7EGZJraCnmFtLYNu8wMRgzOPWL3DvUUcJBd9U6aePQqSB/u', 'dosen'),
(6, 'B', 'Dr. Hermawan Syahputra, S.Si, M.Si', 'Jati mulyo', '1980-09-30', 'laki-laki', 'Lektor', '198009302003121002', '0030098003', 'hsyahputra@unimed.ac.id', '081375040550', 'Jl. Willem Iskandar / Pasar V, Medan, Sumatera Utara – Indonesia', 21, '$2y$10$WJGB2fN2JKXZNG05mX70A.WFjRZbvQmkQLy6/7epRziU4rC1enetm', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hki`
--

CREATE TABLE `tb_hki` (
  `id_hki` int NOT NULL,
  `judul_hki` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `tempat_penerapan` varchar(50) DEFAULT NULL,
  `respon_masyarakat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_hki`
--

INSERT INTO `tb_hki` (`id_hki`, `judul_hki`, `tahun`, `tempat_penerapan`, `respon_masyarakat`, `link_file`, `id_dosen`) VALUES
(1, 'Software “Aplikasi Rumah Ilmu”', 2019, 'rumah', 'Hebat', 'http', 6),
(2, 'Software “Sistem Administrasi\r\nRumah Ilmu”', 2019, NULL, NULL, NULL, 6),
(3, 'lorem', 2020, 'RUmah', 'Hebat', '-', 5),
(4, 'lorem', 2929, 'rumah', 'Hebat', '-', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurnal`
--

CREATE TABLE `tb_jurnal` (
  `id_jurnal` int NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_jurnal` varchar(255) NOT NULL,
  `volume` int DEFAULT NULL,
  `no` int DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_jurnal`
--

INSERT INTO `tb_jurnal` (`id_jurnal`, `judul`, `nama_jurnal`, `volume`, `no`, `tahun`, `link_file`, `id_dosen`) VALUES
(5, 'CameraCalibration for 3D Leaf-ImageReconstruction using SingularValue Decomposition', '(IJACSA)International Journalof AdvancedComputer Scienceand Applications', 8, 9, 2017, 'http://digilib.unimed.ac.id/40567/2/Fulltext.pdf', 6),
(6, 'Decision Support System For\r\nDetermining The Single Tuition\r\nGroup (UKT) In State University\r\nOf Medan Using Fuzzy C-Means', 'IOP Conf. Series:\r\nJournal of Physics', NULL, NULL, 2020, 'https://iopscience.iop.org/article/10.1088/1742-6596/1462/1/012071/pdf', 6),
(8, 'apa', 'apa', 2, 2, 2020, 'fdaffda', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kebijakan`
--

CREATE TABLE `tb_kebijakan` (
  `id_penghargaan` int NOT NULL,
  `jenis_penghargaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kebijakan`
--

INSERT INTO `tb_kebijakan` (`id_penghargaan`, `jenis_penghargaan`, `tahun`, `link_file`, `id_dosen`) VALUES
(1, 'RUmah', 2020, 'halo', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemakalah`
--

CREATE TABLE `tb_pemakalah` (
  `id_pemakalah` int NOT NULL,
  `nama_seminar` varchar(50) DEFAULT NULL,
  `judul_artikel_ilmiah` varchar(255) NOT NULL,
  `waktu` date DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pemakalah`
--

INSERT INTO `tb_pemakalah` (`id_pemakalah`, `nama_seminar`, `judul_artikel_ilmiah`, `waktu`, `tempat`, `link_file`, `id_dosen`) VALUES
(1, 'Seminar Internasional AISTSSE', 'Decision Support System ForDetermining The Single Tuition Group(Ukt) In State University Of MedanUsing Fuzzy C-Means', '2019-10-17', 'Le Polonia Hotel, Medan', '11', 6),
(2, 'Seminar Internasional ICOMSET UNP Padang', 'Leaf Feature Extraction Using Glcm And\r\nShape Morphology For Indonesian\r\nMedicinal Plants Recognition', '2018-03-14', 'UNP Padang', NULL, 6),
(3, 'rumah', 'loreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeem', '2023-05-25', 'Rumah', '-', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id_pendidikan` int NOT NULL,
  `perguruan_tinggi` varchar(50) DEFAULT NULL,
  `bidang_ilmu` varchar(50) DEFAULT NULL,
  `tahun_masuk` int DEFAULT NULL,
  `tahun_lulus` int DEFAULT NULL,
  `gelar_akademik` varchar(50) DEFAULT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id_pendidikan`, `perguruan_tinggi`, `bidang_ilmu`, `tahun_masuk`, `tahun_lulus`, `gelar_akademik`, `jenjang`, `id_dosen`) VALUES
(6, 'STMIK Budi Darma Medan', 'Teknik Informatika (Komputer)', 2009, 2013, 'S.KOM', 'S1', 4),
(7, 'Universitas Putra Indonesia “YPTK”', 'Ilmu Komputer', 2013, 2015, 'M.KOM', 'S2', 4),
(9, 'Universitas Sumatra Utara', 'Matematika', 1998, 2003, 'S.Si', 'S1', 6),
(10, 'Institut Pertanian Bogor', 'Ilmu Komputer', 2007, 2009, 'M.Si', 'S2', 6),
(11, 'Universitas Gadjah Mada', 'Ilmu Komputer', 2010, 2015, 'Dr', 'S3', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penelitian`
--

CREATE TABLE `tb_penelitian` (
  `id_penelitian` int NOT NULL,
  `judul_penelitian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `sumber_dana` varchar(50) DEFAULT NULL,
  `nominal_dana` float DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_penelitian`
--

INSERT INTO `tb_penelitian` (`id_penelitian`, `judul_penelitian`, `tahun`, `sumber_dana`, `nominal_dana`, `link_file`, `id_dosen`) VALUES
(1, 'Implementasi Jaringan Syaraf Tiruan Untuk Pengelompokkan Minat Kompetensi Mahasiswa Stmik Pelita Nusantara Medan', 2018, 'PDP/Dosen Pemula DIKTI', 16000000, 'https://e-jurnal.pelitanusantara.ac.id/index.php/mantik/article/view/427/257', 4),
(2, 'Implementasi Profile Matching Untuk Menentukan Tempat Kerja Yang Sesuai Dengan Kompetensi Bagi Lulusan Stmik Pelita Nusantara Medan', 2019, 'PDP/Dosen Pemula DIKTI', 19000000, 'http://www.ejournal.ust.ac.id/index.php/Jurnal_Means/article/view/559/pdfsxz', 4),
(3, 'Sistem Pendukung Keputusan Penentuan\r\nDosen Berprestasi Menggunakan Metode\r\nThecnique For Order Preference By\r\nSimilarity To Ideal Solution (TOPSIS)\r\nBerbasis Web.', 2022, 'Kebijakan (Ketua)', 75000000, NULL, 6),
(4, 'Pengembangan Sistem Deteksi Respons\r\nDan Tingkat Kepuasan Mahasiswa\r\nDalam Online Meeting Berbasis Artificial\r\nIntelligence', 2022, 'KDBK (Ketua)', 125000000, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengabdian`
--

CREATE TABLE `tb_pengabdian` (
  `id_pengabdian` int NOT NULL,
  `judul_pengabdian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `sumber_dana` varchar(50) DEFAULT NULL,
  `nominal_dana` float DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengabdian`
--

INSERT INTO `tb_pengabdian` (`id_pengabdian`, `judul_pengabdian`, `tahun`, `sumber_dana`, `nominal_dana`, `link_file`, `id_dosen`) VALUES
(1, 'PkM Pengintegrasian Bahan\r\nTayang Dalam Pembelajaran\r\nDaring di SD Swasta Pahlawan\r\nKeluarahan Sitirejo Hilir\r\nKecamatan Medan Tembung', 2021, 'SD Swasta Pahlawan Kel. Sitirejo Hilir', 25000000, NULL, 6),
(2, 'Pengembangan Video Tutorial\r\nPembelajaran Berbasis Camtasia\r\nUntuk Pembelajaran Luring Dan\r\nDaring Di Sma Negeri 5 Binjai', 2022, 'SMAN 5 Binjai', 25000000, NULL, 6),
(3, 'Pemanfaatan Teknologi Sebagai Upaya Peningkatan Ekonomi Unit Usaha Bihun Ubi Kayu di Desa Melati II Kecamatan Perbaungan Kabupaten Serdang Bedagai', 2022, 'PNBP UNIMED', 23600000, '-', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajaran`
--

CREATE TABLE `tb_pengajaran` (
  `id_matkul` int NOT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `kode_matkul` int DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pengajaran`
--

INSERT INTO `tb_pengajaran` (`id_matkul`, `mata_kuliah`, `kode_matkul`, `id_dosen`) VALUES
(1, 'S1 Algoritma dan Pemrograman', NULL, 6),
(2, 'S1 Pemrograman Berorientasi Objek', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penghargaan`
--

CREATE TABLE `tb_penghargaan` (
  `id_penghargaan` int NOT NULL,
  `jenis_penghargaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `institusi` varchar(100) NOT NULL,
  `tahun` int DEFAULT NULL,
  `link_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_dosen` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_penghargaan`
--

INSERT INTO `tb_penghargaan` (`id_penghargaan`, `jenis_penghargaan`, `institusi`, `tahun`, `link_file`, `id_dosen`) VALUES
(2, 'Ketua Prodi Berprestasi I', 'UNIMED', 2019, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', '$2y$10$TzbphUuTGhuyT7.OY5gSd.2IaYG7m958i/H0B3H.kXgWlM/6BSy8y', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_hki`
--
ALTER TABLE `tb_hki`
  ADD PRIMARY KEY (`id_hki`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_kebijakan`
--
ALTER TABLE `tb_kebijakan`
  ADD PRIMARY KEY (`id_penghargaan`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_pemakalah`
--
ALTER TABLE `tb_pemakalah`
  ADD PRIMARY KEY (`id_pemakalah`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD PRIMARY KEY (`id_penelitian`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_pengabdian`
--
ALTER TABLE `tb_pengabdian`
  ADD PRIMARY KEY (`id_pengabdian`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_pengajaran`
--
ALTER TABLE `tb_pengajaran`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_penghargaan`
--
ALTER TABLE `tb_penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_hki`
--
ALTER TABLE `tb_hki`
  MODIFY `id_hki` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  MODIFY `id_jurnal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_kebijakan`
--
ALTER TABLE `tb_kebijakan`
  MODIFY `id_penghargaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pemakalah`
--
ALTER TABLE `tb_pemakalah`
  MODIFY `id_pemakalah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  MODIFY `id_penelitian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pengabdian`
--
ALTER TABLE `tb_pengabdian`
  MODIFY `id_pengabdian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pengajaran`
--
ALTER TABLE `tb_pengajaran`
  MODIFY `id_matkul` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_penghargaan`
--
ALTER TABLE `tb_penghargaan`
  MODIFY `id_penghargaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_hki`
--
ALTER TABLE `tb_hki`
  ADD CONSTRAINT `tb_hki_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_jurnal`
--
ALTER TABLE `tb_jurnal`
  ADD CONSTRAINT `tb_jurnal_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kebijakan`
--
ALTER TABLE `tb_kebijakan`
  ADD CONSTRAINT `tb_kebijakan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pemakalah`
--
ALTER TABLE `tb_pemakalah`
  ADD CONSTRAINT `tb_pemakalah_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD CONSTRAINT `tb_pendidikan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penelitian`
--
ALTER TABLE `tb_penelitian`
  ADD CONSTRAINT `tb_penelitian_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengabdian`
--
ALTER TABLE `tb_pengabdian`
  ADD CONSTRAINT `tb_pengabdian_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pengajaran`
--
ALTER TABLE `tb_pengajaran`
  ADD CONSTRAINT `tb_pengajaran_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penghargaan`
--
ALTER TABLE `tb_penghargaan`
  ADD CONSTRAINT `tb_penghargaan_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
