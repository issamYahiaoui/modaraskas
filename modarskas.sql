-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 05:27 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `spoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `img`, `ar_title`, `en_title`, `created_at`, `updated_at`) VALUES
(1, '1_1515891670sffQE.png', '', '', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, 'slide1233.jpg', 'سير ذاتية للعاملين', '', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, 'slide2.png', 'تواصل دائم و متابعة مستمرة', '', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `curriculas`
--

CREATE TABLE `curriculas` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `curriculas`
--

INSERT INTO `curriculas` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'Saudian', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'American', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'French', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(4, '', 'Algerian', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(5, '', 'English', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `curricula_teaching_choice`
--

CREATE TABLE `curricula_teaching_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `curricula_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `begin_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `state` enum('pending','available','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `paymentMethod` enum('masterCard','visaCard','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'paypal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(10) UNSIGNED NOT NULL,
  `normal_by_hour` int(11) DEFAULT NULL,
  `normal_by_day` int(11) DEFAULT NULL,
  `online_by_hour` int(11) DEFAULT NULL,
  `online_by_day` int(11) DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `high_school_stages`
--

CREATE TABLE `high_school_stages` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `high_school_stages`
--

INSERT INTO `high_school_stages` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'primary', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'medium', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'high', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `high_school_stage_teaching_choice`
--

CREATE TABLE `high_school_stage_teaching_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `high_school_stage_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2017_10_25_152003_create_messages_table', 1),
(38, '2017_10_30_221338_create_contacts_table', 1),
(39, '2017_10_31_112641_create_template_s_m_s_table', 1),
(40, '2017_12_07_001127_create_principal_settings_table', 1),
(41, '2017_12_10_105044_create_notifications_table', 1),
(42, '2018_01_04_164306_create_sms_sendeds_table', 1),
(43, '2018_01_13_235417_create_carousels_table', 1),
(44, '2018_03_12_101024_create_students_table', 1),
(45, '2018_03_12_101046_create_teachers_table', 1),
(46, '2018_03_12_183611_create_school_stage_choices_table', 1),
(47, '2018_03_12_183617_create_school_stages_table', 1),
(48, '2018_03_12_183854_create_teaching_types_table', 1),
(49, '2018_03_12_183910_create_specializations_table', 1),
(50, '2018_03_12_183926_create_high_school_stages_table', 1),
(51, '2018_03_13_203910_create_s_parents_table', 1),
(52, '2018_03_16_144827_create_countries_table', 1),
(53, '2018_03_16_145056_create_cities_table', 1),
(54, '2018_03_16_145123_create_addresses_table', 1),
(55, '2018_03_16_145149_create_subjects_table', 1),
(56, '2018_03_16_145214_create_curriculas_table', 1),
(57, '2018_03_16_145233_create_teaching_options_table', 1),
(58, '2018_03_25_171206_create_providers_table', 1),
(59, '2018_03_25_233508_create_deals_table', 1),
(60, '2018_04_01_114004_create_school_stage_teaching_choice__table', 1),
(61, '2018_04_01_114314_create_high_school_stage_teaching_choice__table', 1),
(62, '2018_04_01_115037_create_specialization_teaching_choice__table', 1),
(63, '2018_04_01_115114_create_curricula_teaching_choice__table', 1),
(64, '2018_04_01_144401_create_teaching_choices_table', 1),
(65, '2018_04_01_184043_create_fees_table', 1),
(66, '2018_04_02_145003_create_subject_teaching_choice_table', 1),
(67, '2018_04_02_152534_create_teaching_choice_teaching_option_table', 1),
(68, '2018_04_02_152614_create_teaching_choice_teaching_type_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) UNSIGNED NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `principal_settings`
--

CREATE TABLE `principal_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `office_en_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_ar_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `en_about` text COLLATE utf8mb4_unicode_ci,
  `ar_about` text COLLATE utf8mb4_unicode_ci,
  `en_privacy_term` text COLLATE utf8mb4_unicode_ci,
  `ar_privacy_term` text COLLATE utf8mb4_unicode_ci,
  `en_questions` text COLLATE utf8mb4_unicode_ci,
  `ar_questions` text COLLATE utf8mb4_unicode_ci,
  `ar_teacher_terms` text COLLATE utf8mb4_unicode_ci,
  `en_teacher_terms` text COLLATE utf8mb4_unicode_ci,
  `ar_student_terms` text COLLATE utf8mb4_unicode_ci,
  `en_student_terms` text COLLATE utf8mb4_unicode_ci,
  `ar_parent_terms` text COLLATE utf8mb4_unicode_ci,
  `en_parent_terms` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `principal_settings`
--

INSERT INTO `principal_settings` (`id`, `office_en_name`, `office_ar_name`, `phone`, `ar_address`, `en_address`, `website_email`, `logo`, `en_about`, `ar_about`, `en_privacy_term`, `ar_privacy_term`, `en_questions`, `ar_questions`, `ar_teacher_terms`, `en_teacher_terms`, `ar_student_terms`, `en_student_terms`, `ar_parent_terms`, `en_parent_terms`, `created_at`, `updated_at`) VALUES
(1, 'Modaras kas', 'مدرس خاص', '0664421310', 'السعودية', 'Saudia', 'modaraskas@gmail.com', 'logo', 'about us', 'حولنا', 'privacy terms', 'شروط الخصوصية', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_id` int(11) NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_stages`
--

CREATE TABLE `school_stages` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_stages`
--

INSERT INTO `school_stages` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'primary', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'medium', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'high', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(4, '', 'international', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `school_stage_choices`
--

CREATE TABLE `school_stage_choices` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED DEFAULT NULL,
  `school_stage_id` int(10) UNSIGNED DEFAULT NULL,
  `specialization_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_type_id` int(10) UNSIGNED DEFAULT NULL,
  `high_school_stage_id` int(10) UNSIGNED DEFAULT NULL,
  `school` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_stage_teaching_choice`
--

CREATE TABLE `school_stage_teaching_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `school_stage_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_sendeds`
--

CREATE TABLE `sms_sendeds` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'mathimatic', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'physic', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'computer science', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `specialization_teaching_choice`
--

CREATE TABLE `specialization_teaching_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `specialization_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `school_stage_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `school_stage_choice_id`, `created_at`, `updated_at`) VALUES
(1, 13, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_teaching_choice`
--

CREATE TABLE `subject_teaching_choice` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_parents`
--

CREATE TABLE `s_parents` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_parents`
--

INSERT INTO `s_parents` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 12, '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `teaching_choice_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(2, 3, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(3, 4, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(4, 5, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(5, 6, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(6, 7, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(7, 8, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(8, 9, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(9, 10, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(10, 11, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_choices`
--

CREATE TABLE `teaching_choices` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `testPeriod` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_choice_teaching_option`
--

CREATE TABLE `teaching_choice_teaching_option` (
  `id` int(10) UNSIGNED NOT NULL,
  `teaching_option_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_choice_teaching_type`
--

CREATE TABLE `teaching_choice_teaching_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `teaching_type_id` int(10) UNSIGNED DEFAULT NULL,
  `teaching_choice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teaching_options`
--

CREATE TABLE `teaching_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teaching_options`
--

INSERT INTO `teaching_options` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'Teaching one student at the appropriate student location', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'Teaching to the student group at the appropriate student location', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'Teaching one student at the appropriate teacher location', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(4, '', 'Teaching a group of students at the appropriate teacher location', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(5, '', 'Teaching a student online', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(6, '', 'Teaching a group of students online', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_types`
--

CREATE TABLE `teaching_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `ar_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `en_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teaching_types`
--

INSERT INTO `teaching_types` (`id`, `ar_name`, `en_name`, `created_at`, `updated_at`) VALUES
(1, '', 'Normal', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(2, '', 'Online', '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(3, '', 'Both', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `template_s_m_ss`
--

CREATE TABLE `template_s_m_ss` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'male',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activationCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-avatar.png',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `age` int(11) DEFAULT NULL,
  `lat` int(11) DEFAULT NULL,
  `lng` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstName`, `lastName`, `email`, `password`, `gender`, `type`, `mobile`, `country`, `city`, `activationCode`, `avatar`, `address`, `active`, `age`, `lat`, `lng`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, 'admin@admin.com', '$2y$10$fs7Rnvl9Ot5cPB9Cqch4defvy6zhhPSJDyiSiobTYVHyx9yNPeEbi', 'male', 'admin', NULL, NULL, NULL, NULL, 'default-avatar.png', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(2, 'teacher 1', NULL, NULL, 'teacher1@gmail.com', '$2y$10$2tQGhWmADCTAJZHpx75/IODQABsjcM3EnEDBsydC3lUgkTNnMP6dC', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '1.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(3, 'teacher 2', NULL, NULL, 'teacher2@gmail.com', '$2y$10$Jna8azPEXjxKDOn5Q21fPuSsNA1AUELLMC9hJL0gvyx.8N7MHBE1C', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '2.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(4, 'teacher 3', NULL, NULL, 'teacher3@gmail.com', '$2y$10$60Uw/tEH4T0HT2h3NvQNxefomCX7QOsvdXBf1ZyZJz0GBk4WFV1Fu', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '3.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(5, 'teacher 4', NULL, NULL, 'teacher4@gmail.com', '$2y$10$KkXfUjP1htVez9bWQJ1RS.LA9LAcGES54dyL8UGR.gzkId9zTBoam', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '4.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(6, 'teacher 5', NULL, NULL, 'teacher5@gmail.com', '$2y$10$NRY4TqwgrMhzge.eHr1v..aMw8.wYr8a2o9LWUTNJ4y7rvlvMIzUW', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '5.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(7, 'teacher 6', NULL, NULL, 'teacher6@gmail.com', '$2y$10$tJVdIyakIrSVWZUJHnG3CuM6ajMiiEfppzKP3jzxpV8G6opuiRXiG', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '6.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:41', '2018-04-25 09:37:41'),
(8, 'teacher 7', NULL, NULL, 'teacher7@gmail.com', '$2y$10$MXoUS8fCeCqK34P34FyM.OMbF3uOHmpsuqD4ornLjEYXCBE26iWQa', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '7.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(9, 'teacher 8', NULL, NULL, 'teacher8@gmail.com', '$2y$10$lV4vrlAZE/3X4VW1bT2A4.D15J2qIY3uZOUJCtOdrKcQN0gZYpGFa', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '8.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(10, 'teacher 9', NULL, NULL, 'teacher9@gmail.com', '$2y$10$eo/vG0/LwtUKWDSl4y4lJeIvIQ3fTyXUKj3O.duYmNmsU2pChhds.', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '9.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(11, 'teacher 10', NULL, NULL, 'teacher10@gmail.com', '$2y$10$A1Str6Bv94qxN1oCvW9XCe4I2k3oiQrCr1LR4vovCgxTBmXgk5i72', 'male', 'teacher', NULL, 'Algeria', 'Chlef Province', NULL, '10.jpg', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(12, 'parent', NULL, NULL, 'parent@gmail.com', '$2y$10$Mou.e03la6blRE.kXk4VQ.EzutMiueFWIl8O73tPpBMOaK6j6QNWK', 'male', 'parent', NULL, NULL, NULL, NULL, 'default-avatar.png', NULL, 1, NULL, NULL, NULL, NULL, '2018-04-25 09:37:42', '2018-04-25 09:37:42'),
(13, 'student', NULL, NULL, 'student@gmail.com', '$2y$10$nybh6Ir6BKIDlDG.IWL6GepJbFy.Jtfad95073hgHuBRAS7rdtYke', 'male', 'student', NULL, NULL, NULL, NULL, 'student.png', NULL, 1, NULL, NULL, NULL, 'VHdjhHEtmXLgexTLBIKvYAilIzSFbhZ0fDQS8SzdOT8q21GX2RLHz6fcXmjr', '2018-04-25 09:37:42', '2018-04-25 09:37:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculas`
--
ALTER TABLE `curriculas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curricula_teaching_choice`
--
ALTER TABLE `curricula_teaching_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_school_stages`
--
ALTER TABLE `high_school_stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `high_school_stage_teaching_choice`
--
ALTER TABLE `high_school_stage_teaching_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `principal_settings`
--
ALTER TABLE `principal_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_stages`
--
ALTER TABLE `school_stages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_stage_choices`
--
ALTER TABLE `school_stage_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_stage_teaching_choice`
--
ALTER TABLE `school_stage_teaching_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_sendeds`
--
ALTER TABLE `sms_sendeds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sms_sendeds_user_id_foreign` (`user_id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialization_teaching_choice`
--
ALTER TABLE `specialization_teaching_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_teaching_choice`
--
ALTER TABLE `subject_teaching_choice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_parents`
--
ALTER TABLE `s_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_choices`
--
ALTER TABLE `teaching_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_choice_teaching_option`
--
ALTER TABLE `teaching_choice_teaching_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_choice_teaching_type`
--
ALTER TABLE `teaching_choice_teaching_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_options`
--
ALTER TABLE `teaching_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_types`
--
ALTER TABLE `teaching_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_s_m_ss`
--
ALTER TABLE `template_s_m_ss`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `curriculas`
--
ALTER TABLE `curriculas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `curricula_teaching_choice`
--
ALTER TABLE `curricula_teaching_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `high_school_stages`
--
ALTER TABLE `high_school_stages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `high_school_stage_teaching_choice`
--
ALTER TABLE `high_school_stage_teaching_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `principal_settings`
--
ALTER TABLE `principal_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_stages`
--
ALTER TABLE `school_stages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `school_stage_choices`
--
ALTER TABLE `school_stage_choices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_stage_teaching_choice`
--
ALTER TABLE `school_stage_teaching_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_sendeds`
--
ALTER TABLE `sms_sendeds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialization_teaching_choice`
--
ALTER TABLE `specialization_teaching_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_teaching_choice`
--
ALTER TABLE `subject_teaching_choice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_parents`
--
ALTER TABLE `s_parents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teaching_choices`
--
ALTER TABLE `teaching_choices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_choice_teaching_option`
--
ALTER TABLE `teaching_choice_teaching_option`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_choice_teaching_type`
--
ALTER TABLE `teaching_choice_teaching_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teaching_options`
--
ALTER TABLE `teaching_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teaching_types`
--
ALTER TABLE `teaching_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template_s_m_ss`
--
ALTER TABLE `template_s_m_ss`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sms_sendeds`
--
ALTER TABLE `sms_sendeds`
  ADD CONSTRAINT `sms_sendeds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
