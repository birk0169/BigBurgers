-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 28. 06 2019 kl. 09:29:57
-- Serverversion: 10.1.37-MariaDB
-- PHP-version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_burger`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `categories`
--

INSERT INTO `categories` (`id`, `categoryName`) VALUES
(1, 'burger'),
(2, 'fries'),
(3, 'soda'),
(4, 'coffee'),
(5, 'menu');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `productcategories`
--

CREATE TABLE `productcategories` (
  `id` int(10) NOT NULL,
  `productId` int(10) NOT NULL,
  `categoryId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `authorId` int(10) NOT NULL,
  `imgSrc` varchar(100) NOT NULL,
  `imgAlt` varchar(100) NOT NULL,
  `price` double(8,2) NOT NULL,
  `timeStamp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`id`, `heading`, `content`, `authorId`, `imgSrc`, `imgAlt`, `price`, `timeStamp`) VALUES
(1, 'Big Burger', 'The classic and beloved Big Burger made with fresh tomatoes, crispy salat and creamy cheese.', 1, 'burger-1.png', 'The classic and tasty Big Burger', 42.00, 1559811270),
(2, 'Bigger Burger', 'The badass Bigger Burger everything the Big Burger was and MORE! With tasty bacon, pickles and extra size.', 1, 'burger-2.png', 'The Bigger Burger with extra crispy bacon', 40.00, 1559811356),
(3, 'Big Shroom Burger', 'Try the Big Shroom Burger, with mushrooms, avocado and our special shroom sauce', 1, 'burger-3.png', 'The fluffy and juicy Shroom Burger', 45.00, 1559811395),
(4, 'Big Double Burger', 'Twice the patty, twice the taste, with the Big Double Burger', 1, 'burger-4.png', 'Double the patty double the taste', 50.00, 1560244287),
(5, 'Big Nuggets', 'Try out delicious Big Nuggets, now made from real chicken', 1, 'nuggets-1.png', 'nuggets', 20.00, 1560245213),
(6, 'Big Fries', 'Our own fries made with Big Burger\'s secret spice mix', 1, 'fries-1.png', 'Fries made with Big Burger\'s secret spice mix', 25.00, 1560414683),
(7, 'Big Soda', 'Nice and fizzy soda?', 1, 'cola.png', 'Nice and fizzy soda?', 15.00, 1560428906),
(8, 'Big Coffee', 'Freshly brewed coffe for when you just can\'t stay awake', 3, 'Coffee-2.png', 'Freshly brewed coffee', 15.00, 1560757695),
(9, 'test', 'test', 1, 'coffee-3.png', 'coffe', 2.00, 1561379685);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `dbUsername` varchar(50) NOT NULL,
  `dbPassword` varchar(255) NOT NULL,
  `accessLevel` int(1) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `dbUsername`, `dbPassword`, `accessLevel`) VALUES
(1, 'birk', '$2y$10$U4Ue1PyB5h5AdHKlIWUNVuaNJhBw07UUMBlH/3zvIAb.bVF0PRtFm', 1),
(2, 'tim', '$2y$10$xFT1SXeyWolcw60mYf5gw.xMUx5T8sSbR9aJFUsmUG2L0CS4wJ8ga', 3),
(3, 'tom', '$2y$10$kgEHM4omdnmO.uUURYoP8eXeAOjb7DtUnaZ2mIJCC7myAD.4qpz0u', 2),
(4, 'steve', '$2y$10$33Mwn45tcxE794J7AjjRweZ3yL3U.u04I/4Afxs9o277Zg20Gl0K2', 3),
(5, 'steven', '$2y$10$sXoVkB9maMErRsuf.BG01ufjQuzgXiwt7FBkhbSqL297SGNrkxdm.', 3),
(6, 'paul', '$2y$10$92ikhL6ih12Pz2Y2hCPSW.MMIhLCfmSN8Fa9X0hmXekmNsyzBnRAm', 3),
(8, 'test', '$2y$10$i6g7fxmreVELDvWLdxanuOeCFCyDYzsxUw4D4a1tIhSdDDPtOGPba', 3);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `productcategories`
--
ALTER TABLE `productcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tilføj AUTO_INCREMENT i tabel `productcategories`
--
ALTER TABLE `productcategories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Tilføj AUTO_INCREMENT i tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
