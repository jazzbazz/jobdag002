-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 24 sep 2019 om 10:51
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobdag`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ict_bedrijven`
--

CREATE TABLE `ict_bedrijven` (
  `bID` int(11) NOT NULL,
  `bNaam` varchar(100) NOT NULL,
  `bAdres` varchar(100) DEFAULT NULL,
  `bPostcode` varchar(10) DEFAULT NULL,
  `bGemeente` varchar(50) DEFAULT NULL,
  `bContactVn` varchar(30) DEFAULT NULL,
  `bContactFn` varchar(30) DEFAULT NULL,
  `bContactTel` varchar(14) DEFAULT NULL,
  `bContactGsm` varchar(14) DEFAULT NULL,
  `bContactEmail` varchar(30) DEFAULT NULL,
  `bAantalPersonen` int(11) NOT NULL,
  `bCoreBusiness` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `ict_bedrijven`
--

INSERT INTO `ict_bedrijven` (`bID`, `bNaam`, `bAdres`, `bPostcode`, `bGemeente`, `bContactVn`, `bContactFn`, `bContactTel`, `bContactGsm`, `bContactEmail`, `bAantalPersonen`, `bCoreBusiness`) VALUES
(2, 'Tom&Co', 'wijvelde12', '3012', 'Wilsele', 'Peter', 'Janssens', '', '', 'matt_vanwoensel@hotmail.com', 0, 'frontend'),
(3, 'Tom&Co', 'wijvelde12', '3012', 'Wilsele', 'Peter', 'Janssens', '', '', 'matt_vanwoensel@hotmail.com', 0, 'frontend'),
(4, 'Tom&Co', 'wijvelde12', '2590', 'Berlaar', 'kkkk', 'Janssens', '05444', '55555', 'vermeulenJoske@hotmail.com', 0, 'frontend'),
(5, 'Tom&Co', 'wijvelde12', '2000', 'Berlaar', 'Peter', 'Janssens', '0498705195', '', 'vermeulenJoske@hotmail.com', 0, 'frontend'),
(6, 'Tom&Co', 'wijvelde12', '2000', 'Berlaar', 'jjjj', 'kkk', '', '', 'vermeulenJoske@hotmail.com', 0, 'kk'),
(7, 'Tom&Co', 'wijvelde12', '2000', 'Wilsele', 'hhhh', 'Janssens', '0498705195', '04987', 'vermeulenJoske@hotmail.com', 0, 'backend'),
(8, 'Tom&Co', 'wijvelde12', '2000', 'Wilsele', 'Peter', 'Janssens', '', '', 'vermeulenJoske@hotmail.com', 0, 'backend'),
(9, 'jjjjj', 'hhhh', '2000', 'Wilsele', 'Peter', 'Janssens', '', '', 'vermeulenJoske@hotmail.com', 0, 'frontend'),
(10, 'kkkk', 'jjjj', '3000', 'Berlaar', 'Filip', 'Vermeersch', '', '', 'matt_vanwoensel@hotmail.com', 0, 'Frontend');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ict_bedrijven`
--
ALTER TABLE `ict_bedrijven`
  ADD PRIMARY KEY (`bID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `ict_bedrijven`
--
ALTER TABLE `ict_bedrijven`
  MODIFY `bID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
