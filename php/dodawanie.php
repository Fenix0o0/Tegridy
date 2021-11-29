<?php
include('connect.php');



$sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";