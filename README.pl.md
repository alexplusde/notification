# Zaplanowane powiadomienia dla REDAXO

Dzięki temu dodatkowi redaktorzy mogą wyświetlać w interfejsie wiadomości kontrolowane czasowo, które pojawiają się w określonych punktach (jako moduł), globalnie (jako szablon), a także jednorazowo (do kliknięcia) lub na stałe (do momentu Data wygaśnięcia).

Na przykład dla:

* Czasy urlopów, urlopów i nieobecności
* Oferty specjalne i limitowane promocje
* Trudności w dostawie lub aktualne ograniczenia

## cechy

* W pełni zaimplementowany z **YForm** : Dostępne wszystkie funkcje i opcje dostosowywania YForm
* Proste: wyjście jest przez [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) lub obiektowo przez [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Elastyczność: gotowe fragmenty alertów i toastów Bootstrap 5
* Przydatne: Tylko wybrane **ról**/edytorzy mają dostęp

> **Wnieś własne ulepszenia** do [Powiadomienia](https://github.com/alexplusde/notification) repozytorium GitHub. Lub **wesprzyj ten dodatek:** Ze sponsoringiem [lub przydziałem wspierasz dalszy rozwój tego dodatku](https://github.com/sponsors/alexplusde)

## instalacja

Pobierz i zainstaluj powiadomienie</code> dodatku `w instalatorze REDAXO. Pojawi się nowy punkt menu <code>🔔 Powiadomienia`.

## Użyj w interfejsie

### przykładowy moduł

```php
powiadomienie echa::getNotificationsOutput();
```

### Powiadomienie klasy ``

Wpisz `rex_yform_manager_dataset`. Uzyskuje dostęp do tabeli `rex_notification` z powiadomieniami.

#### Więcej metod

```php
$notification = powiadomienie::get(3); // powiadomienie o id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## licencja

Z licencją, patrz [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## autorski

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Kierownik projektu**  
[Alexander Walther](https://github.com/alexplusde)

## kredyty
