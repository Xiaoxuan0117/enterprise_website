-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-03-26 17:53:15
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `enterprise`
--

-- --------------------------------------------------------

--
-- 資料表結構 `article`
--

CREATE TABLE `article` (
  `articleID` int(11) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `anonymous` varchar(3) NOT NULL,
  `type` varchar(5) NOT NULL,
  `CompanyName` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `pro` text NOT NULL,
  `con` text NOT NULL,
  `dateandtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `article`
--

INSERT INTO `article` (`articleID`, `UserID`, `anonymous`, `type`, `CompanyName`, `position`, `pro`, `con`, `dateandtime`) VALUES
(36, 'CC', '是', '工作', '麥當勞', '經理', '錢很多', '員工超難帶', '2021-06-24 04:06:00'),
(37, 'Amy', '否', '工作', '星辰外商', '經理', '公司很漂亮', '工時長', '2021-06-24 04:12:35'),
(38, 'Ben', '是', '工作', 'H旅館', '櫃台服務', '福利好', '奧客多', '2021-06-24 04:13:39'),
(39, 'CC', '否', '面試', '康是美', '櫃台', '每天吹冷氣', '上架很麻煩', '2021-06-24 14:21:12'),
(40, 'Amy', '是', '面試', '摩斯漢堡', '櫃台', '好', '壞', '2021-06-24 14:41:35');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `commentID` int(11) NOT NULL,
  `articleID` int(11) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `content` text NOT NULL,
  `dateandtime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `comment`
--

INSERT INTO `comment` (`commentID`, `articleID`, `UserID`, `content`, `dateandtime`) VALUES
(72, 36, 'CC', '說得好', '2021-06-24 04:19:58'),
(73, 38, 'CC', '薪水怎麼樣?', '2021-06-24 14:22:28'),
(74, 40, 'Amy', '說得好', '2021-06-24 14:41:54'),
(75, 40, 'd', '有講跟沒講一樣', '2022-03-08 23:20:48');

-- --------------------------------------------------------

--
-- 資料表結構 `register`
--

CREATE TABLE `register` (
  `account` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `UserID` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `register`
--

INSERT INTO `register` (`account`, `password`, `UserID`, `email`, `birthday`) VALUES
('A123', '12345', 'Amy', 'A@gmail.com', '2000-11-10'),
('B233', '54321', 'Ben', 'ben@gmail.com', '1995-05-25'),
('C890', '890', 'CC', 'C@gmail.com', '2010-02-23'),
('d', 'd', 'd', 'd', '2010-01-05');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleID`),
  ADD KEY `FOREIGN` (`UserID`) USING BTREE;

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentID`),
  ADD KEY `articleID` (`articleID`),
  ADD KEY `UserID` (`UserID`);

--
-- 資料表索引 `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UserID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `article`
--
ALTER TABLE `article`
  MODIFY `articleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `comment`
--
ALTER TABLE `comment`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `register` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`articleID`) REFERENCES `article` (`articleID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `register` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
