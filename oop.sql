-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 12. Mai 2023 um 12:04
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `oop`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bestellungen`
--

CREATE TABLE `bestellungen` (
  `bestellung_id` int(11) NOT NULL,
  `kauf_id` int(11) NOT NULL,
  `produkt_id` int(11) NOT NULL,
  `menge` int(11) NOT NULL,
  `produkt_preis_cent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kauf`
--

CREATE TABLE `kauf` (
  `kauf_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `summe_cent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_text`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Erster Post Titel von Horst', 'Erster Post Text von Horst', 7, '2023-05-04 11:02:09', '2023-05-04 11:02:09'),
(6, 'Neuer PostTitelTest', 'Neuer PostText', 4, '2023-05-04 12:52:38', '2023-05-04 13:52:02'),
(8, 'Neuer Beitrag für Carry', 'Carry ist toll!', 4, '2023-05-04 16:04:23', '2023-05-04 16:04:23'),
(9, 'Hallo ich bin der Horst', 'Und Fernfahrer.', 7, '2023-05-04 16:06:57', '2023-05-04 16:06:57'),
(10, 'Suche Tanzpartner', 'Biete Fisch', 4, '2023-05-05 07:23:32', '2023-05-05 07:23:32'),
(11, 'Lichterkette', 'nicht Licherkette', 4, '2023-05-05 07:43:21', '2023-05-05 07:43:21'),
(12, 'Keinen Plan', 'Keinen Plan Text', 4, '2023-05-05 07:48:00', '2023-05-05 07:48:00'),
(13, 'TestTestTitel', 'TestTestText', 4, '2023-05-05 07:51:08', '2023-05-05 07:51:08');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkte`
--

CREATE TABLE `produkte` (
  `produkt_id` int(11) NOT NULL,
  `produkt_titel` varchar(255) NOT NULL,
  `produkt_beschreibung` text NOT NULL,
  `produkt_kategorie` int(11) NOT NULL,
  `produkt_preis_cent` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `produkte`
--

INSERT INTO `produkte` (`produkt_id`, `produkt_titel`, `produkt_beschreibung`, `produkt_kategorie`, `produkt_preis_cent`, `created_at`, `updated_at`) VALUES
(1, 'Playstation 5', 'Playstation 5 Spielekonsole', 1, 50000, '2023-05-08 08:43:52', '2023-05-08 08:43:52'),
(2, 'XBOX-One', 'XBOX-One Spielekonsole', 1, 45000, '2023-05-08 08:44:49', '2023-05-08 08:44:49'),
(3, 'Nintendo WII', 'Nintendo WII Spielekonsole', 1, 35000, '2023-05-08 08:45:19', '2023-05-08 08:45:19'),
(4, 'Gaming-PC', 'High-Tech Gaming-PC', 1, 79999, '2023-05-08 10:10:32', '2023-05-08 10:10:32'),
(5, 'Vollholz-Besen', 'Ein Besen aus Vollholz', 2, 1799, '2023-05-08 10:53:24', '2023-05-08 10:53:24'),
(7, 'Mülleimer', 'Ein Mülleimer mit Wegwerffunktion', 2, 2449, '2023-05-08 10:54:21', '2023-05-08 10:54:21'),
(8, 'Küchengerät', 'Küchengerät der Marke Deluxe', 2, 172095, '2023-05-08 11:14:27', '2023-05-08 11:15:40');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `produkt_kategorie`
--

CREATE TABLE `produkt_kategorie` (
  `produkt_kategorie_id` int(11) NOT NULL,
  `produkt_kategorie_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `produkt_kategorie`
--

