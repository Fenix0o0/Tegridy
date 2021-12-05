<html>
<head>
<title>Tegridy Farm's-zamowienia</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<?php include('php/nav.php'); ?>
</header>
<?php
include("php/connect.php");
$sql = "SELECT z.id, z.id_klient, z.data, z.Prod_Ilosc, z.id_produkt, p.cena, z.status FROM zamowienia z JOIN produkty p ON (z.id_produkt = p.id) ORDER BY id ASC";
$result = mysqli_query($connect, $sql);
echo "<table class='table table-dark table-hover'><thead><tr><th>ID</ih><th>id klient</th><th>data</th><th>ilosc produktu</th><th>id_produkt</th><th>Cena</th><th>Status</th><th>Zmień Status</th></thead><tbody>";
while($zamowienia = mysqli_fetch_assoc($result)){
    $cena = $zamowienia['cena']*$zamowienia['Prod_Ilosc'];
    echo "<tr>
            <td>".$zamowienia['id']."</td>
            <td>".$zamowienia['id_klient']."</td>
            <td>".$zamowienia['data']."</td>
            <td>".$zamowienia['Prod_Ilosc']."</td>
            <td>".$zamowienia['id_produkt']."</td>
            <td>".$cena."</td>";
            if($zamowienia['status'] == 'ZREALIZOWANO'){
                echo "<td style='color:#00FF00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'OCZEKUJĄCE'){
                echo "<td style='color:#FFFF00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'ANULOWANO'){
                echo "<td style='color:#FF0000;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'WSTRZYMANO'){
                echo "<td style='color:#FFAA00;'>".$zamowienia['status']."</td>";
            }else if($zamowienia['status'] == 'W DRODZE'){
                echo "<td style='color:#0000FF;'>".$zamowienia['status']."</td>";
            }
            echo "<td><form method='POST' action='php/statusUpdate.php?id=".$zamowienia['id']."'><select name='status'>
            <option value='ZREALIZOWANO'>ZREALIZOWANO</option>
            <option value='OCZEKUJĄCE'>OCZEKUJĄCE</option>
            <option value='ANULOWANO'>ANULOWANO</option>
            <option value='WSTRZYMANO'>WSTRZYMANO</option>
            <option value='W DRODZE'>W DRODZE</option>
            </select><input type='submit' placeholder='Zapisz'></form>";
        echo "</tr>";
}
echo "</tbody></table>";

include('php/alert.php');

?>

</body>
</html>