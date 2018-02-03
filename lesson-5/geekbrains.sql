-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 31 2018 г., 14:04
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--
CREATE DATABASE IF NOT EXISTS `geekbrains` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `geekbrains`;

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `size` mediumint(8) UNSIGNED DEFAULT NULL,
  `f_path` varchar(999) DEFAULT NULL,
  `th_path` varchar(999) DEFAULT NULL,
  `views` int(10) UNSIGNED DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `size`, `f_path`, `th_path`, `views`) VALUES
(1, '37602328f8be609cc15e830a49fead8c.jpg', 442701, 'img/', 'img/thmbs/', 9),
(2, '9578d32278f13391b0ad713969fd7f15.jpg', 299903, 'img/', 'img/thmbs/', 10),
(3, 'fd7f0b8cb43e50c162b2eec1e772703b.jpg', 662980, 'img/', 'img/thmbs/', 15),
(4, '2b5979c0b2201df1b730ae51a58c2d8c.jpg', 443140, 'img/', 'img/thmbs/', 8),
(5, 'fb9d0526224bf1a2a817ca6c5e57039b.jpg', 452129, 'img/', 'img/thmbs/', 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
