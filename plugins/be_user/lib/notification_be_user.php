<?php
class notification_be_user extends \rex_yform_manager_dataset
{
    public static function getNotificationByBeUserId($id)
    {
        notification::query()->where("status", "1")->find();
    }
    public function getRead()
    {
        return $this->getValue('read');
    }
    public static function isRead($notification_id, $be_user_id)
    {
    }
    /*
    # https://github.com/yakamara/redaxo_yform/blob/master/docs/04_yorm.md#yorm-mit-eigener-model-class-verwenden
    public function getName() :string
    {
        return $this->getValue('name');
    }
    public function getDateFrom() :string
    {
        return $this->getValue('date_from');
    }
    public function getDateTo() :string
    {
        return $this->getValue('date_to');
    }
    public function getMessage() :string
    {
        return $this->getValue('message');
    }
    public function getStatus() :string
    {
        return $this->getValue('status');
    }
    public function getCreateDate() :string
    {
        return $this->getValue('createdate');
    }
    public function getDismiss() :string
    {
        return $this->getValue('dismiss');
    }
    public function getType() :string
    {
        return $this->getValue('type');
    }

    public function isVisible() :bool
    {
        if ($this->getStatus() == 0) {
            return false;
        }

        $now = new DateTime();
        $from = new DateTime($this->getDateFrom());
        $to = new DateTime($this->getDateTo());
        if ($from > $now || $to < $now) {
            return false;
        }
        if ($this->getDismiss() == 1 && false !== strpos(rex_cookie("notification_dismissed"), "|".$this->getId()."|")) {
            return false;
        }
        return true;
    }
    */
    
    public static function getCurrentNotifications()
    {
        return notification::query()->where("status", "1")->find();
    }

    public function getNotificationOutput()
    {
        $output = new rex_fragment();
        $output->setVar("notification", $this);
        return $output->parse('notification/notification.php');
    }
    public function getToastOutput()
    {
        $output = new rex_fragment();
        $output->setVar("notification", $this);
        return $output->parse('notification/toast.php');
    }

    public static function getNotificationsOutput()
    {
        $output = new rex_fragment();
        $output->setVar("notifications", self::getCurrentNotifications());
        return $output->parse('notification/notifications.php');
    }
    public static function getToastsOutput()
    {
        $output = new rex_fragment();
        $output->setVar("notifications", self::getCurrentNotifications());
        return $output->parse('notification/toasts.php');
    }
}
