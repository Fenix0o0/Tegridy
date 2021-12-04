<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="img/logo.png" alt="Logo" class ="d-inline-block align-text-top" width="10%" height="10%">
                <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                <?php
                session_start();
                include('php/connect.php');
                if(isset($_SESSION['klient'])){
                $sql = "SELECT imie, nazwisko, adres, mail, administrator from klienci where id='".$_SESSION['klient']."'";
                $result = mysqli_query($connect, $sql);
                $dane = mysqli_fetch_assoc($result);
                    if($dane['administrator'] == 1){
                            echo "<a class='nav-link active' aria-current='page' href='sklep.php'>Sklep</a>";
                            echo "<a class='nav-link' href='dodajProdukt.php'>Dodawanie Produktów</a>";
                            echo "<a class='nav-link' href='listaProdukt.php'>Lista Produktów</a>";
                            echo "<a class='nav-link disabled' href='listaKlentow.php' tabindex='-1' aria-disabled='true'>Lista Klientów</a>";
                            echo "<a class='nav-link' href='zamowienia.php'>Zamowienia</a>";
                            echo "<a class='nav-link' href='php/wylogowanie.php'>Wyloguj</a>";
                    }else{
                            echo "<ul class='navbar-nav'><li class='nav-item'><a class='nav-link' href='mojeZamowienia.php?klient=".$_SESSION['klient']."'>Moje Zamowienia</a></li>";
                            echo "<li class='nav-item'><a class='nav-link active' href='php/wylogowanie.php'>Wyloguj</a></li></ul>";
                    }
                }else{
                    echo "<h2>Logowanie</h2>";
                }
                ?>
                </div>
                </div>
        </nav>