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
<body class="bg-secondary bg-gradient text-white">
<header>
<?php include('php/nav.php'); ?>
</header>
<div class="d-flex justify-content-evenly">
<img src="IMG/recznik.png" class="rounded float-left" alt="recznik" id="recznik">

<div class="mx-auto" style="width: 500px;">
<form action="php/rejestracjaSkrypt.php" method="POST">
    <div class="form-group">
        <label>Imie</label>
        <input type="text" name="imie" class="form-control" placeholder="Podaj swoje imie">
    </div>
    <div class="form-group">
        <label>Nazwisko</label>
        <input type="text" name="nazwisko" class="form-control" placeholder="Podaj swoje nazwisko">
    </div>
    <div class="form-group">
        <label>Login</label>
        <input type="text" name="login" class="form-control" placeholder="Podaj Login">
    </div>
    <div class="form-group">
        <label>Hasło</label>
        <input type="password" name="haslo" id="passwd" class="form-control" placeholder="Podaj Haslo">
    </div>
    <div class="form-group">
        <label>Powtórz Hasło</label>
        <input type="password" name="chkpsswd" id="passwdchk" class="form-control" placeholder="Powtórz Haslo">
    </div>
    <div class="form-group">
        <label>E-Mail</label>
        <input type="email" name="mail" class="form-control" placeholder="Podaj E-Mail">
    </div>
    <div class="form-group">
        <label>Adress*</label>
        <input type="text" name="adress" class="form-control" placeholder="Podaj Adres">
    </div>
    <div class="form-group">
        <input type="submit" name="rejestracja" value="SIGN IN" class="btn btn-secondary form-control mx-auto">
    </div>
</form>
</div>
<img src="IMG/randy.png" class="rounded float-right" alt="randy" id="randy">
</div>
      <?php
if(isset($_SESSION["Err"])){
        echo "<p class='error'>".$_SESSION["Err"]."</p>";
        session_unset();
}
?>  
</div>
</body>
</html>