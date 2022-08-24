# Notificări programate pentru REDAXO

Cu acest supliment, editorii pot afișa mesaje de notificare controlate în timp în interfață, care apar fie în anumite puncte (ca modul), global (ca șablon), precum și o dată (pentru a fi făcute clic) sau permanent (până la Data de expirare).

De exemplu pentru:

* Perioadele de concediu, concediu și absențe
* Oferte speciale și promoții limitate
* Dificultăți de livrare sau restricții actuale

## Caracteristici

* Implementat complet cu **YForm** : Toate caracteristicile și opțiunile de personalizare ale YForm sunt disponibile
* Simplu: ieșirea este prin [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) sau orientată pe obiecte prin [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flexibil: fragmente gata făcute pentru alerte și toasts Bootstrap 5
* Util: doar **roluri selectate**/editori au acces

> **Contribuiți cu propriile îmbunătățiri** la depozitul [Notificări](https://github.com/alexplusde/notification) GitHub. Sau **sprijiniți acest supliment:** Cu o sponsorizare [sau o misiune susțineți dezvoltarea în continuare a acestui supliment](https://github.com/sponsors/alexplusde)

## instalare

Descărcați și instalați addonul `notificarea` în programul de instalare REDAXO. Va apărea apoi un nou element de meniu `🔔 Notificări`.

## Utilizați în frontend

### exemplu de modul

```php
echo notification::getNotificationsOutput();
```

### Notificarea clasa ``

Tastați `rex_yform_manager_dataset`. Accesează tabelul `rex_notification` cu notificări.

#### Mai multe metode

```php
$notification = notificare::get(3); // notificarea id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## licență

CU licență, vezi [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## autorii

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Conducător de proiect**  
[Alexander Walther](https://github.com/alexplusde)

## credite
