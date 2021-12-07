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
<body class="bg-secondary bg-gradient">
<header>
        <?php 
        include('php/nav.php');
         ?>
</header>
<div class="mx-auto" style="width: 500px;">
<form action="php/logowanie.php" method="POST">
<div class="form-group">
<label>Login: </label>
<input type="text" name="login" class="form-control">
</div>
<div class="form-group">
<label>Hasło: </label>
<input type="password" name="passwd" class="form-control">
</div>
<label></label>
<div class="form-group">
<input type="submit" value="Loguj!" class="form-control mx-auto" style="width: 100px;">
</div>
</form>  

<?php
if(isset($_SESSION["Err"])){
        echo "<p class='error'>".$_SESSION["Err"]."</p>";
        session_unset();
}
?>
<div class="form-group mx-auto mb-auto">
<p>Nie masz konta?<a href="rejestracja.php?rejestracja=yes"> Zarejestruj!</a></p>
</div>
</div>
</body>
</html>