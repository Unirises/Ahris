-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 05:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahrisph`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `created_at`, `updated_at`) VALUES
(1, 8, 'Test Company 1', '2020-10-09 22:46:37', '2020-10-09 22:46:37'),
(2, 8, 'Test Company 2', '2020-10-09 22:46:58', '2020-10-09 22:46:58'),
(3, 10, 'Nerves Clothing', '2020-10-10 01:33:48', '2020-10-10 01:33:48'),
(4, 8, 'example company', '2020-10-12 02:58:10', '2020-10-12 02:58:10'),
(5, 7, 'Sample Company Lang', '2020-10-12 07:04:58', '2020-10-12 07:04:58'),
(6, 7, 'Isang Company Sample', '2020-10-12 07:08:03', '2020-10-12 07:08:03'),
(7, 8, 'Isang Company Sample 2', '2020-10-12 07:11:39', '2020-10-12 07:11:39'),
(8, 8, 'Isang Company Sample 3', '2020-10-12 07:13:36', '2020-10-12 07:13:36'),
(9, 11, 'John Doegas Company', '2020-10-12 07:15:46', '2020-10-12 07:15:46'),
(10, 11, 'John Doegas Company 1', '2020-10-12 07:16:36', '2020-10-12 07:16:36'),
(12, 12, 'John Doegas Company 3', '2020-10-12 07:25:29', '2020-10-12 07:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `displayname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barangay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `company_id`, `company_name`, `firstname`, `lastname`, `email`, `displayname`, `phone_number`, `mobile_number`, `fax`, `other`, `website`, `contact_type`, `type`, `created_at`, `updated_at`, `street`, `barangay`, `city`, `province`, `zipcode`) VALUES
(3, 1, 'test', NULL, NULL, 'test@gmail.com', 'test', '09123123123', '09123123123', '123', '09123123123', 'test.com', 'customer', 'business', '2020-10-09 23:49:29', '2020-10-09 23:49:29', NULL, NULL, NULL, NULL, NULL),
(4, 1, NULL, 'Alex Bryan', 'Arellano', 'alexbryanarellano2@gmail.com', 'alex', '09123123123', '09123456789', '321', 'asdf', 'asdf.com', 'customer', 'individual', '2020-10-10 00:13:52', '2020-10-10 00:13:52', NULL, NULL, NULL, NULL, NULL),
(5, 1, 'asdf', NULL, NULL, 'alexbryanarellano2@gmail.com', 'test 1', '09123123123', '1234', '2134', 'safdasdf', 'wqer.com', 'supplier', 'business', '2020-10-10 01:25:51', '2020-10-10 01:25:51', NULL, NULL, NULL, NULL, NULL),
(6, 1, 'unirises', NULL, NULL, 'unirisesinc@gmail.com', 'accounting', NULL, '09195951456', NULL, 'qwer', 'www unirises.com', 'customer', 'business', '2020-10-10 01:52:28', '2020-10-10 01:52:28', NULL, NULL, NULL, NULL, NULL),
(7, 1, NULL, 'sample', 'sample', 'sample@gmail.com', 'sample', '09123123', '12312', '123123', '123123', '123123', 'supplier', 'individual', '2020-10-10 02:43:49', '2020-10-10 02:43:49', NULL, NULL, NULL, NULL, NULL),
(8, 1, NULL, 'mark', 'lee', 'unirisesinc@gmail.com', 'marklee', '09950257988', '09195951456', NULL, 'mamamo', 'unirises.com', 'customer', 'individual', '2020-10-10 02:52:44', '2020-10-10 02:52:44', NULL, NULL, NULL, NULL, NULL),
(9, 1, 'unirises', NULL, NULL, 'unirisesinc@gmail.com', 'unirses', '09950257988', '09950257988', NULL, NULL, NULL, 'supplier', 'business', '2020-10-10 03:20:04', '2020-10-10 03:20:04', NULL, NULL, NULL, NULL, NULL),
(10, 1, NULL, 'admin', 'nerves', 'nervesxvibes0625@gmail.com', 'sample 2', '09123123123', '1234', '234', 'aqwer', 'erqwe.com', 'customer', 'individual', '2020-10-11 22:56:32', '2020-10-11 22:56:32', NULL, NULL, NULL, NULL, NULL),
(11, 1, 'Test Company', NULL, NULL, 'test@gmail.com', 'testing 2', '09123123123', '09123123123', '123', 'dfqwer', 'qwer.com', 'customer', 'business', '2020-10-11 23:19:50', '2020-10-11 23:19:50', 'KOREA', 'sss', 'SAN MATEO', 'Rehiyon ng Calabarzon', '1850');

