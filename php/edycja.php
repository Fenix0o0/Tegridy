<?php
include('connect.php');
session_start();
    die();
if(!empty($nazwa) && !empty($opis) && !empty($cena) && !empty($ilosc) && !empty($obraz) && !empty($cat)){
            $sql="UPDATE `produkty` SET `opis` = 'Test2' WHERE `produkty`.`id` = 24";
            $result = mysqli_query($connect, $sql);
            session_unset();
            header("location:../administrator/dodajProdukt.php");
            $_SESSION['info'] = "Dodano pomyślnie";
        }else{
            $_SESSION['info'] = "Pola nazwa, opis, cena, ilość, obraz i kategoria muszą być uzupełnione";
            header("location:../administrator/dodajProdukt.php");
        }
?>