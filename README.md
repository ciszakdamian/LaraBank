# LaraBank
Project from university Laravel course.

![transfer_page](https://github.com/ciszakdamian/LaraBank/blob/master/screenshots/transfer_page.png?raw=true)

## Project assumptions
 Aplikacja do zarządzania zbiorem danych oparta na WebService (muzyka, filmy, gry etc), która zawiera: 
 
- dodawanie nowych klientów banku i zarządzanie istniejącymi,
- uwierzytelnianie klientów w aplikacji
- przelewy między klientami banku (termin wykonania przelewu),
- historia operacji,
- wyświetlanie nazwy banku do którego realizowany jest przelew,
- walidacja danych
- wyświetlanie salda klienta (rachunek, karta kredytowa, kredyt

## Authors:
- **Damian Ciszak** 

### Requirements:
- PHP => 7.3 + php extensions (curl, soap)
- Composer
- Newer MariaDB or MySQL

- ###### Dev deployment:

![db_diagram](https://github.com/ciszakdamian/LaraBank/blob/master/screenshots/db-diagram.png?raw=true)

```
#clone repo
git clone git@github.com:ciszakdamian/LaraBank.git
cd LaraBank
composer install
vim .env <- set your empty database
php artisan migrate
php artisan serve
```

After deployed open in browser http://localhost:8080/

![register](https://raw.githubusercontent.com/ciszakdamian/LaraBank/master/screenshots/register.png)

![finance_page](https://github.com/ciszakdamian/LaraBank/blob/master/screenshots/finance_page.png?raw=true)

![history_page](https://github.com/ciszakdamian/LaraBank/blob/master/screenshots/history_page.png?raw=true)

