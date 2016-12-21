<?php
/**
 * Yii2 module for language switching
 *
 * @link      https://github.com/hiqdev/yii2-language
 * @package   yii2-language
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\yii2\language\menus;

use codemix\localeurls\UrlManager;
use Yii;
use yii\helpers\Url;

/**
 * Language Menu.
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

    public function items()
    {
        $url = $this->getSelectUrl();
        $language = $this->getLanguage();
        $items = [];
        foreach ($this->getLanguages() as $code => $lang) {
            $items[$code] = [
                'label'  => $lang,
                'url'    => Url::to(array_merge($url, ['language' => $code])),
                'active' => mb_stristr($language, $code),
            ];
        }

        return $items;
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
