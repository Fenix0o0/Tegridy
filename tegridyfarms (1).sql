-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Lis 2021, 13:16
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tegridyfarms`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_bin NOT NULL,
  `opis` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `Id` int(11) NOT NULL,
  `Imie` varchar(20) COLLATE utf8_bin NOT NULL,
  `Nazwisko` varchar(20) COLLATE utf8_bin NOT NULL,
  `Adres` varchar(50) COLLATE utf8_bin NOT NULL,
  `mail` varchar(25) COLLATE utf8_bin NOT NULL,
  `haslo` varchar(30) COLLATE utf8_bin NOT NULL,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `administrator` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`Id`, `Imie`, `Nazwisko`, `Adres`, `mail`, `haslo`, `login`, `administrator`) VALUES
(1, 'Artur', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(2, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(3, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(4, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(5, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(6, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(7, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(8, '$', 'Niediler', 'Wytrzeźwień 42', 'jestemtrzezwy@tegridy.com', 'Ziółko@#', 'AdminArtur', 1),
(9, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) COLLATE utf8_bin NOT NULL,
  `opis` text COLLATE utf8_bin NOT NULL,
  `cena` float NOT NULL,
  `ilosc` int(11) NOT NULL,
  `obraz` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_kategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `produkty`
--

INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES
(1, 'Olej Na ból', 'Odpalasz i już nie boli', 69, 20, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD', 0),
(2, 'Olej Na ból uda', 'Odpalasz i już nie boli', 14.99, 20, 'olej.png', 0),
(3, 'Olej Na ból głowy', 'Odpalasz i już nie boli', 14.99, 20, 'olej.png', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `id_klient` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_produkt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD KEY `id` (`id`);

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategoria` (`id_kategoria`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_klient` (`id_klient`),
  ADD KEY `id_produkt` (`id_produkt`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD CONSTRAINT `kategorie_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produkty` (`id_kategoria`);

--
-- Ograniczenia dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `zamowienia_ibfk_1` FOREIGN KEY (`id_klient`) REFERENCES `klienci` (`Id`),
  ADD CONSTRAINT `zamowienia_ibfk_2` FOREIGN KEY (`id_produkt`) REFERENCES `produkty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
