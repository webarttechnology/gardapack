-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 07:48 AM
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
-- Database: `greenmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `profile_img` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `country`, `profile_img`, `type`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Zephr', 'Harmon', 'admin@admin.in', '$2y$10$b5j7cXcQFx2IkXnqSCzZyewDcFNA3iWEfSrSy22uRJWXzMppWoN/G', 'India', '1677582549.png', 'admin', 'active', '2023-02-21 06:41:40', '2023-02-28 23:14:35'),
(4, 'Molly', 'Noel', 'qosaqa@mailinator.com', '$2y$10$MyNakCghmcu5iTm/co1HCO9aH71SRfAkdtnpsHmB9QfWekr3rEXvi', NULL, NULL, 'sub_admin', 'active', '2023-02-27 00:34:01', '2023-02-27 00:52:14'),
(5, 'Knox', 'Calderon', 'jewucika@mailinator.com', '$2y$10$uNvOiqsgB9ayM15wkLijgeLZsFF6pcfa4iiq39PwLB/0ZnvBWD3dO', NULL, '1677583136.png', 'sub_admin', 'active', '2023-02-27 00:34:18', '2023-02-28 05:48:56'),
(8, 'Peter', 'Woods', 'pahepopuma@mailinator.com', '$2y$10$CDRZ8WnA/cib7JDityOp7.6mKZZ3A8TxIWsG1i8nPLFF.8LhVbYae', NULL, NULL, 'sub_admin', 'active', '2023-02-27 00:54:37', '2023-02-27 00:54:37'),
(9, 'Isaac', 'Fisher', 'pery@mailinator.com', '$2y$10$GD26RKTPQzxD8Nwx4EEtgOTI88izEsebMZ4aRM4OaR5UwJ2UsOeL.', NULL, NULL, 'sub_admin', 'active', '2023-02-27 00:59:03', '2023-02-27 00:59:03'),
(10, 'Mara', 'Jenkins1', 'gypuze@mailinator.com', '$2y$10$Zhtpsxn/jhYX8hd23imp4uXWIyO9.O8WsEmO4gizz9DpkZTfJ1Fbu', NULL, NULL, 'sub_admin', 'active', '2023-02-27 00:59:12', '2023-03-01 00:31:59'),
(11, 'Hiram', 'Bennett', 'mybaqiny@mailinator.com', '$2y$10$ZrcvIEvFjU5BJqRP9tidF.MkSnP3W0H6PDpd5Tww9cUX9HdpfYBBK', NULL, NULL, 'sub_admin', 'active', '2023-02-27 01:08:14', '2023-07-12 04:03:42'),
(12, 'Jessica', 'Chavez', 'qiwawynyry@mailinator.com', '$2y$10$1sCl/ol.QWRtxkdsV0UXruajjOcBs7mMPh4xWlneQvWXF3HKgTyCm', NULL, NULL, 'sub_admin', 'active', '2023-03-02 06:42:05', '2023-03-02 06:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `amount` text DEFAULT NULL,
  `cart_quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `amount`, `cart_quantity`, `created_at`, `updated_at`) VALUES
(38, '7', '127', NULL, '1', '2023-08-07 13:56:45', '2023-08-11 16:09:31'),
(39, '7', '27', NULL, '2', '2023-08-07 14:38:12', '2023-08-11 16:08:16'),
(40, '7', '24', NULL, '1', '2023-08-07 14:38:34', '2023-08-07 14:39:20'),
(43, '7', '124', NULL, '1', '2023-08-11 15:56:43', '2023-08-11 15:56:43'),
(59, '11', '323', NULL, '1', '2023-08-22 09:33:47', '2023-08-22 09:34:28'),
(60, '11', '431', NULL, '1', '2023-08-22 09:33:54', '2023-08-22 09:33:54'),
(61, '11', '401', NULL, '1', '2023-08-22 09:36:27', '2023-08-22 09:36:27'),
(62, '11', '21', NULL, '1', '2023-08-22 12:49:38', '2023-08-22 12:49:38'),
(63, '11', '99', NULL, '1', '2023-08-22 12:49:47', '2023-08-22 12:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_img` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_img`, `added_by`, `type`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Cairo Underwood', NULL, '3', 'product', NULL, '2023-07-17 05:30:55', '2023-03-01 05:53:30', '2023-07-17 05:30:55'),
(2, 'Bruce Sparks', NULL, '9', 'product', NULL, '2023-07-17 05:30:51', '2023-03-01 05:54:25', '2023-07-17 05:30:51'),
(3, 'Lee Serrano', '1677758871.png', '3', 'product', NULL, '2023-07-17 05:30:59', '2023-03-02 03:07:50', '2023-07-17 05:30:59'),
(4, 'Pots', '1690537904.jpg', '3', 'product', 'pots', NULL, '2023-07-13 06:51:29', '2023-07-28 13:51:44'),
(5, 'Elmo Randolph', '1689251219.png', '3', 'service', NULL, '2023-07-18 04:43:16', '2023-07-13 06:56:59', '2023-07-18 04:43:16'),
(6, 'Flower', '1689582048.jpg', '3', 'product', 'flower', NULL, '2023-07-17 02:50:48', '2023-07-18 04:51:33'),
(7, 'Pots Plants', '1690537986.jpg', '3', 'product', 'pots-plants', NULL, '2023-07-17 05:34:16', '2023-07-28 13:53:06'),
(8, 'Plants', '1690538076.jpg', '3', 'product', 'plants', NULL, '2023-07-17 05:37:38', '2023-07-28 13:54:36'),
(9, 'Artificial Plants & Flowers', '1689592120.jpg', '3', 'product', NULL, '2023-07-17 22:10:06', '2023-07-17 05:38:40', '2023-07-17 22:10:06'),
(10, 'Pebbles & Boulders', '1689592164.jpg', '3', 'product', NULL, '2023-07-17 22:13:10', '2023-07-17 05:39:24', '2023-07-17 22:13:10'),
(13, 'Artificial Plants & Flowers', '1689747156.jpg', '3', 'product', 'artificial-plants-flowers', NULL, '2023-07-17 22:10:29', '2023-07-19 10:12:36'),
(14, 'Pebbles & Boulders', '1689747175.jpg', '3', 'product', 'pebbles-boulders', NULL, '2023-07-17 22:13:17', '2023-07-19 10:12:55'),
(15, 'Landscaping Services', NULL, '3', 'service', 'landscaping-services', NULL, '2023-07-18 04:52:49', '2023-07-18 04:54:18'),
(16, 'Rooftop Gardening', NULL, '3', 'service', 'rooftop-gardening', NULL, '2023-07-18 04:54:55', '2023-07-18 04:54:55'),
(17, 'Garden Furniture', '1690538145.jpg', '3', 'product', 'garden-furniture', NULL, '2023-07-20 11:11:33', '2023-07-28 13:55:45'),
(18, 'Garden Tools', '1690538199.jpg', '3', 'product', 'garden-tools', NULL, '2023-07-21 11:47:26', '2023-07-28 13:56:39'),
(19, 'Garden Implements', '1690538250.jpg', '3', 'product', 'garden-implements', NULL, '2023-07-21 12:17:17', '2023-07-28 16:42:36'),
(20, 'Polymer Pot', '1690538296.jpg', '3', 'product', 'polymer-pot', NULL, '2023-07-21 15:55:39', '2023-07-28 13:58:16'),
(21, 'Sea snails', NULL, '3', 'product', 'sea-snails', '2023-07-22 14:11:52', '2023-07-22 13:41:42', '2023-07-22 14:11:52'),
(22, 'Sea shell', NULL, '3', 'product', 'sea-shell', NULL, '2023-07-22 14:12:48', '2023-07-22 14:12:48'),
(23, 'Gazebo, Umbrella & Pergola', NULL, '3', 'product', 'gazebo-umbrella-pergola', NULL, '2023-07-23 10:17:33', '2023-07-23 10:17:33'),
(24, 'Media & Fertilizer', NULL, '3', 'product', 'media-fertilizer', NULL, '2023-07-23 13:13:27', '2023-07-23 13:13:27'),
(25, 'Irrigation Items', NULL, '3', 'product', 'irrigation-items', NULL, '2023-07-23 15:15:15', '2023-07-23 15:15:15'),
(26, 'PVC Pots', '1690264016.jpg', '3', 'product', 'pvc-pots', NULL, '2023-07-25 09:46:56', '2023-07-25 09:46:56'),
(27, 'Fiber Glass Pots', NULL, '3', 'product', 'fiber-glass-pots', NULL, '2023-07-27 14:10:34', '2023-07-27 14:10:34'),
(28, 'Ceramic Items', NULL, '3', 'product', 'ceramic-items', NULL, '2023-07-27 16:10:19', '2023-07-27 16:10:19'),
(29, 'Hanging Jute Grow Bag', NULL, '3', 'product', 'hanging-jute-grow-bag', NULL, '2023-08-05 15:39:18', '2023-08-05 15:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Wynter Simon', 'vohekineca@mailinator.com', '+1 (889) 605-2779', 'Ea aspernatur id bea', '2023-08-16 11:29:17', '2023-08-16 11:29:17'),
(2, 'Maxwell Stephens', 'sagonoqe@mailinator.com', '+1 (945) 148-1927', 'Veritatis vero a iur', '2023-08-16 11:34:32', '2023-08-16 11:34:32'),
(3, 'Dorothy Fry', 'wevaga@mailinator.com', '+1 (868) 741-8085', 'Quos et architecto q', '2023-11-06 22:26:27', '2023-11-06 22:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `video` text DEFAULT NULL,
  `youtube_video` text DEFAULT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `added_by`, `name`, `description`, `img`, `video`, `youtube_video`, `slug`, `created_at`, `updated_at`) VALUES
(1, '3', 'Gardening Courses', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874685.jpg', NULL, 'https://www.youtube.com/embed/aPNQzGa_578', 'gardening-courses', '2023-08-01 09:44:45', '2023-08-08 16:29:30'),
(3, '3', 'Gardening Courses-2', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874821.jpg', NULL, NULL, 'gardening-courses-2', '2023-08-01 11:27:01', '2023-08-01 11:27:01'),
(4, '3', 'Gardening Courses-3', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874855.jpg', NULL, NULL, 'gardening-courses-3', '2023-08-01 11:27:35', '2023-08-01 11:27:35'),
(5, '3', 'Gardening Courses-4', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874898.jpg', NULL, NULL, 'gardening-courses-4', '2023-08-01 11:28:18', '2023-08-01 11:28:18'),
(6, '3', 'Gardening Courses-5', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874920.jpg', NULL, NULL, 'gardening-courses-5', '2023-08-01 11:28:40', '2023-08-01 11:28:40'),
(7, '3', 'Gardening Courses-6', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quibusdam voluptate.</p>', '1690874948.jpg', NULL, NULL, 'gardening-courses-6', '2023-08-01 11:29:08', '2023-08-08 12:10:49');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(50) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '<p>What is Green Mall</p>', '<ul>\r\n	<li>It is a twelve-acre green campus that provides solutions for gardening and landscaping.</li>\r\n	<li>There is a vast collection of all types of plants to suit every purse.</li>\r\n	<li>There are many models for landscaping and gardening to get ideas</li>\r\n</ul>', '2023-07-31 12:29:47', '2023-07-31 12:29:47'),
(2, '<p>Campus Location</p>', '<ul>\r\n	<li>It is located on the outskirts of South Kolkata on 30&prime; wide Thakurpukur-Bakhrahat Road. While coming from Kolkata, you can take Joka Canal Road and drive straight down 8.5 kilometers to Green Mall. On the way, you would pass Swan Green Complex, Gems Academia, and lastly, DPS Joka. (1.1 km.)</li>\r\n	<li>If you are coming from the Amtala side, you should come on Nibaran Dutta Road, arrive at Bibirhat More, turn right on Bakhrahat Road, and move towards the Thakurpukur side. After about 3.8 km, you arrive at Green Mall</li>\r\n</ul>', '2023-07-31 12:30:18', '2023-07-31 12:30:18'),
(3, '<p>Owners</p>', '<ul>\r\n	<li>Green Mall is a brand name belonging to Cinderella Flora Farms Pvt Ltd.</li>\r\n	<li>Cinderella Flora Farms Pvt Ltd was incorporated under the ROC in 1995. Its registered office is on Bakhrahat Road, Samukpota, South 24 Parganas. West Bengal 743503</li>\r\n	<li>Present Directors of the company are Sri Dinesh Rawat and Sri Pratyeswar Rabha.</li>\r\n</ul>', '2023-07-31 12:34:21', '2023-07-31 12:34:21'),
(4, '<p>Team</p>', '<ul>\r\n	<li>\r\n	<p>There is an expert team under the leadership of</p>\r\n\r\n	<p>Sri Dinesh Rawat, having expertise in the field of Palms, Indoor &amp; outdoor plants, landscaping, gardening, book writing and editing, neuro therapist, and web designers.</p>\r\n	</li>\r\n	<li>Cinderella Flora Farms Pvt Ltd was incorporated under the ROC in 1995. Its registered office is on Bakhrahat Road, Samukpota, South 24 Paraganas. West Bengal 743503</li>\r\n	<li>Present Directors of the company are Sri Dinesh Rawat and Sri Pratyeswar Rabha.</li>\r\n</ul>', '2023-07-31 12:34:44', '2023-07-31 12:34:44'),
(5, '<p>Branches</p>', '<p>We have no branches at present.</p>', '2023-07-31 12:35:04', '2023-07-31 12:35:04'),
(7, '<p>ISO Certification</p>', '<ul>\r\n	<li>The company has been assessed and found to confirm the requirements of ISO 9001:2015 for Nursery, Garden Centre, and Landscaping.</li>\r\n</ul>', '2023-07-31 12:47:36', '2023-07-31 12:57:28');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_21_112951_admins', 1),
(6, '2023_02_23_055503_create_pages_table', 2),
(7, '2023_02_23_074438_create_products_table', 3),
(8, '2023_02_23_074921_create_categories_table', 3),
(9, '2023_02_27_072323_create_settings_table', 4),
(10, '2023_03_01_045125_create_notifications_table', 5),
(11, '2023_03_03_035254_create_variations_table', 6),
(12, '2023_03_14_064414_create_variation_images_table', 7),
(13, '2023_03_14_065708_create_product_galleries_table', 8),
(14, '2023_03_17_033937_create_settings_options_table', 9),
(15, '2023_07_12_115520_create_subcategories_table', 10),
(16, '2023_07_13_042531_create_services_table', 10),
(17, '2023_07_18_073638_create_ratings_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'rana.saha@webart.technology', '2023-08-14 15:24:00', '2023-08-14 15:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_admin_id` varchar(100) NOT NULL,
  `action` varchar(50) NOT NULL,
  `action_with` varchar(50) NOT NULL,
  `action_with_id` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'unread',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `sub_admin_id`, `action`, `action_with`, `action_with_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '9', 'Update', 'user', '2', 'read', '2023-02-28 23:40:22', '2023-03-01 02:48:29'),
(2, '9', 'Add', 'user', '3', 'read', '2023-02-28 23:41:12', '2023-03-01 02:48:29'),
(3, '9', 'Update', 'Admin', '10', 'read', '2023-03-01 00:31:59', '2023-03-01 02:48:55'),
(4, '8', 'Update', 'Page', '2', 'read', '2023-03-01 01:15:22', '2023-07-29 20:02:03'),
(5, '8', 'Update', 'Settings', '6', 'read', '2023-03-01 01:21:08', '2023-03-01 02:48:29'),
(6, '5', 'Add', 'user', '5', 'read', '2023-03-01 04:51:24', '2023-07-29 20:02:03'),
(7, '10', 'Update', 'Settings', '6', 'read', '2023-03-01 05:01:00', '2023-07-29 20:02:03'),
(8, '11', 'Update', 'Settings', '6', 'read', '2023-03-01 05:04:15', '2023-07-29 20:02:03'),
(9, '9', 'Add', 'Category', '2', 'read', '2023-03-01 05:54:25', '2023-07-29 20:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_products`
--

CREATE TABLE `ordered_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ordered_products`
--

INSERT INTO `ordered_products` (`id`, `user_id`, `order_id`, `product_id`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '159', '280', '4', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(2, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '216', '90', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(3, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '134', '65', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(4, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '180', '2250', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(5, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '239', '1575', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(6, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '36', '2050', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(7, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '237', '840', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(8, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '239', '1575', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(9, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '108', '2300', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(10, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '126', '520', '3', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(11, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '252', '2500', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(12, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', '124', '410', '1', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(13, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '216', '90', '1', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(14, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '134', '65', '1', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(15, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '239', '1575', '2', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(16, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '237', '840', '1', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(17, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '239', '1575', '1', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(18, '6', 'ODR_c0h96KQWpAGvbtTqESDW', '126', '520', '2', '2023-08-11 15:12:32', '2023-08-11 15:12:32'),
(19, '7', 'ODR_nquxbAY2l2dczkyYeWaU', '127', '90', '1', '2023-08-11 16:25:02', '2023-08-11 16:25:02'),
(20, '7', 'ODR_nquxbAY2l2dczkyYeWaU', '27', '880', '2', '2023-08-11 16:25:02', '2023-08-11 16:25:02'),
(21, '7', 'ODR_nquxbAY2l2dczkyYeWaU', '24', '590', '1', '2023-08-11 16:25:02', '2023-08-11 16:25:02'),
(22, '7', 'ODR_nquxbAY2l2dczkyYeWaU', '124', '410', '1', '2023-08-11 16:25:02', '2023-08-11 16:25:02'),
(23, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '216', '90', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(24, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '134', '65', '3', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(25, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '239', '1575', '2', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(26, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '237', '840', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(27, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '239', '1575', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(28, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '126', '520', '2', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(29, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '268', '1800', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(30, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '38', '4120', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(31, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '369', '40', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(32, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '337', '90', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(33, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '55', '3220', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(34, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '46', '990', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(35, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '199', '16', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(36, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '455', '120', '2', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(37, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '27', '880', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(38, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '187', '1230', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(39, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', '179', '1570', '1', '2023-08-14 14:36:23', '2023-08-14 14:36:23'),
(40, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '216', '90', '2', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(41, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '239', '1575', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(42, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '126', '520', '2', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(43, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '369', '40', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(44, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '337', '90', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(45, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '46', '990', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(46, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '101', '1000', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(47, '6', 'ODR_eqFzCDklaWvF9NejgvOb', '99', '700', '1', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(48, '6', 'ODR_ohuDNHJPLuqoONLupFde', '216', '90', '2', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(49, '6', 'ODR_ohuDNHJPLuqoONLupFde', '239', '1575', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(50, '6', 'ODR_ohuDNHJPLuqoONLupFde', '126', '520', '2', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(51, '6', 'ODR_ohuDNHJPLuqoONLupFde', '369', '40', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(52, '6', 'ODR_ohuDNHJPLuqoONLupFde', '337', '90', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(53, '6', 'ODR_ohuDNHJPLuqoONLupFde', '46', '990', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(54, '6', 'ODR_ohuDNHJPLuqoONLupFde', '101', '1000', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(55, '6', 'ODR_ohuDNHJPLuqoONLupFde', '99', '700', '1', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(56, '6', 'ODR_o02ad39ADuUuzokSdRQz', '216', '90', '2', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(57, '6', 'ODR_o02ad39ADuUuzokSdRQz', '239', '1575', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(58, '6', 'ODR_o02ad39ADuUuzokSdRQz', '126', '520', '2', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(59, '6', 'ODR_o02ad39ADuUuzokSdRQz', '369', '40', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(60, '6', 'ODR_o02ad39ADuUuzokSdRQz', '337', '90', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(61, '6', 'ODR_o02ad39ADuUuzokSdRQz', '46', '990', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(62, '6', 'ODR_o02ad39ADuUuzokSdRQz', '101', '1000', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(63, '6', 'ODR_o02ad39ADuUuzokSdRQz', '99', '700', '1', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(64, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '216', '90', '2', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(65, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '239', '1575', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(66, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '126', '520', '2', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(67, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '369', '40', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(68, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '337', '90', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(69, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '46', '990', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(70, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '101', '1000', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(71, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', '99', '700', '1', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(72, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '216', '90', '2', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(73, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '239', '1575', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(74, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '126', '520', '2', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(75, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '369', '40', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(76, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '337', '90', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(77, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '46', '990', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(78, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '101', '1000', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(79, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', '99', '700', '1', '2023-11-03 04:47:54', '2023-11-03 04:47:54'),
(80, '6', 'ODR_fyDU9QW7HlbsKcMOcx7C', '216', '90', '2', '2023-11-03 05:04:39', '2023-11-03 05:04:39'),
(81, '6', 'ODR_fyDU9QW7HlbsKcMOcx7C', '239', '1575', '1', '2023-11-03 05:04:39', '2023-11-03 05:04:39'),
(82, '6', 'ODR_fyDU9QW7HlbsKcMOcx7C', '369', '40', '1', '2023-11-03 05:04:39', '2023-11-03 05:04:39'),
(83, '6', 'ODR_fyDU9QW7HlbsKcMOcx7C', '337', '90', '1', '2023-11-03 05:04:39', '2023-11-03 05:04:39'),
(84, '6', 'ODR_Iw8cfC8FguZqLL0KlLCo', '216', '90', '2', '2023-11-03 05:05:56', '2023-11-03 05:05:56'),
(85, '6', 'ODR_Iw8cfC8FguZqLL0KlLCo', '239', '1575', '1', '2023-11-03 05:05:56', '2023-11-03 05:05:56'),
(86, '6', 'ODR_Iw8cfC8FguZqLL0KlLCo', '369', '40', '1', '2023-11-03 05:05:56', '2023-11-03 05:05:56'),
(87, '6', 'ODR_Iw8cfC8FguZqLL0KlLCo', '337', '90', '1', '2023-11-03 05:05:56', '2023-11-03 05:05:56'),
(88, '6', 'ODR_M1PPGypgYnhBhfKOyUQ8', '48', '1610', '2', '2023-11-03 05:47:23', '2023-11-03 05:47:23'),
(89, '6', 'ODR_M1PPGypgYnhBhfKOyUQ8', '239', '1575', '2', '2023-11-03 05:47:23', '2023-11-03 05:47:23'),
(90, '6', 'ODR_M1PPGypgYnhBhfKOyUQ8', '45', '10150', '2', '2023-11-03 05:47:23', '2023-11-03 05:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `billing_name` varchar(255) NOT NULL,
  `billing_username` varchar(255) DEFAULT NULL,
  `billing_email` varchar(255) NOT NULL,
  `billing_phone` text DEFAULT NULL,
  `billing_address1` text NOT NULL,
  `billing_address2` text DEFAULT NULL,
  `billing_country` varchar(255) NOT NULL,
  `billing_town` text DEFAULT NULL,
  `billing_state` varchar(255) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `total_amount` text DEFAULT NULL,
  `order_notes` text DEFAULT NULL,
  `txn_id` text DEFAULT NULL,
  `transaction_details` text DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0' COMMENT '0=>not paid, 1=> paid',
  `order_status` text DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `billing_name`, `billing_username`, `billing_email`, `billing_phone`, `billing_address1`, `billing_address2`, `billing_country`, `billing_town`, `billing_state`, `billing_zip`, `total_amount`, `order_notes`, `txn_id`, `transaction_details`, `status`, `order_status`, `created_at`, `updated_at`) VALUES
(1, '6', 'ODR_BLEyCIsp90xh7qyAZGxK', 'Martina Hinton', 'zacalihi', 'mujijunute@mailinator.com', NULL, '20 Old Road', 'Asperiores quaerat d', 'Excepteur et explica', NULL, 'Pariatur Quidem ea', '27677', NULL, NULL, NULL, NULL, '0', 'active', '2023-08-11 12:21:19', '2023-08-11 12:21:19'),
(2, '6', 'ODR_c0h96KQWpAGvbtTqESDW', 'Demetrius Rodriquez', 'ruberinad', 'zuhod@mailinator.com', NULL, '76 Cowley Extension', 'Qui cupiditate est v', 'Debitis culpa unde', NULL, 'Eum sequi culpa ut i', '55510', NULL, NULL, NULL, NULL, '0', 'cancel', '2023-08-11 15:12:32', '2023-08-17 10:34:00'),
(3, '7', 'ODR_nquxbAY2l2dczkyYeWaU', 'Saurav Ghosh', NULL, 'sauravdigitalwebber@gmail.com', NULL, 'Rishi Arabinda park Birati', NULL, 'India', NULL, 'West Bengal', '700051', NULL, NULL, NULL, NULL, '0', 'active', '2023-08-11 16:25:02', '2023-08-11 16:25:02'),
(4, '6', 'ODR_V1mma3Q3xMAdoGQPaSpI', 'Freya Ryan', NULL, 'punyxo@mailinator.com', '5478412340', '59 Milton Extension', 'Pariatur Qui ullamc', 'Sint esse est illo l', 'Pariatur Aliquam si', 'Sint veritatis volup', '20468', NULL, 'Culpa maxime et maxi', NULL, NULL, '0', 'cancel', '2023-08-14 14:36:23', '2023-08-17 10:07:08'),
(5, '6', 'ODR_eqFzCDklaWvF9NejgvOb', 'Lara Jones Graham', NULL, 'pycugy@mailinator.com', '+1 (599) 413-6654', '83 Rocky Old Boulevard', 'Ipsum ut aut iure ve', 'Provident adipisici', 'Illum eveniet cons', 'Aute et eos eaque n', '33037', NULL, 'Ullamco magni irure', NULL, NULL, '0', 'active', '2023-11-03 04:33:15', '2023-11-03 04:33:15'),
(6, '6', 'ODR_ohuDNHJPLuqoONLupFde', 'Lara Jones Graham', NULL, 'pycugy@mailinator.com', '+1 (599) 413-6654', '83 Rocky Old Boulevard', 'Ipsum ut aut iure ve', 'Provident adipisici', 'Illum eveniet cons', 'Aute et eos eaque n', '33037', NULL, 'Ullamco magni irure', NULL, NULL, '0', 'active', '2023-11-03 04:35:52', '2023-11-03 04:35:52'),
(7, '6', 'ODR_o02ad39ADuUuzokSdRQz', 'Lara Jones Graham', NULL, 'pycugy@mailinator.com', '+1 (599) 413-6654', '83 Rocky Old Boulevard', 'Ipsum ut aut iure ve', 'Provident adipisici', 'Illum eveniet cons', 'Aute et eos eaque n', '33037', NULL, 'Ullamco magni irure', NULL, NULL, '0', 'active', '2023-11-03 04:36:17', '2023-11-03 04:36:17'),
(8, '6', 'ODR_KhiIX33JXKGsMADU6vHZ', 'Lara Jones Graham', NULL, 'pycugy@mailinator.com', '+1 (599) 413-6654', '83 Rocky Old Boulevard', 'Ipsum ut aut iure ve', 'Provident adipisici', 'Illum eveniet cons', 'Aute et eos eaque n', '33037', NULL, 'Ullamco magni irure', NULL, NULL, '0', 'active', '2023-11-03 04:37:20', '2023-11-03 04:37:20'),
(9, '6', 'ODR_SnI9Qf4fE2RLvX82G4Pa', 'Katelyn Stephens Finley', NULL, 'hudujaqi@mailinator.com', '+1 (372) 712-5138', '792 North Second Court', 'Fugit voluptatibus', 'Iste id illo archit', 'Omnis et ad laboris', 'Rem neque incidunt', '61404', NULL, 'Autem est lorem debi', 'PAYID-MVCMRUY8SH07879UE472281A', '\"{\\\"id\\\":\\\"PAYID-MVCMRUY8SH07879UE472281A\\\",\\\"intent\\\":\\\"sale\\\",\\\"state\\\":\\\"approved\\\",\\\"cart\\\":\\\"7W1646890R067092V\\\",\\\"payer\\\":{\\\"payment_method\\\":\\\"paypal\\\",\\\"status\\\":\\\"UNVERIFIED\\\",\\\"payer_info\\\":{\\\"email\\\":\\\"kopyxyfa@mailinator.com\\\",\\\"first_name\\\":\\\"test\\\",\\\"last_name\\\":\\\"t\\\",\\\"payer_id\\\":\\\"8GEJYFYZA5T6C\\\",\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"id\\\":\\\"7783176223982539026\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\",\\\"type\\\":\\\"HOME_OR_WORK\\\",\\\"default_address\\\":false,\\\"preferred_address\\\":true,\\\"primary_address\\\":true,\\\"disable_for_transaction\\\":false},\\\"country_code\\\":\\\"US\\\"}},\\\"transactions\\\":[{\\\"amount\\\":{\\\"total\\\":\\\"5615.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"5615.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payee\\\":{\\\"merchant_id\\\":\\\"Y9WH78BGKVZPE\\\",\\\"email\\\":\\\"sb-ohwc726188538@business.example.com\\\"},\\\"description\\\":\\\"Test\\\",\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\",\\\"item_list\\\":{\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"id\\\":\\\"7783176223982539026\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\",\\\"type\\\":\\\"HOME_OR_WORK\\\",\\\"default_address\\\":false,\\\"preferred_address\\\":true,\\\"primary_address\\\":true,\\\"disable_for_transaction\\\":false}},\\\"related_resources\\\":[{\\\"sale\\\":{\\\"id\\\":\\\"2AW44158T7680782K\\\",\\\"state\\\":\\\"completed\\\",\\\"amount\\\":{\\\"total\\\":\\\"5615.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"5615.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payment_mode\\\":\\\"INSTANT_TRANSFER\\\",\\\"protection_eligibility\\\":\\\"ELIGIBLE\\\",\\\"protection_eligibility_type\\\":\\\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\\\",\\\"transaction_fee\\\":{\\\"value\\\":\\\"196.45\\\",\\\"currency\\\":\\\"USD\\\"},\\\"parent_payment\\\":\\\"PAYID-MVCMRUY8SH07879UE472281A\\\",\\\"create_time\\\":\\\"2023-11-03T10:19:12Z\\\",\\\"update_time\\\":\\\"2023-11-03T10:19:12Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/2AW44158T7680782K\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/2AW44158T7680782K\\/refund\\\",\\\"rel\\\":\\\"refund\\\",\\\"method\\\":\\\"POST\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCMRUY8SH07879UE472281A\\\",\\\"rel\\\":\\\"parent_payment\\\",\\\"method\\\":\\\"GET\\\"}],\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\"}}]}],\\\"failed_transactions\\\":[],\\\"create_time\\\":\\\"2023-11-03T10:17:55Z\\\",\\\"update_time\\\":\\\"2023-11-03T10:19:12Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCMRUY8SH07879UE472281A\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"}]}\"', '1', 'active', '2023-11-03 04:47:54', '2023-11-03 04:49:12'),
(10, '6', 'ODR_fyDU9QW7HlbsKcMOcx7C', 'Shelly Gentry Mckinney', NULL, 'coqy@mailinator.com', '+1 (855) 678-6401', '45 Fabien Road', 'Iusto ea itaque aut', 'Ea iure occaecat sin', 'Officiis illum comm', 'Est ex doloribus eos', '31776', '1885.00', 'Pariatur Magna labo', NULL, NULL, '0', 'active', '2023-11-03 05:04:39', '2023-11-03 05:04:39'),
(11, '6', 'ODR_Iw8cfC8FguZqLL0KlLCo', 'Melyssa Blanchard Garcia', NULL, 'hege@mailinator.com', '+1 (286) 953-1485', '73 New Court', 'Dolorum fugiat tenet', 'Nulla animi quam mi', 'Ut aut do aspernatur', 'Assumenda voluptate', '72328', '1885.00', 'Ratione et doloribus', 'PAYID-MVCM2DQ9DA15472EP766060Y', '\"{\\\"id\\\":\\\"PAYID-MVCM2DQ9DA15472EP766060Y\\\",\\\"intent\\\":\\\"sale\\\",\\\"state\\\":\\\"approved\\\",\\\"cart\\\":\\\"8UW49459SE708702V\\\",\\\"payer\\\":{\\\"payment_method\\\":\\\"paypal\\\",\\\"status\\\":\\\"UNVERIFIED\\\",\\\"payer_info\\\":{\\\"email\\\":\\\"kopyxyfa@mailinator.com\\\",\\\"first_name\\\":\\\"test\\\",\\\"last_name\\\":\\\"t\\\",\\\"payer_id\\\":\\\"8GEJYFYZA5T6C\\\",\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"id\\\":\\\"7783176223982539026\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\",\\\"type\\\":\\\"HOME_OR_WORK\\\",\\\"default_address\\\":false,\\\"preferred_address\\\":true,\\\"primary_address\\\":true,\\\"disable_for_transaction\\\":false},\\\"country_code\\\":\\\"US\\\"}},\\\"transactions\\\":[{\\\"amount\\\":{\\\"total\\\":\\\"1885.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"1885.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payee\\\":{\\\"merchant_id\\\":\\\"Y9WH78BGKVZPE\\\",\\\"email\\\":\\\"sb-ohwc726188538@business.example.com\\\"},\\\"description\\\":\\\"Test\\\",\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\",\\\"item_list\\\":{\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"id\\\":\\\"7783176223982539026\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\",\\\"type\\\":\\\"HOME_OR_WORK\\\",\\\"default_address\\\":false,\\\"preferred_address\\\":true,\\\"primary_address\\\":true,\\\"disable_for_transaction\\\":false}},\\\"related_resources\\\":[{\\\"sale\\\":{\\\"id\\\":\\\"0YR3467254740172C\\\",\\\"state\\\":\\\"completed\\\",\\\"amount\\\":{\\\"total\\\":\\\"1885.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"1885.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payment_mode\\\":\\\"INSTANT_TRANSFER\\\",\\\"protection_eligibility\\\":\\\"ELIGIBLE\\\",\\\"protection_eligibility_type\\\":\\\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\\\",\\\"transaction_fee\\\":{\\\"value\\\":\\\"66.28\\\",\\\"currency\\\":\\\"USD\\\"},\\\"parent_payment\\\":\\\"PAYID-MVCM2DQ9DA15472EP766060Y\\\",\\\"create_time\\\":\\\"2023-11-03T10:36:29Z\\\",\\\"update_time\\\":\\\"2023-11-03T10:36:29Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/0YR3467254740172C\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/0YR3467254740172C\\/refund\\\",\\\"rel\\\":\\\"refund\\\",\\\"method\\\":\\\"POST\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCM2DQ9DA15472EP766060Y\\\",\\\"rel\\\":\\\"parent_payment\\\",\\\"method\\\":\\\"GET\\\"}],\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\"}}]}],\\\"failed_transactions\\\":[],\\\"create_time\\\":\\\"2023-11-03T10:35:58Z\\\",\\\"update_time\\\":\\\"2023-11-03T10:36:29Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCM2DQ9DA15472EP766060Y\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"}]}\"', '1', 'active', '2023-11-03 05:05:56', '2023-11-03 05:06:30'),
(12, '6', 'ODR_M1PPGypgYnhBhfKOyUQ8', 'Russell Nelson Finch', NULL, 'vogiramot@mailinator.com', '+1 (111) 704-5461', '21 Fabien Boulevard', 'Ab magnam culpa est', 'Excepteur eaque aut', 'Iure eligendi in dol', 'Ut est elit ut pers', '68543', '26670.00', 'Corporis unde quidem', 'PAYID-MVCNNRQ19W02187PA543814U', '\"{\\\"id\\\":\\\"PAYID-MVCNNRQ19W02187PA543814U\\\",\\\"intent\\\":\\\"sale\\\",\\\"state\\\":\\\"approved\\\",\\\"cart\\\":\\\"3EU88809NK285870V\\\",\\\"payer\\\":{\\\"payment_method\\\":\\\"paypal\\\",\\\"status\\\":\\\"UNVERIFIED\\\",\\\"payer_info\\\":{\\\"email\\\":\\\"kopyxyfa@mailinator.com\\\",\\\"first_name\\\":\\\"test\\\",\\\"last_name\\\":\\\"t\\\",\\\"payer_id\\\":\\\"8GEJYFYZA5T6C\\\",\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\"},\\\"country_code\\\":\\\"US\\\"}},\\\"transactions\\\":[{\\\"amount\\\":{\\\"total\\\":\\\"26670.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"26670.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payee\\\":{\\\"merchant_id\\\":\\\"Y9WH78BGKVZPE\\\",\\\"email\\\":\\\"sb-ohwc726188538@business.example.com\\\"},\\\"description\\\":\\\"Test\\\",\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\",\\\"item_list\\\":{\\\"shipping_address\\\":{\\\"recipient_name\\\":\\\"test t\\\",\\\"line1\\\":\\\"demo\\\",\\\"city\\\":\\\"los angeles\\\",\\\"state\\\":\\\"AP\\\",\\\"postal_code\\\":\\\"90002\\\",\\\"country_code\\\":\\\"US\\\"}},\\\"related_resources\\\":[{\\\"sale\\\":{\\\"id\\\":\\\"04H24793EV418715A\\\",\\\"state\\\":\\\"completed\\\",\\\"amount\\\":{\\\"total\\\":\\\"26670.00\\\",\\\"currency\\\":\\\"USD\\\",\\\"details\\\":{\\\"subtotal\\\":\\\"26670.00\\\",\\\"tax\\\":\\\"0.00\\\",\\\"shipping\\\":\\\"0.00\\\",\\\"insurance\\\":\\\"0.00\\\",\\\"handling_fee\\\":\\\"0.00\\\",\\\"shipping_discount\\\":\\\"0.00\\\",\\\"discount\\\":\\\"0.00\\\"}},\\\"payment_mode\\\":\\\"INSTANT_TRANSFER\\\",\\\"protection_eligibility\\\":\\\"ELIGIBLE\\\",\\\"protection_eligibility_type\\\":\\\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\\\",\\\"transaction_fee\\\":{\\\"value\\\":\\\"931.27\\\",\\\"currency\\\":\\\"USD\\\"},\\\"parent_payment\\\":\\\"PAYID-MVCNNRQ19W02187PA543814U\\\",\\\"create_time\\\":\\\"2023-11-03T11:17:38Z\\\",\\\"update_time\\\":\\\"2023-11-03T11:17:38Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/04H24793EV418715A\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/sale\\/04H24793EV418715A\\/refund\\\",\\\"rel\\\":\\\"refund\\\",\\\"method\\\":\\\"POST\\\"},{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCNNRQ19W02187PA543814U\\\",\\\"rel\\\":\\\"parent_payment\\\",\\\"method\\\":\\\"GET\\\"}],\\\"soft_descriptor\\\":\\\"PAYPAL *TEST STORE\\\"}}]}],\\\"failed_transactions\\\":[],\\\"create_time\\\":\\\"2023-11-03T11:17:25Z\\\",\\\"update_time\\\":\\\"2023-11-03T11:17:38Z\\\",\\\"links\\\":[{\\\"href\\\":\\\"https:\\/\\/api.sandbox.paypal.com\\/v1\\/payments\\/payment\\/PAYID-MVCNNRQ19W02187PA543814U\\\",\\\"rel\\\":\\\"self\\\",\\\"method\\\":\\\"GET\\\"}]}\"', '1', 'active', '2023-11-03 05:47:23', '2023-11-03 05:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT NULL,
  `description` blob DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `map_link` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `img4` text DEFAULT NULL,
  `img5` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `description5` text DEFAULT NULL,
  `youtube_link1` text DEFAULT NULL,
  `youtube_link2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `title`, `featured_img`, `description`, `address`, `phone`, `email`, `map_link`, `img2`, `img3`, `img4`, `img5`, `description2`, `description3`, `description4`, `description5`, `youtube_link1`, `youtube_link2`, `created_at`, `updated_at`) VALUES
(2, 'About Us', NULL, '1692180800.jpg', 0x3c703e476c6f62616c207761726d696e6720616e6420636c696d617465206368616e6765206861766520656d6572676564206173207468652062696767657374206368616c6c656e676520746f2068756d616e6b696e642e2048652077616e74656420746f20626520612070617274206f662074686520736f6c7574696f6e20776974682068697320736d616c6c206d696768742e20546865206465766173746174696f6e206f6620746865205473756e616d6920696e20323030342070726f70656c6c65642068696d20746f2064656469636174652068696d73656c6620746f20746865206361757365206f6620266c6471756f3b496e73706972696e672050656f706c6520746f204c69766520696e204861726d6f6e792077697468204e61747572652e26726471756f3b20486520646172656420746f2073616372696669636520616c6c207468652072656c6174696f6e732c206e6574776f726b2c20616e6420696e74656c6c65637475616c207765616c74682e2048652073746172746564207363616c696e6720646f776e2068697320627573696e65737320656d7069726520616e64206d6f766564206869732061626f64652066726f6d204b6f6c6b61746120746f206120536f7574682032342050617267616e617320696e20776573742042656e67616c2e2048697320696e7465726e6174696f6e616c2074726176656c732068616420676976656e2068696d207365766572616c20677265656e696e6720636f6e636570747320746861742077657265206e6f7420766f67756520696e20496e6469612e2048652065737461626c6973686564206f6e65206f66207468652062657374206e7572736572696573206f6e203235204163726573206f66206c616e64206865206861642070757263686173656420647572696e672068697320627573696e657373207370616e2e20486520696e74726f647563656420616c6d6f73742074776f2068756e647265642050616c6d2074726565207370656369657320696e20496e64696120616e64207374617274656420757262616e206c616e6473636170696e6720776974682070616c6d732e20486520696e74726f6475636564207573696e6720636f636f2d7069746820696e20706f7420706c616e74732c2061207375627374616e6365206a75737420612077617374652070726f6475637420696e20496e6469612e2048652065737461626c697368656420612067617264656e2063656e7465722c20266c6471756f3b477265656e204d616c6c2c26726471756f3b20696e20323030372c206f6e65206f6620697473206b696e6420696e20496e6469612e2048652077726f7465206d616e792061727469636c657320616e6420626f6f6b732e20536f6172696e67204865696768742c2050616c6d7320666f7220496e6469612c20477265656e20596f757220537572726f756e64696e67732c20616e6420477265656e20477572757326727371756f3b2047617264656e696e672047756964652061726520696465616c20666f7220696e73706972696e6720616e642067756964696e6720636974792d6477656c6c65727320746f20677265656e20746865697220686f6d6573204361726565727320696e2067617264656e696e672e3c2f703e, NULL, NULL, NULL, NULL, '1692181229.jpg', '1692181229.png', '1692181229.png', '1692181229.png', '<p>Indian Botanical Garden entered into an MOU where in he provided them technical guidance and enriched Palms and Sansevierias. He submitted environment protection and enhancement plans to India&rsquo;s Prime Minister, the Government of West Bengal, and the Kolkata Municipality. He established the &ldquo;Safal Jivan Institute&rdquo; to impart greening training and develop &ldquo;Green Entrepreneurs.&rdquo; He found a trust, &ldquo;Prakriti Bandhu,&rdquo; to create a platform to create awareness about global warming and climate change and take proactive measures. &ldquo;He is popularly known as &ldquo;Green Miracle Man.&rdquo; He is elected president of the Indian Nurseryman Association (Eastern India) and Vice-President of the All India Nurseryman Association. &ldquo;Let&rsquo;s Make India Green&rdquo; has been his mission. With his experience and organizing capabilities, he created a &ldquo;Green Eco-system.&rdquo; When the world encountered the COVID pandemic and prolonged lockdowns, he devised a methodology to train people online with profound research and creativity. He is now offering courses and training on Home Gardening to city dwellers, Careers in gardening.landscaping, floriculture, plant renting, garden maintenance, and nursery business.</p>', '<ol>\r\n	<li>We have added 15000 Sqft of covered showroom space to store and display various categories of Non-plant items required for horticulture, gardening, and landscaping.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;We have added 10000 Sqft of covered greenhouses to display exotic indoor plants.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;A large range of indoor plants has been added to our collection, suitable for vertical gardens.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;A large range of succulents and cacti have been added to our collection for the first time.</li>\r\n</ol>', '<ul>\r\n	<li>Over 700 types of imported and Indian ceramic pots have been added, and a new section of 2000 Sq ft of the showroom is dedicated to their display.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;We have introduced new-concept Miniature Trees, which are ideal for rooftop gardens.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Over 50 varieties of exotic tropical grafted fruit plants have been added to our earlier fruit plant range.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;25 varieties of new boulders, gravels, and pebbles have been added to our existing collection.</li>\r\n</ul>', '<ul>\r\n	<li>&nbsp;Green Mall is a garden center and day trip destination for plant lovers in Kolkata, India. It is located in Shamukpota near Bakrahat, about 11km away from Kolkata by road. Green Mall was established in 2007 by gardening expert Dinesh Chandra Rawat, and claims to be India&rsquo;s first garden center.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Green Mall has a wide variety of plants, including trees, shrubs, flowers, and herbs. They also have a store for all your essential and quirky gardening equipment and accessories. In addition, Green Mall offers a variety of gardening services, such as landscaping, plant care, and pest control.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Green Mall is a great place to spend a leisurely day. You can wander through the gardens, admire the plants, and learn more about gardening. You can also purchase plants, gardening supplies, and landscaping services. Green Mall is a great place to find everything you need to create a beautiful garden.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Here are some of the things you can do at Green Mall:<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Browse the wide variety of plants, including trees, shrubs, flowers, and herbs.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Purchase gardening supplies, such as pots, soil, fertilizer, and tools.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Get advice from the gardening experts on how to care for your plants.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Take a gardening class to learn more about gardening.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Hire a professional landscaper to design and create a beautiful garden for you.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Enjoy a delicious meal at the on-site restaurant.<br />\r\n	&nbsp;</li>\r\n	<li>&nbsp;Green Mall is a great place to learn about gardening, purchase plants and supplies, and get advice from the experts. It is also a great place to relax and enjoy the beauty of nature.</li>\r\n</ul>', 'https://www.youtube.com/embed/_GfjNUhKK4I', 'https://www.youtube.com/embed/aPNQzGa_578', '2023-02-23 02:11:11', '2023-08-16 14:44:22'),
(3, 'Contact Us Page', NULL, '1677233453.png', 0x3c703e496620796f752068617665206120726571756972656d656e7420666f7220706c616e747320696e2062756c6b206f722072657461696c20706c656173652067657420696e20746f75636820776974682075732e20576520616c736f20756e64657274616b65204c616e6473636170696e6720616e6420486f6d652047617264656e696e672061737369676e6d656e747320616e642070726f7669646520656e6420746f20656e6420736f6c7574696f6e2e3c2f703e, 'Samukpota, Thakurpukur-Bakhrahat Rd, Nadabhanga, South 24 Paraganas, W B -743503', '+91- 7278006663, +91-9748473333', 'dinesh@6kc.da6.myftpupload.com, dineshrawat@live.in', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7377.28259989679!2d88.242152!3d22.404876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0263599dd9cedd%3A0xf010ac198993e8e8!2sSamukpota%20More!5e0!3m2!1sen!2sus!4v1691408408439!5m2!1sen!2sus', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-24 04:08:20', '2023-08-07 15:51:10');

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
-- Table structure for table `pdf_downloads`
--

CREATE TABLE `pdf_downloads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `pdf` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pdf_downloads`
--

INSERT INTO `pdf_downloads` (`id`, `title`, `pdf`, `created_at`, `updated_at`) VALUES
(1, 'Green Guru\'s Gedening', '1692689452.pdf', '2023-08-22 11:30:52', '2023-08-22 11:30:52'),
(2, 'Green Your Surroundings', '1692689703.pdf', '2023-08-22 11:35:04', '2023-08-22 11:35:04'),
(4, 'Palm For India', '1692690718.pdf', '2023-08-22 11:51:58', '2023-08-22 11:51:58'),
(5, 'Ready Pot Plants', '1692690986.pdf', '2023-08-22 11:56:26', '2023-08-22 11:56:26');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `name` text NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `featured_img` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0',
  `discount` varchar(255) NOT NULL DEFAULT '0',
  `delivary_charge` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `sku_code` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `website_link` text DEFAULT NULL,
  `no_in_stock` varchar(50) DEFAULT NULL,
  `stock_status` varchar(50) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `rating` varchar(50) DEFAULT '0',
  `tags` text DEFAULT NULL,
  `weight` text DEFAULT NULL,
  `length` text DEFAULT NULL,
  `width` text DEFAULT NULL,
  `height` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `features` text DEFAULT NULL,
  `color_added` text DEFAULT NULL,
  `qty_check` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `added_by`, `name`, `title`, `description`, `short_description`, `featured_img`, `price`, `discount`, `delivary_charge`, `gallery`, `sku_code`, `video`, `website_link`, `no_in_stock`, `stock_status`, `slug`, `rating`, `tags`, `weight`, `length`, `width`, `height`, `status`, `features`, `color_added`, `qty_check`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, NULL, 'Emmanuel Ellis', 'Rerum explicabo Ver', NULL, NULL, '1678773948.png', '0', '0', NULL, NULL, 'Nesciunt eum maxime', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:50', '2023-03-14 00:35:48', '2023-07-17 05:28:50'),
(2, '1', NULL, NULL, 'Emmanuel Ellis', 'Rerum explicabo Ver', NULL, NULL, '1678774018.png', '0', '0', NULL, NULL, 'Nesciunt eum maxime', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:32', '2023-03-14 00:36:58', '2023-07-17 05:28:32'),
(3, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678776840.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-03-14 03:13:24', '2023-03-14 01:24:00', '2023-03-14 03:13:24'),
(4, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678777485.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-03-14 04:32:29', '2023-03-14 01:34:45', '2023-03-14 04:32:29'),
(5, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678778178.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:57', '2023-03-14 01:46:18', '2023-07-17 05:28:57'),
(6, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', '<p>Demooo</p>', NULL, '1678966561.jpg', '0', '0', NULL, NULL, 'Sunt exercitationem', '1678966616.mp4', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:45', '2023-03-14 01:53:28', '2023-07-17 05:28:45'),
(7, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678778737.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:41', '2023-03-14 01:55:37', '2023-07-17 05:28:41'),
(8, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678778821.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:38', '2023-03-14 01:57:01', '2023-07-17 05:28:38'),
(9, '1', NULL, NULL, 'Caryn Rowland', 'Commodi nemo molesti', NULL, NULL, '1678778865.png', '0', '0', NULL, NULL, 'Sunt exercitationem', NULL, NULL, NULL, NULL, 'caryn-rowland', '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:35', '2023-03-14 01:57:45', '2023-07-17 05:28:35'),
(10, '3', NULL, NULL, 'Chanda Porter', 'Ipsum harum id veli', NULL, NULL, '1678781409.png', '961', '10', NULL, NULL, 'Lorem nesciunt repr', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 00:30:11', '2023-03-14 02:40:09', '2023-07-17 00:30:11'),
(11, '1', NULL, '3', 'Jhon deb', 'demoooooooooooo', '<p>NAAAAAAAAAAAA</p>', NULL, '1689140801.png', '1200', '100', NULL, NULL, NULL, '', 'https://www.google.com/', NULL, NULL, 'jhon-deb', '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 03:20:13', '2023-07-12 00:16:41', '2023-07-17 03:20:13'),
(13, '1', NULL, '3', 'Orson Beard', 'At velit reprehender', NULL, NULL, '1689140906.png', '1880', '71', NULL, NULL, 'Officia eaque id et', NULL, 'https://www.google.com/', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 00:30:24', '2023-07-12 00:18:26', '2023-07-17 00:30:24'),
(14, '1', NULL, '3', 'Denton Saunders', 'Magna praesentium Na', NULL, NULL, '1689146074.png', '104', '65', NULL, NULL, 'Qui explicabo Archi', NULL, 'https://www.nyjodu.info', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:06', '2023-07-12 01:44:34', '2023-07-17 05:28:06'),
(15, '1', NULL, '3', 'Neville Kennedy', 'Sit voluptates aute', NULL, NULL, '1689582408.png', '945', '77', NULL, NULL, 'Quibusdam molestiae', NULL, 'https://www.waxobuqow.ws', NULL, 'In Stock', 'neville-kennedy', '29', NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-17 05:28:54', '2023-07-17 02:56:48', '2023-07-17 05:28:54'),
(16, '8', NULL, '3', 'Nurturing Green Combo of 4 Ivory Color \'Bare\' Self Watering Plastic Pots', 'Flower-1', '<h1>About this item</h1>\r\n\r\n<ul>\r\n	<li><strong>Hassle Free Self Watering Pots&nbsp;</strong>- You don&#39;t need to water your plants every day, no more worry that your plants will get dry when you are travelling. The tray at the bottom of the pot stores extra water, adding a cotton rope will let it absorb the water into the soil. The bottom tray can be easily fixed on the pot body, and you can also easily remove the tray if needed, by applying a little force.</li>\r\n	<li><strong>Minimalist Design for Modern Home&nbsp;</strong>- Our pots come with Glossy finish look, are suitable for housing medium sized indoor plants, flowering plants, bonsai plants and bring modern minimalist touch to your living spaces.</li>\r\n	<li><strong>Easy Watering &amp; Excellent Drainage System&nbsp;</strong>- The drainage hole at the bottom of the plant pots allows easy oxygen circulation and prevents waterlogging.. If there is too much water in the soil, it will cause harm to the roots, the drainage system of our pots can let surplus water drain through holes into reservoir tray, that can be absorbed later.</li>\r\n</ul>', NULL, '1689583185.jpg', '999', '0', '0', NULL, NULL, NULL, NULL, NULL, 'In Stock', 'nurturing-green-combo-of-4-ivory-color-bare-self-watering-plastic-pots', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-17 03:09:45', '2023-07-19 10:34:12'),
(17, '4', NULL, '3', 'BR 11 – Fox Vertical Pot-36 cm x 28 cm-Golden', 'BR 11 – Fox Vertical', '<p>Material : Polymer ; Features : Unbreakable, Non-fading, Light weight, Recyclable, Zero Maintenance &amp; Less Water Absorbent.</p>', '<p>This is a premium quality pot which is ideal for decorating both places Indoor &amp; Outdoor.</p>', '1689659628.jpg', '665', '0', '0', NULL, 'PPFOBR11GO', NULL, NULL, NULL, 'In Stock', 'br-11-fox-vertical-pot-36-cm-x-28-cm-golden', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 11:13:46', '2023-07-18 00:23:48', '2023-07-27 11:13:46'),
(18, '5', NULL, '3', 'Alexis Berry', 'Velit consectetur au', NULL, NULL, '1689661502.png', '698', '32', NULL, NULL, 'Laudantium voluptat', NULL, NULL, NULL, 'Out of Stock', 'alexis-berry', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-18 00:55:02', '2023-07-18 01:44:21'),
(19, '4', '5', '3', 'BT – Fox Window Pot-66 cm x 30 cm x 33cm-Golden', NULL, '<p>Material : Polymer ; Features : Unbreakable, Non-fading, Light weight, Recyclable, Zero Maintenance &amp; Less Water Absorbent.</p>', '<p>This is a premium quality pot which is ideal for decorating both places Indoor &amp; Outdoor.</p>', '1689664806.png', '1830', '0', NULL, NULL, 'PPFOBTGO', NULL, NULL, NULL, 'Out of Stock', 'bt-fox-window-pot-66-cm-x-30-cm-x-33cm-golden', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-26 14:35:20', '2023-07-18 01:50:06', '2023-07-26 14:35:20'),
(20, '4', '3', '3', 'BR 18 – Fox Vertical Pot-53 cm x 46 cm-Golden', NULL, '<p>Material : Polymer ; Features : Unbreakable, Non-fading, Light weight, Recyclable, Zero Maintenance &amp; Less Water Absorbent.</p>', '<p>This is a premium quality pot which is ideal for decorating both places Indoor &amp; Outdoor.</p>', '1689834579.jpg', '1850', '1800', '0', NULL, 'PPFOBR18GO', NULL, NULL, '10', 'In Stock', 'br-18-fox-vertical-pot-53-cm-x-46-cm-golden', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 11:33:02', '2023-07-20 10:29:39', '2023-07-27 11:33:02'),
(21, '17', NULL, '3', 'Aluminium Wood Plastic Composit Tea Table', NULL, NULL, NULL, '1689837173.jpg', '25000', '0', '0', NULL, 'OFIM1221BL', NULL, NULL, '10', 'In Stock', 'aluminium-wood-plastic-composit-tea-table', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-20 11:12:53', '2023-07-20 11:13:33'),
(22, '18', NULL, '3', 'Brass Roll Cut Pruning Secateurs – Orange color', NULL, NULL, NULL, '1689925805.jpg', '375', '50', '0', NULL, 'HTKU1050NA', NULL, NULL, '1', 'In Stock', 'brass-roll-cut-pruning-secateurs-orange-color', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-21 12:50:31', '2023-07-21 11:50:05', '2023-07-21 12:50:31'),
(23, '20', NULL, '3', 'TV 35 -Blossom Decora Pot', NULL, NULL, '<p>Size-35 cm x 27 cm</p>\r\n\r\n<p>Colour-&nbsp;Terracotta&nbsp;</p>', '1689999918.jpg', '540', '0', '0', NULL, 'PPDETV35TC', NULL, NULL, '10', 'In Stock', 'tv-35-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 08:25:18', '2023-07-22 08:25:18'),
(24, '20', NULL, '3', 'TV 35 – Blossom Decora Vertical Pot', NULL, NULL, '<p>Size-35 cm x 27 cm</p>\r\n\r\n<p>Color -&nbsp;&nbsp;Grey &nbsp;</p>', '1690002650.jpg', '590', '0', '0', NULL, 'PPDETV35GR', NULL, NULL, '15', 'In Stock', 'tv-35-blossom-decora-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:10:50', '2023-07-22 09:10:50'),
(25, '20', NULL, '3', 'TV 35 – Blossom Decora Vertical Pot', NULL, NULL, '<p>Size-35 cm x 27 cm</p>\r\n\r\n<p>Color -&nbsp;&nbsp;Grey &nbsp;</p>', '1690002652.jpg', '590', '0', '0', NULL, 'PPDETV35GR', NULL, NULL, '15', 'In Stock', 'tv-35-blossom-decora-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-22 09:13:28', '2023-07-22 09:10:52', '2023-07-22 09:13:28'),
(26, '20', NULL, '3', 'TV 35 – Blossom Decora Pot', NULL, NULL, '<p>Size-&nbsp;35 cm x 27 cm</p>\r\n\r\n<p>Color &ndash;White</p>', '1690003454.jpg', '590', '0', '0', NULL, 'PPDETV35WH', NULL, NULL, '104', 'In Stock', 'tv-35-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:24:14', '2023-07-22 09:24:14'),
(27, '20', NULL, '3', 'TV 40 –Blossom Decora Pot', NULL, NULL, '<p>Size-&nbsp;43 cm x 35 cm</p>\r\n\r\n<p>&nbsp;Color &ndash;Grey</p>', '1690003770.jpg', '880', '0', '0', NULL, 'PPDETV40GR', NULL, NULL, '18', 'In Stock', 'tv-40-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:29:30', '2023-07-22 09:29:30'),
(28, '20', NULL, '3', 'TV 40 – Blossom Decora  Pot', NULL, NULL, '<p>Size-&nbsp;43 cm x 35 cm</p>\r\n\r\n<p>Color-&nbsp;Terracotta</p>', '1690004229.jpg', '780', '0', '0', NULL, 'PPDETV40TC', NULL, NULL, '1', 'In Stock', 'tv-40-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:37:09', '2023-07-22 09:37:09'),
(29, '20', NULL, '3', 'TV 40 – Blossom Decora Pot', NULL, NULL, '<p>Size-43 cm x 35 cm</p>\r\n\r\n<p>Color-&nbsp;White&nbsp;</p>', '1690004490.jpg', '880', '0', '0', NULL, 'PPDETV40WH', NULL, NULL, '5', 'In Stock', 'tv-40-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:41:30', '2023-07-22 09:41:30'),
(30, '20', NULL, '3', 'TV 50 – Blossom Decora  Pot', NULL, NULL, '<p>Size-51 cm x 44 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Grey</p>', '1690005077.jpg', '1460', '0', '0', NULL, 'PPDETV50GR', NULL, NULL, '35', 'In Stock', 'tv-50-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 09:51:17', '2023-07-22 09:51:17'),
(31, '20', NULL, '3', 'TV 50 – Blossom Decora Pot', NULL, NULL, '<p>Size-&nbsp;51 cm x 44 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta</p>', '1690005643.jpg', '1330', '0', '0', NULL, 'PPDETV50TC', NULL, NULL, '41', 'In Stock', 'tv-50-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 10:00:43', '2023-07-22 10:00:43'),
(32, '20', NULL, '3', 'TV 50 – Blossom Decora  Pot', NULL, NULL, '<p>Size-&nbsp;51 cm x 44 cm</p>\r\n\r\n<p>&nbsp;Color &ndash;&nbsp;White</p>\r\n\r\n<p>&nbsp;</p>', '1690006022.jpg', '1460', '0', '0', NULL, 'PPDETV50WH', NULL, NULL, '39', 'In Stock', 'tv-50-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 10:07:02', '2023-07-22 10:07:02'),
(33, '20', NULL, '3', 'TV 60 – BlossomDecora Pot', NULL, NULL, '<p>Size-&nbsp;63 cm x 53 cm</p>\r\n\r\n<p>&nbsp;Color &ndash; Grey</p>\r\n\r\n<p>&nbsp;</p>', '1690006432.jpg', '2220', '0', '0', NULL, 'PPDETV60GR', NULL, NULL, '13', 'In Stock', 'tv-60-blossomdecora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 10:13:52', '2023-07-22 10:13:52'),
(34, '20', NULL, '3', 'TV 60 – Blossom Decora Pot –', NULL, NULL, '<p>Size-63 cm x 53 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta&nbsp;</p>', '1690007076.jpg', '2050', '0', '0', NULL, 'PPDETV60TC', NULL, NULL, '11', 'In Stock', 'tv-60-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-22 11:20:37', '2023-07-22 10:24:36', '2023-07-22 11:20:37'),
(35, '20', NULL, '3', 'TV 60 – Blossom Decora Pot –', NULL, NULL, '<p>Size-&nbsp;63 cm x 53 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta</p>', '1690009195.jpg', '2050', '0', '0', NULL, 'PPDETV60TC', NULL, NULL, '11', 'In Stock', 'tv-60-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-22 11:20:16', '2023-07-22 10:59:55', '2023-07-22 11:20:16'),
(36, '20', NULL, '3', 'TV 60 – Blossom Decora Pot –', NULL, NULL, '<p>Size-&nbsp;63 cm x 53 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta</p>', '1690009317.jpg', '2050', '0', '0', NULL, 'PPDETV60TC', NULL, NULL, '11', 'In Stock', 'tv-60-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 11:01:57', '2023-07-22 11:01:57'),
(37, '20', NULL, '3', 'TV 60 – Blossom Decora  Pot –', NULL, NULL, '<p>Size-&nbsp;63 cm x 53 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;White&nbsp;</p>', '1690009800.jpg', '2220', '0', '0', NULL, 'PPDETV60WH', NULL, NULL, '9', 'In Stock', 'tv-60-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 11:10:00', '2023-07-22 11:10:00'),
(38, '20', NULL, '3', 'TV 70 – Blossom Decora Pot –', NULL, NULL, '<p>Size-&nbsp;75 cm x 64 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Grey&nbsp;</p>', '1690010289.jpg', '4120', '0', '0', NULL, 'PPDETV70GR', NULL, NULL, '10', 'In Stock', 'tv-70-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 11:18:09', '2023-07-22 11:18:09'),
(39, '20', NULL, '3', 'TV 70 – Blossom Decora Pot –', NULL, NULL, '<p>Size -&nbsp;75 cm x 64 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta&nbsp;</p>', '1690013243.jpg', '3840', '0', '0', NULL, 'PPDETV70TC', NULL, NULL, '7', 'In Stock', 'tv-70-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:07:23', '2023-07-22 12:07:23'),
(40, '20', NULL, '3', 'TV 70 –Blossom  Decora Pot', NULL, NULL, '<p>Size-75 cm x 64 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;&nbsp;White&nbsp;</p>', '1690013629.jpg', '4120', '0', '0', NULL, 'PPDETV70WH', NULL, NULL, '9', 'In Stock', 'tv-70-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:13:49', '2023-07-22 12:13:49'),
(41, '14', NULL, '3', 'Glaze White Pebbles', NULL, NULL, '<p>Size-15 mm to 40 mm</p>\r\n\r\n<p>Colour-White</p>', '1690014307.jpg', '80', '0', '0', NULL, 'PEGR31WHS', NULL, NULL, '25', 'In Stock', 'glaze-white-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:25:07', '2023-07-22 14:49:50'),
(42, '14', NULL, '3', 'Milky White Pebbles', NULL, NULL, '<p>Size-10 mm to 35 mm</p>\r\n\r\n<p>Colour-White</p>', '1690015033.jpg', '60', '0', '0', NULL, 'PEGR1041WH', NULL, NULL, '500', 'In Stock', 'milky-white-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:37:13', '2023-07-22 12:37:13'),
(43, '14', NULL, '3', 'Natural Color Pebbles', NULL, NULL, '<p>Colour- Multi Colour</p>\r\n\r\n<p>&nbsp;(Aquarium)</p>', '1690015453.jpg', '40', '0', '0', NULL, 'PEGR411M', NULL, NULL, '250', 'In Stock', 'natural-color-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:44:13', '2023-07-22 12:44:13'),
(44, '14', NULL, '3', 'Natural Polish Pebbles', NULL, NULL, '<p>Size-25 mm to 50 mm</p>\r\n\r\n<p>(Jasper)</p>\r\n\r\n<h1>&nbsp;</h1>', '1690015731.jpg', '210', '0', '0', NULL, 'PEGR371M', NULL, NULL, '50', 'In Stock', 'natural-polish-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 12:48:51', '2023-07-22 12:48:51'),
(45, '20', NULL, '3', 'TV 110 – Blossom Decora Pot –', NULL, NULL, '<p>Size-&nbsp;110 cm x 85 cm</p>\r\n\r\n<p>&nbsp;Color &ndash; Grey</p>', '1690016968.jpg', '10150', '0', '0', NULL, 'PPDETV110GR', NULL, NULL, '3', 'In Stock', 'tv-110-blossom-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:09:28', '2023-07-22 13:09:28'),
(46, '20', NULL, '3', 'TVG 40 – Beauty Decora Pot-', NULL, NULL, '<p>Size- 43 cm x 35 cm</p>\r\n\r\n<p>Color- Grey</p>', '1690017565.jpg', '990', '0', '0', NULL, 'PPDETVG40GR', NULL, NULL, '1', 'In Stock', 'tvg-40-beauty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:19:25', '2023-07-22 13:19:25'),
(47, '20', NULL, '3', 'TVG 40 – Beauty Decora Pot--', NULL, NULL, '<p>Size-&nbsp;43 cm x 35 cm</p>\r\n\r\n<p>Color-&nbsp;Terracotta</p>', '1690017887.jpg', '880', '0', '0', NULL, 'PPDETVG40TC', NULL, NULL, '3', 'In Stock', 'tvg-40-beauty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:24:47', '2023-07-22 13:24:47'),
(48, '20', NULL, '3', 'TVG 50 – Beauty Decora Pot- -', NULL, NULL, '<p>Size-&nbsp;51 cm x 44 cm</p>\r\n\r\n<p>Color-&nbsp;Grey</p>', '1690018260.jpg', '1610', '0', '0', NULL, 'PPDETVG50GR', NULL, NULL, '10', 'In Stock', 'tvg-50-beauty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:31:00', '2023-07-22 13:31:00'),
(49, '20', NULL, '3', 'TVG 50 – Beauty Decora Pot', NULL, NULL, '<p>Size-&nbsp;51 cm x 44 cm</p>\r\n\r\n<p>Color-Terracotta</p>', '1690018606.jpg', '1485', '0', '0', NULL, 'PPDETVG50TC', NULL, NULL, '2', 'In Stock', 'tvg-50-beauty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:36:46', '2023-07-22 13:36:46'),
(50, '20', NULL, '3', 'TS 40 –Liberty Decora Pot', NULL, NULL, '<p>Size-&nbsp;42 cm x 42 cm x 37 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Terracotta&nbsp;</p>', '1690019248.jpg', '1700', '0', '0', NULL, 'PPDETS40TC', NULL, NULL, '22', 'In Stock', 'ts-40-liberty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:47:28', '2023-07-22 13:47:28'),
(51, '21', NULL, '3', 'Decorative Sea Shell Half', NULL, NULL, '<p>Size--30 mm &ndash; 150 gm&nbsp;Packet</p>\r\n\r\n<p>Colour- Off White</p>', '1690019285.jpg', '150', '0', '0', NULL, 'PEIM1281NA', NULL, NULL, '100', 'In Stock', 'decorative-sea-shell-half', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:48:05', '2023-07-22 13:48:05'),
(52, '20', NULL, '3', 'TS 40 –  Liberty Decora Pot –', NULL, NULL, '<p>Size-&nbsp;42 cm x 42 cm x 37 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;Grey&nbsp;</p>', '1690019604.png', '1810', '0', '0', NULL, 'PPDETS40GR', NULL, NULL, '36', 'In Stock', 'ts-40-liberty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:53:24', '2023-07-22 13:53:24'),
(53, '20', NULL, '3', 'TS 40 –Liberty Decora Pot –', NULL, NULL, '<p>Size-&nbsp;42 cm x 42 cm x 37 cm</p>\r\n\r\n<p>Color &ndash;&nbsp;White&nbsp;</p>', '1690019968.jpg', '1810', '0', '0', NULL, 'PPDETS40WH', NULL, NULL, '22', 'In Stock', 'ts-40-liberty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 13:59:28', '2023-07-22 13:59:28'),
(54, '21', NULL, '3', 'Decorative Sea Shell', NULL, NULL, '<p>Size-&nbsp;-50 mm to 60 mm</p>\r\n\r\n<p>Colour-Cream colour</p>\r\n\r\n<p>&nbsp;150 gm Packet</p>', '1690020167.png', '150', '0', '0', NULL, 'PEIM1291NA', NULL, NULL, '50', 'In Stock', 'decorative-sea-shell', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:02:47', '2023-07-22 14:02:47'),
(55, '20', NULL, '3', 'TS 50 – Liberty Decora Pot', NULL, NULL, '<p>Size-&nbsp;50 cm x 50 cm x 45 cm</p>\r\n\r\n<p>Colour - White</p>', '1690020499.jpg', '3220', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '11', 'In Stock', 'ts-50-liberty-decora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:08:19', '2023-07-22 14:08:19'),
(56, '20', NULL, '3', 'TS 50- Decora Liberty Pot- –', NULL, NULL, '<p>Size-&nbsp;50 cm x 50 cm x 45 cm</p>\r\n\r\n<p>Colour-&nbsp;Terracotta</p>', '1690021119.jpg', '3020', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '7', 'In Stock', 'ts-50-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:18:39', '2023-07-22 14:18:39'),
(57, '14', NULL, '3', 'Glaze Black Pebbles', NULL, NULL, '<p>Size-&nbsp;15 mm to 40 mm</p>\r\n\r\n<p>Colour-Black</p>', '1690022518.jpg', '80', '0', '0', NULL, 'PEGR32BLS', NULL, NULL, '50', 'In Stock', 'glaze-black-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:41:58', '2023-07-22 14:41:58'),
(58, '14', NULL, '3', 'Onyx Pebbles Blue', NULL, NULL, '<p>Size -&nbsp;&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour- Blue</p>\r\n\r\n<p>Product Unit - Per kg</p>', '1690022821.jpg', '250', '0', '0', NULL, 'PEGR1004BL', NULL, NULL, '50', 'In Stock', 'onyx-pebbles-blue', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:47:01', '2023-07-22 15:00:59'),
(59, '20', NULL, '3', 'TS 60 – Decora Liberty Pot- -', NULL, NULL, '<p>Size-&nbsp;62 cm x 62 cm x 54 cm</p>\r\n\r\n<p>Colour -&nbsp;Terracotta</p>', '1690022908.jpg', '4560', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '1', 'In Stock', 'ts-60-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:48:28', '2023-07-22 14:48:28'),
(60, '14', NULL, '3', 'Onyx Pebbles Brown', NULL, NULL, '<p>Size-&nbsp;&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour - Brown</p>\r\n\r\n<p>Product Unit- Per kg</p>', '1690023450.jpg', '250', '0', '0', NULL, 'PEGR1007WH', NULL, NULL, '50', 'In Stock', 'onyx-pebbles-brown', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 14:57:30', '2023-07-22 14:57:30'),
(61, '14', NULL, '3', 'Onyx Pebbles Light Green', NULL, NULL, '<p>Size -&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour - Off White</p>\r\n\r\n<p>Product Unit - Per kg</p>', '1690023926.jpg', '250', '0', '0', NULL, 'PEGR1003MI', NULL, NULL, '100', 'In Stock', 'onyx-pebbles-light-green', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:05:26', '2023-07-22 15:05:26'),
(62, '20', NULL, '3', 'TS 60- Decora Liberty Pot', NULL, NULL, '<p>Size -&nbsp;62 cm x 62 cm x 54 cm</p>\r\n\r\n<p>Colour-White</p>', '1690024079.jpg', '4870', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '6', 'In Stock', 'ts-60-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:07:59', '2023-07-22 15:07:59'),
(63, '14', NULL, '3', 'Onyx Pebbles', NULL, NULL, '<p>Size-&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour-Pink&nbsp;</p>\r\n\r\n<p>Product Unit -&nbsp;kg</p>', '1690024231.jpg', '250', '0', '0', NULL, 'PEGR1002PI', NULL, NULL, '50', 'In Stock', 'onyx-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:10:31', '2023-07-22 15:10:31'),
(64, '20', NULL, '3', 'TS 60- Decora Liberty Pot', NULL, NULL, '<p>Size -&nbsp;62 cm x 62 cm x 54 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690024365.jpg', '4870', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '14', 'In Stock', 'ts-60-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:12:45', '2023-07-22 15:12:45'),
(65, '14', NULL, '3', 'Onyx Pebbles White –', NULL, NULL, '<p>Size -&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour - off white</p>', '1690024398.jpg', '250', '0', '0', NULL, 'PEGR1005WH', NULL, NULL, '50', 'In Stock', 'onyx-pebbles-white', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:13:18', '2023-07-22 15:13:18'),
(66, '14', NULL, '3', 'Onyx Pebbles', NULL, NULL, '<p>Size -&nbsp;Up to 20 mm</p>\r\n\r\n<p>Colour -&nbsp;&nbsp;Yellow</p>\r\n\r\n<p>Produet unit -kg</p>', '1690024716.jpg', '250', '0', '0', NULL, 'PEGR1001YE', NULL, NULL, '50', 'In Stock', 'onyx-pebbles', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:18:36', '2023-07-22 15:18:36'),
(67, '14', NULL, '3', 'River Boulder', NULL, NULL, '<p>Size -&nbsp;75 mm to 150 mm</p>\r\n\r\n<p>Colour -&nbsp; white</p>\r\n\r\n<p>Product Unit - kg</p>\r\n\r\n<p>&nbsp;</p>', '1690025093.jpg', '20', '0', '0', NULL, 'PEGR1031WH', NULL, NULL, '1000', 'In Stock', 'river-boulder', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:24:53', '2023-07-22 15:24:53'),
(68, '20', NULL, '3', 'TT 65 – Decora Window Planter', NULL, NULL, '<p>Size --&nbsp;65 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Colour- White</p>', '1690025561.jpg', '1610', '0', '0', NULL, 'PPDETT65WH', NULL, NULL, '30', 'In Stock', 'tt-65-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:32:41', '2023-07-22 15:32:41'),
(69, '14', NULL, '3', 'Ceramic Pebbles Long (250gm.) packet', NULL, NULL, '<p>Size - Up to10mm</p>\r\n\r\n<p>Colour - Multi colour</p>\r\n\r\n<p>Product Unit - kg</p>', '1690025621.png', '50', '0', '0', NULL, 'PEIM1081MI', NULL, NULL, '50', 'In Stock', 'ceramic-pebbles-long-250gm-packet', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:33:41', '2023-07-22 15:33:41'),
(70, '20', NULL, '3', 'TT 65 – Decora Window Planter', NULL, NULL, '<p>Size -&nbsp;65 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; -Grey Stone Finish</p>', '1690025971.jpg', '1610', '0', '0', NULL, 'PPDETT65GR', NULL, NULL, '46', 'In Stock', 'tt-65-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:39:31', '2023-07-22 15:39:31'),
(71, '20', NULL, '3', 'TT 65 – Decora Window Planter', NULL, NULL, '<p>Size-&nbsp;&nbsp;65 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Color &ndash;Terracotta&nbsp;</p>', '1690026208.jpg', '1500', '0', '0', NULL, 'PPDETT65TC', NULL, NULL, '27', 'In Stock', 'tt-65-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:43:28', '2023-07-22 15:43:28'),
(72, '20', NULL, '3', 'TT 75 – Decora Window Planter', NULL, NULL, '<p>Size-&nbsp;75 cm x 37 cm x 32 cm</p>\r\n\r\n<p>Color&nbsp;- Grey Stone Finish</p>', '1690026615.jpg', '2440', '0', '0', NULL, 'PPDETT75GR', NULL, NULL, '22', 'In Stock', 'tt-75-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:50:15', '2023-07-22 15:50:15'),
(73, '20', NULL, '3', 'GV 33 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size -33 cm x 28 cm</p>\r\n\r\n<p>Color &ndash;White</p>', '1690027006.jpg', '750', '0', '0', NULL, 'PPDEGV33WH', NULL, NULL, '13', 'In Stock', 'gv-33-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 15:56:46', '2023-07-22 15:56:46'),
(74, '20', NULL, '3', 'TT 75 – Decora Window Planter', NULL, NULL, '<p>Size-&nbsp;75 cm x 37 cm x 32 cm</p>\r\n\r\n<p>Colour- White</p>', '1690027432.jpg', '2440', '0', '0', NULL, 'PPDETT75WH', NULL, NULL, '7', 'In Stock', 'tt-75-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 16:03:52', '2023-07-22 16:03:52'),
(75, '20', '5', '3', 'GV 33 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size -&nbsp;&nbsp;33 cm x 28 cm</p>\r\n\r\n<p>Colour -&nbsp;Grey</p>\r\n\r\n<p>&nbsp;</p>', '1690027779.jpg', '750', '0', '0', NULL, 'PPDEGV33GR', NULL, NULL, '31', 'In Stock', 'gv-33-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 16:09:39', '2023-07-22 16:09:39'),
(76, '20', NULL, '3', 'TT 100 – Decora Window Planter –', NULL, NULL, '<p>Size-100 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Color- White&nbsp;</p>', '1690029371.jpg', '3000', '0', '0', NULL, 'PPDETT100WH', NULL, NULL, '36', 'In Stock', 'tt-100-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 16:36:11', '2023-07-22 16:36:11'),
(77, '20', NULL, '3', 'TT 100 – Decora Window Planter –', NULL, NULL, '<p>Size -&nbsp;100 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Color &ndash;Terracotta</p>', '1690029774.jpg', '2750', '0', '0', NULL, 'PPDETT100TC', NULL, NULL, '22', 'In Stock', 'tt-100-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-22 16:42:55', '2023-07-22 16:42:55'),
(78, '20', NULL, '3', 'FL 12 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey&nbsp;</p>', '1690077606.png', '840', '0', '0', NULL, 'PPDEFL12GR', NULL, NULL, '6', 'In Stock', 'fl-12-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:00:06', '2023-07-23 06:00:06'),
(79, '20', NULL, '3', 'FL 14 – Decora Flora Pot', NULL, NULL, '<p>Size&ndash; 35 cm x 35 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; Grey</p>', '1690077907.png', '1310', '0', '0', NULL, 'PPDEFL14GR', NULL, NULL, '14', 'In Stock', 'fl-14-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:05:07', '2023-07-23 06:05:07'),
(80, '20', NULL, '3', 'FL 16 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 40 cm x 40 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey&nbsp;</p>', '1690078314.png', '1670', '0', '0', NULL, 'PPDEFL16GR', NULL, NULL, '5', 'In Stock', 'fl-16-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 08:16:30', '2023-07-23 06:11:54', '2023-07-27 08:16:30'),
(81, '20', NULL, '3', 'FL 16 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 40 cm x 40 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey&nbsp;</p>', '1690078513.png', '1670', '0', '0', NULL, 'PPDEFL16GR', NULL, NULL, '5', 'In Stock', 'fl-16-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:15:13', '2023-07-23 06:15:13'),
(82, '20', NULL, '3', 'FLH 30 – Decora Flora Pot', NULL, NULL, '<p>Size -&nbsp;30 cm x 41 cm</p>\r\n\r\n<p>Color&nbsp;-White</p>', '1690079051.jpg', '1450', '0', '0', NULL, 'PPDEFLH30WH', NULL, NULL, '8', 'In Stock', 'flh-30-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:24:11', '2023-07-23 06:24:11'),
(83, '20', NULL, '3', 'FLH 30 – Decora Flora Square Pot', NULL, NULL, '<p>Size&nbsp;-30 cm x 41 cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690079496.jpg', '1450', '0', '0', NULL, 'PPDEFLH30GR', NULL, NULL, '31', 'In Stock', 'flh-30-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:31:36', '2023-07-23 06:31:36'),
(84, '20', NULL, '3', 'FLH 30 – Decora Flora High Pot', NULL, NULL, '<p>Size-&nbsp;Pot-30 cm x 41 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey</p>', '1690080415.jpg', '1450', '0', '0', NULL, 'PPDEFLH30GR', NULL, NULL, '31', 'In Stock', 'flh-30-decora-flora-high-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 06:46:55', '2023-07-23 06:46:55'),
(85, '20', NULL, '3', 'FLH 35 – Decora Flora High Pot', NULL, NULL, '<p>Size&nbsp;-35 cm x 48 cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690081522.jpg', '2100', '0', '0', NULL, 'PPDEFLH35GR', NULL, NULL, '9', 'In Stock', 'flh-35-decora-flora-high-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 07:05:22', '2023-07-23 07:05:22'),
(86, '20', NULL, '3', 'FLS 11 – Decora Flora Square Pot', NULL, NULL, '<p>Size -28 cm x 28 cm x 28cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey</p>', '1690082295.jpg', '1110', '0', '0', NULL, 'PPDEFLS11GR', NULL, NULL, '20', 'In Stock', 'fls-11-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 07:18:15', '2023-07-23 07:18:15'),
(87, '20', NULL, '3', 'FLS 13 – Decora Flora Square Pot', NULL, NULL, '<p>Size&nbsp;-33 cm x 33 cm x 33 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey</p>', '1690082621.jpg', '1540', '0', '0', NULL, 'PPDEFLS13GR', NULL, NULL, '8', 'In Stock', 'fls-13-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 07:23:41', '2023-07-23 07:23:41'),
(88, '20', NULL, '3', 'FLS 15 – Decora Flora Square Pot-', NULL, NULL, '<p>Size&nbsp;38&nbsp;cm x 38&nbsp;cm x 38&nbsp;cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690083759.jpg', '2250', '0', '0', NULL, 'PPDEFLS15GR', NULL, NULL, '9', 'In Stock', 'fls-15-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 07:42:39', '2023-07-23 07:42:39'),
(89, '20', NULL, '3', 'GV 38 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 38 cm x 33 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey</p>\r\n\r\n<p>&nbsp;</p>', '1690084591.jpg', '1160', '0', '0', NULL, 'PPDEGV38GR', NULL, NULL, '18', 'In Stock', 'gv-38-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 07:56:31', '2023-07-23 07:56:31'),
(90, '20', NULL, '3', 'GV 38 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 38 cm x 33 cm</p>\r\n\r\n<p>&nbsp;Color&ndash; White</p>', '1690084980.jpg', '1160', '0', '0', NULL, 'PPDEGV38WH', NULL, NULL, '10', 'In Stock', 'gv-38-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:03:00', '2023-07-23 08:03:00'),
(91, '20', NULL, '3', 'GV 46 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 46 cm x 38 cm</p>\r\n\r\n<p>Color- Grey</p>', '1690085348.jpg', '1660', '0', '0', NULL, 'PPDEGV46GR', NULL, NULL, '9', 'In Stock', 'gv-46-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:09:08', '2023-07-23 08:09:08'),
(92, '20', NULL, '3', 'GV 46 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 46 cm x 38 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; White</p>', '1690085572.jpg', '1660', '0', '0', NULL, 'PPDEGV46WH', NULL, NULL, '10', 'In Stock', 'gv-46-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:12:52', '2023-07-23 08:12:52'),
(93, '20', NULL, '3', 'GV 53 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 53 cm x 46 cm</p>\r\n\r\n<p>Color&ndash; White</p>', '1690085877.jpg', '2300', '0', '0', NULL, 'PPDEGV53WH', NULL, NULL, '7', 'In Stock', 'gv-53-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:17:57', '2023-07-23 08:17:57'),
(94, '20', NULL, '3', 'GV 53 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 53 cm x 46 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; Grey</p>', '1690086473.jpg', '2300', '0', '0', NULL, 'PPDEGV53GR', NULL, NULL, '11', 'In Stock', 'gv-53-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:27:53', '2023-07-23 08:27:53'),
(95, '20', NULL, '3', 'GV 53 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 53 cm x 46 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; White&nbsp;</p>', '1690086758.jpg', '2300', '0', '0', NULL, 'PPDEGV53WH', NULL, NULL, '7', 'In Stock', 'gv-53-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:32:38', '2023-07-23 08:32:38'),
(96, '20', NULL, '3', 'GV 60 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 53 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; Grey&nbsp;</p>', '1690088393.jpg', '3210', '0', '0', NULL, 'PPDEGV60GR', NULL, NULL, '5', 'In Stock', 'gv-60-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 08:59:53', '2023-07-23 08:59:53'),
(97, '20', NULL, '3', 'GV-60 – Decora Glossy Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 53 cm</p>\r\n\r\n<p>Color&ndash; White &nbsp;</p>', '1690088628.jpg', '3210', '0', '0', NULL, 'PPDEGV60WH', NULL, NULL, '5', 'In Stock', 'gv-60-decora-glossy-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:03:48', '2023-07-23 09:03:48'),
(98, '20', NULL, '3', 'GVT 300 – Decora Glossy Vertical Tall Pot', NULL, NULL, '<p>Size&ndash; 56 cm x 30 cm</p>\r\n\r\n<p>&nbsp;Color&nbsp;&ndash; Grey</p>', '1690089121.jpg', '1460', '0', '0', NULL, 'PPDEGVT300GR', NULL, NULL, '12', 'In Stock', 'gvt-300-decora-glossy-vertical-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:12:01', '2023-07-23 09:12:01'),
(99, '17', NULL, '3', 'Coated Steel Stool', NULL, NULL, '<p>Size -48 X 34 cm</p>\r\n\r\n<p>Colour - Black&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1690089300.jpg', '700', '0', '0', NULL, 'OFIM1012NA', NULL, NULL, '18', 'In Stock', 'coated-steel-stool', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:15:00', '2023-07-23 09:15:00'),
(100, '20', NULL, '3', 'GVT 300 – Decora Glossy Vertical Tall Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 56 cm x 30 cm</p>\r\n\r\n<p>&nbsp;Color&ndash; White</p>', '1690089354.jpg', '1460', '0', '0', NULL, 'PPDEGVT300WH', NULL, NULL, '18', 'In Stock', 'gvt-300-decora-glossy-vertical-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:15:54', '2023-07-23 09:15:54'),
(101, '17', NULL, '3', 'Stainless Steel Stool', NULL, NULL, '<p>Size -&nbsp;48 x 28 cm</p>\r\n\r\n<p>Colour - Steel</p>', '1690089598.jpg', '1000', '0', '0', NULL, 'OFIM1031NA', NULL, NULL, '77', 'In Stock', 'stainless-steel-stool', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:19:58', '2023-07-23 09:29:34'),
(102, '20', NULL, '3', 'GVT 350 – Decora Glossy Vertical Tall Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 66 cm x 36 cm</p>\r\n\r\n<p>Color&ndash; Grey &nbsp;</p>', '1690089672.jpg', '2280', '0', '0', NULL, 'PPDEGVT350GR', NULL, NULL, '12', 'In Stock', 'gvt-350-decora-glossy-vertical-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:21:12', '2023-07-23 09:21:12'),
(103, '17', NULL, '3', 'Stainless Steel Stool', NULL, NULL, '<p>Size -&nbsp;48cm X 35cm</p>\r\n\r\n<p>Colour - Steel</p>', '1690089871.jpg', '1000', '0', '0', NULL, 'OFIM1011NA', NULL, NULL, '94', 'In Stock', 'stainless-steel-stool', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:24:31', '2023-07-23 09:30:20'),
(104, '20', NULL, '3', 'GVT 350 – Decora Glossy Vertical Tall Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 66 cm x 36 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; White&nbsp;</p>', '1690089926.jpg', '2280', '0', '0', NULL, 'PPDEGVT350WH', NULL, NULL, '6', 'In Stock', 'gvt-350-decora-glossy-vertical-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:25:26', '2023-07-23 09:25:26'),
(105, '17', NULL, '3', 'Square Stainless Steel Stool', NULL, NULL, '<p>Size -&nbsp;&nbsp;48 x 28 cm</p>\r\n\r\n<p>Colour - Steel&nbsp;</p>', '1690090116.jpg', '1000', '0', '0', NULL, 'OFIM1014NA', NULL, NULL, '49', 'In Stock', 'square-stainless-steel-stool', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:28:36', '2023-07-23 09:30:49'),
(106, '20', NULL, '3', 'GVT 400 – Decora Glossy Vertical Tall Pot', NULL, NULL, '<p>Size&ndash; 75 cm x 40 cm</p>\r\n\r\n<p>&nbsp;Color&nbsp;&ndash; Grey</p>', '1690090380.jpg', '3310', '0', '0', NULL, 'PPDEGVT400GR', NULL, NULL, '12', 'In Stock', 'gvt-400-decora-glossy-vertical-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:33:00', '2023-07-23 09:33:00'),
(107, '17', NULL, '3', 'Stainless Steel Chair (CSC-03/1)', NULL, NULL, '<p>Size - 56 cm x 71 cm</p>\r\n\r\n<p>Colour - Steel&nbsp;</p>', '1690090535.jpg', '3920', '0', '0', NULL, 'OFIM1000NA', NULL, NULL, '17', 'In Stock', 'stainless-steel-chair-csc-031', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:35:35', '2023-07-23 09:35:35'),
(108, '17', NULL, '3', 'Stainless Steel Chair', NULL, NULL, '<p>Size -&nbsp;56 cm x 76 cm</p>\r\n\r\n<p>Colour - Steel</p>\r\n\r\n<p>&nbsp;</p>', '1690090681.jpg', '2300', '0', '0', NULL, 'OFIM2000NA', NULL, NULL, '22', 'In Stock', 'stainless-steel-chair', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:38:01', '2023-07-23 09:38:01'),
(109, '17', NULL, '3', 'Wooden Tea Table with Two Wooden Bench', NULL, NULL, '<p>Size - 45 x 18 x 30</p>\r\n\r\n<p>Colour - Wooden&nbsp;&nbsp;</p>', '1690091376.jpg', '8500000', '0', '0', NULL, 'OFIM1261GR', NULL, NULL, '8', 'In Stock', 'wooden-tea-table-with-two-wooden-bench', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-23 09:51:34', '2023-07-23 09:49:36', '2023-07-23 09:51:34'),
(110, '17', NULL, '3', 'Wooden Tea Table with Two Wooden Bench', NULL, NULL, '<p>Size - 45 x 18 x 30</p>\r\n\r\n<p>Colour - Wooden&nbsp;&nbsp;</p>', '1690091405.jpg', '85000', '0', '0', NULL, 'OFIM1261GR', NULL, NULL, '8', 'In Stock', 'wooden-tea-table-with-two-wooden-bench', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:50:05', '2023-07-23 09:50:05'),
(111, '20', NULL, '3', 'GCT 30 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size-30 cm x 30 cm x 56 cm</p>\r\n\r\n<p>&nbsp;Color-Grey</p>', '1690091489.jpg', '1660', '0', '0', NULL, 'PPDEGCT30GR', NULL, NULL, '16', 'In Stock', 'gct-30-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:51:29', '2023-07-23 09:51:29'),
(112, '17', NULL, '3', 'Round Aluminium Garden Tea Table', NULL, NULL, '<p>Size -&nbsp;65 cm x 75 cm</p>\r\n\r\n<p>Colour - Black&nbsp;</p>', '1690091741.jpg', '19000', '0', '0', NULL, 'OFIM1251NA', NULL, NULL, '6', 'In Stock', 'round-aluminium-garden-tea-table', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:55:41', '2023-07-23 10:30:39'),
(113, '20', NULL, '3', 'GCT 30 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;-30 cm x 30 cm x 56 cm</p>\r\n\r\n<p>Color-White</p>', '1690091838.jpg', '1660', '0', '0', NULL, 'PPDEGCT30WH', NULL, NULL, '10', 'In Stock', 'gct-30-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:57:18', '2023-07-23 09:57:18'),
(114, '17', NULL, '3', 'Stainless Steel Sofa cum Bed Ribbed', NULL, NULL, '<p>Size -&nbsp;190 cm X 98 cm X 110 cm</p>\r\n\r\n<p>Colour - Steel&nbsp;</p>', '1690091998.jpg', '14160', '0', '0', NULL, 'OFIM1021NA', NULL, NULL, '15', 'In Stock', 'stainless-steel-sofa-cum-bed-ribbed', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 09:59:58', '2023-07-23 09:59:58'),
(115, '20', NULL, '3', 'GCT 40 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;-40 cm x 40 cm x 75 cm</p>\r\n\r\n<p>Color&nbsp;- White</p>', '1690092591.jpg', '4060', '0', '0', NULL, 'PPDEGCT40WH', NULL, NULL, '1', 'In Stock', 'gct-40-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:09:51', '2023-07-23 10:09:51'),
(116, '20', NULL, '3', 'GCT 35 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;-35 cm x 35 cm x 65 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey&nbsp;</p>', '1690093041.jpg', '2570', '0', '0', NULL, 'PPDEGCT35GR', NULL, NULL, '5', 'In Stock', 'gct-35-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:17:21', '2023-07-23 10:17:21'),
(117, '20', NULL, '3', 'GCT 35 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;-35 cm x 35 cm x 65 cm</p>\r\n\r\n<p>\\Color-&nbsp;White&nbsp;</p>', '1690093448.jpg', '2570', '0', '0', NULL, 'PPDEGCT35WH', NULL, NULL, '16', 'In Stock', 'gct-35-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:24:08', '2023-07-23 10:24:08'),
(118, '23', NULL, '3', 'Aluminium Garden Pergola', NULL, NULL, '<p>Size -&nbsp;360 cm x 270 cm x 210 cm</p>\r\n\r\n<p>&nbsp;</p>', '1690093529.jpg', '105000', '0', '0', NULL, 'GAIM1171NA', NULL, NULL, '2', 'In Stock', 'aluminium-garden-pergola', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:25:29', '2023-07-24 09:34:47'),
(119, '20', NULL, '3', 'GCT 50 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;-50 cm x 50 cm x 95 cm</p>\r\n\r\n<p>Color-White&nbsp;</p>', '1690093826.jpg', '6630', '0', '0', NULL, 'PPDEGCT50WH', NULL, NULL, '2', 'In Stock', 'gct-50-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:30:26', '2023-07-23 10:30:26'),
(120, '17', NULL, '3', 'Wrought Iron Bench', NULL, NULL, '<p>Size -&nbsp;127 cm x 79 cm x 58 cm</p>\r\n\r\n<p>&nbsp;(3 Seaters)</p>', '1690094205.jpg', '12999', '0', '0', NULL, 'OFIM1061NA', NULL, NULL, '4', 'In Stock', 'wrought-iron-bench', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:36:45', '2023-07-23 10:36:45'),
(121, '17', NULL, '3', 'Relaxable Chair', NULL, NULL, '<p>Size --93 x 56 cm</p>\r\n\r\n<p>&nbsp;</p>', '1690094475.jpg', '5000', '0', '0', NULL, 'OFIM1271NA', NULL, NULL, '15', 'In Stock', 'relaxable-chair', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:41:15', '2023-07-23 10:41:15'),
(122, '23', NULL, '3', 'Garden Umbrella', NULL, NULL, '<p>Size - 240 x 240&nbsp;</p>', '1690094721.jpg', '9500', '0', '0', NULL, 'IRAT232BL-1', NULL, NULL, '2', 'In Stock', 'garden-umbrella', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:45:21', '2023-07-23 10:45:21'),
(123, '20', NULL, '3', 'FV 30 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690095286.jpg', '1115', '0', '0', NULL, 'PPDEFV30 GR', NULL, NULL, '27', 'In Stock', 'fv-30-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:54:46', '2023-07-23 10:54:46'),
(124, '13', NULL, '3', 'Artificial Hanging Flower for Wall', NULL, NULL, '<p>Size : 122 cm x 20 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Brand&nbsp; &nbsp;: Green Mall</p>\r\n\r\n<p>Color &nbsp;&nbsp; : Purple &amp; White</p>\r\n\r\n<p>per stick&nbsp;</p>', '1690095293.jpg', '410', '0', '0', NULL, 'APIM1001MI', NULL, NULL, '5', 'In Stock', 'artificial-hanging-flower-for-wall', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:54:53', '2023-07-23 12:13:48'),
(125, '13', NULL, '3', 'Artificial Anthurium Flower', NULL, NULL, '<p>Size : 40 cm x 47 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>', '1690095399.jpg', '520', '0', '0', NULL, 'APIM631GR', NULL, NULL, '5', 'In Stock', 'artificial-anthurium-flower', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:56:39', '2023-07-23 10:56:39'),
(126, '13', NULL, '3', 'Artificial Calla Lily Flower', NULL, NULL, '<p>Size : 50 cm x 55 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>', '1690095483.jpg', '520', '0', '0', NULL, 'APIM641GR', NULL, NULL, '5', 'In Stock', 'artificial-calla-lily-flower', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 10:58:03', '2023-07-23 10:58:03'),
(127, '13', NULL, '3', 'Artificial Cherry Blossom Flower Stick', NULL, NULL, '<p>Size : 46 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>per stick&nbsp;</p>', '1690097885.jpg', '90', '0', '0', NULL, 'APIM10MI', NULL, NULL, '165', 'In Stock', 'artificial-cherry-blossom-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 11:38:05', '2023-07-23 11:38:05'),
(128, '13', NULL, '3', 'Artificial Flower Ball Stick', NULL, NULL, '<p>Size : 122 cm x 30 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Red &amp; Yellow</p>\r\n\r\n<p>per stick&nbsp;</p>', '1690098044.jpg', '90', '0', '0', NULL, 'APIM12MI', NULL, NULL, '80', 'In Stock', 'artificial-flower-ball-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 11:40:44', '2023-07-23 11:40:44'),
(129, '13', NULL, '3', 'Artificial Flower Hanging', NULL, NULL, '<p>Size : 81 cm x 30 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>per stick</p>', '1690098445.jpg', '400', '0', '0', NULL, 'APIM22MI', NULL, NULL, '10', 'In Stock', 'artificial-flower-hanging', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 11:47:25', '2023-07-23 11:47:25');
INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `added_by`, `name`, `title`, `description`, `short_description`, `featured_img`, `price`, `discount`, `delivary_charge`, `gallery`, `sku_code`, `video`, `website_link`, `no_in_stock`, `stock_status`, `slug`, `rating`, `tags`, `weight`, `length`, `width`, `height`, `status`, `features`, `color_added`, `qty_check`, `deleted_at`, `created_at`, `updated_at`) VALUES
(130, '13', NULL, '3', 'Artificial Flower Stick', NULL, NULL, '<p>Size : 61 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>per stick&nbsp;</p>', '1690098930.jpg', '20', '0', '0', NULL, 'APIM1004MI', NULL, NULL, '25', 'In Stock', 'artificial-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 11:55:30', '2023-07-23 12:05:37'),
(131, '13', NULL, '3', 'Artificial Flower Stick', NULL, NULL, '<p>Size : 61 cm x 61 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>per stick&nbsp;</p>', '1690099274.jpg', '335', '0', '0', NULL, 'APIM1007M', NULL, NULL, '25', 'In Stock', 'artificial-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 12:01:14', '2023-07-23 12:01:14'),
(132, '13', NULL, '3', 'Artificial Flower Stick', NULL, NULL, '<p>Size : 81 cm x 30 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>Per stick</p>', '1690099683.jpg', '110', '0', '0', NULL, 'APIM23MI', NULL, NULL, '200', 'In Stock', 'artificial-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 12:08:03', '2023-07-23 12:08:03'),
(133, '13', NULL, '3', 'Artificial Flower Stick', NULL, NULL, '<p>Size : 40 cm x 47 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>per stick</p>', '1690099927.jpg', '110', '0', '0', NULL, 'APIM16MI', NULL, NULL, '250', 'In Stock', 'artificial-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 12:12:07', '2023-07-23 12:12:07'),
(134, '13', NULL, '3', 'Artificial Long Flower Stick', NULL, NULL, '<p>Size : 122 cm</p>\r\n\r\n<p>Material : Fabric</p>\r\n\r\n<p>Color : Mix color</p>\r\n\r\n<p>Per stick</p>', '1690100367.jpg', '65', '0', '0', NULL, 'APIM18MI', NULL, NULL, '200', 'In Stock', 'artificial-long-flower-stick', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 12:19:27', '2023-07-23 12:19:27'),
(135, '13', NULL, '3', 'Orchid Artificial Flower 22 cm x 16 cm', NULL, NULL, '<p>Material : Artificial</p>\r\n\r\n<p>Brand&nbsp; &nbsp;: Green Mall</p>\r\n\r\n<p>Color &nbsp;&nbsp; : Green</p>', '1690100921.jpg', '310', '0', '0', NULL, 'APIM1261MI', NULL, NULL, '1', 'In Stock', 'orchid-artificial-flower-22-cm-x-16-cm', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 12:28:41', '2023-07-23 12:28:41'),
(136, '24', NULL, '3', 'Clay Ball Big', NULL, NULL, '<p>2 kg Packet</p>', '1690103912.jpg', '350', '0', '0', NULL, '2 kg Packet', NULL, NULL, '50', 'In Stock', 'clay-ball-big', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:18:32', '2023-07-23 13:18:32'),
(137, '24', NULL, '3', 'Cocopeat', NULL, NULL, '<p>&nbsp;&nbsp;1 Kg. Block</p>\r\n\r\n<p>&nbsp;</p>', '1690104317.jpg', '70', '0', '0', NULL, 'FMSR32NA', NULL, NULL, '500', 'In Stock', 'cocopeat', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:25:17', '2023-07-23 13:25:17'),
(138, '24', NULL, '3', 'Cocopeat Small Disc', NULL, NULL, '<p>Size - 40 mm&nbsp;</p>\r\n\r\n<p>&nbsp;10 pcs Set</p>\r\n\r\n<p>&nbsp;</p>', '1690104537.jpg', '150', '0', '0', NULL, 'FMSR34NA', NULL, NULL, '50', 'In Stock', 'cocopeat-small-disc', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:28:57', '2023-07-23 13:28:57'),
(139, '24', NULL, '3', 'Husk Chip Block', NULL, NULL, '<p>4 Kgs. Block</p>', '1690104750.jpg', '400', '0', '0', NULL, 'FMNA53NA', NULL, NULL, '100', 'In Stock', 'husk-chip-block', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:32:30', '2023-07-23 13:32:30'),
(140, '24', NULL, '3', 'Loose Perlite', NULL, NULL, '<p>per kg</p>', '1690104877.png', '190', '0', '0', NULL, 'FMKE1082NA', NULL, NULL, '100', 'In Stock', 'loose-perlite', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:34:37', '2023-07-23 13:34:37'),
(141, '24', NULL, '3', 'Loose Vermiculite', NULL, NULL, '<p>Per Kg</p>', '1690105000.jpg', '100', '0', '0', NULL, 'FMKE92NA', NULL, NULL, '50', 'In Stock', 'loose-vermiculite', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:36:40', '2023-07-23 13:36:40'),
(142, '24', NULL, '3', 'Moss  Grass', NULL, NULL, '<p>&nbsp;Per kg</p>', '1690105170.jpg', '350', '0', '0', NULL, 'FMNA122NA', NULL, NULL, '50', 'In Stock', 'moss-grass', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:39:30', '2023-07-23 13:39:30'),
(143, '24', NULL, '3', 'Perlite -', NULL, NULL, '<p>8 Kg. Bag</p>', '1690105365.png', '1500', '0', '0', NULL, 'FMKE1081NA', NULL, NULL, '100', 'In Stock', 'perlite', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:42:45', '2023-07-23 13:42:45'),
(144, '20', NULL, '3', 'FV 35 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 35 cm x 35 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey</p>', '1690105447.jpg', '1620', '0', '0', NULL, 'PPDEFV35GR', NULL, NULL, '8', 'In Stock', 'fv-35-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:44:08', '2023-07-23 13:44:08'),
(145, '24', NULL, '3', 'Ready Mixed Soil', NULL, NULL, '<p>25 kg Bag</p>', '1690105689.jpg', '225', '0', '0', NULL, 'FMGR61NA', NULL, NULL, '100', 'In Stock', 'ready-mixed-soil', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:48:09', '2023-07-23 13:48:09'),
(146, '24', NULL, '3', 'Soilrite Mix', NULL, NULL, '<p>2 Kgs. Packet</p>', '1690105821.jpg', '400', '0', '0', NULL, 'FMKE1002NA', NULL, NULL, '10', 'In Stock', 'soilrite-mix', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:50:21', '2023-07-23 13:50:21'),
(147, '20', NULL, '3', 'FV 40 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&ndash; 40 cm x 40 cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690105843.jpg', '2100', '0', '0', NULL, 'PPDEFV40GR', NULL, NULL, '2', 'In Stock', 'fv-40-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:50:43', '2023-07-23 13:50:43'),
(148, '24', NULL, '3', 'Vermicompost Normal – 25 kg Bag', NULL, NULL, '<p>25 kg Bag</p>', '1690105941.jpg', '250', '0', '0', NULL, 'FMPA13NA', NULL, NULL, '1000', 'In Stock', 'vermicompost-normal-25-kg-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-23 14:24:37', '2023-07-23 13:52:21', '2023-07-23 14:24:37'),
(149, '24', NULL, '3', 'Vermicompost Normal', NULL, NULL, '<p>25 kg Bag</p>', '1690106055.jpg', '250', '0', '0', NULL, 'FMPA13NA', NULL, NULL, '1000', 'In Stock', 'vermicompost-normal', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:54:16', '2023-07-23 13:54:16'),
(150, '24', NULL, '3', 'Vermiculite', NULL, NULL, '<p>10 Kgs. Bag</p>', '1690106384.jpg', '1250', '0', '0', NULL, 'FMKE91NA', NULL, NULL, '100', 'In Stock', 'vermiculite', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 13:59:44', '2023-07-23 13:59:44'),
(151, '18', NULL, '3', 'Digging Trowel', NULL, NULL, '<p>30 cm</p>', '1690106588.png', '400', '0', '0', NULL, 'HTIM1021SI', NULL, NULL, '20', 'In Stock', 'digging-trowel', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:03:08', '2023-07-23 14:03:08'),
(152, '20', NULL, '3', 'PT 500 – Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 50 cm x 20 cm x 25 cm</p>\r\n\r\n<p>Color&ndash; Grey &nbsp;</p>', '1690106682.jpg', '1640', '0', '0', NULL, 'PPDEPT500GR', NULL, NULL, '10', 'In Stock', 'pt-500-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:04:42', '2023-07-23 14:04:42'),
(153, '18', NULL, '3', 'Digging Trowel Big', NULL, NULL, '<p>Size - 27 Cm&nbsp;</p>', '1690107045.jpg', '100', '0', '0', NULL, 'HTKU1022NA', NULL, NULL, '10', 'In Stock', 'digging-trowel-big', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:10:45', '2023-07-23 14:10:45'),
(154, '20', NULL, '3', 'PT 500 – Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 50 cm x 20 cm x 25 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; White&nbsp;</p>', '1690107084.jpg', '1640', '0', '0', NULL, 'PPDEPT500WH', NULL, NULL, '6', 'In Stock', 'pt-500-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:11:24', '2023-07-23 14:11:24'),
(155, '18', NULL, '3', 'Hand Cultivator', NULL, NULL, NULL, '1690107313.jpg', '110', '0', '0', NULL, 'HTKU1002NA', NULL, NULL, '20', 'In Stock', 'hand-cultivator', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:15:13', '2023-07-23 14:15:13'),
(156, '18', NULL, '3', 'Hand Cultivator', NULL, NULL, '<p>30 cm</p>', '1690107416.jpg', '400', '0', '0', NULL, 'HTIM1001SI', NULL, NULL, '20', 'In Stock', 'hand-cultivator', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-23 14:22:29', '2023-07-23 14:16:56', '2023-07-23 14:22:29'),
(157, '18', NULL, '3', 'Hand Cultivator', NULL, NULL, '<p>30 cm</p>', '1690107432.jpg', '400', '0', '0', NULL, 'HTIM1001SI', NULL, NULL, '10', 'In Stock', 'hand-cultivator', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:17:12', '2023-07-23 14:17:12'),
(158, '20', NULL, '3', 'PT 600 – Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&ndash; 61 cm x 25 cm x 37 cm</p>\r\n\r\n<p>Color&ndash; Grey&nbsp;</p>', '1690107535.jpg', '2360', '0', '0', NULL, 'PPDEPT600GR', NULL, NULL, '8', 'In Stock', 'pt-600-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:18:55', '2023-07-23 14:18:55'),
(159, '18', NULL, '3', 'Garden Tools- Park Tools', NULL, NULL, '<p>3 Pcs Set</p>\r\n\r\n<p>Size - 26 Cm</p>', '1690107697.png', '280', '0', '0', NULL, 'HTIM1061MI', NULL, NULL, '15', 'In Stock', 'garden-tools-park-tools', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:21:37', '2023-07-23 14:21:37'),
(160, '20', NULL, '3', 'PT 600 – Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 61 cm x 25 cm x 37 cm</p>\r\n\r\n<p>&nbsp;Color&nbsp;&nbsp;&ndash; White</p>\r\n\r\n<p>&nbsp;</p>', '1690107846.jpg', '2360', '0', '0', NULL, 'PPDEPT600WH', NULL, NULL, '6', 'In Stock', 'pt-600-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:24:06', '2023-07-23 14:24:06'),
(161, '20', NULL, '3', 'PT-750 -Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 75 cm X 30 cm X 46 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey</p>', '1690108212.jpg', '3900', '0', '0', NULL, 'PPDEPT750GR', NULL, NULL, '9', 'In Stock', 'pt-750-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:30:12', '2023-07-23 14:30:12'),
(162, '18', NULL, '3', 'Hedge Shear', NULL, NULL, '<p>75 cm</p>', '1690108216.jpg', '625', '0', '0', NULL, 'HTKU1080NA', NULL, NULL, NULL, 'Out of Stock', 'hedge-shear', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:30:16', '2023-07-23 14:30:16'),
(163, '18', NULL, '3', 'PREM Khurpa', NULL, NULL, '<p>&nbsp;2&Prime; (SPSH-2000)</p>', '1690108395.png', '190', '0', '0', NULL, 'HTFA592NA', NULL, NULL, '15', 'In Stock', 'prem-khurpa', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:33:15', '2023-07-23 14:33:15'),
(164, '18', NULL, '3', 'PREM Khurpa', NULL, NULL, '<p>3&Prime; (SPSH-3000)</p>', '1690108575.png', '210', '0', '0', NULL, 'HTFA593NA', NULL, NULL, '10', 'In Stock', 'prem-khurpa', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:36:15', '2023-07-23 14:36:15'),
(165, '20', NULL, '3', 'PT 750 – Decora Tall Rectangular Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 75 cm X 30 cm X 46 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; White &nbsp;</p>', '1690108605.jpg', '3900', '0', '0', NULL, 'PPDEPT750WH', NULL, NULL, '7', 'In Stock', 'pt-750-decora-tall-rectangular-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:36:45', '2023-07-23 14:36:45'),
(166, '18', NULL, '3', 'Garden Roller-', NULL, NULL, '<p>&nbsp;50 cm x 42 cm</p>', '1690108794.jpg', '6750', '0', '0', NULL, 'GIIM251BL', NULL, NULL, '10', 'In Stock', 'garden-roller', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-23 15:05:14', '2023-07-23 14:39:54', '2023-07-23 15:05:14'),
(167, '18', NULL, '3', 'Garden Roller-', NULL, NULL, '<p>&nbsp;50 cm x 42 cm</p>\r\n\r\n<p>Weight : 13 Kgs</p>', '1690109200.jpg', '6750', '0', '0', NULL, 'GIIM251BL', NULL, NULL, '10', 'In Stock', 'garden-roller', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 14:46:40', '2023-07-23 14:46:40'),
(168, '18', NULL, '3', 'Garden Roller-', NULL, NULL, '<p>&nbsp;50 cm x 42 cm</p>\r\n\r\n<p>Weight : 13 Kgs</p>', '1690109202.jpg', '6750', '0', '0', NULL, 'GIIM251BL', NULL, NULL, '10', 'In Stock', 'garden-roller', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-23 15:05:01', '2023-07-23 14:46:42', '2023-07-23 15:05:01'),
(169, '20', NULL, '3', 'ST 50 – Decora Short Tropic Pot', NULL, NULL, '<p>Size-50 cm x 20 cm x 20 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690110146.jpg', '1080', '0', '0', NULL, 'PPDEST50GR', NULL, NULL, '62', 'In Stock', 'st-50-decora-short-tropic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:02:26', '2023-07-23 15:02:26'),
(170, '18', NULL, '3', 'Garden Trolley', NULL, NULL, '<p>Size - 115 cm x 50 cm x 47 cm</p>\r\n\r\n<p>Steel Chasis / PVC bucket 4 Pneumatic tires, Long handle enables the cart to b attached and towed by other vehicles.</p>\r\n\r\n<p>Weight Capacity: 200 kgs.</p>', '1690110468.jpg', '7500', '0', '0', NULL, 'GIIM261BL', NULL, NULL, '10', 'In Stock', 'garden-trolley', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:07:48', '2023-07-23 15:07:48'),
(171, '20', NULL, '3', 'ST 50 – Decora Flora Square Pot', NULL, NULL, '<p>Size-50 cm x 20 cm x 20 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690110511.jpg', '1080', '0', '0', NULL, 'PPDEST50WH', NULL, NULL, '64', 'In Stock', 'st-50-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:08:31', '2023-07-23 15:08:31'),
(172, '18', NULL, '3', 'Single Wheel Barrow', NULL, NULL, '<p>65 Ltrs</p>\r\n\r\n<p>Colour &ndash; Yellow</p>', '1690110622.jpg', '3750', '0', '0', NULL, 'GIIMWBYE', NULL, NULL, '20', 'In Stock', 'single-wheel-barrow', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:10:22', '2023-07-23 15:10:22'),
(173, '18', NULL, '3', 'Double Wheel Barrow', NULL, NULL, '<p>90 Ltrs.&nbsp;</p>\r\n\r\n<p>Colour &ndash; Black</p>', '1690110765.jpg', '3675', '0', '0', NULL, 'GIIMWBBL', NULL, NULL, '8', 'In Stock', 'double-wheel-barrow', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:12:45', '2023-07-23 15:12:45'),
(174, '20', NULL, '3', 'ST 60 – Decora Short Tropic Pot', NULL, NULL, '<p>Size-60 cm x 25 cm x 25 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690110923.jpg', '1770', '0', '0', NULL, 'PPDEST60GR', NULL, NULL, '26', 'In Stock', 'st-60-decora-short-tropic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:15:23', '2023-07-23 15:15:23'),
(175, '20', NULL, '3', 'ST 60 – Decora Flora Square Pot', NULL, NULL, '<p>Size-60 cm x 25 cm x 25 cm</p>\r\n\r\n<p>Colour -&nbsp;White</p>', '1690111220.jpg', '1770', '0', '0', NULL, 'PPDEST60WH', NULL, NULL, '26', 'In Stock', 'st-60-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:20:20', '2023-07-23 15:20:20'),
(176, '25', NULL, '3', 'Drain Cell', NULL, NULL, '<p>Colour&nbsp;&ndash; Black</p>\r\n\r\n<p>Size - 500mm x 500mm x 30mm</p>\r\n\r\n<p>Unit of Measures: Sq.Ft.</p>\r\n\r\n<p><strong>Drain cell</strong>&nbsp;is a structural&nbsp;<strong>drainage</strong>&nbsp;module manufactured from 100 % recycled poly proplene designed for sub-surface&nbsp;<strong>drainage</strong>&nbsp;where a high capture and discharge rate of water and high compressive strength is required.</p>\r\n\r\n<p>&nbsp;</p>', '1690111705.jpg', '65', '0', '0', NULL, 'LVIM1002ML', NULL, NULL, '2500', 'In Stock', 'drain-cell', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:28:25', '2023-07-23 15:28:25'),
(177, '20', NULL, '3', 'ST 75 – Decora Flora Square Pot', NULL, NULL, '<p>Size&nbsp;-75 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690112010.jpg', '3600', '0', '0', NULL, 'PPDEST75GR', NULL, NULL, '14', 'In Stock', 'st-75-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:33:30', '2023-07-23 15:33:30'),
(178, '20', NULL, '3', 'TCB 50 – Decora Round Bowl Pot', NULL, NULL, '<p>Size-20 cm x 50 cm</p>\r\n\r\n<p>Color-Grey</p>', '1690112692.jpg', '1020', '0', '0', NULL, 'PPDETCB50GR', NULL, NULL, '4', 'In Stock', 'tcb-50-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:44:52', '2023-07-23 15:44:52'),
(179, '20', NULL, '3', 'TCB 60 – Decora Round Bowl Pot', NULL, NULL, '<p>Size-27 cm x 60 &nbsp;cm&nbsp;</p>\r\n\r\n<p>Colour-Grey</p>', '1690113089.jpg', '1570', '0', '0', NULL, 'PPDETCB60GR', NULL, NULL, '5', 'In Stock', 'tcb-60-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 15:51:29', '2023-07-23 15:51:29'),
(180, '20', NULL, '3', 'TCB 70 – Decora Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;- 30 cm x 74 cm</p>\r\n\r\n<p>Color-White&nbsp;</p>', '1690113733.jpg', '2250', '0', '0', NULL, 'PPDETCB70WH', NULL, NULL, '2', 'In Stock', 'tcb-70-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 16:02:13', '2023-07-23 16:02:13'),
(181, '20', NULL, '3', 'FLT 600 – Decora Flora Trough Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 23 x 23 x 60 cm</p>\r\n\r\n<p>Color&ndash; Grey</p>', '1690114447.png', '1910', '0', '0', NULL, 'PPDEFLT600GR', NULL, NULL, '20', 'In Stock', 'flt-600-decora-flora-trough-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 16:14:07', '2023-07-23 16:14:07'),
(182, '20', NULL, '3', 'FLT 750 – Decora Flora Trough Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 x 30 x 75 cm</p>\r\n\r\n<p>&nbsp;Color&nbsp;&ndash; Grey</p>', '1690114721.png', '2830', '0', '0', NULL, 'PPDEFLT750GR', NULL, NULL, '4', 'In Stock', 'flt-750-decora-flora-trough-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 16:18:41', '2023-07-23 16:18:41'),
(183, '20', NULL, '3', 'OP 50 – Decora Ornate Pot', NULL, NULL, '<p>Size&ndash; 33 cm x 50 cm</p>\r\n\r\n<p>Color&nbsp;&ndash; Grey&nbsp;</p>', '1690115410.jpg', '1610', '0', '0', NULL, 'PPDEOP50GR', NULL, NULL, '3', 'In Stock', 'op-50-decora-ornate-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 16:30:10', '2023-07-23 16:30:10'),
(184, '20', NULL, '3', 'OP 65 – Decora Ornate Pot', NULL, NULL, '<p>Size&ndash; 40 cm x 62 cm</p>\r\n\r\n<p>Colour&ndash; Grey</p>', '1690115756.jpg', '2420', '0', '0', NULL, 'PPDEOP65GR', NULL, NULL, '3', 'In Stock', 'op-65-decora-ornate-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-23 16:35:56', '2023-07-23 16:35:56'),
(185, '20', NULL, '3', 'GC 30 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm x 25 cm</p>\r\n\r\n<p>&nbsp;Cloro - Grey</p>', '1690251723.jpg', '800', '0', '0', NULL, 'PPDEGC30GR', NULL, NULL, '21', 'In Stock', 'gc-30-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:22:03', '2023-07-25 06:22:03'),
(186, '20', NULL, '3', 'GC 30 – Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm x 25 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-White&nbsp;</p>', '1690252031.jpg', '800', '0', '0', NULL, 'PPDEGC30WH', NULL, NULL, '19', 'In Stock', 'gc-30-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:27:11', '2023-07-25 06:27:11'),
(187, '20', NULL, '3', 'GC 35 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 35 cm x 35 cm x 32 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;- Grey</p>', '1690252286.jpg', '1230', '0', '0', NULL, 'PPDEGC35GR', NULL, NULL, '25', 'In Stock', 'gc-35-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:31:26', '2023-07-25 06:31:26'),
(188, '20', NULL, '3', 'GC 35 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 35 cm x 35 cm x 32 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;- White&nbsp;</p>', '1690252545.jpg', '1230', '0', '0', NULL, 'PPDEGC35WH', NULL, NULL, '27', 'In Stock', 'gc-35-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:35:45', '2023-07-25 06:35:45'),
(189, '20', NULL, '3', 'GC 40 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 40 cm x 40 c 3m x7 cm</p>\r\n\r\n<p>Color&nbsp;-Grey</p>', '1690252797.jpg', '1840', '0', '0', NULL, 'PPDEGC40GR', NULL, NULL, '14', 'In Stock', 'gc-40-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:39:57', '2023-07-25 06:39:57'),
(190, '20', NULL, '3', 'GC 40 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 40 cm x 40 cm x 37 cm</p>\r\n\r\n<p>&nbsp;Color&nbsp;-White</p>', '1690253069.jpg', '1840', '0', '0', NULL, 'PPDEGC40WH', NULL, NULL, '8', 'In Stock', 'gc-40-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:44:29', '2023-07-25 06:44:29'),
(191, '20', NULL, '3', 'GC 45 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 45 cm x 45 cm x 42 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;- Grey&nbsp;</p>', '1690253436.jpg', '2770', '0', '0', NULL, 'PPDEGC45GR', NULL, NULL, '17', 'In Stock', 'gc-45-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:50:36', '2023-07-25 06:50:36'),
(192, '20', NULL, '3', 'GC 45 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;- 45 cm x 45 cm x 42 cm</p>\r\n\r\n<p>Color&nbsp;-White</p>', '1690253678.jpg', '2770', '0', '0', NULL, 'PPDEGC45WH', NULL, NULL, '55', 'In Stock', 'gc-45-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 08:18:49', '2023-07-25 06:54:38', '2023-07-27 08:18:49'),
(193, '20', NULL, '3', 'GC 45 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;- 45 cm x 45 cm x 42 cm</p>\r\n\r\n<p>Color&nbsp;-White</p>', '1690253683.jpg', '2770', '0', '0', NULL, 'PPDEGC45WH', NULL, NULL, '55', 'In Stock', 'gc-45-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:54:43', '2023-07-25 06:54:43'),
(194, '20', NULL, '3', 'GC 53 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 53 cm x 53 cm x 47 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;-Grey</p>', '1690253981.jpg', '3710', '0', '0', NULL, 'PPDEGC53GR', NULL, NULL, '11', 'In Stock', 'gc-53-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 06:59:41', '2023-07-25 06:59:41'),
(195, '20', NULL, '3', 'GC 53 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 53 cm x 53 cm x 47 cm</p>\r\n\r\n<p>Color&nbsp;-White&nbsp;</p>', '1690254246.jpg', '3710', '0', '0', NULL, 'PPDEGC53WH', NULL, NULL, '12', 'In Stock', 'gc-53-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 07:04:06', '2023-07-25 07:04:06'),
(196, '20', NULL, '3', 'LT 30 -Decora Large Tropic Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 76 cm x 46 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-White</p>', '1690254933.jpg', '6500', '0', '0', NULL, 'PPDEFLT30WH-', NULL, NULL, '2', 'In Stock', 'lt-30-decora-large-tropic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 07:15:33', '2023-07-25 07:15:33'),
(197, '20', NULL, '3', 'LT 36 -Decora Large Tropic Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 91 cm x 46 cm x 46 cm</p>\r\n\r\n<p>Colour -Grey</p>', '1690255328.jpg', '10600', '0', '0', NULL, 'PPDEFLT36GR', NULL, NULL, '1', 'In Stock', 'lt-36-decora-large-tropic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 07:22:08', '2023-07-25 07:22:08'),
(198, '26', NULL, '3', 'PVC Pot- Beauty Tray', NULL, NULL, '<p>Size&nbsp;-14.5 cm x 9.5 cm x 6 cm</p>\r\n\r\n<p>Colour&nbsp;- Mix color</p>', '1690264531.jpg', '55', '0', '0', NULL, 'PPATAP777MI', NULL, NULL, '100', 'In Stock', 'pvc-pot-beauty-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '<p>-5.31 Mil Thick Mylar<br />\r\n-Matte Finish<br />\r\n-Overlap Child-Resistant Zipper.<br />\r\n-Smell proof, food grade materials.<br />\r\n-Tamper evident tear notch.<br />\r\n-Heat-sealable.<br />\r\n-Expandable bottom(Gusset)<br />\r\n-Fits: 3.5g(1/8th)<br />\r\n-Size: 4&Prime;W &times; 5&Prime;H &times;&nbsp;2&Prime;D<br />\r\n-Weight:&nbsp;6g</p>', NULL, NULL, NULL, '2023-07-25 09:55:31', '2023-11-02 01:02:31'),
(199, '26', NULL, '3', 'PVC Blossom Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 10 cm X 8 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Multicolor</p>', '1690264945.jpg', '16', '0', '0', NULL, 'PPATAP691MI', NULL, NULL, '200', 'In Stock', 'pvc-blossom-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:02:25', '2023-07-25 10:02:25'),
(200, '26', NULL, '3', 'PVC Blossom Pot  2', NULL, NULL, '<p>Size&nbsp;&ndash; 14 cm X 10 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690265401.jpg', '27', '0', '0', NULL, 'PPATAP692MI', NULL, NULL, '200', 'In Stock', 'pvc-blossom-pot-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:10:01', '2023-07-25 10:10:01'),
(201, '26', NULL, '3', 'PVC Blossom Pot 3', NULL, NULL, '<p>Size&nbsp;&nbsp;-18 cm X 11 cm</p>\r\n\r\n<p>Colour - Multicolor</p>', '1690265710.jpg', '72', '0', '0', NULL, 'PPATAP693MI', NULL, NULL, '150', 'In Stock', 'pvc-blossom-pot-3', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:15:10', '2023-07-25 10:15:10'),
(202, '26', NULL, '3', 'PVC Blossom Pot -4', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 23 cm x 32 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Multicolor</p>', '1690266061.jpg', '115', '0', '0', NULL, 'PPATAP697PPR', NULL, NULL, '150', 'In Stock', 'pvc-blossom-pot-4', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:21:01', '2023-07-25 10:21:01'),
(203, '26', NULL, '3', 'PVC Blossom Pot-4', NULL, NULL, '<p>Size&nbsp;-33 cm X 23 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690266549.jpg', '130', '0', '0', NULL, 'PPATAP695PR', NULL, NULL, '120', 'In Stock', 'pvc-blossom-pot-4', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:29:09', '2023-07-25 10:29:09'),
(204, '26', NULL, '3', 'PVC Blossom Pot  – 6', NULL, NULL, '<p>Size&nbsp;&ndash; 41 cm X 25 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Multicolor</p>', '1690267009.jpg', '250', '0', '0', NULL, 'PPATAP696PR', NULL, NULL, '50', 'In Stock', 'pvc-blossom-pot-6', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:36:49', '2023-07-25 10:36:49'),
(205, '26', NULL, '3', 'PVC Cone Pot (AP 700)', NULL, NULL, '<p>Size&nbsp;-13 cm x 13 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690267377.jpg', '40', '0', '0', NULL, 'PPATAP700MI', NULL, NULL, '200', 'In Stock', 'pvc-cone-pot-ap-700', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:42:57', '2023-07-25 10:42:57'),
(206, '26', NULL, '3', 'PVC Cone Pot (AP 700)', NULL, NULL, '<p>Size&nbsp;-13 cm x 13 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690267926.jpg', '40', '0', '0', NULL, 'PPATAP700MI', NULL, NULL, '200', 'In Stock', 'pvc-cone-pot-ap-700', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-25 11:44:08', '2023-07-25 10:52:06', '2023-07-25 11:44:08'),
(207, '26', NULL, '3', 'PVC Double Hook Pot', NULL, NULL, '<p>Size&nbsp;-26 cm x 34 cm</p>\r\n\r\n<p>Colour Multicolour</p>', '1690268289.jpg', '200', '0', '0', NULL, 'PPATAP794PPR', NULL, NULL, '100', 'In Stock', 'pvc-double-hook-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 10:58:09', '2023-07-25 10:58:09'),
(208, '26', NULL, '3', 'PVC Fence Pot', NULL, NULL, '<p>Size&nbsp;-25 cm x 28 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;&ndash; Multicolor</p>', '1690270189.jpg', '150', '0', '0', NULL, 'PPATAP933MI', NULL, NULL, '100', 'In Stock', 'pvc-fence-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 11:29:49', '2023-07-25 11:29:49'),
(209, '26', NULL, '3', 'PVC Garnet Pot', NULL, NULL, '<p>Size&nbsp;- 19 cm x 23.5 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;&ndash; Mix color</p>', '1690270533.jpg', '60', '0', '0', NULL, 'PPATAP785PMI', NULL, NULL, '100', 'In Stock', 'pvc-garnet-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 11:35:33', '2023-07-25 11:35:33'),
(210, '26', NULL, '3', 'Juhi Hanging Pot', NULL, NULL, '<p>Size&nbsp;- 15 cm x 20 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690270874.jpg', '55', '0', '0', NULL, 'PPATAP116MI', NULL, NULL, '150', 'In Stock', 'juhi-hanging-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 11:41:14', '2023-07-25 11:41:14'),
(211, '26', NULL, '3', 'PVC Juhi Pot (AP 773)', NULL, NULL, '<p>Size&nbsp;&ndash; 10 cm x 11 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Multicolor</p>', '1690272032.jpg', '16', '0', '0', NULL, 'PPATAP773MI', NULL, NULL, '175', 'In Stock', 'pvc-juhi-pot-ap-773', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 12:00:32', '2023-07-25 12:00:32'),
(212, '26', NULL, '3', 'PVC Juhi Pot (AP 775)', NULL, NULL, '<p>Size&nbsp;&nbsp;-13 cm x 15 cm</p>\r\n\r\n<p>Colour Multicolour</p>', '1690275914.jpg', '65', '0', '0', NULL, 'PPATAP775SMI', NULL, NULL, '150', 'In Stock', 'pvc-juhi-pot-ap-775', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 13:05:14', '2023-07-25 13:05:14'),
(213, '26', NULL, '3', 'PVC Juhi Pot (AP 775)', NULL, NULL, '<p>Size&nbsp;&nbsp;-13 cm x 15 cm</p>\r\n\r\n<p>Colour Multicolour</p>', '1690277094.jpg', '65', '0', '0', NULL, 'PPATAP775SMI', NULL, NULL, '150', 'In Stock', 'pvc-juhi-pot-ap-775', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 13:24:54', '2023-07-25 13:24:54'),
(214, '26', NULL, '3', 'Majestic Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 37 cm X 39 cm</p>\r\n\r\n<p>Colour Multicolor</p>', '1690282079.jpg', '650', '0', '0', NULL, 'PPATAP829PMI', NULL, NULL, '50', 'In Stock', 'majestic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 14:47:59', '2023-07-25 14:47:59'),
(215, '26', NULL, '3', 'Hook pot premium', NULL, NULL, '<p>Size- 9cm x 9 cm x 11.5 cm</p>\r\n\r\n<p>Colour - Multicolor</p>', '1690285481.jpg', '105', '0', '0', NULL, 'PPATAP791PMI', NULL, NULL, '100', 'In Stock', 'hook-pot-premium', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 15:44:41', '2023-07-25 15:44:41'),
(216, '26', NULL, '3', 'Multi colour Hook pot Super', NULL, NULL, '<p>Size - 9 cm x 9 cm x 11.5 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690285939.jpg', '90', '0', '0', NULL, 'PPATAP791SMI', NULL, NULL, '100', 'In Stock', 'multi-colour-hook-pot-super', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 15:52:19', '2023-07-25 15:52:19'),
(217, '26', NULL, '3', 'Lily Hook Pot', NULL, NULL, '<p>Size&nbsp;-26 cm x 18 cm</p>\r\n\r\n<p>Colour -Multicolor</p>', '1690286495.jpg', '65', '0', '0', NULL, 'PPATAP792PMI', NULL, NULL, '150', 'In Stock', 'lily-hook-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 16:01:35', '2023-07-25 16:01:35'),
(218, '26', NULL, '3', 'Nest Hanging Pot', NULL, NULL, '<p>Size 50 cm x14 cm</p>\r\n\r\n<p>Colour- Multicolour</p>', '1690287654.jpg', '95', '0', '0', NULL, 'PPATAP150PMI', NULL, NULL, '150', 'In Stock', 'nest-hanging-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 16:20:54', '2023-07-25 16:20:54'),
(219, '26', NULL, '3', 'Onyx Pot (AP 783)', NULL, NULL, '<p>Size&nbsp;-13 cm x 11.5 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690288150.jpg', '50', '0', '0', NULL, 'PPATAP783MI', NULL, NULL, '200', 'In Stock', 'onyx-pot-ap-783', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 16:29:10', '2023-07-25 16:29:10'),
(220, '26', NULL, '3', 'Peony Hanging Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 10 cm x 18 cm&nbsp;</p>\r\n\r\n<p>Colour -Mix color</p>', '1690289494.jpg', '65', '0', '0', NULL, 'PPATAP640MI', NULL, NULL, '200', 'In Stock', 'peony-hanging-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 16:51:34', '2023-07-25 16:51:34'),
(221, '26', NULL, '3', 'Plastic Juhi Pot', NULL, NULL, '<p>Size-&nbsp;16 cm x 20 cm</p>\r\n\r\n<p>Colour- Multicolor</p>', '1690289858.jpg', '75', '0', '0', NULL, 'PPATAP776PMI', NULL, NULL, '225', 'In Stock', 'plastic-juhi-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-25 16:57:38', '2023-07-25 16:57:38'),
(222, '26', NULL, '3', 'Rock Pot – (AP-822 P)', NULL, NULL, '<p>Size&nbsp;&ndash; 31 cm x 34 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690337489.jpg', '520', '0', '0', NULL, 'PPATAP822PMI', NULL, NULL, '50', 'In Stock', 'rock-pot-ap-822-p', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 06:11:29', '2023-07-26 06:11:29'),
(223, '26', NULL, '3', 'Ruby Square Pot (AP 741)', NULL, NULL, '<p>Size&nbsp;-10 cm x 10 cm</p>\r\n\r\n<p>Colour&nbsp;-Multicolor</p>', '1690337961.jpg', '40', '0', '0', NULL, 'PPATAP741MI', NULL, NULL, '250', 'In Stock', 'ruby-square-pot-ap-741', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 06:19:21', '2023-07-26 06:19:21'),
(224, '26', NULL, '3', 'Solitaire Pot -AP-661', NULL, NULL, '<p>Size&nbsp;-13 cm x 10 cm</p>\r\n\r\n<p>Colour&nbsp;- Mix color</p>', '1690340417.jpg', '25', '0', '0', NULL, 'PPATAP661MI', NULL, NULL, '225', 'In Stock', 'solitaire-pot-ap-661', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 07:00:17', '2023-07-26 07:00:17'),
(225, '26', NULL, '3', 'Star Pot ( AP - 676)', NULL, NULL, '<p>Size- 10 cm x 10 cm</p>\r\n\r\n<p>Colour&nbsp;- Mix color</p>\r\n\r\n<p>&nbsp;</p>', '1690340740.jpg', '20', '0', '0', NULL, 'PPATAP676MI', NULL, NULL, '250', 'In Stock', 'star-pot-ap-676', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 07:05:40', '2023-07-26 07:05:40'),
(226, '26', NULL, '3', 'Vertical Bio Wall Panel Set', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 47 cm X 15 cm</p>\r\n\r\n<p>Colour -Green</p>', '1690347178.jpg', '135', '0', '0', NULL, 'LVATAP645GR', NULL, NULL, '400', 'In Stock', 'vertical-bio-wall-panel-set', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 08:52:58', '2023-07-26 08:52:58'),
(227, '26', NULL, '3', 'Vertical Bio Wall Panel Set  – Green', NULL, NULL, '<p>Size&nbsp;&ndash; 47 cm X 15 cm</p>\r\n\r\n<p>Colour - Black</p>', '1690347509.jpg', '125', '0', '0', NULL, 'LVATAP645BL', NULL, NULL, '500', 'In Stock', 'vertical-bio-wall-panel-set-green', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 17:16:08', '2023-07-26 08:58:29', '2023-07-27 17:16:08'),
(228, '20', NULL, '3', 'BR 15 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-46 cm x 38 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690348107.jpg', '1500', '0', '0', NULL, 'PPFOBR15GR', NULL, NULL, '50', 'In Stock', 'br-15-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:08:27', '2023-07-26 09:08:27'),
(229, '20', NULL, '3', 'BR 15 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-46 ctm x 38 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690348491.jpg', '1500', '0', '0', NULL, 'PPFOBR15WH', NULL, NULL, '50', 'In Stock', 'br-15-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:14:51', '2023-07-26 09:14:51'),
(230, '20', NULL, '3', 'BR 18 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-53 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690348893.jpg', '1850', '0', '0', NULL, 'PPFOBR18GO', NULL, NULL, '50', 'In Stock', 'br-18-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:21:33', '2023-07-26 09:21:33'),
(231, '20', NULL, '3', 'BR 18 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-53 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690349299.jpg', '1850', '0', '0', NULL, 'PPFOBR18GR', NULL, NULL, '50', 'In Stock', 'br-18-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:28:19', '2023-07-26 09:28:19'),
(232, '20', NULL, '3', 'BR 18 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-53 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690350340.jpg', '1850', '0', '0', NULL, 'PPFOBR18WH', NULL, NULL, '50', 'In Stock', 'br-18-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:45:40', '2023-07-26 09:45:40'),
(233, '20', NULL, '3', 'BT – Fox Window Pot', NULL, NULL, '<p>Size&nbsp;-66 cm x 30 cm x 33 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690350753.jpg', '1830', '0', '0', NULL, 'PPFOBTWH', NULL, NULL, '50', 'In Stock', 'bt-fox-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 09:52:33', '2023-07-26 09:52:33'),
(234, '20', NULL, '3', 'CABI – Fox Window Planter -White', NULL, NULL, '<p>Size&nbsp;-41 cm x 14 cm x14 cm</p>\r\n\r\n<p>Colour White</p>', '1690352239.jpg', '495', '0', '0', NULL, 'PPFOCABIWH', NULL, NULL, '50', 'In Stock', 'cabi-fox-window-planter-white', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 10:17:19', '2023-07-26 10:17:19'),
(235, '20', NULL, '3', 'Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-41 cm x 41 cm x 41 cm</p>\r\n\r\n<p>Size&nbsp;-Golden</p>', '1690352718.jpg', '1845', '0', '0', NULL, 'PPFOGK16GO', NULL, NULL, '50', 'In Stock', 'fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 10:25:18', '2023-07-26 10:25:18'),
(236, '20', NULL, '3', 'GK 12 – Fox Square Pot', NULL, NULL, '<p>Size --30 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Colour-Golden</p>', '1690353840.jpg', '840', '0', '0', NULL, 'PPFOGK12GO', NULL, NULL, '50', 'In Stock', 'gk-12-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 10:44:00', '2023-07-26 10:44:00'),
(237, '20', NULL, '3', 'GK 12 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-30 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690354104.jpg', '840', '0', '0', NULL, 'PPFOGK12GR', NULL, NULL, '50', 'In Stock', 'gk-12-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 10:48:24', '2023-07-26 10:48:24'),
(238, '20', NULL, '3', 'GK 12 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-30 cm x 30 cm 0x 30cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690354604.jpg', '840', '0', '0', NULL, 'PPFOGK12WH', NULL, NULL, '50', 'In Stock', 'gk-12-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 10:56:44', '2023-07-26 10:56:44'),
(239, '20', NULL, '3', 'GK 14 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-36 cm x 36 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690354929.jpg', '1575', '0', '0', NULL, 'PPFOGK14GO', NULL, NULL, '50', 'In Stock', 'gk-14-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:02:09', '2023-07-26 11:02:09'),
(240, '20', NULL, '3', 'GK 14 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-36 cm x 36 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690355301.jpg', '1575', '0', '0', NULL, 'PPFOGK14GR', NULL, NULL, '50', 'In Stock', 'gk-14-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:08:21', '2023-07-26 11:08:21'),
(241, '20', NULL, '3', 'GK 14 -Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-36 cm x 36 cm x 36 cm</p>\r\n\r\n<p>Color&nbsp;-White</p>', '1690355953.jpg', '1575', '0', '0', NULL, 'PPFOGK14WH', NULL, NULL, '50', 'In Stock', 'gk-14-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:19:13', '2023-07-26 11:19:13'),
(242, '20', NULL, '3', 'GK 16 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-41 cm x 41 cm x 41 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690356314.jpg', '1845', '0', '0', NULL, 'PPFOGK16GR', NULL, NULL, '50', 'In Stock', 'gk-16-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:25:14', '2023-07-26 11:25:14'),
(243, '20', NULL, '3', 'GK 16 – Fox Square Pot', NULL, NULL, '<p>Size&nbsp;-41 cm x 41 cm x 41 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690356916.jpg', '1845', '0', '0', NULL, 'PPFOGK16WH', NULL, NULL, '50', 'In Stock', 'gk-16-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:35:16', '2023-07-26 11:35:16'),
(244, '20', NULL, '3', 'GK 16 – Fox Square Pot-', NULL, NULL, '<p>Size&nbsp;-41 cm x 41 cm x 41 cm</p>\r\n\r\n<p>Colour Golden</p>', '1690357462.jpg', '1845', '0', '0', NULL, 'PPFOGK16GO', NULL, NULL, '50', 'In Stock', 'gk-16-fox-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 11:44:22', '2023-07-26 11:44:22'),
(245, '20', NULL, '3', 'GT 24 – Fox Window Pot', NULL, NULL, '<p>Size&nbsp;-61 cm x 28 cm x 28 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690368391.jpg', '1830', '0', '0', NULL, 'PPFOGT24GO', NULL, NULL, '30', 'In Stock', 'gt-24-fox-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 14:46:31', '2023-07-26 14:46:31'),
(246, '20', NULL, '3', 'GT 36 – Fox Window Pot', NULL, NULL, '<p>Size&nbsp;-91 cm x 33 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690368759.jpg', '4990', '0', '0', NULL, 'PPFOGT36GO', NULL, NULL, '25', 'In Stock', 'gt-36-fox-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 14:52:39', '2023-07-26 14:52:39'),
(247, '20', NULL, '3', 'GT 36 – Fox Window Pot', NULL, NULL, '<p>Size&nbsp;-91 cm x 33 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690369118.jpg', '3395', '0', '0', NULL, 'PPFOGT36GR', NULL, NULL, '25', 'In Stock', 'gt-36-fox-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 14:58:38', '2023-07-26 14:58:38'),
(248, '20', NULL, '3', 'GT 36 – Fox Window Pot', NULL, NULL, '<p>Size-91 cm x 33 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690369504.jpg', '3395', '0', '0', NULL, 'PPFOGT36WH', NULL, NULL, '25', 'In Stock', 'gt-36-fox-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:05:04', '2023-07-26 15:05:04'),
(249, '20', NULL, '3', 'KTR 10 – Fox Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-25 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690370174.jpg', '1575', '0', '0', NULL, 'PPFOKTR10GO', NULL, NULL, '10', 'In Stock', 'ktr-10-fox-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:16:14', '2023-07-26 15:16:14'),
(250, '20', NULL, '3', 'KTR 10 – Fox Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-25 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690370656.jpg', '1575', '0', '0', NULL, 'PPFOKTR10WH', NULL, NULL, '10', 'In Stock', 'ktr-10-fox-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:24:16', '2023-07-26 15:24:16'),
(251, '20', NULL, '3', 'KTR 12 – Fox Round Bowl Potx', NULL, NULL, '<p>Size&nbsp;-30 cm x 63 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;- Golden</p>', '1690371291.jpg', '2500', '0', '0', NULL, 'PPFOKTR12GO', NULL, NULL, '10', 'In Stock', 'ktr-12-fox-round-bowl-potx', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:34:51', '2023-07-26 15:34:51'),
(252, '20', NULL, '3', 'KTR 12 – Fox Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-30 cm x 63 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690371836.jpg', '2500', '0', '0', NULL, 'PPFOKTR12WH', NULL, NULL, '10', 'In Stock', 'ktr-12-fox-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:43:56', '2023-07-26 15:43:56'),
(253, '20', NULL, '3', 'KTR 13 – Fox Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-33 cm x 76 cm</p>\r\n\r\n<p>Colour-White</p>', '1690372541.jpg', '5290', '0', '0', NULL, 'PPFOKTR13WH', NULL, NULL, '10', 'In Stock', 'ktr-13-fox-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 15:55:41', '2023-07-26 15:55:41'),
(254, '20', NULL, '3', 'KTR 13 – Fox Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-33 cm x 76 cm</p>\r\n\r\n<p>Colour-White</p>', '1690373861.jpg', '5290', '0', '0', NULL, 'PPFOKTR13WH', NULL, NULL, '10', 'In Stock', 'ktr-13-fox-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:17:41', '2023-07-26 16:17:41'),
(255, '20', NULL, '3', 'MAX 14 – Fox Apple Pot', NULL, NULL, '<p>Size&nbsp;-38 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690374322.jpg', '1450', '0', '0', NULL, 'PPFOMAX14GO', NULL, NULL, '15', 'In Stock', 'max-14-fox-apple-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:25:22', '2023-07-26 16:25:22'),
(256, '20', NULL, '3', 'MAX 14 – Fox Apple Pot', NULL, NULL, '<p>Size&nbsp;-38 cm x 36 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690374587.jpg', '1450', '0', '0', NULL, 'PPFOMAX14WH', NULL, NULL, '15', 'In Stock', 'max-14-fox-apple-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:29:47', '2023-07-26 16:29:47'),
(257, '20', NULL, '3', 'MAX 18 – Fox Apple Pot', NULL, NULL, '<p>Size&nbsp;-48 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;- Golden</p>', '1690374937.jpg', '1885', '0', '0', NULL, 'PPFOMAX18GO', NULL, NULL, '10', 'In Stock', 'max-18-fox-apple-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:35:37', '2023-07-26 16:35:37'),
(258, '20', NULL, '3', 'MAX 18 – Fox Apple Pot', NULL, NULL, '<p>Size&nbsp;-48 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690375255.jpg', '1885', '0', '0', NULL, 'PPFOMAX18WH', NULL, NULL, '15', 'In Stock', 'max-18-fox-apple-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:40:55', '2023-07-26 16:40:55'),
(259, '20', NULL, '3', 'PCUP 15 –Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-38 cm x 38 cm</p>\r\n\r\n<p>Colour -White</p>', '1690375690.jpg', '1575', '0', '0', NULL, 'PPFOPCUP15WH', NULL, NULL, '15', 'In Stock', 'pcup-15-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:48:10', '2023-07-26 16:48:10'),
(260, '20', NULL, '3', 'PCUP 15 – Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-38 cm x 38 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690376122.jpg', '1575', '0', '0', NULL, 'PPFOPCUP15GO', NULL, NULL, '30', 'In Stock', 'pcup-15-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 16:55:22', '2023-07-26 16:55:22'),
(261, '20', NULL, '3', 'PCUP 17 – Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-43 cm x 43 cm</p>\r\n\r\n<p>Colour -Golden</p>\r\n\r\n<p>&nbsp;</p>', '1690376597.jpg', '1845', '0', '0', NULL, 'PPFOPCUP17GO', NULL, NULL, '30', 'In Stock', 'pcup-17-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 17:03:17', '2023-07-26 17:03:17'),
(262, '20', NULL, '3', 'PCUP 17 – Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-43 cm x 43 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690376956.jpg', '1845', '0', '0', NULL, 'PPFOPCUP17GR', NULL, NULL, '25', 'In Stock', 'pcup-17-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 17:09:16', '2023-07-26 17:09:16'),
(263, '20', NULL, '3', 'PCUP 17 – Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-43 cm x 43 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690377470.jpg', '1845', '0', '0', NULL, 'PPFOPCUP17WH', NULL, NULL, '30', 'In Stock', 'pcup-17-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 17:17:50', '2023-07-26 17:17:50'),
(264, '20', NULL, '3', 'PCUP 20 – Fox Round Pot', NULL, NULL, '<p>Size&nbsp;-50 cm x 50 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>\r\n\r\n<p>&nbsp;</p>', '1690377825.jpg', '2930', '0', '0', NULL, 'PPFOPCUP20GO', NULL, NULL, '20', 'In Stock', 'pcup-20-fox-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-26 17:23:45', '2023-07-26 17:23:45'),
(265, '20', NULL, '3', 'TGK 26 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-66 cm x 41 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690432265.jpg', '3625', '0', '0', NULL, 'PPFOTGK26GO', NULL, NULL, '15', 'In Stock', 'tgk-26-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 08:31:05', '2023-07-27 08:31:05');
INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `added_by`, `name`, `title`, `description`, `short_description`, `featured_img`, `price`, `discount`, `delivary_charge`, `gallery`, `sku_code`, `video`, `website_link`, `no_in_stock`, `stock_status`, `slug`, `rating`, `tags`, `weight`, `length`, `width`, `height`, `status`, `features`, `color_added`, `qty_check`, `deleted_at`, `created_at`, `updated_at`) VALUES
(266, '20', NULL, '3', 'TGK 26 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-66 cm x 41 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690432814.jpg', '3625', '0', '0', NULL, 'PPFOTGK26GR', NULL, NULL, '15', 'In Stock', 'tgk-26-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 08:40:14', '2023-07-27 08:40:14'),
(267, '20', NULL, '3', 'TGK 26 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-66 cm x 41 cm</p>\r\n\r\n<p>Colour White</p>', '1690433158.jpg', '3625', '0', '0', NULL, 'PPFOTGK26WH', NULL, NULL, '15', 'In Stock', 'tgk-26-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 08:45:58', '2023-07-27 08:45:58'),
(268, '20', NULL, '3', 'TK 18 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-46 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690433649.jpg', '1800', '0', '0', NULL, 'PPFOTK18GO', NULL, NULL, '15', 'In Stock', 'tk-18-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 08:54:09', '2023-07-27 08:54:09'),
(269, '20', NULL, '3', 'TK 18 – Fox Tall Square Pot-Golden', NULL, NULL, '<p>Size&nbsp;-46 cm x 30 cm</p>\r\n\r\n<p>Colour Grey</p>', '1690435515.jpg', '1800', '0', '0', NULL, 'PPFOTK18GR', NULL, NULL, '20', 'In Stock', 'tk-18-fox-tall-square-pot-golden', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 09:25:15', '2023-07-27 09:25:15'),
(270, '20', NULL, '3', 'TK 18 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-46 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690437415.jpg', '1800', '0', '0', NULL, 'PPFOTK18WH', NULL, NULL, '18', 'In Stock', 'tk-18-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 09:56:55', '2023-07-27 09:56:55'),
(271, '20', NULL, '3', 'TK 24 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-61 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690437900.jpg', '2400', '0', '0', NULL, 'PPFOTK24GO', NULL, NULL, '22', 'In Stock', 'tk-24-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 10:05:00', '2023-07-27 10:05:00'),
(272, '20', NULL, '3', 'TK 24 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-61 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690438357.jpg', '2400', '0', '0', NULL, 'PPFOTK24WH', NULL, NULL, '18', 'In Stock', 'tk-24-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 10:12:37', '2023-07-27 10:12:37'),
(273, '20', NULL, '3', 'TK 24 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-61 cm x 30 cm</p>\r\n\r\n<p>Colour Grey</p>', '1690438671.jpg', '2400', '0', '0', NULL, 'PPFOTK24GR', NULL, NULL, '12', 'In Stock', 'tk-24-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 10:17:51', '2023-07-27 10:17:51'),
(274, '20', NULL, '3', 'TK 24 – Fox Tall Square Pot', NULL, NULL, '<p>Size&nbsp;-61 cm x 30 cm</p>\r\n\r\n<p>Colour Grey</p>', '1690438780.jpg', '2400', '0', '0', NULL, 'PPFOTK24GR', NULL, NULL, '12', 'In Stock', 'tk-24-fox-tall-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-27 10:24:25', '2023-07-27 10:19:40', '2023-07-27 10:24:25'),
(275, '20', NULL, '3', 'VNR 18 – Fox Tall Round Pot', NULL, NULL, '<p>Size&nbsp;-84 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-Golden</p>', '1690439585.jpg', '5800', '0', '0', NULL, 'PPFOVNR18GO', NULL, NULL, '6', 'In Stock', 'vnr-18-fox-tall-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 10:33:05', '2023-07-27 10:33:05'),
(276, '20', NULL, '3', 'VNR 18 – Fox Tall Round Pot', NULL, NULL, '<p>Size&nbsp;-84 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690441428.jpg', '5800', '0', '0', NULL, 'PPFOVNR18WH', NULL, NULL, '8', 'In Stock', 'vnr-18-fox-tall-round-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 11:03:48', '2023-07-27 11:03:48'),
(277, '20', NULL, '3', 'BR 11 – Fox Vertical Pot-', NULL, NULL, '<p>Size&nbsp;-36 cm x 28 cm</p>\r\n\r\n<p>Colour&nbsp;Golden</p>', '1690442389.jpg', '665', '0', '0', NULL, 'PPFOBR11GO', NULL, NULL, '30', 'In Stock', 'br-11-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 11:19:49', '2023-07-27 11:19:49'),
(278, '20', NULL, '3', 'BR 11 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-36 cm x 28 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690442692.jpg', '665', '0', '0', NULL, 'PPFOBR11GR', NULL, NULL, '12', 'In Stock', 'br-11-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 11:24:52', '2023-07-27 11:24:52'),
(279, '20', NULL, '3', 'BR 11 – Fox Vertical Pot', NULL, NULL, '<p>Size&nbsp;-36 cm x 28 cm</p>\r\n\r\n<p>Colour White</p>', '1690443047.jpg', '665', '0', '0', NULL, 'PPFOBR11WH', NULL, NULL, '10', 'In Stock', 'br-11-fox-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 11:30:47', '2023-07-27 11:30:47'),
(280, '27', NULL, '3', 'Fiber Glass “L” Shape Pot', NULL, NULL, '<p>Size&nbsp;-63 cm X 30 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Metallic color</p>', '1690452968.jpg', '4170', '0', '0', NULL, 'PPNA901ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-l-shape-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:16:08', '2023-07-27 14:16:08'),
(281, '27', NULL, '3', 'Fiber Glass Apple Pot medium', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm X 48 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;&ndash; Metallic color</p>', '1690453283.png', '3580', '0', '0', NULL, 'PPNA921ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-apple-pot-medium', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-07-28 06:13:13', '2023-07-27 14:21:23', '2023-07-28 06:13:13'),
(282, '27', NULL, '3', 'Fiber Glass Apple Pot medium', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm X 48 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;&ndash; Metallic color</p>', '1690453566.png', '3580', '0', '0', NULL, 'PPNA921ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-apple-pot-medium', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:26:06', '2023-07-27 14:26:06'),
(283, '27', NULL, '3', 'Fiber Glass Round Cylinder pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Metallic Color</p>', '1690453914.jpg', '2240', '0', '0', NULL, 'PPNA801ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-round-cylinder-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:31:54', '2023-07-27 14:31:54'),
(284, '27', NULL, '3', 'Fiber Glass Square Border Pot Small', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 36 cm X 36 cm X 41 cm</p>\r\n\r\n<p>Colour - Metallic color</p>', '1690454395.png', '3553', '0', '0', NULL, 'PPNA931ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-border-pot-small', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:39:55', '2023-07-27 14:39:55'),
(285, '27', NULL, '3', 'Fiber Glass Square Border Pot Medium', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 36 cm X 36 cm X 56 cm</p>\r\n\r\n<p>Colour Metallic</p>', '1690455042.png', '4180', '0', '0', NULL, 'PPNA932ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-border-pot-medium', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:50:42', '2023-07-27 14:50:42'),
(286, '27', NULL, '3', 'Fiber Glass Square Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 36 cm X36 cm X 53 cm</p>\r\n\r\n<p>Color&nbsp;&nbsp;&ndash; Metallic color</p>', '1690455565.png', '3835', '0', '0', NULL, 'PPNA831ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 14:59:25', '2023-07-27 14:59:25'),
(287, '27', NULL, '3', 'Fiber Glass Square Pot 1', NULL, NULL, '<p>Size- 41 cm X 41 cm X 63 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Metallic color</p>', '1690455926.png', '4220', '0', '0', NULL, 'PPNA811ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-pot-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 15:05:26', '2023-07-27 15:05:26'),
(288, '27', NULL, '3', 'Fiber Glass Square Pot 2', NULL, NULL, '<p>Size&nbsp;- 41 cm X 41 cm X 48 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Metallic color</p>', '1690456266.png', '3580', '0', '0', NULL, 'PPNA812ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-pot-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 15:11:06', '2023-07-27 15:11:06'),
(289, '27', NULL, '3', 'Fiber Glass Square Pot 3 Small', NULL, NULL, '<p>Size&nbsp;- 41 cm X 41 cm X 33 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;&ndash; Metallic color</p>', '1690456571.png', '2705', '0', '0', NULL, 'PPNA813ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-square-pot-3-small', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 15:16:11', '2023-07-27 15:16:11'),
(290, '27', NULL, '3', 'Fiber Glass Sphere Pot', NULL, NULL, '<p>Siize&nbsp;&ndash; 36 cm x 50 cm</p>\r\n\r\n<p>Colour - Metallic Colour</p>', '1690457798.jpg', '3800', '0', '0', NULL, 'PPNA941ME', NULL, NULL, '2', 'In Stock', 'fiber-glass-sphere-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 15:36:38', '2023-07-27 15:36:38'),
(291, '26', NULL, '3', 'Vertical Bio Wall Panel Set', NULL, NULL, '<p>Size&nbsp;&ndash; 47 cm X 15 cm</p>\r\n\r\n<p>Colour - Black</p>', '1690464077.jpg', '125', '0', '0', NULL, 'LVATAP645BL', NULL, NULL, '500', 'In Stock', 'vertical-bio-wall-panel-set', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-27 17:21:17', '2023-07-27 17:21:17'),
(292, '20', NULL, '3', 'TCB 50 – Decora Bloom Pot', NULL, NULL, '<p>Size&nbsp;-50 cm x 20 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690512995.jpg', '1020', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '1', 'In Stock', 'tcb-50-decora-bloom-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 06:56:35', '2023-07-28 06:56:35'),
(293, '20', NULL, '3', 'TCB 60 – Decora Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;-27 cm x 60 cm</p>\r\n\r\n<p>Colour&nbsp;-White color</p>', '1690513358.jpg', '1570', '0', '0', NULL, 'PPDETCB60WH', NULL, NULL, '1', 'In Stock', 'tcb-60-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 07:02:38', '2023-07-28 07:02:38'),
(294, '20', NULL, '3', 'TCB 90 – Decora Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;- 32 cm x 90 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;-Grey color</p>', '1690513679.jpg', '4560', '0', '0', NULL, 'PPDETCB90GR', NULL, NULL, '1', 'In Stock', 'tcb-90-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 07:07:59', '2023-07-28 07:07:59'),
(295, '20', NULL, '3', 'TCB 90 – Decora Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;- 32 cm x 90 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-White color</p>', '1690513935.jpg', '4560', '0', '0', NULL, 'PPDETCB90WH', NULL, NULL, '1', 'In Stock', 'tcb-90-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 07:12:15', '2023-07-28 07:12:15'),
(296, '20', NULL, '3', 'TCB 70 – Decora Round Bowl Pot', NULL, NULL, '<p>Size&nbsp;- 30 cm x 74 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;-White color</p>', '1690514258.jpg', '2250', '0', '0', NULL, 'PPDETCB70WH', NULL, NULL, '1', 'In Stock', 'tcb-70-decora-round-bowl-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 07:17:38', '2023-07-28 07:17:38'),
(297, '20', NULL, '3', 'GC 60 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 60 cm x 53 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey Color</p>', '1690516051.jpg', '4870', '0', '0', NULL, 'PPDEGC60GR', NULL, NULL, '1', 'In Stock', 'gc-60-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 07:47:31', '2023-07-28 07:47:31'),
(298, '20', NULL, '3', 'GC 60 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 60 cm x 53 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey Color</p>', '1690516114.jpg', '4870', '0', '0', NULL, 'PPDEGC60GR', NULL, NULL, '1', 'In Stock', 'gc-60-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-01 08:42:47', '2023-07-28 07:48:34', '2023-08-01 08:42:47'),
(299, '20', NULL, '3', 'GC 60 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 60 cm x 53 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey Color</p>', '1690516152.jpg', '4870', '0', '0', NULL, 'PPDEGC60GR', NULL, NULL, '1', 'In Stock', 'gc-60-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-01 08:42:24', '2023-07-28 07:49:12', '2023-08-01 08:42:24'),
(300, '20', NULL, '3', 'GC 60 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 60 cm x 53 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey Color</p>', '1690516186.jpg', '4870', '0', '0', NULL, 'PPDEGC60GR', NULL, NULL, '1', 'In Stock', 'gc-60-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-01 08:41:31', '2023-07-28 07:49:46', '2023-08-01 08:41:31'),
(301, '20', NULL, '3', 'GC 60 – Decora Glossy Cube Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 60 cm x 60 cm x 53 cm</p>\r\n\r\n<p>Colour&nbsp;-White Color</p>', '1690519314.jpg', '4840', '0', '0', NULL, 'PPDEGC60WH', NULL, NULL, '1', 'In Stock', 'gc-60-decora-glossy-cube-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 08:41:54', '2023-07-28 08:41:54'),
(302, '20', NULL, '3', 'LT 30 -Decora Large Tropic Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 76 cm x 46 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey</p>', '1690520019.jpg', '6500', '0', '0', NULL, 'PPDELT30GR', NULL, NULL, '1', 'In Stock', 'lt-30-decora-large-tropic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 08:53:39', '2023-07-28 08:53:39'),
(303, '20', NULL, '3', 'LT 36 -Decora Large Tropic Pot  X', NULL, NULL, '<p>Size&nbsp;&ndash; 91 cm x 46 cm x 46 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash;&ndash; White</p>', '1690520478.jpg', '10600', '0', '0', NULL, 'PDELT36WH-', NULL, NULL, '1', 'In Stock', 'lt-36-decora-large-tropic-pot-x', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 09:01:18', '2023-07-28 09:01:18'),
(304, '20', NULL, '3', 'TV 110 – Decora Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 110 cm x 84 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; Terracotta Color</p>', '1690533236.jpg', '9380', '0', '0', NULL, 'PPDETV110TC', NULL, NULL, '1', 'In Stock', 'tv-110-decora-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 12:33:56', '2023-07-28 12:33:56'),
(305, '20', NULL, '3', 'TV 70 – Decora Vertical Pot – White Color', NULL, NULL, '<p>Size&nbsp;&ndash; 110 cm x 84 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; White Color&nbsp;</p>', '1690534127.jpg', '10150', '0', '0', NULL, 'PPDETV110WH', NULL, NULL, '1', 'In Stock', 'tv-70-decora-vertical-pot-white-color', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 12:48:47', '2023-07-28 12:48:47'),
(306, '20', NULL, '3', 'TS 50 – Decora Liberty Pot', NULL, NULL, '<p>Size&nbsp;-50 cm x 50 cm x 45 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey</p>', '1690535975.jpg', '3220', '0', '0', NULL, 'PPDETCB50GR', NULL, NULL, '1', 'In Stock', 'ts-50-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 13:19:35', '2023-07-28 13:19:35'),
(307, '20', NULL, '3', 'TS 70 – Decora Liberty Pot', NULL, NULL, '<p>Size&nbsp;-75 cm x 75 cm x 66 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Grey</p>', '1690536652.jpg', '7960', '0', '0', NULL, 'PPDETS70GR', NULL, NULL, '1', 'In Stock', 'ts-70-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 13:30:52', '2023-07-28 13:30:52'),
(308, '20', NULL, '3', 'TS 70 – Decora Liberty Pot', NULL, NULL, '<p>Size&nbsp;-75 cm x 75 cm x 66 cm</p>\r\n\r\n<p>Colour - White</p>', '1690537376.jpg', '7960', '0', '0', NULL, 'PPDETS70WH', NULL, NULL, '1', 'In Stock', 'ts-70-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 13:42:56', '2023-07-28 13:42:56'),
(309, '20', NULL, '3', 'TS 70 – Decora Liberty Pot', NULL, NULL, '<p>Size&nbsp;-75 cm x 75 cm x 66 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1690537979.jpg', '7560', '0', '0', NULL, 'PPDETS70TC', NULL, NULL, '1', 'In Stock', 'ts-70-decora-liberty-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 13:52:59', '2023-07-28 13:52:59'),
(310, '20', NULL, '3', 'TT 75 – Decora Window Planter', NULL, NULL, '<p>Size&nbsp;&ndash; 75 cm x 37 cm x 32 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-Terracotta Color</p>', '1690538710.jpg', '2260', '0', '0', NULL, 'PPDETT75TC', NULL, NULL, '1', 'In Stock', 'tt-75-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 14:05:10', '2023-07-28 14:05:10'),
(311, '20', NULL, '3', 'TT 100 – Decora Window Planter', NULL, NULL, '<p>Size&nbsp;&ndash; 100 cm x 30 cm x 30 cm</p>\r\n\r\n<p>Colour - Grey</p>', '1690540082.jpg', '3000', '0', '0', NULL, 'PPDETT100GR', NULL, NULL, '1', 'In Stock', 'tt-100-decora-window-planter', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 14:28:02', '2023-07-28 14:28:02'),
(312, '20', NULL, '3', 'GVT 400 – Decora Glossy Vertical Tall Pot r', NULL, NULL, '<p>Size&nbsp;&ndash; 75 &nbsp;40cm x cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; White Colo</p>', '1690544952.jpg', '3310', '0', '0', NULL, 'PPDEGVT400WH', NULL, NULL, '1', 'In Stock', 'gvt-400-decora-glossy-vertical-tall-pot-r', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-07-28 15:49:12', '2023-07-28 15:49:12'),
(313, '20', NULL, '3', 'FL 14 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 35 cm x 35 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; White Color&nbsp;</p>', '1690867409.jpg', '1310', '0', '0', NULL, 'PPDEFL14WH', NULL, NULL, '2', 'In Stock', 'fl-14-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 09:23:29', '2023-08-01 09:23:29'),
(314, '20', NULL, '3', 'FL 16 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 40 cm x 40 cm</p>\r\n\r\n<p>Colour&nbsp;&ndash; White Color</p>', '1690868674.jpg', '1670', '0', '0', NULL, 'PPDEFL16WH', NULL, NULL, '2', 'In Stock', 'fl-16-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 09:44:34', '2023-08-01 09:44:34'),
(315, '20', NULL, '3', 'FLH 35 – Decora Flora Pot', NULL, NULL, '<p>Size&nbsp;-35 cm x 48 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690869047.jpg', '2100', '0', '0', NULL, 'PPDEFLH35WH', NULL, NULL, '2', 'In Stock', 'flh-35-decora-flora-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 09:50:47', '2023-08-01 09:50:47'),
(316, '20', NULL, '3', 'GCT 40 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;-40 cm x 40 cm x 75 cm</p>\r\n\r\n<p>Colour&nbsp;- Grey</p>', '1690869664.jpg', '4060', '0', '0', NULL, 'PPDEGCT40INGR', NULL, NULL, '2', 'In Stock', 'gct-40-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 10:01:04', '2023-08-01 10:01:04'),
(317, '20', NULL, '3', 'GCT 50 – Glossy Cube Tall Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;-50 cm x 50 cm x 95 cm</p>\r\n\r\n<p>Colour&nbsp;-Grey color</p>', '1690870846.jpg', '6630', '0', '0', NULL, 'PPDEGCT50GR', NULL, NULL, '2', 'In Stock', 'gct-50-glossy-cube-tall-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 10:20:46', '2023-08-01 10:20:46'),
(318, '20', NULL, '3', 'FLS 13 – Decora Flora Square Pot X', NULL, NULL, '<p>Size&nbsp;-33 cm x 33 cm x 33 cm</p>\r\n\r\n<p>Colour White</p>', '1690871370.jpg', '1540', '0', '0', NULL, 'PPDEFLS13WH', NULL, NULL, '2', 'In Stock', 'fls-13-decora-flora-square-pot-x', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 10:29:30', '2023-08-01 10:29:30'),
(319, '20', NULL, '3', 'FLS 15 – Decora Flora Square Pot', NULL, NULL, '<p>Size&nbsp;-38 cm x 38 cm x 38 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-White</p>', '1690881957.jpg', '2250', '0', '0', NULL, 'PPDEFLS15WH', NULL, NULL, '2', 'In Stock', 'fls-15-decora-flora-square-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 13:25:57', '2023-08-01 13:25:57'),
(320, '20', NULL, '3', 'FV 30 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 30 cm x 30 cm</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690883167.jpg', '1115', '0', '0', NULL, 'PPDEFV30WH', NULL, NULL, '2', 'In Stock', 'fv-30-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 13:46:07', '2023-08-01 13:46:07'),
(321, '20', NULL, '3', 'FV 35 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&nbsp;&ndash; 35 cm x 35 cm</p>\r\n\r\n<p>Colour&nbsp;&nbsp;-White</p>', '1690883831.jpg', '1620', '0', '0', NULL, 'PPDEFV35WH', NULL, NULL, '2', 'In Stock', 'fv-35-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 13:57:11', '2023-08-01 13:57:11'),
(322, '20', NULL, '3', 'FV 40 -Decora Frosty Vertical Pot', NULL, NULL, '<p>Size&nbsp;&nbsp;&ndash; 40 cm x 40 cm&nbsp;</p>\r\n\r\n<p>Colour&nbsp;-White</p>', '1690884416.jpg', '2100', '0', '0', NULL, 'PPDEFV 40 WH', NULL, NULL, '2', 'In Stock', 'fv-40-decora-frosty-vertical-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-01 14:06:56', '2023-08-01 14:06:56'),
(323, '26', NULL, '3', 'Hanging pot (AP -126S)', NULL, NULL, '<p>Size - 10cm x 20cm</p>\r\n\r\n<p>Colour-Orng ,ylw,grn</p>', '1690956850.jpg', '70', '0', '0', NULL, 'PPATAP126SMI', NULL, NULL, '25', 'In Stock', 'hanging-pot-ap-126s', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 10:14:10', '2023-08-02 10:14:10'),
(324, '26', NULL, '3', 'Hanging pot (AP -126N)', NULL, NULL, '<p>Size 10cm x 20cm</p>\r\n\r\n<p>Colour - Orng ,ylw,grn</p>', '1690961363.jpg', '50', '0', '0', NULL, 'PPATAP126NMI', NULL, NULL, '20', 'In Stock', 'hanging-pot-ap-126n', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:29:23', '2023-08-02 11:29:23'),
(325, '26', NULL, '3', 'Hanging pot (AP-127S)', NULL, NULL, '<p>Size - 10cm x 23cm</p>\r\n\r\n<p>Colour -Orng ,ylw,grn</p>', '1690961601.jpg', '75', '0', '0', NULL, 'PPATAP127SMI', NULL, NULL, '15', 'In Stock', 'hanging-pot-ap-127s', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:33:21', '2023-08-02 11:33:21'),
(326, '26', NULL, '3', 'Hanging pot (AP -127N)', NULL, NULL, '<p>Size - 10cm x 25cm</p>\r\n\r\n<p>Colour -&nbsp;Orng ,ylw,grn</p>', '1690961851.jpg', '55', '0', '0', NULL, 'PPATAP127NMI', NULL, NULL, '15', 'In Stock', 'hanging-pot-ap-127n', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:37:31', '2023-08-02 11:37:31'),
(327, '26', NULL, '3', 'Hanging pot (AP -128)', NULL, NULL, '<p>Size -&nbsp; 1`4cm x 35cm</p>\r\n\r\n<p>Colour -&nbsp;Orng ,ylw,grn</p>', '1690962085.jpg', '155', '0', '0', NULL, 'PPATAP128MI', NULL, NULL, '10', 'In Stock', 'hanging-pot-ap-128', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:41:25', '2023-08-02 11:41:25'),
(328, '26', NULL, '3', 'Window pot (LM -300)', NULL, NULL, '<p>Size - 27.5cm x 7.5cm x 7.5cm</p>\r\n\r\n<p>Colour -&nbsp;</p>', '1690962377.png', '125', '0', '0', NULL, 'PPIM300MI', NULL, NULL, '15', 'In Stock', 'window-pot-lm-300', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:46:17', '2023-08-02 11:46:17'),
(329, '26', NULL, '3', 'Window pot (LM -300)', NULL, NULL, '<p>Size - 27.5cm x 7.5cm x 7.5cm</p>\r\n\r\n<p>Colour -&nbsp;</p>', '1690962379.png', '125', '0', '0', NULL, 'PPIM300MI', NULL, NULL, '15', 'In Stock', 'window-pot-lm-300', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-10 07:04:29', '2023-08-02 11:46:19', '2023-08-10 07:04:29'),
(330, '26', NULL, '3', 'Window pot (lm-3033)', NULL, NULL, '<p>Size - 40c x 7.5cmx&nbsp;</p>\r\n\r\n<p>Colour - Mix colour</p>', '1690962717.png', '300', '0', '0', NULL, 'PPIM3033MI', NULL, NULL, '50', 'In Stock', 'window-pot-lm-3033', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-02 12:09:51', '2023-08-02 11:51:57', '2023-08-02 12:09:51'),
(331, '26', NULL, '3', 'Window pot (lm-3033)', NULL, NULL, '<p>Size - 40c x 7.5cmx&nbsp;</p>\r\n\r\n<p>Colour - Mix colour</p>', '1690962721.png', '300', '0', '0', NULL, 'PPIM3033MI', NULL, NULL, '50', 'In Stock', 'window-pot-lm-3033', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 11:52:01', '2023-08-02 11:52:01'),
(332, '26', NULL, '3', 'Window pot (lm-8105)', NULL, NULL, '<p>Size - 35cm x 17.5cm x 15cm</p>\r\n\r\n<p>Colour Mix colour</p>', '1690963316.png', '400', '0', '0', NULL, 'PPIM8105MI', NULL, NULL, '25', 'In Stock', 'window-pot-lm-8105', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-02 12:10:09', '2023-08-02 12:01:56', '2023-08-02 12:10:09'),
(333, '26', NULL, '3', 'Window pot (lm-8105)', NULL, NULL, '<p>Size 35cm x 17.5cm x 15cm</p>\r\n\r\n<p>Colour Mix colour</p>', '1690964048.png', '400', '0', '0', NULL, 'PPIM8105MI', NULL, NULL, '25', 'In Stock', 'window-pot-lm-8105', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 12:14:08', '2023-08-02 12:14:08'),
(334, '26', NULL, '3', 'Window pot (lm-8106)', NULL, NULL, '<p>Size - 45cm x 22.5cm x 15cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690964292.png', '625', '0', '0', NULL, 'PPIM8106MI', NULL, NULL, '30', 'In Stock', 'window-pot-lm-8106', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 12:18:12', '2023-08-02 12:18:12'),
(335, '26', NULL, '3', 'Window pot (lm-8107)', NULL, NULL, '<p>Size - 52cm x 22.5cm x 17.5cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690965063.png', '825', '0', '0', NULL, 'PPIM8107MI', NULL, NULL, '25', 'In Stock', 'window-pot-lm-8107', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 12:31:03', '2023-08-02 12:31:03'),
(336, '26', NULL, '3', 'Window pot (lm-8107)', NULL, NULL, '<p>Size - 62.5cm x 22.5cm x 17.5cm</p>', '1690968730.png', '1030', '0', '0', NULL, 'PPIM8108MI', NULL, NULL, '20', 'In Stock', 'window-pot-lm-8107', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 13:32:10', '2023-08-02 13:32:10'),
(337, '26', NULL, '3', 'Oval Bonsai Tray', NULL, NULL, '<p>Size - 30cm x 25cm x 10cm</p>\r\n\r\n<p>Colour - Multicolour</p>\r\n\r\n<p>&nbsp;</p>', '1690971055.jpg', '90', '0', '0', NULL, 'PPATAP160MI', NULL, NULL, '20', 'In Stock', 'oval-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:10:55', '2023-08-02 14:10:55'),
(338, '26', NULL, '3', 'Oval Bonsai Tray', NULL, NULL, '<p>Size - 40 cm x 30cm x 15cm</p>\r\n\r\n<p>Colour- Premium</p>', '1690971257.jpg', '240', '0', '0', NULL, 'PPATAP161PR', NULL, NULL, '20', 'In Stock', 'oval-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:14:17', '2023-08-02 14:14:17'),
(339, '26', NULL, '3', 'Oval Bonsai Tray', NULL, NULL, '<p>Size - 47.5cm x 37.5cm x 15cm</p>\r\n\r\n<p>Colour - Premium</p>', '1690971521.jpg', '300', '0', '0', NULL, 'PPATAP169PR', NULL, NULL, '20', 'In Stock', 'oval-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:18:41', '2023-08-02 14:18:41'),
(340, '26', NULL, '3', 'Oval Bonsai Tray', NULL, NULL, '<p>Size - 15cm x 10cm x 5cm</p>\r\n\r\n<p>Colour - Mix</p>', '1690971714.jpg', '25', '0', '0', NULL, 'PPATAP158MI', NULL, NULL, '50', 'In Stock', 'oval-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:21:54', '2023-08-02 14:21:54'),
(341, '26', NULL, '3', 'Iris Window Planter 1', NULL, NULL, '<p>Size - 40cm x 19cm x 17.5cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1690972100.jpg', '150', '0', '0', NULL, 'PPATAP603TC', NULL, NULL, '150', 'In Stock', 'iris-window-planter-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:28:20', '2023-08-02 14:28:20'),
(342, '26', NULL, '3', 'Iris Window Planter 1', NULL, NULL, '<p>Size - 40cm x 19cm x 17.5cm</p>\r\n\r\n<p>Colour White</p>', '1690972384.jpg', '190', '0', '0', NULL, 'PPATAP603WH', NULL, NULL, '25', 'In Stock', 'iris-window-planter-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 14:33:04', '2023-08-02 14:33:04'),
(343, '26', NULL, '3', 'Iris Window Planter 1', NULL, NULL, '<p>Size - 32.5cm x 15 cm x 15cm</p>\r\n\r\n<p>Colour - Premium</p>', '1690974522.jpg', '200', '0', '0', NULL, 'PPATAP603PPR', NULL, NULL, '25', 'In Stock', 'iris-window-planter-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:08:42', '2023-08-02 15:08:42'),
(344, '26', NULL, '3', 'Iris Window Planter 2', NULL, NULL, '<p>Size - 50cm x 22.5cm x 17.5cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1690975182.jpg', '220', '0', '0', NULL, 'PPATAP604MI', NULL, NULL, '20', 'In Stock', 'iris-window-planter-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:19:42', '2023-08-02 15:19:42'),
(345, '26', NULL, '3', 'Iris Window Planter 2', NULL, NULL, '<p>Size - 50cm x 22.5cm x 17.5cm</p>\r\n\r\n<p>Colour - White</p>', '1690975430.jpg', '260', '0', '0', NULL, 'PPATAP604WH', NULL, NULL, '25', 'In Stock', 'iris-window-planter-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:23:50', '2023-08-02 15:23:50'),
(346, '26', NULL, '3', 'Iris Window Planter 2', NULL, NULL, '<p>Size - 50cm x 22.5cm x 17.5cm</p>\r\n\r\n<p>Colour - Premium</p>', '1690976489.jpg', '250', '0', '0', NULL, 'PPATAP604PR', NULL, NULL, '25', 'In Stock', 'iris-window-planter-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:41:29', '2023-08-02 15:41:29'),
(347, '26', NULL, '3', 'Evergreen Nursery pot', NULL, NULL, '<p>Size- 25 cm x 20 cm</p>\r\n\r\n<p>Color - Teracotta</p>', '1690976775.jpg', '85', '0', '0', NULL, 'PPATAP652TC', NULL, NULL, '25', 'In Stock', 'evergreen-nursery-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:46:15', '2023-08-02 15:46:15'),
(348, '26', NULL, '3', 'Orchid pot', NULL, NULL, '<p>Size - 15cm x 22.5 cm</p>\r\n\r\n<p>Color - Natural</p>', '1690976963.jpg', '65', '0', '0', NULL, 'PPATAP618NA', NULL, NULL, '50', 'In Stock', 'orchid-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-02 15:49:23', '2023-08-02 15:49:23'),
(349, '26', NULL, '3', 'Petunia Railing pot', NULL, NULL, '<p>Size - 50 cm x 20 cm x 19 cm</p>\r\n\r\n<p>Colour - Green&nbsp;</p>', '1691035206.jpg', '510', '0', '0', NULL, 'PPATAP721MI', NULL, NULL, '10', 'In Stock', 'petunia-railing-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 08:00:06', '2023-08-03 08:00:06'),
(350, '26', NULL, '3', 'Corfu Pot', NULL, NULL, '<p>Size - 17.5 cm x 10 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691035457.jpg', '25', '0', '0', NULL, 'PPATAP166ATC', NULL, NULL, '50', 'In Stock', 'corfu-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 08:04:17', '2023-08-03 08:04:17'),
(351, '26', NULL, '3', 'Royal  pot 4', NULL, NULL, '<p>Size - 25 cm x 20 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691037574.jpg', '90', '0', '0', NULL, 'PPATAP154TC', NULL, NULL, '40', 'In Stock', 'royal-pot-4', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 08:39:34', '2023-08-03 08:39:34'),
(352, '26', NULL, '3', 'Square Tray', NULL, NULL, '<p>Size -&nbsp;4 cm X 25 cm&nbsp;</p>\r\n\r\n<p>Colour -Teracotta</p>', '1691038135.jpg', '45', '0', '0', NULL, 'PPATAP67TC', NULL, NULL, '25', 'In Stock', 'square-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 08:48:55', '2023-08-03 08:48:55'),
(353, '26', NULL, '3', 'Sumo tub pot', NULL, NULL, '<p>Size - 22.5 cm x 37.5 cm&nbsp;</p>\r\n\r\n<p>Colour - Premium</p>', '1691041674.jpg', '180', '0', '0', NULL, 'PPATAP61PPR', NULL, NULL, '10', 'In Stock', 'sumo-tub-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 09:47:54', '2023-08-03 09:47:54'),
(354, '26', NULL, '3', 'Sumo Tub Pot', NULL, NULL, '<p>Size - 37.5 cm x 20 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691042287.jpg', '160', '0', '0', NULL, 'PPATAP61TC', NULL, NULL, '10', 'In Stock', 'sumo-tub-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 09:58:07', '2023-08-03 09:58:07'),
(355, '26', NULL, '3', 'Sumo Tub Pot', NULL, NULL, '<p>Size - 42.5 cm x 25 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691042498.jpg', '240', '0', '0', NULL, 'PPATAP62TC', NULL, NULL, '10', 'In Stock', 'sumo-tub-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:01:38', '2023-08-03 10:01:38'),
(356, '26', NULL, '3', 'Sumo Tub Pot', NULL, NULL, '<p>Size - 25 cmx 42.5 cm</p>\r\n\r\n<p>Colour - Premium</p>', '1691042683.jpg', '270', '0', '0', NULL, 'PPATAP62PPR', NULL, NULL, '10', 'In Stock', 'sumo-tub-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:04:43', '2023-08-03 10:04:43'),
(357, '26', NULL, '3', 'Sumo Tub Pot', NULL, NULL, '<p>Size - 60 cm x 27.5 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691042864.jpg', '660', '0', '0', NULL, 'PPATAP64TC', NULL, NULL, '2', 'In Stock', 'sumo-tub-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:07:44', '2023-08-03 10:07:44'),
(358, '26', NULL, '3', 'Surface Ring', NULL, NULL, '<p>Size - 20 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691043073.jpg', '30', '0', '0', NULL, 'PPATAP94TC', NULL, NULL, '12', 'In Stock', 'surface-ring', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:11:13', '2023-08-03 10:11:13'),
(359, '26', NULL, '3', 'Surface Ring', NULL, NULL, '<p>Size - 25 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691043335.jpg', '45', '0', '0', NULL, 'PPATAP95TC', NULL, NULL, '25', 'In Stock', 'surface-ring', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:15:35', '2023-08-03 10:15:35'),
(360, '26', NULL, '3', 'Twister Hanging pot (AP -125)', NULL, NULL, '<p>Size - 40 cm x 10 cm x 25 cm</p>\r\n\r\n<p>Colour- Multicolour</p>', '1691044222.jpg', '100', '0', '0', NULL, 'PPATAP125MI', NULL, NULL, '25', 'In Stock', 'twister-hanging-pot-ap-125', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:30:22', '2023-08-03 10:30:22'),
(361, '26', NULL, '3', 'Twister Hanging pot (AP -125)', NULL, NULL, '<p>Size - 40 cm x 10 cm x 25 cm</p>\r\n\r\n<p>Colour - Premium</p>', '1691044481.jpg', '110', '0', '0', NULL, 'PPATAP125PMI', NULL, NULL, '25', 'In Stock', 'twister-hanging-pot-ap-125', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:34:41', '2023-08-03 10:34:41'),
(362, '26', NULL, '3', 'Venus Window pot', NULL, NULL, '<p>Size - 36 cm x 17.5 cm x 14 cm</p>\r\n\r\n<p>Colour - Mixed colour</p>', '1691045118.jpg', '70', '0', '0', NULL, 'PPATAP667NNA', NULL, NULL, '100', 'In Stock', 'venus-window-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-03 10:45:18', '2023-08-03 10:45:18'),
(363, '26', NULL, '3', 'Flora Stand pot', NULL, NULL, '<p>Size - 30 cm x 25 cm&nbsp;</p>\r\n\r\n<p>Colour - Green,Black, Teracotta</p>', '1691138307.jpg', '165', '0', '0', NULL, 'PPATAP633MI', NULL, NULL, '25', 'In Stock', 'flora-stand-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:38:27', '2023-08-04 12:38:27'),
(364, '26', NULL, '3', 'Flora Stand pot', NULL, NULL, '<p>Size - 30 cm x 25 cm&nbsp;</p>\r\n\r\n<p>Colour - Premium</p>', '1691138549.jpg', '250', '0', '0', NULL, 'PPATAP631PR', NULL, NULL, '25', 'In Stock', 'flora-stand-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:42:29', '2023-08-04 12:42:29'),
(365, '26', NULL, '3', 'Green Planter -1', NULL, NULL, '<p>Size - 12.5cm x 10 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691138811.jpg', '15', '0', '0', NULL, 'PPATAP16BBL', NULL, NULL, '150', 'In Stock', 'green-planter-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:46:51', '2023-08-04 12:46:51'),
(366, '26', NULL, '3', 'Green Planter -1', NULL, NULL, '<p>Size - 12.5 cm x 10 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691139036.jpg', '15', '0', '0', NULL, 'PPATAP16TC', NULL, NULL, '150', 'In Stock', 'green-planter-1', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:50:36', '2023-08-04 12:50:36'),
(367, '26', NULL, '3', 'Green Planter -2', NULL, NULL, '<p>Size - 15 cm x 12.5 cm</p>\r\n\r\n<p>Colour -&nbsp; Teracotta</p>', '1691139320.jpg', '25', '0', '0', NULL, 'PPATAP17TC', NULL, NULL, '150', 'In Stock', 'green-planter-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:55:20', '2023-08-04 12:55:20'),
(368, '26', NULL, '3', 'Green Planter -2', NULL, NULL, '<p>Size - 15 cm x 12.5 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691139489.jpg', '25', '0', '0', NULL, 'PPATAP17BBL', NULL, NULL, '150', 'In Stock', 'green-planter-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 12:58:09', '2023-08-04 12:58:09'),
(369, '26', NULL, '3', 'Green Planter -3', NULL, NULL, '<p>Size - 20 cm x 17.5 cm&nbsp;</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691139727.jpg', '40', '0', '0', NULL, 'PPATAP18TC', NULL, NULL, '150', 'In Stock', 'green-planter-3', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 13:02:07', '2023-08-04 13:02:07'),
(370, '26', NULL, '3', 'Green Planter -3', NULL, NULL, '<p>Size - 20cm x 17.5 cm</p>\r\n\r\n<p>Colour Black</p>', '1691140030.jpg', '40', '0', '0', NULL, 'PPATAP18BBL', NULL, NULL, '100', 'In Stock', 'green-planter-3', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 13:07:10', '2023-08-04 13:07:10'),
(371, '26', NULL, '3', 'Green Planter -4', NULL, NULL, '<p>Size - 25 cm x 22.5 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691145933.jpg', '60', '0', '0', NULL, 'PPATAP19TC', NULL, NULL, '125', 'In Stock', 'green-planter-4', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 14:45:33', '2023-08-04 14:45:33'),
(372, '26', NULL, '3', 'Green Planter -4', NULL, NULL, '<p>Size - 25 cm x 22.5 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691146103.jpg', '60', '0', '0', NULL, 'PPATAP19BBL', NULL, NULL, '125', 'In Stock', 'green-planter-4', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 14:48:23', '2023-08-04 14:48:23'),
(373, '26', NULL, '3', 'Green Planter -5', NULL, NULL, '<p>Size - 30 cm x 27.5 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691146468.jpg', '90', '0', '0', NULL, 'PPATAP20TC', NULL, NULL, '125', 'In Stock', 'green-planter-5', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-04 14:54:28', '2023-08-04 14:54:28'),
(374, '26', NULL, '3', 'Green Planter -6', NULL, NULL, '<p>Size - 35 cm x 27.5 cm</p>\r\n\r\n<p>Colour Teracotta</p>\r\n\r\n<p>&nbsp;</p>', '1691201038.jpg', '140', '0', '0', NULL, 'PPATAP21TC', NULL, NULL, '25', 'In Stock', 'green-planter-6', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:03:58', '2023-08-05 06:03:58'),
(375, '26', NULL, '3', 'Green Planter -6', NULL, NULL, '<p>Size - 35 cm x 27.5 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691201184.jpg', '140', '0', '0', NULL, 'PPATAP21BBL', NULL, NULL, '25', 'In Stock', 'green-planter-6', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:06:24', '2023-08-05 06:06:24'),
(376, '26', NULL, '3', 'Green Planter -7', NULL, NULL, '<p>Size - 40 cm x 30 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691201362.jpg', '250', '0', '0', NULL, 'PATAP22TC', NULL, NULL, '20', 'In Stock', 'green-planter-7', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:09:22', '2023-08-05 06:09:22'),
(377, '26', NULL, '3', 'Green Planter -7', NULL, NULL, '<p>Size - 40 cm x 30 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691201506.jpg', '250', '0', '0', NULL, 'PPATAP22BBL', NULL, NULL, '20', 'In Stock', 'green-planter-7', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:11:46', '2023-08-05 06:11:46'),
(378, '26', NULL, '3', 'Green Planter -8', NULL, NULL, '<p>Sizde - 47.5 cm x 35 cm</p>\r\n\r\n<p>Colour - Teracotta&nbsp;</p>', '1691201772.jpg', '400', '0', '0', NULL, 'PPATAP23TC', NULL, NULL, '20', 'In Stock', 'green-planter-8', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:16:12', '2023-08-05 06:16:12'),
(379, '26', NULL, '3', 'Green Planter -9', NULL, NULL, '<p>Size - 50 cm x 42.5 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691202041.jpg', '450', '0', '0', NULL, 'PPATAP24TC', NULL, NULL, '20', 'In Stock', 'green-planter-9', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:20:41', '2023-08-05 06:20:41'),
(380, '26', NULL, '3', 'Green Planter -10', NULL, NULL, '<p>Size - 60 cm x 50 cm</p>\r\n\r\n<p>Colour - Teracotta</p>\r\n\r\n<p>&nbsp;</p>', '1691202371.jpg', '1000', '0', '0', NULL, 'PPATAP24XLTC', NULL, NULL, '20', 'In Stock', 'green-planter-10', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:26:11', '2023-08-05 06:26:11'),
(381, '26', NULL, '3', 'Diamond pot (AP -770)', NULL, NULL, '<p>Size - 9 cm x 9 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1691203318.jpg', '20', '0', '0', NULL, 'PPATAP770MI', NULL, NULL, '100', 'In Stock', 'diamond-pot-ap-770', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:41:58', '2023-08-05 06:41:58'),
(382, '26', NULL, '3', 'Diamond pot (AP -771)', NULL, NULL, '<p>Size - 14 cm x 14 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1691203621.jpg', '55', '0', '0', NULL, 'PPATAP771MI', NULL, NULL, '100', 'In Stock', 'diamond-pot-ap-771', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 06:47:01', '2023-08-05 06:47:01'),
(383, '26', NULL, '3', 'Juhi Hanging pot( AP -116)', NULL, NULL, '<p>Size - 15 cm x 20 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1691206662.jpg', '85', '0', '0', NULL, 'PPATAP116MI', NULL, NULL, '100', 'In Stock', 'juhi-hanging-pot-ap-116', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 07:37:42', '2023-08-05 07:37:42'),
(384, '26', NULL, '3', 'Window pot (IM -7412)', NULL, NULL, '<p>Size - 14 cm x 25 cm</p>\r\n\r\n<p>Colour - Multicolour</p>', '1691208122.jpg', '90', '0', '0', NULL, 'PPATAP115MI', NULL, NULL, '100', 'In Stock', 'window-pot-im-7412', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:02:02', '2023-08-05 08:02:02'),
(385, '26', NULL, '3', 'Round Design Tray', NULL, NULL, '<p>Size - 10 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691208335.jpg', '20', '0', '0', NULL, 'PPATAP81TC', NULL, NULL, '100', 'In Stock', 'round-design-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:05:35', '2023-08-05 08:05:35'),
(386, '26', NULL, '3', 'Round Design Tray', NULL, NULL, '<p>Size - 15 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691208525.jpg', '30', '0', '0', NULL, 'PPATAP82TC', NULL, NULL, '100', 'In Stock', 'round-design-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:08:45', '2023-08-05 08:08:45'),
(387, '26', NULL, '3', 'Round Design Tray', NULL, NULL, '<p>Size - 20 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691208675.jpg', '40', '0', '0', NULL, 'PPATAP83TC', NULL, NULL, '100', 'In Stock', 'round-design-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:11:15', '2023-08-05 08:11:15'),
(388, '26', NULL, '3', 'Round Design Tray', NULL, NULL, '<p>Size - 25 cm</p>\r\n\r\n<p>Colour Tertacotta</p>', '1691208823.jpg', '50', '0', '0', NULL, 'PPATAP84TC', NULL, NULL, '75', 'In Stock', 'round-design-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:13:43', '2023-08-05 08:13:43'),
(389, '26', NULL, '3', '4\" Square Black pot (AP -856)p', NULL, NULL, '<p>Size - 10 cmx 7.5 cm</p>\r\n\r\n<p>Colour - Black</p>', '1691209146.png', '10', '0', '0', NULL, 'PPATAP856B', NULL, NULL, '1000', 'In Stock', '4-square-black-pot-ap-856p', NULL, NULL, NULL, NULL, NULL, NULL, 'active', '<p>Test</p>', 'on', NULL, NULL, '2023-08-05 08:19:06', '2023-11-02 04:27:05'),
(390, '26', NULL, '3', 'Floridal Drip Tray', NULL, NULL, '<p>Size -&nbsp; 15 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691209365.jpg', '20', '0', '0', NULL, 'PPATAP88TC', NULL, NULL, '100', 'In Stock', 'floridal-drip-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:22:45', '2023-08-05 08:22:45'),
(391, '26', NULL, '3', 'Floridal Drip Tray', NULL, NULL, '<p>Size - 20 cm&nbsp;</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691209596.jpg', '40', '0', '0', NULL, 'PPATAP89TC', NULL, NULL, '100', 'In Stock', 'floridal-drip-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 08:26:36', '2023-08-05 08:26:36'),
(392, '26', NULL, '3', 'Floridal Drip Tray', NULL, NULL, '<p>Size - 25 cm</p>\r\n\r\n<p>Colour - Teracotta</p>', '1691212306.jpg', '60', '0', '0', NULL, 'PPATAP90TC', NULL, NULL, '100', 'In Stock', 'floridal-drip-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 09:11:46', '2023-08-05 09:11:46'),
(393, '26', NULL, '3', 'Floridal Drip Tray', NULL, NULL, '<p>Size - 20 cm</p>\r\n\r\n<p>Color - Premium</p>', '1691212481.jpg', '42', '0', '0', NULL, 'PPATAP89PPR', NULL, NULL, '50', 'In Stock', 'floridal-drip-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 09:14:41', '2023-08-05 09:14:41'),
(394, '26', NULL, '3', 'Window pot (IM -7412)', NULL, NULL, '<p>Size - 10 cm x 12.5 cm x 12.5 cm</p>\r\n\r\n<p>Colour Multicolour</p>', '1691212859.png', '200', '0', '0', NULL, 'PPIM7412MI', NULL, NULL, '150', 'In Stock', 'window-pot-im-7412', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 09:20:59', '2023-08-05 09:20:59'),
(395, '29', NULL, '3', 'Hanging Jute Grow Bag', NULL, NULL, '<p>&nbsp;2 pockets</p>\r\n\r\n<p>Color - Natural</p>\r\n\r\n<p>&nbsp;</p>', '1691239585.jpg', '70.00', '0', '0', NULL, 'PBPA002PNA', NULL, NULL, '50', 'In Stock', 'hanging-jute-grow-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 16:46:25', '2023-08-05 16:46:25'),
(396, '29', NULL, '3', 'Hanging Jute Grow Bag', NULL, NULL, '<p>&nbsp;4 pockets</p>\r\n\r\n<p>Color&nbsp;- Natural</p>', '1691239950.jpg', '120.00', '0', '0', NULL, 'PBPA004PNA', NULL, NULL, '60', 'In Stock', 'hanging-jute-grow-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 16:52:30', '2023-08-05 16:52:30'),
(397, '29', NULL, '3', 'Hanging Jute Grow Bag', NULL, NULL, '<p>Color - Natural</p>\r\n\r\n<p>9 pockets</p>', '1691240200.jpg', '285.00', '0', '0', NULL, 'PBPA009NA', NULL, NULL, '80', 'In Stock', 'hanging-jute-grow-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 16:56:40', '2023-08-05 16:56:40'),
(398, '29', NULL, '3', 'Hanging Jute Grow Bag-', NULL, NULL, '<p>Color &ndash; Natural</p>\r\n\r\n<p>6 Pockets</p>', '1691240439.jpg', '170', '0', '0', NULL, 'PBPA006PNA', NULL, NULL, '100', 'In Stock', 'hanging-jute-grow-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 17:00:39', '2023-08-05 17:00:39'),
(399, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color &ndash;&nbsp;&nbsp;Jute</p>\r\n\r\n<p>1 Gallon- 3.75 Ltrs.</p>\r\n\r\n<p>Size &nbsp;: 6 inch x 7 inch</p>', '1691240691.jpg', '40', '0', '0', NULL, 'PBPA001NA', NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-05 17:04:51', '2023-08-05 17:07:38'),
(400, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color - Jute&nbsp;</p>\r\n\r\n<p>3 Gallon &ndash; 10.75 Ltrs</p>\r\n\r\n<p>Size : 8.5 inch x 10 inch</p>', '1691292689.jpg', '70', '0', '0', NULL, NULL, NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:31:29', '2023-08-06 07:31:29'),
(401, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color - Jute&nbsp;</p>\r\n\r\n<p>3 Gallon &ndash; 10.75 Ltrs</p>\r\n\r\n<p>Size : 8.5 inch x 10 inch</p>', '1691292731.jpg', '70', '0', '0', NULL, 'PBPA003NA', NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:32:11', '2023-08-06 07:32:11');
INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `added_by`, `name`, `title`, `description`, `short_description`, `featured_img`, `price`, `discount`, `delivary_charge`, `gallery`, `sku_code`, `video`, `website_link`, `no_in_stock`, `stock_status`, `slug`, `rating`, `tags`, `weight`, `length`, `width`, `height`, `status`, `features`, `color_added`, `qty_check`, `deleted_at`, `created_at`, `updated_at`) VALUES
(402, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color - Jute&nbsp;</p>\r\n\r\n<p>3 Gallon &ndash; 10.75 Ltrs</p>\r\n\r\n<p>Size : 8.5 inch x 10 inch</p>', '1691292732.jpg', '70', '0', '0', NULL, 'PBPA003NA', NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:32:12', '2023-08-06 07:32:12'),
(403, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color - Jute</p>\r\n\r\n<p>5 Gallon &ndash; 18.50 Ltrs</p>', '1691293793.jpg', '100', '0', '0', NULL, 'PBPA005NA', NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:49:53', '2023-08-06 07:49:53'),
(404, '29', NULL, '3', 'Jute Decorative Bag', NULL, NULL, '<p>Color - Jute</p>\r\n\r\n<p>10 Gallon &ndash; 37.50 Ltrs</p>', '1691293977.jpg', '140', '0', '0', NULL, 'PBPA010NA', NULL, NULL, '100', 'In Stock', 'jute-decorative-bag', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:52:57', '2023-08-06 07:52:57'),
(405, '28', NULL, '3', 'Amiba Bonsai Tray', NULL, NULL, NULL, '1691294255.png', '2350.00', '0', '0', NULL, NULL, NULL, NULL, '20', 'In Stock', 'amiba-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 07:57:35', '2023-08-06 07:57:35'),
(406, '28', NULL, '3', 'Amiba Bonsai Tray', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Length-18inch x Diameter-3inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691297783.png', '2350', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'amiba-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-06 09:01:11', '2023-08-06 08:56:23', '2023-08-06 09:01:11'),
(407, '28', NULL, '3', 'Antiqual Bonsai Tray', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Length-24inch x Diameter-7inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691298011.png', '8280', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antiqual-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:00:11', '2023-08-06 09:00:11'),
(408, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-23inch x Diameter-19inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691298245.png', '3000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:04:05', '2023-08-16 08:05:15'),
(409, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-28inch x Diameter-19inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691298436.png', '6000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:07:16', '2023-08-06 09:07:16'),
(410, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-30inch x Diameter-17inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691298760.png', '6000.00', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:12:40', '2023-08-06 09:12:40'),
(411, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-20inch x Diameter-11inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691300985.png', '1500', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:49:45', '2023-08-06 09:49:45'),
(412, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-18inch x Diameter-9inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691301162.jpg', '16000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:52:42', '2023-08-06 09:52:42'),
(413, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-30inch x Diameter-28inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>\r\n\r\n<h2>Related products</h2>', '1691301344.png', '9000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:55:44', '2023-08-06 09:55:44'),
(414, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-28inch x Diameter-19inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691301559.jpg', '6000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 09:59:19', '2023-08-06 09:59:19'),
(415, '28', NULL, '3', 'Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-18inch x Diameter-9inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691301731.png', '2000', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:02:11', '2023-08-06 10:02:11'),
(416, '28', NULL, '3', 'Antique Handle Kullad Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-16inch x Diameter-10inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691301914.png', '4875', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'antique-handle-kullad-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:05:14', '2023-08-06 10:05:14'),
(417, '28', NULL, '3', 'Ball Big Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-6inch x Diameter-7inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691302227.png', '540', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'ball-big-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:10:27', '2023-08-06 10:10:27'),
(418, '28', NULL, '3', 'Ball Double Shade Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-6inch x Diameter-7inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691302646.png', '360', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'ball-double-shade-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:17:26', '2023-08-06 10:17:26'),
(419, '28', NULL, '3', 'Ball Fine Flue', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-6inch x Diameter-6inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691302862.jpg', '420', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'ball-fine-flue', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:21:02', '2023-08-06 10:21:02'),
(420, '28', NULL, '3', 'Ball Plain Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-7inch x Diameter-8inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691303180.jpg', '540', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ball-plain-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:26:20', '2023-08-06 10:26:20'),
(421, '28', NULL, '3', 'Ball Ring Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-6inch x Diameter-6inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691303890.jpg', '390', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ball-ring-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 10:38:10', '2023-08-06 10:38:10'),
(422, '28', NULL, '3', 'Ball Small Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-3inch x Diameter-3inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691305634.png', '105', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ball-small-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 11:07:14', '2023-08-06 11:07:14'),
(423, '28', NULL, '3', 'Balti Big Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-12inch x Diameter-12inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691305850.png', '1350', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'balti-big-antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 11:10:50', '2023-08-06 11:10:50'),
(424, '28', NULL, '3', 'Balti Big Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-15inch x Diameter-14inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691306043.png', '1950', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'balti-big-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 11:14:03', '2023-08-06 11:14:03'),
(425, '28', NULL, '3', 'Balti Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-8inch x Diameter-7inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691306328.jpg', '600', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 11:18:48', '2023-08-06 11:18:48'),
(426, '28', NULL, '3', 'Balti Kulad No.2 Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-12inch x Diameter-12inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691306584.png', '1350', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-kulad-no2-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 11:23:04', '2023-08-06 11:23:04'),
(427, '28', NULL, '3', 'Balti Net Dot Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-6inch x Diameter-5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691310436.png', '500', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-net-dot-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 12:27:16', '2023-08-06 12:27:16'),
(428, '28', NULL, '3', 'Balti Ring Big Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-13inch x Diameter-12inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691310980.png', '540', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-ring-big-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 12:36:20', '2023-08-06 12:36:20'),
(429, '28', NULL, '3', 'Balti V Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-6inch x Diameter-6inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691311251.png', '405', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'balti-v-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 12:40:51', '2023-08-06 12:40:51'),
(430, '28', NULL, '3', 'Balti Very Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-5inch x Diameter-4inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691311571.jpg', '360.00', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-very-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 12:46:11', '2023-08-06 12:46:11'),
(431, '28', NULL, '3', 'Balti White Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-5inch x Diameter-4inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691312350.jpg', '195', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'balti-white-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 12:59:10', '2023-08-06 12:59:10'),
(432, '28', NULL, '3', 'Basket Bonsai Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-5inch x Diameter-10inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691312504.jpg', '600', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'basket-bonsai-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:01:44', '2023-08-06 13:01:44'),
(433, '28', NULL, '3', 'Basket XL Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-48 inch x Diameter-14inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water</li>\r\n</ul>', '1691313111.jpg', '13500', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'basket-xl-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:11:51', '2023-08-06 13:11:51'),
(434, '28', NULL, '3', 'Big Balti Kulad Line Antique Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-15 inch&nbsp;x Diameter-14 inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691314815.png', '4715', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'big-balti-kulad-line-antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:40:15', '2023-08-06 13:40:15'),
(435, '28', NULL, '3', 'Blossom Straight Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-6inch x Diameter-5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691315155.jpg', '435', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'blossom-straight-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:45:55', '2023-08-06 13:45:55'),
(436, '28', NULL, '3', 'Boat Bonsai Tray', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Length-8inch x Diameter-3inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691315335.png', '350', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'boat-bonsai-tray', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:48:55', '2023-08-06 13:48:55'),
(437, '28', NULL, '3', 'Boat Bonsai Tray - 2', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Length-15nch x Diameter-6inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691315549.png', '872', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'boat-bonsai-tray-2', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 13:52:29', '2023-08-06 13:52:29'),
(438, '28', NULL, '3', 'Boat Shape Bonsai Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Lenght-18inch x Height-5.5inch x Diameter-9.9inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water</li>\r\n</ul>', '1691317900.png', '1500', '0', '0', NULL, NULL, NULL, NULL, '1', 'In Stock', 'boat-shape-bonsai-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:31:40', '2023-08-06 14:31:40'),
(439, '28', NULL, '3', 'Bonsai Gear Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-5inch x Diameter-14inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691318091.jpg', '1300', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'bonsai-gear-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:34:51', '2023-08-06 14:34:51'),
(440, '28', NULL, '3', 'Bonsai Tray Ceramic Pot', NULL, NULL, NULL, '1691318308.png', '1170', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'bonsai-tray-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:38:28', '2023-08-06 14:38:28'),
(441, '28', NULL, '3', 'Bottle Dot Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-9inch x Diameter-3.5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691318491.png', '550', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'bottle-dot-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:41:31', '2023-08-06 14:41:31'),
(442, '28', NULL, '3', 'Bottle Straight Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-7inch x Diameter-7inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691318794.png', '840', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'bottle-straight-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:46:34', '2023-08-06 14:46:34'),
(443, '28', NULL, '3', 'Bottom Stand Ganda Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-8 inch x Diameter-7 inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691319066.jpg', '750', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'bottom-stand-ganda-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:51:06', '2023-08-06 14:51:06'),
(444, '28', NULL, '3', 'Buddha Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-6inch x Diameter-5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691319287.jpg', '450', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'buddha-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 14:54:47', '2023-08-06 14:54:47'),
(445, '28', NULL, '3', 'Buddha Small Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-3inch x Diameter-4.5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691319496.png', '120', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'buddha-small-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-07 12:03:11', '2023-08-06 14:58:16', '2023-08-07 12:03:11'),
(446, '28', NULL, '3', 'Burst Face Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-15inch x Diameter-14inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691319754.png', '2750', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'burst-face-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:02:34', '2023-08-06 15:02:34'),
(447, '28', NULL, '3', 'Buttering Bonsai Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-16inch x Diameter-4inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691320199.png', '1050', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'buttering-bonsai-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:09:59', '2023-08-06 15:09:59'),
(448, '28', NULL, '3', 'Cactus Fine Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-7inch x Diameter-6inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691320458.png', '510', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'cactus-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:14:18', '2023-08-06 15:14:18'),
(449, '28', NULL, '3', 'Capsule Planter Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-3.5inch x Diameter-3.5inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691320702.jpg', '330', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'capsule-planter-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:18:22', '2023-08-06 15:18:22'),
(450, '28', NULL, '3', 'Ceramic Flower Pot-Imp', NULL, NULL, '<ul>\r\n	<li>Item Dimension:&nbsp; Height-13inch x Diameter-56inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691321030.png', '2000', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ceramic-flower-pot-imp', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:23:50', '2023-08-06 15:23:50'),
(451, '28', NULL, '3', 'Ceramic Pot IMP', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-51cms x Diameter-30cms</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691321287.jpg', '1500', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ceramic-pot-imp', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:28:07', '2023-08-06 15:28:07'),
(452, '28', NULL, '3', 'Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-4inch x Diameter4inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water.</li>\r\n</ul>', '1691321739.png', '130', '0', '0', NULL, NULL, NULL, NULL, '15', 'In Stock', 'ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:35:39', '2023-08-06 15:35:39'),
(453, '28', NULL, '3', 'Ceramic Pot', NULL, NULL, '<ul>\r\n	<li>Item Dimension: Height-3.5inch x Diameter-3inch</li>\r\n	<li>Enhance Your Home Decor with this beautiful Pot.</li>\r\n	<li>Best Suitable for Indoor &amp; succulent plants.</li>\r\n	<li>Perfect For Dining Table or Office Desks.</li>\r\n	<li>A Hole At The Bottom To Drain Out Excess Water</li>\r\n</ul>', '1691322014.png', '190', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-06 15:40:14', '2023-08-06 15:40:14'),
(454, '27', NULL, '3', 'Buddha Fine Ceramic Pot', NULL, NULL, '<p>Colour - Black</p>\r\n\r\n<p>Item Dimension: Height-6inch x Diameter-5inch</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691385107.jpg', '450', '0', '0', NULL, NULL, NULL, NULL, '20', 'In Stock', 'buddha-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-07 12:02:35', '2023-08-07 09:11:47', '2023-08-07 12:02:35'),
(455, '28', NULL, '3', 'Buddha Small Ceramic Pot', NULL, NULL, '<p>Colour -&nbsp; White</p>\r\n\r\n<p>Item Dimension:&nbsp; Height-3inch x Diameter-4.5inch</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691385354.png', '120', '0', '0', NULL, NULL, NULL, NULL, '10', 'In Stock', 'buddha-small-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-07 09:15:54', '2023-08-07 09:15:54'),
(456, '28', NULL, '3', 'Buttering Bonsai Ceramic Pot', NULL, NULL, '<p>Item Dimension:&nbsp; Height-16inch x Diameter-4inch</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691385777.png', '1050.00', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'buttering-bonsai-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-07 12:03:59', '2023-08-07 09:22:57', '2023-08-07 12:03:59'),
(457, '28', NULL, '3', 'Buttering Bonsai Ceramic Pot', NULL, NULL, '<p>Item Dimension:&nbsp; Height-16inch x Diameter-4inch.</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691392256.png', '1050.00', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'buttering-bonsai-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-10 07:02:08', '2023-08-07 11:10:56', '2023-08-10 07:02:08'),
(458, '28', NULL, '3', 'Buttering Bonsai Ceramic Pot', NULL, NULL, '<p>Item Dimension:&nbsp; Height-16inch x Diameter-4inch.</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691392260.png', '1050.00', '0', '0', NULL, NULL, NULL, NULL, '5', 'In Stock', 'buttering-bonsai-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-07 12:03:37', '2023-08-07 11:11:00', '2023-08-07 12:03:37'),
(459, '28', NULL, '3', 'Cactus Fine Ceramic Pot', NULL, NULL, '<p>Item Dimension: Height-7inch x Diameter-6inch</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water</p>', '1691400707.png', '510', '0', '0', NULL, NULL, NULL, NULL, '15', 'In Stock', 'cactus-fine-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-07 13:31:47', '2023-08-07 13:31:47'),
(460, '28', NULL, '3', 'Tulsi Antique Ceramic Pot', NULL, NULL, '<p>Item Dimension:&nbsp; Height-5.5inch x Diameter-12inch</p>\r\n\r\n<p>Enhance Your Home Decor with this beautiful Pot.</p>\r\n\r\n<p>Best Suitable for Indoor &amp; succulent plants.</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water.</p>', '1691635776.png', '840', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'tulsi-antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2023-08-10 07:05:53', '2023-08-10 06:49:36', '2023-08-10 07:05:53'),
(461, '28', NULL, '3', 'Tulsi Antique Ceramic Pot', NULL, NULL, '<p>Item Dimension:&nbsp; Height-5.5inch x Diameter-12inch</p>\r\n\r\n<p>Enhance Your Home Decor with this beautiful Pot.</p>\r\n\r\n<p>Best Suitable for Indoor &amp; succulent plants.</p>\r\n\r\n<p>Perfect For Dining Table or Office Desks.</p>\r\n\r\n<p>A Hole At The Bottom To Drain Out Excess Water.</p>', '1691635872.png', '840', '0', '0', NULL, NULL, NULL, NULL, '2', 'In Stock', 'tulsi-antique-ceramic-pot', NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, NULL, '2023-08-10 06:51:12', '2023-08-10 06:51:12'),
(462, '18', NULL, '3', 'Jason Stevens', NULL, '<p>Test</p>', '<p>Test</p>', '1698907048.jpg', '35', '60', '83', NULL, 'Voluptatem Ea rem n', NULL, 'https://www.texacytovikuwic.biz', '1', 'In Stock', 'jason-stevens', NULL, 'Laudantium commodo', 'Impedit est ut mol', 'Ea et repudiandae ex', 'Sapiente quam asperi', 'Expedita sunt magna', 'inactive', '<p>Test Features</p>', NULL, NULL, NULL, '2023-11-02 01:07:28', '2023-11-02 01:07:28'),
(463, '24', NULL, '3', 'Gregory Klein', NULL, '<p>gh</p>', '<p>hfv</p>', '1698910317.jpg', '879', '91', '28', NULL, 'Fugiat ut ut adipisi', NULL, 'https://www.muhemafeloluxu.info', NULL, 'Out of Stock', 'gregory-klein', NULL, 'Odio voluptatem dict', 'Veritatis voluptate', 'Culpa aute atque eu', 'Ut pariatur Et arch', 'Ad cumque veniam an', 'inactive', '<p>hg</p>', NULL, NULL, NULL, '2023-11-02 02:01:57', '2023-11-02 02:01:57'),
(464, '24', NULL, '3', 'Gregory Klein', NULL, '<p>gh</p>', '<p>hfv</p>', '1698912214.jpg', '879', '91', '28', NULL, 'Fugiat ut ut adipisi', NULL, 'https://www.muhemafeloluxu.info', NULL, 'Out of Stock', 'gregory-klein', NULL, 'Odio voluptatem dict', 'Veritatis voluptate', 'Culpa aute atque eu', 'Ut pariatur Et arch', 'Ad cumque veniam an', 'inactive', '<p>hg</p>', NULL, NULL, NULL, '2023-11-02 02:33:34', '2023-11-02 02:33:34'),
(465, '24', NULL, '3', 'Gregory Klein', NULL, '<p>gh</p>', '<p>hfv</p>', '1698913908.jpg', '879', '91', '28', NULL, 'Fugiat ut ut adipisi', NULL, 'https://www.muhemafeloluxu.info', NULL, 'Out of Stock', 'gregory-klein', NULL, 'Odio voluptatem dict', 'Veritatis voluptate', 'Culpa aute atque eu', 'Ut pariatur Et arch', 'Ad cumque veniam an', 'inactive', '<p>hg</p>', NULL, NULL, NULL, '2023-11-02 03:01:48', '2023-11-02 03:01:48'),
(466, '6', NULL, '3', 'Chandler Rice', NULL, '<p>DEsc001</p>', '<p>Test</p>', '1698921483.jpg', '768', '4', '0', NULL, 'Quia recusandae Vol', NULL, 'https://www.nixifenofycumiw.co', '100', 'In Stock', 'chandler-rice', NULL, 'Id quasi est odit e', 'Esse ducimus exerc', 'Totam magnam eaque l', 'Ipsam sit culpa cup', 'Lorem et iste elit', 'active', '<p>Test Features</p>', 'on', 'on', NULL, '2023-11-02 05:08:03', '2023-11-02 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_compares`
--

CREATE TABLE `product_compares` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `unique_id` text DEFAULT NULL,
  `prod_id` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_compares`
--

INSERT INTO `product_compares` (`id`, `user_id`, `unique_id`, `prod_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'WfinqexSNTXR4MqeT13nN0lckOZz1e', '127', '2023-11-06 23:55:23', '2023-11-06 23:55:23'),
(2, NULL, '8vQhqSPLWAzeKrgyxrVAQiCQoll3I4', '131', '2023-11-06 23:55:39', '2023-11-06 23:55:39'),
(3, NULL, 'hHH7TOK6xBGVHhFO2Z8UVVzHqfylPn', '135', '2023-11-06 23:57:35', '2023-11-06 23:57:35'),
(4, NULL, 'ZSKyem7uN9es2qQgcmjX0E0QmuHE0t', '23', '2023-11-06 23:57:49', '2023-11-06 23:57:49'),
(5, NULL, 'CZXo39qRBfREVUDBoYKXABSSLRcekD', '125', '2023-11-06 23:58:49', '2023-11-06 23:58:49'),
(6, NULL, '5dY3qFKSLI7IAIjUMf538wWQtolFdQ', '128', '2023-11-06 23:58:58', '2023-11-06 23:58:58'),
(7, NULL, 'nz4qayt9VxWeGRhsHKd541W4rMEmNt', '125', '2023-11-07 00:03:24', '2023-11-07 00:03:24'),
(8, NULL, 'pSYkZ35cRzcFEhpkYXQ9PQ8H8nFubb', '126', '2023-11-07 00:03:27', '2023-11-07 00:03:27'),
(9, NULL, 'Fb38W2IhwuG6f61QniKOWycYQQff9v', '124', '2023-11-07 00:04:16', '2023-11-07 00:04:16'),
(10, NULL, 'GdpRAuYrFEcwJ59xmPhJRCALGB6mrB', '125', '2023-11-07 00:04:20', '2023-11-07 00:04:20'),
(11, NULL, 'cMgnSy01nefiJhf2XP7XnOqZbcv0lk', '131', '2023-11-07 00:05:19', '2023-11-07 00:05:19'),
(12, NULL, 'JLXjAvn6kWdBECusWuvcGNqneRxm5N', '132', '2023-11-07 00:05:22', '2023-11-07 00:05:22'),
(13, NULL, 'tK96RQ5xgmcKg03PBNaxjztBa15VBt', '125', '2023-11-07 00:09:07', '2023-11-07 00:09:07'),
(14, NULL, 'pkGYO9oXrvA4egthawwO2mOhkiyNsW', '128', '2023-11-07 00:09:09', '2023-11-07 00:09:09'),
(15, NULL, '1h5UqRR62pDm6VLLxfUmKDv51Gtceu', '128', '2023-11-07 00:09:41', '2023-11-07 00:09:41'),
(16, NULL, 'm8nUOhis1NLa49IUsheJ6gA79BE3kU', '130', '2023-11-07 00:09:45', '2023-11-07 00:09:45'),
(17, NULL, 'HuRLSQdbve8LGnAPd864fgCbnKPPQp', '125', '2023-11-07 00:46:48', '2023-11-07 00:46:48'),
(18, NULL, 'DHGgHFa2U7SETtEfmB54xXgep7DlKq', '126', '2023-11-07 00:46:52', '2023-11-07 00:46:52'),
(19, NULL, 'q1L2u4cNAMt7F4uu5M8kQer5l0Pywo', '125', '2023-11-07 00:46:55', '2023-11-07 00:46:55'),
(20, NULL, 'etOknPtWJS0LbfbVJXIiKfDe2NhMWB', '124', '2023-11-07 00:47:03', '2023-11-07 00:47:03'),
(21, NULL, 'xU5tuSQ2emu2v4xn1xSDXIhjuaSbTZ', '125', '2023-11-07 00:47:06', '2023-11-07 00:47:06'),
(22, NULL, 'BpAyhtRc57LiTqYsYN1TXLp9r2goDt', '128', '2023-11-07 00:49:05', '2023-11-07 00:49:05'),
(23, NULL, 'g0nm5cbO9u6tt4GWE7oaKV6RVVGoL3', '132', '2023-11-07 00:49:10', '2023-11-07 00:49:10'),
(24, NULL, 'wfaforppCAC7zAh5YR1BAO4rlMTdRH', '124', '2023-11-07 01:17:20', '2023-11-07 01:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `color` text DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `product_id`, `color`, `gallery_image`, `created_at`, `updated_at`) VALUES
(1, '7', NULL, '1678796535php.png', '2023-03-14 01:55:44', '2023-03-14 06:52:15'),
(2, '8', NULL, '1678778827.1_m0s2io11J82PR7miqan92w.png', '2023-03-14 01:57:07', '2023-03-14 01:57:07'),
(3, '8', NULL, '1678778829.webart.png', '2023-03-14 01:57:09', '2023-03-14 01:57:09'),
(4, '8', NULL, '1678778830.php.png', '2023-03-14 01:57:10', '2023-03-14 01:57:10'),
(5, '9', NULL, '1678778869user.png', '2023-03-14 01:57:49', '2023-03-14 01:57:49'),
(7, '7', NULL, '1678796791php.png', '2023-03-14 06:56:31', '2023-03-14 06:56:31'),
(8, '13', NULL, '1689140937rupay.png', '2023-07-12 00:18:57', '2023-07-12 00:18:57'),
(9, '13', NULL, '1689140949express.png', '2023-07-12 00:19:09', '2023-07-12 00:19:09'),
(10, '9', NULL, '1689248852express.png', '2023-07-13 06:17:32', '2023-07-13 06:17:32'),
(11, '17', NULL, '1689930878image.jpg', '2023-07-18 00:24:01', '2023-07-21 13:14:38'),
(12, '17', NULL, '1689659642img04.jpg', '2023-07-18 00:24:02', '2023-07-18 00:24:02'),
(13, '17', NULL, '1689659644img02.jpg', '2023-07-18 00:24:04', '2023-07-18 00:24:04'),
(14, '18', NULL, '16896615932.1.jpg', '2023-07-18 00:56:33', '2023-07-18 00:56:33'),
(15, '18', NULL, '16896615944.1.jpg', '2023-07-18 00:56:34', '2023-07-18 00:56:34'),
(16, '19', NULL, '1689664817img22.jpg', '2023-07-18 01:50:17', '2023-07-18 01:50:17'),
(17, '19', NULL, '1689664819img26.jpg', '2023-07-18 01:50:19', '2023-07-18 01:50:19'),
(18, '19', NULL, '1689664821img25.jpg', '2023-07-18 01:50:21', '2023-07-18 01:50:21'),
(19, '19', NULL, '16896650694.1.jpg', '2023-07-18 01:54:29', '2023-07-18 01:54:29'),
(20, '17', NULL, '1689754082img06.jpg', '2023-07-19 12:08:02', '2023-07-19 12:08:02'),
(21, '17', NULL, '1689754083img07.jpg', '2023-07-19 12:08:03', '2023-07-19 12:08:03'),
(22, '17', NULL, '1689754086img04.jpg', '2023-07-19 12:08:06', '2023-07-19 12:08:06'),
(23, '17', NULL, '1689754088img05.jpg', '2023-07-19 12:08:08', '2023-07-19 12:08:08'),
(24, '17', NULL, '1689754090img03.jpg', '2023-07-19 12:08:10', '2023-07-19 12:08:10'),
(25, '20', NULL, '16898345871.1.jpg', '2023-07-20 10:29:47', '2023-07-20 10:29:47'),
(26, '20', NULL, '1689834592img11.jpg', '2023-07-20 10:29:52', '2023-07-20 10:29:52'),
(27, '20', NULL, '1689834593img08.jpg', '2023-07-20 10:29:53', '2023-07-20 10:29:53'),
(28, '20', NULL, '1689834595img09.jpg', '2023-07-20 10:29:55', '2023-07-20 10:29:55'),
(29, '21', NULL, '1689837182green-mall-2.jpeg', '2023-07-20 11:13:02', '2023-07-20 11:13:02'),
(30, '21', NULL, '1689837185greenmall-1.jpg', '2023-07-20 11:13:05', '2023-07-20 11:13:05'),
(31, '23', NULL, '1689999940TV-35.jpg', '2023-07-22 08:25:40', '2023-07-22 08:25:40'),
(32, '25', NULL, '1690002668TV-35-G.jpg', '2023-07-22 09:11:08', '2023-07-22 09:11:08'),
(33, '26', NULL, '1690003478TV-35-W.jpg', '2023-07-22 09:24:38', '2023-07-22 09:24:38'),
(34, '27', NULL, '1690003781TV-40-G-1.jpg', '2023-07-22 09:29:41', '2023-07-22 09:29:41'),
(35, '28', NULL, '1690004239Tv-40.jpg', '2023-07-22 09:37:19', '2023-07-22 09:37:19'),
(36, '29', NULL, '1690004500TV-40-W.jpg', '2023-07-22 09:41:40', '2023-07-22 09:41:40'),
(37, '30', NULL, '1690005122TV-50 G-1 (3).jpg', '2023-07-22 09:52:02', '2023-07-22 09:52:02'),
(38, '31', NULL, '1690005654Tv-50-1.jpg', '2023-07-22 10:00:54', '2023-07-22 10:00:54'),
(39, '32', NULL, '1690006042TV-50-W.jpg', '2023-07-22 10:07:22', '2023-07-22 10:07:22'),
(40, '33', NULL, '1690006447TV-60-G.jpg', '2023-07-22 10:14:07', '2023-07-22 10:14:07'),
(41, '34', NULL, '1690007090Tv-60.jpg', '2023-07-22 10:24:50', '2023-07-22 10:24:50'),
(42, '36', NULL, '1690009331Tv-60.jpg', '2023-07-22 11:02:11', '2023-07-22 11:02:11'),
(43, '37', NULL, '1690009814TV-60-W.jpg', '2023-07-22 11:10:14', '2023-07-22 11:10:14'),
(44, '38', NULL, '1690010305TV-70-G.jpg', '2023-07-22 11:18:25', '2023-07-22 11:18:25'),
(45, '39', NULL, '1690013264Tv-70 TC.jpg', '2023-07-22 12:07:44', '2023-07-22 12:07:44'),
(46, '41', NULL, '1690014323Glaze-White-Pebbles.jpg', '2023-07-22 12:25:23', '2023-07-22 12:25:23'),
(47, '42', NULL, '1690015043Milky-white.jpg', '2023-07-22 12:37:23', '2023-07-22 12:37:23'),
(48, '43', NULL, '1690015466mix-colour-pebbles.jpg', '2023-07-22 12:44:26', '2023-07-22 12:44:26'),
(49, '44', NULL, '1690015740red-jasper-tumbled-pebbles-500x500-1.jpg', '2023-07-22 12:49:00', '2023-07-22 12:49:00'),
(50, '45', NULL, '1690016985TV-110-G.jpg', '2023-07-22 13:09:45', '2023-07-22 13:09:45'),
(51, '46', NULL, '1690017580TVG-40 G.jpg', '2023-07-22 13:19:40', '2023-07-22 13:19:40'),
(52, '47', NULL, '1690017902TVG-40-TC.jpg', '2023-07-22 13:25:02', '2023-07-22 13:25:02'),
(53, '48', NULL, '1690018276TVG-50-G.jpg', '2023-07-22 13:31:16', '2023-07-22 13:31:16'),
(54, '49', NULL, '1690018626TVG-50-TC.jpg', '2023-07-22 13:37:06', '2023-07-22 13:37:06'),
(55, '50', NULL, '1690019266TS-40-TC.jpg', '2023-07-22 13:47:46', '2023-07-22 13:47:46'),
(56, '51', NULL, '1690019299sea-shell-half.jpg', '2023-07-22 13:48:19', '2023-07-22 13:48:19'),
(57, '52', NULL, '1690019617TS - 40 G.png', '2023-07-22 13:53:37', '2023-07-22 13:53:37'),
(58, '53', NULL, '1690019983TS- 40 W.jpg', '2023-07-22 13:59:43', '2023-07-22 13:59:43'),
(59, '54', NULL, '1690020186Screenshot-2022-07-13-at-16-28-43-Buy-Color-Stone-Natural-Sea-Shell-for-Decoration-Fish-Aquarium-Home-Decoration-Hanging-Art-and-Craft-Cream-1Kg-Online-at-Low-Prices-in-India-Amazon.in_.png', '2023-07-22 14:03:06', '2023-07-22 14:03:06'),
(60, '55', NULL, '1690020516TS - 50 W.jpg', '2023-07-22 14:08:36', '2023-07-22 14:08:36'),
(61, '56', NULL, '1690021130TS - 50 TC.jpg', '2023-07-22 14:18:50', '2023-07-22 14:18:50'),
(62, '57', NULL, '1690022528Glaze-Black-Pebbles-w300.jpg', '2023-07-22 14:42:08', '2023-07-22 14:42:08'),
(63, '58', NULL, '1690022844onyx-blue-pebbles.jpeg', '2023-07-22 14:47:24', '2023-07-22 14:47:24'),
(64, '59', NULL, '1690022933TS- 60 TC.jpg', '2023-07-22 14:48:53', '2023-07-22 14:48:53'),
(65, '60', NULL, '1690023470Onyx-Brown.jpg', '2023-07-22 14:57:50', '2023-07-22 14:57:50'),
(66, '61', NULL, '1690023934Onyx-Pebbles-Olive-Green.jpg', '2023-07-22 15:05:34', '2023-07-22 15:05:34'),
(67, '62', NULL, '1690024095TS -60 WH.jpg', '2023-07-22 15:08:15', '2023-07-22 15:08:15'),
(68, '63', NULL, '1690024240onyx-pink.jpg', '2023-07-22 15:10:40', '2023-07-22 15:10:40'),
(69, '64', NULL, '1690024379TS - 60 G.jpg', '2023-07-22 15:12:59', '2023-07-22 15:12:59'),
(70, '65', NULL, '1690024408white-onyx-pebbles.jpg', '2023-07-22 15:13:28', '2023-07-22 15:13:28'),
(71, '66', NULL, '1690024729yellow-onyx.jpg', '2023-07-22 15:18:49', '2023-07-22 15:18:49'),
(72, '67', NULL, '1690025112RIVER-BOULDER-PIC.jpg', '2023-07-22 15:25:12', '2023-07-22 15:25:12'),
(73, '68', NULL, '1690025579TT65-WH.jpg', '2023-07-22 15:32:59', '2023-07-22 15:32:59'),
(74, '69', NULL, '1690025629ALL-IN-ONE-PRICE-LIST2022.xlsx-Google-Sheets.png', '2023-07-22 15:33:49', '2023-07-22 15:33:49'),
(75, '70', NULL, '1690025987TT-65-GREY.jpg', '2023-07-22 15:39:47', '2023-07-22 15:39:47'),
(76, '71', NULL, '1690026226TT-65-TC.jpg', '2023-07-22 15:43:46', '2023-07-22 15:43:46'),
(77, '72', NULL, '1690026629TT-75-GREY.jpg', '2023-07-22 15:50:29', '2023-07-22 15:50:29'),
(78, '73', NULL, '1690027020GV.jpg', '2023-07-22 15:57:00', '2023-07-22 15:57:00'),
(79, '74', NULL, '1690027456TT75-WHITE.jpg', '2023-07-22 16:04:16', '2023-07-22 16:04:16'),
(80, '75', NULL, '1690027787GLOSSY-VERTICAL-POT-GV33.jpg', '2023-07-22 16:09:47', '2023-07-22 16:09:47'),
(81, '76', NULL, '1690029389TT-100-WHITE.jpg', '2023-07-22 16:36:29', '2023-07-22 16:36:29'),
(82, '77', NULL, '1690029791TT-100 TC.jpg', '2023-07-22 16:43:11', '2023-07-22 16:43:11'),
(83, '78', NULL, '1690077619FL-12 G.png', '2023-07-23 06:00:19', '2023-07-23 06:00:19'),
(84, '79', NULL, '1690077922FL - 14 G.png', '2023-07-23 06:05:22', '2023-07-23 06:05:22'),
(85, '81', NULL, '1690078530FL-16 G.png', '2023-07-23 06:15:30', '2023-07-23 06:15:30'),
(86, '82', NULL, '1690079068FLH-30 WH.jpg', '2023-07-23 06:24:28', '2023-07-23 06:24:28'),
(87, '83', NULL, '1690079515FLH - 30 GR.jpg', '2023-07-23 06:31:55', '2023-07-23 06:31:55'),
(88, '84', NULL, '1690080430FLH - 30 GR.jpg', '2023-07-23 06:47:10', '2023-07-23 06:47:10'),
(89, '85', NULL, '1690081538FLH-35 GR.jpg', '2023-07-23 07:05:38', '2023-07-23 07:05:38'),
(90, '86', NULL, '1690082319FLS - 11 GR.jpg', '2023-07-23 07:18:39', '2023-07-23 07:18:39'),
(91, '87', NULL, '1690082644FLS - 13 GR.jpg', '2023-07-23 07:24:04', '2023-07-23 07:24:04'),
(92, '88', NULL, '1690083778FLS - 15GR.jpg', '2023-07-23 07:42:58', '2023-07-23 07:42:58'),
(93, '89', NULL, '1690084610GV-38 GR.jpg', '2023-07-23 07:56:50', '2023-07-23 07:56:50'),
(94, '90', NULL, '1690085002GV-38 WH.jpg', '2023-07-23 08:03:22', '2023-07-23 08:03:22'),
(95, '91', NULL, '1690085365GV 46 GR.jpg', '2023-07-23 08:09:25', '2023-07-23 08:09:25'),
(96, '92', NULL, '1690085594GV-46 WH.jpg', '2023-07-23 08:13:14', '2023-07-23 08:13:14'),
(97, '93', NULL, '1690085900GV-53 WH.jpg', '2023-07-23 08:18:20', '2023-07-23 08:18:20'),
(98, '94', NULL, '1690086495GV - 53 GR.jpg', '2023-07-23 08:28:15', '2023-07-23 08:28:15'),
(99, '95', NULL, '1690086777GV - 53 WH.jpg', '2023-07-23 08:32:57', '2023-07-23 08:32:57'),
(100, '96', NULL, '1690088413GV 60 GR.jpg', '2023-07-23 09:00:13', '2023-07-23 09:00:13'),
(101, '97', NULL, '1690088656GV-60 WH.jpg', '2023-07-23 09:04:16', '2023-07-23 09:04:16'),
(102, '98', NULL, '1690089138GVT-300 GR.jpg', '2023-07-23 09:12:18', '2023-07-23 09:12:18'),
(103, '99', NULL, '1690089314Stool-steel-scaled-1.jpg', '2023-07-23 09:15:14', '2023-07-23 09:15:14'),
(104, '100', NULL, '1690089384GVT - 300 WH.jpg', '2023-07-23 09:16:24', '2023-07-23 09:16:24'),
(105, '101', NULL, '1690089620OF_0013_Stool.jpg', '2023-07-23 09:20:20', '2023-07-23 09:20:20'),
(106, '102', NULL, '1690089694GVT -350 GR.jpg', '2023-07-23 09:21:34', '2023-07-23 09:21:34'),
(107, '103', NULL, '1690089887IMG_20170812_154837-scaled-1.jpg', '2023-07-23 09:24:47', '2023-07-23 09:24:47'),
(108, '104', NULL, '1690089941GVT - 350WH.jpg', '2023-07-23 09:25:41', '2023-07-23 09:25:41'),
(109, '105', NULL, '1690090127OF_0014_Stainless_SteelStool.jpg', '2023-07-23 09:28:47', '2023-07-23 09:28:47'),
(110, '106', NULL, '1690090401GVT - 400 GR.jpg', '2023-07-23 09:33:21', '2023-07-23 09:33:21'),
(111, '107', NULL, '1690090544Singel-Seater-SS-SFW.jpg', '2023-07-23 09:35:44', '2023-07-23 09:35:44'),
(112, '108', NULL, '1690090692stainless-steel-chair-with-arms-409.jpg', '2023-07-23 09:38:12', '2023-07-23 09:38:12'),
(113, '110', NULL, '1690091422Wooden-GArden-Bench-scaled-1.jpeg', '2023-07-23 09:50:22', '2023-07-23 09:50:22'),
(114, '111', NULL, '1690091511GCT_30_Grey.jpg', '2023-07-23 09:51:51', '2023-07-23 09:51:51'),
(115, '112', NULL, '1690091754OF_0251-1-scaled-1.jpeg', '2023-07-23 09:55:54', '2023-07-23 09:55:54'),
(116, '113', NULL, '1690091855GCT - 30 WH.jpg', '2023-07-23 09:57:35', '2023-07-23 09:57:35'),
(117, '114', NULL, '1690092007Stainless-Steel-Sofa-Cum-Bed-1.jpg', '2023-07-23 10:00:07', '2023-07-23 10:00:07'),
(118, '115', NULL, '1690092608GCT - 40 WH.jpg', '2023-07-23 10:10:08', '2023-07-23 10:10:08'),
(119, '116', NULL, '1690093064GCT_35_Grey.jpg', '2023-07-23 10:17:44', '2023-07-23 10:17:44'),
(120, '117', NULL, '1690093470GCT - 35 WH.jpg', '2023-07-23 10:24:30', '2023-07-23 10:24:30'),
(121, '118', NULL, '1690093578perglola.jpg', '2023-07-23 10:26:18', '2023-07-23 10:26:18'),
(122, '119', NULL, '1690093846GCT - 50 WH.jpg', '2023-07-23 10:30:46', '2023-07-23 10:30:46'),
(123, '120', NULL, '1690094214OFIM1061NA.jpg', '2023-07-23 10:36:54', '2023-07-23 10:36:54'),
(124, '121', NULL, '1690094484Relaxable-Chair.jpg', '2023-07-23 10:41:24', '2023-07-23 10:41:24'),
(125, '122', NULL, '1690094747garden-umbrella-central-pole-scaled.jpg', '2023-07-23 10:45:47', '2023-07-23 10:45:47'),
(126, '124', NULL, '1690095299artificial-orchid-flowers-500x500-1.jpeg', '2023-07-23 10:54:59', '2023-07-23 10:54:59'),
(127, '123', NULL, '1690095310FV - 30GR.jpg', '2023-07-23 10:55:10', '2023-07-23 10:55:10'),
(128, '125', NULL, '1690095406Artificial-Anthurium-Plant-with-Pot-45-cm-Red-and-Yellow-452288-0.jpg', '2023-07-23 10:56:46', '2023-07-23 10:56:46'),
(129, '126', NULL, '1690095490AP_0641_Cala_lily_artificial_flower.jpg', '2023-07-23 10:58:10', '2023-07-23 10:58:10'),
(130, '127', NULL, '1690097893614wDnd489L.jpg', '2023-07-23 11:38:13', '2023-07-23 11:38:13'),
(131, '128', NULL, '1690098066sn2308-artificial-ball-sticks-500x500-1.jpg', '2023-07-23 11:41:06', '2023-07-23 11:41:06'),
(132, '129', NULL, '1690098460AP_0022a-scaled.jpg', '2023-07-23 11:47:40', '2023-07-23 11:47:40'),
(133, '130', NULL, '1690098939artificial-orchid-flower-stick-500x500-1.jpg', '2023-07-23 11:55:39', '2023-07-23 11:55:39'),
(134, '131', NULL, '1690099313big-gladula-bunch-250x250-1.jpg', '2023-07-23 12:01:53', '2023-07-23 12:01:53'),
(135, '132', NULL, '1690099716AP_0023-scaled.jpg', '2023-07-23 12:08:36', '2023-07-23 12:08:36'),
(136, '133', NULL, '169009993551iHeA8iUBS.jpg', '2023-07-23 12:12:15', '2023-07-23 12:12:15'),
(137, '134', NULL, '1690100377product-500x500-1.jpeg', '2023-07-23 12:19:37', '2023-07-23 12:19:37'),
(138, '135', NULL, '1690100935Untitled-46.jpg', '2023-07-23 12:28:55', '2023-07-23 12:28:55'),
(139, '136', NULL, '1690103923rtyd.jpg', '2023-07-23 13:18:43', '2023-07-23 13:18:43'),
(140, '137', NULL, '16901043281-Kg-Block-Coco-Peat.jpg', '2023-07-23 13:25:28', '2023-07-23 13:25:28'),
(141, '138', NULL, '1690104546coco-coin.jpg', '2023-07-23 13:29:06', '2023-07-23 13:29:06'),
(142, '139', NULL, '1690104763Husk-Chip-Block.jpg', '2023-07-23 13:32:43', '2023-07-23 13:32:43'),
(143, '140', NULL, '1690104890expanded-perlite-ore-500x500-1.png', '2023-07-23 13:34:50', '2023-07-23 13:34:50'),
(144, '141', NULL, '1690105013vermiculite.jpg', '2023-07-23 13:36:53', '2023-07-23 13:36:53'),
(145, '142', NULL, '1690105183Sphagnum-Moss.jpg', '2023-07-23 13:39:43', '2023-07-23 13:39:43'),
(146, '143', NULL, '1690105377expanded-perlite-ore-500x500-1 (1).png', '2023-07-23 13:42:57', '2023-07-23 13:42:57'),
(147, '144', NULL, '1690105481Fv - 35 GR.jpg', '2023-07-23 13:44:41', '2023-07-23 13:44:41'),
(148, '145', NULL, '1690105736potting-mix-for-terrace-gardening-500x500-1.jpg', '2023-07-23 13:48:56', '2023-07-23 13:48:56'),
(149, '146', NULL, '1690105833Soilrite.jpg', '2023-07-23 13:50:33', '2023-07-23 13:50:33'),
(150, '147', NULL, '1690105863FV-40 GR.jpg', '2023-07-23 13:51:03', '2023-07-23 13:51:03'),
(151, '149', NULL, '1690106069Vermicompost.jpg', '2023-07-23 13:54:29', '2023-07-23 13:54:29'),
(152, '150', NULL, '1690106396vermiculite (1).jpg', '2023-07-23 13:59:56', '2023-07-23 13:59:56'),
(153, '151', NULL, '1690106607NEW-UPDATED-PRICE-LIST-2-JANUARY-2021-OF-GREEN-MALL.xlsx-Google-Sheets-9.png', '2023-07-23 14:03:27', '2023-07-23 14:03:27'),
(154, '152', NULL, '1690106714PT 500-GR.jpg', '2023-07-23 14:05:14', '2023-07-23 14:05:14'),
(155, '153', NULL, '169010705551gYkU8fgL._SX466_-1.jpg', '2023-07-23 14:10:55', '2023-07-23 14:10:55'),
(156, '154', NULL, '1690107128PT-500-wh.jpg', '2023-07-23 14:12:08', '2023-07-23 14:12:08'),
(157, '155', NULL, '1690107323hand-cultivator-2453863.jpg', '2023-07-23 14:15:23', '2023-07-23 14:15:23'),
(158, '157', NULL, '1690107443HAND-CULTIVATOR.jpg', '2023-07-23 14:17:23', '2023-07-23 14:17:23'),
(159, '158', NULL, '1690107564PT 600-GR.jpg', '2023-07-23 14:19:24', '2023-07-23 14:19:24'),
(160, '159', NULL, '1690107711NEW-UPDATED-PRICE-LIST-2-JANUARY-2021-OF-GREEN-MALL.xlsx-Google-Sheets-8.png', '2023-07-23 14:21:51', '2023-07-23 14:21:51'),
(161, '160', NULL, '1690107875PT-600-WH.jpg', '2023-07-23 14:24:35', '2023-07-23 14:24:35'),
(162, '162', NULL, '1690108233Attachment_20211310121312.jpg', '2023-07-23 14:30:33', '2023-07-23 14:30:33'),
(163, '161', NULL, '1690108235PT 750-GR.jpg', '2023-07-23 14:30:35', '2023-07-23 14:30:35'),
(164, '163', NULL, '1690108409khurpa-Google-Search.png', '2023-07-23 14:33:29', '2023-07-23 14:33:29'),
(165, '164', NULL, '1690108585khurpa-Google-Search.png', '2023-07-23 14:36:25', '2023-07-23 14:36:25'),
(166, '165', NULL, '1690108631PT-750-WH.jpg', '2023-07-23 14:37:11', '2023-07-23 14:37:11'),
(167, '168', NULL, '1690109245GI_0251_GARDEN-ROLLER-_Of_Green-Mall - Copy.jpg', '2023-07-23 14:47:25', '2023-07-23 14:47:25'),
(168, '169', NULL, '1690110183ST 50 GR.jpg', '2023-07-23 15:03:03', '2023-07-23 15:03:03'),
(169, '170', NULL, '1690110481Garden-Trolley.jpg', '2023-07-23 15:08:01', '2023-07-23 15:08:01'),
(170, '171', NULL, '1690110536ST 50 WH.jpg', '2023-07-23 15:08:56', '2023-07-23 15:08:56'),
(171, '172', NULL, '1690110639Yellow-Wheel-Barrow-for-Trade-India-scaled-1.jpg', '2023-07-23 15:10:39', '2023-07-23 15:10:39'),
(172, '173', NULL, '1690110780Wheel-barrow-WB6410-scaled-2.jpg', '2023-07-23 15:13:00', '2023-07-23 15:13:00'),
(173, '174', NULL, '1690110957ST 60 GR.jpg', '2023-07-23 15:15:57', '2023-07-23 15:15:57'),
(174, '175', NULL, '1690111243ST 60 WH.jpg', '2023-07-23 15:20:43', '2023-07-23 15:20:43'),
(175, '176', NULL, '1690111715Drain-Cell.jpg', '2023-07-23 15:28:35', '2023-07-23 15:28:35'),
(176, '177', NULL, '1690112034ST 75 GR.jpg', '2023-07-23 15:33:54', '2023-07-23 15:33:54'),
(177, '178', NULL, '1690112720TCB50GR.jpg', '2023-07-23 15:45:20', '2023-07-23 15:45:20'),
(178, '179', NULL, '1690113119TCB 60 GR.jpg', '2023-07-23 15:51:59', '2023-07-23 15:51:59'),
(179, '180', NULL, '1690113751TCB 70 WH.jpg', '2023-07-23 16:02:31', '2023-07-23 16:02:31'),
(180, '181', NULL, '1690114468FLT 600 GR.png', '2023-07-23 16:14:28', '2023-07-23 16:14:28'),
(181, '182', NULL, '1690114737FLT 750 GR.png', '2023-07-23 16:18:57', '2023-07-23 16:18:57'),
(182, '183', NULL, '1690115453OP 50 GR.jpg', '2023-07-23 16:30:53', '2023-07-23 16:30:53'),
(183, '184', NULL, '1690115774OP 65 GR.jpg', '2023-07-23 16:36:14', '2023-07-23 16:36:14'),
(184, '184', NULL, '1690118323OP 65 GR.jpg', '2023-07-23 17:18:43', '2023-07-23 17:18:43'),
(185, '185', NULL, '1690251746GC-30-GR.jpg', '2023-07-25 06:22:26', '2023-07-25 06:22:26'),
(186, '186', NULL, '1690252050GC-30 WH.jpg', '2023-07-25 06:27:30', '2023-07-25 06:27:30'),
(187, '187', NULL, '1690252310GC-35 GR.jpg', '2023-07-25 06:31:50', '2023-07-25 06:31:50'),
(188, '188', NULL, '1690252568GC 35 WH.jpg', '2023-07-25 06:36:08', '2023-07-25 06:36:08'),
(189, '189', NULL, '1690252822GC-40 GR.jpg', '2023-07-25 06:40:22', '2023-07-25 06:40:22'),
(190, '190', NULL, '1690253090GC -40 WH.jpg', '2023-07-25 06:44:50', '2023-07-25 06:44:50'),
(191, '191', NULL, '1690253460GC-45 GR.jpg', '2023-07-25 06:51:00', '2023-07-25 06:51:00'),
(192, '193', NULL, '1690253707GC -45 WH.jpg', '2023-07-25 06:55:07', '2023-07-25 06:55:07'),
(193, '194', NULL, '1690254006GC-53 GR.jpg', '2023-07-25 07:00:06', '2023-07-25 07:00:06'),
(194, '195', NULL, '1690254267GC -53 WH.jpg', '2023-07-25 07:04:27', '2023-07-25 07:04:27'),
(195, '196', NULL, '1690254952LT -30 WH.jpg', '2023-07-25 07:15:52', '2023-07-25 07:15:52'),
(196, '197', NULL, '1690255355LT -36 GR.jpg', '2023-07-25 07:22:35', '2023-07-25 07:22:35'),
(197, '198', NULL, '1690264575PVC Beauty-tray.jpg', '2023-07-25 09:56:15', '2023-07-25 09:56:15'),
(198, '199', NULL, '1690264966PVC Blossom (1).jpg', '2023-07-25 10:02:46', '2023-07-25 10:02:46'),
(199, '200', NULL, '1690265424PVC Blossom Pot(2).jpg', '2023-07-25 10:10:24', '2023-07-25 10:10:24'),
(200, '201', NULL, '1690265735PVC Blossom-Pot-3.jpg', '2023-07-25 10:15:35', '2023-07-25 10:15:35'),
(201, '202', NULL, '1690266082PVC Blossom Pot-4.jpg', '2023-07-25 10:21:22', '2023-07-25 10:21:22'),
(202, '203', NULL, '1690266584PVC Blossom Pot-5.jpg', '2023-07-25 10:29:44', '2023-07-25 10:29:44'),
(203, '204', NULL, '1690267030PVC Blossom-Pot-6.jpg', '2023-07-25 10:37:10', '2023-07-25 10:37:10'),
(204, '205', NULL, '1690267401PVC Cone-Pot-Ap-700.jpeg', '2023-07-25 10:43:21', '2023-07-25 10:43:21'),
(205, '206', NULL, '1690267961PVC Diamond Wall Hanging Pot.webp', '2023-07-25 10:52:41', '2023-07-25 10:52:41'),
(206, '207', NULL, '1690268314PVC Double-Hook-Pot.jpg', '2023-07-25 10:58:34', '2023-07-25 10:58:34'),
(207, '208', NULL, '1690270211PVC Fence Pot.jpg', '2023-07-25 11:30:11', '2023-07-25 11:30:11'),
(208, '209', NULL, '1690270564PVC GARNET POT.jpg', '2023-07-25 11:36:04', '2023-07-25 11:36:04'),
(209, '210', NULL, '1690270901PVC JUHI HANGING POT.jpg', '2023-07-25 11:41:41', '2023-07-25 11:41:41'),
(210, '211', NULL, '1690272055PVC Juhi-Pot.jpeg', '2023-07-25 12:00:55', '2023-07-25 12:00:55'),
(211, '213', NULL, '1690277134PVC Juhi-Pot-775.jpeg', '2023-07-25 13:25:34', '2023-07-25 13:25:34'),
(212, '213', NULL, '1690277138PVC Juhi-Pot-775.jpeg', '2023-07-25 13:25:38', '2023-07-25 13:25:38'),
(213, '214', NULL, '1690282158Majestic-Pot-1.jpg', '2023-07-25 14:49:18', '2023-07-25 14:49:18'),
(214, '215', NULL, '1690285505Multi-Color-Hook-Pot(AP-791 P).jpg', '2023-07-25 15:45:05', '2023-07-25 15:45:05'),
(215, '216', NULL, '1690285963Multi-Color-Hook-Pot ( AP-791-S).jpg', '2023-07-25 15:52:43', '2023-07-25 15:52:43'),
(216, '217', NULL, '1690286539Lily-Hook-Pot.jpg', '2023-07-25 16:02:19', '2023-07-25 16:02:19'),
(217, '218', NULL, '1690287691Nest-Hanging-Pot (AP-150).jpg', '2023-07-25 16:21:31', '2023-07-25 16:21:31'),
(218, '219', NULL, '1690288210Onyx-Pot-(AP-783).jpeg', '2023-07-25 16:30:10', '2023-07-25 16:30:10'),
(219, '220', NULL, '1690289522Peony Hanging Pot.jpg', '2023-07-25 16:52:02', '2023-07-25 16:52:02'),
(220, '221', NULL, '1690289962Juhi-Pot-Multi-color.jpeg', '2023-07-25 16:59:22', '2023-07-25 16:59:22'),
(221, '222', NULL, '1690337556Rock Pot- (AP-822P).jpg', '2023-07-26 06:12:36', '2023-07-26 06:12:36'),
(222, '223', NULL, '1690337989Ruby-Square-Pot-(AP-741).jpeg', '2023-07-26 06:19:49', '2023-07-26 06:19:49'),
(223, '224', NULL, '1690340441Solitaire pot -AP-661.jpg', '2023-07-26 07:00:41', '2023-07-26 07:00:41'),
(224, '225', NULL, '1690340767star-pot AP-676.jpg', '2023-07-26 07:06:07', '2023-07-26 07:06:07'),
(225, '226', NULL, '1690347201Vertical-Pot-Green (2).jpg', '2023-07-26 08:53:21', '2023-07-26 08:53:21'),
(226, '227', NULL, '1690347538Vertical-Garden-Pot Black.jpg', '2023-07-26 08:58:58', '2023-07-26 08:58:58'),
(227, '228', NULL, '1690348132FV - 30GR.jpg', '2023-07-26 09:08:52', '2023-07-26 09:08:52'),
(228, '229', NULL, '1690348508FOX-VERTICAL-POT-BR-15-WHITE.jpg', '2023-07-26 09:15:08', '2023-07-26 09:15:08'),
(229, '230', NULL, '1690348913FOX-VERTICAL-POT-BR-18-GOLDEN.jpg', '2023-07-26 09:21:53', '2023-07-26 09:21:53'),
(230, '231', NULL, '1690349324FOX-VERTICAL-POT-BR-18-GREY.jpg', '2023-07-26 09:28:44', '2023-07-26 09:28:44'),
(231, '232', NULL, '1690350362FOX-VERTICAL-POT-BR-18-WHITE.jpg', '2023-07-26 09:46:02', '2023-07-26 09:46:02'),
(232, '233', NULL, '1690350771FOX-WINDOW-POT-BT-WHITE.jpg', '2023-07-26 09:52:51', '2023-07-26 09:52:51'),
(233, '234', NULL, '1690352261FOX-WINDOW-PLANTER-Cabi-Tray.jpg', '2023-07-26 10:17:41', '2023-07-26 10:17:41'),
(234, '235', NULL, '1690352744Fox-SQUARE-POT-GK-16-GOLD.jpg', '2023-07-26 10:25:44', '2023-07-26 10:25:44'),
(235, '236', NULL, '1690353859FOX-SQUARE-POT-GK-12-GOLD.jpg', '2023-07-26 10:44:19', '2023-07-26 10:44:19'),
(236, '237', NULL, '1690354211FOX-SQUARE-POT-GK-12-GREY-.jpg', '2023-07-26 10:50:11', '2023-07-26 10:50:11'),
(237, '238', NULL, '1690354632FOX-SQUARE-POT-GK-12-WHITE.jpg', '2023-07-26 10:57:12', '2023-07-26 10:57:12'),
(238, '239', NULL, '1690354948FOX-SQUARE-POT-GK-14-GOLD.jpg', '2023-07-26 11:02:28', '2023-07-26 11:02:28'),
(239, '240', NULL, '1690355325FOX-SQUARE-POT-GK-14-GREY.jpg', '2023-07-26 11:08:45', '2023-07-26 11:08:45'),
(240, '241', NULL, '1690356006FOX-SQUARE-POT-GK-14-WHITE.jpg', '2023-07-26 11:20:06', '2023-07-26 11:20:06'),
(241, '242', NULL, '1690356356FOX-SQUARE-POT-GK-16-GREY.jpg', '2023-07-26 11:25:56', '2023-07-26 11:25:56'),
(242, '243', NULL, '1690357110FOX-SQUARE-POT-GK-16-WHITE.jpg', '2023-07-26 11:38:30', '2023-07-26 11:38:30'),
(243, '244', NULL, '1690357483Fox-SQUARE-POT-GK-16-GOLD.jpg', '2023-07-26 11:44:43', '2023-07-26 11:44:43'),
(244, '245', NULL, '1690368437FOX-WINDOW-POT-GT-24-Golden.jpg', '2023-07-26 14:47:17', '2023-07-26 14:47:17'),
(245, '247', NULL, '1690369143FOX-WINDOW-POT-GT-36-GREY.jpg', '2023-07-26 14:59:03', '2023-07-26 14:59:03'),
(246, '248', NULL, '1690369551FOX-WINDOW-POT-GT-36-WHITE.jpg', '2023-07-26 15:05:51', '2023-07-26 15:05:51'),
(247, '249', NULL, '1690370203KTR- 10 Golden.jpg', '2023-07-26 15:16:43', '2023-07-26 15:16:43'),
(248, '250', NULL, '1690370723KTR-10-WHITE-.jpg', '2023-07-26 15:25:23', '2023-07-26 15:25:23'),
(249, '251', NULL, '1690371384KTR-12 Golden.jpg', '2023-07-26 15:36:24', '2023-07-26 15:36:24'),
(250, '252', NULL, '1690371864KTR-12-WHITE-.jpg', '2023-07-26 15:44:24', '2023-07-26 15:44:24'),
(251, '253', NULL, '1690372623FOX KTR-13-WH.jpg', '2023-07-26 15:57:03', '2023-07-26 15:57:03'),
(252, '254', NULL, '1690373876FOX KTR-13-WH.jpg', '2023-07-26 16:17:56', '2023-07-26 16:17:56'),
(253, '255', NULL, '1690374345FOX-APPLE-POT-MAX-14-GOLDEN.jpg', '2023-07-26 16:25:45', '2023-07-26 16:25:45'),
(254, '256', NULL, '1690374632FOX-APPLE-POT-MAX-14-WHITE.jpg', '2023-07-26 16:30:32', '2023-07-26 16:30:32'),
(255, '257', NULL, '1690374969FOX-APPLE-POT-MAX-18-GOLDEN.jpg', '2023-07-26 16:36:09', '2023-07-26 16:36:09'),
(256, '258', NULL, '1690375270FOX-APPLE-POT-MAX-18-WHITE.jpg', '2023-07-26 16:41:10', '2023-07-26 16:41:10'),
(257, '259', NULL, '1690375711FOX-POT-PCUP-15-WHITE.jpg', '2023-07-26 16:48:31', '2023-07-26 16:48:31'),
(258, '260', NULL, '1690376140FOX POT-PCUP-15-GOLDEN.jpg', '2023-07-26 16:55:40', '2023-07-26 16:55:40'),
(259, '261', NULL, '1690376621FOX-POT-PCUP-17-GOLDEN.jpg', '2023-07-26 17:03:41', '2023-07-26 17:03:41'),
(260, '262', NULL, '1690376976FOX POT-PCUP-17-GREY.jpg', '2023-07-26 17:09:36', '2023-07-26 17:09:36'),
(261, '263', NULL, '1690377491Fox Pot PCUP-17-WHITE.jpg', '2023-07-26 17:18:11', '2023-07-26 17:18:11'),
(262, '264', NULL, '1690377891FOX-POT-PCUP-20-GOLDEN.jpg', '2023-07-26 17:24:51', '2023-07-26 17:24:51'),
(263, '265', NULL, '1690432326FOX-TALL-SQUARE-POT-TGK-26-GOLD.jpg', '2023-07-27 08:32:06', '2023-07-27 08:32:06'),
(264, '266', NULL, '1690432870FOX-TALL-SQUARE-POT-TGK-26-GREY.jpg', '2023-07-27 08:41:10', '2023-07-27 08:41:10'),
(265, '267', NULL, '1690433180FOX-TALL-SQUARE-POT-TGK-26-WHITE.jpg', '2023-07-27 08:46:20', '2023-07-27 08:46:20'),
(266, '268', NULL, '1690433667FOX Pot TK18-GOLDEN.jpg', '2023-07-27 08:54:27', '2023-07-27 08:54:27'),
(267, '269', NULL, '1690435542FOX-TALL-SQUARE-POT-TK-18-GREY.jpg', '2023-07-27 09:25:42', '2023-07-27 09:25:42'),
(268, '270', NULL, '1690437434FOX-TALL-SQUARE-POT-TK-18-WHITE.jpg', '2023-07-27 09:57:14', '2023-07-27 09:57:14'),
(269, '271', NULL, '1690437914Fox TK 24-GOLDEN.jpg', '2023-07-27 10:05:14', '2023-07-27 10:05:14'),
(270, '272', NULL, '1690438376Fox Tall Square Pot TK-24-WH.jpg', '2023-07-27 10:12:56', '2023-07-27 10:12:56'),
(271, '273', NULL, '1690438734FOX-VERTICAL-POT-BR-18-GOLDEN.jpg', '2023-07-27 10:18:54', '2023-07-27 10:18:54'),
(272, '274', NULL, '1690438808FOX-TALL-SQUARE-POT-TK-24-GREY.jpg', '2023-07-27 10:20:08', '2023-07-27 10:20:08'),
(273, '275', NULL, '1690439603Fox Tall Round Pot VNR_24_Golden.jpg', '2023-07-27 10:33:23', '2023-07-27 10:33:23'),
(274, '276', NULL, '1690441456VNR Fox Tall Round Pot-18-WH.jpg', '2023-07-27 11:04:16', '2023-07-27 11:04:16'),
(275, '277', NULL, '1690442413FOX-VERTICAL-POT-BR-11-GOLDEN.jpg', '2023-07-27 11:20:13', '2023-07-27 11:20:13'),
(276, '278', NULL, '1690442713FOX-VERTICAL-POT-BR-11-GREY.jpg', '2023-07-27 11:25:13', '2023-07-27 11:25:13'),
(277, '279', NULL, '1690443071FOX-VERTICAL-POT-BR-11-WHITE.jpg', '2023-07-27 11:31:11', '2023-07-27 11:31:11'),
(278, '280', NULL, '1690452979Fiber Glass L Shape Pot.jpg', '2023-07-27 14:16:19', '2023-07-27 14:16:19'),
(279, '281', NULL, '1690453299Fiber Glass Apple Pot Medium.png', '2023-07-27 14:21:39', '2023-07-27 14:21:39'),
(280, '282', NULL, '1690453579Fiber Glass Apple Pot Small.png', '2023-07-27 14:26:19', '2023-07-27 14:26:19'),
(281, '283', NULL, '1690453940Fiber Glass Round Cylider Pot.jpg', '2023-07-27 14:32:20', '2023-07-27 14:32:20'),
(282, '284', NULL, '1690454406Fiber-Glass-square-Border-Pot-Small.png', '2023-07-27 14:40:06', '2023-07-27 14:40:06'),
(283, '285', NULL, '1690455062Fiber-Glass-Square-Border-Pot-Medium.png', '2023-07-27 14:51:02', '2023-07-27 14:51:02'),
(284, '286', NULL, '1690455577Fiber Glass Square pot.png', '2023-07-27 14:59:37', '2023-07-27 14:59:37'),
(285, '287', NULL, '1690455936Fiber Glass Square Pot- 1 Big.png', '2023-07-27 15:05:36', '2023-07-27 15:05:36'),
(286, '288', NULL, '1690456280Fiber Glass square Pot 2 Medium.png', '2023-07-27 15:11:20', '2023-07-27 15:11:20'),
(287, '289', NULL, '1690456585Fiber Glass Square Pot 3 Small.png', '2023-07-27 15:16:25', '2023-07-27 15:16:25'),
(288, '290', NULL, '1690457812Fiber Glass Sphere pot.jpg', '2023-07-27 15:36:52', '2023-07-27 15:36:52'),
(289, '291', NULL, '1690464116Vertical-Bio Wall Pot Black.jpg', '2023-07-27 17:21:56', '2023-07-27 17:21:56'),
(290, '292', NULL, '1690513032TCB 50 WH.jpg', '2023-07-28 06:57:12', '2023-07-28 06:57:12'),
(291, '293', NULL, '1690513374TCB 60 WH.jpg', '2023-07-28 07:02:54', '2023-07-28 07:02:54'),
(292, '294', NULL, '1690513703TCB 90 GR.jpg', '2023-07-28 07:08:23', '2023-07-28 07:08:23'),
(293, '295', NULL, '1690513964TCB 90 WH.jpg', '2023-07-28 07:12:44', '2023-07-28 07:12:44'),
(294, '296', NULL, '1690514281TCB 70 WH.jpg', '2023-07-28 07:18:01', '2023-07-28 07:18:01'),
(295, '300', NULL, '1690516207GC-60 GR.jpg', '2023-07-28 07:50:07', '2023-07-28 07:50:07'),
(296, '301', NULL, '1690519429GC- 60 WH.jpg', '2023-07-28 08:43:49', '2023-07-28 08:43:49'),
(297, '302', NULL, '1690520057LT - 30 GR.jpg', '2023-07-28 08:54:17', '2023-07-28 08:54:17'),
(298, '303', NULL, '1690520563LT - 36 WH.jpg', '2023-07-28 09:02:43', '2023-07-28 09:02:43'),
(299, '304', NULL, '1690533270TV - 110 TC.jpg', '2023-07-28 12:34:30', '2023-07-28 12:34:30'),
(300, '305', NULL, '1690534222TV-110-WH.jpg', '2023-07-28 12:50:22', '2023-07-28 12:50:22'),
(301, '306', NULL, '1690535999TS - 50 G.jpg', '2023-07-28 13:19:59', '2023-07-28 13:19:59'),
(302, '307', NULL, '1690536711TS - 70 GR.jpg', '2023-07-28 13:31:51', '2023-07-28 13:31:51'),
(303, '308', NULL, '1690537412TS - 70 WH.jpg', '2023-07-28 13:43:32', '2023-07-28 13:43:32'),
(304, '309', NULL, '1690538060TS - 70 TC.jpg', '2023-07-28 13:54:20', '2023-07-28 13:54:20'),
(305, '310', NULL, '1690538872TT-75-TC.jpg', '2023-07-28 14:07:52', '2023-07-28 14:07:52'),
(306, '311', NULL, '1690540146TT-100-GREY.jpg', '2023-07-28 14:29:06', '2023-07-28 14:29:06'),
(307, '312', NULL, '1690544976GVT- 400 WH.jpg', '2023-07-28 15:49:36', '2023-07-28 15:49:36'),
(308, '313', NULL, '1690867422FL 14 WH.jpg', '2023-08-01 09:23:42', '2023-08-01 09:23:42'),
(309, '314', NULL, '1690868693FL 16 WH.jpg', '2023-08-01 09:44:53', '2023-08-01 09:44:53'),
(310, '315', NULL, '1690869072FLH 35 WH.jpg', '2023-08-01 09:51:12', '2023-08-01 09:51:12'),
(311, '316', NULL, '1690869760GCT_40_Grey (1).jpg', '2023-08-01 10:02:40', '2023-08-01 10:02:40'),
(312, '317', NULL, '1690870908GCT_50_Grey.jpg', '2023-08-01 10:21:48', '2023-08-01 10:21:48'),
(313, '318', NULL, '1690871421FLS 13 WH.jpg', '2023-08-01 10:30:21', '2023-08-01 10:30:21'),
(314, '319', NULL, '1690881983FLS15WH.jpg', '2023-08-01 13:26:23', '2023-08-01 13:26:23'),
(315, '320', NULL, '1690883195FV 30 WH.jpg', '2023-08-01 13:46:35', '2023-08-01 13:46:35'),
(316, '322', NULL, '1690884439FV-40 GR.jpg', '2023-08-01 14:07:19', '2023-08-01 14:07:19'),
(317, '323', NULL, '1690956861Picture27.jpg', '2023-08-02 10:14:21', '2023-08-02 10:14:21'),
(318, '324', NULL, '1690961373Picture27.jpg', '2023-08-02 11:29:33', '2023-08-02 11:29:33'),
(319, '325', NULL, '1690961610Picture27.jpg', '2023-08-02 11:33:30', '2023-08-02 11:33:30'),
(320, '326', NULL, '1690961859Picture27.jpg', '2023-08-02 11:37:39', '2023-08-02 11:37:39'),
(321, '327', NULL, '1690962093Picture27.jpg', '2023-08-02 11:41:33', '2023-08-02 11:41:33'),
(322, '329', NULL, '1690962401Picture33.png', '2023-08-02 11:46:41', '2023-08-02 11:46:41'),
(323, '331', NULL, '1690962732Picture34.png', '2023-08-02 11:52:12', '2023-08-02 11:52:12'),
(324, '332', NULL, '1690963327Picture32.png', '2023-08-02 12:02:07', '2023-08-02 12:02:07'),
(325, '333', NULL, '1690964059Picture32.png', '2023-08-02 12:14:19', '2023-08-02 12:14:19'),
(326, '334', NULL, '1690964305Picture32.png', '2023-08-02 12:18:25', '2023-08-02 12:18:25'),
(327, '335', NULL, '1690965072Picture32.png', '2023-08-02 12:31:12', '2023-08-02 12:31:12'),
(328, '336', NULL, '1690968739Picture32.png', '2023-08-02 13:32:19', '2023-08-02 13:32:19'),
(329, '337', NULL, '1690971064Picture35.jpg', '2023-08-02 14:11:04', '2023-08-02 14:11:04'),
(330, '338', NULL, '1690971264Picture35.jpg', '2023-08-02 14:14:24', '2023-08-02 14:14:24'),
(331, '339', NULL, '1690971531Picture35.jpg', '2023-08-02 14:18:51', '2023-08-02 14:18:51'),
(332, '340', NULL, '1690971727Picture35.jpg', '2023-08-02 14:22:07', '2023-08-02 14:22:07'),
(333, '341', NULL, '1690972111Picture36.jpg', '2023-08-02 14:28:31', '2023-08-02 14:28:31'),
(334, '342', NULL, '1690972423Picture36.jpg', '2023-08-02 14:33:43', '2023-08-02 14:33:43'),
(335, '343', NULL, '1690974578Picture36.jpg', '2023-08-02 15:09:38', '2023-08-02 15:09:38'),
(336, '344', NULL, '1690975195Picture36.jpg', '2023-08-02 15:19:55', '2023-08-02 15:19:55'),
(337, '345', NULL, '1690975442Picture36.jpg', '2023-08-02 15:24:02', '2023-08-02 15:24:02'),
(338, '346', NULL, '1690976517Picture36.jpg', '2023-08-02 15:41:57', '2023-08-02 15:41:57'),
(339, '347', NULL, '1690976783Picture41.jpg', '2023-08-02 15:46:23', '2023-08-02 15:46:23'),
(340, '348', NULL, '1690976970Picture43.jpg', '2023-08-02 15:49:30', '2023-08-02 15:49:30'),
(341, '349', NULL, '1691035220Picture47.jpg', '2023-08-03 08:00:20', '2023-08-03 08:00:20'),
(342, '350', NULL, '1691035467Picture49.jpg', '2023-08-03 08:04:27', '2023-08-03 08:04:27'),
(343, '351', NULL, '1691037607Picture52.jpg', '2023-08-03 08:40:07', '2023-08-03 08:40:07'),
(344, '352', NULL, '1691038147Picture61.jpg', '2023-08-03 08:49:07', '2023-08-03 08:49:07'),
(345, '353', NULL, '1691041689Picture63.jpg', '2023-08-03 09:48:09', '2023-08-03 09:48:09'),
(346, '354', NULL, '1691042298Picture63.jpg', '2023-08-03 09:58:18', '2023-08-03 09:58:18'),
(347, '355', NULL, '1691042509Picture63.jpg', '2023-08-03 10:01:49', '2023-08-03 10:01:49'),
(348, '356', NULL, '1691042692Picture63.jpg', '2023-08-03 10:04:52', '2023-08-03 10:04:52'),
(349, '357', NULL, '1691042875Picture63.jpg', '2023-08-03 10:07:55', '2023-08-03 10:07:55'),
(350, '358', NULL, '1691043087Picture64.jpg', '2023-08-03 10:11:27', '2023-08-03 10:11:27'),
(351, '359', NULL, '1691043347Picture64.jpg', '2023-08-03 10:15:47', '2023-08-03 10:15:47'),
(352, '360', NULL, '1691044241Picture65.jpg', '2023-08-03 10:30:41', '2023-08-03 10:30:41'),
(353, '361', NULL, '1691044495Picture65.jpg', '2023-08-03 10:34:55', '2023-08-03 10:34:55'),
(354, '362', NULL, '1691045129Picture47.jpg', '2023-08-03 10:45:29', '2023-08-03 10:45:29'),
(355, '363', NULL, '1691138325Picture15.jpg', '2023-08-04 12:38:45', '2023-08-04 12:38:45'),
(356, '364', NULL, '1691138561Picture15.jpg', '2023-08-04 12:42:41', '2023-08-04 12:42:41'),
(357, '365', NULL, '1691138826Picture4.jpg', '2023-08-04 12:47:06', '2023-08-04 12:47:06'),
(358, '366', NULL, '1691139046Picture3.jpg', '2023-08-04 12:50:46', '2023-08-04 12:50:46'),
(359, '367', NULL, '1691139332Picture3.jpg', '2023-08-04 12:55:32', '2023-08-04 12:55:32'),
(360, '368', NULL, '1691139497Picture4.jpg', '2023-08-04 12:58:17', '2023-08-04 12:58:17'),
(361, '369', NULL, '1691139735Picture3.jpg', '2023-08-04 13:02:15', '2023-08-04 13:02:15'),
(362, '370', NULL, '1691140041Picture4.jpg', '2023-08-04 13:07:21', '2023-08-04 13:07:21'),
(363, '371', NULL, '1691145941Picture3.jpg', '2023-08-04 14:45:41', '2023-08-04 14:45:41'),
(364, '372', NULL, '1691146113Picture4.jpg', '2023-08-04 14:48:33', '2023-08-04 14:48:33'),
(365, '373', NULL, '1691146474Picture3.jpg', '2023-08-04 14:54:34', '2023-08-04 14:54:34'),
(366, '374', NULL, '1691201047Picture3.jpg', '2023-08-05 06:04:07', '2023-08-05 06:04:07'),
(367, '375', NULL, '1691201193Picture4.jpg', '2023-08-05 06:06:33', '2023-08-05 06:06:33'),
(368, '376', NULL, '1691201370Picture3.jpg', '2023-08-05 06:09:30', '2023-08-05 06:09:30'),
(369, '377', NULL, '1691201514Picture4.jpg', '2023-08-05 06:11:54', '2023-08-05 06:11:54'),
(370, '378', NULL, '1691201781Picture3.jpg', '2023-08-05 06:16:21', '2023-08-05 06:16:21'),
(371, '379', NULL, '1691202051Picture3.jpg', '2023-08-05 06:20:51', '2023-08-05 06:20:51'),
(372, '380', NULL, '1691202379Picture3.jpg', '2023-08-05 06:26:19', '2023-08-05 06:26:19'),
(373, '381', NULL, '1691203326Picture9.jpg', '2023-08-05 06:42:06', '2023-08-05 06:42:06'),
(374, '382', NULL, '1691203632Picture9.jpg', '2023-08-05 06:47:12', '2023-08-05 06:47:12'),
(375, '383', NULL, '1691206672Picture26.jpg', '2023-08-05 07:37:52', '2023-08-05 07:37:52'),
(376, '384', NULL, '1691208135Picture25.jpg', '2023-08-05 08:02:15', '2023-08-05 08:02:15'),
(377, '385', NULL, '1691208351Picture10.jpg', '2023-08-05 08:05:51', '2023-08-05 08:05:51'),
(378, '386', NULL, '1691208536Picture10.jpg', '2023-08-05 08:08:56', '2023-08-05 08:08:56'),
(379, '387', NULL, '1691208686Picture10.jpg', '2023-08-05 08:11:26', '2023-08-05 08:11:26'),
(380, '388', NULL, '1691208836Picture10.jpg', '2023-08-05 08:13:56', '2023-08-05 08:13:56'),
(381, '389', NULL, '1691209162Picture5.png', '2023-08-05 08:19:22', '2023-08-05 08:19:22'),
(382, '390', NULL, '1691209380Picture17.jpg', '2023-08-05 08:23:00', '2023-08-05 08:23:00'),
(383, '391', NULL, '1691209614Picture17.jpg', '2023-08-05 08:26:54', '2023-08-05 08:26:54'),
(384, '392', NULL, '1691212325Picture17.jpg', '2023-08-05 09:12:05', '2023-08-05 09:12:05'),
(385, '393', NULL, '1691212495Picture17.jpg', '2023-08-05 09:14:55', '2023-08-05 09:14:55'),
(386, '394', NULL, '1691212874Picture28.png', '2023-08-05 09:21:14', '2023-08-05 09:21:14'),
(387, '395', NULL, '1691239621JD_S6030-copy (1).jpg', '2023-08-05 16:47:01', '2023-08-05 16:47:01'),
(388, '396', NULL, '1691239961610hGpaNkXS._SL1016_-1.jpg', '2023-08-05 16:52:41', '2023-08-05 16:52:41'),
(389, '397', NULL, '1691240223Hanging-Jute-Grow-Bag-6-Pocket-2.jpg', '2023-08-05 16:57:03', '2023-08-05 16:57:03'),
(390, '398', NULL, '1691240467JD_S7505-copy.jpg', '2023-08-05 17:01:07', '2023-08-05 17:01:07'),
(391, '399', NULL, '1691240713Jute-Grow-Bag-with-plants.jpg', '2023-08-05 17:05:13', '2023-08-05 17:05:13'),
(392, '402', NULL, '1691292771Jute-Grow-Bag-with-plants (1).jpg', '2023-08-06 07:32:51', '2023-08-06 07:32:51'),
(393, '403', NULL, '1691293813Jute-Grow-Bag-with-plants (2).jpg', '2023-08-06 07:50:13', '2023-08-06 07:50:13'),
(394, '404', NULL, '1691293998Jute-Grow-Bag-with-plants (3).jpg', '2023-08-06 07:53:18', '2023-08-06 07:53:18'),
(395, '405', NULL, '169129426836-1.png', '2023-08-06 07:57:48', '2023-08-06 07:57:48'),
(396, '406', NULL, '1691297796Amiba bonsai tray.png', '2023-08-06 08:56:36', '2023-08-06 08:56:36'),
(397, '407', NULL, '1691298024Antqual Bonsai Tray.png', '2023-08-06 09:00:24', '2023-08-06 09:00:24'),
(398, '408', NULL, '1691298259Antique Ceramic Pot.png', '2023-08-06 09:04:19', '2023-08-06 09:04:19'),
(399, '409', NULL, '1691298453Antique Ceramic Pot 2.png', '2023-08-06 09:07:33', '2023-08-06 09:07:33'),
(400, '410', NULL, '1691298786Antique Ceramic Pot 3.png', '2023-08-06 09:13:06', '2023-08-06 09:13:06'),
(401, '411', NULL, '1691301003Antique Ceramic Pot 5.png', '2023-08-06 09:50:03', '2023-08-06 09:50:03'),
(402, '412', NULL, '1691301170Antique Ceramic Pot 6.png', '2023-08-06 09:52:50', '2023-08-06 09:52:50'),
(403, '413', NULL, '1691301360Antique Ceramic Pot 7.png', '2023-08-06 09:56:00', '2023-08-06 09:56:00'),
(404, '414', NULL, '1691301567Antique Ceramic Pot 8.png', '2023-08-06 09:59:27', '2023-08-06 09:59:27'),
(405, '416', NULL, '1691301926Antique handle Kullad Ceramic Pot.png', '2023-08-06 10:05:26', '2023-08-06 10:05:26'),
(406, '417', NULL, '1691302240Ball Big Cramic Pot.png', '2023-08-06 10:10:40', '2023-08-06 10:10:40'),
(407, '418', NULL, '1691302660Ball Double Shade Ceramic Pot.png', '2023-08-06 10:17:40', '2023-08-06 10:17:40'),
(408, '419', NULL, '1691302874Ball Fine Flue.jpg', '2023-08-06 10:21:14', '2023-08-06 10:21:14'),
(409, '420', NULL, '1691303192Ball Plain Ceramic Pot.jpg', '2023-08-06 10:26:32', '2023-08-06 10:26:32'),
(410, '421', NULL, '1691303902Ball Ring Ceramic Pot.jpg', '2023-08-06 10:38:22', '2023-08-06 10:38:22'),
(411, '422', NULL, '1691305648Ball Small Ceramic Pot.png', '2023-08-06 11:07:28', '2023-08-06 11:07:28'),
(412, '423', NULL, '1691305863Balti Big Antique Ceramic pot.png', '2023-08-06 11:11:03', '2023-08-06 11:11:03'),
(413, '424', NULL, '1691306058Balti Big Ceramic Pot.png', '2023-08-06 11:14:18', '2023-08-06 11:14:18'),
(414, '425', NULL, '1691306341Balti Fine Ceramic Pot.jpg', '2023-08-06 11:19:01', '2023-08-06 11:19:01'),
(415, '426', NULL, '1691306599Balti Kulad No. 2.png', '2023-08-06 11:23:19', '2023-08-06 11:23:19'),
(416, '427', NULL, '1691310457Balti Net Dot Ceramic Pot.png', '2023-08-06 12:27:37', '2023-08-06 12:27:37'),
(417, '428', NULL, '1691310998Balti Ring Big Ceramic Pot.png', '2023-08-06 12:36:38', '2023-08-06 12:36:38'),
(418, '429', NULL, '1691311280Balti V Fine Ceramic pot.png', '2023-08-06 12:41:20', '2023-08-06 12:41:20'),
(419, '430', NULL, '1691311586balti Very Fine Ceramic Pot.jpg', '2023-08-06 12:46:26', '2023-08-06 12:46:26'),
(420, '431', NULL, '1691312360Balti White Ceramic Pot.jpg', '2023-08-06 12:59:20', '2023-08-06 12:59:20'),
(421, '432', NULL, '1691312515Basket Bonsai Fine Ceramic Pot.jpg', '2023-08-06 13:01:55', '2023-08-06 13:01:55'),
(422, '433', NULL, '1691313128Basket XL Ceramic Pot.jpg', '2023-08-06 13:12:08', '2023-08-06 13:12:08'),
(423, '434', NULL, '1691314830Big Balti Kulad Line.png', '2023-08-06 13:40:30', '2023-08-06 13:40:30'),
(424, '435', NULL, '1691315167Blossom straight Ceramic Pot.jpg', '2023-08-06 13:46:07', '2023-08-06 13:46:07'),
(425, '436', NULL, '1691315349Boat Bonsai Tray.png', '2023-08-06 13:49:09', '2023-08-06 13:49:09'),
(426, '437', NULL, '1691315564Boat Bonsai Tray - 2.png', '2023-08-06 13:52:44', '2023-08-06 13:52:44'),
(427, '438', NULL, '1691317919Boat Shape Bonsai pot.png', '2023-08-06 14:31:59', '2023-08-06 14:31:59'),
(428, '439', NULL, '1691318104Bonsai Gear Fine Ceramic pot.jpg', '2023-08-06 14:35:04', '2023-08-06 14:35:04'),
(429, '440', NULL, '1691318325Bonsai Tray ceramic Pot.png', '2023-08-06 14:38:45', '2023-08-06 14:38:45'),
(430, '441', NULL, '1691318507Bottle Dot Ceramic pot.png', '2023-08-06 14:41:47', '2023-08-06 14:41:47'),
(431, '442', NULL, '1691318812Bottle Straight Ceramic Pot.png', '2023-08-06 14:46:52', '2023-08-06 14:46:52'),
(432, '443', NULL, '1691319090Bottom Stand Ganda Ceramic Pot.jpg', '2023-08-06 14:51:30', '2023-08-06 14:51:30'),
(433, '444', NULL, '1691319306Buddha Fine Ceramic Pot.jpg', '2023-08-06 14:55:06', '2023-08-06 14:55:06'),
(434, '445', NULL, '1691319511Buddha small Ceramic Pot.png', '2023-08-06 14:58:31', '2023-08-06 14:58:31'),
(435, '446', NULL, '1691319778Brust Face Ceramic Pot.png', '2023-08-06 15:02:58', '2023-08-06 15:02:58'),
(436, '447', NULL, '1691320211Buttering Bonsai Ceramic Pot.png', '2023-08-06 15:10:11', '2023-08-06 15:10:11'),
(437, '448', NULL, '1691320482Cactus Fine Ceramic Pot.png', '2023-08-06 15:14:42', '2023-08-06 15:14:42'),
(438, '449', NULL, '1691320720Capsule Planter Ceramic Pot.jpg', '2023-08-06 15:18:40', '2023-08-06 15:18:40'),
(439, '450', NULL, '1691321043Ceramic Flower Pot - IMP.png', '2023-08-06 15:24:03', '2023-08-06 15:24:03'),
(440, '451', NULL, '1691321312Ceramic Pot - IMP.jpg', '2023-08-06 15:28:32', '2023-08-06 15:28:32'),
(441, '452', NULL, '1691321797Ceramic Pot IMP.png', '2023-08-06 15:36:37', '2023-08-06 15:36:37'),
(442, '453', NULL, '1691322056Ceramic Pot.png', '2023-08-06 15:40:56', '2023-08-06 15:40:56'),
(443, '454', NULL, '169138511958.jpg', '2023-08-07 09:11:59', '2023-08-07 09:11:59'),
(444, '455', NULL, '169138536713.png', '2023-08-07 09:16:07', '2023-08-07 09:16:07'),
(445, '456', NULL, '169138578936.png', '2023-08-07 09:23:09', '2023-08-07 09:23:09'),
(446, '458', NULL, '169139227536 (1).png', '2023-08-07 11:11:15', '2023-08-07 11:11:15'),
(447, '459', NULL, '16914007261.png', '2023-08-07 13:32:06', '2023-08-07 13:32:06'),
(448, '461', NULL, '169163588927.png', '2023-08-10 06:51:29', '2023-08-10 06:51:29'),
(449, '198', NULL, '1698906938admin_login.jpg', '2023-11-02 01:05:38', '2023-11-02 01:05:38'),
(450, '198', NULL, '1698906941back_1.jpg', '2023-11-02 01:05:41', '2023-11-02 01:05:41'),
(451, '462', NULL, '1698907053admin_login.jpg', '2023-11-02 01:07:33', '2023-11-02 01:07:33'),
(452, '389', NULL, '1698909999man-mony.jpg', '2023-11-02 01:56:40', '2023-11-02 01:56:40'),
(453, '389', 'Black', '1698911017asidebar-img.jpg', '2023-11-02 02:13:37', '2023-11-02 02:13:37'),
(454, '389', 'Black', '1698911082asidebar-img.jpg', '2023-11-02 02:14:42', '2023-11-02 02:14:42'),
(455, '389', 'Black', '1698911122asidebar-img.jpg', '2023-11-02 02:15:22', '2023-11-02 02:15:22'),
(456, '389', 'Black', '1698911293man-mony.jpg', '2023-11-02 02:18:13', '2023-11-02 02:18:13'),
(457, '466', 'Black', '169892149626040.jpg', '2023-11-02 05:08:16', '2023-11-02 05:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `rate`, `comment`, `type`, `created_at`, `updated_at`) VALUES
(1, '1', '18', '5', NULL, 'product', '2023-07-18 02:24:42', '2023-07-18 02:24:42'),
(2, '1', '18', '5', NULL, 'product', '2023-07-18 02:24:56', '2023-07-18 02:24:56'),
(3, '1', '18', '5', NULL, 'product', '2023-07-18 02:24:57', '2023-07-18 02:24:57'),
(5, '1', '17', '2', NULL, 'product', '2023-07-18 02:25:10', '2023-07-18 02:25:10'),
(6, '1', '17', '3', NULL, 'product', '2023-07-18 02:46:27', '2023-07-18 02:46:27'),
(7, '6', '20', '5', 'Grate', 'product', '2023-07-21 11:07:15', '2023-07-21 11:07:15'),
(8, '6', '20', '3', 'Average', 'product', '2023-07-21 11:07:29', '2023-07-21 11:07:29'),
(9, '6', '20', '4', 'NAAAAAAAAA', 'product', '2023-07-21 11:56:10', '2023-07-21 11:56:10'),
(10, '6', '420', '5', 'Test', 'product', '2023-08-16 11:59:00', '2023-08-16 11:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) NOT NULL,
  `added_by` varchar(50) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gallery` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `title2` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `y_video_link1` text DEFAULT NULL,
  `y_video_link2` text DEFAULT NULL,
  `steps_inv` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_id`, `added_by`, `title`, `img`, `category`, `gallery`, `description`, `title2`, `img2`, `description2`, `y_video_link1`, `y_video_link2`, `steps_inv`, `video`, `status`, `created_at`, `updated_at`) VALUES
(2, '15', '3', 'Best Landscape Service In Kolkata', '1692614491.jpg', '15', '1689676037_img30.jpg', '<p>Outdoor landscaping generally refers to designing, planning, and arranging the features of an outdoor space to enhance its aesthetic appeal and functionality. It involves various elements, such as plants, trees, shrubs, flowers, grass, and hardscaping materials like stones, pavers, and retaining walls. The goal of outdoor landscaping is typically to create a cohesive and visually pleasing environment that meets the needs and desires of the property owner. In addition to aesthetic considerations, outdoor landscaping can serve practical purposes, such as providing shade, privacy, or a space for outdoor activities.</p>\r\n\r\n<p>There are many potential benefits to outdoor landscaping, some of which include:</p>\r\n\r\n<p>1. Aesthetic appeal: A well-designed outdoor landscape can enhance the beauty of a property, making it more visually appealing and potentially increasing its value.</p>\r\n\r\n<p>2. Improved functionality: By incorporating outdoor seating areas, walkways, and water features, an outdoor landscape can provide additional space for relaxation, entertainment, and recreation.</p>\r\n\r\n<p>3. Environmental benefits: Outdoor landscaping can help mitigate the negative impacts of urbanization and development by providing green space, reducing air and water pollution, and promoting biodiversity.</p>\r\n\r\n<p>4. Health benefits: Spending time in nature has been shown to have various positive effects on physical and mental health, such as reducing stress, improving mood, and boosting immune function.</p>\r\n\r\n<p>5. Energy savings: Strategically placed trees and shrubs can provide shade in the summer and windbreaks in the winter, potentially reducing energy costs associated with heating and cooling.</p>\r\n\r\n<p>6. Increased property value: A well-designed and maintained outdoor landscape can increase the value of a property, making it more attractive to potential buyers or renters.</p>', 'Here are the steps involved in landscaping, from conceptualization to creating a beautiful garden:', '1692614831.jpg', '<p>1. Develop a Concept: The first step in creating a beautiful garden is to develop a concept. Think about the garden you want, the plants you want to include, and how you want the garden to look and feel.</p>\r\n\r\n<p>2. Site Analysis: Before you start designing your garden, it&rsquo;s important to analyze your site. This involves assessing the soil type, the amount of sunlight, the topography, and any existing features such as trees, rocks, or water features.</p>\r\n\r\n<p>3. Design: Once you have a concept and have analyzed your site, it&rsquo;s time to start designing your garden. This involves creating a plan that shows the garden&rsquo;s layout, the locations of different features, and the types of plants to be used.</p>\r\n\r\n<p>4. Soil Preparation: Once you have a design, it&rsquo;s time to start preparing the soil. This involves removing any weeds or debris, improving the soil quality by adding compost or other organic matter, and leveling the soil if necessary.</p>\r\n\r\n<p>5. Hardscaping: Hardscaping refers to the non-plant elements of your garden, such as walkways, patios, walls, and water features. These elements can be installed before or after planting, depending on the design.</p>\r\n\r\n<p>6. Planting: Once the soil is prepared, and any hardscaping is complete, it&rsquo;s time to start planting. Be sure to select plants appropriate for your climate and soil type that will thrive in the sunlight your garden receives.</p>\r\n\r\n<p>7. Irrigation: Depending on your location and the climate, you may need to install an irrigation system to ensure your plants receive adequate water.</p>\r\n\r\n<p>8. Maintenance: Finally, it&rsquo;s important to maintain your garden to keep it looking beautiful. This involves regular watering, fertilizing, pruning, pest control, and addressing problems.</p>\r\n\r\n<p>9. Following these steps, you can create a beautiful garden that will bring health, joy, and beauty to your home for years.</p>\r\n\r\n<p>The founder of the Green Mall, Green-Guru Dinesh Rawat, is an expert Garden Vastu consultant in Kolkata. Hundreds of home gardens and landscaping in Kolkata have been created by his expert team. Green Mall has the largest collection of big trees and palms in India. Green-guru Dinesh Rawat is known for landscapes that give the looks and feelings of a ten-year-old garden.</p>', 'https://www.youtube.com/embed/aPNQzGa_578', 'https://www.youtube.com/embed/tjDIMTbPSS8', NULL, NULL, 'active', '2023-07-18 04:57:17', '2023-08-21 14:47:11'),
(3, '16', '3', 'Best Rooftop Gardening In Kolkata', '1692614796.jpg', '16', '1689676493_ad2.jpg', '<p>Rooftop gardening is a popular trend that has gained traction in recent years. It offers many benefits, including providing a source of fresh produce, reducing energy costs, improving air quality, and enhancing the aesthetic appeal of a building. Green Mall is one such company that specializes in designing and installing rooftop gardens with healthy and mature plants. In this blog, we will explore the benefits of rooftop gardening and how Green Mall can help you create the perfect rooftop garden for your home or business.</p>\r\n\r\n<p>One of the primary benefits of rooftop gardening is the ability to grow your food. This is particularly important for urban areas with limited access to fresh produce. With a rooftop garden, you can grow fresh fruits, vegetables, and herbs that are fresh and free from pesticides and chemicals. This not only improves your diet&rsquo;s nutritional value but also helps reduce your carbon footprint.</p>\r\n\r\n<p>Another benefit of rooftop gardening is the reduction in energy costs. Plants provide natural insulation, which helps to regulate the temperature inside the building. This means that during the summer months, your building will be cooler, reducing the need for air conditioning, while in the winter months, the plants will provide insulation to keep your building warmer, reducing the need for heating.</p>\r\n\r\n<p>Rooftop gardens also help to improve air quality. Plants absorb carbon dioxide and other pollutants from the air, releasing oxygen and freshening the air. This is particularly important in urban areas where air pollution is a significant problem.</p>\r\n\r\n<p>Finally, rooftop gardens add aesthetic appeal to a building. Green roofs can be designed to be visually stunning and create a beautiful outdoor space for residents or employees to enjoy. They can also help to increase property value and make your building more attractive to potential buyers or renters.</p>', 'Rooftop Garden Design', '1692614796.jpg', '<p>We understand the importance of creating healthy and sustainable rooftop gardens at Green Mall. Our team of experts will work closely with you to design and install a garden that meets your specific needs and requirements. We use only the healthiest and most mature plants, ensuring your rooftop garden is vibrant and thriving.</p>\r\n\r\n<p>Our services include site analysis, design consultation, plant selection, irrigation, and ongoing maintenance. We offer various plant options, including herbs, vegetables, fruits, and ornamental plants. Our irrigation systems are designed to be efficient and sustainable, using rainwater harvesting techniques to minimize water waste.</p>\r\n\r\n<p>In conclusion, a rooftop garden is an excellent investment for any home or business owner. It offers a range of benefits, from providing fresh produce to improving air quality and reducing energy costs. Green Mall specializes in designing and installing healthy, sustainable, and visually stunning rooftop gardens. Contact us today to learn how we can help you create the perfect rooftop garden for your home or business.</p>', 'https://www.youtube.com/embed/aPNQzGa_578', 'https://www.youtube.com/embed/tjDIMTbPSS8', NULL, NULL, 'active', '2023-07-18 05:04:53', '2023-08-21 14:46:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `input_type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `input_type`, `value`, `created_at`, `updated_at`) VALUES
(6, 'app_name', 'Text', 'GardaPack', '2023-02-27 06:53:38', '2023-11-06 02:03:43'),
(7, 'app_logo', 'File', '1699256067.png', '2023-02-27 06:54:19', '2023-11-06 02:04:27'),
(8, 'demo', 'Text', 'Rukadaaaaa', '2023-03-16 23:45:49', '2023-03-16 23:45:54'),
(9, 'email_from', 'Text', 'abcd@gmail.com', '2023-07-12 02:01:53', '2023-07-12 02:01:53'),
(10, 'email_to', 'Text', 'abcd@gmail.com', '2023-07-12 02:02:13', '2023-07-12 02:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings_options`
--

CREATE TABLE `settings_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `settings_key` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_options`
--

INSERT INTO `settings_options` (`id`, `name`, `settings_key`, `created_at`, `updated_at`) VALUES
(1, 'Website Name', 'app_name', '2023-03-16 23:18:10', '2023-03-16 23:58:22'),
(2, 'Website Logo', 'app_logo', '2023-03-16 23:22:02', '2023-03-16 23:58:02'),
(6, 'Email From', 'email_from', '2023-07-12 02:00:49', '2023-07-12 02:00:49'),
(7, 'Email To', 'email_to', '2023-07-12 02:01:07', '2023-07-12 02:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, '4', 'Polymer Plants', 'polymer-plants', '2023-07-17 05:40:06', '2023-07-17 05:40:06'),
(3, '4', 'Pvc Pots', 'pvc-pots', '2023-07-17 05:40:22', '2023-07-17 05:40:22'),
(4, '4', 'Ceramic Items', 'ceramic-items', '2023-07-17 05:40:40', '2023-07-17 05:40:40'),
(5, '4', 'Fiber Glass Pots', 'fiber-glass-pots', '2023-07-17 05:41:35', '2023-07-17 05:41:35'),
(6, '8', 'Indoor Plants', 'indoor-plants', '2023-07-17 06:40:39', '2023-07-17 06:40:39'),
(7, '8', 'Big Trees', 'big-trees', '2023-07-17 06:40:53', '2023-07-17 06:40:53'),
(9, '8', 'Outdoor Plants', 'outdoor-plants', '2023-07-17 22:36:12', '2023-07-17 22:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jhon deb', 'jhondeb123xyz@gmail.com', NULL, NULL, NULL, '$2y$10$eIuouhiZxqM34e1EeBud4u8eUl8wo.Prn3KEcy3xiFC.E7RGuTuV.', NULL, '2023-02-23 04:51:25', '2023-08-14 10:25:36'),
(2, 'Philip Haynes', 'gejuramyk1@mailinator.com', NULL, NULL, NULL, '$2y$10$GWCGYEL8uBvwN4yPsBtBbu8S/67kYqpOGn6f.bE6D0HkHUFSv6ZQC', NULL, '2023-02-28 23:38:57', '2023-02-28 23:40:22'),
(3, 'Azalia Rios', 'bysazu@mailinator.com', NULL, NULL, NULL, '$2y$10$nwjnlvzBHFnvvYh1mQ.f0.blCL3iEH9mtHWMwcFNpneiYaXEidKlm', NULL, '2023-02-28 23:41:12', '2023-02-28 23:41:12'),
(4, 'Dorothy Callahan', 'jufad@mailinator.com', NULL, NULL, NULL, '$2y$10$ibVjDDM4e5XvGkEdR1okF.EaqBjqxUDGrefV6a7R8wcB9rtVDw1hC', NULL, '2023-03-01 04:38:55', '2023-03-01 04:38:55'),
(5, 'Nina Morris', 'tafin@mailinator.com', NULL, NULL, NULL, '$2y$10$L/teI.EbXxcI0Ywl69z97eZ.QWZAxuAf7RPozoz0LZ11ArWO6fLxm', NULL, '2023-03-01 04:51:24', '2023-03-01 04:51:24'),
(6, 'Test', 'testing123@gmail.com', '54784589940', 'Cinderella Flora Farms Pvt Ltd (Since 1995) ISO 9001:2015 Certified for Nursery, Garden Center & Landscaping', NULL, '$2y$10$eYYEZdHevM/pQC9rx.rope/xvpb5qhqUDfcy0Jdlou3Snr9OLYh4C', NULL, '2023-07-21 09:01:26', '2023-08-17 08:50:16'),
(7, 'Sudip Ghosh', 'sudip.webbersmedia@gmail.com', NULL, NULL, NULL, '$2y$10$XybzcymG9QHRAA8fLz5RVeH1mcE4qgH2FUNOFauaXI3DNgG17RDZ2', NULL, '2023-08-07 13:56:10', '2023-08-14 10:29:55'),
(8, 'biswajit', 'buyohenoitta-4576@yopmail.com', NULL, NULL, NULL, '$2y$10$ox..pHMZpdgoo/zVLg5ELODf4ItrZqu2tnm6g.vaMEHwTjm2x5dnO', NULL, '2023-08-16 08:10:10', '2023-08-16 08:10:10'),
(9, 'Hakeem French', 'qetybyho@mailinator.com', NULL, NULL, NULL, '$2y$10$VcnmgVpwSAu5G3ufSLuZIe5miF5YzwGUFRpRc.dTS2SSB/nlTkFk2', NULL, '2023-08-17 08:53:34', '2023-08-17 08:53:34'),
(10, 'miri@mailinator.com', 'hefu@mailinator.com', 'miza@mailinator.com', 'Et ullam aut dolore', NULL, '$2y$10$m3EO/mJhwEYZuOmlVF9pwOJwxptzR8gzhnBVCnTZX9YBB4FpWe8Wq', NULL, '2023-08-21 13:40:24', '2023-08-21 13:47:16'),
(11, 'biswajit', 'admin@admin.in', NULL, NULL, NULL, '$2y$10$DvGs/hnqzgTn1e84osc8B.R/oxF3nEBh7Qs1oHqwFLDkdYHY1CO0a', NULL, '2023-08-22 08:35:29', '2023-08-22 08:35:29');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `variation` varchar(255) DEFAULT NULL,
  `carat` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `final_price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `product_id`, `variation`, `carat`, `size`, `amount`, `color`, `discount`, `final_price`, `image`, `created_at`, `updated_at`) VALUES
(1, '2', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:22:08', '2023-03-14 01:22:08'),
(2, '2', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:22:27', '2023-03-14 01:22:27'),
(3, '2', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:22:27', '2023-03-14 01:22:27'),
(4, '6', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:24:00', '2023-03-16 06:45:33'),
(5, '3', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:24:00', '2023-03-14 01:24:00'),
(6, '4', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:34:45', '2023-03-14 01:34:45'),
(7, '4', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:34:45', '2023-03-14 01:34:45'),
(8, '5', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:46:18', '2023-03-14 01:46:18'),
(9, '5', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:46:18', '2023-03-14 01:46:18'),
(11, '9', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:53:28', '2023-07-17 02:01:06'),
(12, '7', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:55:37', '2023-03-14 01:55:37'),
(13, '7', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:55:37', '2023-03-14 01:55:37'),
(14, '8', 'Amet nihil fugit d', '7', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:57:01', '2023-03-14 01:57:01'),
(15, '8', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:57:01', '2023-03-14 01:57:01'),
(16, '9', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:57:45', '2023-07-17 02:01:06'),
(17, '9', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-14 01:57:45', '2023-07-17 02:01:06'),
(18, '10', 'Et dolorum sit aut', '22', '7', 'Alias voluptatum vol', 'In dolor velit eos', 'NA', 'NA', NULL, '2023-03-14 02:40:09', '2023-03-14 02:40:09'),
(21, '6', 'gddbhhdf', '17', '22', 'Molestias repellendu', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-03-16 06:45:33', '2023-03-16 06:45:33'),
(22, '11', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(23, '12', 'Harum molestiae adip', '41', '60', 'Minus natus voluptat', 'Voluptatibus non acc', 'NA', 'NA', NULL, '2023-07-12 00:17:36', '2023-07-12 00:17:36'),
(24, '13', 'Quo quaerat culpa p', '26', '74', 'Quo qui ut rerum aut', 'Vero quis consequatu', 'NA', 'NA', NULL, '2023-07-12 00:18:26', '2023-07-12 00:18:26'),
(25, '13', 'Quo quaerat culpa p', '26', '74', 'Quo qui ut rerum aut', 'Vero quis consequatu', 'NA', 'NA', NULL, '2023-07-12 00:46:21', '2023-07-12 00:46:21'),
(26, '14', 'Non maxime officiis', '69', '4', 'Qui pariatur Deleni', 'Explicabo Ipsum tot', 'NA', 'NA', NULL, '2023-07-12 01:44:34', '2023-07-12 01:44:34'),
(28, '9', 'fdghghdh', '7', '22', '1000', 'Aut saepe itaque lor', 'NA', 'NA', NULL, '2023-07-17 02:01:06', '2023-07-17 02:01:06'),
(29, '11', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-17 02:02:13', '2023-07-17 02:02:13'),
(30, '15', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-17 02:56:48', '2023-07-17 02:56:48'),
(32, '17', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-18 00:23:48', '2023-07-18 00:23:48'),
(33, '18', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-18 00:55:02', '2023-07-18 00:55:02'),
(34, '19', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-18 01:50:06', '2023-07-18 01:50:06'),
(35, '20', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-20 10:29:39', '2023-07-20 10:29:39'),
(36, '21', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-20 11:12:53', '2023-07-20 11:12:53'),
(37, '22', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-21 11:50:05', '2023-07-21 11:50:05'),
(38, '23', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 08:25:18', '2023-07-22 08:25:18'),
(39, '24', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:10:50', '2023-07-22 09:10:50'),
(40, '25', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:10:52', '2023-07-22 09:10:52'),
(41, '26', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:24:14', '2023-07-22 09:24:14'),
(42, '27', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:29:30', '2023-07-22 09:29:30'),
(43, '28', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:37:09', '2023-07-22 09:37:09'),
(44, '29', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:41:30', '2023-07-22 09:41:30'),
(45, '30', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 09:51:17', '2023-07-22 09:51:17'),
(46, '31', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 10:00:43', '2023-07-22 10:00:43'),
(47, '32', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 10:07:02', '2023-07-22 10:07:02'),
(48, '33', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 10:13:52', '2023-07-22 10:13:52'),
(49, '34', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 10:24:36', '2023-07-22 10:24:36'),
(50, '35', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 10:59:55', '2023-07-22 10:59:55'),
(51, '36', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 11:01:57', '2023-07-22 11:01:57'),
(52, '37', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 11:10:00', '2023-07-22 11:10:00'),
(53, '38', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 11:18:09', '2023-07-22 11:18:09'),
(54, '39', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:07:23', '2023-07-22 12:07:23'),
(55, '40', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:13:49', '2023-07-22 12:13:49'),
(56, '41', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:25:07', '2023-07-22 12:25:07'),
(57, '42', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:37:13', '2023-07-22 12:37:13'),
(58, '43', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:44:13', '2023-07-22 12:44:13'),
(59, '44', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 12:48:51', '2023-07-22 12:48:51'),
(60, '45', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:09:28', '2023-07-22 13:09:28'),
(61, '46', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:19:25', '2023-07-22 13:19:25'),
(62, '47', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:24:47', '2023-07-22 13:24:47'),
(63, '48', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:31:00', '2023-07-22 13:31:00'),
(64, '49', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:36:46', '2023-07-22 13:36:46'),
(65, '50', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:47:28', '2023-07-22 13:47:28'),
(66, '51', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:48:05', '2023-07-22 13:48:05'),
(67, '52', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:53:24', '2023-07-22 13:53:24'),
(68, '53', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 13:59:28', '2023-07-22 13:59:28'),
(69, '54', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:02:47', '2023-07-22 14:02:47'),
(70, '55', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:08:19', '2023-07-22 14:08:19'),
(71, '56', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:18:39', '2023-07-22 14:18:39'),
(72, '57', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:41:58', '2023-07-22 14:41:58'),
(73, '58', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:47:01', '2023-07-22 14:47:01'),
(74, '59', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:48:28', '2023-07-22 14:48:28'),
(75, '60', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 14:57:30', '2023-07-22 14:57:30'),
(76, '61', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:05:26', '2023-07-22 15:05:26'),
(77, '62', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:07:59', '2023-07-22 15:07:59'),
(78, '63', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:10:31', '2023-07-22 15:10:31'),
(79, '64', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:12:45', '2023-07-22 15:12:45'),
(80, '65', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:13:18', '2023-07-22 15:13:18'),
(81, '66', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:18:36', '2023-07-22 15:18:36'),
(82, '67', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:24:53', '2023-07-22 15:24:53'),
(83, '68', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:32:41', '2023-07-22 15:32:41'),
(84, '69', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:33:41', '2023-07-22 15:33:41'),
(85, '70', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:39:31', '2023-07-22 15:39:31'),
(86, '71', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:43:28', '2023-07-22 15:43:28'),
(87, '72', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:50:15', '2023-07-22 15:50:15'),
(88, '73', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 15:56:46', '2023-07-22 15:56:46'),
(89, '74', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 16:03:52', '2023-07-22 16:03:52'),
(90, '75', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 16:09:39', '2023-07-22 16:09:39'),
(91, '76', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 16:36:11', '2023-07-22 16:36:11'),
(92, '77', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-22 16:42:55', '2023-07-22 16:42:55'),
(93, '78', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:00:06', '2023-07-23 06:00:06'),
(94, '79', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:05:07', '2023-07-23 06:05:07'),
(95, '80', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:11:54', '2023-07-23 06:11:54'),
(96, '81', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:15:13', '2023-07-23 06:15:13'),
(97, '82', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:24:11', '2023-07-23 06:24:11'),
(98, '83', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:31:36', '2023-07-23 06:31:36'),
(99, '84', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 06:46:55', '2023-07-23 06:46:55'),
(100, '85', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 07:05:22', '2023-07-23 07:05:22'),
(101, '86', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 07:18:15', '2023-07-23 07:18:15'),
(102, '87', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 07:23:41', '2023-07-23 07:23:41'),
(103, '88', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 07:42:39', '2023-07-23 07:42:39'),
(104, '89', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 07:56:31', '2023-07-23 07:56:31'),
(105, '90', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:03:00', '2023-07-23 08:03:00'),
(106, '91', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:09:08', '2023-07-23 08:09:08'),
(107, '92', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:12:52', '2023-07-23 08:12:52'),
(108, '93', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:17:57', '2023-07-23 08:17:57'),
(109, '94', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:27:53', '2023-07-23 08:27:53'),
(110, '95', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:32:38', '2023-07-23 08:32:38'),
(111, '96', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 08:59:53', '2023-07-23 08:59:53'),
(112, '97', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:03:48', '2023-07-23 09:03:48'),
(113, '98', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:12:01', '2023-07-23 09:12:01'),
(114, '99', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:15:00', '2023-07-23 09:15:00'),
(115, '100', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:15:54', '2023-07-23 09:15:54'),
(116, '101', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:19:58', '2023-07-23 09:19:58'),
(117, '102', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:21:12', '2023-07-23 09:21:12'),
(118, '103', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:24:31', '2023-07-23 09:24:31'),
(119, '104', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:25:26', '2023-07-23 09:25:26'),
(120, '105', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:28:36', '2023-07-23 09:28:36'),
(121, '106', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:33:00', '2023-07-23 09:33:00'),
(122, '107', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:35:35', '2023-07-23 09:35:35'),
(123, '108', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:38:01', '2023-07-23 09:38:01'),
(124, '109', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:49:36', '2023-07-23 09:49:36'),
(125, '110', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:50:05', '2023-07-23 09:50:05'),
(126, '111', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:51:29', '2023-07-23 09:51:29'),
(127, '112', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:55:41', '2023-07-23 09:55:41'),
(128, '113', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:57:18', '2023-07-23 09:57:18'),
(129, '114', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 09:59:58', '2023-07-23 09:59:58'),
(130, '115', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:09:51', '2023-07-23 10:09:51'),
(131, '116', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:17:21', '2023-07-23 10:17:21'),
(132, '117', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:24:08', '2023-07-23 10:24:08'),
(133, '118', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:25:29', '2023-07-23 10:25:29'),
(134, '119', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:30:26', '2023-07-23 10:30:26'),
(135, '120', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:36:45', '2023-07-23 10:36:45'),
(136, '121', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:41:15', '2023-07-23 10:41:15'),
(137, '122', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:45:21', '2023-07-23 10:45:21'),
(138, '123', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:54:46', '2023-07-23 10:54:46'),
(139, '124', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:54:53', '2023-07-23 10:54:53'),
(140, '125', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:56:39', '2023-07-23 10:56:39'),
(141, '126', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 10:58:03', '2023-07-23 10:58:03'),
(142, '127', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 11:38:05', '2023-07-23 11:38:05'),
(143, '128', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 11:40:44', '2023-07-23 11:40:44'),
(144, '129', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 11:47:25', '2023-07-23 11:47:25'),
(145, '130', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 11:55:30', '2023-07-23 11:55:30'),
(146, '131', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 12:01:14', '2023-07-23 12:01:14'),
(147, '132', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 12:08:03', '2023-07-23 12:08:03'),
(148, '133', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 12:12:07', '2023-07-23 12:12:07'),
(149, '134', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 12:19:27', '2023-07-23 12:19:27'),
(150, '135', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 12:28:41', '2023-07-23 12:28:41'),
(151, '136', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:18:32', '2023-07-23 13:18:32'),
(152, '137', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:25:17', '2023-07-23 13:25:17'),
(153, '138', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:28:57', '2023-07-23 13:28:57'),
(154, '139', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:32:30', '2023-07-23 13:32:30'),
(155, '140', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:34:37', '2023-07-23 13:34:37'),
(156, '141', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:36:40', '2023-07-23 13:36:40'),
(157, '142', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:39:30', '2023-07-23 13:39:30'),
(158, '143', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:42:45', '2023-07-23 13:42:45'),
(159, '144', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:44:08', '2023-07-23 13:44:08'),
(160, '145', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:48:10', '2023-07-23 13:48:10'),
(161, '146', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:50:21', '2023-07-23 13:50:21'),
(162, '147', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:50:43', '2023-07-23 13:50:43'),
(163, '148', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:52:21', '2023-07-23 13:52:21'),
(164, '149', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:54:16', '2023-07-23 13:54:16'),
(165, '150', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 13:59:44', '2023-07-23 13:59:44'),
(166, '151', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:03:08', '2023-07-23 14:03:08'),
(167, '152', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:04:42', '2023-07-23 14:04:42'),
(168, '153', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:10:45', '2023-07-23 14:10:45'),
(169, '154', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:11:24', '2023-07-23 14:11:24'),
(170, '155', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:15:13', '2023-07-23 14:15:13'),
(171, '156', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:16:56', '2023-07-23 14:16:56'),
(172, '157', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:17:12', '2023-07-23 14:17:12'),
(173, '158', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:18:55', '2023-07-23 14:18:55'),
(174, '159', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:21:37', '2023-07-23 14:21:37'),
(175, '160', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:24:06', '2023-07-23 14:24:06'),
(176, '161', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:30:12', '2023-07-23 14:30:12'),
(177, '162', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:30:16', '2023-07-23 14:30:16'),
(178, '163', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:33:15', '2023-07-23 14:33:15'),
(179, '164', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:36:15', '2023-07-23 14:36:15'),
(180, '165', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:36:45', '2023-07-23 14:36:45'),
(181, '166', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:39:54', '2023-07-23 14:39:54'),
(182, '167', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:46:40', '2023-07-23 14:46:40'),
(183, '168', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 14:46:42', '2023-07-23 14:46:42'),
(184, '169', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:02:26', '2023-07-23 15:02:26'),
(185, '170', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:07:48', '2023-07-23 15:07:48'),
(186, '171', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:08:31', '2023-07-23 15:08:31'),
(187, '172', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:10:22', '2023-07-23 15:10:22'),
(188, '173', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:12:45', '2023-07-23 15:12:45'),
(189, '174', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:15:23', '2023-07-23 15:15:23'),
(190, '175', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:20:20', '2023-07-23 15:20:20'),
(191, '176', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:28:25', '2023-07-23 15:28:25'),
(192, '177', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:33:30', '2023-07-23 15:33:30'),
(193, '178', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:44:52', '2023-07-23 15:44:52'),
(194, '179', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 15:51:29', '2023-07-23 15:51:29'),
(195, '180', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 16:02:13', '2023-07-23 16:02:13'),
(196, '181', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 16:14:07', '2023-07-23 16:14:07'),
(197, '182', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 16:18:41', '2023-07-23 16:18:41'),
(198, '183', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 16:30:10', '2023-07-23 16:30:10'),
(199, '184', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-23 16:35:56', '2023-07-23 16:35:56'),
(200, '185', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:22:03', '2023-07-25 06:22:03'),
(201, '186', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:27:11', '2023-07-25 06:27:11'),
(202, '187', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:31:26', '2023-07-25 06:31:26'),
(203, '188', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:35:45', '2023-07-25 06:35:45'),
(204, '189', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:39:57', '2023-07-25 06:39:57'),
(205, '190', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:44:29', '2023-07-25 06:44:29'),
(206, '191', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:50:36', '2023-07-25 06:50:36'),
(207, '192', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:54:38', '2023-07-25 06:54:38'),
(208, '193', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:54:43', '2023-07-25 06:54:43'),
(209, '194', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 06:59:41', '2023-07-25 06:59:41'),
(210, '195', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 07:04:06', '2023-07-25 07:04:06'),
(211, '196', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 07:15:33', '2023-07-25 07:15:33'),
(212, '197', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 07:22:08', '2023-07-25 07:22:08'),
(213, '198', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 09:55:31', '2023-07-25 09:55:31'),
(214, '199', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:02:25', '2023-07-25 10:02:25'),
(215, '200', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:10:01', '2023-07-25 10:10:01'),
(216, '201', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:15:10', '2023-07-25 10:15:10'),
(217, '202', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:21:01', '2023-07-25 10:21:01'),
(218, '203', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:29:09', '2023-07-25 10:29:09'),
(219, '204', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:36:49', '2023-07-25 10:36:49'),
(220, '205', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:42:57', '2023-07-25 10:42:57'),
(221, '206', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:52:06', '2023-07-25 10:52:06'),
(222, '207', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 10:58:09', '2023-07-25 10:58:09'),
(223, '208', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 11:29:49', '2023-07-25 11:29:49'),
(224, '209', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 11:35:33', '2023-07-25 11:35:33'),
(225, '210', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 11:41:14', '2023-07-25 11:41:14'),
(226, '211', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 12:00:32', '2023-07-25 12:00:32'),
(227, '212', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 13:05:14', '2023-07-25 13:05:14'),
(228, '213', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 13:24:54', '2023-07-25 13:24:54'),
(229, '214', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 14:47:59', '2023-07-25 14:47:59'),
(230, '215', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 15:44:41', '2023-07-25 15:44:41'),
(231, '216', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 15:52:19', '2023-07-25 15:52:19'),
(232, '217', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 16:01:35', '2023-07-25 16:01:35'),
(233, '218', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 16:20:54', '2023-07-25 16:20:54'),
(234, '219', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 16:29:10', '2023-07-25 16:29:10'),
(235, '220', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 16:51:34', '2023-07-25 16:51:34'),
(236, '221', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-25 16:57:38', '2023-07-25 16:57:38'),
(237, '222', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 06:11:29', '2023-07-26 06:11:29'),
(238, '223', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 06:19:21', '2023-07-26 06:19:21'),
(239, '224', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 07:00:17', '2023-07-26 07:00:17'),
(240, '225', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 07:05:40', '2023-07-26 07:05:40'),
(241, '226', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 08:52:58', '2023-07-26 08:52:58'),
(242, '227', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 08:58:29', '2023-07-26 08:58:29'),
(243, '228', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:08:27', '2023-07-26 09:08:27'),
(244, '229', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:14:51', '2023-07-26 09:14:51'),
(245, '230', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:21:33', '2023-07-26 09:21:33'),
(246, '231', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:28:19', '2023-07-26 09:28:19'),
(247, '232', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:45:40', '2023-07-26 09:45:40'),
(248, '233', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 09:52:33', '2023-07-26 09:52:33'),
(249, '234', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 10:17:19', '2023-07-26 10:17:19'),
(250, '235', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 10:25:18', '2023-07-26 10:25:18'),
(251, '236', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 10:44:00', '2023-07-26 10:44:00'),
(252, '237', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 10:48:24', '2023-07-26 10:48:24'),
(253, '238', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 10:56:44', '2023-07-26 10:56:44'),
(254, '239', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:02:09', '2023-07-26 11:02:09'),
(255, '240', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:08:21', '2023-07-26 11:08:21'),
(256, '241', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:19:13', '2023-07-26 11:19:13'),
(257, '242', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:25:14', '2023-07-26 11:25:14'),
(258, '243', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:35:16', '2023-07-26 11:35:16'),
(259, '244', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 11:44:22', '2023-07-26 11:44:22'),
(260, '245', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 14:46:31', '2023-07-26 14:46:31'),
(261, '246', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 14:52:39', '2023-07-26 14:52:39'),
(262, '247', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 14:58:38', '2023-07-26 14:58:38'),
(263, '248', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:05:04', '2023-07-26 15:05:04'),
(264, '249', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:16:14', '2023-07-26 15:16:14'),
(265, '250', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:24:16', '2023-07-26 15:24:16'),
(266, '251', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:34:51', '2023-07-26 15:34:51'),
(267, '252', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:43:56', '2023-07-26 15:43:56'),
(268, '253', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 15:55:41', '2023-07-26 15:55:41'),
(269, '254', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:17:41', '2023-07-26 16:17:41'),
(270, '255', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:25:22', '2023-07-26 16:25:22'),
(271, '256', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:29:47', '2023-07-26 16:29:47'),
(272, '257', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:35:37', '2023-07-26 16:35:37'),
(273, '258', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:40:55', '2023-07-26 16:40:55'),
(274, '259', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:48:10', '2023-07-26 16:48:10'),
(275, '260', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 16:55:22', '2023-07-26 16:55:22'),
(276, '261', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 17:03:17', '2023-07-26 17:03:17'),
(277, '262', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 17:09:16', '2023-07-26 17:09:16'),
(278, '263', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 17:17:50', '2023-07-26 17:17:50'),
(279, '264', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-26 17:23:45', '2023-07-26 17:23:45'),
(280, '265', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 08:31:05', '2023-07-27 08:31:05'),
(281, '266', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 08:40:14', '2023-07-27 08:40:14'),
(282, '267', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 08:45:58', '2023-07-27 08:45:58'),
(283, '268', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 08:54:09', '2023-07-27 08:54:09'),
(284, '269', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 09:25:15', '2023-07-27 09:25:15'),
(285, '270', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 09:56:55', '2023-07-27 09:56:55'),
(286, '271', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 10:05:00', '2023-07-27 10:05:00'),
(287, '272', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 10:12:37', '2023-07-27 10:12:37'),
(288, '273', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 10:17:51', '2023-07-27 10:17:51'),
(289, '274', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 10:19:40', '2023-07-27 10:19:40'),
(290, '275', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 10:33:05', '2023-07-27 10:33:05'),
(291, '276', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 11:03:48', '2023-07-27 11:03:48'),
(292, '277', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 11:19:49', '2023-07-27 11:19:49'),
(293, '278', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 11:24:52', '2023-07-27 11:24:52'),
(294, '279', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 11:30:47', '2023-07-27 11:30:47'),
(295, '280', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:16:08', '2023-07-27 14:16:08'),
(296, '281', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:21:23', '2023-07-27 14:21:23'),
(297, '282', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:26:06', '2023-07-27 14:26:06'),
(298, '283', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:31:54', '2023-07-27 14:31:54'),
(299, '284', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:39:55', '2023-07-27 14:39:55'),
(300, '285', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:50:42', '2023-07-27 14:50:42'),
(301, '286', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 14:59:25', '2023-07-27 14:59:25'),
(302, '287', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 15:05:26', '2023-07-27 15:05:26'),
(303, '288', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 15:11:06', '2023-07-27 15:11:06'),
(304, '289', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 15:16:11', '2023-07-27 15:16:11'),
(305, '290', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 15:36:38', '2023-07-27 15:36:38'),
(306, '291', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-27 17:21:17', '2023-07-27 17:21:17'),
(307, '292', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 06:56:35', '2023-07-28 06:56:35'),
(308, '293', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:02:38', '2023-07-28 07:02:38'),
(309, '294', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:07:59', '2023-07-28 07:07:59'),
(310, '295', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:12:15', '2023-07-28 07:12:15'),
(311, '296', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:17:38', '2023-07-28 07:17:38'),
(312, '297', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:47:31', '2023-07-28 07:47:31'),
(313, '298', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:48:34', '2023-07-28 07:48:34'),
(314, '299', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:49:12', '2023-07-28 07:49:12'),
(315, '300', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 07:49:46', '2023-07-28 07:49:46'),
(316, '301', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 08:41:54', '2023-07-28 08:41:54'),
(317, '302', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 08:53:39', '2023-07-28 08:53:39'),
(318, '303', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 09:01:18', '2023-07-28 09:01:18'),
(319, '304', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 12:33:56', '2023-07-28 12:33:56'),
(320, '305', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 12:48:47', '2023-07-28 12:48:47'),
(321, '306', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 13:19:35', '2023-07-28 13:19:35'),
(322, '307', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 13:30:52', '2023-07-28 13:30:52'),
(323, '308', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 13:42:56', '2023-07-28 13:42:56'),
(324, '309', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 13:52:59', '2023-07-28 13:52:59'),
(325, '310', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 14:05:10', '2023-07-28 14:05:10'),
(326, '311', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 14:28:02', '2023-07-28 14:28:02'),
(327, '312', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-07-28 15:49:12', '2023-07-28 15:49:12'),
(328, '313', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 09:23:29', '2023-08-01 09:23:29'),
(329, '314', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 09:44:34', '2023-08-01 09:44:34'),
(330, '315', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 09:50:47', '2023-08-01 09:50:47'),
(331, '316', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 10:01:04', '2023-08-01 10:01:04'),
(332, '317', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 10:20:46', '2023-08-01 10:20:46'),
(333, '318', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 10:29:30', '2023-08-01 10:29:30'),
(334, '319', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 13:25:57', '2023-08-01 13:25:57'),
(335, '320', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 13:46:07', '2023-08-01 13:46:07'),
(336, '321', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 13:57:11', '2023-08-01 13:57:11'),
(337, '322', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-01 14:06:56', '2023-08-01 14:06:56'),
(338, '323', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 10:14:10', '2023-08-02 10:14:10'),
(339, '324', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:29:23', '2023-08-02 11:29:23'),
(340, '325', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:33:21', '2023-08-02 11:33:21'),
(341, '326', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:37:31', '2023-08-02 11:37:31'),
(342, '327', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:41:25', '2023-08-02 11:41:25'),
(343, '328', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:46:17', '2023-08-02 11:46:17'),
(344, '329', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:46:19', '2023-08-02 11:46:19'),
(345, '330', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:51:57', '2023-08-02 11:51:57'),
(346, '331', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 11:52:01', '2023-08-02 11:52:01'),
(347, '332', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 12:01:56', '2023-08-02 12:01:56'),
(348, '333', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 12:14:08', '2023-08-02 12:14:08'),
(349, '334', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 12:18:12', '2023-08-02 12:18:12'),
(350, '335', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 12:31:03', '2023-08-02 12:31:03'),
(351, '336', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 13:32:10', '2023-08-02 13:32:10'),
(352, '337', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:10:55', '2023-08-02 14:10:55'),
(353, '338', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:14:17', '2023-08-02 14:14:17'),
(354, '339', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:18:41', '2023-08-02 14:18:41'),
(355, '340', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:21:54', '2023-08-02 14:21:54'),
(356, '341', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:28:20', '2023-08-02 14:28:20'),
(357, '342', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 14:33:04', '2023-08-02 14:33:04'),
(358, '343', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:08:42', '2023-08-02 15:08:42'),
(359, '344', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:19:42', '2023-08-02 15:19:42'),
(360, '345', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:23:50', '2023-08-02 15:23:50'),
(361, '346', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:41:29', '2023-08-02 15:41:29'),
(362, '347', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:46:15', '2023-08-02 15:46:15'),
(363, '348', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-02 15:49:23', '2023-08-02 15:49:23'),
(364, '349', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 08:00:06', '2023-08-03 08:00:06'),
(365, '350', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 08:04:17', '2023-08-03 08:04:17'),
(366, '351', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 08:39:34', '2023-08-03 08:39:34'),
(367, '352', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 08:48:55', '2023-08-03 08:48:55'),
(368, '353', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 09:47:54', '2023-08-03 09:47:54'),
(369, '354', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 09:58:07', '2023-08-03 09:58:07'),
(370, '355', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:01:38', '2023-08-03 10:01:38'),
(371, '356', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:04:43', '2023-08-03 10:04:43'),
(372, '357', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:07:44', '2023-08-03 10:07:44'),
(373, '358', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:11:13', '2023-08-03 10:11:13'),
(374, '359', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:15:35', '2023-08-03 10:15:35'),
(375, '360', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:30:22', '2023-08-03 10:30:22'),
(376, '361', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:34:41', '2023-08-03 10:34:41'),
(377, '362', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-03 10:45:18', '2023-08-03 10:45:18'),
(378, '363', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:38:27', '2023-08-04 12:38:27'),
(379, '364', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:42:29', '2023-08-04 12:42:29'),
(380, '365', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:46:51', '2023-08-04 12:46:51'),
(381, '366', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:50:36', '2023-08-04 12:50:36'),
(382, '367', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:55:20', '2023-08-04 12:55:20'),
(383, '368', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 12:58:09', '2023-08-04 12:58:09'),
(384, '369', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 13:02:07', '2023-08-04 13:02:07'),
(385, '370', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 13:07:10', '2023-08-04 13:07:10'),
(386, '371', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 14:45:33', '2023-08-04 14:45:33'),
(387, '372', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 14:48:23', '2023-08-04 14:48:23'),
(388, '373', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-04 14:54:28', '2023-08-04 14:54:28'),
(389, '374', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:03:58', '2023-08-05 06:03:58'),
(390, '375', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:06:24', '2023-08-05 06:06:24'),
(391, '376', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:09:22', '2023-08-05 06:09:22'),
(392, '377', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:11:46', '2023-08-05 06:11:46'),
(393, '378', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:16:12', '2023-08-05 06:16:12'),
(394, '379', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:20:41', '2023-08-05 06:20:41'),
(395, '380', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:26:11', '2023-08-05 06:26:11'),
(396, '381', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:41:58', '2023-08-05 06:41:58'),
(397, '382', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 06:47:01', '2023-08-05 06:47:01'),
(398, '383', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 07:37:42', '2023-08-05 07:37:42'),
(399, '384', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:02:02', '2023-08-05 08:02:02'),
(400, '385', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:05:35', '2023-08-05 08:05:35'),
(401, '386', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:08:45', '2023-08-05 08:08:45'),
(402, '387', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:11:15', '2023-08-05 08:11:15'),
(403, '388', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:13:43', '2023-08-05 08:13:43'),
(404, '389', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:19:06', '2023-08-05 08:19:06'),
(405, '390', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:22:45', '2023-08-05 08:22:45'),
(406, '391', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 08:26:36', '2023-08-05 08:26:36'),
(407, '392', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 09:11:46', '2023-08-05 09:11:46'),
(408, '393', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 09:14:41', '2023-08-05 09:14:41'),
(409, '394', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 09:20:59', '2023-08-05 09:20:59'),
(410, '395', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 16:46:25', '2023-08-05 16:46:25'),
(411, '396', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 16:52:30', '2023-08-05 16:52:30'),
(412, '397', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 16:56:40', '2023-08-05 16:56:40'),
(413, '398', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 17:00:39', '2023-08-05 17:00:39'),
(414, '399', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-05 17:04:51', '2023-08-05 17:04:51'),
(415, '400', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:31:29', '2023-08-06 07:31:29'),
(416, '401', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:32:11', '2023-08-06 07:32:11'),
(417, '402', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:32:12', '2023-08-06 07:32:12'),
(418, '403', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:49:53', '2023-08-06 07:49:53'),
(419, '404', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:52:57', '2023-08-06 07:52:57'),
(420, '405', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 07:57:35', '2023-08-06 07:57:35'),
(421, '406', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 08:56:23', '2023-08-06 08:56:23'),
(422, '407', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:00:11', '2023-08-06 09:00:11'),
(423, '408', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:04:05', '2023-08-06 09:04:05'),
(424, '409', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:07:16', '2023-08-06 09:07:16'),
(425, '410', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:12:40', '2023-08-06 09:12:40'),
(426, '411', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:49:45', '2023-08-06 09:49:45'),
(427, '412', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:52:42', '2023-08-06 09:52:42'),
(428, '413', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:55:44', '2023-08-06 09:55:44'),
(429, '414', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 09:59:19', '2023-08-06 09:59:19'),
(430, '415', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:02:11', '2023-08-06 10:02:11'),
(431, '416', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:05:14', '2023-08-06 10:05:14'),
(432, '417', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:10:27', '2023-08-06 10:10:27'),
(433, '418', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:17:26', '2023-08-06 10:17:26'),
(434, '419', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:21:02', '2023-08-06 10:21:02'),
(435, '420', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:26:20', '2023-08-06 10:26:20'),
(436, '421', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 10:38:10', '2023-08-06 10:38:10'),
(437, '422', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 11:07:14', '2023-08-06 11:07:14'),
(438, '423', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 11:10:50', '2023-08-06 11:10:50'),
(439, '424', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 11:14:03', '2023-08-06 11:14:03'),
(440, '425', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 11:18:48', '2023-08-06 11:18:48'),
(441, '426', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 11:23:04', '2023-08-06 11:23:04'),
(442, '427', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 12:27:16', '2023-08-06 12:27:16'),
(443, '428', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 12:36:20', '2023-08-06 12:36:20'),
(444, '429', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 12:40:51', '2023-08-06 12:40:51'),
(445, '430', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 12:46:11', '2023-08-06 12:46:11'),
(446, '431', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 12:59:10', '2023-08-06 12:59:10'),
(447, '432', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:01:44', '2023-08-06 13:01:44'),
(448, '433', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:11:51', '2023-08-06 13:11:51'),
(449, '434', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:40:15', '2023-08-06 13:40:15'),
(450, '435', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:45:55', '2023-08-06 13:45:55'),
(451, '436', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:48:55', '2023-08-06 13:48:55'),
(452, '437', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 13:52:29', '2023-08-06 13:52:29'),
(453, '438', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:31:40', '2023-08-06 14:31:40'),
(454, '439', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:34:51', '2023-08-06 14:34:51'),
(455, '440', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:38:28', '2023-08-06 14:38:28'),
(456, '441', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:41:31', '2023-08-06 14:41:31'),
(457, '442', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:46:34', '2023-08-06 14:46:34'),
(458, '443', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:51:06', '2023-08-06 14:51:06'),
(459, '444', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:54:47', '2023-08-06 14:54:47'),
(460, '445', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 14:58:16', '2023-08-06 14:58:16'),
(461, '446', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:02:34', '2023-08-06 15:02:34'),
(462, '447', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:09:59', '2023-08-06 15:09:59'),
(463, '448', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:14:18', '2023-08-06 15:14:18'),
(464, '449', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:18:22', '2023-08-06 15:18:22'),
(465, '450', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:23:50', '2023-08-06 15:23:50'),
(466, '451', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:28:07', '2023-08-06 15:28:07'),
(467, '452', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:35:39', '2023-08-06 15:35:39'),
(468, '453', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-06 15:40:14', '2023-08-06 15:40:14');
INSERT INTO `variations` (`id`, `product_id`, `variation`, `carat`, `size`, `amount`, `color`, `discount`, `final_price`, `image`, `created_at`, `updated_at`) VALUES
(469, '454', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 09:11:47', '2023-08-07 09:11:47'),
(470, '455', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 09:15:54', '2023-08-07 09:15:54'),
(471, '456', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 09:22:57', '2023-08-07 09:22:57'),
(472, '457', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 11:10:56', '2023-08-07 11:10:56'),
(473, '458', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 11:11:00', '2023-08-07 11:11:00'),
(474, '459', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-07 13:31:47', '2023-08-07 13:31:47'),
(475, '460', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-10 06:49:36', '2023-08-10 06:49:36'),
(476, '461', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-08-10 06:51:12', '2023-08-10 06:51:12'),
(477, '462', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-11-02 01:07:28', '2023-11-02 01:07:28'),
(478, '463', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-11-02 02:01:57', '2023-11-02 02:01:57'),
(479, '464', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-11-02 02:33:34', '2023-11-02 02:33:34'),
(480, '465', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', NULL, '2023-11-02 03:01:48', '2023-11-02 03:01:48'),
(492, '466', 'Ex velit eiusmod nob-002', 'NA', 'NA', 'NA', 'NA', 'NA', '1500', NULL, '2023-11-02 05:36:50', '2023-11-02 05:36:50'),
(493, '466', 'Ex velit eiusmod nob-0021', 'NA', 'NA', 'NA', 'NA', 'NA', '15000', NULL, '2023-11-02 05:36:50', '2023-11-02 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `variation_images`
--

CREATE TABLE `variation_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `var_id` varchar(100) NOT NULL,
  `var_image` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variation_images`
--

INSERT INTO `variation_images` (`id`, `var_id`, `var_image`, `created_at`, `updated_at`) VALUES
(1, '2', '1678776747.png', '2023-03-14 01:22:27', '2023-03-14 01:22:27'),
(2, '3', '1678776747.png', '2023-03-14 01:22:27', '2023-03-14 01:22:27'),
(3, '4', '1678776840.png', '2023-03-14 01:24:00', '2023-03-14 01:24:00'),
(4, '5', '1678776841.png', '2023-03-14 01:24:01', '2023-03-14 01:24:01'),
(5, '6', '1678777485.png', '2023-03-14 01:34:45', '2023-03-14 01:34:45'),
(6, '7', '1678777485.png', '2023-03-14 01:34:45', '2023-03-14 01:34:45'),
(7, '8', '1678778178.png', '2023-03-14 01:46:18', '2023-03-14 01:46:18'),
(8, '9', '1678778178.png', '2023-03-14 01:46:18', '2023-03-14 01:46:18'),
(9, '10', '1678778608.png', '2023-03-14 01:53:28', '2023-03-14 01:53:28'),
(10, '11', '1678778608.png', '2023-03-14 01:53:28', '2023-03-14 01:53:28'),
(11, '12', '1678778737.png', '2023-03-14 01:55:37', '2023-03-14 01:55:37'),
(12, '13', '1678778738.png', '2023-03-14 01:55:38', '2023-03-14 01:55:38'),
(13, '14', '1678778821.png', '2023-03-14 01:57:01', '2023-03-14 01:57:01'),
(14, '15', '1678778821.png', '2023-03-14 01:57:01', '2023-03-14 01:57:01'),
(15, '16', '1678778865.png', '2023-03-14 01:57:45', '2023-03-14 01:57:45'),
(16, '17', '1678778865.png', '2023-03-14 01:57:45', '2023-03-14 01:57:45');

-- --------------------------------------------------------

--
-- Table structure for table `video_banner`
--

CREATE TABLE `video_banner` (
  `id` int(11) NOT NULL,
  `video_link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video_banner`
--

INSERT INTO `video_banner` (`id`, `video_link`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/embed/AuyR0BuXfZU', '2023-08-22 08:31:07', '2023-08-22 08:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `website_galleries`
--

CREATE TABLE `website_galleries` (
  `id` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `added_id` varchar(255) NOT NULL,
  `img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_galleries`
--

INSERT INTO `website_galleries` (`id`, `added_by`, `added_id`, `img`, `created_at`, `updated_at`) VALUES
(8, 'admin', '3', '1690778817gallery-1.png', '2023-07-31 08:46:57', '2023-07-31 08:46:57'),
(9, 'admin', '3', '1690778819gallery-2.png', '2023-07-31 08:46:59', '2023-07-31 08:46:59'),
(10, 'admin', '3', '1690778821gallery-3.png', '2023-07-31 08:47:01', '2023-07-31 08:47:01'),
(11, 'admin', '3', '1690778822gallery-4.png', '2023-07-31 08:47:02', '2023-07-31 08:47:02'),
(12, 'admin', '3', '1690778824gallery-5.png', '2023-07-31 08:47:04', '2023-07-31 08:47:04'),
(13, 'admin', '3', '1690778828gallery-6.png', '2023-07-31 08:47:08', '2023-07-31 08:47:08'),
(14, 'admin', '3', '1690778848vidbgy.jpg', '2023-07-31 08:47:28', '2023-07-31 08:47:28'),
(15, 'admin', '3', '1690778857vidbgy2.jpg', '2023-07-31 08:47:37', '2023-07-31 08:47:37'),
(16, 'admin', '3', '1690779037g-9.jpeg', '2023-07-31 08:50:37', '2023-07-31 08:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` int(11) NOT NULL,
  `details` text DEFAULT NULL,
  `reason_title_1` text DEFAULT NULL,
  `reason_1` text DEFAULT NULL,
  `reason_title_2` text DEFAULT NULL,
  `reason_2` text DEFAULT NULL,
  `reason_title_3` text DEFAULT NULL,
  `reason_3` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `details`, `reason_title_1`, `reason_1`, `reason_title_2`, `reason_2`, `reason_title_3`, `reason_3`, `img`, `created_at`, `updated_at`) VALUES
(1, '<p>Lorem ipsum is simply dummy text of the printing and typesetting industry, lorem ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley</p>', 'Hand Planted', 'There are many variations of passages of lorem ipsum available, but the majority have suffered alteration in some form.', 'Natural Sunlight', 'It is a long established fact that a reader will be distracted by the reable content of a page.', 'Clean Air', 'There are many variations of passages of lorem ipsum available, but the majority have suffered.', '1692699880.jpg', '2023-08-22 10:08:08', '2023-08-22 10:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '6', '118', '1', '2023-07-27 09:18:29', '2023-07-27 09:18:29'),
(2, '6', '73', '1', '2023-07-27 09:31:49', '2023-07-27 09:31:49'),
(4, '6', '262', '1', '2023-07-27 09:49:45', '2023-07-27 09:49:45'),
(5, '6', '113', '1', '2023-07-27 09:54:41', '2023-07-27 09:54:41'),
(13, '7', '126', '1', '2023-08-11 15:59:12', '2023-08-11 15:59:12'),
(14, '7', '242', '1', '2023-08-11 16:02:56', '2023-08-11 16:02:56'),
(15, '7', '124', '1', '2023-08-11 16:04:21', '2023-08-11 16:04:21'),
(16, '6', '222', '1', '2023-08-14 08:18:02', '2023-08-14 08:18:02'),
(17, '6', '119', '1', '2023-08-14 11:09:08', '2023-08-14 11:09:08'),
(20, '11', '401', '1', '2023-08-22 09:36:24', '2023-08-22 09:36:24'),
(21, '11', '402', '1', '2023-08-22 09:36:35', '2023-08-22 09:36:35'),
(22, '11', '398', '1', '2023-08-22 09:36:41', '2023-08-22 09:36:41'),
(23, '11', '21', '1', '2023-08-22 12:49:30', '2023-08-22 12:49:30'),
(24, '11', '99', '1', '2023-08-22 12:49:44', '2023-08-22 12:49:44'),
(25, '11', '397', '1', '2023-08-22 12:50:20', '2023-08-22 12:50:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_products`
--
ALTER TABLE `ordered_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pdf_downloads`
--
ALTER TABLE `pdf_downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_compares`
--
ALTER TABLE `product_compares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_options`
--
ALTER TABLE `settings_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variation_images`
--
ALTER TABLE `variation_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_banner`
--
ALTER TABLE `video_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_galleries`
--
ALTER TABLE `website_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordered_products`
--
ALTER TABLE `ordered_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pdf_downloads`
--
ALTER TABLE `pdf_downloads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=467;

--
-- AUTO_INCREMENT for table `product_compares`
--
ALTER TABLE `product_compares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=458;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings_options`
--
ALTER TABLE `settings_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;

--
-- AUTO_INCREMENT for table `variation_images`
--
ALTER TABLE `variation_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `video_banner`
--
ALTER TABLE `video_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website_galleries`
--
ALTER TABLE `website_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
