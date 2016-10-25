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

use Yii;

/**
 * Select language action.
 *
 * @property Module $module The module to be used, can be found by default.
 */
class SelectAction extends \yii\base\Action
{
    use \hiqdev\yii2\language\GetModuleTrait;

    public function run($language)
    {
        $this->getModule()->setLanguage($language);

        $url = Yii::$app->request->referrer;
        if (empty($url) || $url === Yii::$app->request->url) {
            $url = Yii::$app->getHomeUrl();
        }

        return Yii::$app->response->redirect($url);
    }
}
