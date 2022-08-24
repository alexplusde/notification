# Načrtovana obvestila za REDAXO

S tem dodatkom lahko uredniki v sprednjem delu prikažejo časovno nadzorovana obvestilna sporočila, ki se prikažejo na določenih točkah (kot modul), globalno (kot predloga), pa tudi enkrat (ki jih je treba klikniti) ali trajno (dokler rok uporabnosti).

Na primer za:

* Čas dopusta, počitnic in odsotnosti
* Posebne ponudbe in omejene promocije
* Težave pri dostavi ali trenutne omejitve

## Lastnosti

* V celoti implementirano z **YForm** : na voljo so vse funkcije in možnosti prilagajanja YForm
* Preprosto: izhod je prek [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) ali objektno usmerjen prek [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Prilagodljivo: že pripravljeni fragmenti za opozorila in zdravice Bootstrap 5
* Uporabno: Samo izbranih **vlog**/ uredniki imajo dostop

> **Prispevajte svoje izboljšave** v repozitorij [Obvestila](https://github.com/alexplusde/notification) GitHub. Ali **podprite ta dodatek:** S sponzorstvom [ali dodelitvijo podpirate nadaljnji razvoj tega dodatka](https://github.com/sponsors/alexplusde)

## namestitev

Prenesite in namestite obvestilo addon `` v namestitvenem programu REDAXO. Nato se prikaže nov menijski element `🔔 Obvestila`.

## Uporabite v sprednjem delu

### primer modula

```php
echo notification::getNotificationsOutput();
```

### Obvestilo razreda ``

Vnesite `rex_yform_manager_dataset`. Dostopa do tabele `rex_notification` z obvestili.

#### Več metod

```php
$notification = obvestilo::dobi(3); // obvestilo id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## dovoljenje

Z licenco glejte [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## avtorji

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Vodja projekta**  
[Alexander Walther](https://github.com/alexplusde)

## krediti
