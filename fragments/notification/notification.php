<?php
$notification = $this->getVar("notification");
?>
<div class="alert alert-<?= $notification->getType() ?? "info" ?> alert-<?= $notification->getDismiss() ? "dismissable" : "" ?> fade show"
	role="alert">
	<strong><?= $notification->getName() ?></strong><br />
	<?= $notification->getMessage() ?>
	<?php if ($notification->getDismiss()) { ?>}
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	<?php } ?>
</div>