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

use codemix\localeurls\UrlManager;
use Yii;

/**
 * Language Menu widget.
 *
 * @property Module $module The module to be used, can be found by default.
 */
class LanguageMenu extends \yii\base\Widget
{
    use \hiqdev\yii2\language\GetModuleTrait;

    public function getLanguages()
    {
        return $this->getModule()->languages;
    }

    public function getLanguage()
    {
        return Yii::$app->language;
    }

    public function run()
    {
        return $this->render('LanguageMenu', [
            'language'  => $this->getLanguage(),
            'languages' => $this->getLanguages(),
            'selectUrl' => $this->getSelectUrl(),
        ]);
    }

    public function getSelectUrl()
    {
        if (Yii::$app->urlManager instanceof UrlManager) {
            $route = Yii::$app->controller->route;
            $params = Yii::$app->request->get();
            array_unshift($params, '/' . $route);

            return $params;
        }

        return ['/' . $this->getModule()->id . '/language/select'];
    }
}
