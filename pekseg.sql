-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Ápr 24. 20:35
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `pekseg`
--
CREATE DATABASE IF NOT EXISTS `pekseg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pekseg`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cimek`
--

CREATE TABLE `cimek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `felhasznalo` bigint(20) UNSIGNED NOT NULL,
  `cim` varchar(255) NOT NULL,
  `telSzam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `cimek`
--

INSERT INTO `cimek` (`id`, `felhasznalo`, `cim`, `telSzam`) VALUES
(1, 3, 'Pál utca', '06301234567'),
(2, 1, 'Abigél utca 10', '06307654321'),
(3, 4, 'Fecske utca', '06307564231'),
(4, 5, 'Petőfi utca', '06303125467'),
(5, 2, 'Luther utca', '06309273638'),


-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vezeteknev` varchar(255) NOT NULL,
  `keresztnev` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `vezeteknev`, `keresztnev`, `jelszo`, `email`) VALUES
(1, 'Kovács', 'Sarolta', 'S123456789', 'kovacssarolta@gmail.com'),
(2, 'Vicc', 'Elek', 'V1234567', 'viccelek@gmail.com'),
(3, 'Pál', 'Pál', 'P1234567', 'palpal@gmail.com'),
(4, 'Molnár', 'Ödön', 'Ö1234567', 'molnarodon@gmail.com'),
(5, 'Para', 'Zita', 'Z1234567', 'parazita@gmail.com'),


