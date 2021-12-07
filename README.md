# Tegridy Farms

# Storona na zaliczenie na Pracownie Aplikacji Internetowych

# Wykonał Konrad Zawosjki oraz Olaf Ziemkiewicz

# Logowanie

    Przy logowaniu z formularza pobrane jest login i hasło, jeśli podany login nie istnieje wraca na stronę logowania, jeśli hasło jest błędne wraca na stronę logowania, jeśli oba się zgadzają przechodzi na stronę sklepu wraz z zapisanym w zmiennej sesyjnej "klient" id klienta z bazy danych.

# Rejestracja

    Przy rejestracji formularz pobiera dane metodą POST i przenosi je do rejestracjaSkrypt.php gdzie jeśli login nie został  zostanie on zastąpiony podanym przez użytkownika mailem. Jeśli podany login nie jest już zajęty, hasła się od siebie nie różnią oraz wszystkie wymagane pola zostały uzupełnione to zapytanie INSERT jest wysyłane do bazy danych. Tworzy tylko konta klienta, administrator musi zostać przypisany w bazie danych.

# Strona Sklepu oraz składanie zamówień

    Po przekierowaniu na stronę zostają dynamicznie załadowane elementy reprezentujące produkty w sklepie
    wraz z przyciskiem do składania zamówienia po wpisaniu w pole ilości kupowanego produktu (min=1).
    Dane ilości oraz produktu zostają przesłane na podstronę zlecenie.php gdzie tworzone jest zlecenie oraz usuwana jest "kupiona" ilość z aktualnej liczby produktów. Jeśli ilość produktów osiąhnie równo lub mniej niż 0 to w polu wpisywania ilości produktu wyświetli się "Brak produktu".

# Podstrona Moje Zamówienia

    Strona wyświetla dynamicznie listę w postaci tabeli z zamówieniami klienta oraz status zamówienia. Status zamówienia zostaje przypisany podczas tworzenia zamówienia. Jeśli ilość produktu >= 0 to zostaje przypisany status "OCZEKUJĄCY", a jeśli ilość produktu < 0 to status będzie "WSTRZYMANO". Status może zostać zmieniony przez administratora. Na stronie Moje Zamówienia użytkownik może także usunąć swoje zamówienie.

# Navbar

    Navbar jest inny dla strony administratora, klienta, rejestracji, logowania. Jeśli w kolumnie 'administrator' jest wartość 1 to wyświetla się zawartość dla administratora, jeśli nie to wyświetli się klient, jeśli nie będzie istniała zmienna sesyjna "klient" to wyświetli się logowanie, a jeśli w linku znajdzie się rejestracja i będzie ona mieć wartość 'yes' to wyświetli się rejestracja.

# Dodawanie Produktu

    Można wejść tylko przez konto administratora. Formularz w metodzie POST przesyła wartości do podstrony "dodawnie.php" gdzie jeśli podana nazwa będzie zajęta to wyświetli komunikat z informacją i możliwością przejścia do edytowania produktu lub utworzeniem nowego produktu o tej samej nazwie. Sposób dodawania taki sam jak przy rejestracji użytkownika.

# Lista Produktów

    Można wejść tylko przez konto administratora. Formularz w metodzie POST przesyła wartości do podstrony
    "edycja.php" gdzie jeśli któraś z rubryk nie została zapisana zostaje ona uzupełniona przez wartość z bazy danych. Edytowane przez zapytanie UPDATE. Ilość produktów w edycji to dodanie wpianej ilości do ilości znajdującej się aktualnie w bazie danych dla danego produktu.

# Usuwanie

    Ununięcie produktu usuwa cały record z tabeli dla obietku z id danego produktu podanego medotą GET. Usuwanie odbywa się w pliku usuwanie.php. W tym samym pilku wykonuje się usuwanie zlecenia. Usunięcie zlecenia czy produktu jest zależne od zmiennej znajdującej się w adresie.

# Zamówienia

    Strona dla administratora w której wyświetlają sie wszystkie zamówienia i gdzie może zmienić ich status.

# Wylogowanie

    Wylogowanie odbywa się po wciśnięciu wyloguj gdzie początkowo przekierowywuje na podstronę wylogowanie.php gdzie usuwa zmienne sesyjne związane z klientem.
