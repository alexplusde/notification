<?php
#
$addon = rex_addon::get('notification');

$form = rex_config_form::factory($addon->name);

$field = $form->addInputField('text', 'editor', null, ["class" => "form-control"]);
$field->setLabel(rex_i18n::msg('notification_config_editor_label'));
$field->setNotice(rex_i18n::msg('notification_config_editor_notice'));

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('notification_config'), false);
$fragment->setVar('body', $form->get(), false);
echo $fragment->parse('core/page/section.php');
