<html>
<head>
<title>Tegridy Farm's-rejestracja</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
        <a href="../sklep.php">Wróć</a>
<?php
include("../php/connect.php");
$sql = "SELECT p.id, p.nazwa, k.nazwaKat , p.ilosc, p.cena FROM produkty p JOIN kategorie k ON (k.id = p.id_kategoria) ORDER BY id ASC";
$result = mysqli_query($connect, $sql);
echo "<table class='table table-success table-hover'><thead><tr><th>ID</ih><th>Nazwa</th><th>Ilość</th><th>Cena</th><th>Nazwa Kategorii</th><th colspan=2>Opcje</th></thead><tbody>";
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
echo "</tbody></table>";

include('../php/alert.php');

?>

</body>
</html>