-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 05:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aru_convocation`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announce_id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `announce_status` int(11) NOT NULL,
  `publish_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announce_id`, `tittle`, `url`, `announce_status`, `publish_date`, `created_by`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'GIS Short Course AnnouncementNew', 'https://www.aru.ac.tz/announcements/gis-short-course-announcement-1', 1, '2023-08-15', 10, NULL, '2023-08-23 17:21:19', '2023-09-09 15:05:48'),
(5, 'Call for Submissions: Just Housing Solutions for Urban Tanzania', 'https://www.aru.ac.tz/announcements/call-for-applications-for-uta-do-2024-call-for-submissions-just-housing-solutions-for-urban-tanzania', 0, '2023-08-22', 10, NULL, '2023-08-23 17:22:33', '2023-09-01 00:54:24'),
(6, 'Call for Submissions: Just Housing Solutions for Urban Tanzania', 'https://www.aru.ac.tz/announcements/call-for-applications-for-uta-do-2024-call-for-submissions-just-housing-solutions-for-urban-tanzania', 1, '2023-08-23', 10, NULL, '2023-08-23 17:23:47', '2023-09-01 01:04:34'),
(7, 'Call for applications for UTA-Do 2024', 'https://www.aru.ac.tz/announcements/call-for-applications-for-uta-do-2024', 0, '2023-08-18', 10, NULL, '2023-08-23 17:32:14', '2023-09-01 00:54:32'),
(8, 'NEW UPDATE', 'https://www.youtube.com/watch?v=CE0QkFqEMvg', 1, '2023-05-17', 10, NULL, '2023-08-23 19:16:21', '2023-09-05 00:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Bachelor of science in interior design', 10, '2023-08-16 07:00:00', NULL),
(2, 'Bachelor of science in information systems management', 10, '2023-08-16 07:49:08', NULL),
(3, 'Bachelor of science in civil engineering', 10, '2023-08-16 07:52:11', NULL),
(4, 'Bachelor of science in landscape architecture', 10, '2023-08-16 07:53:15', NULL),
(5, 'Bachelor of science in computer systems and networks', 10, '2023-08-16 07:54:06', NULL),
(6, 'Bachelor of science in accounting and finance', 10, '2023-08-16 07:55:30', NULL),
(7, 'Bachelor of arts in economics', 10, '2023-08-16 07:56:31', NULL),
(8, 'Bachelor of science in geomatics', 10, '2023-08-16 07:57:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `depart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `depart`, `created_at`, `updated_at`) VALUES
(1, 'Architecture And Urban Planning', '2023-08-10 14:03:04', NULL),
(2, 'Real Estate Studies', '2023-08-10 14:04:41', NULL),
(3, 'Land Management And Valuation', '2023-08-14 14:05:13', NULL),
(4, 'Urban And Regional Planning', '2023-08-14 14:05:52', NULL),
(5, 'Environmental Science And Management', '2023-08-16 14:06:29', NULL),
(6, 'Building Economics', '2023-08-08 14:07:42', NULL),
(7, 'Civil And Environmental Engineaning', '2023-08-22 14:08:19', NULL),
(8, 'Geomatics', '2023-08-15 14:09:18', NULL),
(9, 'Housing And Infrastructure Planning', '2023-08-09 14:09:49', NULL),
(10, 'Construction Management', '2023-08-14 14:10:21', NULL),
(11, 'Computer System And Mathematics', '2023-08-09 14:10:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_type` int(11) NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_status` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_type`, `event_id`, `tittle`, `video_url`, `file`, `event_status`, `description`, `created_by`, `created_at`, `updated_at`) VALUES
(2, 1, 'ARU sherehe za huru na umoja', NULL, '1692775135.jpg', 1, 'Chuo kikuu ARDHI kimeungana na mheshimiwa daktari Samia suluhu Hassan kusherehekea sherehe za uhuru na umoja nchini Tanzania', 10, '2023-08-23 14:18:55', '2023-09-01 01:23:19'),
(2, 2, 'uchunguzi eneo kuzunguka chuo kikuu ardhi', NULL, '1692775959.jpg', 1, 'Mtembezi yaliyo fanyika kutembelea chuo kikuu ardhi takisimamiwa na uongozi wa chuo kikuu ardhi wakishirikiana na chuo kikuu caha Dar es salaam', 10, '2023-08-23 14:32:40', '2023-09-01 01:21:31'),
(2, 3, 'ARDHI university graduation', NULL, '1692776738.jpg', 1, 'Aru Graduated a 7th graduation held at siena motel', 10, '2023-08-23 14:45:40', '2023-09-01 04:49:16'),
(2, 5, 'HEAP project in ARU', NULL, '1692777290.jpg', 1, 'ARU have signed a contract with japan for the intension of uplifting youth especialy those who are interested in technological changes worldwide', 10, '2023-08-23 14:54:50', '2023-09-01 04:49:06'),
(2, 6, 'ARU mahafari 2022', NULL, '1692941901.jpg', 1, 'Mahafari ya kuwaaga wahitimu mwaka 2022 chuo kikuu cha ARDHI nchini Rnzania niliyoanyika katikka viwanja vya mandera road', 10, '2023-08-25 12:38:22', '2023-09-01 01:23:27'),
(2, 7, 'ujenzi hosteri za wasichana chuo kikuu ardhi', NULL, '1692942078.jpg', 1, 'ujenzi wakadiliwa kuanza mara moja chuo kikuu ardhi mara tu baada ya kusainiwa mkataba baina ya chuo na kampuni ya ujenzi ya china construction company ltd', 10, '2023-08-25 12:41:18', '2023-09-01 04:49:24'),
(1, 9, 'UJENZI WA MABWENI ARDHI University', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0moKACBkMN0?si=eJu0hDY8nBNIJzQo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 1, 'cHUO KIKUU aRDHI kUANZA UJENZI WA MABWENI YA WACULANA ILI KUENDANA NA ONGEZEKO LA VIJANA WANAO FAULU NA KUCHAGUA KUJIUNGA NA CHUO KIKUU ardhi', 10, '2023-09-01 03:17:49', '2023-09-05 01:09:45'),
(1, 10, 'ARDHI kimbweta life style', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/NqW9dqGvvaA?si=N7nh7tGxiPcXoolx\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 1, 'Yaelewe maisha ya vimbetani live toka chuo kikuu Ardhi #Sharon', 10, '2023-09-01 04:39:36', '2023-09-01 04:39:36'),
(1, 11, 'MANDHARI CHUO KIKUU ARDHI JIJINI Dar Es Salaam', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/SbXrVXvdSiE?si=V2sbZnnon9Urk0xC\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 1, 'Uone Uzuri Wa mandhari yapatikanayo chuo kikuu ARDHI kilichopo nchini Tanzania Jijini Dare es salaam', 10, '2023-09-01 04:46:53', '2023-09-01 04:46:53'),
(1, 12, 'MAJARIBIO', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0moKACBkMN0?si=eJu0hDY8nBNIJzQo\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', NULL, 1, 'TUNAJARIBU KUONA UTENDAJI KAZI WA VIDEO TYPE', 10, '2023-09-05 01:29:54', '2023-09-05 01:29:54'),
(2, 13, 'MAJARIBIO YA PILI', NULL, '1693852325.jpg', 1, 'MAJARIBIO MATANGAZO YENYE PICHA BILA VIDEO', 10, '2023-09-05 01:32:05', '2023-09-05 01:32:05');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_16_063557_users', 1),
(6, '2023_08_16_065835_user_types', 2),
(7, '2023_08_16_070656_courses', 3),
(8, '2014_10_12_100000_create_password_resets_table', 4),
(9, '2023_08_22_094203_announcements', 4),
(10, '2023_08_22_094304_events', 4),
(11, '2023_08_28_135352_departments', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `behavior` int(11) NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directorate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tittle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `graduation_year` date DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_graduated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `role`, `gender`, `phone_number`, `email`, `course_name`, `status`, `behavior`, `user_type`, `directorate`, `user_tittle`, `department`, `graduation_year`, `file`, `program_graduated`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'mussa', 'halajaa', 'madeni', 2, 'Male', '0745321785', 'madeni@gmail.com', '', 1, 1, '1', NULL, NULL, NULL, NULL, '1694223165.jpg', NULL, NULL, '$2y$10$eU1gIKUdxl48fZQuPNhyvuXVWG0JFafdiH2Z7m7NZYIHkSGf/Le/K', NULL, '2023-08-16 17:03:19', '2023-09-09 13:35:32'),
(5, 'Asha', 'mkenda', 'mwiguru', 2, 'Female', '0765428965', 'asha@gmail.com', '', 1, 1, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$UFWQOT8b.EO8Xo2nlZurPuYoe4l2ub9ygN4CiwEs07je5Jsg2qz.C', NULL, '2023-08-16 17:06:31', '2023-08-20 22:25:11'),
(6, 'arafa', 'ismail', 'miraji', 2, 'Female', '0786784312', 'miraji@gmail.com', '', 0, 1, '3', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$It/oO2SNUurAv1/y90S/AeyT82zfnN5R3U.7InAoG8wBce2tVjOfq', NULL, '2023-08-16 17:10:25', '2023-08-20 21:11:38'),
(7, 'sala', 'mgeni', 'udom', 2, 'Female', '754769094', 'sala@gmail.com', '', 1, 0, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$NuHrpVSF9um5ZShyNflaVevLzimP9b7MUKZLzRmPDWy6xdrsw.m7C', NULL, '2023-08-16 17:20:16', '2023-08-29 17:39:52'),
(8, 'maina', 'mkubwa', 'kweli', 2, 'Others', '23456787', 'maina@gmail.com', '', 1, 0, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$VmcArFuI7c/44w1Q8AzcEut/ZGtG3rlSDYQx5.LPgjDJeREncoO3i', NULL, '2023-08-16 17:25:31', '2023-08-16 17:25:31'),
(10, 'ARU', 'ARU', 'ARU', 1, 'Male', '0745450431', 'aruconvocation@gmail.com', '', 1, 1, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$q9SgAq8nhddMENMeJKLbs.9zsbOhGVmDuviDg1ItHWFZRsOGDtAw.', NULL, '2023-08-17 15:15:12', '2023-08-31 06:41:56'),
(12, 'masanja', 'hakurasi', 'mati', 2, 'Male', '0742315565', 'mati@gmail.com', '', 0, 1, '1', NULL, NULL, NULL, '2023-08-02', '', '6', NULL, '$2y$10$mVs6htPVw/AePt9Q4qfpd.e3x6MzldVLO4Df8RNA0uWgWR0WGF.DO', NULL, '2023-08-18 14:45:12', '2023-08-18 14:45:12'),
(13, 'agatha', 'mkenda', 'jacob', 2, 'Female', '074317892', 'agatha@gmail.com', '', 0, 1, '1', NULL, NULL, NULL, '2023-08-09', '', '4', NULL, '$2y$10$m68eHz2zSgDSyMG8h1ozA.Hb8lQyD8K61teTt/2t1eRWGI6yfoLre', NULL, '2023-08-21 14:46:49', '2023-08-21 14:46:49'),
(14, 'benitho', 'musolin', 'chengula', 2, 'Male', '0612459853', 'benitho@gmail.com', '', 0, 1, '3', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$hgaCuj7/cB5WVopzOeQ9..Bq32nN8Sn9u4eORy4/GK0.DxYI9vcmW', NULL, '2023-08-21 14:59:58', '2023-08-21 14:59:58'),
(15, 'tina', 'shacos', 'shakul', 2, 'Female', '788431277', 'tina@gmail.com', '', 0, 1, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$MuMSZ2vonALKZs/DeEh7jeTkV0DmNtw5IVnRqvCmFPXVjkovBXUrO', NULL, '2023-08-21 15:06:16', '2023-08-21 15:06:16'),
(16, 'kezia', 'mussa', 'madeni', 2, 'Female', '622176596', 'kezia@gmail.com', '', 1, 1, '1', NULL, NULL, NULL, '2023-08-09', '', NULL, NULL, '$2y$10$y/mpRJkVA9sxNZ9.0tSHHuMR247D6Z8mqUUrAbeEYijpuRMQSBCT2', NULL, '2023-08-21 15:15:00', '2023-08-21 16:26:14'),
(17, 'seleman', 'sele', 'madeni', 2, 'Male', '0788453219', 'seleman@gmail.com', '', 0, 1, '2', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$lajhjpmR/4uucY4QqCf5LuPLvjfRSjAHj88by5JiYBbUBJCH0.mOO', NULL, '2023-08-21 15:30:24', '2023-08-21 15:30:24'),
(18, 'aminiel', 'mwamini', 'hamis', 2, 'Male', '0765431874', 'aminiel@mail.com', '', 0, 1, '3', NULL, NULL, NULL, NULL, '', NULL, NULL, '$2y$10$SU/ffUSUrpL7Q4uYjoFjrOKycQrYlTzXOD20rZ4jY0r.7B8RYRwcu', NULL, '2023-08-21 15:37:39', '2023-08-21 15:37:39'),
(21, 'Bertha', 'Mwankyuse', 'Mwankyuse', 2, 'Female', '0612453289', 'berthamwankyuse@gmail.com', NULL, 0, 1, '2', 'Admission', 'Head', NULL, NULL, NULL, NULL, NULL, '$2y$10$X3hwDHf9DY8v.1eRSNSLV.J0F75XkINPla5rbN8VDxVOD0/ZBqKZG', NULL, '2023-08-29 16:50:55', '2023-08-29 16:50:55'),
(22, 'Mosses', 'Aron', 'Mosses', 2, 'Male', '0713071267', 'mosses@gmail.com', NULL, 0, 1, '1', NULL, NULL, NULL, '2023-08-24', NULL, '4', NULL, '$2y$10$tbeX8ffNM2Ij9vGr3v2iMulPCV0AzTktUQyRp0dMh8bLSPCGRuk2a', NULL, '2023-08-29 17:05:47', '2023-08-29 17:05:47'),
(23, 'japheth', 'manyama', 'japheth', 2, 'Male', '07654312', 'japheth@gmail.com', NULL, 0, 1, '3', NULL, 'learner', 5, NULL, NULL, NULL, NULL, '$2y$10$oy9D1sc6ay7Q7/6r4jdCIeyvVPa2Kidv6OqBfQI/eF0HxKLwGgcTO', NULL, '2023-08-29 17:12:56', '2023-08-29 17:12:56'),
(24, 'Warid', 'mohammed', 'matimba', 2, 'Female', '07654319', 'Warid@gmail.com', 'ughavi na uvuvi', 0, 1, '1', NULL, NULL, NULL, '2023-08-10', NULL, 'other', NULL, '$2y$10$Bb9Mrbrn9Ph0JjsLNM7xke3ipCGzy2.oBCLNmFEBWlUUTKt3fkvZy', NULL, '2023-08-29 17:16:54', '2023-08-29 17:16:54'),
(25, 'agatha', 'uhuru', 'agatha', 2, 'Female', '0566563', 'mkendaagatha@gmail.com', NULL, 1, 1, '1', NULL, NULL, NULL, '2023-09-05', '1694216841.jpg', '2', NULL, '$2y$10$1UlGswdpJdiZZu8OcgkKOu1AOLuY/nf9J2BU63AIUx9oJ8B95CkPK', NULL, '2023-09-09 11:47:21', '2023-09-09 13:27:31'),
(26, 'chumvi', 'baraka', 'chumvi', 2, 'Male', '0656431289', 'chumvi@gmail.com', NULL, 0, 1, '1', NULL, NULL, NULL, '2023-09-13', '1694227849.jpg', '2', NULL, '$2y$10$DvZPu6W5oWaoiG5kug5vs.c/SQDey6zVlWw5c89dUa62/X5Zm45ji', NULL, '2023-09-09 11:50:44', '2023-09-09 14:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Graduant', '2023-08-16 07:58:33', NULL),
(2, 'Senior Administrative Staff', '2023-08-16 07:59:37', NULL),
(3, 'Academic Staff', '2023-08-16 08:00:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
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
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announce_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
