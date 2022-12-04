-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.freehostingeu.com
-- Generation Time: Dec 04, 2022 at 03:05 PM
-- Server version: 5.7.20-log
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3552721_karthy`
--
CREATE DATABASE IF NOT EXISTS `3552721_karthy` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `3552721_karthy`;

-- --------------------------------------------------------

--
-- Table structure for table `chat_data`
--

CREATE TABLE `chat_data` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `room_id`, `user_id`, `data`) VALUES
(323, 26, 35, 'hi'),
(324, 26, 35, 'supe da'),
(325, 26, 35, 'welcome to my channel'),
(326, 26, 35, 'okay guys'),
(327, 27, 36, 'hi'),
(328, 27, 36, 'dfsa'),
(329, 27, 36, 'dfsaf'),
(330, 28, 38, 'hisd'),
(331, 28, 37, 'hi'),
(332, 23, 39, 'hi'),
(333, 23, 39, 'bro'),
(334, 23, 39, 'epdi irukka'),
(335, 23, 39, 'saptingala'),
(336, 23, 40, 'hi..'),
(337, 29, 41, 'hi'),
(338, 30, 43, 'hi'),
(339, 30, 44, 'hi'),
(340, 30, 43, 'super'),
(341, 32, 46, '521');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_16_095851_create_profiles_table', 1),
(4, '2020_08_23_193259_create_skills_table', 2),
(5, '2020_08_23_220425_create_portfolis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolis`
--

CREATE TABLE `portfolis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolis`
--

