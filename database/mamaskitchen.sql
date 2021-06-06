-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 06 Ιουν 2021 στις 13:07:16
-- Έκδοση διακομιστή: 10.4.16-MariaDB
-- Έκδοση PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `mamaskitchen`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(6, 'Breakfast', 'breakfast', '2020-03-23 06:51:12', '2020-03-23 06:51:12'),
(7, 'Special', 'special', '2020-03-23 06:51:21', '2020-03-23 06:51:21'),
(8, 'Desert', 'desert', '2020-03-23 06:51:30', '2020-03-23 06:51:30'),
(9, 'Dinner', 'dinner', '2020-03-23 06:51:46', '2020-03-23 06:51:46');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'simos', 'simos@hotmail.com', 'whats up', 'test contact', '2020-03-24 07:32:35', '2020-03-24 07:32:35'),
(4, 'hhhgfh', 'gaglogg@hotmail.com', 'gfgdfgd', 'gfdgdfg', '2020-03-26 07:40:05', '2020-03-26 07:40:05'),
(5, 'leonidas', 'leonidas@hotmail.com', 'leonidas test', 'leonidas test', '2020-04-02 13:26:46', '2020-04-02 13:26:46'),
(6, 'test', 'test@hotmail.com', 'test', 'test', '2020-07-28 12:40:53', '2020-07-28 12:40:53');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `event_date`, `event_time`, `image`, `created_at`, `updated_at`) VALUES
(7, 'event 1', 'Event 1 comming soon on our restaurant!', '2020-01-01', '02:01:00', 'event-1-2020-03-29-5e80e6cfa2d72.png', '2020-03-29 10:22:02', '2020-03-29 18:19:59'),
(8, 'event 2', 'Event 2 comming soon on our restaurant!', '2020-01-01', '12:00:00', 'event-2-2020-03-29-5e80e6f2b3da9.jpg', '2020-03-29 10:22:43', '2020-03-29 18:20:34'),
(9, 'event 3', 'Event 3 comming soon on our restaurant!', '2020-10-28', '00:05:00', 'event-3-2020-03-29-5e80e704e2a8a.png', '2020-03-29 10:24:54', '2020-03-29 18:20:52'),
(10, 'event 4', 'Event 4 comming soon on our restaurant!', '2021-02-05', '16:01:00', 'event-4-2020-03-29-5e80e72206a3b.jpg', '2020-03-29 10:25:40', '2020-03-29 18:21:22'),
(12, 'event 5', 'Event 5 comming soon on our restaurant!', '2020-03-30', '11:30:00', 'event-5-2020-03-29-5e80e7391ab48.png', '2020-03-29 14:49:04', '2020-03-29 18:21:45');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '-2020-04-01-5e844fa4c386b.jpg', '2020-04-01 08:24:04', '2020-04-01 08:24:04'),
(2, '-2020-04-01-5e844fb3435e7.jpg', '2020-04-01 08:24:19', '2020-04-01 08:24:19'),
(3, '-2020-04-01-5e844fbb18e01.jpg', '2020-04-01 08:24:27', '2020-04-01 08:24:27'),
(4, '-2020-04-01-5e844fc44cde1.jpg', '2020-04-01 08:24:36', '2020-04-01 08:24:36'),
(5, '-2020-04-02-5e86464ec26e8.jpg', '2020-04-02 20:08:46', '2020-04-02 20:08:46');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(5, 6, 'Prawn Dish', 'Lorem ipsum dolor sit amet', 20, '-2020-03-23-5e7878e588efc.jpg', '2020-03-23 06:52:53', '2020-03-23 06:52:53'),
(6, 6, 'Vegetable Dish', 'Magna aliqua. Ut enim ad minim veniam', 20, '-2020-03-23-5e787926e269b.jpg', '2020-03-23 06:53:58', '2020-03-23 06:53:58'),
(7, 6, 'Prawn Dish', 'Tempor incididunt ut labore et dolore', 15, '-2020-03-23-5e787963435ca.jpg', '2020-03-23 06:54:59', '2020-03-23 06:54:59'),
(8, 8, 'Salad Dish', 'Consectetur adipisicing elit, sed do eiusmod', 18, '-2020-03-23-5e787994edda8.jpg', '2020-03-23 06:55:48', '2020-03-23 06:55:48'),
(9, 8, 'Vegetable Noodles', 'Nisi ut aliquip ex ea commodo', 32, '-2020-03-23-5e787a24383e5.jpg', '2020-03-23 06:56:27', '2020-03-23 06:58:12'),
(11, 9, 'Tomato Curry', 'Natalie & Justin Cleaning by Justin Younger', 20, '-2020-03-23-5e787a771b7a5.jpg', '2020-03-23 06:59:35', '2020-03-23 06:59:35'),
(12, 9, 'Chicken Dish', 'Quis nostrud exercitation ullamco laboris', 22, '-2020-03-23-5e787aa56d40d.jpg', '2020-03-23 07:00:21', '2020-03-23 07:00:21'),
(13, 9, 'Special Salad', 'Duis aute irure dolor in reprehenderit', 38, '-2020-03-23-5e787ac5403ae.jpg', '2020-03-23 07:00:53', '2020-03-23 07:00:53'),
(17, 8, 'Ice cream', 'yogurt ice cream', 38, '-2020-03-23-5e78bf202234a.jpg', '2020-03-23 11:33:48', '2020-03-23 11:52:32'),
(18, 7, 'Sandwitch', 'Sandwitch with chicken', 3, '-2020-11-27-5fc0e56f67655.jpg', '2020-04-03 10:20:21', '2020-11-27 11:39:27'),
(19, 7, 'Pizza', 'Με σάλτσα ντομάτας, mix τυριών, ζαμπόν, μπέικον, μανιτάρια & πράσινη πιπεριά', 7, '-2020-11-27-5fc0e52a16188.jpg', '2020-07-28 10:25:42', '2020-11-27 11:38:18');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_20_181737_create_sliders_table', 2),
(4, '2020_03_21_202418_create_categories_table', 3),
(5, '2020_03_22_154116_create_items_table', 4),
(6, '2020_03_22_195407_create_reservations_table', 5),
(7, '2020_03_23_201505_create_contacts_table', 6),
(8, '2020_03_29_095756_create_events_table', 7),
(9, '2020_04_01_110235_create_galleries_table', 8),
(10, '2020_04_03_200645_create_orders_table', 9);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `num_people` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `reservations`
--

