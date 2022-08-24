# Notifiche programmate per REDAXO

Con questo addon, gli editori possono visualizzare nel frontend messaggi di notifica a tempo, che appaiono sia in determinati punti (come modulo), globalmente (come template), sia una volta (per essere cliccati via) o permanentemente (fino al data di scadenza).

Ad esempio per:

* Tempi di ferie, ferie e assenze
* Offerte speciali e promozioni limitate
* Difficoltà di consegna o restrizioni attuali

## caratteristiche

* Completamente implementato con **YForm** : tutte le funzionalità e le opzioni di personalizzazione di YForm disponibili
* Semplice: l'uscita è tramite [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) o orientata agli oggetti tramite [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flessibile: frammenti già pronti per avvisi e brindisi di Bootstrap 5
* Utile: solo **ruoli selezionati**/editor hanno accesso

> **Contribuisci con i tuoi miglioramenti** al repository GitHub [Notifiche](https://github.com/alexplusde/notification). Oppure **supporta questo componente aggiuntivo:** Con una sponsorizzazione [o un incarico sostieni l'ulteriore sviluppo di questo componente aggiuntivo](https://github.com/sponsors/alexplusde)

## installazione

Scarica e installa l'addon `notifica` nel programma di installazione di REDAXO. Apparirà quindi una nuova voce di menu `🔔 Notifiche`.

## Utilizzare nel front-end

### modulo di esempio

```php
notifica eco::getNotificationsOutput();
```

### La notifica di classe ``

Digitare `rex_yform_manager_dataset`. Accede alla tabella `rex_notification` con le notifiche.

#### Più metodi

```php
$notification = notifica::get(3); // notifica di id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## licenza

CON licenza, vedere [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## autori

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Responsabile del progetto**  
[Alexander Walther](https://github.com/alexplusde)

## crediti
