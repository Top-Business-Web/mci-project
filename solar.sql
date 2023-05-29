-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2023 at 07:35 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_count` bigint NOT NULL,
  `hash_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `client_count`, `hash_ar`, `hash_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/about_us/21081675236200.jpg', 'aa', 'a', 'a', 'a', 32, 'aa', 'aa', '<p>aa</p>', '<p>aa</p>', NULL, '2023-02-01 07:23:20');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$NXinuUXyWKIIOvQ1AAr4fukN2DEvsqC.dHy7QqWEehVLn6oFi/7TG', NULL, '2022-12-11 10:28:06', '2022-12-11 10:28:06'),
(32, 'eldapour', 'eldapour@topbusiness.io', '$2y$10$DVjQCQRiWQbl4hGP/kR.r.pg06cY359hG4DOrFptFVXAwPQx4ERa6', NULL, '2023-01-13 13:01:03', '2023-01-13 13:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Must', 'assets/uploads/brands/87071674644567.png', '2023-01-25 11:02:47', '2023-01-25 11:02:47'),
(5, 'usfull', 'assets/uploads/brands/40181674645037.png', '2023-01-25 11:10:37', '2023-01-25 11:10:37'),
(7, 'suntree', 'assets/uploads/brands/9561674647848.png', '2023-01-25 11:57:28', '2023-01-25 11:57:28'),
(8, 'huawei', 'assets/uploads/brands/32521674653699.jpg', '2023-01-25 12:51:06', '2023-01-25 13:34:59'),
(9, 'newmax', 'assets/uploads/brands/56051674653885.jpg', '2023-01-25 13:38:05', '2023-01-25 13:38:05'),
(10, 'Yaskawa', 'assets/uploads/brands/18131674654089.jpg', '2023-01-25 13:41:29', '2023-01-25 13:41:29'),
(11, 'His', 'assets/uploads/brands/63781674654102.jpg', '2023-01-25 13:41:42', '2023-01-25 13:41:42'),
(12, 'vansan', 'assets/uploads/brands/82591674654125.jpg', '2023-01-25 13:42:05', '2023-01-25 13:42:05'),
(13, 'invt', 'assets/uploads/brands/62671674654235.jpg', '2023-01-25 13:42:46', '2023-01-25 13:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(3, 'جينكو', 'Jinko', '2023-01-31 14:13:29', '2023-01-31 14:13:29'),
(4, 'هواوي', 'Huawei', '2023-01-31 14:14:59', '2023-01-31 14:14:59'),
(5, 'يوسفل', 'Usfull', '2023-01-31 14:15:52', '2023-01-31 14:15:52'),
(6, 'سونتري', 'Suntree', '2023-01-31 14:17:06', '2023-01-31 14:17:06'),
(7, 'نيو ماكس', 'Newmax', '2023-01-31 14:17:30', '2023-01-31 14:17:30'),
(8, 'موست', 'Must', '2023-01-31 14:17:50', '2023-01-31 14:17:50'),
(9, 'هيس', 'HIS', '2023-01-31 14:18:12', '2023-01-31 14:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `services` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `services`, `message`, `created_at`, `updated_at`) VALUES
(19, 'fffff', 'admin@admin.com', 1020300050, 's1', 'fffff', '2023-01-25 06:16:28', '2023-01-25 06:16:28'),
(20, 'Reagan Maddox', 'fave@mailinator.com', 675432, 's1', 'Non non cum est hic', '2023-01-30 07:15:35', '2023-01-30 07:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_20_123415_create_admins_table', 1),
(3, '2023_01_08_130957_create_settings_table', 1),
(4, '2023_01_08_133119_create_about_us_table', 1),
(5, '2023_01_08_133627_create_brands_table', 1),
(6, '2023_01_08_134015_create_services_table', 1),
(7, '2023_01_08_135121_create_categories_table', 1),
(8, '2023_01_08_135410_create_products_table', 1),
(9, '2023_01_08_141826_create_contacts_table', 1),
(10, '2023_01_08_142347_create_quotes_table', 1),
(11, '2023_01_30_085019_create_projects_table', 2),
(12, '2023_01_30_141134_create_sliders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_number` bigint NOT NULL,
  `weight` bigint NOT NULL,
  `dimensions` bigint NOT NULL,
  `model_number` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `images`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `sku`, `category_id`, `tags`, `desc_ar`, `desc_en`, `part_number`, `weight`, `dimensions`, `model_number`, `created_at`, `updated_at`) VALUES
