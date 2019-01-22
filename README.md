# datingPBAW
 Projekt jest serwisem randkowym, działającym podobnie do facebooka, lecz skupiającym się na poszukiwaniu partnera życiowego.
 Ważnym aspektem strony jest personalizacja swojego konta poprzez dodawanie licznych postów i opisów, jak i rozmowa ze znajomymi.
 


## Każdy użytkownik ma dostęp do:
- strony głównej,
- listy użytkowników (możliwe jest wyszukanie osoby),
- swojego profilu - dostępne jest dodanie nowych opisów,
- edycji profilu,
- listy znajomych (możliwa jest rozmowa ze znajomymi),
- do profili innych użytkowników, możliwość dodania i usunięcia ich ze znajomych,

## Niezarejstrowana osoba ma dostęp do:
- strony głównej,
- listy użytkowników bez wglądu do profili,
- rejestracja konta,

## Baza danych składa się z takich tabeli (i ich pól)jak:
### Zawiera dane logowania jak i podstawowe  informacje o osobie
- users (id, name, pass,role, gender, email, prefM, prefW, nation, city, age, height, complex, ecolor, hcolor,image),
### Zawiera opisy charakteru, przeżyć danej osoby
- post (data_desc, text, id, id_desc, title),
### Lista znajomych
- friend (Id_person1, id_person2, type)
### Wiadomości między znajomymi
- msg (sender, receiver, id_msg, date_msg, message),


## Wykorzystane technologie:
- PHP 
- Framework Laravel


# Jak uruchomić projekt
1. Pobierz composera (https://getcomposer.org/download/).
2.Pobierz xamppp (https://www.apachefriends.org/pl/download.html) i zainstaluj jego wraz z serwerem apache i mysql.
3. Pobierz projekt z GitHub i rozpakuj go.
4. W wierszu poleceń wpisz : cd [ścieżka gdzie chcesz zaistalować composera], następnie wpisz komendę composer init composer init stworzy plik composer.json niezbędny do utworzenia projektu.
5.Zainstaluj composera : composer install [np: C:\xampp\htdocs\composer] (musisz być w folderze, w którym chcesz go zainstalować)
6. Wklej cały projekt do C:\xampp\htdocs\composer
7. Włącz xampp (naciśnij koło Apache : config)
8. Zmień w pliku httpd.conf : DocumentRoot "C:/xampp/htdocs/composer" oraz <Directory "C:/xampp/htdocs/composer">.
9. Włącz Apache i MySQL.
10. Włącz przeglądarkę i wpisz : http://localhost/datingSite-master



# Instrukcja użytkowania
## Funkcje strony:
#### STRONA GŁÓWNA
Zawiera ona opis niektórych funkcji systemu oraz jest wprowadzeniem do tematyki portalu.

#### PRZEGLĄDAJ
Zawiera listę osób zarejestrowanych na stronie oraz daje możliwość wyszukiwania użytkowników o podanych cechach.
Jeżeli jesteś zalogowanym użytkownikiem możesz także zobaczyć profil każdego z użytkowników.

#### PROFIL
Po wyborze osoby z listy wyświetli się jej profil. Profil użytkownika zawiera: nazwę użytkownika, jego wiek, miejsce zamieszkania, płeć, jakie ma preferencje, wzrost, kolor oczu, włosów, cerę. Wyświetla także zdjęcie użytkownika jak i wpisy przez niego dodane.
Oprócz tego możemy zobaczyć znajomych danej osoby jak i dodać lub usunąć ją ze znajomych.

#### ZALOGUJ I ZAREJESTRUJ
Aby uzyskać dostęp do większej ilości funkcji potrzebne jest zarejstrowanie konta lub zalogowanie na już istniejące.
Formularz rejestracyjny można uruchomić poprzez wejście na zakładkę REJESTRACJA na górze strony.
W chwili uruchomienia funkcji przeznaczonej tylko dla zalogowanych użytkowników strona przekieruje Ciebie do formularza logowania.

#### MÓJ PROFIL
Po zalogowaniu widoczna jest nowa zakładka. Wyświetla ona naszą nazwę użytkownika. Po ustawieniu na niej kursora lub przyciśnięciu wyświetli ona nowe dostępne funkcje.
Pierwszą z nich jest szybkie uruchomienie naszego profilu - poprzez wybranie pierwszej opcji Profil.
Oprócz wyświetlenia naszego konta, możemy dodać wpisy, które będą widoczne dla wszystkich użytkowników.

#### EDYTUJ PROFIL
Po utworzeniu konta możliwa jest zmiana informacji o sobie. Jest to kolejna funkcja znajdująca się w menu rozwijanym.

#### MOI ZNAJOMI
Po dodaniu użytkowników do znajomych możemy ich znaleźć w zakładce Znajomi w menu rozwijanym.  Po wyświetleniu listy możliwe jest wyszukanie użytkowników o podanych cechach.
Po wybraniu użytkownika z listy wyświetli się Chat, dzięki któremu możliwa jest rozmowa z danych użytkownikiem.

#### Znajomi
Jak wcześniej wspomniano możliwe jest także wyświetlenie znajomych innych użytkowników wraz z wyszukiwaniem.

#### WYLOGUJ
Jest to ostatnia z funkcji menu rozwijanego.

#### STRONICOWANIE
Lista użytkowników jest stronicowana. Ta funkcja dostępna jest także podczas wyszukiwania.
