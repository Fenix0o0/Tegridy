<!DOCTYPE html>
<html>
<head>
<title>Tegridy Farm's-edycja</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Edytowanie Produktu</h2><a href="listaProdukt.php">Wróć</a>
<form action="../php/edycja.php" method="POST">
<label>Nazwa: </label>
<input type="text" name="nazwa">
<label>Opis: </label>
<input type="text" name="opis">
<label>Cena: </label>
<input type="number" name="cena">
<label>Ilość: </label>
<input type="number" name="ilosc">
<label>Obrazek: </label>
<input type="text" name="obraz">
<label>Kategoria</label>
<?php
include('../php/connect.php');
$sql = "SELECT id, nazwaKat from kategorie";
$result = mysqli_query($connect, $sql);
while($kat = mysqli_fetch_assoc($result)){
    echo "<input type='radio' name='kat' value='".$kat['id']."'>".$kat['nazwaKat']."</input>";
}
?>
<input type="submit" value="Zatwierdź Edycje">
</form>  
<?php
include('../php/alert.php');
$_SESSION['id'] = $_GET['id'];



?>

</body>
</html>