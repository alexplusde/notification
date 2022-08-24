# Notifications programmées pour REDAXO

Avec cet addon, les éditeurs peuvent afficher des messages de notification contrôlés dans le temps dans le frontend, qui apparaissent soit à certains moments (en tant que module), globalement (en tant que modèle) et une fois (à cliquer) ou en permanence (jusqu'à la date d'expiration) .

Par exemple pour :

* Jours fériés, congés et absences
* Offres spéciales et promotions limitées
* Difficultés de livraison ou restrictions actuelles

## Caractéristiques

* Entièrement implémenté avec **YForm** : Toutes les fonctionnalités et options de personnalisation de YForm disponibles
* Simple : la sortie est via [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) ou orientée objet via [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flexible : Fragments prêts à l'emploi pour les alertes et toasts Bootstrap 5
* Utile : Seuls les rôles **sélectionnés**/éditeurs ont accès

> **Apportez vos propres améliorations** au référentiel [Notifications](https://github.com/alexplusde/notification) GitHub. Ou **soutenez cet addon :** Avec un [parrainage ou une mission, vous soutenez le développement ultérieur de cet addon](https://github.com/sponsors/alexplusde)

## installation

Téléchargez et installez l'addon `notification` dans le programme d'installation de REDAXO. Un nouvel élément de menu `🔔 Notifications`apparaîtra alors.

## Utilisation dans le frontend

### module d'exemple

```php
notification d'écho ::getNotificationsOutput();
```

### La notification de classe ``

Saisissez `rex_yform_manager_dataset`. Accède à la table `rex_notification` avec les notifications.

#### Plus de méthodes

```php
$notification = notification::get(3); // notification de id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## Licence

AVEC licence, voir [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## auteurs

**Alexandre Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Chef de projet**  
[Alexander Walther](https://github.com/alexplusde)

## crédits
