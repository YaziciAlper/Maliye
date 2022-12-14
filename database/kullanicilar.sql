-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 01 Eyl 2022, 12:24:21
-- Sunucu sürümü: 10.4.18-MariaDB
-- PHP Sürümü: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `maliye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gorev` varchar(100) NOT NULL,
  `tarih` date NOT NULL DEFAULT current_timestamp(),
  `telefon` varchar(50) NOT NULL,
  `durum` varchar(20) NOT NULL DEFAULT 'Aktif',
  `guncellenme_tarihi` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoy`, `email`, `gorev`, `tarih`, `telefon`, `durum`, `guncellenme_tarihi`) VALUES
(10, 'denemeupdate1', 'denemeupdate1@hotmail.com', 'İşçi', '2022-08-31', '0987653263636', 'Pasif', '2022-09-01'),
(11, 'denemeupdate2', 'denemeupdate2@hotmail.com', 'Memur', '2022-08-31', '0987653263636', 'Pasif', '2022-09-01'),
(12, 'deneme3', 'deneme3@gmail.com', 'Memur', '2022-08-31', '0987653263636', 'Aktif', '2022-08-31'),
(13, 'deneme4', 'deneme4@gmail.com', 'Müdür Yardımcısı', '2022-08-31', '09876546372', 'Aktif', '2022-08-31'),
(14, 'deneme5', 'deneme5@gmail.com', 'Müdür Yardımcısı', '2022-08-31', '09876546372', 'Aktif', '2022-08-31'),
(15, 'denem23', 'deneme23@gmail.com', 'Hizmetli', '2022-08-31', '09876546372', 'Aktif', '2022-08-31'),
(17, 'Deneme98', 'deneme98@gmail.com', 'İşçi', '2022-08-31', '87378234283478', 'Aktif', '2022-08-31'),
(18, 'deneme100', 'deneme100@gmail.com', 'Memur', '2022-08-31', '998238948923489', 'Aktif', '2022-08-31');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