(25, '[\"assets\\/uploads\\/products\\/91821675236445.jpg\",\"assets\\/uploads\\/products\\/50961675236445.jpg\"]', 'ف نوع 550 وات', 'ف نوع 550 وات', 'ف نوع 550 وات', 'solar_valley1', '001', 4, '[\"dasd\",\"dasdas\",\"sadas\"]', 'ف نوع 550 وات', 'dadasd', 2514, 456456, 456456, 554556, '2023-01-31 14:22:42', '2023-02-01 07:27:25'),
(26, '[\"assets\\/uploads\\/products\\/62461675236435.jpg\",\"assets\\/uploads\\/products\\/14481675236435.jpg\"]', 'نوع N 565 واط', 'نوع N 565 واط', 'نوع N 565 واط', 'N-type 565 w', '0026', 3, '[\"jinko\",\"w\"]', 'نوع N 565 واط', 'N-type 565 w', 2, 100, 500, 1, '2023-02-01 06:02:26', '2023-02-01 07:27:15'),
(27, '[\"assets\\/uploads\\/products\\/53061675231435.jpg\",\"assets\\/uploads\\/products\\/67041675231435.jpg\",\"assets\\/uploads\\/products\\/91675231435.jpg\"]', 'التطبيقات التجارية والصناعية: ', 'Commercial and industrial applications: ', 'التطبيقات التجارية والصناعية: ', 'Commercial and industrial applications: ', '0027', 4, '[\"huawi\"]', 'التطبيقات التجارية والصناعية: ', 'Commercial and industrial applications: ', 2, 100, 500, 2, '2023-02-01 06:03:55', '2023-02-01 06:03:55'),
(28, '[\"assets\\/uploads\\/products\\/36521675236405.jpg\",\"assets\\/uploads\\/products\\/78491675236405.jpg\"]', 'شمس200-12-20كتل-م2', 'شمس200-12-20كتل-م2', 'شمس200-12-20كتل-م2', 'SUN2000-12-20KTL-M2 ', '0028', 4, '[\"Huawie\"]', 'شمس200-12-20كتل-م2', 'SUN2000-12-20KTL-M2 ', 3, 100, 500, 3, '2023-02-01 06:05:33', '2023-02-01 07:26:45'),
(29, '[\"assets\\/uploads\\/products\\/51161675236392.jpg\",\"assets\\/uploads\\/products\\/91421675236392.jpg\"]', 'شمس200-30-36-40كتل-م3', 'شمس200-30-36-40كتل-م3', 'شمس200-30-36-40كتل-م3', 'SUN2000-30-36-40KTL-M3', '0029', 4, '[\"Huawie\"]', 'شمس200-30-36-40كتل-م3', 'SUN2000-30-36-40KTL-M3', 4, 100, 500, 4, '2023-02-01 06:07:02', '2023-02-01 07:26:32'),
(30, '[\"assets\\/uploads\\/products\\/49001675236382.jpg\",\"assets\\/uploads\\/products\\/22811675236382.jpg\"]', 'شمس2000-60كتل-مو', 'شمس2000-60كتل-مو', 'شمس2000-60كتل-مو', 'SUN2000-60KTL-MO', '0030', 4, '[\"Huawie\"]', 'شمس2000-60كتل-مو', 'SUN2000-60KTL-MO', 5, 100, 500, 5, '2023-02-01 06:08:07', '2023-02-01 07:26:22'),
(31, '[\"assets\\/uploads\\/products\\/30281675236373.jpg\",\"assets\\/uploads\\/products\\/29251675236373.jpg\"]', 'شمس200-100كتل-م1', 'شمس200-100كتل-م1', 'شمس200-100كتل-م1', 'SUN2000-100KTL-M1', '0031', 4, '[\"Huawie\"]', 'شمس200-100كتل-م1', 'SUN2000-100KTL-M1', 6, 100, 500, 6, '2023-02-01 06:09:23', '2023-02-01 07:26:13'),
(32, '[\"assets\\/uploads\\/products\\/43161675236366.jpg\",\"assets\\/uploads\\/products\\/79581675236366.jpg\"]', 'شمس2000-115كتل-م2', 'شمس2000-115كتل-م2', 'شمس2000-115كتل-م2', 'SUN2000-115KTL-M2', '0032', 4, '[\"Huawie\"]', 'شمس2000-115كتل-م2', 'SUN2000-115KTL-M2', 7, 100, 500, 7, '2023-02-01 06:10:52', '2023-02-01 07:26:06'),
(33, '[\"assets\\/uploads\\/products\\/48541675236359.jpg\",\"assets\\/uploads\\/products\\/12881675236359.jpg\"]', 'العاكس السكني', 'العاكس السكني', 'العاكس السكني', 'Residential Inverter', '0033', 4, '[\"Huawie\"]', 'العاكس السكني', 'Residential Inverter', 8, 100, 500, 8, '2023-02-01 06:12:25', '2023-02-01 07:25:59'),
(34, '[\"assets\\/uploads\\/products\\/26311675236353.jpg\",\"assets\\/uploads\\/products\\/15321675236353.jpg\"]', 'شمس2000-3-4-5-6-8-10كتل-م1', 'شمس2000-3-4-5-6-8-10كتل-م1', 'شمس2000-3-4-5-6-8-10كتل-م1', 'SUN2000-3-4-5-6-8-10KTL-M1', '0034', 4, '[\"Huawie\"]', 'شمس2000-3-4-5-6-8-10كتل-م1', 'SUN2000-3-4-5-6-8-10KTL-M1', 9, 100, 500, 9, '2023-02-01 06:14:09', '2023-02-01 07:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `image`, `client`, `location`, `service_id`, `created_at`, `updated_at`) VALUES
(9, 'Voluptas delectus l', 'In lorem proident a', 'Exercitationem debit', 'Exercitationem debit', 'assets/uploads/projects/62621675236656.jpg', 'Dolore elit sed opt', 'In modi minima obcae', 6, '2023-02-01 06:26:19', '2023-02-01 07:30:56'),
(10, 'Mollit fugit volupt', 'At quis dolore moles', 'Aliquip sed mollitia', 'Aliquip sed mollitia', 'assets/uploads/projects/96571675236649.jpg', 'Eu aliqua Magni sit', 'Aliquid excepturi no', 9, '2023-02-01 06:26:28', '2023-02-01 07:30:49'),
(11, 'Perferendis animi d', 'Ab excepteur rerum r', 'Omnis accusantium re', 'Omnis accusantium re', 'assets/uploads/projects/29831675236642.jpg', 'Non incidunt sit s', 'Nemo quis aut quidem', 6, '2023-02-01 06:26:37', '2023-02-01 07:30:42'),
(12, 'Veritatis ut et recu', 'Ut qui enim culpa e', 'Blanditiis quia a ul', 'Blanditiis quia a ul', 'assets/uploads/projects/88141675236765.jpg', 'Deleniti in error qu', 'At voluptatem neque', 5, '2023-02-01 06:26:50', '2023-02-01 07:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint NOT NULL,
  `title_ar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `title_en` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_ar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `desc_en` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'التكلفة / الجودة:', 'Cost/Quality:', '<p>تكلفة مُحسَّنة بأعلى جودة ، مما يضمن تجربة خدمة قوية للمستخدم النهائي.</p>', '<p>Optimized cost with highest quality, ensuring solid end-user service experience.</p>', '2023-01-31 09:30:34', NULL),
(2, 'وقت التسليم الأمثل:', 'Optimum Delivery Time:', '<p>تعتمد الحياة بشكل أساسي على الطاقة ، لذلك من الجدير تسهيل جميع مرافقنا وإمكانياتنا لضمان أن يتم التسليم بالطريقة المثلى وأقصر وقت ممكن.</p>', '<p>Life is mainly based on energy, so it is worthy to facilitate all our facilities and capabilities to ensure that the delivery is done in the optimal way and the shortest possible time.</p>', '2023-01-31 09:30:34', NULL),
(3, 'شريك طويل الأمد:', 'Long Term Partner:', '<p>مع شريك موثوق به وملتزم لتحقيق هدف طويل الأجل ، يسعدنا بناء علاقة موثوقة طويلة الأمد ومربحة للجانبين مع عملائنا.</p>', '<p>With a trusted and committed partner for long-term objective, we are pleased to build a win-win long term trusted relationship with our customers.</p>', '2023-01-31 09:30:34', NULL),
(4, 'القطاعات المستهدفة:', 'Target Sectors:', '<p>&bull; أنظمة الطاقة الكهروضوئية المرتبطة بالشبكة (على الشبكة)</p>\r\n<p>&nbsp;</p>\r\n<p>&bull; أنظمة ضخ المياه بالطاقة الشمسية</p>\r\n<p>&nbsp;</p>\r\n<p>&bull; قطاع النفط والغاز</p>', '<p>&bull;<span style=\"white-space: pre;\"> </span>Grid tied PV systems (on-grid)</p>\r\n<p>&bull;<span style=\"white-space: pre;\"> </span>Solar water-pumping systems</p>\r\n<p>&bull;&nbsp; Oil &amp; Gas Sector</p>\r\n<p>&nbsp;</p>', '2023-01-31 09:30:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `system_complete` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usage` bigint DEFAULT NULL,
  `system_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panels_place` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_roof` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefer_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(5, 'التوريد', 'Supplying', 'توريد جميع مكونات الأنظمة الكهروضوئية ، الوحدات الكهروضوئية ، هيكل التركيب ، أجهزة ولوحات الحماية ، العواكس.', 'Supplying all PV system components PV modules, Mounting structure, Protection devices and panels, Inverters.', '2023-02-01 06:20:34', '2023-02-01 06:20:34'),
(6, '• كابلات التيار المستمر', '•Dc cables', '• كابلات التيار المستمر وبطاريات الدورة العميقة ومحركات المضخات والمضخات.', '•Dc cables, Deep cycle batteries, Pump drives, and Pumps.', '2023-02-01 06:21:49', '2023-02-01 06:21:49'),
(7, '•بعد البيع', '•After sales', '• دعم ما بعد البيع بما في ذلك الدعم الفني.', '•After sales support including technical support.', '2023-02-01 06:22:39', '2023-02-01 06:22:39'),
(8, 'هندسي', '•Engineering', '•استشاري هندسي.', '•Engineering consultant.', '2023-02-01 06:23:46', '2023-02-01 06:23:46'),
(9, '• نظام الكهروضوئية', '•PV system', '• صيانة تصميم أنظمة الطاقة الكهروضوئية.', '•PV system Design maintenance.', '2023-02-01 06:24:40', '2023-02-01 06:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sliders` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `title_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `desc_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `year_of_experince` bigint DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linked_in` text COLLATE utf8mb4_unicode_ci,
  `terms_conditions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shipping_policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `returns` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `work_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `sliders`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `year_of_experince`, `phone`, `email`, `address_ar`, `address_en`, `youtube`, `facebook`, `twitter`, `linked_in`, `terms_conditions`, `shipping_policy`, `returns`, `work_date`, `location`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/admins/images/87401674655792.png', '[\"assets\\/uploads\\/admins\\/sliders\\/13691675233949.jpg\",\"assets\\/uploads\\/admins\\/sliders\\/70781675233949.jpg\"]', 'aa', 'aa', 'asasa', 'sasas', 12, 21, 'sasa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', 'here', NULL, '2023-02-01 06:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `image_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_services` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_product` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_faqs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_project` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_about`, `image_services`, `image_product`, `image_faqs`, `image_project`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/sliders/54521675172954.jpg', 'assets/uploads/sliders/40261675236287.jpg', 'assets/uploads/sliders/18761675236287.jpg', 'assets/uploads/sliders/88251675236287.jpg', 'assets/uploads/sliders/91561675236600.jpg', '2023-01-11 11:17:13', '2023-02-01 07:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_service_id_foreign` (`service_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quotes`
--
ALTER TABLE `quotes`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
