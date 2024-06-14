-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ich`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `messages` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `chat_time` datetime NOT NULL DEFAULT current_timestamp(),
  `recipient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `media_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`media_id`, `title`, `photo`, `post_date`) VALUES
(10, 'Students At The Park', 'students.jpg', '2022-07-12 17:11:04'),
(11, 'Senior Graduates For 2021', 'college3.jpg', '2022-07-12 17:11:24'),
(13, 'Teaching Theatre', 'college2.jpg', '2022-07-12 17:11:56'),
(15, 'School Auditorium', 'college1.jpg', '2022-07-12 17:12:26'),
(17, 'Lecturers', 'admin.jpeg', '2022-10-09 08:22:10'),
(18, 'Admins In Meeting', 'staffs.jpeg', '2022-10-09 08:22:35'),
(19, 'ICHT Students', 'banner2.jpeg', '2022-10-09 08:22:55'),
(20, 'Students', 'banner4.jpeg', '2022-10-09 08:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`article_id`, `title`, `details`, `photo`, `event_date`, `post_date`) VALUES
(8, 'Admins In Meeting', 'A Meeeting Of The Icht Staffs', 'admin.jpeg', '0000-00-00', '2022-10-09 08:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `author`, `title`, `details`, `photo`, `post_date`) VALUES
(10, '', 'Community Health - The Big Picture', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Officia Illo Doloribus Quod Deleniti Tempore Cupiditate Nulla Aspernatur Provident Natus Sapiente Ab Ducimus, Ex Asperiores Qui Facilis Rerum Libero Amet Veritatis Modi Odit, Similique Iusto Distinctio Repellendus. Dicta Eum Obcaecati Cupiditate.', 'students.jpg', '2022-07-12 21:24:31'),
(11, '', 'Pharmaceutical Technology Way Out', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Officia Illo Doloribus Quod Deleniti Tempore Cupiditate Nulla Aspernatur Provident Natus Sapiente Ab Ducimus, Ex Asperiores Qui Facilis Rerum Libero Amet Veritatis Modi Odit, Similique Iusto Distinctio Repellendus. Dicta Eum Obcaecati Cupiditate.', 'college2.jpg', '2022-07-12 21:24:54'),
(12, '', 'Drug Abuse And Nursing', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Officia Illo Doloribus Quod Deleniti Tempore Cupiditate Nulla Aspernatur Provident Natus Sapiente Ab Ducimus, Ex Asperiores Qui Facilis Rerum Libero Amet Veritatis Modi Odit, Similique Iusto Distinctio Repellendus. Dicta Eum Obcaecati Cupiditate.', 'school_building.jpg', '2022-07-12 21:25:13'),
(13, '', 'Benefits Of Genotyping', 'Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit. Officia Illo Doloribus Quod Deleniti Tempore Cupiditate Nulla Aspernatur Provident Natus Sapiente Ab Ducimus, Ex Asperiores Qui Facilis Rerum Libero Amet Veritatis Modi Odit, Similique Iusto Distinctio Repellendus. Dicta Eum Obcaecati Cupiditate.', 'books.jpg', '2022-07-12 21:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`) VALUES
(1, 'Admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
