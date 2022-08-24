# Προγραμματισμένες ειδοποιήσεις για το REDAXO

Με αυτό το πρόσθετο, οι συντάκτες μπορούν να εμφανίζουν μηνύματα ειδοποιήσεων ελεγχόμενα από το χρόνο στο frontend, τα οποία εμφανίζονται είτε σε ορισμένα σημεία (ως λειτουργική μονάδα), καθολικά (ως πρότυπο) και μία φορά (για να αφαιρεθεί το κλικ) είτε μόνιμα (μέχρι την ημερομηνία λήξης) .

Για παράδειγμα για:

* Χρόνοι διακοπών, διακοπών και απουσιών
* Ειδικές προσφορές και περιορισμένες προσφορές
* Δυσκολίες παράδοσης ή τρέχοντες περιορισμοί

## χαρακτηριστικά

* Πλήρως υλοποιημένο με **YForm** : Όλες οι δυνατότητες και οι επιλογές προσαρμογής του YForm είναι διαθέσιμες
* Απλό: Η έξοδος είναι μέσω [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) ή αντικειμενοστραφής μέσω [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Ευέλικτο: Έτοιμα κομμάτια για ειδοποιήσεις Bootstrap 5 και τοστ
* Χρήσιμο: Μόνο επιλεγμένοι **ρόλοι**/συντάκτες έχουν πρόσβαση

> **Συνεισφέρετε τις δικές σας βελτιώσεις** στο αποθετήριο [ειδοποιήσεων](https://github.com/alexplusde/notification) του GitHub. Ή **υποστηρίζετε αυτό το πρόσθετο:** Με μια χορηγία [ή μια ανάθεση υποστηρίζετε την περαιτέρω ανάπτυξη αυτού του πρόσθετου](https://github.com/sponsors/alexplusde)

## εγκατάσταση

Κατεβάστε και εγκαταστήστε την ειδοποίηση</code> του πρόσθετου `στο πρόγραμμα εγκατάστασης REDAXO. Στη συνέχεια θα εμφανιστεί ένα νέο στοιχείο μενού <code>🔔 Ειδοποιήσεις`.

## Χρήση στο μπροστινό μέρος

### παράδειγμα ενότητας

```php
echo notification::getNotificationsOutput();
```

### Ειδοποίηση κλάσης ``

Πληκτρολογήστε `rex_yform_manager_dataset`. Αποκτά πρόσβαση στον πίνακα `rex_notification` με ειδοποιήσεις.

#### Περισσότερες μέθοδοι

```php
$notification = ειδοποίηση::get(3); // ειδοποίηση id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## άδεια

ΜΕ άδεια, βλέπε [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## συγγραφείς

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Υπεύθυνος έργου**  
[Alexander Walther](https://github.com/alexplusde)

## πιστώσεις
