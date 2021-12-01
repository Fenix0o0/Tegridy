<?php
session_start();
if(isset($_SESSION["info"])){
        echo "<p class='error'>".$_SESSION["info"]."</p>";
        unset($_SESSION['info']);
}
?>