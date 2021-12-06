<?php 
session_start();
unset($_SESSION['klient']);
$_SESSION['Err'] = 'Pomyślnie wylogowano';
header("location:../index.php");
?>