-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_12_06_172455_create_felhasznalos_table', 1),
(2, '2024_12_06_173921_create_pekarus_table', 1),
(3, '2024_12_06_174149_create_cims_table', 1),
(4, '2024_12_06_174706_create_rendeles_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pekaruk`
--

CREATE TABLE `pekaruk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nev` varchar(255) NOT NULL,
  `tipus` varchar(255) NOT NULL,
  `ar` int(11) NOT NULL,
  `kepUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `pekaruk`
--

INSERT INTO `pekaruk` (`id`, `nev`, `tipus`, `ar`, `kepUrl`) VALUES
(1, 'Fehér kenyér', 'Fehér', 799, 'https://www.eldi.ro/wp-content/uploads/2020/03/P%C3%A2ine-alb%C4%83-1.png'),
(2, 'Kifli', 'Fehér', 65, 'https://www.fornetti.hu/files/9/f/ki_extra_kifli.jpg'),
(3, 'Sajtos kifli', 'Fehér', 209, 'https://www.fornetti.hu/files/1/d/ek_sajtos_kifli.jpg'),
(4, 'Császár zsemle', 'Fehér', 75, 'https://www.fornetti.hu/files/0/1/ek_csaszarzsemle_800x800_fill.jpg'),
(5, 'Magvas zsemle', 'Fehér', 179, 'https://www.fornetti.hu/files/a/7/magvas_csaszarzsemle_800x800_fill.jpg'),
(6, 'Rozsos zsemle', 'Fehér', 160, 'https://www.fornetti.hu/files/7/2/rozsoszsemle_fornetti_800x800_fill.jpg'),
(7, 'Korpás rúd', 'Fehér', 119, 'https://www.fornetti.hu/files/1/9/ki_korpas_rud_800x800_fill.jpg'),
(8, 'Briós', 'Fehér', 279, 'https://www.fornetti.hu/files/2/d/brios_fornetti_800x800_fill.jpg'),
(9, 'Pizzás csiga', 'Finom', 275, 'https://www.fornetti.hu/files/3/b/sajtos_csiga.jpg'),
(10, 'Fahéjas csiga', 'Finom', 199, 'https://www.fornetti.hu/files/0/4/l_fahejascsiga_800x800_fill.jpg'),
(11, 'Extra sajtos rúd', 'Finom', 399, 'https://www.fornetti.hu/files/c/5/extra_sajtos_rud_800x800_fill.jpg'),
(12, 'Sajtkrémes rúd', 'Finom', 199, 'https://www.fornetti.hu/files/5/b/xxl_sajtkremes_800x800_fill.jpg'),
(13, 'Mogyorókrémes croissant', 'Finom', 300, 'https://www.fornetti.hu/files/9/1/mogyorokremes_croissant_800x800_fill.jpg'),
(14, 'Sajtos croissant', 'Finom', 359, 'https://www.fornetti.hu/files/a/0/fustoltsajtoscroissant_800x800_fill.jpg'),
(15, 'Almás fahéjas táska', 'Finom', 249, 'https://digitalcontent.api.tesco.com/v2/media/ghs/7e102517-03b3-4309-b8f8-4e3bdca8ec44/467c0208-cae2-4d01-8a6f-4310206e5ced_1815504095.jpeg?h=960&w=960'),
(16, 'Meggyes pundigos párna ', 'Finom', 479, 'https://www.fornetti.hu/files/3/c/xxl_meggyes-pudingos_800x800_fill.jpg'),
(17, 'Pizzás-sonkás háromszög ', 'Finom', 219, 'https://media.avokado.com/asset/w_1170,f_auto,q_75/9287049_6552907555_aa_0_2024_07_05_00_27_15_jpg_c848c31a.jpg'),
(18, 'Olivás stangli ', 'Finom', 299, 'https://www.fornetti.hu/files/9/5/ek_olivas_stangli_800x800_fill.jpg'),
(19, 'Baconos kenyérlángos', 'Finom', 399, 'https://www.fornetti.hu/files/9/e/baconos_pizzaszelet_800x800_fill.jpg'),
(20, 'Barackos fánk', 'Fánk', 195, 'https://www.fornetti.hu/files/4/6/vegyesgyumolcsoslekvarosfank_800x800_fill.jpg'),
(21, 'Málnás fánk', 'Fánk', 399, 'https://www.fornetti.hu/files/1/1/feketeerdo_800x800_fill.jpg'),
(22, 'Vaníliakrémes fánk', 'Fánk', 238, 'https://yankeehotdog.cdn.shoprenter.hu/custom/yankeehotdog/image/cache/w1000h1000wt1q100/product/P1291_1.jpg.webp?lastmod=1720616017.1679577846'),
(23, 'Mogyorós fánk', 'Fánk', 238, 'https://www.fornetti.hu/files/b/5/mogyoros_fank_400x400_c.jpg'),
(24, 'Sós karamellás fánk', 'Fánk', 320, 'https://partner.donutworrybehappy.eu/getmetafile/6ff9facf-487b-4102-9cb2-8375a8f7aca6/caramel-dream-cake.png.aspx?width=1410&height=1410'),
(25, 'Barna kenyér', 'Barna', 797, 'https://vargapekseg.hu/wp-content/uploads/2022/11/Teljes_kiorlesu_magvas_kenyer_forma_05kg.png');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelesek`
--

CREATE TABLE `rendelesek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pekaru` bigint(20) UNSIGNED NOT NULL,
  `felhasznalo` bigint(20) UNSIGNED NOT NULL,
  `cim` bigint(20) UNSIGNED NOT NULL,
  `szamlazasiVNev` varchar(255) NOT NULL,
  `szamlazasiKNev` varchar(255) NOT NULL,
  `RDatum` date DEFAULT current_timestamp(),
  `KDatum` date NOT NULL,
  `fizetesiMod` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `rendelesek`
--

INSERT INTO `rendelesek` (`id`, `pekaru`, `felhasznalo`, `cim`, `szamlazasiVNev`, `szamlazasiKNev`, `RDatum`, `KDatum`, `fizetesiMod`) VALUES
(1, 7, 2, 5, 'Vicc', 'Elek', '2024-11-25', '2024-11-26', 0),
(2, 5, 3, 1, 'Pál', 'Pál', '2024-11-26', '2024-11-27', 1),
(3, 6, 5, 4, 'Para', 'Zita', '2024-11-27', '2024-11-28', 0),
(4, 2, 1, 2, 'Kovács', 'Sarolta', '2024-11-28', '2024-11-29', 1),
(5, 3, 4, 3, 'Molnár', 'Ödön', '2024-11-29', '2024-11-30', 1),

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cimek`
--
ALTER TABLE `cimek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cimek_cim_unique` (`cim`),
  ADD KEY `cimek_felhasznalo_foreign` (`felhasznalo`);

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `felhasznalok_email_unique` (`email`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `pekaruk`
--
ALTER TABLE `pekaruk`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rendelesek_pekaru_foreign` (`pekaru`),
  ADD KEY `rendelesek_felhasznalo_foreign` (`felhasznalo`),
  ADD KEY `rendelesek_cim_foreign` (`cim`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cimek`
--
ALTER TABLE `cimek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `pekaruk`
--
ALTER TABLE `pekaruk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `cimek`
--
ALTER TABLE `cimek`
  ADD CONSTRAINT `cimek_felhasznalo_foreign` FOREIGN KEY (`felhasznalo`) REFERENCES `felhasznalok` (`id`);

--
-- Megkötések a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD CONSTRAINT `rendelesek_cim_foreign` FOREIGN KEY (`cim`) REFERENCES `cimek` (`id`),
  ADD CONSTRAINT `rendelesek_felhasznalo_foreign` FOREIGN KEY (`felhasznalo`) REFERENCES `felhasznalok` (`id`),
  ADD CONSTRAINT `rendelesek_pekaru_foreign` FOREIGN KEY (`pekaru`) REFERENCES `pekaruk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
