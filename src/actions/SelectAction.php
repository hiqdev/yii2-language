<?php

namespace hiqdev\yii2\language\actions;

use hiqdev\yii2\language\Module;

class SelectAction extends \yii\base\Action
{
    /**
     * @var Module $module
     */
    public $module;

    public function run($language)
    {
        $this->module->setLanguage($language);

        $url = Yii::$app->request->referrer;
        if ($url === null) {
            $url = Yii::$app->getHomeUrl();
        }
        return Yii::$app->response->redirect($url);
    }
}
