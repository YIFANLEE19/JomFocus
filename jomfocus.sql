-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 04:19 PM
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
-- Database: `jomfocus`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstName`, `lastName`, `email`, `message`, `time`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Law', 'johnlaw@gmail.com', 'Hi, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.', '2021-12-18 14:47:34', '2021-12-17 22:47:34', '2021-12-17 22:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `i_n_urgents`
--

CREATE TABLE `i_n_urgents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `i_urgents`
--

CREATE TABLE `i_urgents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Reward', 0, '5958bcce-cf2c-401c-bd11-c9725211fc6c', '/public/images', 'image', 'image.png', 'image/png', 'public', 'public', 20952, '[]', '[]', '[]', '[]', 1, '2021-12-17 06:57:42', '2021-12-17 06:57:42'),
(2, 'App\\Models\\Note', 1, '6c42e1c5-8317-4593-97b7-a213413706a5', '/public/images', 'image', 'image.png', 'image/png', 'public', 'public', 24906, '[]', '[]', '[]', '[]', 2, '2021-12-17 22:00:10', '2021-12-17 22:00:10'),
(3, 'App\\Models\\Note', 1, '300afb57-cdc1-43cf-b49a-9920fd77424d', '/public/images', 'image', 'image.png', 'image/png', 'public', 'public', 9198, '[]', '[]', '[]', '[]', 3, '2021-12-17 22:00:45', '2021-12-17 22:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_02_054102_create_todolists_table', 1),
(6, '2021_10_02_071357_create_notes_table', 1),
(7, '2021_10_02_071411_create_notebooks_table', 1),
(8, '2021_10_06_105803_create_i_urgents_table', 1),
(9, '2021_10_06_135216_create_i_n_urgents_table', 1),
(10, '2021_10_06_144855_create_n_i_urgents_table', 1),
(11, '2021_10_06_145647_create_n_i_n_urgents_table', 1),
(12, '2021_11_22_140508_create_feedback_table', 1),
(13, '2021_12_01_080059_create_news_table', 1),
(14, '2021_12_02_074610_create_media_table', 1),
(15, '2021_12_15_024511_create_redeem_lists_table', 1),
(16, '2021_12_15_024728_create_rewards_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `time`, `created_at`, `updated_at`) VALUES
(1, 'What is Pomodoro Technique?', '<p><i><strong>Written by Tan Qing Ji</strong></i></p><blockquote><p>The <strong>Pomodoro Technique</strong> is created by <strong>Francesco Cirillo</strong> for a more productive way to work and study. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short breaks. Each interval is known as a pomodoro, from the Italian word for \'tomato\', after the tomato-shaped kitchen timer that Cirillo used as a university student. - <strong>Wikipedia</strong></p></blockquote><figure class=\"image\"><img src=\"https://images2.penguinrandomhouse.com/author/2148540\"><figcaption>Francesco Cirillo</figcaption></figure><p>Pomodoro Technique is the technique which construct the Pomodoro Timer and is the effective and efficient way to complete the discrete task. Pomodoro technique have 5 important step which construct the Pomodoro Timer. The purpose of using pomodoro timer is to help you focus on any tasks you are working on, like study, writing or coding. This pomodoro timer is inspired by Pomodoro Technique which is a time management method developed by Francesco Cirillo.</p><p>Pomodoro technique consist of many advantage or is beneficial. First and foremost, the task can be completed in the effective and efficient method and the individual can complete the task without stressing and can complete the task with more comfortable. Furthermore, the task can be completed without delaying and procrastination.</p><p>To implement Pomodoro Timer, the Pomodoro Technique have to be implemented and defined. Firstly, the task have be entered and inserted. When the timer start, the timer will be countdown for 25 minutes. After that, the timer will stop for the resting of individual. Then, the timer continue until the task end.</p><p>Stay focus is the purpose of the we developed <i><strong>JomFocus. </strong></i>The individual have to stay focus and concentrate while completing the task. Stay focus can be implemented in the timer and for the task.</p><p>Stay focus have a lot of benefit. The individual can deal with discrete task and can stay focus and keep concentration until the goal have achieved and n defined. The goal set can be achieved easily in the effective way. The task also can be completed without delaying and procrastination. Stay focus can be implemented in 2 timer, Pomodoro Timer and Countdown Timer. After the task set, the individual have to keep focus until the task end.</p><figure class=\"image\"><img src=\"https://media.hswstatic.com/eyJidWNrZXQiOiJjb250ZW50Lmhzd3N0YXRpYy5jb20iLCJrZXkiOiJnaWZcL3BvbW9kb3JvMy5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjgyOH19fQ==\"><figcaption>The Pomodoro Technique: You Can Tackle Any Task 25 Minutes at a Time | &nbsp;HowStuffWorks</figcaption></figure>', '2021-12-16 09:07:02', '2021-12-15 00:11:37', '2021-12-15 17:07:02'),
(2, 'Can\'t stop enjoyment? Is it difficult to focus?', '<p><i><strong>Written by Tay Ki Chang</strong></i></p><blockquote><p>Can\'t stop enjoyment? Is it difficult to focus? JomFocus is the cutest focus timer that can help you stay focused and increase productivity! Whether you are working or studying, it can help you solve it!</p></blockquote><p>★ A final year project done by students from Batch IT-20B, Department of Computer Science, Southern University College★</p><p>★The latest and best self-improvement application★</p><p>★ Get praise and recommendation from students and teachers in our school★</p><p>&nbsp;</p><p>When you need to put down your phone and stay focused to complete your work, set the timing in <i><strong>JomFocus</strong></i>.</p><p>When you stay focused, the clock will count down. However, if you cannot resist the temptation to use electronic products and leave the app, your focused task will fail.</p><p>Seeing every accumulated concentration clock represents your dedication. A sense of accomplishment will motivate you to reduce procrastination and help you develop good time management habits!</p><p><strong>Motivation and gamification</strong></p><p>-Set your clock and let the time count down. Each dedicated clock represents your efforts.</p><p>-Earn rewards by staying focused! You can use rewards to redeem what you want!</p><p><strong>Multiple focus modes</strong></p><p>-Pomodoro Timer: Pomodoro Technique is adopted to help you complete a goal in a short period of time.</p><p>-Countdown Timer: You can set the time arbitrarily, help you complete tasks in a long time, and train your time management methods.</p><p><strong>Personalized experience</strong></p><p>-Reminder: Remind yourself to stay focused and don\'t use other electronic products that interfere with you!</p><p><strong>Multi-function support</strong></p><p>-To do list: Write your need to complete in the list to avoid you forgetting!</p><p>-Notebook App: You can record anything on it, including but not limited to notes, diaries, articles, etc.</p><p>-Four Quadrant Matrix: Separate the things you need to deal with, and complete them step by step according to the principle of priority!</p><p>-Block unproductive(<i><strong>JomBlock </strong></i>extension): Block other pages on your web browser to prevent them from interfering with your concentration!</p><p><strong>Shop</strong></p><p>-Exchange voucher: You can use the voucher to purchase items!</p><p>-Planting trees: accumulate enough points to plant a real tree on the earth and make a contribution to the greening of the world.</p><p>&nbsp;</p><p>Use <i><strong>JomFocus</strong></i> now for free, focus on the most important things in life, and become a better version of yourself!</p>', '2021-12-16 09:06:53', '2021-12-15 17:06:00', '2021-12-15 17:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `notebooks`
--

CREATE TABLE `notebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notebooks`
--

INSERT INTO `notebooks` (`id`, `userID`, `title`, `created_at`, `updated_at`) VALUES
(1, '1', 'SUC', '2021-12-17 21:50:56', '2021-12-17 21:50:56'),
(2, '1', 'Revision', '2021-12-17 21:51:07', '2021-12-17 21:51:07'),
(3, '1', 'UI design', '2021-12-17 21:51:14', '2021-12-17 21:51:14'),
(4, '1', 'UX design', '2021-12-17 21:51:21', '2021-12-17 21:51:21'),
(5, '1', 'Computer organization and architect', '2021-12-17 21:51:44', '2021-12-17 21:51:44'),
(6, '1', 'Information security and control', '2021-12-17 21:52:19', '2021-12-17 21:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notebookID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `notebookID`, `title`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, '1', 'Test note for Suc', 'JomFocus.png', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><figure class=\"image\"><img src=\"https://cdn.dribbble.com/users/26642/screenshots/17084224/media/9efe6aedf539473cc7fb749e3cbea722.png?compress=1&amp;resize=400x300\" alt=\"Investment Platform Product application startup interface design ux halo lab ui\"></figure><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', '2021-12-17 22:00:11', '2021-12-17 22:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `n_i_n_urgents`
--

CREATE TABLE `n_i_n_urgents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `n_i_urgents`
--

