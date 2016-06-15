-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2016-03-28 01:31:34
-- 伺服器版本: 5.7.10-log
-- PHP 版本： 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `travel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `sign`
--

CREATE TABLE `sign` (
  `uPhone` int(100) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `uBir` date NOT NULL,
  `ID` varchar(100) NOT NULL,
  `uMessage` text,
  `gender` enum('男','女') NOT NULL,
  `place` set('不限','墾丁','台北','南投') NOT NULL,
  `budge` enum('1萬以下','1~2萬','3~4萬','5~6萬') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `sign`
--

INSERT INTO `sign` (`uPhone`, `uName`, `uBir`, `ID`, `uMessage`, `gender`, `place`, `budge`) VALUES
(922222222, 'name1', '2016-03-02', 'E222222222', 'Heyyyy', '女', '南投', '1萬以下'),
(933333333, 'name2', '2016-03-03', 'E333333333', NULL, '男', '台北', '1~2萬'),
(944444444, 'name3', '2016-03-04', 'E555555555', 'Zzz', '女', '墾丁', '1~2萬');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
