-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Şub 2021, 18:56:51
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `2018469063`
--

DELIMITER $$
--
-- Yordamlar
--
DROP PROCEDURE IF EXISTS `Parametre soru1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Parametre soru1` (IN `mahalle` VARCHAR(50))  NO SQL
SELECT mahalleler.mahalle_ad,cocuk_sayisi.genç_sayisi
FROM mahalleler LEFT JOIN cocuk_sayisi ON mahalleler.mahalle_ad= cocuk_sayisi.mahalle_ad 
WHERE mahalleler.mahalle_ad LIKE concat ('%',mahalle,'%')$$

DROP PROCEDURE IF EXISTS `Parametre soru2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Parametre soru2` (IN `yıl` DATE)  NO SQL
SELECT mahalleler.mahalle_id,mahalleler.mahalle_ad,park.park_sayisi
FROM mahalleler LEFT JOIN park ON mahalleler.mahalle_id= park.mahalle_id
WHERE park.kurulus_yillari LIKE concat ('%',yıl,'%')$$

DROP PROCEDURE IF EXISTS `Parametre soru3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Parametre soru3` (IN `id` INT(7))  NO SQL
SELECT mahalleler.mahalle_id,olmasi_gereken_park_saha.park_sayisi,
olmasi_gereken_park_saha.olmasi_gereken_park
FROM mahalleler,olmasi_gereken_park_saha
WHERE mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id AND mahalleler.mahalle_id=id$$

DROP PROCEDURE IF EXISTS `Parametre soru4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Parametre soru4` (IN `id` INT(7))  NO SQL
SELECT extract(year from now())-(SELECT EXTRACT(year from (SELECT
park.kurulus_yillari
FROM park
WHERE park.mahalle_id LIKE concat('%',id,'%')))) as mahallenin_yaşı$$

DROP PROCEDURE IF EXISTS `Parametre soru5`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Parametre soru5` (IN `ad` VARCHAR(50))  NO SQL
SELECT mahalleler.mahalle_id, mahalleler.mahalle_ad, concat(olmasi_gereken_park_saha.olmasi_gereken_genc_saha-olmasi_gereken_park_saha.genc_saha) as eksik_fazla_saha
FROM mahalleler,olmasi_gereken_park_saha
WHERE mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id AND
mahalleler.mahalle_ad=ad$$

DROP PROCEDURE IF EXISTS `parametresiz soru1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `parametresiz soru1` ()  NO SQL
SELECT mahalleler.mahalle_id, mahalleler.mahalle_ad, park.park_sayisi
FROM mahalleler, park
WHERE mahalleler.mahalle_id=park.mahalle_id
ORDER BY park.park_sayisi ASC$$

DROP PROCEDURE IF EXISTS `parametresiz soru2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `parametresiz soru2` ()  NO SQL
SELECT mahalleler.mahalle_ad, cocuk_sayisi.genç_sayisi
FROM mahalleler, cocuk_sayisi
WHERE mahalleler.mahalle_ad=cocuk_sayisi.mahalle_ad AND cocuk_sayisi.genç_sayisi>80$$

DROP PROCEDURE IF EXISTS `parametresiz soru3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `parametresiz soru3` ()  NO SQL
SELECT mahalleler.mahalle_id,mahalleler.mahalle_ad,park.park_sayisi
FROM mahalleler,park
WHERE mahalleler.mahalle_id=park.mahalle_id AND park.park_sayisi=(SELECT MAX(park.park_sayisi)FROM park)$$

