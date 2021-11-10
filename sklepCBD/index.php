<!DOCUMENT html>
<html>
<head>
<title>Tegridy Farm's</title>
<link rel = "icon" href = "https://i.pinimg.com/564x/56/16/ca/5616cabd8217f23495a727d1c2319cec.jpg" 
        type = "image/x-icon">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="log">
    <h1>Rejestracja</h1>
    <form method="POST">
        <label>Imie</label>
        <input type="text" name="imie">

        <label>Nazwisko</label>
        <input type="text" name="nazwisko">

        <label>Login</label>
        <input type="text" name="login">

        <label>Hasło</label>
        <input type="passowrd" name="haslo" id="passwd">

        <label>Powtórz Hasło</label>
        <input type="passowrd" name="chkpsswd" id="passwdchk">

        <label>E-Mail</label>
        <input type="mail" name="mail">

        <label>Adress*</label>
        <input type="text" name="adress">

        <input type="submit" name="rejestracja" value="SIGN IN">
    <form>
</div>
<?php
if(isset($_POST['login'])){
    $login = $_POST['login'];
}else{
    $login = $_POST['mail'];
}

$connect = mysqli_connect('localhost', 'root', '', 'tegridyfarms');
if($_POST['chkpsswd'] == $_POST['haslo']){
    if(isset($login) && isset($_POST['haslo']) && isset($_POST['mail']) && isset($_POST['imie']) && isset($_POST['nazwisko'])){


    $sql = "INSERT INTO `klienci` (`Id`, `Imie`, `Nazwisko`, `Adres`, `mail`, `haslo`, `login`, `administrator`) VALUES (NULL, '', '', '', '', '', '', '')";
    $result = mysqli_query($connect, $sql);
    }
}
?>
</body>
</html>