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
}
