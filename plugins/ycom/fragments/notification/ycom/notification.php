<?php
$notification = $this->getVar("notification");

if ($notification->isVisible()) {
    ?>
<div class="alert alert-<?= $notification->getType() ?? "info" ?> alert-<?= ($notification->getDismiss() == 1) ? "dismissable" : "" ?>"
	role="alert"
	data-notification-id="<?= $notification->getId() ?>">
	<strong><?= $notification->getName() ?></strong><br />
	<?= $notification->getMessage() ?>
	<?php if ($notification->getDismiss() == 1) { ?>
	<button
		onclick="setNotificationCookie(<?= $notification->getId() ?>, 30)"
		type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
	<?php } ?>
</div>
<?php }
