-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: db5016497966.hosting-data.io
-- Erstellungszeit: 04. Dez 2024 um 07:19
-- Server-Version: 8.0.36
-- PHP-Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `flexidrive`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `booking`
--

CREATE TABLE `booking` (
  `bookingId` int UNSIGNED NOT NULL,
  `userId` int UNSIGNED NOT NULL,
  `carId` int UNSIGNED NOT NULL,
  `paymentId` int UNSIGNED NOT NULL,
  `von` date NOT NULL,
  `bis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `booking`
--

INSERT INTO `booking` (`bookingId`, `userId`, `carId`, `paymentId`, `von`, `bis`) VALUES
(3, 1, 6, 3, '2024-11-08', '2024-11-11'),
(4, 1, 7, 4, '2024-11-10', '2024-11-11'),
(6, 1, 6, 6, '2024-10-01', '2024-11-14'),
(9, 1, 21, 9, '2024-12-19', '2024-12-31'),
(10, 7, 10, 10, '2024-12-09', '2024-12-12'),
(11, 7, 11, 11, '2024-12-01', '2024-12-03'),
(12, 7, 12, 12, '2024-12-19', '2024-12-21'),
(13, 7, 23, 13, '2024-12-03', '2024-12-06');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `car`
--

CREATE TABLE `car` (
  `carId` int UNSIGNED NOT NULL,
  `typeId` int UNSIGNED NOT NULL,
  `locationId` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `preis` float NOT NULL,
  `bild` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `personen` int NOT NULL,
  `tueren` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `getriebe` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kraftstoff` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `verbrauch` float NOT NULL,
  `kw` int NOT NULL,
  `ps` int NOT NULL,
  `km` int NOT NULL,
  `klimaanlage` tinyint(1) NOT NULL,
  `koffer` int NOT NULL,
  `mindestalter` int NOT NULL,
  `fuehrerschein` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `car`
--

INSERT INTO `car` (`carId`, `typeId`, `locationId`, `name`, `preis`, `bild`, `personen`, `tueren`, `getriebe`, `kraftstoff`, `verbrauch`, `kw`, `ps`, `km`, `klimaanlage`, `koffer`, `mindestalter`, `fuehrerschein`) VALUES
(6, 1, 1, 'Ford Focus', 38.86, 'ford-focus.png', 5, '4/5', 'Schaltgetriebe', 'Benzin', 5.4, 92, 125, 0, 1, 2, 18, 'B'),
(7, 1, 1, 'Audi A3', 39, 'audi-a3.png', 5, '4/5', 'Automatikgetriebe', 'Benzin', 5.3, 81, 110, 0, 1, 2, 18, 'B'),
(10, 1, 1, 'BMW M3', 61, '887721732737317.png', 5, '5', 'Automatikgetriebe', 'Benzin', 12, 331, 450, 2534, 1, 1, 18, 'B'),
(11, 1, 2, 'Fiat 500', 41, '963611732738235.png', 4, '3', 'Schaltgetriebe', 'Benzin', 5, 13, 18, 34897, 0, 0, 18, 'B'),
(12, 1, 3, 'Volvo XC90', 51, '750261732738633.png', 7, '5', 'Automatikgetriebe', 'Elektro', 8, 335, 455, 23890, 1, 2, 18, 'B'),
(14, 1, 2, 'Ford C-Max', 46.71, '834851732739339.png', 5, '5', 'Schaltgetriebe', 'Benzin', 6.1, 110, 150, 9632, 1, 2, 18, 'B'),
(15, 4, 1, 'Porsche 911', 64.88, '775721733260813.png', 2, '2', 'Automatikgetriebe', 'Benzin', 7.7, 294, 400, 4734, 1, 1, 21, 'B'),
(16, 1, 2, 'Tesla Model Y', 51.99, '436041733262362.png', 5, '5', 'Automatikgetriebe', 'Elektro', 17.1, 393, 534, 29490, 1, 2, 18, 'B'),
(17, 1, 3, 'Volkswagen ID.4', 41.99, '343741733262719.png', 5, '5', 'Automatikgetriebe', 'Elektro', 16.4, 210, 286, 14000, 1, 2, 18, 'b'),
(18, 1, 2, 'Hyundai Ioniq 5', 43.99, '296671733262934.png', 5, '5', 'Automatikgetriebe', 'Elektro', 17.9, 160, 218, 42361, 1, 2, 18, 'b'),
(19, 1, 1, 'Kia EV6', 45.99, '304471733263075.png', 5, '5', 'Automatikgetriebe', 'Elektro', 15.9, 168, 228, 95687, 1, 2, 18, 'b'),
(20, 1, 3, 'Tesla Model X', 52.99, '675301733263447.png', 5, '5', 'Automatikgetriebe', 'Elektro', 18.1, 585, 795, 3219, 1, 2, 18, 'b'),
(21, 1, 3, 'Mercedes-Benz C-Klasse', 54.79, '952141733263584.png', 5, '5', 'Automatikgetriebe', 'Benzin', 8.9, 350, 476, 5321, 1, 1, 18, 'b'),
(22, 2, 1, 'Mercedes-Benz V-Klasse', 54.99, '690241733263993.png', 8, '3', 'Automatikgetriebe', 'Diesel', 6.2, 120, 163, 3421, 1, 8, 18, 'b1'),
(23, 2, 1, 'Merzedes-Benz Sprinter 314', 58.99, '436101733264275.png', 2, '3', 'Schaltgetriebe', 'Diesel', 6.7, 105, 143, 22567, 1, 70, 18, 'b1'),
(24, 2, 2, 'Mercedes-Benz Sprinter 314 ', 58.99, '397281733264425.png', 2, '3', 'Schaltgetriebe', 'Diesel', 7.5, 105, 143, 127982, 1, 70, 18, 'b1'),
(25, 2, 3, 'Mercedes-Benz Sprinter 314 ', 58.99, '661891733264480.png', 2, '3', 'Schaltgetriebe', 'Diesel', 6.8, 105, 143, 23463, 1, 70, 18, 'b1'),
(26, 2, 2, 'Ford Transit H3L3', 56.28, '378681733264801.png', 2, '3', 'Schaltgetriebe', 'Diesel', 6.4, 96, 131, 115687, 1, 50, 18, 'b1'),
(27, 2, 3, 'Ford Transit H3L3', 56.28, '441221733264850.png', 2, '3', 'Schaltgetriebe', 'Diesel', 6.4, 96, 131, 5478, 1, 50, 18, 'b1'),
(28, 3, 1, 'Dethleffs Trend T 7057', 89.99, '612971733265309.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.9, 130, 177, 37582, 1, 4, 18, 'b1'),
(29, 3, 3, 'Dethleffs Trend T 7057', 89.99, '14491733265376.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.9, 130, 177, 74568, 1, 3, 18, 'b1'),
(30, 3, 1, 'Adria Matrix Axess 670 SL', 94.99, '174781733265526.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.8, 121, 165, 23400, 1, 5, 18, 'b1'),
(31, 3, 2, 'Adria Twin Supreme 640', 94.99, '485541733265655.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.9, 118, 160, 62435, 1, 5, 18, 'b1'),
(32, 3, 3, 'Adria Twin Supreme 640', 94.99, '63881733265724.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.9, 118, 160, 32542, 1, 5, 18, 'b1'),
(33, 3, 2, 'Knaus Boxstar 600', 87.99, '673081733265858.png', 4, '4', 'Schaltgetriebe', 'Diesel', 8.7, 103, 140, 87646, 1, 3, 18, 'b1'),
(34, 4, 1, 'Ferrari 458', 128.99, '39541733266161.png', 2, '2', 'Automatikgetriebe', 'Benzin', 13.3, 441, 600, 5631, 1, 1, 21, 'b1'),
(35, 4, 2, 'Lamborghini Huracan ', 131.99, '39231733266285.png', 2, '2', 'Automatikgetriebe', 'Benzin', 14.5, 471, 640, 8901, 1, 0, 21, 'b1'),
(36, 4, 3, 'Lamborghini Aventador', 132.99, '389981733266532.png', 2, '2', 'Automatikgetriebe', 'Benzin', 16.9, 544, 740, 46810, 1, 0, 21, 'b1'),
(38, 4, 2, 'Mclaren 720s', 133.99, '883571733267027.png', 2, '2', 'Automatikgetriebe', 'Benzin', 16.8, 530, 721, 33545, 1, 0, 21, 'b1'),
(39, 4, 3, 'Audi R8', 131.99, '781641733267240.png', 2, '2', 'Automatikgetriebe', 'Benzin', 18.9, 453, 720, 24795, 1, 0, 21, 'b1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `location`
--

CREATE TABLE `location` (
  `locationId` int UNSIGNED NOT NULL,
  `strasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `hausnummer` int NOT NULL,
  `ort` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `postleitzahl` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `location`
--

INSERT INTO `location` (`locationId`, `strasse`, `hausnummer`, `ort`, `postleitzahl`) VALUES
(1, 'Karlsruher Strasse', 22, 'Pforzheim', 75179),
(2, 'Neckarstrasse', 86, 'Stuttgart', 70190),
(3, 'Ettlingerstrasse', 25, 'Karlsruhe', 76137);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `payment`
--

CREATE TABLE `payment` (
  `paymentId` int UNSIGNED NOT NULL,
  `strasse` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `hausnummer` int NOT NULL,
  `ort` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `postleitzahl` int NOT NULL,
  `kartennummer` int NOT NULL,
  `kartenname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `exp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cvv` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `payment`
--

INSERT INTO `payment` (`paymentId`, `strasse`, `hausnummer`, `ort`, `postleitzahl`, `kartennummer`, `kartenname`, `exp`, `cvv`) VALUES
(2, 'iff', 464, 'udsij', 4545, 48489, 'dsf', '125', 25),
(3, 'Wurststrasse', 38, 'Pforzheim', 75175, 123456, 'DeutscheBankCredit', '2026', 56),
(4, 'Wurststrasse', 38, 'Pforzheim', 75175, 1225, 'DeutscheBankCredit', '120', 245),
(5, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(6, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(7, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(8, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(9, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(10, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(11, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(12, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455),
(13, 'Wurmbergerstrasse', 38, 'Pforzheim', 75175, 5358587, 'Sparkasse PF/CW', '2535', 455);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `type`
--

CREATE TABLE `type` (
  `typeId` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `type`
--

INSERT INTO `type` (`typeId`, `name`) VALUES
(1, 'pkw'),
(2, 'transporter'),
(3, 'wohnmobil'),
(4, 'sportwagen');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userId` int UNSIGNED NOT NULL,
  `vorname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nachname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `passwort` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rolle` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userId`, `vorname`, `nachname`, `email`, `passwort`, `rolle`) VALUES
(1, 'Colin', 'Djerdak', 'c.djerdak@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(2, 'oliver', 'nagy kanasz', 'bibojoli12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(3, 'Hans', 'Peters', 'test@web.de', 'e10adc3949ba59abbe56e057f20f883e', 'customer'),
(4, 'Hans', 'Peter-Jürgen', 'baum@k.de', '179dd127114852d1e538da4d14e38f74', 'customer'),
(6, 'Luke', 'Werner', 'luke.werner@test.de', 'e10adc3949ba59abbe56e057f20f883e', 'customer'),
(7, 'Max', 'Mustermann', 'test@flexidrive.com', '0d27f6a0b37313918dc13e1df4c461f9', 'customer'),
(8, 'Sabine', 'Beispiel', 'admin@flexidrive.com', '0d27f6a0b37313918dc13e1df4c461f9', 'admin');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `cardId` (`carId`),
  ADD KEY `paymentId` (`paymentId`);

--
-- Indizes für die Tabelle `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carId`),
  ADD KEY `typeId` (`typeId`),
  ADD KEY `locationId` (`locationId`);

--
-- Indizes für die Tabelle `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationId`);

--
-- Indizes für die Tabelle `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indizes für die Tabelle `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeId`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `car`
--
ALTER TABLE `car`
  MODIFY `carId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT für Tabelle `location`
--
ALTER TABLE `location`
  MODIFY `locationId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `type`
--
ALTER TABLE `type`
  MODIFY `typeId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `cardId` FOREIGN KEY (`carId`) REFERENCES `car` (`carId`) ON DELETE CASCADE,
  ADD CONSTRAINT `paymentId` FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`) ON DELETE CASCADE,
  ADD CONSTRAINT `userId` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `locationId` FOREIGN KEY (`locationId`) REFERENCES `location` (`locationId`) ON DELETE CASCADE,
  ADD CONSTRAINT `typeId` FOREIGN KEY (`typeId`) REFERENCES `type` (`typeId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
