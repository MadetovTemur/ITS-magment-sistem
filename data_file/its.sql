-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 13 2023 г., 09:23
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `its`
--
CREATE DATABASE IF NOT EXISTS `its` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `its`;

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(120) DEFAULT NULL,
  `username` varchar(14) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'admin',
  `status` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` VALUES
(1, 'Madetov Temur', 'admin', '$2y$10$kiQEIeF/wGR7m0wK7yBNDexmg5mIUMmRg7QBZRvjcu/9fzZCq.Pvi', 'admin', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_subject` varchar(30) NOT NULL,
  `group_code` varchar(30) NOT NULL,
  `group_discription` varchar(150) DEFAULT NULL,
  `date_of_joined` varchar(22) NOT NULL,
  `group_jurnal` varchar(40) NOT NULL,
  `date_of_end` varchar(40) DEFAULT NULL,
  `status` varchar(3) NOT NULL DEFAULT '0',
  `group_teacher` varchar(10) NOT NULL,
  `count_student` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `group_code` (`group_code`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` VALUES
(1, 'Python', 'gt', NULL, '2000-20-20 19:12:22', 'gt', NULL, '0', '1', '1'),
(2, 'Python', 'yu', 'vvvtrbbbbbbbbbe', '2000-20-20 19:12:22', 'et', NULL, '0', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `status` varchar(3) NOT NULL DEFAULT '0',
  `view` varchar(2) NOT NULL DEFAULT '0',
  `date_of_joined` varchar(23) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` VALUES
(1, 'Nurullaev Temur', 'qwerty@gmail.com', 'hellow', '0', '0', '2023-11-10 22:53:08');

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(14) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(9) NOT NULL DEFAULT 'student',
  `status` varchar(3) NOT NULL DEFAULT '0',
  `full_name` varchar(100) NOT NULL,
  `pasport_code` varchar(19) DEFAULT NULL,
  `jender` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(22) DEFAULT NULL,
  `date_of_joined` varchar(22) NOT NULL,
  `grops` varchar(200) DEFAULT NULL,
  `old_grops` varchar(200) DEFAULT NULL,
  `address` varchar(120) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` VALUES
(2, 'student', '', 'student', '0', 'Matkarim Saparvay', NULL, 'erkak', '+998990291219', '2005-07-20', '2000-20-20 19:12:22', NULL, NULL, 'Beruniy');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(40) NOT NULL,
  `subject_code` varchar(30) NOT NULL,
  `discription` varchar(150) DEFAULT '0',
  `date_of_joined` varchar(22) NOT NULL,
  `data_of_edit` varchar(22) DEFAULT NULL,
  `status` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`subject_id`),
  UNIQUE KEY `subject_code` (`subject_code`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` VALUES
(1, 'PHP Backend', 'php-uz-backend', 'HTML, CSS', '2023-11-12 21:43:36', NULL, '0'),
(2, 'JavaAndroid', 'java-android', '0', '2023-11-12 21:48:02', NULL, '0'),
(3, 'Java', 'java', '0', '2023-11-12 21:48:20', NULL, '0'),
(4, 'Rus tili', 'rus-tili', 'NULL', '2023-11-12 21:51:19', '2023-11-12 21:59:36', '0'),
(5, 'Kamputer savodxonlik', 'savodxonlik', '1 oylik kurs', '2023-11-12 21:57:10', NULL, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teacher_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(14) NOT NULL,
  `password` varchar(80) NOT NULL COMMENT '12345',
  `role` varchar(9) NOT NULL DEFAULT 'teacher',
  `status` varchar(3) NOT NULL DEFAULT '0',
  `full_name` varchar(100) NOT NULL,
  `pasport_code` varchar(19) DEFAULT NULL,
  `jender` varchar(10) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `date_of_birth` varchar(22) DEFAULT NULL,
  `date_of_joined` varchar(22) NOT NULL,
  `date_of_edit` varchar(22) DEFAULT NULL,
  `subjects` varchar(200) DEFAULT NULL,
  `address` varchar(120) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` VALUES
(1, 'temur', '$2y$10$4ggP.ouCv0D2iRdKLYQQ7uJ3gKo7YEHNowU52r2rq7fkNGMXoz9im', 'teacher', '0', 'Nurullaev Temur', '', 'erkak', '+998902365847', '2006-02-17', '2023-11-04 21:41:38', NULL, 'php-uz,', 'Beruniy tumani'),
(2, 'asqor', '$2y$10$WjvTVg.rxhRZuvXGi3VF5OjM3t83IU6.zXdFvu8IT2HAmFR9sRxT.', 'teacher', '0', 'Umirzaqov Asqor', '', 'erkak', '+998902133212', '2005-09-08', '2023-11-04 22:18:39', '2023-11-05 15:54:51', 'bialogiya-uz,', 'Beruniy tumani Boston MFY'),
(3, 'muborak', '$2y$10$veEG3LM09huiN0r6mdXd/up4MTf1nHvqFEMegIjMwADU0aJwIB442', 'teacher', '0', 'Rozimova Muborak', 'KA37912812', 'ayol', '+998438281923', '1995-05-10', '2023-11-05 16:37:49', '2023-11-05 16:39:34', 'adabiyot,ona-tili,', 'Beruniy tumani');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
