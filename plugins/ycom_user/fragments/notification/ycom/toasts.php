<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
	<div style="position: absolute; top: 0; right: 0;">
		<?php
$notifications = $this->getVar("notifications");

		foreach ($notifications as $notification) {
		    $this->setVar("notification", $notification);
		    $this->subfragment('notification/toast.php');
		}
		?>
	</div>
</div>