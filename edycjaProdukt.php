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
<body class="bg-secondary bg-gradient">
<header>
<?php include('php/nav.php'); ?>
</header>
<div class="mx-auto" style="width: 500px;">
<div class="form-group">
<h2>Edytowanie Produktu</h2>
<form action="php/edycja.php" method="POST">
</div>
<div class="form-group">
<label>Nazwa: </label>
<input type="text" name="nazwa" class="form-control">
</div>
<div class="form-group">
<label>Opis: </label>
<input type="text" name="opis" class="form-control">
</div>
<div class="form-group">
<label>Cena: </label>
<input type="number" name="cena" class="form-control">
</div>
<div class="form-group">
<label>Ilość: </label>
<input type="number" name="ilosc" class="form-control">
</div>
<div class="form-group">
<label>Obrazek: </label>
<input type="text" name="obraz" class="form-control">
</div>
<div class="form-group">
<label>Kategorie:</label>
</div>
<div class="form-group">
<?php
include('php/connect.php');
$sql = "SELECT id, nazwaKat from kategorie";
$result = mysqli_query($connect, $sql);
while($kat = mysqli_fetch_assoc($result)){
    echo "<input type='radio' class='group' name='kat' value='".$kat['id']."'>".$kat['nazwaKat']."</input>";
}
?>
</div>
<div class="form-group">
<input type="submit" value="Zatwierdź Edycje" class="form-control mx-auto" style="width: 150px;">
</form>
</div>
</div>
<?php
include('php/alert.php');
$_SESSION['id'] = $_GET['id'];



?>

</body>
</html>