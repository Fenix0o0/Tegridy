<?php
include('connect.php');
session_start();
$post=$_POST;
$sql1 = "SELECT nazwa, opis, cena, ilosc, id_kategoria, obraz FROM produkty WHERE id=".$_SESSION['id'];
$result = mysqli_query($connect, $sql1);
while($wynik = mysqli_fetch_assoc($result)){
    if(!empty($post['nazwa'])){$nazwa = $post['nazwa'];}else{$nazwa = $wynik['nazwa'];}
    if(!empty($post['opis'])){$opis = $post['opis'];}else{$opis = $wynik['opis'];}
    if(!empty($post['cena'])){$cena = $post['cena'];}else{$cena = $wynik['cena'];}
    if(!empty($post['ilosc'])){$ilosc = $post['ilosc'];}else{$ilosc = $wynik['ilosc'];}
    if(!empty($post['obraz'])){$obraz = $post['obraz'];}else{$obraz = $wynik['obraz'];}
    if(!empty($post['kat'])){$kat = $post['kat'];}else{$kat = $wynik['id_kategoria'];}
}

if(isset($_SESSION['id'])){
            $sql="UPDATE produkty SET nazwa='".$nazwa."', opis='".$opis."', cena='".$cena."', ilosc='".$ilosc."', obraz='".$obraz."', id_kategoria='".$kat."' WHERE id=".$_SESSION['id'];
            $result = mysqli_query($connect, $sql);
            unset($_SESSION['id']);
            header("location:../dodajProdukt.php");
            $_SESSION['info'] = "Edytowano pomyślnie";
        }
?>