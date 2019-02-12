-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 12 2019 г., 21:16
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `homework5.2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `email`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'email@email.com', 'client_name', '157.jpg', NULL, NULL),
(2, 'emalsfs@dasds', 'asdsadas', '', '2019-02-12 15:28:31', '2019-02-12 15:28:31'),
(3, 'fasfsaf@sda', 'sadsa', '', '2019-02-12 15:35:42', '2019-02-12 15:35:42'),
(4, 'sdfsdfdsf@dsf', 'sdfsdf', '', '2019-02-12 15:36:19', '2019-02-12 15:36:19'),
(11, 'kukuikui@sdas', 'sdfsdf', '', '2019-02-12 17:48:18', '2019-02-12 17:48:18');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `order_name` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `order_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'name', NULL, '2019-02-12 17:41:22'),
(2, 4, 'productname', '2019-02-12 15:36:19', '2019-02-12 18:02:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `age`, `description`, `photo`, `updated_at`, `created_at`) VALUES
(153, '1234', '$2y$10$9Y0jrc/56OYeqFI4XRcpkenMLYWH6VnolGSjXP3hoGdJs/ayy7Dwu', 'fgg', '2012-12-12', 'rgrgr', '158.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, '123', '$2y$10$YJchhDbboyYkF0eNLv8qdOqyF3oS5u6Rluvi.NQ6scf/rba7YcWqG', 'dgdg', '2012-12-12', 'fdfd', '157.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'dsfsdf', '$2y$10$x9Y3/OhrnzbJTeusrsnQQ.hOEstzzLxnd2Ohv/5yL9KmD4QE9egJG', 'fgdfgdf', '2012-12-12', 'dfgd', '158.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
