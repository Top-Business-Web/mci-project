-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 01:03 PM
-- Server version: 8.0.32
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
(1, 'assets/uploads/about_us/78661675601553.jpg', 'سولار فالي', 'Solar Valley', 'سولار فالي', 'Solar Valley', 33, 'سولار فالي', 'Solar Valley', '<p>سولار فالي</p>', '<p>Solar Valley</p>', NULL, '2023-02-05 12:52:33');

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
(3, 'جينكو', 'Jinko', '2023-02-05 09:07:52', '2023-02-05 09:07:52'),
(4, 'هواوي', 'Huawei', '2023-02-05 09:08:20', '2023-02-05 09:08:20'),
(5, 'يوسفل', 'Usfull', '2023-02-05 09:10:48', '2023-02-05 09:10:48'),
(6, 'سونتري', 'Suntree', '2023-02-05 09:11:01', '2023-02-05 09:11:01'),
(7, 'نيو ماكس', 'Newmax', '2023-02-05 09:11:14', '2023-02-05 09:11:14'),
(8, 'موست', 'Must', '2023-02-05 09:11:27', '2023-02-05 09:11:27'),
(9, 'هيس', 'HIS', '2023-02-05 09:11:40', '2023-02-05 09:11:40');

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
(11, '2023_01_30_085019_create_projects_table', 2);

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
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part_number` bigint NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimensions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `images`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `sku`, `category_id`, `tags`, `desc_ar`, `desc_en`, `pdf`, `part_number`, `weight`, `dimensions`, `model_number`, `created_at`, `updated_at`) VALUES
(28, '[\"assets\\/uploads\\/products\\/70341675600105.jpg\",\"assets\\/uploads\\/products\\/66101675600105.png\"]', 'مركز الطاقة الذكية', 'Smart Energy Center', 'مركز الطاقة الذكية', 'SUN2000-3/4/5/6/8/10KTL-M1', '001', 4, '[\"Huawie\",\"waterHot\"]', '1 - تبلغ الطاقة الكهروضوئية القصوى لمدخل العاكس 20000 وات عندما يتم تصميم السلاسل الطويلة وتوصيلها بالكامل باستخدام محسنات الطاقة SUN2000-450W-P.\r\n2 - الحد الأقصى لجهد الدخل هو الحد الأعلى لجهد التيار المستمر. من المحتمل أن يؤدي أي جهد تيار مستمر أعلى إلى إتلاف العاكس.\r\n3 - قد يؤدي أي جهد دخل تيار مستمر يتجاوز نطاق جهد التشغيل إلى تشغيل العاكس بشكل غير صحيح.\r\n4 - C10 / 11: 10000 فولط أمبير\r\n5 - يرفع SUN2000-3 ~ 10KTL-M1 الإمكانات بين PV- والأرض إلى ما فوق الصفر من خلال وظيفة استرداد PID المتكاملة لاستعادة تدهور الوحدة من PID. تشمل أنواع الوحدات المدعومة: نوع P (أحادي ، بولي).\r\n6 - <10 وات عند تنشيط وظيفة استرداد PID', '1 - Inverter max input PV power is 20,000 Wp when long strings are designed and fully connected with SUN2000-450W-P power optimizers.\r\n2 - The maximum input voltage is the upper limit of the DC voltage. Any higher input DC voltage would probably damage inverter. \r\n3 - Any DC input voltage beyond the operating voltage range may result in inverter improper operating.\r\n4 - C10 / 11: 10,000 VA\r\n5 - SUN2000-3~10KTL-M1 raises potential between PV- and ground to above zero through integrated PID recovery function to recover module degradation from PID. Supported module types include: P-type (mono, poly).\r\n6 - <10 W when PID recovery function is activated', 'assets/uploads/pdf/65011675600499.pdf', 1, '17kg', '525 x 470 x 146.5 mm (20.7 x 18.5 x 5.8 inch)', '3-10KTL-M1', '2023-02-05 09:05:08', '2023-02-05 12:34:59'),
(29, '[\"assets\\/uploads\\/products\\/36931675600131.jpg\"]', 'تحكم PV الذكية', 'Smart PV Controller', 'تحكم PV الذكية', 'SUN2000-12/15/17/20KTL-M2', '0029', 4, '[\"Huawie\",\"waterHot\"]', '1 - الطاقة الكهروضوئية القصوى لمدخل العاكس هي 40،000 Wp عندما يتم تصميم السلاسل الطويلة وتوصيلها بالكامل باستخدام محسنات الطاقة SUN2000-450W-P.\r\n2 - الحد الأقصى لجهد الدخل هو الحد الأعلى لجهد التيار المستمر. من المحتمل أن يؤدي أي جهد تيار مستمر أعلى إلى إتلاف العاكس.\r\n3 - قد يؤدي أي جهد دخل تيار مستمر يتجاوز نطاق جهد التشغيل إلى تشغيل العاكس بشكل غير صحيح.\r\n4 - SUN2000-12 ~ 20KTL-M2 ترفع الإمكانات بين PV- والأرض إلى ما فوق الصفر من خلال وظيفة استرداد PID المتكاملة لاستعادة تدهور الوحدة من PID. تشمل أنواع الوحدات المدعومة: نوع P (أحادي ، بولي)\r\n5 -. <10 وات عند تنشيط وظيفة استرداد PID.', '1 - Inverter max input PV power is 40,000 Wp when long strings are designed and fully connected with SUN2000-450W-P power optimizers.\r\n2 - The maximum input voltage is the upper limit of the DC voltage. Any higher input DC voltage would probably damage inverter. \r\n3 - Any DC input voltage beyond the operating voltage range may result in inverter improper operating.\r\n4 - SUN2000-12~20KTL-M2 raises potential between PV- and ground to above zero through integrated PID recovery function to recover module degradation from PID. Supported module types include: P-type (mono, poly)\r\n5 -. <10 W when PID recovery function is activated.', 'assets/uploads/pdf/19921675600520.pdf', 1, '25kg', '525 x 470 x 262 mm (20.7 x 18.5 x 10.3 inch)', '12-20KTL-M2', '2023-02-05 09:20:45', '2023-02-05 12:35:20'),
(30, '[\"assets\\/uploads\\/products\\/88481675600166.jpg\"]', 'تحكم PV الذكية', 'Smart PV Controller', 'تحكم PV الذكية', 'SUN2000-30/36/40KTL-M3', '0030', 4, '[\"Huawie\",\"waterHot\"]', '1 - الحد الأقصى لجهد الدخل هو الحد الأعلى لجهد التيار المستمر. من المحتمل أن يؤدي أي جهد تيار مستمر أعلى إلى إتلاف العاكس.\r\n2 - قد يؤدي أي جهد دخل تيار مستمر يتجاوز نطاق جهد التشغيل إلى تشغيل العاكس بشكل غير صحيح.\r\n3 - لأوكرانيا والنمسا وبلجيكا وأوكرانيا ماكس. لن تتجاوز طاقة التيار المتردد الظاهرة 30.000 فولت أمبير (فيما يتعلق برمز الشبكة: VDE-AR-N-4105 و C10 / 11 والنمسا)\r\n4 - SUN2000-30 ~ 40KTL-M3 ترفع الإمكانات بين PV- والأرض إلى ما فوق الصفر من خلال وظيفة استرداد PID المتكاملة لاستعادة تدهور الوحدة من PID. تشمل أنواع الوحدات المدعومة: نوع P (أحادي ، بولي) ،\r\nنوع N (nPERT ، HIT)', '1 - The maximum input voltage is the upper limit of the DC voltage. Any higher input DC voltage would probably damage inverter. \r\n2 - Any DC input voltage beyond the operating voltage range may result in inverter improper operating.\r\n3 - For Austria, German, Belgium & Ukraine the Max. AC Apparent Power will not exceed 30,000 VA (with regard to grid code: VDE-AR-N-4105, C10/11 & Austria) \r\n4 - SUN2000-30~40KTL-M3 raises potential between PV- and ground to above zero through integrated PID recovery function to recover module degradation from PID. Supported module types include: P-type (mono, poly),\r\nN-type (nPERT, HIT)', 'assets/uploads/pdf/20091675600531.pdf', 1, '43 kg (94.8 lb)', '640 x 530 x 270 mm (25.2 x 20.9 x 10.6 inch)', '30-40KTL-M3', '2023-02-05 09:25:55', '2023-02-05 12:35:31'),
(31, '[\"assets\\/uploads\\/products\\/84261675596011.jpg\"]', 'تحكم PV الذكية', 'Smart PV Controller', 'تحكم PV الذكية', 'SUN2000-50KTL-M3', '0031', 4, '[\"Huawie\",\"waterHot\"]', '1 - الحد الأقصى لجهد الدخل هو الحد الأعلى لجهد التيار المستمر. من المحتمل أن يؤدي أي جهد تيار مستمر أعلى للإدخال إلى إتلاف العاكس.\r\n2 - قد يؤدي أي جهد دخل تيار مستمر يتجاوز نطاق جهد التشغيل إلى تشغيل العاكس بشكل غير صحيح\r\n3 - SUN2000-30 ~ 50KTL-M3 ترفع الإمكانات بين PV- والأرض إلى ما فوق الصفر من خلال وظيفة استرداد PID المتكاملة لاستعادة تدهور الوحدة من PID. تشمل أنواع الوحدات المدعومة: نوع P (أحادي ، بولي) ، نوع N (nPERT ، HIT)', '1 - The maximum input voltage is the upper limit of the DC voltage. Any higher inputDC voltage would probably damage inverter.\r\n2 - Any DC input voltage beyond the operating voltage range may result in inverter improper operating\r\n3 - SUN2000-30~50KTL-M3 raises potential between PV- and ground to above zero through integrated PID recovery functionto recover module degradation from PID. Supported module types include:P-type (mono, poly), N-type (nPERT, HIT)', 'assets/uploads/pdf/67711675600540.pdf', 1, '49 kg (108.1 lb)', '640 x 530 x 270 mm (25.2 x 20.9 x 10.6 inch)', '50KTL-M3', '2023-02-05 09:29:11', '2023-02-05 12:35:40'),
(32, '[\"assets\\/uploads\\/products\\/26471675600227.jpg\"]', 'سلسلة العاكس الذكية', 'Smart String Inverter', 'سلسلة العاكس الذكية', 'SUN2000-100KTL-M1', '0032', 4, '[\"Huawie\",\"waterHot\"]', 'لا يوجد', 'Nothing', 'assets/uploads/pdf/361675600548.pdf', 1, '90 kg (198.4 lb.)', '1,035 x 700 x 365 mm (40.7 x 27.6 x 14.4 inch)', '100KTL-M1', '2023-02-05 09:31:40', '2023-02-05 12:35:48'),
(33, '[\"assets\\/uploads\\/products\\/92331675600263.jpg\"]', 'تحكم PV الذكية', 'Smart PV Controller', 'تحكم PV الذكية', 'SUN2000-115KTL-M2', '0033', 4, '[\"Huawie\",\"waterHot\"]', '1 - الحد الأقصى لجهد الدخل هو الحد الأعلى لجهد التيار المستمر. من المحتمل أن يؤدي أي جهد تيار مستمر أعلى إلى إتلاف العاكس\r\n2 - قد يؤدي أي جهد دخل تيار مستمر يتجاوز نطاق جهد التشغيل إلى تشغيل العاكس بشكل غير صحيح', '1 -  The maximum input voltage is the upper limit of the DC voltage. Any higher input DC voltage would probably damage inverter\r\n2 - Any DC input voltage beyond the operating voltage range may result in inverter improper operating', 'assets/uploads/pdf/56071675600556.pdf', 1, '93 kg', '1,035 x 700 x 365 mm', '115KTL-M2', '2023-02-05 09:33:54', '2023-02-05 12:35:56'),
(34, '[\"assets\\/uploads\\/products\\/36851675600306.jpg\"]', 'تايجر برو 72 إتش سي 530-550 واط', 'Tiger Pro 72HC 530-550W', 'تايجر برو 72 إتش سي 530-550 واط', 'MONOFACIAL MODULE', '0034', 3, '[\"Jinko\",\"waterhot\"]', '1 - ISO9001: 2015: نظام إدارة الجودة\r\n2 - ISO 14001: 2015: نظام الإدارة البيئية\r\n3 - ISO45001: 2018\r\nأنظمة إدارة الصحة والسلامة المهنية', '1 - ISO9001:2015: Quality Management System\r\n2 - ISO14001:2015: Environment Management System\r\n3 - ISO45001:2018\r\nOccupational health and safety management systems', 'assets/uploads/pdf/69531675600576.pdf', 1, '28.9 kg (63.7 lbs)', '2274×1134×35mm (89.53×44.65×1.38 inch)', 'JKM530-550M-72HL4-(V)-F1-EN', '2023-02-05 09:40:33', '2023-02-05 12:36:16'),
(35, '[\"assets\\/uploads\\/products\\/88701675600337.jpg\"]', 'تايجر نيو إن نو 72HL4- (الخامس) 555-575 واط', 'Tiger New In No 72HL4- (V) 555-575 W', 'تايجر نيو إن نو 72HL4- (الخامس) 555-575 واط', 'MONOFACIAL MODULE', '0035', 3, '[\"Jinko\",\"waterhot\"]', '1 - ISO9001: 2015: نظام إدارة الجودة\r\n2 - ISO 14001: 2015: نظام الإدارة البيئية\r\n3 - ISO45001: 2018\r\nأنظمة إدارة الصحة والسلامة المهنية', '1 - ISO9001:2015: Quality Management System\r\n2 - ISO14001:2015: Environment Management System\r\n3 - ISO45001:2018\r\nOccupational health and safety management systems', 'assets/uploads/pdf/8611675600584.pdf', 1, '28 kg (61.73 lbs)', '2278×1134×35mm (89.69×44.65×1.38 inch)', 'JKM555-575N', '2023-02-05 09:44:36', '2023-02-05 12:36:24');

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
(1, 'التكلفة / الجودة', 'Cost/Quality', '<p>تكلفة مُحسَّنة بأعلى جودة ، مما يضمن تجربة خدمة قوية للمستخدم النهائي.</p>', '<p>Optimized cost with highest quality, ensuring solid end-user service experience.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:35'),
(2, 'وقت التسليم الأمثل', 'Optimum Delivery Time', '<p>تعتمد الحياة بشكل أساسي على الطاقة ، لذلك من الجدير تسهيل جميع مرافقنا وإمكانياتنا لضمان أن يتم التسليم بالطريقة المثلى وأقصر وقت ممكن.</p>', '<p>Life is mainly based on energy, so it is worthy to facilitate all our facilities and capabilities to ensure that the delivery is done in the optimal way and the shortest possible time.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:29'),
(3, 'شريك طويل الأمد', 'Long Term Partner', '<p>مع شريك موثوق به وملتزم لتحقيق هدف طويل الأجل ، يسعدنا بناء علاقة موثوقة طويلة الأمد ومربحة للجانبين مع عملائنا.</p>', '<p>With a trusted and committed partner for long-term objective, we are pleased to build a win-win long term trusted relationship with our customers.</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:24'),
(4, 'القطاعات المستهدفة', 'Target Sectors', '<p>&bull; أنظمة الطاقة الكهروضوئية المرتبطة بالشبكة (على الشبكة)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; أنظمة ضخ المياه بالطاقة الشمسية</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&bull; قطاع النفط والغاز</p>', '<p>&bull; Grid tied PV systems (on-grid)</p>\r\n\r\n<p>&bull; Solar water-pumping systems</p>\r\n\r\n<p>&bull;&nbsp; Oil &amp; Gas Sector</p>\r\n\r\n<p>&nbsp;</p>', '2023-01-31 09:30:34', '2023-02-05 09:54:18');

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
(5, 'Cost/Quality', 'Cost/Quality', 'تكلفة مُحسَّنة بأعلى جودة ، مما يضمن تجربة خدمة قوية للمستخدم النهائي.', 'Optimized cost with highest quality, ensuring solid end-user service experience.', '2023-02-05 09:55:53', '2023-02-05 09:55:53'),
(6, 'وقت التسليم الأمثل', 'Optimum Delivery Time', 'تعتمد الحياة بشكل أساسي على الطاقة ، لذلك من الجدير تسهيل جميع مرافقنا وإمكانياتنا لضمان أن يتم التسليم بالطريقة المثلى وأقصر وقت ممكن.', 'Life is mainly based on\r\n energy, so it is worthy to facil\r\nitate all our facilities and capab\r\nilities to ensure that the delivery is done in the optimal way and the shortest possible time.', '2023-02-05 09:56:27', '2023-02-05 10:01:57'),
(7, 'شريك طويل الأمد', 'Long Term Partner', 'مع شريك موثوق به وملتزم لتحقيق هدف طويل الأجل ، يسعدنا بناء علاقة موثوقة طويلة الأمد ومربحة للجانبين مع عملائنا.', 'With a trusted and committed partner for long-term objective, we are pleased to build a win-win long term trusted relationship with our customers.', '2023-02-05 10:02:53', '2023-02-05 10:02:53');

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
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `twitter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shipping_policy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `returns` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `work_date` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `sliders`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `year_of_experince`, `phone`, `email`, `address_ar`, `address_en`, `location`, `youtube`, `facebook`, `twitter`, `linked_in`, `terms_conditions`, `shipping_policy`, `returns`, `work_date`, `created_at`, `updated_at`) VALUES
(1, 'assets/uploads/admins/images/87401674655792.png', '[\"assets\\/uploads\\/admins\\/sliders\\/85541674563675.jpg\",\"assets\\/uploads\\/admins\\/sliders\\/49201674563675.jpg\",\"assets\\/uploads\\/admins\\/sliders\\/56531674563675.jpg\"]', 'سولار فالي', 'Solar Valley', 'asasa', 'sasas', 12, '+971569842993', 'info@solarvalleypv.com', 'الكويت', 'kuwait', 'here', 'sa', 'sa', 'sa', 'https://www.linkedin.com/company/solarvalley/', 'Solar Valley', 'Solar Valley', 'Solar Valley', 'Hours: Mon-Fri: 8am – 7pm', NULL, '2023-02-05 12:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint NOT NULL,
  `image_about` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_services` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_product` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `image_faqs` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image_about`, `image_services`, `image_product`, `image_faqs`) VALUES
(1, 'assets/uploads/sliders/89551674654454.jpg', 'assets/uploads/sliders/70371674654763.jpg', 'assets/uploads/sliders/82351674654763.jpg', 'assets/uploads/sliders/57061674654763.jpg');

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
