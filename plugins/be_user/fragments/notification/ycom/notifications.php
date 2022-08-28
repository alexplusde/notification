<?php
$notifications = $this->getVar("notifications");

foreach ($notifications as $notification) {
    $this->setVar("notification", $notification);
    $this->subfragment('notification/notification.php');
}
