<?php
class notification extends \rex_yform_manager_dataset
{
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

    public function isVisible() :bool
    {
        if ($this->getStatus() == 0) {
            return false;
        }
        $now = date("Y-m-d h:i:s");
        if (date("Y-m-d h:i:s", $this->getDateFrom()) > $now || date("Y-m-d h:i:s", $this->getDateTo()) < $now) {
            return false;
        }
        if (self::get($notification_id)->getDismiss() != 1 && str_contains(rex_cookie("notification"), "|".$notification_id."|")) {
            return false;
        }
        return true;
    }
}
