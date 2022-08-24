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
<script>
	function setNotificationCookie(cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		var expires = "expires=" + d.toUTCString();
		document.cookie = "notification_dismissed=" + getNotificationCookie() + "|" + cvalue + "|" + "; " + expires;

		document.querySelector('[data-notification-id="' + cvalue + '"]').remove();
	}

	function getNotificationCookie() {
		var name = "notification_dismissed=";
		var ca = document.cookie.split(';');
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
		}
		return "";
	}
</script>
<?php }
