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
echo "<table class='table table-success table-hover'><thead><tr><th>ID</ih><th>id klient</th><th>data</th><th>ilosc produktu</th><th>id_produkt</th><th>Cena</th><th>Status</th></thead><tbody>";
while($zamowienia = mysqli_fetch_assoc($result)){
    $cena = $zamowienia['cena']*$zamowienia['Prod_Ilosc'];
    echo "<tr>
            <td>".$zamowienia['id']."</td>
            <td>".$zamowienia['id_klient']."</td>
            <td>".$zamowienia['data']."</td>
            <td>".$zamowienia['Prod_Ilosc']."</td>
            <td>".$zamowienia['id_produkt']."</td>
            <td>".$cena."</td>
            <td>".$zamowienia['status']."</td>
        </tr>";
}
echo "</tbody></table>";

include('php/alert.php');

?>

</body>
</html>