<html>
<head>
<title>Tegridy Farm's-rejestracja</title>
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<?php
include("../php/connect.php");
$sql = "SELECT p.id, p.nazwa, k.nazwaKat , p.ilosc, p.cena FROM produkty p JOIN kategorie k ON (k.id = p.id_kategoria)";
$result = mysqli_query($connect, $sql);
echo "<table>";
while($produkty = mysqli_fetch_assoc($result)){
    echo "<tr>
            <td>".$produkty['id']."</td>
            <td>".$produkty['nazwa']."</td>
            <td>".$produkty['ilosc']."</td>
            <td>".$produkty['cena']."</td>
            <td>".$produkty['nazwaKat']."</td>
            <td><a href=edycjaProdukt.php?id='".$produkty['id']."'>Edytuj</a></td>
            <td><a href=../php/usuwanie.php?id='".$produkty['id']."'>Usuń</a></td>
        </tr>";
}
echo "</table>"
?>

</body>
</html>