INSERT INTO `portfolis` (`id`, `name`, `name2`, `web`, `file`, `created_at`, `updated_at`) VALUES
(5, 'zoho taxi problem', 'interview question', 'http://karthickraja.eu5.net/taxi/', '2033193048.jpeg', '2020-08-24 06:09:34', '2020-08-24 06:09:34'),
(6, 'php logic coding', 'Interview questions', 'http://summathan.eu5.net/code/', '161640923.jpeg', '2020-08-24 06:11:58', '2020-08-24 06:11:58'),
(7, 'python logic coding', 'Blog - Interview Questions', 'https://pyworldtamil.blogspot.com/', '1036734828.jpeg', '2020-08-29 15:17:26', '2020-08-29 15:17:26'),
(8, 'Todo project', 'With Login & copytoclipboard', 'http://karthickraja.eu5.net/todo/', '1547874689.jpeg', '2020-08-30 06:25:39', '2020-08-30 06:25:39'),
(9, 'ROOM - CHAT', 'Room Chat - using PHP and JS', 'http://karthickraja.eu5.net/chat/', '1076639452.png', '2020-10-20 10:17:36', '2020-10-20 10:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `ph` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `email`, `job`, `fb`, `link`, `about`, `age`, `ph`, `address`, `lang`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Karthickraja', 'karthickraja.gm@gmail.com', 'WebDeveloper, Chess Coach & Player', 'https://www.facebook.com/karthy.raja.106', 'https://www.facebook.com/karthy.raja.106', 'Hi I am Karthickraja,\r\nI was completed B.E Mechanical Engg in Sethu Institute of Technology, Now Working as WebDeveloper in DCI and my hobbies is playing and teaching chess.', 24, '+917708753771', '19/6, Kamaraj Cross Street, Villapuram, Madurai', 'Tamil & English', 'profilepic.PNG', '2020-08-23 23:00:54', '2020-08-23 23:00:54'),
(2, 'Karthickraja', 'karthickraja.gm@gmail.com', 'WebDeveloper', 'https://www.facebook.com/karthy.raja.106', 'https://www.linkedin.com/in/karthickraja-n-9b2b60bb/', 'Hi I am Karthickraja, I was completed B.E Mechanical Engg in Sethu Institute of Technology, Now Working as WebDeveloper in DCI and my hobbies is playing and teaching chess.', 24, '+917708753771', '19/6, Kamaraj Cross Street, Villapuram, Madurai - 625012.', 'Tamil & English', 'profilepic.PNG', '2020-08-29 14:55:22', '2020-08-29 14:55:22'),
(3, 'Ajith T', 'ajith.thiraviyam@gmail.com', 'Junior WebDeveloper', 'https://www.facebook.com/', 'https://in.linkedin.com/', 'I am Ajith from Madurai. I was completed B.E CSE in Latha Mathavan Engg on 2014-2018.\r\nI am working in DCI as Junior WebDeveloper.', 24, '9786163326', 'Kallanthiri', 'English and Tamil', 'ajith.jpg', '2020-09-24 11:27:25', '2020-09-24 11:27:25'),
(4, 'Karthickraja N', 'karthickraja.gm@gmail.cpm', 'WebDeveloper', 'https://www.facebook.com/karthy.raja.106', 'https://www.linkedin.com/in/karthickraja-n-9b2b60bb/', 'Hi, Welcome to my resume webpage.\r\nI was completed B.E Mechanical Engg in 2017.\r\nStill, I am working in DCI as WebDeveloper.\r\nI develop web through laravel framework.\r\nMy hobbies is playing chess and solving problem.', 24, '06379274868', '19/Q Kamaraj Cross Street,\r\nVillapuram, Madurai', 'English And Tamil', 'profile.PNG', '2020-09-26 11:55:12', '2020-09-26 11:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `password`) VALUES
(20, 'madurai', '12345'),
(21, 'ram', '12345'),
(22, 'room77', '1234'),
(23, 'dci', '1234'),
(24, 'lunch', '1234'),
(25, 'kumar', '1234'),
(26, 'madurai', '123456'),
(27, 'interview', '12345'),
(28, 'inter', '1234'),
(29, 'madurai20', '12345'),
(30, 'trio1', '123456'),
(31, '', ''),
(32, '20', '2152');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `skill` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill`, `created_at`, `updated_at`) VALUES
(1, 'html-50,css-78,Bootstrap-30', '2020-08-24 03:17:49', '2020-08-24 03:17:49'),
(2, 'html-70,css-40,javascript-35,jquery-60,bootstrap-50,laravel-45,wordpress-30,mysql-60', '2020-08-24 03:56:27', '2020-08-24 03:56:27'),
(3, 'html-89,css-90', '2020-08-28 15:21:46', '2020-08-28 15:21:46'),
(4, 'html-70,css-60,bootstrap-40,mysql-70,php-70,python-60,laravel-60,wordpress-45,javascript-40,jquery-60', '2020-08-28 15:25:37', '2020-08-28 15:25:37'),
(5, 'html-60,css-45,php-70,laravel-60,javascript-40,jquery-55,mysql-60', '2020-09-24 11:30:28', '2020-09-24 11:30:28'),
(6, 'html-80,css-60,javascript-40,jquery-50,mysql-60,php-70,laravel-60,python-60,wordpress-40', '2020-09-26 11:57:37', '2020-09-26 11:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `tab1`
--

CREATE TABLE `tab1` (
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `D` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab1`
--

INSERT INTO `tab1` (`A`, `B`, `C`, `D`) VALUES
(1, 2, 200, 10),
(2, 6, 800, 14),
(3, 5, 650, 13),
(4, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tab2`
--

CREATE TABLE `tab2` (
  `cid` int(11) NOT NULL,
  `bt` int(11) NOT NULL,
  `pt` int(11) NOT NULL,
  `dt` int(11) NOT NULL,
  `pp` int(11) NOT NULL,
  `dp` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `taxi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab2`
--

INSERT INTO `tab2` (`cid`, `bt`, `pt`, `dt`, `pp`, `dp`, `charge`, `taxi`) VALUES
(1, 9, 9, 10, 1, 2, 200, 1),
(2, 9, 9, 14, 1, 6, 800, 2),
(3, 9, 9, 13, 1, 5, 650, 3);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Copy` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `user_id`, `Name`, `Copy`) VALUES
(23, 6, 'ftp pw ', 'hDu]p8FO52UV#c4W'),
(28, 7, 'Wish', 'Goodmorning'),
(30, 6, 'email', 'karthikraja.nagaraj@dci.in'),
(36, 8, 'Wish Gm', 'Good Morning..'),
(37, 8, 'Hubstaff password', 'Ei%*g2G!!Hk)('),
(45, 6, 'eu-pw', 'DCIhost7086'),
(46, 9, 'sasikumar', ''),
(48, 6, 'pw', 'Ei%*g2G!!Hk)'),
(49, 6, 'dummypw', 'Karthi098@'),
(57, 10, 'Wish', 'Good Morning'),
(58, 10, 'Name', 'Ramkumar'),
(59, 11, 'Wish', 'Good Morning'),
(60, 11, 'figure', 'figure 2.41'),
(75, 13, 'b1', 'Good Morning'),
(76, 13, 'oos', 'NOT REPORTING OOS CASE:(7218DDU/DWLS \"KNOWING OF VIOLATION\"/CT/G/2005) AS PER AB GL;'),
(83, 6, 'Permission', ' sudo chmod -R 777 /var/www/html/eshop/wp-content'),
(85, 6, 'passnet', 'Mdu@DCIsupp0rt'),
(86, 6, 'usernet', 'supportdci'),
(87, 6, 'karthickraja eu username', 'karthickraja.gm@gmail.com'),
(88, 6, 'karthickraja eu password', 'DCIhost7086'),
(89, 6, 'karthickraja eu ftp pw', 'p15@d0Vg7x#};MmY'),
(90, 6, 'karthickraja eu ftp user name', ' 3552721_karthy'),
(91, 6, 'karthickraja ftp host', 'fdb27.freehostingeu.com'),
(93, 6, 'wish', 'Good Morning'),
(94, 6, 'pwj', 'trio15051989@gmail.com |  Z(ExH78Mv_jgsVKn'),
(95, 14, 'query_control', 'Query Controller Updated For testing - KarthickRaja N'),
(96, 14, 'jira mail', 'trio15051989@gmail.com'),
(97, 14, 'jira password', 'Z(ExH78Mv_jgsVKn'),
(98, 14, 'paypal', 'gatesiva44@gmail.com'),
(99, 14, 'paypal pass', 'sivasonai44'),
(100, 14, 'test purpose', 'Test purpose - KarthickRaja N'),
(101, 14, 'ikl', 'l;'),
(102, 14, 'btn', 'hello worfdldfksdajfndsjklafnsldakfnsjkdalfnsdaf'),
(103, 14, 'pass', 'y]DmP8R&MY8P&>JW'),
(126, 15, 'mail_password', 'xyzdjqipkljhjmir'),
(129, 14, 'bw', 'G=H4rx]Ev+R}rtf5'),
(133, 15, 'api', 'API Updated - Karthickraja'),
(134, 6, 'gp', 'G=H4rx]Ev+R}rtf5'),
(135, 14, 'commit', 'Test Purpose - Karthickraja'),
(136, 14, 'test_commit', 'test purpose - Karthickraja'),
(137, 14, 'test', 'sdfaklas'),
(138, 14, 'hi', 'good morning'),
(140, 16, 'te', ' dummy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `room_id`, `user_name`) VALUES
(36, 27, 'karthy'),
(37, 28, 'karthy'),
(38, 28, 'kumar'),
(39, 23, 'karthy'),
(40, 23, 'vignesh'),
(41, 29, 'karthy'),
(42, 29, 'dfjgui'),
(43, 30, 'karthick'),
(44, 30, 'sanjay'),
(45, 31, ''),
(46, 32, 'pop');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `User` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `Name`, `User`, `Email`, `Password`) VALUES
(6, 'karthy', 'karthy', 'karthickraja.gm@gmail.com', '2013107086'),
(14, 'karthy', 'karthy1', 'karthy@gmail.com', '2013107086'),
(15, 'karthy', 'karthy2', 'karthy2@gmail.com', '2013107086'),
(16, 'karthickraja', 'karthickraja1', 'sathishgv2330@gmail.com', '12345678'),
(17, 'saravana', 'saravana', 'saravana@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_data`
--
ALTER TABLE `chat_data`
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
-- Indexes for table `portfolis`
--
ALTER TABLE `portfolis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab2`
--
ALTER TABLE `tab2`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
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
-- AUTO_INCREMENT for table `chat_data`
--
ALTER TABLE `chat_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolis`
--
ALTER TABLE `portfolis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tab2`
--
ALTER TABLE `tab2`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
