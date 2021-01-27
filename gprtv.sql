-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 06.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gprtv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Iklan Layanan Masyarakat', 'iklan-layanan-masyarakat', '2021-01-19 07:09:39', '2021-01-19 07:10:11'),
(2, 'Dialog', 'dialog', '2021-01-19 07:10:20', '2021-01-19 07:10:20'),
(3, 'Dokumenter', 'dokumenter', '2021-01-19 07:10:26', '2021-01-19 07:10:26'),
(4, 'Hiburan', 'hiburan', '2021-01-19 07:10:34', '2021-01-19 07:10:34'),
(5, 'Magazine', 'magazine', '2021-01-19 07:10:40', '2021-01-19 07:10:40'),
(6, 'Drama', 'drama', '2021-01-19 07:10:48', '2021-01-19 07:10:48'),
(7, 'Film Pendek', 'film-pendek', '2021-01-23 05:09:29', '2021-01-23 05:09:29'),
(8, 'Berita', 'berita', '2021-01-23 05:25:16', '2021-01-23 05:25:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansis`
--

CREATE TABLE `instansis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `instansis`
--

INSERT INTO `instansis` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Badan Usaha Milik Negara', 'badan-usaha-milik-negara', '2021-01-19 07:12:46', '2021-01-19 07:12:46'),
(2, 'Kementerian Komunikasi dan Informatika', 'kementerian-komunikasi-dan-informatika', '2021-01-19 07:12:54', '2021-01-19 07:12:54'),
(3, 'Kementerian Desa, Pembangunan Daerah Tertinggal, dan Transmigrasi', 'kementerian-desa-pembangunan-daerah-tertinggal-dan-transmigrasi', '2021-01-19 07:13:56', '2021-01-19 07:13:56'),
(4, 'Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi', 'kementerian-pendayagunaan-aparatur-negara-dan-reformasi-birokrasi', '2021-01-19 07:14:32', '2021-01-19 07:14:32'),
(5, 'Kementerian Pariwisata dan Ekonomi Kreatif', 'kementerian-pariwisata-dan-ekonomi-kreatif', '2021-01-19 07:14:54', '2021-01-19 07:14:54'),
(8, 'Kementerian Energi dan Sumber Daya Mineral', 'kementerian-energi-dan-sumber-daya-mineral', '2021-01-21 02:44:35', '2021-01-21 02:44:35'),
(9, 'PT. Bank Rakyat Indonesia (Persero)', 'pt-bank-rakyat-indonesia-persero', '2021-01-23 13:22:20', '2021-01-23 13:22:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_10_041950_create_categories_table', 1),
(5, '2021_01_10_042200_create_tags_table', 1),
(6, '2021_01_16_024617_create_instansis_table', 1),
(7, '2021_01_19_130828_create_videos_table', 1),
(8, '2021_01_19_135921_create_video_tag_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'COVID-19', 'covid-19', '2021-01-19 07:11:05', '2021-01-19 07:11:05'),
(2, 'GPRTV', 'gprtv', '2021-01-19 07:11:26', '2021-01-19 07:11:26'),
(3, 'Pariwisata', 'pariwisata', '2021-01-19 07:11:32', '2021-01-19 07:11:32'),
(4, 'BUMN', 'bumn', '2021-01-19 07:12:06', '2021-01-19 07:12:06'),
(5, 'gprtv.id', 'gprtvid', '2021-01-19 07:12:13', '2021-01-19 07:12:13'),
(6, 'Kominfo', 'kominfo', '2021-01-23 05:09:55', '2021-01-23 05:09:55'),
(7, 'Berita', 'berita', '2021-01-23 05:25:29', '2021-01-23 05:25:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `nik`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Fido', 'admin@gmail.com', '3510031710010003', 'admin', NULL, '$2y$10$fAZCUssOdDItMdYHXTYEbuKCqyoAYmrLFFACiK2Nu9TVIgLS6TBa6', NULL, '2021-01-19 06:55:56', '2021-01-19 06:55:56'),
(2, 'Fazel', 'Priyono', 'fazelpriyono@gmail.com', '3510020705060002', 'user', NULL, '$2y$10$2NCydvvUkdWiadkVdr9/Ne1/Coh6n6z.GCD0x5imFMyRD2xaq9QNm', NULL, '2021-01-19 21:13:43', '2021-01-19 21:13:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `instansi_id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_file` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `user_id`, `category_id`, `instansi_id`, `thumbnail`, `title`, `slug`, `link_file`, `cover`, `file`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, NULL, 'Mari kita #BersamaJagaIndonesia Update', 'mari-kita-bersamajagaindonesia', 'https://www.youtube.com/embed/CGH3gc3LeOk?feature=youtu.be', NULL, NULL, '<p><span class=\"style-scope yt-formatted-string\" dir=\"auto\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Hargai kerja keras para tenaga medis, media, relawan, tenaga harian, dan mereka semua yang selama ini bahu membahu melawan COVID-19. Rasa rindu akan keluarga dan kampung halaman makin besar jelang Ramadan. Tapi rasa sayang dan ingin melindungi keluarga juga diri kita dari&nbsp;</span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" dir=\"auto\" spellcheck=\"false\" href=\"https://www.youtube.com/results?search_query=%23covid19\" style=\"box-sizing: border-box; background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">#covid19</a><span class=\"style-scope yt-formatted-string\" dir=\"auto\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;harus diutamakan. Maka&nbsp;</span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" dir=\"auto\" spellcheck=\"false\" href=\"https://www.youtube.com/results?search_query=%23TundaMudikDulu\" style=\"box-sizing: border-box; background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">#TundaMudikDulu</a><span class=\"style-scope yt-formatted-string\" dir=\"auto\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;menjadi keputusan yang perlu dipertimbangkan. Manfaatkan dulu teknologi&nbsp;</span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" dir=\"auto\" spellcheck=\"false\" href=\"https://www.youtube.com/results?search_query=%23KaryaAnakNegeri\" style=\"box-sizing: border-box; background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">#KaryaAnakNegeri</a><span class=\"style-scope yt-formatted-string\" dir=\"auto\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">&nbsp;yang sudah maju untuk sementara melepas rindu, bersilaturahmi dengan seluruh anggota keluarga di kampung halaman. Demi Indonesia yang sehat dan bersatu.</span><br></p>', '2021-01-19 20:53:33', '2021-01-25 09:19:07'),
(2, 1, 1, 8, 'https://img.youtube.com/vi/sC7nWtmc0YU/maxresdefault.jpg', 'Tunda Pulang Untuk yang Tersayang #DibalikSuara', 'tunda-pulang-untuk-yang-tersayang-dibaliksuara', 'https://www.youtube.com/embed/sC7nWtmc0YU?feature=youtu.be', NULL, NULL, '<p><span class=\"style-scope yt-formatted-string\" dir=\"auto\" style=\"box-sizing: border-box; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Ini memang berat, namun ini mungkin yang paling tepat. Tunda pulang kita untuk sesaat. Kondisi ini, menunda pulang adalah keputusan tepat. Bukan karena kita tak sayang, tapi kita berharap segera menang. Jangan sampai kita membawa virus atau penyakit pulang. Harap kita dapat segera pulang dan tertawa senang. Dengan keluarga dan kerabat yang tersayang. Mari bersama kita panjatkan doa. Kita berjuang dengan porsi kita. Terus doakan tenaga medis yang masih berjuang untuk semua, kita berjuang&nbsp;</span><a class=\"yt-simple-endpoint style-scope yt-formatted-string\" dir=\"auto\" spellcheck=\"false\" href=\"https://www.youtube.com/results?search_query=%23DiRumahAja\" style=\"box-sizing: border-box; background-color: rgb(255, 255, 255); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">#DiRumahAja</a><br></p>', '2021-01-21 02:46:40', '2021-01-21 02:46:40'),
(3, 1, 7, 2, 'https://i.ytimg.com/vi/mgG7QUHo2bI/maxresdefault.jpg', 'FILM PENDEK PAGEBLUK - RIUH', 'film-pendek-pagebluk-riuh', 'https://www.youtube.com/embed/5UNMC_C0IYE', NULL, NULL, '<p><font face=\"Roboto, Arial, sans-serif\"><span style=\"font-size: 14px; white-space: pre-wrap;\">Film Pendek Pagebluk - Riuh</span></font></p><p><font face=\"Roboto, Arial, sans-serif\"><span style=\"font-size: 14px; white-space: pre-wrap;\">Sutradara : Lola Amaria</span></font></p>', '2021-01-23 05:14:27', '2021-01-23 05:14:27'),
(4, 1, 8, 2, 'https://img.youtube.com/vi/9lemwBpqqgY/maxresdefault.jpg', 'Pelantikan Pejabat Fungsional Ditjen IKP Kementerian Kominfo', 'pelantikan-pejabat-fungsional-ditjen-ikp-kementerian-kominfo', 'https://www.youtube.com/embed/9lemwBpqqgY', NULL, NULL, '<p>Pelantikan Pejabat Fungsional Direktorat Jenderal IKP Kementerian Komunikasi dan Informatika<br></p>', '2021-01-23 12:57:37', '2021-01-23 12:57:37'),
(5, 1, 6, 9, 'https://img.youtube.com/vi/hRw1GB0OkXo/sddefault.jpg', 'Web Series BRI Life : Percaya Ini Rindu Episode 1', 'web-series-bri-life-percaya-ini-rindu-episode-1', 'https://www.youtube.com/embed/hRw1GB0OkXo?feature=youtu.be', NULL, NULL, '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Web Series BRI Life : Percaya Ini Rindu Episode 1</span><br></p>', '2021-01-23 13:24:11', '2021-01-23 13:24:11'),
(6, 1, 6, 9, 'https://img.youtube.com/vi/XRM8bEZg4o0/sddefault.jpg', 'Web Series BRI Life : Percaya Ini Rindu Episode 2', 'web-series-bri-life-percaya-ini-rindu-episode-2', 'https://www.youtube.com/embed/XRM8bEZg4o0?feature=youtu.be', NULL, NULL, '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Web Series BRI Life : Percaya Ini Rindu Episode 2</span><br></p>', '2021-01-23 13:25:25', '2021-01-23 13:25:25'),
(7, 1, 8, 2, 'https://img.youtube.com/vi/yLiidi0Pt9U/maxresdefault.jpg', 'Pulau Morotai Jadi Referensi Pembangunan Infrastruktur TIK Nasional', 'pulau-morotai-jadi-referensi-pembangunan-infrastruktur-tik-nasional', 'https://www.youtube.com/embed/yLiidi0Pt9U', NULL, NULL, '<p>Pulau Morotai Jadi Referensi Pembangunan Infrastruktur TIK Nasional<br></p>', '2021-01-23 13:47:52', '2021-01-23 13:47:52'),
(8, 1, 8, 2, 'https://img.youtube.com/vi/khZGatqrQr8/maxresdefault.jpg', 'Launching Digital Kredit UMKM (digiKU)', 'launching-digital-kredit-umkm-digiku', 'https://www.youtube.com/embed/khZGatqrQr8?feature=youtu.be', NULL, NULL, '<p>Menteri Komunikasi dan Informatika Johnny G. Plate memberikan dukungan penuh atas peluncuran Digital Kredit UMKM (digiKU). Hasil kerjasama Gerakan Nasional Bangga Buatan Indonesia, Himpunan Bank Milik Negara (Himbara) dan Asosiasi e-Commerce Indonesia (idEA) itu menjadi platform yang membantu pengembangan UMKM.</p><p>Menurut Menteri Kominfo, digiKU sebagai meeting point dari tiga ekosistem yaitu technology company, produsen dalam hal ini UMKM digital dan nondigital, serta demand atau permintaan,&nbsp;ditambah hadirnya Himbara dalam memberikan fasilitas pembiayaan dan didukung dengan APBN. Oleh karena itu, diharapkan digiKU menjadi platform unggulan dalam rangka mendorong dan mengajak UMKM lebih berkembang.<br><br></p>', '2021-01-23 13:55:54', '2021-01-23 13:55:54'),
(9, 1, 8, 2, 'https://img.youtube.com/vi/7kSdVZKgYHE/maxresdefault.jpg', 'Penyerahan Hewan Kurban di Lingkungan Kemkominfo', 'penyerahan-hewan-kurban-di-lingkungan-kemkominfo', 'https://www.youtube.com/embed/7kSdVZKgYHE?feature=youtu.be', NULL, NULL, '<p>Penyerahan Hewan Kurban di Lingkungan Kemkominfo<br></p>', '2021-01-23 13:59:43', '2021-01-23 13:59:43'),
(10, 1, 7, 2, 'https://img.youtube.com/vi/9nSQQYEMom4/maxresdefault.jpg', 'FILM PENDEK PAGEBLUK - POSITIF', 'film-pendek-pagebluk-positif', 'https://www.youtube.com/embed/9nSQQYEMom4?feature=youtu.be', NULL, NULL, '<p>Film Pendek Pagebluk - Positif</p>', '2021-01-24 01:25:49', '2021-01-24 01:25:49'),
(11, 1, 7, 2, 'https://img.youtube.com/vi/2vVDLfoIIW0/maxresdefault.jpg', 'FILM PENDEK PAGEBLUK - SERANGAN FAJAR', 'film-pendek-pagebluk-serangan-fajar', 'https://www.youtube.com/embed/2vVDLfoIIW0?feature=youtu.be', NULL, NULL, '<p>Film Pendek Pagebluk - Serangan Fajar</p>', '2021-01-24 01:27:15', '2021-01-24 01:27:15'),
(12, 1, 7, 2, 'https://img.youtube.com/vi/g-cyeZtDImg/maxresdefault.jpg', 'FILM PENDEK PAGEBLUK - ISOLASI & SPAGHETTI', 'film-pendek-pagebluk-isolasi-spaghetti', 'https://www.youtube.com/embed/g-cyeZtDImg?feature=youtu.be', NULL, NULL, '<p>Film Pendek Pagebluk - Isolasi &amp; Spaghetti</p>', '2021-01-24 01:34:06', '2021-01-24 01:34:06'),
(14, 1, 4, 3, 'cover/JAwvfExQ.jpg', 'Konten Baru Update', 'konten-baru', 'video/WBOAfoz8.mp4', 'C:\\Users\\user\\AppData\\Local\\Temp\\phpA312.tmp', NULL, '<p>Tes Konten Baru</p>', '2021-01-25 09:05:46', '2021-01-25 09:17:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video_tag`
--

CREATE TABLE `video_tag` (
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video_tag`
--

INSERT INTO `video_tag` (`video_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 5),
(3, 2),
(3, 5),
(3, 6),
(4, 2),
(4, 5),
(4, 6),
(4, 7),
(5, 2),
(5, 5),
(6, 2),
(6, 5),
(7, 3),
(7, 5),
(7, 6),
(7, 7),
(8, 2),
(8, 5),
(8, 6),
(8, 7),
(9, 2),
(9, 5),
(9, 6),
(9, 7),
(10, 1),
(10, 2),
(10, 6),
(11, 1),
(11, 5),
(11, 6),
(12, 1),
(12, 2),
(12, 6),
(14, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `instansis`
--
ALTER TABLE `instansis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nik_unique` (`nik`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_user_id_foreign` (`user_id`),
  ADD KEY `videos_category_id_foreign` (`category_id`),
  ADD KEY `videos_instansi_id_foreign` (`instansi_id`);

--
-- Indeks untuk tabel `video_tag`
--
ALTER TABLE `video_tag`
  ADD PRIMARY KEY (`video_id`,`tag_id`),
  ADD KEY `video_tag_tag_id_foreign` (`tag_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `instansis`
--
ALTER TABLE `instansis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `videos_instansi_id_foreign` FOREIGN KEY (`instansi_id`) REFERENCES `instansis` (`id`),
  ADD CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `video_tag`
--
ALTER TABLE `video_tag`
  ADD CONSTRAINT `video_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  ADD CONSTRAINT `video_tag_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
