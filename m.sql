-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 09, 2023 at 11:42 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(2) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Москва'),
(2, 'Санкт-Петербург'),
(3, 'Элиста');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `client` varchar(100) NOT NULL,
  `style` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `id_user`, `status`, `client`, `style`, `date`, `amount`) VALUES
(1, 6, 1, 'kolia@gmail.com', 'Подводная съёмка', '2023-11-29 22:27:00', 9000),
(2, 8, 1, 'kevin@gmail.com', 'Подводная съёмка', '2023-11-30 18:00:00', 15000),
(3, 9, 1, 'nina@mail.ru', 'Подводная съёмка', '2023-12-31 23:50:00', 15000),
(4, 7, 1, 'logo@mail.ru', 'Студийная съёмка', '2023-11-16 12:43:00', 9000),
(5, 8, 1, 'kevin@gmail.com', 'Студийная съёмка', '2023-11-24 14:00:00', 9000),
(6, 10, 1, 'val@mail.ru', 'Студийная съёмка', '2023-11-24 00:00:00', 20000),
(7, 10, 0, 'val@mail.ru', 'Выездная съёмка', '2023-11-22 17:00:00', 50000),
(8, 11, 1, 'antoxa@gmail.com', 'Подводная съёмка', '2023-12-07 21:00:00', 9000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(2) NOT NULL,
  `id_style` int(3) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `id_style`, `name`) VALUES
(1, 1, 'Package “Minimum”'),
(2, 1, 'Package “Vip”'),
(3, 2, 'Package “Standard”'),
(4, 2, 'Package “Duo”'),
(5, 3, 'Package “Portfolio”'),
(6, 3, 'Package “Underwater”'),
(7, 4, 'Package “Minimum”'),
(8, 5, 'Package “Vip”'),
(9, 6, 'Package “Minimum”'),
(10, 7, 'Package “Standard”'),
(11, 7, 'Package “Underwater”');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

CREATE TABLE `styles` (
  `id` int(2) NOT NULL,
  `id_city` int(2) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `id_city`, `name`) VALUES
(1, 1, 'Студийная съёмка'),
(2, 1, 'Подводная съёмка'),
(3, 1, 'Выездная съёмка'),
(4, 2, 'Подводная съёмка'),
(5, 2, 'Выездная съёмка'),
(6, 3, 'Студийная съёмка'),
(7, 3, 'Подводная съёмка');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `brief_information` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `telephone`, `nickname`, `brief_information`) VALUES
(4, 'admin', 'djeimss.holl@gmail.com', '2121', NULL, NULL, NULL),
(5, 'Милана', 'milana@mail.ru', '1111', '86541238984', 'milanca', 'Я люблю отдыхать'),
(6, 'Николай', 'kolia@gmail.com', '3490', '84569871236', 'versus', 'Ну я просто весельчак'),
(7, 'Настя', 'logo@mail.ru', '1903', '84569871200', 'logozin', 'Уляля'),
(8, 'Кевин', 'kevin@gmail.com', '2345', '84762158945', 'CAVIN', 'Меня зовут Кевин! Я люблю есть'),
(9, 'Нина', 'nina@mail.ru', '12345678', '89364581220', 'NINAN', 'За мной гонятся великие мастера мира'),
(10, 'Валера', 'val@mail.ru', 'fn29-asf', '87456258799', '', ''),
(11, 'Антон', 'antoxa@gmail.com', 'jfbb3928fbiu', '', 'aNtoXXX', 'Я геймер, люблю играть');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `styles`
--
ALTER TABLE `styles`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
