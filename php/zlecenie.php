<?php
    include('connect.php');
    session_start();
    if(!empty($_POST['ilosc'])){
        $sql = "SELECT id, ilosc FROM produkty WHERE id='".$_GET['id']."'";
        $result1 = mysqli_query($connect, $sql);
        $dana = mysqli_fetch_assoc($result1);
        $ilosc = $dana['ilosc']-$_POST['ilosc'];
            if($ilosc >= 0){
            $sql_produkt = "UPDATE produkty SET ilosc='$ilosc' WHERE id='".$_GET['id']."'";
            $sql_zamowienie = "INSERT INTO zamowienia (id, id_klient, data, id_produkt, Prod_ilosc, Status) VALUES (NULL, '".$_SESSION['klient']."','".date('Y-m-d')."','".$_GET['id']."', '".$_POST['ilosc']."', 'OCZEKUJĄCE')";
            $result2 = mysqli_query($connect, $sql_produkt);
            $result3 = mysqli_query($connect, $sql_zamowienie);
            header('location:../sklep.php');
        }else{
            $sql_produkt = "UPDATE produkty SET ilosc='$ilosc' WHERE id='".$_GET['id']."'";
            $sql_zamowienie = "INSERT INTO zamowienia (id, id_klient, data, id_produkt, Prod_ilosc, Status) VALUES (NULL, '".$_SESSION['klient']."','".date('Y-m-d')."','".$_GET['id']."', '".$_POST['ilosc']."', 'WSTRZYMANO')";
            $result2 = mysqli_query($connect, $sql_produkt);
            $result3 = mysqli_query($connect, $sql_zamowienie);
            header('location:../sklep.php');
        }
    }else{
        $_SESSION['info'] = "Nie podano ilości produktu";
        header('location:../sklep.php');
    }
?>