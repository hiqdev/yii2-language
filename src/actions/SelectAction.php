<?php

namespace hiqdev\yii2\language\actions;

use hiqdev\yii2\language\Module;
use Yii;

/**
 * Select language action.
 *
 * @var Module $module
 */
class SelectAction extends \yii\base\Action
{
    /**
     * @var Module $_module
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
