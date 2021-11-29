<?php
include('connect.php');
$nazwa=$_POST['nazwa'];
$opis=$_POST['opis'];
$cena=$_POST['cena'];
$ilosc=$_POST['ilosc'];
$obraz=$_POST['obraz'];
$cat=$_POST['kat'];
$_SESSION['option'] = "Halo";
$sql="SELECT * from produkty where nazwa='$nazwa'";
$result = mysqli_query($connect, $sql);
if(empty($result)){
    $sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";
    $result = mysqli_query($connect, $sql);
    header("location:../administrator/dodajProdukt.php");
    session_start();
    $_SESSION['option'] = "Dodano pomyślnie";
    
}else{
    $_SESSION['option'] = "Produkt o podanej nazwie już istnieje. Czy chcesz dodać produkt o takiej samej nazwie? Jeśli chcesz zmienić dane produktu przejdź do panelu <a href='../administrator/edycjaProdukt.php'>edycji</a>";
    header("location:../administrator/dodajProdukt.php");
    
}

