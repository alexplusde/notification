# الإخطارات المجدولة لـ REDAXO

باستخدام هذا الملحق ، يمكن للمحررين عرض رسائل الإشعارات التي يتم التحكم فيها بالوقت في الواجهة الأمامية ، والتي تظهر إما في نقاط معينة (كوحدة نمطية) ، أو عالميًا (كقالب) ومرة واحدة (يتم النقر فوقها بعيدًا) أو بشكل دائم (حتى تاريخ انتهاء الصلاحية) .

على سبيل المثال:

* أوقات الإجازة والعطلات والغياب
* عروض خاصة وعروض ترويجية محدودة
* صعوبات التسليم أو القيود الحالية

## الميزات

* تم التنفيذ بالكامل مع **YForm** : جميع الميزات وخيارات التخصيص الخاصة بـ YForm متاحة
* بسيط: الإخراج عبر [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) أو كائني التوجه عبر [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* مرنة: أجزاء جاهزة للتنبيهات والخبز المحمص Bootstrap 5
* مفيد: تم تحديد **فقط من الأدوار**/ يمكن للمحررين الوصول

> **ساهم بالتحسينات الخاصة بك** في مستودع جيثب [للإشعارات](https://github.com/alexplusde/notification). أو **ادعم هذا الملحق:** برعاية [أو مهمة ، فإنك تدعم التطوير الإضافي لهذا الملحق](https://github.com/sponsors/alexplusde)

## تثبيت

قم بتنزيل وتثبيت الإخطار</code> الإضافي `في مثبت REDAXO. سيظهر عنصر قائمة جديد <code>🔔 الإخطارات`.

## استخدم في الواجهة الأمامية

### نموذج وحدة

```php
إخطار الصدى :: getNotificationsOutput () ؛
```

### إخطار الفئة ``

اكتب `rex_yform_manager_dataset`. يصل إلى الجدول `rex_notification` مع الإخطارات.

#### المزيد من الطرق

```php
$notification = إعلام :: الحصول على (3) ؛ // إعلام المعرف = 3

echo $notification->getName () ؛
صدى $notification>() ؛
echo $notification>() ؛
صدى $notification>() ؛
صدى $notification>() ؛
صدى $notification>() ؛
```

## رخصة

مع الترخيص ، انظر [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## المؤلفون

**الكسندر والثر**  
http://www.alexplus.de  
https://github.com/alexplusde

**قيادة المشروع**  
[Alexander Walther](https://github.com/alexplusde)

## الاعتمادات
