-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2020. Jún 30. 20:16
-- Kiszolgáló verziója: 10.4.13-MariaDB
-- PHP verzió: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tanchaz19`
--
DROP DATABASE IF EXISTS `tanchaz19`;
CREATE DATABASE IF NOT EXISTS `tanchaz19` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tanchaz19`;

DELIMITER $$
--
-- Függvények
--
DROP FUNCTION IF EXISTS `initcap`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `initcap` (`x` CHAR(128)) RETURNS CHAR(128) CHARSET utf8 BEGIN
SET @str='';
SET @l_str='';
WHILE x REGEXP ' ' DO
SELECT SUBSTRING_INDEX(x, ' ', 1) INTO @l_str;
SELECT SUBSTRING(x, LOCATE(' ', x)+1) INTO x;
SELECT CONCAT(@str, ' ', CONCAT(UPPER(SUBSTRING(@l_str,1,1)),LOWER(SUBSTRING(@l_str,2)))) INTO @str;
END WHILE;
RETURN LTRIM(CONCAT(@str, ' ', CONCAT(UPPER(SUBSTRING(x,1,1)),LOWER(SUBSTRING(x,2)))));
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- A nézet helyettes szerkezete `azonos_nevuek`
-- (Lásd alább az aktuális nézetet)
--
DROP VIEW IF EXISTS `azonos_nevuek`;
CREATE TABLE `azonos_nevuek` (
`nev` varchar(127)
,`nevdb` bigint(21)
,`szd` date
,`programresz` varchar(127)
,`bent` tinyint(1)
);

-- --------------------------------------------------------

