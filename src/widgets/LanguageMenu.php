<?php

/*
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\widgets;

use hiqdev\yii2\language\Module;
use Yii;

/**
 * Language Menu widget.
 *
 * @property Module $module The module to be used, can be found by default.
 */
class LanguageMenu extends \yii\base\Widget
{
    /**
     * @var Module the module to be used.
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
