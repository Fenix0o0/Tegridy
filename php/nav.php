<nav class="navbar navbar-expand-lg navbar-light bg-dark bg-gradient mb-3">
        <img src="img/logo.png" alt="Logo" class ="d-inline-block align-text-top" width="10%" height="10%">
                <div class="collapse navbar-collapse">
                <div class="navbar-nav ms-right text-center">
                <?php
                session_start();
                include('php/connect.php');
                if(isset($_SESSION['klient'])){
                $sql = "SELECT imie, nazwisko, adres, mail, administrator from klienci where id='".$_SESSION['klient']."'";
                $result = mysqli_query($connect, $sql);
                $dane = mysqli_fetch_assoc($result);
                    if($dane['administrator'] == 1){
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' aria-current='page' href='sklep.php'>Sklep</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='dodajProdukt.php'>Dodawanie Produktów</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='listaProdukt.php'>Lista Produktów</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='zamowienia.php'>Zamowienia</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='php/wylogowanie.php'>Wyloguj</a>";
                    }else{
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' aria-current='page' href='sklep.php'>Sklep</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='mojeZamowienia.php'>Moje Zamowienia</a>";
                        echo "<a class='nav-link text-white btn btn-outline-light me-2' href='php/wylogowanie.php'>Wyloguj</a>";
                    }
                }else if(isset($_GET['rejestracja']) && $_GET['rejestracja']=='yes'){
                    echo "<h2>Rejestracja</h2>";
                }else{
                    echo "<h2>Logowanie</h2>";
                    if($_SERVER['PHP_SELF'] != $_SESSION['logowanie_adres']){header('location:index.php');} //sprawdza czy się nie łazi po stronie bez zalogowania i wyrzuca ewentualnie na strone logowania
                }
                ?>
                </div>
                </div>
        </nav>