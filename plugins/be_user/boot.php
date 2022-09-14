<?php
if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_notification_be_user',
        notification_be_user::class
    );
}
