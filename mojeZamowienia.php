<html>
<head>
<title>Tegridy Farm's-zamowienia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bg-secondary bg-gradient">
<header>
<?php include('php/nav.php'); ?>
</header>
<?php
include("php/connect.php");
$sql = "SELECT z.id, z.data, z.Prod_Ilosc, p.nazwa, p.cena, z.status, z.id_produkt FROM zamowienia z JOIN produkty p ON (z.id_produkt = p.id) where z.id_klient=".$_SESSION['klient'];
$result = mysqli_query($connect, $sql);
echo "<table class='table table-dark table-hover'><thead><tr><th>ID</ih><th>data</th><th>Ilosc produktu</th><th>Nazwa Produktu</th><th>Cena</th><th>Status</th><th colspan=2>Opcje</th></thead><tbody>";
while($zamowienia = mysqli_fetch_assoc($result)){
    $cena = $zamowienia['cena']*$zamowienia['Prod_Ilosc'];
    echo "<tr>
            <td>".$zamowienia['id']."</td>
            <td>".$zamowienia['data']."</td>
            <td>".$zamowienia['Prod_Ilosc']."</td>
            <td>".$zamowienia['nazwa']."</td>
            <td>".$cena."</td>";
            if($zamowienia['status'] == 'ZREALIZOWANO'){
                echo "<td style='color:#00FF00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'OCZEKUJĄCE'){
                echo "<td style='color:#FFFF00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'ANULOWANO'){
                echo "<td style='color:#FF0000;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'WSTRZYMANO'){
                echo "<td style='color:#FFAA00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'W_DRODZE'){
                echo "<td style='color:#0000FF;'>W DRODZE</td>";
            }
            echo "<td><a href=php/usuwanie.php?id=".$zamowienia['id']."&zamowienie=yes&Ilosc=".$zamowienia['Prod_Ilosc']."&prod=".$zamowienia['id_produkt']."&status=".$zamowienia['status'].">Anuluj</a></td>";
    echo "</tr>";
}
echo "</tbody></table>";

include('php/alert.php');

?>

</body>
</html>