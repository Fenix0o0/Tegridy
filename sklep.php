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
<?php include('php/nav.php'); ?>
</header>
<section>
<div class='container-md'>
    <?php
    include('php/alert.php');
    $sql = "SELECT * FROM produkty";
    $result = mysqli_query($connect, $sql);
        echo "<div class='row'>";
            while($produkty = mysqli_fetch_assoc($result)){
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="'.$produkty['obraz'].'" class="card-img-top" alt="Obrazek Produktu">';
                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">'.$produkty['nazwa'].'</h5>';
                        echo '<p class="card-text">'.$produkty['opis'].'</p>';
                        echo '<p>Cena: '.$produkty['cena'].'PLN</p>';
                        echo '<form method="POST" action="php/zlecenie.php?id='.$produkty['id'].'"><input type="number" name="ilosc" placeholder="Ilość: '.$produkty['ilosc'].'"><input type="Submit" class="btn btn-primary" placeholder="Zamów"></form>';
                        
                    echo '</div>';
                echo '</div>';
            }
        echo "</div>";
    ?>
</div>
</body>
</html>