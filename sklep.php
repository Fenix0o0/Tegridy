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
<img src="logo.png" alt="Logo" class ="logo">
<h2>Witaj w sklepie!</h2>
<?php
include('connect.php');
$sql = "SELECT imie, nazwisko, adres, mail, administrator from klienci where id='".$_GET['klient']."'";
$result = mysqli_query($connect, $sql);
$dane = mysqli_fetch_assoc($result);
if($dane['administrator'] == 1){
    echo "<div><p>Konto administratorskie</p>";
    echo "</div>";
}else{
    echo "<div><p>Konto Klienta</p></div>";
}
?>
</header>
<section>
    <h2> Produkty </h2>
<?php
$sql = "SELECT * FROM produkty";
$result = mysqli_query($connect, $sql);
echo "<div>";
while($produkty = mysqli_fetch_assoc($result)){
    echo "<div class='produkt'><p>".$produkty['nazwa']."</p>";
    echo "<p>".$produkty['opis']."</p></div>";
}
echo "</div>";
?>

</body>
</html>