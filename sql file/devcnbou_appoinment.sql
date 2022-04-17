-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2021 at 08:21 AM
-- Server version: 10.3.28-MariaDB-log-cll-lve
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devcnbou_appoinment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `patient_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appoinment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `slug` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinments`
--

INSERT INTO `appoinments` (`id`, `doctor_id`, `patient_id`, `date_id`, `time_id`, `appoinment_date`, `contact`, `name`, `email`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(6, '7', '8', 'Friday', '10-11 am', '2020-04-24', '0196958493', 'Jebin', 'jebin@gmail.com', '1', '15872107956o35MY1M0Y0cUih', '2020-04-18 15:53:15', '2020-04-18 15:54:32'),
(7, '10', '12', 'Sunday', '10-11 am', '2020-08-16', '01969005035', 'Naim', 'naim@gmail.com', '0', '15974064806bxsngNti4z5dfD', '2020-08-14 16:01:20', NULL),
(8, '13', '14', 'Friday', '10-11 am', '2020-09-05', '01969005035', 'Azim', 'azim@gmail.com', '0', '1599225525b75td527LvgwLK5', '2020-09-04 17:18:45', NULL),
(9, '7', '8', 'Friday', '10-11 am', '2020-11-24', '01969005035', 'Jebin', 'jebin@gmail.com', '1', '1606059498fzz8IwioHiL2Onu', '2020-11-22 20:38:18', '2020-11-22 20:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_dates`
--

CREATE TABLE `appoinment_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinment_dates`
--

INSERT INTO `appoinment_dates` (`id`, `doctor_id`, `date`, `created_at`, `updated_at`) VALUES
(30, '7', 'Saturday', NULL, NULL),
(31, '7', 'Friday', NULL, NULL),
(32, '10', 'Saturday', NULL, NULL),
(33, '10', 'Friday', NULL, NULL),
(36, '13', 'Saturday', NULL, NULL),
(37, '13', 'Friday', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_times`
--

CREATE TABLE `appoinment_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinment_times`
--

INSERT INTO `appoinment_times` (`id`, `doctor_id`, `time`, `created_at`, `updated_at`) VALUES
(24, '7', '9-10 am', NULL, NULL),
(25, '7', '10-11 am', NULL, NULL),
(26, '7', '11-12 am', NULL, NULL),
(27, '10', '9-10 am', NULL, NULL),
(28, '10', '12-1 pm', NULL, NULL),
(32, '13', '9-10 am', NULL, NULL),
(33, '13', '10-11 am', NULL, NULL),
(34, '13', '11-12 am', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Cardiology'),
(2, 'Gynaecology'),
(3, 'Nursing\r\n'),
(4, 'Pharmacy'),
(5, 'Psychology'),
(6, 'Radiotherapy'),
(7, 'Surgery'),
(8, 'Therapy'),
(9, 'X-rey'),
(10, 'Pregnancy');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `category_id`, `image`, `name`, `contact`, `nid`, `degree`, `sat`, `sun`, `mon`, `tue`, `wed`, `thu`, `fri`, `created_at`, `updated_at`) VALUES
(1, '7', '7', 'doctor_images/mamzF-1583897098.jpg', 'Asjad hasan Jim', '01968556466', '645647565652', 'MBBS, FCPS', 'on', NULL, NULL, NULL, NULL, NULL, 'on', '2020-03-10 21:24:58', '2020-04-18 15:51:55'),
(3, '10', '1', 'doctor_images/BvMao-1586066798.jpg', 'Md. Fahad Hossain', '0195847433', '1223423534', 'MBBS', 'on', NULL, NULL, NULL, NULL, NULL, 'on', '2020-04-04 13:28:30', '2020-08-14 16:03:30'),
(4, '13', '1', 'doctor_images/5wsVE-1599225436.png', 'Sahana', '01969005035', '124423345', 'MBBS', 'on', NULL, NULL, NULL, NULL, NULL, 'on', '2020-09-04 17:16:56', '2020-09-04 17:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2020_03_04_040008_create_doctors_table', 2),
(20, '2020_03_11_032848_create_patients_table', 3),
(21, '2020_04_04_191822_create_appoinment_dates_table', 4),
(22, '2020_04_04_200141_create_appoinment_times_table', 5),
(24, '2020_04_04_211016_create_appoinments_table', 6);

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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `email`, `user_id`, `contact`, `image`, `address`, `nid`, `created_at`, `updated_at`) VALUES
(2, 'Jebin', 'jebin@gmail.com', '8', '01969005035', 'patient_image/0JYn4-1584720909.jpg', 'Rupgonj', '12335346456234', '2020-03-20 10:15:09', '2020-04-16 09:38:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Md. Fahim Hossain', 'alifhossain174@gmail.com', NULL, '$2y$10$HNASIoQCg6blo4n1mKTjSelf7EwOuWDhw33QBP7VfxcAN2g6YN33a', 'admin', '0', NULL, '2020-03-03 21:47:52', '2020-03-03 21:47:52'),
(7, 'Asjad hasan Jim', 'jim@gmail.com', NULL, '$2y$10$N57.cYD0iNNxw2BFJNWmO.UrisytbVbP/NAU08L64NEMhTG4dkb3y', 'doctor', '0', NULL, '2020-03-10 21:22:43', '2020-03-10 21:22:43'),
(8, 'Jebin', 'jebin@gmail.com', NULL, '$2y$10$QAzXPmdHc9ihLQC72Wr4iuGZM6rIxP2pUMF3BTRWN/A4Q1GW2c1Rq', 'patient', '0', NULL, '2020-03-10 21:57:40', '2020-03-10 21:57:40'),
(9, 'Saad', 'saad@gmail.com', NULL, '$2y$10$6m3sIN9Yoxk7wgB2gTZk9.VryI21kYjvPya3/gd1w6GIgHOZL03De', 'doctor', '0', NULL, '2020-03-10 23:00:23', '2020-03-10 23:00:23'),
(10, 'Md. Fahad Hossain', 'fahad@gmail.com', NULL, '$2y$10$BTauIExIGWL3DA.ksHHQOut.wc6F4EXr996U911IoZbwnDEHhatrq', 'doctor', '0', NULL, '2020-04-04 13:17:24', '2020-04-04 13:17:24'),
(12, 'Naim', 'naim@gmail.com', NULL, '$2y$10$FldLKvaoXQ0v7YXbSJPo.eIkvlRU87umaterkWtIpvaS7xSRw31iG', 'patient', '0', NULL, '2020-08-14 16:00:15', '2020-08-14 16:00:15'),
(13, 'Sahana', 'sahana@gmail.com', NULL, '$2y$10$R/FqRal/smaFwIRT7lB6NOO11yelCGYvHRsBRbx6bQ70KI157FQ.i', 'doctor', '0', NULL, '2020-09-04 17:16:20', '2020-09-04 17:16:20'),
(14, '12345678', 'azim@gmail.com', NULL, '$2y$10$PqnHRuewNW/RP01/4gG90uoh6TfTsK22UkcEGj0BYSNvNkTxRijtm', 'patient', '0', NULL, '2020-09-04 17:18:08', '2020-09-04 17:18:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_dates`
--
ALTER TABLE `appoinment_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_times`
--
ALTER TABLE `appoinment_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
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
-- AUTO_INCREMENT for table `appoinments`
--
ALTER TABLE `appoinments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appoinment_dates`
--
ALTER TABLE `appoinment_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `appoinment_times`
--
ALTER TABLE `appoinment_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
