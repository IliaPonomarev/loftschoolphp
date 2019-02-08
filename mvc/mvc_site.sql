-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2019 г., 14:28
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
-- База данных: `mvc_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `user_id`, `photo`) VALUES
(20, 45, '157.jpg'),
(21, 45, '158.jpg'),
(22, 45, '157.jpg'),
(23, 45, '1474011210_15.jpg'),
(24, 45, '1474011210_15.jpg'),
(25, 46, '1474011210_15.jpg'),
(26, 46, '158.jpg'),
(27, 46, '157.jpg'),
(28, 46, '1474011210_15.jpg'),
(29, 47, 'pic02.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(25) DEFAULT NULL,
  `about` text,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `name`, `age`, `about`, `password`) VALUES
(45, '12345', 'name', 12, 'fgdfg', '$2y$10$..M0LxcAn69GGeBp7/u6ROoAzULskvnp2X31U4N2s6re6vDsewUXm'),
(46, '1234', 'name2', 25, 'dscdscsd', '$2y$10$EToDfbDl6tCKj53eJLsR5uvt4kiw9cA4.zFXMpwAA51.rGBhf/.E6'),
(47, 'dsdf', 'dsfsdf', 47, 'fgdf', '$2y$10$UNC1QZUS3i6jU2wSe6v1ve4ZTylVmqXYTR6.fhf4CgRDNIRomf6ia'),
(48, '123456', 'шдшф', 78, '778', '$2y$10$pdkT/1U1Vk/qaddVnz3T/OtSJVQIcYmelsYLjN2h2HaJjqoKZ1DqG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
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
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
