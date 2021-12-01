<!DOCTYPE html>
<html>
<head>
<title>Tegridy Farm's-dodawanie</title>
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2>Dodawanie Produktu</h2><a href="../sklep.php">Wróć</a>
<form action="../php/dodawanie.php?opcja=0" method="POST">
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
$sql = "SELECT id, nazwa from kategorie";
$result = mysqli_query($connect, $sql);
while($kat = mysqli_fetch_assoc($result)){
    echo "<input type='radio' name='kat' value='".$kat['id']."'>".$kat['nazwa']."</input>";
}
?>
<input type="submit" value="Zatwierdź dodanie">
</form>  
<?php
session_start();
if(isset($_SESSION["info"])){
        echo "<p class='error'>".$_SESSION["info"]."</p>";
        unset($_SESSION['info']);
}
?>

</body>
</html>