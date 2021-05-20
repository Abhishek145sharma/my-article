-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 05:41 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `art_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_body` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(225) NOT NULL,
  `created_at` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_body`, `user_id`, `image_path`, `created_at`) VALUES
(21, 'reasons why RCB can win IPL 2021 when it resumes', 'The one question that has been on the lips of several Royal Challengers Bangalore (RCB) fans is, when will the RCB side win the IPL title? Right from the inception of the IPL, the Bangalore outfit has not managed to get hold of the IPL trophy even once.', 1, 'http://[::1]/ci/uploads/RCBjpg.jpg', '2021-01-20 08:59:36'),
(22, 'india vs england', 'As of Tuesday, India top the International Cricket Council (ICC) rankings in Tests and are second behind England in ODIs and T20Is. It has been more or less like that for a while now. These rankings are dynamic, a moving average that changes after every series and gives a fair understanding of a team’s position in the broader scheme of things. The ICC has also formulated a tournament cycle that witnesses a major event every two years. England, staying true to their ODI superiority, won the', 1, 'http://[::1]/ci/uploads/download_(6).jpg', '2021-01-20 09:05:04'),
(23, 'Hp laptop', 'HP NoteBook is a Windows 10 laptop with a 15.60-inch display that has a resolution of 1366x768 pixels. It is powered by a Core i5 processor and it comes with 8GB of RAM. The HP NoteBook packs 256GB of SSD storage. Graphics are powered by Intel HD Graphics 620.\r\nModel: NoteBook\r\nOperating system: Windows 10\r\nPrice in India: ?77,647', 1, 'http://[::1]/ci/uploads/download_(3).jpg', '2021-01-20 09:09:13'),
(24, 'Coronavirus disease', 'WHO is continuously monitoring and responding to this pandemic. This Q&A will be updated as more is known about COVID-19, how it spreads and how it is affecting people worldwide. For more information, regularly check the WHO coronavirus pages', 2, 'http://[::1]/ci/uploads/medical.jpg', '2021-05-20 09:13:53'),
(25, 'what about rapid test?', 'Rapid antigen tests (sometimes known as a rapid diagnostic test – RDT) detect viral proteins (known as antigens). Samples are collected from the nose and/or throat with a swab. These tests are cheaper than PCR and will offer results more quickly, although they are generally less accurate. These tests perform best when there is more virus circulating in the community and when sampled from an individual during the time they are most infectious. ', 2, 'http://[::1]/ci/uploads/download_(7).jpg', '2020-12-20 09:15:52'),
(27, 'Gully Boy Review', 'There’s a line in the film where the character MC Sher (Siddhant Chaturvedi) says, “Agar duniya mein sab comfortable hote toh rap kaun karta?” That’s an insight that comes only from a true fan of this performing art. Director Zoya Akhtar’s ‘Gully Boy’ is the definitive look at the rap scene in India. It chronicles the story of an ordinary boy Murad, from Dharavi, who dreams big and refuses to let adversity squash his spirit. His journey from being the quintessential slumdog to being an ambitio', 3, 'http://[::1]/ci/uploads/download_(9).jpg', '2021-05-20 09:25:57'),
(28, 'Pulsar 150 Specs, Features and Price', 'The Bajaj Pulsar 150 is powered by a 149.5 cc air-cooled engine which produces of power. It has a fuel tank of 15 L and a . The Bajaj Pulsar 150 starts at Rs 95,872 and goes up to Rs 1.04 Lakh (ex-showroom, Delhi). It is available in three variants.\r\nThe Bajaj Pulsar 150 is powered by a 149.5 cc air-cooled engine which produces of power. It has a fuel tank of 15 L and a .', 5, 'http://[::1]/ci/uploads/Bajaj-Pulsar-180F-660.jpg', '2021-01-20 09:29:54'),
(29, 'A PHP developer', 'A PHP developer is responsible for writing server-side web application logic. PHP developers usually develop back-end components, connect the application with the other (often third-party) web services, and support the front-end developers by integrating their work with the application.\r\n', 4, 'http://[::1]/ci/uploads/ed1.jpg', '2021-05-20 09:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'abhi', '123456', 'abhi123@gmail.com'),
(2, 'jay', '123456', 'jay@gmail.com'),
(3, 'kuldeep', '12345', 'kuldeep@gmail.com'),
(4, 'anshu', '789789', 'anshu@gmail.com'),
(5, 'sonu', '123123', 'sonu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
