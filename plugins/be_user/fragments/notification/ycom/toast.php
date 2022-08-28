<?php
$notification = $this->getVar("notification");
if ($notification->isVisible()) {
    ?>
<div class="toast toast-<?= $notification->getType() ?? "info" ?>"
	role="alert" aria-live="assertive" aria-atomic="true"
	data-notification-id="<?= $notification->getId() ?>">
	<div class="toast-header">
		<strong class="mr-auto"><?= $notification->getName() ?></strong>
		<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"
			onclick="setNotificationCookie(<?= $notification->getId() ?>, 30)">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		<?= $notification->getMessage() ?>
	</div>
</div>
<?php }
