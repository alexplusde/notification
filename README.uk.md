# Заплановані сповіщення для REDAXO

За допомогою цього аддона редактори можуть відображати контрольовані за часом повідомлення сповіщень у інтерфейсі, які з’являються або в певних точках (як модуль), глобально (як шаблон), а також один раз (для клацання) або постійно (доки термін придатності).

Наприклад для:

* Час відпусток, відпусток та відсутності
* Спеціальні пропозиції та обмежені акції
* Труднощі з доставкою або поточні обмеження

## особливості

* Повністю реалізовано з **YForm** : доступні всі функції та параметри налаштування YForm
* Простий: вихід здійснюється через [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) або об’єктно-орієнтований через [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Гнучкий: готові фрагменти для сповіщень і тостів Bootstrap 5
* Корисно: лише вибрані **ролей**/редактори мають доступ

> **Внесіть власні вдосконалення** у [Повідомлення](https://github.com/alexplusde/notification) репозиторій GitHub. Або **підтримайте цей аддон:** За допомогою [спонсорства або призначення ви підтримуєте подальший розвиток цього аддона](https://github.com/sponsors/alexplusde)

## установка

Завантажте та встановіть аддон `сповіщення` у програмі встановлення REDAXO. Потім з’явиться новий пункт меню `🔔 Сповіщення`.

## Використовуйте в інтерфейсі

### приклад модуля

```php
echo notification::getNotificationsOutput();
```

### Сповіщення класу ``

Тип `rex_yform_manager_dataset`. Отримує доступ до таблиці `rex_notification` зі сповіщеннями.

#### Більше методів

```php
$notification = сповіщення::отримати(3); // повідомлення про id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->getType();
echo $notification->getStatus();
echo $notification->isVisible();
```

## ліцензія

З ліцензією див. [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## авторів

**Олександр Вальтер**  
http://www.alexplus.de  
https://github.com/alexplusde

**Керівник проекту**  
[Олександр Вальтер](https://github.com/alexplusde)

## кредити
