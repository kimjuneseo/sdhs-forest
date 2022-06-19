-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-06-19 17:09
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `sdhs-forest`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `idx` int(100) NOT NULL,
  `user_idx` int(100) NOT NULL,
  `item_idx` int(100) NOT NULL,
  `content` text NOT NULL,
  `child_key` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `comment_tbl`
--

INSERT INTO `comment_tbl` (`idx`, `user_idx`, `item_idx`, `content`, `child_key`) VALUES
(1, 0, 0, '', 0),
(2, 3, 1, 'yt', 0),
(3, 3, 1, 'yt', 0),
(4, 3, 1, 'yt', 0),
(5, 3, 1, 'dfgh', 0),
(6, 3, 1, 'dfgh', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `content_tbl`
--

CREATE TABLE `content_tbl` (
  `idx` int(11) NOT NULL,
  `user_idx` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `imgs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `content_tbl`
--

INSERT INTO `content_tbl` (`idx`, `user_idx`, `title`, `content`, `imgs`) VALUES
(1, 3, '123', '123', ''),
(2, 3, '123', '123', ''),
(3, 3, '김준서', '짱짱', ''),
(4, 6, '김준서', '앙기보', ''),
(5, 6, '1231231231', '123123123123', '');

-- --------------------------------------------------------

--
-- 테이블 구조 `user_tbl`
--

CREATE TABLE `user_tbl` (
  `idx` int(11) NOT NULL,
  `id` text NOT NULL,
  `pwd` text NOT NULL,
  `name` text NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `user_tbl`
--

INSERT INTO `user_tbl` (`idx`, `id`, `pwd`, `name`, `profile`) VALUES
(3, '1', '1', '1', '202206165354jpeg'),
(4, '1', '1', '3', '202206165453.jpeg'),
(5, '3', '3', '3', '202206165848.jpeg'),
(14, '김준서1233', '김준서', '김준서', 'user.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `content_tbl`
--
ALTER TABLE `content_tbl`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `idx` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 테이블의 AUTO_INCREMENT `content_tbl`
--
ALTER TABLE `content_tbl`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 테이블의 AUTO_INCREMENT `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
