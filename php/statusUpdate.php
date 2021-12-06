<?php
include('connect.php');
$status = $_POST['status'];
$sql_status = "UPDATE zamowienia SET status='$status' WHERE id='".$_GET['id']."'";
$result = mysqli_query($connect, $sql_status);
header("location:../zamowienia.php");
?>