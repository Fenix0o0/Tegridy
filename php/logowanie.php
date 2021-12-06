<?php
session_start();
include("connect.php");
$login = $_POST['login'];
$haslo = $_POST['passwd'];
if(!empty($login)){
    $sql = "SELECT id, login, haslo from klienci where login='$login'";
    $result = mysqli_query($connect, $sql);
    $dane = mysqli_fetch_assoc($result);
    if($dane != NULL){
        if($dane['haslo'] == md5($haslo)){
        $_SESSION['klient'] = $dane['id'];
        header("location:../sklep.php");
                    
        }else{
        header("location:../index.php");
        $_SESSION["Err"] = 'Błędne hasło lub login!';
        }
    }else{
        header("location:../index.php");
        $_SESSION["Err"] = 'Podane konto nie istnieje';
    }
}else{
    header("location:../index.php");
    $_SESSION["Err"] = "Błędny login!";
}
?>