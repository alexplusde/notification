# Zeitgesteuerte Benachrichtigungen für YCom-Nutzer

Mit diesem Plugin können Hinweis-Nachrichten im Frontend angezeigt werden, die entweder an bestimmten Stellen (als Modul), global (als Template) sowie einmalig (zum Wegklicken) oder dauerhaft (bis zum Ablauf-Datum) erscheinen.

Im Gegensatz zum Haupt-Addon wird pro YCom-Nutzer festgehalten und dauerhaft gespeichert, welche Benachrichtigungen bereits gezeigt wurden und welche noch nicht. Erst durch Nutzer-Interaktion werden die Benachrichtigungen ausgeblendet.

## Nutzung im Frontend

### Beispiel-Modul

```php
echo notification_ycom::getNotificationsOutput();
```

### Die Klasse `notification`

Typ `rex_yform_manager_dataset`. Greift auf die Tabelle `rex_notification_ycom` mit Benachrichtigungen zu.

#### Weitere Methoden

```php
$notification = notification::get(3); // Benachrichtigung der id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## Lizenz

MIT Lizenz, siehe [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)  

## Autoren

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde  

**Projekt-Lead**  
[Alexander Walther](https://github.com/alexplusde)

## Credits
