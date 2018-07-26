-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 05:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fidele`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_session_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `due` datetime NOT NULL,
  `evaluation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instraction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `course_session_id`, `file_id`, `value`, `due`, `evaluation`, `instraction`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 15, '2017-06-05 01:20:00', 'the ebaluationis  is done wit akdf', 'asdfasd sdf asdkj sd fie', '2018-04-23 22:24:09', '2018-04-23 22:24:09'),
(2, 1, 4, 30, '2019-11-06 00:37:00', 'jkajsfijiooifjki', 'loiasd iod miiejij', '2018-04-23 22:39:56', '2018-04-23 22:39:56'),
(3, 1, 6, 15, '2018-04-28 10:35:00', 'kajsdfaj ifejiwe sk said kdsf iejf dsaiduf eif sdi eiusf ei sdfiejf iesu', 'whrite a c++ program tha ie auei a aei k', '2018-04-24 07:36:35', '2018-04-24 07:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(10) UNSIGNED NOT NULL,
  `cource_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weeks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `cource_id`, `name`, `weeks`, `created_at`, `updated_at`) VALUES
(1, 1, 'introductio', NULL, '2018-05-09 10:11:50', '2018-05-09 10:11:50'),
(2, 2, 'array and string', NULL, '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(3, 2, 'pointer', NULL, '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(4, 2, 'structure ', NULL, '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(5, 2, 'class', NULL, '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(6, 3, 'sentence', NULL, '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(7, 3, 'modifiers', NULL, '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(8, 3, 'essey writeing', NULL, '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(9, 4, 'limits', NULL, '2018-05-09 10:20:46', '2018-05-09 10:20:46'),
(10, 4, 'derivatives', NULL, '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(11, 4, 'integration', NULL, '2018-05-09 10:20:47', '2018-05-09 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `collages`
--

CREATE TABLE `collages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collages`
--

INSERT INTO `collages` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Technology', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abr` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_hr` int(11) NOT NULL,
  `ECTS` int(11) NOT NULL,
  `weeks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objective` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `abr`, `code`, `credit_hr`, `ECTS`, `weeks`, `delivery`, `objective`, `discription`, `created_at`, `updated_at`) VALUES
(1, 'Programing I', 'PR1', 'SE_001', 3, 2, '16', 'parrel', 'to enhance the programming skill of students \n                        ', 'the course is geven in C+++ \n                        ', '2018-05-09 10:11:50', '2018-05-09 10:11:50'),
(2, 'Programing II ', 'PR2', 'SE_002', 3, 2, '16', 'parrel', 'the second part of the programming I course \n                        ', 'it is advanced part of the programing including oop \n                        ', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(3, 'Comminicative english', 'CEG', 'EG_001', 3, 2, '16', 'parrel', 'the introduction if comunicative engilish \n                        ', 'lajfskl akifjeilko ieuyjna fasuf  \n                        ', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(4, 'calculus', 'CALC', 'MT_001', 4, 2, '3', 'parrel', 'impruve maths skils', 'lakjfi aisdf owew iosu iuur eij', '2018-05-09 10:20:46', '2018-05-09 10:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `course_sessions`
--

CREATE TABLE `course_sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `teacher_id` int(191) NOT NULL,
  `accadamic_year` int(11) NOT NULL,
  `semister` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sessions`
--

INSERT INTO `course_sessions` (`id`, `course_id`, `group_id`, `teacher_id`, `accadamic_year`, `semister`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 2, 1, 'II', '2018-02-06', '2018-05-31', '2018-05-09 14:15:23', '2018-05-09 14:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `collage_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `user_id`, `collage_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'software engineering', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `session_id`, `type`, `discription`, `date`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Test or Exam', 'we have test prepare your self', '2018-04-24', '09:31:00', '08:31:00', '2018-04-23 20:34:28', '2018-04-23 20:34:28'),
(2, 3, 1, 'class', 'Weekly class', '2018-04-24', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(3, 3, 1, 'class', 'Weekly class', '2018-05-01', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(4, 3, 1, 'class', 'Weekly class', '2018-05-08', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(5, 3, 1, 'class', 'Weekly class', '2018-05-15', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(6, 3, 1, 'class', 'Weekly class', '2018-05-22', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(7, 3, 1, 'class', 'Weekly class', '2018-05-29', '03:40:00', '05:30:00', '2018-04-24 08:05:02', '2018-04-24 08:05:02'),
(8, 3, 1, 'class', 'Weekly class', '2018-04-24', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(9, 3, 1, 'class', 'Weekly class', '2018-05-01', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(10, 3, 1, 'class', 'Weekly class', '2018-05-08', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(11, 3, 1, 'class', 'Weekly class', '2018-05-15', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(12, 3, 1, 'class', 'Weekly class', '2018-05-22', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(13, 3, 1, 'class', 'Weekly class', '2018-05-29', '03:40:00', '05:30:00', '2018-04-24 08:05:06', '2018-04-24 08:05:06'),
(14, 3, 1, 'class', 'Weekly class', '2018-04-24', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(15, 3, 1, 'class', 'Weekly class', '2018-05-01', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(16, 3, 1, 'class', 'Weekly class', '2018-05-08', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(17, 3, 1, 'class', 'Weekly class', '2018-05-15', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(18, 3, 1, 'class', 'Weekly class', '2018-05-22', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(19, 3, 1, 'class', 'Weekly class', '2018-05-29', '03:40:00', '05:30:00', '2018-04-24 08:05:08', '2018-04-24 08:05:08'),
(20, 2, 1, 'class', 'Weekly class', '2018-04-24', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(21, 2, 1, 'class', 'Weekly class', '2018-05-01', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(22, 2, 1, 'class', 'Weekly class', '2018-05-08', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(23, 2, 1, 'class', 'Weekly class', '2018-05-15', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(24, 2, 1, 'class', 'Weekly class', '2018-05-22', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(25, 2, 1, 'class', 'Weekly class', '2018-05-29', '10:05:00', '00:05:00', '2018-04-24 08:05:47', '2018-04-24 08:05:47'),
(26, 2, 1, 'class', 'Weekly class', '2018-04-24', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(27, 2, 1, 'class', 'Weekly class', '2018-05-01', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(28, 2, 1, 'class', 'Weekly class', '2018-05-08', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(29, 2, 1, 'class', 'Weekly class', '2018-05-15', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(30, 2, 1, 'class', 'Weekly class', '2018-05-22', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(31, 2, 1, 'class', 'Weekly class', '2018-05-29', '10:05:00', '00:05:00', '2018-04-24 08:05:57', '2018-04-24 08:05:57'),
(32, 2, 1, 'class', 'Weekly class', '2018-04-24', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(33, 2, 1, 'class', 'Weekly class', '2018-05-01', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(34, 2, 1, 'class', 'Weekly class', '2018-05-08', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(35, 2, 1, 'class', 'Weekly class', '2018-05-15', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(36, 2, 1, 'class', 'Weekly class', '2018-05-22', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(37, 2, 1, 'class', 'Weekly class', '2018-05-29', '10:05:00', '00:05:00', '2018-04-24 08:06:03', '2018-04-24 08:06:03'),
(38, 2, 1, 'Test or Exam', 'it is form chapte 1 abut capter 2', '2018-04-27', '10:08:00', '11:08:00', '2018-04-24 08:08:25', '2018-04-24 08:08:25'),
(39, 2, 1, 'Class', 'if you are interested I will give tutorial on this daty', '2018-04-26', '08:10:00', '00:10:00', '2018-04-24 08:10:26', '2018-04-24 08:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_session_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `type`, `catagory`, `location`, `size`, `user_id`, `course_session_id`, `created_at`, `updated_at`) VALUES
(1, 'final የተማሪዎች ህገ ደንብ.asd.pdf', 'pdf', 'pdf', 'public/1/1_final የተማሪዎች ህገ ደንብ.asd.pdf', 310999, 3, 1, '2018-04-23 21:53:46', '2018-04-23 21:53:47'),
(2, 'coub proposal.pdf', 'pdf', 'pdf', 'public/1/2_coub proposal.pdf', 648900, 2, 1, '2018-04-23 22:24:08', '2018-04-23 22:24:09'),
(3, 'General goal of our team.pdf', 'pdf', 'pdf', 'public/1/3_General goal of our team.pdf', 88335, 3, 1, '2018-04-23 22:32:27', '2018-04-23 22:32:28'),
(4, 'C# ch1 lab overview.pdf', 'pdf', 'pdf', 'public/1/4_C# ch1 lab overview.pdf', 365721, 2, 1, '2018-04-23 22:39:55', '2018-04-23 22:39:56'),
(5, 'RAD c# course outline for SE.pdf', 'pdf', 'pdf', 'public/1/5_RAD c# course outline for SE.pdf', 119026, 2, 1, '2018-04-24 07:29:22', '2018-04-24 07:29:22'),
(6, 'OS_Chapter_Two[1].pdf', 'pdf', 'pdf', 'public/1/6_OS_Chapter_Two[1].pdf', 320173, 2, 1, '2018-04-24 07:36:34', '2018-04-24 07:36:35'),
(7, 'invitation.asd.pdf', 'pdf', 'pdf', 'public/1/7_invitation.asd.pdf', 102749, 3, 1, '2018-04-24 07:44:37', '2018-04-24 07:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `user_id`, `name`, `catagory`, `created_at`, `updated_at`) VALUES
(9, 1, 'software engineering 2009', 'class', '2018-05-09 13:38:53', '2018-05-09 13:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `htmls`
--

CREATE TABLE `htmls` (
  `id` int(10) UNSIGNED NOT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `htmls`
--

INSERT INTO `htmls` (`id`, `view`, `title`, `value`) VALUES
(2, 'general', 'websiteTitle', 'Fidel');

-- --------------------------------------------------------

--
-- Table structure for table `inc_excs`
--

CREATE TABLE `inc_excs` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `included` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) UNSIGNED NOT NULL,
  `mark_structure_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `mark_structure_id`, `user_id`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '5.00', '2018-04-24 07:32:30', '2018-04-24 07:34:16'),
