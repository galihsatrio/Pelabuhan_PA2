-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 10 Jul 2022 pada 16.00
-- Versi server: 5.7.36
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_pelabuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `batas`
--

DROP TABLE IF EXISTS `batas`;
CREATE TABLE IF NOT EXISTS `batas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batas_penumpang` int(11) DEFAULT '17',
  `batas_kendaraan` int(11) DEFAULT '17',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `batas`
--

INSERT INTO `batas` (`id`, `batas_penumpang`, `batas_kendaraan`) VALUES
(1, 34, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

DROP TABLE IF EXISTS `beritas`;
CREATE TABLE IF NOT EXISTS `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_berita` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `beritas`
--

INSERT INTO `beritas` (`id`, `title`, `tgl_berita`, `image`, `description`, `sumber`, `created_at`, `updated_at`) VALUES
(1, 'Pelabuhan Balige Resmi Berganti Nama jadi Pelabuhan Mulia Raja Napitupulu', '2021-11-21', 'cmCm9us60Oe26v8STMbJ1TABrgKtu7N9KvP3Vtgh.jpg', 'Pemerintah Kabupaten Toba bersama Balai Pengelolaan Transportasi Darat Wilayah II Sumatera resmi menabalkan Pelabuhan Kapal Motor Penyeberangan Balige di tepian Danau Toba Kota Balige, Kecamatan Balige, Kabupaten Toba, menjadi Pelabuhan Mulia Raja Napitupulu Balige, Sabtu (20/11/2021).\r\n\r\nPenabalan nama pelabuhan tersebut dihadiri langsung Bupati Toba Poltak Sitorus didampingi Wakil Bupati Tonny Simanjuntak, Kepala BPTD Wilayah II Sumatera Batara Pardede, Ketua DPRD Toba Effendi Napitupulu, Dandim 0210/TU Mayor Inf.Kaminton Napitupulu, Kabag Ops Polres Toba Kompol Jhony Andries Siregar dan perwakilan Kejaksaan Negeri Toba Samosir serta PN Balige, para tokoh masyarakat, adat, agama, dan pemuda marga Napitupulu.\r\n\r\nBupati Toba Poltak Sitorus dalam sambutannya menyampaikan, nama Mulia Raja Napitupulu adalah salah satu nama besar dari 4 marga keturunan Raja Sonak Malela (Simangunsong, Marpaung, Napitupulu dan Pardede).', 'TOBA, METRODAILY.id', '2022-05-18 23:43:14', '2022-06-17 08:51:59'),
(2, 'Pelabuhan Penyeberangan Mulia Raja Balige Dilengkapi ALMA', '2022-04-29', 'o4L9BvEyJleQ1JagOjotDbh9wLhVkQAGVy29V2CT.jpg', 'Pelabuhan Mulia Raja Napitupulu Balige, Kabupaten Toba, telah dilengkapi dengan Anjungan Listrik Mandiri (ALMA), sehingga kapal penyeberangan KM Porapora sudah bisa memanfaatkannya. Demikian halnya dengan kendaraan listrik juga sudah dapat melakukan pengecasan di tempat tersebut.\r\n\r\n\"KMP Porapora yang selama ini saat bersandar di pelabuhan menggunakan genset untuk keperluannya, sejak hari ini digantikan dengan ALMA. Selain itu, mobil listrik juga dapat mengecas di sini,\" ujar Manajer Perusahaan Listrik Negara (PLN) Persero UP3 Area Sibolga, Darwin Simanjuntak, Kamis (28/4) saat peresmian operasional ALMA.\r\n\r\nMenurutnya, ALMA di Balige dan pelabuhan Muara yang baru diresmikan adalah yang ketiga setelah Medan dan Pematangsiantar.\r\n\r\nPenggunaan ALMA ini, lanjutnya, sesuai dengan arahan Presiden Republik Indonesia, Joko Widodo, untuk mengurangi pemakaian bahan bakar minyak solar hingga 40 persen sekaligus mendukung program Go Green agar Danau Toba tidak tercemar. (G1/f)', 'Tribun Medan/Maurits Pardosi', '2022-05-19 00:19:13', '2022-06-17 08:51:47'),
(3, 'Peresmian Dan Pengoperasian Tujuh Pelabuhan Serta Empat Kapal Motor Penyeberangan Di Kawasan Danau Toba', '2022-02-02', '4ouDfvz2qTDqnArQikv78seGazBdL8eDcaUzXuw8.jpg', 'Hari ini, tujuh pelabuhan penyeberangan di Kawasan Danau Toba sudah selesai dibangun dan bisa dimanfaatkan oleh masyarakat. Ketujuh pelabuhan itu meliputi Pelabuhan Ajibata dan (Pelabuhan) Balige di Kabupaten Toba, Pelabuhan Tiga Ras di Kabupaten Simalungun, Pelabuhan Simanindo di Kabupaten Samosir, Pelabuhan Marbun Toruan/Baktiraja di Kabupaten Humbang Hasundutan, Pelabuhan Muara di Kabupaten Tapanuli Utara, Pelabuhan Tongging di Kabupaten Karo.\r\n\r\nPelabuhan dan kapal sangat dibutuhkan oleh masyarakat yang tinggal di sekitar Danau Toba untuk mendukung aktivitas dan mobilitas sehari-hari, menyeberang dari satu pelabuhan ke pelabuhan lain, meningkatkan konektivitas antarkecamatan dan antarkabupaten.\r\n\r\nUntuk memperlancar konektivitas di Kawasan Danau Toba, Kementerian Perhubungan menyampaikan bahwa pemerintah membangun 13 pelabuhan penyeberangan yang tersebar di tujuh kabupaten.\r\n\r\nHadirin yang saya hormati,\r\nSaya melihat (bahwa) yang dibutuhkan masyarakat di sekitar Danau Toba bukan hanya pelabuhan, melainkan juga kapal. Karena itu, hari ini pemerintah meluncurkan empat kapal motor penyeberangan, yaitu Kapal Motor Penyeberangan Pora-Pora (yang) berkapasitas 180 penumpang dan 21 kendaraan, Kapal Motor Penumpang Kaldera Toba (yang) berkapasitas 152 penumpang dan 15 kendaraan, Bus Air Kapal Motor Penumpang Asa-Asa dengan kapasitas 150 penumpang, dan Bus Air Kapal Motor Penumpang Jurung-Jurung dengan kapasitas 150 penumpang. Keberadaan kapal ini sangat penting karena selama ini masyarakat menggunakan kapal rakyat yang standar keselamatannya kurang bisa diandalkan.\r\n\r\nSaya berharap, dengan beroperasinya pelabuhan dan kapal-kapal ini, akan mendukung keberadaan destinasi pariwisata super prioritas Danau Toba sebagai salah satu destinasi wisata unggulan di Indonesia. Aksesnya ke berbagai tempat di Danau Toba akan menjadi lebih mudah, lebih cepat, dan lebih lancar.\r\n\r\nSaya rasa itu yang bisa saya sampaikan pada kesempatan yang baik ini. Dan dengan mengucap bismillahirrahmanirrahim, saya resmikan pengoperasian tujuh pelabuhan dan empat kapal motor penyeberangan pada sore hari ini.\r\n\r\nTerima kasih.', 'presidenri.go.id', '2022-06-03 09:25:22', '2022-06-17 07:08:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

DROP TABLE IF EXISTS `galeris`;
CREATE TABLE IF NOT EXISTS `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', '00kL9szHSFP12yYuFStLQYyVm2DhwZSAZgBP9e6W.jpg', '2022-05-18 23:46:14', '2022-06-18 23:48:22'),
(2, '2', 'l3opeGYwfDf2pHZlBRyB9r6nLQlbUdb4Fq7RuYGX.jpg', '2022-05-18 23:46:26', '2022-06-18 23:47:44'),
(3, '3', 'Kpf7tTOaq0rIsf3OSE7VqjXOlpzG5sX4M5bx00JS.jpg', '2022-05-18 23:46:36', '2022-06-18 23:46:39'),
(4, '4', 'QcOLS9vwUnBsvblVpEXBd60ZOAs9NQ1sV51StJcW.jpg', '2022-05-18 23:46:47', '2022-06-18 23:46:18'),
(5, '5', 'kuASJn0PrWjgYvsxuaPGuGZyIJXof2gQDtl7TUOt.jpg', '2022-05-18 23:46:57', '2022-06-18 23:46:01'),
(6, '6', '2N1A9YxfWgqrXfh4EkwqbXVVjQYNe2Ah6FnStfMq.jpg', '2022-05-18 23:47:06', '2022-06-18 23:45:28'),
(7, '7', 'CYTv2zTIdahAIRLsrvMN0dDb3adusJlhFjCV1miQ.jpg', '2022-05-18 23:47:14', '2022-06-18 23:45:11'),
(8, '8', 'Qlrfcc17VsPXeyQCW9o1QF7M0N8CpzV83qxYEFyp.jpg', '2022-05-18 23:47:22', '2022-06-18 23:44:58'),
(9, '9', 'dYnbF8lg46OMaBbwlNK68i5QnJNxSch3MeS9rXjO.jpg', '2022-05-18 23:47:30', '2022-06-18 23:44:49'),
(10, '10', 'WTNXh4bCQA6QEq0uqbYzZTUMgx1VIyW5WZ4sFXT7.jpg', '2022-05-18 23:47:39', '2022-06-18 23:44:39'),
(11, '11', 'QgCqKA6cVGFrlpngjF58xhXjIjvsdHrFUoVSPbaI.jpg', '2022-05-18 23:47:49', '2022-06-18 23:44:01'),
(12, '12', 'g42txA99JNDJVMpom47zSeyBMgLmRrtu11FVxkp4.jpg', '2022-05-18 23:47:57', '2022-06-18 23:43:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasis`
--

DROP TABLE IF EXISTS `informasis`;
CREATE TABLE IF NOT EXISTS `informasis` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `informasis`
--

INSERT INTO `informasis` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Jadwal Keberangkatan Bulan April', 'AjsbWjKjnV88l77qdtUXUdFxgv1FZ7rKodrjAxN6.jpg', 'April', '2022-05-18 23:44:10', '2022-06-17 07:47:47'),
(2, 'Jadwal Keberangkatan Bulan Mei', 'UQcQMXF0vvD3YedRZ6i6vTQPR5AHN8bu8TaCdZq5.jpg', 'Mei', '2022-05-18 23:45:10', '2022-06-17 07:47:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id`, `kode`, `pesanan_id`, `total`, `created_at`, `modified_at`) VALUES
(1, 'INVC006', 16, 57000, '2022-07-09 17:00:00', NULL),
(2, 'INVC006', 20, 19000, '2022-07-10 05:09:27', NULL),
(3, 'INVC007', 21, 38000, '2022-07-10 07:46:50', NULL),
(4, 'INVC004', 23, 73000, '2022-07-10 08:17:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraans`
--

DROP TABLE IF EXISTS `kendaraans`;
CREATE TABLE IF NOT EXISTS `kendaraans` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_polisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) DEFAULT '54000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `kendaraans`
--

INSERT INTO `kendaraans` (`id`, `tanggal`, `pesanan_id`, `waktu`, `nama`, `jenis`, `no_polisi`, `harga`, `created_at`, `updated_at`) VALUES
(1, '2022-05-11', 13, '08:00', 'Otniel Tambunan', 'Gol I (Sepeda Dayung)', 'N 98667 AAB', 54000, '2022-05-24 03:44:31', '2022-06-24 07:16:24'),
(15, '2022-06-27', 13, '08:00', 'Galih Satrio Wibisono', 'Gol II (Sepeda Motor_', 'N 82973 AAB', 54000, '2022-06-26 01:39:09', '2022-06-26 01:39:09'),
(16, '2022-07-11', 14, '07:00', 'Galih', 'Gol I (Sepeda Dayung)', NULL, 54000, '2022-07-07 11:34:17', '2022-07-09 19:28:39'),
(17, '2022-07-11', 15, '07:00', 'Galih Satrio Wibisono', 'Gol VII (Tronton)', '21313', 54000, '2022-07-07 11:34:57', '2022-07-09 19:40:31'),
(18, '2022-07-11', 16, '10:00', 'Buku 5', 'Gol VII (Tronton)', '21313', 54000, '2022-07-07 11:35:51', '2022-07-10 04:58:47'),
(21, '2022-07-11', 20, '10:00', 'Galih Satrio Wibisono', 'Gol V A (Bus Sedang)', '21313', 54000, '2022-07-08 21:29:46', '2022-07-10 05:09:27'),
(22, '2022-07-11', 21, '10:00', 'Galih Satrio Wibisono', 'Gol II (Sepeda Motor_', 'N 8908 AB', 54000, '2022-07-10 07:44:01', '2022-07-10 07:46:50'),
(23, '2022-07-11', 22, '07:00', 'Galih Satrio Wibisono', 'Gol I (Sepeda Dayung)', NULL, 54000, '2022-07-10 07:48:34', '2022-07-10 07:48:34'),
(24, '2022-07-11', 23, '07:00', 'Galih Satrio Wibisono', 'Gol II (Sepeda Motor_', NULL, 54000, '2022-07-10 07:51:10', '2022-07-10 07:51:10'),
(25, '2022-07-11', 24, '07:00', 'Galih Satrio Wibisono', 'Gol I (Sepeda Dayung)', NULL, 54000, '2022-07-10 07:59:55', '2022-07-10 07:59:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_19_020609_create_kendaraan_table', 1),
(6, '2022_04_19_045825_create_informasi_table', 1),
(7, '2022_04_19_123229_create_beritas_table', 1),
(8, '2022_04_28_084854_create_profiles_table', 1),
(9, '2022_05_04_033521_create_galeris_table', 1),
(10, '2022_05_07_104145_create_penumpangs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpangs`
--

DROP TABLE IF EXISTS `penumpangs`;
CREATE TABLE IF NOT EXISTS `penumpangs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pesanan_id` int(11) DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunas` tinyint(4) DEFAULT '0',
  `harga` int(11) DEFAULT '19000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `penumpangs`
--

INSERT INTO `penumpangs` (`id`, `pesanan_id`, `nama`, `jk`, `umur`, `alamat`, `lunas`, `harga`, `created_at`, `updated_at`) VALUES
(1, 13, 'Galih', 'Laki-Laki', '22', 'Tambunan', 1, 19000, '2022-05-24 03:37:58', '2022-06-25 18:16:41'),
(11, 13, 'Galih', 'Laki-Laki', '13', 'Puter', 0, 19000, '2022-06-26 01:39:09', '2022-06-26 01:39:09'),
(18, 14, 'Galih', 'Laki-Laki', '13', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-09 19:28:39', '2022-07-09 19:28:39'),
(19, 15, 'Galih', 'Laki-Laki', '12', 'Jl Puter  Tengah no.1', 0, 19000, '2022-07-09 19:40:31', '2022-07-09 19:40:31'),
(50, 16, 'Galih', 'Laki-Laki', '21', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 04:58:47', '2022-07-10 04:58:47'),
(51, 16, 'Santoso', 'Laki-Laki', '12', 'Jl Mawar', 0, 19000, '2022-07-10 04:58:47', '2022-07-10 04:58:47'),
(52, 16, 'Sanusi', 'Laki-Laki', '12', 'Jl Melati', 0, 19000, '2022-07-10 04:58:47', '2022-07-10 04:58:47'),
(53, 20, 'Galih', 'Laki-Laki', '19', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 05:09:27', '2022-07-10 05:09:27'),
(56, 21, 'Galih', 'Laki-Laki', '19', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 07:46:50', '2022-07-10 07:46:50'),
(57, 21, 'Anggita Shefiana', 'Perempuan', '17', 'Jl BUnga Mawar no.1', 0, 19000, '2022-07-10 07:46:50', '2022-07-10 07:46:50'),
(58, 22, 'Galih', 'Laki-Laki', '19', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 07:48:34', '2022-07-10 07:48:34'),
(59, 23, 'Galih Satrio', 'Laki-Laki', '19', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 07:51:10', '2022-07-10 07:51:10'),
(60, 24, 'Galih', 'Laki-Laki', '19', 'Jl Puter Tengah no.1', 0, 19000, '2022-07-10 07:59:55', '2022-07-10 07:59:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanans`
--

DROP TABLE IF EXISTS `pesanans`;
CREATE TABLE IF NOT EXISTS `pesanans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(250) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` varchar(100) DEFAULT NULL,
  `status_pembayaran` tinyint(4) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `konfirmasi` tinyint(4) DEFAULT '0',
  `konfirmasi_petugas` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanans`
--

INSERT INTO `pesanans` (`id`, `kode`, `tanggal`, `waktu`, `status_pembayaran`, `user_id`, `konfirmasi`, `konfirmasi_petugas`, `created_at`, `updated_at`) VALUES
(13, 'PMSN001', '2022-06-27', '08:00', 1, 9, 1, 0, '2022-06-26 01:39:09', '2022-06-26 01:39:09'),
(14, 'PMSN002', '2022-07-11', '07:00', 1, 9, 1, 0, '2022-07-07 11:34:17', '2022-07-09 19:28:39'),
(15, 'PMSN003', '2022-07-11', '07:00', 0, 9, 1, 0, '2022-07-07 11:34:57', '2022-07-09 19:40:31'),
(16, 'PMSN004', '2022-07-11', '10:00', 0, 9, 1, 0, '2022-07-07 11:35:51', '2022-07-10 04:58:47'),
(20, 'PMSN005', '2022-07-11', '10:00', 0, 9, 1, 0, '2022-07-08 21:29:46', '2022-07-10 05:09:27'),
(21, 'PMSN006', '2022-07-11', '10:00', 0, 9, 1, 0, '2022-07-10 07:44:01', '2022-07-10 07:46:50'),
(22, 'PMSN007', '2022-07-11', '07:00', 0, 9, 0, 0, '2022-07-10 07:48:34', '2022-07-10 07:48:34'),
(23, 'PMSN008', '2022-07-11', '07:00', 1, 9, 0, 0, '2022-07-10 07:51:10', '2022-07-10 07:51:10'),
(24, 'PMSN009', '2022-07-11', '07:00', 1, 9, 0, 0, '2022-07-10 07:59:55', '2022-07-10 07:59:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Profil', '1qka3E8EKjYS60ncRtNA2nZL43vBhi9oiCFNoB6I.jpg', 'Pelabuhan Balige di Kabupaten Toba, Provinsi Sumatera Utara yang sejak dulu namanya tidak asing di seluruh nusantara, sebagai salah satu pelabuhan penyeberangan vital di Danau Toba, kini namanya berganti menjadi Pelabuhan Mulia Raja Napitupulu Balige. Lewat nama Mulia Raja Napitupulu yang mengandung arti dan makna besar, Bupati Toba Poltak Sitorus berharap pelabuhan ini akan kelak membawa dampak positif dan besar mendorong aspek pembangunan kepariwisataan di Toba. Di samping itu, juga membawa mulia bagi keturunan marga Mulia Raja Napitupulu dan kemuliaan bagi Tuhan Yang Maha Esa.', '2022-05-16 05:49:15', '2022-06-17 07:45:19'),
(2, 'Sejarah', 'a6ogBGWw0N6hGN1hJbcT1UuNTrfwQnOZrJkPsSoj.jpg', 'Angkutan air pertama kali yang digunakan masyarakat Balige adalah Sampan Kecil. Sekitar tahun 1960 sampan besar tersebut berganti dengan Perahu layar yang mampu memuat barang dan penumpang dalam jumlah yang besar ton. Kemudian Kapal Motor ada pada tahun 1962 tetapi kapal motor ini hanya ada 1 dan hanya untuk mengangkut batu dari daerah Sigaol ke Balige. Kegiatan pemasaran hasil bumi dari Kabupaten Toba Samosir paling banyak dididstribusikan ke daerah Kabupaten Samosir, dan juga didistribusikan ke daerah lain seperti Kabupten Humbahas, Kabupaten Tapanuli. Semakin berkembangnya Danau Toba dan Pulau Samosir maka kebutuhan akan transportasi air semakin meningkat. Kemudian pada tahun 1997 Pemerintah Daerah Kabupaten Toba Samosir yang dulunya masih Universitas Sumatera Utara 44 dipegang oleh Kabupaten Tapanuli Utara mengganti dermaga kayu itu menjadi dermaga yang terbuat dari beton.', '2022-05-18 06:09:01', '2022-06-17 07:44:51'),
(3, 'Tentang Pelabuhan', '7bfFnbZtai9y4rpcZstWtYAynwTdemMM0XFLd2oQ.jpg', 'Pelabuhan Balige di Kabupaten Toba, Provinsi Sumatera Utara yang sejak dulu namanya tidak asing di seluruh nusantara, sebagai salahsatu pelabuhan penyeberangan vital di Danau Toba, kini namanya berganti menjadi Pelabuhan Mulia Raja Napitupulu Balige. Lewat nama Mulia Raja Napitupulu yang mengandung arti dan makna besar, Bupati Toba Poltak Sitorus berharap pelabuhan ini akan kelak membawa dampak positif dan besar mendorong aspek pembangunan kepariwisataan di Toba. Di samping itu, juga membawa mulia bagi keturunan marga Mulia Raja Napitupulu dan kemuliaan bagi Tuhan Yang Maha Kuasa.', '2022-05-18 06:46:35', '2022-06-17 07:44:26'),
(4, 'Selamat Datang di Pelabuhan!', 'J7bsSB4VPgIo9f9uyacQDUVWzF76xxISP4IsL0we.jpg', 'Penetapan nama Pelabuhan Mulia Raja Napitupulu, berdasarkan Surat Kementerian Perhubungan Dirjen Perhubungan Darat Nomor Ap./0611/16/DRJD/2021 tertanggal 29 Juli 2021 yang diteken oleh Dirjen Perhubungan Darat Budi Setiyadi.', '2022-05-18 06:49:58', '2022-06-17 07:43:47'),
(5, 'Jadwal 1', 'b2tenCRoCf8yDL5Z9Le2HfSuhFgBs6TcMCVZt89O.png', 'Jadwal', '2022-05-19 00:28:02', '2022-06-17 07:43:21'),
(6, 'Jadwal 2', 't81OF4cKCPFHNypVSC6GsSxL9tBh2GCHGXBHawdx.png', 'Jadwal 2', '2022-05-19 00:28:22', '2022-06-17 06:39:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `google_id`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ini akun Admin', 'admin', 'admin@example.com', NULL, NULL, '$2y$10$Bp5QjQcEt7PoSHPgNlUOleNmkUg5OzcwnCMcs7tlXwdOdgNd2zNsK', 'admin', 'RSpF6p9caJhkRYHrowYADgCIs4W9vVt3vTLHWbBv34C1b245BfMulab3ek9s', '2022-06-19 00:21:58', '2022-06-19 00:21:58'),
(2, 'ini akun petugas (non admin)', 'user', 'user@example.com', NULL, NULL, '$2y$10$1eG1E9B/GavBvtjjkd8uXusYdR1uvx4CLWMdniBW41EmMWC5gWNMW', 'petugas', '3LLpZLMYvDtu7u4GyUEqsBxa2VCum8jQKsduj9NFmG7wztS2zm7SdC6FGmXv', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(3, 'ini akun petugas (non admin)', 'petugas1', 'petugas1@example.com', NULL, NULL, '$2y$10$aJBel4322kR1LUlp144GaeLM.PSwwF2ACoGj72Ydd4T7r5iqHHMha', 'petugas', '2KSQSh3Gnp6BoPiw99MdLk4eRK7GvrNgppp7DGkyfFXJbZZ509xIsz1o2Yb7', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(4, 'ini akun petugas (non admin)', 'petugas2', 'petugas2@example.com', NULL, NULL, '$2y$10$CWlocgObkay8496sME9cmu.OT5uaB9.5ej2Q3Y/4msM3H3f2XaM9q', 'petugas', 'N1GWdvRwUhnI0z5RoGVUnWzATi206wKaLoSWJ82jKzthiFLHHoYnmES4j5Ce', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(5, 'ini akun Customer (non admin)', 'petugas3', 'petugas3@example.com', NULL, NULL, '$2y$10$3D5ldTytd3aGLum8zxWuae/gORvIzivXdJq7n2x82m0VXCzVhfp4W', 'petugas', 'uy92wmWezF0TGacLdklyitBRtGFjUWlErVKOVXUfohZXQLiruwcwInhHzge3', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(6, 'ini akun petugas (non admin)', 'petugas4', 'petugas4@example.com', NULL, NULL, '$2y$10$/SjWZTxmaxlowq/SwO3dA.cxzRNRSoT5SB0WdBcbqEV59gjcd2F1e', 'petugas', 'iQx6paPK5Nj1VevBvwEGBcgOd5eOesEWR4JcxYM8MPoCfIB5Bs1ZX5n4oyaY', '2022-06-19 00:21:59', '2022-06-25 17:19:59'),
(7, 'ini akun Customer (non admin)', 'petugas5', 'petugas5@example.com', NULL, NULL, '$2y$10$n4vA2PSgQJxhxL8c2O5ZE.RHd5B9RDJ1MEyRydTu.XYo/OlO9T7Ra', 'petugas', '2pcn4qO0raBnUjkyYz9QYeapS4HuVDkXn43LGZsNJEu3CJLHoKPaBPbnXzyC', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(8, 'ini akun Customer (non admin)', 'otniel', 'otniel@example.com', NULL, NULL, '$2y$10$ib/Ckq4iFx1c8NcwiGmKxevYJfGwDmT5QkipBLZFJMHRxBpIiECjO', 'pelanggan', 'Eyq9UquhYOtwz4bNr69E4M9zZWf7Lzg9a9ltSaYxdfdLBUbWJ2QKGF16doaO', '2022-06-19 00:21:59', '2022-06-19 00:21:59'),
(9, 'Galih Satrio Wibisono', 'galihsatrio', 'sgalih1234@gmail.com', NULL, NULL, '$2y$10$Bp5QjQcEt7PoSHPgNlUOleNmkUg5OzcwnCMcs7tlXwdOdgNd2zNsK', 'pelanggan', NULL, '2022-06-23 16:52:12', '2022-06-23 16:52:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
