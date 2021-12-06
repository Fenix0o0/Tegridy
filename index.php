<!DOCTYPE html>
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
        <?php 
        include('php/nav.php');
         ?>
</header>
<form action="php/logowanie.php" method="POST">
<label>Login: </label>
<input type="text" name="login">
<label>Hasło: </label>
<input type="password" name="passwd">
<input type="submit" value="Loguj!">
</form>  
<?php
if(isset($_SESSION["Err"])){
        echo "<p class='error'>".$_SESSION["Err"]."</p>";
        session_unset();
}
?>
<a href="rejestracja.php?rejestracja=yes">Rejestracja</a>
</body>
</html>