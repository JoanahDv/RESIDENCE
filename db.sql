-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 24, 2021 at 03:28 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project5`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` tinytext NOT NULL,
  `published_date` date NOT NULL,
  `image` text NOT NULL,
  `number` int(11) NOT NULL,
  `draft` tinyint(1) NOT NULL DEFAULT '1' COMMENT ' '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `is_admin`) VALUES
(1, 'jo', '$2y$10$QbMxxQZfZ9oAOOQlpbiUoO9bNgyB5XQ6.F6BmeoepF87tlKieI7PC', 1),
(2, 'jo2', '$2y$10$euEpbmOOxkQC/MTQ64LYLe8hRQDXywXtflVt1rqkZJD4uYPnsGuBS', 0),
(4, 'jo3', '$2y$10$1gy//9xTVDMr22Y.K4RQPO0vd.B5MgH6vYMXVfWYM2EsEQ1ziKO7.', 0),
(6, 'jo4', '$2y$10$2ZCunH/aoyo24em4f/t5ceHt4evPoGpkzzWIVunBHOIWMxSsEs6Re', 0),
(7, 'jo5', '$2y$10$LIJ9IuHW0JypP5EJQppXcOTxpMacWd.PHpv9dNay8fFsZmtNFiYw6', 0),
(8, 'jane', '$2y$10$dMUG/kl99K8xwcNl63Cb7OazoMlIGo4oeg..klKtBMRwB77bua.lu', 0),
(10, 'moi', '$2y$10$QXhq3A2P8ivo8mUInfUlveZogI4rtpu8.hpRlPewKuOnvw8qjUKve', 0),
(14, 'elle', '$2y$10$XdnsMH6OtEph0X1UwUZwme69zrc8zCkpaQ7QZf1z1dH9JwbJo8XzG', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
