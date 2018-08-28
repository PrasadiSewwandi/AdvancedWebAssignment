-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 08:04 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `gender`, `Date_of_Birth`, `address`, `NIC`, `contact_no`, `email`, `job_title`, `specialization`, `faculty`, `department`) VALUES
(1, 'Dr. Ananda Karunathilake', 'M', '1970-04-10', '11/B, Panama road, Dehiwala', '70338856v', '0712947457', 'ananda@kln.com', 'Senior Lecturer', 'Artificial intelligence', 'Science', 'Software Engineering'),
(2, 'Dr. Gamini Wijethunge', 'M', '1965-09-05', '24, Rose lane, Kesbewa', '658295748v', '0771238375', 'gamini@kln.com', 'Dean', 'Simulation Modelling', 'Science', 'Software Engineering'),
(3, 'Mr. Ravihansa Dias', 'M', '1975-04-22', '15, Ananda road, Kotte', '753933774v', '0773817465', 'ravi@kln.com', 'Visiting Lecturer', 'Web Development', 'Science', 'Computer Science'),
(4, 'Dr. Nuwani Perera', 'F', '1983-07-17', '43, Visakha road, Ragama', '835839947v', '0783481384', 'nuwani@kln.com', 'Senior Lecturer', 'French', 'Humanity', 'Modern Language'),
(5, 'Ms. Nehara Rupasinghe', 'F', '1989-06-23', '25, Jaya Mawatha, Kiribathgoda', '893812215v', '0714883374', 'nehara@kln.com', 'Lecturer', 'German', 'Humanity', 'Modern Language');

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
(6, '2018_08_25_063856_create_students_table', 2),
(7, '2018_08_25_081819_create_lecturers_table', 2);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `NIC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered_year` year(4) NOT NULL,
  `faculty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GPA` double(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `Date_of_Birth`, `NIC`, `address`, `contact_no`, `email`, `registered_year`, `faculty`, `department`, `degree`, `GPA`) VALUES
(1, 'Varuni Punchihewa', 'F', '1995-01-13', '953749874v', '21/A, old road, Kahawatta', '0782984756', 'varuni@stu.kln.com', 2014, 'Science', 'Software Engineering', 'B.Sc. in Software Engineering', 3.20),
(2, 'Ishara Rathnayke', 'M', '1993-09-14', '937193748v', '12/A, Walukarama, Kelaiya', '0712378385', 'ishara@stu.kln.com', 2013, 'Sciencce', 'Computer Science', 'B.Sc. in Computer Science', 3.74),
(3, 'Savindi Perera', 'F', '1995-08-12', '953922739v', '54, Weerasiri Mawatha, Kalutara', '0713937723', 'savindi@stu.kln.com', 2014, 'Management', 'Finance', 'BBA in Finance', 3.97),
(4, 'Ruwani Dias', 'F', '1994-05-01', '948825947v', '23/A, Koswatta road, Kandy', '0772485547', 'ruwani@stu.kln.com', 2014, 'Humanity', 'Modern Language', 'BA in French', 3.87),
(5, 'Kasun Vithana', 'M', '1993-04-02', '937599146v', '11/C, Andrew lane, Meerigama', '0782866339', 'kasun@stu.kln.com', 2013, 'Humanity', 'Modern Language', 'BA in German', 3.35);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishara Rathnayke', 'ishara@stu.kln.com', '$2y$10$9KV5WTn1wdXDbOzUh4bO8e90K03kbeNS1DGFNU56L1BWxxsXRLeQq', '8cGd9GkIZAQWCd58j0M9egQS89OIMVJbjZhsOmLlJxfU9Fm8dtFAivbrWDre', '2018-08-27 12:05:14', '2018-08-27 12:05:14'),
(2, 'Kasun Vithana', 'kasun@stu.kln.com', '$2y$10$592T54D7Nc.hBsZIFPDmMOS6PwLW7DhOfLZ9wHfUcfZ561DgsoeF6', 'rx2tiT9bbT3x5I19VD6QKuH3w0St2kfYasMLw9AIuC6qqO9jaH6CyWLOCMSa', '2018-08-27 12:06:49', '2018-08-27 12:06:49'),
(3, 'Ruwani Dias', 'ruwani@stu.kln.com', '$2y$10$GJ3GwiBnmtoJtqMjiLTKmOOwqSdOCFmN/JYC6/7AX2JPd6HMfis7O', NULL, '2018-08-27 12:08:01', '2018-08-27 12:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
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
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
