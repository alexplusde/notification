# Scheduled notifications for REDAXO

With this addon, editors can display time-controlled notification messages in the frontend, which appear either at certain points (as a module), globally (as a template), as well as once (to be clicked away) or permanently (until the expiry date).

For example for:

* Leave, vacation and absence times
* Special offers and limited promotions
* Delivery difficulties or current restrictions

## features

* Fully implemented with **YForm** : All features and customization options of YForm available
* Simple: The output is via [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) or object-oriented via [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flexible: Ready-made fragments for Bootstrap 5 alerts and toasts
* Useful: Only selected **roles**/editors have access

> **Contribute your own improvements** to the [Notifications](https://github.com/alexplusde/notification) GitHub repository. Or **support this addon:** With a [sponsorship or an assignment you support the further development of this addon](https://github.com/sponsors/alexplusde)

## installation

Download and install the addon `notification` in the REDAXO installer. A new menu item `🔔 Notifications`will then appear.

## Use in the frontend

### example module

```php
echo notification::getNotificationsOutput();
```

### The class `notification`

Type `rex_yform_manager_dataset`. Accesses the table `rex_notification` with notifications.

#### More methods

```php
$notification = notification::get(3); // notification of id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## license

WITH license, see [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## authors

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Project lead**  
[Alexander Walther](https://github.com/alexplusde)

## credits
