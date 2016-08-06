<?php

/*
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\actions;

use hiqdev\yii2\language\Module;
use Yii;

/**
 * Select language action.
 *
 * @property Module $module The module to be used, can be found by default.
 */
class SelectAction extends \yii\base\Action
{
    /**
     * @var Module the module to be used.
     */
    public $_module;

    public function run($language)
    {
        $this->getModule()->setLanguage($language);

        $url = Yii::$app->request->referrer;
        if ($url === null) {
            $url = Yii::$app->getHomeUrl();
        }

        return Yii::$app->response->redirect($url);
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
