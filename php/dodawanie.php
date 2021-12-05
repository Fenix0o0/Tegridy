<?php
include('connect.php');
session_start();


if($_GET['opcja'] == 0){
    $_SESSION['nazwa']=$_POST['nazwa'];
    $_SESSION['opis']=$_POST['opis'];
    $_SESSION['cena']=$_POST['cena'];
    $_SESSION['ilosc']=$_POST['ilosc'];
    $_SESSION['obraz']=$_POST['obraz'];
    if(isset($_POST['kat'])){
        $_SESSION['kat']=$_POST['kat'];
    }else{
        $_SESSION['info'] = "Nie wybrano kategorii";
    }
    $nazwa = $_SESSION['nazwa'];
    $opis = $_SESSION['opis'];
    $cena = $_SESSION['cena'];
    $ilosc = $_SESSION['ilosc'];
    $obraz = $_SESSION['obraz'];
    $cat = $_SESSION['kat'];

    $sql="SELECT id, nazwa from produkty where nazwa='$nazwa'";
    $result = mysqli_query($connect, $sql);
    $dane = mysqli_fetch_assoc($result);
    if(empty($dane['nazwa'])){
        if(!empty($nazwa) && !empty($opis) && !empty($cena) && !empty($ilosc) && !empty($obraz) && !empty($cat)){
            $sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";
            $result = mysqli_query($connect, $sql);
                unset($_SESSION['nazwa']);
                unset($_SESSION['opis']);
                unset($_SESSION['cena']);
                unset($_SESSION['ilosc']);
                unset($_SESSION['obraz']);
                unset($_SESSION['kat']);
            header("location:../listaProdukt.php");
            $_SESSION['info'] = "Dodano pomyślnie";
        }else{
            $_SESSION['info'] = "Pola nazwa, opis, cena, ilość, obraz i kategoria muszą być uzupełnione";
            header("location:../dodajProdukt.php");}
    }else{
        $_SESSION['info'] = "Produkt o podanej nazwie już istnieje. Czy chcesz dodać produkt o takiej samej nazwie? Jeśli chcesz zmienić dane produktu przejdź do panelu <a href='../edycjaProdukt.php?id=".$dane['id']."'>edycji</a>. <a href='php/dodawanie.php?opcja=1'>Dodaj mimo to.</a>";
        header("location:../dodajProdukt.php");
    }
}else if($_GET['opcja'] == 1){
    $nazwa = $_SESSION['nazwa'];
    $opis = $_SESSION['opis'];
    $cena = $_SESSION['cena'];
    $ilosc = $_SESSION['ilosc'];
    $obraz = $_SESSION['obraz'];
    $cat = $_SESSION['kat'];

        $sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";
        $result = mysqli_query($connect, $sql);
        $_SESSION['info'] = "Dodano pomyślnie";
        unset($_SESSION['nazwa']);
        unset($_SESSION['opis']);
        unset($_SESSION['cena']);
        unset($_SESSION['ilosc']);
        unset($_SESSION['obraz']);
        unset($_SESSION['kat']);
        header("location:../listaProdukt.php");
}

// !!!STARA WERSJA!!!

// if($_GET['opcja'] == 1){

//     if(!empty($nazwa) && !empty($opis) && !empty($cena) && !empty($ilosc) && !empty($obraz) && !empty($cat)){
//         $sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";
//         $result = mysqli_query($connect, $sql);
//         header("location:../administrator/dodajProdukt.php");
        
//         $_SESSION['info'] = "Dodano pomyślnie";
// }
// }else if($_GET['opcja'] == 0){
//     if(empty($result))
//     if(!empty($nazwa) && !empty($opis) && !empty($cena) && !empty($ilosc) && !empty($obraz) && !empty($cat)){
//     $sql="INSERT INTO `produkty` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `obraz`, `id_kategoria`) VALUES (NULL, '$nazwa', '$opis', '$cena', '$ilosc', '$obraz', '$cat')";
//     $result = mysqli_query($connect, $sql);
//     header("location:../administrator/dodajProdukt.php");
    
//     $_SESSION['info'] = "Dodano pomyślnie";
//     }else{
//         $_SESSION['info'] = "Pola nazwa, opis, cena, ilość, obraz i kategoria muszą być uzupełnione";
//     }
// }else{
//     $_SESSION['info'] = "Produkt o podanej nazwie już istnieje. Czy chcesz dodać produkt o takiej samej nazwie? Jeśli chcesz zmienić dane produktu przejdź do panelu <a href='../administrator/edycjaProdukt.php'>edycji</a>. <a href='../php/dodawanie.php?opcja=1'>Dodaj mimo to.</a>";
//     header("location:../administrator/dodajProdukt.php");
    
// }

?>