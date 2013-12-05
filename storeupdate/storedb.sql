-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2013 年 12 月 05 日 13:57
-- サーバのバージョン: 5.5.27
-- PHP のバージョン: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `storedb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_number` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `seibetsu` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`customer_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- テーブルのデータのダンプ `customer`
--

INSERT INTO `customer` (`customer_number`, `name`, `id`, `password`, `seibetsu`, `birthday`) VALUES
(1, 'etccc', 'ecoeco', 'ecoeco', 'man', '2013-07-12'),
(2, 'etbbbb', 'ceoceo', 'ceoceo', 'woman', '2013-07-16'),
(6, 'kkxxaa', 'kkxxaa', 'kkxxaa', '男', '2013-07-16');

-- --------------------------------------------------------

--
-- テーブルの構造 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `info` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `sales_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- テーブルのデータのダンプ `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `price`, `info`, `company`, `sales_date`) VALUES
(10, 'table', 'tableno1', 3300, 'table', 'a', '2013-07-18 09:07:32'),
(11, 'chair', 'chairno1', 2400, 'chair', 'chair', '2013-07-18 09:07:32'),
(12, 'sofa', 'sofano1', 2500, 'a', 'sofa', '2013-07-18 09:08:49'),
(13, 'sofa', 'sofano2', 2600, 'b', 'sofa', '2013-07-18 09:08:49'),
(14, 'table', 'tableno3', 4100, 'table', 'table', '2013-07-18 09:09:54'),
(15, 'table', 'tablen04', 4500, 'tableno4', 'table', '2013-07-18 09:09:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- テーブルのデータのダンプ `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `admin`) VALUES
(2, 'xxx', 'aaa', 1),
(3, 'abc', 'bbb', 1),
(4, 'abc', 'bbb', 1),
(5, 'bbk', 'aaa', 1),
(7, 'rks', 'rks', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
