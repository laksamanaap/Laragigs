-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 08.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laragigs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `logo`, `tags`, `company`, `location`, `email`, `website`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Iste illum delectus ut ea beatae voluptas.', NULL, 'Laravel, API, Backend', 'Gerlach LLC', 'Beierstad', 'piper29@krajcik.net', 'https://www.stamm.biz/ea-et-molestias-fugiat-minima-et-consequuntur-est', 'Repellendus enim vitae quidem dolores fugiat dolorum exercitationem. Sunt labore maxime reprehenderit magnam dolore incidunt. Reiciendis molestias saepe voluptatem. Nostrum eum unde tempore beatae eum itaque. Laudantium quasi ut est neque totam animi. Earum placeat aut pariatur magni maxime sapiente.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(2, 1, 'Soluta vel nemo veniam illum quia itaque.', NULL, 'Laravel, API, Backend', 'Walker and Sons', 'East Adrianafort', 'sawayn.stephanie@legros.net', 'http://www.orn.com/delectus-aut-eos-quisquam-tempora.html', 'Doloremque esse voluptatem sed facere veniam ea. Alias sed ex repellat rerum nulla officia. Id et nobis mollitia ut neque. Tenetur est non ratione aliquid. Esse assumenda quisquam et sit aut ut velit ullam.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(3, 1, 'Explicabo omnis repellendus omnis fuga mollitia id.', NULL, 'Laravel, API, Backend', 'Cole, Torphy and Koss', 'East Eugenia', 'gcruickshank@daugherty.com', 'http://tromp.biz/velit-voluptates-sed-omnis-quis-magnam', 'Illum debitis asperiores repellendus ducimus ad consectetur. Cupiditate exercitationem debitis quia eius eos. Voluptas distinctio blanditiis dolor est ex. Nisi nostrum quos quisquam aperiam vitae.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(4, 1, 'Quod fugit esse laudantium est et beatae et.', NULL, 'Laravel, API, Backend', 'Stiedemann, Kutch and Donnelly', 'Port Brady', 'danial72@altenwerth.com', 'http://www.schoen.info/eos-consequatur-laborum-beatae-hic-omnis-incidunt', 'Deleniti omnis quasi sint deleniti molestias a. Ratione eligendi aliquam sunt numquam et quidem repellendus. Minima qui molestias numquam quisquam est facilis sit. Fugiat ipsam consequatur quos.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(5, 1, 'Quis ipsa pariatur nobis ipsam est cupiditate autem.', NULL, 'Laravel, API, Backend', 'Schaden, Willms and Price', 'Lambertland', 'smitham.zelda@beahan.com', 'http://www.kuphal.com/minima-qui-qui-corrupti-ut-ut-eaque-aperiam-provident.html', 'Molestias tenetur adipisci dignissimos earum quam. Optio aliquid voluptatem est quibusdam temporibus harum perferendis. Sequi nam minima fuga quo. Nobis aspernatur maiores ab eligendi dicta.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(6, 1, 'Et aspernatur quasi velit culpa sit perferendis quaerat.', NULL, 'Laravel, API, Backend', 'Upton Inc', 'Roelside', 'brendon.tillman@romaguera.com', 'https://www.mcclure.info/exercitationem-voluptatem-est-ducimus-et-ullam-excepturi', 'Dolorem ut mollitia dignissimos doloremque neque id quo. Id sint aut qui commodi sed sint et alias. Et delectus sed praesentium praesentium. Autem sunt reprehenderit recusandae corporis voluptatibus quo dolores. Quia nobis aut sunt voluptates et. Dolorem cumque ut illo voluptates rerum quia. Aut incidunt quis rerum quis dolorem dolorem.', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(7, 2, 'Fullstack Developer', NULL, 'Laravel, Backend', 'Meja Kita', 'Malang, INA', 'laksamana.arya1412@gmail.com', 'https://illiyin.studio/careers/', 'rawr', '2023-05-03 19:21:47', '2023-05-03 19:21:47'),
(8, 2, 'Senior Laravel Developer', NULL, 'Fullstack, Frontend, Backend', 'Illiyin Studio', 'aasdasd', 'asdasd@gmail.com', 'https://illiyin.studio/careers/', 'awawas', '2023-05-03 19:38:48', '2023-05-03 19:38:48'),
(9, 3, 'Junior Fullstack Developer', NULL, 'Laravel, Backend', 'Tiga Pilar Garuda', 'Malang, Indonesia', 'laksamana.arya1412@gmail.com', 'https://illiyin.studio/careers/', 'tes', '2023-05-03 20:33:33', '2023-05-03 20:35:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(226, '2014_10_12_000000_create_users_table', 1),
(227, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(228, '2019_08_19_000000_create_failed_jobs_table', 1),
(229, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(230, '2023_04_05_025228_create_listings_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@gmail.com', '2023-05-03 19:09:31', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2cUXwiln7s', '2023-05-03 19:09:31', '2023-05-03 19:09:31'),
(2, 'Okxxtip', 'tes@gmail.com', NULL, '$2y$10$N602.rt285nUP.i5oL.zY.u03vDTwea91gSzcAGK/8NuWQlx20XJO', NULL, '2023-05-03 19:16:01', '2023-05-03 19:16:01'),
(3, 'Laksamana', 'laksamana.arya1412@gmail.com', NULL, '$2y$10$vNrhqQTt.ugQg985Wp15QuaQU0pgz6DhCMlzULPtLigkx8kcyfkPO', NULL, '2023-05-03 20:03:39', '2023-05-03 20:03:39'),
(4, 'Grafika Class Metaverse', 'admincmc@gmail.com', NULL, '$2y$10$fb2mL.mEvuXTHIUaN9RCweKyHeIbzFi.csuBBlCMafgS.mPLtkTyC', NULL, '2023-05-03 20:51:21', '2023-05-03 20:51:21'),
(5, 'classroom', 'admin@gmail.com', NULL, '$2y$10$Q2BCQ3lMxOWHb6SRMOlSr.8pEUpjwUTBcK3JU2xPKrHyR4pnX08ua', NULL, '2023-05-03 21:16:38', '2023-05-03 21:16:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
