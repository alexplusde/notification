<?php
if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_notification',
        notification::class
    );
}

if (rex::isBackend() && rex_be_controller::getCurrentPage() == "notification/notification/table") {
    rex_extension::register('OUTPUT_FILTER', function (rex_extension_point $ep) {
        $suchmuster = 'class="###notification_editor###"';
        $ersetzen = rex_config::get("notification", "editor");
        $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
    });
}
