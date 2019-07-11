-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2019 at 11:08 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsf_d03_25_productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `parksite_table`
--

CREATE TABLE `parksite_table` (
  `id` int(12) NOT NULL,
  `title` text NOT NULL,
  `comment` text NOT NULL,
  `price01` int(12) NOT NULL,
  `price07` int(12) NOT NULL,
  `price30` int(12) NOT NULL,
  `zipcode` varchar(64) NOT NULL,
  `prefecture` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `adress01` varchar(64) NOT NULL,
  `adress02` text,
  `space01` int(1) NOT NULL,
  `space02` int(1) NOT NULL,
  `space03` int(1) NOT NULL,
  `space04` int(1) NOT NULL,
  `space05` int(1) NOT NULL,
  `space06` int(1) NOT NULL,
  `option01` int(1) NOT NULL,
  `option02` int(1) NOT NULL,
  `option03` int(1) NOT NULL,
  `option04` int(1) NOT NULL,
  `nearby01` int(1) NOT NULL,
  `nearby02` int(1) NOT NULL,
  `nearby03` int(1) NOT NULL,
  `nearby04` int(1) NOT NULL,
  `cancel01` int(32) NOT NULL,
  `cancel02` int(32) NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parksite_table`
--

INSERT INTO `parksite_table` (`id`, `title`, `comment`, `price01`, `price07`, `price30`, `zipcode`, `prefecture`, `city`, `adress01`, `adress02`, `space01`, `space02`, `space03`, `space04`, `space05`, `space06`, `option01`, `option02`, `option03`, `option04`, `nearby01`, `nearby02`, `nearby03`, `nearby04`, `cancel01`, `cancel02`, `indate`) VALUES
(1, 'aaa', 'bbb', 0, 111, 222, '333', 'ccc', 'ddd', 'eee', 'fff', 0, 0, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 0, 1, 0, 2, '2019-07-10'),
(2, 'バーベキューができるRVパーク', 'みんなでわいわい！本格バーベキュー設備がついたRVパーク', 1000, 6000, 25000, '224-0041', '神奈川県', '横浜市都筑区仲町台', '555', '赤い郵便ポストのある角を右に入ってすぐ。', 0, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0, 1, 1, 1, '2019-07-11'),
(3, 'ペットオーナーさん必見！ペットと入れる足湯のあるパーキング', '全国でも珍しいペットと入れる足湯があります。ぜひ愛犬愛猫ちゃんと遊びに来てください。', 1300, 7000, 30000, '400-0845', '山梨県', '甲府市上今井町', '888', 'インターチェンジを降りて左折。猫の看板が目印です。', 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 2, 2, '2019-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parksite_table`
--
ALTER TABLE `parksite_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parksite_table`
--
ALTER TABLE `parksite_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
