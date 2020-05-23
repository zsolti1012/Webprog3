-- Oravecz Zsolt 
-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2020. Máj 23. 15:53
-- Kiszolgáló verziója: 10.4.10-MariaDB
-- PHP verzió: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vehicles`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `age` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `model`, `picture`, `description`, `age`, `created_at`) VALUES
(64, 7, 'Porsche 911', 'Porsche911', 'A Porsche 911 a németországi Stuttgartban működő Porsche által gyártott gyönyörű sportautó, aminek első generációját 1963-ban mutatták be. Elődjével, a 356-ossal ellentétben nem a farmotoros Volkswagen Bogáron alapul, hanem új, önhordó karosszériát és hat', 2019, '2020-05-19 12:01:28'),
(65, 7, 'Ferrari 458', 'Ferrari458', 'The Ferrari 458 Italia (Type F142) is a mid-engine sports car produced by the Italian automobile manufacturer Ferrari. The 458 replaced the F430, and was first officially unveiled at the 2009 Frankfurt Motor Show.[5][6] It was succeeded by the 488, which ', 2010, '2020-05-19 12:02:29');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `motorcycles`
--

DROP TABLE IF EXISTS `motorcycles`;
CREATE TABLE IF NOT EXISTS `motorcycles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `age` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `motorcycles`
--

INSERT INTO `motorcycles` (`id`, `user_id`, `model`, `picture`, `description`, `age`, `created_at`) VALUES
(6, 7, 'Kawasaky zx6r', 'Kawasakyzx6r', 'The Kawasaki Ninja ZX-6R is a 600 cc class motorcycle in the Ninja sport bike series from the Japanese manufacturer Kawasaki.[1] It was introduced in 1995, and has been constantly updated throughout the years in response to new products from Honda, Suzuki', 2000, '2020-05-19 12:07:27'),
(7, 7, 'Yamaha r6', 'Yamahar6', 'Körülnézegettem a kategóriában...... Honda.... ütősebbet akarok... Kawasaki mániás vagyok, de mégsem ez kell nekem....Suzuki- áhh felejtős... Yamaha R6.. ez is próba.. ez kell nekem:) Kawa klx 650c-ről ültem át, tehát fura érzés volt végre olyan motort ve', 2000, '2020-05-19 12:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `topcars`
--

DROP TABLE IF EXISTS `topcars`;
CREATE TABLE IF NOT EXISTS `topcars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `topcars`
--

INSERT INTO `topcars` (`id`, `model`, `price`, `picture`) VALUES
(5, 'Bugatti La Voiture Noire', 19, 'bugattilavoiture.jpg'),
(12, 'Koenigsegg CCXR Trevita', 5, 'koenigsegccxr.jpg'),
(11, ' Mercedes-Benz Maybach Exelero', 8, 'mcbencexelero.jpg'),
(9, 'Rolls-Royce Sweptail', 13, 'rollsroycesweptail.jpg'),
(10, 'Bugatti Centodieci', 9, 'bugatticentodieci.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `trains`
--

DROP TABLE IF EXISTS `trains`;
CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `age` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `trains`
--

INSERT INTO `trains` (`id`, `user_id`, `model`, `picture`, `description`, `age`, `created_at`) VALUES
(10, 7, 'TGV', 'TGV', ' TGV francia nagysebességű vonat (franciául: „Train à Grande Vitesse”). A TGV vonatokat a francia Alstom cég gyártja. Franciaország egyik nemzeti szimbólumaként is szolgál, és az egyik legsikeresebb nagysebességű vasútnak számít a világon a japán Sinkansz', 1990, '2020-05-19 12:10:02'),
(11, 7, 'M62 ', 'M62', 'Szergej- Orosz (szovjet) származása miatt ezt az orosz férfi keresztnevet kapta.', 1980, '2020-05-19 12:11:38');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `trucks`
--

DROP TABLE IF EXISTS `trucks`;
CREATE TABLE IF NOT EXISTS `trucks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `age` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `trucks`
--

INSERT INTO `trucks` (`id`, `user_id`, `model`, `picture`, `description`, `age`, `created_at`) VALUES
(15, 7, 'Volvo fh 500', 'Volvofh500', 'FH 500 is a heavy commercial vehicle produced by SAIPA Diesel in SAIPA Group. This truck is equipped with powerful 16 gear transmission system, cruise control, gearbox oil temperature monitor, GPS and etc. These features make FH 500 a reliable and suitabl', 2005, '2020-05-19 12:04:38'),
(16, 7, 'Man TGX', 'ManTGX', 'Jobb teljesítmény és még jobb hatékonyság: Az MAN TGX bebizonyítja, hogy a kisebb üzemanyag-fogyasztás és a hatékonyabb erőkihasználás nem feltétlenül ellentétei egymásnak. Mindegy, hogy autópályán halad vagy az építési területek kemény kihívásaival küzd,', 2010, '2020-05-19 12:06:23');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin` tinyint(1) NOT NULL,
  `banned` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`, `admin`, `banned`) VALUES
(8, 0, 'Valaki Valaki', '', 'valaki@valami.hu', 'vizelek', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-16 10:35:57', 0, 1),
(7, 0, 'admin', '323', 'admin@admin.hu', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '2020-05-08 20:33:39', 1, 0),
(11, 0, 'Normal Felhasznalo', '', 'normal@felhasznalo.hu', 'user', 'e10adc3949ba59abbe56e057f20f883e', '2020-05-23 15:53:18', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
