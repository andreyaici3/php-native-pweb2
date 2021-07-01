-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 15.37
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Tips & Trik'),
(2, 'Informasi Pengetahuan'),
(3, 'internet'),
(5, 'Internet Money');

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE `postingan` (
  `id_postingan` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `thumbnail` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `slug` varchar(100) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `postingan`
--

INSERT INTO `postingan` (`id_postingan`, `judul`, `thumbnail`, `isi`, `slug`, `date_post`, `id_user`) VALUES
(1, 'Simak Tips Membeli Tanah Kavling yang Baik dan Benar Wajib diketahui', 'user.jpg', 'Ingin membeli tanah kavling? Tapi khawatir salah dalam mengambil langkah. Ya memang tanah kavling sudah banyak tersebar dimana mana, sehingga sebenarnya tidak sulit untuk melakukan pembelian berupa tanah kavling. Namun, yang namanya membeli tanah pasti bukan hal yang dapat dilakukan secara sembarangan. Anda perlu mengetahui tips dan trik yang baik dan benar dalam membeli tanah kavling yang aman dan wajib diketahui.\r\n\r\nApa yang membuat Anda tertarik membeli tanah kavling? Kebanyakan orang memilih membeli tanah kavling karena lokasinya yang cenderung strategis dan berpeluang apabila dikembangkan memiliki nilai yang lumayan besar. Menurut pengertiannya tanah sendiri masuk dalam aset properti yang sangat menarik untuk dimiliki.\r\n\r\nSetiap tahun harga tanah kerap mengalami peningkatan, meskipun demikian biaya perawatan untuk tanah kavling sendiri relatif lebih mudah apabila dibandingkan dengan properti berbentuk bangunan atau membangun rumah. Sedang mencari properti tanah kavling tapi tidak tahu caranya? \r\n\r\nJangan khawatir, sebagai berikut kita akan membahas deretan tips membeli tanah kavling yang aman dan bebas dari penipuan. Mari simak.', 'simak-tips-membeli-tanah-kavling-yang-baik-dan-benar-wajib-diketahui', '2021-06-30 16:17:57', 1),
(5, 'Review PayLater Traveloka Transaksi Cepat Bayar Nanti', 'Paylater-traveloka.jpg', '<p>Paylater Traveloka merupakan solusi untuk menyelesaikan masalah transaksi pembayaran yang cepat dan aman bayar nanti yang banyak diminati saat ini. Lantas, bagaimana cara mengaktifkan paylater traveloka? Nah, Sebelum itu kita pasti ingin tahu tentang Paylater Traveloka ini bukan? Mulai dari cara menggunakannya, kelebihan dan kekurangannya sampai dengan testimoni pay later traveloka&nbsp;dari para pengguna sebelumnya yang sudah memakainya.<br />\r\n<br />\r\nSebelumnya ada banyak muncul pro dan kontra dari penggunaan fitur canggih ini karena beberapa kasus paylater traveloka&nbsp;yang sempat timbul di dalam masyarakat. Sebenarnya, kondisi dimana kemungkinan paylater traveloka bermasalah&nbsp;ini bisa dihindari apabila pengguna paham terkait cara penggunaan yang baik dan benar termasuk menghindari modus penipuan seperti Gesek Tunai atau Gestun traveloka paylater.<br />\r\n<br />\r\nPadahal ada banyak sekali keunggulan dari pemanfaatan paylater traveloka atau juga paylater traveloka card. Salah satu keunggulannya adalah kita bisa bayar pesanan yang makin fleksibel dengan kartu kredit untuk membayar cicilan traveloka&nbsp;dengan biaya murah. Selain itu, transaksinya aman karena traveloka paylater&nbsp;sudah diawasi oleh OJK.<br />\r\n<br />\r\nSupaya terhindar dari masalah paylater traveloka&nbsp;karena kurang paham terkait cara kerjanya, sebagai berikut yuk kita kenalan sama Paylater Traveloka berdasarkan hasil review yang disajikan. Silahkan disimak.<br />\r\n<br />\r\n<strong>Review PayLater Traveloka Transaksi Cepat Bayar Nanti</strong><br />\r\n<img src=\"https://1.bp.blogspot.com/-gEtg1aLQWIc/YNVUPLgJqZI/AAAAAAAAFsQ/ZsOhO35-IwU9tnr9h_sOs8NDAKHIoY_UgCLcBGAsYHQ/s320/Paylater%2Btraveloka.jpg\" /></p>\r\n\r\n<p>Saat ini, teknologi sudah berkembang dengan pesat. Sudah bukan lagi jamannya mengeluarkan uang dulu kalau mau pergi&nbsp;<a href=\"https://www.mastimon.com/2019/09/liburan-keluarga-di-akhir-tahun.html\" target=\"_blank\">berlibur</a>. Pernah tidak sobat punya kebutuhan mendesak dan harus pergi mendadak tapi belum punya modal? Solusinya adalah dengan menggunakan Paylater Traveloka ini nih. Sudah banyak orang merasa puas menggunakannya dan bisa digunakan untuk bayar semua produk.<br />\r\n<br />\r\nKabar baiknya di Traveloka juga sudah menghadirkan kartu kredit dengan logo VISA yang dapat dipergunakan juga baik di dalam maupun luar negeri loh. Namanya adalah Paylater Traveloka Card yang ada wujud fisiknya. Ini karena Traveloka sendiri sudah melakukan kerja sama dengan BRI.<br />\r\n<br />\r\nTertarik untuk menggunakannya juga? Coba simak informasi cara apply Paylater Traveloka di bawah ini lengkap fasilitas unggul yang bisa Anda raih. Cekidot.<br />\r\n<br />\r\n<strong>Tutorial cara Apply Paylater Traveloka</strong><br />\r\n<br />\r\n<strong>1. Sudah memiliki akun di Traveloka</strong><br />\r\n<br />\r\nUntuk melakukan pendaftaran supaya segera mendapatkan Traveloka Paylater Card, yang perlu kita pastikan terlebih dahulu adalah kita sendiri sudah memiliki akun yang terdaftar di aplikasi Traveloka. Jika kita belum punya, coba buat akun terlebih dahulu di Traveloka. Mudah sekali kok, hanya dengan beberapa langkah saja.<br />\r\n<br />\r\n<strong>2. Mengakses Paylater</strong><br />\r\n<br />\r\nSetelah memastikan kalau kita sudah punya akun di Traveloka, pertama tama yang perlu kita lakukan adalah mengakses akun Paylater. Disitu kita akan dikenalkan dengan pembayaran memanfaatkan PayLater ataupun Traveloka Paylater Card.<br />\r\n<br />\r\nNah, kita tinggal pilih lanjutkan untuk mendaftar akun Paylater. Di halaman awal website atau aplikasi Traveloka, kita buka halaman pendaftaran. Apabila kita sudah memenuhi syarat pendaftaran, maka akan tampak opsi Paylater Card di formulir.<br />\r\n<br />\r\n<strong>3. Melengkapi Formulir Pendaftaran</strong><br />\r\n<br />\r\nPada bagian formulir, kita harus memasukkan data identitas pribadi kita seperti pekerjaan, keluarga yang diperlukan. Jangan lupa untuk menyiapkan juga foto KTP yang akan dibutuhkan pada saat ambil foto selfie dan memotretnya sebagai data secara langsung.<br />\r\n<br />\r\n<strong>4. Menunggu proses peninjauan dan persetujuan</strong><br />\r\n<br />\r\nBerapa lama biasanya proses peninjauan pendaftaran kita dilakukan? Jangan khawatir, tidak lama kok, bahkan hanya membutuhkan waktu hanya sekitar 1 minggu saja. Nah, nantinya untuk status terbaru akan diberitahukan kepada kita melalui pemberitahuan di aplikasi.<br />\r\n<br />\r\n<strong>5. Menunggu Kartu Fisik</strong><br />\r\n<br />\r\nApabila pengajuan kita sudah di setujui atau approval, maka selanjutnya kita tinggal menunggu saja kartu fisiknya datang ke alamat yang kita cantumkan. Untuk durasi lama waktu pengiriman sendiri berbeda beda sesuai dengan lokasi yang dituju. Mungkin bisa mencapai waktu paling lama yakni 2 minggu.<br />\r\n<br />\r\n<strong>Keunggulan PayLater Traveloka</strong><br />\r\n<br />\r\nSudah tahu cara mendaftar dan dapat akun Traveloka Paylater belum lengkap kalau belum tahu apa saja nih keunggulan atau kelebihan yang bisa kita dapat dari menggunakan Paylater Traveloka Card ini. Dengan tahu kelebihannya kita jadi bisa lebih memanfaatkannya secara maksimal. Ingin tahu apa saja? Simak poin poinnnya di bawah ini yuk :<br />\r\n<br />\r\n<strong>1. Proses pembuatan akun dan kartu yang cepat</strong><br />\r\n<br />\r\nSeperti yang sudah kita bahas sebelumnya terkait proses pembuatan traveloka paylater yang cepat dan mudah, inilah yang menjadi salah satu keunggulannya. Hanya dengan perangkat yang terkoneksi dengan jaringan internet kita bisa langsung buka aplikasi Traveloka dan daftar Paylater dengan beberapa tahapan mudah. Baik dari segi syarat maupun waktu yang dibutuhkan sama sama cepat dan mudah bukan?<br />\r\n<br />\r\n<strong>2. Real time history</strong><br />\r\n<br />\r\nMenariknya, saat kita sudah menggunakan paylater traveloka, semua transaksi yang kita lakukan diupdate secara real time dan terperinci. Hal ini tentu sangat memudahkan kita untuk bisa mengontrol pengeluaran atau keuangan dengan baik bukan? Kita jadi tidak takut akan kelebihan limit karena kita bisa melakukan pengaturan limit sendiri supaya tidak sampai melebihi batas pemakaian.<br />\r\n<br />\r\n<strong>3. Bisa beli dulu bayar nanti</strong><br />\r\n<br />\r\nDi traveloka ada banyak sekali produk yang tersedia. Semua layanan dan fasilitas tersebut bisa kita nikmati sepuasnya. Bagaimana caranya? Ya, kita bisa beli dulu tanpa bayar dan bayar nanti dengan keringanan cicilan sampai dengan 1 hingga 12 bulan. Menariknya kita bisa mengatur pembayarannya sendiri dikemudian hari loh. Poin satu ini memang sangat cocok untuk Anda yang ingin bepergian secara mendadak.<br />\r\n<br />\r\n<strong>4. Keamanan data pengguna yang terjamin</strong><br />\r\n<br />\r\nBerbicara dari segi keamanan, Paylater traveloka memang sudah dijamin aman berbeda dengan penyedia layanan online cicilan lainnya. Semua data dari pengguna termasuk semua transaksi yang dilakukan dengan menggunakan Paylater tidak akan tersebar ke pihak lainnya. Jadi kita tidak perlu khawatir kalau data kita akan disalahgunakan. Kita juga bisa merasa aman karena Paylater Traveloka secara resmi terdaftar di Otoritas Jangka Keuangan atau OJK.<br />\r\n<br />\r\n<strong>5. Tidak ada biaya tambahan</strong><br />\r\n<br />\r\nUmumnya banyak orang khawatir karena biaya tambahan di kartu kredit padahal hanya berbelanja sedikit saja. Nah, di Paylater Traveloka ini Anda tidak akan merasa khawatir karena masalah serupa. Sebab tidak ada biaya tambahan dalam bentuk apapun.</p>\r\n\r\n<p>Jadi kita hanya perlu bayar biaya yang ada di halaman pembayaran saja loh. Dengan Paylater kita bisa melakukan cicilan online tanpa kartu kredit, tidak ada uang muka bahkan tidak ada tagihan biaya tahunan. Menarik sekali bukan?<br />\r\n<br />\r\n<strong>6. Pembayaran transaksi yang mudah</strong><br />\r\n<br />\r\nUntuk metode pembayaran transaksi di Paylater Traveloka juga sangat memudahkan. Hanya cukup beberapa langkah atau beberapa klik saja, kita bisa melakukan transfer bank,&nbsp;<em>virtual account</em>&nbsp;maupun ATM dengan cepat. Hal ini tentu selaras dengan kehidupan masyarakat jaman sekarang yang menginginkan pemenuhan kebutuhan yang serba praktis kapan saja dan dimana saja bukan?<br />\r\n<br />\r\nUraian diatas adalah informasi terbaru yang mengulas tentang review Paylater Traveloka dengan berbagai kemudahan transaksi yang cepat dan bisa bayar belakangan. Yap, Anda bisa mendapatkan&nbsp;<strong><a href=\"https://www.traveloka.com/id-id/travelokapay/paylater\" target=\"_blank\">Cicilan Kredit</a></strong>&nbsp;yang aman dengan proses yang cepat dan banyak promo tambahan yang bukannya merugikan malah bikin Anda makin untung. #JujurGunaBanget buat kita yang hidup dijaman modern sekarang ini untuk transaksi segala aktivitas.<br />\r\n<br />\r\nAnda bisa memenuhi berbagai kebutuhan dengan mudah dan cepat melalui perangkat Anda dengan menggunakan Paylater Traveloka. Termasuk produk jalan jalan seperti&nbsp;<a href=\"https://www.mastimon.com/2019/05/10-hotel-kapsul-jakarta-pusat-murah.html\" target=\"_blank\">pesan hotel</a>, tiket pesawat, bus dan travel sampai dengan pembayaran tagihan sehari hari. Tunggu apa lagi, segera daftar sekarang dan manfaatkan semua fitur canggih di Traveloka Paylater secara optimal untuk kenyamanan Anda. Semoga bermanfaat.</p>\r\n', 'review-paylater-traveloka-transaksi-cepat-bayar-nanti', '2021-07-01 04:01:19', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_kat_detail`
--

CREATE TABLE `post_kat_detail` (
  `id` int(11) NOT NULL,
  `id_postingan` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post_kat_detail`
--

INSERT INTO `post_kat_detail` (`id`, `id_postingan`, `id_kategori`) VALUES
(1, 1, 1),
(13, 5, 1),
(14, 5, 2),
(15, 5, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`) VALUES
(1, 'Andrey Andriansyah', 'andreyandri90@gmail.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f'),
(2, 'Mohammad Irwansyah Somantri', 'mirwansyah1933@gmail.com', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30'),
(3, 'Nida', 'nida@gmail.com', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30'),
(4, 'Dini', 'dini@gmail.com', 'a346bc80408d9b2a5063fd1bddb20e2d5586ec30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_postingan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `post_kat_detail`
--
ALTER TABLE `post_kat_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_postingan` (`id_postingan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_postingan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `post_kat_detail`
--
ALTER TABLE `post_kat_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `postingan`
--
ALTER TABLE `postingan`
  ADD CONSTRAINT `postingan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `post_kat_detail`
--
ALTER TABLE `post_kat_detail`
  ADD CONSTRAINT `post_kat_detail_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `post_kat_detail_ibfk_2` FOREIGN KEY (`id_postingan`) REFERENCES `postingan` (`id_postingan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