--
-- A nézet helyettes szerkezete `belepett`
-- (Lásd alább az aktuális nézetet)
--
DROP VIEW IF EXISTS `belepett`;
CREATE TABLE `belepett` (
`Id` bigint(21)
,`nev` varchar(127)
,`megjegyzes` text
,`miko` datetime
,`ceg` varchar(254)
);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ceglista`
--

DROP TABLE IF EXISTS `ceglista`;
CREATE TABLE `ceglista` (
  `sorsz` int(11) NOT NULL,
  `cegnev` varchar(254) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Társulatok listája';

-- --------------------------------------------------------

--
-- A nézet helyettes szerkezete `duplikalt`
-- (Lásd alább az aktuális nézetet)
--
DROP VIEW IF EXISTS `duplikalt`;
CREATE TABLE `duplikalt` (
`nev` varchar(127)
,`db` bigint(21)
,`szul_datum` date
,`szuldate` bigint(21)
,`programresz` varchar(127)
,`progrdb` bigint(21)
);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `karszalagok`
--

DROP TABLE IF EXISTS `karszalagok`;
CREATE TABLE `karszalagok` (
  `sorsz` mediumint(8) UNSIGNED NOT NULL COMMENT 'sorszám',
  `cegnev` int(5) NOT NULL COMMENT 'Belépő társulat neve',
  `nev` varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Belépő neve',
  `szul_datum` date NOT NULL COMMENT 'Beélpő születési dátuma',
  `besorolas` varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Belépő besorolása',
  `programresz` varchar(127) COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Belépő melyik programrészben van',
  `megjegyzes` text COLLATE utf8_hungarian_ci NOT NULL COMMENT 'Megjegyzés',
  `belepett` tinyint(1) NOT NULL COMMENT 'Átvette a karszalagot',
  `miko` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Karszalag átvételének ideje',
  `valtozas` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp() COMMENT 'frissiteskori időbélyeg',
  `szdarab` tinyint(2) DEFAULT NULL COMMENT 'Kért karszalagok száma',
  `gyszdarab` tinyint(2) DEFAULT NULL COMMENT 'Gyerekjegyek száma'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- A nézet helyettes szerkezete `mindenki`
-- (Lásd alább az aktuális nézetet)
--
DROP VIEW IF EXISTS `mindenki`;
CREATE TABLE `mindenki` (
`sorsz` mediumint(8) unsigned
,`nev` varchar(127)
,`szul_datum` date
,`cegid` int(5)
,`cegnev` varchar(254)
,`besorolas` varchar(127)
,`programresz` varchar(127)
,`megjegyzes` text
,`belepett` tinyint(1)
,`miko` datetime
,`szdarab` tinyint(2)
,`gyszdarab` tinyint(2)
);

-- --------------------------------------------------------

--
-- Nézet szerkezete `azonos_nevuek`
--
DROP TABLE IF EXISTS `azonos_nevuek`;

DROP VIEW IF EXISTS `azonos_nevuek`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `azonos_nevuek`  AS  select `k`.`nev` AS `nev`,count(`k`.`nev`) AS `nevdb`,`k`.`szul_datum` AS `szd`,`k`.`programresz` AS `programresz`,`k`.`belepett` AS `bent` from `karszalagok` `k` group by `k`.`nev` having count(`k`.`nev`) > 1 order by count(`k`.`nev`) desc ;

-- --------------------------------------------------------

--
-- Nézet szerkezete `belepett`
--
DROP TABLE IF EXISTS `belepett`;

DROP VIEW IF EXISTS `belepett`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `belepett`  AS  select row_number() over ( order by `karszalagok`.`nev`) AS `Id`,`karszalagok`.`nev` AS `nev`,`karszalagok`.`megjegyzes` AS `megjegyzes`,`karszalagok`.`miko` AS `miko`,`ceglista`.`cegnev` AS `ceg` from (`karszalagok` join `ceglista`) where `karszalagok`.`belepett` = 1 and `karszalagok`.`cegnev` = `ceglista`.`sorsz` ;

-- --------------------------------------------------------

--
-- Nézet szerkezete `duplikalt`
--
DROP TABLE IF EXISTS `duplikalt`;

DROP VIEW IF EXISTS `duplikalt`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `duplikalt`  AS  select `karszalagok`.`nev` AS `nev`,count(`karszalagok`.`nev`) AS `db`,`karszalagok`.`szul_datum` AS `szul_datum`,count(`karszalagok`.`szul_datum`) AS `szuldate`,`karszalagok`.`programresz` AS `programresz`,count(`karszalagok`.`programresz`) AS `progrdb` from `karszalagok` group by `karszalagok`.`nev`,`karszalagok`.`szul_datum`,`karszalagok`.`programresz` having count(`karszalagok`.`nev`) > 1 and count(`karszalagok`.`szul_datum`) > 1 and count(`karszalagok`.`programresz`) > 1 ;

-- --------------------------------------------------------

--
-- Nézet szerkezete `mindenki`
--
DROP TABLE IF EXISTS `mindenki`;

DROP VIEW IF EXISTS `mindenki`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mindenki`  AS  select `k`.`sorsz` AS `sorsz`,`k`.`nev` AS `nev`,`k`.`szul_datum` AS `szul_datum`,`k`.`cegnev` AS `cegid`,`c`.`cegnev` AS `cegnev`,`k`.`besorolas` AS `besorolas`,`k`.`programresz` AS `programresz`,`k`.`megjegyzes` AS `megjegyzes`,`k`.`belepett` AS `belepett`,`k`.`miko` AS `miko`,`k`.`szdarab` AS `szdarab`,`k`.`gyszdarab` AS `gyszdarab` from (`karszalagok` `k` join `ceglista` `c`) where `c`.`sorsz` = `k`.`cegnev` ;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `ceglista`
--
ALTER TABLE `ceglista`
  ADD PRIMARY KEY (`sorsz`),
  ADD UNIQUE KEY `cegnev_IDX` (`cegnev`);
ALTER TABLE `ceglista` ADD FULLTEXT KEY `text` (`cegnev`);

--
-- A tábla indexei `karszalagok`
--
ALTER TABLE `karszalagok`
  ADD PRIMARY KEY (`sorsz`),
  ADD UNIQUE KEY `nevIDX` (`sorsz`),
  ADD KEY `nev` (`nev`),
  ADD KEY `cegnev` (`cegnev`),
  ADD KEY `miko` (`miko`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ceglista`
--
ALTER TABLE `ceglista`
  MODIFY `sorsz` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `karszalagok`
--
ALTER TABLE `karszalagok`
  MODIFY `sorsz` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'sorszám';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

