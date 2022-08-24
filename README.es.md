# Notificaciones programadas para REDAXO

Con este complemento, los editores pueden mostrar mensajes de notificación controlados por tiempo en la interfaz, que aparecen en ciertos puntos (como un módulo), globalmente (como una plantilla), así como una vez (para hacer clic) o permanentemente (hasta que el fecha de caducidad).

Por ejemplo para:

* Vacaciones, vacaciones y tiempos de ausencia
* Ofertas especiales y promociones limitadas
* Dificultades de entrega o restricciones actuales

## caracteristicas

* Totalmente implementado con **YForm** : todas las funciones y opciones de personalización de YForm disponibles
* Simple: la salida es a través de [`rex_sql`](https://redaxo.org/doku/master/datenbank-queries) u orientada a objetos a través [YOrm](https://github.com/yakamara/redaxo_yform_docs/blob/master/de_de/yorm.md)
* Flexible: Fragmentos preparados para alertas y brindis de Bootstrap 5
* Útil: Solo los **roles seleccionados**/editores tienen acceso

> **Contribuya con sus propias mejoras** al repositorio de [Notificaciones](https://github.com/alexplusde/notification) GitHub. O **apoya este complemento:** Con un [patrocinio o una asignación, apoya el desarrollo posterior de este complemento](https://github.com/sponsors/alexplusde)

## instalación

Descarga e instala el complemento `notificación` en el instalador de REDAXO. Aparecerá un nuevo elemento de menú `🔔 Notificaciones`.

## Usar en la interfaz

### módulo de ejemplo

```php
notificación de eco::getNotificationsOutput();
```

### La notificación de clase ``

Escriba `rex_yform_manager_dataset`. Accede a la tabla `rex_notification` con notificaciones.

#### Más métodos

```php
$notification = notificación::get(3); // notificación de id=3

echo $notification->getName();
echo $notification->getDateFrom();
echo $notification->getDateTo();
echo $notification->obtenerTipo();
echo $notification->obtenerEstado();
echo $notification->esVisible();
```

## licencia

CON licencia, ver [LICENCIA.md](https://github.com/alexplusde/notification/blob/master/LICENSE.md)

## autores

**Alexander Walther**  
http://www.alexplus.de  
https://github.com/alexplusde

**Líder de proyecto**  
[Alexander Walther](https://github.com/alexplusde)

## creditos
