<?php
session_start();
include("connect.php");
$login = $_POST['login'];
$haslo = $_POST['passwd'];
if(!empty($login)){
    $sql = "SELECT id, login, haslo from klienci where login='$login'";
    $result = mysqli_query($connect, $sql);
        while($dane = mysqli_fetch_assoc($result)){
                if($dane['haslo'] == md5($haslo)){
                    header("location:../sklep.php?klient=$dane[id]");
                    
                }else{
                    header("location:../index.php");
                    $_SESSION["Err"] = 'Błędne hasło lub login!';
                }
        }
}else{
    header("location:../index.php");
    $_SESSION["Err"] = "Błędny login!";
}
?>