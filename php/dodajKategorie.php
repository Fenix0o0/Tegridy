<?php
session_start();
include('connect.php');

$sql = 'SELECT nazwaKat FROM kategorie';
$result = mysqli_query($connect, $sql);
$dana = mysqli_fetch_assoc($result);
if($dana['nazwaKat'] == $_POST['nazwa']){
    $_SESSION['info'] = "Nazwa Zajęta";
    header('location:../dodajProdukt.php');
}else{
    $nazwa = $_POST['nazwa'];
    $opis = $_POST['opis'];
    $sql = "INSERT INTO kategorie (nazwaKat,opis,id) VALUES ('$nazwa', '$opis', NULL)";
    $result = mysqli_query($connect, $sql);
    $_SESSION['info'] = "Dodano Kategorie";
    header('location:../dodajProdukt.php');
}
?>