INSERT INTO `reservations` (`id`, `num_people`, `name`, `phone`, `email`, `date`, `time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 'geo', '6981472584', 'deathbreakerxx@hotmail.com', '2020-12-03', '21:00:00', 'hellooooooooooooo', 1, '2020-11-30 11:10:59', '2020-11-30 11:11:32');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(20, 'title 1', 'sub title 1', 'title-1-2020-03-21-5e76722f5af05.jpg', '2020-03-21 12:57:14', '2020-03-21 17:59:43'),
(21, 'title 2', 'sub title 2', 'title-2-2020-03-21-5e76723ae5590.jpg', '2020-03-21 17:34:14', '2020-03-21 17:59:54'),
(23, 'title 3', 'sub title 3', 'title-3-2020-03-23-5e78772d4ada1.jpg', '2020-03-22 19:20:25', '2020-03-23 06:45:33'),
(24, 'Title 4', 'Sub title 4', 'title-4-2020-04-03-5e8707888a40a.jpg', '2020-04-03 09:53:12', '2020-04-03 09:53:12');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gkagklo', 'gkagklo@hotmail.com', '$2y$10$HDg8jpO1cvpFadx0OGtTF.x7vvau96tIl9CLJ0Au4ypW8rxYuR87u', 'A3VeUBvOPi51IjpkcSWPR7hsQ7ljUPuTcXnq41VpOzHbyEfkOjctJrVID7b2', '2020-03-20 08:31:41', '2020-03-20 08:31:41'),
(4, 'leonidas', 'deathbreakerxx@hotmail.com', '$2y$10$VzlMVrn9uzSv6nw0rChR2uZ1cArlxtiB7X/MeSwJNHAPmjiiECSm6', 'IKtwvuTS0oI2st56RtOMWHrqCP4CDXgq8Qawi1q9V4QQyVXKU8EpHzCVEsGX', '2020-04-04 14:42:34', '2020-07-29 11:37:36');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Ευρετήρια για πίνακα `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Ευρετήρια για πίνακα `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT για πίνακα `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT για πίνακα `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT για πίνακα `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
