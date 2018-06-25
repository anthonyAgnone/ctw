-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 08:36 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodyTwo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `title`, `body`, `bodyTwo`, `created_at`, `updated_at`) VALUES
(1, 'Premier Ohio Development Company', '<p>CTW Development Corp. is pleased to be one of the leading commercial and residential developers in the Mahoning Valley. Formed in 1987, CTW Development Corp. has grown to offer more than a million square feet of class &lsquo;A&rsquo; commercial office and retail space and developed over 600 residential home sites in and around the Mahoning Valley.</p>', 'They have recently expanded and formed sister company, Clocktower Plaza, LLC, which manages Clocktower Plaza, a retail plaza in Lima, Ohio.', NULL, '2018-06-16 19:59:27'),
(2, 'Tenant Driven Success', 'CTW Development Corp. strives to demonstrate excellent tenant relations while aiming towards successful tenant retention.', 'Our timeless colonial designed properties with meticulous attention to detail bring value to all of our tenants. We offer professional turn key property management for all of our highly valued tenants. ', '2018-06-15 11:48:51', '2018-06-15 11:48:51'),
(3, 'Our Properties', 'Our timeless colonial designed properties with meticulous attention to detail bring value to all of our tenants. We offer professional turn key property management for all of our highly valued tenants.', ' ', '2018-06-15 11:50:00', '2018-06-15 11:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `location`, `description`, `cover_image`, `created_at`, `updated_at`) VALUES
(6, 'Westford Lifestyle Community', 'Canfield, Ohio', 'A 400+ acre master-planned community encompassing single-family homes, condominiums and villas that surround the region’s newest hotel,Courtyard Marriott Youngstown-Canfield, and Kennsington Golf Club, an 18-hole championship golf course designed by award-winning golf course architect, Brian Huntley.\r\n<br /><br />\r\nFuture plans include a banquet facility plus upscale shopping and dining to complement the existing 150,000+ square feet of office and retail space.\r\n<br /><br />\r\nVisit www.WestfordLife.com for more information.', '20fba7_5badeae48734422c8df29939e0d229e4~mv2_1529550878.jpg', '2018-06-21 07:14:38', '2018-06-21 07:14:38'),
(7, 'Westford Commons', 'Canfield, Ohio', 'Westford Commons is a future open air lifestyle shopping center located on Rt. 224 in Canfield, Ohio, 1/4 mile west of the Route 11 off ramp.\r\n<br /><br />\r\nWestford Commons is located at the forefront of Westford Lifestyle Community which encompasses high end residences, class \"A\" office space, retail, out-patient surgery center, and an 18-hole championship golf course, Kennsington Golf Club.\r\n<br /><br />\r\nFor leasing information, view our informational package or visit www.westfordcommons.com.', '20fba7_f745fc1bb5ee464187751ae341e5cab3~mv2_1529551081.jpg', '2018-06-21 07:18:01', '2018-06-21 07:18:01'),
(8, 'Clocktower Plaza', 'Lima, Ohio', 'Lima Ohio’s Clocktower Plaza includes nearly 238,000 square feet of retail space and houses both local and regional tenants, such as Pet Supplies Plus, Dollar Tree, Planet Fitness and GameStop.\r\n<br /><br />\r\nThe plaza is currently 25-percent occupied, leaving room to fill the retail center with strong new tenants, grow the current customer base and make Clocktower Plaza the premier shopping center for the Lima community.\r\n<br /><br />\r\nFor leasing information, view our information package or call Greg Butcher at 419-236-7357.', '20fba7_5642399c1d104a21b1eadb6ea4d8f9ca~mv2_d_3300_2550_s_4_2_1529552844.jpg', '2018-06-21 07:47:24', '2018-06-21 07:47:24'),
(9, 'Tiffany Plaza', 'Boardman, Ohio', 'Tiffany Plaza is a redevelopment retail property that will be a landmark piece as you enter the vibrant corridor of Route 224 in Boardman. Located directly off I-680 at the corner of Tiffany South and Boardman-Poland Road, it is positioned in a prime spot for people traveling or making an every-day commute.\r\n\r\n \r\n<br /><br />\r\nTiffany is already a well-visited plaza, with attractive tenants such Dunkin’ Donuts, Papa Johns and Subway. The new building\r\nwill be 19,700 square feet with a spacious parking area.\r\n\r\n​\r\n<br /><br />\r\n\r\nFor leasing information, view our informational package.', '20fba7_85f071fe5bb247199ac3c8a0302f7b67~mv2_1529552907.jpg', '2018-06-21 07:48:27', '2018-06-21 07:48:27'),
(10, 'Kennsington Golf Club & Grille', 'Canfield, Ohio', 'Located in Canfield, Ohio, Kennsington Golf Club is an 18-hole, par 71, public golf course, designed by award-winning golf course architect, Brian Huntley. The 7,044-yard course combines natural beauty and serene lakes to perfectly complement the meticulously planned Westford Lifestyle Community, which offers a unique attraction to the surrounding area.\r\n\r\n​​<br /><br />\r\n\r\nKennsington Grille, located just off the green at the clubhouse, also offers the finest area dining year-round, with a wide selection of food and beverages.\r\n\r\n​<br /><br />\r\n\r\nFor more information on Kennsington Golf Club & Grille, visit www.KennsingtonGolf.com.', '20fba7_3846a36ef7d34044b848dd21c232d02a~mv2_1529552964.jpg', '2018-06-21 07:49:24', '2018-06-21 07:49:24'),
(11, 'Courtyard Marriott Youngstown - Canfield', 'Canfield, Ohio', 'The Courtyard Youngstown-Canfield, located in the most up and coming suburb of Canfield, nearby Route 224, Route 11 & Route 80. The new state-of-the-art lobby at Courtyard provides greater flexibility & choices for our guests, allowing them to be more comfortable & productive.\r\n\r\n <br><br>\r\n\r\nThe hotel is conveniently located near shopping, entertainment, museums, and the area’s major corporations.\r\n\r\n​ <br><br>\r\n\r\nFor more information on the region\'s newest hotel, visit www.CourtyardCanfield.com.', '20fba7_28f4804b783645948d8c3077e366670f~mv2_1529553134.jpg', '2018-06-21 07:52:14', '2018-06-21 07:52:14'),
(12, 'Delete Me', 'Hopefully, Nowhere', 'I want to be deleted so bad. please delete me.', '20fba7_91e14bf7167b449a8895d0321484fc95~mv2_1529823043.jpg', '2018-06-24 10:50:43', '2018-06-24 10:50:43');

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
(3, '2018_06_14_053856_create_admins_table', 1),
(4, '2018_06_16_041314_create_albums_table', 2),
(5, '2018_06_16_041344_create_photos_table', 2),
(6, '2018_06_21_194428_create_services_table', 3);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `photo`, `title`, `size`, `description`, `created_at`, `updated_at`) VALUES
(9, 6, '20fba7_91e14bf7167b449a8895d0321484fc95~mv2_1529550908.jpg', 'wlc1', '49992', 'First picture in the series. You can put whatever you want here.', '2018-06-21 07:15:08', '2018-06-21 07:15:08'),
(10, 6, '20fba7_155f828d66424cbb94f37816fc778705~mv2_1529550923.jpg', 'wlc2', '39696', 'Again. Whatever you want.', '2018-06-21 07:15:23', '2018-06-21 07:15:23'),
(11, 6, '20fba7_6971c8b82cc541ff98fa7868b195f438~mv2_1529550936.jpg', 'wlc3', '51703', 'and again', '2018-06-21 07:15:36', '2018-06-21 07:15:36'),
(12, 6, '20fba7_2792307827c246f885c43747425fca6b~mv2_1529550969.jpg', 'wlc4', '59830', '...you get it now what was that, lol ?', '2018-06-21 07:16:09', '2018-06-21 07:16:09'),
(13, 7, '20fba7_5daf2ee547fb4dfeb2ba06e4ebede2b7~mv2_1529551094.jpg', 'wc1', '421864', 'asdf', '2018-06-21 07:18:14', '2018-06-21 07:18:14'),
(14, 7, '20fba7_0d6be180584f439f9bdff69bc7e06e66~mv2_1529551105.jpg', 'wc2', '566085', 'asdfasdf', '2018-06-21 07:18:25', '2018-06-21 07:18:25'),
(15, 7, '20fba7_f745fc1bb5ee464187751ae341e5cab3~mv2_1529551113.jpg', 'wc3', '381796', 'asdfasdfasdf', '2018-06-21 07:18:33', '2018-06-21 07:18:33'),
(16, 8, '20fba7_57a77f49adcb4cf58cf9e3a567a4aab1~mv2_d_3300_2550_s_4_2_1529552857.jpg', 'cp1', '251050', 'asdfasdf', '2018-06-21 07:47:37', '2018-06-21 07:47:37'),
(17, 8, '20fba7_5642399c1d104a21b1eadb6ea4d8f9ca~mv2_d_3300_2550_s_4_2_1529552866.jpg', 'cp2', '274642', 'asdfasdf', '2018-06-21 07:47:46', '2018-06-21 07:47:46'),
(18, 9, '20fba7_85f071fe5bb247199ac3c8a0302f7b67~mv2_1529552920.jpg', 'tp1', '182452', 'asdfasdfasdf', '2018-06-21 07:48:41', '2018-06-21 07:48:41'),
(19, 9, '20fba7_c07508a97de04f9285ff9d2372ed143e~mv2_1529552929.jpg', 'tp2', '160367', 'asdfaaasdf', '2018-06-21 07:48:49', '2018-06-21 07:48:49'),
(20, 10, '20fba7_3846a36ef7d34044b848dd21c232d02a~mv2_1529552981.jpg', 'kg1', '332008', 'dddd', '2018-06-21 07:49:41', '2018-06-21 07:49:41'),
(21, 10, '20fba7_598a84e85cc2445595e3f12232ff3104~mv2_d_2149_1313_s_2_1529552988.jpg', 'kg2', '626588', 'aaaaa', '2018-06-21 07:49:48', '2018-06-21 07:49:48'),
(22, 10, '20fba7_bfc669f0708843508a076f3bd1b4b009~mv2_d_3887_2545_s_4_2_1529552997.jpg', 'kg3', '419043', 'dassd', '2018-06-21 07:49:57', '2018-06-21 07:49:57'),
(24, 10, '20fba7_2ab8f639f01341bd833daae6d015f931~mv2_d_2412_2412_s_4_2_1529553100.jpg', 'kg4', '321551', 'aaaa', '2018-06-21 07:51:40', '2018-06-21 07:51:40'),
(25, 11, '20fba7_28f4804b783645948d8c3077e366670f~mv2_1529553153.jpg', 'cm1', '40520', 'ffdfdf', '2018-06-21 07:52:33', '2018-06-21 07:52:33'),
(26, 11, '20fba7_21ba0d7800504fb7a0025da0f6c94eea~mv2_1529553162.jpg', 'cm2', '850278', 'asdfasdfsadf', '2018-06-21 07:52:42', '2018-06-21 07:52:42'),
(27, 11, '20fba7_31969481b803485d9f52e37e08f5050b~mv2_1529553171.jpg', 'cm3', '32610', 'sdfsdf', '2018-06-21 07:52:51', '2018-06-21 07:52:51'),
(28, 11, '20fba7_bdd695b4883c4b8fbfea6de2e75a2fe2~mv2_1529553179.jpg', 'cm4', '31109', 'assasasd', '2018-06-21 07:52:59', '2018-06-21 07:52:59'),
(29, 11, '20fba7_d1658081628c4f28b57d27bcdbd10b02~mv2_1529553188.jpg', 'cm5', '36216', 'asasdfsdf', '2018-06-21 07:53:08', '2018-06-21 07:53:08'),
(30, 6, '20fba7_5badeae48734422c8df29939e0d229e4~mv2_1529553346.jpg', 'wc5', '54236', 'asdf', '2018-06-21 07:55:46', '2018-06-21 07:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Personal tenant interaction', 'Personal tenant interaction', '2018-06-23 01:08:39', '2018-06-23 01:08:39'),
(2, 'Superb locations with high visibility', 'Superb locations with high visibility', '2018-06-23 01:09:12', '2018-06-23 01:09:12'),
(3, '24-Hour on call service', '24-Hour on call service', '2018-06-23 01:09:20', '2018-06-23 01:09:20'),
(4, 'Professional in-house maintenance Personnel', 'Professional in-house maintenance Personnel', '2018-06-23 01:09:31', '2018-06-23 01:09:31'),
(5, 'Vendor oversight and preferred subcontractor referrals', 'Vendor oversight and preferred subcontractor referrals', '2018-06-23 01:09:41', '2018-06-23 01:09:41'),
(6, 'Snow removal', 'Snow removal', '2018-06-23 01:09:50', '2018-06-23 01:09:50'),
(7, '24-hour security key pad building access', '24-hour security key pad building access', '2018-06-23 12:00:01', '2018-06-23 12:00:01'),
(8, 'Space planning and architectural services', 'Space planning and architectural services', '2018-06-23 12:00:11', '2018-06-23 12:00:11'),
(9, 'General contracting and construction services', 'General contracting and construction services', '2018-06-23 12:00:20', '2018-06-23 12:00:20'),
(10, 'Construction supervision coupled with site visits', 'Construction supervision coupled with site visits', '2018-06-23 12:00:28', '2018-06-23 12:00:28'),
(11, 'Tenant coordination and communication during construction process', 'Tenant coordination and communication during construction process', '2018-06-23 12:00:37', '2018-06-23 12:00:37'),
(12, 'Construction consulting', 'Construction consulting', '2018-06-23 12:00:53', '2018-06-23 12:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Indexes for table `albums`
--
ALTER TABLE `albums`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