DROP PROCEDURE IF EXISTS `parametresiz soru4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `parametresiz soru4` ()  NO SQL
SELECT SUM(oyun_alanlari_sayisi.futbol_sahasi) AS toplam_futbol_sahasi, SUM(cocuk_sayisi.cocuk_sayisi) as toplam_çocuk_sayısı
FROM oyun_alanlari_sayisi LEFT JOIN mahalleler ON mahalleler.mahalle_ad=oyun_alanlari_sayisi.mahalle_ad LEFT JOIN cocuk_sayisi ON cocuk_sayisi.mahalle_ad=mahalleler.mahalle_ad$$

DROP PROCEDURE IF EXISTS `parametresiz soru5`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `parametresiz soru5` ()  NO SQL
SELECT mahalleler.mahalle_id, mahalleler.mahalle_ad, olmasi_gereken_park_saha.olmasi_gereken_park, park.park_sayisi
FROM mahalleler,olmasi_gereken_park_saha, park
WHERE mahalleler.mahalle_id=park.mahalle_id AND olmasi_gereken_park_saha.park_sayisi=park.park_sayisi AND mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id AND olmasi_gereken_park_saha.park_sayisi>olmasi_gereken_park_saha.olmasi_gereken_park$$

DROP PROCEDURE IF EXISTS `PROJEyordam1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam1` (IN `mail` VARCHAR(50), IN `sifre` INT(7))  NO SQL
SELECT * from yonetici 
WHERE eposta=mail
AND sifre=sifre$$

DROP PROCEDURE IF EXISTS `PROJEyordam10`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam10` (IN `mahalle` VARCHAR(50), IN `futbol` INT(7), IN `basket` INT(7))  NO SQL
UPDATE oyun_alanlari_sayisi SET mahalle_ad=mahalle,
        futbol_sahasi=futbol, basketbol_sahasi=basket$$

DROP PROCEDURE IF EXISTS `PROJEyordam2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam2` ()  NO SQL
SELECT * 
FROM mahalleler
order by mahalle_id$$

DROP PROCEDURE IF EXISTS `PROJEyordam3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam3` ()  NO SQL
SELECT*
FROM cocuk_sayisi$$

DROP PROCEDURE IF EXISTS `PROJEyordam4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam4` ()  NO SQL
SELECT olmasi_gereken_park_saha.park_sayisi, olmasi_gereken_park_saha.olmasi_gereken_park , mahalleler.mahalle_ad
 FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
WHERE olmasi_gereken_park$$

DROP PROCEDURE IF EXISTS `PROJEyordam5`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam5` ()  NO SQL
SELECT olmasi_gereken_park_saha.park_sayisi, olmasi_gereken_park_saha.olmasi_gereken_park , mahalleler.mahalle_ad,olmasi_gereken_park_saha.eksik_fazlaPark
FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
WHERE olmasi_gereken_park$$

DROP PROCEDURE IF EXISTS `PROJEyordam6`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam6` ()  NO SQL
SELECT mahalleler.mahalle_ad , park.kurulus_yillari
FROM mahalleler LEFT JOIN park on mahalleler.mahalle_id=park.mahalle_id
WHERE kurulus_yillari$$

DROP PROCEDURE IF EXISTS `PROJEyordam7`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam7` ()  NO SQL
SELECT mahalleler.mahalle_ad , park.kurulus_yillari
FROM mahalleler LEFT JOIN park on mahalleler.mahalle_id=park.mahalle_id
WHERE park.kurulus_yillari <'2008'$$

DROP PROCEDURE IF EXISTS `PROJEyordam8`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam8` ()  NO SQL
SELECT olmasi_gereken_park_saha.genc_saha, olmasi_gereken_park_saha.olmasi_gereken_genc_saha , mahalleler.mahalle_ad
FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
WHERE olmasi_gereken_park$$

