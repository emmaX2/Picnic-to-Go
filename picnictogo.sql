-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 26 mei 2020 om 09:50
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `picnictogo`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelling`
--

DROP TABLE IF EXISTS `bestelling`;
CREATE TABLE IF NOT EXISTS `bestelling` (
  `Bestelnummer` int(10) NOT NULL,
  `Klantid` int(10) NOT NULL,
  PRIMARY KEY (`Bestelnummer`),
  KEY `klantid to klant` (`Klantid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestelregel`
--

DROP TABLE IF EXISTS `bestelregel`;
CREATE TABLE IF NOT EXISTS `bestelregel` (
  `Bestelnummer` int(10) NOT NULL,
  `productcode` int(10) NOT NULL,
  `aantal_producten` int(10) NOT NULL,
  PRIMARY KEY (`Bestelnummer`,`productcode`),
  KEY `product code to product` (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klant`
--

DROP TABLE IF EXISTS `klant`;
CREATE TABLE IF NOT EXISTS `klant` (
  `klantid` int(10) NOT NULL,
  `E-mail` varchar(75) NOT NULL,
  `gebruikersnaam` varchar(50) NOT NULL,
  `voornaam` varchar(75) NOT NULL,
  `tussenvoegsel` varchar(50) DEFAULT NULL,
  `achternaam` varchar(75) NOT NULL,
  `telefoonnummer` varchar(15) NOT NULL,
  `klant_straat` varchar(50) NOT NULL,
  `klant_huisnummer` int(10) NOT NULL,
  `klant_huisnr_toevoeging` varchar(5) DEFAULT NULL,
  `klant_postcode` varchar(15) NOT NULL,
  `klant_woonplaats` varchar(65) NOT NULL,
  PRIMARY KEY (`klantid`),
  UNIQUE KEY `E-mail` (`E-mail`),
  UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `loginid` int(10) NOT NULL,
  `E-mail` varchar(75) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`),
  UNIQUE KEY `E-mail` (`E-mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productcode` int(10) NOT NULL,
  `productnaam` varchar(75) NOT NULL,
  `productfoto` longblob NOT NULL,
  `productomschrijving` varchar(350) NOT NULL,
  `productprijs` decimal(5,3) NOT NULL,
  PRIMARY KEY (`productcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestelling`
--
ALTER TABLE `bestelling`
  ADD CONSTRAINT `klantid to klant` FOREIGN KEY (`Klantid`) REFERENCES `klant` (`klantid`);

--
-- Beperkingen voor tabel `bestelregel`
--
ALTER TABLE `bestelregel`
  ADD CONSTRAINT `bestelid to bestelling` FOREIGN KEY (`Bestelnummer`) REFERENCES `bestelling` (`Bestelnummer`),
  ADD CONSTRAINT `product code to product` FOREIGN KEY (`productcode`) REFERENCES `product` (`productcode`);

--
-- Beperkingen voor tabel `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `email to klant` FOREIGN KEY (`E-mail`) REFERENCES `klant` (`E-mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