INSERT INTO `produkt_kategorie` (`produkt_kategorie_id`, `produkt_kategorie_name`) VALUES
(1, 'Elektronik'),
(2, 'Haushalt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL,
  `profile_about` text NOT NULL,
  `profile_introtitle` text NOT NULL,
  `profile_introtext` text NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `profiles`
--

INSERT INTO `profiles` (`profile_id`, `profile_about`, `profile_introtitle`, `profile_introtext`, `user_id`) VALUES
(1, 'Über mich test', 'BeschreibungsTitel', 'BeschreibungsText', 4),
(2, 'Erzähl etwas über dich.', 'Hallo! Mein Name ist Test.', 'Willkommen auf meinem Profil. Bald gibt es hier mehr zu sehen.', 5),
(4, 'Erzähl etwas über dich.', 'Hallo! Mein Name ist Horst.', 'Willkommen auf meinem Profil. Bald gibt es hier mehr zu sehen.', 7);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_uid` tinytext NOT NULL,
  `user_pwd` longtext NOT NULL,
  `user_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `user_uid`, `user_pwd`, `user_email`) VALUES
(4, 'Marv', '$2y$10$LtZnMOu1ELC5OVOAcrOI9OkvejsAzWIwL9SGkzNwUiWUWibjBy/vW', 'm@test.de'),
(5, 'Test', '$2y$10$wBLAbaGxKfASCgbU1JBImO4LfMPi1HuR129kdJF0MUfmUbRvUm4wq', 'test@home.de'),
(7, 'Horst', '$2y$10$6Ea3BJJuJQaNKOVYwp6x2einzHo4jcTJF0WhUWy0N3rEv5qUeQPDy', 'horst@mail.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `warenkorb`
--

CREATE TABLE `warenkorb` (
  `warenkorb_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `produkt_id` int(11) NOT NULL,
  `menge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `warenkorb`
--

INSERT INTO `warenkorb` (`warenkorb_id`, `user_id`, `produkt_id`, `menge`) VALUES
(0, 4, 4, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD PRIMARY KEY (`bestellung_id`),
  ADD KEY `kauf_id` (`kauf_id`),
  ADD KEY `produkt_id` (`produkt_id`);

--
-- Indizes für die Tabelle `kauf`
--
ALTER TABLE `kauf`
  ADD PRIMARY KEY (`kauf_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD PRIMARY KEY (`produkt_id`),
  ADD KEY `produkt_kategorie` (`produkt_kategorie`);

--
-- Indizes für die Tabelle `produkt_kategorie`
--
ALTER TABLE `produkt_kategorie`
  ADD PRIMARY KEY (`produkt_kategorie_id`);

--
-- Indizes für die Tabelle `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `profiles_ibfk_1` (`user_id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indizes für die Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  ADD PRIMARY KEY (`warenkorb_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `produkt_id` (`produkt_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `produkte`
--
ALTER TABLE `produkte`
  MODIFY `produkt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `produkt_kategorie`
--
ALTER TABLE `produkt_kategorie`
  MODIFY `produkt_kategorie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `profiles`
--
ALTER TABLE `profiles`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `bestellungen`
--
ALTER TABLE `bestellungen`
  ADD CONSTRAINT `bestellungen_ibfk_1` FOREIGN KEY (`kauf_id`) REFERENCES `kauf` (`kauf_id`),
  ADD CONSTRAINT `bestellungen_ibfk_2` FOREIGN KEY (`produkt_id`) REFERENCES `produkte` (`produkt_id`);

--
-- Constraints der Tabelle `kauf`
--
ALTER TABLE `kauf`
  ADD CONSTRAINT `kauf_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints der Tabelle `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `produkte`
--
ALTER TABLE `produkte`
  ADD CONSTRAINT `produkte_ibfk_1` FOREIGN KEY (`produkt_kategorie`) REFERENCES `produkt_kategorie` (`produkt_kategorie_id`);

--
-- Constraints der Tabelle `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints der Tabelle `warenkorb`
--
ALTER TABLE `warenkorb`
  ADD CONSTRAINT `warenkorb_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `warenkorb_ibfk_2` FOREIGN KEY (`produkt_id`) REFERENCES `produkte` (`produkt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
