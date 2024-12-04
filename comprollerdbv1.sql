-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2024 at 02:06 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comproller`
--

-- --------------------------------------------------------

--
-- Table structure for table `comprollerfelhasznalok`
--

CREATE TABLE `comprollerfelhasznalok` (
  `FelhasznaloID` int(11) NOT NULL,
  `Felhasznalonev` varchar(50) NOT NULL,
  `JelszoHash` varchar(255) NOT NULL,
  `DolgozoID` int(11) NOT NULL,
  `Jogosultsag` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dolgozok`
--

CREATE TABLE `dolgozok` (
  `DolgozoID` int(11) NOT NULL,
  `Nev` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Telefonszam` varchar(15) DEFAULT NULL,
  `Munkakor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dolgozokreszletek`
--

CREATE TABLE `dolgozokreszletek` (
  `ReszletID` int(11) NOT NULL,
  `DolgozoID` int(11) NOT NULL,
  `Cim` varchar(255) DEFAULT NULL,
  `SzuletesiDatum` date DEFAULT NULL,
  `BankszamlaSzam` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dolgozok_muszakok`
--

CREATE TABLE `dolgozok_muszakok` (
  `DolgozoMuszakID` int(11) NOT NULL,
  `DolgozoID` int(11) NOT NULL,
  `MuszakID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_11_25_192800_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `muszakok`
--

CREATE TABLE `muszakok` (
  `MuszakID` int(11) NOT NULL,
  `Kezdet` datetime NOT NULL,
  `Veg` datetime NOT NULL,
  `Leiras` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('WDUwjiOmiYfKVsuZe5fkl6R0AaYZ990xM0DsRVuu', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnJkM3YwbFZha1lIajRXUnBmS2FBYXRlVThEc01mWUZKWmY1ZUlsaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTY6Imh0dHA6Ly9sb2NhbGhvc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1732810043);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comprollerfelhasznalok`
--
ALTER TABLE `comprollerfelhasznalok`
  ADD PRIMARY KEY (`FelhasznaloID`),
  ADD UNIQUE KEY `Felhasznalonev` (`Felhasznalonev`),
  ADD KEY `DolgozoID` (`DolgozoID`);

--
-- Indexes for table `dolgozok`
--
ALTER TABLE `dolgozok`
  ADD PRIMARY KEY (`DolgozoID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `dolgozokreszletek`
--
ALTER TABLE `dolgozokreszletek`
  ADD PRIMARY KEY (`ReszletID`),
  ADD KEY `DolgozoID` (`DolgozoID`);

--
-- Indexes for table `dolgozok_muszakok`
--
ALTER TABLE `dolgozok_muszakok`
  ADD PRIMARY KEY (`DolgozoMuszakID`),
  ADD KEY `DolgozoID` (`DolgozoID`),
  ADD KEY `MuszakID` (`MuszakID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muszakok`
--
ALTER TABLE `muszakok`
  ADD PRIMARY KEY (`MuszakID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comprollerfelhasznalok`
--
ALTER TABLE `comprollerfelhasznalok`
  MODIFY `FelhasznaloID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dolgozok`
--
ALTER TABLE `dolgozok`
  MODIFY `DolgozoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dolgozokreszletek`
--
ALTER TABLE `dolgozokreszletek`
  MODIFY `ReszletID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dolgozok_muszakok`
--
ALTER TABLE `dolgozok_muszakok`
  MODIFY `DolgozoMuszakID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `muszakok`
--
ALTER TABLE `muszakok`
  MODIFY `MuszakID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comprollerfelhasznalok`
--
ALTER TABLE `comprollerfelhasznalok`
  ADD CONSTRAINT `comprollerfelhasznalok_ibfk_1` FOREIGN KEY (`DolgozoID`) REFERENCES `dolgozok` (`DolgozoID`);

--
-- Constraints for table `dolgozokreszletek`
--
ALTER TABLE `dolgozokreszletek`
  ADD CONSTRAINT `dolgozokreszletek_ibfk_1` FOREIGN KEY (`DolgozoID`) REFERENCES `dolgozok` (`DolgozoID`);

--
-- Constraints for table `dolgozok_muszakok`
--
ALTER TABLE `dolgozok_muszakok`
  ADD CONSTRAINT `dolgozok_muszakok_ibfk_1` FOREIGN KEY (`DolgozoID`) REFERENCES `dolgozok` (`DolgozoID`),
  ADD CONSTRAINT `dolgozok_muszakok_ibfk_2` FOREIGN KEY (`MuszakID`) REFERENCES `muszakok` (`MuszakID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
