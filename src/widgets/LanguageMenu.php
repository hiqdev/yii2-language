<?php

namespace hiqdev\yii2\language\widgets;

use hiqdev\yii2\language\Module;
use Yii;
use yii\helpers\Json;
use yii\helpers\Url;

/**
 * Language Menu widget.
 */
class LanguageMenu extends \yii\base\Widget
{
    /**
     * @var Module $module
     */
    public $_module;

    public function run()
    {
        return $this->render('LanguageMenu', [
            'language'  => Yii::$app->language,
            'languages' => $this->getModule()->languages,
            'selectUrl' => '/language/language/select',
        ]);
    }

    public function getModule()
    {
        if ($this->_module === null) {
            $this->_module = Module::getInstance();
        }

        return $this->_module;
    }

    public function setModule(Module $value)
    {
        $this->_module = $value;
    }
}

