-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 01:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyhrro`
--

-- --------------------------------------------------------

--
-- Table structure for table `encyclopedia`
--

CREATE TABLE `encyclopedia` (
  `id` int(11) NOT NULL,
  `story` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `encyclopedia`
--

INSERT INTO `encyclopedia` (`id`, `story`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"w-richtext\">\r\n<p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>\r\n<blockquote>Quote style lorem ipsum</blockquote>\r\n<h4>Static and dynamic content editing</h4>\r\n<p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>\r\n<h4>How to customize formatting for each rich text</h4>\r\n<p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the \"When inside of\" nested selector system.</p>\r\n</div>', 1, 0, '2022-06-15 05:53:10', '2022-06-15 00:59:54'),
(2, '<p>The latter half of the nineteenth century marked a period of maturity for the American&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/literature-and-arts/language-linguistics-and-literary-terms/literature-general/short-story\">short story</a>. Its growth was due largely to the influence of the realist movement, which professionalized the literary arts, putting them to the service of aesthetic protocols designed to elevate fiction to the cultural status of science, politics, and the law. Emphasizing representational accuracy, tonal objectivity, and the taxonomic organization of fictional modes and styles into distinct categories, realists approached the&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/literature-and-arts/language-linguistics-and-literary-terms/literature-general/short-story\">short story</a>&nbsp;with the intent of formalizing what had to date been at best an amorphous classification. There were short stories before the term \"short story\" entered the critical vocabulary in the 1850s, of course, but they varied so widely in technique and effect that the consanguinity among them was difficult to specify (Marler, pp. 154&ndash;155). The lack of generic unity explains why short fiction was broadly dismissed as a minor form, one suitable for novices needing to \"prepare themselves for future and nobler exertions . . . to be worked up in more enduring materials\" (Pattee, p. 32). The imperatives of realism redeemed the short story from this animadversion, giving it a critical currency that, despite&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/people/literature-and-arts/american-literature-biographies/edgar-allan-poe\">Edgar Allan Poe</a>\'s efforts on its (and his own) behalf in the 1840s, and despite the memorable work of&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/people/literature-and-arts/american-literature-biographies/nathaniel-hawthorne\">Nathaniel Hawthorne</a>,&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/people/literature-and-arts/american-literature-biographies/herman-melville\">Herman Melville</a>, and others, it had not previously enjoyed. By the mid-1880s it would come to be celebrated as a \"uniquely\"&nbsp;<a class=\"interlinked\" href=\"https://www.encyclopedia.com/literature-and-arts/art-and-architecture/american-art/american-art\">American art</a>&nbsp;form, one whose \"supremacy,\" in Brander Matthews\'s estimation, \"any competent critic could not but acknowledge\" (p. 49).</p>', 1, 0, '2022-06-15 05:57:47', '2022-06-15 00:39:59'),
(3, '<div class=\"w-richtext\">\r\n<p>The rich text element allows you to create and format headings, paragraphs, blockquotes, images, and video all in one place instead of having to add and format them individually. Just double-click and easily create content.</p>\r\n<blockquote>Quote style lorem ipsum</blockquote>\r\n<h4>Static and dynamic content editing</h4>\r\n<p>A rich text element can be used with static or dynamic content. For static content, just drop it into any page and begin editing. For dynamic content, add a rich text field to any collection and then connect a rich text element to that field in the settings panel. Voila!</p>\r\n<h4>How to customize formatting for each rich text</h4>\r\n<p>Headings, paragraphs, blockquotes, figures, images, and figure captions can all be styled after a class is added to the rich text element using the \"When inside of\" nested selector system.</p>\r\n<p>&nbsp;</p>\r\n<p>added by jainil</p>\r\n</div>', 1, 0, '2022-06-15 06:36:19', '2022-06-15 03:18:00'),
(4, '<p><span style=\"color: #f1c40f;\">Jainil</span></p>', 1, 0, '2022-06-15 08:46:22', '2022-06-15 04:05:16'),
(5, '<h1 style=\"color: #ff0000;\">ddewdwdw</h1>', 1, 0, '2022-06-15 08:47:17', '2022-06-15 04:05:15'),
(6, '<p><span style=\"color: #f1c40f;\">wdwdwddwdwd</span></p>', 1, 0, '2022-06-15 09:24:38', '2022-06-15 09:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `profile_image` varchar(100) DEFAULT NULL,
  `verification_code` varchar(200) NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `device_type` enum('android','ios','web') NOT NULL,
  `device_token` varchar(100) NOT NULL,
  `user_type` enum('kyc_users','public_users','admin') NOT NULL DEFAULT 'public_users',
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_no`, `profile_image`, `verification_code`, `is_verified`, `device_type`, `device_token`, `user_type`, `status`, `remember_token`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$rA7x2kg1VU0Xd7U0/INOeeybnPuNZSRgYOHQm/FvRRo/6bEiG0t4O', NULL, NULL, '', 0, '', '', 'admin', 1, '', 0, '2021-10-22 07:50:05', '2021-10-22 07:50:05'),
(10, 'jainil', 'jainildarji007@gmail.com', '$2y$10$qJ5mGBnZi6otdgXrWP81YutNOY55knkQtAf0dBaT.eyAADYD4WT.e', '08200392932', '235748d7ca38282d784aa45c0dfbb095.png', '$2y$10$6KBhDw/uCrLxpEl2slxgxuraLFheC.JsLMMGAN9MO/VdHr4z5fLeO', 1, 'android', '', 'public_users', 1, '', 0, '2022-06-14 02:19:55', '2022-06-14 05:58:43'),
(11, 'efe1111', 'testdemo@gmail.com', '$2y$10$sVR2wJNuVek22XhAX3B3Iuv6RPaYSWJKBrtI6X1Usl15EK0one9NC', '9090909090', 'a91e72a6acd6d5a542cad23c9d70b422.png', '$2y$10$XxSPrzQLa1qeauScvgpfy.RfiOQD2Mpt8NhlSx8yM1qM5QnKmTTJG', 0, 'android', '', 'public_users', 1, '', 1, '2022-06-14 03:42:46', '2022-06-14 05:14:20'),
(12, 'demo', 'demo@gmail.com', '$2y$10$MX9AUuGvk63J2An1t9E/oeBHUomSTOErzGE4Qr8Qsy7cqIyydtmES', '920392322', 'b363fb513dd1c8fe0a1449d0b8e45042.jpg', '$2y$10$6jLhCKy.WpZTZCMzqD6kKeExF6oFodfzsGowpZjcNEAGS55SyCAky', 0, 'android', '', 'public_users', 1, '', 0, '2022-06-14 05:25:13', '2022-06-14 05:47:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encyclopedia`
--
ALTER TABLE `encyclopedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
