<?php

namespace hiqdev\yii2\language\widgets;

use hiqdev\yii2\language\Module;
use Yii;
use yii\helpers\Json;
use yii\helpers\Url;

class LanguageMenu extends \yii\base\Widget
{
    /**
     * @var Module $module
     */
    public $module;

    public function run()
    {
        return $this->render('LanguageMenu', [
            'language'  => Yii::$app->language,
            'languages' => $module->languages,
            'selectUrl' => '/language/language/select',
        ]);
    }
}

