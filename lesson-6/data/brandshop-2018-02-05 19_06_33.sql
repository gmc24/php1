-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.31 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных brandshop
CREATE DATABASE IF NOT EXISTS `brandshop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `brandshop`;


-- Дамп структуры для таблица brandshop.testimonials
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `add_date` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `test_text` varchar(1000) NOT NULL,
  `author_from` varchar(255) NOT NULL,
  `chkd` smallint(2) unsigned NOT NULL DEFAULT '0',
  `public` smallint(2) unsigned NOT NULL DEFAULT '0',
  KEY `Индекс 1` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы brandshop.testimonials: ~2 rows (приблизительно)
DELETE FROM `testimonials`;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` (`id`, `add_date`, `author`, `avatar`, `test_text`, `author_from`, `chkd`, `public`) VALUES
	(1, '2018-02-05 12:45:20', 'Einstein A.', 'img/Einstein.jpg', '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, distinctio, in? Animi culpa dignissimos eum facere laudantium pariatur?”', 'Prinston, USA', 1, 1),
	(2, '2018-02-05 12:48:42', 'Bin Burhan', 'img/avatar.jpg', '“Vestibulum quis porttitor dui! Quisque viverra nunc mi,  a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium”', 'Dhaka, Bd', 1, 1),
	(3, '2018-02-05 12:50:13', 'Putin V.', 'img/putin.jpg', '“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eveniet in possimus qui quia reiciendis tenetur. Cumque id molestias.”', 'Moscow, Russia', 1, 1);
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
