# Geplangte Notifikatiounen fir REDAXO

Mat dësem Addon kënnen d'Redaktoren Zäitkontrolléiert Notifikatiounsmeldungen am Frontend weisen, déi entweder op bestëmmte Punkten (als Modul), global (als Schabloun), wéi och eemol (fir ewechgeklickt ze ginn) oder permanent (bis de Verfallsdatum).

Zum Beispill fir:

* Congé, Vakanz an Absence Zäiten
* Special Offeren a limitéiert Promotiounen
* Liwwerung Schwieregkeeten oder aktuell Restriktiounen

## Eegeschaften

* Voll implementéiert mat **YForm** : All Features an Personnalisatiounsoptioune vun YForm verfügbar
* Einfach: D'Ausgab ass iwwer [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) oder objektorientéiert iwwer [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flexibel: Fäerdeg Fragmenter fir Bootstrap 5 Alarmer an Toasts
* Nëtzlech: Nëmmen ausgewielt **Rollen**/ Redaktoren hunn Zougang

> **Bäidroen Är eege Verbesserungen** un den [Notifikatiounen](https://github.com/alexplusde/notification) GitHub Repository. Oder **ënnerstëtzt dësen Addon:** Mat engem [Sponsoring oder enger Aufgab ënnerstëtzt Dir d'Weiderentwécklung vun dësem Addon](https://github.com/sponsors/alexplusde)

## Installatioun

Eroflueden an installéieren den Addon `Notifikatioun` am REDAXO Installateur. En neit Menüpunkt `🔔 Notifikatiounen`erschéngt dann.

## Benotzt am Frontend

### Beispill Modul

```php
echo Notifikatioun :: getNotificationsOutput ();
```

### Klass `Notifikatioun`

Typ `rex_yform_manager_dataset`. Zougrëff op den Dësch `rex_notification` mat Notifikatiounen.

#### Méi Methoden

```php
$notification = Notifikatioun::get(3); // Notifikatioun vun ID = 3

Echo $notification->getName ();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible ();
```

## Lizenz

MAT Lizenz, kuckt [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## Auteuren

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Projektleit**  
[Alexander Walther](https://github.com/alexplusde)

## Kreditter
