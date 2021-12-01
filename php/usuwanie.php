<?php
include('connect.php');
session_start();

$sql = "DELETE * FROM produkty WHERE id=".$_GET['id'];
$result = mysqli_query($connect, $sql);
var_dump($result);
$_SESSION['info'] = "Usunięto Pomyślnie";
header('../administrator/listaProdukt.php');
?>