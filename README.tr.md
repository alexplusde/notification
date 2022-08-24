# REDAXO için programlanmış bildirimler

Bu eklenti ile editörler, belirli noktalarda (bir modül olarak), global olarak (bir şablon olarak) ve ayrıca bir kez (tıklanacak) veya kalıcı olarak (sonraya kadar) görünen zaman kontrollü bildirim mesajlarını ön uçta görüntüleyebilir. son kullanma tarihi).

Örneğin:

* İzin, tatil ve devamsızlık süreleri
* Özel teklifler ve sınırlı promosyonlar
* Teslimat zorlukları veya mevcut kısıtlamalar

## özellikleri

* **YForm** ile tamamen uygulandı: YForm'un tüm özellikleri ve özelleştirme seçenekleri mevcut
* Basit: Çıktı [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) üzerinden veya [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)üzerinden nesne yönelimli
* Esnek: Bootstrap 5 uyarıları ve tostları için hazır parçalar
* Faydalı: Yalnızca seçilen **rol**/düzenleyiciler erişebilir

> **Kendi geliştirmelerinizi** [Bildirimler](https://github.com/alexplusde/notification) GitHub deposuna katkıda bulunun. Veya **bu eklentiyi destekliyor:** [sponsorluk veya bir görevle bu eklentinin daha da geliştirilmesini destekliyorsunuz](https://github.com/sponsors/alexplusde)

## Kurulum

REDAXO yükleyicisinde eklenti `bildirim` indirin ve yükleyin. Yeni bir menü öğesi `🔔 Bildirimler`daha sonra görünecektir.

## Ön uçta kullanın

### örnek modül

```php
yankı bildirimi::getNotificationsOutput();
```

### sınıf `bildirim`

`rex_yform_manager_dataset`yazın. Bildirimlerle tablo `rex_notification` erişir.

#### Daha fazla yöntem

```php
$notification = bildirim::get(3); // id=3 bildirimi

echo $notification->getName();
yankı $notification->getDateFrom();
echo $notification->getDateTo();
yankı $notification->getType();
yankı $notification->getStatus();
yankı $notification->isVisible();
```

## lisans

Lisans İLE, bkz. [LICENSE.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## yazarlar

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Proje lideri**  
[Alexander Walther](https://github.com/alexplusde)

## kredi
