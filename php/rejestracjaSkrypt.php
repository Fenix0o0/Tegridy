<?php
include('connect.php');

session_start();
if(isset($_POST['login'])){
    $login = $_POST['login'];
}else{
    $login = $_POST['mail'];
}

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$haslo = md5($_POST['haslo']);
$mail = $_POST['mail'];
$adres = $_POST['adress'];


$zapytanie="SELECT login FROM klienci";
$rezultat = mysqli_query($connect, $zapytanie);
$wynik = mysqli_fetch_assoc($rezultat);

if($wynik['login'] != $_POST['login']){
    if($_POST['chkpsswd'] == $_POST['haslo']){
        if(!empty($imie) && !empty($nazwisko) && !empty($haslo) && !empty($mail)){
            $sql = "INSERT INTO `klienci` (`Id`, `Imie`, `Nazwisko`, `Adres`, `mail`, `haslo`, `login`, `administrator`) VALUES (NULL, '$imie', '$nazwisko', '$adres', '$mail', '$haslo', '$login', '0')";
            $result = mysqli_query($connect, $sql);
           header("location:../index.php");
            $_SESSION["Err"] = "Pomyślnie zarejestrowano!";
        }else{
            $_SESSION["Err"] = "Nie podano imienia";
            header("location:../rejestracja.php");
        }

    }else{
        header("location:../rejestracja.php");
        $_SESSION["Err"] = "Hasła różnią się od siebie";
    }
}else{
    header("location:../rejestracja.php");
    $_SESSION["Err"] = "Login jest już zajęty";
}


  
?>