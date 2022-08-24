<?php
$notification = $this->getVar("notification");
?>
<div class="alert alert-<?= $notification->getType() ?? "info" ?> alert-<?= $notification->getDismiss() ? "dismissable" : "" ?>"
	role="alert">
	<strong><?= $notification->getName() ?></strong><br />
	<?= $notification->getMessage() ?>
	<?php if ($notification->getDismiss()) { ?>
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
	<?php } ?>
</div>