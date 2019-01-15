-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2019 г., 16:43
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
-- База данных: `mainproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `comments` text NOT NULL,
  `change_money` varchar(11) NOT NULL,
  `callback` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `id_user`, `address`, `comments`, `change_money`, `callback`) VALUES
(68, '99', 'Ул: 785, дом: 75, корп: 7857 , кварт: 858, эт: 578', 'dsf', 'Да', ''),
(69, '99', 'Ул: fsdf, дом: sdf, корп: sd , кварт: f, эт: sdf', 'sdf', 'Да', 'on'),
(70, '100', 'Ул: sd, дом: sda, корп: asd , кварт: sdsda, эт: sdsad', 'asd', 'Да', 'on'),
(71, '101', 'Ул: dfsdf, дом: sdf, корп: fdsf , кварт: sdf, эт: sdf', 'sdf', 'Да', 'on'),
(72, '102', 'Ул: asdsad, дом: asd, корп: asdas , кварт: d, эт: dfds', 'fdsf', 'Нет', 'on'),
(73, '103', 'Ул: dfgfdg, дом: gdfg, корп: fgdfg , кварт: df, эт: gdfg', 'dfgdf', 'Нет', 'on'),
(74, '104', 'Ул: sadasd, дом: sd, корп: sad , кварт: sad, эт: asd', 'asdas', 'Да', 'on'),
(75, '105', 'Ул: dsdf, дом: fdsf, корп: df , кварт: sdf, эт: dfdsf', 'sdf', 'Да', 'on'),
(76, '105', 'Ул: dsdf, дом: fdsf, корп: df , кварт: sdf, эт: dfdsf', 'sdf', 'Да', 'on');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `name` text NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `phone`) VALUES
(91, '7857857@wsws', 'dfv@wdwd', '+7 (758) 575 87 58'),
(92, 'rtg@wdwd', 'dfs', '+7 (747) 587 58 75'),
(93, '78578@wewe', 'авпав', '+7 (748) 578 58 75'),
(94, 'sdf@wew', 'fsdf', '+7 (879) 878 45 6_'),
(95, 'sdss@wdwd', 'rfrer', '+7 (758) 578 57 85'),
(96, '6786786@sd', 'ddsv', '+7 (676) 876 78 68'),
(97, 'dggssf@dfsd', 'dfgf', '+7 (758) 785 76 78'),
(98, 'sehtrh@sda', 'Bkmz', '+7 (777) 689 67 67'),
(99, '785785@ad', 'dfvd', '+7 (785) 785 87 57'),
(100, 'sfd@das', 'fdg', '+7 (757) 857 85 87'),
(101, 'seikadi123gmail@ru', 'fgd', '+7 (458) 757 85 __'),
(102, '7575@sd', 'sdfsdf', '+7 (557) 575 75 75'),
(103, 'dfgdfg@ds', 'sfef', '+7 (857) 857 85 78'),
(104, 'sdfefe@dasd', 'укаука', '+7 (785) 785 67 86'),
(105, 'dsfsdfa@dgd', 'dfvf', '+7 (257) 857 85 78');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