-- --------------------------------------------------------

--
-- Table structure for table `contact_person_address`
--

CREATE TABLE `contact_person_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_person_address`
--

INSERT INTO `contact_person_address` (`id`, `contact_id`, `title`, `firstname`, `middlename`, `lastname`, `suffix`, `email`, `created_at`, `updated_at`) VALUES
(1, 11, 'i', 'admin', NULL, 'nerves', NULL, 'admin@admin.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tax_details`
--

CREATE TABLE `contact_tax_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `sales_settings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_settings_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tin_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_limit_account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_limit_block` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_tax_details`
--

INSERT INTO `contact_tax_details` (`id`, `contact_id`, `sales_settings`, `sales_settings_account`, `tin_1`, `tin_2`, `credit_limit_account`, `credit_limit_block`, `created_at`, `updated_at`) VALUES
(1, 11, 'Tax Inclusive', 'Sample Account', '12332-321-1233', '23212', '232', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `current_company_logs`
--

CREATE TABLE `current_company_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_company_logs`
--

INSERT INTO `current_company_logs` (`id`, `user_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 8, 8, '2020-10-12 02:34:30', '2020-10-12 07:13:36'),
(2, 7, 5, '2020-10-12 07:04:58', '2020-10-12 07:08:19'),
(3, 11, 9, '2020-10-12 07:15:46', '2020-10-12 07:16:40'),
(5, 12, 12, '2020-10-12 07:25:29', '2020-10-12 07:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_07_090210_laratrust_setup_tables', 2),
(5, '2020_10_07_121853_add_info_to_users', 3),
(6, '2020_10_07_141114_add_jobtitle_to_users', 4),
(7, '2020_10_10_054120_create_contacts_table', 5),
(8, '2020_10_12_062658_add_address_to_contacts', 6),
(9, '2020_10_12_072405_create_current_company_logs_table', 7),
(10, '2020_10_12_072703_add_details_to_current_company_logs', 8);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2020-10-07 01:08:37', '2020-10-07 01:08:37'),
(2, 'read-users', 'Read Users', 'Read Users', '2020-10-07 01:08:37', '2020-10-07 01:08:37'),
(3, 'update-users', 'Update Users', 'Update Users', '2020-10-07 01:08:37', '2020-10-07 01:08:37'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(11, 'create-profile', 'Create Profile', 'Create Profile', '2020-10-07 01:08:40', '2020-10-07 01:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 4, 'App\\User'),
(10, 4, 'App\\User'),
(11, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2020-10-07 01:08:37', '2020-10-07 01:08:37'),
(2, 'administrator', 'Administrator', 'Administrator', '2020-10-07 01:08:38', '2020-10-07 01:08:38'),
(3, 'user', 'User', 'User', '2020-10-07 01:08:39', '2020-10-07 01:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 7, 'App\\User'),
(3, 8, 'App\\User'),
(3, 9, 'App\\User'),
(3, 10, 'App\\User'),
(3, 11, 'App\\User'),
(3, 12, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `firstname`, `lastname`, `phonenumber`, `birthday`, `username`, `facebook`, `linkedin`, `twitter`, `address`, `city`, `province`, `zip_code`, `about_me`, `job_title`) VALUES
(1, 'superadministrator@app.com', NULL, '$2y$10$Zed8hfaLbLzzAiLa73L3B.DOr8VXzdfS0qE1HsqNUJFfzQE5SECf.', 'VnZgGqkm3ZqzTd0rYUEsatqvTRF6B47MbfRwDCvtRRXBUU2g054E15bmv9yw', '2020-10-07 01:08:38', '2020-10-07 01:08:38', 'super', 'admin', '09123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'administrator@app.com', NULL, '$2y$10$0hldZEROXs45FV7flXfZs.w7QmQnrCVWiX063yyjmHX40zsGlrJF6', NULL, '2020-10-07 01:08:39', '2020-10-07 01:08:39', 'basic', 'admin', '09123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'alexbryanarellano2@gmail.com', '2020-10-07 02:40:38', '$2y$10$wo8bZ10HXKHzSXWzUp4KzueRyAVk8JC3Gx0aDfOlp5Mjo1P/N/i1i', 'zs9t48G4BT8yIZryeIP57riVvTlm6wcgX7fvsGDm0rHSCGVLqTzLHXuiLewo', '2020-10-07 02:36:18', '2020-10-12 03:26:59', 'Alex', 'Arellano', '09123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'alexbryanarellano2898@gmail.com', '2020-10-07 06:03:05', '$2y$10$12eDT/WtWelYfn1sEvJdiubJj61XD19DiJzM3r7eby81v9wCGDghy', 'obuLQgfRaSxt71lHikxQEAA8EhnKlstpWBwbHNkWlol0ibaLbkBt2iIe6uLd', '2020-10-07 05:25:25', '2020-10-08 22:24:20', 'Alex Bryan', 'Arellano', '09474576403', '1998-11-09', 'alxbry05', 'alxbry', 'burnek', 'lilipad', 'KOREA', 'SAN MATEO', 'Rehiyon ng Calabarzon', '1850', 'ano ang tulog?', 'Programmer'),
(9, 'seregoj478@zuperholo.com', '2020-10-07 08:54:43', '$2y$10$weZY//AKcSJbyv8P8s2pM.l6JD/QSokD7B3ic56nSd1DafObZ2t5a', 'wLYhVk6PyYPIThqFtSg8EvMkN2kdWI1HkOljpMkw8ChgvD6qs4lKusc0faxx', '2020-10-07 08:54:05', '2020-10-07 09:10:20', 'juan', 'dela cruz', '09234343223', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'siseve4079@dmeproject.com', '2020-10-10 01:31:57', '$2y$10$dxnXfCY5ioMX1BrmwcFLRuc7xBcHHuzGBtb9gtEf/UVOuuPOp8.u.', NULL, '2020-10-10 01:31:42', '2020-10-10 01:31:57', 'admin', 'nerves', '09474576403', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'wacal82333@zik2zik.com', '2020-10-12 07:15:08', '$2y$10$GGEqpgZNyU34JJDJMRFpQ.uVnDlph2iRUfk0OW04mPeSFQbLBsJCu', NULL, '2020-10-12 07:14:41', '2020-10-12 07:15:08', 'John', 'Doela Cruz', '09123456987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'baxop20543@pastortips.com', '2020-10-12 07:18:04', '$2y$10$eRm6MlX9KZ5lo/um/4/Tw.XufPmF4rgQz6ipFPVHtZX27sPA/dGya', NULL, '2020-10-12 07:17:46', '2020-10-12 07:18:04', 'Mike', 'Coxmall', '09123456987', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_person_address`
--
ALTER TABLE `contact_person_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_tax_details`
--
ALTER TABLE `contact_tax_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_company_logs`
--
ALTER TABLE `current_company_logs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_person_address`
--
ALTER TABLE `contact_person_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_tax_details`
--
ALTER TABLE `contact_tax_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `current_company_logs`
--
ALTER TABLE `current_company_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
