-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 12 2023 г., 06:33
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `levelup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Surname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Patronymic` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `OrderType` int(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`ID`, `Surname`, `Name`, `Patronymic`, `Phone`, `Email`, `OrderType`) VALUES
(12, 'Монголов', 'Олег', NULL, '+79998812323', 'example@mail.ru', 1),
(15, 'Иванов', 'Иван', 'Иванович', '+79529346743', 'example@mail.ru', 1),
(16, 'Овчаров', 'Данил', 'Вячеславович', '+79812313423', 'example@mail.ru', 1),
(17, 'Гладунов', 'Сергей', 'Федорович', '+74312254334', 'example@mail.ru', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `order_types`
--

CREATE TABLE IF NOT EXISTS `order_types` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `order_types`
--

INSERT INTO `order_types` (`ID`, `Name`) VALUES
(1, 'Объемные буквы'),
(2, 'Вывески'),
(3, 'Информационные стенды'),
(4, 'Световые короба (лайт-боксы)'),
(5, 'Pos-материалы'),
(6, 'Таблички');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
