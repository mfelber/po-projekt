-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 14.Dec 2023, 15:25
-- Verzia serveru: 10.4.28-MariaDB
-- Verzia PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `po-projekt`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `countryName` varchar(45) NOT NULL,
  `imageURL` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `home`
--

INSERT INTO `home` (`id`, `countryName`, `imageURL`) VALUES
(1, 'Istanbul', 'https://a.cdn-hotels.com/gdcs/production6/d781/3bae040b-2afb-4b11-9542-859eeb8ebaf1.jpg'),
(3, 'England', 'https://www.worldatlas.com/r/w1200/upload/c7/28/32/untitled-design-207.jpg'),
(4, 'Germany ', 'https://www.state.gov/wp-content/uploads/2018/11/Germany-2109x1406.jpg'),
(5, 'USA', 'https://www.fodors.com/assets/destinations/1128/skyline-manhattan-new-york-city-new-york-usa_980x650.jpg'),
(6, 'Netherlands', 'https://www.thetimes.co.uk/travel/wp-content/uploads/sites/6/2022/02/USE_Traditional-houses-beside-a-canal-in-Leiden-the-Netherlands_Credit_GettyImages-1144289457.jpg'),
(7, 'Slovakia ', 'https://miro.medium.com/v2/resize:fit:1400/0*6_OBiTT4MvNfK75J.jpg');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