(2, 2, 3, '3.00', '2018-04-24 07:32:50', '2018-04-24 07:32:58'),
(3, 3, 3, '12.00', '2018-04-24 07:33:05', '2018-04-24 07:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `mark_structures`
--

CREATE TABLE `mark_structures` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_session_id` int(11) NOT NULL,
  `out_of` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mark_structures`
--

INSERT INTO `mark_structures` (`id`, `course_session_id`, `out_of`, `created_at`, `updated_at`) VALUES
(1, 1, 10, '2018-04-24 07:32:30', '2018-04-24 07:32:30'),
(2, 1, 15, '2018-04-24 07:32:50', '2018-04-24 07:32:50'),
(3, 1, 20, '2018-04-24 07:33:05', '2018-04-24 07:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_19_183503_create_htmls_table', 1),
(4, '2017_09_20_130407_create_events_table', 1),
(7, '2017_10_02_123200_create_chapters_table', 1),
(8, '2017_10_02_123809_create_sub_chapters_table', 1),
(9, '2017_10_02_123928_create_roles_table', 1),
(10, '2017_10_02_124126_create_course_sessions_table', 1),
(11, '2017_10_02_124517_create_groups_table', 1),
(12, '2017_10_02_124712_create_user_groups_table', 1),
(13, '2017_10_02_125029_create_students_table', 1),
(14, '2017_10_02_125053_create_teachers_table', 1),
(15, '2017_10_02_125612_create_departments_table', 1),
(16, '2017_10_02_125705_create_collages_table', 1),
(17, '2017_10_05_012454_create___classes_table', 1),
(18, '2017_10_05_114412_create_inc_excs_table', 1),
(19, '2017_10_15_190456_create_assignments_table', 1),
(20, '2017_10_15_191016_create_submited_assignments_table', 1),
(21, '2017_10_15_191631_create_questions_table', 1),
(22, '2017_10_24_141804_create_files_table', 1),
(23, '2017_11_07_153323_create_mark_structures_table', 1),
(24, '2017_11_07_153552_create_marks_table', 1),
(25, '2018_03_02_075442_create_user_roles_table', 1),
(26, '2017_10_02_122243_create_courses_table', 2),
(28, '2018_04_08_130813_create_votes_table', 3),
(31, '2018_04_08_183823_create_reqs_table', 4),
(32, '2017_09_26_220247_create_notifications_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `type`, `title`, `content`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'exam', 'SADF WE', 'SAF QWEF', 1, '2018-04-24 19:36:59', '2018-04-24 19:36:59'),
(2, 2, 'test', 'hih', 'knkjhj', 1, '2018-04-24 19:41:56', '2018-04-24 19:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `is_answerd` tinyint(1) NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `student_id`, `session_id`, `question`, `answer`, `is_answerd`, `seen`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'what is variable', 'variable used to hold data in memory', 1, 0, '2018-04-24 07:49:13', '2018-04-24 07:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `reqs`
--

CREATE TABLE `reqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `request` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responce` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `min_vote` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reqs`
--

INSERT INTO `reqs` (`id`, `session_id`, `request`, `responce`, `min_vote`, `created_at`, `updated_at`) VALUES
(1, 1, 'ADW', NULL, '50.00', '2018-04-24 00:23:03', '2018-04-24 00:23:03'),
(2, 1, 'please postpon the test to wensday', NULL, '50.00', '2018-04-24 07:53:01', '2018-04-24 07:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'student', NULL, NULL),
(2, 'teacher', NULL, NULL),
(3, 'department head', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `meal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dorm` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submited_assignments`
--

CREATE TABLE `submited_assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submited_assignments`
--

INSERT INTO `submited_assignments` (`id`, `student_id`, `file_id`, `assignment_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 1, 'kafaskdjfiejkasdjf ie', '2018-04-23 22:32:28', '2018-04-23 22:32:28'),
(2, 3, 7, 1, 'jhfutd yryyut e', '2018-04-24 07:44:37', '2018-04-24 07:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `sub_chapters`
--

CREATE TABLE `sub_chapters` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_chapters`
--

INSERT INTO `sub_chapters` (`id`, `chapter_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'matichin langrauage', '2018-05-09 10:11:50', '2018-05-09 10:11:50'),
(2, 2, 'arras', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(3, 2, 'what are strings', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(4, 2, 'array manipuation', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(5, 2, 'string manipulation', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(6, 3, 'what is pointer', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(7, 3, 'accessing poingers', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(8, 4, 'what is structure', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(9, 4, 'how to use structure', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(10, 5, 'what are classes ', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(11, 5, 'oop concepts ', '2018-05-09 10:15:35', '2018-05-09 10:15:35'),
(12, 5, 'encapsulteion', '2018-05-09 10:15:36', '2018-05-09 10:15:36'),
(13, 6, 'how ot make sentence', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(14, 6, 'what are dangling modifires', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(15, 6, 'common errors', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(16, 7, 'introduction to modifries', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(17, 7, 'what are modifers', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(18, 7, 'use of modifires', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(19, 8, 'thpes of essay ', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(20, 8, 'how to wright an essay', '2018-05-09 10:18:29', '2018-05-09 10:18:29'),
(21, 9, 'what are limits', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(22, 9, 'zeros of limits', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(23, 9, 'types of limits', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(24, 10, 'zeros of derivatice ', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(25, 10, 'use fo drivatives', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(26, 10, 'application of derivatives', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(27, 11, 'use of integration', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(28, 11, 'what are integration', '2018-05-09 10:20:47', '2018-05-09 10:20:47'),
(29, 11, 'application of integrations', '2018-05-09 10:20:47', '2018-05-09 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `accadamic_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expriance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `accadamic_status`, `expriance`, `rateing`, `created_at`, `updated_at`) VALUES
(1, 2, 'instructor', '3', '4', NULL, NULL),
(2, 11, 'instracor', '3', '4', '2018-04-23 20:21:38', '2018-04-23 20:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `regId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middleName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthDate` date DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regId`, `email`, `phone`, `password`, `firstName`, `middleName`, `lastName`, `birthDate`, `nationality`, `gender`, `college_id`, `department_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DEP_0001_10', 'legalem@gmail.com', '0910867823', '$2y$10$4IutNr.Sk6bzPwF0hfPYB.xMzhXNYXtC4oOjq1sW1sADJ48dzvSQa', 'Legalem', 'Megbaru', 'lakjds', '2018-05-03', 'Ethiopian', 'M', 1, 1, 'PZUlmQ9rfALkao1RIFfWXgfKIYDhphxto2ckZrxDhzi5c67F3Koq0BK9Qntr', '2018-05-09 10:05:38', '2018-05-09 10:05:38'),
(2, 'TCH_0001_10', 'webetu@gmail.com', '0912121212', '$2y$10$QvlLMgYq97Q9/CCZNr6HU.V/I.rHOWnMAX7Kj7e9nK/j5lYbewSku', 'webetu', 'shiferaw', 'ALKJF', '2005-05-01', 'ethiopian', 'M', 1, 1, 'KRI3wigI5UkOKEi3LQ7Re3GL3mi9PFvRO7FDR0hB2HrHa7eJTmSkYxII47UK', '2018-05-09 10:23:17', '2018-05-09 10:23:17'),
(3, 'SUD_0001_10', 'eba@gmail.com', '0910867889', '$2y$10$TKMSZWV2qvFIAvKZGDILcuSc3tOJW04AOEnVyyngUeLIUY8Q8DAwO', 'eba', 'alemayehu', 'Tufa', '2018-05-09', 'ethiopian', 'M', 1, 1, 'DT8WfZB735OqTRvr3WIHdsLaC3pR0EkZ17KeKpbiwFMDdywLBhKbCRzeNGPi', '2018-05-09 10:25:19', '2018-05-09 10:25:19'),
(4, 'SUD_0002_10', 'jhon@gmail.com', '0909090909', '$2y$10$SiXQ6BpUMrtAI0icswMvUOVWUVa/KRrodN0GxZJ9ANODfLcI42bva', 'yohannes', 'sintayew', 'getaneh', '2018-05-09', 'ethiopian', 'M', 1, 1, '9ypz7NwCi7aZqPyStIHGFhnh9Pd6boung54KZfw38Igxzb2uy3ZwoUlqJuKP', '2018-05-09 10:26:42', '2018-05-09 10:26:42'),
(5, 'SUD_0003_10', 'ermi@gmail.com', '0912131313', '$2y$10$7bTQMNwV5/ucuCbPOyb4/Ok/ZO6sGk9WkGQLR7RbfhcXXug4WvPX.', 'ermias', 'alemayehu', 'sime', '2014-05-06', 'ethiopian', 'M', 1, 1, NULL, '2018-05-09 10:28:01', '2018-05-09 10:28:01'),
(6, 'TCH_0002_10', 'ayalenehe@gmail.com', '0908887767', '$2y$10$dNTc8X5KkAID7ZuK7u2lU./Rp3JLpZ8ADt59ZKeEBGqb8GUbNcS32', 'ayalenehe', 'lkaj', 'kaljf', '2018-01-02', 'Ethiopian', 'M', 1, 1, 'U5z9t572lez2ZDA8fSMstKOKtWTiuyRCe7bOtJOnxGLUwCx8Vz4CUYAUcrg4', '2018-04-23 19:45:59', '2018-04-23 19:45:59'),
(7, 'TCH_0003_10', 'abebe@gmail.com', '0920878732', '$2y$10$LHXDQxX8tjWALxn2KSbUTuegCw1LgOfDHbx4TbOeAS6ldxezLWlUK', 'abebe', 'chala', 'chebude', '2018-04-03', 'Ethiopian', 'M', 1, 1, 'esyfLxgJ8V1Mg6zhcmPdNpkpnrTeFoJGKJz5ZHxH2yaWxhcY8e6fEMP5CINt', '2018-04-23 19:53:52', '2018-04-23 19:53:52'),
(8, 'TCH_0004_10', 'teshager@gmail.com', '0920878732', '$2y$10$617K3enub6smaMdbySCN2uzup1yHM4dOlrH6ae.MXpmOIeDJ5kTfC', 'Teshager', 'adf', 'aksdf', '2018-04-01', 'Ethiopian', 'M', 1, 1, '0mxxH270T1IWldvpo5EGywr6uBGP3WIE6w7qJCPq1RO0fuNLkhwIHsLXU7it', '2018-04-23 19:56:25', '2018-04-23 19:56:25'),
(9, 'TCH_0005_10', 'kebe@gmail.com', '0910867823', '$2y$10$lXkjQzEY8dHZgj6v68zk9Os0VxEPfYsIKKKBRw2UYdDENmJK4/H4C', 'kebede', 'kadf', 'kdsf', '2018-04-04', 'Ethiopian', 'M', 1, 1, 'qeMFI9KyRmpXLQ9AQMcYc6RVQM9ViZqTQQ53c3C8Lp73SdlQCpad4w2DXC02', '2018-04-23 20:11:39', '2018-04-23 20:11:39'),
(10, 'TCH_0006_10', 'pod@gmail.com', '0911112233', '$2y$10$/9GaB6cTnwZQj6v08Nvb2esUXDXo9qNqza8cYtEFi1T.fe3RfsCWG', 'Poderico', 'island', 'man', '2018-04-03', 'Ethiopian', 'M', 1, 1, '9SY3JlZPoLm3CKKWkPYQoD6QdmsRMA9sT1pYaxUfmdX86R7BQNwIZfdls1LW', '2018-04-23 20:16:05', '2018-04-23 20:16:05'),
(11, 'TCH_0007_10', 'devid@gmail.com', '0923904323', '$2y$10$yupHD7UYbvr9wakmkKPbAOJkQ47xLNd7utLADiHO/wSUgu6HLoKte', 'Devid', 'venesa', 'yes', '2018-01-01', 'Ethiopian', 'M', 1, 1, 'sWkWMszzNxxR2Qo7pAkEkvygrKfWdi8rUOF14egHFbnDUG0wUYdLwP6vuLMz', '2018-04-23 20:21:37', '2018-04-23 20:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `user_id`, `group_id`, `created_at`, `updated_at`) VALUES
(65, 3, 9, '2018-05-09 13:38:53', '2018-05-09 13:38:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2018-05-09 10:05:38', '2018-05-09 10:05:38'),
(2, 2, 2, '2018-05-09 10:23:17', '2018-05-09 10:23:17'),
(3, 3, 1, '2018-05-09 10:25:19', '2018-05-09 10:25:19'),
(4, 4, 1, '2018-05-09 10:26:43', '2018-05-09 10:26:43'),
(5, 5, 1, '2018-05-09 10:28:01', '2018-05-09 10:28:01'),
(6, 6, 2, '2018-04-23 19:46:00', '2018-04-23 19:46:00'),
(7, 7, 2, '2018-04-23 19:53:53', '2018-04-23 19:53:53'),
(8, 8, 2, '2018-04-23 19:56:25', '2018-04-23 19:56:25'),
(9, 9, 2, '2018-04-23 20:11:39', '2018-04-23 20:11:39'),
(10, 10, 2, '2018-04-23 20:16:05', '2018-04-23 20:16:05'),
(11, 11, 2, '2018-04-23 20:21:37', '2018-04-23 20:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(10) UNSIGNED NOT NULL,
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `request_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 3, '2018-04-24 08:01:26', '2018-04-24 08:01:26'),
(2, 2, 2, '2018-04-24 08:02:31', '2018-04-24 08:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `__classes`
--

CREATE TABLE `__classes` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `section` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `__classes`
--

INSERT INTO `__classes` (`id`, `department_id`, `teacher_id`, `group_id`, `section`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 9, 'A', '2018-05-09 13:38:54', '2018-05-09 13:38:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collages`
--
ALTER TABLE `collages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sessions`
--
ALTER TABLE `course_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htmls`
--
ALTER TABLE `htmls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inc_excs`
--
ALTER TABLE `inc_excs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark_structures`
--
ALTER TABLE `mark_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reqs`
--
ALTER TABLE `reqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submited_assignments`
--
ALTER TABLE `submited_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_chapters`
--
ALTER TABLE `sub_chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_regid_unique` (`regId`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `__classes`
--
ALTER TABLE `__classes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `collages`
--
ALTER TABLE `collages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_sessions`
--
ALTER TABLE `course_sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `htmls`
--
ALTER TABLE `htmls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inc_excs`
--
ALTER TABLE `inc_excs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mark_structures`
--
ALTER TABLE `mark_structures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reqs`
--
ALTER TABLE `reqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submited_assignments`
--
ALTER TABLE `submited_assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_chapters`
--
ALTER TABLE `sub_chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `__classes`
--
ALTER TABLE `__classes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
