<?php
include('connect.php');
session_start();
if(isset($_GET['produkt'])){ //usuwanie produktu
    $sql = "DELETE FROM produkty WHERE produkty.id=".$_GET['id']."'";
    $result = mysqli_query($connect, $sql);
    $_SESSION['info'] = "Usunięto Pomyślnie";
    header('location:../listaProdukt.php');
}else if(isset($_GET['zamowienie'])){ //anulowanie zlecenia
    $sql1 = "DELETE FROM zamowienia WHERE zamowienia.id=".$_GET['id'];
    $result = mysqli_query($connect, $sql1);
        if($_GET['status'] != 'ZREALIZOWANO' or $_GET['status'] != 'W_DRODZE'){
            $sql2 = "SELECT ilosc FROM Produkty WHERE id=".$_GET['prod'];
            $result = mysqli_query($connect, $sql2);
            $ilosc = mysqli_fetch_assoc($result);
            $ilosc = $ilosc['ilosc'] + $_GET['Ilosc'];
            $sql3 = "UPDATE produkty SET ilosc='".$ilosc."' WHERE id=".$_GET['prod'];
            $result = mysqli_query($connect, $sql3);
            $_SESSION['info'] = "Usunięto Pomyślnie";
            header('location:../mojeZamowienia.php');
    }else{header('location:../mojeZamowienia.php');}
}
?>