-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Sty 2019, 05:26
-- Wersja serwera: 10.1.30-MariaDB
-- Wersja PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pbawdating`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `friend`
--

CREATE TABLE `friend` (
  `id_person1` int(10) UNSIGNED NOT NULL,
  `id_person2` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `friend`
--

INSERT INTO `friend` (`id_person1`, `id_person2`, `type`, `created_at`, `updated_at`) VALUES
(1, 4, 'friend', NULL, NULL),
(1, 5, 'friend', NULL, NULL),
(2, 3, 'friend', NULL, NULL),
(2, 1, 'friend', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_20_035424_create_description_table', 1),
(4, '2018_12_20_035455_create_friends_table', 1),
(5, '2018_12_20_035531_create_msgs_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `msg`
--

CREATE TABLE `msg` (
  `id_msg` int(10) UNSIGNED NOT NULL,
  `sender` int(10) UNSIGNED NOT NULL,
  `receiver` int(10) UNSIGNED NOT NULL,
  `date_msg` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `msg`
--

INSERT INTO `msg` (`id_msg`, `sender`, `receiver`, `date_msg`, `message`, `created_at`, `updated_at`) VALUES
(1, 4, 1, '2018-12-01', 'Hej mam na imię Marian', NULL, NULL),
(2, 2, 3, 'hkjhkj', 'Cześć', '2019-01-19 00:41:25', '2019-01-19 00:41:25'),
(3, 2, 3, '2019-01-19 01:55:50', 'Szczególnie uwielbiam koty', '2019-01-19 00:55:50', '2019-01-19 00:55:50'),
(4, 1, 2, '2019-01-19 02:03:54', 'Upiekłam babkę', '2019-01-19 01:03:54', '2019-01-19 01:03:54'),
(5, 2, 1, '2019-01-19 02:05:11', 'Super', '2019-01-19 01:05:11', '2019-01-19 01:05:11'),
(6, 1, 4, '2019-01-20 09:48:50', 'A ja Jadzia', '2019-01-20 08:48:50', '2019-01-20 08:48:50'),
(7, 1, 4, '2019-01-20 09:49:25', 'Maam 4 psy', '2019-01-20 08:49:25', '2019-01-20 08:49:25'),
(8, 2, 1, '2019-01-20 11:08:11', 'Kiedy mam przyjść?', '2019-01-20 10:08:11', '2019-01-20 10:08:11'),
(9, 2, 1, '2019-01-20 16:55:54', 'Słyszałem że upiekłaś sernika', '2019-01-20 15:55:54', '2019-01-20 15:55:54'),
(10, 2, 1, '2019-01-20 16:56:27', 'Jutro będę wolny :)', '2019-01-20 15:56:27', '2019-01-20 15:56:27');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id_desc` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `date_desc` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id_desc`, `id`, `date_desc`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 2, '2018-09-20', 'Dzisiejsza aktywność', 'Dzisiaj poszedłem na jogging.', NULL, NULL),
(17, 2, '2019-01-20 14:32:08', 'Styczeń', 'Dzisiaj rozpocząłem zawody w koszykówce.', '2019-01-20 13:32:08', '2019-01-20 13:32:08'),
(18, 1, '2019-01-20 16:32:08', 'Dzisiejsze wypieki', '- Szarlotka\r\n- piernik\r\n- sernik\r\n', NULL, NULL),
(19, 2, '2019-01-20 16:44:07', 'Siłownia', 'Idę o 14 na siłownię na Żytniej, może się spotkamy.', '2019-01-20 15:44:07', '2019-01-20 15:44:07'),
(23, 2, '2019-01-20 16:50:07', 'Siłownia 2', 'Siedzę przy ciężarkach', '2019-01-20 15:50:07', '2019-01-20 15:50:07'),
(25, 2, '2019-01-20 17:42:17', 'Siłownia', 'Za 30 min wychodzę', '2019-01-20 16:42:17', '2019-01-20 16:42:17'),
(26, 1, '2019-01-20 17:46:07', 'Szarlotka koniec', 'Oliver zjadł już prawię całą, radzę się pośpieszyć', '2019-01-20 16:46:07', '2019-01-20 16:46:07');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) DEFAULT NULL,
  `complex` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecolor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hcolor` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `city` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefW` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `prefM`, `age`, `height`, `complex`, `ecolor`, `hcolor`, `role`, `city`, `prefW`, `nation`, `image`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'baba', 'baba@gmail.com', NULL, '$2y$10$Ro73w6647opVnYW8nysgrOdcbYNS6c36WpYYnYNajNQAdKbBue842', 'Kobieta', 'Tak', '1725-27-12', NULL, NULL, NULL, NULL, 'user', 'Chatka', 'Nie', 'Rumunia', 'http://4.bp.blogspot.com/-A5fAsQgsFfM/VeNDYPtEbvI/AAAAAAAAHBY/IRgHqtW-mI0/s1600/baba1.jpg', 'Mieszkam  w chacie.', 'QTIaonZYRgB9hWfZX6eDDUENc5XaaYOKaJNK9uqVFUlQFXCdQWOsLKd16X5w', '2018-12-22 06:47:16', '2018-12-22 06:47:16'),
(2, 'Oliver', 'oli.94@windowslive.com', NULL, '$2y$10$Hqu2TOeB1Fjw4DbqKHR33uvrePmtn/2pscNhuOeSh3MJU0mNHcys2', 'Mężczyzna', 'Nie', '1994-27-12', 185, 'Biała', 'Niebieski', 'Czarny', 'user', 'Katowice', 'Tak', 'Polska', 'https://www.mens-hairstyle.com/wp-content/uploads/2016/12/Mens-Medium-Hairstyles.jpg', 'Gram w tennisa i w tennisa stołowego.', 'CDLfd2uRbk7OF6OwNmTfOv0skwl4X9rIlYJcxl4odS6ss4RGgQQ8Q3ZKZZEE', '2018-12-22 06:50:24', '2018-12-31 04:32:48'),
(3, 'Mear', 'mera@gmail.com', NULL, '$2y$10$NFv7cnLAk2SygHz5tzVbMOjfKUlCMa59r9fJX9DwciodqnSEOFUd2', 'Mężczyzna', 'Tak', '1996-27-12', NULL, NULL, NULL, NULL, 'user', 'Radom', 'Tak', 'Polska', 'https://m.media-amazon.com/images/M/MV5BNjkzZTZjNTItMDc2Mi00OTQwLTlkZjUtYzkzYjhjNjU5YTRiXkEyXkFqcGdeQXVyMTgwOTc3Mw@@._V1_SY1000_CR0,0,666,1000_AL_.jpg', NULL, 'qMyMVukpcZtO0dcP9HMghQY6MRbd7Abvyyvf43FqvpY24u9OSPliH5kw2y3m', '2018-12-31 02:03:39', '2018-12-31 02:03:39'),
(4, 'Gregor', 'gege@mail.com', NULL, '$2y$10$quY5UsQiI/UQubdGpiYML.2zvAJ5mz6JGMekFVvLpMI5YDYghHcoS', 'Mężczyzna', 'Nie', '1992-10-14', NULL, NULL, NULL, NULL, 'user', 'Madryt', 'Tak', 'Hiszpania', 'https://oldnavy.gap.com/webcontent/0011/247/651/cn11247651.jpg', NULL, 'OX284pvFpF1CYD8hhfunt32nzmkYfDcG02urzqRk6XMx3e8STNHxzsHG3ju0', '2018-12-31 02:05:38', '2018-12-31 02:05:38'),
(5, 'Angela78', 'angi78@mail.com', NULL, '$2y$10$RjbNDpdgJ3AbFQlGBbEr.ewL947jtShGSs52zni.CouIaONiq7JYC', 'Kobieta', 'Tak', '1978-09-09', NULL, NULL, NULL, NULL, 'user', 'Osaka', 'Nie', 'Japonia', 'https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80', NULL, 'K6ktDx0sA5LRAqa73RKBVpoJQ4mefVNIHrPIfcOd9kGIf77pxTLK1MvFvmNr', '2018-12-31 02:10:12', '2018-12-31 02:10:12'),
(6, 'harara', 'hara@ur.com', NULL, '$2y$10$QGuk5bik3qSVQs9K783xDeN3yj2GnW6HmaKRbYb7K8V5UKHd4TBme', 'Kobieta', 'Tak', '1992-10-14', NULL, 'Biała', 'Niebieskie', 'Czarne', 'user', 'Radom', 'Nie', 'Polska', NULL, NULL, 'cPGzHGafB5wcH6zNEeMbwAUh8l3VZivKSUl43ewKALmEJ1t0J3gI3WqzZE8x', '2018-12-31 02:18:40', '2018-12-31 04:28:29'),
(7, 'Nearra', 'nea@gmail.com', NULL, '$2y$10$z/eKDCa/ig3I9yGmWw9.L.zK58VmI1yugMQ8XLrHuKsaE6bXqlmjq', 'Kobieta', 'Tak', '1992-10-14', 170, 'Biała', 'Brązowy', 'Czarne', 'user', 'Rzeszów', 'Nie', 'Polska', NULL, 'Uwielbiam zwierzęta', NULL, '2019-01-20 18:33:13', '2019-01-20 18:33:13');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `friend`
--
ALTER TABLE `friend`
  ADD KEY `friend_id_person1_foreign` (`id_person1`),
  ADD KEY `friend_id_person2_foreign` (`id_person2`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `msg_sender_foreign` (`sender`),
  ADD KEY `msg_receiver_foreign` (`receiver`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_desc`),
  ADD KEY `post_id_foreign` (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `msg`
--
ALTER TABLE `msg`
  MODIFY `id_msg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id_desc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `friend_id_person1_foreign` FOREIGN KEY (`id_person1`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friend_id_person2_foreign` FOREIGN KEY (`id_person2`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `msg`
--
ALTER TABLE `msg`
  ADD CONSTRAINT `msg_receiver_foreign` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `msg_sender_foreign` FOREIGN KEY (`sender`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
