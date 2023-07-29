<?php

namespace app\modules\backend;

class BackendModule extends \yii\base\Module
{
    public $controllerNamespace = 'app\controllers\backend';

    public function init()
    {
        parent::init();
        $this->viewPath = '@app/views/backend';
    }
}