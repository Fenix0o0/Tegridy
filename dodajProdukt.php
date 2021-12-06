<!DOCTYPE html>
<html>
<head>
<title>Tegridy Farm's-dodawanie</title>
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
<h2>Dodawanie Produktu</h2>
<form action="php/dodawanie.php?opcja=0" method="POST">
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
<select name='kat'>
<?php
$sql = "SELECT id, nazwaKat from kategorie";
$result = mysqli_query($connect, $sql);
while($kat = mysqli_fetch_assoc($result)){
    echo "<option value='".$kat['id']."'>".$kat['nazwaKat']."</option>";
}
?>
</select>
<input type="submit" value="Zatwierdź dodanie">
</form>  
<h2>Dodaj kategorie</h2>
<form method="post"  action='php/dodajKategorie.php'>
    <input type='text' name='nazwa' placeholder="nazwa">
    <input type='text' name='opis' placeholder="opis">
    <input type='submit' placeholder="Dodaj">
</form>

<?php
include('php/alert.php');
?>

</body>
</html>