-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 27, 2021 at 07:35 AM
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
  `message` text NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `date`) VALUES
(2, 'Stella', 'Jones', 'stellajones@yahoo.com', 'Updates', 'Hi, when do we get an updates on the cities, I would liek to move asap. Thank you', '2021-09-21 18:29:42'),
(3, 'Jean', 'Paul', 'jeanpaul@residence.com', 'SITEWEB', 'Merci pour le site!  JP', '2021-09-21 18:29:42'),
(5, 'Lisa', 'Bonnet', 'lisabonnet@live.com', 'Voyager', 'Ready for new adventures!', '2021-09-21 18:29:42'),
(6, 'Marcus', 'Greenspeed', 'marcusgreen@google.com', 'Paris', 'Is paris really expensive? any updates on where to live?\r\nThank you', '2021-09-21 18:29:42'),
(7, 'Issa', 'Rae', 'issarae@yahoo.com', 'Blogs and images', 'will you be uploading any blogs and pictures on each city anytime soon?\r\n', '2021-09-21 18:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `station_id` int(11) NOT NULL,
  `station_name` text NOT NULL,
  `travel_time` float NOT NULL,
  `city_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `station_id`, `station_name`, `travel_time`, `city_name`) VALUES
(21, 15, 87192427, 'Noveant', 2.95, 'Noveant-sur-Moselle'),
(22, 15, 87174409, 'Mourmelon-le-Petit', 1.4, 'Mourmelon-le-Petit'),
(23, 15, 87213462, 'Riedseltz', 5.4, 'Riedseltz'),
(27, 15, 87481184, 'Oudon', 3.95, 'Oudon'),
(28, 15, 87141291, 'Neufchateau', 3.15, 'Neufchateau'),
(29, 15, 87447284, 'Valognes', 3, 'Valognes'),
(31, 15, 87194209, 'Montmedy', 6.85, 'Montmedy'),
(32, 15, 87214213, 'Dambach-la-Ville', 3.3, 'Dambach-la-Ville'),
(36, 15, 87594093, 'Ussel', 9.95, 'Ussel'),
(37, 15, 87576306, 'Bigny', 3.65, 'Vallenay'),
(38, 15, 87764001, 'Montelimar', 5.575, 'Montelimar'),
(39, 21, 87276006, 'Creil', 0.516667, 'Creil'),
(40, 21, 87174409, 'Mourmelon-le-Petit', 1.4, 'Mourmelon-le-Petit'),
(41, 21, 87193524, 'Farschviller', 5.88333, 'Farschviller'),
(42, 21, 87574319, 'Onzain-Chaumont-sur-Loire', 1.68333, 'Veuzain-sur-Loire'),
(43, 21, 87316109, 'Dommartin-Remiencourt', 2.13333, 'Dommartin'),
(44, 21, 87447284, 'Valognes', 3, 'Valognes'),
(45, 21, 87118299, 'Bar-sur-Aube', 1.98333, 'Bar-sur-Aube'),
(48, 21, 87576140, 'Selles-St-Denis', 1.81667, 'Selles-Saint-Denis'),
(49, 21, 87713529, 'Nuits-St-Georges', 2.46667, 'Nuits-Saint-Georges'),
(50, 21, 87182139, 'St-Louis', 3.26667, 'Saint-Louis'),
(51, 21, 87478404, 'Laval', 1.45, 'Laval'),
(52, 21, 87192427, 'Noveant', 2.95, 'Noveant-sur-Moselle'),
(53, 21, 87141291, 'Neufchateau', 3.15, 'Neufchateau');

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
(14, 'elle', '$2y$10$XdnsMH6OtEph0X1UwUZwme69zrc8zCkpaQ7QZf1z1dH9JwbJo8XzG', 0),
(15, 'Joanah', '$2y$10$vTL.znE8NDBDO0SWwz3vAuJAhk6ayHJk6ZbVCASAFN3khcDVGmDaS', 0),
(20, 'Marcus', '$2y$10$EPPXmTZ.sZEwobTgvV.DEOsKgDZVH58/DtheRsd3CQWNMlB7cDXxu', 0),
(21, 'Ana', '$2y$10$7kiqQU7T0ChFmEt9Q4s.C.XwxTZSfHBidW83VPj3HXj4t0yjlXuq.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`station_id`);

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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
