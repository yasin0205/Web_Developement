-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 06:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_id` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_id`) VALUES
(1, 'science', NULL),
(2, 'healtjh', NULL),
(3, 'politics', NULL),
(4, 'history', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descs` longtext NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `videos` varchar(255) NOT NULL,
  `catid` int(255) NOT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `descs`, `thumbnail`, `videos`, `catid`, `created_at`) VALUES
(23, 'hello', 'Enter Description', '21897.jpg', '', 2, NULL),
(24, 'hello 2', 'Enter Description', '22926.jpg', '', 2, NULL),
(25, 'hello bro', 'Enter Description', '158041507699568.jpg', '', 2, NULL),
(26, 'dude bhai', 'Enter Description', '167091507699628dude24.jpg', '', 4, NULL),
(27, 'hello', 'Enter Description', '311441507700337dude24.jpg', '114571507700337dudevideos.mp4', 3, NULL),
(28, 'hello', 'Enter Description', '211391507700432dude24.jpg', '89121507700432dudevideos.mp4', 3, NULL),
(29, 'hello', 'Enter Description', '138141507700758dude24.jpg', '76711507700758dudevideos.mp4', 1, NULL),
(30, 'beautiful buterfly', 'Enter Description', '134121507701617dude24.jpg', '304131507701617dudevideos.', 3, NULL),
(31, 'hello', 'Enter Description', '108041507742640dude24.', '931507742640dudevideos.', 3, NULL),
(32, 'this is new one', 'Enter Description', '193811507742976dude24.', '46821507742976dudevideos.', 4, NULL),
(33, 'hello', 'Enter Description', '14671507742996dude24.', '68721507742996dudevideos.', 1, NULL),
(34, 'how are you', 'Enter Description', '217901507743159dude24.', '46071507743159dudevideos.', 3, '1507743159'),
(35, 'hello bro new winter now ', 'hello man', '240851507743951dude24.', '95141507743951dudevideos.', 3, '1507743951'),
(37, 'Most Beautiful Creature In The World', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '21481507745130dude24.jpg', '150531507745130dudevideos.mp4', 3, '1507745130'),
(38, 'hey man', 'Enter Description', '272631508154366dude24.', '149241508154366dudevideos.', 1, '1508154366'),
(39, 'hello', '', '58711508500622dude24.jpg', '179161508500622dudevideos.mp4', 1, '1508500622'),
(40, 'manoj', '', '320531508669095dude24.jpg', '96741508669095dudevideos.mp4', 3, '1508669095');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `email`, `password`) VALUES
(4, 'hello 23', 'hello123@gmail.com', '$2y$10$.7.mi5/UJw3L1ruCbvwfO.QpLMmm/3M2PDNF1audcZOQszc1lFEOa'),
(5, 'appupandit2072', 'appupandit2072@gmail.com', '$2y$10$QfCFTjrYMeGHHxEKkz1oXOJ4JMLv4YWy41n7yD0zYIBSCZx08e1GG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