CREATE TABLE `n_i_urgents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redeem_lists`
--

CREATE TABLE `redeem_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rewardID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rewardName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `redeem_lists`
--

INSERT INTO `redeem_lists` (`id`, `rewardID`, `rewardName`, `userID`, `time`, `created_at`, `updated_at`) VALUES
(1, '5', 'Grab RM20', '1', '2021-12-18 13:35:11', '2021-12-17 21:35:11', '2021-12-17 21:35:11'),
(2, '1', 'Google Play Gift Card - $50', '1', '2021-12-18 13:40:37', '2021-12-17 21:40:37', '2021-12-17 21:40:37'),
(3, '1', 'Google Play Gift Card - $50', '1', '2021-12-23 08:49:41', '2021-12-22 16:49:41', '2021-12-22 16:49:41'),
(4, '1', 'Google Play Gift Card - $50', '1', '2021-12-23 08:50:57', '2021-12-22 16:50:57', '2021-12-22 16:50:57'),
(5, '1', 'Google Play Gift Card - $50', '1', '2021-12-23 08:52:51', '2021-12-22 16:52:51', '2021-12-22 16:52:51'),
(6, '1', 'Google Play Gift Card - $50', '1', '2021-12-28 12:42:40', '2021-12-27 20:42:40', '2021-12-27 20:42:40'),
(7, '1', 'Google Play Gift Card - $50', '1', '2021-12-28 13:19:16', '2021-12-27 21:19:16', '2021-12-27 21:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `name`, `image`, `description`, `value`, `quantity`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Google Play Gift Card - $50', 'giftCard-50.jpg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', 200000, 10, 'JOMGPGC50', '2021-12-14 21:45:50', '2021-12-27 21:40:35'),
(3, 'Tngo Reload Pin $50', 'tngo-50.jpg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', 200000, 10, 'JOMTNGORM50', '2021-12-17 06:46:38', '2021-12-17 06:53:19'),
(4, 'Grab RM15', 'Grab15.jpg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', 15000, 3, 'JOMGRABRM15', '2021-12-17 06:52:50', '2021-12-17 06:52:50'),
(5, 'Grab RM20', 'Grab20.jpg', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', 20000, 2, 'JOMGRABRM20', '2021-12-17 06:54:36', '2021-12-17 21:35:11'),
(6, 'Paypal gift card - $20', 'Paypal20.png', '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat accusamus dolorem doloribus incidunt architecto molestias expedita magni, veniam odio minima laboriosam explicabo, omnis, necessitatibus repudiandae fugit beatae animi laudantium mollitia.</p>', 70000, 20, 'JOMPAYPAL20', '2021-12-17 06:58:19', '2021-12-17 06:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `todolists`
--

CREATE TABLE `todolists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `points`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'LEE YI FAN', 'D200148B@sc.edu.my', NULL, 1, '$2y$10$nDn74x6qNv0R2gqL7BbmmeyDzK/PUl5DWi.FvPPoDE/i5LGqF3Afi', 99999999, NULL, '2021-12-14 20:18:20', '2021-12-27 21:19:16'),
(3, 'TAN QING JI', 'D200171B@sc.edu.my', NULL, 1, '$2y$10$55AFYrgF4..S.KPQRW8yC.v/e0cZDeW1ujyo/dpDqVLJOlgd9.fQW', 99999999, NULL, '2021-12-15 17:33:41', '2021-12-15 17:33:41'),
(4, 'TAY KI CHANG', 'D200132B@sc.edu.my', NULL, 1, '$2y$10$1upeRO.pmCzR6rfS7ZUspunuXf9u88ifRHOWlEmGTd9hmekqGnTmO', 99999999, NULL, '2021-12-15 17:33:59', '2021-12-15 17:33:59'),
(5, 'Anna', 'anna98@gmail.com', NULL, 0, '$2y$10$dNGJ46c5ijJJK.ypRyOT5u.QgauP4iitn9mxG7udLxgVk2/Os1WIm', 0, NULL, '2021-12-15 17:34:33', '2021-12-15 17:34:33'),
(6, 'Bella', 'bella@hotmail.com', NULL, 0, '$2y$10$ynU35J1wVQ6yHIetgrFEH.iDKj8TJ2eNujPlcE.eypOC5CfO2/5KG', 0, NULL, '2021-12-15 17:34:54', '2021-12-15 17:34:54'),
(7, 'Charles', 'charlessss19@gmail.com', NULL, 0, '$2y$10$eRlWG1fBoUJW4gYL43WRjudbt1i/epe0qfnjKH3Epmw/hM5yzABF6', 0, NULL, '2021-12-15 17:35:34', '2021-12-15 17:35:34'),
(8, 'Anthony', 'a012345@gmail.com', NULL, 0, '$2y$10$8Yr4Bug2brlLzfdZVXxcGuUlkoAkaXDKxO8bBcg/VL8gwvpgtwIXq', 0, NULL, '2021-12-15 17:36:06', '2021-12-15 17:36:06'),
(9, 'Yvonne', 'yvonneTeo@gmail.com', NULL, 0, '$2y$10$rLJZ3uL33xYwSS4hfdbuAOcf4pOLaCGP6OyFfn1n0z9soA7xPb6Ya', 0, NULL, '2021-12-15 17:37:54', '2021-12-15 17:37:54'),
(10, 'Wendy', 'wendylim@gmail.com', NULL, 0, '$2y$10$n6waklM4aBCokFDDwZq5auAQdYhW.iccVkv7ky9OFWNcLPLpxNBJ.', 0, NULL, '2021-12-17 06:23:32', '2021-12-17 06:23:32'),
(11, 'Sonia', 'sonia@hotmail.com', NULL, 0, '$2y$10$SuJEILmxBpacgDC5f/4.p.sp9phI6.KnsLHNT2WO1xvN9SW1ceCWO', 0, NULL, '2021-12-17 06:23:47', '2021-12-17 06:23:47'),
(12, 'Julia', 'julia123@gmail.com', NULL, 0, '$2y$10$f8rle.GXTGsD8xEi66VPf.47rkDFSCVmkem9x.c4WGZf6JIr226lm', 0, NULL, '2021-12-17 06:24:03', '2021-12-17 06:24:03'),
(13, 'Grace', 'graceee@outlook.com', NULL, 0, '$2y$10$wKAX60ZfzCyNoZjnsNbIMeWFzjTkapIQLfrc3W5umO5smfr8dQLJ.', 0, NULL, '2021-12-17 06:24:21', '2021-12-17 06:24:21'),
(14, 'Emily', 'eeemillyy@gmail.com', NULL, 0, '$2y$10$tu9aI/uABftcdEzAYPInh.7tU/ReiPdg7.0OI9jdWjQAKgCcPafmq', 0, NULL, '2021-12-17 06:24:38', '2021-12-17 06:24:38'),
(15, 'Carol', 'caroll@gmail.com', NULL, 0, '$2y$10$12rJak.W4kjptJsmhzEweuO0mhchZavZsL13XdUmzJpG94nhiGI8y', 0, NULL, '2021-12-17 06:24:54', '2021-12-17 06:24:54'),
(16, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$tnlKU2Cdnv4T02WuRNreqOm78PgIS9Dg59alk5RbDwTQUTl1wl.ti', 0, NULL, '2022-01-10 07:15:11', '2022-01-10 07:15:11'),
(17, 'User', 'user@gmail.com', NULL, 0, '$2y$10$RUktbjFEGsZHZCB0tb4tBeNnV.dXzxCFCORpA.xgC62ukJC6JvPUO', 100000, NULL, '2022-01-10 07:15:42', '2022-01-10 07:15:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_email_unique` (`email`);

--
-- Indexes for table `i_n_urgents`
--
ALTER TABLE `i_n_urgents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i_urgents`
--
ALTER TABLE `i_urgents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_i_n_urgents`
--
ALTER TABLE `n_i_n_urgents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n_i_urgents`
--
ALTER TABLE `n_i_urgents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `redeem_lists`
--
ALTER TABLE `redeem_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rewards_code_unique` (`code`);

--
-- Indexes for table `todolists`
--
ALTER TABLE `todolists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `i_n_urgents`
--
ALTER TABLE `i_n_urgents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `i_urgents`
--
ALTER TABLE `i_urgents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `n_i_n_urgents`
--
ALTER TABLE `n_i_n_urgents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `n_i_urgents`
--
ALTER TABLE `n_i_urgents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `redeem_lists`
--
ALTER TABLE `redeem_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `todolists`
--
ALTER TABLE `todolists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
