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
<body class="bg-secondary bg-gradient">
<header>
<?php include('php/nav.php'); ?>
</header>
<div class="mx-auto" style="width: 500px;">
<div class="form-group">
<h2>Dodawanie Produktu</h2>
<form action="php/dodawanie.php?opcja=0" method="POST">
<div class="form-group">
<label>Nazwa: </label>
<input type="text" name="nazwa" placeholder="Podaj nazwe" class="form-control">
</div>
<div class="form-group">
<label>Opis: </label>
<input type="text" name="opis" placeholder="Podaj opis" class="form-control">
</div>
<div class="form-group">
<label>Cena: </label>
<input type="number" name="cena" step="0.01" placeholder="Podaj cenę" class="form-control">
</div>
<div class="form-group">
<label>Ilość: </label>
<input type="number" name="ilosc" placeholder="Podaj ilość" class="form-control">
</div>
<div class="form-group">
<label>Obrazek: </label>
<input type="text" name="obraz" placeholder="Przekaż obraz" class="form-control">
</div>
<div class="form-group">
<label>Kategoria</label>
<select name='kat' class="form-control">
<?php
$sql = "SELECT id, nazwaKat from kategorie";
$result = mysqli_query($connect, $sql);
while($kat = mysqli_fetch_assoc($result)){
    echo "<option value='".$kat['id']."'>".$kat['nazwaKat']."</option>";
}
?>
</select>
</div>
<label></label>
<input type="submit" value="Zatwierdź dodanie" class="form-control mx-auto" style="width: 150px;">
</form>
</div>  
<h2>Dodaj kategorie</h2>
<form method="post"  action='php/dodajKategorie.php'>
<div class="form-group">
    <label>Podaj nazwę kategori: </label>
    <input type='text' name='nazwa' placeholder="nazwa" class="form-control">
</div>
<div class="form-group">
    <label>Podaj opis kategori: </label>
    <input type='text' name='opis' placeholder="opis" class="form-control">
</div>
<div class="form-group">
    <label></label>    
    <input type='submit' placeholder="Dodaj" class="form-control mx-auto" style="width: 80px;">
</div>
</form>
<label></label>
<?php
include('php/alert.php');
?>

</body>
</html>