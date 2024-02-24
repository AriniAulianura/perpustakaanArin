-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2024 at 08:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(255) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kategori`, `judul`, `foto`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `deskripsi`) VALUES
(1, 1, 'Dilan 1990', 'buku1.jpg', 'Pidi Baiq', 'Bandung Mizan Pustaka ', '2018', 20, 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.'),
(2, 1, 'Hilang dalam dekapan Semeru', 'buku2.jpg', 'Fajar Aditya', 'Elex Media Komputindo', '2022', 20, 'SIAPA YANG MASUK? TOLONG JANGAN MAIN-MAIN YA! GUE TIDAK PERCAYA KALAU TEMAN GUE SUDAH MENINGGAL!” teriak Arif.\r\n\r\nSesaat kemudian, muncullah sebuah tulisan yang mengatakan bahwa ia adalah Daris. Tulisan itu ditulis oleh sosok Jelangkung yang membuat sekujur tubuh Arif membeku.\r\n\r\nPerasaannya sangat tak menentu campur aduk menjadi satu. Arif tidak menyangka kalau arwah yang saat itu datang pada jelangkung tersebut adalah arwah dari Bang Daing.\r\n\r\nDikarenakan emosinya yang begitu membara dan meluap-luap, Arif kembali bertanya. “Kalau ini benar Bang Daing, tolong jawab satu pertanyaan terakhir dari gue. Apa warna baju yang lo pakai terakhir kali?”\r\n\r\n\r\nJelangkung tersebut kembali menuliskan jawaban dari pertanyaan Arif. Tak menyangka akan jawaban tersebut, ini adalah sebuah jawaban atas seluruh proses pencarian yang dilakukan oleh tim selama kurang lebih berminggu-minggu.\r\n\r\nTernyata, ini adalah pendakian terakhir bersama sahabatnya ke Semeru.'),
(3, 3, 'kamus inggris indonesia', 'kamus.jpg', ' Sri Sukesi Adiwimarta', 'Gramedia Pustaka Utama', '2015', 17, '. Ini adalah kamus Inggris-Indonesia . Ini adalah kamus besar dan tebal . sampulnya berwarna biru . Aku membawanya ke sekolah setiap kali Aku memiliki kelas bahasa Inggris . Aku juga menggunakannya ketika melakukan pekerjaan rumah bahasa Inggrisku di rumah .\r\nAda begitu banyak daftar kata dalam kamusku. Mereka terdaftar berdasarkan abjad . Dimulai dari A sampai Z. Kamusku banyak membantu ketika aku belajar bahasa Inggris dan tidak tahu arti dari sebuah kata'),
(4, 3, 'kamus bahasa jepang', 'kamus 2.jpg', 'Goro Taniguchi', 'Gramedia Pustaka Utama', '2009', 15, 'Buku ini memuat ribuan entri kosakata bahasa Jepang. Entri kosakata tersebut mencakup kosakata Jepang-Indonesia dan Indonesia-Jepang. Setiap kosakata Jepang, disertai tulisan kanji (Hiragana dan Katakana) dan cara membacanya dalam ejaan latinnya. Isi buku juga ditunjang oleh sejumlah bonus, yang bukan saja menarik tapi juga substantif dalam membantu proses pemahaman bahasa Jepang pembaca secara umum.'),
(5, 4, 'Doraemon', 'buku3.png', 'Hiroshi Fujimoto (Fujiko F. Fujio)', ' Shogakukan Inc ', '1970', 12, 'Doraemon, (ドラえもん) adalah sebuah robot kucing berwarna biru, berasal dari abad ke-22, pergi ke abad ke-20 untuk menolong Nobita. Lahir pada 3 September 2112. Ia sangat suka dorayaki. Ia sering membantu Nobita saat berada dalam kesusahan.'),
(6, 4, 'Ghost Parade', 'komik2.jpg', 'Azizah Assattari', 'Elex Media Komputindo', '2021', 17, '“GHOST PARADE” yang dibuat oleh studio Lentera Nusantara adalah game sidescrolling 2D yang bertemakan tentang hantu-hantu Indonesia dari seluruh nusantara. Ghost Parade mengisahkan tentang petualangan Suri untuk kembali pulang ke rumah dengan bantuan teman-temannya yang merupakan para hantu.'),
(7, 9, 'Dasar-dasar teknik informatika', 'pelajar.jpg', 'Novega Pratama Adiputra', 'Deepublish', '2020', 30, 'Informatika adalah ilmu yang mempelajari tentang penggunaan komputer untuk mengatur dan menganalisis data yang berukuran besar, baik data maupun informasi pada mesin berbasis komputasi.'),
(8, 1, 'BUKU SUPER MASTER OSN INFORMATIKA-BAHASA C SMA', 'buku infor2.jpg', 'Singgih Satrio Wibowo', 'Yrama Widya', '2021', 30, 'Pengetahuan, pemahaman, dan pengalaman seorang peserta OKI mengenai bahasa pemrograman merupakan modal vital untuk meraih juara. Bahasa pemrograman dapat menjadi alat bantu memahami algoritma. Seringkali konsep algoritma yang semula tampak abstrak dan sulit dimengerti, baru dipahami oleh seseorang pada saat ia menerapkan contoh-contoh nyata pada bahasa pemrograman. Oleh karena itu, pengenalan dan interaksi dini dengan bahasa pemrograman sangat dianjurkan. Dalam hal ini, salah satu sarana pendukung yang diperlukan, yaitu buku materi pemrograman untuk persiapan olimpiade komputer. Namun, ketersediaannya masih sangat jarang saat ini, terlebih mengenai Bahasa C.'),
(9, 7, 'Sukarno: Biografi Lengkap Negarawan Sejat', 'big.jpg', 'Anom Whani Wicaksana', 'Gramedia Pustaka Utama', '2018', 12, 'Buku ini merangkum perjalanan hidup Sukarno mulai sejak masih kecil hingga wafat dan berupaya menetapkan Sukarno sebagai manusia yang lengkap. Selain itu, buku ini ditulis dengan bahasa yang mudah dipahami dan cara cerita yang menarik. Dramatisasinya membuat pembaca terbawa untuk menyelami kehidupan Sukarno yang berliku-liku.'),
(10, 10, 'KKN di Desa Penari', 'kkn.jpg', 'Simpleman', 'SimpleMan', '2019', 15, 'Secara garis besar, KKN di Desa Penari menceritakan tentang kejadian horor yang menimpa 6 mahasiswa KKN di desa terpencil hingga merenggut maut satu persatu.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Novel'),
(2, 'Majalah'),
(3, 'Kamus'),
(4, 'Komik'),
(5, 'Manga'),
(6, 'Ensiklopedia'),
(7, 'Biografi'),
(8, 'Naskah'),
(9, 'buku pelajar RPL'),
(10, 'Horor');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku_Fk` int(11) DEFAULT NULL,
  `Kd_peminjam` varchar(11) NOT NULL,
  `tanggal_peminjaman` varchar(255) DEFAULT NULL,
  `tanggal_pengembalian` varchar(255) DEFAULT NULL,
  `terlambat_hari` varchar(14) NOT NULL,
  `total_denda` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjam`
--

INSERT INTO `peminjam` (`id_peminjaman`, `id_user`, `id_buku_Fk`, `Kd_peminjam`, `tanggal_peminjaman`, `tanggal_pengembalian`, `terlambat_hari`, `total_denda`, `jumlah`, `status_peminjaman`) VALUES
(1, 2, 1, 'B99', '2024-02-23', '2024-02-24', '', 0, 1, 'dipinjam'),
(2, 2, 2, 'B100', '2024-02-01', '2024-02-14', '', 0, 1, 'dipinjam'),
(3, 2, 3, 'B101', '2024-02-25', '2024-02-26', '', 0, 1, 'dipinjam'),
(4, 2, 4, 'B102', '2024-02-26', '2024-02-27', '', 0, 1, 'dipinjam'),
(5, 2, 5, 'B2009', '2024-02-27', '2024-02-28', '', 0, 1, 'dipinjam'),
(6, 2, 1, 'Bw2452', '2024-02-04', '2024-02-05', '1 hari', 1000, 1, 'dikembalikan'),
(7, 2, 2, 'B100', '2024-02-05', '2024-02-06', '1 hari', 1000, 1, 'dikembalikan'),
(8, 2, 3, 'B101', '2024-02-05', '2024-02-06', '', 0, 1, 'dikembalikan'),
(9, 2, 4, 'B101', '2024-02-02', '2024-02-03', '', 0, 1, 'dikembalikan'),
(10, 2, 5, 'B102', '2024-02-08', '2024-02-09', '', 0, 1, 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(1, 2, 1, 'aku sangat suka', 1),
(2, 2, 2, 'cerita pendaki gunung yg sangat unik', 6),
(3, 2, 3, 'lengkap sekali', 9),
(4, 2, 5, 'komik kesukaan jadi baca nya bikin happy', 10),
(5, 2, 5, 'baguss', 3),
(6, 2, 3, 'lengkap baguis juga', 9),
(7, 2, 4, 'bagussss', 4),
(8, 2, 8, 'lengkap bngtt', 8),
(9, 2, 9, 'sejarah menarik', 7),
(10, 2, 10, 'tenyata baca lebik asikk ,cerita menarik', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `level` enum('admin','petugas','peminjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `Alamat`, `no_telepon`, `level`) VALUES
(1, 'administrator', 'admin', 'admin1', 'admin@gmail.com', 'jalan raya cimareme', '0868676758', 'admin'),
(2, 'arini aulia nuraeni', 'peminjam', 'peminjam2', 'peminjam2@gmail.com', 'Galanggang', '0868676758', 'peminjam'),
(3, 'petugas perpustakaan', 'petugas', 'petugas', 'petugas@gmail.com', 'galanggang', '088123774333', 'petugas'),
(5, 'Arini Aulia Nuraeni ', 'arin', 'arin23', 'aulianuraarini@gmail.com', 'galanggang', '08815791969', 'peminjam'),
(6, 'dina rostiawati', 'dina', 'din21', 'dinarostiawati@gmail.com', 'blok jambu', '083847754774', 'peminjam'),
(7, 'kurniawati nur sholehah', 'kurnia', 'ku1', 'kurnia@gmail.com', 'cibodas', '08467674673', 'peminjam'),
(8, 'sinta sidabutar', 'sinta sidabutar', 'sin2', 'sintasidabutar@gmail.com', 'batujajar perumahan giri asih', '08763675373', 'peminjam'),
(9, 'rifal mu\'arif', 'rifal', 'rifal2315', 'rifal@gmaail.com', 'citapen', '084747637', 'peminjam'),
(10, 'wahyudin', 'wahyu', 'wahyu12', 'yudin@gmaail.com', 'cililin', '008466363', 'peminjam'),
(11, 'krisna', 'krisna', 'nana2312', 'krinatusna@gmail.com', 'cimanglid', '0846362772', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku_Fk`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `peminjam`
--
ALTER TABLE `peminjam`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD CONSTRAINT `peminjam_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
