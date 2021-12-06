<?php
include('connect.php');
session_start();
if(isset($_GET['produkt'])){
    echo "test1";
$sql = "DELETE FROM produkty WHERE produkty.id=".$_GET['id']."'";
$result = mysqli_query($connect, $sql);
$_SESSION['info'] = "Usunięto Pomyślnie";
header('location:../listaProdukt.php');
}else if(isset($_GET['zamowienie'])){
    echo "test2";
    $sql = "DELETE FROM zamowienia WHERE zamowienia.id=".$_GET['id']."'";
    $result = mysqli_query($connect, $sql);
    $_SESSION['info'] = "Usunięto Pomyślnie";
    header('location:../mojeZamowienia.php');
}
?>