DROP PROCEDURE IF EXISTS `PROJEyordam9`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `PROJEyordam9` ()  NO SQL
SELECT mahalleler.mahalle_ad,olmasi_gereken_park_saha.eksik_fazlaGencsaha
FROM mahalleler LEFT JOIN olmasi_gereken_park_saha on mahalleler.mahalle_id=olmasi_gereken_park_saha.mahalle_id
WHERE eksik_fazlaGencsaha$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cocuk_sayisi`
--

DROP TABLE IF EXISTS `cocuk_sayisi`;
CREATE TABLE IF NOT EXISTS `cocuk_sayisi` (
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cocuk_sayisi` int(7) NOT NULL,
  `genç_sayisi` int(7) NOT NULL,
  UNIQUE KEY `mahalle_ad` (`mahalle_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cocuk_sayisi`
--

INSERT INTO `cocuk_sayisi` (`mahalle_ad`, `cocuk_sayisi`, `genç_sayisi`) VALUES
('Akyazı', 480, 120),
('Bahçelievler', 160, 48),
('Cumhuriyet', 380, 79),
('Karşıyaka', 440, 140),
('Şahincili', 400, 88),
('Şirinevler', 360, 96);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mahalleler`
--

DROP TABLE IF EXISTS `mahalleler`;
CREATE TABLE IF NOT EXISTS `mahalleler` (
  `mahalle_id` int(7) NOT NULL,
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`mahalle_id`),
  UNIQUE KEY `mahalle_ad` (`mahalle_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mahalleler`
--

INSERT INTO `mahalleler` (`mahalle_id`, `mahalle_ad`) VALUES
(2, 'Akyazı'),
(5, 'Bahçelievler'),
(7, 'Bucak'),
(6, 'Cumhuriyet'),
(4, 'Karşıyaka'),
(3, 'Şahincili'),
(1, 'Şirinevler'),
(8, 'Taşbaşı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `olmasi_gereken_park_saha`
--

DROP TABLE IF EXISTS `olmasi_gereken_park_saha`;
CREATE TABLE IF NOT EXISTS `olmasi_gereken_park_saha` (
  `mahalle_id` int(7) NOT NULL,
  `park_sayisi` int(7) NOT NULL,
  `olmasi_gereken_park` int(7) NOT NULL,
  `genc_saha` int(7) NOT NULL,
  `olmasi_gereken_genc_saha` int(7) NOT NULL,
  `eksik_fazlaPark` int(50) NOT NULL,
  `eksik_fazlaGencsaha` int(50) NOT NULL,
  UNIQUE KEY `park_sayisi` (`park_sayisi`),
  UNIQUE KEY `mahalle_id` (`mahalle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `olmasi_gereken_park_saha`
--

INSERT INTO `olmasi_gereken_park_saha` (`mahalle_id`, `park_sayisi`, `olmasi_gereken_park`, `genc_saha`, `olmasi_gereken_genc_saha`, `eksik_fazlaPark`, `eksik_fazlaGencsaha`) VALUES
(5, 93, 80, 176, 140, 13, 36),
(6, 105, 140, 96, 76, 35, 20),
(1, 140, 180, 44, 59, 40, 15),
(4, 158, 220, 138, 98, 62, 40),
(3, 165, 200, 48, 62, 35, 14),
(2, 180, 204, 66, 80, 24, 14);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `oyun_alanlari_sayisi`
--

DROP TABLE IF EXISTS `oyun_alanlari_sayisi`;
CREATE TABLE IF NOT EXISTS `oyun_alanlari_sayisi` (
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `futbol_sahasi` int(7) NOT NULL,
  `basketbol_sahasi` int(7) NOT NULL,
  `oyun_sahasi` int(7) NOT NULL,
  UNIQUE KEY `mahalle_ad` (`mahalle_ad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `oyun_alanlari_sayisi`
--

INSERT INTO `oyun_alanlari_sayisi` (`mahalle_ad`, `futbol_sahasi`, `basketbol_sahasi`, `oyun_sahasi`) VALUES
('Akyazı', 29, 40, 165),
('Bahçelievler', 78, 98, 48),
('Cumhuriyet', 38, 58, 80),
('Karşıyaka', 60, 78, 140),
('Şahincili', 28, 20, 120),
('Şirinevler', 18, 26, 130);

--
-- Tetikleyiciler `oyun_alanlari_sayisi`
--
DROP TRIGGER IF EXISTS `yeni_basketbol_sahasi`;
DELIMITER $$
CREATE TRIGGER `yeni_basketbol_sahasi` AFTER UPDATE ON `oyun_alanlari_sayisi` FOR EACH ROW BEGIN
    IF OLD.basketbol_sahasi <> new.basketbol_sahasi THEN
        INSERT INTO yeni_basketbol_sahasi(mahalle_ad,eski_Basketbolsahası,yeni_Basketbolsahası)
        VALUES(old.mahalle_ad, old.basketbol_sahasi, new.basketbol_sahasi);
    END IF;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `yeni_futbol_sahasi`;
DELIMITER $$
CREATE TRIGGER `yeni_futbol_sahasi` AFTER UPDATE ON `oyun_alanlari_sayisi` FOR EACH ROW BEGIN
    IF OLD.futbol_sahasi <> new.futbol_sahasi   THEN
        INSERT INTO yeni_futbol_sahasi(mahalle_ad,eski_Futbolsahası, yeni_Futbolsahası)
        VALUES(old.mahalle_ad, old.futbol_sahasi, new.futbol_sahasi);
    END IF;
END
$$
DELIMITER ;
DROP TRIGGER IF EXISTS `yeni_oyun_sahasi`;
DELIMITER $$
CREATE TRIGGER `yeni_oyun_sahasi` AFTER UPDATE ON `oyun_alanlari_sayisi` FOR EACH ROW BEGIN
    IF OLD.oyun_sahasi <> new.oyun_sahasi   THEN
        INSERT INTO yeni_oyun_sahasi(mahalle_ad,eski_Oyunsahası, yeni_Oyunsahası)
        VALUES(old.mahalle_ad, old.oyun_sahasi, new.oyun_sahasi);
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `park`
--

DROP TABLE IF EXISTS `park`;
CREATE TABLE IF NOT EXISTS `park` (
  `mahalle_id` int(7) NOT NULL,
  `park_sayisi` int(7) NOT NULL,
  `kurulus_yillari` date NOT NULL,
  PRIMARY KEY (`park_sayisi`),
  UNIQUE KEY `mahalle_id` (`mahalle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `park`
--

INSERT INTO `park` (`mahalle_id`, `park_sayisi`, `kurulus_yillari`) VALUES
(5, 93, '2010-12-03'),
(6, 105, '2000-12-03'),
(1, 140, '2002-12-01'),
(4, 158, '2002-12-11'),
(3, 165, '2008-12-04'),
(2, 180, '2005-12-09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeni_basketbol_sahasi`
--

DROP TABLE IF EXISTS `yeni_basketbol_sahasi`;
CREATE TABLE IF NOT EXISTS `yeni_basketbol_sahasi` (
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eski_Basketbolsahası` int(7) NOT NULL,
  `yeni_Basketbolsahası` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yeni_basketbol_sahasi`
--

INSERT INTO `yeni_basketbol_sahasi` (`mahalle_ad`, `eski_Basketbolsahası`, `yeni_Basketbolsahası`) VALUES
('Akyazı', 39, 40);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeni_futbol_sahasi`
--

DROP TABLE IF EXISTS `yeni_futbol_sahasi`;
CREATE TABLE IF NOT EXISTS `yeni_futbol_sahasi` (
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eski_Futbolsahası` int(7) NOT NULL,
  `yeni_Futbolsahası` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yeni_futbol_sahasi`
--

INSERT INTO `yeni_futbol_sahasi` (`mahalle_ad`, `eski_Futbolsahası`, `yeni_Futbolsahası`) VALUES
('Akyazı', 28, 29);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yeni_oyun_sahasi`
--

DROP TABLE IF EXISTS `yeni_oyun_sahasi`;
CREATE TABLE IF NOT EXISTS `yeni_oyun_sahasi` (
  `mahalle_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `eski_Oyunsahası` int(7) NOT NULL,
  `yeni_Oyunsahası` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yeni_oyun_sahasi`
--

INSERT INTO `yeni_oyun_sahasi` (`mahalle_ad`, `eski_Oyunsahası`, `yeni_Oyunsahası`) VALUES
('Akyazı', 161, 165);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

DROP TABLE IF EXISTS `yonetici`;
CREATE TABLE IF NOT EXISTS `yonetici` (
  `kullanıcı_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` int(50) NOT NULL,
  `eposta` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`kullanıcı_ad`, `sifre`, `eposta`) VALUES
('ogiikun', 1234, 'ogiikun@gmail.com');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `cocuk_sayisi`
--
ALTER TABLE `cocuk_sayisi`
  ADD CONSTRAINT `cocuk_sayisi_ibfk_1` FOREIGN KEY (`mahalle_ad`) REFERENCES `mahalleler` (`mahalle_ad`);

--
-- Tablo kısıtlamaları `olmasi_gereken_park_saha`
--
ALTER TABLE `olmasi_gereken_park_saha`
  ADD CONSTRAINT `olmasi_gereken_park_saha_ibfk_1` FOREIGN KEY (`park_sayisi`) REFERENCES `park` (`park_sayisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `olmasi_gereken_park_saha_ibfk_2` FOREIGN KEY (`mahalle_id`) REFERENCES `mahalleler` (`mahalle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `oyun_alanlari_sayisi`
--
ALTER TABLE `oyun_alanlari_sayisi`
  ADD CONSTRAINT `oyun_alanlari_sayisi_ibfk_1` FOREIGN KEY (`mahalle_ad`) REFERENCES `mahalleler` (`mahalle_ad`);

--
-- Tablo kısıtlamaları `park`
--
ALTER TABLE `park`
  ADD CONSTRAINT `park_ibfk_1` FOREIGN KEY (`mahalle_id`) REFERENCES `mahalleler` (`mahalle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
