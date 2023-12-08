-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 12:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_kaftan`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_pizza`
--

CREATE TABLE `custom_pizza` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ingredient_1` text NOT NULL,
  `ingredient_2` text NOT NULL,
  `ingredient_3` text NOT NULL,
  `price` text NOT NULL,
  `creator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_pizza`
--

INSERT INTO `custom_pizza` (`id`, `name`, `ingredient_1`, `ingredient_2`, `ingredient_3`, `price`, `creator`) VALUES
(2, 'MIX', 'sos BBQ', 'pieczony kurczak', 'oregano', '21.04', 'Hubert'),
(3, 'misz masz', 'boczek', 'ananas', 'ementaler', '25.66', 'Hubert'),
(4, '777', 'szynka', 'szynka', 'szynka', '25.25', 'Hubert'),
(5, 'Spicy Chicken', 'pieczony kurczak', 'papryczki jalapeno', 'sos BBQ', '25.7', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `ingredient` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `ingredient`, `price`) VALUES
(1, 'sos pomidorowy', 3.4),
(2, 'mozzarella', 2),
(3, 'kapusta kiszona', 5.8),
(4, 'podwójna kiełbasa pepperon', 6.8),
(5, 'podwójna mozzarella', 4.4),
(6, 'pieczarki', 3.56),
(7, 'szynka', 3.75),
(8, 'papryczki jalapeno', 5.64),
(9, 'cebula', 2.32),
(10, 'boczek', 4.56),
(11, 'sos BBQ', 1.39),
(12, 'pieczony kurczak', 4.67),
(13, 'ananas', 1.23),
(14, 'papryka', 2.34),
(15, 'oregano', 0.98),
(16, 'ementaler', 5.87);

-- --------------------------------------------------------

--
-- Table structure for table `pizza`
--

CREATE TABLE `pizza` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `ingredient` int(11) NOT NULL,
  `opis` text NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `ingredient`, `opis`, `price`) VALUES
(1, 'Biesiadna', 1, 'Pizza Biesiadna idealna na wiejski wieczór ze znajomymi!', '49,90 zł'),
(2, 'Pepperoni', 2, 'Klasyk wśród miłośników pizzy oraz niedzielnych pojadaczy!', '40 zł'),
(3, 'Margherita', 3, 'Pokryta warstwą sera mozzarella, który się topi nadaje pizzy kremową konsystencję.', '25 zł'),
(4, 'Capricciosa', 4, 'Klasyk nad klasykami pizza z pieczarkami tak zwana capricciosa uwielbiana na scałym świecie', '35 zł'),
(5, 'Diavola', 5, 'Pizza stworzona dla tych którzy lubią pikante jedzenie', '40zł'),
(6, 'Stwórz własną', 6, 'Stwórz własną pizze a my przygotujemy ją dla ciebie wybierz składniki i zaprojektują ją!', '?');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_ingredients`
--

CREATE TABLE `pizza_ingredients` (
  `id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `ingredients` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pizza_ingredients`
--

INSERT INTO `pizza_ingredients` (`id`, `pizza_id`, `ingredients`) VALUES
(1, 1, 'sos pomidorowy, mozzarella, kapusta kiszona, kiełbasa cienka,pieczarki, ser rolada Ustrzycka'),
(2, 2, 'sos pomidorowy, podwójna mozzarella, podwójna kiełbasa pepperoni'),
(3, 3, 'sos pomidorowy, podwójna mozzarella'),
(4, 4, 'sos pomidorowy, mozzarella, szynka, pieczarki'),
(5, 5, 'sos pomidorowy, mozzarella, kiełbasa pepperoni, cebula, papryczki jalapeno');

-- --------------------------------------------------------

--
-- Table structure for table `pracownik`
--

CREATE TABLE `pracownik` (
  `id` int(11) NOT NULL,
  `login_p` text NOT NULL,
  `password_p` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pracownik`
--

INSERT INTO `pracownik` (`id`, `login_p`, `password_p`, `user_id`) VALUES
(1, 'Hubert_P', 'pass_P', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `user_adres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `user_adres`) VALUES
(1, 'user', 'user', 1),
(2, 'Hubert', 'pass', 2),
(3, 'test', 'test', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_adres`
--

CREATE TABLE `user_adres` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` text NOT NULL,
  `avenue` text NOT NULL,
  `place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_adres`
--

INSERT INTO `user_adres` (`id`, `user_id`, `city`, `avenue`, `place`) VALUES
(1, 1, 'London', 'Elizabeth II', '55/9'),
(2, 2, 'Koszalin', 'Modrzejewska', '78'),
(3, 3, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int(11) NOT NULL,
  `pizza_name` text NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `user_adres` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamowienie`
--

INSERT INTO `zamowienie` (`id`, `pizza_name`, `data`, `user_id`, `user_adres`) VALUES
(1, 'MIX', '2023-11-18', 2, 2),
(2, 'misz masz', '2023-11-18', 2, 2),
(3, 'Biesiadna', '2023-11-18', 2, 2),
(4, '777', '2023-11-19', 2, 2),
(5, 'Spicy Chicken', '2023-11-19', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_pizza`
--
ALTER TABLE `custom_pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza_ingredients`
--
ALTER TABLE `pizza_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pracownik`
--
ALTER TABLE `pracownik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_adres`
--
ALTER TABLE `user_adres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom_pizza`
--
ALTER TABLE `custom_pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pizza_ingredients`
--
ALTER TABLE `pizza_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pracownik`
--
ALTER TABLE `pracownik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_adres`
--
ALTER TABLE `user_adres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
