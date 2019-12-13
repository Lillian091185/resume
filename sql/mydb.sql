-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_content` varchar(230) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_year` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `job_name`, `com_name`, `job_content`, `from_year`, `from_mon`, `to_year`, `to_mon`) VALUES
(10, 'PT計時服務員', '星巴克', '亨煮咖啡、門市服務', '2016', '9', '2018', '9'),
(11, '銷售/客服', '門市工讀', 'world gym', '2018', '10', '2019', '7'),
(12, '門市服務', '門市工讀', '錢櫃', '2016', '3', '2016', '8');

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `name`, `type`, `path`, `sh`) VALUES
(45, 'images.jpg', 'image/jpeg', './img/images.jpg', 0),
(48, 'IMG_3262.JPG', 'image/jpeg', './img/IMG_3262.JPG', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `pro`
--

CREATE TABLE `pro` (
  `id` int(10) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `pro`
--

INSERT INTO `pro` (`id`, `name`, `type`, `path`, `text`, `href`) VALUES
(57, 'game1.png', 'image/png', './img/game1.png', '打地鼠', '123'),
(58, 'game2.jpg', 'image/jpeg', './img/game2.jpg', '時鐘', '456'),
(59, 'game3.png', 'image/png', './img/game3.png', '計算機', '789'),
(60, 'game4.png', 'image/png', './img/game4.png', '翻牌小遊戲', '555'),
(61, 'game5.jpg', 'image/jpeg', './img/game5.jpg', '打殭屍', '666');

-- --------------------------------------------------------

--
-- 資料表結構 `self`
--

CREATE TABLE `self` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `self_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `self`
--

INSERT INTO `self` (`id`, `name`, `username`, `tel`, `email`, `self_text`, `addr`, `school`) VALUES
(21, '蕭妘霓', 'Lillian', '0958537911', 'a33691a33691@gmail.com', '您好，我叫蕭妘霓，來自桃園市龜山區，家庭環境單純簡單，與父親及祖父母同住，而單親及隔代教養的生長環境下，造就了我與同齡人相對更為早熟的性格，從小就善於幫助、照顧人，也樂於付出；且由於祖父母為人皆低調謙虛，也造就了我內斂不張揚的性格；而父親始終如一的陪伴、在我遇到挫折時的鼓勵，也造就了我善於體貼包容的個性。\r\n在大學就學期間內：\r\n1、於一年級時擔任了一學年度的班級代表，磨練出領導能力\r\n2、且擔任過系上副主任的TA，學習了核銷、會計等事務\r\n3、在一次大型遊程設計比賽之中榮獲北區佳作的佳績，並在比賽中被評審表揚「口條非常好」\r\n4、考取了IC3國際證照及PVQC英文證照。\r\n在二年級上學期到三年級暑假為止，我在星巴克打工了一年又十個月的時間，而在三年級的暑假兩個月中，完成了系上規定的暑期實習，而我在這兩年在星巴克打工與實習的經驗中：\r\n1、深刻磨練了待人接物的能力及良好觀察力\r\n2、學習到在時間內最有效率的完成工作並磨練出工作上最重要的「抗壓力」\r\n3、臨危不亂、在眾多的危機之中將其化做轉機，且受到主管及夥伴的讚許\r\n4、學習到有效的運用溝通技巧吸引、留住客源\r\n5、達成「零遲到紀錄」及「連續兩年顧客票選優良夥伴第一名」\r\n而據我性格上成熟細心且體貼包容的特質及擅長觀察、口條流利等的優點，期盼未來畢業後能進入與諮詢師、心理輔導相關，或是與小朋友接觸的幼教、補教業等等行業，希望我能運用性格上的諸多特質在我所期盼的行業之中付出、幫助他人。\r\n', '桃園市龜山區', '龍華科技大學');

-- --------------------------------------------------------

--
-- 資料表結構 `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `sen` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_offr` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_site` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lan` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `status`
--

INSERT INTO `status` (`id`, `sen`, `job_type`, `salary`, `job_offr`, `job_site`, `lan`, `skill`) VALUES
(2, '四年12356', '全職', '40-50', '全端網頁工程師', '台北市', '英文', 'php');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `self`
--
ALTER TABLE `self`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `self`
--
ALTER TABLE `self`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
