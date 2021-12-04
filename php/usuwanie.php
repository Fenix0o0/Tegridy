<?php
include('connect.php');
session_start();
$sql = "DELETE FROM produkty WHERE produkty.id=".$_GET['id'];
$result = mysqli_query($connect, $sql);
$_SESSION['info'] = "Usunięto Pomyślnie";
header('location:../listaProdukt.php');
?>