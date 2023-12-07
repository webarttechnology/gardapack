-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 07:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` text NOT NULL,
  `profile_img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Doe', 'admin@gmail.com', '$2y$10$IiIkCc2kAwX0xI0wGL5KUONglx9Um7M3/gDBVcsCUBxaERHxPgzHS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_description` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `choose_colors`
--

CREATE TABLE `choose_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installers`
--

CREATE TABLE `installers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_img` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `exam_link_id` text DEFAULT NULL,
  `approvel_by_admin` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installers`
--

INSERT INTO `installers` (`id`, `name`, `email`, `phone_number`, `password`, `profile_img`, `status`, `exam_link_id`, `approvel_by_admin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Quinn Silas Dunn Walker', 'cilovihex@mailinator.com', '+1 (488) 461-2447', '$2y$12$NcVadKWFUwmuSzrT.KSFi.cf.AMPUFxQSNDNAnVuNd6EDv7K/iAu2', NULL, 'active', NULL, 'rejected', '2023-11-27 02:25:01', '2023-11-27 02:01:45', '2023-11-27 02:25:01'),
(2, 'Olympia Aspen Gray Griffin', 'rybowareg@mailinator.com', '+1 (151) 541-6713', '$2y$12$YuEeRJVl9AHSL3Znj5f1OeTKZFvqIfUpxlh/1okZWJKLWY8rplZfW', NULL, 'active', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', 'rejected', NULL, '2023-11-27 02:30:07', '2023-11-28 05:27:33'),
(3, 'Buckminster Pascale Berry Kirkland', 'tita123test@yopmail.com', '+1 (706) 638-8264', '$2y$12$m8kufrGsQflVxkJGf1SRGOUkNc83Yrym2j0Bzsy7.SAoG7a6W02qq', NULL, 'active', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', 'approved', NULL, '2023-11-27 02:57:24', '2023-11-28 02:47:37'),
(4, 'Danielle Eleanor Thompson Sykes', 'tita12345test@yopmail.com', '+1 (642) 974-3946', '$2y$12$cLm5v1GVu0MoOzSoDhdL0e1xNkI8jIhM5BBQ6Odxt637NMQiwramC', NULL, 'active', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', 'rejected', NULL, '2023-11-28 22:51:56', '2023-11-29 01:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `installer_available_locations`
--

CREATE TABLE `installer_available_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text DEFAULT NULL,
  `installer_location_id` text DEFAULT NULL,
  `zip` text DEFAULT NULL,
  `location_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installer_banks`
--

CREATE TABLE `installer_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `card_holder_name` text NOT NULL,
  `card_number` text NOT NULL,
  `cvv` text NOT NULL,
  `expiry_month` text NOT NULL,
  `expiry_year` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `installer_infos`
--

CREATE TABLE `installer_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `national_identification_no` text NOT NULL,
  `residental_address` text NOT NULL,
  `ocupation` text NOT NULL,
  `passport_photo` text NOT NULL,
  `national_id_card` text NOT NULL,
  `drivers_license` text NOT NULL,
  `company_name` text NOT NULL,
  `cac_registration` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_infos`
--

INSERT INTO `installer_infos` (`id`, `installer_id`, `national_identification_no`, `residental_address`, `ocupation`, `passport_photo`, `national_id_card`, `drivers_license`, `company_name`, `cac_registration`, `created_at`, `updated_at`) VALUES
(1, '1', 'Odit in qui aut mole', 'Rem numquam ea ea as', 'Eum facere molestias', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'images/Installer/1701070305_141120231699947086_u-xl-6.jpg', 'Witt and Petty Traders', 'Ut recusandae Conse', '2023-11-27 02:01:45', '2023-11-27 02:01:45'),
(2, '2', 'Qui in voluptas impe', 'Illo velit voluptat', 'Sunt quasi ea asperi', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'images/Installer/1701072007_141120231699947086_u-xl-6.jpg', 'Hood and Thomas Co', 'Non quis aspernatur', '2023-11-27 02:30:07', '2023-11-27 02:30:07'),
(3, '3', 'Modi nulla sit imped', 'Ad soluta voluptas s', 'Laborum dolores aut', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'images/Installer/1701073643_141120231699947086_u-xl-6.jpg', 'Phelps Sherman Trading', 'Quaerat illum ut no', '2023-11-27 02:57:24', '2023-11-27 02:57:24'),
(4, '4', 'Illum nihil volupta', 'Aut est ut nostrum q', 'Laborum eu veniam e', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'images/Installer/1701231716_141120231699947086_u-xl-6.jpg', 'Fisher Sampson LLC', 'Voluptas in adipisic', '2023-11-28 22:51:56', '2023-11-28 22:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `installer_locations`
--

CREATE TABLE `installer_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `street_no` text NOT NULL,
  `plot` text DEFAULT NULL,
  `street_name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_locations`
--

INSERT INTO `installer_locations` (`id`, `installer_id`, `street_no`, `plot`, `street_name`, `city`, `state`, `zip`, `created_at`, `updated_at`) VALUES
(1, '1', 'At velit reiciendis', 'Cillum cillum nisi a', 'Beck Blackwell', 'Numquam rerum cupidi', 'Ea quos temporibus e', '38596', '2023-11-27 02:01:45', '2023-11-27 02:01:45'),
(2, '2', 'Qui odio et debitis', 'Id omnis error dolor', 'Jaime Mcconnell', 'Quis laborum molliti', 'Nostrum reprehenderi', '10181', '2023-11-27 02:30:07', '2023-11-27 02:30:07'),
(3, '3', 'Nam culpa nostrum ra', 'Et in voluptatibus o', 'Cathleen Maldonado', 'Et modi adipisicing', 'Pariatur Qui accusa', '72034', '2023-11-27 02:57:24', '2023-11-27 02:57:24'),
(4, '4', 'Deserunt anim ex et', 'Maiores nihil fugiat', 'Xander Brooks', 'Eius non laboris ali', 'Ex dignissimos quis', '17617', '2023-11-28 22:51:56', '2023-11-28 22:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `installer_test_results`
--

CREATE TABLE `installer_test_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text DEFAULT NULL,
  `exam_link_id` text DEFAULT NULL,
  `total_question` text DEFAULT NULL,
  `correct_question` text DEFAULT NULL,
  `percent_obtain` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `installer_test_results`
--

INSERT INTO `installer_test_results` (`id`, `installer_id`, `exam_link_id`, `total_question`, `correct_question`, `percent_obtain`, `status`, `created_at`, `updated_at`) VALUES
(7, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '2', '40', 'Fail', '2023-11-28 02:51:36', '2023-11-28 02:51:36'),
(8, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '0', '0', 'Fail', '2023-11-28 02:52:38', '2023-11-28 02:52:38'),
(9, '3', 'nuWlsOhItOmfUPBfXJ3TdJriXjFB8r7fBCr5Wv1g', '5', '3', '60', 'Fail', '2023-11-28 02:52:45', '2023-11-28 02:52:45'),
(10, '2', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', '5', '2', '40', 'Fail', '2023-11-28 03:11:00', '2023-11-28 03:11:00'),
(11, '2', '5FC66OQCxJQJySszh0lTyWRskwp6gyI5r6Zd13bZ', '5', '2', '40', 'Fail', '2023-11-28 03:11:19', '2023-11-28 03:11:19'),
(17, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:07:22', '2023-11-29 01:07:22'),
(18, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '2', '40', 'Fail', '2023-11-29 01:07:39', '2023-11-29 01:07:39'),
(19, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '0', '0', 'Fail', '2023-11-29 01:08:43', '2023-11-29 01:08:43'),
(20, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:11:41', '2023-11-29 01:11:41'),
(21, '4', 'ac0L9pwChsPO0FvpNlVeH3aeMk34uQTmrQuHgEVp', '5', '1', '20', 'Fail', '2023-11-29 01:11:52', '2023-11-29 01:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `installer_zips`
--

CREATE TABLE `installer_zips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` text NOT NULL,
  `zip` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_10_104210_create_resources_table', 1),
(7, '2023_11_13_034435_create_admins_table', 1),
(8, '2023_11_13_045745_create_vehicles_table', 1),
(9, '2023_11_13_051418_create_blogs_table', 1),
(10, '2023_11_13_051812_create_vehicle_colors_table', 1),
(11, '2023_11_13_052245_create_vehicle_galleries_table', 1),
(12, '2023_11_13_052619_create_choose_colors_table', 1),
(13, '2023_11_13_073315_create_videos_table', 1),
(14, '2023_11_13_080006_create_vehicle_features_table', 1),
(15, '2023_11_13_084907_create_p_d_f_s_table', 1),
(16, '2023_11_13_100449_alter_vehicles', 1),
(17, '2023_11_14_042903_create_installers_table', 1),
(18, '2023_11_14_052435_alter_installers', 1),
(19, '2023_11_14_063458_alter_installers', 1),
(20, '2023_11_14_080826_create_installer_locations_table', 1),
(21, '2023_11_14_093204_create_reports_table', 1),
(22, '2023_11_14_101543_create_contact_us_table', 1),
(23, '2023_11_15_074029_create_installer_zips_table', 1),
(24, '2023_11_15_103211_create_installer_banks_table', 1),
(25, '2023_11_20_042103_create_installer_infos_table', 1),
(26, '2023_11_24_050516_create_quotes_table', 1),
(27, '2023_11_24_095847_create_test_questions_table', 1),
(28, '2023_11_27_072618_installer_available_locations', 1),
(29, '2023_11_27_084006_alter_installers', 2),
(30, '2023_11_28_042314_create_installer_test_results_table', 3),
(31, '2023_11_28_110928_create_test_instructions_table', 4),
(32, '2023_11_29_043534_alter_test_instructions', 5),
(33, '2023_11_29_062434_alter_test_instructions', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_d_f_s`
--

CREATE TABLE `p_d_f_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `vehical_type` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `company_street_no` varchar(255) DEFAULT NULL,
  `company_block` varchar(255) DEFAULT NULL,
  `company_street_name` varchar(255) DEFAULT NULL,
  `company_city` varchar(255) DEFAULT NULL,
  `company_state` varchar(255) DEFAULT NULL,
  `additional_details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `installer_id` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `vehical_type` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `company_street_no` varchar(255) DEFAULT NULL,
  `company_block` varchar(255) DEFAULT NULL,
  `company_street_name` varchar(255) DEFAULT NULL,
  `company_city` varchar(255) DEFAULT NULL,
  `company_state` varchar(255) DEFAULT NULL,
  `additional_details` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test_instructions`
--

CREATE TABLE `test_instructions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instruction` text DEFAULT NULL,
  `time_limit` text DEFAULT NULL,
  `attempt_limit` text NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_instructions`
--

INSERT INTO `test_instructions` (`id`, `instruction`, `time_limit`, `attempt_limit`, `created_at`, `updated_at`) VALUES
(1, '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '1', '5', '2023-11-28 06:43:12', '2023-11-29 01:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `test_questions`
--

CREATE TABLE `test_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` text NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_questions`
--

INSERT INTO `test_questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Et nihil corrupti e', 'Repudiandae necessit', 'Laboriosam sapiente', 'Voluptatum blanditii', 'Voluptatem Dolorum', 'Voluptatem Dolorum', 'active', '2023-11-27 02:00:33', '2023-11-27 02:00:33'),
(2, 'Esse ducimus odit v', 'Modi in nostrum et a', 'Velit proident del', 'Consectetur in conse', 'Sed magnam veniam r', 'Modi in nostrum et a', 'active', '2023-11-27 02:00:40', '2023-11-27 02:00:40'),
(3, 'Est in ipsum labori', 'Mollitia sit ea accu', 'Voluptatem laudantiu', 'Voluptatem Illo quo', 'Consequatur dolor o', 'Voluptatem laudantiu', 'active', '2023-11-27 02:00:53', '2023-11-27 02:00:53'),
(4, 'Dolore tempora magna', 'Ipsam odio nostrud n', 'Delectus libero num', 'Ut voluptas debitis', 'Deleniti ipsa ex co', 'Ut voluptas debitis', 'active', '2023-11-27 02:01:00', '2023-11-27 02:01:00'),
(5, 'Qui quisquam ipsa v', 'Possimus quisquam a', 'Sunt velit adipisci', 'In perspiciatis rep', 'Ea pariatur Aliqua', 'Sunt velit adipisci', 'active', '2023-11-27 02:01:07', '2023-11-28 23:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `year_of_launch` varchar(255) NOT NULL,
  `range` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `charging_time` varchar(255) NOT NULL,
  `seating_capacity` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `battery_capacity` varchar(255) NOT NULL,
  `features` text DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_colors`
--

CREATE TABLE `vehicle_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_features`
--

CREATE TABLE `vehicle_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `feature` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_galleries`
--

CREATE TABLE `vehicle_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_colors`
--
ALTER TABLE `choose_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `installers`
--
ALTER TABLE `installers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_available_locations`
--
ALTER TABLE `installer_available_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_banks`
--
ALTER TABLE `installer_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_infos`
--
ALTER TABLE `installer_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_locations`
--
ALTER TABLE `installer_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_test_results`
--
ALTER TABLE `installer_test_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `installer_zips`
--
ALTER TABLE `installer_zips`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `p_d_f_s`
--
ALTER TABLE `p_d_f_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_instructions`
--
ALTER TABLE `test_instructions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_galleries`
--
ALTER TABLE `vehicle_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_colors`
--
ALTER TABLE `choose_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installers`
--
ALTER TABLE `installers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `installer_available_locations`
--
ALTER TABLE `installer_available_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installer_banks`
--
ALTER TABLE `installer_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `installer_infos`
--
ALTER TABLE `installer_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `installer_locations`
--
ALTER TABLE `installer_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `installer_test_results`
--
ALTER TABLE `installer_test_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `installer_zips`
--
ALTER TABLE `installer_zips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_d_f_s`
--
ALTER TABLE `p_d_f_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_instructions`
--
ALTER TABLE `test_instructions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_colors`
--
ALTER TABLE `vehicle_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_features`
--
ALTER TABLE `vehicle_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_galleries`
--
ALTER TABLE `vehicle_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
