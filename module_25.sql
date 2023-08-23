-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2023 г., 19:11
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `module_25`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `link` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `author`, `comment`, `link`, `date_upload`) VALUES
(25, 'asdfasd', 'test', 'asdfa', 'uploads/1692806899Качество1.jpg', '2023-08-23 19:08:19'),
(26, 'sdfasd', 'test', 'asdfasd', 'uploads/1692806910tiff.png', '2023-08-23 19:08:30'),
(27, 'zdsfsdf', 'test', 'asdfadsf', 'uploads/1692806919Качество2.jpg', '2023-08-23 19:08:39'),
(29, 'sdfas', 'test2', 'sfgasdfasdfsdfasdf', 'uploads/1692806953Качество2.jpg', '2023-08-23 19:09:13'),
(30, 'asdfasda', 'test2', NULL, 'uploads/1692806993Качество2.jpg', '2023-08-23 19:09:53'),
(31, 'sdfasdf', 'test2', 'asdfa', 'uploads/1692807006Качество1.jpg', '2023-08-23 19:10:06');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test@test.ru', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL),
(3, 'test2', 'test2@test.ru', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL),
(4, 'test3', 'test3@test.com', '098f6bcd4621d373cade4e832627b4f6', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
