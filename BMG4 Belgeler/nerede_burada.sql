-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 May 2021, 13:25:04
-- Sunucu sürümü: 8.0.25
-- PHP Sürümü: 7.3.24-(to be removed in future macOS)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `nerede_burada`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int NOT NULL,
  `isim_soyisim` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwordd` varchar(255) NOT NULL,
  `yetki` int NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` enum('0','1') NOT NULL,
  `giris_hakki` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `admin_login`
--

INSERT INTO `admin_login` (`id`, `isim_soyisim`, `username`, `passwordd`, `yetki`, `tarih`, `durum`, `giris_hakki`) VALUES
(1, 'Sebati Doğan', '8b930947c87fd9707a9b98d1c23b2316', 'b1d1ab72336885719b522a1920d56e5c', 99, '2021-03-29 17:23:44', '1', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alogin`
--

CREATE TABLE `alogin` (
  `id` int NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `user_argent` varchar(255) NOT NULL,
  `ip_adress` varchar(255) NOT NULL,
  `ulke` varchar(255) NOT NULL,
  `il` varchar(50) NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `enlem` varchar(255) NOT NULL,
  `boylam` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `id` int NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc_ription` varchar(255) DEFAULT NULL,
  `keywords` text,
  `author` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `il` varchar(50) DEFAULT NULL,
  `ilce` varchar(50) DEFAULT NULL,
  `adres` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`id`, `logo`, `favicon`, `title`, `desc_ription`, `keywords`, `author`, `tel`, `il`, `ilce`, `adres`, `facebook`, `twitter`, `instagram`) VALUES
(1, 'images/neredeburada.png', 'images/neredeburada.png', 'neredeburada', 'neredeburada', 'neredeburada', 'neredeburada', '11111111111', 'MALATYA', 'BATTALGAZİ', 'Teknopark', 'neredeburada', 'neredeburada', 'neredeburada');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmalar`
--

CREATE TABLE `firmalar` (
  `id` int NOT NULL,
  `firma_adi` varchar(255) NOT NULL,
  `faaliyet_alani` varchar(50) NOT NULL,
  `il` varchar(50) NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `adres` text NOT NULL,
  `e_posta` varchar(255) NOT NULL,
  `web_sitesi` varchar(20) NOT NULL,
  `irtibat_tel` varchar(20) NOT NULL,
  `firma_logo` varchar(255) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sirket_tanimi` text NOT NULL,
  `durum` enum('0','1','2') NOT NULL DEFAULT '2',
  `hizmet_tanimi` text NOT NULL,
  `firma_yetkilisi` varchar(255) NOT NULL,
  `yetkili_tel` varchar(255) NOT NULL,
  `diger_bilgiler` text NOT NULL,
  `irtibat_tel_iki` varchar(20) DEFAULT NULL,
  `firma_sifre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firma_site_resim`
--

CREATE TABLE `firma_site_resim` (
  `id` int NOT NULL,
  `firma_id` int NOT NULL,
  `resim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `id` int NOT NULL,
  `kategori_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mail` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `ad_soyad` varchar(255) NOT NULL,
  `gsm` varchar(20) NOT NULL,
  `yetki` enum('0','1') NOT NULL DEFAULT '1',
  `il` varchar(50) NOT NULL,
  `ilce` varchar(50) NOT NULL,
  `adres` text NOT NULL,
  `d_tarih` varchar(10) NOT NULL,
  `uyelik_turu` enum('firma','kisi') NOT NULL DEFAULT 'kisi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE `reklamlar` (
  `id` int NOT NULL,
  `firma_id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `seo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resimler`
--

CREATE TABLE `resimler` (
  `id` int NOT NULL,
  `reklam_id` int NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `firmalar`
--
ALTER TABLE `firmalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `firma_site_resim`
--
ALTER TABLE `firma_site_resim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reklamlar`
--
ALTER TABLE `reklamlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `resimler`
--
ALTER TABLE `resimler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ayar`
--
ALTER TABLE `ayar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `firmalar`
--
ALTER TABLE `firmalar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `firma_site_resim`
--
ALTER TABLE `firma_site_resim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reklamlar`
--
ALTER TABLE `reklamlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `resimler`
--
ALTER TABLE `resimler`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
