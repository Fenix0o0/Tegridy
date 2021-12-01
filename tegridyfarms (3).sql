-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Gru 2021, 13:04
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
  `nazwaKat` varchar(20) COLLATE utf8_bin NOT NULL,
  `opis` text COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`nazwaKat`, `opis`, `id`) VALUES
('Olejki Naturalne', 'Olejki o smaku naturalnym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 1),
('Olejki Kokosowe', 'Olejki o smaku kokosa Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 2),
('Olejki Limonkowe', 'Olejki o smaku limonkowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 3),
('Olejki miętowo-czeko', 'Olejki o smaku miętowo-czekoladowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 4),
('Olejki Waniliowe', 'Olejki o smaku waniliowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 5);

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
  `haslo` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `administrator` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`Id`, `Imie`, `Nazwisko`, `Adres`, `mail`, `haslo`, `login`, `administrator`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin', '3f3def178746a7e49ebc345d2e8a07b0', 'Admin', 1),
(2, 'Konrad', 'Klient', '123', '123', '202cb962ac59075b964b07152d234b70', 'Klient', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkty`
--

CREATE TABLE `produkty` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) COLLATE utf8_bin NOT NULL,
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
(1, 'Olejek Naturalny', 'Olejek o smaku naturalnym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 199.99, 13, '1naturalny.webp', 1),
(2, 'Olejek Kokosowy', 'Olejek o smaku kokosowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 189.99, 10, '2kokosowy.webp', 2),
(3, 'Olejek Limonkowy', 'Olejek o smaku limonkowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 159.99, 12, '3limonka.webp', 3),
(4, 'Olejek Miętowo-Czekoladowy', 'Olejek o smaku miętowo-kokosowym Kanaste zawierają pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 209.99, 7, '4mieta-czekolada.webp', 4),
(5, 'Olejek Waniliowy', 'Olejek o smaku waniliowym Kanaste zawieraja pełne spektrum naturalnie występujących w konopiach kannabinoidów (m.in. CBD, CBDA, CBC, CBG, CBDV, BCP), terpenów i flawonoidów. Ich obecność zapewnia maksymalną skuteczność tworząc tzw. “efekt otoczenia” wspierający jego działanie. W trosce o bezpieczeństwo, nasz produkt jest wolny od jakichkolwiek właściwości odurzających.', 199.99, 9, '5wanilia.webp', 5),
(12, 'Olejek Testowy', 'Test', 15, 15, 'tak.jpg', 1),
(13, 'Olej Napędowy', 'Duża energia', 6, 200, 'tak.jpg', 4),
(24, 'Olejek Testowy', 'Test3', 15, 15, 'olej.png', 5),
(25, 'Test2', 'Test', 13, 141, '444', 1);

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `produkty_ibfk_1` FOREIGN KEY (`id_kategoria`) REFERENCES `kategorie` (`id`);

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
