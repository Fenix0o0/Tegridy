<!DOCTYPE html>
<html>
<head>
<title>Tegridy Farm's-rejestracja</title>
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="log">
    <img src="IMG/logo.png" alt="rolnik">
    <h1>Tegridy's Farm</h1>
    <p>Zarejestruj się</p>
</div>
<img id="recznik" src="IMG/recznik.png" alt="recznik">
<img id="randy" src="IMG/randy.png" alt="randy">
<div class="rej">
    <form action="php/rejestracjaSkrypt.php" method="POST">
    <div id="pola">
        <label>Imie</label>
        <input type="text" name="imie">
    </div>
    <div id="pola">
        <label>Nazwisko</label>
        <input type="text" name="nazwisko">
    </div>
    <div id="pola">
        <label>Login</label>
        <input type="text" name="login">
    </div>
    <div id="pola">
        <label>Hasło</label>
        <input type="password" name="haslo" id="passwd">
    </div>
    <div id="pola">
        <label>Powtórz Hasło</label>
        <input type="password" name="chkpsswd" id="passwdchk">
    </div>
    <div id="pola">
        <label>E-Mail</label>
        <input type="email" name="mail">
    </div>
    <div id="pola">
        <label>Adress*</label>
        <input type="text" name="adress">
    </div>
    <div id="pola">
        <input type="submit" name="rejestracja" value="SIGN IN">
    </div>
    <form>
      <?php
session_start();
if(isset($_SESSION["Err"])){
        echo "<p class='error'>".$_SESSION["Err"]."</p>";
        session_unset();
}
?>  
</div>



</body>
</html>