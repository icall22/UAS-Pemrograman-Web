-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 17.29
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'pre-kat1'),
(2, 'pre-kat2'),
(3, 'pre-kat3'),
(4, 'pre-kat4'),
(5, 'post-kat1'),
(6, 'post-kat2'),
(7, 'post-kat3'),
(8, 'post-kat4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(4) NOT NULL,
  `nama_materi` varchar(100) NOT NULL,
  `akses` varchar(10) NOT NULL,
  `nama_file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `akses`, `nama_file`) VALUES
(1, 'KIAT SUKSES MEMILIH LEMBAGA KURSUS', 'siswa', 'coba.pdf'),
(2, 'CARA CEPAT BEKERJA SETELAH LULUS SMA-MA', 'siswa', 'coba.pdf'),
(3, 'KETENAGAKERJAAN DAN CARA KERJA KE LUAR NEGERI', 'siswa', 'coba.pdf'),
(4, 'KIAT SUKSES DITERIMA DI PERGURUAN TINGGI', 'siswa', 'coba.pdf'),
(5, 'KIAT SUKSES MENJADI PENGUSAH MUDA', 'siswa', 'coba.pdf'),
(6, 'MEMAHAMI PROGRAM STUDI DAN STRATEGI MEMILIHNYA', 'siswa', 'coba.pdf'),
(7, 'MEMILIH PROFESI DENGAN CARA S-M-A-R-T', 'siswa', 'coba.pdf'),
(8, 'MILIKI A-B-C-D UNTUK MERAIH KESUKSESAN', 'siswa', 'coba.pdf'),
(9, 'PILIHAN KARIR YANG SESUAI TIPE KEPRIBADIAN', 'siswa', 'coba.pdf'),
(10, 'AKU PASTI BISA', 'siswa', 'coba.pdf'),
(11, 'a', 'Siswa', 'a.png'),
(12, 'b', 'Siswa', 'IMG_20200724_162333.jpg'),
(13, 'c', 'Siswa', 'IMG-20200426-WA0003.jpg'),
(15, 'dd', 'Siswa', '1__RPL_DAN_MATERI_-_AKU_PASTI_BISA.docx'),
(16, 'yy', 'Siswa', 'poster_TA_H-.png'),
(17, 'asdfgh', 'Guru', 'Syarat_Pendaftaran.pdf'),
(18, 'dda', 'Guru', 'sint1.png'),
(19, 'contoh materi', 'Guru', '1__RPL_DAN_MATERI_BK_-_PERANAN_KECERDASAN_(IQ-EQ-AQ-CQ-SQ)__DALAM_BELAJAR_(1).docx'),
(20, 'contoh materi', 'Siswa', 'SKRIPSI_LUTHFINA.docx'),
(21, 'contoh materi', 'Siswa', '1__RPL_DAN_MATERI_BK_-_PERANAN_KECERDASAN_(IQ-EQ-AQ-CQ-SQ)__DALAM_BELAJAR_(1)1.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengisi`
--

CREATE TABLE `pengisi` (
  `id_pengisi` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id_kategori` varchar(30) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `total_jawab` int(4) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengisi`
--

INSERT INTO `pengisi` (`id_pengisi`, `username`, `id_kategori`, `jawaban`, `total_jawab`, `waktu`) VALUES
(23, '9002345', '1', 'No 1 = 4 , No 2 = 4 , No 3 = 4 , No 4 = 4 , No 5 = 4 , No 6 = 4 , No 7 = 4 , No 8 = 4', 32, '2020-07-05 02:20:27'),
(24, '9002345', '5', 'No 1 = 1 , No 2 = 4 , No 3 = 4 , No 4 = 1 , No 5 = 2 , No 6 = 4 , No 7 = 4', 20, '2020-08-28 00:14:05'),
(25, '1222195', '1', 'No 1 = 3 , No 2 = 3 , No 3 = 3 , No 4 = 3 , No 5 = 3 , No 6 = 3 , No 7 = 3 , No 8 = 3', 24, '2024-07-01 20:59:45'),
(26, '1222195', '2', 'No 1 = 3 , No 2 = 3 , No 3 = 3 , No 4 = 3 , No 5 = 3 , No 6 = 3 , No 7 = 3', 21, '2024-07-01 21:00:09'),
(27, '1222195', '3', 'No 1 = 3 , No 2 = 3 , No 3 = 3 , No 4 = 3 , No 5 = 3 , No 6 = 3 , No 7 =  , No 8 = 3 , No 9 = 3 , No 10 = 3 , No 11 = 3', 30, '2024-07-01 21:00:44'),
(28, '1222195', '4', 'No 1 =  , No 2 =  , No 3 =  , No 4 =  , No 5 =  , No 6 =  , No 7 =  , No 8 =  , No 9 =  , No 10 =  , No 11 =  , No 12 =  , No 13 =  , No 14 =  , No 15 =  , No 16 =  , No 17 =  , No 18 =  , No 19 = ', 0, '2024-07-01 21:00:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` int(8) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','guru','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `nama`, `ket`, `username`, `password`, `level`) VALUES
(2, 'Admin ', 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'Faisal Akbar Nggori', 'Mahasiswa', 'Faisal', '827ccb0eea8a706c4c34a16891f84e7b', 'siswa'),
(20, 'Faisal', 'Mahasiswa', '1222195', '25d55ad283aa400af464c76d713c07ad', 'siswa'),
(21, 'Faisal Akbar Nggori', 'Kuy', 'Faisal', '25d55ad283aa400af464c76d713c07ad', 'guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_level`
--

CREATE TABLE `tbl_level` (
  `id_level` int(3) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_level`
--

INSERT INTO `tbl_level` (`id_level`, `level`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Siswa'),
(4, 'Dosen'),
(5, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(8) NOT NULL,
  `no_soal` int(8) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `no_soal`, `soal`, `kategori`) VALUES
(1, 1, 'Saya memiliki bakat yang dapat menunjang karir saya', 'KAT1'),
(2, 2, 'Saya mampu memahami potensi saya', 'KAT1'),
(3, 3, 'Saya mampu memahami bakat yang saya miliki', 'KAT1'),
(4, 4, 'Prestasi akademik yang saya miliki mendukung karir saya kelak', 'KAT1'),
(5, 5, 'Saya selalu mengabaikan bakat dalam perencanaan karir saya', 'KAT1'),
(6, 6, 'Saya merasa memiliki kelebihan yang sesuai dengan perencanaan karir saya', 'KAT1'),
(7, 7, 'Kelebihan yang saya miliki dapat membantu perencanaan karir saya', 'KAT1'),
(8, 8, 'Saya merasa tidak memiliki sesuatu yang istimewa pada diri saya', 'KAT1'),
(9, 1, 'Saya akan membekali kemampuan saya dengan belajar agar mendapatkan karir sesuai dengan cita-cita saya', 'KAT2'),
(10, 2, 'Saya ingin berusaha keras untuk mencapai cita-cita saya', 'KAT2'),
(11, 3, 'Saya tidak memikirkan karir ke depan saya', 'KAT2'),
(12, 4, 'Saya mengetahui jenis-jenis perguruan tinggi dan perusahaan terkemuka di Indonesia', 'KAT2'),
(13, 5, 'Sekolah lanjutan yang saya pilih sesuai dengan jurusan ketika duduk di bangku SMA', 'KAT2'),
(14, 6, 'Kegiatan ekstrakurikuler sekolah sangat membantu pengembangan karir saya', 'KAT2'),
(15, 7, 'Merasa kesulitan dalam memahami gambaran karir ke depannya', 'KAT2'),
(16, 1, 'Saya mengetahui potensi yang saya miliki mendukung karir kelak', 'KAT3'),
(17, 2, 'Saya dapat merencanakan sekolah lanjutan yang sesuai dengan harapan', 'KAT3'),
(18, 3, 'Saya menganggap bahwa perencanaan perlu disiapkan sejak dini', 'KAT3'),
(19, 4, 'Kedisiplinan dalam mengikuti pelajaran sangat mendukung perencanaan karir', 'KAT3'),
(20, 5, 'Saya kurang memahami cara mengembangkan potensi yang mendukung karir saya', 'KAT3'),
(21, 6, 'Saya mengabaikan perencanaan karir saya', 'KAT3'),
(22, 7, 'Saya dapat membuat berbagai alternatif pilihan karir, jika pilihan karir saya tidak sesuai harapan', 'KAT3'),
(23, 8, 'Kebiasaan belajar sehari-hari saya dapat mencerminkan perencanaan karir', 'KAT3'),
(24, 9, 'Setelah lulus SMA saya belum bisa menentukan perencanaan karir saya', 'KAT3'),
(25, 10, 'Karir yang saya rencanakan selalu berubah-ubah ', 'KAT3'),
(26, 11, 'Merasa kurang memperoleh informasi karir, sehingga tidak memiliki pengetahuan pilihan karir', 'KAT3'),
(27, 1, 'Saya akan membekali diri saya dengan belajar dan berprestasi non akademik agar dapat mengantarkan perencanaan karir saya', 'KAT4'),
(28, 2, 'Saya mengetahui cara-cara membuat perencanaan karir ', 'KAT4'),
(29, 3, 'Kemampuan ekonomi keluarga mendukung tujuan karir saya', 'KAT4'),
(30, 4, 'Saya akan berusaha mencari informasi sekolah lanjutan untuk menambah pengetahuan mengenai perguruan tinggi', 'KAT4'),
(31, 5, 'Saya berusaha untuk selalu berlatih keras agar perencanaan karir tercapai', 'KAT4'),
(32, 6, 'Saya merasa kesulitan mempetakan karir masa depan', 'KAT4'),
(33, 7, 'Saya merasa bimbang ketika di hadapkan pada perencanaan karir ke depan', 'KAT4'),
(34, 8, 'Dalam membuat perencanaan karir, saya tidak mengetahui jurusan yang ada di perguruan tinggi ataupun pekerjaan kelak', 'KAT4'),
(35, 9, 'Saya merasa bingung dengan prospek karir saya pada masing-masing jurusan di perguruan tinggi', 'KAT4'),
(36, 10, 'Saya berharap perencanaan karir saya dapat sesuai dengan bakat saya', 'KAT4'),
(37, 11, 'Saya bercita-cita karir saya sejak dibangku usia dini', 'KAT4'),
(38, 12, 'Minat saya di bidang ekstrakurikuler sangat membantu perencanaan karir kelak', 'KAT4'),
(39, 13, 'Karir yang saya rencanakan tidak sesuai dengan program studi yang saya jalani saat ini di SMA', 'KAT4'),
(40, 14, 'Saya akan tetap memilih karir sesuai dengan kemampuan yang saya miliki baik akademik maupun non akademik ', 'KAT4'),
(41, 15, 'Saya akan menekuni pilihan karir sesuai dengan bakat dan kemampuan saya', 'KAT4'),
(42, 16, 'Saya semakin mantap dengan rencana karir yang saya cita-citakan', 'KAT4'),
(43, 17, 'Kelebihan saya dalam mengikuti pelajaran sangat mendukung perencanaan karir saya', 'KAT4'),
(44, 18, 'Dalam membuat perencanaan karir saya mengkhawatirkan kelemahan yang saya miliki', 'KAT4'),
(45, 19, 'Saya menyesal karena program studi yang saya ambil saat ini tidak sesuai dengan rencana karir saya', 'KAT4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `pengisi`
--
ALTER TABLE `pengisi`
  ADD PRIMARY KEY (`id_pengisi`);

--
-- Indeks untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tbl_level`
--
ALTER TABLE `tbl_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `pengisi`
--
ALTER TABLE `pengisi`
  MODIFY `id_pengisi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_akun`
--
ALTER TABLE `tbl_akun`
  MODIFY `id_akun` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_level`
--
ALTER TABLE `tbl_level`
  MODIFY `id_level` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
